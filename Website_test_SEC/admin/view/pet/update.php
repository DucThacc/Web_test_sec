<?php 
    if(is_array($pet)){
        extract($pet);
    }
    $hinhpath="../upload/thucung/".$imgpet;
    if(is_file($hinhpath)){
        $hinh='<img src="'.$hinhpath.'" height="80">';
    }else{
        $hinh='Không tồn tại ảnh';
    }
?>

<div class="main-content">
                <h3 class="title-page">
                    Thêm thú cưng
                </h3>
                
                <form class="addPro" action="index.php?act=updatepet" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idpet" value="<?=$idPet?>">


                    <div class="form-group">
                        <label for="tensp">Tên :</label>
                        <input type="text" class="form-control" name="tenpet" id="tenpet" placeholder="Nhập tên thú cưng" value="<?=$tenPet?>">
                    </div>

                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="iddmpet">
                            <?php 
                                foreach ($listdanhmucpet as $tbl_danhmuc_pet) {
                                    if($idDMP==$tbl_danhmuc_pet['idDanhMucPet']){
                                        echo '<option value="'.$tbl_danhmuc_pet['idDanhMucPet'].'" selected>'.$tbl_danhmuc_pet['tenDanhMucPet'].'</option>';
                                    }
                                    
                                    else{
                                        echo '<option value="'.$tbl_danhmuc_pet['idDanhMucPet'].'">'.$tbl_danhmuc_pet['tenDanhMucPet'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Giới tính:</label>
                        <input type="text" class="form-control" name="gioitinh" id="gioitinh" placeholder="Nhập giới tính" value="<?=$gioiTinh?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Độ tuổi:</label>
                        <input type="text" class="form-control" name="dotuoi" id="dotuoi" placeholder="Nhập độ tuổi" value="<?=$doTuoi?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Triệt sản:</label>
                        <input type="text" class="form-control" name="trietsan" id="trietsan" value="<?=$trietSan?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Tiêm phòng:</label>
                        <input type="text" class="form-control" name="tiemphong" id="tiemphong" value="<?=$tiemPhong?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Tình trạng:</label>
                        <input type="text" class="form-control" name="tinhtrang" id="tinhtrang" value="<?=$tinhTrangPet?>">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                            <?=$hinh?>
                        </div>
                    </div>
                    
                                        
                    <div class="form-group" >
                        <label>Mô tả</label>
                        <textarea class="form-control" name="motapet" rows="3" id="editor"
                        placeholder="Nhập mô tả về thú cưng" style="height: 300px;"> <?=$motaPet?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập Nhật"></input>
                        
                    </div>
                    <?php 
                        if(isset($thongbao) && ($thongbao!="")){
                            echo $thongbao;
                        }                        
                    ?>
                </form>
            </div>
            

            <script>
                new DataTable('#example');              
                
            </script>