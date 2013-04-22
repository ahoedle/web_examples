<!DOCTYPE html>

<html>

<head>
<title>Verschachtelte Arrays</title>
<meta charset="UTF-8">
<head>

<body>

	<?php
		$bilder = array(
			array(
				"pfad" => "jasmine.jpg",
				"alt" => "Jasmine Breitenberger",
				"titel" => "Jasmine tanzt Ballett"
			),
			array(
				"pfad" => "claudia.jpg",
				"alt" => "Claudia Binder",
				"titel" => "Claudia als Kindergartentante"				
			),
			array(
				"pfad" => "claudia_h.jpg",
				"alt" => "Claudia Hamida",
				"titel" => "Claudia setzt sich ein Ziel fürs Wochenende"			
			),
			array(
				"pfad" => "wappen.jpg",
				"alt" => "Wappen",
				"titel" => "Das Wappen von Claudia Binder"			
			)
		);
		
		$max = count($bilder) - 1;
		$zufallszahl = rand(0, $max);
	
		echo("<img src='{$bilder[$zufallszahl]['pfad']}' alt='{$bilder[$zufallszahl]['alt']}' title='{$bilder[$zufallszahl]['titel']}'/>");				
		
	?>

</body>

</html>