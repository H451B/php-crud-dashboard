<?php
// echo "<pre>";s

    $_getId = $_GET["id"];
    // Connection to Database
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=hasibdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `brands` WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_getId);
    $result = $stmt->execute();
    $brands = $stmt->fetchAll();

    if($brands[0]["is_active"] == 0){
        $iActive ="Inactive";
    }else{
        $iActive = "Active";
    }


    // echo "<pre>";
    // print_r($brands);
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
                    <h1 class="text-center fs-3 fw-bolder mt-3">Show Data</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bolder .">
                        <li class="nav-item">
                            <a class="nav-link text-success" aria-current="page" href="create.php">Add New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="index.php">Show Data</a>
                        </li>
                    </ul>  

                    <dl class="row">
                        <dt class="col-sm-3">Id: </dt>
                        <dd class="col-sm-9"><?= $brands[0]["id"]?></dd>

                        <dt class="col-sm-3">Title: </dt>
                        <dd class="col-sm-9"><?= $brands[0]["title"]?></dd>
                        
                        <dt class="col-sm-3">Link: </dt>
                        <dd class="col-sm-9"><?= $brands[0]["link"]?></dd>

                        <dt class="col-sm-3">Is Active: </dt>
                        <dd class="col-sm-9">
                            <!-- <?= $brands[0]["is_active"]?> -->
                            <?= $iActive?>
                            
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
