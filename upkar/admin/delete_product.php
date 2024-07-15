<?php
if(isset($_GET['delete_product']));
$delete_id=$_GET['delete_product'];
$delete_product="update products set product_status='Inactive' where product_id='$delete_id'";
$result=mysqli_query($conn,$delete_product);
if($result){
    echo "<script>alert('Product has been Deleted')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}

?>