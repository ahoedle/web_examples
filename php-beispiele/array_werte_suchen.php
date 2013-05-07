<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$farben = array("hellblau" => "lightblue",
							"schwarz" => "black",
							"gelb" => "yellow",
							"himmelblau" => "skyblue",
							"rot" => "red"		
			);
			
			$such = "yellow";
			
			/* in_array() liefert true, wenn ein bestimmter Wert im Array enthalten ist */
			if (in_array($such, $farben)) {
				echo("$such vorhanden. Zugehöriger Schlüssel: ");
				/* array_search liefert den Schlüssel */
				echo(array_search($such, $farben));
			}
		?>
	</body>

</html>