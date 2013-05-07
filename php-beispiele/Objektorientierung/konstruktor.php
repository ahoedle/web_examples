<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			class Kunde {
				public $name;
				public function __construct($name) {
					$this->name = $name;
				}
				
				public function halloSagen() {
					echo("Hallo " . $this->name);
				}
			}
			
			$neuerKunde = new Kunde("Anja");
			$neuerKunde->halloSagen();
		?>
	</body>

</html>