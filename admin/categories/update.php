<?php

// print_r($_POST);
// print_r($_FILES);
// die();

    $_getId = $_POST['id'];
    $_title = $_POST['title'];
    if(array_key_exists('is_active',$_POST)){
        $_is_active = $_POST['is_active'];
    }else{
        $_is_active = 0;
    }

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    $approot = $_SERVER['DOCUMENT_ROOT']."/php-crud-dashboard/";

    // Working with image file
    if($_FILES['picture']['name'] !== ""){
        $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        
        $destination = $approot.'uploads/categories/'.$file_name;
        
        $is_file_moved = move_uploaded_file($target, $destination);
        
        if($is_file_moved){
            $_picture = $file_name;
        }else{
            $_picture = null;    
        }
    }else {
        $_picture = $_POST["old_picture"];
    }


    $conn = new PDO("mysql:host=$servername;dbname=php00", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `categories` SET 
    `title` = :title,
    `picture` = :picture,
    `is_active` = :is_active,
    `updated_at` = NOW()
    WHERE `id` = :id ";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':title', $_title);
    $stmt->bindParam(':picture', $_picture);
    $stmt->bindParam(':is_active', $_is_active);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
