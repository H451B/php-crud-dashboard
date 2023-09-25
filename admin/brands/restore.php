<?php

    $_getId = $_GET["id"];
    $_is_deleted = 0;

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `brands` SET `is_deleted` = :is_deleted WHERE `id` = :id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':is_deleted', $_is_deleted);
    $result = $stmt->execute();
    
    header("location:trashIndex.php");

?>