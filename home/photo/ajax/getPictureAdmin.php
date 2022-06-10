<?php
    if(!empty($_POST)){

        $conn = new PDO("mysql:host=localhost:3306;charset=utf8mb4;dbname=dinoshow", "root" , "root" );
        $query = $conn->prepare("SELECT * FROM `showphotos` WHERE created_at > :lastDate AND verified = 0");
        $query->bindValue(":lastDate", $_POST['lastTime']);
        $query->execute();
        $result = $query->fetchAll();

        $response = [
            'action' => 'Get pictures for admin',
            'state' => 'Success',
            'result' => $result
        ];

        header("Content-Type: application/json");
        echo json_encode($response);
    }
?>