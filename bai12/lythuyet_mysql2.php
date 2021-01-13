<?php
// 5 câu lệnh nâng cao mysql
1. câu lênh điều kiện WHERE
vd: lấy ra tất cả thành viên 
SELECT * FROM danh_sach WHERE birthday_ds = '1992'
2+3: AND - OR (VÀ - HOẶC)
VD: lấy tất cả thành viên ở hà nội sinh năm 2000
SELECT * FROM danh_sach WHERE email_ds='vanphu.ht@gmail.com' AND birthday_ds>='2000-01=01' AND birthday_ds <='2000-12-31'
SELECT * FROM danh_sach WHERE addesss='hà nội' OR birthday_ds>='2000-01=01' AND birthday_ds <='2000-12-31'
4. ORDER BY: xắp xếp theo thứ tự tăng dần (ASC)/ giảm dần (DESC)
vd: LẤY RA tất cả các thành viên theo thứ tự mới đăng ký
SELECT * FROM danh_sach ORDER BY id_ds DESC
5. LIMIT: giới hạn số bản ghi hiển thị
Lấy ra 5 sản phẩm mới nhất
SELECT * FROM product ORDER BY prd_id DESC LIMIT 5
kết nối bảng:
SELECT * FROM product INNER JOIN category  ON product.cat_id = category.cat_id
?>