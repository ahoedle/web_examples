<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$string = "<p>Ein Absatz mit <em>mehrfacher</em> <strong>Betonung</strong></p>";
		
		echo($string);
		echo("\n");
		
		echo(strip_tags($string)); /* alle HTML-Tags werden gelöscht */
		echo("\n");
		
		echo(strip_tags($string, "<p><em>")); /* die Tags <p> und <em> bleiben erhalten */
	?>

</body>

</html>