<!DOCTYPE html>

<html>

<head>
	<title>Leerzeichen entfernen</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		/* leerzeichen entfernen mit der trim()-Funktion! */
		$nn = " Maier ";
		$vn = "\tBerenice\n ";
		
		echo("<pre>");
			
		echo("Vor trim: <br />\nName: $nn <br />\nVorname: $vn.<br />\n<br />\n");
		
		$nn = trim($nn);	
		$vn = trim($vn);
		
		echo("Nach trim: <br />\nName: $nn <br />\nVorname: $vn.");	
			
		echo("</pre>");
	?>

</body>
</html>