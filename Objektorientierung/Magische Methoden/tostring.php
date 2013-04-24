<!DOCTYPE html>

<html>

<head>
	<title>__toString()</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		/*
			 __toString(): wenn ein Objekt per "echo" ausgegeben wird, wird die __toString()-Methode aufgerufen 
		*/
		require_once("kunde.php");
		
		class Premiumkunde extends Kunde {
			public $speicherGesamt = 100;
			public $farbSchema;
			
			public function __construct($name, $speicherVerbraucht = 0, $farbSchema = "Sonnenaufgang") {
				$this->name = $name;
				$this->speicherVerbraucht = $speicherVerbraucht;
				$this->farbSchema = $farbSchema;
			}
			
			public function __toString() {
				$string = 	"Instanz von Premiumkunde <br />\n" 
							. "Folgende Eigenschaften sind definiert: <br />\n" 
							. "<ul>\n" 
							. "<li>Name: " . $this->name . "</li>\n"
							. "<li>Speicher verbraucht: " . $this->speicherVerbraucht . "</li>\n"
							. "<li>Farbschema: " . $this->farbSchema . "</li>\n"
							. "</ul>\n";
				return $string;
			}
		}
		
		$pk = new Premiumkunde("Hans-Heinerich");
		echo($pk);
	?>

</body>

</html>