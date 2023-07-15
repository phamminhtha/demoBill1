<?php


// // Tạo đối tượng hình ảnh mới với kích thước và định dạng mong muốn
// $image = imagecreatetruecolor(414, 896);
//
// // Tải hình ảnh nền
// //
// $background = imagecreatefromjpeg('https://vcbdigibank.vietcombank.com.vn/assets/images/web/img/bg/bg-default-mb.jpg');
//
// // Sao chép hình ảnh nền vào hình ảnh mới
// imagecopy($image, $background, 0, 0, 0, 0, 414, 896);
//
// // Thiết lập màu chữ cho hóa đơn
// $textColor = imagecolorallocate($image, 0, 0, 0);
//
// // Thiết lập thông tin hóa đơn
// $invoiceNumber = "INV12345";
// $customerName = "John Doe";
// $amount = "$100.00";
//
// // Vẽ các thành phần của hóa đơn lên hình ảnh
// // imagettftext($image, 20, 0, 50, 100, $textColor, 'path/to/font.ttf', "Invoice Number: $invoiceNumber");
// // imagettftext($image, 20, 0, 50, 150, $textColor, 'path/to/font.ttf', "Customer Name: $customerName");
// // imagettftext($image, 20, 0, 50, 200, $textColor, 'path/to/font.ttf', "Amount: $amount");
// // echo "aaa";
//
// imagestring($image, 5, 50, 100, "Invoice Number: $invoiceNumber", $textColor);
// imagestring($image, 5, 50, 150, "Customer Name: $customerName", $textColor);
// imagestring($image, 5, 50, 200, "Amount: $amount", $textColor);
//
//
// // Đặt header để hiển thị hình ảnh như một hình ảnh PNG
// header('Content-Type: image/png');
//
// // Xuất hình ảnh thành file hoặc hiển thị trực tiếp
// imagepng($image);
// imagedestroy($image);
//
// exit();

// use Knp\Snappy\Image;
//
// $wkhtmltoimagePath = '/bin/wkhtmltoimage-amd64'; // Đường dẫn tuyệt đối đến tệp thực thi wkhtmltoimage
// $htmlFile = 'index.html'; // Đường dẫn đến tệp tin HTML của bạn
// $imageFile = 'image.png'; // Đường dẫn để lưu tệp tin ảnh
//
// // Sử dụng lệnh wkhtmltoimage để tạo ảnh từ HTML
// exec("$wkhtmltoimagePath --format png $htmlFile $imageFile");
//
// // Kiểm tra xem tệp tin ảnh đã được tạo hay chưa
// if (file_exists($imageFile)) {
//     echo "Đã tạo thành công ảnh từ HTML.";
// } else {
//     echo "Không thể tạo ảnh từ HTML.";
// }
require_once 'vendor/autoload.php';

use Knp\Snappy\Image;

$htmlFile = 'index0.html'; // Đường dẫn đến tệp tin HTML của bạn
$imageFile = 'image1.png'; // Đường dẫn để lưu tệp tin ảnh

try {
    $snappy = new Image('/bin/wkhtmltoimage-amd64'); // Đường dẫn tới thực thi wkhtmltoimage-amd64
    $snappy->setOption('format', 'png'); // Định dạng của ảnh đầu ra
    $snappy->setOption('width', '800px'); // Thiết lập chiều rộng của ảnh
    $snappy->setOption('height', '600px'); // Thiết lập chiều cao của ảnh
    $snappy->generateFromHtml($htmlFile, $imageFile);

    // Kiểm tra xem tệp tin ảnh đã được tạo hay chưa
    if (file_exists($imageFile)) {
        echo "Đã tạo thành công ảnh từ HTML.";
    } else {
        echo "Không thể tạo ảnh từ HTML.";
    }
} catch (\Exception $e) {
    echo "Đã xảy ra lỗi: " . $e->getMessage();
}
