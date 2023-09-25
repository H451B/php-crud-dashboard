<?php

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
                            <a class="nav-link text-success" aria-current="page" href="create.php">Add New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" href="index.php">Show Data</a>
                        </li>
                    </ul>
                    <form action="store.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="inputTitle" class="form-label">Title: </label>
                            <input type="text" class="form-control" id="inputTitle" name="title" value="" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputPicture" class="form-label">Picture: </label>
                            <input type="file" class="form-control" id="inputPicture" name="picture" value="">
                        </div>

                        <div class="mb-3">
                            <label for="inputLink" class="form-label">Link: </label>
                            <input type="text" class="form-control" id="inputLink" name="link" value="" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputPromotional" class="form-label">Promotional Message: </label>
                            <input type="text" class="form-control" id="inputPromotional" name="promotional_message" value="" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputBanner" class="form-label">Html Banner : </label>
                            <input type="text" class="form-control" id="inputBanner" name="html_banner" value="" required>
                        </div>

                        <div class="form-check mb-3">
                            <label class="form-check-label" for="flexCheckDefault" >
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