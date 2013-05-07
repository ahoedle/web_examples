<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$liste = array(" Kapern ", " Oliven ", " Ananas ");
			
			foreach ($liste as $el) {
				echo("'$el'");
			}
			
			/* die trim()-Funktion wird auf alle Elemente des Arrays angewendet */
			$liste = array_map("trim", $liste);
			
			echo("<br/>\n nach trim <br/>\n");
			
			foreach ($liste as $el) {
				echo("'$el'");
			}
		?>
	</body>

</html>