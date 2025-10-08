<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="view/layout/assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/css/iconfont.min.css">
    <link rel="stylesheet" href="view/assets/css/plugins.css">
    <link rel="stylesheet" href="view/assets/css/helper.css">
    <link rel="stylesheet" href="view/assets/css/style.css">
    <script src="view/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="icon" href="view/assets/favicon.svg">
    <title>Glasa - Giving love and save animals</title>
    <style>
        .warning-message {
            color: red;
            font-weight: bold;
        }
</style>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <header class="header header-transparent header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i>(08) 123 456 7890</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>ducthanh300904@gmail.com</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <?php

                        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                            extract($_SESSION['user']);

                            if ($tenUser == '') {
                                $inTenUser = 'Vui lòng cập nhập tài khoản';
                            } else {
                                $inTenUser = $tenUser;
                            }

                            echo '<div class="col-xl-6 col-lg-4">
                                                <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                                    <ul class="ht-us-menu d-flex">
                                                        <li><a href="#"><i class="fa fa-user-circle-o"></i>' . $inTenUser . '</a>
                                                            <ul class="ht-dropdown right">
                                                                <li><a href="index.php?pg=taikhoancuatoi">Tài khoản của tôi</a></li>
                                                                <li><a href="index.php?pg=dangxuat">Đăng xuất</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                        } else {
                            echo '<div class="col-xl-6 col-lg-4">
                                                <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                                    <ul class="ht-us-menu d-flex">
                                                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Đăng nhập</a>
                                                            <ul class="ht-dropdown right">
                                                                <li><a href="index.php?pg=login_register_form">Đăng nhập - Đăng ký</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                        }
                        ?>

                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="index.php"><img src="view/assets/images/glasa-logo.png" alt="logo TG shop"></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="index.php?pg=product">Sản phẩm</a></li>
                                    <!-- <li><a href="index.php?pg=blog">Blog</a></li> -->
                                    <li><a href="index.php?pg=adopt">Nhận nuôi</a></li>
                                    <li><a href="index.php?pg=report">Báo cáo</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form action="index.php?pg=search" method="POST">
                                        <input type="text" name="kyw" placeholder="Nhập tên sản phẩm bạn muốn tìm">
                                        <input class="btn btn-link" type="submit" name="timkiem" value="Tìm kiếm"></i></input>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">

                                <?php
                                if(isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])){
                                    $soLuongSanPham = count($_SESSION['giohang']);
                                } else {
                                    $soLuongSanPham = 0;
                                }
                                ?>




                                <a href="index.php?pg=viewcart"><i class="fa fa-shopping-cart"></i><span><?=$soLuongSanPham?></span></a>
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>