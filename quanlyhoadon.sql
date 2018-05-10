-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2018 lúc 03:03 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyhoadon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `ten_dang_nhap` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `dang_nhap_lan_cuoi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_ID`, `ten_dang_nhap`, `mat_khau`, `dang_nhap_lan_cuoi`) VALUES
(1, 'hien', '123123', '2018-05-06 23:30:52'),
(2, 'Hiền', '123123', '2018-05-10 09:55:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `hoadon_ID` int(11) NOT NULL,
  `khachhang_ID` int(11) NOT NULL,
  `thoi_gian_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon_sanpham`
--

CREATE TABLE `hoadon_sanpham` (
  `hoadon_ID` int(11) NOT NULL,
  `sanpham_ID` int(11) NOT NULL,
  `gia_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `khachhang_ID` int(11) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_ID` int(11) NOT NULL,
  `ten_san_pham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia_san_pham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_ID`, `ten_san_pham`, `gia_san_pham`) VALUES
(1, 'iphone X', 1000),
(2, 'iphone 5s', 200),
(5, 'Điện thoại 3s', 1000),
(6, 'Điện thoại 3s', 1000),
(7, 'Điện thoại 1200', 2000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hoadon_ID`),
  ADD KEY `khachhang_ID` (`khachhang_ID`);

--
-- Chỉ mục cho bảng `hoadon_sanpham`
--
ALTER TABLE `hoadon_sanpham`
  ADD PRIMARY KEY (`hoadon_ID`,`sanpham_ID`),
  ADD KEY `sanpham_ID` (`sanpham_ID`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`khachhang_ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hoadon_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `khachhang_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`khachhang_ID`) REFERENCES `khachhang` (`khachhang_ID`);

--
-- Các ràng buộc cho bảng `hoadon_sanpham`
--
ALTER TABLE `hoadon_sanpham`
  ADD CONSTRAINT `hoadon_sanpham_ibfk_1` FOREIGN KEY (`hoadon_ID`) REFERENCES `hoadon` (`hoadon_ID`),
  ADD CONSTRAINT `hoadon_sanpham_ibfk_2` FOREIGN KEY (`sanpham_ID`) REFERENCES `sanpham` (`sanpham_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
