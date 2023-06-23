<!DOCTYPE html>

<?php include "db.php" ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/trending.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <title>Document</title>
    <style>
      .vertical {
        border-left: 1px solid #f2f2f2;
        height: 32px;
        margin-left: 10px;
      }
    </style>


  </head>
  <body>
    <!-- ---------header start-------- -->
     <header>
      <!-- Logo -->
      <div class="logo">
        <a href="index.html"
          ><img src="assets/images/logo.png" alt="AliBaba Logo" class="logo"
        /></a>
      </div>

      <!-- Search Bar -->
      <div class="search-bar">
        <form class="search" action="searchProd.php">
          <button class="product__btn">Products</button>
          <div class="vertical"></div>
          <input
            type="search"
            class="search__input"
            name="search"
            placeholder="What are you looking for"
          />
          <div class="bg-logo">
            <img
              src="assets/images/icons/search.png"
              alt=""
              style="width: 1.3rem; height: 1.3rem"
            />
          </div>
          <button class="search__btn">Search</button>
        </form>
      </div>

      <!-- working on right button of header -->

      <div class="dropdown dropdown-profile">
        <!-- sign-in-btn Button -->
        <button class="dropbtn1">
          <img
            src="assets/images/icons/profile.png"
            alt="Profile"
            width="50rem"
            height="50rem"
          />
        </button>
        <div class="dropdown-content dropdown-profile-top-rad">
          <p style="margin-left: 20px">Get started now</p>
          <div class="btn1-content">
            <a href="#" id="sign-in-btn">Sign In</a>
            <p>or</p>
            <a href="#">Join Free</a>
            <p>Continue with</p>
            <div class="social-icons">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-google"></a>
              <a href="#" class="fa fa-linkedin"></a>
              <a href="#" class="fa fa-twitter"></a>
            </div>
            <div class="chk-box">
              <input type="checkbox" name="checkbox" id="checkbox" />I agree to
              <br />
              <label id="chk-boc-content">Free MemberShip Agreeement</label>
              <br />
              <input type="checkbox" name="checkbox" id="checkbox" />I agree to
              <br />
              <label id="chk-boc-content">Receive MArkeeting Material</label>
            </div>
            <div class="signin-alibaba-content">
              <a href="#" id="signin-alibaba-content1">My AliBaba</a>
              <a href="#" id="signin-alibaba-content">Manage RFQ</a>
              <a href="#" id="signin-alibaba-content">My Favpourits</a>
              <a href="#" id="signin-alibaba-content">My Account</a>
              <hr />
              <a href="#" id="signin-alibaba-content">JSupplier Membership</a>
              <a href="#" id="signin-alibaba-content"
                >Get Multiple Quates in 24hoyrs!</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="right-icons">
        <!-- messages Button -->
        <div class="dropdown dropdown-content-2">
          <button class="dropbtn2">
            <img
              src="assets/images/icons/message.png"
              alt="Profile"
              width="40rem"
              height="40rem"
            />
          </button>
          <div class="dropdown-content">
            <div class="msg-box">
              <label><strong>Unread message reminder</strong> </label>
              <p style="text-align: left">
                We will remind you here when there is new message. Please log in
                to view.
              </p>
              <button id="sign-in-btn2">Sign In</button>
              <p style="text-align: left; font-size: 0.8rem">
                New user? Please register and start your business!
              </p>
            </div>
          </div>
        </div>

        <!-- Cart Button -->
        <div class="dropdown dropdown-content-4">
          <button class="dropbtn4">
            <img
              src="assets/images/icons/cart.png"
              alt="Profile"
              width="35rem"
              height="35rem"
            />
          </button>
          <!-- Cart Button  Drop Down-->
          <div class="dropdown-content">
            <p id="cart-content">Yor are not Logged in. Please Login</p>
          </div>
        </div>
      </div>
    </header>
    <!-- ------------header end--------------- -->

    <!-- -------------nav bar start--------  -->
    <br> <br> 
   <nav class="topnav">
  <div class="buttons">
      <a class="active" href="#home">Home</a>
      <a href="">Ready to Ship</a>
      <a href="">Trade Shows</a>
      <a href="">Personal Protective Equ...</a>
      <a href="">Buyer Central</a>
      <a href="">Sell on Ali Baba</a>
      <a href="">Help</a>
    </div>
      <div class="topnav-right">
      
        <a href="#search">Get The App</a>
        <a href="#about">English-USD</a>
        <a href="#about">Ship to</a>
      </div>
 
   </nav>

    <br> <br> 
    <!-----------------Product Cards--------------------->
 <section>
  <div class="Row1">
          <h4>Recommended for you</h4>
        </div>
  <div class="section-cards">

  <div class="cards">

   <?php
    $product_query = "select * from products";

    $result = mysqli_query($con, $product_query);

    $row = mysqli_num_rows($result);


    if ($row > 0) {

    while ($data = mysqli_fetch_assoc($result)) {

      $id = $data['id'];
      $desc = $data['description'];
      $price = $data['price'];
      $quantity = $data['quantity'];
      $img = $data['image'];
      $imgFile = "./assets/cards-img/".$img;

        echo '<div class="card">';
        echo '<form method="post" action="cart.php">';
       echo '<input type="hidden" name="productId" value="' . $id . '">'; 
      echo '

            <img src="./assets/cards-img/'.$img .'" height="230" width="230" />
            <div class="tags">
              <div class="title"> '. $desc . '</div>
              <div class="ship"><span class="work">Ready to Ship</span></div>
              <div class="price">'. $price .'</div>
              <div class="pieces"> <b> '. $quantity .'</b> Pieces (MOQ) </div>
              <div class="small logo">
                <img src="assets/cards-img/cn.png" height="11" width="15" />
                <img src="assets/cards-img/cn.png" height="11" width="15" />
                <span class="cn">CN</span>
                <img src="assets/cards-img/2yr.png" height="15" width="28" />
                <img src="assets/cards-img/ta.png" height="15" width="16" />
                <img src="assets/cards-img/gs.png" height="15" width="16" />
                <button type="submit">Add to Cart</button> 
              </div>
            </div>
        </form>
        </div> ';

       }
    }

    ?>
    </div>
  
  </div>
</section>

   <!-- ------------footer starts---------- -->


    <footer class="ui-footer" id="ui-footer">
        <hr>
        <div class="footer" >
            <p id="ui-footer1">
                <a target="_blank" href="">Ali Express</a> |
                <a target="_blank" href="">1688.com</a> |
                <a target="_blank" href="">Taobao Global</a> |
                <a target="_blank" href="">Alipay</a> |
                <a target="_blank" href="">Lazada</a> |
            </p>

            <p id="ui-footer2">
                Browse Alphabetically:
                <a target="_blank" href="">One Touch</a> |
                <a target="_blank" href="">Showroom</a> |
                <a target="_blank" href="">Country Search</a> |
                <a target="_blank" href="">Suppliers</a> |
                <a target="_blank" href="">Affiliate</a> |

            </p>
            <p id="ui-footer3">
                <a target="_blank" href="">Product Listing Policy</a>-
                <a target="_blank" href="">Intellectual Property Protection</a>-
                <a target="_blank" href="">Privacy Policy</a>-
                <a target="_blank" href="">Term of Use</a>-
                <a target="_blank" href="">User Information Legal Enquiry Guide</a>
            </p>

            <p id="ui-footer4" ">
                <a target="_blank" href=""><img src="https://img.alicdn.com/tfs/TB1VtZtebH1gK0jSZFwXXc7aXXa-65-70.gif" style="height: 28px; width: 26px; vertical-align: middle; margin-right: 6px;" alt="" ">&copy</a>
                1999-2020 Alibaba.com. All rights reserved.
                <a target="_blank" href=""><img src="https://img.alicdn.com/tfs/TB1QhYprKT2gK0jSZFvXXXnFXXa-20-20.png" alt=""> 浙公网安备 33010002000092号</a>
                <a target="_blank" href="">浙B2-20120091</a>
            </p>
        </div>
    </footer>
    <!-- ------------------footer ends----------- -->
  </body>
</html>
