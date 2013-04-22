<!DOCTYPE html>

<html>

<head>
	<title>Konstruktor</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		class Elternklasse {
			public function __construct() {
				echo("In " . get_class($this));
				echo(": Aufruf des Konstruktors der Elternklasse<br />\n");
			}
		}
		
		class Kindklasse1 extends Elternklasse {
			
		}
		
		class Kindklasse2 extends Elternklasse {
			public function __construct() {
				echo("In " . get_class($this));
				echo(": Aufruf des Konstruktors der Kindklasse<br />\n");
				parent::__construct();
			}
		}
		
		$obj1 = new Elternklasse();
		$obj2 = new Kindklasse1();
		$obj3 = new Kindklasse2();
	?>

</body>

</html>