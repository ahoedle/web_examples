<?php

/*
	Hier werden alle Basisklassen des Systems eingebunden
*/

// Datenbankklasse
//require_once(PROJECT_DOCUMENT_ROOT."/lib/classes/DB/class.MySQL.php");
require_once(PROJECT_DOCUMENT_ROOT."/lib/classes/DB/class.PDO.php");

// HTML-Klasse
require_once(PROJECT_DOCUMENT_ROOT."/lib/classes/HTML/class.HTML.php");

// Logging-Klasse
require_once(PROJECT_DOCUMENT_ROOT."/lib/classes/Logging/class.Logging.php");

/*
// Sicherheitsklasse
require_once(PROJECT_DOCUMENT_ROOT."/lib/classes/Security/class.Security.php");

// Sitzungsklasse
require_once(PROJECT_DOCUMENT_ROOT."/lib/classes/Session/class.SessionHandler.php");


*/

?>