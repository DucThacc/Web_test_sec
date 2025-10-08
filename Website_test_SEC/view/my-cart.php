<?php 
    $tong=0;
?>

<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1>Giỏ hàng của tôi</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Giỏ hàng</li>
                    </ul>
                    <p>---</p>


                <?php
                    if(isset($_SESSION['user'])){
                        if(isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])){
                            $soLuongSanPham = count($_SESSION['giohang']);
                        } else {
                            $soLuongSanPham = 0;
                        }
                        $output='<ul class="page-breadcrumb">
                                    <li>Bạn đang có '.$soLuongSanPham.' sản phẩm</li>
                                </ul>';

                    }else{
                        if(isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])){
                            $soLuongSanPham = count($_SESSION['giohang']);
                        } else {
                            $soLuongSanPham = 0;
                        }
                        $output='<ul class="page-breadcrumb">
                                    <li>Vui lòng đăng nhập để tiếp tục</li>
                                    <li>Bạn đang có '.$soLuongSanPham.' sản phẩm</li>
                                </ul>';

                    }

                ?>
                    
                    <?=$output?>

                </div>

            </div>
        </div>
    </div>
</div>

<!--Cart section start-->
<div class="cart-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- Cart Table -->


                <div class="cart-table table-responsive mb-30">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Ảnh</th>
                                <th class="pro-title">Sản phẩm</th>
                                <th class="pro-price">Giá tiền</th>
                                <th class="pro-quantity">Số lượng</th>
                                <th class="pro-subtotal">Giá</th>
                                <th class="pro-remove">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/product-1.jpg" alt="Product"></a></td>
                                <td class="pro-title"><a href="#">Black Cable Restorer</a></td>
                                <td class="pro-price"><span>$25.00</span></td>
                                <td class="pro-quantity">
                                    <div class="pro-qty"><input type="number" value="1"></div>
                                </td>
                                <td class="pro-subtotal"><span>$25.00</span></td>
                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr> 

                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img
                                            src="'.$img.'" alt="Product"></a></td>
                                <td class="pro-title"><a href="#">'.$tensp.'</a></td>
                                <td class="pro-price"><span>$'.$gia.'<input type="hidden" class="iprice" value="'.$gia.'"></span></td>
                                <td class="pro-quantity">
                                    <div><input class="iquantity" onchange="subTotal()" type="number" value="'.$soluong.'"></div>
                                </td>
                                <td class="pro-subtotal itotal"><span>'.$tt.'</span></td>
                                <td class="pro-remove"><a href="'.$linkdel.'"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        
                        
                        -->

                            <?php
                                if(isset($_SESSION['giohang'])&&is_array($_SESSION['giohang'])){
                                    $i=0;
                                    foreach ($_SESSION['giohang'] as $item) {
                                        extract($item);
                                        $tt=$gia*$soluong;
                                        $linkdel="index.php?pg=delcart&ind=".$i;
                                        $linkdetail="index.php?pg=chitietsanpham&idsp=".$idsp;
                                        echo '
                                        <tr>
                                            <input type="hidden" class="pid" value="'.$idsp.'">
                                            <input type="hidden" class="pprice" value="'.$gia.'">
                                            <td class="pro-thumbnail"><a href="#">
                                                <img src="'.$img.'" alt="Product">
                                                </a></td>
                                            <td class="pro-title"><a href="'.$linkdetail.'">'.$tensp.'</a></td>
                                            <td class="pro-price"><span>$'.$gia.'</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input class="quantity-input itemQty" type="number" value="'.$soluong.'"></div>
                                            </td>
                                            <td class="pro-subtotal"><span>$'.$tt.'</span></td>
                                            <td class="pro-remove"><a href="'.$linkdel.'"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>';
                                        $i++;
                                        $tong=$tong+$tt;
                                    }
                                }

                                
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-right">
                                    <h4 style="line-height: 45px;">Tổng:</h4>
                                </td>
                                <td class="text-center">
                                    <h4 style="line-height: 45px;"><span><?=$tong?>$</span></h4>
                                </td>
                                <td class="text-center">
                                    <div class="cart-summary-button">
                                        <a style="color: #fff;" class="btn" href="index.php?pg=bill">Đặt hàng</a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>

        </div>
    </div>
</div>
<!--Cart section end-->