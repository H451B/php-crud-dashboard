<?php
$webroot = 'http://localhost/php-crud-dashboard/';
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
    <header class="mx-2 mt-2">
        <div class="top-bar">
            <nav class="navbar navbar-expand-lg bg-success" style="border-radius: .4rem;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-light fw-bold text-decoration-underline" aria-current="page" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" href="<?= $webroot ?>admin/brands/index.php">Brands</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light " href="<?= $webroot ?>admin/categories/index.php">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="<?= $webroot ?>admin/products/index.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="<?= $webroot ?>front/php/public/index.php">Signout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="main">
        <div class="container shadow p-3 my-5 bg-white rounded">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 text-center">Admin</div>
            </div>
            <div class="row"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>