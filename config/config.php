<?php
$configDB = array();
$configDB["host"] 		= "localhost";
$configDB["database"]	= "music_database";
$configDB["username"] 	= "root";
$configDB["password"] 	= "";
define("HOST", "localhost");
define("DB_NAME", "music_database");
define("DB_USER", "root");
define("DB_PASS", "");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/Website/");//dia chi website
