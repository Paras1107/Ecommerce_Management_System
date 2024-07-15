
    <div class="container">
        <div class="row d-flex w-50 m-auto p-4 text-center">
            <h3 class="text-center w-50 m-auto">Are You sure?</h3>
            <form action="" method="post">
            <input type="submit" value="Delete Account" name="delete" class="btn btn-outline-danger pb-2 mb-2">
            <input type="submit" Value="Don't Delete Account" name="nodelete" class="btn btn-outline-warning pb-2 mb-2">
            </form>
        </div>
    </div>
<?php
$username_session=$_SESSION['username'];
if(isset($_POST['delete'])){
    $delete_query="Update user_table set account_stat='Inactive' WHERE username='$username_session'";
    $result=mysqli_query($conn,$delete_query);
    if($result){
        session_destroy();
        echo "<script>alert('Account Has Been Deleted')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}
if(isset($_POST['nodelete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}
?>