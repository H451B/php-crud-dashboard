<?php
    include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/config.php");
    use Hasib\Products;

    $_product = new Products();
    $_product->update();

    // $_getId = $_POST['id'];
    // $_title = $_POST['title'];
    // $_description = $_POST['description'];
    // $_picture = $_FILES['picture'];

    // $approot = $_SERVER['DOCUMENT_ROOT']."/Hasib/crud/";

    // // Working with image file
    // if($_FILES['picture']['name'] !== ""){
    //     $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
    //     $target = $_FILES['picture']['tmp_name'];
        
    //     $destination = $approot.'uploads/products/'.$file_name;
        
    //     $is_file_moved = move_uploaded_file($target, $destination);
        
    //     if($is_file_moved){
    //         $_picture = $file_name;
    //     }else{
    //         $_picture = null;    
    //     }
    // }else {
    //     $_picture = $_POST["old_picture"];
    // }
    
    // // Connection to Database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";


    // $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $query = "UPDATE `products` SET
    //  `title` = :title, 
    //  `description` = :description,
    //  `picture` = :picture 
    //  WHERE `id` = :id ";
    // $stmt = $conn->prepare($query);
    // $stmt->bindParam(':id', $_getId);
    // $stmt->bindParam(':title', $_title);
    // $stmt->bindParam(':description', $_description);
    // $stmt->bindParam(':picture', $_picture);
    // $result = $stmt->execute();

    // //var_dump($result);
    // header("location:index.php");
?>