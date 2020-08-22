<?php
	include_once "../View/Layout/header.php";

	require_once '../../Library/database.php';
    include '../../Library/function.php';
    spl_autoload_register(function($class){
        include_once "../../Model/".$class.".php";
    });
    $db = new Database();
    $func = new Functions();
    $pd = new Product();

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