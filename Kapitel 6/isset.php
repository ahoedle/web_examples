<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$z = 0;
		$falsch = false;
		
		
		if (isset($z)) { /* die Funktion "isset" prüft, ob eine Variable gesetzt ist */
			echo("Variable ist gesetzt<br />\n");
		}
		
		if (empty($gibtsnicht)) { /* die Funktion "empty" gibt "wahr" zurück, wenn der Wert "false" ergibt */
			echo("das ist zu wenig - <br />\n");
		}
		
		if (empty($z)) {
			echo("von nichts kommt nichts - <br />\n");
		}
		
		if (empty($falsch)) {
			echo("wieder nix");
		}
		
	?>

</body>

</html>