<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

// 2. pobranie parametrów
function getParams(&$kwota,&$lata,&$procent){
		$kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
}

// 3. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$lata,&$procent,&$messages){
		// sprawdzenie, czy parametry zostały przekazane
		if ( ! (isset($kwota) && isset($lata) && isset($procent))) {
			//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			//zakładamy, że nie jest to błąd. Po prostu nie wykonamy obliczeń
			return false;
		}

		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ( $kwota == "") {
			$messages [] = 'Nie podano kwoty kredytu';
		}
		if ( $lata == "") {
			$messages [] = 'Nie podano liczby lat';
		}
		if ( $procent == "") {
			$messages [] = 'Nie podano oprocentowania';
		}

		//nie ma sensu walidować dalej gdy brak parametrów
		if (count ( $messages ) != 0) return false; 
		
		// sprawdzenie, czy $kwota, $lata i $procent są liczbami 
		if (! is_numeric( $kwota )) {
			$messages [] = 'Pierwsza wartość nie jest liczbą';
		}
		
		if (! is_numeric( $lata )) {
			$messages [] = 'Druga wartość nie jest liczbą';
		}

		if (! is_numeric( $procent )) {
			$messages [] = 'Trzecia wartość nie jest liczbą ';
		}

		if (count ( $messages ) != 0) return false; 
		else return true;

}

// 4. wykonaj zadanie jeśli wszystko w porządku
function process(&$kwota,&$lata,&$procent,&$messages,&$rata) {
		global $rola;
	
		//konwersja parametrów
		$kwota = floatval($kwota);
		$lata = intval($lata);
		$procent = floatval($procent);

		//wykonanie operacji
		if ($lata <= 0) {
			$messages[] = 'Liczba lat musi być większa od zera!';
			return false;
		}

		if ($kwota <= 0) {
			$messages[] = 'Kwota musi być większa od zera!';
			return false;
		}

		if ($procent <= 0) {
			$messages[] = 'Oprocentowanie musi być większe od zera!';
			return false;
		}
		
		if ($kwota > 100000 && $rola == 'pracownik') {
			$messages [] = 'Brak uprawnień! Kredyt powyżej 100000 zł może obliczyć tylko manager!';
			return false;

		}else{
			$miesiecy = $lata * 12;
			$kwota_z_odsetkami = $kwota * (1 + ($procent / 100) * $lata);
			$rata = round($kwota_z_odsetkami / $miesiecy, 2);
			return true;
		}
	}

	//Esencja kontrolera !!!
	//definicja zmiennych kontrolera
	$kwota = null;
	$lata = null;
	$procent = null;
	$rata = null;
	$messages = [];

	//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
	getParams($kwota,$lata,$procent);
	if (validate($kwota,$lata,$procent,$messages)) {  //gdy brak błędów
			process($kwota,$lata,$procent,$messages,$rata);
	}

// 5. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota,$lata,$procent,$rata)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';