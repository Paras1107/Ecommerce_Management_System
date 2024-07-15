<h3 class="text-center text-success">All Orders</h3>
   <table class="table table-responsive-display-none table-striped table-hover table-bordered mt-3 mb-2" id="table">
    <thead class="table-light text-center">
        <?php
       $get_orders="select * from order_table where status!='Inactive'";
       $run_orders=mysqli_query($conn,$get_orders);
       $count=mysqli_num_rows($run_orders);
       echo "
         <tr>
        <th>S.N</th>
        <th>Order Id</th>
        <th>Due Amount</th>
        <th>Invoice Number</th>
        <th>Total Products</th>
        <th>Order_date</th>
        <th>Status</th>
        <th>Delete</th>
       </tr>
           </thead>
    <tbody>
       ";
       if($count==0){
        echo "<h3 class='text-danger mt-5'>No Orders Here Yet</h3>";
       }else{
        $i=0;
        while($row_data=mysqli_fetch_assoc($run_orders)){
            $order_id=$row_data['order_id'];
            $due_amount=$row_data['due_amount'];
            $invoice_no=$row_data['invoice_num'];
            $total_products=$row_data['total_product'];
            $order_date=$row_data['order_date'];
            $inventory=$row_data['order_stat'];
            $i++;
            echo "
            <tr>
            <td>$i</td>
            <td>$order_id</td>
            <td>$due_amount</td>
            <td>$invoice_no</td>
            <td>$total_products</td>
            <td>$order_date</td>
            <td>$inventory</td>
            <td><a href='index.php?delete_order=$order_id' class='btn btn-outline-danger'>Delete</a></td>
        </tr>
        </tbody>
            
            ";
        }
       }

        ?>