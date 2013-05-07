<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			class BeispielA {
				public function ausgabe() {
					echo("Ausgabe aus Beispiel A");
				}
			}
			
			class BeispielB {
				public $a;
				
				public function __construct() {
					$this->a = new BeispielA();
				}
			}
			
			$b = new BeispielB();
			$b->a->ausgabe();
		?>
	</body>

</html>