<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		echo("<pre>");
		var_dump(false ?: "Hallo");
		var_dump(true ?: "hallo");
		
		$erg = (5 ?: 4);
		echo($erg);
		echo("</pre>");
	?>

</body>

</html>