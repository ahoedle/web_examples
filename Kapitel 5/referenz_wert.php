<!DOCTYPE html>

<html>

<head>
	<title>Übergabe per Referenz</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		echo("<h3>Übergabe per Wert</h3>\n");
		
		function veraendern($a) {
			$a++;
		}
		
		$c = 2;
		
		echo("Vor Funktionsaufruf: \$c ist $c <br />\n");
		veraendern($c);
		echo("Nach Funktionsaufruf: \$c ist $c <br />\n");
		
		echo("<h3> Übergabe per Referenz</h3>\n");
		
		function veraendern2(&$a) {
			$a++;
		}
		
		echo("Vor Funktionsaufruf: \$c ist $c <br />\n");
		veraendern2($c);
		echo("Nach Funktionsaufruf: \$c ist $c <br />\n");
	?>

</body>

</html>