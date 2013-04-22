<!DOCTYPE html>

<html>

<head>
	<title>Formular</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
		if (isset($_GET["vorname"])) {
			$vorname = htmlspecialchars($_GET["vorname"]);
			$nachname = htmlspecialchars($_GET["nachname"]);
		} else {
			$vorname = "";
			$nachname = "";
		}
	?>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
		
		Ihr Vorname: <br/>
		<input type="text" name="vorname" size="20" maxlength="30" value="<?php echo $vorname; ?>"/>
	
		<br/>
		Ihr Nachname: <br/>
		<input type="text" name="nachname" size="20" maxlength="30" value="<?php echo $nachname; ?>"/>
		
		<br/>
		<input type="submit" value="Abschicken" />
	</form>

</body>

</html>