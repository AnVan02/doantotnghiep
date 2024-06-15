-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2022 lúc 03:50 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_gongcha`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `Mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`Mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES
(1, 2, 1, '2022-06-09', 'ngon quá'),
(2, 2, 2, '2022-06-03', 'ngon quá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(12) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `dongia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `nhom` int(4) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluongxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `size` text NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `hinh`, `nhom`, `maloai`, `dacbiet`, `soluongxem`, `ngaylap`, `mota`, `soluongton`, `size`, `giamgia`) VALUES
(1, 'Trà Sữa Trân Châu Hoàng Kim', 52000, '1.png', 0, 1, b'1', 2, '2022-06-25', 'Dòng thức uống đặc biệt kết hợp giữa trà nguyên chất với lớp milk foam béo cùng vị mặn nhẹ đặc trưng mang đến điểm nhấn sáng tạo cho một thức uống quen thuộc.', 1, 'L', 30000),
(2, 'Toffee Oolong Smoothie', 52000, '2.png', 0, 1, b'1', 2, '2022-06-17', 'Dòng thức uống đặc biệt kết hợp giữa trà nguyên chất với lớp milk foam béo cùng vị mặn nhẹ đặc trưng mang đến điểm nhấn sáng tạo cho một thức uống quen thuộc.', 0, 'M', 0),
(3, 'Strawberry Choco Milk Tea', 60000, '3.png', 0, 1, b'1', 2, '2022-06-02', 'Một trong những dòng thức uống nổi bật với nhiều lựa chọn độc đáo.', 4, 'S', 0),
(4, 'Strawberry Choco Smoothie', 60000, '4.png', 0, 1, b'1', 9, '2022-06-09', 'Gong Cha mong muốn phục vụ các loại trà tốt nhất cho thực khách, cũng như chính tên gọi của thương hiệu.', 58, 'S', 0),
(5, 'Sữa Tươi Long Nhãn Táo Đỏ', 61000, '5.png', 0, 1, b'1', 2, '2022-06-03', 'Tên món	:Sữa Tươi Long Nhãn Táo Đỏ', 50, 'L', 0),
(6, 'Xoài Matcha Latte', 65000, '6.png', 0, 2, b'1', 3, '2022-06-03', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 100, 'M', 30000),
(7, 'Okinawa Latte', 75000, '7.png', 2, 1, b'1', 2, '2022-06-03', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 100, 'L', 50000),
(8, 'Trà Đen Gong Cha', 65000, '8.png', 3, 5, b'1', 2, '2022-06-03', 'thức uống hấp dẫn và đa dạng từ Gong Cha', 102, 'S', 50000),
(9, 'Trà Sữa Trân Châu Hoàng Kim', 60000, '9.png', 1, 2, b'1', 1, '2022-06-04', 'thức uống hấp dẫn và đa dạng từ Gong Cha', 500, 'L', 0),
(10, 'Trà Sữa Trân Châu Đen', 50000, '10.png', 1, 10, b'1', 3, '2022-06-17', 'thức uống hấp dẫn và đa dạng từ Gong Cha', 10, 'L', 50000),
(11, 'Trà Đen', 45000, '11.png', 3, 10, b'1', 2, '2022-06-03', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 120, 'M', 0),
(12, 'Trà Xanh', 45000, '12.png', 3, 11, b'1', 3, '2022-06-18', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 120, 'M', 0),
(13, 'Trà Alisan', 60000, '25.png', 2, 2, b'1', 2, '2022-06-01', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 120, 'M', 0),
(14, 'Strawberry Choco Milk Tea', 19000, '14.png', 2, 2, b'1', 1, '2022-06-09', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 5, 'S', 0),
(15, 'Matcha Đá Xay', 50000, '15.png', 0, 2, b'1', 1, '2022-06-03', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 2, 'M', 0),
(16, 'Yakult Đào Đá Xay', 60000, '16.png', 2, 1, b'1', 1, '2022-06-04', ' thức uống hấp dẫn và đa dạng từ Gong Cha', 1, 'L', 0),
(17, 'Chocolate Đá Xay', 50000, '17.png', 1, 2, b'1', 1, '2022-06-04', 'Thức uống đặc biệt Gong Cha', 5, 'L', 0),
(18, 'Trà Xanh Long Nhãn Táo Đỏ', 60000, '25.png', 1, 1, b'1', 3, '2022-06-01', 'Thức uống đặc biệt Gong Cha', 50, 'M', 10000),
(19, 'Trà Oolong Vải', 75000, '28.png', 2, 1, b'1', 5, '2022-06-30', 'Thức uống sáng tạo', 5, 'S', 10000),
(20, 'Trà Đen Đào', 75000, '30.png', 0, 1, b'1', 1, '2022-06-30', 'Thức uống sáng tạo', 2, 'M', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `size` text NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(1, 'kito', 'kito', '123456', 'nam@gmail.com', '', '', 0),
(2, 'RiKo', 'Ri', '123', 'ri@gmail.com', '', '', 0),
(3, 'nano', 'na', '123', 'nano@gmail.com', '', '', 0),
(4, 'mino', 'aaaa', '123', 'mino@gmail.com', '', '', 0),
(5, 'hihi', 'haha', '123', '123@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Trà Trái Cây ', 4),
(2, 'Trà Sữa Dolce ', 2),
(3, 'LATTE SERIES', 2),
(4, ' ĐẶC BIỆT ', 3),
(5, 'TRÀ SỮA', 2),
(6, 'TRÀ NGUYÊN CHẤT', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `tenloai`, `idmenu`) VALUES
(2, ' ĐÁ XAY', 2),
(3, 'SÁNG TẠO', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang chủ ', 'index.php'),
(2, 'Trà ', ''),
(3, 'TRÀ NGUYÊN CHẤT', 'TRÀ NGUYÊN CHẤT'),
(4, 'Liên hệ ', 'View/lienhe.php');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`Mabl`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `Mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
