-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 07, 2023 lúc 09:15 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyvexe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('nhan vien', 'nhan vien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benden`
--

CREATE TABLE `benden` (
  `id` int(11) NOT NULL,
  `tenben` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `benden`
--

INSERT INTO `benden` (`id`, `tenben`) VALUES
(1, 'Cần Thơ'),
(2, 'Cà Mau'),
(3, 'Vũng Tàu'),
(4, 'Rạch Giá'),
(5, 'Châu Đốc'),
(6, 'Đà Lạt'),
(7, 'TP.Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bendi`
--

CREATE TABLE `bendi` (
  `id` int(3) NOT NULL,
  `tenbendi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bendi`
--

INSERT INTO `bendi` (`id`, `tenbendi`) VALUES
(1, 'Cần Thơ'),
(2, 'Cà Mau'),
(3, 'Vũng Tàu'),
(4, 'Rạch Giá'),
(5, 'Châu Đốc'),
(6, 'Đà Lạt'),
(7, 'TP.Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chieudi`
--

CREATE TABLE `chieudi` (
  `id` int(3) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chieudi`
--

INSERT INTO `chieudi` (`id`, `mota`) VALUES
(1, 'Một chiều'),
(2, 'Khứ Hồi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id` int(255) NOT NULL,
  `soghe` varchar(255) NOT NULL,
  `toa_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id`, `soghe`, `toa_id`) VALUES
(1, '01', ''),
(2, '02', ''),
(3, '03', ''),
(4, '04', ''),
(5, '05', ''),
(6, '06', ''),
(7, '07', ''),
(8, '08', ''),
(9, '09', ''),
(10, '10', ''),
(11, '11', ''),
(12, '12', ''),
(13, '13', ''),
(14, '14', ''),
(15, '15', ''),
(16, '16', ''),
(17, '17', ''),
(18, '18', ''),
(19, '19', ''),
(20, '20', ''),
(21, '21', ''),
(22, '22', ''),
(23, '23', ''),
(24, '24', ''),
(25, '25', ''),
(26, '26', ''),
(27, '27', ''),
(28, '28', ''),
(29, '29', ''),
(30, '30', ''),
(31, '31', ''),
(32, '32', ''),
(33, '33', ''),
(34, '34', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(255) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `cmt` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenkh`, `cmt`, `ngaysinh`, `sdt`, `email`, `password`) VALUES
(44, 'khoi', '12345', '2023-04-03', '0747582233', 'khoi@gmail.com', '12345'),
(45, 'xuandai', '123455678', '2023-04-02', '0747582255', 'dai@gmail.com', 'daixinhdep'),
(46, 'ngoc', '4959696', '2023-04-01', '0747582235', 'ngoc@gmail.com', '123456'),
(47, 'pham phuoc school', '324243234324', '2023-04-15', '0982373247', 'phuotruong99@gmail.com', '1234'),
(48, 'pham phuoc school', '324243234324', '0000-00-00', '0982373247', 'phuoctruong727@gmail.com', NULL),
(49, 'khoi', '12345', '0000-00-00', '0747582233', 'khoi@gmail.com', NULL),
(50, 'khoi', '12345', '0000-00-00', '0747582233', 'khoi@gmail.com', NULL),
(51, 'khoi', '12345', '0000-00-00', '0747582233', 'khoi@gmail.com', NULL),
(52, 'khoi', '12345', '0000-00-00', '0747582233', 'khoi@gmail.com', NULL),
(53, 'khoi', '12345', '0000-00-00', '0747582233', 'khoi@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `id` int(255) NOT NULL,
  `malichtrinh` varchar(255) NOT NULL,
  `bendi_id` int(3) NOT NULL,
  `benden_id` int(3) DEFAULT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL,
  `khoihanh` varchar(255) NOT NULL,
  `maxe` int(3) DEFAULT NULL,
  `chieudi` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinh`
--

INSERT INTO `lichtrinh` (`id`, `malichtrinh`, `bendi_id`, `benden_id`, `ngaydi`, `ngayve`, `khoihanh`, `maxe`, `chieudi`) VALUES
(1, 'LT01', 1, 2, '2023-04-01', '2023-04-01', '10:00 AM', 4, 1),
(2, 'LT02', 1, 2, '2023-04-01', '2023-04-01', '13:30 PM', 5, 2),
(3, 'LT03', 1, 3, '2023-04-01', '2023-04-01', '8:00 AM', 6, 1),
(4, 'LT04', 1, 4, '2023-04-01', '2023-04-01', '10:00 AM', 7, 1),
(5, 'LT05', 1, 4, '2023-04-01', '2023-04-01', '11:30 AM', 8, 2),
(6, 'LT06', 1, 6, '2023-04-01', '2023-04-01', '7:00 AM', 9, 1),
(7, 'LT07', 1, 7, '2023-04-01', '2023-04-01', '13:00 PM', 10, 1),
(8, 'LT08', 1, 7, '2023-04-01', '2023-04-01', '8:00 AM', 11, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(255) NOT NULL,
  `manv` varchar(255) NOT NULL,
  `tennv` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `manv`, `tennv`, `ngaysinh`, `sdt`, `email`) VALUES
(1, 'NV01', 'Gia Huy', '2001-08-25', '1111111111', 'admin@gmail.com'),
(2, 'NV02', 'Minh Ngọc', '2002-07-20', '222222222', 'ngoc@gmail.com'),
(3, 'NV03', 'Xuân Đài', '2002-02-12', '333333333', 'dai@gmail.com'),
(4, 'NV04', 'Hương Khoa', '2002-04-16', '444444444', 'khoa@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudatve`
--

CREATE TABLE `phieudatve` (
  `id` int(3) NOT NULL,
  `khachhang_id` varchar(255) DEFAULT NULL,
  `tentoa_id` varchar(255) NOT NULL,
  `ghe_id` varchar(255) DEFAULT NULL,
  `lichtrinh_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudatve`
--

INSERT INTO `phieudatve` (`id`, `khachhang_id`, `tentoa_id`, `ghe_id`, `lichtrinh_id`) VALUES
(1, '1', '4', '4', 2),
(2, '2', '2', '2', 2),
(3, '3', '2', '1', 2),
(4, '4', '3', '24', 3),
(5, '5', '2', '25', 3),
(13, '22', '1', '1', 1),
(14, '23', '1', '4', 1),
(15, '24', '1', '3', 1),
(16, '25', '1', '1', 1),
(17, '26', '1', '2', 1),
(18, '27', '2', '7', 1),
(19, '28', '2', '7', 1),
(20, '31', '1', '9', 1),
(21, '32', '1', '6', 1),
(22, '33', '1', '1', 1),
(23, '35', '1', '8', 1),
(24, '37', '1', '5', 1),
(25, '38', '1', '11', 1),
(26, '39', '2', '4', 1),
(27, '40', '6', '5', 1),
(28, '41', '1', '3', 1),
(29, '48', '1', '28', 1),
(30, '49', '2', '4', 1),
(31, '50', '1', '16', 1),
(32, '51', '2', '10', 1),
(33, '52', '2', '14', 1),
(34, '53', '1', '13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toa`
--

CREATE TABLE `toa` (
  `id` int(255) NOT NULL,
  `matoa` varchar(255) NOT NULL,
  `tentoa` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `toa`
--

INSERT INTO `toa` (`id`, `matoa`, `tentoa`, `tinhtrang`) VALUES
(1, 'A01', 'Tầng trên', 'còn chỗ'),
(2, 'A02', 'Tầng dưới', 'còn chỗ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `id` int(255) NOT NULL,
  `maxe` varchar(255) NOT NULL,
  `tenxe` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL,
  `noixuatphat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`id`, `maxe`, `tenxe`, `tinhtrang`, `noixuatphat`) VALUES
(1, 'T01', 'Xe khách 01', '0', 'Bến xe Cần Thơ'),
(2, 'T02', 'Xe khách 02', '0', 'Bến xe Cần Thơ'),
(3, 'T03', 'Xe khách 03', '0', 'Bến xe Cần Thơ'),
(4, 'T04', 'Xe khách 04', '0', 'Bến xe Cần Thơ'),
(5, 'T05', 'Xe khách 05', '0', 'Bến xe Cần Thơ'),
(6, 'T06', 'Xe khách 06', '0', 'Bến xe Cần Thơ'),
(7, 'T07', 'Xe khách 07', '0', 'Bến xe Cần Thơ'),
(8, 'T08', 'Xe khách 08', '0', 'Bến xe Cần Thơ'),
(9, 'T09', 'Xe khách 09', '0', 'Bến xe Cần Thơ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `benden`
--
ALTER TABLE `benden`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bendi`
--
ALTER TABLE `bendi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chieudi`
--
ALTER TABLE `chieudi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bendi_id` (`bendi_id`),
  ADD KEY `benden_id` (`benden_id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieudatve`
--
ALTER TABLE `phieudatve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhang_id` (`khachhang_id`),
  ADD KEY `tentoa_id` (`tentoa_id`),
  ADD KEY `ghe_id` (`ghe_id`),
  ADD KEY `lichtrinh_id` (`lichtrinh_id`);

--
-- Chỉ mục cho bảng `toa`
--
ALTER TABLE `toa`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `benden`
--
ALTER TABLE `benden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `bendi`
--
ALTER TABLE `bendi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chieudi`
--
ALTER TABLE `chieudi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phieudatve`
--
ALTER TABLE `phieudatve`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `toa`
--
ALTER TABLE `toa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
