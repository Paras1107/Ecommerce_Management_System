<?php
if(isset($_GET['delete_payment']));
$delete_id=$_GET['delete_payment'];
$delete_payment="update user_payment set payment_stat='Inactive' where payment_id=$delete_id";
$result=mysqli_query($conn,$delete_payment);
if($result){
    echo "<script>alert('Payment has been Deleted')</script>";
    echo "<script>window.open('index.php?all_payments','_self')</script>";
}
?>