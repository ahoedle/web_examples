<!DOCTYPE html>

<html>

<head>
	<title>SQL Verbindung</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$mysqli = new mysqli("localhost", "root", "root", "garten");
		
		if ($mysqli->connect_error) {
			echo("Fehler bei der Verbindung: " . mysqli_connect_error);
			exit;
		}
		
		if (!$mysqli->set_charset("utf8")) {
			echo("Fehler beim Laden von UTF8 " . $mysqli->error);
		}
		
		echo("Verbindung hat geklappt <br />\n");
		
		$ergebnis = $mysqli->query("SELECT name, beschreibung, preis FROM pflanzen;");
		
		while ($zeile = $ergebnis->fetch_array()) {
			echo("<strong>" . $zeile["name"] . "</strong>: " . $zeile["beschreibung"] . ", Preis: " . $zeile["preis"] . "<br />\n");
		}
		
		$ergebnis->close();
		
		$mysqli->close();
	?>

</body>

</html>