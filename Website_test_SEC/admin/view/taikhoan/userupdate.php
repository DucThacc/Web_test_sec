<?php 
    if(is_array($user)){
        extract($user);
    }
    
?>

<div class="main-content">
                <h3 class="title-page">
                    Cập nhật thành viên
                </h3>
                
                <form class="addPro" action="index.php?act=suauser" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="iduser" value="<?=$idUser?>">

                    <div class="form-group">
                        <label for="tensp">Tên người dùng:</label>
                        <input type="text" class="form-control" name="tenuser" id="tenuser" value="<?=$tenUser?>">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Tên tài khoản:</label>
                        <input type="text" class="form-control" name="accountuser" id="accountuser" value="<?=$accountUser?>">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Mật khẩu:</label>
                        <input type="text" class="form-control" name="passuser" id="passuser" value="<?=$passUser?>">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Email:</label>
                        <input type="text" class="form-control" name="mailuser" id="mailuser" value="<?=$emailUser?>">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Địa chỉ:</label>
                        <input type="text" class="form-control" name="addressuser" id="addressuser" value="<?=$addressUser?>">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Số điện thoại:</label>
                        <input type="text" class="form-control" name="teluser" id="teluser" value="<?=$telUser?>">
                    </div>

                    <!-- <div class="form-group">
                        <label for="name">Số lượng:</label>
                        <input type="text" class="form-control" name="soluong" id="soluong" value="<?=$soLuong?>">
                    </div>

                    <div class="form-group">
                        <label for="name">Tình trạng:</label>
                        <input type="text" class="form-control" name="tinhtrang" id="tinhtrang" value="<?=$tinhTrang?>">
                    </div> -->
                    <?php 
                        if(isset($thongbao) && $thongbao!=""){
                            echo $thongbao;
                        }
                    ?>

                    
                    
                    <div class="form-group">
                        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật người dùng"></input>
                    </div>
                </form>
            </div>
            

            <script>
                new DataTable('#example');              
                
            </script>