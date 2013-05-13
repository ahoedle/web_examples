<?php

namespace System\Database;

class PDO {

	public $PDO;
	public $preparedStatement;

	public function __construct($dsn, $user, $password) {
		try {
			$this->PDO = new \PDO($dsn, $user, $password);
			//echo("Verbindung hergestellt");
		} catch(PDOException $e) {
			die('<div style="color:red;">' . $e->getMessage() . '</div>');
		}
	}
	
	public function query($sql) {
		//echo("function query <br/>\n");
	
		try {
			// PDO Anfrage durchführen
			if (!$pdoStmt = $this->PDO->query($sql)) {
				return false;
			}
			
			// liegt eine leere Ergebnismenge vor?
			if ($pdoStmt->rowCount() == 0) {
				return  array();
			}
			
			$return = $pdoStmt->fetchAll();
			$pdoStmt->closeCursor();
			return $return;
			
		} catch(PDOException $e) {
			//echo('<div style="color:red;">' . $e->getMessage() . '</div>');
			return false;
		}
	}
	
	public function prepareStatement($statement) {
		//echo("function prepareStatement <br/>\n");
	
		$this->preparedStatement = $this->PDO->prepare($statement);
		
		if ($this->preparedStatement === false) {
			echo('<div style="color:red;">Prepared Statement konnte nicht vorbereitet werden.</div>');
		}
	}
	
	// führt ein zuvor angelegtes prepared statement aus
	public function execute($params=array()) {
		// echo("function execute <br/>\n");
	
		if ($this->preparedStatement == null) {
			return false;
		}
		
		try {
			$this->preparedStatement->execute($params);
			
			if ($this->preparedStatement->columnCount() == 0) {
				return array();
			}
			return $this->preparedStatement->fetchAll();
			
		} catch(PDOException $e) {
			echo('<div style="color:red;">' . $e->getMessage() . '</div>');
			return false;
		}
	}
}

?>