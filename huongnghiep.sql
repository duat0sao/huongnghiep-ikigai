-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2021 lúc 06:39 AM
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
-- Cơ sở dữ liệu: "huongnghiep"
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng "admin"
--

CREATE TABLE "admin" (
  "admin" varchar(255) NOT NULL,
  "matkhau" varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng "admin"
--

INSERT INTO "admin" ("admin", "matkhau") VALUES
('1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng "disc"
--

CREATE TABLE "disc" (
  "nhom1" varchar(255) NOT NULL,
  "nhom2" varchar(255) NOT NULL,
  "nhom3" varchar(255) NOT NULL,
  "nhom4" varchar(255) NOT NULL,
  "iddisc" int(255) NOT NULL,
  "idkhach" int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng "disc"
--

INSERT INTO "disc" ("nhom1", "nhom2", "nhom3", "nhom4", "iddisc", "idkhach") VALUES
('4', '3', '3', '4', 13, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng "holland"
--

CREATE TABLE "holland" (
  "bo1" varchar(100) NOT NULL,
  "bo2" varchar(100) NOT NULL,
  "bo3" varchar(100) NOT NULL,
  "bo4" varchar(100) NOT NULL,
  "bo5" varchar(100) NOT NULL,
  "bo6" varchar(100) NOT NULL,
  "idholland" int(255) NOT NULL,
  "idkhach" tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng "holland"
--

INSERT INTO "holland" ("bo1", "bo2", "bo3", "bo4", "bo5", "bo6", "idholland", "idkhach") VALUES
('24', '19', '19', '22', '21', '17', 31, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng "khach"
--

CREATE TABLE "khach" (
  "idkhach" int(255) NOT NULL,
  "email" varchar(255) NOT NULL,
  "sdt" int(255) NOT NULL,
  "matkhau" varchar(255) DEFAULT NULL,
  "hovaten" varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng "khach"
--

INSERT INTO "khach" ("idkhach", "email", "sdt", "matkhau", "hovaten") VALUES
(13, 'tduat183@gmail.com', 86645, '1', 'lý thị nụ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng "noidungcauhoi"
--

CREATE TABLE "noidungcauhoi" (
  "idcauhoi" int(255) DEFAULT NULL,
  "noidungcauhoi" varchar(255) NOT NULL,
  "idkhach" int(255) NOT NULL,
  "kcj" int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng "noidungcauhoi"
--

INSERT INTO "noidungcauhoi" ("idcauhoi", "noidungcauhoi", "idkhach", "kcj") VALUES
(1, 'Cuộc sống của bạn chủ yếu xoay quanh việc gì', 0, 0),
(2, 'Bạn bè nhớ đến bạn vì điều gì', 0, 0),
(3, 'Thầy cô nhớ đến bạn vì điều gì', 0, 0),
(4, 'Kỹ năng bẩm sinh bạn có', 0, 0),
(5, 'Bạn học kỹ năng nào dễ dàng nhất', 0, 0),
(6, 'Bạn bè hay nhờ bạn điều gì', 0, 0),
(7, 'Nếu không phải nghĩ về tiền, bạn sẽ làm gì', 0, 0),
(8, 'Điều gì khiến bạn quên thời gian', 0, 0),
(9, 'Điều gì khiến làm nổi khùng', 0, 0),
(10, 'Điều  gì làm bạn tràn đầy nhiệt huyết', 0, 0),
(11, 'Bạn muốn thay đổi gì ở trường học', 0, 0),
(12, 'Thành tựu nào khiến bạn tự hào', 0, 0),
(13, 'Điều gì khiến bạn cảm thấy vui nhất', 0, 0),
(14, 'Điều gì khiến bạn muốn giải quyết nhất', 0, 0),
(15, '3 điều bạn muốn làm ngay hôm nay', 0, 0),
(16, 'Bạn thấy công việc của ai thú vị', 0, 0),
(1, 'Cuộc sống của bạn chủ yếu xoay quanh việc gì', 0, 0),
(2, 'Bạn bè nhớ đến bạn vì điều gì', 0, 0),
(3, 'Thầy cô nhớ đến bạn vì điều gì', 0, 0),
(4, 'Kỹ năng bẩm sinh bạn có', 0, 0),
(5, 'Bạn học kỹ năng nào dễ dàng nhất', 0, 0),
(6, 'Bạn bè hay nhờ bạn điều gì', 0, 0),
(7, 'Nếu không phải nghĩ về tiền, bạn sẽ làm gì', 0, 0),
(8, 'Điều gì khiến bạn quên thời gian', 0, 0),
(9, 'Điều gì khiến làm nổi khùng', 0, 0),
(10, 'Điều  gì làm bạn tràn đầy nhiệt huyết', 0, 0),
(11, 'Bạn muốn thay đổi gì ở trường học', 0, 0),
(12, 'Thành tựu nào khiến bạn tự hào', 0, 0),
(13, 'Điều gì khiến bạn cảm thấy vui nhất', 0, 0),
(14, 'Điều gì khiến bạn muốn giải quyết nhất', 0, 0),
(15, '3 điều bạn muốn làm ngay hôm nay', 0, 0),
(16, 'Bạn thấy công việc của ai thú vị', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng "toithichgi"
--

CREATE TABLE "toithichgi" (
  "idkhach" int(255) NOT NULL,
  "idcauhoi" int(255) NOT NULL,
  "noidung" varchar(255) NOT NULL,
  "idtoithich" int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng "disc"
--
ALTER TABLE "disc"
  ADD PRIMARY KEY ("iddisc");

--
-- Chỉ mục cho bảng "holland"
--
ALTER TABLE "holland"
  ADD PRIMARY KEY ("idholland");

--
-- Chỉ mục cho bảng "khach"
--
ALTER TABLE "khach"
  ADD PRIMARY KEY ("idkhach");

--
-- Chỉ mục cho bảng "toithichgi"
--
ALTER TABLE "toithichgi"
  ADD PRIMARY KEY ("idtoithich");

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng "disc"
--
ALTER TABLE "disc"
  MODIFY "iddisc" int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng "holland"
--
ALTER TABLE "holland"
  MODIFY "idholland" int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng "khach"
--
ALTER TABLE "khach"
  MODIFY "idkhach" int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng "toithichgi"
--
ALTER TABLE "toithichgi"
  MODIFY "idtoithich" int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
