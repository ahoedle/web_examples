<!DOCTYPE html>

<html>

<head>
<title>PHP in HTML einbinden </title>
<meta charset="UTF-8">
<head>

<body>
<?php

	$vorname = "Petra";

	echo("Hallo " . "Welt. ");
	echo("<br />Hallo " . $vorname);
	echo("<br /> Guten Morgen " . $vorname . " - gut geschlafen?");
	echo("<br /> Guten Morgen $vorname");
	
	$vorname .= " Nachbaur";

	echo("<br /><br />Hallo " . $vorname);
	echo("<br /> Guten Morgen " . $vorname . " - gut geschlafen?");
	echo("<br /> Guten Morgen $vorname");
	
	$a = "Schmoe";
	$b = 7;
	$c = $b * $a;
	
	echo("<br /><br />$c");
	
?>
</body>

</html>