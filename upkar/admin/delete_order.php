<?php
if(isset($_GET['delete_order']));
$delete_id=$_GET['delete_order'];
$delete_order="update order_table set status='Inactive' where order_id=$delete_id";
$result=mysqli_query($conn,$delete_order);
if($result){
    echo "<script>alert('Order has been Deleted')</script>";
    echo "<script>window.open('index.php?all_orders','_self')</script>";
}
?>