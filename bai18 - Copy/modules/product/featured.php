<?php
    $sql = "SELECT *FROM product WHERE prd_featured = 1  ORDER BY prd_id  LIMIT 6 ";
    $query = mysqli_query($conn, $sql);
?>

<!--	Feature Product	-->
<div class="products">
    <h3>Sản phẩm nổi bật</h3>
    <div class="product-list row">
        <?php
            while($row = mysqli_fetch_assoc($query)){ ?>


        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
            <div class="product-item card text-center">
                <a href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id'];?>">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="<?php echo $row['prd_details']; ?>">
                <img src="admin/img/products/<?php echo $row['prd_image']; ?>">
                </button>
            
            </a>
                <h4><a href="index.php?page_layout=product&prd_id=<?php echo $row['prd_id'];?>"><?php echo $row['prd_name']; ?> </a></h4>
                <p>Giá Bán: <span><?php echo number_format($row['prd_price'], 0, '.', ',').' VNĐ'; ?></span></p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<!--	End Feature Product	-->