<?php 
    if (is_array($loaduser) && isset($loaduser)){
        extract($loaduser);
    }
    if (is_array($loadpet) && isset($loadpet)){
        extract($loadpet);
    }

?>
<div class="main-content">
                <h3 class="title-page">
                    Quản lí nhận nuôi
                </h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Pet</th>
                            <th>Tên người muốn nhận</th>
                            <th>Ngày </th>
                            <th>Email</th>
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
                            foreach ($listadopt as $adopt) {
                                extract($adopt);
                                // $chitiet="index.php?act=billdetail&idbill=".$idBill;

                                echo '<tr>
                                        <td>'.$i.' </td>
                                        <td>'.$tenPet.'</td>
                                        <td>'.$tenUser.'</td>
                                        <td>'.$ngaynhan.'</td>
                                        <td>'.$emailUser.'</td>
                                        <td>
                                            <a href="" class="btn btn-warning"><i
                                                    class="fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>';
                                $i++;    
                            }
                        
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Tên</th>
                            <th>Tên Pet</th>
                            <th>Tên người muốn nhận</th>
                            <th>Ngày </th>
                            <th>Email</th>
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








