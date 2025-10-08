<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h1>ĐĂNG NHẬP HOẶC ĐĂNG KÝ</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li>Đăng nhập & Đăng ký</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

<!--Login Register section start-->
<div class="login-register-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <!--Login Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register">
                            <div class="form-login-title">
                                <h2>Đăng nhập</h2>
                            </div>
                            <div class="login-form">
                                <form action="index.php?pg=dangnhaptaikhoan" method="post">
                                    <div class="form-fild">
                                        <p><label>Tên đăng nhập<span class="required">*</span></label></p>
                                        <input name="user" value="" type="text" required>
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Mật khẩu <span class="required">*</span></label></p>
                                        <input name="pass" value="" type="password" required>
                                    </div>
                                    <div class="login-submit">
                                        <input type="submit" class="btn" name="dangnhap" value="Đăng nhập">
                                        <label>
                                            <input class="checkbox" name="rememberme" value="" type="checkbox">
                                            <span>Ghi nhớ</span>
                                        </label>
                                    </div>
                                    <div class="lost-password">
                                        <a href="#">Mất mật khẩu?</a>
                                    </div>
                                    <?php 
                                        if(isset($thongbao1) && ($thongbao1!="")){
                                            echo $thongbao1;
                                        } 
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Login Form End-->
                    <!--Register Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register register-pt-0">
                            <div class="form-register-title">
                                <h2>Đăng ký</h2>
                            </div>
                            <div class="register-form">
                                <form action="index.php?pg=dangkytaikhoan" method="POST">
                                    <div class="form-fild">
                                        <p><label>Tên đăng nhập<span class="required">*</span></label></p>
                                        <input name="username" value="" type="text" required>
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Mật khẩu<span class="required">*</span></label></p>
                                        <input name="password" value="" type="password" required>
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Nhập lại mật khẩu<span class="required">*</span></label></p>
                                        <input name="password_a" value="" type="password" required  >
                                    </div>
                                    <div class="register-submit">
                                        <input type="submit" name="btn_dangky" class="btn" value="Đăng ký"></input>
                                        <input type="reset" class="btn" value="Nhập lại"></input>
                                    </div>
                                    <?php 
                                        if(isset($thongbao) && ($thongbao!="")){
                                            echo $thongbao;
                                        } 
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Register Form End-->
                </div>
            </div>
        </div>
        <!--Login Register section end-->