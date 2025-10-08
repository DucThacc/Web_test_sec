


<div class="main-content">
    <h3 class="title-page">
        Dashboards
    </h3>
    <section class="statistics row">
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="index.php?act=listsp">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng sản phẩm
                        </h5>
                    </div>
                    <span class="widget-numbers"><?= $tongsp ?></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="index.php?act=listusers">
                <div class="card mb-3 widget-chart">

                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng thành viên
                        </h5>
                    </div>
                    <span class="widget-numbers"><?= $tongtv ?></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="index.php?act=listdm">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng danh mục
                        </h5>
                    </div>
                    <span class="widget-numbers"><?= $tongdm ?></span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="index.php?act=listpet">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            Tổng Pet
                        </h5>
                    </div>
                    <span class="widget-numbers"><?= $tongpet ?></span>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <div class="col-sm-12 col-md-6 col xl-6">
            <div class="card chart">
                <form action="index.php?act=checkdh" method="post">
                    <div class="input-group mb-3">
                        <input name="d1" type="date" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">Đến ngày</span>
                        <input name="d2" type="date" class="form-control" placeholder="Server" aria-label="Server">
                        <input name="xem" type="submit" class="btn btn-primary" value="Xem"></input>
                    </div>
                </form>
                <p>Tổng doanh thu: <span><?=$tong?> $</span></p>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Mã đơn hàng</th>
                        <th>Doanh thu</th>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>1</td>
                            <td>GIA001</td>
                            <td>100.000</td>
                        </tr> -->

                        <?php 
                            $stt=1;
                            $tong=0;
                            foreach ($listbill as $bill) {   
                                echo '<tr>
                                        <td>'.$stt.'</td>
                                        <td>DACS-'.$bill['idBill'].'</td>
                                        <td>'.$bill['bill_total'].' $</td>
                                    </tr>';
                                $stt++;
                                $tong=$tong+$bill['bill_total'];    
                            }
                        
                        ?>


                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Đơn hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Trạng thái</th>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>GIA001</td>
                            <td>Chờ duyệt</td>
                        </tr> -->
                        <?php 
                            foreach ($listbill1 as $bill) {
                                
                                echo '<tr>
                                        <td>DACS-'.$bill['idBill'].'</td>
                                        <td>'.$bill['bill_status'].'</td>
                                    </tr>';
                                
                            }
                        
                        ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Khách hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Username</th>
                    </thead>
                    <tbody>
                        <?php 
                                $i=1;    
                                foreach ($listtk as $taikhoan) {
                                    echo '
                                    </tr>
                                    <td>'.$i.'</td>
                                    <td>'.$taikhoan['tenUser'].'</td>
                                    </tr>
                                    ';
                                    $i++;
                                }
                            ?>


                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

</div>
</div>
<script src="view/assets/js/main.js"></script>
<script>
    new DataTable('#example');
</script>