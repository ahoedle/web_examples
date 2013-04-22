<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$lambda = function($a) {
			return $a / 2;
		};
		
		$zahlen = array(4, 33, 2);
		
		$ergebnis = array_map($lambda, $zahlen); /* array_map: Bearbeitungsschritte für alle Elemente des Arrays durchführen */
		
		echo("<pre>");
		print_r($ergebnis);
		echo("</pre><br/><br/>");
		
		
		
		/* NOCH KOMPAKTER */
		$zahlen2 = array(4, 33, 2);
		$ergebnis2 = array_map(function($a) {return $a / 2;}, $zahlen2);
		
		echo("<pre>");
		print_r($ergebnis2);
		echo("</pre>");
	?>

</body>

</html>