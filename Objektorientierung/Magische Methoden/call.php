<!DOCTYPE html>

<html>

<head>
	<title>__call()</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		class Beispiel {
			public $vorname;
			
			public function halloSagen() {
				echo("Hallo " . $this->vorname);
			}
			
			/*
				__call wird aufgerufen, wenn eine nicht deklarierte Methode eingesetzt wird
				
				Ab PHP-Version 5.3. können auch Aufrufe von unbekannten statischen Methoden abgefangen werden.
				Hierfür gibt es die Methode __callStatic().
			*/
			public function __call($methode, $argumente) {
				echo("Sie haben die Methode '$methode' aufgerufen. Die gibts nicht. <br />\n");
				
				if (!empty($argumente)) {
					echo("Die übergebenen Argumente: ");
					foreach ($argumente as $el) {
						echo($el . " ");
					}
				}
			}
		}
		
		$bsp = new Beispiel();
		echo("<br />\n");
		$bsp->verabschieden("tschüss", "morgen");
	?>

</body>

</html>