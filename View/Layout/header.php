<?php
    include '../Library/session.php';
    Session::init();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUNG SPORT DỤNG CỤ VÕ</title>
    <link rel="SHORTCUT ICON" href="../images/logo1.png">
</head>
<body>
    <div class="header mb-3">
        <div class="container">
            <div class="row">
                <div class="menu_morong col-2 d-block d-lg-none d-md-none">
                    <nav id="menu">
                        <ul>
                            <li>
                                <a href="./">TRANG CHỦ</a>
                            </li>
                            <li>
                                <a href="gioithieu.php">GIỚI THIỆU</a>
                            </li>
                            <li>
                                <a href="index.php?act=show_product">SẢN PHẨM</a>
                                <ul>
                                </ul>
                            </li>
                            <li>
                                <a href="show_product.php">KHUYẾN MÃI</a>
                            </li>
                            <li>
                                <a href="feedback.php">FEEDBACK</a>
                            </li>
                            <li>
                                <a href="show_post.php">TIN TỨC & SỰ KIỆN</a>
                            </li>
                            <li>
                                <a href="lienhe.php">LIÊN HỆ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pt-3">
                    <form class="input-group" method="POST" action="search.php">
                        <input class="form-control py-2 border-right-0 border" type="search" name="search"
                        placeholder="Nhập từ khoá ......">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary border-left-0 border" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6  col-10 pt-2 items">
                    <div class="img">
                        <img src="images/hotline.png">
                    </div>
                    <div class="details">
                        <p>Hotline:</p>
                        <p id="sdt">028.66861139 - 0916 100 801</p>
                    </div>
                </div>
                <div class="col-2 text-center pt-4 d-lg-none d-md-none d-sm-block">
                    <li style="border:none;list-style: none;">
                        <a href="#">
                            <i class="fas fa-cart-plus" style="color:orange"></i>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="slider1 mb-3">
        <div class="container">
            <div id="slider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="img">
                            <img src="images/chatluong.png">
                        </div>
                        <div class="details ml-2">
                            <h3><a href="#">CHẤT LƯỢNG SẢN PHẨM</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="images/gia.png">
                        </div>
                        <div class="details ml-2">
                            <h3><a href="#">GIÁ SỈ MIỄN PHÍ GIAO HÀNG</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="images/doitra.png">
                        </div>
                        <div class="details ml-2">
                            <h3><a href="#">ĐỔI TRẢ TRONG 7 NGÀY</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="images/thanhtoan.png">
                        </div>
                        <div class="details ml-2">
                            <h3><a href="#">THANH TOÁN TRỰC TIẾP</a></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="images/giaohang.png">
                        </div>
                        <div class="details ml-2">
                            <h3><a href="#">GIAO HÀNG TOÀN QUỐC</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>