<?php
if(isset($_GET['edit_category'])){
    $category_id=$_GET['edit_category'];
    $select_category="select * from categories where category_id=$category_id and category_status!='Inactive'";
    $run_query=mysqli_query($conn,$select_category);
    $row=mysqli_fetch_array($run_query);
    $category_result=$row['category_title'];
}?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Category</h1>
    <hr class="w-30">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
        <label for="category_title" class="form-label">Category title</label>
        <input type="text" id="category_title" name="category_title" value="<?php echo $category_result?>" class="form-control" required="required">
         </div>
        <div class="text-center">
               <input type="submit" name="edit_category" class="btn btn-outline-success" value="Update Category">
<a href="index.php?view_categories" class="btn btn-outline-warning">Go back</a>
        </div>
    </form>
</div>
<?php

if(isset($_POST['edit_category'])){
    $category_id=$_GET['edit_category'];
    $category_title=$_POST['category_title'];
   $update_category="update categories set category_title='$category_title' where category_id=$category_id";
   $result=mysqli_query($conn,$update_category);
   if($result){
   echo "<script>alert('Category has been Updated')</script>>";
   echo "<script>window.open('index.php?view_categories','_self')</script>>";
   }
}
?>