<?php

$servername = "************";
$username = "***********";
$password = "***********";
$dbname = "*************";

$dsn = 'mysql:host=localhost;dbname=*************';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {

    $conn = new PDO($dsn, $username, $password, $options);

} catch(PDOException $e) {

    $error_message = $e->getMessage();
    echo "<p>Error connecting to database: $error_message </p>";
    exit;

}

?>
