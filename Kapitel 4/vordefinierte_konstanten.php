<!DOCTYPE html>

<html>

<head>
<title>PHP in HTML einbinden </title>
<meta charset="UTF-8">
<head>

<body>
<?php
	echo "PI: ";
	echo(M_PI);
	echo("<br />\n");
	echo("Verwendete PHP-Version: ");
	echo(PHP_VERSION);
	echo("<br />\n");
	echo("Aktuelle Zeile des Skripts: ");
	echo(__LINE__);
	echo("<br />\n");
	echo("Name der Datei: ");
	echo(__FILE__);
	echo("<br />\n");
	echo("Name des Ordners: ");
	echo(__DIR__);
	echo("<br />\n");
?>
</body>

</html>