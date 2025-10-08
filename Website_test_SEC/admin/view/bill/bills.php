<div class="main-content">
                <h3 class="title-page">
                    Quản lí đơn hàng
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đặt</th>
                            <th>Tình trạng</th>
                            <th>Tổng</th>
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

                            foreach ($listbill as $bill) {
                                extract($bill);
                                $chitiet="index.php?act=billdetail&idbill=".$idBill;
                                echo '<tr>
                                        <td>DACS-'.$idBill.' </td>
                                        <td>'.$bill_name.'</td>
                                        <td>'.$bill_address.'</td>
                                        <td>'.$bill_day.'</td>
                                        <td>'.$bill_status.'</td>
                                        <td>'.$bill_total.' $</td>
                                        <td>
                                            <a href="'.$chitiet.'" class="btn btn-warning"><i
                                                    class="fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>';
                            }
                        
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đặt</th>
                            <th>Tình trạng</th>
                            <th>Tổng</th>
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