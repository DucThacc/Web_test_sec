<div class="main-content">
    <h3 class="title-page">Sản phẩm</h3>
    <div class="d-flex justify-content-end">
        <form action="index.php?act=listsp" method="post" name="search_name" id="search_name">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $idDanhMuc . '">' . $tenDanhMuc . '</option>';
                }
                ?>
            </select>
            <input type="submit" value="Lọc" name="listok" class="btn btn-primary">
            <a href="index.php?act=addspform" class="btn btn-primary">Thêm sản phẩm</a>
        </form>

    </div>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>%KM</th>
                <th>Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $idSanPham;
                $xoasp = "index.php?act=xoasp&id=" . $idSanPham;
                $hinhpath = "../upload/sanpham/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = '<img src="' . $hinhpath . '" height="80">';
                } else {
                    $hinh = 'Không tồn tại ảnh';
                }

                echo '<tr>
                                        <td>' . $tenSanPham . '</td>
                                        <td>' . $hinh . '</td>
                                        <td>' . $soLuong . '</td>
                                        <td>' . $gia . '</td>
                                        <td>' . $giaKM . '</td>
                                        <td>
                                            <a href="' . $suasp . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                            <a href="' . $xoasp . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
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
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>%KM</th>
                <th>Tùy chọn</th>
            </tr>
        </tfoot>
    </table>


    <ul class="pagination justify-content-center">
        <!-- <li class="page-item"><a class="page-link" href="#">Trước</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="index.php?act=listsp&page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="index.php?act=listsp&page=2">2</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="#">Sau</a></li> -->

        <?php 
            echo $hienthisotrang;


        ?>
    </ul>



</div>



</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>

