<?php
	include_once "../View/Layout/header.php";

	if(isset($_GET['act'])){
		$act= $_GET['act'];

		switch($act){
			case 'accstaff_list';
				include_once "../View/accstaff_list.php";
				break;
			case 'accstaff_add';
				include_once "../View/accstaff_add.php";
				break;
			case 'productlist';
				include_once "../View/productlist.php";
				break;
			case 'productadd';
				include_once "../View/productadd.php";
				break;
			default:
				include_once "../View/home.php";
				break;
			}
	}else{
		include_once "../View/home.php";
	}

	include_once "../View/Layout/footer.php";
?>	