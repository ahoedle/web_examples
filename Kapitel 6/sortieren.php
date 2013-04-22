<!DOCTYPE html>

<html>

<head>
	<title>Array sortieren</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		echo("<pre>");
		
		$liste = array("Kapern", "Oliven", "Ananas");		
		
		sort($liste); // aufsteigend
		print_r($liste);
		
		rsort($liste); // absteigend
		print_r($liste);
		
		echo("</pre>");
	?>

</body>

</html>