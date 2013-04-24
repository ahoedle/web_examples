<?php 
	namespace meinprojekt;
?>

<!DOCTYPE html>

<html>

<head>
	<title>Namensräume</title>
	<meta charset="UTF-8">
<head>

<body>

	<?php
	
		class Benutzer {
		
		}
		
		function wastun() {
			echo("getan");
		}

		const zahl = 42;
		wastun();
		$a = new Benutzer();
		echo(" " . zahl);
		
	?>

</body>

</html>