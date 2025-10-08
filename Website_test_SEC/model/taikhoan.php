<?php 

function insert_taikhoan($tenuser,$accountuser,$passuser,$mailuser,$teluser,$addressuser){
    $sql="INSERT INTO tbl_user(tenUser,accountUser,passUser,emailUser,addressUser,telUser,decen) values (?,?,?,?,?, ?,0) ";
    pdo_execute($sql, $tenuser, $accountuser, $passuser, $mailuser, $addressuser, $teluser);
}

function insert_taikhoan_nguoidung($accountuser,$passuser){
    $sql="INSERT INTO tbl_user(tenUser,accountUser,passUser,emailUser,addressUser,telUser,decen) values (?,?,?, '', '', '', 0) ";
    pdo_execute($sql, $accountuser, $accountuser, $passuser);
}


function checkuser($user,$pass){
    $sql="SELECT * FROM tbl_user WHERE accountUser = ? AND passUser = ?";
    $sp=pdo_query_one($sql, $user, $pass);
    return $sp;
}

function deleted_user($id){
    $sql="DELETE FROM tbl_user WHERE idUser = ?";
    pdo_execute($sql, $id);
}

function selectUser($iduser){
    $sql="SELECT * FROM tbl_user WHERE idUser = ?";
    $sp=pdo_query_one($sql, $iduser);
    return $sp;
}

function checkemail($email){
    $sql="SELECT * FROM tbl_user WHERE email = ?";
    $sp=pdo_query_one($sql, $email);
    return $sp;
}

function update_taikhoan($iduser,$tenuser,$emailuser,$teluser,$addressuser){
    $sql="UPDATE tbl_user SET tenUser = ?, emailUser = ?, telUser = ?, addressUser = ? WHERE idUser = ?";
    pdo_execute($sql, $tenuser, $emailuser, $teluser, $addressuser, $iduser);
}

function update_taikhoan_admin($iduser,$tenuser,$accountuser,$passuser,$emailuser,$teluser,$addressuser){
    $sql="UPDATE tbl_user SET tenUser = ?, emailUser = ?, telUser = ?, addressUser = ?, accountUser = ?, passUser = ? WHERE idUser = ?";
    pdo_execute($sql, $tenuser, $emailuser, $teluser, $addressuser, $accountuser, $passuser, $iduser);
}

function update_pass($new_pass,$iduser){
    $sql="UPDATE tbl_user SET  passUser = ? WHERE idUser = ?";
    pdo_execute($sql, $new_pass, $iduser);
}

function account_exists($accountuser){
    $sql="SELECT 1 FROM tbl_user WHERE accountUser = ? LIMIT 1";
    $sp=pdo_query_one($sql, $accountuser);
    return $sp ? true : false;
}

function loadall_taikhoan($kyw){
    $sql="SELECT * FROM tbl_user WHERE 1";
    if($kyw!=""){
        $sql.=" and tenUser like ?";
    }
    $sql.=" ORDER BY idUser DESC";
    if($kyw!=""){
        $listtaikhoan=pdo_query($sql, "%".$kyw."%");
    } else {
        $listtaikhoan=pdo_query($sql);
    }
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