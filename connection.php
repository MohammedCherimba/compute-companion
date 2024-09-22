<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); //loads the .env package aloows you to get variables from from env file

$db_host = $_ENV["db_host"];

$db_user = $_ENV["db_user"];
$db_password = $_ENV["db_password"];
$db_name = $_ENV["db_name"]; //databases credentials
mysqli_report(MYSQLI_REPORT_OFF); //hides data base messages from the client
$con = @mysqli_connect($db_host, $db_user, $db_password, $db_name);

?>