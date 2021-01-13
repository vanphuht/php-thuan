<?php
// /bước 1
$file_name = $_GET['file_name'];//dùng get để hứng
$file_path = 'upload'.$file_name; //mở file
// bước 2
// thông báo tải file
header("content-disposition:attactmen; filename= $file_name")
// bước 3 trinh duyet trả về định dạng file
header("content-type: applycation/pdf");
// bước 4 đọc file
readfile("$file_path")
?>