<?php

namespace Hasib;
use PDO;

class Banner{
   public $id = null;
   public $title = null;
   public $promotional_message = null;


   public function store(){
    $_title = $_POST['title'];
    // $_picture = $_POST['picture'];
    $_link = $_POST['link'];
    $_promotional_message = $_POST['promotional_message'];
    $_htmlbanner = $_POST['html_banner'];
    $_is_active = $_POST['is_active'];

    if(array_key_exists('is_active',$_POST)){
        $_is_active = $_POST['is_active'];
    }else{
        $_is_active = 0;
    }

    $approot = $_SERVER['DOCUMENT_ROOT']."/Hasib/crud/";

    // Working with image file
    $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
    $target = $_FILES['picture']['tmp_name'];
    
    // Distination uploaded file location
    $destination = $approot.'uploads/banner/'.$file_name;
    echo $destination;

    $is_file_moved = move_uploaded_file($target, $destination);

    if($is_file_moved){
        $_picture = $file_name;
    } else {
        $_picture = null;
    }

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    $query = "INSERT INTO `banners` (`title`,`promotional_message`, `picture`, `link`, `htmlbanner`, `is_active`) VALUES (:title, :promotional_message, :picture, :link, :htmlbanner, :is_active)"; 
    // $query = "INSERT INTO `banners` (`title`, `link`, `promotional_message`, `htmlbanner`, `is_active`) VALUES (:title, :link, :promotional_message, :htmlbanner, :is_active)"; 
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $_title);
    $stmt->bindParam(':picture', $_picture);
    $stmt->bindParam(':link', $_link);
    $stmt->bindParam(':promotional_message', $_promotional_message);
    $stmt->bindParam(':htmlbanner', $_htmlbanner);
    $stmt->bindParam(':is_active', $_is_active);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
   }


   /* 
    * Banner home page
    * fetch all Banner from Database  
    * return to index.php
    */
   public function index(){
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `banners` WHERE is_deleted=0";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    $banners = $stmt->fetchAll();
    return $banners;
   }

   public function show(){
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $_getId = $_GET["id"];
    $query = "SELECT * FROM `banners` WHERE id = $_getId";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    $banners = $stmt->fetch();
    return $banners;
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

    $query = "SELECT * FROM `banners` WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    $banner = $stmt->fetch();
    return $banner;
   }

   public function update(){
    $_getId = $_POST['id'];
    $_title = $_POST['title'];
    $_picture = $_FILES['picture'];
    $_link = $_POST['link'];
    $_promotional_message = $_POST['promotional_message'];
    $_htmlbanner = $_POST['htmlbanner'];

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    $approot = $_SERVER['DOCUMENT_ROOT']."/Hasib/crud/";

    // Working with image file
    if($_FILES['picture']['name'] !== ""){
        $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        
        $destination = $approot.'uploads/banner/'.$file_name;
        
        $is_file_moved = move_uploaded_file($target, $destination);
        
        if($is_file_moved){
            $_picture = $file_name;
        }else{
            $_picture = null;    
        }
    }else {
        $_picture = $_POST["old_picture"];
    }


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `banners` SET 
    `title` = :title,
    `picture` = :picture,
    `link` = :link, 
    `promotional_message` = :promotional_message, 
    `htmlbanner` = :htmlbanner 
    WHERE `id` = :id ";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':title', $_title);
    $stmt->bindParam(':picture', $_picture);
    $stmt->bindParam(':link', $_link);
    $stmt->bindParam(':promotional_message', $_promotional_message);
    $stmt->bindParam(':htmlbanner', $_htmlbanner);
    // $stmt->bindParam(':is_active', $_is_active);
    $result = $stmt->execute();

    //var_dump($result);
    header("location:index.php");
   }

   public function trash(){
    $_getId = $_GET["id"];
    $_is_deleted = 1;

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `id` = :id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':is_deleted', $_is_deleted);
    $result = $stmt->execute();
    
    header("location:index.php");
   }

   public function trashIndex(){
    // Connection to Database
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `banners` WHERE is_deleted=1";
$stmt = $conn->prepare($query);
$result = $stmt->execute();
$banners = $stmt->fetchAll();
return $banners;
   }

   public function restore(){
    $_getId = $_GET["id"];
    $_is_deleted = 0;

    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `id` = :id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $stmt->bindParam(':is_deleted', $_is_deleted);
    $result = $stmt->execute();
    
    header("location:trashIndex.php");
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

    $query = "DELETE FROM banners WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    
    header("location:index.php");
   }
}


?>