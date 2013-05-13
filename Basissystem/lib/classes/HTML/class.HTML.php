<?php

namespace System;

class HTML {
	
	public static function printHead() {
		header('Content-Type: text/html; charset:UTF-8');
		
		echo("<!DOCTYPE html> \n");
		echo("<html> \n");
			
		echo("<head> \n");
		echo("<title>" . HTML_TITLE . "</title> \n");
		echo("<meta http-equiv='content-type' content='text/html' charset='UTF-8'/>" . "\n");
		echo("</head> \n");
		
		echo('<link rel="stylesheet" type="text/css" href="' . PROJECT_HTTP_ROOT . '/lib/css/default.css"' . "\n");
		
		echo('<script src="' . PROJECT_HTTP_ROOT . '/lib/js/default.js" type="text/javascript"></script>' . "\n");
	} 
	
	public function printBody($css = null) {
		echo("</head> \n\n");
		echo("<body");
		
		if ($css != null) {
			echo(' style="' . $css . '"');
		}
		
		echo("> \n");
	}
	
	public function printFoot() {
		echo("</body> \n");
		echo("</hml> \n");
	}
	
}

?>
