<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$liste = array("Kapern", "Oliven", "Ananas");
			/* den Variabeln $a, $b und $c werden die Werte aus dem Array zugewiesen */
			list($a, $b, $c) = $liste;
			echo("mit $a, $b und $c ...");
		?>
	</body>

</html>