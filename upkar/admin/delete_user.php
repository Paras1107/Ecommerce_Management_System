<?php
if(isset($_GET['delete_user']));
$delete_id=$_GET['delete_user'];
$delete_user="update user_table set account_stat='Inactive' where uid=$delete_id";
$result=mysqli_query($conn,$delete_user);
if($result){
    echo "<script>alert('User has been Deleted')</script>";
    echo "<script>window.open('index.php?list_users','_self')</script>";
}
?>