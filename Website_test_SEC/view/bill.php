<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}
?>
<!--Checkout section start-->
<div
            class="checkout-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Checkout Form Start-->
                        <form action="index.php?pg=billcomfirm" class="checkout-form" method="POST">
                            <div class="row row-40">

                                <div class="col-lg-7">

                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">Địa chỉ thanh toán</h4>
                                        <input type="hidden" name="iduser" value="<?=$idUser?>">
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Họ và tên*</label>
                                                <input type="text" placeholder="Họ và tên" value="<?=$tenUser?>" name="tenuser" required>
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Email*</label>
                                                <input type="email" placeholder="Email" value="<?=$emailUser?>" name="emailuser" >
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Số điện thoại*</label>
                                                <input type="text" placeholder="Số điện thoại" value="<?=$telUser?>" name="teluser" required>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <label>Địa chỉ*</label>
                                                <input type="text" placeholder="Nhập địa chỉ" value="<?=$addressUser?>" name="addressuser" required>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <div class="check-box">
                                                    <input type="checkbox" id="shiping_address" data-shipping>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    </div>




                                <div class="col-lg-5">
                                    <div class="row">

                                        <!-- Cart Total -->
                                        <div class="col-12 mb-60">

                                            <h4 class="checkout-title">Hóa đơn</h4>

                                            <div class="checkout-cart-total">

                                                <h4>Sản phẩm <span>Giá</span></h4>

                                                <!-- <ul>
                                                    <li>Teritory Quentily X 01 <span>$35.00</span></li>
                                                    <li>Adurite Silocone X 02 <span>$59.00</span></li>
                                                    <li>Baizidale Momone X 01 <span>$78.00</span></li>
                                                    <li>Makorone Cicile X 01 <span>$65.00</span></li>
                                                </ul> -->
                                                <ul>
                                                    <?php
                                                        $tong=0;
                                                        if(isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])){
                                                            $i=0;
                                                            foreach ($_SESSION['giohang'] as $item) {
                                                                extract($item);
                                                                $tt=$gia*$soluong;
                                                                $linkdel="index.php?pg=delcart&ind=".$i;
                                                                # code...
                                                                echo '
                                                                        <li>'.$tensp.' X '.$soluong.' <span>$'.$tt.'</span></li>
                                                                    ';
                                                                $i++;
                                                                $tong=$tong+$tt;
                                                            }
                                                        }

                                                        
                                                    ?>
                                                </ul>
                                                <p>Tổng đơn <span>$<?=$tong?></span></p>
                                                <p>Phí ship <span>$30.00</span></p>

                                                <h4>Tổng: <span>$<?=$tong?></span></h4>
                                                <input type="hidden" name="total" value="<?=$tong?>">


                                            </div>

                                        </div>

                                        <!-- Payment Method -->
                                        <div class="col-12 mb-30">

                                            <h4 class="checkout-title">Phương thức thanh toán</h4>

                                            <div class="checkout-payment-method">

                                            <div class="single-method">
                                                    <input type="radio" id="payment" name="pttt" value="ttsau" checked>
                                                    <label for="payment">Thanh toán sau</label>
                                                    
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment1" name="pttt" value="tttruoc">
                                                    <label for="payment1">Thanh toán trước</label>
        
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment2" name="pttt" value="tragop">
                                                    <label for="payment2">Trả góp</label>
                                                </div>

                                            </div>

                                            <input type="submit" value="Xác nhận đặt hàng" class="place-order btn btn-lg btn-round" name="dongydathang"">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--Checkout section end-->