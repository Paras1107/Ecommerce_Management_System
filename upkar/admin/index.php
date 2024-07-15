<?php
include('../functions/common_functions.php');
include('../includes/connect.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upkar</title>
    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<body>
	<div class="container-fluid p-0">
        <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
           <a href="index.php"> <img src="../images/upakar-mart-high-resolution-logo-transparent.png" alt="" class="logo"></a>
           
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                            <?php
                            if(!isset($_SESSION['username'])){
                                echo"
                                <li class='nav-item py-2'>
                                  <a class='nav-link text-dark py-2' id='guestname' href='admin_login.php'>Login</a>
                              </li>
                                ";
                              }else{
                                echo"<li class='nav-item py-2'>
                                  <a class='nav-link text-dark py-2' id='guestname' href='logout.php'>Logout</a>
                              </li>";
                      
                              }
                            ?>
                    </li>
                </ul>
            </nav>
            </div>
            </nav>

            <div class="d-flex">
        <button class="btn btn-outline-primary  mt-2 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header bg-danger text-dark">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Dashboard</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-info">
        <div class="list-group mb-3 p-3">
            <img src="" alt="" class="list-group pb-2" style="height:150px; width:auto;">
        <a href="index.php?insert_products" class="list-group-item list-group-item-action">Insert Products</a>
        <a href="index.php?view_products" class="list-group-item list-group-item-action">View Products</a>
        <a href="index.php?insert_categories" class="list-group-item list-group-item-action">Insert Categories</a>
        <a href="index.php?view_categories" class="list-group-item list-group-item-action">View Categories</a>
        <a href="index.php?all_orders" class="list-group-item list-group-item-action">All Orders</a>
        <a href="index.php?all_payments" class="list-group-item list-group-item-action">All Payments</a>
        <a href="index.php?list_users" class="list-group-item list-group-item-action">List users</a>
        <a href="logout.php" class="list-group-item list-group-item-action">Logout <i class="fa-solid fa-person-through-window"></i></a>
        </div>
        </div>
        </div>
        <div class=" mt-2 mx-2">
            <h2>Welcome <?php if(!isset($_SESSION['username'])){
              echo "Guest";
              
            }else{
            echo $_SESSION['username'];
            }
            ?> <i class="fa-regular fa-face-smile-beam fa-bounce fa-lg" style="color: #FFD43B;"></i></h2>
        </div>

      </div>
      <div class="mx-5">
      <sub>You have logged in at: <?php  $time=time(); echo (date("Y-m-d",$time));?></sub>
     </div>




            <!--second child-->
            <div class="bg-light">
                <h3 class="text-center p-2">Admin Section</h3>
                <hr>
            </div>



<!--fourth child-->
 <div class="container-fluid">
    <?php
    if(isset($_SESSION['username'])){
        if(isset($_GET['insert_products'])){
            include('insert_products.php');
        }
    if(isset($_GET['insert_categories'])){
        include('insert_categories.php');
    }
    if(isset($_GET['view_products'])){
        include('view_products.php');
    }
    if(isset($_GET['edit_product'])){
        include('edit_product.php');
    }
    if(isset($_GET['delete_product'])){
        include('delete_product.php');
    }
    if(isset($_GET['view_categories'])){
        include('view_categories.php');
    }
    if(isset($_GET['edit_category'])){
        include('edit_category.php');
    }
    if(isset($_GET['delete_category'])){
        include('delete_category.php');
    }
    if(isset($_GET['all_orders'])){
        include('all_orders.php');
    }
    if(isset($_GET['delete_order'])){
        include('delete_order.php');
    }
    if(isset($_GET['all_payments'])){
        include('all_payments.php');
    }
    if(isset($_GET['delete_payment'])){
        include('delete_payment.php');
    }
    if(isset($_GET['list_users'])){
        include('list_users.php');
    }
    if(isset($_GET['delete_user'])){
        include('delete_user.php');
    }

    ?>
 </div>
 <div class="row d-flex text-center m-auto">
    <?php
    if(!isset($_GET['insert_products'])){
    if(!isset($_GET['insert_categories'])){
        if(!isset($_GET['view_products'])){  
            if(!isset($_GET['edit_product'])){
                if(!isset($_GET['delete_product'])){
                    if(!isset($_GET['view_categories'])){
                        if(!isset($_GET['edit_category'])){
                            if(!isset($_GET['delete_category'])){
                                if(!isset($_GET['all_orders'])){
                                    if(!isset($_GET['delete_order'])){
                                    if(!isset($_GET['all_payments'])){
                                        if(!isset($_GET['delete_payment'])){
                                        if(!isset($_GET['list_users'])){
                                            if(!isset($_GET['delete_user'])){

    get_Admin_order_details();
        }}}}}}}}}}}
    }}}
}
    ?>
 </div>



	 <!--bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>