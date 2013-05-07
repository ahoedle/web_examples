<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			class Beispielklasse {
				public function __construct() {
					echo(get_class($this) . " wurde erstellt<br/>\n");
				}
				
				public function __destruct() {
					echo(get_class($this) . " wurde zerstört");
				}
			}
			
			$objekt = new Beispielklasse();
			//unset($objekt); Objekte werden am Ende eines Skripts automatisch zerstört
		?>
	</body>

</html>