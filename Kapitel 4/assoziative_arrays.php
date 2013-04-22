<!DOCTYPE html>

<html>

<head>
<title>PHP in HTML einbinden </title>
<meta charset="UTF-8">
<head>

<body>

	<?php
		$farben = array(
			"rot" => "#FF0000",
			"grün" => "#00FF00",
			"blau" => "#0000FF"	
		);
		
		print_r($farben);
		
		echo("<br /> <br /> <b>Assoziative Arrays mit foreach ausgeben:</b> <br /><br />");
		
		foreach($farben as $key => $value) {
			echo("Key: [$key] --> Value: [$value] <br />");
		}
		
		echo("<br /> <br /> <b>Vordefinierte Assoziative Arrays:</b> <br />");
		
		foreach($_SERVER as $key => $value) {
			echo("Key: [$key] --> Value: [$value] <br />");
		}
		
		echo("<br /> <br /> <b>Vordefinierte Assoziative Arrays in einer Tabelle ausgeben:</b> <br />");
		
		echo "<table border='1'>";
		foreach($_SERVER as $key => $value) {
			echo("<tr>");
			echo("<td>[$key]</td>"); 
			echo("<td>[$value]</td>"); 
			echo("</tr>");
		}
		echo("</table>");
	?>

</body>

</html>