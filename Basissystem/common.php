<?php

/*
	common.php wird in jedem direkt ausgeführten PHP-Skript eingebunden.
	Damit wird sichergestellt, dass absolute Pfade gefunden werden und alle Klassen und Funktionen des Basissystems zur Verfügung stehen	
*/

#Projektpfade (Web und lokaler Pfad)
include(__DIR__.'/paths.php');

#Datenbanksettings und weitere systemweite Einstellungen
require_once(PROJECT_DOCUMENT_ROOT.'/settings.php');

#Alle Basisklassen einbinden
require_once(PROJECT_DOCUMENT_ROOT.'/lib/includeAllClasses.php');


/*
#Datenbankobjekte erstellen (wenn nicht bereits erstellt)
if (!isset($GLOBALS['DB'])) {
	// namespace System\Database
	$DB = new System\Database\MySQL(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
}

#globasl verfügbares Session-Objekt
new System\SessionHandler();
*/

?>