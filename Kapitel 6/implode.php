<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$liste = array("Oliven", "Kapern", "Ananas");
		
		$str = implode(" und ", $liste);
		
		echo($str);
	?>

</body>

</html>