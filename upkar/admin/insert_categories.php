<?php
include('../includes/connect.php');
if(isset($_POST['insert_category']))
{
   $category_title=$_POST['cat_title'];

   $select_query="Select * from categories where category_title='$category_title'";
   $result_select=mysqli_query($conn,$select_query);
   $number=mysqli_num_rows($result_select);
   if($number>0){
 echo "<script>alert('This category already exists!')</script>";
   }else{
   $insert_query="Insert into categories (category_title,category_status) values ('$category_title','Active');";
   $result=mysqli_query($conn,$insert_query);
   if($result){
     echo "<script>alert('New category has been Inserted Successfully')</script>";
   }
}
}


?>
<h3 class="text-center">Insert Category</h3>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1" required>
</div>
<div class="input-group w-10 mb-3 m-auto">
<input type="submit" class="border-1 p-2 my-3" name="insert_category" value="Insert Category">
</div>
</div>
</form>