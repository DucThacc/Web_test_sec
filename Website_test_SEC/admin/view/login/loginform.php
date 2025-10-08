<?php 
    if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $checkuser=checkuser($user,$pass);
        if((is_array($checkuser))){
            $_SESSION['user']=$checkuser;
			extract($_SESSION['user']);
			if($decen != 0){
				include "home.php";
			}else{
				$thongbao1= 'Tài khoản không đủ quyền.';
			}
        }
        else{
            $thongbao1= 'Tài khoản or mật khẩu sai.';
        }
    }
?>

<div class="main-content">	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<span class="login100-form-title p-b-26">
						Glassa
					</span>
					<span class="login100-form-title p-b-48">
						<i class="fa-solid fa-dog"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user">
						<span class="focus-input100" data-placeholder="Tài khoản"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" name="dangnhap" class="login100-form-btn" value="Đăng nhập">
								
							</input>
						</div>
					</div>
				</form>
                <?php 
                    if(isset($thongbao1) && ($thongbao1!="")){
                        echo $thongbao1;
                    } 
                ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
</div>

</body>
</html>