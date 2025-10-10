<?php
session_start();

// Kiểm tra xem user có đăng nhập không
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    // Nếu chưa đăng nhập, chuyển về trang đăng nhập
    header('Location: ../index.php?pg=login_register_form');
    exit();
}

// Kiểm tra quyền admin
$user = $_SESSION['user'];
if (!isset($user['decen']) || $user['decen'] != 1) {
    // Nếu không phải admin, chuyển về trang chủ với thông báo
    echo '<script>
        alert("Bạn không có quyền truy cập trang này!");
        window.location.href = "../index.php";
    </script>';
    exit();
}
?>
