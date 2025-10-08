<?php 

function insert_danhmucpet($tendanhmucpet){
    $sql="INSERT INTO tbl_danhmuc_pet(tenDanhMucPet) values ('$tendanhmucpet') ";
    pdo_execute($sql);
}

function deleted_danhmucpet($id){
    $sql="DELETE FROM tbl_danhmuc_pet WHERE idDanhMucPet=".$id;
    pdo_execute($sql);
}

function loadall_danhmucpet(){
    $sql="SELECT * FROM tbl_danhmuc_pet ORDER BY idDanhMucPet DESC";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmucpet($id){
    $sql="SELECT * FROM tbl_danhmuc_pet WHERE idDanhMucPet=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_danhmucpet($tenloai,$id){
    $sql="UPDATE tbl_danhmuc_pet SET tenDanhMucPet='".$tenloai."' WHERE idDanhMucPet=".$id;
    pdo_execute($sql);
}


?>