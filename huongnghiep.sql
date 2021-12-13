-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2021 lúc 04:00 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `huongnghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `disc`
--

CREATE TABLE `disc` (
  `nhom1` varchar(255) NOT NULL,
  `nhom2` varchar(255) NOT NULL,
  `nhom3` varchar(255) NOT NULL,
  `nhom4` varchar(255) NOT NULL,
  `iddisc` int(255) NOT NULL,
  `idkhach` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `disc`
--

INSERT INTO `disc` (`nhom1`, `nhom2`, `nhom3`, `nhom4`, `iddisc`, `idkhach`) VALUES
('4', '7', '3', '0', 1, 0),
('2', '2', '3', '7', 2, 0),
('3', '6', '4', '1', 3, 1),
('', '', '', '', 4, 5),
('', '', '', '', 5, 6),
('', '', '', '', 6, 7),
('4', '6', '3', '1', 7, 8),
('2', '6', '5', '1', 8, 9),
('3', '6', '3', '2', 9, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `holland`
--

CREATE TABLE `holland` (
  `bo1` varchar(100) NOT NULL,
  `bo2` varchar(100) NOT NULL,
  `bo3` varchar(100) NOT NULL,
  `bo4` varchar(100) NOT NULL,
  `bo5` varchar(100) NOT NULL,
  `bo6` varchar(100) NOT NULL,
  `idholland` int(255) NOT NULL,
  `idkhach` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `holland`
--

INSERT INTO `holland` (`bo1`, `bo2`, `bo3`, `bo4`, `bo5`, `bo6`, `idholland`, `idkhach`) VALUES
('27', '27', '27', '27', '27', '27', 1, 0),
('27', '27', '27', '27', '27', '27', 2, 0),
('27', '27', '27', '27', '27', '27', 3, 0),
('27', '27', '27', '27', '27', '27', 4, 0),
('27', '27', '27', '27', '27', '27', 5, 0),
('27', '27', '27', '27', '27', '27', 6, 0),
('27', '27', '27', '27', '27', '27', 7, 0),
('27', '27', '27', '27', '27', '27', 8, 0),
('27', '27', '27', '27', '27', '27', 9, 0),
('27', '27', '27', '27', '27', '27', 10, 0),
('27', '27', '27', '27', '27', '27', 11, 0),
('27', '27', '27', '27', '27', '27', 12, 0),
('27', '27', '27', '27', '27', '27', 13, 0),
('27', '27', '27', '27', '27', '27', 14, 0),
('27', '27', '27', '27', '27', '27', 15, 0),
('27', '27', '27', '27', '27', '27', 16, 0),
('27', '27', '27', '27', '27', '27', 17, 0),
('27', '27', '27', '27', '27', '27', 18, 0),
('27', '27', '27', '27', '27', '27', 19, 0),
('27', '27', '27', '27', '27', '27', 20, 0),
('27', '27', '27', '27', '27', '27', 21, 0),
('21', '21', '25', '19', '22', '9', 22, 1),
('19', '20', '19', '18', '17', '36', 23, 5),
('18', '18', '17', '16', '19', '20', 24, 6),
('25', '18', '22', '17', '8', '27', 25, 7),
('', '', '', '', '', '', 26, 8),
('36', '36', '36', '36', '28', '27', 27, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach`
--

CREATE TABLE `khach` (
  `idkhach` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(255) NOT NULL,
  `matkhau` varchar(255) DEFAULT NULL,
  `hovaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach`
--

INSERT INTO `khach` (`idkhach`, `email`, `sdt`, `matkhau`, `hovaten`) VALUES
(1, 'tduat183@gmail.com', 866546300, '', 'Trần Nhật Duật'),
(2, '1@2', 1, '1', 'Trần Nhật Duật'),
(3, '2@2', 1, '1', 'Trần Nhật Duật'),
(4, '3@2', 1, '1', '1'),
(5, '5@2', 3, '1', '2'),
(6, '4@2', 1, '1', '5'),
(7, '7@2', 1, '1', '1'),
(8, '8@2', 1, '1', '1'),
(9, '18lynnxx@gmail.com', 866546300, 'matkhau3', 'Trần Nhật Duật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidungcauhoi`
--

CREATE TABLE `noidungcauhoi` (
  `idcauhoi` int(255) DEFAULT NULL,
  `noidungcauhoi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `noidungcauhoi`
--

INSERT INTO `noidungcauhoi` (`idcauhoi`, `noidungcauhoi`) VALUES
(1, 'Cuộc sống của bạn chủ yếu xoay quanh việc gì'),
(2, 'Bạn bè nhớ đến bạn vì điều gì'),
(3, 'Thầy cô nhớ đến bạn vì điều gì'),
(4, 'Kỹ năng bẩm sinh bạn có'),
(5, 'Bạn học kỹ năng nào dễ dàng nhất'),
(6, 'Bạn bè hay nhờ bạn điều gì'),
(7, 'Nếu không phải nghĩ về tiền, bạn sẽ làm gì'),
(8, 'Điều gì khiến bạn quên thời gian'),
(9, 'Điều gì khiến làm nổi khùng'),
(10, 'Điều  gì làm bạn tràn đầy nhiệt huyết'),
(11, 'Bạn muốn thay đổi gì ở trường học'),
(12, 'Thành tựu nào khiến bạn tự hào'),
(13, 'Điều gì khiến bạn cảm thấy vui nhất'),
(14, 'Điều gì khiến bạn muốn giải quyết nhất'),
(15, '3 điều bạn muốn làm ngay hôm nay'),
(16, 'Bạn thấy công việc của ai thú vị'),
(1, 'Cuộc sống của bạn chủ yếu xoay quanh việc gì'),
(2, 'Bạn bè nhớ đến bạn vì điều gì'),
(3, 'Thầy cô nhớ đến bạn vì điều gì'),
(4, 'Kỹ năng bẩm sinh bạn có'),
(5, 'Bạn học kỹ năng nào dễ dàng nhất'),
(6, 'Bạn bè hay nhờ bạn điều gì'),
(7, 'Nếu không phải nghĩ về tiền, bạn sẽ làm gì'),
(8, 'Điều gì khiến bạn quên thời gian'),
(9, 'Điều gì khiến làm nổi khùng'),
(10, 'Điều  gì làm bạn tràn đầy nhiệt huyết'),
(11, 'Bạn muốn thay đổi gì ở trường học'),
(12, 'Thành tựu nào khiến bạn tự hào'),
(13, 'Điều gì khiến bạn cảm thấy vui nhất'),
(14, 'Điều gì khiến bạn muốn giải quyết nhất'),
(15, '3 điều bạn muốn làm ngay hôm nay'),
(16, 'Bạn thấy công việc của ai thú vị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toithichgi`
--

CREATE TABLE `toithichgi` (
  `idkhach` int(255) NOT NULL,
  `idcauhoi` int(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idtoithich` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`iddisc`);

--
-- Chỉ mục cho bảng `holland`
--
ALTER TABLE `holland`
  ADD PRIMARY KEY (`idholland`);

--
-- Chỉ mục cho bảng `khach`
--
ALTER TABLE `khach`
  ADD PRIMARY KEY (`idkhach`);

--
-- Chỉ mục cho bảng `toithichgi`
--
ALTER TABLE `toithichgi`
  ADD PRIMARY KEY (`idtoithich`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `disc`
--
ALTER TABLE `disc`
  MODIFY `iddisc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `holland`
--
ALTER TABLE `holland`
  MODIFY `idholland` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `khach`
--
ALTER TABLE `khach`
  MODIFY `idkhach` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `toithichgi`
--
ALTER TABLE `toithichgi`
  MODIFY `idtoithich` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
