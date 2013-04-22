<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$tier = "Maus";
		$erster = $tier[0];
		
		echo("$tier beginnt mit $erster<br />\n");
		
		$tier[0] = "L";
		
		echo("$tier");
		
		if (!isset($tier[4])) {
			echo("<br />\n $tier hat weniger als 5 Buchstaben!");
		}
	?>

</body>

</html>