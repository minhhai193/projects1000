<?php 
    include '../../Library/session.php';
    Session::checkSession();
 ?>
<?php
    if(isset($_GET['action']) && $_GET['action']=='logout'){
        Session::destroy();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="SHORTCUT ICON" href="../images/Logo_Shop.png">
    <link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    <!-- BEGIN: load jquery -->
    <script src="../js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="../js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="../js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <!-- END: load jquery -->
    <script src="https://kit.fontawesome.com/0b176a5748.js"></script>
    <script src="../js/setup.js" type="text/javascript"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

</head>
<body>
    <div class="row mx-0">
        <div class="col-2 menu_left px-1">
            <div class="logo">
                <div class="items">
                    <div class="img">
                        <img src="../images/Logo_Shop.png" alt="Logo" />
                    </div>
                    <div class="details pl-1 py-1">
                        <h3>Gear<a style="color: red">away</a></h3>
                        <p>TECHNOLOGIES GAMING</p> 
                    </div>
                </div>
            </div>
            <img src="../images/sidebarSep.png" alt="" id="logo2">
            <div class="box sidemenu mt-2">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a href="./" class="ic_Home">Trang chủ</a></li>
                        <li><a class="menuitem icon_User">Quản lý tài khoản</a>
                            <ul class="submenu">
                                <li><a href="index.php?act=accstaff_list">Tài khoản nhân viên</a> </li>
                                <li><a href="catlist.php">Tài khoản khách hàng</a> </li>
                            </ul>
                        </li>   

                        <li><a class="menuitem ic_Company">Đối tác chiến lược</a>
                            <!-- <ul class="submenu">
                                <li><a href="brandlist.php">Danh sách thương hiệu</a> </li>
                            </ul> -->
                        </li>

                        <li><a class="menuitem ic_Product">Sản phẩm</a>
                            <ul class="submenu">
                                <li><a href="productadd.php">Danh mục sản phẩm</a> </li>
                                <li><a href="index.php?act=productlist">Sản phẩm</a> </li>
                            </ul>
                        </li>

                        <li><a class="menuitem ic_Bill">Quản lí hóa đơn</a>
                            <ul class="submenu">
                                <li><a href="slideradd.php">Bán hàng</a> </li>
                                <li><a href="sliderlist.php">Bảo hành sản phẩm</a> </li>
                            </ul>
                        </li>
                        
                        <li><a class="menuitem ic_pd">Quản lí bài viết</a>
                            <ul class="submenu">
                                <li><a href="postadd.php">Thêm bài viết</a> </li>
                                <li><a href="postlist.php">Tất cả bài viết</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-10 px-0 menu_right">
            <div class="menu_head px-4">
                <!-- <ul class="ul">
                    
                    
                    <li>
                        <a href="http://localhost/shopdungcu/index.php" target="_blank">
                            <i class="far fa-hand-point-right mr-2"></i>Vào website
                        </a>
                    </li> 
                    <li><a href="changepassword.php"><i class="fas fa-unlock-alt mr-2"></i>Thay đổi mật khẩu</a></li>
                    <li><a href="?action=logout"><i class="fas fa-arrow-left mr-2"></i>Đăng xuất</a></li>
                    <li>
                        <p class="pr-2"><?php echo Session::get('adminName')?> </p>
                        <ul class="submenu">
                            <li><a href="changepassword.php"><i class="fas fa-unlock-alt mr-2"></i>Thay đổi mật khẩu</a></li>
                            <li><a href="?action=logout"><i class="fas fa-arrow-left mr-2"></i>Đăng xuất</a></li> 
                        </ul>
                    </li>
                </ul> -->

                <div class="dropdown1">
                    <p class="dropbtn" style="font-weight: bold;margin: 0; margin-bottom: 1px">Hi, <?php echo Session::get('adminName')?></p>
                    <div class="dropdown1-content">
                        <a href="changepassword.php"><i class="fas fa-unlock-alt mr-2"></i>Đổi mật khẩu</a>
                        <a href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất</a>
                    </div>
                </div>
            </div>

                
            
    