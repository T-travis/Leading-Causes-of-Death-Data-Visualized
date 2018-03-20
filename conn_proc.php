<?php

$servername = "localhost";
$username = "icoolsho_ttacket";
$password = "$!980-35-7774";
$dbname = "icoolsho_ttackett";

$dsn = 'mysql:host=localhost;dbname=icoolsho_ttackett';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {

    $conn = new PDO($dsn, $username, $password, $options);

} catch(PDOException $e) {

    $error_message = $e->getMessage();
    echo "<p>Error connecting to database: $error_message </p>";
    exit;

}

?>
