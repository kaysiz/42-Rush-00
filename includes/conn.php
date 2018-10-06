<?php

$DB_DSN = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = 'rooting';
$DB_NAME = 'rush00';

//connect to the database
try {
    $conn = new PDO("mysql:host=$DB_DSN", $DB_USER, $DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>