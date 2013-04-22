<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$faktor = 2;
		
		$lambda = function($a) use($faktor) { /* durch "use" wird die Variable "faktor" an die Closure gebunden */
			return $a / $faktor;
		};
		
		$erg1 = $lambda(33);
		
		echo("\$erg1 ist $erg1 <br/>\n");
		
		$faktor = 3; /* obwohl die Variable "faktor" geändert wird, hat das keinen Einfluss auf die Lambda-Funktion */	
		
		$erg2 = $lambda(33);
		
		echo("\$erg2 ist $erg2 <br/>\n");
	?>

</body>

</html>