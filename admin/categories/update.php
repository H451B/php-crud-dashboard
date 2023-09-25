<?php

    $_getId = $_POST['id'];
    $_name = $_POST['name'];
    $_link = $_POST['link'];

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=crud_pb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `categories` SET `name` = :name, `link` = :link WHERE `id` = :id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':name', $_name);
    $stmt->bindParam(':link', $_link);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
?>