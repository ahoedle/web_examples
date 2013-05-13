<?php

namespace System\Database;

class MySQL {
	public $MySQLiObj;
	public $lastSQLQuery;
	public $lastSQLStatus;
	
	public function __construct($server, $user, $password, $db, $port="8889") {
		
		$this->MySQLiObj = new \mysqli($server, $user, $password, $db, $port);
	
		if (mysqli_connect_errno()) {
			echo("Keine Verbindung zum MySQL-Server möglich.");
			trigger_error("MySQL-Connection-Error", E_USER_ERROR);
			die();
		}
		
		$this->query("SET NAMES utf8");
		echo("Verbindung aufgebaut");
	}	
	
	public function __destruct() {
		$this->MySQLiObj->close();
	}
	
	public function query($sqlQuery, $resultset=false) {
		
		$this->lastSQLQuery = $sqlQuery;
		//$this->doLog($sqlQuery);
		$result = $this->MySQLiObj->query($sqlQuery);
		
		if ($resultset == true) {
			// das Ergebnis wird als MySQL-Result "plain" zurückgegeben
		
			if ($result == false) {
				// wenn die Abfrage nicht ausgeführt werden konnte
				$this->lastSQLStatus = false;
			} else {
				$this->lastSQLStatus = true;
			}
			return $result;
		}
		
		$return = $this->makeArrayResult($result);
		return $return;
	}
	
	public function lastSQLError() {
		return $this->MySQLiObj->error;
	}
	
	private function makeArrayResult($resultObj) {
		if ($resultObj == false) {
			// es trat ein Fehler auf
			$this->lastSQLStatus = false;
			return false;
		} else if ($resultObj == true) {
			// UPDATE, INSERT, ... (geben keine Ergebnismenge zurück). Es wird nur TRUE zurückgegeben
			$this->lastSQLStatus = true;
		} else if ($resultObj->num_rowss == 0) {
			// kein Ergebnis bei einem SELECT-, SHOW-, DESCRIBE- oder EXPLAIN-Statement
			$this->lastSQLStatus = true;
			return array();
		} else {
			$array = array();
			
			while ($line = $resultObj->fetch_array(MYSQLI_ASSOC)) {
				array_push($array, $line);
			}
			
			$this->lastSQLStatus = true;
			return $array;
		}
	}
}

?>