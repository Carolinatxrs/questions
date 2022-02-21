<?php
session_start();
require '../vendor/autoload.php';

define("URL_BASE", "http://questions");
/*
http://localhost:8080
 http://questions/ 
*/

$app = new \App\Core\App();
