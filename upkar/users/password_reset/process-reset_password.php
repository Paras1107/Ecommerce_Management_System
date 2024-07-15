<?php

$token=$_POST['token'];
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
if($_POST['password']!==$_POST['confirm_password']){
    die("passwords do not match");
}
$password_hash= password_hash($_POST['password'],PASSWORD_DEFAULT );
$sql="UPDATE user_table SET u_password=?,reset_token_hash=NULL,reset_token_expires_at=NULL WHERE uid=?";
$stmt =$mysqli->prepare($sql);
$stmt->bind_param("ss", $password_hash,$user["uid"]);
$stmt->execute();
echo "<script>alert('password reset successfully, You can now login with the new password')</script>";
echo "<script>window.open('../user_login.php','_self')</script>";
?>