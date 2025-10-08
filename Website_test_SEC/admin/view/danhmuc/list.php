<div class="main-content">
                <h3 class="title-page">
                    Danh mục
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?act=adddmform" class="btn btn-primary mb-2">Thêm danh mục</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            
                            <th>ID</th>
                            <th>Tên danh mục </th>
                            <th>Danh sách sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>


                    <tbody>
                        <!-- <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>3</td>
                            <td>
                                <a href="#" class="btn btn-warning"><i
                                        class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="#" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr> -->
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$idDanhMuc;
                                $xoadm="index.php?act=xoadm&id=".$idDanhMuc;
                                $dsspDM="index.php?act=dsspdm&iddm=".$idDanhMuc;
                                echo '<tr>
                                        <td>'.$idDanhMuc.'</td>
                                        <td>'.$tenDanhMuc.'</td>
                                        <td><a href="'.$dsspDM.'"> Danh sách sản phẩm </a></td>
                                        <td>
                                            <a href="'.$suadm.'" class="btn btn-warning"><i
                                                    class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                            <a href="'.$xoadm.'" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i> Xóa</a>
                                        </td>
                                    </tr>';


                            }


                        ?>

                    </tbody>


                    <tfoot>

                        <tr>
                            
                            <th>ID</th>
                            <th>Tên danh mục </th>
                            <th>Danh sách sản phẩm</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>