<?php
// /bước 1
$file_upload = $_GET['file_upload'];//dùng get để hứng
$file_path = 'updoad/'.$file_upload; //mở file
// bước 2
// thông báo tải file
header("Content-Disposition: attachment; filename = $file_upload");//tải xuống
// bước 3 trinh duyet trả về định dạng file
header("Content-Type: application/pdf");
// bước 4 đọc file
readfile($file_path);
?>