<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'crud_with_login';
$databaseUsername = 'root';
// $databasePassword = '123456';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databaseName); 
// $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
