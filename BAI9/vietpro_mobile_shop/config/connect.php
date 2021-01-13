<?php

if(!defined('SECURITY')){
	die('Bạn không có quyền truy cập vào trang này!');
};

$conn = mysqli_connect('localhost','root','','hocphp176');
if($conn){
    mysqli_query($conn, "SET NAMES 'utf8'" ); //giá trị kết nối
}else{
    die('kết nối thất bại');
};




?>