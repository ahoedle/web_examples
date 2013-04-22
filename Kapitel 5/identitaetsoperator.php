<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		$i = "4";
		
		if ($i == 4) { /* wahr, PHP führt einen automatisch Typumwandlung durch */
			var_dump($i);
			echo(" == 4 <br />\n");
		}
		
		if ($i === 4) { /* false, da $i ein String ist und 4 ein Integer */
			var_dump($i);
			echo(" === 4<br />\n");
		} elseif ($i !== 4) {
			var_dump($i);
			echo(" !== 4<br />\n");
		}
	?>

</body>

</html>