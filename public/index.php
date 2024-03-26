<?php

declare(strict_types = 1);

echo "selam";

$servername = "db";
$username = "user";
$password = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=framework", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }