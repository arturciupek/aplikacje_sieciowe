<?php
//inicjacja mechanizmu sesji
session_start();

//pobranie roli
$rola = isset($_SESSION['rola']) ? $_SESSION['rola'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($rola) ){
	include _ROOT_PATH.'/app/security/login.php';
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}
//jeśli ok to idź dalej