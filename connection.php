<?php

date_default_timezone_set("UTC");

$dbtype		= ""; // insert the type of database
$dbhost 	= ""; // host address
$dbname		= ""; // database name
$dbuser		= ""; // user
$dbpass		= ""; // possword

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

?>
