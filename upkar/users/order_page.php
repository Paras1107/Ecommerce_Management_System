<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
}

    //getting items and price
    $ip=getIPAddress();
    $total_price=0;
    $select_query = "SELECT * FROM `cart_details` WHERE ip_address='$ip'";
    $result_cart=mysqli_query($conn,$select_query);
    $invoice_num=mt_rand();
    $status='pending';
    $count=mysqli_num_rows($result_cart);
    while($row=mysqli_fetch_array($result_cart)){
        $product_id=$row['product_id'];
        $quantity=$row['quantity'];
        $select_product="SELECT * FROM `products` WHERE product_id=$product_id and product_status!='Inactive' ";
        $result_product=mysqli_query($conn,$select_product);
        while($row_product=mysqli_fetch_array($result_product)){
            // $sub_total=array($row_product['product_price']);
            // $sub_total=array_sum($sub_total);
            $total_price+=$row_product['product_price']*$quantity;
            $discount=discount($total_price);
            $total_price-=$discount;

}  
}

//getting quantity
// $get_cart="select * from cart_details";
// $cart_query=mysqli_query($conn,$get_cart);
// $get_item_quantity=mysqli_fetch_array($cart_query);
// $quantity=$get_item_quantity['quantity'];
// if($quantity==0){
//     $quantity=1;
//     $sub_total=$total_price;
// }else{
//     $quantity= $quantity;
//     $sub_total=$total_price*$quantity;
// }

//inserting into user_orders
$insert_order="Insert into order_table (user_id,due_amount,invoice_num,total_product,order_date,order_stat,status)
values ($user_id,'$total_price','$invoice_num','$count',NOW(),'$status','Active')";
$query=mysqli_query($conn,$insert_order);
if($query){
    echo "<script>alert('orders are submitted')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}

//orders pending and cart deletion
$insert_order_pending="Insert into order_pending (user_id,invoice_number,product_id,quantity,order_status)
values ($user_id,'$invoice_num',$product_id,'$quantity','$status')";
    $result_pending_query=mysqli_query($conn,$insert_order_pending);
//now to delete cart items

$select_cart_it="delete  from cart_details where ip_address='$ip'";
$result_cart_it=mysqli_query($conn,$select_cart_it);
?>