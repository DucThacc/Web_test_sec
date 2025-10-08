<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="upload/sanpham/".$img;
    if(is_file($hinhpath)){
        $hinh='<img src="'.$hinhpath.'" height="80">';
    }else{
        $hinh='Không tồn tại ảnh';
    }

    if($giaKM >0){
        $giaMoi=$gia - ($gia * $giaKM / 100);
        $giaMoi = round($giaMoi,0);
        $giaInRa='<span class="price new-price">$'.$giaMoi.'</span>
                    <span class="regular-price">$'.$gia.'</span>';
    }else{
        $giaMoi=$gia;
        $giaInRa='<span class="price new-price">$'.$giaMoi.'</span>';
    }

    $listsptheodm='index.php?pg=product&iddm='.$idDM;

?>

<div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Sản phẩm</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Sản phẩm</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <form action=index.php?pg=addcart method="POST">
                <input type="hidden" value="<?=$idSanPham?>" name="idsp">
                <input type="hidden" value="<?=$tenSanPham?>" name="tensp">
                <input type="hidden" value="<?=$hinhpath?>" name="img">
                <input type="hidden" value="<?=$giaMoi?>" name="gia">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-lg-image-1 tf-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "asNavFor": ".slider-thumbs-1",
                                "arrows": false,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                }'>
                                <div class="lg-image">
                                    <img src="<?=$hinhpath?>" alt="">
                                    <a href="<?=$hinhpath?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                </div>
                                
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "focusOnSelect": true,
                                "asNavFor": ".slider-lg-image-1",
                                "arrows": false,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":991, "settings": {
                                    "slidesToShow": 3
                                }},
                                {"breakpoint":767, "settings": {
                                    "slidesToShow": 4
                                }},
                                {"breakpoint":479, "settings": {
                                    "slidesToShow": 2
                                }}
                            ]'>
                                <!-- <div class="sm-image"><img src="<?=$hinhpath?>" alt="product image thumb"></div> -->
                            </div>
                        </div>
                        <!--Product Details Left -->
                    </div>
                    <div class="col-md-7">
                        <!--Product Details Content Start-->
                        <div class="product-details-content">
                            
                            <h2><?=$tenSanPham?></h2>
                            <div class="single-product-price">
                                <?=$giaInRa?>
                            </div>
                            <div class="single-product-price">
                                Số lượng:
                                <?=$soLuong?>
                            </div>
                            <div class="product-description">
                                <p><?=$moTaNgan?></p>
                            </div>
                            <div class="single-product-quantity">
                                <form class="add-quantity" action="#">
                                    <div class="product-quantity">
                                        <input value="1" type="number" name="soluong">
                                    </div>
                                    <div class="add-to-link">
                                        <input type="submit" class="product-add-btn" data-text="add to cart" name="addtocart" value="Thêm vào giỏ hàng"></input>
                                    </div>
                                </form>
                            </div>
                            <div class="wishlist-compare-btn">
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                    Danh mục:
                                    <a href="<?=$listsptheodm?>"><?=$tendanhmuc['tenDanhMuc']?></a>
                                </span>
                            </div>
                            <div class="single-product-sharing">
                                <h3>Chia sẻ sản phẩm</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Product Details Content End-->
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Mô tả</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                        <p><?=$mota?></p>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Product Description Review Section Start-->

        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluanform.php", {
                    idpro: <?=$idSanPham?>
                });

            });
        </script>

        <!--Product Description Review Section Start-->
        <div id="binhluan">

        </div>
        <!-- <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <script>
                                $(document).ready(function(){
                                $("input").keyup(function(){
                                    txt = $("input").val();
                                    $("span").load("demo_ajax_gethint.asp", {suggest: txt});
                                });
                                });
                            </script>
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Bình Luận</a>
                                </li>
                            </ul>
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                    <div class="review-page-comment">
                                        <h2>Trải nghiệm sản phẩm của người dùng</h2>
                                        <div class="review-form-wrapper">
                                            <div class="review-form">

                                                <form action="#">
                                                    <div class="input-element">
                                                        <div class="comment-form-comment">
                                                            <label><strong>Nhập bình luận</strong></label>
                                                            <textarea name="message" cols="40" rows="8"></textarea>
                                                        </div>
                                                        <div class="comment-submit">
                                                            <button type="submit" class="form-button">Bình luận</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="product-comment">
                                                    <div class="product-comment-content">
                                                        <p class="meta">
                                                            <strong>Tên người bình luận</strong> - <span>Ngày bình luận</span>
                                                        <div class="description">
                                                            <p>Nội dung bình luận</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--Product Description Review Section Start-->

        

    
        <!--Product section start-->
        <div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col">
                        <div class="section-title mb-40 mb-xs-20">
                            <h2>Sản phẩm liên quan</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="row tf-element-carousel" data-slick-options='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "infinite": true,
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
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $hinhpath="upload/sanpham/".$img;
                        $giaMoi=$gia - ($gia * $giaKM / 100);
                        $giaMoi = round($giaMoi,0);

                        $linkdetail="index.php?pg=chitietsanpham&idsp=".$idSanPham;


                        echo '<div div class="col-12">             
                                <div class="single-product mb-30">
                                    <div class="product-img">
                                        <a href="'.$linkdetail.'">
                                            <img src="'.$hinhpath.'" alt="">
                                        </a>
                                        <span class="descount-sticker">-'.$giaKM.'%</span>
                                        <span class="sticker">New</span>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="#">Thêm hàng</a>
                                            <ul class="d-flex">
                                                <li><a href="#quick-view-modal-container" data-toggle="modal"
                                                        title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="'.$linkdetail.'">'.$tenSanPham.'</a></h3>
                                        <h4 class="price">
                                            <span class="new">€'.$giaMoi.'</span>
                                            <span style="text-decoration: line-through;" class="old">'.$gia.'</span>
                                        </h4>
                                    </div>
                                </div>
                            
                            </div>';
                    }


                
                ?>
                </div>
            </div>
        </div>
        <!--Product section end-->
