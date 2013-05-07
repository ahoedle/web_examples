<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			echo("<br/>\n");
			
			$satz = "Der Hund hat einen Knochen.";
			$suche = "Der";
			
			$pos = strpos($satz, $suche);
			
/*
Hier muss === verwendet werden, da der gesuchte String sich an Position 0 befindet und 0 in den Booleschen Wert "false" konvertiert wird.
*/
			if ($pos === false) {
				echo("$suche ist nicht in $satz");
			} else {
				echo("$suche befindet sich an Position $pos in '$satz'");
			}
		?>
	</body>

</html>