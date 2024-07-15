<?php
if(isset($_GET['delete_category']));
$delete_id=$_GET['delete_category'];
$delete_category="update categories set category_status='Inactive' where category_id='$delete_id'";
$result=mysqli_query($conn,$delete_category);
if($result){
    echo "<script>alert('category has been Deleted')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}
?>