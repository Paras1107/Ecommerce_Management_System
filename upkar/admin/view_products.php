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
    <title>View Products-Admin</title>
    </head>
    <style>
        #container{
    box-shadow:10px 10px 10px 5px blanchedalmond,10px 10px 10px 5px inset blanchedalmond;
    text-align: center;

margin-right: auto;
margin-left: auto;
}
#table{
    margin-right: auto;
margin-left: auto;
}
    </style>
    <body>
    <div class=" container-fluid mt-4"  id="container">
  <h3 class="text-dark text-center mt-5 p-3">All Products</h3>
   <table class="table table-responsive-display-none table-striped table-hover table-bordered mt-3 mb-2" id="table">
    <thead class="table-light text-center">
    <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Category</th>
        <th>Price</th>
        <th>Times Sold</th>
        <th>Inventory</th>
        <th colspan="2">Update</th>
    </tr>
    </thead>
    <tbody>
        <?php


        $select_product="select * from products where product_status!='Inactive'";
        $result=mysqli_query($conn,$select_product);
        while($row=mysqli_fetch_assoc($result)){
            $product_id=$row['product_id'];
            $product_name=$row['product_title'];
            $product_image1=$row['product_image1'];
            //getting category name
            $category_id=$row['category_id'];
            $select_category="select category_title from categories where category_id=$category_id and category_status!='Inactive'";
            $category_result=mysqli_query($conn,$select_category);            
            $row_cat=mysqli_fetch_assoc($category_result);
            $category_name=$row_cat['category_title'];
            $product_price=$row['product_price'];
            $inventory=$row['status'];
            if($inventory='true'){
                $inventory='Present in Stock';
            }else{
                $inventory='Out Of stock';
            }

            //getting total sold
            $get_count_sold="select * from order_pending where product_id=$product_id";
            $result_count_sold=mysqli_query($conn,$get_count_sold);
            $row_count_sold=mysqli_num_rows($result_count_sold);
           ?>
           
            <tr class='table-info'>
            <td><?php echo $product_id?></td>
            <td><?php echo $product_name?></td>
            <td><img src='./product_images/<?php echo $product_image1?>' style='height:100px; width:100px;'></td>
            <td><?php echo $category_name?></td>
            <td><?php echo $product_price?></td>

            <td><?php echo $row_count_sold?></td>

            <td><?php echo $inventory?></td>
            <td><a href='index.php?edit_product=<?php echo $product_id?>' class='btn btn-outline-success m-auto'>Edit</a><a href='index.php?delete_product=<?php echo $product_id;?>' class='btn btn-outline-danger m-auto' data-toggle='modal' data-target='#exampleModal'>Delete</a></td>
            </tr>
        <?php  
        }
        
        ?>
        </tbody>
        </table>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete this product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deleting this product may cause error in Your data..
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="index.php?view_product" class="text-decoration-none">Close</a></button>
        <button type="button" class="btn btn-Danger"><a href='index.php?delete_product=<?php echo $product_id?>' class='btn btn-outline-danger m-auto'>Yes Delete</a></button>
      </div>
    </div>
  </div>
</div>
    </body>
    </html>