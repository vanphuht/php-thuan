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
    // <!-- $_POST[thamso]; -->
    // tham số truyền vào biến POST thường là name của ô submit;
    // luôn kiểm tra submit;
    // làm giống phương thức get
    // if(isset($_POST['sbm'])){
    //     $email = $_POST['email'];
    //     $pass = $_POST['pass'];
    //     echo 'email='.$email. '<br>'. 'pass='.$pass;
    
    // // $_POST(lythuyet.php?'email'=email&)
    // $_FILES['thamso']['name'];//lấy tên file
    // $_FILES['thamso']['type'];//lấy theo kiểu file
    // $_FILES['thamso']['size'];//lấy theo kích thước file
    // $_FILES['thamso']['error']; //lấy lỗi của file
//     // $_FILES['thamso']['tmp_name']//đường dẫn lên khay nhớ tạm khi upload
//     // // move_uploaded_file($tmp_name, 'upload/anhdep.jpg');

if(isset($_POST['sbm'])){
    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];
    if($file_error > 0){
        echo 'file upload bị lỗi!';
    }else{
        move_uploaded_file($file_tmp_name, 'upload/'.$file_name);
        echo 'bạn đã upload file '.$file_name.' thành công!';
        //  echo 'upload/'.$file_name;
    };

};





    
//     ?>
<!-- 
// -- <form action="" method="post">
//     <input type="email" name="email">
//     <input type="password" name="pass">
//     <input type="submit" name="sbm">
// </form> -->
 <hr>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" value="">
    <input type="submit" name="sbm" value="submit">
</form> 



</body>
</html>