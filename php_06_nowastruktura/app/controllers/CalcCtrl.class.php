<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa

use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $rata; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct() {
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->rata = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->procent = getFromRequest('procent');
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
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano liczby lat');
		}
		if ($this->form->procent == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $kwota, $lata i $procent są liczbami
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				getMessages()->addError('Druga wartość nie jest liczbą');
			}

			if (! is_numeric ( $this->form->procent )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą');
			}
		}

		if (! getMessages()->isError()) {
		
			// sprawdzenie, czy $kwota, $lata i $procent są większe od zera
			if ($this->form->kwota <= 0) {
				getMessages()->addError('Kwota musi być większa od zera!');
			}

			if ($this->form->lata <= 0) {
				getMessages()->addError('Liczba lat musi być większa od zera!');
			}

			if ($this->form->procent <= 0) {
				getMessages()->addError('Oprocentowanie musi być większe od zera!');
			}
		}
		return ! getMessages()->isError();
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
			getMessages()->addInfo('Parametry poprawne.');
	
			//wykonanie operacji
			$miesiecy = $this->form->lata * 12;
			$kwota_z_odsetkami = $this->form->kwota * (1 + ($this->form->procent / 100) * $this->form->lata);
			$this->rata->rata = round($kwota_z_odsetkami / $miesiecy, 2);
			getMessages()->addInfo('Wykonano obliczenia.');

		}

		$this->generateView();
	}

	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
				
		getSmarty()->assign('page_title','Przykład 06');
		getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header','Kalkulator kredytowy');
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->rata);
		
		getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}

