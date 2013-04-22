<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$umlaute = array("Abend", "Oper", "Öl", "Ärger");
		
		setlocale(LC_ALL, "de_DE@euro", "de_DE", "deu_deu");
		
		sort($umlaute, SORT_LOCALE_STRING);
		//sort($umlaute);
		
		print_r($umlaute);
	?>

</body>

</html>