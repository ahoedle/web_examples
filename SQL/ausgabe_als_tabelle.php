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
		
		$ergebnis = $mysqli->query("SELECT name, beschreibung, preis FROM pflanzen;");
		
		echo("<table border='1'>\n");
		
		while ($zeile = $ergebnis->fetch_array()) {
			echo("<tr><td>" . htmlspecialchars($zeile["name"]) . "</td>" . "<td>" . htmlspecialchars($zeile["beschreibung"]) . "</td>" . "<td>" . htmlspecialchars($zeile["preis"]) . "</td>" . "</tr>\n");
		}
		
		echo("</table>");
		
		$ergebnis->close();
		$mysqli->close();
	?>

</body>

</html>