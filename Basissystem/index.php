<?php

require_once('common.php');

System\HTML::printHead();
System\HTML::printBody();

// Inhalt der Seite
echo("<h1>Hello world!</h1> \n");

//$db = new System\Database\MySQL(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
/*
$pdo = new System\Database\PDO('mysql:host=' . DB_SERVER . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
$sql = 'SELECT text FROM wikientries WHERE user LIKE :name';
$pdo->prepareStatement($sql);
$params = array('name'=>'%Petra%');
$data = $pdo->execute($params);

foreach($data as $blogEntry) {
	echo($blogEntry["text"] . "<br/>\n<br/>\n");
}
*/

//$log::$logLevel = "INFO";
//System\Logging\Logging::$logLevel = "INFO";
$log("Dies ist eine Warnung", "WARN");
$log("Dies ist einen Information");
//echo("1");
System\Logging\Logging::getLog();
//echo("2");
System\HTML::printFoot();

?>
