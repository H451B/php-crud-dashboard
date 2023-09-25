<?php
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    //echo $_POST['title'];
    $webroot ="http://localhost/Hasib/crud/";

    $_name = $_POST['name'];
    $_user_name = $_POST['user_name'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_hashed_password = password_hash($_password, PASSWORD_DEFAULT);
    $_phone = $_POST['phone'];
    $_created_at = date("Y-m-d H:i:s", time());  
 
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $query = "INSERT INTO `users` (`name`, `user_name`, `email`, `password`, `phone`, `created_at`) VALUES (:name, :user_name, :email, :password, :phone, :created_at)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $_name);
    $stmt->bindParam(':user_name', $_user_name);
    $stmt->bindParam(':email', $_email);
    $stmt->bindParam(':password', $_hashed_password);
    $stmt->bindParam(':phone', $_phone);
    $stmt->bindParam(':created_at', $_created_at);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:".$webroot."front/php/public/login.php");
?>