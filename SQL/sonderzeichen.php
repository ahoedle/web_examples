<!DOCTYPE html>

<html>

<head>
	<title>Sonderzeichen</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
	
		/*
			-------------- VERBINDUNGSAUFBAU --------------
		*/
		$mysqli = new mysqli("localhost", "root", "root", "garten");
		
		if ($mysqli->connect_error) {
			echo("Fehler bei der Verbindung: " . mysqli_connect_error);
			exit;
		}
		
		if (!$mysqli->set_charset("utf8")) {
			echo("Fehler beim Laden von UTF8 " . $mysqli->error);
		}
	
		$firma = "O'Briens Gartenbedarf";
		$strasse = "Holzweg 2";
		$plz = "12345";
		$ort = "Dort";
		
		$firma = $mysqli->real_escape_string($firma);
		$strasse = $mysqli->real_escape_string($strasse);
		$plz = $mysqli->real_escape_string($plz);
		$ort = $mysqli->real_escape_string($ort);
		
		$insert = "INSERT INTO lieferanten(firma, strasse, plz, ort) VALUES ('$firma', '$strasse', '$plz', '$ort')";
		echo($insert);
		
		if ($ergebnis = $mysqli->query($insert)) {
			echo("<br />\n Anzahl der veränderten Datensätze: " . $mysqli->affected_rows);
		} else {
			echo($mysqli->error);
		}
		
		$mysqli->close();
	?>

</body>

</html>