<?php
$webroot = 'http://localhost/php-crud-dashboard/';
?>

<!doctype html>
<html lang="en" style="background-color: #F5FEFD;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #F5FEFD;">
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
                                <a class="nav-link active text-light" aria-current="page" href="<?= $webroot ?>admin/dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" href="<?= $webroot ?>admin/brands/index.php">Brands</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fw-bold text-decoration-underline" href="<?= $webroot ?>admin/categories/index.php">Categories</a>
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

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3">Add New Categories</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bolder .">
                        <li class="nav-item">
                            <a class="nav-link text-success" aria-current="page" href="create.php">Add New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="index.php">Show Data</a>
                        </li>
                    </ul>
                    <form action="store.php" method="post" enctype="multipart/form-data" class="shadow p-3 mb-5 bg-white rounded">

                        <div class="mb-3">
                            <label for="inputTitle" class="form-label">Title: </label>
                            <input type="text" class="form-control" id="inputTitle" name="title" value="" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputPicture" class="form-label">Picture: </label>
                            <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                        </div>

                        <div class="form-check mb-3">
                            <label class="form-check-label" for="flexCheckDefault">
                                Is Active?
                            </label>
                            <input class="form-check-input" name="is_active" type="checkbox" value="1" id="flexCheckDefault">

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