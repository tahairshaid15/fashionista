
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="./css/homee.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Harmattan&family=Rakkas&family=Reem+Kufi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-XXXXXXX" crossorigin="anonymous" />
   
   <style>
  @media (max-width: 767px) {
    .social-media {
      width: 12%;
    }
    .menu {
      width: 100%;
    }
  }
  @media (max-width: 767px){
.size {
    width: 70%;
    margin: 3px 1%;
}
}
@media (max-width: 767px){
   
.programmer {
    width: 115%;
    margin: 3px 1%;
}
}
</style>

    <title>Be fashionista</title>
</head>
<body>
<header>
  <div class="logo">
    <img src="./image/logo.png" alt="شعار الموقع">
  </div>
  <nav>
    <div class="menu-toggle">☰</div>
    <ul>
      <li><a href="./fostan.php">فساتين</a></li>
      <li><a href="./tqm.php">أطقم</a></li>
      <li><a href="./bjama.php">ملابس منزلية وبيجامات</a></li>
      <li><a href="./langre.php">لانجري</a></li>
      <li><a href="./dakle.php">ملابس داخلية</a></li>
      <li><a href="./exwar.php">اكسسوارات</a></li>
      <li><a href="./3nayh.php">منتجات عناية شخصية</a></li>
      <li><a href="./hkeba.php">أحذية وحقائب</a></li>
      <li><a class="signup" href="#">إنشاء حساب</a></li>
      <li><a class="login" href="#">تسجيل دخول</a></li>
    </ul>
  </nav>
</header>

<div class="menu">
  <ul class="social-media">
    <li>
      <a class="facebook neon-effect" href="https://www.facebook.com/BeFashionista66" data-platform="Facebook">
        <i class="fab fa-facebook-f"></i>
        <span class="platform-name">Facebook</span>
      </a>
    </li>
    <li>
      <a class="instagram neon-effect" href="https://www.instagram.com" data-platform="Instagram">
        <i class="fab fa-instagram"></i>
        <span class="platform-name">Instagram</span>
      </a>
    </li>
    <li>
      <a class="youtube neon-effect" href="https://www.youtube.com/channel/UCt78Nx7JQie6XI69ErqYMbA" data-platform="YouTube">
        <i class="fab fa-youtube"></i>
        <span class="platform-name">YouTube</span>
      </a>
    </li>
  </ul>
  <!--<button id="social-toggle" class="neon-effect">
    <span class="arrow"></span>
    <span class="text">السوشال ميديا</span>
  </button>-->
</div>

<style>
  .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  .btn-submit {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #ff00ff;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
  }

  .btn-submit:hover {
    background-color: #ff00dd;
  }

  .neon-text {
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    text-shadow: 0 0 5px rgba(255, 0, 255, 0.5);
  }

  .product-image {
    text-align: center;
  }

  .product-image img {
    max-width: 100%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .product-info {
    margin-top: 20px;
  }
</style>
<div class="container">
  <?php
  require_once 'config.php';

  if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    $query = "SELECT * FROM users WHERE id = $productId";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      ?>

      <div class="product-details" style="direction: rtl;">
        <div class="product-image">
          <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        </div>
        <div class="product-info">
          <h3><?php echo $row['name']; ?></h3>
          <p class="price"><?php echo $row['price']; ?> دينار</p>

          <form action="checkout.php" method="post" class="neon-form">
            <div class="form-group">
              <label for="size">حجم القطعة:</label>
              <input type="text" name="size" id="size">
            </div>

            <div class="form-group">
              <label for="color">لون القطعة:</label>
              <input type="text" name="color" id="color">
            </div>

            <div class="form-group">
              <label for="buyer_name">اسم المشتري:</label>
              <input type="text" name="buyer_name" id="buyer_name">
            </div>

            <div class="form-group">
              <label for="address">العنوان التفصيلي:</label>
              <input type="text" name="address" id="address">
            </div>

            <div class="form-group">
              <label for="phone">رقم الهاتف:</label>
              <input type="text" name="phone" id="phone">
            </div>

            <div class="form-group">
              <label for="notes">الملاحظات:</label>
              <textarea name="notes" id="notes"></textarea>
            </div>

            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="delivery_cost" value="2">
            <input type="submit" name="submit" value="شراء" class="btn-submit">
          </form>
        </div>
      </div>

      <?php
      $queryImages = "SELECT * FROM product_images WHERE product_id = $productId";
      $resultImages = $conn->query($queryImages);

      if ($resultImages && $resultImages->num_rows > 0) {
        ?>
        <div class="product-images">
          <?php
          while ($rowImage = $resultImages->fetch_assoc()) {
            ?>
            <img src="product_images/<?php echo $rowImage['image']; ?>" alt="<?php echo $rowImage['image']; ?>">
            <?php
          }
          ?>
        </div>
        <?php
      }

      $queryVideos = "SELECT * FROM product_videos WHERE product_id = $productId";
      $resultVideos = $conn->query($queryVideos);

      if ($resultVideos && $resultVideos->num_rows > 0) {
        ?>
        <div class="product-videos">
          <?php
          while ($rowVideo = $resultVideos->fetch_assoc()) {
            ?>
            <video src="product_videos/<?php echo $rowVideo['video']; ?>" controls></video>
            <?php
          }
          ?>
        </div>
        <?php
      }
    } else {
      echo "لا يوجد منتج بهذا الرقم.";
    }
  }

  $conn->close();
  ?>
</div>



<footer>
  

  <div class="footer-text" style="direction: rtl;">
    <span class="size">Be fashionista &#169; حقوق الطبع والنشر</span>
    <span class="programmer">المبرمج: <a class="programming" target="_blank" href="https://web.facebook.com/profile.php?id=100056526041664">Taha Irshaid</a></span>
  </div>
</footer>

<script src="./javascript/home.js"></script>

<script>

// const socialToggle = document.getElementById('social-toggle');
// const socialMedia = document.querySelector('.social-media');

// socialToggle.addEventListener('click', function() {
//   socialMedia.style.display = socialMedia.style.display === 'none' ? 'flex' : 'none';
// });



</script>
<script>

  var menu = document.querySelector('.menu');

  menu.addEventListener('mousemove', function(event) {
    var x = event.clientX;
    var y = event.clientY;
    menu.style.left = x + 'px';
    menu.style.top = y + 'px';
  });
</script>
</body>
</html>