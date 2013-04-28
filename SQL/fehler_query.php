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
		
		// Fehlerhafte Query
		$ergebnis = $mysqli->query("SELECT name as Pflanzenname beschreibung AS Kurzbeschreibung, preis AS Nettopreis FROM pflanzen WHERE preis < 7;");
		
		if (!$ergebnis) {
			echo("Der folgende Fehler ist aufgetreten: <strong>" . $mysqli->error . ".</strong> <br />\n Die Fehlernummer: " . $mysqli->errno);
		} else {
			echo("hat geklappt");	
			$ergebnis->close();
		}
		
		$mysqli->close();
	?>

</body>

</html>