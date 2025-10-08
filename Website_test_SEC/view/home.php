<!--Product section start-->
<div class="product-section section pt-70 pt-lg-45 pt-md-40 pt-sm-30 pt-xs-15">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="product-tab-menu mb-40 mb-xs-20">
                            <ul class="nav">
                                <li><a class="active" data-toggle="tab" href="#products"> Sản phẩm gây quỹ</a></li>
                                <li><a data-toggle="tab" href="#adopt"> Nhận nuôi </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="products">
                                <div class="row tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "rows": 2,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":576, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>
                                    <!-- <div div class="col-12">
                                        
                                        <div class="single-product mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="view/assets//images/product/product-1.jpg" alt="">
                                                </a>
                                                <span class="descount-sticker">-10%</span>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="#">Add to Cart</a>
                                                    <ul class="d-flex">
                                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                                title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">White Shave Brush</a></h3>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="price"><span class="new">€110.00</span><span
                                                        class="old">€130.00</span></h4>
                                            </div>
                                        </div>
                                    
                                    </div> -->

                                    <?php 
                                        foreach ($listsanphamhome as $sanpham) {
                                            extract($sanpham);
                                            $hinhpath="upload/sanpham/".$img;
                                            if($giaKM>0){
                                                $giaMoi=$gia - ($gia * $giaKM / 100);
                                                $giaMoi = round($giaMoi,0);
                                            }else{
                                                $giaMoi=$gia;
                                            }
                                            $linkdetail="index.php?pg=chitietsanpham&idsp=".$idSanPham;


                                            echo '<div div class="col-12">

                                            <form action=index.php?pg=addcart method="POST">
                                        
                                                    <div class="single-product mb-30">
                                                        <div class="product-img">
                                                            <a href="'.$linkdetail.'">
                                                                <img src="'.$hinhpath.'" alt="">
                                                            </a>
                                                            <span class="descount-sticker">-'.$giaKM.'%</span>
                                                            <span class="sticker">New</span>
                                                            
                                                            <div class="product-action d-flex justify-content-center"> 
                                                                <input class="btn btn-lg btn-round"  type="submit" value="Mua sản phẩm" name="addtocart">
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3><a href="'.$linkdetail.'">'.$tenSanPham.'</a></h3>
                                                            <h4 class="price">
                                                                <span class="new">$'.$giaMoi.'</span>
                                                                <span style="text-decoration: line-through;" class="old">'.$gia.'</span>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" value="'.$idSanPham.'" name="idsp">
                                                    <input type="hidden" value="'.$tenSanPham.'" name="tensp">
                                                    <input type="hidden" value="'.$hinhpath.'" name="img">
                                                    <input type="hidden" value="'.$giaMoi.'" name="gia">
                                                    <input type="hidden" value="1" name="soluong">

                                                </form>    
                                                
                                                </div>';
                                                    
                                        }
                                    ?>

                                    

                                    

                                    
                                </div>
                            </div>



                            <div class="tab-pane fade" id="adopt">
                                <div class="row tf-element-carousel" data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": true,
                                    "rows": 2,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                    }' data-slick-responsive='[
                                    {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2,
                                    "arrows": false,
                                    "autoplay": true
                                    }},
                                    {"breakpoint":576, "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "autoplay": true
                                    }}
                                    ]'>

                                    <?php 
                                        foreach ($listpet as $pet) {
                                            extract($pet);
                                            $hinhpath="upload/thucung/".$imgpet;
                                            $linkdetail="index.php?pg=chitietpet&idpet=".$idPet;


                                            echo '<div class="col-12">
                                        
                                                        <div class="single-product mb-30">
                                                            <div class="product-img">
                                                                <a href="'.$linkdetail.'">
                                                                    <img src="'.$hinhpath.'" alt="">
                                                                </a>
                                                                <span class="sticker">New</span>
                                                                <div class="product-action d-flex justify-content-between">
                                                                    <a class="product-btn" href="'.$linkdetail.'">Nhận nuôi</a>
                                                                    <ul class="d-flex">
                                                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                                                title="Xem"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <h3><a href="'.$linkdetail.'">'.$tenPet.'</a></h3>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>';
                                                    }
                                    ?>



                                    <!-- <div class="col-12">
                                        
                                        <div class="single-product mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="view/assets//images/product/product-10.jpg" alt="">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="product-action d-flex justify-content-between">
                                                    <a class="product-btn" href="#">Nhận nuôi</a>
                                                    <ul class="d-flex">
                                                        <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                                title="Xem"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="single-product.html">Tên</a></h3>
                                            </div>
                                        </div>
                                        
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Product section end-->