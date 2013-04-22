<!DOCTYPE html>

<html>

<head>
	<title>Formular</title>
	<meta charset="UTF-8">
<head>

<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
	
		<!-- RADIOBUTTONS -->
		<input type="radio" name="anrede" value="Frau" checked="checked" /> Frau
		<input type="radio" name="anrede" value="Herr" /> Herr
		<input type="radio" name="anrede" value="Firma" /> Firma
		
		<br/>
		
		<!-- EINZEILIGES TEXTFELD -->
		Nachname: <br/>
		<input type="text" name="nachname" size="20" maxlength="30" />
		
		<br/>
		
		<!-- AUSWAHLLISTE -->
		Themen: <br/>
		<select name="thema">
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JavaScript">JavaScript</option>
			<option value="PHP">PHP</option>
		</select>
		
		<br/>
		
		<!-- MEHRZEILIGES TEXTFELD -->
		Kommentar: <br/>
		<textarea name="kommentar" rows="3" cols="20"></textarea>
		
		<br/>
		
		<input type="submit" value="Abschicken" />
		
	</form>
	
	<?php
		if (!empty($_GET["nachname"])) { // wenn der Nachname gesetzt und nicht leer ist
			echo("Ihre Eingaben <br />\n");
			
			if (!empty($_GET["anrede"])) {
				echo(htmlspecialchars($_GET["anrede"]));
			}
			
			echo(" " . htmlspecialchars($_GET["nachname"]) . "<br />\n");
			
			if (!empty($_GET["thema"])) {
				echo("Das gewählte Thema: " . htmlspecialchars($_GET["thema"]) . "<br />\n");
			}
			
			/*	
				Standardmäßig werden Zeilenumbrüche, die jemand in einem Textfeld eingegeben hat, nicht wieder ausgegeben. 
				Wenn man das möchte, muss die Funktion nl2br() verwendet werden
			*/	
			if (!empty($_GET["kommentar"])) {
				echo("Ihr Kommentar: " . nl2br(htmlspecialchars($_GET["kommentar"])));
			}
		}

	?>

</body>

</html>