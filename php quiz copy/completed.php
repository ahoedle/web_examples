<?php 
session_start(); 
	
	if(isset($_SESSION["completed"])) { 
	    if($_SESSION["completed"] == "1") { 
?> 
			<!DOCTYPE html>
			<html>
				
				<head>
					<title>Congratulation</title>
					<meta http-equiv="content-type" content="text/html; charset=UTF-8">
				</head>
				
				<body>
					<h1>CONGRATULATIONS</h1>
				</body>
			
			</html>
<?php 
	    } else { 
	        header("location: index.php"); 
	    } 
	} else { 
	    header("location: index.php"); 
	}
?>