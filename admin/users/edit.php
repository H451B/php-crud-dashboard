<?php
// echo "<pre>";
// print_r($_SERVER);   
// echo "</pre>";

    $webroot = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/crud-pb/";

    $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `users` WHERE `id` = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    $products = $stmt->fetch();
    

    // echo "<pre>";
    // print_r($products);
    // echo "</pre>";
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
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3">Add New</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bolder .">
                        <li class="nav-item">
                            <a class="nav-link text-success" href="index.php">Show Data</a>
                        </li>
                    </ul>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" 
                                class="form-control" 
                                id="inputTitle"
                                name="id" value="<?= $products['id']; ?>"
                                >
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Name: </label>
                            <input type="text" 
                                class="form-control" 
                                id="inputName"
                                name="name" value="<?= $products['name']; ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="inputUserName" class="form-label">User Name: </label>
                            <input type="text" 
                                class="form-control" 
                                id="inputUserName"
                                name="user_name" value="<?= $products['user_name']; ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email: </label>
                            <input type="email" 
                                class="form-control" 
                                id="inputEmail"
                                name="email" 
                                value="<?= $products['email']; ?>">    
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password: </label>
                            <input type="password" 
                                class="form-control" 
                                id="inputPassword"
                                name="password" 
                                value="<?= $products['password']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputPhone" class="form-label">Phone: </label>
                            <input type="tel" 
                                class="form-control" 
                                id="inputPhone"
                                name="phone" 
                                value="<?= $products['phone']; ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>