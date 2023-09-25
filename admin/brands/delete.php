<?php

    $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=php00", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM brands WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    
    header("location:index.php");

?>