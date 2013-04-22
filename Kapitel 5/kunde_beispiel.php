<!DOCTYPE html>

<html>

<head>
	<title>Klassen</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		class Kunde {
			public $name;
			public function halloSagen() {
				echo("Hallo");
			}
		}
		
		$neuerKunde = new Kunde();
		$neuerKunde->name = "Anja";
		$neuerKunde->halloSagen();
		
		echo(" ");
		echo("$neuerKunde->name");
		
	?>

</body>

</html>