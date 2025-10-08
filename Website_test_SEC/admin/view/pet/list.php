<div class="main-content">
    <h3 class="title-page">Thú cưng</h3>
    <div class="d-flex justify-content-end">
                <form action="index.php?act=listpet" method="post">
                    <input type="text" name="kyw">
                    <select name="iddmpet">
                        <option value="0" selected>Tất cả</option>
                        <?php 
                            foreach ($listdanhmuc as $danhmucpet) {
                                extract($danhmucpet);
                                echo '<option value="'.$idDanhMucPet.'">'.$tenDanhMucPet.'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Lọc" name="listokpet" class="btn btn-primary">
                    <a href="index.php?act=addpetform" class="btn btn-primary">Thêm pet</a>
                </form>
        
    </div>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Tình trạng</th>
                <th>Độ tuổi</th>
                <th>Triệt sản</th>
                <th>Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
                    <?php 
                            foreach ($listpet as $pet) {
                                extract($pet);
                                $suapet="index.php?act=suapet&id=".$idPet;
                                $xoapet="index.php?act=xoapet&id=".$idPet;
                                $hinhpath="../upload/thucung/".$imgpet;
                                if(is_file($hinhpath)){
                                    $hinh='<img src="'.$hinhpath.'" height="80">';
                                }else{
                                    $hinh='Không tồn tại ảnh';
                                }

                                echo '<tr>
                                        <td>'.$tenPet.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$tinhTrangPet.'</td>
                                        <td>'.$doTuoi.'</td>
                                        <td>'.$trietSan.'</td>
                                        <td>
                                            <a href="'.$suapet.'" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                            <a href="'.$xoapet.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                                        </td>
                                    </tr>  ';
                            }
                        ?>
            <!-- <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>
                    <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                </td>
            </tr> -->
            
        </tbody>
        <tfoot>
            <tr>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Tình trạng</th>
                <th>Độ tuổi</th>
                <th>Triệt sản</th>
                <th>Tùy chọn</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>