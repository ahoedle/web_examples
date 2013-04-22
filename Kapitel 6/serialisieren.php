<!DOCTYPE html>

<html>

<head>
	<title>Array serialisieren</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$farben = array("hellblau" => "lightblue",
						"schwarz" => "black",
						"gelb" => "yellow",
						"himmelblau" => "skyblue",
						"rot" => "red"
		);
		echo("<b>Ursprüngliches Array</b>: <br />\n");
		echo("<pre>");
		print_r($farben);		
		echo("</pre>");
		
		
		
		$serial = serialize($farben);
		echo("<b>Serialisiertes Array:</b>: <br />\n<br />\n");
		echo($serial . "<br />\n<br />\n");
		
		$arr = unserialize($serial);
		echo("<b>Deserialisiertes Array:</b>: <br />\n");
		echo("<pre>");
		print_r($arr);				
		echo("</pre>");

	?>

</body>

</html>