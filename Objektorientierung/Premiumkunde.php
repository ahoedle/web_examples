
<?php
	require_once("kunde.php");

	class Premiumkunde extends Kunde {
		public $speicherGesamt = 100;	
		public $farbschema;
		
		public function __construct($name, $speicherVerbraucht = 0, $farbschema = "Sonnenaufgang") {
			$this->name = $name;
			$this->speicherVerbraucht = $speicherVerbraucht;
			$this->farbschema = $farbschema;
		}	
	}
	
	echo("<b>PREMIUM KUNDE:</b><br />\n<br />\n");
	$neuerKunde = new Premiumkunde("Schmo", 200, "Wüstenstimmung");
	$neuerKunde->halloSagen();
	echo("<br />\n Das gewählte Farbschema ist: " . $neuerKunde->farbschema . "<br />\n");
	$neuerKunde->zustandAusgeben();
	$neuerKunde->speichern(20);
	$neuerKunde->zustandAusgeben();
	$neuerKunde->speichern(40);
	$neuerKunde->zustandAusgeben();
?>
