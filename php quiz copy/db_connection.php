<?php

class Test {
	public $mysqli;
	public $question;
	public $answer1;
	public $answer2;
	public $answer3;
	public $answer4;
	public $right_answer;
	public $num;
	
	public function get_test($category = 'Modul 1') {

		$mysqli = new mysqli("localhost", "root", "root", "quiz");
			
		if ($mysqli->connect_error) {
			echo("Fehler bei der Verbindung: " . mysqli_connect_error);
			exit;
		}
		
		if (!$mysqli->set_charset("utf8")) {
			echo("Fehler beim Laden von UTF8 " . $mysqli->error);
		}

		if ($stmt = $mysqli->prepare("SELECT question, answer1, answer2, answer3, answer4, right_answer FROM questions WHERE category LIKE ?")) {

			$stmt->bind_param("s", $category);
			$stmt->execute();
			
			$stmt->bind_result($q, $a1, $a2, $a3, $a4, $ra);
			
			$i = 0;
			
			$stmt->store_result();
			$this->num = $stmt->num_rows();
			
			while ($stmt->fetch()) {
				
				$this->question[$i] = $q;
				$this->answer1[$i] = $a1;
				$this->answer2[$i] = $a2;
				$this->answer3[$i] = $a3;
				$this->answer4[$i] = $a4;
				$this->right_answer[$i] = $ra;
				
				$i++;
			}
			
			$stmt->close();
		}
		
		$mysqli->close();		
	}
}

?>