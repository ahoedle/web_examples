<!DOCTYPE html>

<html>

<head>
	<title>Referenzen</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		class Beispiel {
			public $farbe;
			public function info() {
				echo("Farbe ist " . $this->farbe . "<br />\n");
			}
		}
		
		$obj1 = new Beispiel();
		
		// hier wird nicht das ganze Objekt kopiert, sondern nur eine Referenz auf obj1
		$obj2 = $obj1;
		
		$obj1->farbe = "blau";
		$obj1->info();
		
		$obj2->info();
		
		$obj1->farbe = "orange";
		$obj2->info();
	?>

</body>

</html>