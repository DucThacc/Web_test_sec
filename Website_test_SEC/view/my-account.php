<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}
?>


<!--My Account section start-->
<div class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                Dashboard</a>

                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Đặt hàng</a>

                            <!-- <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                    Phương thức thanh toán</a> -->

                            <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                Địa chỉ</a>

                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Chi tiết </a>

                            <a href="index.php?pg=dangxuat"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">

                                <form action="index.php?pg=updatetaikhoan" class="checkout-form" Method="POST">
                                    <div class="row row-40">

                                        <div class="col-lg-7">

                                            <!-- Billing Address -->
                                            <div id="billing-form" class="mb-10">
                                                <input type="hidden" name="iduser" value="<?=$idUser?>">
                                                <div class="row">
                                                    <div class="col-md-12 col-12 mb-5">
                                                        <label>Họ và tên*</label>
                                                        <input type="text" placeholder="Họ và tên" value="<?=$tenUser?>" name="tenuser">
                                                    </div>
                                                    <div class="col-md-12 col-12 mb-5">
                                                        <label>Email*</label>
                                                        <input type="email" placeholder="Email" value="<?=$emailUser?>" name="emailuser">
                                                    </div>
                                                    <div class="col-md-12 col-12 mb-5">
                                                        <label>Số điện thoại*</label>
                                                        <input type="text" placeholder="Số điện thoại" value="<?=$telUser?>" name="teluser">
                                                    </div>
                                                    <div class="col-12 mb-5">
                                                        <label>Địa chỉ*</label>
                                                        <input type="text" placeholder="Nhập địa chỉ" value="<?=$addressUser?>" name="addressuser">
                                                    </div>
                                                    <div class="col-12 mb-5">
                                                        <input type="submit" class="btn btn-lg btn-round" name='update' value="Lưu" ></input>
                                                    </div>

                                                </div>

                                            </div>

                                            <!-- Shipping Address -->

                                        </div>


                                    </div>
                                </form>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Đơn hàng</h3>

                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tên Đơn</th>
                                                    <th>Thời gian đặt hàng</th>
                                                    <th>Thông tin</th>
                                                    <th>Tổng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <!-- <tr>
                                                    <td>1</td>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
                                                    <td>$45</td>
                                                    <td><a href="cart .html" class="btn">View</a></td>
                                                </tr> -->

                                                <?php 
                                                $i=1;
                                                foreach ($listbill as $bill) {
                                                    $linkdetail='index.php?pg=bill_detail&idbill='.$bill['idBill'];
                                                    echo '<tr>
                                                            <td>'.$i.'</td>
                                                            <td>DACS-'.$bill['idBill'].'</td>
                                                            <td>'.$bill['bill_day'].'</td>
                                                            <td>'.$bill['bill_status'].'</td>
                                                            <td>$'.$bill['bill_total'].'</td>
                                                            <td><a href="'.$linkdetail.'" class="btn">Chi tiết</a></td>
                                                        </tr>';
                                                    $i++;
                                                }
                                                
                                                
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <!-- <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>

                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div> -->
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Địa chỉ giao hàng</h3>

                                    <address>
                                        <p><strong>Tên: <?=$tenUser?></strong></p>
                                        <p><strong>Địa chỉ: </strong> <?=$addressUser?></p>
                                        <p><strong>Số điện thoại: </strong> <?=$telUser?></p>
                                    </address>

                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Chi tiết tài khoản</h3>

                                    <div class="account-details-form">
                                        <form action="index.php?pg=updatetaikhoan2">
                                            <div class="row">
                                                <input type="hidden"  name="iduser" value="<?=$idUser?>">

                                                
                                                <div class="col-12 mb-30">
                                                    <label>Tên tài khoản</label>
                                                    <input type="text" placeholder="Họ và tên" name="accountuser" value="<?=$accountUser?>" readonly>
                                                </div>

                                                
                                                <div class="col-12 mb-30">
                                                    <label>Tên người dùng</label>
                                                    <input type="text" placeholder="Họ và tên" name="tenuser" value="<?=$tenUser?>" readonly>
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <label>Địa chỉ Email</label>
                                                    <input type="email" placeholder="Email" value="<?=$emailUser?>" readonly>
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <h4>Password change</h4>
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <input id="current-pwd" placeholder="Nhập mật khẩu cũ" type="password" name="old_pass">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="new-pwd" placeholder="Mật khẩu mới" type="password" name="new_pass">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="confirm-pwd" placeholder="Nhập lại mật khẩu mới" type="password" name="new_pass2">
                                                </div>

                                                <div class="col-12">
                                                    <input type="submit" class="btn btn-lg btn-round" value="Lưu" name="update2"></input>
                                                </div>

                                                <?php 
                                                    if(isset($thongbao) && ($thongbao!="")){
                                                        echo $thongbao;
                                                    }                        
                                                ?>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>

            </div>

        </div>
    </div>
</div>
<!--My Account section end-->