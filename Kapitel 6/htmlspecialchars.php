<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php

		$behauptung2 = "2 < 4 && \"5\" == '5'";
		echo($behauptung2 . "<br />\n<br />\n");	
		
		
		
		$behauptung = "2 < 4 && \"5\" == '5'";
		
		echo(htmlspecialchars($behauptung));
		echo("<br />\n");
		echo(htmlspecialchars($behauptung, ENT_QUOTES));
		echo("<br />\n");
		echo(htmlspecialchars($behauptung, ENT_NOQUOTES));
		echo("<br />\n");
		
		
		
		
		$mit = htmlspecialchars($behauptung);
		$ohne = htmlspecialchars_decode($mit);
		
		echo($ohne);
		echo("<br />\n");
		
		
		
		
		$behauptung3 = "äöü";
		echo(htmlentities($behauptung3));
	?>

</body>

</html>