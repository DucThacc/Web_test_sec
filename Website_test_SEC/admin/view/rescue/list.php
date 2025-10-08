<div class="main-content">
                <h3 class="title-page">
                    Quản lí nhận nuôi
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Địa điểm</th>
                            <th>Ngày</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011-01-25</td>
                            <td>$112,000</td>
                        </tr> -->
                        <?php 
                            $i=1;
                            foreach ($listrescue as $rescue) {
                                extract($rescue);
                                $chitiet="index.php?act=rescue_detail&idrescue=".$id_RP;
                                echo '<tr>
                                        <td>'.$i.' </td>
                                        <td>'.$name.'</td>
                                        <td>'.$mail.'</td>
                                        <td>'.$location.'</td>
                                        <td>'.$ngayRP.'</td>
                                        <td>
                                            <a href="'.$chitiet.'" class="btn btn-warning"><i
                                                    class="fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>';
                                $i++;    
                            }
                        
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Địa điểm</th>
                            <th>Ngày</th>
                            <th>Tùy chọn</th>
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








