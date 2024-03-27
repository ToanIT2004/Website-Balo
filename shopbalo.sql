-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2024 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopbalo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `iddh` int(11) NOT NULL,
  `soluong` int(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `dongia` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `tensp`, `iddh`, `soluong`, `img`, `dongia`) VALUES
(54, 'KAKA 2070', 183, 3, '2img2.jpg', 632000),
(55, 'Ozuko Master II', 183, 2, '2img3.jpg', 956000),
(56, 'MK0105', 183, 3, '2img5.jpg', 477000),
(57, 'KAKA WANDER', 183, 4, '2img4.jpg', 798000),
(58, 'KAKA 2050', 183, 2, '2img6.jpg', 496000),
(59, 'WEROCKER 421', 198, 2, '3img5.jpg', 436000),
(60, 'KAKA LITE – 2202', 198, 1, '2img7.jpg', 588000),
(61, 'MK0105', 198, 1, '2img5.jpg', 477000);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `hoten`, `sdt`, `diachi`, `idkh`) VALUES
(183, 'Chương Toàn', 703038870, '5/47 Phùng Tá Chu, P.An Lạc A, Quận Bình Tân, TP.HCM', 1),
(198, 'Đàm Hòa Giai', 909150102, '51 Lò Siêu, Phường 16, Q.11, TP.HCM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(30) NOT NULL,
  `tenkh` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `email`, `sodienthoai`, `taikhoan`, `matkhau`) VALUES
(1, 'Chương Toàn', 'chuongtoan1602@gmail.com', '0703038870', 'chuongtoan21', '1234'),
(2, 'Hòa Giai', 'hoagiai1@gmail.com', '0902112113', 'giai112', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `lienhekh`
--

CREATE TABLE `lienhekh` (
  `id` int(30) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lienhekh`
--

INSERT INTO `lienhekh` (`id`, `ten`, `email`, `sdt`, `noidung`) VALUES
(4, 'Lìu Hỉn Phát', 'banconcop113@gmail.com', '0902112020', 'Trang web đẹp');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(1, 'Balo Laptop'),
(2, 'Balo Du Lịch'),
(3, 'Balo Thời Trang'),
(4, 'Balo Phượt Biker');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `taikhoan`, `matkhau`) VALUES
(1, 'admin', '123'),
(2, 'admin1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `idmenu`) VALUES
(11, 'KAKA 2070', 632000, '2img2.jpg', 'Ba lô du lịch phượt đa năng chống nước ', 2),
(12, 'Ozuko Master II', 956000, '2img3.jpg', 'Ba lô kiêm túi du lịch đa năng, công suất lớn', 2),
(13, 'KAKA WANDER', 798000, '2img4.jpg', 'Ba lô du lịch đa năng, chống thấm nước, có túi giày độc lập', 2),
(14, 'MK0105', 477000, '2img5.jpg', 'Ba lô du lịch bằng da cao cấp, có khóa số chống trộm', 2),
(15, 'KAKA 2050', 496000, '2img6.jpg', 'Ba lô du lịch phượt đa năng chống nước', 2),
(16, 'KAKA LITE – 2202', 588000, '2img7.jpg', 'Ba lô du lịch phượt đa năng công suất lớn ', 2),
(17, 'MANKOO M2', 269000, '3img1.jpg', 'Ba lô da thời trang, màu đen full', 3),
(18, 'MANKOO M1', 474000, '3img2.jpg', 'Ba lô da nam cao cấp, thể tích lớn, đựng laptop 15 inch', 3),
(19, 'SENPALA', 391000, '3img3.jpg', 'Ba lô da thời trang, da PU chất lượng cao', 3),
(20, 'MOYYI B6', 432000, '3img4.jpg', 'Ba lô laptop thời trang vải canvas cao cấp', 3),
(21, 'WEROCKER 421', 436000, '3img5.jpg', 'Ba lô da thời trang đa năng chống nước', 3),
(22, 'MOYYI B12 – 6010', 348000, '3img6.jpg', 'Ba lô da thời trang có cổng sạc USB ', 3),
(23, 'ARTIC HUNTER 465', 669000, '3img7.jpg', 'Ba lô laptop thời trang đa năng ', 3),
(24, 'MOYYI B11', 398000, '3img8.jpg', 'Ba lô da thời trang cá tính màu đen full ', 3),
(25, 'ROCKBIKER', 599000, '4img1.jpg', 'Ba lô gù cứng kiêm thùng sau xe máy ', 4),
(26, 'TANGCOOL 701', 697000, '4img2.jpg', 'Ba lô laptop đa năng, công suất lớn 17 inch ', 4),
(27, 'TANGCOOL BIKER', 682000, '4img3.jpg', 'Ba lô du lịch dành cho biker, đựng vừa mũ fullface', 4),
(28, 'ENDSTART 5104', 388000, '4img4.jpg', 'Ba lô du lịch phong cách biker, đựng vừa mũ fullface', 4),
(29, 'ROCK BIKER 038', 1190000, '4img5.jpg', 'Ba lô biker gù cứng vân carbon chống nước ', 4),
(30, 'KINGSONS ROLLTOP', 689000, '3img9.jpg', 'Ba lô laptop thời trang kiểu rolltop cao cấp chống nước', 3),
(31, 'WINKING X3', 368000, '3img10.jpg', 'Ba lô laptop thời trang', 3),
(32, 'MOYYI B8 – 6082', 368000, '3img11.jpg', 'Ba lô da thời trang thiết kế rút mép độc đáo', 3),
(33, ' MOYYI B3 – 9090', 299000, '3img12.jpg', 'Ba lô da thời trang cao cấp màu đen full', 3),
(34, 'BANGE SlimPro II', 837000, 'img1.jpg', 'Ba lô laptop công nghệ vỏ cứng, khóa số chống trộm', 1),
(35, 'BANGE LockPack V3', 898000, 'img2.jpg', 'Ba lô laptop công nghệ, khóa số chống trộm, cổng sạc USB', 1),
(36, 'BANGE AirPack', 734000, 'img3.jpg', 'Ba lô laptop thông minh đa năng, chống thấm nước ', 1),
(37, 'TANGCOOL 701', 697000, 'img4.jpg', 'Ba lô laptop đa năng, công suất lớn 17 inch', 1),
(38, 'TANGCOOL 705', 693000, 'img5.jpg', 'Ba lô laptop thông minh đa năng, chống thấm nước ', 1),
(39, 'TANGCOOL 730', 611000, 'img6.jpg', 'Ba lô laptop du lịch đa năng, chống thấm nước ', 1),
(40, 'BANGE MODERN', 717000, 'img7.jpg', 'Ba lô laptop thông minh cao cấp, chống thấm nước ', 1),
(41, 'BANGE ELEGANT', 733000, 'img8.jpg', 'Ba lô laptop cao cấp, mặt da sang trọng ', 1),
(42, 'BANGE LOCKPACK V2', 898000, 'img9.jpg', 'Ba lô laptop chống trộm, có khóa số, dung tích lớn ', 1),
(43, 'BANGE LOCKPACK V1', 753000, 'img10.jpg', 'Ba lô laptop có khóa số chống trộm, dung tích lớn ', 1),
(54, 'JASMINE CHAIR', 123, '2img2.jpg', 'Sản phẩm đẹp', 3),
(55, 'JASMINE CHAIR', 123, '2img2.jpg', 'Sản phẩm đẹp', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_donhang_khachhang` (`idkh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `lienhekh`
--
ALTER TABLE `lienhekh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_menu` (`idmenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=916;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lienhekh`
--
ALTER TABLE `lienhekh`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_donhang_khachhang` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
