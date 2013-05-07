<!DOCTYPE html>
<html>
	
	<head>
		<title> Regular Expressions </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$muster = "/und/"; /* die Zeichenkette "und" soll im String vorkommen */
			$in = "Der Hund hat einen Knochen";
			
			if (preg_match($muster, $in)) {
				echo("$muster passt auf '$in' <br/>\n<br/>\n");
			}
			
/* das Zeichen "^" bedeutet, dass ".und" am Anfang des Strings stehen soll, wobei der Punkt für ein beliebiges Zeichen steht, also sowohl für Hund, als auch Mund, kund, ... */
			$muster2 = "/^.und/";
			
			if (preg_match($muster2, $in)) {
				echo("$muster2 passt auf '$in' <br/>\n<br/>\n");
			} else {
				echo("$muster2 passt NICHT auf '$in' <br/>\n<br/>\n");
			}
			
			$muster3 = "/^.er/";			
			
			if (preg_match($muster3, $in)) {
				echo("$muster3 passt auf '$in' <br/>\n<br/>\n");
			} else {
				echo("$muster3 passt NICHT auf '$in' <br/>\n<br/>\n");
			}
			
			
/* Das Dollarzeichen $ bedeutet, dass ".chen" am Ende des Strings stehen soll */
			$muster4 = "/.chen$/";
			
			if (preg_match($muster4, $in)) {
				echo("$muster4 passt auf '$in' <br/>\n<br/>\n");
			} else {
				echo("$muster4 passt NICHT auf '$in' <br/>\n<br/>\n");
			}
			
/* es darf sowohl ein H als auch ein M vorkommen, also MUND, oder HUND, aber nicht Fund, kund, ... */
			$muster5 = "/[HM]und/";
			
			if (preg_match($muster5, $in)) {
				echo("$muster5 passt auf '$in' <br/>\n<br/>\n");
			} else {
				echo("$muster5 passt NICHT auf '$in' <br/>\n<br/>\n");
			}
			
/* hier beideutet das Zeichen "^" dass keines der in eckigen Klammern angegebenen Zeichen vorkommen darf, also z.B. FUND, KUND, aber nicht Hund oder Mund */
			$muster6 = "/[^HM]und/";
			
			if (preg_match($muster6, $in)) {
				echo("$muster6 passt auf '$in' <br/>\n<br/>\n");
			} else {
				echo("$muster6 passt NICHT auf '$in' <br/>\n<br/>\n");
			}
			
/* Alternativen lassen sich mit der Pipe | festlegen, der nächste REGEX passt also auf Jacke oder Hose, aber auch auf Hosenträger, .... */
			$muster7 = "/Jacke|Hose/";
			$in2 = "Ich trage heute Hosenträger";
			
			if (preg_match($muster7, $in2)) {
				echo("$muster7 passt auf '$in2' <br/>\n<br/>\n");
			} else {
				echo("$muster7 passt NICHT auf '$in2' <br/>\n<br/>\n");
			}
			
			$muster8 = "/jpe?g/";
			$in3 = "jpg";
						
			if (preg_match($muster8, $in3)) {
				echo("$muster8 passt auf '$in3' <br/>\n<br/>\n");
			} else {
				echo("$muster8 passt NICHT auf '$in3' <br/>\n<br/>\n");
			}
		?>
	</body>

</html>