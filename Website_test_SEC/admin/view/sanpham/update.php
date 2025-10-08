<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/sanpham/".$img;
    if(is_file($hinhpath)){
        $hinh='<img src="'.$hinhpath.'" height="80">';
    }else{
        $hinh='Không tồn tại ảnh';
    }
?>

<div class="main-content">
                <h3 class="title-page">
                    Cập nhật sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idsp" value="<?=$idSanPham?>">

                    <div class="form-group">
                        <label for="tensp">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="tensp" id="tensp" value="<?=$tenSanPham?>">
                    </div>


                    <div class="form-group">
                        <label for="price">Giá gốc:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="giasp" id="giasp" class="form-control" value="<?=$gia?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price_sale">% Khuyến mãi:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                            <input type="text" name="giakm" id="giakm" class="form-control" value="<?=$giaKM?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="iddm">
                            <?php 
                                foreach ($listdanhmuc as $tbl_danhmuc_sp) {
                                    if($idDM==$tbl_danhmuc_sp['idDanhMuc']){
                                        echo '<option value="'.$tbl_danhmuc_sp['idDanhMuc'].'" selected>'.$tbl_danhmuc_sp['tenDanhMuc'].'</option>';
                                    }
                                    
                                    else{
                                        echo '<option value="'.$tbl_danhmuc_sp['idDanhMuc'].'">'.$tbl_danhmuc_sp['tenDanhMuc'].'</option>';
                                    }
                                    
                                }
                            ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="name">Số lượng:</label>
                        <input type="text" class="form-control" name="soluong" id="soluong" value="<?=$soLuong?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Tình trạng:</label>
                        <input type="text" class="form-control" name="tinhtrang" id="tinhtrang" value="<?=$tinhTrang?>">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                            <?=$hinh?>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea class="form-control" name="motangan" rows="3"
                            style="height: 78px;"><?=$moTaNgan?></textarea>
                    </div>
                    <div class="form-group" >
                        <label>Mô tả chi tiết</label>
                        <textarea class="form-control" name="motachitiet" rows="3" id="editor"
                        placeholder="Nhập mô tả chi tiết về sản phẩm" style="height: 300px;"><?=$mota?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật sản phẩm"></input>
                    </div>
                </form>
            </div>
            

            <script>
                new DataTable('#example');              
                
            </script>