<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		function brutto($netto, $mwstSatz) {
			return $netto * (100 + $mwstSatz) / 100;
		}
		
		$betrag = 25;
		$bruttowert = brutto($betrag, 7);
		echo("$betrag ergibt $bruttowert inkl. MWSt <br/>\n");
	?>

</body>

</html>