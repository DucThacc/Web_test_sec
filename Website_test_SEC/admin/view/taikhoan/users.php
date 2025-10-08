<div class="main-content">
                <h3 class="title-page">
                    Thành viên
                </h3>
                <div class="d-flex justify-content-end">
                    <form action="index.php?act=listusers" method="post">
                        <input type="text" name="kyw" placeholder="Nhập tên User cần tìm">
                        <input type="submit" value="Tìm kiếm" name="listu" class="btn btn-primary">
                        <a href="index.php?act=adduserform" class="btn btn-primary">Thêm thành viên</a>
                    </form>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Tài khoản</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                        </tr>                         -->
                        <?php 
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                $xoauser="index.php?act=xoauser&id=".$idUser;
                                $suauser="index.php?act=suauserform&id=".$idUser;
                                echo '<tr>
                                        <td>'.$tenUser.'</td>
                                        <td>'.$accountUser.'</td>
                                        <td>'.$emailUser.'</td>
                                        <td>'.$telUser.'</td>
                                        <td>
                                            <a href="'.$suauser.'" class="btn btn-warning"><i
                                                    class="fa-solid fa-wrench"></i> Sửa</a>
                                            <a href="'.$xoauser.'" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i> Xóa</a>
                                        </td>
                                    </tr>';


                            }


                        ?>

                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Tài khoản</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>