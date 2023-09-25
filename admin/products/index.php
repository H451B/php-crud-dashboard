<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/config.php");
use Hasib\Products;

$_product = new Products();
$products = $_product->index();

    // include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/vendor/autoload.php");
    // // include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/authenticator.php");

    // $webroot = "http://localhost/crud/";
    // // Connection to Database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";


    // $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $query = "SELECT * FROM `products`";
    // $stmt = $conn->prepare($query);
    // $result = $stmt->execute();
    // $products = $stmt->fetchAll();
    // // echo "<pre>";
    // // print_r($_SERVER);
    // // echo "</pre>";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-10">
                    <h1 class="text-center fs-3 fw-bolder mt-3">Products List</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bolder .">
                        <li class="nav-item">
                            <a class="nav-link text-success" aria-current="page" href="create.php">Add New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="index.php">Show Data</a>
                        </li>
                    </ul>

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $si = 1;
                        if(count($products) > 0):
                        foreach($products as $product):
                        ?>
                        <tr>
                            <th scope="row"><?php echo $si++;  ?></th>
                            <th scope="row"><?php echo $product["id"];;  ?></th>
                            <td><?= $product["title"];  ?></td>
                            
                            <td>
                                <a href="show.php?id=<?= $product['id'];?>">Show</a> | 
                                <a href="edit.php?id=<?= $product['id'];?>">Edit</a> | 
                                <a href="delete.php?id=<?= $product['id'];?>" onclick="return confirm('Are  you sure you want to delete?')">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        endforeach;
                        else:
                        ?>
                        
                        <tr>
                            <td colspan="4" class="text-center">No Product is available. <a href="create.php" class="text-success">click here to add one</a></td>
                        </tr>
                        <?php endif;?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>