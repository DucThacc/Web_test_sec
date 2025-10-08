<div class="main-content">
                <h3 class="title-page">
                    Thêm thành viên
                </h3>
                
                <form class="addPro" action="index.php?act=adduser" method="POST">


                    <div class="form-group">
                        <label for="tensp">Tên người dùng:</label>
                        <input type="text" class="form-control" name="tenuser" id="tenuser" placeholder="Nhập tên người dùng">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Tài khoản:</label>
                        <input type="text" class="form-control" name="accountuser" id="accountuser" placeholder="Nhập tên đăng nhập">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Mật khẩu:</label>
                        <input type="password" class="form-control" name="passuser" id="passuser" placeholder="Nhập mật khẩu">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Địa chỉ email:</label>
                        <input type="email" class="form-control" name="mailuser" id="mailuser" placeholder="Nhập địa chỉ email">
                    </div>

                    <div class="form-group">
                        <label for="tensp">Số điện thoại:</label>
                        <input type="text" class="form-control" name="teluser" id="teluser" placeholder="Nhập số điện thoại">
                    </div>


                    
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea class="form-control" name="addressuser" rows="3"
                            placeholder="Nhập địa chỉ người dùng" style="height: 78px;"></textarea>
                    </div>
            
                    <div class="form-group">
                        <input type="submit" name="themthanhvien" class="btn btn-primary" value="Thêm thành viên"></input>
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