<?php
// Test đơn giản để kiểm tra admin
session_start();

echo "<h2>Test Admin Access</h2>";

// Test với admin
$_SESSION['user'] = [
    'idUser' => 1,
    'tenUser' => 'Admin Test',
    'decen' => 1
];

echo "<p>Đã set session admin (decen = 1)</p>";
echo '<a href="admin/" target="_blank">Truy cập Admin (sẽ vào được)</a><br><br>';

// Test với user thường
$_SESSION['user'] = [
    'idUser' => 2,
    'tenUser' => 'User Test',
    'decen' => 0
];

echo "<p>Đã set session user thường (decen = 0)</p>";
echo '<a href="admin/" target="_blank">Truy cập Admin (sẽ bị từ chối)</a><br><br>';

// Test không đăng nhập
unset($_SESSION['user']);
echo "<p>Đã xóa session (chưa đăng nhập)</p>";
echo '<a href="admin/" target="_blank">Truy cập Admin (sẽ chuyển về đăng nhập)</a><br><br>';
?>
