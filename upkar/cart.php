<?php
include('functions/common_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upkar</title>
    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!--navbar-->
<?php include('includes/header.php');?>


<!-- table -->
 <div class="container mt-4">
    <div class="row">
        <h3 class="text-center">Your Cart</h3>
     <form action="" method="post" class="">

    <table class="table text-center table-bordered border-success table-striped table-hover">
         <tbody>
            <!-- dynamic data -->
          <?php
                global $conn;
                $ip=getIPAddress();
                $total=0;
                $select_query="select * from cart_details where ip_address='$ip'";
                $result_query=mysqli_query($conn,$select_query);
                 $result_count=mysqli_num_rows($result_query);
                 if($result_count>0){
                    echo "
                    <thead>
                    <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Select</th>
                    <th colspan='2'>Change</th>
                    <tr>
                    </thead>
                    ";


                while($row=mysqli_fetch_array($result_query)){
                $product_id=$row['product_id'];
                $fetch_quantity=$row['quantity'];
                $select_products="select * from products where product_id='$product_id'";
                $result_products=mysqli_query($conn,$select_products);
                while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price=array($row_product_price['product_price']);
                $price_table=$row_product_price['product_price'];
                $product_title=$row_product_price['product_title'];
                $product_image1=$row_product_price['product_image1'];
                $total+=$price_table*$fetch_quantity;
             ?>

                <tr>
                    <td><?php echo $product_title; ?></td>
                    <td><img src="./admin/product_images/<?php echo $product_image1; ?>" alt="" class="cart_image" style="width: 40px; object-fit:contain;
                   height:40px;"></td>
                    <td>
                        <form method="post">
                            <input type="hidden" value="<?php echo $product_id;?>" name="updatequantityid">
                        <input type="number" min="1" value="<?php echo $fetch_quantity;?>" name="update_quantity" class="form-input w-50">
                        <input type="submit" name="update_cart_quantity" value="Update Cart" class="btn btn-outline-success px-3 mx-3">
                         </form>
                </td>
                     <?php
                      global $conn;
                      $ip_add = getIPAddress();
                       if(isset($_POST['update_cart_quantity'])){
                        $update_value=$_POST['update_quantity'];
                        $update_id=$_POST['updatequantityid'];
                        $update_quantity_query=mysqli_query($conn,"update cart_details set quantity=$update_value where product_id=$update_id");
                        if($update_quantity_query){
                            echo "<script>window.open('cart.php','_self')</script>";
                        }
                        }
                    }
                    ?>
                    <td>Rs:<?php echo number_format($price_table*$fetch_quantity); ?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id;  ?>"></td>
                    <td>
                        <input type="submit" name="remove_item" value="Remove Product" class="btn btn-outline-success px-3 mx-3">
                    </td>
                </tr>
                <?php
                }
                }
                else{
                    echo "<h2 class='text-center text-warning'> Cart is Empty <i class='fa-regular fa-face-sad-tear fa-shake'></i></h2><h2 class='text-center text-success'>Shop More <i class='fa-solid fa-cart-plus fa-bounce'></i></h2>";
                }
                ?>
         </tbody>
     </table>
     <div class="d-flex mx-auto">
     <?php
                global $conn;
                $ip=getIPAddress();
                $discount=discount($total);
                $select_query="select * from cart_details where ip_address='$ip'";
                $result_query=mysqli_query($conn,$select_query);
                 $result_count=mysqli_num_rows($result_query);
                 if($result_count>0){
                    echo "
                    <div class='container w-100'>
                    <p class='px-3 w-100'>Total Price:<strong>$total/-</strong></p>
                    <p class='px-3 w-100'>Discount:<strong>$discount/-</strong></p>
                    <p class='px-3 w-100'>Net Amount:<strong>".$total=$total-$discount."/-</strong></p>
                    </div>
                    <div class='row d-flex text-center'>
                    <a href='display_products.php' class='btn btn-outline-success px-3 mx-3'>Shop More</a>
                    <a href='./users/checkout.php' class='btn btn-outline-info px-3 mx-3'>Checkout</a>
                    </div>
                 ";}else{
                    echo "
                    <a href='display_products.php' class='btn btn-outline-success px-3 mx-3'>Shop More</a>
                     "; }
        ?>
        </div>
    </div>
 </div>
 </form>
 <!-- function for removing item -->
  <?php
  function deleteitem(){
    global $conn;
    if(isset($_POST['remove_item'])){
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="DELETE from cart_details where product_id=$remove_id";
            $delete=mysqli_query($conn,$delete_query);
            if($delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }else{
                echo "<script>alert('Select a product before Removing')</script>";
            } 
        }
        
    }
    }
echo $remove_item= deleteitem();
  ?>




      <!--fourth child-->
        <!--products-->
        <div class="row mx-auto container-fluid">
        <!-- fetching -->
        <?php
        //calling function to get products
        get_uniq_categories();
        ?> 
            </div>

<!--footer-->
<?php include('includes/footer.php');?>

    <!--bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>