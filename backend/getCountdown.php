<?php

include_once "db-connection.php";

try {

    $stmt = $conn->prepare("SELECT id, name, datetime, backgroundcolor, namecolor, panelcolor, timercolor FROM countdown");
    
    if($stmt->execute() == false) {
        $data = array(
            "error" => "Sudden error!"
        );
    }

    else {
        //success
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $data = $result;
        }
}

catch (PDOException $e) {
    $data = array(
        "error" => "Error!"
    );
}

header("Content-type: application/json;charset=utf8");
echo json_encode($data);
