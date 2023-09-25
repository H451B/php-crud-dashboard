<?php
session_start();
$is_authenticated = $_SESSION['$is_authenticated'];
$webroot ="http://localhost/Hasib/crud/";

/* !$is_authenticated */
if(!$is_authenticated){
    header('location:'.$webroot.'404.php');
}else{

    echo "Hello";
}

?>

