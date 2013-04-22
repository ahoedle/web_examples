<!DOCTYPE html>

<html>

<head>
	<title>Checkboxen</title>
	<meta charset="UTF-8">
<head>

<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
		
		Ihr Nachname: <br/>
		<input type="text" name="nachname" size="20" maxlength="30" />
		<br/><br/>
		
		Themen: <br/>
		<input type="checkbox" name="thema[]" value="HTML" /> HTML
		<input type="checkbox" name="thema[]" value="CSS" /> CSS
		<input type="checkbox" name="thema[]" value="JavaScript" /> JavaScript
		<input type="checkbox" name="thema[]" value="PHP" /> PHP
		<br/><br/>
		
		<input type="submit" value="Abschicken" /> 
		<br/><br/>
		
	</form>

	<?php
		if (!empty($_GET["nachname"])) {
			
			echo("<u>Ihre Eingaben:</u> <br />\n<br />\n");
			
			echo("<b>Name:</b> " . htmlspecialchars($_GET["nachname"]) . "<br />\n<br />\n");
			
			if (isset($_GET["thema"]) && is_array($_GET["thema"])) {
				echo("<b>Die gewählten Themen:</b> ");

				$i = 0;
				$count = count($_GET["thema"]);
				
				while ($i < $count) {

					if ($i == $count-1) {
						echo(htmlspecialchars($_GET["thema"][$i]));
					} else {
						echo(htmlspecialchars($_GET["thema"][$i]) . ", ");
					}
					
					$i++;
				}

			}
		}
	?>

</body>

</html>1