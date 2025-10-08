<?php 

if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}else{
    $idUser=0;
}

?>
<div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Thú cưng</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li>Thú cưng</li>
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
                            <h3 class="sidebar-title">Danh mục thú cưng</h3>
                            <ul class="sidebar-list">
                                <?php                                     
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        $listpettheodm='index.php?pg=adopt&iddm='.$idDanhMucPet;
                                        echo '<li>
                                                <a href="'.$listpettheodm.'"><i class="fa fa-angle-right"></i>'.$tenDanhMucPet.'</a>
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
                                    <div class="toolbar-short-area d-md-flex align-items-center">
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

                                    </div>
                                    <!--Toolbar Short Area End-->
                                </div>
                                <!-- Grid & List View End -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">

                                                <div class="row">
                                                        
                                                        <!-- Single Product Start -->
                                                        <?php 
                                                            foreach ($listpet as $pet) {
                                                                extract($pet);
                                                                $hinhpath="upload/thucung/".$imgpet;

                                                                $linkdetail="index.php?pg=chitietpet&idpet=".$idPet;
                                                                echo '
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <form action='.$linkdetail.' method="POST">
                                                                        <div class="single-product mb-30">
                                                                                    <div class="product-img">
                                                                                        <a href="'.$linkdetail.'">
                                                                                            <img src="'.$hinhpath.'"
                                                                                                alt="">
                                                                                        </a>
                                                                                        
                                                                                        <div
                                                                                            class="product-action d-flex justify-content-center">
                                                                                            <input class="btn btn-lg btn-round" type="submit" value="Nhận nuôi" onclick="window.location.href='.$linkdetail.'">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product-content">
                                                                                        <h3><a href="'.$linkdetail.'">'.$tenPet.'</a></h3>
                                                                                    </div>
                                                                                </div>

                                                                                <input type="hidden" value="'.$idPet.'" name="idpet">    

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
                                <ul class="page-pagination">
                                    <!-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li> -->
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