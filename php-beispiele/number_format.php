<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$erg = 12345.678;
			/* 
			number_format(Zahl, Anzahl Dezimalstellen, Trennzeichen für Dezimalstellen, Tausendertrennzeichen 
			*/
			echo(number_format($erg, 2, ",", "."));
		?>
	</body>

</html>