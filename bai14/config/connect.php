<?php
if(!defined('SECURITY')){
	die('Bạn không có quyền truy cập vào file này!');
}
$conn = mysqli_connect('localhost','root','','phpk176');
if($conn){
    mysqli_query($conn, "SET NAMES 'utf8'");
}else{
    die('Kết nối thất bại');
}
?>