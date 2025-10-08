<div id="content">
<div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Sản phẩm gây quỹ</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li>Sản phẩm</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div
            class="shop-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Danh mục sản phẩm</h3>
                            <ul class="sidebar-list">
                                <?php                                     
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        $listsptheodm='index.php?pg=product&iddm='.$idDanhMuc;
                                        echo '<li>
                                                <a href="'.$listsptheodm.'"><i class="fa fa-angle-right"></i>'.$tenDanhMuc.'</a>
                                            </li>';    
                                    }
                                
                                ?>
                                <!-- <li>
                                    <a href="#"><i class="fa fa-angle-right"></i>Red <span class="count">(5)</span></a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->

                         <!-- <div class="common-sidebar-widget">
                             <h3 class="sidebar-title">Giá</h3>
                             <ul class="sidebar-list">
                                 <li><a href="index.php?pg=product&giatien=1"><i class="fa fa-angle-right"></i><span class="price">€0.00</span> -
                                         <span class="price">€99.99</span></a></li>
                                 <li><a href="index.php?pg=product&giatien=2"><i class="fa fa-angle-right"></i><span class="price">€100.00</span> 
                                         và hơn</a></li>
                             </ul>
                         </div> -->

                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="assets/images/banner/h4-banner-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="row">
                            <div class="col-12">
                                <!-- Grid & List View Start -->
                                <div
                                    class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
                                    <div class="grid-list-option">                                        
                                    </div>
                                    <!--Toolbar Short Area Start-->
                                    <!-- <div class="toolbar-short-area d-md-flex align-items-center">
                                        <div class="toolbar-shorter ">
                                            <label>Sort By:</label>
                                            <select class="wide">
                                                <option data-display="Select">Nothing</option>
                                                <option value="Relevance">Relevance</option>
                                                <option value="Name, A to Z">Name, A to Z</option>
                                                <option value="Name, Z to A">Name, Z to A</option>
                                                <option value="Price, low to high">Price, low to high</option>
                                                <option value="Price, high to low">Price, high to low</option>
                                            </select>
                                        </div>
                                        <div class="toolbar-shorter ">
                                            <label>Show</label>
                                            <select class="small">
                                                <option data-display="Select">9</option>
                                                <option value="15">15</option>
                                                <option value="30">30</option>
                                            </select>
                                            <span>per page</span>
                                        </div>

                                    </div> -->
                                    <!--Toolbar Short Area End-->
                                </div>
                                <!-- Grid & List View End -->
                            </div>
                        </div>
                        <div class="row" id="content-section">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">

                                                <div class="row" >
                                                        
                                                        <!-- Single Product Start -->
                                                        <?php 
                                                            foreach ($listsanpham as $sanpham) {
                                                                extract($sanpham);
                                                                $hinhpath="upload/sanpham/".$img;

                                                                $linkdetail="index.php?pg=chitietsanpham&idsp=".$idSanPham;
                                                                if($giaKM>0){
                                                                    $km='<span class="descount-sticker">-'.$giaKM.'%</span>';
                                                                    $giaMoi=$gia - ($gia * $giaKM / 100);
                                                                    $giaMoi = round($giaMoi,0);
                                                                    $giaInRa='<h4 class="price"><span class="new">$'.$giaMoi.'</span><span
                                                                    class="old" style="text-decoration: line-through;">$'.$gia.'</span></h4>';
                                                                }else{
                                                                    $km='';
                                                                    $giaInRa='<h4 class="price"><span class="new">$'.$gia.'</span></h4>';
                                                                    $giaMoi=$gia;
                                                                }
                                                                echo '
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                
                                                                <form action=index.php?pg=addcart method="POST">


                                                                        <div class="single-product mb-30">
                                                                                    <div class="product-img">
                                                                                        <a href="'.$linkdetail.'">
                                                                                            <img src="'.$hinhpath.'"
                                                                                                alt="">
                                                                                        </a>
                                                                                        '.$km.'
                                                                                        <div
                                                                                            class="product-action d-flex justify-content-center">
                                                                                            <input class="btn btn-lg btn-round"  type="submit" value="Mua hàng" name="addtocart">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product-content">
                                                                                        <h3><a href="'.$linkdetail.'">'.$tenSanPham.'</a></h3>
                                                                                        '.$giaInRa.'
                                                                                    </div>
                                                                                </div>

                                                                                <input type="hidden" value="'.$idSanPham.'" name="idsp">
                                                                                <input type="hidden" value="'.$tenSanPham.'" name="tensp">
                                                                                <input type="hidden" value="'.$hinhpath.'" name="img">
                                                                                <input type="hidden" value="'.$giaMoi.'" name="gia">
                                                                                <input type="hidden" value="1" name="soluong">        

                                                                </form>
                                                                                
                                                                </div>
                                                                
                                                                ';

                                                            }
                                                        ?>
                                                        

                                                        <!-- Single Product End -->
                                                    

                                                    <!-- <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="single-product.html">
                                                                    <img src="./assets/images/product/product-12.jpg"
                                                                        alt="">
                                                                </a>
                                                                <span class="descount-sticker">-10%</span>
                                                                <div
                                                                    class="product-action d-flex justify-content-between">
                                                                    <a class="product-btn" href="#">Add to Cart</a>
                                                                    <ul class="d-flex">
                                                                        <li><a href="#quick-view-modal-container"
                                                                                data-toggle="modal"
                                                                                title="Quick View"><i
                                                                                    class="fa fa-eye"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#"><i
                                                                                    class="fa fa-exchange"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                                                <h4 class="price"><span class="new">€110.00</span><span
                                                                        class="old">€130.00</span></h4>
                                                            </div>
                                                        </div> -->

                                                    
                                                </div>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30 mb-sm-40 mb-xs-30">
                            <div class="col">
                                <ul class="page-pagination pagination" >
                                    <!-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li> -->
                                    <!-- <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li> -->
                                    <!-- <li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
                                    <?php 
                                        echo $hienthisotrang;
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>