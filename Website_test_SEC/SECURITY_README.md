# Hệ thống Bảo mật Admin

## Tổng quan
Đã thêm hệ thống bảo mật hoàn chỉnh cho trang admin để ngăn chặn truy cập trái phép.

## Các thay đổi đã thực hiện

### 1. File `admin/auth_check.php`
- Kiểm tra session user có tồn tại không
- Kiểm tra quyền admin (decen = 1)
- Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
- Hiện thông báo lỗi nếu không có quyền admin

### 2. Cập nhật tất cả file trong admin
- `admin/index.php`: Thêm include auth_check.php
- `admin/header.php`: Thêm bảo mật
- `admin/footer.php`: Thêm bảo mật  
- `admin/home.php`: Thêm bảo mật
- Tất cả file trong `admin/view/`: Thêm bảo mật

### 3. File `.htaccess`
- Ngăn chặn truy cập trực tiếp vào các file PHP trong view
- Ẩn thông tin server
- Thêm security headers

## Cách hoạt động

### Khi user chưa đăng nhập:
1. Truy cập `admin/` → Chuyển về `index.php?pg=login_register_form`
2. Phải đăng nhập trước

### Khi user đã đăng nhập nhưng không phải admin (decen = 0):
1. Truy cập `admin/` → Hiện thông báo "Bạn không có quyền truy cập trang này!"
2. Chuyển về trang chủ

### Khi admin đăng nhập (decen = 1):
1. Truy cập `admin/` → Vào được trang admin bình thường

## Test bảo mật

Chạy file `test_security.php` để kiểm tra:
- Truy cập admin khi chưa đăng nhập
- Truy cập admin với user thường
- Truy cập admin với admin

## Lưu ý quan trọng

1. **Không được xóa file `auth_check.php`** - Đây là file bảo mật chính
2. **Không được comment out các dòng include auth_check.php** trong các file admin
3. **Kiểm tra quyền admin dựa trên trường `decen`** trong database:
   - `decen = 0`: User thường
   - `decen = 1`: Admin
4. **File .htaccess** cung cấp thêm lớp bảo mật ở server level

## Cấu trúc bảo mật

```
admin/
├── auth_check.php          # File kiểm tra quyền chính
├── .htaccess              # Bảo mật server level
├── index.php              # Include auth_check.php
├── header.php             # Include auth_check.php
├── footer.php             # Include auth_check.php
├── home.php               # Include auth_check.php
└── view/
    ├── danhmuc/           # Tất cả file include ../../auth_check.php
    ├── sanpham/           # Tất cả file include ../../auth_check.php
    ├── taikhoan/          # Tất cả file include ../../auth_check.php
    ├── pet/               # Tất cả file include ../../auth_check.php
    ├── bill/              # Tất cả file include ../../auth_check.php
    ├── adopt/             # Tất cả file include ../../auth_check.php
    ├── rescue/            # Tất cả file include ../../auth_check.php
    └── danhmucpet/        # Tất cả file include ../../auth_check.php
```

## Kết quả

✅ **Trước**: Bất kỳ ai cũng có thể truy cập admin bằng cách gõ URL  
✅ **Sau**: Chỉ admin đã đăng nhập mới có thể truy cập admin  
✅ **Bảo mật đa lớp**: Session + Database + Server level
