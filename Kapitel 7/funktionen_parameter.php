<!DOCTYPE html>

<html>

<head>
	<title>Bruttorechner</title>
	<meta charset="UTF-8">
<head>

<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
		
		<!-- EINZEILIGES TEXTFELD -->
		Nettowert: <br/>
		<input type="text" name="nettowert" size="5" maxlength="30" />
		
		<br/>
		
		<!-- AUSWAHLLISTE -->
		MWSt.-Satz: <br/>
		<select name="mwst">
			<option value="7">7%</option>
			<option value="15">15%</option>			
			<option value="19">19%</option>
			<option value="20">20%</option>
		</select>
		
		<br/><br/>
		
		<input type="submit" value="Absenden" />
		
	</form>

	<?php
		if (!empty($_GET["nettowert"])) {
			$netto = $_GET["nettowert"];
			$mwst = $_GET["mwst"];
			
			$brutto = $netto + ($netto * $mwst / 100);
			
			echo("<br />\n $netto ergibt $brutto Brutto, bei einer MWST. von $mwst %");
		}
	?>

</body>

</html>