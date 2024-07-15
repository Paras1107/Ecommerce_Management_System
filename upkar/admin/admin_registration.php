
<?php
include('../functions/common_functions.php');
include('../includes/connect.php');
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
    <title>Admin</title>
</head>
<style>
    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration {
top: 13px;
}
    </style>

<section class="vh-80 gradient-custom">
  <div class="container py-5 h-80">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-8 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Admin Registration</h3>
            <form method="post" action="">
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="username" name="username" class="form-control form-control-lg" required/>
                    <label class="form-label" for="username">Username</label>
                  </div>

                  </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div  class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="birthday" name="birthday" required/>
                    <label for="birthday" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="M" checked/>
                    <label class="form-check-label" for="femaleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="F" />
                    <label class="form-check-label" for="maleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="o" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div  class="form-outline">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                    <label class="form-label" for="email">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div  class="form-outline">
                    <input type="text" name="phone" id="phone" class="form-control form-control-lg" required/>
                    <label class="form-label" for="phone">Phone Number</label>
                  </div>

                </div>
              </div>
              <div class="row">
              <div class="col-md-6 mb-4 pb-2">
              <div  class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" required/>
                <label class="form-label" for="password">Password</label>
            </div>
            </div>
            <div class="col-md-6 mb-4 pb-2">
            <div  class="form-outline mb-4">
                <input type="password" name="confpassword" id="confpassword" class="form-control" required/>
                <label class="form-label" for="confpassword"> Confirm Password</label>
            </div>
</div>
             </div>
              <div class="mt-4 pt-2 text-center">
                <input  class="text-center btn btn-outline-success btn-md" type="submit" value="Register" name="register" />
              </div>
              <div class="mt-4 pt-2 text-center">
                <p class="text-dark">Already have an account? Then Here You Go..<a href="admin_login.php"  class="btn btn-outline-info btn-sml border-0" >Sign In</a>
                </p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
</section>
 <!--bootstrap-js-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<!-- php code  -->
<?php
 if(isset($_POST['register'])){
    $username=$_POST['username'];
    $useremail=$_POST['email'];
    $birthday=$_POST['birthday'];
    $password=$_POST['password'];
    $hashP=password_hash($password,PASSWORD_DEFAULT);
    $confpassword=$_POST['confpassword'];
    $gender=$_POST['inlineRadioOptions'];
    $usercontact=$_POST['phone'];

// select 
    $select_query="select * from admin_table where username='$username' or email='$useremail' ";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
      echo "<script>alert('Username /  Email Already exists')</script>";
    }
    elseif($password!=$confpassword){
      echo "<script>alert('Your Password does not match in both fields.!!')</script>";
    }
    else{

    $insert_query="INSERT into admin_table (username,birthday,gender,email,phone,password,date) values('$username','$birthday','$gender','$useremail','$usercontact','$hashP',NOW())";
     $sql_exe=mysqli_query($conn,$insert_query);
     if($sql_exe){
        @session_start();
        $_SESSION['username']=$username;
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";

     }else{
        die(mysqli_error($conn));
     }
   }
}
?>