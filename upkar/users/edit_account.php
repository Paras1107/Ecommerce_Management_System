<?php
@include('session_timeout.php');
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['username'];
    $get_user="select * from user_table where username='$user_session_name' and account_stat!='Inactive'";
    $run_user=mysqli_query($conn,$get_user);
    $row_fetch=mysqli_fetch_assoc($run_user);
    $user_id=$row_fetch['uid'];
    $username=$row_fetch['username'];
    $email=$row_fetch['u_email'];
    $user_address=$row_fetch['user_address'];
    $user_mobile=$row_fetch['user_mobile'];
}
    //update new values
    if(isset($_POST['update'])){
      $update_id=$user_id;
      $update_username=$_POST['user_username'];
      $update_email=$_POST['user_email'];
      //for image
      $user_image=$_FILES['user_image']['name'];
      $update_image_tmp=$_FILES['user_image']['tmp_name'];
      move_uploaded_file($update_image_tmp,"./user_images/$user_image");
     //for password with hashing and confirm password matching
      $update_password=$_POST['user_password'];
      $hashPass=password_hash($update_password,PASSWORD_DEFAULT);
      $conf_password=$_POST['conf_user_password'];

      $update_address=$_POST['user_address'];
      $update_mobile=$_POST['user_contact'];

      //update_query
      if($update_password!=$conf_password){
        echo "<script>alert('Your Password does not match in both fields.!!')</script>";
      }else{
      $update_query="update user_table set username='$update_username',u_email='$update_email',u_password='$hashPass',user_image='$user_image',user_address='$update_address',user_mobile='$update_mobile' where uid=$update_id";
      $run_update=mysqli_query($conn,$update_query);
      if($run_update){
        echo "<script>alert('Your account has been updated successfully')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
      }
      }
    }
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
    #editcont{
        border-radius: 15px 50px;
        border: 2px solid inherit;
        box-shadow: 10px 10px 54px rgba(25, 24, 24, 0.1);
    }
</style>
<body>
    <div class="container w-80" id="editcont">
<h3 class="text-center text-warning mb-4 mt-5">Account Details</h3>
<form action="" method="post" enctype="multipart/form-data" class="">
<div class="row gy-3 gy-md-4 overflow-hidden">
             <!-- Username -->
            <div class="col-12">
                <label for="user_username" class="form-label">UserName <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="user_username"  id="user_username" value="<?php echo $username;?>" placeholder="Enter Your Username" autocomplete="off" required>
              </div>
              <!-- email -->
              <div class="col-12">
                <label for="user_email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="user_email"  id="user_email" value="<?php echo $email;?>" placeholder="Enter Your Email" autocomplete="off" required>
              </div>
              <!-- image -->
              <div class=" d-flex col-12">
                <label for="user_image" class="form-label">Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control m-auto" name="user_image"  id="user_image" autocomplete="off" required>
                <img src="./user_images/<?php echo $userimage;  ?>" alt="user image" width="100" height="100">

              </div>
              <!-- password -->
              <div class="col-12">
                <label for="user_password" class="form-label"> New Password <span class="text-danger">*</span></label>
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
                <input type="text" class="form-control" name="user_address"  id="user_address" placeholder="Your Address" value="<?php echo $user_address;?>" autocomplete="off" required>
              </div>
              <!-- contact -->
              <div class="col-12">
                <label for="user_contact" class="form-label">Contact <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="user_contact"  id="user_contact" placeholder="Your contact" value="<?php echo $user_mobile;?>" autocomplete="off" required>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <input type="submit" value="Update" class="btn bsb-btn-xl btn-primary text-center w-50 m-auto mb-5" name="update">
                </div>
                </div>
                </div>

</form>
</div>
</body>
</html>