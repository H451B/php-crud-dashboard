<?php
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

    $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM users WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    
    header("location:index.php");

    // echo "<pre>";
    // print_r($products);
    // echo "</pre>";
?>