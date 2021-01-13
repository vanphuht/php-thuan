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
//     $so_nguyen=10;
//     if($so_nguyen > 0){
//         echo 'đây là số nguyên dương <br>'."!";
//     }
    
//     // $a=0;
//     // if($a==0){
//         // echo "biến a có giá trị bằng 0";
//     // }
// // if($so_nguyen<0){
// //     echo "đây là số nguyên am";
// // }



//     if($so_nguyen>0){
//         echo "đây là số nguyên duong";


//     }
//     else{
//         echo "đây là số nguyên âm";

//     }
    
    
// $a=1;
// $b=2;
// if($a+$b !=3){
//     echo "kết quả đã bị sai <br>";

// }
// else {
//     echo "bạn đã tính đúng <br>";
// }

// if(){

// }else if(){

// }else(){

// // }
// $so_nguyen=-10;
// if($so_nguyen>0){
//     echo "đây là số nguyên dương <br>";
// }else{
//     if($so_nguyen==0){
//         echo "đây là số 0 <br>";
//     }
//     else{
//         echo "đây là số nguyên âm <br>";
//     }
// }
    
// if($so_nguyen>0){
// echo "đây là số nguyên duong <br>";
// }else if($so_nguyen<0){
// echo "đây là số nguyên âm <br>";
// }else{
//     echo "đây là số 0 <br>";
// }

// $m=4;
// if($m==1){
// echo "m=1";
// }else if($m==2){
// echo "m=2";
// }else if($m==3){
// echo "m=3";
// }
// // else {
// //     echo "m=0";
// // }

// while ($biểu thức){
//     code thực thi;
// }

// $i=5;
// while($i<10){
// echo $i.',';
// $i++;
// }

// $so=10;
// while($so>0){
// if($so>1){
// echo $so.","."<br>";
// }else{
//     echo $so."."."<br>";
// }
// $so--;
// }
    // for(biến khởi tạo, biểu thức, tăng/giảm biến khởi tạo){
//     //     code thực thi;
//     // }
//  for($so=10; $so>=0; $so-=2){
// echo $so.",";
// //  }

// for($so=1;$so=<100;$so++;){
//     $so;
// }  echo $so++;

    
// $tong=0;
// for($i=0; $i<=100; $i++){
//     $tong = $tong+$i;
// }
// echo $tong;
    
// $a=2;
for($x=2;$x<=10;$x++){
   for($a=1; $a<=10; $a++ ){
       echo $x." x ".$a." = ".$x*$a."       |       ";
    } echo "<br>";
   }


   
   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   // Check if image file is a actual image or fake image
   if(isset($_POST["submit"])) {
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check !== false) {
           echo "File is an image - " . $check["mime"] . ".";
           $uploadOk = 1;
       } else {
           echo "File is not an image.";
           $uploadOk = 0;
       }
   }
   // Check if file already exists
   if (file_exists($target_file)) {
       echo "Sorry, file already exists.";
       $uploadOk = 0;
   }
   // Check file size
   if ($_FILES["fileToUpload"]["size"] > 500000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
   }
   // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
       echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       $uploadOk = 0;
   }
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
       echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
   } else {
       if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
           echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       } else {
           echo "Sorry, there was an error uploading your file.";
       }
   }
   ?>




    
    








</body>
</html>