<?php

// Tarkistukset ensin
if (!isset($_POST["name"]) or !isset($_POST["datetime"])) {
    $data = array(
        "error" => "Dataa ei saatavilla!"
    );
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
     VALUES (:name, :datetime, :backgroundcolor, :namecolor, :panelcolor, :timerolor);");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":datetime", $datetime);
    $stmt->bindParam(":backgroundColor", $backgroundcolor);
    $stmt->bindParam(":nameColor", $namecolor);
    $stmt->bindParam(":panelColor", $panelcolor);
    $stmt->bindParam(":timerColor", $timercolor);

    if($stmt->execute() == false) {
        echo 'error in saving';
        /*$data = array(
            "error" => "Error in saving!"
        );*/
    }
    else {
        echo "success";
        /*
        $data = array(
            "success" => "Success!"
        );*/
        } 
    }

catch(PDOException $e) {

    echo $e->getMessage();

    /*$data = array(
        "error" => "Sudden error!"
    );*/
}


//header("Content-type: application/json;charset=utf8");
//echo json_encode($data);
