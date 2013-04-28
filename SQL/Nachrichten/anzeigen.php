
<!--

	Hier werden alle Nachrichten dargestellt. 
	Jede Nachricht ist außerdem mit einem Link zum LÖSCHEN und BEARBEITEN versehen, die zu den entsprechenden Skripten führen. 
	Außerdem gibt es einen Link, um eine neue Nachricht zu erstellen.
	
-->

<!DOCTYPE html>

<html>

<head>
	<title>News verwalten</title>
	<meta charset="UTF-8">
	<style type="text/css">
		body {
			font-size: 80%;
			font-family: sans-serif;
		}
		
		ul {
			width: 40em;
		}
		
		li {
			margin: 10px;
		}
	</style>
<head>

<body>

	<?php
		require_once("db_verbindung.php");
		
		if ($stmt = $mysqli->prepare("SELECT id, titel, text FROM aktuell")) {
			$stmt->execute();
			$stmt->bind_result($id, $titel, $text);
			
			echo("<ul>\n");
			
			while ($stmt->fetch()) {
				echo("<li><strong>" 
				. htmlspecialchars($titel) 
				. "</strong>: " 
				/*
					<a href='bearbeiten.php?id=1'>bearbeiten</a>
					
					wenn auf den Link geklickt wird, kann in der Datei "bearbeiten.php" über $_GET["id"] auf den übergebenen Wert zugegriffen werden und damit der richtige Datensatz ausgelesen werden.
				*/
				. htmlspecialchars($text) 
				. "| <a href='bearbeiten.php?id="
				. (int)$id
				. "'>bearbeiten</a> "
				. "| <a href='loeschen.php?id="
				. (int)$id
				. "'>löschen</a>"
				. "</li>");
			}
		
			echo("</ul>\n");
			$stmt->close();
		}
		
		$mysqli->close();
	?>
	
	<a href="neu.php">Neue Schlagzeile eintragen</a>

</body>

</html>