<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$muster = "/.und/";
			$in = "Der Hund hat einen Knochen im Mund";
			
			if (preg_match_all($muster, $in, $treffer)) {
				echo("$muster passt auf '$in'<br/>\n");
				print_r($treffer);
			}
		?>
	</body>

</html>