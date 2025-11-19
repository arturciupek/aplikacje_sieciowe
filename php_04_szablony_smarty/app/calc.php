<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
// załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
//include _ROOT_PATH.'/app/security/check.php';

// 2. pobranie parametrów
function getParams(&$form){
		$form['kwota'] = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$form['lata'] = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$form['procent'] = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
}

// 3. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs){
		// sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
		if ( ! (isset($form['kwota']) && isset($form['lata']) && isset($form['procent']))) return false;
			//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			//zakładamy, że nie jest to błąd. Po prostu nie wykonamy obliczeń
	
		//parametry przekazanie zatem
		//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
		
		$infos [] = 'Przekazano parametry.';

		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ( $form['kwota'] == "") {
			$msgs [] = 'Nie podano kwoty kredytu';
		}
		if ( $form['lata']== "") {
			$msgs [] = 'Nie podano liczby lat';
		}
		if ( $form['procent'] == "") {
			$msgs [] = 'Nie podano oprocentowania';
		}

		//nie ma sensu walidować dalej gdy brak parametrów
		if (count ( $msgs ) != 0) return false; 
		
		// sprawdzenie, czy $kwota, $lata i $procent są liczbami 
		if (! is_numeric( $form['kwota'] )) {
			$msgs [] = 'Pierwsza wartość nie jest liczbą';
		}
		
		if (! is_numeric( $form['lata'] )) {
			$msgs [] = 'Druga wartość nie jest liczbą';
		}

		if (! is_numeric( $form['procent'] )) {
			$msgs [] = 'Trzecia wartość nie jest liczbą ';
		}

		if (count ( $msgs ) != 0) return false; 
		else return true;

}

// 4. wykonaj zadanie jeśli wszystko w porządku
function process(&$form,&$infos,&$msgs,&$rata) {
		global $rola;

		$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
		//konwersja parametrów
		$form['kwota'] = floatval($form['kwota']);
		$form['lata'] = intval($form['lata']);
		$form['procent'] = floatval($form['procent']);

		//wykonanie operacji
		if ($form['lata'] <= 0) {
			$msgs[] = 'Liczba lat musi być większa od zera!';
			return false;
		}

		if ($form['kwota'] <= 0) {
			$msgs[] = 'Kwota musi być większa od zera!';
			return false;
		}

		if ($form['procent'] <= 0) {
			$msgs[] = 'Oprocentowanie musi być większe od zera!';
			return false;
		}
		
		if ($form['kwota'] > 100000 && $rola == 'pracownik') {
			$msgs[] = 'Brak uprawnień! Kredyt powyżej 100000 zł może obliczyć tylko manager!';
			return false;

		}else{
			$miesiecy = $form['lata'] * 12;
			$kwota_z_odsetkami = $form['kwota'] * (1 + ($form['procent'] / 100) * $form['lata']);
			$rata = round($kwota_z_odsetkami / $miesiecy, 2);
			return true;
		}
	}

	//Esencja kontrolera !!!
	//definicja zmiennych kontrolera
	$form = null;
	$infos = [];
	$msgs =[];
	$rata = null;

	//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
	getParams($form);
	if (validate($form,$infos,$msgs)) {  //gdy brak błędów
			process($form,$infos,$msgs,$rata);
	}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Kalkulator kredytowy');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('rata',$rata);
$smarty->assign('msgs',$msgs);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');