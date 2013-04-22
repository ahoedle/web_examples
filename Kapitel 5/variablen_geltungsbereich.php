<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$vorname = "Lilli";
		
		function gruss() {
			global $vorname; /* wenn man innerhalb einer Funktion auf eine Variable außerhalb zugreifen möchte, braucht man das Schlüsselwort 									"global" */
			echo("Hallo $vorname <br/>\n");
		}
		
		gruss();
		
		/* ALTERNATIV: */
		function gruss2() {
			echo("Hallo {$GLOBALS['vorname']}<br/>\n");
		}
		
		gruss2();
		
	?>

</body>

</html>