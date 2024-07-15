<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@include('session_timeout.php');
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
    <body>
<?php
$username=$_SESSION['username'];
$user_image="select * from user_table where username='$username' and account_stat!='Inactive'";
$run_query=mysqli_query($conn,$user_image);
$row_image=mysqli_fetch_array($run_query);
$userimage=$row_image['user_image'];
?>
    <!-- button -->
     <div class="d-flex">
        <button class="btn btn-outline-primary  mt-2 mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header bg-warning text-dark">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">User Dashboard</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-success">
        <div class="list-group mb-3 p-3">
            <img src="./user_images/<?php echo $userimage;?>" alt="" class="list-group pb-2" style="height:150px; width:auto;">
        <a href="../index.php" class="list-group-item list-group-item-action">Home <i class="fa-solid fa-person-through-window"></i></a>
        <a href="profile.php" class="list-group-item list-group-item-action">Pending Orders</a>
        <a href="profile.php?all_orders" class="list-group-item list-group-item-action">All Orders</a>
        <a href="profile.php?edit_account" class="list-group-item list-group-item-action">Edit Account</a>
        <a href="profile.php?delete_account" class="list-group-item list-group-item-action">Delete Account</a>
        <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
        </div>
        </div>
        </div>
        <div class=" mt-2 mx-2">
            <h2>Welcome <?php echo $_SESSION['username'];?> <i class="fa-regular fa-face-smile-beam fa-bounce fa-lg" style="color: #FFD43B;"></i></h2>
        </div>

      </div>
      <div class="mx-5">
      <sub>You have logged in at: <?php  $time=time(); echo (date("Y-m-d",$time));?></sub>
     </div>
      <div class="container">
      <?php
get_user_order_details();
if(isset($_GET['edit_account'])){
    include("edit_account.php");
}
if(isset($_GET['all_orders'])){
    include("all_orders.php");
}
if(isset($_GET['delete_account'])){
    include("delete_account.php");
}
?>
      </div>

</body>
 <!--bootstrap-js-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</html>
