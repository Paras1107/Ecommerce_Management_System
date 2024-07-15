<?php
include('functions/common_functions.php');
include('./users/session_timeout.php');
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
<style>
</style>
<body>
<!--navbar-->
<?php include('includes/header.php');?>


        <!--Third child-->
        <div class="bg-light">
        <h2 class="display-3 text-center">Let us take care of all your shopping needs!</h2>
        </div>

<!--Offer-->
<section id="offer">
  <h4>Trade-offer</h4>
  <h2>Super-deals</h2>
  <h1>On all our products</h1>
  <p>Save more! upto 12%</p>
 <a href="display_products.php#products"> <button>Shop now</button></a>
</section>


   
      <!--fourth child-->
        <!--products-->
        <div class="row mx-auto container-fluid">
        <!-- fetching -->
        <?php
        //calling function to get products
        getproducts();
        get_uniq_categories();
        getIPAddress();
        ?> 
            </div>

<!--features-->
     <div class="bg-transparent mt-4">
     <hr class="mx-auto">
        <h2 class="display-3 text-center text-dark">We aim to provide the very best services we can!</h2>
        <hr class="mx-auto">
      </div>
<section id="features" class="fea-b">
  <div class="feab">
    <img src="./icons/delivery.jpg" alt="" style="width:90px;height:80px;">
    <h6>Home Delivery</h6>
  </div>
  <div class="feab">
    <img src="./icons/service.png" alt="" style="width:90px;height:80px;">
    <h6>Online Service</h6>
  </div>
  <div class="feab">
    <img src="./icons/loyalty.png" alt="" style="width:90px;height:80px;">
    <h6>Customer Loyalty</h6>
  </div>
  <div class="feab">
    <img src="./icons/return.jpg" alt="" style="width:90px;height:80px;">
    <h6>Return Policy</h6>
  </div>
  <div class="feab">
    <img src="./icons/Pay.jpg" alt="" style="width:90px;height:80px;">
    <h6>Online Payment</h6>
  </div>
  <div class="feab">
    <img src="./icons/saving.png" alt="" style="width:90px;height:80px;">
    <h6>Save Money</h6>
  </div>
</section>
                
<!--footer-->
<?php include('includes/footer.php');?>

    <!--bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
      setTimeout(function() {
    document.querySelector('alert').remove();
}, 4000);
    </script>
</body>
</html>