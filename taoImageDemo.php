<?php

// Tạo đối tượng hình ảnh mới với kích thước và định dạng mong muốn
$image = imagecreatetruecolor(800, 600);

// Tải hình ảnh nền
//https://vcbdigibank.vietcombank.com.vn/assets/images/web/img/bg/bg-default-mb.jpg
$background = imagecreatefromjpeg('path/to/background.jpg');

// Sao chép hình ảnh nền vào hình ảnh mới
imagecopy($image, $background, 0, 0, 0, 0, 800, 600);

// Thiết lập màu chữ cho hóa đơn
$textColor = imagecolorallocate($image, 0, 0, 0);

// Thiết lập thông tin hóa đơn
$invoiceNumber = "INV12345";
$customerName = "John Doe";
$amount = "$100.00";

// Vẽ các thành phần của hóa đơn lên hình ảnh
imagettftext($image, 20, 0, 50, 100, $textColor, 'path/to/font.ttf', "Invoice Number: $invoiceNumber");
imagettftext($image, 20, 0, 50, 150, $textColor, 'path/to/font.ttf', "Customer Name: $customerName");
imagettftext($image, 20, 0, 50, 200, $textColor, 'path/to/font.ttf', "Amount: $amount");

// Đặt header để hiển thị hình ảnh như một hình ảnh PNG
header('Content-Type: image/png');

// Xuất hình ảnh thành file hoặc hiển thị trực tiếp
imagepng($image);
imagedestroy($image);
