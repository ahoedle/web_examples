
<?php
	require_once("db_connection.php");
	
	session_start(); 
	
	//If we've already finished the quiz then go on to completed.php 
	if(isset($_SESSION["completed"])){ 
	    header("location:completed.php"); 
	} 
	
	/*
	//Loads the classes for the mysql connection and the sql queries 
	require("ms.php"); 
	$conn = new dbconn("quiz"); 
	$quiz = new dbrs("Select * from questions",1);
*/ 
	$test = new Test();
	$test->get_test("Modul 1");

	//If we have so already set default session values then we set them here 
	if(!isset($_SESSION["init"])){ 
	    $_SESSION["num"]=0; 
	    $_SESSION["trys"] = 0; 
	    $_SESSION["init"] = "true"; 
	} 
	
	//Here we get the question number we are on (0 means we are on the first, 1 means we are on the second 
	$questionNumber = intval($_SESSION["num"]); 
	
	//If an answer has been submited then check it 
	if(isset($_GET["a"])){ 
	    $_SESSION["trys"] += 1; 
	    
	    if(intval($test->right_answer[$questionNumber]==intval($_GET["a"])){ 
		    //If it is correct then go to the next question 
	        $_SESSION["num"] += 1; 
	        $questionNumber += 1;
	         
	        //If we have finished the quiz then we can proceed to the completed page 
	        if($test->num <= $questionNumber){ 
	            $_SESSION["completed"]="1"; 
	            header("location: completed.php"); 
	        } 
	
	        echo("Great, you're correct!<br/>"); 
	        
	    } else{ 
	        echo("Oops that wasn't right<br/>"); 
	    } 
	} 
	
	//Now display the page 
?> 

<!DOCTYPE html> 
<html> 

	<head> 
	<title>Quiz</title> 
	</head> 
	
	<body> 
		<!-- The question --> 
		<?php echo($test->question[$questionNumber])?> 
		<!-- The table where we have the options 
		Notice: option one will link to index.php?a=1 option 2 will like to index.php?a=2 ,etc 
		 --> 
		<table style="boder:0; width:300px; height:100px;"><tr> 
		<td style="background:lightgreen;"><?php echo("<a href=\"index.php?a=1\">".$test->answer1[$questionNumber]."</a>")?></td> 
		<td style="background:lightblue;"><?php echo("<a href=\"index.php?a=2\">".$test->answer2[$questionNumber]."</a>")?></td> 
		</tr><tr> 
		<td style="background:lightgray;"><?php echo("<a href=\"index.php?a=3\">".$test->answer3[$questionNumber]."</a>")?></td> 
		<td style="background:yellow;"><?php echo("<a href=\"index.php?a=4\">".$test->answer4[$questionNumber]."</a>")?></td> 
		</tr></table> 
	</body> 
	
</html> 

<?php 
	//Dont forget to close the connection 
	$conn->close(); 
?>