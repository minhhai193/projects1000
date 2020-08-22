<?php 
if(isset($_GET['productId']) && isset($_GET['type'])){
	$id = $_GET['productId'];
	$type = $_GET['type'];
	$update_type_product = $pd->update_type_product($id,$type);
}
if(isset($_GET['productId']) && isset($_GET['hienthi'])){
	$id = $_GET['productId'];
	$show = $_GET['hienthi'];
	$update_show_product = $pd->update_show_product($id,$show);
}
if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
}else {
        $id = $_GET['delid']; // L?y catid trên host
        $delProduct = $pd -> del_product($id); // hàm check delete Name khi submit lên
    }
?>
<div class="title-style"><h4><i class="fas fa-home mr-3"></i>Danh sách tài kho?n nhân viên</h4></div>
<div class="btn_add"><a href="index.php?act=accstaff_add">THÊM M?I</a></div>
<div class="boxInsert">
	<?php 
	if(isset($delCat)){
		echo $delCat;
	}
	?>      
	<table class="data display datatable" id="example">
		<thead>
			<tr class="boxTitle_pd">
				<th id="thutu">Th? t?</th>
				<th>Username</th>
				<th>Password</th>
				<th>H? và tên</th>
				<th id="thutu">V? trí</th>
				<th>S? di?n tho?i</th>
				<th>CMND</th>
				<th>Ð?a ch?</th>
				<th id="xuly">X? lý</th>
			</tr>
		</thead>
		<tbody  class="boxPro">
			<?php 
			$accstaff = $acc->show_accstaff();
			$i = 0;
			foreach($accstaff as $result){
				$i++;	
				?>
				<tr>
					<td id="thutu"><?= $i; ?></td>
					<td id="tensp"><?= $result['Username_Staff'] ?></td>
					<td id="tensp"><?= $result['Password_Staff'] ?></td>
					<td id="tensp"><?= $result['FullName'] ?></td>
					<td id="tensp"><?= $result['Id_Role'] ?></td>
					<td id="tensp"><?= $result['Phone'] ?></td>
					<td id="tensp"><?= $result['CMND'] ?></td>
					<td id="tensp"><?= $result['Address'] ?></td>
					<td id="xuly"><a href="productedit.php?productid=<?php echo $result['productId']; ?>" title="S?a"><img src="../images/icon/pencil.png" alt="S?a"></a> <a href="?delid=<?php echo $result['productId'] ?>" title="Xoá"><img src="../images/icon/close.png" alt="Xoá"></a></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		setupLeftMenu();
		$('.datatable').dataTable();
		setSidebarHeight();
	});
</script>