<?php

namespace System\Logging;

class Logging {

	private static $logfile;
	private static $logLevel = LOG_LEVEL;
	private static $fileHandle;
	
	private static function max($a, $b) {
		if ($a > $b) {
			return $a;
		}
		return $b;
	}
	
	public function __construct() {
		// Log-Datei für den aktuellen Tag
		self::$logfile = PROJECT_DOCUMENT_ROOT . '/lib/log/' . date('d_m_Y', time()) . 'log.txt';
		//echo(PROJECT_DOCUMENT_ROOT . '/lib/log/' . date('d_m_Y', time()) . 'log.txt');
	}
	
	public function __descruct() {
		// wenn eine Datei geöffnet ist, diese schließen
		if (self::$fileHandle) {
			fclose(self::$fileHandle);
		}
	}
	
	public function __invoke($message, $level="INFO") {
		echo(self::$logLevel);
		if (!self::$fileHandle) {
			self::$fileHandle = @fopen(self::$logfile, 'a+');
		}
		
		if ((self::$logLevel == $level) OR ($level == 'WARN')) {
			$string = strtoupper($level) . '::' . date("d.m.Y H:i:s" . time()) . ' - ' . $message . ' - ' . $_SERVER["SCRIPT_FILENAME"] . "\r\n";
			fwrite(self::$fileHandle, $string);
		}
	}
	
	public static function getLog($count = 4, $level = "INFO") {

		if (!self::$fileHandle) {
			self::$fileHandle = @fopen(self::$logfile, 'a+');
		}		
		
		$entries = file(self::$logfile);
		$entry_count = count($entries);

		for ($i = $entry_count; $i > max(0, $entry_count-$count); $i--) {
			echo($entries[$i-1] . "<br/>\n");
			
			// TODO
		}
	
/*
		for ($i = count($entries); $i > 0; $i++) {
			if ($displayedMessages >= $count) {
				return true;
			}
			
			if (!isset($entries[$i-1])) {
				return true;
			}
			
			if ($level == "INFO") {
				echo($entries[$i-1] . "<br/>\n");
				$displayedMessages++;
			} else if (substr($entries[$i-1], 0, 4) == 'WARN') {
				echo($entries[$i-1] . "<br/>\n");
				$displayedMessages++;				
			}
		}
*/
	}
	
	
	public static function deleteLogFile() {
		if (self::$fileHandle) {
			fclose(self::$fileHandle);
		}
		
		unlink(self::$logfile);		
	}

}

$log = new Logging();

?>