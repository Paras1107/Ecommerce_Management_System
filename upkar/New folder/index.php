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
  </head>
  <body>
    <!--navbar-->
   <nav class="navbar navbar-expand-lg bg-body-tertiary p-0" id="navbar">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php">
      <img src="./images/upakar-mart-high-resolution-logo-transparent.png" alt="image" width="70" height="70">
     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Products.php">Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Featured-products">Best Sellers</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="Products.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sign In/Up
          </a>
          <ul class="dropdown-menu">
            <li><a href="signin.php" class="dropdown-item" href="#">Sign In</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="signup.php" class="dropdown-item" href="#">Sign Up</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
</form>

    </div>
  </div>
</nav>
 
<!-- second frame -->
<h3 class="display-3 text-center">Let us take care of all your shopping needs!</h3>

<!--Offer-->
<section id="offer">
  <h4>Trade-offer</h4>
  <h2>Super-deals</h2>
  <h1>On all our products</h1>
  <p>Save more! upto 12%</p>
 <a href="Products.php"> <button>Shop now</button></a>
</section>

<!--features-->
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


<!--featured products-->
<section id="Featured-products" class="my-5 pb-5">
<div class="container text-center mt-5 py-5">
  <h2>Our Best Sellers</h2>
  <hr class="mx-auto">
  <p>Check out our best selling items</p>
</div>
  <div class="row mx-auto container-fluid d-flex-wrap">
    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/kitchen/pan.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>kevlar</span>
      <h5 class="p-name">Frying Pan</h5>
      <h4 class="p-price">Rs:500</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img  src="./images/electric/Water-Heater.jpg" class="img-fluid mb-3" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>Marc</span>
      <h5 class="p-name">Electric Heating Rod</h5>
      <h4 class="p-price">Rs:1500</h4>
      <a href="#" class="btn btn-primary" role="button">Add To Cart <i class="fa-solid fa-cart-shopping"></i></a>
    </div>

    <div class="product-det text-center col-lg-3 col-md-4 col-12">
    <img class="img-fluid mb-3" src="./images/stationary/crayons.jpg" alt="" style="height:150px;">
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <span>crayola</span>
      <h5 class="p-name">Coloring Crayons</h5>
      <h4 class="p-price">Rs:180</h4>
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
   </div>
   <div class="col text-center d-flex-wrap">
   <button class="btn btn-outline-dark btn-sm">View More <i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>


<!--banner for year end sale-->
<section id="banner">
  <div class="container my-5 py-5">
  <h4>YEAR END SALE</h4>
  <h1>AUTUMN Collection<br>UPTO 20% OFF</h1>
 <a href="Products.php"> <button class=" btn btn-success text-uppercase">Shop now</button></a>
  </div>
</section>

<!--grocery section-->
<section id="Groceries" class="my-5 pb-5">
<div class="container text-center mt-5 py-5">
  <h2>Groceries</h2>
  <hr class="mx-auto">
  <p>Check out our collection of Groceries</p>
</div>
  <div class="row mx-auto container-fluid d-flex-wrap">
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
   </div>
   <div class="col text-center d-flex-wrap">
   <button class="btn btn-outline-dark btn-sm">View More <i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>

<!--stationary-->
<section id="Stationary" class="my-5 pb-5">
<div class="container text-center mt-5 py-5">
  <h2>Stationary</h2>
  <hr class="mx-auto">
  <p>Check out our collection of Stationary Equipment</p>
</div>
  <div class="row mx-auto container-fluid d-flex-wrap">
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

<!--electrical-->
<section id="Electrical" class="my-5 pb-5">
<div class="container text-center mt-5 py-5">
  <h2>Electrical Appliances</h2>
  <hr class="mx-auto">
  <p>Check out our collection of Electrical Appliances</p>
</div>
  <div class="row mx-auto container-fluid d-flex-wrap">
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
   </div>
   <div class="col text-center d-flex-wrap">
   <button class="btn btn-outline-dark btn-sm">View More <i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>

<!--kitchen-->
<section id="Kitchen" class="my-5 pb-5">
<div class="container text-center mt-5 py-5">
  <h2>Kitchen</h2>
  <hr class="mx-auto">
  <p>Check out our collection of Kitchen Supplies</p>
</div>
  <div class="row mx-auto container-fluid d-flex-wrap">
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
   </div>
   <div class="col text-center d-flex-wrap">
   <button class="btn btn-outline-dark btn-sm">View More <i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>

<!--Beverages-->
<section id="Beverages" class="my-5 pb-5">
<div class="container text-center mt-5 py-5">
  <h2>Beverages</h2>
  <hr class="mx-auto">
  <p>Check out our collection of Beverages</p>
</div>
  <div class="row mx-auto container-fluid d-flex-wrap">
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
   </div>
   <div class="col text-center d-flex-wrap">
   <button class="btn btn-outline-dark btn-sm">View More <i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>


<!--footer section-->

<footer class="mt-5 py-5" id="footer">
  <div class="row container mx-auto">
    <div class="sec-one col-lg-3 col-md-6 col-12">
    <img src="./images/upakar-mart-high-resolution-logo-transparent.png" alt="image" width="70" height="70">
<p class="pt-3">
Upakar Mart is your one-stop shop for all your daily needs. Conveniently located in the heart of the city, Upakar offers a wide range of products, including groceries, snacks, beverages, toiletries, and household items. With its friendly staff and quick service, Upakar aims to provide customers with a hassle-free shopping experience. Whether you need to grab a quick snack on the go or stock up on essentials, Upakar has got you covered.
</p>
    </div>
    <div class="sec-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Featured</h5>
      <ul class="text-uppercase list-unstyled">
        <li><a href="#Groceries">Groceries</a></li>
        <li><a href="#Stationary">Stationary</a></li>
        <li><a href="#Electrical">Electrical</a></li>
        <li><a href="#Kitchen">Kitchen</a></li>
        <li><a href="#Beverages">Drinks</a></li>
      </ul>
    </div>

    <div class="sec-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Contact Us</h5>
      <div>
      <h6 class="text-uppercase">Address</h6>
      <p>123 STREET NAME, CITY ,NEPAL</p>
    </div>
    <div>
      <h6 class="text-uppercase">Phone</h6>
      <p>+9779812343212</p>
    </div>
    <div>
      <h6 class="text-uppercase">Email</h6>
      <p>123@gmail.com</p>
    </div>
    </div>
     
    <div class="sec-one col-lg-3 col-md-6 col-12">
      <h5 class="pb-2">Facebook</h5>
      <div class="row">
        <img class="img-fluid w-25 h-100 m-2" src="./images/facebook/1.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./images/facebook/2.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./images/facebook/3.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./images/facebook/4.jpg" alt="">
        <img class="img-fluid w-25 h-100 m-2" src="./images/facebook/5.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="copyright mt-5">
  <div class="row container mx-auto">
    <div class="col-lg-3 col-md-6 col-12">
      <img class="img-fluid w-25 h-100 m-2" src="./images/payments.jpg" alt="">
    </div>
    <div class="col-lg-4 col-md-6 col-12 text-nowrap text-center">
    <p>All Rights Reserved @2024 Designed by Paras</p>
   </div>
   <div class="col-lg-4 col-md-6 col-12">
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
   </div>
  </div>
</footer>

    <!--bootstrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  </body>
</html>