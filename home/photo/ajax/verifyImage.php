<?php
    if(!empty($_POST)){
        $action = $_POST["action"];
        $imageId = $_POST["imageId"];

        $verifiedValue = 2;
        if ($action == "accept") {
            $verifiedValue = 1;
        }

        $conn = new PDO("mysql:host=localhost:3306;charset=utf8mb4;dbname=dinoshow", "root" , "root" );
        $query = $conn->prepare("UPDATE showphotos SET verified = :verifiedValue WHERE id = :imageId");    
        $query->bindValue(":verifiedValue", $verifiedValue);
        $query->bindValue(":imageId", $imageId);
        $query->execute();

        $response = [
            'result' => $action . " for imageId " . $imageId,
            'state' => 'Success'
        ];

        header("Content-Type: application/json");
        echo json_encode($response);
    }
?>