<!DOCTYPE html>

<html>

<head>
	<title>Late static binding</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		class Elternklasse {
			public function test() {
				// self bezieht sich immer auf die Klasse, in der es steht (hier also die Klasse "Elternklasse") und nicht auf die Klasse, von der aus die Methode aufgerufen wurde
				// self wird beim Kompilieren durch den Klassennamen ersetzt, in der es steht
				self::ausgabe();
			}
			
			public static function ausgabe() {
				echo("Elternklasse: Klassenname ist: " . __CLASS__);
			}
		}
		
		class Kindklasse extends Elternklasse {
			public static function ausgabe() {
				echo("Abgeleitete Klasse: Klassenname ist: " . __CLASS__);
			}
		}
		
		$a = new Elternklasse();
		$a->test();
		echo("<br />\n");
		$b = new Kindklasse();
		// auch wenn die Methode test() in der Kindklasse aufgerufen wird erfolgt trotzdem ein Aufruf von Elternklasse::ausgabe()
		$b->test();
	?>

</body>

</html>