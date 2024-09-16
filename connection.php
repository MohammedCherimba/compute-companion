<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(DIR);
$dotenv->load();

$db_host = "127.0.0.1";
$db_user = getenv('user');
$db_password = getenv('password');
$db_name = getenv('db_name');
mysqli_report(MYSQLI_REPORT_OFF);
$con = @mysqli_connect($db_host, $db_user, $db_password, $db_name);

?>