<?php

header("Content-type: application/json;charset=utf8");

// Tarkistukset ensin
if (!isset($_POST["name"]) or !isset($_POST["datetime"])) {
    $data = array(
        "error" => "Dataa ei saatavilla!"
    );
    echo json_encode($data);
    die();
}

$name = $_POST["name"];
$datetime = $_POST["datetime"];
$backgroundcolor = $_POST["backgroundcolor"];
$namecolor = $_POST["namecolor"];
$panelcolor = $_POST["panelcolor"];
$timercolor = $_POST["timercolor"];

include_once "db-connection.php";

try {

    $stmt = $conn->prepare("INSERT INTO countdown (name, datetime, backgroundcolor, namecolor, panelcolor, timercolor)
     VALUES (:name, :datetime, :backgroundcolor, :namecolor, :panelcolor, :timercolor);");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":datetime", $datetime);
    $stmt->bindParam(":backgroundcolor", $backgroundcolor);
    $stmt->bindParam(":namecolor", $namecolor);
    $stmt->bindParam(":panelcolor", $panelcolor);
    $stmt->bindParam(":timercolor", $timercolor);

    if($stmt->execute() == false) {
        $data = array(
            "error" => "Error in saving!"
        );
    }
    else {        
        $data = array(
            "success" => "Success!"
        );
    } 
}

catch(PDOException $e) {

    $data = array(
        "error" => $e->getMessage()
    );
}


//header("Content-type: application/json;charset=utf8");
echo json_encode($data);
