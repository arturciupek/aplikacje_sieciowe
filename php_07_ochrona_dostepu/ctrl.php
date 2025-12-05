<?php

require_once 'init.php';

// Rozszerzenia:
// Dodanie klasy Router oraz Route, które realizują idee przedstawione poprzednio, ale na wyższym poziomie i obiektowo.
// Po pierwsze rezygnujemy ze struktury 'switch' w kontrolerze głównym i zastępujemy ją tablicą ścieżek przechowywaną
// wewnątrz obiektu routera. Router powstaje w skrypcie init.php i jak inne ważne obekty jest dostępny przez getRouter().

// Odpowiednio nazwane metody routera realizują wszystkie zadania iplementowane uprzednio w funkcji control oraz strukturze 'switch'.

// Oczywiście tym samym znika funkcja 'control' - jest ona prywatną metodą routera.

getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow', 'CalcCtrl', ['pracownik','manager']);
getRouter()->addRoute('calcCompute', 'CalcCtrl', ['pracownik','manager']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['pracownik','manager']);
getRouter()->addRoute('about', 'AboutCtrl');

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';


/*

<?php
require_once 'init.php';
// Rozszerzenia:
// 1. Konfigurację (klasę Config) rozszerzono o dwa nowe pola: 'login_action' oraz 'roles'.
// 'roles' to tablica przechowująca zapisane w sesji role użytkownika (dowolne nazwy)
// 'login_action' to nazwa akcji, do której system ma automatycznie przekierować, kiedy użytkownik nie ma uprawnień (brak podanej roli)

// 2. Rozwiązanie wymaga kożdorazowego podłączania do sesji (session_start) i ładowania ról - robi to skrypt init.php, na samym końcu

// 3. Znacząco rozbudowano skrypt functions.php, gdzie dodano pomocnicze funkcje związane z :
// - pobieraniem parametrów ze wszystkich możliwych źródeł (również sesji i ciasteczek)
//   oraz dodano możliwość wygenerowania komunikatu o błędzie w przypadku braku parametru wymaganego
//
// - sprawdzeniem, czy użytkownik jest w danej roli (posiada dany wpis w tablicy ról)
//
// - dodano funkcję 'control' integrującą wywołanie metody kontrolera ze sprawdzeniem roli,
//   gdy brak wymaganej roli, system automatycznie przekierowuje do akcji zapisanej w polu konfiguracji 'login_action'
//   Znikają zatem jakiekolwiek skrypty sprawdzające, czy ktoś jest zalogowany (jak 'check.php')

// należy zwrócić uwagę jak usprawnia to dotychczasową strukturę i logicznie wiąże wywołanie kontrolera z uprawnieniami
// - nie potrzeba już 'break' po każdym przypadku, ponieważ funkcja 'control' zakończona jest poleceniem 'exit'.
// - akcje publiczne nie wymagają podania roli w funkcji 'control'
// - akcje niepubliczne - wymagające posiadania roli - posiadają tablicę dopuszczonych ról w ostatnim parametrze

getConf()->login_action = 'login'; //określenie akcji logowania - robimy to w tym miejscu, ponieważ tu są zdefiniowane wszystkie akcje

switch ($action) {
	default :
		control('app\\controllers', 'CalcCtrl',	'generateView', ['pracownik','manager']);
	case 'login': 
		control('app\\controllers', 'LoginCtrl', 'doLogin');
	case 'calcCompute' : 
		//zamiast pierwszego parametru można podać null lub '' wtedy zostanie przyjęta domyślna przestrzeń nazw dla kontrolerów
		control(null, 'CalcCtrl',	'process', ['pracownik','manager']);
	case 'logout' : 
		control(null, 'LoginCtrl',	'doLogout', ['pracownik','manager']);
	case 'about' :
		control('app\\controllers', 'AboutCtrl', 'generateView');
}


*/