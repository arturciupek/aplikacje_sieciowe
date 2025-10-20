<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>

<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">

	<label for="id_kwota" style="display:inline-block; width:160px;"> Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
	<br />
	<label for="id_lata" style="display:inline-block; width:160px;"> Ilość lat: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" /><br />
	<br />
	<label for="id_procent" style="display:inline-block; width:160px;"> Oprocentowanie: </label>
	<input id="id_procent" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" /><br />
	<br />
	<input type="submit" value="Oblicz" />
	
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($rata)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata: '.$rata .' zł'; ?>
</div>
<?php } ?>

</body>
</html>