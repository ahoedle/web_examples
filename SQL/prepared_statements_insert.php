<!DOCTYPE html>

<html>

<head>
	<title>Prepared Statements</title>
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
		
		$name = "Schmetterlingsstrauch";
		$beschreibung = "schöne Blüten";
		$preis = 6;
		
		// hier wird $stmt ein mysqli_stmt Objekt zugewiesen
		if ($stmt = $mysqli->prepare("INSERT INTO pflanzen (name, beschreibung, preis) VALUES (?, ?, ?)")) {
		
			/*
				über bind_param() werden die Platzhalter mit PHP-Variablen verbunden
				Zuerst muss aber ein Formatierungsstring übergeben werden: ssd steht für string, string, FLießkommazahl
				
				i .. Integer
				d .. Fließkommazahl
				b .. BLOB
				s .. String
				
				über bind_param() können nur Variablen übergeben werden, keine Strings!
			*/
			$stmt->bind_param("ssd", $name, $beschreibung, $preis);
			// hier wird der SQL-Befehl ausgeführt
			$stmt->execute();
			echo("Anzahl der veränderten Datensätze: " . $stmt->affected_rows);
			$stmt->close();
		}
?>

</body>

</html>