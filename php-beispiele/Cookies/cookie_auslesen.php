<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			if (isset($_COOKIE["name"]) && isset($_COOKIE["farbe"])) {
				echo("Cookies wurden gesetzt<br/>\n");
				echo("Name: " . htmlspecialchars($_COOKIE["name"]) . "<br/>\n");
				echo("Farbe: " . htmlspecialchars($_COOKIE["farbe"]) . "<br/>\n");	
			} else {
				echo("keine Cookies gesetzt");
			}
		?>
	</body>

</html>