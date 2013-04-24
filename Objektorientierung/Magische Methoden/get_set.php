<!DOCTYPE html>

<html>

<head>
	<title>__get und __set</title>
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
				__get und __set werden aufgerufen, wenn ein Zugriff auf eine nicht definierte Eigenschaft erfolgt.
				
				__get und __set sind sinnvoll, um seltener benötigte Eigenschaften einer Klasse in einer anderen Datei auszulagern, um diese erst bei Bedarf zu laden.
			*/
			public function __set($eigenschaft, $wert) {
				if ($eigenschaft == "alter") {
					echo("Das Alter ist hier nicht relevant");
				} else {
					echo("Sie wollen die Eigenschaft $eigenschaft setzen, die es nicht gibt.");
				}
			}
			
			public function __get($eigenschaft) {
				echo("Die Eigenschaft '$eigenschaft' gibt es nicht.");
			}
		}
		
		$bsp = new Beispiel();
		$bsp->vorname = "Amina";
		$bsp->halloSagen();
		echo("<br />\n");
		$bsp->alter = 2;
		echo("<br />\n");
		echo($bsp->name);
	?>

</body>

</html>