<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#container {
    box-shadow:10px 10px 10px 5px seagreen;
    text-align: center;
    overflow: scroll;
}


</style>
<body>
    <?php
    $username=$_SESSION['username'];
    $get_user="select * from user_table where username='$username'";
    $result=mysqli_query($conn,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['uid'];
    ?>
    <div class="mt-4" id="container">
  <h3 class="text-danger text-center mt-5 p-2">ORDERS</h3>
   <table class="table table-responsive table-striped table-hover table-bordered mt-3 mb-2">
    <thead class="table-warning text-center">
    <tr>
        <th>S.N</th>
        <th>Order ID</th>
        <th>Due Amount</th>
        <th>Invoice Number</th>
        <th>Total products</th>
        <th>Date</th>
        <th>Status</th>
        <th>Confirm</th>
    </tr>
    </thead>
    <tbody>
        <?php
         $sn=1;
        $get_orders="select * from order_table where user_id=$user_id ";
        $result_orders=mysqli_query($conn,$get_orders);
        while($row_orders=mysqli_fetch_assoc($result_orders)){
            $order_id=$row_orders['order_id'];
            $due_amount=$row_orders['due_amount'];
            $invoice_number=$row_orders['invoice_num'];
            $total_products=$row_orders['total_product'];
            $order_date=$row_orders['order_date'];
            $order_stat=$row_orders['order_stat'];
            if($order_stat=='pending'){
                $order_stat='Incomplete';
            }else{
                $order_stat='Complete';
            }
            echo "
                <tr class='table-success text-center'>
                    <td>$sn</td>
                    <td>$order_id</td>
                    <td>$due_amount</td>
                    <td>$invoice_number</td>
                    <td>$total_products</td>
                    <td>$order_date</td>
                    <td>$order_stat</td>
                    ";
                    ?>
                    <?php
                    if($order_stat=='Complete'){
                       echo "<td> Payment confirmed</td></tr>"; 
                    }else{
                    echo "
                    <td><a href='confirm_payment.php?order_id=$order_id' class='btn btn-outline-primary text-center'>Confirm</a></td>
                   </tr>";
                    }
            $sn++;
            } 
        ?>
</tbody>
</table>
</div>
</body>
</html>