
<?php
	date_default_timezone_set("Europe/Berlin");
	$uhrzeit = date("H");
	
	if ($uhrzeit < 5 || $uhrzeit > 20) {
		$gruss = "Gute Nacht!";
		$hg = "#886CEA";
	} elseif ($uhrzeit < 11) {
		$gruss = "Guten Morgen!";
		$hg = "#66EDF0";
	} elseif ($uhrzeit < 15) {
		$gruss = "Guten Mittag!";
		$hg = "blue";
	} elseif ($uhrzeit < 18) {
		$gruss = "Guten Nachmittag!";
		$hg = "#F09366";
	} else {
		$gruss = "Guten Abend";
	}
	
	echo($gruss);
?>

<!DOCTYPE html>

<html>

<head>
	<title>PHP in HTML einbinden </title>
	<meta charset="UTF-8">
	<style type="text/css">
		body {
			background-color: <?php echo $hg; ?>;
		}
	</style>
<head>

<body>



</body>

</html>