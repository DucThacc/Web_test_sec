<?php 

function insert_danhmuc($tendanhmuc){
    $sql="INSERT INTO tbl_danhmuc_sp(tenDanhMuc) values ('$tendanhmuc') ";
    pdo_execute($sql);
}

function deleted_danhmuc($id){
    $sql="DELETE FROM tbl_danhmuc_sp WHERE idDanhMuc=".$id;
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql="SELECT * FROM tbl_danhmuc_sp ORDER BY idDanhMuc DESC";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id){
    $sql="SELECT * FROM tbl_danhmuc_sp WHERE idDanhMuc=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($tenloai,$id){
    $sql="UPDATE tbl_danhmuc_sp SET tenDanhMuc='".$tenloai."' WHERE idDanhMuc=".$id;
    pdo_execute($sql);
}

function count_danhmuc(){
    $sql = "SELECT COUNT(*) as total FROM tbl_danhmuc_sp";
    $tongdm = pdo_query_one($sql);
    
    if ($tongdm) {
        return $tongdm['total'];
    } else {
        return 0;
    }
}

function loadall_danhmuc_giatien($giatien){
    if($giatien==1){
        $sql="SELECT * FROM tbl_danhsach_sp WHERE gia >= 0 AND gia < 100;";
    }elseif ($giatien==2){
        $sql="SELECT * FROM tbl_danhsach_sp WHERE gia >= 100";
    }
    $listgiatien=pdo_query_one($sql);
    return $listgiatien;
}


?>