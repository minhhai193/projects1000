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
        $id = $_GET['delid']; // Lấy catid trên host
        $delProduct = $pd -> del_product($id); // hàm check delete Name khi submit lên
    }
?>
<div class="title-style"><h4><i class="fas fa-home mr-3"></i>Danh sách tài khoản nhân viên</h4></div>
    ?>
<div class="title-style"><h4><i class="fas fa-home mr-3"></i>Danh mục sản phẩm</h4></div>
<div class="btn_add"><a href="index.php?act=accstaff_add">THÊM MỚI</a></div>
<div class="boxInsert">
	<?php 
	if(isset($delCat)){
		echo $delCat;
	}
	?>      
	<table class="data display datatable" id="example">
		<thead>
			<tr class="boxTitle_pd">
				<th id="thutu">Thứ tự</th>
				<th id="username">Username</th>
				<th id="passowrd">Password</th>				
				<th id="fullname">Họ tên</th>
				<th id="CMND">CMND</th>
				<th id="address">Địa chỉ</th>
				<th id="quyen">Quyền</th>
				<!-- <th id="noibat">Hiển thị</th> -->
				<th>Username</th>
				<th>Password</th>
				<th>Họ và tên</th>
				<th id="thutu">Vị trí</th>
				<th>Số điện thoại</th>
				<th>CMND</th>
				<th>Địa chỉ</th>
				<th id="xuly">Xử lý</th>
			</tr>
		</thead>
		<tbody  class="boxPro">
			<?php 
			$pdlist = $pd->show_user_staff();
			$i = 0;
			if($pdlist){
				while ($result = $pdlist->fetch_assoc()){
					$i++;	
					?>
					<tr>
						<td id="thutu"><?= $i; ?></td>
						<td id="username"><?= $result['Username_Staff'] ?></td>
						<td id="passowrd"><?= $result['Password_Staff'] ?></td>
						<td id="fullname"><?= $result['FullName'] ?></td>
						<td id="CMND"><?= $result['CMND'] ?></td>
						<td id="address"><?= $result['Address'] ?></td>
						<td id="quyen"><?= $result['Address'] ?></td>
						<!-- <td><?= $fm->format_currency($result['giasi']) ?></td>
						<td><?= $fm->format_currency($result['giale']) ?></td> -->
						<!-- <td>
							<?php
							if($result['type']==1){
								?>
								<a href="?productId=<?php echo $result['productId'] ?>&type=0" id="btn_on">ON</a> 
								<?php
							}else{
								?>	
								<a href="?productId=<?php echo $result['productId'] ?>&type=1" id="btn_off">OFF</a> 
								<?php
							}
							?>
						</td> -->
						<!-- <td>
							<?php
							if($result['hienthi']==1){
								?>
								<a href="?productId=<?php echo $result['productId'] ?>&hienthi=0" id="btn_on">ON</a> 
								<?php
							}else{
								?>	
								<a href="?productId=<?php echo $result['productId'] ?>&hienthi=1" id="btn_off">OFF</a> 
								<?php
							}
							?>
						</td> -->
						<td id="xuly"><a href="productedit.php?productid=<?php echo $result['Id_User_Staff']; ?>" title="Sửa"><img src="../images/icon/pencil.png" alt="Sửa"></a> <a href="?delid=<?php echo $result['Id_User_Staff'] ?>" title="Xoá"><img src="../images/icon/close.png" alt="Xoá"></a></td>
						</tr>
						<?php 
					}
				}
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
					<td id="xuly"><a href="productedit.php?productid=<?php echo $result['productId']; ?>" title="Sửa"><img src="../images/icon/pencil.png" alt="Sửa"></a> <a href="?delid=<?php echo $result['productId'] ?>" title="Xoá"><img src="../images/icon/close.png" alt="Xoá"></a></td>
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