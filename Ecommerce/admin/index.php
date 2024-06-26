<?php
include('../includes/connect.php') 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid ">
            <img src="../images/Logo.PNG" class="logo" alt="">
            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Welcome Guest
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
    <!-- second child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    

    <!-- third child -->
    <div class="row">
      <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/adminlogo.png" class="admin_image"></a>
                <p class="text-light text-center">Admin name</p>
            </div> 
            <!-- emmet for button button*10>a.nav-link.text-light.bg-info.my-1 -->
        <div class="button text-center p-3 ">
            <button><a href="insert_product.php" class="border-0 nav-link text-dark bg-warning fw-bold m-1 p-1">Insert Products</a></button>
    
            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">View Products</a></button>

            <button><a href="index.php?insert_category" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">Insert Categories</a></button>

            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">View Categories</a></button>

            <button><a href="index.php?insert_brand" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">Insert Brands</a></button>

            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">View Brands</a></button>

            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">All orders</a></button>

            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">All payments</a></button>

            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">List Users</a></button>

            <button><a href="" class="nav-link text-dark bg-warning fw-bold my-1 mx-1 p-1">Logout</a></button>

        </div>
      </div>
    </div>

    <!-- fourth child -->
     <div class="container my-3">
        <?php
            if(isset($_GET['insert_category'])){
               include('insertcategories.php');
            }    
            if(isset($_GET['insert_brand'])){
                include('insertbrands.php');
             } 
        ?>
     </div>





    <!-- last child -->
    <div class="bg-info p-3 text-center footer">
    <p>All right reserverd & designed by abc-2023</p>
</div>
    </div>

    <!-- bootstrap js link -->
<script 	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>