<!DOCTYPE html>

<html>

<head>
	<title>__autoload()</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		/*
			__autoload() wird automatisch aufgerufen, sobald ein Objekt einer Klasse erstellt wird, deren Definition nicht vorhanden ist.
			__autoload() erwartet als Parameter den Namen der Klasse.
			__autoload() wird immer AUßERHALB DER KLASSE definiert!
		*/
		function __autoload($klasse) {
			/*
				require_once(): sollte die Einbindung der angegebenen Datei nicht klappen, wird das Skript abgebrochen
				Außerdem sorgt require_once() dafür, dass die Datei wirklich nur einmal eingebunden wird
			*/
			require_once($klasse . ".php");
		}
		
		$obj = new Beispiel1();
		$obj->info();
		$obj2 = new Beispiel2();
		$obj2->info();
	?>

</body>

</html>