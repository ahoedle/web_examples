<!DOCTYPE html>

<html>

<head>
<title>PHP in HTML einbinden </title>
<meta charset="UTF-8">
<head>

<body>
<?php
	
	/* 	!!!!!!! Arrays erstellen !!!!!!! */
	
	/* 	Variante 1 */
	$antworten = array("nie", "manchmal", "oft", 42);
	
	/* 	Variante 2 */
	/*$weitere_antworten = ["nie", "manchmal", "oft", 42]; /* ab PHP 5.4 !!! */
	
	
	
	/* 	!!!!!!! Einzelne Elemente ausgeben !!!!!!! */
	
	echo($antworten[0]);
	echo("<br \>");
	echo($antworten[1]);
	
	
	/* 	!!!!!!! Elemente anhängen !!!!!!! */
	
	$antworten[] = "aus Prinzip nicht";
	echo("<br \>");
	echo($antworten[4]);
	
	
	/* 	!!!!!!! Informationen über Arrays ausgeben lassen !!!!!!! */
	
	/*
		echo("<br \>");
		echo($antworten); funktioniert nicht! 
	*/
	
	echo("<br \>");
	echo("<br \>");
	foreach ($antworten as $aw) {
		echo("$aw <br />");
	}
	
	echo("<br \>");
	print_r($antworten); /* ausführlich */
	
	echo("<br \>");
	echo("<pre>");
	var_dump($antworten); /* noch ausführlicher mit Datentypen*/
	echo("</pre>");
	
	
	/* 	!!!!!!! Anzahl der Elemente in einem Array !!!!!!! */
	
	$anzahl = count($antworten);
	echo("Anzahl der Elemente: $anzahl");
	
?>
</body>

</html>