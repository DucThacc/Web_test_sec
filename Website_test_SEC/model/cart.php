<?php 

function insert_bill($iduser,$tenuser, $emailuser, $teluser, $addressuser, $ngaydathang,$tongdonhang,$pttt,$trangthai){
    $sql = "INSERT INTO tbl_bill(idUser,bill_name, bill_email, bill_address, bill_tel, bill_pttt, bill_day, bill_status, bill_total) VALUES ('$iduser','$tenuser', '$emailuser','$addressuser', '$teluser',  '$pttt', '$ngaydathang', '$trangthai','$tongdonhang' )";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idsp, $tensp, $img, $soluong,$gia,$idbill){
    $sql = "INSERT INTO tbl_cart(idUser, idSP, tenSP, img,soLuong, gia, id_bill) VALUES ('$iduser', '$idsp', '$tensp','$img', '$soluong', '$gia', '$idbill')";
    return pdo_execute($sql);
}

function minus_product_quantity($soluong,$idsp){
    $sql="UPDATE tbl_danhsach_sp SET soLuong=soLuong - '".$soluong."' WHERE idSanPham=".$idsp;
    pdo_execute($sql);
}

function load_bill($iduser){
    $sql="SELECT * FROM tbl_bill WHERE 1";
    if($iduser>0) $sql.=" AND idUser=".$iduser;
    // if($kyw!="") $sql.=" AND id LIKE '%".$kyw."%'";
    $sql.=" ORDER BY idBill DESC";
    $listbill=pdo_query($sql);
    return $listbill;
}

function load_cart($idbill){
    $sql="SELECT * FROM tbl_cart WHERE id_bill=".$idbill." ORDER BY idCart ASC";
    $listcart=pdo_query($sql);
    return $listcart;
}

function loadall_bill(){
    $sql="SELECT * FROM tbl_bill ORDER BY idBill DESC";
    $listcart=pdo_query($sql);
    return $listcart;
}

function loadone_bill($idbill){
    $sql="SELECT * FROM tbl_bill WHERE idBill=".$idbill;
    $listcart=pdo_query($sql);
    return $listcart;
}


function loadhome_bill($d1,$d2){
    if($d1!="" && $d2!=" "){
        $sql="SELECT * FROM tbl_bill WHERE bill_day BETWEEN '".$d1." 00:00:00' AND '".$d2." 00:00:00' ORDER BY idBill DESC";
        $listcart=pdo_query($sql);
    }else{
        $sql="SELECT * FROM tbl_bill ORDER BY idBill DESC LIMIT 0,10";
        $listcart=pdo_query($sql);
    }
    return $listcart;
}

function loadhome_bill1(){
    $sql="SELECT * FROM tbl_bill ORDER BY idBill DESC LIMIT 0,5";
    $listcart=pdo_query($sql);
    return $listcart;
}

function update_bill($id,$status){
    $sql="UPDATE tbl_bill SET bill_status='".$status."' WHERE idBill=".$id;
    pdo_execute($sql);
}

function calculateTotal(){
    $total = 0;
    foreach ($_SESSION['giohang'] as $item) {
        $total += $item['gia'] * $item['soluong'];
    }
    return $total;
}



?>