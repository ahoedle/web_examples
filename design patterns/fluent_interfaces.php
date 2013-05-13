<?php

class Query {
	protected $table;
	protected $fields = "*";
	protected $clause;
	
	public function from($table) {
		$this->table = $table;
		return $this;
	}
	
	public function select($fields) {
		$this->fields = $fields;
		return $this;
	}
	
	public function where($clause) {
		$this->clause = $clause;
		return $this;
	}
	
	public function asString() {
		$query = "SELECT ";
		
		if (is_array($this->fields)) {
			$query .= implode(',', $this->fields);
		} else {
			$query .= $fields;
		}
		
		$query .= " FROM " . $this->table;
		$query .= " WHERE " . $this->clause;
		
		return $query;
	}
}

$query = new Query();
$query->select(array('id', 'name'))->from('myTable')->where('id=42');

echo($query->asString());

?>