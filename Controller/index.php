<?php
	include_once "../View/Layout/header.php";
	
    require_once '../Library/database.php';
    include '../Library/function.php';
    spl_autoload_register(function($class){
        include_once "../Model/".$class.".php";
    });
    $db = new Database();
    $func = new Functions();
    $product = new Product();
    $search = new Search();

	if(isset($_GET['act'])){
		$act= $_GET['act'];

		switch($act){
			case 'show_product';
				include_once "../View/show_product.php";
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