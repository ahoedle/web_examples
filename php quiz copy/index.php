<?php
	session_start(); 
	require_once("db_connection.php");
	//require_once("completed.php");

	if (isset($_SESSION["completed"])) { 
		require_once("completed.php");
	    header("location:completed.php"); 
	} 

	$test = new Test();
	$test->get_test("Modul 1"); 

	if(!isset($_SESSION["init"])) { 
	    $_SESSION["num"]= 0; 
	    $_SESSION["init"] = "true";  
	} 

	if(isset($_GET["a"])){ 
			
	    if(intval($test->right_answer[intval($_SESSION["num"])]) == intval($_GET["a"])) { 

	        $_SESSION["num"] += 1; 


			if ($test->num <= intval($_SESSION["num"])) {
				echo("COMPLETED");
				$_SESSION["completed"] = "1"; 
				require_once("completed.php");
	            header("location: completed.php"); 
	            quit();
			}


	        echo("<b>CORRECT</b>!<br/><br/>\n"); 
	        
	    } else { 
	    
	        echo("Oops that wasn't right<br/><br/>\n"); 
	        
	    } 
	} 

?> 

	<!DOCTYPE html> 
	<html> 
	
		<head> 
			<title>Quiz</title> 
			<meta http-equiv="content-type" content="text/html; charset=UTF-8">
			<link href="mainstyle.css" rel="stylesheet" media="screen">
		</head> 
		
		<body>

			<div id="header">
				<h1>QUIZ</h1>
			</div>
			
			<div id="main">
			
				<div id="left">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</div>

				<?php echo("<b>" . $test->question[intval($_SESSION["num"])] . "</b> <br/><br/>\n");?>
			
				<table style="boder:0; width:300px; height:100px;">
					<tr> 
						<td style="background:lightgreen;"><?php echo("<a href='index.php?a=1'>".$test->answer1[intval($_SESSION["num"])]."</a>");?></td> 
					</tr>
					<tr> 				
						<td style="background:lightblue;"><?php echo("<a href='index.php?a=2'>".$test->answer2[intval($_SESSION["num"])]."</a>");?></td> 
					</tr>
					<tr> 
						<td style="background:lightgray;"><?php echo("<a href=\"index.php?a=3\">".$test->answer3[intval($_SESSION["num"])]."</a>");?></td> 
					</tr>
					<tr> 
						<td style="background:yellow;"><?php echo("<a href=\"index.php?a=4\">".$test->answer4[intval($_SESSION["num"])]."</a>");?></td> 
					</tr>
				</table>
			</div>
		
		</body>
		
	</html> 
