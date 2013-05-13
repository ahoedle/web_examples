<?php

/*
	In dieser Datei werden Pfade des Projekts, die später für das Einbinden von Ressourcen benötigt werden, automatisch gesetzt
*/

// definieren des Systempfades
define('PROJECT_DOCUMENT_ROOT', __DIR__); // Beispiel: /Applications/MAMP/htdocs/web_examples/Basissystem

// Projektname
$project = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("\\", "/", __DIR__));

// Protokoll der Verbindung (HTTP oder HTTPS)
if (!isset($_SERVER['HTTPS']) OR $_SERVER['HTTPS'] == 'off') {
	$protocol = 'http://';
} else {
	$protocol = 'https://';
}

// PROJECT Pfad (für die Verwendung im Web)
define('PROJECT_HTTP_ROOT', $protocol.$_SERVER['HTTP_HOST'].$project); // Beispiel: http://localhost:8888/web_examples/Basissystem

?>