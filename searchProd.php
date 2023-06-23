<?php
// Connect to the database
include "db.php";
?>

<html>

<head>
</head>
<header>
<div class="logo">
        <a href="index.html"
          ><img src="assets/images/logo.png" alt="AliBaba Logo" class="logo"
        /></a>
      </div>

</header>

<body>
<section>
  <div class="section-cards">

  <div class="cards">

<?php


    $search_query = $_GET['search'];
    $sql = "SELECT * FROM products WHERE description LIKE '%$search_query%'";
    $result = $con->query($sql); 
    $row = mysqli_num_rows($result);

    if ($row > 0) {

    while ($data = mysqli_fetch_assoc($result)) {

      $id = $data['id'];
      $desc = $data['description'];
      $price = $data['price'];
      $quantity = $data['quantity'];
      $img = $data['image'];
      $imgFile = "./assets/cards-img/".$img;

      echo '
        <div class="card" onClick=alert("clicked!")>
            <img src="./assets/cards-img/'.$img .'" height="230" width="230" />
            <div class="tags">
              <div class="title"> '. $desc . '</div>
              <div class="ship"><span class="work">Ready to Ship</span></div>
              <div class="price">'. $price .'</div>
              <div class="pieces"> <b> '. $quantity .'</b> Pieces (MOQ) </div>
              <div class="small logo">
                <img src="assets/cards-img/cn.png" height="11" width="15" /> <img src="assets/cards-img/cn.png" height="11" width="15" />
                <span class="cn">CN</span>
                <img src="assets/cards-img/2yr.png" height="15" width="28" />
                <img src="assets/cards-img/ta.png" height="15" width="16" />
                <img src="assets/cards-img/gs.png" height="15" width="16" />
              </div>
            </div>
        </div> ';

       }
    }

    ?>
    </div>
  
  </div>
</section>

</body>
</html>
