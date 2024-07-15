<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@include('session_timeout.php');
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    $select_query="select * from `order_table` where order_id=$order_id";
    $result=mysqli_query($conn,$select_query);
    $row=mysqli_fetch_assoc($result);
    $invoice_num=$row['invoice_num'];
    $amount=$row['due_amount'];
}
if(isset($_POST['confirm_payment'])){
 $invoice_number=$_POST['invoice_number'];
 $amount_t=$_POST['amount'];
 $payment=$_POST['payment_mode'];
//  if($payment='Paypal'){
//     echo "<script>window.open('checkout_paypal.php',_self)</script>";

//  }else{
 $insert_query="insert into user_payment (order_id,invoice_num,amount,payment_mode,date,payment_stat) values($order_id,$invoice_number,$amount_t,'$payment',NOW(),'Active')";
 $result_pay=mysqli_query($conn,$insert_query);
 if($result_pay){
    echo "<script>alert('Successfully completed payment')</script>";
    echo "<script>window.open('profile.php?my_orders','_self')</script>";

 }
 $update_payment="update order_table set order_stat='complete', status='Active' where order_id=$order_id";
 $result_update=mysqli_query($conn,$update_payment);
}
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    </head>
    <style>
        #conft{
            box-shadow:10px 10px 20px 5px inset,10px 10px 10px 5px  grey;
            text-align: center;
            border-radius: 20px;
        }
    </style>
    <body>
        <div class="container mt-2">
            <div class="container mx-4 mt-4" id="conft">
                <h3 class="text-center p-3">Confirm Your Payment</h3>
                <form action="" method="post">
                    <div class="form-outline my-4 text-center m-auto">
                        <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_num?>">
                    </div>
                    <div class="form-outline my-4 text-center m-auto">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount?>">
                    </div>
                    <div class="form-outline my-4 text-center m-auto">
                    <select class="form-select w-50 m-auto" aria-label="Default select example" name="payment_mode">
                    <option disabled>Payment option</option>
                    <option value="Paypal">Paypal</option>
                    <option value="Esewa">Esewa</option>
                    <option value="Khalti Wallet">Khalti Wallet</option>
                    <option value="Fonepay Direct">Fonepay Direct</option>
                    <option value="Cash">Cash</option>
                    </select>
                    </div>
                    <div class="form-outline my-4 p-3 text-center m-auto d-flex">
                        <input type="submit" class="form-control w-50 p-2 m-auto btn btn-outline-success" name="confirm_payment" value="Confirm payment">
                        <a href="profile.php" class="text-center w-50 p-2 m-auto btn btn-outline-success">Return to Dashboard</a>
                    </div>

                    </form>
            </div>

        </div>
    </body>
    </html>