<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
    $ten = $tenUser;
    $mail = $emailUser;
} else {
    $ten = "";
    $mail = "";
}

// if(isset($_POST['sendreport']) && $_POST['sendreport']){
//     $ten=$_POST['name'];
//     $mail=$_POST['email'];
//     $location=$_POST['location'];
//     $msg=$_POST['mesage'];
//     $latitude=$_POST['latitude'];
//     $longitude=$_POST['longitude'];
//     $ngayrp=date("h:i:sa d/m/Y");

//     // echo '<script>
//     //         alert("'.$ten.'");
//     //     </script>';

//     insert_rp($ten,$email,$mesage,$location,$latitude,$longitude,$ngayrp);
//     echo '<script>
//             alert("Report thành công vui lòng chờ mail");
//         </script>';
// }



?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h1>Báo cáo</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Báo cáo</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Contact Map section start-->
<div class="contact-map-section section">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1346.5107053857876!2d106.67697876727259!3d10.726371847680781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1688848442812!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15342.935417445575!2d108.25232385575575!3d15.975269188866509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1702442301000!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--Contact Map section End-->

<!--Contact section start-->
<div class="conact-section section pt-30 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="contact-information">
                    <h3>Địa chỉ liên hệ</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa-regular fa-map"></i></span>
                            <span class="text"><span>470 Đ. Trần Đại Nghĩa, Khu đô thị, Ngũ Hành Sơn, Đà Nẵng 550000</span></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            <span class="text"><a href="#">0236 3667 117</a></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
                            <span class="text"><a href="https://vku.udn.vn/">https://vku.udn.vn/</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- <div class="col-lg-9 col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Báo cáo về động vật cần cứu trợ</h3>
                            <form id="contact-form" action="index.php?pg=sendrp" method="POST" class="myForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Tên" type="text" value="<?= $ten ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email*" type="email" value="<?= $mail ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="location" placeholder="Khu vực*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Nội dung...."></textarea>
                                            <input name="latitude" type="text">
                                            <input name="longitude" type="text" >
                                            <input name="sendreport" class="btn" type="submit" value="Gửi báo cáo"></input>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div> -->


            <div class="col-12 col-lg-9">
                <div class="bg-white border rounded shadow-sm overflow-hidden">
                    <form action="index.php?pg=sendrp" method="POST" class="myForm">
                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                            <div class="col-12">
                                <label for="fullname" class="form-label">Tên <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="name" value="<?= $ten ?>" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $mail ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phone" class="form-label">Khu vực</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M10,0.186c-3.427,0-6.204,2.778-6.204,6.204c0,5.471,6.204,6.806,6.204,13.424c0-6.618,6.204-7.953,6.204-13.424C16.204,2.964,13.427,0.186,10,0.186z M10,14.453c-0.66-1.125-1.462-2.076-2.219-2.974C6.36,9.797,5.239,8.469,5.239,6.39C5.239,3.764,7.374,1.63,10,1.63c2.625,0,4.761,2.135,4.761,4.761c0,2.078-1.121,3.407-2.541,5.089C11.462,12.377,10.66,13.328,10,14.453z" />
                                        </svg>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="location" value="" placeholder="Mặc định sẽ lấy địa điểm hiện tại">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Tin nhắn <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                            <input name="latitude" type="hidden">
                                            <input name="longitude" type="hidden" >
                                    <input name="sendreport"  class="btn btn-primary btn-lg" type="submit" value="Báo cáo"></input>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>



        </div>

    </div>
</div>
<!--Contact section end-->

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
        document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.");
                break;
        }
    }

    // Gọi hàm để lấy vị trí khi trang được load
    getLocation();
</script>