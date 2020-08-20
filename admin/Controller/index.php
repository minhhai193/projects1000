<?php
	include_once "../View/Layout/header.php";

	if(isset($_GET['act'])){
		$act= $_GET['act'];

		switch($act){
			// case 'show_product';
			// 	include_once "../View/show_product.php";
			// 	break;
			default:
				include_once "../View/home.php";
				break;
			}
	}else{
		include_once "../View/home.php";
	}

	include_once "../View/Layout/footer.php";
?>	