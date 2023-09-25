
<?php
$webroot ="http://localhost/Hasib/crud/";
?>
<main class="mt-3 d-flex align-items-center" style="height: 60vh;">
        <!-- <h1 class="fs-4 fw-bold text-secondary text-center mb-4">Create An Account</h1> -->
        <div class="container">
            <div class="row  d-flex justify-content-center">
                <div class="col-sm-7">
                    <form action="<?= $webroot?>admin/users/sign-up.php" method="post" enctype="multipart/form-data">


                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputUserName" class="form-label">User Name: </label></div>
                            <div class="col-sm-9"><input type="text" class="form-control" id="inputUserName" name="user_name" value="" required></div>
                            
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputPassword" class="form-label">Password: </label></div>
                            <div class="col-sm-9"><input type="password" class="form-control" id="inputPassword" name="password" value="" required></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputFullname" class="form-label">Full Name: </label></div>
                            <div class="col-sm-9"><input type="text" class="form-control" id="inputFullname" name="name" value="" required></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputEmail" class="form-label">Email: </label></div>
                            <div class="col-sm-9"><input type="email" class="form-control" id="inputEmail" name="email" value=""></div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3"><label for="inputPhone" class="form-label">Phone: </label></div>
                            <div class="col-sm-9"><input type="tel" class="form-control" id="inputPhone" name="phone" value="" required></div>
                        </div>

                        <button type="submit" class="btn btn-secondary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </main>