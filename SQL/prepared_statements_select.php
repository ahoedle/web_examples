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
		
		$suche = "%beere%";
		
		if ($stmt = $mysqli->prepare("SELECT name, beschreibung, preis FROM pflanzen WHERE name LIKE ?")) {
			$stmt->bind_param("s", $suche);
			$stmt->execute();
			$stmt->bind_result($name, $beschreibung, $preis);
			
			echo("<table border='1'>\n");
			
			while ($stmt->fetch()) {
				echo("<tr>\n\t<td>" . htmlspecialchars($name) . "</td>\n\t<td>" . htmlspecialchars($beschreibung) . "</td>\n\t<td>" . htmlspecialchars($preis) . "</td>\n</tr>\n");
			}
			
			$stmt->close();
		}
		
		$mysqli->close();
?>

</body>

</html>