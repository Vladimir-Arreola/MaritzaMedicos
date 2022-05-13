<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hospital";

try {
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "<div align='center'><h1></h1></div>";
    }

catch(PDOException $e)
    {	
        //echo "<div align='center'><h1>: </h1></div> " . $e->getMessage();
    }
?>