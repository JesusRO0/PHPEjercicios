<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$servername = "localhost";
$database = "mitienda";
$username = "mismuertos2";
$password = "aa";

// Create connection

//$mitienda = new PDO('mysql:host=localhost;dbname=mitienda', 'mismuertos2', 'aa');
$mitienda = new mysqli($servername, $username, $password, $database);
?>