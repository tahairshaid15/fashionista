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
    .footer-text {
    width: 70%;
    margin: -42px 18%;
}
}
@media (max-width: 767px){
    .size {
    width: 70%;
    margin: -42px 18%;
}
}

.main {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.product-row {
    display: flex;
    width: 100%;
    justify-content: space-between;
    margin-bottom: 30px;
    color: white;
}
.product {
  width: 30%;
  background-color: #d1d1d1a8;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  position: relative;
  overflow: hidden;
}

.product:before {
  content: "";
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  z-index: -1;
  pointer-events: none;
  background-image: linear-gradient(45deg, #f900ff, #00dbde, #fc0aff, #fbff00);
  background-size: 400% 400%;
  animation: neon-border 3s linear infinite;
  border-radius: 10px;
}

.product img {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
  border-radius: 8px;
}

.product h3 {
  font-size: 40px;
  margin-bottom: 10px;
}

.product p {
    font-size: 32px;
  margin-bottom: 20px;
}

.buy-now {
  background-color: #333;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
}

.buy-now:hover {
  background-color: #45a049;
}

@keyframes neon-border {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

@media (max-width: 767px) {
  .products-grid {
    width: 100%;
  }

  .product {
    width: 100%; /* تغيير عرض المنتج إلى 100% */
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
a.buy-now {
    text-decoration: none;
}a.buy-now:hover {
   
   background-color: red;
}
@media (max-width: 767px){
.product h3 {
    font-size: 25px;
    
}
.product p{
    font-size: 25px;
}
}

</style>



    <title>Be fashionista</title>
</head>
<body>
<header>
  <div class="logo">
  <a href="./home.php"><img src="./image/logo.png" alt="شعار الموقع"></a>
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

<!-- في الصفحة products.php -->
<main class="products-grid">
  <?php
  // استيراد ملف الاتصال بقاعدة البيانات
  require_once 'config.php';

  // استعلام لاسترداد بيانات المنتجات
  $page = "exwar.php"; // اسم الصفحة الحالية
  $sql = "SELECT * FROM users WHERE category = '$page'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $counter = 0;
    while ($row = $result->fetch_assoc()) {
      if ($counter % 3 === 0) {
        echo '<div class="product-row">';
      }

      // عرض بيانات المنتج هنا
      echo '<div class="product">';
      echo '<a href="pay.php?product_id=' . $row['id'] . '&page=' . $page . '">';
      echo '<img src="images/' . $row['image'] . '" alt="' . $row['name'] . '">';
      echo '</a>';
      echo '<h3>' . $row['name'] . '</h3>';
      echo '<p>' . $row['price'] . ' دينار </p>';
      echo '<a href="pay.php?product_id=' . $row['id'] . '&page=' . $page . '" class="buy-now">اشتري الآن</a>';
      echo '</div>';

      $counter++;

      if ($counter % 3 === 0) {
        echo '</div>';
      }
    }

    // التأكد من إغلاق الصف الأخير إذا كان عدد المنتجات ليس مضاعفًا لـ 3
    if ($counter % 3 !== 0) {
      echo '</div>';
    }
  } else {
    echo "لا توجد منتجات في هذا القسم.";
  }

  // إغلاق الاتصال بقاعدة البيانات
  $conn->close();
  ?>
</main>





<footer style="bottom: 0; left: 0; right: 0;">
<div class="footer-text" style="direction: rtl;">
  <span class="size">حقوق الطبع والنشر <br> &#169; Be fashionista </span>
  <span class="programmer">المبرمج: <a class="programming" target="_blank" href="https://web.facebook.com/profile.php?id=100056526041664">Taha Irshaid</a></span>
</div>
</footer>


<script src="./javascript/home.js"></script>
</body>
</html>