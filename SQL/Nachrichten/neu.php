<?php

	/*
		Dieses Skript zeigt ein Formular zur Eingaben von neuen Nachrichten an.
	*/
	
	require_once("db_verbindung.php");
	
	/*
		nachdem eine Nachricht eingetragen wurde, soll automatisch wieder auf die anzeigen.php-Seite umgeleitet werden.
		Deshalb muss hier die absolute URL zusammengestellt werden
	*/
	$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
	$uri = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
	$extra = "anzeigen.php";
	
	/*
		wenn $_POST["titel"] leer oder nicht gesetzt ist, wird eine HTML-Seite inklusive Formular ausgegeben.
	*/
	if (empty($_POST["titel"])) {
?>
		<!DOCTYPE html>
		
		<html>
		
		<head>
			<title>News eingeben</title>
			<meta charset="UTF-8">
			<style type="text/css">
				body {
					font-size: 80%;
					font-family: sans-serif;
				}
			</style>
		<head>
		
		<body>
			
			<form method="post" action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>">
				
				Titel <br />
				<input type="text" name="titel" maxlength="25" /> <br />
				
				Text <br/>
				<textarea name="text" rows="5" cols="30"> </textarea> <br />
				
				<input type="submit" />
			</form>
			
		</body>
		
		</html>
	
<?php		
	/*
		wenn $_POST["titel"] nicht leer ist, wurde das Formular bereits ausgefüllt und etwas beim Titel eingetragen. In diesem Fall findet die Verarbeitung des Formulars statt.
	*/
	} else {
	
		if ($stmt = $mysqli->prepare("INSERT INTO aktuell (titel, text) VALUES (?, ?)")) {
			$titel = $_POST["titel"];
			$text = $_POST["text"];
			
			$stmt->bind_param("ss", $titel, $text);
			$stmt->execute();
			$stmt->close();
			$mysqli->close();
			
			// Umleitung auf die Startseite
			header("Location: http://$host$uri/$extra");
		}	
	}
?>