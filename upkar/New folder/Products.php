<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upkar</title>
    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--fontlink-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <style>

        body > nav:nth-child(3) > ul > li.page-item.active > a{
              background-color: black;
           }
     .pagination a{
      color:beige;
     }
    </style>


  </head>
  <body>
    <!--navbar-->
   <?php include('includes/header.php');?>

<!--Products-->
<section id="products" class="my-5 py-5">
<div class="container text-center mt-5 py-5">
  <h2>Our Products</h2>
  <hr class="mx-auto">
  <p>Check out our wide range of items and collection of products</p>
</div>
  <div class="row mx-auto container d-flex-wrap">
  <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/groceries/potatoes.png" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>upakar</span>
      <h5 class="p-name">Potatoes(2kg)</h5>
      <h4 class="p-price">Rs:80</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/groceries/rice.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Newari Rice</span>
      <h5 class="p-name">Shahi Pulao Basmati Rice(20kg)</h5>
      <h4 class="p-price">Rs:3500</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/groceries/atta.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Gyan</span>
      <h5 class="p-name">Gyan Chakki Atta(5kg)</h5>
      <h4 class="p-price">Rs:400</h4>
      <a class="btn btn-primary" href="#" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/food/muesuli.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>kellogs</span>
      <h5 class="p-name">Muesuli 12 in 1</h5>
      <h4 class="p-price">Rs:680</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/stationary/gluestick.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Amos</span>
      <h5 class="p-name">Gluestick</h5>
      <h4 class="p-price">Rs:100</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/stationary/crayons.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Crayola</span>
      <h5 class="p-name">Crayon Colors(64)</h5>
      <h4 class="p-price">Rs:180</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/stationary/a4paper.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Double A</span>
      <h5 class="p-name">A4 size paper bundle</h5>
      <h4 class="p-price">Rs:800</h4>
      <a class="btn btn-primary" href="#" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/stationary/technopen.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Technotip</span>
      <h5 class="p-name">Ball Pen</h5>
      <h4 class="p-price">Rs:20</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/food/coke.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>coca-cola</span>
      <h5 class="p-name">Coca-Cola(2.25l)</h5>
      <h4 class="p-price">Rs:270</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/food/fruitjuice.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Real</span>
      <h5 class="p-name">Real Fruit Juice (1l)</h5>
      <h4 class="p-price">Rs:250</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/food/coolberg.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>coolberg</span>
      <h5 class="p-name">Coolberg</h5>
      <h4 class="p-price">Rs:280</h4>
      <a class="btn btn-primary" href="#" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/food/redbull.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Redbull</span>
      <h5 class="p-name">Redbull Energy Drink</h5>
      <h4 class="p-price">Rs:180</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/kitchen/spoon.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Hiware</span>
      <h5 class="p-name">Spoon</h5>
      <h4 class="p-price">Rs:40</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/kitchen/pan.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Kevlar</span>
      <h5 class="p-name">Frying Pan</h5>
      <h4 class="p-price">Rs:500</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/kitchen/plates.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>China Plates</span>
      <h5 class="p-name">White & Gold Plates</h5>
      <h4 class="p-price">Rs:200</h4>
      <a class="btn btn-primary" href="#" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/kitchen/knives.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Kitchenware</span>
      <h5 class="p-name">12 set Kitchen Knives</h5>
      <h4 class="p-price">Rs:1800</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/electric/Water-Heater.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Marc</span>
      <h5 class="p-name">Electric Water Heater Rod(1000v)</h5>
      <h4 class="p-price">1500</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/electric/bulb.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>LED Magic Bulb</span>
      <h5 class="p-name">Light Bulb(LED 7w)</h5>
      <h4 class="p-price">Rs:300</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/electric/lamp.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Mainstays</span>
      <h5 class="p-name">LED Lamp</h5>
      <h4 class="p-price">Rs:1000</h4>
      <a class="btn btn-primary" href="#" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/electric/cooker.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Panasonic</span>
      <h5 class="p-name">Rice Cooker</h5>
      <h4 class="p-price">Rs:2000</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/stationary/gluestick.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Amos</span>
      <h5 class="p-name">Gluestick</h5>
      <h4 class="p-price">Rs:100</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/stationary/crayons.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Crayola</span>
      <h5 class="p-name">Crayon Colors(64)</h5>
      <h4 class="p-price">Rs:180</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/stationary/a4paper.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Double A</span>
      <h5 class="p-name">A4 size paper bundle</h5>
      <h4 class="p-price">Rs:800</h4>
      <a class="btn btn-primary" href="#" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/stationary/technopen.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Technotip</span>
      <h5 class="p-name">Ball Pen</h5>
      <h4 class="p-price">Rs:20</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

   </div>
   <div class="col text-center d-flex-wrap">
   <button class="btn btn-outline-dark btn-sm">View More <i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="products2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="products3.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php include('includes/footer.php');?>

    <!--bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  </body>
</html>