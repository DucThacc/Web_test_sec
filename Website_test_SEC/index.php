<?php 
    session_start();
    include ("model/sanpham.php");
    include ("model/danhmuc.php");
    include ("model/pet.php");
    include ("model/danhmucpet.php");
    include ("model/pdo.php");
    include ("model/taikhoan.php");
    include ("model/cart.php");
    include ("model/binhluan.php");

    include ("view/header.php");
    

    if(isset($_GET['pg'])&&($_GET['pg']!="")){
        switch ($_GET['pg']) {
            //sanpham
            case 'product':
                // Làm tìm kiếm theo giá tiền (chưa làm)
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                if(isset($_GET['kyw'])&&($_GET['kyw']!="")){
                    $kyw=$_GET['kyw'];
                }else{
                    $kyw="";
                }

                $tongsp=count_sanpham($kyw,$iddm);
                if(!isset($_GET['page'])){
                    $page=1;
                }else{
                    $page=$_GET['page'];
                }
                $soluongsp=6;
                $listsanpham=loadall_list_sanpham($kyw,$iddm,$page,$soluongsp);
                $hienthisotrang=hien_thi_so_trang($tongsp,$soluongsp);
                $listdanhmuc=loadall_danhmuc();            
                // $listsanpham=loadall_sanpham('',$iddm);
                include ("view/sanpham.php");
                break;

            case 'search':
                if(isset($_POST['timkiem']) && $_POST['timkiem']){
                    $kyw=$_POST['kyw'];
                }
                else{
                    $kyw='';
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }

                if(!isset($_GET['page'])){
                    $page=1;
                }else{
                    $page=$_GET['page'];
                }
                $tongsp=count_sanpham($kyw,$iddm);
                $soluongsp=6;
                $listsanpham=loadall_list_sanpham($kyw,$iddm,$page,$soluongsp);
                $hienthisotrang=hien_thi_so_trang($tongsp,$soluongsp);
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,0);
                include ("view/sanpham.php");
                break;   

            case 'chitietsanpham':
                if((isset($_GET['idsp']))&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $sanpham=loadone_sanpham($id);
                    $tendanhmuc=load_ten_dm($sanpham['idDM']);
                    $sp_cung_loai=load_sanpham_cungloai($id,$sanpham['idDM']);
                }
                include ("view/chitietsanpham.php");
                break;
            
            //Login    

            case 'login_register_form':
                include ("view/login-register-form.php");
                break;
                
            case 'dangkytaikhoan':
                if(isset($_POST['btn_dangky']) && $_POST['btn_dangky']){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordRepeat = $_POST['password_a'];
                    if ($password == $passwordRepeat) {                       
                        insert_taikhoan_nguoidung($username,$password);
                        $thongbao= 'Đăng ký thành công. Vui lòng đăng nhập';
                    }else{
                        $thongbao='<span class="required">*Mật khẩu không giống nhau vui lòng đăng ký lại</span>';
                    }
                }
                include ("view/login-register-form.php");
                break;


            case 'dangnhaptaikhoan':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if((is_array($checkuser))){
                        $_SESSION['user']=$checkuser;
                        extract($_SESSION['user']);
                        if($decen == 1){
                            echo '<meta http-equiv="refresh" content="0;url=../DoAnCoSo2/admin/">';
                        }else{
                            echo '<meta http-equiv="refresh" content="0;url=index.php">';
                        }
                                
                    }
                    else{
                        $thongbao1= 'Tài khoản or mật khẩu sai.';
                    }
                }
                include ("view/login-register-form.php");
                break;

            

            case 'dangxuat':
                session_unset();
                // header('Location: index.php');
                echo '<meta http-equiv="refresh" content="0;url=index.php">';
                break;
                
            case 'taikhoancuatoi':
                if(isset($_SESSION['user']) && ($_SESSION['user'])){
                    $listbill=load_bill($_SESSION['user']['idUser']);
                    include ("view/my-account.php");
                }else{
                    echo '<script>
                            alert("Lỗi");
                        </script>';
                }
                break;

            case 'updatetaikhoan':
                if(isset($_POST['update']) && ($_POST['update'])){
                        $iduser=$_POST['iduser'];
                        $tenuser=$_POST['tenuser'];
                        $emailuser=$_POST['emailuser'];
                        $teluser=$_POST['teluser'];
                        $addressuser=$_POST['addressuser'];
                        update_taikhoan($iduser,$tenuser,$emailuser,$teluser,$addressuser);

                        session_unset();
                        echo '<meta http-equiv="refresh" content="0;url=index.php">';
                }
                break;


            //Lỗi     
            // case 'updatetaikhoan2':
            //     if(isset($_POST['update2']) && ($_POST['update2'])){
            //             $iduser=$_POST['$iduser'];
            //             $accountuser=$_POST['accountuser'];
            //             $old_pass=$_POST['old_pass'];
            //             $new_pass=$_POST['new_pass'];
            //             $new_pass2=$_POST['new_pass2'];
            //             $checkuser=checkuser($accountuser,$old_pass);
            //             if((is_array($checkuser))){
            //                 if( $new_pass===$new_pass2 ){
            //                     update_pass($new_pass,$iduser);
                                
            //                     echo '<script>
            //                             alert("Đổi mật khẩu thành công");
            //                         </script>';
            //                 }else{
                
            //                     echo '<script>
            //                             alert("Mật khẩu mới không trùng nhau");
            //                         </script>';
            //                 }            
            //             }
            //             else{
            //                 echo '<script>
            //                             alert("Mật khẩu sai");
            //                         </script>';
            //             }   
            //     }
            //     include ("view/my-account.php");
            //     break; 

            //Giohang

            case 'viewcart':
                include ("view/my-cart.php");
                break;

            case 'delcart':
                if(isset($_GET['ind'])&&(($_GET['ind'])>=0)){
                    array_splice($_SESSION['giohang'], $_GET['ind'], 1);
                    echo '<script>window.location.href = "index.php?pg=viewcart";</script>';
                }
                
                break;
                
            // case 'update_cart':
            //     if(isset($_POST['quantity'])){
            //         $newQuantity = $_POST['quantity'];        
            //         $_SESSION['giohang'][$index]['soluong'] = $newQuantity;
            //         $newPrice = $_SESSION['giohang'][$index]['gia'] * $newQuantity;
            //         $newTotal = calculateTotal(); 
            //         echo json_encode(['newPrice' => $newPrice, 'newTotal' => $newTotal]);
            //     }
            //     break;

            case 'addcart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $idsp=$_POST['idsp'];
                    $tensp=$_POST['tensp'];
                    $img=$_POST['img'];
                    $soluong=$_POST['soluong'];
                    $gia=$_POST['gia'];
                    $index = -1; 
                    if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
                        foreach($_SESSION['giohang'] as $key => $sp){
                            if($sp['idsp'] == $idsp){
                                $index = $key;
                                break;
                            }
                        }
                    }

                    if($index != -1){
                        $_SESSION['giohang'][$index]['soluong'] += $soluong;
                    } else {
                        $sp = ["idsp" => $idsp, "img" => $img, "soluong" => $soluong, "gia" => $gia, "tensp" => $tensp];
                        $_SESSION['giohang'][] = $sp;
                    }
                    echo '<script>window.location.href = "index.php?pg=viewcart";</script>';
                }
                break;

            case 'bill':
                if(isset($_SESSION['user']) && ($_SESSION['user'])){
                    $allProductsAvailable=true;
                    foreach ($_SESSION['giohang'] as $item) {
                        extract($item);
                        $checksoluong=checksoluong($idsp);
                        $soluong_kiemtra = $checksoluong[0]['soLuong'];
                        // var_dump($soluong_kiemtra);
                        // var_dump($soluong);
                        if($soluong_kiemtra<$soluong){
                            $allProductsAvailable=false;
                            break;
                        }
                    }
                    // var_dump($allProductsAvailable);
                    if($allProductsAvailable){
                        include ("view/bill.php"); 
                    }else{
                        echo '<script>
                            alert("Một số sản phẩm không có đủ số lượng trong kho. '.$soluong.'");
                        </script>';
                    echo '<script>window.location.href = "index.php?pg=viewcart";</script>';
                    }

                }else{
                    echo '<script>
                            alert("Vui lòng đăng nhập để thực hiện");
                        </script>';
                    echo '<script>window.location.href = "index.php?pg=login_register_form";</script>';
                }



                break;

            case 'billcomfirm':
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                    if(isset($_SESSION['user'])) {
                        $iduser = $_SESSION['user']['idUser'];
                    }else{
                        $iduser=0;
                    }
                    $tenuser=$_POST['tenuser'];
                    $emailuser=$_POST['emailuser'];
                    $teluser=$_POST['teluser'];
                    $addressuser=$_POST['addressuser'];
                    $ngaydathang=date('Y-m-d H:i:s');
                    $tongdonhang=$_POST['total'];
                    $pttt=$_POST['pttt'];
                    $trangthai='Đang chờ xử lí';

                    $idbill=insert_bill($iduser,$tenuser, $emailuser, $teluser, $addressuser, $ngaydathang,$tongdonhang,$pttt,$trangthai);

                    foreach ($_SESSION['giohang'] as $cart) {
                        extract($cart);
                        insert_cart($iduser, $idsp,$tensp,$img,$soluong,$gia,$idbill);
                        minus_product_quantity($soluong,$idsp);
                    }
                    $_SESSION['giohang']=[];

                    echo '<script>
                            alert("Đặt hàng thành công vui lòng chờ kiểm tra");
                        </script>';
                }
                echo '<meta http-equiv="refresh" content="0;url=index.php">';
                break;


            case 'bill_detail':
                if((isset($_GET['idbill']))&&($_GET['idbill']>0)){
                    $idbill=$_GET['idbill'];
                    $listcart=load_cart($idbill);
                }
                include ("view/bill-detail.php");
                break;

            // PET    

            case 'adopt':
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $tongsp=count_pet();

                if(!isset($_GET['page'])){
                    $page=1;
                }else{
                    $page=$_GET['page'];
                }
                $soluongsp=6;
                $listpet=loadall_list_pet($iddm,$page,$soluongsp);
                $hienthisotrang=hien_thi_so_trang_pet($tongsp,$soluongsp);
                $listdanhmuc=loadall_danhmucpet();
                // $listpet=loadall_pet("",$iddm);
                include ("view/adopt.php");
                break;

            case 'chitietpet':
                if((isset($_GET['idpet']))&&($_GET['idpet']>0)){
                    $id=$_GET['idpet'];
                    $pet=loadone_pet($id);
                    $tendanhmuc=load_ten_dmpet($pet['idDMP']);
                }
                include ("view/chitietpet.php");
                break;

            case 'nhannuoi':
                if(isset($_POST['nhannuoi']) && ($_POST['nhannuoi'])){
                    if(isset($_SESSION['user']) && ($_SESSION['user'])){
                        $idpet=$_POST['idpet'];
                        $iduser=$_POST['iduser'];
                        $ngaynn=date('Y-m-d H:i:s');
                        insert_nnpet($idpet,$iduser,$ngaynn);
                        echo '<script>
                            alert("Đã nhận thông tin vui lòng chờ.");
                        </script>';
                        echo '<meta http-equiv="refresh" content="0;url=index.php">';   
                    }else{
                        echo '<script>
                            alert("Vui lòng đăng nhập để nhận thông tin nhận nuôi");
                        </script>';
                        echo '<script>window.location.href = "index.php?pg=login_register_form";</script>';
                    }
                }
                echo '<meta http-equiv="refresh" content="0;url=index.php">';
                break;    

            //report    

            case 'report':
                include ("view/report.php");
                break;

            case 'sendrp':
                if(isset($_POST['sendreport']) && $_POST['sendreport']){
                    $ten=$_POST['name'];
                    $email=$_POST['email'];
                    $location=$_POST['location'];
                    $mesage=$_POST['message'];
                    $latitude=$_POST['latitude'];
                    $longitude=$_POST['longitude'];
                    $ngayrp=date("h:i:sa d/m/Y");                  
                    insert_rp($ten,$email,$mesage,$location,$latitude,$longitude,$ngayrp);
                    echo '<script>
                            alert("Report thành công vui lòng chờ mail");
                        </script>';
                        echo '<meta http-equiv="refresh" content="0;url=index.php">';
                    exit();
                }else{
                    echo 'Lỗi';
                }
                echo '<meta http-equiv="refresh" content="0;url=index.php">';
                break;    






            
            default:
                $listpet=loadall_pet_home();
                $listsanphamhome=loadall_sanpham_home();
                include ("view/slider.php");
                include ("view/home.php");
                break;
        }

    }
    else {
        $listpet=loadall_pet_home();
        $listsanphamhome=loadall_sanpham_home();
        include ("view/slider.php");
        include ("view/home.php");
    }


    

    
    include ("view/footer.php");
    

?>