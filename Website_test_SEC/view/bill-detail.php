<!--My Account section start-->
        <div
            class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-shopping-cart"></i>
                                        Chi tiết đơn hàng</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">

                                    <div class="myaccount-content">
                                            <h3>Hóa đơn</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tên sản phẩm</th>
                                                            <th>Hình</th>
                                                            <th>Số lượng</th>
                                                            <th>Giá</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php 
                                                            $i=1;
                                                            $tong=0;
                                                            foreach ($listcart as $cart) {
                                                                extract($cart);

                                                                $giaTong=$gia*$soLuong;
                                                                if (is_file($img)) {
                                                                    $hinh = '<img src="' . $img . '" height="80">';
                                                                } else {
                                                                    $hinh = 'Không tồn tại ảnh';
                                                                }
                                                                echo '<tr>
                                                                        <td>'.$i.'</td>
                                                                        <td>'.$tenSP.'</td>
                                                                        <td>'.$hinh.'</td>
                                                                        <td>'.$soLuong.'</td>
                                                                        <td>$'.$giaTong.'</td>
                                                                    </tr>';
                                                                $i++;
                                                                $tong=$tong+$giaTong;
                                                            }
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="4" class="text-right">
                                                                <h4 style="line-height: 45px;">Tổng:</h4>
                                                            </td>
                                                            <td class="text-center">
                                                                <h4 style="line-height: 45px;">$ <strong><?=$tong?></strong></h4>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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