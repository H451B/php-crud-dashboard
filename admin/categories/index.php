<?php
$webroot = 'http://localhost/php-crud-dashboard/';
// Connection to Database
$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO("mysql:host=$servername;dbname=php00", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `categories` WHERE is_deleted=0";
$stmt = $conn->prepare($query);
$result = $stmt->execute();
$products = $stmt->fetchAll();

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
                <div class="col-sm-8">
                    <h1 class="text-center fs-3 fw-bolder mt-3">Categories List</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bolder .">
                        <li class="nav-item">
                            <a class="nav-link text-success" aria-current="page" href="create.php">Add New</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-success" href="index.php">Show Data</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link text-success" href="trashIndex.php">Trashed Items</a>
                        </li>
                    </ul>

                    <table class="table shadow p-3 mb-5 bg-white rounded">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($products as $product) :
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $product["id"];  ?></th>
                                    <td><?= $product["title"];  ?></td>
                                    <td><img class="img-fluid" style="height: 100px;width:100px;" src="<?= $webroot ?>uploads/categories/<?= $product["picture"];  ?>" alt="category image"></td>
                                    <td>
                                        <?php
                                        echo ($product["is_active"] == 0) ? "Inactive" : "Active";
                                        ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="show.php?id=<?= $product['id']; ?>">Show</a>
                                        <a class="btn btn-success" href="edit.php?id=<?= $product['id']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="trash.php?id=<?= $product['id']; ?>">Trash</a>
                                        <!-- <a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('Are  you sure you want to delete?')">Delete</a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>