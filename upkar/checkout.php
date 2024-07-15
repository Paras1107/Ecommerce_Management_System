<?php
include('../functions/common_functions.php');
session_start();
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
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
      #usersection{
          background-color: papayawhip;
          border-radius: 15px 50px;
          padding: 20px; 
                }
                #guestimage {
            border-radius: 50%;
            border: 2px solid inherit;
            padding: 20px;
            height:50px;
            
            }
            #guestname {
            border-radius: 15px 50px;
            border: 2px solid inherit;
            padding: 20px;

            }
    </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg bg-body-tertiary p-0" id="navbar">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php">
      <img src="./images/upakar-mart-high-resolution-logo-transparent.png" alt="image" width="70" height="70">
     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="display_products.php#products">Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="#footer">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <?php
            //fetching categories through function;
             getcategories();
            ?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sign In/Up
          </a>
          <ul class="dropdown-menu">
            <li><a href="./users/user_login.php" class="dropdown-item" href="#">Sign In</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="./users/registration.php" class="dropdown-item" href="#">Sign Up</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_page();?></sup></a>
        </li>
        <!-- <li class="nav-item">
          <a href="" class="nav-link"><?php total_price_in_cart();?></a>
        </li> -->
      </ul>
      <form class="d-flex" action="search_product.php#products" method="get" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_products">
        <input type="submit" value="Search" class="btn btn-outline-success" name="search_data_products">
      </form>

    </div>
  </div>
</nav>
<?php
//calling cart
cart();
?>
<!--navbar-->
<nav class="navbar navbar-expand-lg" id="usersection">
    <ul class="navbar-nav me-auto">
        <li class="nav-item py-2">
            <a class="nav-link text-dark py-2" id="guestimage" href="#">Welcome Guest</a>
        </li>
        <?php
        if(!$_SESSION['username']){
          echo"
          <li class='nav-item py-2'>
            <a class='nav-link text-dark py-2' id='guestname' href='../users/user_login.php'>Login</a>
        </li>
          ";
        }else{
          echo"<li class='nav-item py-2'>
            <a class='nav-link text-dark py-2' id='guestname' href='../users/logout.php'>Logout</a>
        </li>";

        }
        ?>
        </ul>
    </nav>

    <div class="row px-1 text-center mx-auto">
        <div class="col-md-12">
            <div class="row">
                <?php
                if(!isset($_SESSION['username']))
                {
                    include('user_login.php');
                }else{
                     include('payment.php');
                }
                ?>
            </div>
        </div>
        
    </div>
<!--footer-->

    <!--bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>