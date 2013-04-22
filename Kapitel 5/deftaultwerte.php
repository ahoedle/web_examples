<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		function brutto($netto, $mwstSatz = 19) {
			return $netto * (100 + $mwstSatz) / 100;
		}
		
		$betrag = 100;
		$bruttowert = brutto($betrag);
		
		echo("$betrag ergibt $bruttowert inkl. MWSt <br/>\n");
		
		$bruttowert2 = brutto($betrag, 7);
		echo("$betrag ergibt $bruttowert2 inkl. MWSt <br/>\n");
	?>

</body>

</html>