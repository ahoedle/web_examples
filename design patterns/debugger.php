<?php
	define('DEBUG_MODE', 'echo');

	interface Debugger {
		public function debug($message);
	}

	class DebuggerEcho implements Debugger {
		public function debug($message) {
			echo ("$message\n");
		}
	}

	class DebuggerLog implements Debugger {
		public function debug($message) {
			error_log("$message\n", 3, './Test.log');		
		}
	}
	
	class DebuggerVoid implements Debugger {
		public function debug($message) {
			//Alle Meldungen ignorieren.
		}
	}

	class RentalCompany {
		protected $debugger;
		
		public function __construct(Debugger $debugger) {
			$this->debugger = $debugger;
		}
		
		protected function debug($message) {
			$this->debugger->debug($message);
		}
		
		public function testMethod() {
			$this->debug("debugging in test method");
		}
	}
	
	$debugger = new DebuggerEcho();
	$rc = new RentalCompany($debugger);
	$rc->testMethod();
?>