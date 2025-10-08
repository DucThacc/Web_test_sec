<div class="main-content">
    <h3 class="title-page">Chi tiết đơn hàng</h3>
    <div class="d-flex justify-content-end">
        <!-- <form action="index.php?act=billupdate" method="post">
            <h4>Tình trạng đơn hàng</h4>
            <?php
                // if(is_array($bill)){
                //     extract($bill);
                //     var_dump($bill_status);
                // }
            ?>
            
            <input type="text" name="status" >
            <input type="submit" value="Cập nhật" name="editbill" class="btn btn-primary">
        </form> -->

    </div>

        <form action="index.php?act=billupdate" method="post">
                <input type="hidden" name="idbill" value="<?=$idBill?>">

                <div class="form-group">
                    <label for="tensp"> <strong>Tình trạng đơn:</strong></label>
                    <input type="text" class="form-control" name="status" id="tensp" value="<?=$bill_status?>">
                </div>

                <div class="form-group">
                    <label for="tensp"> <strong>Tên khách hàng:</strong></label>
                    <input type="text" class="form-control" name="tensp" id="tensp" value="<?=$bill_name?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tensp"><strong>Phương thức thanh toán:</strong></label>
                    <input type="text" class="form-control" name="tensp" id="tensp" value="<?=$bill_pt?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tensp"><strong>Địa chỉ:</strong></label>
                    <input type="text" class="form-control" name="tensp" id="tensp" value="<?=$bill_address?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tensp"><strong>Mail:</strong></label>
                    <input type="text" class="form-control" name="tensp" id="tensp" value="<?=$bill_email?>" readonly>
                </div>

                <div class="form-group">
                    <label for="tensp"><strong>SDT:</strong></label> 
                    <input type="text" class="form-control" name="tensp" id="tensp" value="<?=$bill_tel?>" readonly>
                </div>

                <div class="form-group">
                    <input type="submit" value="Cập nhật" name="editbill" class="btn btn-primary">
                </div>

                
        </form>


    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cart as $cart) {
                extract($cart);
                $hinhpath = "../" . $img;
                if (is_file($hinhpath)) {
                    $hinh = '<img src="' . $hinhpath . '" height="80">';
                } else {
                    $hinh = 'Không tồn tại ảnh';
                }
                $tong=$gia*$soLuong;
                echo '<tr>
                            <td>' . $tenSP . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $soLuong . '</td>
                            <td>' . $gia . '</td>
                            <td>' . $tong . '</td>
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
                <th>Tổng</th>
            </tr>
        </tfoot>
    </table>


</div>



<!-- <div class="container mt-3 d-flex justify-content-end">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div> -->




</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>