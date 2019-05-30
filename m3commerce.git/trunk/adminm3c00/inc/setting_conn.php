<?php

$servername = "localhost";
$username = "root";
$password = "";  
$site_bdd = "m3bdd";

$conn = new PDO("mysql:host=$servername;dbname=$site_bdd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


