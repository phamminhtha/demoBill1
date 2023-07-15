<?php

$templateFile = 'Vietcombank1.html';  // Đường dẫn đến file template
$outputFile = 'Vietcombank_modified.html';  // Đường dẫn đến file đầu ra

// Đọc nội dung từ file template
$templateContent = file_get_contents($templateFile);

$data = json_decode(file_get_contents('php://input'), true);
$log = 'logs/log.txt';
file_put_contents($log, print_r($data['money'], true), FILE_APPEND);

$data1 = $data['money'];
$data2 = $data['time']. ' ' . $data['date'];
$data3 = $data['name_account_source'];
$data4 = $data['number_account_source'];
$data5 = $data['name_account'];
$data6 = $data['number_account'];
$data7 = $data['number_account'];
$data8 = $data['content'];

// Thay thế các placeholder trong template bằng dữ liệu tương ứng
$newContent = str_replace(
    ['{data1}', '{data2}', '{data3}', '{data4}', '{data5}', '{data6}', '{data7}', '{data8}'],
    [$data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8],
    $templateContent
);

// Ghi nội dung mới vào file đầu ra
file_put_contents($outputFile, $newContent);

$webpageUrl = $outputFile;  // URL của trang web bạn muốn chụp ảnh
// $webpageUrl = 'http://google.com';  // URL của trang web bạn muốn chụp ảnh

// Đường dẫn đến tệp tin thực thi PhantomJS binary
$phantomjsBinary = 'bin\phantomjs.exe';  // Đường dẫn thực tế trên hệ thống của bạn
// page.viewportSize = { width: 461, height: 999 };  // Kích thước viewport
// Tạo một tệp tin JavaScript để sử dụng với PhantomJS
$script = <<<EOD
var page = require('webpage').create();
page.open('$webpageUrl', function() {
  var scaleFactor = 1; // Faktor phóng to
 var newWidth = 461 * scaleFactor;
 var newHeight = 999 * scaleFactor;
    page.viewportSize = { width: newWidth, height: newHeight };  // Kích thước viewport
    page.render('screenshot.png' , { format: 'jpeg', quality: '100' });  // Lưu ảnh chụp màn hình vào tệp tin 'screenshot.png'
    phantom.exit();
});
EOD;

// Lưu mã JavaScript vào một tệp tin tạm thời
$scriptFile = tempnam(sys_get_temp_dir(), 'phantomjs-script-');
file_put_contents($scriptFile, $script);

// Chuẩn bị lệnh để chạy PhantomJS với tệp tin JavaScript
$command = "$phantomjsBinary $scriptFile";

// Chạy lệnh và nhận kết quả
$output = shell_exec($command);

// Xóa tệp tin JavaScript tạm thời
unlink($scriptFile);

// Kiểm tra xem tệp tin ảnh chụp màn hình có tồn tại hay không
if (file_exists('screenshot.png')) {
    // Thiết lập tiêu đề HTTP để tải xuống tệp tin
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="screenshot.png"');
    header('Content-Length: ' . filesize('screenshot.png'));
    readfile('screenshot.png');

    // Xóa tệp tin ảnh tạm thời
    unlink('screenshot.png');
} else {
    echo 'Error capturing screenshot.';
}
