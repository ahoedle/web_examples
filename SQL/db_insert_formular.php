<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		if (empty($_POST["firma"])) {
	?>	
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
				Firma: <br />
				<input type="text" name="firma" /> <br />
				
				Straße: <br />
				<input type="text" name="strasse" /> <br />
				
				PLZ: <br />
				<input type="text" name="plz" /> <br />
				
				Ort: <br />
				<input type="text" name="ort" /> <br />
			
				<input type="submit" name="abgeschickt" />
				
			</form>	
	<?php	
		} else {
			$mysqli = new mysqli("localhost", "root", "root", "garten");
			
			if ($mysqli->connect_error) {
				echo("Fehler bei der Verbindung: " . mysqli_connect_error);
				exit;
			}
			
			if (!$mysqli->set_charset("utf8")) {
				echo("Fehler beim Laden von UTF8 " . $mysqli->error);
			}
			
			$firma = $_POST["firma"];
			$strasse = $_POST["strasse"];
			$plz = $_POST["plz"];
			$ort = $_POST["ort"];
			
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
		}
	?>

</body>

</html>