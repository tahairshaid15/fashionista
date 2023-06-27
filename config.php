<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fashionista";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("فشل في الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

?>