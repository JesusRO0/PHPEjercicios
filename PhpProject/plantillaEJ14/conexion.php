<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

/*Conexion con la BBDD*/
$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'mismuertos2', 'aa');
 

?>