<?php 

function insert_taikhoan($tenuser,$accountuser,$passuser,$mailuser,$teluser,$addressuser){
    $sql="INSERT INTO tbl_user(tenUser,accountUser,passUser,emailUser,addressUser,telUser ) values ('$tenuser','$accountuser','$passuser','$mailuser','$addressuser','$teluser') ";
    pdo_execute($sql);
}

function insert_taikhoan_nguoidung($accountuser,$passuser){
    $sql="INSERT INTO tbl_user(accountUser,passUser) values ('$accountuser','$passuser') ";
    pdo_execute($sql);
}


function checkuser($user,$pass){
    $sql="SELECT * FROM tbl_user WHERE accountUser='".$user."' AND passUser='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function deleted_user($id){
    $sql="DELETE FROM tbl_user WHERE idUser=".$id;
    pdo_execute($sql);
}

function selectUser($iduser){
    $sql="SELECT * FROM tbl_user WHERE idUser='".$iduser."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function checkemail($email){
    $sql="SELECT * FROM tbl_user WHERE email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($iduser,$tenuser,$emailuser,$teluser,$addressuser){
    $sql="UPDATE tbl_user SET tenUser='".$tenuser."',emailUser='".$emailuser."',telUser='".$teluser."',addressUser='".$addressuser."'  WHERE idUser=".$iduser;
    pdo_execute($sql);
}

function update_taikhoan_admin($iduser,$tenuser,$accountuser,$passuser,$emailuser,$teluser,$addressuser){
    $sql="UPDATE tbl_user SET tenUser='".$tenuser."',emailUser='".$emailuser."',telUser='".$teluser."',addressUser='".$addressuser."',accountUser='".$accountuser."',passUser='".$passuser."'  WHERE idUser=".$iduser;
    pdo_execute($sql);
}

function update_pass($new_pass,$iduser){
    $sql="UPDATE tbl_user SET  passUser='".$new_pass."' WHERE idUser=".$iduser;
    pdo_execute($sql);
}

function loadall_taikhoan($kyw){
    $sql="SELECT * FROM tbl_user WHERE 1";
    if($kyw!=""){
        $sql.=" and tenUser like '%".$kyw."%'";
    }
    $sql.=" ORDER BY idUser DESC";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function loadall_taikhoan_home(){
    $sql="SELECT * FROM tbl_user WHERE 1 ORDER BY idUser DESC LIMIT 0,5";
    $listtk=pdo_query($sql);
    return $listtk;
}

function count_thanhvien(){
    $sql = "SELECT COUNT(*) as total FROM tbl_user";
    $tongtv = pdo_query_one($sql);
    
    if ($tongtv) {
        return $tongtv['total'];
    } else {
        return 0;
    }
}

?>