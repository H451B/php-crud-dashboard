<?php
    
    $_getId = $_POST['id'];
    $_name = $_POST['name'];
    $_user_name = $_POST['user_name'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_phone = $_POST['phone'];
    $_modified_at = date("Y-m-d H:i:s", time());  
    
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `users` SET
     `name` = :name, 
     `user_name` = :user_name, 
     `email` = :email,
     `password` = :password, 
     `phone` = :phone, 
     `modified_at` = :modified_at 
     WHERE `id` = :id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':name', $_name);
    $stmt->bindParam(':user_name', $_user_name);
    $stmt->bindParam(':email', $_email);
    $stmt->bindParam(':password', $_password);
    $stmt->bindParam(':phone', $_phone);
    $stmt->bindParam(':modified_at', $_modified_at);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
?>