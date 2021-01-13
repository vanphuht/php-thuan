<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// sesion
// Khởi tại session : (login)
// session_start();Luôn khởi tại khi làm việc với sission, để đầu tiên trên html
// cú pháp 
// $_SESSION['name'] = user;
// muốn hủy session: (logout), hoặc lệnh hủy session,
// KHai báo 
// unset(name); //hủy bỏ chính xác 1 phiên làm việc session nào đó, xóa bỏ từng ss đơn lẻ
// session_unset(); // hủy bỏ ss theo 1 phiên
// // session_destroy(); // hủy tất cả các ss (thường sử dụng cho logout)
// // session_start();
// if(isset($_POST['sbm'])){
//     $_SESSION['ho_ten'] = $_POST['ho_ten'];
// };
// if(isset($_SESSION['ho_ten'])){
//     echo ($_SESSION['ho_ten'];

// };
// // hàm header
// header('location: index.php');
// // hàm báo lỗi
// die('bạn không có quyền truy cập');// làm cho file chết;
// hằng
define('TEN_HANG','học viện vietpro');
if(defined('TEN_HANG')){
    echo 'abc';
}
?>
<form action="" method="post">
    <input type="text" name='ho_ten' value="">
    <input type="submit" value="gửi" name="sbm">
</form>


</body>
</html>