<?php
/**
 * gunakan mysqli_connect untuk membuat koneksi ke database
 */

$databaseHost = 'localhost';
$databaseName = 'crud_basic';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>