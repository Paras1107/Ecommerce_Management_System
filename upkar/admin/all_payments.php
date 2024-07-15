<h3 class="text-center text-success">All Payments</h3>
   <table class="table table-responsive-display-none table-striped table-hover table-bordered mt-3 mb-2" id="table">
    <thead class="table-light text-center">
        <?php
       $get_orders="select * from user_payment where payment_stat!='Inactive' ";
       $run_orders=mysqli_query($conn,$get_orders);
       $count=mysqli_num_rows($run_orders);
       echo "
         <tr>
        <th>S.N</th>
        <th>Payment Id</th>
        <th>Order Id</th>
        <th>Invoice Number</th>
        <th>Total Amount</th>
        <th>Payment Method</th>
        <th>Date</th>
        <th>Delete</th>
       </tr>
           </thead>
    <tbody>
       ";
       if($count==0){
        echo "<h3 class='text-danger mt-5'>No payments Here</h3>";
       }else{
        $i=0;
        while($row_data=mysqli_fetch_assoc($run_orders)){
            $payment_id=$row_data['payment_id'];
            $order_id=$row_data['order_id'];
            $invoice_no=$row_data['invoice_num'];
            $amount=$row_data['amount'];
            $payment_mode=$row_data['payment_mode'];
            $date=$row_data['date'];
            $i++;
            echo "
            <tr>
            <td>$i</td>
            <td>$payment_id</td>
            <td>$order_id</td>
            <td>$invoice_no</td>
            <td>$amount</td>
            <td>$payment_mode</td>
            <td>$date</td>
            
            <td><a href='index.php?delete_payment=$payment_id' class='btn btn-outline-danger'>Delete</a></td>
        </tr>
        </tbody>
            
            ";
        }
       }

        ?>