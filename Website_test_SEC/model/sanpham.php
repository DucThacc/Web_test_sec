<?php 

function insert_sanpham($tensp,$giasp,$giakm,$iddm,$soluong,$tinhtrang,$hinh,$motangan,$motachitiet){
    $sql="INSERT INTO tbl_danhsach_sp(tenSanPham,gia,giaKM,soLuong,mota,img,tinhTrang,motaNgan,idDM) 
    values ('$tensp','$giasp','$giakm','$soluong','$motachitiet','$hinh','$tinhtrang','$motangan','$iddm') ";
    pdo_execute($sql);
}

function deleted_sanpham($id){
    $sql="DELETE FROM tbl_danhsach_sp WHERE idSanPham=".$id;
    pdo_execute($sql);
}

function loadall_sanpham($kyw,$iddm){
    $sql="SELECT * FROM tbl_danhsach_sp WHERE 1";
    if($kyw!=""){
        $sql.=" and tenSanPham like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and idDM like '%".$iddm."%'";
    }
    $sql.=" ORDER BY idSanPham DESC";
    $listsanpham=pdo_query($sql);
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_list_sanpham($kyw,$iddm,$page,$soluongsp){

    // if(($page='')||($page=0)) $page=1;
    $batdau=($page-1)*$soluongsp;
    $sql="SELECT * FROM tbl_danhsach_sp WHERE 1";
    if($kyw!=""){
        $sql.=" and tenSanPham like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and idDM like '%".$iddm."%'";
    }
    $sql.=" ORDER BY idSanPham DESC Limit ".$batdau.",".$soluongsp ;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm){
    if($iddm>0){
        $sql="SELECT tenDanhMuc FROM tbl_danhmuc_sp WHERE idDanhMuc=".$iddm;
        $dm=pdo_query_one($sql);
        return $dm;
    }else{
        return "";
    }    
}

function hien_thi_so_trang_admin($tongsp,$soluongsp){
    $sotrang=ceil($tongsp/$soluongsp);
    $html_sotrang="";
    for ($i=1; $i <=$sotrang ; $i++) { 
        $html_sotrang.='<li class="page-item"><a class="page-link" href="index.php?act=listsp&page='.$i.'">'.$i.'</a></li>';
    }
    return $html_sotrang;
}

function hien_thi_so_trang($tongsp,$soluongsp){
    $sotrang=ceil($tongsp/$soluongsp);
    $html_sotrang="";
    for ($i=1; $i <=$sotrang ; $i++) { 
        $html_sotrang.='<li><a href="index.php?pg=product&page='.$i.'">'.$i.'</a></li>';
    }
    return $html_sotrang;
}

function loadall_sanpham_home(){
    $sql="SELECT * FROM tbl_danhsach_sp WHERE giaKM > 0 ORDER BY idSanPham DESC LIMIT 0,12";
    $listsanphamhome=pdo_query($sql);
    return $listsanphamhome;
}

function loadall_sanpham_top10(){
    $sql="SELECT * FROM tbl_danhsach_sp WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id){
    $sql="SELECT * FROM tbl_danhsach_sp WHERE idSanPham=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id,$tensp,$giasp,$giakm,$iddm,$soluong,$tinhtrang,$hinh,$motangan,$motachitiet){
    if($hinh==""){
        $sql="UPDATE tbl_danhsach_sp SET tenSanPham='".$tensp."',gia='".$giasp."',giaKM='".$giakm."',moTaNgan='".$motangan."',soLuong='".$soluong."',mota='".$motachitiet."',tinhTrang='".$tinhtrang."',idDM='".$iddm."' WHERE idSanPham=".$id;
    }
    else{
        $sql="UPDATE tbl_danhsach_sp SET tenSanPham='".$tensp."',img='".$hinh."',gia='".$giasp."',giaKM='".$giakm."',moTaNgan='".$motangan."',soLuong='".$soluong."',mota='".$motachitiet."',tinhTrang='".$tinhtrang."',idDM='".$iddm."' WHERE idSanPham=".$id;
    }
    pdo_execute($sql);
}

function load_sanpham_cungloai($id,$iddm){
    $sql="SELECT * FROM tbl_danhsach_sp WHERE idDM=".$iddm." AND idSanPham <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_danhmuc($iddm){
    $sql="SELECT * FROM tbl_danhsach_sp WHERE idDM=".$iddm;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function count_sanpham($kyw,$iddm){
    $sql = "SELECT COUNT(*) as total FROM tbl_danhsach_sp WHERE 1";
    if ($kyw !== "") {
        $sql .= " AND tenSanPham LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND idDM LIKE '%" . $iddm . "%'";
    }
    $tongsp = pdo_query_one($sql);
    if ($tongsp) {
        return $tongsp['total'];
    } else {
        return 0;
    }
}

function checksoluong($id){
    $sql="SELECT soLuong FROM tbl_danhsach_sp WHERE idSanPham=".$id;
    $soluong=pdo_query($sql);
    return $soluong;
}



?>