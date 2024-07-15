<style>
  #footer {
          border-radius: 15px 50px;
          padding: 20px; 
                }
  .sec-one {
    
  padding: 10px;
  box-shadow: 5px 7px 15px #888888;
  }
</style>
<footer class="mt-5 py-5" id="footer">
  <div class="row container mx-auto gx-5">
    <div class="sec-one col-lg-3 col-md-6 col-12">
    <img src="./images/upakar-mart-high-resolution-logo-transparent.png" alt="image" width="70" height="70">
<p class="pt-3">
Upakar Mart is your one-stop shop for all your daily needs. Conveniently located in the heart of the city, Upakar offers a wide range of products, including groceries, snacks, beverages, toiletries, and household items. With its friendly staff and quick service, Upakar aims to provide customers with a hassle-free shopping experience. Whether you need to grab a quick snack on the go or stock up on essentials, Upakar has got you covered.
</p>
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
    <div class="sec-one col-lg-3 col-md-6 col-12 overflow-hidden">
    <h5 class="pb-2">Submit your Queries</h5>
    <form action="" method="post">
            <div class="col-12">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name"  id="name" placeholder="Name" autocomplete="on" required>
              </div>
              <!-- contact -->
              <div class="col-12">
                <label for="contact" class="form-label">Contact/Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="contact"  id="contact" placeholder="Where can we reach you?" autocomplete="on" required>
              </div>
              <div class="col-12">
                <label for="details" class="form-label">Details <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="details"  id="details" placeholder="Your issues here" autocomplete="off" required>
              </div>
              
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                  <label class="form-check-label text-secondary" for="iAgree">
                    I agree to the <a href="./includes/abd.php" class="">Terms and Conditions</a>
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <input type="submit" value="Submit" class="btn bsb-btn-xl btn-warning" name="submit">
                </div>
                </div>
                </form>
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
  </div>

    <?php
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $details=$_POST['details'];
    $query="insert into queries (name,contact,detail,date) values('$name','$contact','$details',NOW())";
    $result=mysqli_query($conn,$query);
    if($result){
    echo"<script>alert('Your query has been submitted :)')</script>";
    }
  }
    ?>

</footer>