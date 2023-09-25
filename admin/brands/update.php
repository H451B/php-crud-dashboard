<?php

    $_getId = $_POST['id'];
    $_title = $_POST['title'];
    $_link = $_POST['link'];
    if(array_key_exists('is_active',$_POST)){
        $_is_active = $_POST['is_active'];
    }else{
        $_is_active = 0;
    }

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=php00", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `brands` SET `title` = :title, `link` = :link, `is_active` = :is_active, `updated_at` = NOW() WHERE `id` = :id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':title', $_title);
    $stmt->bindParam(':link', $_link);
    $stmt->bindParam(':is_active', $_is_active);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
?>