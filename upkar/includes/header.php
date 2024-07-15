 <?php
 include('includes/connect.php');
 @session_start();
 ?>
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
<!-- second child -->
<nav class="navbar navbar-expand-lg" id="usersection">
    <ul class="navbar-nav me-auto">
        <li class="nav-item py-2">
           <a class="nav-link text-dark py-2" id="guestimage" href="<?php if(isset($_SESSION['username'])){ echo"./users/profile.php";}?>">Welcome <?php 
            if(!isset($_SESSION['username'])){
              echo "Guest";
              
            }else{
            echo $_SESSION['username'];
            }
            ?>
          </a>
        </li>
        <?php
        if(!isset($_SESSION['username'])){
          echo"
          <li class='nav-item py-2'>
            <a class='nav-link text-dark py-2' id='guestname' href='./users/user_login.php'>Login</a>
        </li>
          ";
        }else{
          echo"<li class='nav-item py-2'>
            <a class='nav-link text-dark py-2' id='guestname' href='./users/logout.php'>Logout</a>
        </li>";

        }
        ?>
        </ul>
    </nav>
    <style>
      #usersection{
          background-color: papayawhip;
          border-radius: 15px 50px;
          padding: 20px; 
                }
                #guestimage {
            border-radius: 40%;
            border: 2px solid inherit;
            padding: 20px;
            height:60px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 10px 10px 54px rgba(25, 24, 24, 0.1);
            
            }
            #guestname {
            border-radius: 15px 50px;
            border: 2px solid inherit;
            padding: 20px;
            height:60px;
            transition: transform 0.3s ease-in-out;
             box-shadow: 10px 10px 54px rgba(25, 24, 24, 0.1);

            }
            #guestname:hover{
              transform: scale(1.2);
            }
            #guestimage:hover{
                transform: scale(1.2);
            }
    </style>
    