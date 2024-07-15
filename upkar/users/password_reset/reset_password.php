<?php

$token=$_GET['token'];
$token_hash=hash("sha256",$token);
$mysqli= require __DIR__ ."/db.php";
$sql="SELECT * from user_table where reset_token_hash=?";
$stmt =$mysqli->prepare($sql);
$stmt->bind_param("s", $token_hash);
$stmt->execute();
$result=$stmt->get_result();
$user=$result->fetch_assoc();
if($user === null){
    die("token not found");

}
if(strtotime($user["reset_token_expires_at"]) <= time()){
    die("token has expired");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-10/assets/css/login-10.css">
</head>
<style>
    #container{
        box-shadow: 10px 10px 54px palevioletred;

    }
</style>
<body>
    
 <div class="container" id="container">
    <h1 class="text-center mt-5 mb-5">Reset password</h1>
    <form action="process-reset_password.php" method="post">
                <div class="col-12">
                <input type="hidden" class="form-control" name="token" value="<?=htmlspecialchars($token)?>">

                   <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password"  required>
                    <label for="password" class="form-label">Enter New Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"  required>
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                  </div>
                  </div>

         <div class="text-center pb-2">
        <button class="btn btn-warning">Submit</button>
    </div>
    </form>
    </div>
    </body>
    </html>
    