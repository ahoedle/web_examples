<?php

	// Komponenten für die absolute URL zur Umleitung definieren
	$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
	$uri = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
	$extra = "anzeigen.php";
	
	// wenn $_GET["id"] nicht gesetzt oder nicht numerisch ist, wurde das Löschen-Skript direkt aufgerufen oder die URL wurde manipuliert, deshalb erfolgt eine direkte Umleitung auf die anzeigen.php-Seite.
	if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
		header("Location: http://$host$uri/$extra");
	}
	
	/*
		LÖSCHVORGANG über prepared-statements
	*/
	$id = $_GET["id"];
	
	$mysqli = new mysqli("localhost", "root", "root", "aktuell");
		
	if ($mysqli->connect_error) {
		echo("Fehler bei der Verbindung: " . mysqli_connect_error);
		exit;
	}
	
	if (!$mysqli->set_charset("utf8")) {
		echo("Fehler beim Laden von UTF8 " . $mysqli->error);
	}
	
	if ($stmt = $mysqli->prepare("DELETE FROM aktuell WHERE id=?")) {
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->close();
		$mysqli->close();
		header("Location: http://$host$uri/$extra");	
	}

?>