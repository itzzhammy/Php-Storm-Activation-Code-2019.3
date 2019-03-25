<?php


ob_start(); //openning output buffer on

session_start();
//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR); //directory separator is good because it provide flexibility for servers on different platfroms
//As linux and windows uses forward slash while mac uses backward slash to define the path of directory
//echo __DIR__;
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");
// echo TEMPLATE_BACK;

//Defining database properties for connection
defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME","myecom_db");

//connecting to mysqli
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");

require_once("cart.php");









 ?>
