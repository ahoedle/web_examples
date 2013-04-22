<!DOCTYPE html>

<html>

<head>
<title>Zufallsbilder </title>
<meta charset="UTF-8">
<head>

<body>

<?php
	$bilder = array(
		"claudia_h.jpg",
		"claudia.jpg",
		"jasmine.jpg",
		"wappen.jpg"
	);
	
	$max = count($bilder) - 1;
	$zufallszahl = rand(0, $max);
	
	echo("<img src='$bilder[$zufallszahl]' />");	
?>

</body>

</html>