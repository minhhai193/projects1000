<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="SHORTCUT ICON" href="../images/Logo_Shop.png">
	<style>
	body{font-family:'Montserrat',sans-serif;margin:0;background:url(../images/img_background.png) no-repeat;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;-ms-background-size:cover;background-attachment:fixed;background-position:center;}
	p{padding:0;margin:0;color:#999;}

	/*-- main --*/
	.login-main{width:25%;background:rgba(0,0,0,0.8);text-align:center;-webkit-box-shadow:0px 0px 15px 5px #FFFFFF;box-shadow:0px 0px 15px 1px #FFFFFF;margin:100px auto;border-radius:5px;}
	.login-main h2{color:#fff;font-size:27px;letter-spacing:2px;margin-bottom:10px;text-align:center;}
	input[type="username"],
	input[type="password"]{width:55%;padding:16px 50px 16px 50px;outline:none;font-size:15px;font-weight:400;color:white;margin:14px 0px;font-family:'Montserrat',sans-serif;border:none;border-bottom:2px solid white;background:transparent;letter-spacing:1px;-webkit-border-radius:5px;-moz-border-radius:5px;-ms-border-radius:5px;-o-border-radius:5px;}
	input[type="username"]{background:url(../images/user.png) no-repeat 10px 10px;}
	input[type="password"]{background:url(../images/lock.png) no-repeat 10px 10px;}
	input[type="submit"]{padding:10px 32%;font-size:18px;font-weight:600;border-radius:30px;-webkit-border-radius:30px;-moz-border-radius:30px;-ms-border-radius:30px;-o-border-radius:30px;text-transform:uppercase;letter-spacing:1px;background:#36bf89;color:#ffffff;border:none;outline:none;cursor:pointer;font-family:'Montserrat',sans-serif;margin:24px auto;margin-top:10px;}
	input[type="submit"]:hover{background:#188f60;color:#fff;transition:0.8s all;-webkit-transition:0.8s all;-o-transition:0.8s all;-moz-transition:0.8s all;-ms-transition:0.8s all;}
	</style>
<?php
	// gọi file adminlogin
	include '../../Model/adminlogin.php';
?>
<?php
	// gọi class adminlogin
	$class = new adminlogin(); 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
	$adminUser = $_POST['adminUser'];
	$adminPass = $_POST['adminPass'];
	$login_check = $class -> longin_admin($adminUser,$adminPass); // hàm check User and Pass khi submit lên
	}
?>
</head>
<body>
	<div class="main">
		<div class="login-main">
				<img src="../images/Logo_Shop.png" style="width: 60%; height: 20%;"/>
				<h2>Gear<a style="color: red">away</a> Admin</h2>
				<form action="login.php" method="post">
					<input type="username" placeholder="Username" required="" name="adminUser" autocomplete="off">
					<input type="password" placeholder="Password" required=""  name="adminPass"/>
					<div style="color:red;">
						<?php 
							if(isset($login_check))
							{
								echo $login_check;
							}
						?>
					</div>
					<input id="btn_Login" type="submit" value="LOGIN"/>
				</form>
		</div>
	</div>
</body>
</html>