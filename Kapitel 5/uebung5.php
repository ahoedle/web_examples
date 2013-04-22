<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		function print_array($array) {
			echo("<pre>");
			print_r($array);
			echo("</pre>");
		}
		
		$orte = array("Bregenz", "Dornbirn", "Hohenems", "Feldkirch", "Bludenz");
		print_array($orte);
	?>

</body>

</html>