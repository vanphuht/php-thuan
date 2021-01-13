<?php  
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$rows_per_page = 5;
// $per_row = $page*$rows_per_page - $rows_per_page;
$per_row = $rows_per_page*($page-1);


$total_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM category "));
$total_pages = ceil($total_rows/$rows_per_page);

?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản lý danh mục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div><!--/.row-->
		<div id="toolbar" class="btn-group">
            <a href="category-add.html" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm danh mục
            </a>
        </div>
		<div class="row">
			<div class="col-md-12">
					<div class="panel panel-default">
							<div class="panel-body">
								<table 
									data-toolbar="#toolbar"
									data-toggle="table">
		
									<thead>
									<tr>
										<th data-field="id" data-sortable="true">ID</th>
										<th>Tên danh mục</th>
										<th>Hành động</th>
									</tr>
									</thead>
									<tbody>
										<?php
											$sql = "SELECT * FROM category ORDER BY cat_id DESC LIMIT $per_row, $rows_per_page" ;
											$query = mysqli_query($conn, $sql);
											while($row = mysqli_fetch_assoc($query)){
										?>
										<tr>
											<td style=""><?php echo $row['cat_id']; ?></td>
											<td style=""><?php echo $row['cat_name']; ?></td>
											<td class="form-group">
												<a href="/" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
												<a href="/" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
											</td>
										</tr>
										<?php
										}
										?>


										<!-- <tr>
											<td style="">2</td>
											<td style="">Danh mục 2</td>
											<td class="form-group">
												<a href="/" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
												<a href="/" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
											</td>
										</tr> -->
									</tbody>
								</table>
							</div>
							<div class="panel-footer">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
									</ul>
								</nav>
							</div>
						</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
