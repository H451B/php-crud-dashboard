<?php
    //moved to class
    include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/config.php");
    use Hasib\Products;

    $_product = new Products();
    $_product->store();


    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    //echo $_POST['title'];

    // $approot = $_SERVER['DOCUMENT_ROOT']."/crud-pb/";

    // // Working with image file
    // $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
    // $target = $_FILES['picture']['tmp_name'];
    
    // $destination = $approot.'uploads/products/'.$file_name;
    
    // $is_file_moved = move_uploaded_file($target, $destination);
    
    // if($is_file_moved){
    //     $_picture = $file_name;
    // }else{
    //     $_picture = null;    
    // }


    // $_title = $_POST['title'];
    // $_description = $_POST['description'];

    // // Connection to Database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";


    // $conn = new PDO("mysql:host=$servername;dbname=crud_pb", $username, $password);
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // $query = "INSERT INTO `products` (`title`, `description`, `picture`) VALUES (:title, :description, :picture)";
    // $stmt = $conn->prepare($query);
    // $stmt->bindParam(':title', $_title);
    // $stmt->bindParam(':description', $_description);
    // $stmt->bindParam(':picture', $_picture);
    // $result = $stmt->execute();

    // //var_dump($result);
    // header("location:index.php");
?>