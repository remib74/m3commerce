<?php
$nomdusite = "m3commerce";
$siteAdEmail = "remib.74@free.fr";

            
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=m3bdd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
    $sqlprod = "SELECT * FROM m3_prod ORDER BY rubrique"; 

    