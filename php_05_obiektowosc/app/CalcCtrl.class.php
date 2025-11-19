<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

/** Kontroler kalkulatora
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $rata; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->rata = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->procent ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		if ($this->form->procent == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $kwota, $lata i $procent są liczbami
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Druga wartość nie jest liczbą');
			}

			if (! is_numeric ( $this->form->procent )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą');
			}
		}

		if (! $this->msgs->isError()) {
		
			// sprawdzenie, czy $kwota, $lata i $procent są większe od zera
			if ($this->form->kwota <= 0) {
				$this->msgs->addError('Kwota musi być większa od zera!');
			}

			if ($this->form->lata <= 0) {
				$this->msgs->addError('Liczba lat musi być większa od zera!');
			}

			if ($this->form->procent <= 0) {
				$this->msgs->addError('Oprocentowanie musi być większe od zera!');
			}
		}
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->procent = floatval($this->form->procent);

			$this->msgs->addInfo('Parametry poprawne.');
	
			//wykonanie operacji
			$miesiecy = $this->form->lata * 12;
			$kwota_z_odsetkami = $this->form->kwota * (1 + ($this->form->procent / 100) * $this->form->lata);
			$this->rata->rata = round($kwota_z_odsetkami / $miesiecy, 2);
			$this->msgs->addInfo('Wykonano obliczenia.');

		}

		$this->generateView();
	}

	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Kalkulator kredytowy');
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->rata);
		
		$smarty->display($conf->root_path.'/app/CalcView.tpl');
	}
}

