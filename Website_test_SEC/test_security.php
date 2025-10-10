<?php
// File test để kiểm tra bảo mật admin
session_start();

echo "<h2>Test Bảo mật Admin</h2>";

// Test 1: Không đăng nhập
echo "<h3>Test 1: Truy cập admin khi chưa đăng nhập</h3>";
unset($_SESSION['user']);
echo "Session user đã được xóa. Thử truy cập admin...<br>";
echo '<a href="admin/" target="_blank">Truy cập Admin (sẽ chuyển về trang đăng nhập)</a><br><br>';

// Test 2: Đăng nhập với user thường
echo "<h3>Test 2: Đăng nhập với user thường (decen = 0)</h3>";
$_SESSION['user'] = [
    'idUser' => 1,
    'tenUser' => 'Test User',
    'decen' => 0  // User thường
];
echo "Đã set session user với decen = 0. Thử truy cập admin...<br>";
echo '<a href="admin/" target="_blank">Truy cập Admin (sẽ hiện thông báo không có quyền)</a><br><br>';

// Test 3: Đăng nhập với admin
echo "<h3>Test 3: Đăng nhập với admin (decen = 1)</h3>";
$_SESSION['user'] = [
    'idUser' => 1,
    'tenUser' => 'Admin User',
    'decen' => 1  // Admin
];
echo "Đã set session admin với decen = 1. Thử truy cập admin...<br>";
echo '<a href="admin/" target="_blank">Truy cập Admin (sẽ vào được)</a><br><br>';

echo "<h3>Hướng dẫn test:</h3>";
echo "1. Click vào link 'Truy cập Admin' ở Test 1 - sẽ chuyển về trang đăng nhập<br>";
echo "2. Click vào link 'Truy cập Admin' ở Test 2 - sẽ hiện thông báo 'Bạn không có quyền truy cập trang này!'<br>";
echo "3. Click vào link 'Truy cập Admin' ở Test 3 - sẽ vào được trang admin<br>";
echo "4. Thử truy cập trực tiếp URL admin khi chưa đăng nhập hoặc không phải admin<br>";
?>
