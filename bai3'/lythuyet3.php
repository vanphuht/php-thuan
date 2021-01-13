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
    // Phuong thức GET
    // // cú pháp : $_GET["tham số "]; biến toàn cục lưu trữ mảng bất tuần tự
    // // truyền tham số lên URL: ten_mien.com/index.php?tham_so1=gia_trị1&thamso2=giatri2&thamso3=giatri3&....
    // // sau khi truyền tham số dùng $_GET để hứng lấy tham số đó //$_GET["thamso"]
    // if(isset($_GET["email"]) && isset($_GET["pass"]) && isset($_GET["name"])){
    // $email=$_GET["email"];
    // $pass=$_GET["pass"];
    // $name=$_GET["name"];
    // echo $email."<br>".$pass."<br>".$name;
// }
// //////////////////////////////////mảng
// // $array=array(giatri1, giatri2, giatri3);
// // $array=[giatri1, giatri2, giatri3.....];
// $array= array(1, 2, "ba", 'bốn', true, 5.5, "vân vân");
// // $array=[1, 2, "ba", 'bốn' true, 5.5, "vân vân"];
// echo "<pre>";
// var_dump($array) ;
// print_r($array);
// echo "</pre>";
////////////////////////////////////////json
// đọc file json
$data = file_get_contents('data.json');
$result_array = json_decode($data, true);
foreach ($result_array as $value){
    echo $value;
}



    
    ?>
    <!-- <form action="" method="get">
        <input type="email" name="email" value="email" id="">
        <input type="pass" name="pass" value="pass">
        <input type="submit" name="submit" >
        
      
    </form> -->
    



</body>
</html>