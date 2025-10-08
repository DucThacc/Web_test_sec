-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2024 lúc 09:25 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dacs2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `idBill` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_email` text NOT NULL,
  `bill_address` text NOT NULL,
  `bill_tel` varchar(11) NOT NULL,
  `bill_pttt` text NOT NULL,
  `bill_day` datetime NOT NULL,
  `bill_status` text NOT NULL,
  `bill_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`idBill`, `idUser`, `bill_name`, `bill_email`, `bill_address`, `bill_tel`, `bill_pttt`, `bill_day`, `bill_status`, `bill_total`) VALUES
(1, 1, 'Thạcc', 'ducthanh300904@gmail.com', 'Tam Kỳ - Quảng Nam', '0345914149', 'ttsau', '2023-11-15 16:50:59', 'Đang giao hàng', 525),
(2, 2, 'Thạnh', 'ducthanh3009@gmail.com', 'Hội An - Quảng Nam', '0392989038', 'tragop', '2023-12-11 23:14:37', 'Đã giao hàng', 984),
(3, 3, 'Nguyễn Thị Quỳnh Như', 'quynhu2912@gmail.com', 'Duy Xuyên - Quảng Nam', '123', 'ttsau', '2023-12-15 17:12:20', 'Đang giao hàng', 81),
(4, 3, 'Nguyễn Thị Quỳnh Như', 'quynhu2912@gmail.com', 'Duy Xuyên - Quảng Nam', '123', 'ttsau', '2023-12-15 17:12:25', 'Đang chờ xử lí', 162),
(5, 5, 'Doãn Đức Dy', 'dydoan@gmail.com', 'Điện Bàn - Quảng Nam', '456', 'ttsau', '2023-12-15 17:12:54', 'Đang chờ xử lí', 585),
(6, 8, 'Phạm Đăng Trình', 'dangtrinhng0@gmail.com', 'Điện Bàn - Quảng Nam', '0345914149', 'ttsau', '2023-12-15 17:13:32', 'Đang chờ xử lí', 62),
(7, 11, 'Test', 'safayetshawn95@gmail.com', 'thanh3009@gmail.com', '0345914149', 'ttsau', '2023-12-22 12:27:26', 'Đang chờ xử lí', 120),
(8, 3, 'Nguyễn Thị Quỳnh Như', 'quynhu2912@gmail.com', 'Duy Xuyên - Quảng Nam', '123', 'tragop', '2023-12-23 01:31:34', 'Đang chờ xử lí', 28),
(9, 1, 'Thạcc', 'ducthanh300904@gmail.com', 'Tam Kỳ - Quảng Nam', '0345914149', 'ttsau', '2023-12-23 02:23:20', 'Đang chờ xử lí', 180),
(10, 1, 'Thạcc', 'ducthanh300904@gmail.com', 'Tam Kỳ - Quảng Nam', '0345914149', 'tragop', '2024-01-04 05:57:14', 'Đang chờ xử lí', 150),
(11, 1, 'Thạcc', 'ducthanh300904@gmail.com', 'Tam Kỳ - Quảng Nam', '0345914149', 'ttsau', '2024-01-05 16:37:33', 'Đang chờ xử lí', 180),
(12, 1, 'Thạcc', 'ducthanh300904@gmail.com', 'Tam Kỳ - Quảng Nam', '0345914149', 'ttsau', '2024-01-06 08:51:30', 'Đang chờ xử lí', 160),
(13, 12, 'Truyền', 'ducthanh300904@gmail.comm', 'Tam Kỳ - Quảng Nôm', '03459141499', 'ttsau', '2024-01-06 08:56:11', 'Đang chờ xử lí', 510);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `idBinhLuan` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `content` text NOT NULL,
  `ngayBinhLuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`idBinhLuan`, `idSP`, `idUser`, `content`, `ngayBinhLuan`) VALUES
(1, 18, 1, 'hmm', '05:23:42pm 12/12/2023'),
(2, 18, 1, 'hmm', '05:25:52pm 12/12/2023'),
(3, 16, 1, 'hmm', '05:31:15pm 12/12/2023'),
(4, 16, 1, 'hehehe', '05:38:36pm 12/12/2023'),
(5, 16, 1, 'hí hí', '05:38:42pm 12/12/2023'),
(6, 16, 8, ':DD??', '05:52:13pm 12/12/2023'),
(7, 20, 1, 'tốt', '06:03:58am 05/01/2024'),
(8, 20, 1, 'hmmm', '09:18:05am 06/01/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `idCart` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `tenSP` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `soLuong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`idCart`, `idUser`, `idSP`, `tenSP`, `img`, `soLuong`, `gia`, `id_bill`) VALUES
(1, 1, 13, 'Cát vệ sinh đậu nành cho mèo', 'upload/sanpham/sg-11134201-23010-qojfur8618lv96.jpg', 1, 81, 1),
(2, 1, 9, 'Giỏ vận chuyển', 'upload/sanpham/31c698f4690e729c5516facd81b56f5a.jpg', 1, 234, 1),
(3, 1, 16, 'Pate King Pet', 'upload/sanpham/7bd5e33bc5e1e4e8216fc5865613d734.jpg', 7, 30, 1),
(4, 2, 18, 'Đồ chơi cần câu', 'upload/sanpham/vn-11134207-7r98o-llyp1zw0gycfdd.jpg', 3, 14, 2),
(5, 2, 14, 'Thức ăn cho mèo MASTI', 'upload/sanpham/1abd769c5cdd3dcb1ea6294aeed2b561.jpg', 3, 38, 2),
(6, 2, 10, 'Dây dắt', 'upload/sanpham/9eeac69a4a613709de4185c5d43bde1b.jpg', 4, 72, 2),
(7, 2, 1, 'Võng gỗ', 'upload/sanpham/39d40b8f21e247b5b8e42dd56172a415.jpg', 5, 108, 2),
(8, 3, 13, 'Cát vệ sinh đậu nành cho mèo', 'upload/sanpham/sg-11134201-23010-qojfur8618lv96.jpg', 1, 81, 3),
(9, 3, 8, 'Chén ăn đế sắt', 'upload/sanpham/93d18930e7abbf7d09980929b7db74a4.jpg', 1, 162, 4),
(10, 5, 6, 'Võng đu', 'upload/sanpham/0ecc04614a5cd49eff101fabe7ab7e21.jpg', 1, 405, 5),
(11, 5, 2, 'Giường cũi', 'upload/sanpham/08abc21e6a34bf8c478e9311192d3ff1.jpg', 1, 180, 5),
(12, 8, 12, 'Thanh gặm sạch răng cho chó', 'upload/sanpham/vn-11134207-7r98o-lmcw0sg02tpbcb.jpg', 1, 62, 6),
(13, 11, 16, 'Pate King Pet', 'upload/sanpham/7bd5e33bc5e1e4e8216fc5865613d734.jpg', 4, 30, 7),
(14, 3, 18, 'Đồ chơi cần câu', 'upload/sanpham/vn-11134207-7r98o-llyp1zw0gycfdd.jpg', 2, 14, 8),
(15, 1, 19, 'Giỏ vận chuyển chó mèo nhựa trong suốt', 'upload/sanpham/33de45cf0f0a3085ad1ae178231929a0.jpg', 1, 180, 9),
(16, 1, 16, 'Pate King Pet', 'upload/sanpham/7bd5e33bc5e1e4e8216fc5865613d734.jpg', 2, 30, 10),
(17, 1, 11, 'Dây dắt áo gile', 'upload/sanpham/a964ca22aec86ef29b3839d60989d682.jpg', 1, 90, 10),
(18, 1, 16, 'Pate King Pet', 'upload/sanpham/7bd5e33bc5e1e4e8216fc5865613d734.jpg', 5, 30, 11),
(19, 1, 20, 'Giỏ vận chuyển chó mèo', 'upload/sanpham/33de45cf0f0a3085ad1ae178231929a0.jpg', 1, 160, 12),
(20, 12, 16, 'Pate King Pet', 'upload/sanpham/7bd5e33bc5e1e4e8216fc5865613d734.jpg', 1, 30, 13),
(21, 12, 20, 'Giỏ vận chuyển chó mèo', 'upload/sanpham/33de45cf0f0a3085ad1ae178231929a0.jpg', 3, 160, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_pet`
--

CREATE TABLE `tbl_danhmuc_pet` (
  `idDanhMucPet` int(11) NOT NULL,
  `tenDanhMucPet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_pet`
--

INSERT INTO `tbl_danhmuc_pet` (`idDanhMucPet`, `tenDanhMucPet`) VALUES
(1, 'Mèo'),
(2, 'Chó');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_sp`
--

CREATE TABLE `tbl_danhmuc_sp` (
  `idDanhMuc` int(11) NOT NULL,
  `tenDanhMuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_sp`
--

INSERT INTO `tbl_danhmuc_sp` (`idDanhMuc`, `tenDanhMuc`) VALUES
(1, 'Thức ăn cho mèo'),
(2, 'Thức ăn cho chó'),
(3, 'Đồ chơi'),
(4, 'Balo cho thú cưng'),
(6, 'Giường nằm'),
(8, 'Chén ăn cho chó mèo'),
(9, 'Phụ kiện'),
(10, 'Cát vệ sinh'),
(11, 'Pate chó mèo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsach_sp`
--

CREATE TABLE `tbl_danhsach_sp` (
  `idSanPham` int(11) NOT NULL,
  `tenSanPham` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `giaKM` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `mota` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `tinhTrang` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `moTaNgan` text NOT NULL,
  `idDM` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhsach_sp`
--

INSERT INTO `tbl_danhsach_sp` (`idSanPham`, `tenSanPham`, `gia`, `giaKM`, `soLuong`, `mota`, `img`, `tinhTrang`, `luotxem`, `moTaNgan`, `idDM`) VALUES
(1, 'Võng gỗ', 120, 10, 12, '<ul><li>Võng bằng gỗ</li><li>Có nhiều màu sắc</li><li>Giá 120k</li><li>Free ship nội thành</li></ul>', '39d40b8f21e247b5b8e42dd56172a415.jpg', 'Còn hàng', 0, 'Võng gỗ giành cho mèo nhiều màu sắc', 6),
(2, 'Giường cũi', 200, 10, 30, '<ol><li>Chất liệu: gỗ thông tự nhiên, chịu được nước, siêu bền</li><li>Kích thước: Size S - 56cm (rộng) X 39cm (dài) X 40cm (cao) Size M - 80cm (rộng) X 50cm (dài) X 40cm (cao)</li><li>Giá tiền: 350.000 - 550.000VNĐ</li></ol>', '08abc21e6a34bf8c478e9311192d3ff1.jpg', 'Hết hàng', 0, 'Giường cũi gỗ cho chó/ mèo', 6),
(4, 'Giường gỗ', 150, 10, 3, '<ul><li>Làm bằng gỗ</li><li>Giá 150k</li><li>Loại: Giường nằm</li></ul>', '65d64690e1770247a435741633e60b4e.jpg', 'Ổn', 0, 'Giường gỗ giành cho thú cưng nằm', 6),
(5, 'Võng sắt', 590, 20, 12, '<ul><li>Màu sắc: đen</li><li>Kích thước: size S-M-L-XL</li><li>Chất liệu: sắt sơn tĩnh điện, vải lưới canvas dày dặn&nbsp;</li><li>Giá tiền: 590.000<br>&nbsp;</li></ul>', '0399ed337eb9e7a32bbd3f489d086fdb.jpg', 'Ổn', 0, 'Võng sắt cho chó/ mèo', 6),
(6, 'Võng đu', 450, 10, 10, '<p>Chất liệu: gỗ, vải nhung&nbsp;</p><p>Giá tiền: 450.000 VNĐ</p>', '0ecc04614a5cd49eff101fabe7ab7e21.jpg', 'Còn hàng', 0, 'Võng đu đưa cho mèo', 6),
(7, 'Chén ăn cho mèo', 250, 0, 20, '<ul><li>Chất liệu: khung đế gỗ, chén sứ trắng&nbsp;</li><li>Loại: chén đơn &amp; chén đôi&nbsp;</li><li>Giá tiền: 250.000 - 350.000 VNĐ&nbsp;</li><li>GIAO HỌA TIẾT NGẪU NHIÊN</li></ul>', 'aca8930a22da2cd850fd4e1244d98507.jpg', 'Còn hàng', 0, 'Chén ăn đế gỗ tai gấu bảo vệ cổ cho mèo/ chó nhỏ', 8),
(8, 'Chén ăn đế sắt', 170, 5, 12, '<ul><li>Chất liệu: khung đế sắt vàng, chén thủy tinh&nbsp;</li><li>Loại: chén đơn &amp; chén đôi&nbsp;</li><li>Giá tiền: 170.000 - 270.000 VNĐ</li></ul>', '93d18930e7abbf7d09980929b7db74a4.jpg', 'Còn hàng', 0, 'Chén ăn đế sắt tai mèo vàng bảo vệ cổ cho mèo/ chó nhỏ', 8),
(9, 'Giỏ vận chuyển', 260, 10, 10, '<ul><li>Chất liệu: vải bố dày, ít thấm nước&nbsp;</li><li>Phụ kiện: có quai xách tay và quai đeo vai, có thể thay được cửa sổ phi hành gia mái vòm hoặc cửa sổ lưới đan&nbsp;</li><li>Màu sắc: màu xám &amp; màu xanh navy&nbsp;</li><li>Giá tiền: 260.000 VNĐ</li></ul>', '31c698f4690e729c5516facd81b56f5a.jpg', 'Còn hàng', 0, 'Giỏ vận chuyển chó mèo cửa sổ phi hành gia', 4),
(10, 'Dây dắt', 80, 10, 10, '<ul><li>Phụ kiện: dây dắt cầm tay rời hoặc full set kèm đai ngực&nbsp;</li><li>Màu sắc: đen - đỏ - xanh sky&nbsp;</li><li>Giá tiền: 80.000 - 100.000 - 120.000 - 140.000 VNĐ&nbsp;<br>&nbsp;</li></ul>', '9eeac69a4a613709de4185c5d43bde1b.jpg', 'Còn hàng', 0, 'Dây dắt chó lớn phản quang trợ lực, kèm đai ngực', 9),
(11, 'Dây dắt áo gile', 100, 10, 20, '<ul><li>Chất liệu: vải bố dày, bên trong lót lưới xốp tránh bám lông&nbsp;</li><li>Phụ kiện: có phần áo gile đính nơ thời trang cho boss kèm dây cầm tay cho chủ&nbsp;</li><li>Màu sắc: chấm bi hồng - chấm bi xám - caro xanh sky - thủy thủ xanh navy&nbsp;</li><li>Kích thước: size S - M - L Giá tiền: 100.000 VNĐ</li></ul>', 'a964ca22aec86ef29b3839d60989d682.jpg', 'Còn hàng', 0, 'Dây dắt áo gile thời trang cho mèo', 9),
(12, 'Thanh gặm sạch răng cho chó', 65, 5, 40, '<h2>Thanh gặm cho chó 7 Dental Effects</h2><ul><li>&nbsp;Cải thiện lông: Có tính vừa miệng, thành phần dinh dưỡng đặc biệt có thể cải thiện hệ thống lông, đạt được chức năng làm đẹp lông.&nbsp;</li><li>Thiết kế dạng dây thừng Tăng cường thời gian nhai cho chó yêu: Thiết kế hình sợi dây thừng dài khoảng 10cm. Tăng cường thời gian cắn nhai cho chó con, làm tăng hứng thú mài răng cho chó con. Tránh hôi miệng&nbsp;</li><li>Làm sạch nhiều mặt: Trừ khử mảng bám đến Gánh nặng tiêu hóa đường ruột lên đến 99,9%. Kéo dài thời gian nhai. Phòng tránh mảng bám cao răng.</li><li>&nbsp;Giúp đường ruột nhu động, cải thiện sức khỏe dạ dày. Thiết kế xoắn kết với nhau tăng cường diện tích tiếp xúc mài răng. Có thể làm sạch răng, còn có thể làm tăng hứng thú mài răng cho chó yêu.&nbsp;</li></ul><h3>Bánh thưởng cho chó sạch răng Vegebrand 7 Dental Effects mang lại 7 lợi ích nha khoa:</h3><ol><li>Vệ sinh răng miệng toàn bộ, loại bỏ 99% cao răng.</li><li>99,9% tiêu hóa, không gây kích ứng đường ruột.</li><li>Thúc đẩy quá trình tiêu hóa.</li><li>Hơi thở thơm, giảm mùi hôi miệng.</li><li>Chịu được vết cắn, thời gian nhai lâu dài.</li><li>Ngăn chặn tích lũy cao răng.</li></ol><h4>Lượng sử dụng:</h4><ul><li>- Chó con khuyên dùng cho ăn 1-2 cây/ngày.</li><li>&nbsp;- Chó cỡ nhỏ khuyên dùng cho ăn 2-3 cây/ngày.&nbsp;</li><li>- Chó cỡ vừa khuyên dùng 3-4 cây/ngày.<br>&nbsp;</li></ul>', 'vn-11134207-7r98o-lmcw0sg02tpbcb.jpg', 'Còn hàng', 0, 'Thanh gặm cho chó 7 Dental Effects', 2),
(13, 'Cát vệ sinh đậu nành cho mèo', 90, 10, 3, '<h4>Cát vệ sinh đậu nành cho mèo N-SEULECARE&nbsp;</h4><p>Bạn muốn dành cho mèo yêu của mình những điều tốt đẹp nhất, vậy những gì là tốt nhất? Đó là Sử dụng cát vệ sinh cho mèo không có hóa chất, không có mây bụi và không có mùi. Cát Đậu Nành N-Seulecare - Noe Natural Tofu Cat Litter có thể cung cấp cho bạn và mèo của bạn hạt cát vệ sinh mèo tự nhiên làm từ đậu nành và tinh bột ngô. Hàm lượng nước được kiểm soát trong khoảng 10% ± 1% (ngăn chặn sự phát triển của vi khuẩn), độ cứng hơn 55N (90% không có bụi) và các hạt mịn 3.0mm chỉ bằng một nửa trọng lượng của phân mèo truyền thống. Thấm nhanh nước trong 1,5 giây (ít mùi sau khi sử dụng) để đảm bảo mông mèo khô ráo, không bết dính và dễ dàng vệ sinh. Đồng thời, chúng tôi bổ sung vật liệu phân hủy sinh học, có thể đổ trực tiếp vào bồn cầu và rửa trôi.&nbsp;</p><ul><li>* Đậu phụ cho mèo được làm từ chất xơ của hạt đậu, tinh bột ngô và tinh bột. Sử dụng tinh bột thực phẩm, bã đậu khô của các công ty niêm yết để đảm bảo an toàn sức khỏe cho sản phẩm.</li><li>&nbsp;* Hạt mịn, hiệu quả quấn tốt hơn, đảm bảo mông mèo khô, không dính, dễ dàng vệ sinh. Nó hấp thụ nhanh chóng trong 1,5 giây, và không tạo ra mùi, ngăn mùi hiệu quả và có tác dụng khử mùi tốt hơn.&nbsp;</li><li>* Đường kính hạt là 3.0 mm, hàm lượng nước được kiểm soát trong khoảng 10% ± 1% và độ cứng trên 55N. Thêm vật liệu phân hủy sinh học, nó có thể được đổ trực tiếp vào bồn cầu và rửa sạch.</li><li>&nbsp;* Các hạt nhỏ hơn, thích hợp cho mèo ở mọi lứa tuổi, giúp chân mèo cảm thấy thoải mái hơn, tốt cho sức khỏe mèo con và tiết kiệm</li></ul>', 'sg-11134201-23010-qojfur8618lv96.jpg', 'Còn hàng', 0, 'Cát vệ sinh đậu nành cho mèo N-Seulecare | Túi chân không 6L', 10),
(14, 'Thức ăn cho mèo MASTI', 40, 5, 50, '<ul><li>Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày Giao hàng trong thời gian sớm nhất.&nbsp;</li><li>Nếu có vấn đề với sản phẩm, vui lòng liên hệ với chúng tôi trước. Nếu bạn không hài lòng với sản phẩm, vui lòng liên hệ với cửa hàng để được hỗ trợ. Nếu nhân viên đóng gói thiếu sản phẩm của bạn, cửa hàng sẽ giao hàng tiếp với giá khác.</li><li>&nbsp;Nếu bạn có câu hỏi nào, vui lòng liên hệ với cửa hàng trước khi đánh giá tiêu cực</li></ul><p>⭕ Nếu các bạn quan tâm đến sản phẩm của chúng tôi, xin hãy nhấn theo dõi cửa hàng để thuận tiện khi đặt hàng. Tất cả các sản phẩm đều được vận chuyển từ Trung Quốc. Mọi sản phẩm đều được kiểm tra trước khi gửi đi. Nếu khách hàng phát hiện sản phẩm bị hư hỏng hoặc có vấn đề khác sau khi nhận hàng, vui lòng chụp ảnh và gửi cho cửa hàng. Đừng vội để lại đánh giá 1 sao ngay lập tức. Chúng tôi sẽ nhanh chóng giải quyết vấn đề cho bạn trong thời gian sớm nhất để bạn cảm thấy hài lòng. Nếu bạn hài lòng với việc giao hàng, vui lòng để lại đánh giá 5 sao cho cửa hàng. Cảm ơn các bạn đã ủng hộ ⭐⭐⭐⭐⭐ cho chúng tôi.</p>', '1abd769c5cdd3dcb1ea6294aeed2b561.jpg', 'Còn hàng', 0, 'MASTI Đồ ăn được làm nhuyễn vị cá ngừ dành cho mèo cưng LI0275', 1),
(15, 'Thức ăn cho mèo Todays Dinner', 16, 0, 61, '<p>hmm</p>', 'vn-11134201-7qukw-ljibvih6934209.jpg', 'Còn hàng', 0, '(Hàng mới về) [SALE LỚN] (1KG) Thức ăn cho mèo mọi lứa tuổi Todays Dinner 1kg thucanchomeoS', 1),
(16, 'Pate King Pet', 32, 5, 9, '<p><i><strong>6 MÙI VỊ:&nbsp;</strong></i></p><ul><li>Nước dùng giò heo hầm - (cho chó trưởng thành)&nbsp;</li><li>Pate đùi gà (cho chó mèo)</li><li>&nbsp;Pate cá hồi (cho chó mèo)&nbsp;</li><li>Pate hỗn hợp cá (cho chó mèo)</li><li>&nbsp;Pate hỗn hợp gà cá (cho chó mèo)&nbsp;</li><li>Pate súp cá sốt bò (cho chó mèo)&nbsp;</li></ul><p>✔️Được làm từ nguyên liệu tươi ngon như: thịt gà, gan gà, cá nục&nbsp;</p><p>✔️Kết cấu đặc mịn, nguyên liệu được chọn lọc kỹ, không trộn tinh bột&nbsp;</p><p>✔️Siêu cấp nước cho hệ tiêu hóa. Cung cấp các vitamin và khoáng chất cần thiết cho chó mèo&nbsp;</p><p>✔️Giúp các bé dễ dàng đi vệ sinh do có bổ sung Xanthan gum ️</p><p>✔️Sản phẩm dành cho chó và mèo từ 1 tháng tuổi trở lên<br>&nbsp;</p>', '7bd5e33bc5e1e4e8216fc5865613d734.jpg', 'Còn hàng', 0, 'PATE KING PET CHO CHÓ MÈO MỌI LỨA TUỔI ĐỦ VỊ', 11),
(17, 'Pate Nekko', 16, 0, 14, '<p>???????????????? ???????????????????? được làm từ ????% thịt cá ngừ ???? tươi ngon nguyên chất, bổ sung thêm các dưỡng chất thiết yếu như:&nbsp;</p><ul><li>???? ????????̂̀???? ????????́: chứa Omega-3 cung cấp axit béo giúp mèo tăng cường hấp thu chất dinh dưỡng.&nbsp;</li><li>???? ????????????????????????????????????: Hỗ trợ hệ bài tiết và ngăn ngừa búi lông.&nbsp;</li><li>???? ???????????????????????????? ????: Hỗ trợ da và lông khỏe mạnh, mượt mà, tăng cường hệ miễn dịch.&nbsp;</li><li>???? ????????????????????????????: Hỗ trợ thị lực. ????&nbsp;</li><li>???? Bổ sung nước hiệu quả với Boss ít uống nước hoặc cơ thể đang thiếu nước&nbsp;</li></ul><p>Sản phẩm được sản xuất và đóng gói tại Thái Lan với công nghệ hiện đại, đảm bảo an toàn cho mèo cưng nhà bạn.</p>', '2df139533ca17307322253e8cbb22b98.jpg', 'Còn hàng', 0, 'Pate Nekko cá ngừ thật có sốt cho mèo - Gravy - gói 70g', 11),
(18, 'Đồ chơi cần câu', 14, 0, 3, '<p>Đồ Chơi Cần Câu Mèo Con Gắn Lông Vũ Dây Thép Tự Chơi Giá Rẻ Chó Tam Thể Thú Cưng Nhỏ Play Together Tại Nhà Thông Minh</p><p>&nbsp;Cần câu mèo dây sắt sơn là loại đồ chơi cho mèo phổ biến và thông dụng Ưu điểm của Cần câu mèo dây sắt&nbsp;</p><ul><li>+ Dùng để chơi đùa cùng thú cưng của bạn.&nbsp;</li><li>+ Đủ màu sắc ngộ nghĩnh đáng yêu, thu hút thú cưng nhà bạn chơi đùa cùng Cần câu mèo, tăng cương khả năng vận động hoạt bát của thú cưng.&nbsp;</li><li>+ Chi tiết: 1 cần + lông, kích thích thú cưng vờn bắt.&nbsp;</li><li>+ Cần câu mèo được thiết kế bằng sắt sơn dẻo nên uốn cong dễ dàng</li></ul>', 'vn-11134207-7r98o-llyp1zw0gycfdd.jpg', 'Còn hàng', 0, 'Đồ Chơi Cần Câu Mèo Con Gắn Lông Vũ Dây Thép Tự Chơi Giá Rẻ Chó Tam Thể Thú Cưng Nhỏ Play Together Tại Nhà Thông Minh', 3),
(19, 'Giỏ vận chuyển chó mèo nhựa trong suốt', 200, 10, 4, '<p>Chất liệu: nhựa trong suốt Phụ kiện: có quai xách tay và quai đeo vai Giá tiền: 200.000 VNĐ ****** Pet Up cám ơn bạn đã yêu thương chó mèo, luôn cho tụi nhỏ một cuộc đời an toàn, hồn nhiên. Hãy để Pet Up đồng hành cùng bạn trên con đường nâng cao đời sống phúc lợi động vật cho các con ???????????? ???? Showroom: K19/91 Mai Xuân Thưởng, Đà Nẵng ???? Thời gian mở cửa: 08:00 - 20:00 hàng ngày ???? Hotline: 0908 914 333</p>', '33de45cf0f0a3085ad1ae178231929a0.jpg', 'còn hàng', 0, 'Giỏ vận chuyển chó mèo nhựa trong suốt nhìn ngắm thế giới', 4),
(20, 'Giỏ vận chuyển chó mèo', 200, 20, 10, '<p>Chất liệu: nhựa trong suốt Phụ kiện: có quai xách tay và quai đeo vai Giá tiền: 200.000 VNĐ ****** Pet Up cám ơn bạn đã yêu thương chó mèo, luôn cho tụi nhỏ một cuộc đời an toàn, hồn nhiên. Hãy để Pet Up đồng hành cùng bạn trên con đường nâng cao đời sống phúc lợi động vật cho các con ???????????? ???? Showroom: K19/91 Mai Xuân Thưởng, Đà Nẵng ???? Thời gian mở cửa: 08:00 - 20:00 hàng ngày ???? Hotline: 0908 914 333</p>', '33de45cf0f0a3085ad1ae178231929a0.jpg', 'Còn hàng', 0, 'Giỏ vận chuyển chó mèo nhựa trong suốt nhìn ngắm thế giới', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhannuoi`
--

CREATE TABLE `tbl_nhannuoi` (
  `idNN` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idPet` int(11) NOT NULL,
  `ngaynhan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhannuoi`
--

INSERT INTO `tbl_nhannuoi` (`idNN`, `idUser`, `idPet`, `ngaynhan`) VALUES
(2, 1, 10, '2023-12-16 11:05:54'),
(3, 1, 10, '2024-01-06 09:06:35'),
(4, 1, 10, '2024-01-06 09:16:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_pet`
--

CREATE TABLE `tbl_pet` (
  `idPet` int(11) NOT NULL,
  `tenPet` varchar(255) NOT NULL,
  `idDMP` int(11) NOT NULL,
  `gioiTinh` varchar(255) NOT NULL,
  `doTuoi` varchar(255) NOT NULL,
  `trietSan` varchar(255) NOT NULL,
  `tiemPhong` varchar(255) NOT NULL,
  `tinhTrangPet` varchar(255) NOT NULL,
  `imgpet` text NOT NULL,
  `motaPet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_pet`
--

INSERT INTO `tbl_pet` (`idPet`, `tenPet`, `idDMP`, `gioiTinh`, `doTuoi`, `trietSan`, `tiemPhong`, `tinhTrangPet`, `imgpet`, `motaPet`) VALUES
(1, 'Báo', 2, 'Đực', 'Trẻ', 'Rồi', 'Chưa', 'Chưa được nhận nuôi', 'Baoo04 (1).jpg', '<p>Chú Báo vàng mắt to mồm to này được tụi mình nhận về từ năm ngoái khi vô tình em được báo tin bắt gặp bị bỏ rơi ở sau chùa. Báo nhà ta siêu thích quậy, quậy banh nhà. Mồm lại to, í a í ới đòi đi chơi, không bao giờ thích nằm im một chỗ, cứ có cơ hội thì dù phải bò lổm nhổm ẻm cũng bò đi phá làng phá xóm.</p><p>Nói cho vui vậy để mọi người có thể hình dung được độ đáng yêu và tinh nghịch của chú Báo này, rồi có duyên thì ba mẹ nào đến rước Báo về luôn càng tốt nhé! Báo nhà ta tinh nghịch nhưng được cái giàu tình cảm, mà quậy thì cũng không tới nỗi phá nhà đâu nên ba mẹ đừng lo, chỉ cần chuẩn bị túi đến rước Báo về thôi ba mẹ nhaaa!</p>'),
(2, 'Bột', 1, 'Không rõ', 'Trẻ', 'Rồi', 'Rồi', 'Chưa được nhận nuôi', '1168299825266 (1).jpg', '<p>Ở một góc nào đó trong chiếc thùng đầy rác, tiếng rên rỉ cầu cứu của Bột được Hội tụi mình phát hiện khi bạn nhỏ bị người ta cột trong bao ni lông và vứt bỏ. Chắc hẳn là em hoảng sợ lắm, mọi thứ xung quanh thì tối đen như mực, tiếng người nói cười rôm rả bên ngoài, nhưng chẳng mấy ai quan tâm đến tiếng cầu cứu của em.</p><p>Và tất nhiên, khi ở một nơi chỉ toàn rác, không được ăn uống, chăm sóc thì sức khỏe của em cũng không khả quan mấy. Bột bị tiêu chảy, đi phân ra sán và được lưu trú tại phòng khám để điều trị. Đến hiện tại thì sức khỏe của Bột đã ổn định hơn rất nhiều, ăn khỏe, ngủ khỏe.</p><p>Bột và Quậy đã bất hạnh từ lúc sinh ra, chỉ mong rằng đoạn đường tiếp theo sẽ có ba mẹ thương và che chở cho em. Hãy liên lạc ngay cho Hội nếu ba mẹ muốn dắt Bột về nhà nha.</p>'),
(3, 'Mýt', 1, 'Không rõ', 'Trẻ ', 'Chưa', 'Rồi', 'Chưa được nhận nuôi', 'myt (1).jpg', '<p>Những bé mèo hoang hầu như đều có chung vấn đề là đói khát và bệnh tật bao vây. Mýt của tụi mình cũng vậy, nhưng tình trạng của bé còn thảm hơn. Bé bị lủng ruột nặng, vùng dưới bụng và ngực của bé bầm tím do vết thương gây tràn khí dưới da làm tổn thương. Bác sĩ không thể phẩu thuật cho bé vì sức khỏe của bé quá yếu, chỉ có thể can thiệp điều trị nội khoa. Tụi mình chỉ biết làm hết sức có thể để giúp Mýt vượt qua.</p><p>Trải qua hơn một tháng điều trị, sự kiến cường đã giúp Mýt đã phục hồi hoàn toàn. Hiện giờ Mýt có diện mạo vô cùng bảnh bao. Bé đã đủ chuẩn về với chủ rồi. Mýt xứng đáng có cuộc sống êm đềm bên ba mẹ mà. Nếu yêu Mýt, ba mẹ hãy inbox cho hội nhé.</p>'),
(4, 'Sầu', 2, 'Đực', 'Trẻ ', 'Chưa', 'Chưa', 'Chưa được nhận nuôi', 'sau`.jpg', '<p>Nay con đã gần 1 tuổi, “nhớn” rồi nên các anh chị foster đã cai sữa và tập cho con ăn được thức ăn mềm rồi. Vì đã trưởng thành, Sầu nghĩ mình nên tự lập, kiếm cho mình một gia đình mới thế nên hàng ngày con luôn chăm chỉ luyện tập nề nếp sinh hoạt để mau mau về nhà mới với ba mẹ nè.</p><p>Sầu cực kỳ \"cute\" luôn nhé ba mẹ, tính tình lại ngoan ngoãn, quấn người. Đặc biệt, con có sở thích chạy lon ton chỗ này chỗ kia để khám phá mọi thứ xung quanh rồi đòi cưng nựng. Sầu con nhỏ nên đôi khi còn nhiều thứ phỉa dạy dỗ. Cơ mà thế có khi lại hay vì con còn nhỏ nên dễ dạy, lại dễ làm quen nhà mới nên hứa hẹn sẽ là một bé ngoan trong tương lai đó.</p>'),
(5, 'Tam Tam', 1, 'Đực', 'Trẻ ', 'Rồi', 'Rồi', 'Chưa được nhận nuôi', 'tamtam.jpg', '<p>Xin chào cô chú! Xin chào các bạn! Đây là em bé Tam Tam siêu cấp đáng yêu của Hội chúng mình đây!, Nngoài việc thích ăn uống, ngủ, chơi thì con có một sở thích rất đặc biệt là “nói”. Không biết các bạn mèo khác như thế nào, chứ riêng Tam thì chỉ có lúc ngủ thì mới chịu im lặng thôi. Chẳng phải vì đòi ăn, đòi uống, đòi chơi, mà chỉ vì em nó rất thích nói nên cứ “meo meo” suốt thôi. Nhưng sự đáng yêu này chẳng gây phiền đến ai mà lại còn khiến cho mọi người xung quanh Tam cảm thấy rộn ràng và vui vẻ hơn hẳn</p><p>Tam Tam có bộ lông mượt mà, xinh xắn, lại còn ăn khỏe, ngủ khỏe, chơi cũng khỏe nốt. Và đặc biệt còn đang trong trạng thái sẵn sàng đợi ba mẹ đến rước đó nha. Nếu ba mẹ muốn căn nhà mình luôn ngập tràn tiếng cười thì hãy mau mau đón Tam Tam về nhen. Tam Tam đợi tin ba mẹ ạ.</p>'),
(6, 'Sữa', 1, 'Đực', 'Trẻ ', 'Chưa', 'Chưa', 'Chưa được nhận nuôi', 'sua.jpg', '<p>Sữa, cục lông đen trắng này là thành viên mới nhà Cứu trợ, có hơi nhút nhát rụt rè nhưng được cái sống tình cảm, tính tình lại ôn hòa, dễ chịu</p><p>Lúc mới nhận em về, Sữa ốm lắm, chỉ có da bọc xương thôi, trên người lại chi chít vết thương nhìn rất xót. May mắn là em không bị vấn đề về đường tiêu hóa, ăn khỏe và sinh hoạt sạch sẽ, gọn gàng. Ba mẹ nào lỡ mê Sữa rồi thì nhắn tin ngay cho Hội để đón bé về nha.</p>'),
(7, 'Mòe', 2, 'Đực', 'Trẻ ', 'Rồi', 'Rồi', 'Chưa được nhận nuôi', 'Meo.jpg', '<p>\"Mèo\" là thiên thần may mắn mà tụi mình giữ được trong năm đứa nhỏ, được đặt trước cửa phòng khám thú y khi còn chưa kịp mở mắt. Mang đứa nhỏ về thì tụi mình cũng thấp tha thấp thỏm lo sợ, \"Mèo\" có dấu hiệu chân bị sưng và đi khó khăn, còn không được vệ sinh sạch sẽ trông rất nhem nhuốc, đáng thương.</p><p>Bằng một cách nào đó, \"Mèo\" như hiểu được số phận của mình nên cũng rất phấn đấu cố gắng để lớn lên mỗi ngày. Bạn nhỏ được chăm sóc cẩn thận, nhận dinh dưỡng ổn định, được sưởi ấm và vệ sinh nên trông giờ đây cũng bụ bẫm, đáng yêu. Bạn nhỏ như tự biết rằng đây là gia đình duy nhất của mình nên cứ quấn lấy nhau mãi. Bây giờ, sức khoẻ của em ổn định, trộm vía là hơi mũm mĩm nha ba mẹ, cả ngày cứ lon ton chạy đuổi bắt khắp nơi, nô đùa ầm ĩ. Mong rằng những hình ảnh \"Mèo\" sẽ làm rung động trái tim của ba mẹ và sẽ đưa con về cùng một nhà.</p>'),
(8, 'Sóc', 1, 'Đực', 'Trẻ ', 'Chưa', 'Rồi', 'Chưa được nhận nuôi', 'soc.jpg', '<p>hmm</p>'),
(9, 'Bi', 2, 'Đực', 'Lớn', 'Rồi', 'Rồi', 'Chưa được nhận nuôi', 'Bi.jpg', '<p>Bi là đứa nhỏ bị gẫy chân vì tai nạn xe tông. Không dừng lại ở đó, phần xương bả vai của em cũng bị rạn, không thể đóng đinh hay bó bột mà chỉ có thể tiêm thuốc hỗ trợ và hạn chế đi lại để phục hồi. Em đau nhiều lắm, nhưng cũng thật may là những ngày dài lê thê phải nằm điều trị ở phòng khám cũng đã kết thúc rồi. Em được xuất viện, mạnh khỏe vui tươi và tinh thần thì đã sẵn sàng để về với gia đình mới hơn bao giờ hết.</p><p>&nbsp;</p><p>Thực sự mong là năm nay em có thể được ăn tết cùng gia đình mới lắm ạ, như vậy thì chúng mình có thể tập trung chăm sóc những trường hợp khác nặng hơn. Bởi càng gần cuối năm, tình trạng quá tải của Team chó lại ngày càng trầm trọng...</p><p>&nbsp;</p><p>Mọi người hãy nhớ tên em nhé, em là Bi ạ. Cũng không có gì để các ba mẹ tương lai phải lăn tăn về em đâu nha. Vì em dễ ăn và dễ chăm lắm, đã thế lại còn dễ gần, tình cảm, lúc nào cũng thích chơi đùa chạy nhảy. Dễ thương nhiều như vậy mà ba mẹ thấy cưng rồi thì mau mau đến đón Bi đi nghe.</p>'),
(10, 'Mun', 2, 'Đực', 'Trưởng Thành', 'Rồi', 'Rồi', 'Chưa được nhận nuôi', 'Mun.jpg', '<p>Mun - chú chó từng bị chủ bỏ rơi cùng bệnh ghẻ khắp người. Khi Mun về Hội, tụi mình phát hiện bé còn bị thêm bệnh nhiễm trùng máu. Sau rất nhiều cuộc điều trị, cùng với sự nỗ lực của bác sĩ và các anh chị foster thì nay Mun đã đủ chuẩn được đi chủ rồi, bé đang rất mong chờ xem mặt ba mẹ của mình đấy.</p><p>Tuy Mun từng bị chủ bỏ rơi nhưng con vẫn không mất niềm tin vào con người. Mun rất dễ gần, ở con luôn mang lại năng lượng tích cực khiến ai cũng vui lây. Nụ cười rất ấm áp, tính tình hiền lành của con sẽ làm cho ba mẹ muốn sà vào ôm lấy con ngay thôi.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_report`
--

CREATE TABLE `tbl_report` (
  `id_RP` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `noidung` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `ngayRP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_report`
--

INSERT INTO `tbl_report` (`id_RP`, `name`, `mail`, `location`, `noidung`, `latitude`, `longitude`, `ngayRP`) VALUES
(1, 'Thạcc', 'ducthanh300904@gmail.com', 'dfasfdsa', 'fdsafdsa', '15.973343822717423', '108.25188220410533', '06:18:54pm 22/12/2023'),
(2, 'Thạcc', 'ducthanh300904@gmail.com', 'hmmmm', 'ĐH VN', '15.97334957220988', '108.25189364135345', '07:27:27pm 22/12/2023'),
(3, 'ewqewq', 'ducthanh3009@gmail.com', 'DHVN', 'hmmm', '15.973314501530094', '108.25189364135345', '07:27:27pm 22/12/2023'),
(4, 'David G Tech', ' davidgarciasaragih7@gmail.com', 'INDO', 'Insert HTML Form Data With Geolocation API Coordinates Into MySQL & Display It On Google Maps In Table | JavaScript Location Tracking | Detect Location (Latitude and Longitude) JavaScript | PHP JavaScript MySQL', '-6.1318385', '106.7355355', '07:27:27pm 22/12/2023'),
(5, 'Thạnh', 'ducthanh300904@gmail.com', 'Tam Kỳ', 'nhà riêng', '15.568207687855466', '108.47829831172096', '1:41:44am 23/12/2023'),
(6, 'Nguyễn Thị Quỳnh Như', 'quynhu2912@gmail.com', 'hmmm', '', '15.974579378530251', '108.25207569246612', '01:30:01am 23/12/2023'),
(7, 'Thạcc', 'ducthanh300904@gmail.com', 'mmm', '', '15.568186518339344', '108.47837411557745', '03:48:12am 30/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `tenUser` varchar(255) NOT NULL,
  `accountUser` varchar(255) NOT NULL,
  `passUser` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `addressUser` text NOT NULL,
  `telUser` varchar(255) NOT NULL,
  `decen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `tenUser`, `accountUser`, `passUser`, `emailUser`, `addressUser`, `telUser`, `decen`) VALUES
(1, 'Thạcc', 'dukthacc', '123', 'ducthanh300904@gmail.com', 'Tam Kỳ - Quảng Nam', '0345914149', 0),
(2, 'Thạnh', 'dukkthacc', '300904', 'ducthanh3009@gmail.com', 'Hội An - Quảng Nam', '0392989038', 0),
(3, 'Nguyễn Thị Quỳnh Như', 'quynhu2912', '123', 'quynhu2912@gmail.com', 'Duy Xuyên - Quảng Nam', '123', 0),
(4, 'Huỳnh Quang', 'quangngoo', '123', 'quangnoo@gmail.com', 'Thăng Bình - Quảng Nam', '987', 0),
(5, 'Doãn Đức Dy', 'dydoan', '123', 'dydoan@gmail.com', 'Điện Bàn - Quảng Nam', '456', 0),
(6, 'TQN', 'wuynhu255', '25052004', 'wynhu255@gmail.com', 'Tam Kỳ - Quảng Nam', '0854008327', 0),
(7, 'Nguyễn Đức Thạnh', 'Thacc010171', '123', 'thacc01071@gmail.com', 'Tam Kỳ - Quảng Nam', '0854008327', 0),
(8, 'Phạm Đăng Trình', 'dangtrinhngoo', 'dangtrinh123', 'dangtrinhng0@gmail.com', 'Điện Bàn - Quảng Nam', '0345914149', 0),
(9, 'Đặng Ngọc Phú', 'ngocphue', 'qưe', 'ngocphu@gmail.com', 'Tam Kỳ - Quảng Nam', '123', 0),
(10, 'Thak', '1', '1', 'ducthanh300904@gmail.comm', 'Haà Nội', '123', 0),
(11, 'Test', 'admin', '132', 'safayetshawn95@gmail.com', 'thanh3009@gmail.com', '0345914149', 1),
(12, 'Truyền', 'dukkthaccc', '123', 'ducthanh300904@gmail.comm', 'Tam Kỳ - Quảng Nôm', '03459141499', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`idBill`),
  ADD KEY `lk_user_cart` (`idUser`);

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`idBinhLuan`),
  ADD KEY `lk_bl_sp` (`idSP`),
  ADD KEY `lk_bl_user` (`idUser`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `lk_cart_user` (`idUser`),
  ADD KEY `lk_cart_pro` (`idSP`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_pet`
--
ALTER TABLE `tbl_danhmuc_pet`
  ADD PRIMARY KEY (`idDanhMucPet`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  ADD PRIMARY KEY (`idDanhMuc`);

--
-- Chỉ mục cho bảng `tbl_danhsach_sp`
--
ALTER TABLE `tbl_danhsach_sp`
  ADD PRIMARY KEY (`idSanPham`),
  ADD KEY `lk_sp_dm` (`idDM`);

--
-- Chỉ mục cho bảng `tbl_nhannuoi`
--
ALTER TABLE `tbl_nhannuoi`
  ADD PRIMARY KEY (`idNN`),
  ADD KEY `lk_pet_user` (`idUser`),
  ADD KEY `lk_pet_pet` (`idPet`);

--
-- Chỉ mục cho bảng `tbl_pet`
--
ALTER TABLE `tbl_pet`
  ADD PRIMARY KEY (`idPet`),
  ADD KEY `lk_pet_dm` (`idDMP`);

--
-- Chỉ mục cho bảng `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`id_RP`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `idBill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `idBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_pet`
--
ALTER TABLE `tbl_danhmuc_pet`
  MODIFY `idDanhMucPet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_sp`
--
ALTER TABLE `tbl_danhmuc_sp`
  MODIFY `idDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsach_sp`
--
ALTER TABLE `tbl_danhsach_sp`
  MODIFY `idSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_nhannuoi`
--
ALTER TABLE `tbl_nhannuoi`
  MODIFY `idNN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_pet`
--
ALTER TABLE `tbl_pet`
  MODIFY `idPet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `id_RP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD CONSTRAINT `lk_user_cart` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`idUser`);

--
-- Các ràng buộc cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD CONSTRAINT `lk_bl_sp` FOREIGN KEY (`idSP`) REFERENCES `tbl_danhsach_sp` (`idSanPham`),
  ADD CONSTRAINT `lk_bl_user` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`idUser`);

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `lk_cart_billl` FOREIGN KEY (`id_bill`) REFERENCES `tbl_bill` (`idBill`),
  ADD CONSTRAINT `lk_cart_pro` FOREIGN KEY (`idSP`) REFERENCES `tbl_danhsach_sp` (`idSanPham`),
  ADD CONSTRAINT `lk_cart_user` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`idUser`);

--
-- Các ràng buộc cho bảng `tbl_danhsach_sp`
--
ALTER TABLE `tbl_danhsach_sp`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`idDM`) REFERENCES `tbl_danhmuc_sp` (`idDanhMuc`);

--
-- Các ràng buộc cho bảng `tbl_nhannuoi`
--
ALTER TABLE `tbl_nhannuoi`
  ADD CONSTRAINT `lk_pet_pet` FOREIGN KEY (`idPet`) REFERENCES `tbl_pet` (`idPet`),
  ADD CONSTRAINT `lk_pet_user` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`idUser`);

--
-- Các ràng buộc cho bảng `tbl_pet`
--
ALTER TABLE `tbl_pet`
  ADD CONSTRAINT `lk_pet_dm` FOREIGN KEY (`idDMP`) REFERENCES `tbl_danhmuc_pet` (`idDanhMucPet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
