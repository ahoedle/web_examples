
<!DOCTYPE html>

<html>

<head>
<title>HereDoc</title>
<meta charset="UTF-8">
<head>

<body>
<?php
	$vorname = "Amina";
	$alter = 3;
	echo <<<DOC
		<table border="1" cellpadding="5" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>Alter</td>
			</tr>
			<tr>
				<td>$vorname</td>
				<td>$alter</td>
			</tr>
		</table>
DOC;
?>
</body>

</html>