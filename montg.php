<!DOCTYPE html>
<html>
<head>
  <title>إضافة منتج</title>
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
      font-size: 36px;
      text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff, 0 0 40px #ff00ff, 0 0 80px #ff00ff;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid #ff00ff;
      border-radius: 10px;
      box-shadow: 0 0 10px #ff00ff;
    }

    label {
      display: block;
      margin-top: 10px;
      font-size: 18px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      background-color: #222;
      color: #fff;
    }

    input[type="file"] {
      margin-top: 10px;
    }

    input[type="submit"] {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 20px;
      border-radius: 5px;
      border: none;
      background-color: #ff00ff;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #ff00ff;
      color: #000;
    }
  </style>
</head>
<body>

  <h1>إضافة منتج</h1>

  <form style="direction: rtl;" action="add.php" method="post" enctype="multipart/form-data">
    <label for="name">اسم المنتج:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="category">القسم:</label>
    <select  id="category" name="category" required>
      <option value="3nayh.php">منتجات عناية شخصية</option>
      <option value="bjama.php">ملابس منزلية وبيجامات</option>
      <option value="dakle.php">ملابس داخلية</option>
      <option value="exwar.php">اكسسوارات</option>
      <option value="fostan.php">فساتين</option>
      <option value="hkeba.php">أحذية وحقائب</option>
      <option value="langre.php">لانجري</option>
      <option value="tqm.php">أطقم</option>
    </select><br><br>

    <label for="price">السعر:</label>
    <input type="text" id="price" name="price" required><br><br>

    <label for="image">صورة المنتج:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br><br>

    <input type="submit" name="upload" value="إضافة المنتج">
    
  </form>
  <style>
    .professional-button {
  display: inline-block;
  background-color: #ff00ff;
  border: none;
  color: white;
  text-align: center;
  font-size: 16px;
  padding: 10px 24px;
  cursor: pointer;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.professional-button:hover {
  background-color: #45a049;
}
form.home {
    float: right;
    margin: -29% 0%;
}
a {
    text-decoration: none;
    color: white;
    font-size: 30px;
}
a:hover {
  color:pink;
  font-size: 33px;
}
li {
    list-style-type: none;
    border: 2px magenta solid;
}
ul {
    text-align: center;
}
  </style>
  <form class="home" action="home.php" method="post">
  <button type="submit" class="professional-button">الذهاب للموقع</button>
  <h2  style="text-align: center;">الأقسام</h2>
  <ul>
      <li><a href="./fostan.php">فساتين</a></li>
      <li><a href="./tqm.php">أطقم</a></li>
      <li><a href="./bjama.php">ملابس منزلية وبيجامات</a></li>
      <li><a href="./langre.php">لانجري</a></li>
      <li><a href="./dakle.php">ملابس داخلية</a></li>
      <li><a href="./exwar.php">اكسسوارات</a></li>
      <li><a href="./3nayh.php">منتجات عناية شخصية</a></li>
      <li><a href="./hkeba.php">أحذية وحقائب</a></li>
    </ul>
</form>

  <script>
    // الجافا سكريبت للتحقق من صحة المدخلات وغيرها من العمليات الأخرى
    // ...
  </script>
</body>
</html>
