<?php 
// tạo kết nối
$conn = mysqli_connect('localhost','root','','hocphpk176');
if($conn){
    mysqli_query($conn, "SET NAMES 'utf8'" ); //giá trị kết nối
}else{
    die('kết nối thất bại');
};

// bước 2; viết câu truy vấn thực thi;
$sql = "SELECT * FROM danh_sach";
$query = mysqli_query($conn, $sql);
// bước 3 lây ra bản ghi row
// cách 1 dùng hàm đến kết quả truy vấn
// $num_rows = mysqli_num_row($query);
// echo $num_rows;
// hàm lấy ra số bản ghi trong table
// $row = mysqli_fetchả_assoc($query);
// //hàm này sẽ nhận kết quả truy vấn của sql và trả về là 1 mảng
// mảng này chứa toàn bộ dữ liệu của chúng ta
// key là tê/n cột dữ liệu, value là dữ liệu tương ứng trong cột dữ liệu
// echo $row['name_ds'];
// dùng vòng lặp while để trả về tất cả kết quả 
while($row = mysqli_fetch_assoc($query)){
    echo $row['id_ds'].'<br>';
    echo $row['name_ds'].'<br>';
    echo $row['email_ds'].'<br>';
    echo $row['birthday_ds'].'<br>';
    echo '<hr/>';
}
// while($row = mysqli_fetch_assoc($query)){
//     echo $row['id_ds'].'<br/>';
//     echo $row['name_ds'].'<br/>';
//     echo $row['email_ds'].'<br/>';
//     echo $row['birthday_ds'].'<br/>';
//     echo '<hr/>';
// }

?>



