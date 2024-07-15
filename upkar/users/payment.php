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

    body{
    background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    
}
.card{
    margin: auto;
    width: 600px;
    padding: 3rem 3.5rem;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}



.card-title{
    font-weight: 700;
    font-size: 2.5em;
}
.nav{
    display: flex;
}
.nav ul{
    list-style-type: none;
    display: flex;
    padding-inline-start: unset;
    margin-bottom: 6vh;
}
.nav li{
    padding: 1rem;
}
.nav li a{
    color: black;
    text-decoration: none;
}
.active{
    border-bottom: 2px solid black;
    font-weight: bold;
}
ul{
    
list-style-type: none;

}
ul a{
    text-decoration: none;
}
ul li{
    transition: transform 0.3s ease-in-out;
    box-shadow: 10px 10px 54px rgba(25, 24, 24, 0.1);
}
ul li:hover{
    transform: scale(1.2);
}

</style>
<body>
<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
$ip=getIPAddress();
$user="select * from user_table where user_ip='$ip' and account_stat!='Inactive'";
$result=mysqli_query($conn,$user);
$row=mysqli_fetch_array($result);
$user_id=$row['uid'];
?>
<!-- Modal -->
<div class="card mt-50 mb-50">
            <div class="card-title mx-auto">
                Payment Partners
            </div>
            
            <div class="container mx-auto text-center p-3">
                    <div class="row d-flex justify-content-center align-items-center">
                <ul class="mx-auto">
                   <li class="mb-2 p-3"> <a href="https://www.esewa.com.np" class=""><img src="../images/esewa-icon-large.png" style=" width:50px; height:50px;" disabled></a>
                      <a href="" class="">Pay with Esewa</a>
                   </li>
                   <li class="mb-2 p-3"> <a href="https://www.khalti.com" class=""><img src="../images/khalti.png" style=" width:100px; height:50px;" disabled></a>
                      <a href="" class="">Pay with khalti</a>
                   </li>
                   <li class="mb-2 p-3"> <a href="https://www.fonepay.com" class=""><img src="../images/fonepay_logo.png" style=" width:80px; height:50px;" disabled></a>
                      <a href="" class="">Pay with Fonepay</a>
                   </li>
                   <li class="mb-2 p-3">
                <a href="" class="" disabled>Cash Payment</a>           
                </li>
                <li class="mb-2 p-3">
                <a href="order_page.php?user_id=<?php echo $user_id;?>" class=" btn btn-outline-success">Proceed</a>           
                </li>
                <li class="mb-2 p-3">
                <a href="../cart.php" class="">Go back to Cart <i class="fa-solid fa-arrow-right-from-bracket fa-fade"></i></a>           
                </li>
                  </ul>
            </div>
            </div>
        </div>
</body>
</html>
