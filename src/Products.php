<?php

namespace Hasib;
use PDO;

class Products{
    public $id = null;
    public $title = null;

    /*
     * Database Connection
     * Insert 
     */
    public function store(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/Hasib/crud/";

    // Working with image file
    $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
    $target = $_FILES['picture']['tmp_name'];
    
    $destination = $approot.'uploads/products/'.$file_name;
    // echo $target."<br>";
    // echo $destination;
    
    $is_file_moved = move_uploaded_file($target, $destination);
    
    if($is_file_moved){
        $_picture = $file_name;
    }else{
        $_picture = null;    
    }


    $_title = $_POST['title'];
    $_description = $_POST['description'];

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $query = "INSERT INTO `products` (`title`, `description`, `picture`) VALUES (:title, :description, :picture)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $_title);
    $stmt->bindParam(':description', $_description);
    $stmt->bindParam(':picture', $_picture);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
    }

    public function index(){
    include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/vendor/autoload.php");
    // include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/authenticator.php");

    $webroot = "http://localhost/crud/";
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `products`";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    }


    public function show(){
        $webroot = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/Hasib/crud/";
    $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `products` WHERE id = $_getId";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    $products = $stmt->fetch();
    return $products;
    }

    public function edit(){
        $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `products` WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    $products = $stmt->fetch();
    return $products;
    }

    public function update(){
        $_getId = $_POST['id'];
        $_title = $_POST['title'];
        $_description = $_POST['description'];
        $_picture = $_FILES['picture'];
    
        $approot = $_SERVER['DOCUMENT_ROOT']."/Hasib/crud/";
    
        // Working with image file
        if($_FILES['picture']['name'] !== ""){
            $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            
            $destination = $approot.'uploads/products/'.$file_name;
            
            $is_file_moved = move_uploaded_file($target, $destination);
            
            if($is_file_moved){
                $_picture = $file_name;
            }else{
                $_picture = null;    
            }
        }else {
            $_picture = $_POST["old_picture"];
        }
        
        // Connection to Database
        $servername = "localhost";
        $username = "root";
        $password = "";
    
    
        $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $query = "UPDATE `products` SET
         `title` = :title, 
         `description` = :description,
         `picture` = :picture 
         WHERE `id` = :id ";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_getId);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':description', $_description);
        $stmt->bindParam(':picture', $_picture);
        $result = $stmt->execute();
    
        //var_dump($result);
        header("location:index.php");
    }

    public function delete(){
        $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM products WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    
    header("location:index.php");
    }

}

?>