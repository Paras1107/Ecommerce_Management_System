<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-10/assets/css/login-10.css">
<style>
  body{
    overflow-x:hidden;
  }
    #front{
        background-image:url('../images/login.jpg');
        }
</style>
</head>
<body>  
<section class="bg-light py-3 py-md-5 py-xl-8" id="front">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="mb-5">
            <div class="text-center mb-4"></div>

          <h4 class="text-center mb-4">Welcome</h4>
          <div class="text-center mb-4"></div>
        </div>
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="#" method="post">
              <p class="text-center mb-4">Sign in using Username</p>
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="user_username" id="user_username" placeholder="name@" required>
                    <label for="user_username" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="user_password" id="user_password" value="" placeholder="Password" required>
                    <label for="user_password" class="form-label">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <input type="submit" value="Log In"class="btn btn-primary btn-lg" name="user_login">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
          <a href="registration.php" class="link-dark  text-decoration-none btn btn-outline-warning">Create new account</a>
          <a href="./password_reset/forgot_password.php" class="link-dark  text-decoration-none btn btn-outline-warning">Forgot Password</a>
          <a href="../index.php" class="link-dark  text-decoration-none btn btn-outline-warning">Back to HomePage</a>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@include('session_timeout.php');
if(isset($_POST['user_login'])){
  $username=$_POST['user_username'];
  $password=$_POST['user_password'];
  $select_query="Select * from user_table where username='$username' and account_stat='Active'";
  $result=mysqli_query($conn,$select_query);
  $rows_count=mysqli_num_rows($result);
  $row_data=mysqli_fetch_assoc($result);
 $user_ip=getIPAddress();


   //  selecting cart details
   $select_query_cart="Select * from cart_details where ip_address='$user_ip'";
   $select_cart_item=mysqli_query($conn,$select_query_cart);
   $rows_count_cart=mysqli_num_rows($select_cart_item);


 
 
  if($rows_count>0){
    $_SESSION['username']=$username;
    if(password_verify($password,$row_data['u_password'])){
      // echo "<script>alert('Succesfully logged in!!')</script>";
      if($rows_count==1 and $rows_count_cart==0){
        $_SESSION['username']=$username;
        echo "<script>alert('Succesfully logged in!!')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
      }else{
        $_SESSION['username']=$username;
        echo "<script>alert('Succesfully logged in!!')</script>";
        echo "<script>window.open('payment.php','_self')</script>";     
      }
    }else{
      echo "<script>alert('Invalid Credentials')</script>";
    }
  }else{
    echo "<script>alert('Invalid Credentials')</script>";
  }
}
?>