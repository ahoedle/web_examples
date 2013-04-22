<!DOCTYPE html>

<html>

<head>
<title>Variablen ausgeben</title>
<meta charset="UTF-8">
<head>

<body>
<?php
	$name = "Lola";
	$alter = 2;
	$erg = 17 + 4;
	
	echo("<h3>Mit doppelten Anführungszeichen: </h3>");
	echo("$name ist $alter Jahre alt.");
	
	echo("<h3>Mit einfachen Anführungszeichen: </h3>");
	echo('$name ist $alter Jahre alt.<br/>');
	
	echo("<h3>Und noch ein paar Bilder:</h3>");
	echo("<img src=\"wiesen.jpg\" width=\"137\" height=\"103\" alt=\"Landschaft\" />");
	echo("<img src='wiesen.jpg' width='137' height='103' alt='Landschaft' />");
	echo('<img src="wiesen.jpg" width="137" height=103" alt="Landschaft" />');
?>
</body>

</html>