<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		/* $muster = "@<p[^>]*>.*</p>@"; */ /* funktioniert nicht 100%ig, da der Quantifizierer * "gefräßig" ist */
		$muster = "@<p[^>]*>(.*)</p>@Us";
		
		$in = "	<p class='example'>Ein Absatz und das geht gleich weiter</p>
				<p>Hier folgt der zweite</p>
				<p>Und ein dritter</p>";
		
		if (preg_match_all($muster, $in, $treffer)) {
			print_r($treffer);
		}
	?>

</body>

</html>