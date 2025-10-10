<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="view/assets/css/main.css">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <script src="ckeditor5-build-classic-40.0.0/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	
	<!-- <link rel="icon" type="image/png" href="../admin/view/assets/login_assets/images/icons/favicon.ico"/>

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/fonts/iconic/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/vendor/animate/animate.css">
	
        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/vendor/animsition/css/animsition.min.css">

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/vendor/select2/select2.min.css">
	
        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/vendor/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/css/login.css">
        <link rel="stylesheet" type="text/css" href="../admin/view/assets/login_assets/css/login2.css"> -->
    
    
    <title>Admin - Glasa</title>
</head>

<body>
    <div class="container-fluid main-page">

        <div class="app-main">
            <nav class="sidebar bg-primary">
                <ul>
                    <?php 
                        // if(isset($_SESSION['user']) && ($_SESSION['user'])){
                        //     extract($_SESSION['user']);
                        //     if($decen == 0){
                        //         echo '<li>
                        //                     <i class="fa-solid fa-house ico-side"></i>Bạn không có quyền truy cập
                        //                 </li>';
                        //     }elseif($decen !=0 ){
                                echo '
                                    <li>
                                        <a href="index.php"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
                                    </li>
                                    
                                    <li>
                                        <a href="index.php?act=listdm"><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh mục</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=listsp"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=listusers"><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=listdmpet"><i class="fa-solid fa-cat ico-side"></i>Quản lí danh mục pet</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=listpet"><i class="fa-solid fa-dog ico-side"></i>Quản lí pet</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=listbill"><i class="fa-solid fa-cart-shopping ico-side"></i>Danh sách đơn hàng</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=adopt"><i class="fa-solid fa-hand-holding-heart ico-side"></i>Nhận nuôi</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=rescue"><i class="fa-solid  fa-exclamation ico-side"></i>Thông báo cứu trợ</a>
                                    </li>
                                ';
                        //     }
                            
                        // }else{
                        //         echo '<li>
                        //                     <i class="fa-solid fa-house ico-side"></i>Bạn không có quyền truy cập
                        //                 </li>';
                        //     }
                        
                                
                            
                        
                    ?>
                    
                </ul>
            </nav>

            
            

