<?php
$webroot ="http://localhost/php-crud-dashboard/";
?>


<main class="my-3 d-flex align-items-center" style="height: 60vh;">
        <!-- <h1 class="fs-4 fw-bold text-secondary text-center mb-4">Login</h1> -->
        <div class="container">
            <div class="row  d-flex justify-content-center">
                <div class="col-sm-6">
                    <form action="<?= $webroot?>admin/users/login-processor.php" method="post" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputUserName" class="form-label">User Name: </label></div>
                            <div class="col-sm-9"><input type="text" class="form-control" id="inputUserName" name="user_name" value="" required></div>
                            
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputPassword" class="form-label">Password: </label></div>
                            <div class="col-sm-9"><input type="password" class="form-control" id="inputPassword" name="password" value="" required></div>
                        </div>

                        <button type="submit" class="btn btn-secondary">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </main>