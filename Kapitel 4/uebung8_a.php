<!DOCTYPE html>

<html>

<head>
<title>PHP in HTML einbinden </title>
<meta charset="UTF-8">
<head>

<body>

	<?php
		$dateien = array(
				"arithmetische_operatoren.php" => "Uebung zu Arithmetischen Operatoren",
				"array_uebung.php" => "Uebung zu Arrays in PHP",
				"assoziative_arrays.php" => "Uebung zu Assoziativen Arrays"
		);
		
		foreach($dateien as $key => $value) {
			echo("<a href='$key'>" .$value ."</a><br/>");
		}
	?>
	
	

</body>

</html>