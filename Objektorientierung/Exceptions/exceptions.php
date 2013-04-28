<!DOCTYPE html>

<html>

<head>
	<title>Exceptions</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		function teilen($x) {
			if (!is_numeric($x)) {
				throw new Exception("keine Zahl", 1);
			} elseif ($x == 0) {
				throw new Exception("Teilen durch 0! ", 2);
			} else {
				return 1/$x;
			}
		}
		
		try {
			echo(teilen(4) . "<br />\n");
			echo(teilen("hallo") . "<br />\n");
		} catch (Exception $e) {
			if ($e->getCode() == 2) {
				echo("Falscher Wert: " . $e->getMessage());
			} elseif ($e->getCode() == 1) {
				echo("Falscher Datentyp: " . $e->getMessage());
			}
		} 
	?>

</body>

</html>