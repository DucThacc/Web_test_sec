<div class="main-content">
                <h3 class="title-page">
                    Thêm sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?act=addsp" method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="tensp">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="tensp" id="tensp" placeholder="Nhập tên sản phẩm">
                    </div>


                    <div class="form-group">
                        <label for="price">Giá gốc:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="giasp" id="giasp" class="form-control" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price_sale">% Khuyến mãi:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                            <input type="text" name="giakm" id="giakm" class="form-control"
                                placeholder="% khuyến mãi">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="iddm">
                            <?php 
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$idDanhMuc.'">'.$tenDanhMuc.'</option>';
                                }
                            ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="name">Số lượng:</label>
                        <input type="text" class="form-control" name="soluong" id="soluong" placeholder="Nhập số lượng sản phẩm">
                    </div>

                    <div class="form-group">
                        <label for="name">Tình trạng:</label>
                        <input type="text" class="form-control" name="tinhtrang" id="tinhtrang" placeholder="Nhập tình trạng sản phẩm">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea class="form-control" name="motangan" rows="3"
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
                    </div>
                    <div class="form-group" >
                        <label>Mô tả chi tiết</label>
                        <textarea class="form-control" name="motachitiet" rows="3" id="editor"
                        placeholder="Nhập mô tả chi tiết về sản phẩm" style="height: 300px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm sản phẩm"></input>
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