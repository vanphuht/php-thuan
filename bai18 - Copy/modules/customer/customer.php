<?php
//mail
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//submit
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['add'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    //
    $emailHTML = '';
    $emailHTML .= '
    <p>
        <b style="font-weight: bold;"Khách hàng:</b>'.$name.'<br>
        <b>Điện thoại:</b>'.$phone.'<br>
        <b>Địa chỉ:</b>'.$add.'<br>
    </p>
    ';
    $emailHTML .= '
    <table border="1" cellspacing="0" cellpadding="10" bordercolor="#305eb3" width="85%">
    <tr bgcolor="#305eb3">
        <td width="45%"><b><font color="#FFFFFF">Sản phẩm</font></b></td>
        <td width="10%"><b><font color="#FFFFFF">Số lượng</font></b></td>
		<td width="15%"><b><font color="#FFFFFF">đơn giá</font></b></td>
        <td width="15%"><b><font color="#FFFFFF">Tổng tiền</font></b></td>
    </tr>
    ';
    $sql = "SELECT * FROM product WHERE prd_id IN($str_key)";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
        $sl = $_SESSION['cart'][$row['prd_id']];
        $thanhTien = $sl*$row['prd_price'];
        $emailHTML .= '
            <tr>
                <td width="50%">'.$row['prd_name'].'</td>
                <td width="10%">'.number_format($sl, 0, '.', '.').'</td>
                <td width="20%">'.number_format($row['prd_price'], 0, '.', '.').'</td>
                <td width="20%">'.number_format($thanhTien, 0, '.', '.').'</td>
            </tr>
        ';
    }
    $emailHTML .= '
        <tr>
        <td colspan="3" width="70%">Tổng tiền</td><td width="20%"><b><font color="#FF0000">'.number_format($total, 0, '.', '.').'đ</font></b></td>
        </tr>
        </table>
        <p>
            Cám ơn quý khách đã mua hàng tại Shop của chúng tôi, bộ phận giao hàng sẽ liên hệ với quý khách để xác nhận sau 5
    phút kể từ khi đặt hàng thành công và chuyển hàng đến quý khách chậm nhất sau 24 tiếng.
        </p>
        ';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vanphu.ht@gmail.com';                     // SMTP username
    $mail->Password   = 'ugbgfqbgvhwemxww';                               // SMTP password
    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('vanphu.ht@gmail.com', 'VietproShop');
    $mail->addAddress($email, 'Khách hàng');     // Add a recborn\ipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('smartcovietnam@gmail.com');
    //$mail->addBCC('bcc@example.com');
    $mail->CharSet = 'UTF-8';
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Xác nhận đơn hàng từ VietproShop';
    $mail->Body    = $emailHTML;
    $mail->AltBody = 'Mô tả đơn hàng';
    $mail->send();
    header('location: index.php?page_layout=success');
} catch (Exception $e) {
    echo "Không thể gửi email. Mail Error: {$mail->ErrorInfo}";
    }
}
?>
<!--	Customer Info	-->
<div id="customer">
    <form id="frm" method="post">
        <div class="row">
            <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
            </div>
            <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
            </div>
            <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Email (bắt buộc)" type="text" name="email" class="form-control" required>
            </div>
            <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add"
                    class="form-control" required>
            </div>

        </div>
    </form>
    <div class="row">
        <div class="by-now col-lg-6 col-md-6 col-sm-12">
            <a onclick="buyNow()" href="#">
                <b>Mua ngay</b>
                <span>Giao hàng tận nơi siêu tốc</span>
            </a>
        </div>
        <div class="by-now col-lg-6 col-md-6 col-sm-12">
            <a href="#">
                <b>Trả góp Online</b>
                <span>Vui lòng call (+84) 0988 550 553</span>
            </a>
        </div>
    </div>
</div>
<!--	End Customer Info	-->
<script>
    function buyNow() {
        document.getElementById('frm').submit()
    }
</script>