
<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			printf("%s ist %d Jahre alt. <br/>\n", "Ben", 4);
			
			printf("%d <br/>\n", 2.567); /* printf kann Konvertierungen durchführen */
			
			printf("%03d <br/>\n", 7); 	/* 	durch die 03 wird bestimmt, dass der String mindestens 3 											Zeichen lang ist und als Füllzeichen die 0 benutzt werden 											soll 
										*/
			printf("%.2f <br/>\n", 43.567); /* .2 beschränkt die Ausgabe auf 2 Dezimalstellen */
			
			
			/* 	07 gibt an, dass der String eine Gesamtlänge von 7 Zeichen hat und als Füllzeichen 					die 0 benutzt wird. 
				.2 gibt an, dass 2 Dezimalstellen angezeigt werden.
				f steht für Fließkommazahlen
			*/
			printf("%07.2f <br/>\n", 43.567);
			
			/* 	Sowohl der Formatierungsstring als auch die zu formatierenden Inhalte können über 					Variablen bestimmt werden. 
			*/
			$genau = true;
			$ergebnis = 9.123456;
			
			if ($genau) {
				$format = "%.4f <br/>\n"; // 4 Dezimalstellen
			} else {
				$format = "%.2f <br/>\n"; // 2 Dezimalstellen
			}
			
			printf($format, $ergebnis);
			
			/* Über sprintf() kann der formatierte String in einer Variablen gespeichert werden */
			$formergebnis = sprintf($format, $ergebnis);
			echo($formergebnis);
			
			printf("%03d", 7);
		?>
	</body>

</html>