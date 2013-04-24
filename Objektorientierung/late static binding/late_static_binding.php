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
				// statt "self" wird hier nun "static" verwendet, da dieses erst zur Laufzeit durch den Namen der AUFRUFENDEN Klasse ersetzt wird
				static::ausgabe();
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
		$b->test();
	?>

</body>

</html>