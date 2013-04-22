<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
	
		$i = 6;
	
		$fazit = ($i % 2 == 0) ? "gerade" : "ungerade";
	
		echo("Das Ergebnis ist: $fazit <br /><br />");
		
		/* ist dasselbe wie: */
		if ($i % 2 == 0) {
			$fazit = "gerade";
		} else {
			$fazit = "ungerade";
		}
		
		echo("Das Ergebnis ist: $fazit <br /><br />");
	?>

</body>

</html>