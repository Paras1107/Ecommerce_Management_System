<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    // images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];

    // empty
    if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_price=='' or $product_image1=='' or $product_image1==''){
        echo "<script>alert('Please fill in all the Fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");

        // insert
        $insert_products="insert into products (product_title,product_description,product_keywords,category_id,product_image1,product_image2,product_price,date,status,product_status) values ('$product_title','$product_description','$product_keywords','$product_category','$product_image1','$product_image2','$product_price',NOW(),'$product_status','Active')";
        $result_query=mysqli_query($conn,$insert_products);
    if($result_query){
        echo "<script>alert('The Product has been Inserted Successfully')</script>";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Insert Products-Admin</title>
</head>
<body>
<body class="bg-light">
    <div class="container mt-3">
        <h3 class="text-center mb-4">Insert Products</h3>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product-Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter the title for product" autocomplete="on" required="Field is empty">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product-Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter the description for product" autocomplete="off" required="Field is empty">
            </div>
            <!-- key -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product-Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter the keywords" autocomplete="on" required="Field is empty">
            </div>

           <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
             <select name="product_category" id="" class="form-select">
                <option value="">Select a Category</option>
                <?php
                 $select_query="select * from categories where category_status!='Inactive'";
                 $result_query=mysqli_query($conn,$select_query);
                 while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                 }

                ?>
             </select>
            </div>
            <!-- images -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product-Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="Field is empty">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product-Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  required="Field is empty">
            </div>
            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product-price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter the product price" required="Field is empty">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-outline-success" value="Insert Product">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <button class="btn btn-outline-success" onclick="window.location.href='index.php'">Back to Admin</button>
            </div>

        </form>
    </div>
</body>


 <!--bootstrap-js-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>