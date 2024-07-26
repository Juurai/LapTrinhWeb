<?php

// Thông tin kết nối
$servername = "localhost";
$username = "root";
$password = "0121"; // Mật khẩu của bạn
$dbname = "laptrinhweb";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>
