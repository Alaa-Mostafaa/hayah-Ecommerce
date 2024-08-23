<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hayah";


// Create connection
$connection = new mysqli($servername, $username, $password,$dbname);

?>