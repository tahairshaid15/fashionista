<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
  // استلام القيم من النموذج
  $size = $_POST['size'];
  $color = $_POST['color'];
  $buyer_name = $_POST['buyer_name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $notes = $_POST['notes'];
  $product_id = $_POST['product_id'];
  $delivery_cost = $_POST['delivery_cost'];

  // إدراج البيانات في قاعدة البيانات
  $query = "INSERT INTO buying (size, color, name, cite, number, comments)
            VALUES ('$size', '$color', '$buyer_name', '$address', '$phone', '$notes')";

  if ($conn->query($query) === TRUE) {
    // تم إدراج البيانات بنجاح
    echo "تم شراء المنتج بنجاح.";
  } else {
    // حدث خطأ أثناء إدراج البيانات
    echo "حدث خطأ أثناء شراء المنتج: " . $conn->error;
  }
}

$conn->close();
?>
