<!DOCTYPE html>
<html>
	
	<head>
		<title> </title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		
			Suchbegriff: <br/>
			<input type="text" name="suche" size="80">
		
			<br/>
			<input type="submit"><br/>
		
		
			<?php
				if (isset($_GET["suche"])) {
					echo("Ihre Suche nach <hr />" . stripcslashes($_GET["suche"]) . "<hr/> hat folgende Ergebnisse ...");
				}
			?>
			
			<p> Lorem ipsum dolor sit amet ... amet. </p>
			
		</form>
	</body>

</html>