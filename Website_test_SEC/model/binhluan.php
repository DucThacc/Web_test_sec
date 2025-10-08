<?php 

function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
    $sql = "INSERT INTO tbl_binhluan(content, idUser, idSP, ngayBinhLuan) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro){
    $sql="SELECT * FROM tbl_binhluan Where idSP = '".$idpro."' ORDER BY idBinhLuan DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}

function loadtenUser($iduser){
    $sql="SELECT tenUser FROM tbl_user Where idUser = ".$iduser;
    $dm=pdo_query_one($sql);
    return $dm;
}

function insert_rp($ten,$email,$location,$mesage,$latitude,$longitude,$ngayrp){
    $sql = "INSERT INTO tbl_report(name, mail, location, noidung, latitude, longitude, ngayRP) VALUES ('$ten', '$email', '$location', '$mesage', '$latitude', '$longitude', '$ngayrp')";
    pdo_execute($sql);
}

function loadall_rescue(){
    $sql="SELECT * FROM tbl_report  ORDER BY id_RP DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}

function loadone_report($id){
    $sql="SELECT * FROM tbl_report Where id_RP = '".$id."'";
    $listbl=pdo_query($sql);
    return $listbl;
}

?>