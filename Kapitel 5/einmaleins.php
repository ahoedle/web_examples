<!DOCTYPE html>

<html>

<head>
	<title>Ein Mal Eins</title>
	<meta charset="UTF-8">
	<style type="text/css">
		body {
			background-color: #FFFFCC;
		}
	</style>
<head>

<body>

	<?php
		echo("<table border='1'>");
		
		for ($row = 1; $row <= 10; $row++) {
			echo("<tr>");
			for ($col = 1; $col <= 10; $col++) {
				$k = $row * $col;
				if ($col == 1 || $row == 1) {
					echo("<td><b>$k</b></td>");
				} else {
					echo("<td>$k</td>");
				}
			}
			echo("</tr>");
		}
	?>

</body>

</html>