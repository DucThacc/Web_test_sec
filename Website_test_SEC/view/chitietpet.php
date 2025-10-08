<?php 
    if(is_array($pet)){
        extract($pet);
    }
    $hinhpath="upload/thucung/".$imgpet;
    if(is_file($hinhpath)){
        $hinh='<img src="'.$hinhpath.'" height="80">';
    }else{
        $hinh='Không tồn tại ảnh';
    }
    $listpettheodm='index.php?pg=adopt&iddm='.$idDMP;

    if($idDMP==1){
        $name='<h3><i class="fas fa-cat"></i> '.$tenPet.' </h3>';
    }else{
        $name='<h3><i class="fas fa-dog"></i> '.$tenPet.' </h3>';
    }

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
                            <h1 style="margin: 0 !important;">Nhận nuôi</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Nhận nuôi</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
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
                            
                            <h2><?=$name?></h2>
                            <div class="single-product-price">
                                -Độ tuổi: <?=$doTuoi?>
                            </div>
                            <div class="single-product-price">
                                -Giới tính: <?=$gioiTinh?>
                            </div>
                            <div class="single-product-price">
                                -Triệt sản: <?=$trietSan?>
                            </div>
                            <div class="single-product-price">
                                -Tiên phòng: <?=$tiemPhong?>
                            </div>
                            <div class="single-product-quantity">
                                    <form action="index.php?pg=nhannuoi" method="POST">
                                        <input type="hidden" name="idpet" value="<?=$idPet?>">
                                        <input type="hidden" name="iduser" value="<?=$idUser?>">
                                        <div class="add-to-link">
                                            <input type="submit" name="nhannuoi" class="product-add-btn" data-text="add to cart" value="Nhận nuôi "><i class="fas fa-paw icon"></i></input>
                                        </div>
                                    </form>                            
                            </div>
                            <div class="wishlist-compare-btn">
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                    Danh mục:
                                    <a href="<?=$listpettheodm?>"><?=$tendanhmuc['tenDanhMucPet']?></a>
                                </span>
                            </div>
                            <div class="single-product-sharing">
                                <h3>Chia sẻ</h3>
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
                                        <p><?=$motaPet?></p>
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

