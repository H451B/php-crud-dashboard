<?php

$webroot = "http://localhost/php-crud-dashboard/";

$_user_name = $_POST['user_name'];
$_password = $_POST['password'];
// $_hashed_password = password_hash($_password, PASSWORD_DEFAULT);
// n = "$2y$10$zdRYgr/ZdgFTBPiGhMimdOo0FoufCxeECxie3c2ZsJPqx/zVTTLxG";

// Connection to Database
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=php00", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT COUNT(*) AS total FROM `users` WHERE user_name LIKE :username AND password LIKE :password";
//  password_verify('rasmuslerdorf', $hash)
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $_user_name);
$stmt->bindParam(':password', $_password);

$result = $stmt->execute();
$total_found = $stmt->fetch();
// print_r($total_found);



/* UNCOMMENT  */
if($_user_name == 'admin' && $_password=='admin'){
    $_SESSION['$is_authenticated'] = true;
    header('location:' . $webroot . 'admin/dashboard.php');
}
else if ($total_found['total'] > 0) {
    $_SESSION['$is_authenticated'] = true;
    header('location:' . $webroot . 'front/php/public/index.php');
} else {
    $_SESSION['$is_authenticated'] = false;
    header('location:' . $webroot . '404.php');
}
