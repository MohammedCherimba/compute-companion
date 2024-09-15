<?php
$db_host = getenv('host');
$db_user = getenv('user');
$db_password = getenv('password');
$db_name = getenv('db_name');
mysqli_report(MYSQLI_REPORT_OFF);
$con = @mysqli_connect($db_host, $db_user, $db_password, $db_name);
?>