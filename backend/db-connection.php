<?php

// Tietokanta yhteys
$dbserverName = "localhost";
$dbuserName = "root";
$dbpassWord = "";
$dbname = "countdowndb";

try {
    $conn = new PDO("mysql:host=$dbserverName; dbname=$dbname;charset=utf8", $dbuserName, $dbpassWord);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

}