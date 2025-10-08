<div class="main-content">
                <h3 class="title-page">
                    Thêm thú cưng
                </h3>
                
                <form class="addPro" action="index.php?act=addpet" method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="tensp">Tên :</label>
                        <input type="text" class="form-control" name="tenpet" id="tensp" placeholder="Nhập tên thú cưng">
                    </div>

                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="iddmpet">
                            <?php 
                                foreach ($listdanhmuc as $danhmucpet) {
                                    extract($danhmucpet);
                                    echo '<option value="'.$idDanhMucPet.'">'.$tenDanhMucPet.'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Giới tính:</label>
                        <input type="text" class="form-control" name="gioitinh" id="gioitinh" placeholder="Nhập giới tính">
                    </div>

                    <div class="form-group">
                        <label for="name">Độ tuổi:</label>
                        <input type="text" class="form-control" name="dotuoi" id="dotuoi" placeholder="Nhập độ tuổi">
                    </div>

                    <div class="form-group">
                        <label for="name">Triệt sản:</label>
                        <input type="text" class="form-control" name="trietsan" id="trietsan" >
                    </div>

                    <div class="form-group">
                        <label for="name">Tiêm phòng:</label>
                        <input type="text" class="form-control" name="tiemphong" id="tiemphong" >
                    </div>

                    <div class="form-group">
                        <label for="name">Tình trạng:</label>
                        <input type="text" class="form-control" name="tinhtrang" id="tinhtrang">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh (720x960)</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                                        
                    <div class="form-group" >
                        <label>Mô tả</label>
                        <textarea class="form-control" name="motapet" rows="3" id="editor"
                        placeholder="Nhập mô tả về thú cưng" style="height: 300px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="themmoipet" class="btn btn-primary" value="Thêm"></input>
                        <input type="reset" name="reset" class="btn btn-primary" value="Làm mới"></input>
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