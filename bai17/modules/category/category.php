<?php
if(!defined('SECURITY')){
	die('Bạn không có quyền truy cập file này!');
}
$cat_name = $_GET['cat_name'];
$cat_id = $_GET['cat_id'];

//phân trang
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
//gán số trang cần hiển thị
$rows_per_page = 3;
//công thức
$per_row = $page*$rows_per_page-$rows_per_page;
//truy  vấn
$total_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM product WHERE cat_id=$cat_id"));
$total_pages = ceil($total_rows/$rows_per_page); //hàm làm tròn 
//code nút prev page
$list_pages='';
$page_prev = $page -1;
if($page_prev <= 0){
    $page_prev = 1;
}
// $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=category&cat_name='.$cat_name.'&cat_id='.$cat_id.'&page='.$page_prev.'">&laquo;</a></li>';
$list_pages .='<li class="page-item"><a class="page-link" href="index.php?page_layout=category&cat_name='.$cat_name.'&cat_id='.$cat_id.'&page='.$page_prev.'">Trang trước</a></li>';
//tính toán số trang
for($i=1; $i<=$total_pages; $i++){
    if($i==$page){
        $active = 'active';
    }else{
        $active = '';
    }
    $list_pages .= '<li class="page-item '.$active.'"><a class="page-link" href="index.php?page_layout=category&cat_name='.$cat_name.'&cat_id='.$cat_id.'&page='.$i.'">'.$i.'</a></li>';
}
//nút next pgae
$page_next = $page + 1;
if($page_next > $total_pages){
    $page_next = $total_pages;
}
// $list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=category&cat_name='.$cat_name.'&cat_id='.$cat_id.'&page='.$page_next.'">&raquo;</a></li>';
$list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=category&cat_name='.$cat_name.'&cat_id='.$cat_id.'&page='.$page_next.'">Trang sau</a></li>';
$sql = "SELECT * FROM product WHERE cat_id=$cat_id ORDER BY prd_id DESC LIMIT $per_row, $rows_per_page";
$query = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($query);
?>
                <!--	List Product	-->
                <div class="products">
                    <h3><?php echo $cat_name;?> (hiện có <?php echo $num_row;?>)</h3>
                    <div class="product-list row">
                        <?php
                        while($row = mysqli_fetch_assoc($query)){
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id'];?>"><img src="admin/img/products/<?php echo $row['prd_image'];?>"></a>
                                <h4><a href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id'];?>"><?php echo $row['prd_name'];?></a></h4>
                                <p>Giá Bán: <span><?php echo number_format($row['prd_price'], 0, '.', '.').' VNĐ';?></span></p>
                            </div>
                        </div>
                        <?php
                        }
                        ?>


                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-2.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-3.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-4.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-5.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-6.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-7.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-8.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-9.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--	End List Product	-->
                
                <div id="pagination">
                    <ul class="pagination">
                    <?php echo $list_pages; ?>
                        <!-- <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li> -->
                    </ul> 
                </div>
                