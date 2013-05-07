<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$farben = array("hellblau" => "lightblue",
							"schwarz" => "black",
							"gelb" => "yellow",
							"himmelblau" => "skyblue",
							"rot" => "red"		
			);
			
			echo("<strong>asort() --> values absteigend sortieren</strong>");
			echo("<pre>");
			asort($farben);
			print_r($farben);
			echo("</pre>");
			
			echo("<strong>arsort() --> values aufsteigend sortieren</strong>");			
			echo("<pre>");
			arsort($farben);
			print_r($farben);
			echo("</pre>");
			
			echo("<strong>ksort() --> keys absteigend sortieren</strong>");
			echo("<pre>");
			ksort($farben);
			print_r($farben);
			echo("</pre>");
			
			echo("<strong>krsort() --> keys aufsteigend sortieren</strong>");
			echo("<pre>");
			krsort($farben);
			print_r($farben);
			echo("</pre>");
		?>
	</body>

</html>