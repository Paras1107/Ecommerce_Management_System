<?php
if(isset($_GET['edit_product'])){
    $edit_id = $_GET['edit_product'];
    $get_product = "SELECT * FROM products WHERE product_id='$edit_id' and product_status!='Inactive'";
    $run_product = mysqli_query($conn,$get_product);
    $row_product = mysqli_fetch_assoc($run_product);
    $product_title = $row_product['product_title'];
    $product_description = $row_product['product_description'];
    $product_image1 = $row_product['product_image1'];
    $product_image2 = $row_product['product_image2'];
    $product_price = $row_product['product_price'];
    $product_keywords = $row_product['product_keywords'];
?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit product</h1>
    <hr class="w-30">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_title" class="form-label">Product Title</label>
        <input type="text" id="product_title" name="product_title" value="<?php echo $product_title?>" class="form-control" required="required">
         </div>
         <div class="form-outline w-50 m-auto mb-4">
        <label for="product_description" class="form-label">Product Description</label>
        <input type="text" id="product_description" name="product_description" value="<?php echo $product_description ?>" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_keywords" class="form-label">Product Keywords</label>
        <input type="text" id="product_keywords" name="product_keywords" value="<?php echo $product_keywords ?>" class="form-control" required="required">
        </div>
         <div class="form-outline w-50 m-auto mb-4">
         <label for="product_category" class="form-label">Category</label>
            <select name="product_category" class="form-select">
                <?php
                $select_category="Select * from categories";
                $result_categories=mysqli_query($conn,$select_category);
                while($row=mysqli_fetch_assoc($result_categories)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                echo"
                 <option value='$category_id'>$category_title</option>
                ";
                }
                ?>
            </select>
         </div>
         <div class="form-outline w-50 m-auto mb-4">
          <label for="product_image1" class="form-label">Product Image1</label>
                <div class="d-flex">
                    <img src="./product_images/<?php echo $product_image1?>" alt="<?php echo $product_image1?>" style="height:60px; width:60px;">
                            <input type="file" id="product_image1" name="product_image1" class="form-control" required="required">
                </div>
             </div>
         <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product Image2</label>
            <div class="d-flex">
                <img src="./product_images/<?php echo $product_image2?>" alt="<?php echo $product_image2?>" style="height:60px; width:60px;">
            <input type="file" id="product_image2" name="product_image2" class="form-control" required="required">
            </div>
         </div>
         <div class="form-outline w-50 m-auto mb-4">
        <label for="product_price" class="form-label">Product Price</label>
        <input type="number" id="product_price" name="product_price" value="<?php echo $product_price?>" class="form-control" required="required">
        </div>
        <div class="text-center">
               <input type="submit" name="edit_product" class="btn btn-outline-success" value="Update product">
        </div>
    </form>
</div>
<?php
}
if(isset($_POST['edit_product'])){
   $edit_id= $_GET['edit_product'];
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_category=$_POST['product_category'];
    $product_image1=$_FILES['product_image1']['name'];
    $product_image1_tmp=$_FILES['product_image1']['tmp_name'];
    move_uploaded_file($product_image1_tmp,"./product_images/$product_image1");

    $product_image2=$_FILES['product_image2']['name'];
    $product_image2_tmp=$_FILES['product_image2']['tmp_name'];
    move_uploaded_file($product_image2_tmp,"./product_images/$product_image2");
    $product_price=$_POST['product_price'];
    $update_query="update products set product_title='$product_title',product_description='$product_description',category_id=$category_id,product_image1='$product_image1',product_image2='$product_image2',product_price=$product_price where product_id=$edit_id ";
     $result_update=mysqli_query($conn,$update_query);
     if($result_update){
        echo "<script>alert('Product Details has been Updated')</script>";
        echo "<script>window.open('index.php','_self')</script>";
     }
}
?>