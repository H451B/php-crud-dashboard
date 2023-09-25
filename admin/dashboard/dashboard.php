<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Dashboard</title>
</head>

<body style="margin-top: 0rem;">
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">HB</span>
                </a>
                <div class="nav_list">
                    <a href="index.html" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Profile</span>
                    </a>

                    <div>
                        <a href="vehicles.html" class="nav_link active">
                            <i class='bx bxs-car nav_icon'></i>
                            <span class="nav_name">Brands</span>
                        </a>
                    </div>

                    <div>
                        <a href="vehicles.html" class="nav_link">
                            <i class='bx bxs-car nav_icon'></i>
                            <span class="nav_name">Category</span>
                        </a>
                    </div>

                    <div>
                        <a href="vehicles.html" class="nav_link">
                            <i class='bx bxs-car nav_icon'></i>
                            <span class="nav_name">Products</span>
                        </a>
                    </div>

                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="main-area">
        <div class="expand-collapse-sidebar">
            <i class="fa-solid fa-bars"></i>
            <span>Expand Sidebar</span>
        </div>

        <div class="operation mb-3">
            <div class="container-fluid">
                <div class="row py-3 my-1">
                    <div class="col-sm-2">
                        <a href="add-vehicle.html">Add Vehicle</a>
                    </div>
                    <div class="col-sm-3 offset-sm-7">
                        <a href="http://">Sort</a>
                        <a href="http://">Filter</a>
                        <a href="http://">Grid View</a>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="content">
            <div class="container-fluid">
                <div class="row py-3 my-1">
                    <div class="col-sm-6">Title</div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <a href="http://">Details</a> |
                        <a href="http://">Edit</a> |
                        <a href="http://">Trash</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="pagination-area"></div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


    <script src="./assets/js/script.js"></script>

</body>

</html>