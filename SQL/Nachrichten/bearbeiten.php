<?php
	
	/*
		Dieses Skript ist für die Bearbeitung von Nachrichten zuständig.
	*/

	// Komponenten für die absolute URL zur Umleitung definieren
	$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
	$uri = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
	$extra = "anzeigen.php";
	
	if (empty($_POST["titel"])) {
		if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
			// Umleitung auf die Startseite
			header("Location: http://$host$uri/$extra");
		}
		
		?>
		
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
			</style>
		<head>
		
		<body>
		
			<?php
				$id = $_GET["id"];
				
				$mysqli = new mysqli("localhost", "root", "root", "aktuell");
			
				if ($mysqli->connect_error) {
					echo("Fehler bei der Verbindung: " . mysqli_connect_error);
					exit;
				}
				
				if (!$mysqli->set_charset("utf8")) {
					echo("Fehler beim Laden von UTF8 " . $mysqli->error);
				}
				
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
				
				<input type="hidden" name="id" value="<?php echo($id); ?>" />
				<input type="submit" />
		
		</body>
		
		</html>
<?php
	} else {
		$id = (int)$_POST["id"];
		
		$mysqli = new mysqli("localhost", "root", "root", "aktuell");
	
		if ($mysqli->connect_error) {
			echo("Fehler bei der Verbindung: " . mysqli_connect_error);
			exit;
		}
		
		if (!$mysqli->set_charset("utf8")) {
			echo("Fehler beim Laden von UTF8 " . $mysqli->error);
		}
		
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