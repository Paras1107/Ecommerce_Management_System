<?php
// include('./includes/connect.php');
//getting products for index
function getproducts(){
    global $conn;

    //checking  for get
    if(!isset($_GET['category']))
    {
        echo"
        <div class='container text-center mt-5 py-5'>
            <h2 id='products'>Products</h2>
           <hr class='mx-auto'>
            <p>Check out some of our items</p>
          </div>
        ";
        $select_query="Select * from products where product_status!='Inactive' order by rand() LIMIT 0,8 ";
        $result_query=mysqli_query($conn,$select_query);
       // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
           $product_id=$row['product_id'];
           $product_title=$row['product_title'];
           $product_description=$row['product_description'];
           $product_image1=$row['product_image1'];
           $product_price=$row['product_price'];
           $category_id=$row['category_id'];
            echo "
            <div class='text-center col-lg-3 col-md-4 col-12 mb-5 h-120' id='productdet'>
            <div class='card' >
               <img src='./admin/product_images/$product_image1' class='card-img-top img-fluid mb-3'style='height:200px;' alt='$product_title'>
            <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <h5 class='card-price'>Rs:$product_price</h5>
            <p class='card-text'>$product_description</p>
            <a href='index.php?addonto_cart=$product_id' id='btn' class='btn btn-outline-success'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-info'>View More</a>
             </div>
            </div>
            </div>

            ";
        }
    }
}


//getting all products
function getallproducts(){
    global $conn;

    //checking  for get category
    if(!isset($_GET['category']))
    {
        echo"
        <div class='container text-center mt-5 py-5'>
            <h2 id='products'>Products</h2>
           <hr class='mx-auto'>
            <p>Enjoy shopping with our products</p>
          </div>
        ";
        $select_query="Select * from products where product_status!='Inactive' order by rand()";
        $result_query=mysqli_query($conn,$select_query);
       // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
           $product_id=$row['product_id'];
           $product_title=$row['product_title'];
           $product_description=$row['product_description'];
           $product_image1=$row['product_image1'];
           $product_price=$row['product_price'];
           $category_id=$row['category_id'];
            echo "
            <div class='text-center col-lg-3 col-md-4 col-12 mb-5 h-120' id='productdet'>
            <div class='card'>
               <img src='./admin/product_images/$product_image1' class='card-img-top img-fluid mb-3'style='height:200px;' alt='$product_title'>
            <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <h5 class='card-price'>Rs:$product_price</h5>
            <p class='card-text'>$product_description</p>
            <a href='index.php?addonto_cart=$product_id' class='btn btn-outline-success'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-info'>View More</a>
             </div>
            </div>
            </div>
            ";
        }
    }
}

//getting specific category products
function get_uniq_categories(){
    global $conn;

    //checking  for get
    if(isset($_GET['category']))
    {
        echo"
        <div class='container text-center mt-5 py-5'>
            <h2 id='products'>Products</h2>
           <hr class='mx-auto'>
            <p>Check out some of our items</p>
          </div>
        ";
        $category_id=$_GET['category'];
        $select_query="Select * from products where category_id=$category_id and product_status!='Inactive'";
        $result_query=mysqli_query($conn,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class='text-center text-warning'>Sorry No Stock avaliable for this Category  <i class='fa-solid fa-face-sad-tear fa-flip fa-2xl'></i></h2>";
        }
       // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
           $product_id=$row['product_id'];
           $product_title=$row['product_title'];
           $product_description=$row['product_description'];
           $product_image1=$row['product_image1'];
           $product_price=$row['product_price'];
           $category_id=$row['category_id'];
            echo "
            <div class='text-center col-lg-3 col-md-4 col-12 mb-5 h-120' id='productdet'>
            <div class='card'>
               <img src='./admin/product_images/$product_image1' class='card-img-top img-fluid mb-3'style='height:200px;' alt='$product_title'>
            <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <h5 class='card-price'>Rs:$product_price</h5>
            <p class='card-text'>$product_description</p>
            <a href='index.php?addonto_cart=$product_id' class='btn btn-outline-success'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-info'>View More</a>
             </div>
            </div>
            </div>
            ";
        }
    }
}

//getting categories
function getcategories(){
    global $conn;
    $select_category="Select * from categories where category_status!='Inactive'";
             $result_category=mysqli_query($conn,$select_category);
            while($row_data=mysqli_fetch_assoc($result_category)){
            // echo $row_data['category_title'];
            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo "<li><a href='index.php?category=$category_id#products' class='dropdown-item' href='#'>$category_title</a></li><li><hr class='dropdown-divider'></li>";
            }
}

//searching products
function search_products(){
    global $conn;
    if(isset($_GET['search_data_products'])){
        $user_search_value=$_GET['search_products'];
        $search_query="Select * from products where product_keywords like'%$user_search_value%' and product_status!='Inactive'";
        $result_query=mysqli_query($conn,$search_query);
       // echo $row['product_title'];
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class='text-center text-warning'>No Results.<i class='fa-solid fa-face-sad-tear fa-flip fa-2xl'></i></h2><h2 class='text-center text-warning mx-auto'>Sorry No Product avaliable for ".$user_search_value."</h2>";
        }
        if(empty($_GET['search_products'])){
            echo "<h2 class='text-center text-danger'>Search for a product first!!</h2>";
        }else{
        while($row=mysqli_fetch_assoc($result_query)){
           $product_id=$row['product_id'];
           $product_title=$row['product_title'];
           $product_description=$row['product_description'];
           $product_image1=$row['product_image1'];
           $product_price=$row['product_price'];
           $category_id=$row['category_id'];
            echo "

            <div class='container text-center mt-5 py-5'>
           
            <p><h2 id='products'>Searching for the product:</h2> <h3>".$user_search_value." </h3></p>
            <hr class='mx-auto'>
          </div>

            <div class='text-center col-lg-3 col-md-4 col-12 mb-5 h-120' id='productdet'>
            <div class='card'>
               <img src='./admin/product_images/$product_image1' class='card-img-top img-fluid mb-3'style='height:200px;' alt='$product_title'>
            <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <h5 class='card-price'>Rs:$product_price</h5>
            <p class='card-text'>$product_description</p>
            <a href='index.php?addonto_cart=$product_id' class='btn btn-outline-success'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-info'>View More</a>
             </div>
            </div>
            </div>
            ";
        }
    }
    }
    }

    //view more
    function view_more_details(){
        global $conn;

        //checking  for get category
        if(isset($_GET['product_id'])){
        if(!isset($_GET['category']))
        {
            $product_id=$_GET['product_id'];
            $select_query="Select * from products where product_id=$product_id and product_status!='Inactive'";
            $result_query=mysqli_query($conn,$select_query);
           // echo $row['product_title'];
            while($row=mysqli_fetch_assoc($result_query)){
               $product_title=$row['product_title'];
               $product_description=$row['product_description'];
               $product_image1=$row['product_image1'];
               $product_image2=$row['product_image2'];
               $product_price=$row['product_price'];
                echo "
                 <div class='row mx-auto container-fluid'>
                    <div class='text-center col-md-6'>
                  <div class='card mb-3'>
                   <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                  <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                 <h4 class='card-title'>Rs:$product_price</h4>
               <p class='card-text'>$product_description</p>
              <a href='index.php?addonto_cart=$product_id' class='btn btn-outline-success'>Add to Cart</a>
              <a href='index.php' class='btn btn-outline-success'><i class='fa-solid fa-door-open fa-fade'></i></a>
              <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
     </div>
   </div>
   </div>

    <div class='text-center col-md-6'>
        <!-- also check out related -->
         <div class='row'>
            <div class='col-md-12'>
                <h4 class='text-center mb-4'>Related products images</h4>
            </div>
            <div class='col-md-6'>
            <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>

            </div>
            <div class='col-md-6'>
            <img src='./admin/product_images/$product_image2' class='card-img-top' alt='$product_title'>

            </div>
         </div>
    </div>
                ";
            }
        }     
    }

    //checking  for get
    if(!isset($_GET['category']))
    {
        echo"
        <div class='container text-center mt-5 py-5'>
            <h2 id='products'>You may also like..</h2>
           <hr class='mx-auto'>
            <p class=''>Here are some of Our other items for you</p>
          </div>
        ";
        $select_query="Select * from products where product_status!='Inactive' order by rand() LIMIT 0,4";
        $result_query=mysqli_query($conn,$select_query);
       // echo $row['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
           $product_id=$row['product_id'];
           $product_title=$row['product_title'];
           $product_description=$row['product_description'];
           $product_image1=$row['product_image1'];
           $product_price=$row['product_price'];
           $category_id=$row['category_id'];
            echo "
            <div class='text-center col-lg-3 col-md-4 col-12 mb-5 h-120' id='productdet'>
            <div class='card'>
               <img src='./admin/product_images/$product_image1' class='card-img-top img-fluid mb-3'style='height:200px;' alt='$product_title'>
            <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <h5 class='card-price'>Rs:$product_price</h5>
            <p class='card-text'>$product_description</p>
            <a href='index.php?addonto_cart=$product_id' class='btn btn-outline-success'>Add to Cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-info'>View More</a>
             </div>
            </div>
            </div>
            ";
        }
    }

}





              //user ip assigningh
              function getIPAddress() {  
                //whether ip is from the share internet  
                 if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                            $ip = $_SERVER['HTTP_CLIENT_IP'];  
                    }  
                //whether ip is from the proxy  
                elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
                 }  
                  //whether ip is from the remote address  
                    else{  
                         $ip = $_SERVER['REMOTE_ADDR'];  
                         }  
                  return $ip; 
            }



             // for cart
             function cart(){
                 if(isset($_GET['addonto_cart']))  {
                    global $conn;
                    $ip=getIPAddress();
                    $get_product_id=$_GET['addonto_cart'];
                    $select_query="select * from cart_details where ip_address='$ip' and product_id=$get_product_id";
                    $result_query=mysqli_query($conn,$select_query);
                    $num_of_rows=mysqli_num_rows($result_query);
                    if($num_of_rows>0){
                    echo "<script>alert('Item already present')</script>";
                    echo "<script>window.open('index.php','_self')</script>";
                    }else{
                        $insert_query="Insert into cart_details (product_id,ip_address,quantity,date) values($get_product_id,'$ip','1',NOW())";
                        $result_query=mysqli_query($conn,$insert_query);
                        echo "<script>alert('Item has been added to cart')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                    }


                 } 
             }



             //cart page for user

             function cart_page(){
                if(isset($_GET['addonto_cart']))  {
                   global $conn;
                   $ip=getIPAddress();
                   $select_query="select * from cart_details where ip_address='$ip'";
                   $result_query=mysqli_query($conn,$select_query);
                   $num_rows=mysqli_num_rows($result_query);
                   }else{
                    global $conn;
                    $ip=getIPAddress();
                    $select_query="select * from cart_details where ip_address='$ip'";
                    $result_query=mysqli_query($conn,$select_query);
                    $num_rows=mysqli_num_rows($result_query);
                } 
                echo $num_rows;
            }


            //total price
            function total_price_in_cart(){
                global $conn;
                $ip=getIPAddress();
                $total=0;
                $select_query="select * from cart_details where ip_address='$ip'";
                $result_query=mysqli_query($conn,$select_query);
                while($row=mysqli_fetch_array($result_query)){
                    $product_id=$row['product_id'];
                    $select_products="select * from products where product_id='$product_id'";
                    $result_products=mysqli_query($conn,$select_products);
                    while($row_product_price=mysqli_fetch_array($result_products)){
                        $product_price=array($row_product_price['product_price']);
                        $product_values=array_sum($product_price);
                        $total+=$product_values;
                    }
                }
                echo $total;

            }

 
            function get_user_order_details(){
                global $conn;
                $username=$_SESSION['username'];
                $get_details="select * from user_table where username='$username' and account_stat!='Inactive'";
                $result=mysqli_query($conn,$get_details);
               while( $row=mysqli_fetch_array($result)){
                $user_id=$row['uid'];
                $contact=$row['u_email'];
                $user_ip=$row['user_ip'];
                
                if(!isset($_GET['edit_account'])){
                    if(!isset($_GET['all_orders'])){
                        if(!isset($_GET['delete_account'])){
                         $get_orders="select * from order_table where user_id=$user_id and status!='Inactive' and order_stat='pending'";
                         $result_orders=mysqli_query($conn,$get_orders);
                         $row_count=mysqli_num_rows($result_orders);

                         $get_orders_all="select * from order_table where user_id=$user_id and status!='Inactive' and order_stat='complete' ";
                         $result_orders_all=mysqli_query($conn,$get_orders_all);
                         $row_count_all=mysqli_num_rows($result_orders_all);

                         //cart_details
                         $select_user_cart="select * from cart_details where ip_address='$user_ip'";
                           $select_user_cart_result=mysqli_query($conn,$select_user_cart);
                           $row_count_cart=mysqli_num_rows($select_user_cart_result);

                         //placed queries
                         
                         $select_user_queries="select * from queries where name='$username' and contact='$contact'";
                           $select_user_queries_result=mysqli_query($conn,$select_user_queries);
                           $row_count_queries=mysqli_num_rows($select_user_queries_result);
                         if($row_count>0){
                            echo "
                            <div class='row d-flex text-center mx-4'>
                            <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Pending Orders</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count pending orders</p>
                                </div>
                                </div>

                                <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Completed orders</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count_all completed orders</p>
                                </div>
                                </div>

                                <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Items in Cart</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count_cart  items placed in cart</p>
                                </div>
                                </div>

                                <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Placed Queries</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count_queries  queries placed</p>
                                </div>
                                </div>
                                </div>
                                </div>
                                ";
                         }else{
                            echo "<div class='row d-flex text-center d-flex mx-4'>
                            <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Pending Orders</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count pending orders</p>
                                </div>
                                </div>
                                <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Completed orders</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count_all orders completed</p>
                                </div>
                                </div>
                                <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Items in Cart</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count_cart  items placed in cart</p>
                                </div>
                                </div>
                                <div class='card text-light bg-success mb-3 mt-5 mx-3' style='max-width: 18rem;'>
                                <div class='card-header'><h5 class='card-title'>Placed Queries</h5></div>
                                <div class='card-body'>
                                    <p class='card-text'>You have $row_count_queries  queries placed</p>
                                </div>
                                </div>
                                </div>";

                         }

                        }
                    } 
                }


               }

            }






//admin dashboard
function get_Admin_order_details(){
    global $conn;
    //selecting orders
    $select_orders="Select * from order_table where status!='Inactive'";
    $result_orders=mysqli_query($conn,$select_orders);
    $row_count=mysqli_num_rows($result_orders);
    if($row_count>=0){
        echo"
                             <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                <div class='card-header'><h3 class='card-title text-dark'>Total No of Orders</h5></div>
                                <div class='card-body'>
                                    <h2 class='card-text text-dark'>$row_count</h2>
                                </div>
                                </div>
        ";
    }
     //selecting orders_pending
     $select_orders_pending="Select * from order_table where order_stat='pending' and status!='Inactive'";
     $result_orders_pending=mysqli_query($conn,$select_orders_pending);
     $row_count_pending=mysqli_num_rows($result_orders_pending);
     if($row_count_pending>=0){
         echo"
                              <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                 <div class='card-header'><h3 class='card-title text-dark'>Total No of Pending Orders</h5></div>
                                 <div class='card-body'>
                                     <h2 class='card-text text-dark'>$row_count_pending</h2>
                                 </div>
                                 </div>
         ";
     }
     //selecting orders_complete
     $select_orders_complete="Select * from order_table where order_stat='complete' and status!='Inactive'";
     $result_orders_complete=mysqli_query($conn,$select_orders_complete);
     $row_count_complete=mysqli_num_rows($result_orders_complete);
     if($row_count_complete>=0){
         echo"
                              <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                 <div class='card-header'><h3 class='card-title text-dark'>Total No of Complete Orders</h5></div>
                                 <div class='card-body'>
                                     <h2 class='card-text text-dark'>$row_count_complete</h2>
                                 </div>
                                 </div>
         ";
     }
    // selecting products
    $select_products="Select * from products";
    $result_products=mysqli_query($conn,$select_products);
    $row_count_products=mysqli_num_rows($result_products);
    if($row_count_products>=0){
        echo"
                             <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                <div class='card-header'><h3 class='card-title text-dark'>Total No of Products</h5></div>
                                <div class='card-body'>
                                    <h2 class='card-text text-dark'>$row_count_products</h2>
                                </div>
                                </div>
        ";
    }

//categories
    $select_categories="Select * from categories where category_status!='Inactive'";
    $result_categories=mysqli_query($conn,$select_categories);
    $row_count_categories=mysqli_num_rows($result_categories);
    if($row_count_categories>=0){
        echo"
                             <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                <div class='card-header'><h3 class='card-title text-dark'>Total No of categories</h5></div>
                                <div class='card-body'>
                                    <h2 class='card-text text-dark'>$row_count_categories</h2>
                                </div>
                                </div>
        ";
    }
//queries
    $select_queries="Select * from queries";
    $result_queries=mysqli_query($conn,$select_queries);
    $row_count_queries=mysqli_num_rows($result_queries);
    if($row_count_queries>=0){
        echo"
                             <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                <div class='card-header'><h3 class='card-title text-dark'>Total No of queries</h5></div>
                                <div class='card-body'>
                                    <h2 class='card-text text-dark'>$row_count_queries</h2>
                                </div>
                                </div>
        ";
    }  
    
    //users
    $select_users="Select * from user_table where account_stat!='Inactive'";
    $result_users=mysqli_query($conn,$select_users);
    $row_count_users=mysqli_num_rows($result_users);
    if($row_count_users>=0){
        echo"
                             <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                                <div class='card-header'><h3 class='card-title text-dark'>Total No of Users</h5></div>
                                <div class='card-body'>
                                    <h2 class='card-text text-dark'>$row_count_users</h2>
                                </div>
                                </div>
        ";
    } 
//user_confirmed_payment
$select_user_confirmed_payment="Select * from user_payment where payment_stat!='Inactive'";
$result_user_confirmed_payment=mysqli_query($conn,$select_user_confirmed_payment);
$row_count_user_confirmed_payment=mysqli_num_rows($result_user_confirmed_payment);
if($row_count_user_confirmed_payment>=0){
    echo"
                         <div class='card text-light bg-light mb-3 mt-5 mx-4' style='max-width: 18rem;'>
                            <div class='card-header'><h3 class='card-title text-dark'>Total No of Confirmed payment</h5></div>
                            <div class='card-body'>
                                <h2 class='card-text text-dark'>$row_count_user_confirmed_payment</h2>
                            </div>
                            </div>
    ";
} 

}


// discounting total price
function discount($n){
    $price=$n;
    if($price>=2000 and $price<5000){
        $discount=($price*(2.75/100));
        
    }elseif($price>=5000 and $price<15000){
        $discount=($price*(3/100));
        
    }elseif($price>=15000 and $price<20000){
        $discount=($price*(5/100));
        
    }elseif($price>=20000 and $price<35000){
        $discount=($price*(7/100));
        
    }elseif($price>=35000 and $price<45000){
        $discount=($price*(8/100));
        
    }elseif($price>=45000 and $price<60000){
        $discount=($price*(9/100));
        
    }elseif($price>=60000 and $price<80000){
        $discount=($price*(10/100));
        
    }elseif($price>=80000 and $price<100000){
        $discount=($price*(11/100));
        
    }elseif($price>=100000){
        $discount=($price*(12/100));
        
    }else{
        $discount=0;
    }
    return $discount;
}

?>