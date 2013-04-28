<?php
	
	/*
		Dieses Skript ist für die Bearbeitung von Nachrichten zuständig.
		
		Bei der Bearbeitung gibt es zwei voneinander relativ unabhängige Vorgänge:
		
		1 - Wenn das Skript über "anzeigen.php" aufgerufen wurde, wird die ID des Datensatzes übergeben, der bearbeitet werden soll. 
			Jetzt muss Titel und Text zur entsprechenden ID über SELECT ausgelesen und im Formular angezeigt werden
		
		2 - Wird das Formular abgesendet, muss der UPDATE-Vorgang durchgeführt werden und wieder eine Umleitung zu "anzeigen.php" erfolgen.
	*/

	require_once("db_verbindung.php");

	// Komponenten für die absolute URL zur Umleitung definieren
	$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
	$uri = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
	$extra = "anzeigen.php";
	
	/*
		SIEHE 1
	*/
	if (empty($_POST["titel"])) {
		if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
			// Umleitung auf die Startseite
			header("Location: http://$host$uri/$extra");
		}
		
		?>
		
		<!DOCTYPE html>
		
		<html>
		
		<head>
			<title>News verwalten Test</title>
			<meta charset="UTF-8">
			<style type="text/css">
				body {
					font-size: 80%;
					font-family: sans-serif;
				}
			</style>
		<head>
		
		<body>
		
			<?php
				$id = $_GET["id"];
				
				if ($stmt = $mysqli->prepare("SELECT id, titel, text FROM aktuell WHERE id=?")) {
					$stmt->bind_param("i", $id);
					$stmt->execute();
					$stmt->bind_result($id, $titel, $text);
					$stmt->fetch();
					$stmt->close();
					$mysqli->close();
				}
			?>
			
			<form method="post" action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>">
				
				Titel <br />
				<input type="text" name="titel" value="<?php echo(htmlspecialchars($titel)); ?>" /><br />
				
				Text <br />
				<textarea name="text" rows="5" cols="30"><?php echo(htmlspecialchars($text)) ?></textarea><br />
				
				<!-- 	
						Beim ersten Aufruf von "bearbeiten.php" über die "anzeigen.php"-Seite hängt am Dateinamen die id des Datensatzes (siehe Schritt 1)
				
						Wenn das Formular bearbeitet und abgesendet wird, wird es an "bearbeiten.php" gesendet und zwar ohne Parameter (siehe Schritt 2). 
						Damit die id jetzt ausgelesen werden kann, wird sie im Formular in ein verstecktes Feld eingetragen
				-->
				<input type="hidden" name="id" value="<?php echo($id); ?>" />
				<input type="submit" />
		
		</body>
		
		</html>
<?php

	/*
		SIEHE 2
	*/
	} else {
		// die id wird über ein verstecktes Feld übertragen und steht somit in $_POST["id"]
		$id = (int)$_POST["id"];
		
		if ($stmt = $mysqli->prepare("UPDATE aktuell SET titel=?, text=? WHERE id=?")) {
			$titel = $_POST["titel"];
			$text = $_POST["text"];
			
			$stmt->bind_param("ssi", $titel, $text, $id);
			$stmt->execute();
			$stmt->close();
			$mysqli->close();
			
			header("Location: http://$host$uri/$extra");
		}
	}	
?>