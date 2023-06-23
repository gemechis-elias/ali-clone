<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/trending.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <title>Alibaba Clone</title>
</head>
<body>
    <!-- Nav Header Component -->
<header>
      <!-- Logo -->
      <div class="logo">
        <a href="index.php"
          ><img src="assets/images/logo.png" alt="Alibaba logo" class="logo"
        /></a>
      </div>

      <!-- Search Bar -->
      <div class="search-bar">
        <form class="search">
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

      <!-- Working on right button of header -->
        <a id="sign-in-btn2" href="./sign_in.php">Sign In</a>
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
          <div>
            
          </div>
        </div>

        <!-- Order Button  -->
        <div class="dropdown dropdown-content-3">
          <button class="dropbtn3">
            <img
              src="assets/images/icons/order.png"
              alt="Profile"
              width="35rem"
              height="35rem"
            />
          </button>
          
        </div>

        <!-- Cart Button -->
          <button class="dropbtn4">
            <img
              src="assets/images/icons/cart.png"
              alt="Profile"
              width="35rem"
              height="35rem"
            />
          </button>
      </div>
    </header>
</body>
</html>