<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$satz = "Der Hund hat einen Knochen";
			$ausschnitt = substr($satz, 4, 8);
			
			echo($ausschnitt);
			echo("<br/>\n");
			
			// substr(String, von, bis); 
			// Wenn für "bis" nichts angegeben wird, wird der String bis zum Ende zurückgeliefert
			$gekuerzt = substr($satz, 0, 12);
			echo($gekuerzt);
			echo("<br/>\n");
			
			// hier werden die ersten 13 Zeichen des Strings entfernt
			$ende = substr($satz, -13);
			echo($ende);
			echo("<br/>\n");
			
			// hier werden die letzten 7 Zeichen des Strings entfernt
			$kuerzer = substr($satz, 0, -7);
			echo($kuerzer);
		?>
	</body>

</html>