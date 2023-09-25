<?php
    include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/config.php");
    use Hasib\Banner;

    $_banner = new Banner();
    $products = $_banner->show();
    $webroot = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/Hasib/crud/";
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
                        <dd class="col-sm-9"><?= $products["id"]?></dd>

                        <dt class="col-sm-3">Title: </dt>
                        <dd class="col-sm-9"><?= $products["title"]?></dd>

                        <dt class="col-sm-3">Picture: </dt>
                        <dd class="col-sm-9">
                            <!-- <?= $products["picture"]?> -->
                            <img src="<?= $webroot;?>uploads/banner/<?= $products["picture"]; ?>" alt="Banner Image" class="img-fluid">
                        </dd>

                        <dt class="col-sm-3">Link: </dt>
                        <dd class="col-sm-9"><?= $products["link"]?></dd>

                        <dt class="col-sm-3">Promotional Message: </dt>
                        <dd class="col-sm-9"><?= $products["promotional_message"]?></dd>

                        <dt class="col-sm-3">Html Banner: </dt>
                        <dd class="col-sm-9"><?= $products["htmlbanner"]?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
