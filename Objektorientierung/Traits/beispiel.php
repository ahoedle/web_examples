<!DOCTYPE html>

<html>

<head>
	<title>Trait - Beispiel</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		trait beispieltrait {
			public function eins() {
				echo("eins<br />\n");
			}
			
			public function zwei() {
				echo("zwei<br />\n");
			}
		}
		
		class Beispiel {
			use beispieltrait;
		}
		
		$bsp = new Beispiel();
		$bsp->eins();
		$bsp->zwei();
		echo(PHP_VERSION_ID);
	?>

</body>

</html>