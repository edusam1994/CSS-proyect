<!DOCTYPE>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <?php
      include("header.php");
?>
    </header>
<main class="product_main">
  <div class="container">
  <?php
$images = array("./images/usama-akram-kP6knT7tjn4-unsplash.jpg","./images/the-dk-photography-NUoPWImmjCU-unsplash.jpg","./images/skyler-smith-RsooE37GVw0-unsplash.jpg","./images/sebastien-chiron-1LFXMyrFRNw-unsplash.jpg","./images/samuel-lopes-FUR3LNiI2jc-unsplash.jpg","./images/maksim-larin-1vy2QcZd5FU-unsplash.jpg","./images/luis-felipe-lins-J2-wAQDckus-unsplash.jpg","./images/irene-kredenets-dwKiHoqqxk8-unsplash.jpg","./images/danilo-capece-NoVnXXmDNi0-unsplash.jpg","./images/branislav-belko-lJ7iAZxplpc-unsplash.jpg","./img/Ultraboost.jpg","./img/NMD-R1.jpg","./img/light-small.png","./img/NMD-Black-600.png","./img/NMD-Black-1200.png","./img/NMD-Black-Cover.png");
foreach($images as $image){
  $url = "'".$image."'";
  echo "<div class='product_card'>
          <div class='shoe-img product' > <img src=$url alt='shoes' height='100%' width='100%'/></div>
          <h4>Nike Air</h4>
          <p>The Nike Air is a classic shoe known for its iconic design and exceptional comfort</p>
          <a href='payment_method.php'><button class='btn'>Buy Now</button></a>
        </div>";
};

?>
  </div>
</main>
  </body>
</html>