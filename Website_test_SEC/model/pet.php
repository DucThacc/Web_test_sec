<?php 

function insert_pet($tenpet,$iddmpet,$gioitinh,$dotuoi,$trietsan,$tiemphong,$tinhtrang,$motapet,$hinh){
    $sql="INSERT INTO tbl_pet(tenPet,idDMP,gioiTinh,doTuoi,trietSan,tiemPhong,tinhTrangPet,imgpet,motaPet) 
    values ('$tenpet','$iddmpet','$gioitinh','$dotuoi','$trietsan','$tiemphong','$tinhtrang','$hinh','$motapet') ";
    pdo_execute($sql);
}

function insert_nnpet($idpet,$iduser,$ngaynn){
    $sql="INSERT INTO tbl_nhannuoi(idPet,idUser,ngaynhan) 
    values ('$idpet','$iduser','$ngaynn') ";
    pdo_execute($sql);
}

function deleted_pet($id){
    $sql="DELETE FROM tbl_pet WHERE idPet=".$id;
    pdo_execute($sql);
}

function loadall_pet($kyw,$iddm){
    $sql="SELECT * FROM tbl_pet WHERE 1";
    if($kyw!=""){
        $sql.=" and tenPet like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and idDMP like '%".$iddm."%'";
    }
    $sql.=" ORDER BY idPet DESC";
    $listpet=pdo_query($sql);
    return $listpet;
}

function loadall_adopt(){
    $sql="SELECT * FROM tbl_nhannuoi  ORDER BY idNN DESC";
    $listpet=pdo_query($sql);
    return $listpet;
}

function selectPet($idpet){
    $sql="SELECT * FROM tbl_pet WHERE idPet='".$idpet."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function loadall_list_pet($iddm,$page,$soluongsp){

    // if(($page='')||($page=0)) $page=1;
    $batdau=($page-1)*$soluongsp;
    $sql="SELECT * FROM tbl_pet WHERE 1";
    if($iddm>0){
        $sql.=" and idDMP like '%".$iddm."%'";
    }
    $sql.=" ORDER BY idPet DESC Limit ".$batdau.",".$soluongsp ;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function hien_thi_so_trang_pet($tongsp,$soluongsp){
    $sotrang=ceil($tongsp/$soluongsp);
    $html_sotrang="";
    for ($i=1; $i <=$sotrang ; $i++) { 
        $html_sotrang.='<li><a href="index.php?pg=adopt&page='.$i.'">'.$i.'</a></li>';
    }
    return $html_sotrang;
}

function load_ten_dmpet($iddm){
    if($iddm>0){
        $sql="SELECT * FROM tbl_danhmuc_pet WHERE idDanhMucPet=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm); 
        return $dm;
    }else{
        return "";
    }    
}

function loadall_pet_home(){
    $sql="SELECT * FROM tbl_pet WHERE 1 ORDER BY idPet DESC LIMIT 0,12";
    $listpet=pdo_query($sql);
    return $listpet;
}

// function loadall_sanpham_top10(){
//     $sql="SELECT * FROM tbl_pet WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
//     $listsanpham=pdo_query($sql);
//     return $listsanpham;
// }

function loadone_pet($id){
    $sql="SELECT * FROM tbl_pet WHERE idPet=".$id;
    $pet=pdo_query_one($sql);
    return $pet;
}


function update_pet($idpet,$tenpet,$iddmpet,$gioitinh,$dotuoi,$trietsan,$tiemphong,$tinhtrang,$hinh,$motapet){
    if($hinh==""){
        $sql="UPDATE tbl_pet SET tenPet='".$tenpet."',idDMP='".$iddmpet."',gioiTinh='".$gioitinh."',doTuoi='".$dotuoi."',trietSan='".$trietsan."',tinhTrangPet='".$tinhtrang."',motaPet='".$motapet."',tiemPhong='".$tiemphong."' WHERE idPet=".$idpet;
    }
    else{
        $sql="UPDATE tbl_pet SET tenPet='".$tenpet."',idDMP='".$iddmpet."',gioiTinh='".$gioitinh."',doTuoi='".$dotuoi."',trietSan='".$trietsan."',tinhTrangPet='".$tinhtrang."',motaPet='".$motapet."', imgpet='".$hinh."',tiemPhong='".$tiemphong."' WHERE idPet=".$idpet;
    }
    pdo_execute($sql);
}

function load_pet_cungloai($id,$iddm){
    $sql="SELECT * FROM tbl_pet WHERE idDMP=".$iddm." AND id <> ".$id;
    $listpet=pdo_query($sql);
    return $listpet;
}

function load_pet_danhmuc($iddm){
    $sql="SELECT * FROM tbl_pet WHERE idDMP=".$iddm;
    $listpet=pdo_query($sql);
    return $listpet;
}

function count_pet(){
    $sql = "SELECT COUNT(*) as total FROM tbl_pet";
    $tongpet = pdo_query_one($sql);
    
    if ($tongpet) {
        return $tongpet['total'];
    } else {
        return 0;
    }
}


?>