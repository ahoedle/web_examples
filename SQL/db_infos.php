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
		$ergebnis = $mysqli->query("SELECT name as Pflanzenname, beschreibung AS Kurzbeschreibung, preis AS Nettopreis FROM pflanzen WHERE preis < 7;");
		
		if (!$ergebnis) {
			echo("Der folgende Fehler ist aufgetreten: <strong>" . $mysqli->error . ".</strong> <br />\n Die Fehlernummer: " . $mysqli->errno);
		} else {
			$spaltenzahl = $ergebnis->field_count;
			$zeilenzahl = $ergebnis->num_rows;
			$betroffen = $mysqli->affected_rows;
			
			echo("<p>Insgesamt $zeilenzahl Datensätze gefunden</p>\n");
			echo("<p>Spaltenanzahl: $spaltenzahl</p>\n");
			echo("<p>Betroffene Datensätze: $betroffen</p>\n");
			
			echo("<h2>Informationen zu den einzelnen Spalten</h2>\n");
			$infos = $ergebnis->fetch_fields();
			
			foreach ($infos as $inf) {
				echo("<p>Name: " . $inf->name . "<br />\n");
				echo("Urspr. Name: " . $inf->orgname . "<br />\n");
				echo("Tabelle: " . $inf->table . "<br />\n");
				echo("Längste Zeichenkette: " . $inf->max_length . "</p>\n");
			}
			
			$ergebnis->close();
		}
		
		$mysqli->close();
	?>

</body>

</html>