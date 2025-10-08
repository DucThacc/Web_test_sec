<?php

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/pet.php";
include "../model/danhmucpet.php";
include "../model/cart.php";
include "../model/binhluan.php";

include("header.php");

// if (isset($_SESSION['user']) && ($_SESSION['user'])) {
//     extract($_SESSION['user']);
//     if ($decen != 0 ) {
        if (isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                    /* Controller cho danh mục */
                case 'adddm':
                    if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                        $tendanhmuc = $_POST['tendanhmuc'];
                        insert_danhmuc($tendanhmuc);
                        $thongbao = "Thêm thành công Danh mục mới";
                    }

                    include "../admin/view/danhmuc/add.php";
                    break;

                case 'adddmform':
                    include "../admin/view/danhmuc/add.php";
                    break;

                case 'listdm':
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/danhmuc/list.php";
                    break;

                case 'xoadm':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        deleted_danhmuc($_GET['id']);
                    };
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/danhmuc/list.php";
                    break;

                case 'suadm':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        $dm = loadone_danhmuc($_GET['id']);
                    }
                    include "../admin/view/danhmuc/update.php";
                    break;

                case 'updatedm':
                    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                        $tenloai = $_POST['tendanhmuc'];
                        $id = $_POST['id'];
                        update_danhmuc($tenloai, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/danhmuc/list.php";
                    break;

                case 'dsspdm':
                    if ((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                        $listsanpham = load_sanpham_danhmuc($_GET['iddm']);
                    };
                    include "../admin/view/sanpham/list.php";
                    break;


                    /* Controller cho sản phẩm */

                case 'addsp':
                    if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $giakm = $_POST['giakm'];
                        $iddm = $_POST['iddm'];
                        $soluong = $_POST['soluong'];
                        $tinhtrang = $_POST['tinhtrang'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/sanpham/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        $motangan = $_POST['motangan'];
                        $motachitiet = $_POST['motachitiet'];
                        insert_sanpham($tensp, $giasp, $giakm, $iddm, $soluong, $tinhtrang, $hinh, $motangan, $motachitiet);
                        $thongbao = "Thêm thành công sản phẩm mới";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/sanpham/add.php";
                    break;

                case 'addspform':
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/sanpham/add.php";
                    break;

                case 'listsp':
                    if (isset($_POST['listok']) && $_POST['listok']) {
                        $kyw = $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    } else {
                        $kyw = '';
                        $iddm = 0;
                    }
                    $tongsp = count_sanpham($kyw, $iddm);

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $soluongsp = 6;
                    $listsanpham = loadall_list_sanpham($kyw, $iddm, $page, $soluongsp);
                    $hienthisotrang = hien_thi_so_trang_admin($tongsp, $soluongsp);
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/sanpham/list.php";
                    break;

                case 'xoasp':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        deleted_sanpham($_GET['id']);
                    };
                    $listsanpham = loadall_sanpham("", 0);
                    include "../admin/view/sanpham/list.php";
                    break;

                case 'suasp':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "../admin/view/sanpham/update.php";
                    break;

                case 'updatesp':
                    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                        $id = $_POST['idsp'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $giakm = $_POST['giakm'];
                        $iddm = $_POST['iddm'];
                        $soluong = $_POST['soluong'];
                        $tinhtrang = $_POST['tinhtrang'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/sanpham/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        $motangan = $_POST['motangan'];
                        $motachitiet = $_POST['motachitiet'];
                        update_sanpham($id, $tensp, $giasp, $giakm, $iddm, $soluong, $tinhtrang, $hinh, $motangan, $motachitiet);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham("", 0);
                    include "../admin/view/sanpham/list.php";
                    break;

                    /* Controller cho User */

                case 'listusers':
                    if (isset($_POST['listu']) && $_POST['listu']) {
                        $kyw = $_POST['kyw'];
                    } else {
                        $kyw = '';
                    }
                    $listtaikhoan = loadall_taikhoan($kyw);
                    include "../admin/view/taikhoan/users.php";
                    break;

                case 'adduserform':
                    include "../admin/view/taikhoan/useradd.php";
                    break;


                case 'adduser':
                    if (isset($_POST['themthanhvien']) && $_POST['themthanhvien']) {
                        $tenuser = $_POST['tenuser'];
                        $accountuser = $_POST['accountuser'];
                        $passuser = $_POST['passuser'];
                        $mailuser = $_POST['mailuser'];
                        $teluser = $_POST['teluser'];
                        $addressuser = $_POST['addressuser'];
                        insert_taikhoan($tenuser, $accountuser, $passuser, $mailuser, $teluser, $addressuser);
                        $thongbao = "Thêm thành công thành viên mới";
                    }
                    include "../admin/view/taikhoan/useradd.php";
                    break;

                case 'xoauser':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        deleted_user($_GET['id']);
                    };
                    $listtaikhoan = loadall_taikhoan("");
                    include "../admin/view/taikhoan/users.php";
                    break;

                case 'suauserform':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        $user = selectUser($_GET['id']);
                    }
                    include "../admin/view/taikhoan/userupdate.php";
                    break;

                case 'suauser':
                    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                        $iduser = $_POST['iduser'];
                        $tenuser = $_POST['tenuser'];
                        $accountuser = $_POST['accountuser'];
                        $passuser = $_POST['passuser'];
                        $mailuser = $_POST['mailuser'];
                        $addressuser = $_POST['addressuser'];
                        $teluser = $_POST['teluser'];
                        update_taikhoan_admin($iduser,$tenuser,$accountuser,$passuser,$mailuser,$teluser,$addressuser);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listtaikhoan = loadall_taikhoan("");
                    include "../admin/view/taikhoan/users.php";
                    break;

                    /* Controller cho danh mục Pet */

                case 'listdmpet':
                    $listdanhmucpet = loadall_danhmucpet();
                    include "../admin/view/danhmucpet/list.php";
                    break;

                case 'adddmpetform':
                    include "../admin/view/danhmucpet/add.php";
                    break;

                case 'adddmpet':
                    if (isset($_POST['themmoipet']) && $_POST['themmoipet']) {
                        $tendanhmucpet = $_POST['tendanhmucpet'];
                        insert_danhmucpet($tendanhmucpet);
                        $thongbao = "Thêm thành công Danh mục thú cưng mới";
                    }
                    include "../admin/view/danhmucpet/add.php";
                    break;

                case 'suadmpet':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        $dm = loadone_danhmucpet($_GET['id']);
                    }
                    include "../admin/view/danhmucpet/update.php";
                    break;

                case 'updatedmpet':
                    if (isset($_POST['capnhatdm']) && $_POST['capnhatdm']) {
                        $tenloai = $_POST['tendanhmucpet'];
                        $id = $_POST['id'];
                        update_danhmucpet($tenloai, $id);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmucpet = loadall_danhmucpet();
                    include "../admin/view/danhmucpet/list.php";
                    break;

                case 'xoadmpet':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        deleted_danhmucpet($_GET['id']);
                    };
                    $listdanhmucpet = loadall_danhmucpet();
                    include "../admin/view/danhmucpet/list.php";
                    break;

                    /* Chưa làm pet theo danh mục */

                    /* Controller cho thú cưng */

                case 'addpet':
                    if (isset($_POST['themmoipet']) && $_POST['themmoipet']) {
                        $tenpet = $_POST['tenpet'];
                        $iddmpet = $_POST['iddmpet'];
                        $gioitinh = $_POST['gioitinh'];
                        $dotuoi = $_POST['dotuoi'];
                        $trietsan = $_POST['trietsan'];
                        $tiemphong = $_POST['tiemphong'];
                        $tinhtrang = $_POST['tinhtrang'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/thucung/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        $motapet = $_POST['motapet'];
                        insert_pet($tenpet, $iddmpet, $gioitinh, $dotuoi, $trietsan, $tiemphong, $tinhtrang, $motapet, $hinh);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc = loadall_danhmucpet();
                    include "../admin/view/pet/add.php";
                    break;

                case 'addpetform':
                    $listdanhmuc = loadall_danhmucpet();
                    include "../admin/view/pet/add.php";
                    break;

                case 'listpet':
                    if (isset($_POST['listokpet']) && $_POST['listokpet']) {
                        $kyw = $_POST['kyw'];
                        $iddmpet = $_POST['iddmpet'];
                    } else {
                        $kyw = '';
                        $iddmpet = 0;
                    }
                    $listdanhmuc = loadall_danhmucpet();
                    $listpet = loadall_pet($kyw, $iddmpet);
                    include "../admin/view/pet/list.php";
                    break;

                case 'xoapet':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        deleted_pet($_GET['id']);
                    };
                    $listsanpham = loadall_sanpham("", 0);
                    include "../admin/view/pet/list.php";
                    break;

                case 'suapet':
                    if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                        $pet = loadone_pet($_GET['id']);
                    }
                    $listdanhmucpet = loadall_danhmucpet();
                    include "../admin/view/pet/update.php";
                    break;

                case 'updatepet':
                    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                        $idpet = $_POST['idpet'];
                        $tenpet = $_POST['tenpet'];
                        $iddmpet = $_POST['iddmpet'];
                        $gioitinh = $_POST['gioitinh'];
                        $dotuoi = $_POST['dotuoi'];
                        $trietsan = $_POST['trietsan'];
                        $tiemphong = $_POST['tiemphong'];
                        $tinhtrang = $_POST['tinhtrang'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/thucung/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        $motapet = $_POST['motapet'];
                        update_pet($idpet, $tenpet, $iddmpet, $gioitinh, $dotuoi, $trietsan, $tiemphong, $tinhtrang, $hinh, $motapet);
                    }
                    $listdanhmucpet = loadall_danhmucpet();
                    $listpet = loadall_pet("", 0);
                    include "../admin/view/pet/list.php";
                    break;

                    //Bill
                case 'listbill':
                    $listbill = loadall_bill();
                    include "../admin/view/bill/bills.php";
                    break;

                case 'billdetail':
                    if ((isset($_GET['idbill'])) && ($_GET['idbill'] > 0)) {
                        $cart = load_cart($_GET['idbill']);
                        $bill = loadone_bill($_GET['idbill']);
                        // var_dump($bill);
                        // print_r($bill);
                        if (is_array($bill) && isset($bill[0])) {
                            extract($bill[0]);
                            if ($bill_pttt == 'tttruoc') {
                                $bill_pt = 'Thanh toán trả trước';
                            } elseif ($bill_pttt == 'ttsau') {
                                $bill_pt = 'Thanh toán trả sau';
                            } else {
                                $bill_pt = 'Thanh toán trả góp';
                            }
                            // var_dump($bill_status);
                        }
                    }
                    include "../admin/view/bill/billdetail.php";
                    break;

                case 'billupdate':
                    if (isset($_POST['editbill']) && $_POST['editbill']) {
                        $status = $_POST['status'];
                        $idbill = $_POST['idbill'];
                        update_bill($idbill, $status);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listbill = loadall_bill();
                    include "../admin/view/bill/bills.php";
                    break;


                case 'checkdh':
                    if (isset($_POST['xem']) && $_POST['xem']) {
                        $d1 = $_POST['d1'];
                        $d2 = $_POST['d2'];
                    } else {
                        $d1 = '';
                        $d2 = '';
                    }
                    $listbill = loadhome_bill($d1, $d2);
                    if (is_array($listbill) && isset($listbill)) {
                        $tong = 0;
                        foreach ($listbill as $bill) {
                            $tong = $tong + $bill['bill_total'];
                        }
                    }
                    if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                        $iddm = $_GET['iddm'];
                    } else {
                        $iddm = 0;
                    }
                    if (isset($_GET['kyw']) && ($_GET['kyw'] != "")) {
                        $kyw = $_GET['kyw'];
                    } else {
                        $kyw = "";
                    }
                    $listbill1 = loadhome_bill1();
                    $tongdm = count_danhmuc();
                    $tongsp = count_sanpham($kyw, $iddm);
                    $tongtv = count_thanhvien();
                    $tongpet = count_pet();
                    $listtk = loadall_taikhoan_home();

                    include "home.php";
                    break;


                    //Nhận nuôi
                case 'adopt':
                    $listadopt = loadall_adopt();
                    if (is_array($listadopt) && isset($listadopt)) {
                        // extract($listadopt);
                        $loaduser = selectUser($listadopt[0]['idUser']);
                        // // extract($loaduser);
                        $loadpet = selectPet($listadopt[0]['idPet']);
                        // // extract($loadpet);
                        // var_dump($loadpet);
                        // var_dump($loaduser);
                        include "../admin/view/adopt/list.php";
                    }
                    break;

                case 'rescue':
                    $listrescue = loadall_rescue();
                    include "../admin/view/rescue/list.php";
                    break;

                case 'rescue_detail':
                    if ((isset($_GET['idrescue'])) && ($_GET['idrescue'] > 0)) {
                        $rp = loadone_report($_GET['idrescue']);
                        include "../admin/view/rescue/detail.php";
                    }
                    // var_dump($rp);

                    break;









                default:
                    $listbill = loadhome_bill("", "");
                    if (is_array($listbill) && isset($listbill)) {
                        $tong = 0;
                        foreach ($listbill as $bill) {
                            $tong = $tong + $bill['bill_total'];
                        }
                    }
                    if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                        $iddm = $_GET['iddm'];
                    } else {
                        $iddm = 0;
                    }
                    if (isset($_GET['kyw']) && ($_GET['kyw'] != "")) {
                        $kyw = $_GET['kyw'];
                    } else {
                        $kyw = "";
                    }
                    $listbill1 = loadhome_bill1();
                    $tongdm = count_danhmuc();
                    $tongsp = count_sanpham($kyw, $iddm);
                    $tongtv = count_thanhvien();
                    $tongpet = count_pet();
                    $listtk = loadall_taikhoan_home();

                    include "home.php";
                    break;
            }
        } else {
            $listbill = loadhome_bill("", "");
            if (is_array($listbill) && isset($listbill)) {
                $tong = 0;
                foreach ($listbill as $bill) {
                    $tong = $tong + $bill['bill_total'];
                }
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            if (isset($_GET['kyw']) && ($_GET['kyw'] != "")) {
                $kyw = $_GET['kyw'];
            } else {
                $kyw = "";
            }
            $listbill1 = loadhome_bill1();
            $tongdm = count_danhmuc();
            $tongsp = count_sanpham($kyw, $iddm);
            $tongtv = count_thanhvien();
            $tongpet = count_pet();
            $listtk = loadall_taikhoan_home();

            include "home.php";
        }
//     }
// } 

// else {
//     include "../admin/view/login/loginform.php";
// }


include "footer.php";
