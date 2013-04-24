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
		$obj1->farbe = "blau";
		
		// hier wird nicht das ganze Objekt kopiert, sondern nur eine Referenz auf obj1
		$obj2 = $obj1;
		// über clone wird das ganze Objekt kopiert, sodass die beiden Objekte sich unabhängig voneinander verändern lassen
		$obj3 = clone $obj1;
	
		echo("<pre>");
			/*
				== überprüft, ob die Eigenschaften identisch sind
			*/
			var_dump($obj1 == $obj2);
			/*
				=== überprüft, ob der Objekt-Handler identisch ist
				--> Verweisen beide auf dasselbe Objekt?	
			*/
			var_dump($obj1 === $obj2);
			var_dump($obj1 == $obj3);
			var_dump($obj1 === $obj3);
		echo("</pre>");	
		
	?>
</body>

</html>