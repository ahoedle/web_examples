<!DOCTYPE html>
<html>
	
	<head>
		<title>Auswahlliste</title>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<?php
			$themen = array("HTML", "CSS", "JavaScript", "PHP");
		?>
		
		<form action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="GET">
			Ihr Nachname: <br/>
			<input type="text" name="nachname" size="20" maxlength="30" />
			
			<br/>
			Ihre E-Mail-Adresse: <br/>
			<input type="email" name="email" size="50" maxlength="60" />
			
			<br/>
			Ihr Alter: <br/>
			<input type="text" name="alter" size="5" max="10" />
			
			<br/>
			Themen: <br/>
			<select name="thema">
				<?php 
					foreach ($themen as $el) {
						echo("<option value='$el'>$el</option>\n");
					}
				?>
			</select>
			
			<br/>
			<br/>
			<input type="submit" value="Abschicken" />
			<br/>
			<br/>
		</form>
		
		<?php
			if(!empty($_GET["nachname"]) && is_string($_GET["nachname"])) {
				echo("<b>Ihre Eingaben</b> <br/>\n");
				echo("Name: " . htmlspecialchars($_GET["nachname"]) . "<br/>\n");
				
				if (isset($_GET["thema"]) && (in_array($_GET["thema"], $themen))) {
					echo("Das gewählte Thema: {$_GET['thema']} <br/>\n");
				}
				
				if (isset($_GET["email"]) && !(filter_var($email, FILTER_VALIDATE_MAIL))) {
					echo("Ihre E-Mail-Adresse: {$_GET['email']} <br/>\n");
				}
				
				$minage = 0;
				$maxage = 120;
				$options = array(
							"options" => array(
												"min_age"=>$minage,
												"max_age"=>$maxage
											   )
							);

				$alter = filter_input(INPUT_GET, "alter", FILTER_VALIDATE_INT, $options);
				
				if ($alter !== false) {
					echo("Ihr Alter: {$_GET['alter']} <br/>\n");
				}
			}
		?>
		
	</body>

</html>