
<div class="main-content">
                <h3 class="title-page">
                    Thêm danh mục
                </h3>
                
                <form class="addPro" action="index.php?act=adddm" method="POST">
                    
                    <div class="form-group">
                        <label for="name">Tên danh mục:</label>
                        <input type="text" class="form-control" name="tendanhmuc" id="name" placeholder="Nhập tên danh mục">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm danh mục">
                        <input type="reset" class="btn btn-primary" value="Làm mới"></input>
                        <a href="index.php?act=listdm"><input type="button" class="btn btn-primary" value="Danh mục"></input></a>
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