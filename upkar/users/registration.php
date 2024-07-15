<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-3/assets/css/registration-3.css">
</head>
<body>
  
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
        <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
          <h3 class="m-0">Welcome!</h3>
          <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="../images/OIP.jpg" width="900" height="900" alt="">
          <p class="mb-0">Not a member yet? <a href="#user_username" class="link-secondary text-decoration-none">Register now</a></p>
        </div>
      </div>
      <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
        <div class="p-3 p-md-4 p-xl-5">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Registration</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
              </div>
            </div>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="row gy-3 gy-md-4 overflow-hidden">
             <!-- Username -->
            <div class="col-12">
                <label for="user_username" class="form-label">UserName <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="user_username"  id="user_username" placeholder="Enter Your Username" autocomplete="off" required>
              </div>
              <!-- email -->
              <div class="col-12">
                <label for="user_email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="user_email"  id="user_email" placeholder="Enter Your Email" autocomplete="off" required>
              </div>
              <!-- image -->
              <div class="col-12">
                <label for="user_image" class="form-label">Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="user_image"  id="user_image" autocomplete="off" required>
              </div>
              <!-- password -->
              <div class="col-12">
                <label for="user_password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="user_password" id="user_password" value="" required>
              </div>
              <!-- confirm -->
              <div class="col-12">
                <label for="conf_user_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="conf_user_password" id="conf_user_password" value="" required>
              </div>
              <!-- address -->
              <div class="col-12">
                <label for="user_address" class="form-label">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="user_address"  id="user_address" placeholder="Your Address" autocomplete="off" required>
              </div>
              <!-- contact -->
              <div class="col-12">
                <label for="user_contact" class="form-label">Contact <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="user_contact"  id="user_contact" placeholder="Your contact" autocomplete="off" required>
              </div>
              
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                  <label class="form-check-label text-secondary" for="iAgree">
                    I agree to the <a href="../includes/abd.php" class="link-primary text-decoration-none">terms and conditions</a>
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <input type="submit" value="Register" class="btn bsb-btn-xl btn-primary" name="register">
                </div>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <hr class="mt-5 mb-4 border-secondary-subtle">
              <p class="m-0 text-secondary text-end">Already have an account? <a href="user_login.php" class="link-primary text-decoration-none">Sign in</a></p>
              <p class="m-0 text-secondary text-end"><a href="../index.php" class="link-primary text-decoration-none">Back to HomePage</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<!-- php code  -->
 <?php
 if(isset($_POST['register'])){
    $username=$_POST['user_username'];
    $useremail=$_POST['user_email'];
    $password=$_POST['user_password'];
    $hashP=password_hash($password,PASSWORD_DEFAULT);
    $confpassword=$_POST['conf_user_password'];
    $useraddress=$_POST['user_address'];
    $usercontact=$_POST['user_contact'];
    $userimg=$_FILES['user_image']['name'];
    $userimg_temp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();

  if(!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{4,14}$/', $username)){
    echo "<script>alert('Username error fill in valid format like: user123')</script>";
  }elseif(!filter_var($useremail, FILTER_VALIDATE_EMAIL)){
    echo "<script>alert('Email error fill in valid form')</script>";
  }elseif(!preg_match('/^(98|97)[0-9]{8}$/', $usercontact)){
    echo "<script>alert('contact number error')</script>";
  }else{
// select 
    $acc_stat="Active";
    $select_query="select * from user_table where username='$username' or u_email='$useremail' ";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
      echo "<script>alert('Username /  Email Already exists')</script>";
    }
    elseif($password!=$confpassword){
      echo "<script>alert('Your Password does not match in both fields.!!')</script>";
    }
    else{
    //insert
    move_uploaded_file($userimg_temp,"./user_images/$userimg");
    $insert_query="insert into user_table (username,u_email,u_password,user_image,user_ip,user_address,user_mobile,account_stat)
     values('$username','$useremail','$hashP','$userimg','$user_ip','$useraddress','$usercontact','$acc_stat')";
     $sql_exe=mysqli_query($conn,$insert_query);
     if($sql_exe){
      $acc_stat="Active";
        echo "<script>alert('Registered Successfully')</script>";
     }else{
        die(mysqli_error($conn));
     }
   }


  //  selecting cart items
  $select_cart_items_query="select * from cart_details where ip_address='$user_ip'";
  $result_cart_items_query=mysqli_query($conn,$select_cart_items_query);
  $row_count_cart=mysqli_num_rows($result_cart_items_query);
  if($row_count_cart>0){
    $_SESSION['username']=$username;
    echo "<script>alert('You have items in your cart')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
  }else{
    echo "<script>window.open('../index.php','_self')</script>";
  }
 }
 }
 ?>
