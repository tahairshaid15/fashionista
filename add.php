<?php
// اتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashionista";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استلام البيانات من النموذج
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

// حفظ الصورة في المسار المطلوب
$target_dir = "images/";
$target_file = $target_dir . basename($image);
move_uploaded_file($tmp_name, $target_file);

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO users (name, category, price, image) VALUES ('$name', '$category', '$price', '$image')";

if ($conn->query($sql) === TRUE) {
    // جلب معرف المنتج الجديد المضاف لقاعدة البيانات
    $product_id = $conn->insert_id;

    // إعادة التوجيه إلى الصفحة الخاصة بالمنتج وتمرير معرف المنتج كمعامل في عنوان URL
    switch ($category) {
        case "عناية شخصية":
            header("Location: 3nayh.php?id=$product_id");
            break;
        case "ملابس منزلية وبيجامات":
            header("Location: bjama.php?id=$product_id");
            break;
        case "ملابس داخلية":
            header("Location: dakle.php?id=$product_id");
            break;
        case "اكسسوارات":
            header("Location: exwar.php?id=$product_id");
            break;
        case "فساتين":
            header("Location: fostan.php?id=$product_id");
            break;
        case "أحذية وحقائب":
            header("Location: hkeba.php?id=$product_id");
            break;
        case "لانجري":
            header("Location: langre.php?id=$product_id");
            break;
        case "أطقم":
            header("Location: tqm.php?id=$product_id");
            break;
        default:
            header("Location: montg.php");
    }
} else {
    echo "خطأ في إدخال البيانات: " . $conn->error;
}

$conn->close();
?>
