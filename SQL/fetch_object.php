<!DOCTYPE html>

<html>

<head>
	<title>Datenbankabfragen ausgeben</title>
	<meta charset="UTF-8">
	
	<!-- setzt die Tabelle auf eine feste Größe -->
	<style type="text/css">
		table {
			width: 800px;
		}
		
		.gerade {
			background-color: #badeff;
		}
	</style>
	
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
		
		/*
			-------------- WELCHE SEITE SOLL ANGEZEIGT WERDEN? --------------
		
			wenn der $_GET-Parameter nicht gesetzt ist oder wenn er nicht numerisch ist, soll die erste Seite angezeigt werden
		
		*/
		if (!isset($_GET["seite"]) || !is_numeric($_GET["seite"])) {
			$_GET["seite"] = 1;
		}
		
		/*
			-------------- WIE VIELE DATENSÄTZE GIBT ES? --------------
		*/
		$temp = $mysqli->query("SELECT COUNT(*) as anzahl FROM pflanzen") or die($mysqli->error);
		$z = $temp->fetch_array();
		// $anzahl enthält nun die Anzahl der gesamten Datensätze
		$anzahl = $z["anzahl"];
		
		$eintraege_pro_seite = 4;
		
		/*
			GET-Werte können recht leicht manipuliert werden.
			
			Deshalb muss überprüft werden, ob der GET-Wert "im Rahmen" ist.
			
			Nachfolgend wird daher die höchstmögliche Anzahl an Seiten ermittelt
		*/
		if ($anzahl % $eintraege_pro_seite == 0) {
			$hoechst = $anzahl / $eintraege_pro_seite;
		} else {
			$hoechst = $anzahl / $eintraege_pro_seite + 1;
		}
		
		/* 
			Wenn der GET-Wert nicht "im Rahmen" liegt oder 0 ist, wird die erste Seite angezeigt.
		*/
		if ($_GET["seite"] > $hoechst || $_GET["seite"] < 1) {
			$_GET["seite"] = 1;
		}
		
		/*
			wichtig, damit die richtigen SQL-Befehle erzeugt werden:
			
			SELECT * FROM pflanzen LIMIT 0, 4;
			SELECT * FROM pflanzen LIMIT 4, 4;
			SELECT * FROM pflanzen LIMIT 8, 4;
			SELECT * FROM pflanzen LIMIT 12, 4;
			...
		*/
		$start = $_GET["seite"] * $eintraege_pro_seite - $eintraege_pro_seite;
		
		// nun kann das SELECT mit den korrekten Werten für LIMIT erstellt werden
		$ergebnis = $mysqli->query("SELECT name, beschreibung, preis FROM pflanzen LIMIT $start, $eintraege_pro_seite ");
		
		/*
			-------------- TABELLE AUSGEBEN --------------
		*/		
		$i = 0;
		echo("<table border='1'>\n");
		
		while ($zeile = $ergebnis->fetch_array()) {
			if ($i % 2 == 0) {
				$class = " class='gerade' ";
			} else {
				$class = "";
			}
		
			echo("<tr $class><td>" . htmlspecialchars($zeile["name"]) . "</td>" . "<td>" . htmlspecialchars($zeile["beschreibung"]) . "</td>" . "<td>" . htmlspecialchars($zeile["preis"]) . "</td>" . "</tr>\n");
			
			$i++;
		}
		
		echo("</table>");
		
		/*
			-------------- LINKS ZUM BLÄTTERN --------------
			
			Die Links sollten in etwa so aussehen:
			
			<a href='/php-beispiele/kap_11/blaettern.php?seite=1'>1</a>
			<a href='/php-beispiele/kap_11/blaettern.php?seite=2'>2</a>
			<a href='/php-beispiele/kap_11/blaettern.php?seite=3'>3</a>
			...
		*/			
		$ausgabe = "";
		
		for ($i=1; $i <= $hoechst; $i++) {
		
			if ($_GET["seite"] == $i) {
				$ausgabe .= " $i ";
			} else {
 				$ausgabe .= " <a href='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "?seite=$i'>$i</a> ";				
			}
		}
		
		echo($ausgabe);
		
		$ergebnis->close();
		$mysqli->close();
	?>

</body>

</html>