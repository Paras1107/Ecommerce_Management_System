<h3 class="text-center text-success">All users</h3>
   <table class="table table-responsive-display-none table-striped table-hover table-bordered mt-3 mb-2" id="table">
    <thead class="table-light text-center">
        <?php
       $get_orders="select * from user_table where account_stat!='Inactive'";
       $run_orders=mysqli_query($conn,$get_orders);
       $count=mysqli_num_rows($run_orders);
       echo "
         <tr>
        <th>S.N</th>
        <th>User Id</th>
        <th>UserName</th>
        <th>User Email</th>
        <th>User Image</th>
        <th>User Address</th>
        <th>User Mobile</th>
        <th>Delete</th>
       </tr>
           </thead>
    <tbody>
       ";
       if($count==0){
        echo "<h3 class='text-danger mt-5'>No users yet</h3>";
       }else{
        $i=0;
        while($row_data=mysqli_fetch_assoc($run_orders)){
            $uid=$row_data['uid'];
            $username=$row_data['username'];
            $useremail=$row_data['u_email'];
            $user_image=$row_data['user_image'];
            $user_address=$row_data['user_address'];
            $user_mobile=$row_data['user_mobile'];
            $i++;
            echo "
            <tr>
            <td>$i</td>
            <td>$uid</td>
            <td>$username</td>
            <td>$useremail</td>
            <td><img src='../users/user_images/$user_image' style='height:100px; width:100px;'></td>
            <td>$user_address</td>
            <td>$user_mobile</td>
            <td><a href='index.php?delete_user=$uid' class='btn btn-outline-danger'>Delete</a></td>
        </tr>
        </tbody>
            
            ";
        }
       }

        ?>