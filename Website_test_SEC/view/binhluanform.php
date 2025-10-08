<?php 

    session_start();
    include"../model/pdo.php";
    include"../model/binhluan.php";

    $idpro=$_REQUEST['idpro'];

    $dsbl = loadall_binhluan($idpro);
    

?>

<?php 
    if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
        if(isset($_SESSION['user']) && ($_SESSION['user'])){
            $noidung=$_POST['noidung'];
            $iduser=$_SESSION['user']['idUser'];
            $idpro=$_POST['idpro'];
            $ngaybinhluan=date("h:i:sa d/m/Y");
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }else{
            echo '<script>
                    alert("Vui lòng đăng nhập để bình luận");
                </script>';
        }
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            
                            
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Bình Luận</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4 binhluan">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                    <div class="review-page-comment">
                                        <h2>Trải nghiệm sản phẩm của người dùng</h2>
                                        <div class="review-form-wrapper">
                                            <div class="review-form">

                                                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                                    <div class="input-element">
                                                        <div class="comment-form-comment">
                                                            <label><strong>Nhập bình luận</strong></label>
                                                            <textarea required name="noidung" cols="40" rows="8"></textarea>
                                                        </div>
                                                        <div class="comment-submit">
                                                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                                                            <input type="submit" name="guibinhluan" class="form-button" value="Bình luận"></input>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                        <ul>
                                        <?php 
                                        
                                            // echo 'Nội dung bình luận'.$idpro;
                                            foreach ($dsbl as $bl) {
                                                extract($bl);
                                                $tenuser=loadtenUser($idUser);
                                                echo '
                                                        <li>
                                                            <div class="product-comment">
                                                                <div class="product-comment-content">
                                                                    <p class="meta">
                                                                        <strong>'.$tenuser['tenUser'].'</strong> - <span>'.$ngayBinhLuan.'</span>
                                                                    <div class="description">
                                                                        <p>'.$content.'</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    ';
                                            }
                                        
                                        ?>
                                        </ul>

                                        <!-- <ul>
                                            <li>
                                                <div class="product-comment">
                                                    <div class="product-comment-content">
                                                        <p class="meta">
                                                            <strong>Tên người bình luận</strong> - <span>Ngày bình luận</span>
                                                        <div class="description">
                                                            <p>Nội dung bình luận</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> -->

                                        
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>