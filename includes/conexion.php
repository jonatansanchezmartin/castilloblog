<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "castiblog";
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión

session_start();



?>