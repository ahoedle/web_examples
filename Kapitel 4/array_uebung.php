<!DOCTYPE html>

<html>

<head>
<title>PHP in HTML einbinden </title>
<meta charset="UTF-8">
<head>

<body>
<?php
	
	$orte = array("Bludenz", "Feldkirch", "Hohenems", "Dornbirn", "Bregenz");
	
	echo("<ul>");
	foreach($orte as $o) {
		echo("<li>$o</li>");
	}
	echo("</ul>");
?>
</body>

</html>