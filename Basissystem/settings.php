<?php

/*
	Hier werden benötigte Konstanten des Projekts definiert
*/

// Fehlerreporting
//error_reporting(E_ALL);

// Debug-Modus
define('DEBUG', TRUE);

// LOG-Level
define('LOG_LEVEL', "INFO");

// Datenbankverbindungsdaten
define('DB_SERVER', "localhost");
define('DB_PORT', "8889");
define('DB_NAME', "galileo");
define('DB_USER', "root");
define('DB_PASSWORD', "root");

// HTML-Titel
define('HTML_TITLE', "PHP und MySQL");

date_default_timezone_set('Europe/Berlin');

?>