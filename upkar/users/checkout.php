<?php
include('session_timeout.php');
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
<!--navbar-->
<nav class="navbar navbar-expand-lg" id="usersection">
    <ul class="navbar-nav me-auto">
        <li class="nav-item py-2">
            <a class="nav-link text-dark py-2" id="guestimage" href="#">Welcome Guest</a>
        </li>
        <?php
        include('../includes/connect.php');
        if(!isset($_SESSION['username'])){
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
                    // $ip=getIPAddress();
                    // $select_cart_item="select * from cart_details where ip_address='$ip'";
                    // $result=mysqli_query($conn,$select_cart_item);
                    // $row_count_cart=mysqli_num_rows($result);
                    // if($row_count_cart>0){
                    //     include('payment.php');
                    // }else{
                    //     echo "<script>window.open('../index.php','_self')</script>";
                    // }
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