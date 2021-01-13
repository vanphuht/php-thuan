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
// //    sql:stuctured Query Language
// 1. sql có cấu trú<!-- 
// a. sql server
// b. mysql: php thuần, Laravel, node js, python, ruby,....
//    có 3 bộ thư viện con:
//    - mysql: php cũ 5.0
//    - mysqli: php mới (7.0)
//     - bdo: dùng ở nước ngoài

// 2. no sql: không có cấu trúc =>> Cms magento
==================
học mysqli
chia làm 4 tầng
tầng 1: database (scdl)   1 database = 1 website
tầng 2: (table) bảng dữ liệu
1 db có rất nhiều <table>
Mỗi table sẽ quản lý 1 đối tượng trên 1 website
vd: logo, bài viết, danh mục, user thành viên, .... là 1 <table></table>
tầng 3: colum (cột), trường dữ liệu
1 table có rất nhiều cột và được gán 1 id để phân biệt dữ liệu
tầng 4: row (thêm bản ghi)
insert into danh_sach(name_ds, Email_ds, birthday_ds) value('', '','')
4 câu lệnh kinh điển 
1- SELECT: LẤY RA TOÀN BỘ THÔNG TIN TRONG DB
SELECT name_ds, email_ds FROM danh_sach
LẤY tất cả trường dữ liệu trong danh sách
SELECT * FROM `danh_sach`
2- INSERT thực thi chức năng thêm
INSERT INTO danh_sach(name_ds, Email_ds, birthday_ds) value('', '','')
3 - UPDATE
UPDATE `danh_sach`(name_ds, email_ds, birthday_ds) SET `name_ds`='Phùng văn Tuấn',`birthday_ds`='1992' WHERE 1
UDDATE danh_sach(name_ds, email_ds, birthday_ds), 
SET name_ds='Phùng văn Tuấn', birthday_ds='1992'
WHERE id_ds=3
4- thực thi chức năng xóa
DELETE FROM danh_sac
WHERE id=4
cach kết nối website với cơ sở dữ liệu
tạo file config cho web. và có thể dùng được cho nhiều website
có 3 bước kết nối
bước 1: kết nối php với Mysql
$conn = mysqli_connect('localhost','root','','hocphpk176')
bước 2: viết truy vấn sql
$sql = "SELECT * FROM danh_sach"
bước 3: thực thi truy vấn SQL (tương đương bấm go)
$query = mysqli_query($conn, $sql)



   ?> 
</body>
</html>