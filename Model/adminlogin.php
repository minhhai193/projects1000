<?php
	$filepath = realpath(dirname(__FILE__));
	include ($filepath.'/../Library/session.php');
	Session::checkLogin(); // gọi hàm check login để ktra session
	include_once ($filepath.'/../Library/database.php');
	include_once ($filepath.'/../Library/function.php');
?>
<?php 
	class adminlogin
	{
		private $db;
		private $func;
		public function __construct()
		{
			$this->db = new Database();
			$this->func = new Functions();
		}
		public function longin_admin($adminUser,$adminPass){
			$adminUser = $this->func->validation($adminUser); //gọi ham validation từ file Format để ktra
			$adminPass = $this->func->validation($adminPass);
			$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
			$adminPass = mysqli_real_escape_string($this->db->link, $adminPass); //mysqli gọi 2 biến. (adminUser and link) biến link -> gọi conect db từ file db
			if(empty($adminUser) || empty($adminPass)){
				$alert = "Nhập đầy đủ Username và Password.";
				return $alert;
			}else{
				$query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1 ";
				$result = $this->db->select($query);
				if($result != false){
					$value = $result->fetch_assoc();
					Session::set('adminlogin', true); // set adminlogin đã tồn tại
					// gọi function Checklogin để kiểm tra true.
					Session::set('adminId', $value['adminId']);
					Session::set('adminUser', $value['adminUser']);
					Session::set('adminName', $value['adminName']);
					header("Location:index.php");
				}else {
					$alert = "Username hoặc mật khẩu không đúng!";
					return $alert;
				}
			}
		}
	}
?>