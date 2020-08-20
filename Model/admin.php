<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../Library/database.php');
	include_once ($filepath.'/../Library/function.php');
?>
<?php 
	class admin
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->func = new Functions();
		}
	}
 ?>