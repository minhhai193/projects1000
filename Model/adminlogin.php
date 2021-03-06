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
				$query = "SELECT * FROM users_staff WHERE Username_Staff = '$adminUser' AND Password_Staff = '$adminPass' AND Is_Delete = '0' ";
				$result = $this->db->link->query($query);
				
				if(mysqli_num_rows($result)){
					$value = $result->fetch_assoc();
					Session::set('adminlogin', true); // set adminlogin đã tồn tại
					// gọi function Checklogin để kiểm tra true.
					Session::set('adminId', $value['Id_User_Staff']);
					Session::set('adminUser', $value['Username_Staff']);
					Session::set('adminName', $value['FullName']);
					header("Location:index.php");
				}else {
					$alert = "Username hoặc mật khẩu không đúng";
					return $alert;
				}
			}
		}
	}
?>