-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 10, 2022 lúc 08:23 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_bh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'duongtkqn1999'),
('adminmin', 'duong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `Ma_DM` int(10) NOT NULL,
  `Ten_DM` text NOT NULL,
  `MoTa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`Ma_DM`, `Ten_DM`, `MoTa`) VALUES
(1, 'Laptop', 'không'),
(2, 'Sản phẩm của apple', 'không'),
(3, 'PC-Màn hình máy tính', 'không'),
(4, 'PC-Linh kiện máy tính', 'không'),
(5, 'PC-Game and Stream', 'không'),
(6, 'PC-Phụ kiện', 'không'),
(7, 'Điện thoại và phụ kiện', 'không'),
(8, 'Máy ảnh máy quay phim', 'không'),
(9, 'Điện máy điện gia dụng', 'không'),
(11, 'Thiết bị âm thanh', 'không');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `Ma_HD` int(10) NOT NULL,
  `NgayMua` date NOT NULL,
  `MaKH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `Ma_HD` int(10) NOT NULL,
  `Ma_HDCT` int(10) NOT NULL,
  `Ma_SP` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `GiaCa` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Ma_KH` int(10) NOT NULL,
  `Ten_KH` text NOT NULL,
  `SDT` text NOT NULL,
  `DiaChi` text NOT NULL,
  `Email` text NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Ma_KH`, `Ten_KH`, `SDT`, `DiaChi`, `Email`, `user`, `pass`) VALUES
(6, 'duong', '0867706651', '09 Phu Thanh 1', 'duongtkqn1999@gmail.com', 'duongtekoa', 'duongtkqn1999'),
(11, 'viet', '0905506881', '05 Phu Thanh 1', 'duongtk59@yahoo.com', 'vietsatda', 'viet'),
(12, 'noname', '0905506881', '09 Phu Thanh 1', 'duong@gmail.com', 'duongkid', 'duongkid'),
(13, 'viet', '0905591127', '05 Phu Thanh 1', 'vietsatda@gamil.com', 'vietngao', 'viet'),
(14, 'duongnof', '0911379945', '09 Phu Thanh 1', 'duonga@gmail.com', 'duongnof', 'duongnof'),
(15, 'Dương Nguyễn', '0587374131', '09 Phu Thanh 1', 'duongtekoa@gmail.com', 'duongnguyen', 'duongnguyen'),
(17, 'duong', '0867706651', '09 Phu Thanh 1', 'duongtk59@yahoo.com', 'bakegian', 'duong'),
(18, 'duong', '0905591127', '09 Phu Thanh 1', 'duongtkqn1999@gmail.com', 'duongduong', 'duongtkqn1999'),
(19, 'duong', '0867706651', '09 Phu Thanh 1', 'duongtkqn1999@gmail.com', 'duongnonono', 'duong'),
(20, 'duongqn', '0867706651', '09 Phu Thanh 1', 'duongtkqn1999@gmail.com', 'duongqn', 'duong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `Ma_SP` int(10) NOT NULL,
  `Ten_SP` text NOT NULL,
  `HinhAnh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Gia` decimal(10,2) NOT NULL,
  `GiaCu` decimal(10,2) NOT NULL,
  `MoTa` text NOT NULL,
  `Ma_DM` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`Ma_SP`, `Ten_SP`, `HinhAnh`, `Gia`, `GiaCu`, `MoTa`, `Ma_DM`) VALUES
(1, 'máy xông tinh dầu', 'unnamed (17).webp', '17000000.00', '1800000.00', 'không', 12),
(2, 'PC Acer Aspire', 'unnamed (6).webp', '11600000.00', '12000000.00', 'không', 3),
(3, 'Màn Hình LG 24\" 24MK600', 'unnamed (9).webp', '4400000.00', '5400000.00', 'không', 4),
(4, 'INTEL Core i9-12900K', 'unnamed (10).webp', '16200000.00', '18200000.00', 'không', 5),
(5, 'Bàn phím cơ Dareu EK87', 'unnamed (11).webp', '529000.00', '600000.00', 'không', 6),
(6, 'Ghế MSI', 'unnamed (12).webp', '47000000.00', '5000000.00', 'không', 7),
(7, 'iphone 13 128GB', 'unnamed (13).webp', '20000000.00', '34000000.00', 'không', 8),
(8, 'máy ảnh CANON', 'unnamed (14).webp', '5000000.00', '6000000.00', 'không', 9),
(9, 'Bếp điện từ  Toshiba', 'unnamed (15).webp', '1200000.00', '1600000.00', 'không', 10),
(10, 'tai nghe zidliZH12S', 'unnamed (16).webp', '320000.00', '450000.00', 'không', 11),
(12, 'phát wifi 4G', 'unnamed (18).webp', '1000000.00', '1100000.00', 'không', 12),
(14, 'máy photo', 'unnamed (19).webp', '40000000.00', '41000000.00', 'không', 13),
(15, 'ACER Nitro 5 AN515-45-R9SC', 'unnamed (1).webp', '37000000.00', '41000000.00', 'không', 1),
(16, 'Macbook Pro 2018 13', 'unnamed (3).webp', '30000000.00', '33000000.00', 'không', 1),
(17, 'IPHONE', 'unnamed (13).webp', '20000000.00', '30000000.00', 'không', 2),
(20, 'ghe', 'unnamed (12).webp', '5000000.00', '6000000.00', 'khoong', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `So_DT` int(11) NOT NULL,
  `Gmail` text NOT NULL,
  `Username` text NOT NULL,
  `Password` int(30) NOT NULL,
  `HoTen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `user` (`user`) USING HASH;

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`Ma_DM`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Ma_HD`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`Ma_HDCT`),
  ADD UNIQUE KEY `Ma_SP` (`Ma_SP`),
  ADD KEY `Ma_HD` (`Ma_HD`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Ma_KH`),
  ADD UNIQUE KEY `user` (`user`) USING HASH;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Ma_SP`),
  ADD KEY `Ma_DM` (`Ma_DM`),
  ADD KEY `Ma_DM_2` (`Ma_DM`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Ma_KH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`Ma_HD`) REFERENCES `hoadonchitiet` (`Ma_HD`);

--
-- Các ràng buộc cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`Ma_HD`) REFERENCES `hoadon` (`Ma_HD`),
  ADD CONSTRAINT `hoadonchitiet_ibfk_2` FOREIGN KEY (`Ma_SP`) REFERENCES `sanpham` (`Ma_SP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
