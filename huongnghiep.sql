-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2021 lúc 11:47 AM
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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin`, `matkhau`) VALUES
('1', '1');

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
('4', '3', '3', '4', 13, 13),
('0', '0', '0', '0', 14, 14);

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
('27', '27', '27', '27', '27', '27', 31, 13),
('13', '9', '26', '33', '28', '31', 32, 14);

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
(13, 'tduat183@gmail.com', 86645, '1', 'lý thị nụ'),
(14, '18lynnxx@gmail.com', 1, '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomnganh`
--

CREATE TABLE `nhomnganh` (
  `idnhomnganh` varchar(500) NOT NULL,
  `tennganh` varchar(500) NOT NULL,
  `manganh` varchar(500) NOT NULL,
  `diemvao` varchar(500) NOT NULL,
  `holland` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhomnganh`
--

INSERT INTO `nhomnganh` (`idnhomnganh`, `tennganh`, `manganh`, `diemvao`, `holland`) VALUES
('art', 'Sư phạm Mỹ thuật', '7140222', '', ''),
('edu', 'Quản lý giáo dục', '7140114', '', ''),
('edu', 'Quản lý giáo dục', '7140114', '', ''),
('edu', 'Giáo dục học', '7140101', '', ''),
('edu', 'Giáo dục học', '7140101', '', ''),
('edu', 'Tâm lý học', '7310401', '', ''),
('edu', 'Giáo dục học', '7140101', '', 'r'),
('edu', 'Quản lý giáo dục', '7140114', '', 'c'),
('edu', 'Quản lý giáo dục', '7140114', '', 'e'),
('edu', 'Kinh tế giáo dục', '7140199', '', 'e'),
('edu', 'Giáo dục mầm non', '7140201', '', 'r'),
('edu', 'Giáo dục tiểu học', '7140202', '', 'r'),
('edu', 'Giáo dục đặc biệt', '7140203', '', 'r'),
('edu', 'Giáo dục công dân', '7140204', '', 'r'),
('edu', 'Giáo dục chính trị', '7140205', '', 'r'),
('edu', 'Giáo dục thể chất', '7140206', '', 'r'),
('edu', 'Huấn luyện thể thao', '7140207', '', 'r'),
('edu', 'Giáo dục Quốc phòng – An ninh', '7140208', '', 'r'),
('edu', 'Sư phạm Toán học', '7140209', '', 'r'),
('edu', 'Giáo dục Quốc phòng – An ninh', '7140208', '', 'c'),
('edu', 'Sư phạm Tin học', '7140210', '', 'r'),
('edu', 'Sư phạm Vật lý', '7140211', '', 'r'),
('edu', 'Sư phạm Hóa học', '7140212', '', 'r'),
('edu', 'Sư phạm Sinh học', '7140213', '', 'r'),
('edu', 'Sư phạm Kỹ thuật công nghiệp', '7140214', '', 'r'),
('edu', 'Sư phạm Kỹ thuật nông nghiệp', '7140215', '', 'r'),
('edu', 'Sư phạm Ngữ văn', '7140217', '', 'r'),
('edu', 'Sư phạm Ngữ văn', '7140217', '', 's'),
('edu', 'Sư phạm Lịch sử', '7140218', '', 'r'),
('edu', 'Sư phạm Địa lý', '7140219', '', 'r'),
('edu', 'Sư phạm  m nhạc', '7140221', '', 'r'),
('edu', 'Sư phạm  m nhạc', '7140221', '', 'a'),
('edu', 'Sư phạm Mỹ thuật', '7140222', '', 'r'),
('edu', 'Sư phạm Mỹ thuật', '7140222', '', 'a'),
('edu', 'Sư phạm Tiếng Anh', '7140231', '', 'r'),
('edu', 'Sư phạm Tiếng Nga', '7140232', '', 'r'),
('edu', 'Sư phạm Tiếng Pháp', '7140233', '', 'r'),
('edu', 'Sư phạm Tiếng Trung Quốc', '7140234', '', 'r'),
('edu', 'Sư phạm Tiếng Đức', '7140235', '', 'r'),
('edu', 'Sư phạm Tiếng Nhật', '7140236', '', 'r'),
('edu', 'Sư phạm Tiếng Hàn Quốc', '7140237', '', 'r'),
('edu', 'Sư phạm Công nghệ', '7140246', '', 'r'),
('edu', 'Sư phạm Khoa học tự nhiên', '7140247', '', 'r'),
('edu', 'Giáo dục pháp luật', '7140248', '', 'r'),
('edu', 'Sư phạm Lịch sử – Địa lý', '7140249', '', 'r'),
('edu', 'Sư phạm Tin học – Công nghệ', '7140250', '', 'r'),
('art', 'Sư phạm Mỹ thuật', '7140222', '', 'a'),
('art', 'Lý luận lịch sử và Phê bình mỹ thuật', '7210101', '', 'a'),
('art', 'Hội họa', '7210103', '', 'a'),
('art', 'Đồ họa', '7210104', '', 'a'),
('art', 'Điêu khắc', '7210105', '', 'a'),
('art', 'Gốm', '7210107', '', 'a'),
('art', 'Mỹ thuật đô thị', '7210110', '', 'a'),
('art', 'Thiết kế công nghiệp', '7210402', '', 'a'),
('art', 'Thiết kế đồ họa', '7210403', '', 'a'),
('art', 'Thiết kế thời trang', '7210404', '', 'a'),
('art', 'Thiết kế mỹ thuật sân khấu, điện ảnh', '7210406', '', 'a'),
('art', 'Thiết kế đồ họa', '7210403', '', 'r'),
('mu', 'Sư phạm  m nhạc', '7140221', '', 'a'),
('mu', 'Thanh nhạc', '7210205', '', 'a'),
('mu', 'Piano', '7210208', '', 'a'),
('bd', 'Diễn viên kịch – điện ảnh', '7210234', '', 'a'),
('bd', 'Đạo diễn Điện ảnh – Truyền hình', '7210235', '', 'a'),
('bd', 'Quay phim', '7210236', '', 'a'),
('nn', 'Tiếng Việt và Văn hóa Việt Nam', '7220101', '', 'r'),
('nn', 'Hán Nôm', '7220104', '', 'r'),
('nn', 'Ngôn ngữ Jrai', '7220105', '', 'r'),
('nn', 'Ngôn ngữ Khmer', '7220106', '', 'r'),
('nn', 'Ngôn ngữ H’mong', '7220107', '', 'r'),
('nn', 'Ngôn ngữ Chăm', '7220108', '', 'r'),
('nn', 'Sáng tác văn học', '7220110', '', 'r'),
('nn', 'Văn hóa các dân tộc thiểu số Việt Nam', '7220112', '', 'r'),
('nn', 'Ngôn ngữ Anh', '7220201', '', 'r'),
('nn', 'Ngôn ngữ Nga', '7220202', '', 'r'),
('nn', 'Ngôn ngữ Pháp', '7220203', '', 'r'),
('nn', 'Ngôn ngữ Trung Quốc', '7220204', '', 'r'),
('nn', 'Ngôn ngữ Đức', '7220205', '', 'r'),
('nn', 'Ngôn ngữ Tây Ban Nha', '7220206', '', 'r'),
('nn', 'Ngôn ngữ Bồ Đào Nha', '7220207', '', 'r'),
('nn', 'Ngôn ngữ Italia', '7220208', '', 'r'),
('nn', 'Ngôn ngữ Nhật', '7220209', '', 'r'),
('nn', 'Ngôn ngữ Hàn Quốc', '7220210', '', 'r'),
('nn', 'Ngôn ngữ Ả Rập', '7220211', '', 'r'),
('nn', 'Ngôn ngữ Thái Lan', '7220212', '', 'r'),
('nn', 'Tôn giáo học', '7220309', '', 'r'),
('nn', 'Lịch sử', '7220310', '', 'r'),
('nn', 'Gia đình học', '7229045', '', 'r'),
('kt', 'Kinh tế học', '7310101', '', 'e'),
('kt', 'Kinh tế chính trị', '7310102', '', 'e'),
('kt', 'Kinh tế đầu tư', '7310104', '', 'e'),
('kt', 'Kinh tế phát triển', '7310105', '', 'e'),
('kt', 'Kinh tế quốc tế', '7310106', '', 'e'),
('kt', 'Thống kê kinh tế', '7310107', '', 'e'),
('kt', 'Thống kê kinh tế', '7310107', '', 'c'),
('kt', 'Toán kinh tế', '7310108', '', 'r'),
('kt', 'Toán kinh tế', '7310108', '', 'e'),
('kt', 'Quản lý kinh tế', '7310110', '', 'e'),
('kt', 'Quản lý kinh tế', '7310110', '', 'c'),
('kt', 'Nghiên cứu phát triển', '7310111', '', 'e'),
('kt', 'Nghiên cứu phát triển', '7310111', '', 'i'),
('kt', 'Quản trị kinh doanh', '7340101', '', 'e'),
('kt', 'Quản trị – Luật', '7340102', '', 'e'),
('kt', 'Quản trị – Luật', '7340102', '', 'c'),
('kt', 'Marketing', '7340115', '', 'e'),
('kt', 'Bất động sản', '7340116', '', 'e'),
('kt', 'Kinh doanh quốc tế', '7340120', '', 'e'),
('kt', 'Kinh doanh thương mại', '7340121', '', 'e'),
('kt', 'Thương mại điện tử', '7340122', '', 'e'),
('kt', 'Kinh doanh thời trang và dệt may', '7340123', '', 'e'),
('kt', 'Quản trị và kinh doanh quốc tế', '7340124', '', 'e'),
('kt', 'Tài chính – Ngân hàng', '7340201', '', 'i'),
('kt', 'Bảo hiểm', '7340204', '', 'e'),
('kt', 'Tài chính quốc tế', '7340206', '', 'i'),
('kt', 'Công nghệ tài chính', '7340208', '', 'i'),
('kt', 'Kế toán', '7340301', '', 'c'),
('kt', 'Kiểm toán', '7340302', '', 'c'),
('kt', 'Kế toán, phân tích và kiểm toán', '7340302', '', 'c'),
('ctri', 'Chính trị học', '7310201', '', 'c'),
('ctri', 'Xây dựng Đảng và Chính quyền Nhà nước', '7310202', '', 'c'),
('ctri', 'Chính trị Công an nhân dân', '7310203', '', 'c'),
('ctri', 'Quản lý nhà nước', '7310205', '', 'c'),
('ctri', 'Quan hệ quốc tế', '7310206', '', 's'),
('ctri', 'Quan hệ quốc tế', '7310206', '', 'c'),
('ctri', 'Công tác xã hội', '7760101', '', 's'),
('ctri', 'Công tác xã hội', '7760101', '', 'c'),
('ctri', 'Công tác thanh thiếu niên', '7760102', '', 's'),
('ctri', 'Xã hội học', '7310301', '', 'c'),
('ctri', 'Công tác thanh thiếu niên', '7760102', '', 'c'),
('ctri', 'Nhân học', '7310302', '', 'c'),
('ctri', 'Nhân học', '7310302', '', 's'),
('ctri', 'Giới và Phát triển', '7310399', '', 'c'),
('ctri', 'Giới và Phát triển', '7310399', '', 's'),
('ctri', 'Tâm lý học giáo dục', '7310403', '', 's'),
('ctri', 'Địa lý học', '7310501', '', 'c'),
('ctri', 'Địa lý học', '7310501', '', 'i'),
('ctri', 'Quốc tế học', '7310601', '', 'c'),
('ctri', 'Quốc tế học', '7310601', '', 'i'),
('ctri', 'Châu Á học', '7310602', '', 'c'),
('ctri', 'Châu Á học', '7310602', '', 'i'),
('ctri', 'Đông phương học', '7310608', '', 'c'),
('ctri', 'Đông phương học', '7310608', '', 'i'),
('ctri', 'Trung Quốc học', '7310612', '', 'c'),
('ctri', 'Trung Quốc học', '7310612', '', 'i'),
('ctri', 'Nhật Bản học', '7310613', '', 'c'),
('ctri', 'Nhật Bản học', '7310613', '', 'i'),
('ctri', 'Hàn Quốc học', '7310614', '', 'c'),
('ctri', 'Hàn Quốc học', '7310614', '', 'i'),
('ctri', 'Việt Nam học', '7310630', '', 'c'),
('ctri', 'Việt Nam học', '7310630', '', 'i'),
('tt', 'Báo chí', '7320101', '', 'a'),
('tt', 'Báo chí', '7320101', '', 's'),
('tt', 'Truyền thông đa phương tiện', '7320104', '', 'a'),
('tt', 'Truyền thông đại chúng', '7320105', '', 'a'),
('tt', 'Truyền thông đại chúng', '7320105', '', 's'),
('tt', 'Công nghệ truyền thông', '7320106', '', 'a'),
('tt', 'Truyền thông quốc tế', '7320107', '', 'a'),
('tt', 'Quan hệ công chúng', '7320108', '', 'a'),
('tt', 'Quan hệ công chúng', '7320108', '', 's'),
('tt', 'Truyền thông doanh nghiệp', '7320109', '', 'a'),
('tt', 'Quảng cáo', '7320110', '', 'a'),
('qly', 'Thông tin – Thư viện', 'Thông tin – Thư viện', '', 'c'),
('qly', 'Khoa học thư viện', '7320202', '', 'c'),
('qly', 'Quản lý thông tin', '7320205', '', 'c'),
('qly', 'Lưu trữ học', '7320303', '', 'c'),
('qly', 'Bảo tàng học', '7320305', '', 'c'),
('qly', 'Kinh doanh xuất bản phẩm', '7320402', '', 'c'),
('luat', 'Luật', '7380101', '', 'e'),
('luat', 'Luật hiến pháp và luật hành chính', '7380102', '', 'e'),
('luat', 'Luật tố tụng và tố tụng dân sự', '7380103', '', 'e'),
('luat', 'Luật hình sự và tố tụng hình sự', '7380104', '', 'e'),
('luat', 'Luật kinh tế', '7380107', '', 'e'),
('luat', 'Luật quốc tế', '7380108', '', 'e'),
('luat', 'Luật thương mại quốc tế', '7380109', '', 'e'),
('luat', 'Luật kinh doanh', '7380110', '', 'e'),
('luat', 'Quản trị – Luật', '7340102', '', 'c'),
('luat', 'Quản trị – Luật', '7340102', '', 'e'),
('sinh', 'Sinh học', '7420101', '', 'r'),
('sinh', 'Công nghệ sinh học', '7420201', '', 'r'),
('sinh', 'Kỹ thuật sinh học', '7420202', '', 'r'),
('sinh', 'Sinh học ứng dụng', '7420203', '', 'r'),
('sinh', 'Khoa học y sinh', '7420204', '', 'r'),
('sinh', 'Công nghệ sinh học y dược', '7420205', '', 'r'),
('khoa', 'Thiên văn học', '7440101', '', 'i'),
('khoa', 'Vật lý học', '7440102', '', 'i'),
('khoa', 'Vật lí nguyên tử hạt nhân', '7440106', '', 'i'),
('khoa', 'Cơ học', '7440110', '', 'i'),
('khoa', 'Hóa học (Hóa sinh)', '7440112', '', 'i'),
('khoa', 'Khoa học vật liệu', '7440122', '', 'i'),
('khoa', 'Địa lý tự nhiên', '7440217', '', 'i'),
('khoa', 'Khí tượng và Khí hậu học', '7440221', '', 'i'),
('khoa', 'Thủy văn học', '7440224', '', 'i'),
('khoa', 'Hải dương học', '7440228', '', 'i'),
('khoa', 'Biến đổi khí hậu và phát triển bền vững', '7440298', '', 'i'),
('khoa', 'Khoa học môi trường', '7440301', '', 'i'),
('khoa', 'Khoa học đất', '7440106', '', 'i'),
('khoa', 'Quản lý tài nguyên và môi trường', '7850101', '', 'r'),
('khoa', 'Quản lý tài nguyên và môi trường', '7850101', '', 'c'),
('kh', 'Kinh tế tài nguyên thiên nhiên', '7850102', '', 'i'),
('khoa', 'Quản lý đất đai', '7850103', '', 'r'),
('khoa', 'Quản lý đất đai', '7850103', '', 'i'),
('khoa', 'Quản lý tổng hợp tài nguyên nước', '7850195', '', 'r'),
('khoa', 'Quản lý tài nguyên khoáng sản', '7850196', '', 'r'),
('khoa', 'Quản lý tài nguyên và môi trường biển đảo', '7580197', '', 'r'),
('khoa', 'Quản lý tài nguyên nước', '7850198', '', 'r'),
('khoa', 'Quản lý biển', '7850199', '', 'r'),
('khoa', 'Bảo hộ lao động', '7850201', '', 'r'),
('khoa', 'Tài nguyên và Du lịch sinh thái', '7859002', '', 'i'),
('khoa', 'Cảnh quan và Kỹ thuật hoa viên', '7859007', '', 'i'),
('toan', 'Toán học', '7460101', '', 'r'),
('toan', 'Toán ứng dụng', '7460102', '', 'r'),
('toan', 'Toán – Tin', '7460117', '', 'r'),
('toan', 'Thống kê', '7460201', '', 'r'),
('cntt', 'Khoa học máy tính', '7480101', '', 'r'),
('cntt', 'Mạng máy tính và truyền thông dữ liệu', '7480102', '', 'r'),
('cntt', 'Kỹ thuật phần mềm', '7480103', '', 'r'),
('cntt', 'Máy tính và Khoa học thông tin', '7480105', '', 'r'),
('cntt', 'Quản trị và phân tích dữ liệu', '7480107', '', 'r'),
('cntt', 'Khoa học dữ liệu', '7480109', '', 'r'),
('cntt', 'Công nghệ thông tin', '7480201', '', 'r'),
('cntt', 'An toàn thông tin', '7480202', '', 'r'),
('kien', 'Kiến trúc', '7580101', '', 'r'),
('kien', 'Kiến trúc', '7580101', '', 'a'),
('kien', 'Kiến trúc cảnh quan', '7580102', '', 'r'),
('kien', 'Kiến trúc cảnh quan', '7580102', '', 'a'),
('kien', 'Kiến trúc nội thất', '7580103', '', 'r'),
('kien', 'Kiến trúc nội thất', '7580103', '', 'a'),
('kien', 'Quy hoạch vùng và đô thị', '7580105', '', 'i'),
('kien', 'Quản lý đô thị và công trình', '7580106', '', 'c'),
('', 'Thiết kế nội thất', '7580108', '', 'a'),
('kien', 'Thiết kế nội thất', '7580108', '', 'a'),
('kien', 'Thiết kế nội thất', '7580108', '', 'r'),
('kien', 'Đô thị học', '7580112', '', 'i'),
('kien', 'Kỹ thuật xây dựng công trình thủy', '7580202', '', 'r'),
('kien', 'Kỹ thuật xây dựng', '7580201', '', 'r'),
('kien', 'Kỹ thuật xây dựng công trình biển', '7580203', '', 'r'),
('kien', 'Kỹ thuật công trình ngầm thành phố và hệ thống tàu điện ngầm', '7580204', '', 'r'),
('kien', 'Kỹ thuật xây dựng công trình giao thông', '7580205', '', 'r'),
('kien', 'Kỹ thuật tài nguyên nước', '7580212', '', 'i'),
('kien', 'Kỹ thuật cơ sở hạ tầng', '7580210', '', 'r'),
('kien', 'Kỹ thuật cấp thoát nước', '7580213', '', 'r'),
('kien', 'Kinh tế xây dựng', '7580301', '', 'i'),
('kien', 'Quản lý xây dựng', '7580302', '', 'r'),
('yte', 'Y khoa (Y đa khoa)', '7720101', '', 'c'),
('yte', 'Y học dự phòng', '7720110', '', 'c'),
('yte', 'Y học cổ truyền', '7720115', '', 'c'),
('yte', 'Dược học', '7720201', '', 'c'),
('yte', 'Hóa dược', '7720203', '', 'c'),
('yte', 'Điều dưỡng', '7720301', '', 'c'),
('yte', 'Hộ sinh', '7720302', '', 'c'),
('yte', 'Dụng cụ chỉnh hình chân tay giả', '7720399', '', 'c'),
('yte', 'Y sinh học thể dục thể thao', '7720400', '', 'c'),
('yte', 'Dinh dưỡng', '7720401', '', 'c'),
('yte', 'Dinh dưỡng và Khoa học thực phẩm', '7720497', '', 'c'),
('yte', 'Khoa học chế biến món ăn', '7720498', '', 'c'),
('yte', 'Khoa học dinh dưỡng và ẩm thực', '7720499', '', 'c'),
('yte', 'Răng – Hàm – Mặt', '7720501', '', 'c'),
('yte', 'Kỹ thuật phục hình răng', '7720502', '', 'c'),
('yte', 'Phục hồi chức năng', '7720503', '', 'c'),
('yte', 'Điều dưỡng gây mê hồi sức', '7720505', '', 'c'),
('yte', 'Kỹ thuật xét nghiệm y học', '7720601', '', 'c'),
('yte', 'Kỹ thuật hình ảnh y học', '7720602', '', 'c'),
('yte', 'Khúc xạ nhãn khoa', '7720604', '', 'c'),
('yte', 'Y tế công cộng', '7720701', '', 'c'),
('yte', 'Tổ chức và Quản lý y tế', '7720801', '', 'c'),
('yte', 'Quản lý bệnh viện', '7720802', '', 'c'),
('dulich', 'Du lịch', '7810101', '', 'e'),
('dulich', 'Quản trị dịch vụ du lịch và lữ hành', '7810103', '', 'e'),
('dulich', 'Du lịch địa chất', '7810105', '', 'e'),
('dulich', 'Quản trị khách sạn', '7810201', '', 'c'),
('dulich', 'Quản trị nhà hàng và dịch vụ ăn uống', '7810202', '', 'c'),
('dulich', 'Khai thác vận tải', '7840101', '', 'e'),
('dulich', 'Quản lý hoạt động bay', '7840102', '', 'c'),
('dulich', 'Kinh tế vận tải', '7840104', '', 'e'),
('dulich', 'Khoa học hàng hải', '7840106', '', 'e'),
('dulich', 'Logistics và Quản lý chuỗi cung ứng', '7510605', '', 'e'),
('tdtt', 'Giáo dục thể chất', '7140206', '', 's'),
('tdtt', 'Huấn luyện thể thao', '7140207', '', 's'),
('tdtt', 'Quản lý thể dục thể thao', '7810301', '', 's'),
('coan', 'Trinh sát an ninh', '7860101', '', 'e'),
('coan', 'Điều tra trinh sát', '7860102', '', 'e'),
('coan', 'Điều tra trinh sát', '7860102', '', 's'),
('coan', 'Điều tra hình sự', '7860104', '', 'e'),
('coan', 'Nghiệp vụ cảnh sát', '7860105', '', 'e'),
('coan', 'Kỹ thuật hình sự', '7860108', '', 'e'),
('coan', 'Quản lý nhà nước về trật tự an ninh', '7860109', '', 'e'),
('coan', 'Tham mưu, chỉ huy vũ trang bảo vệ an ninh', '7860112', '', 'e'),
('coan', 'Phòng cháy chữa cháy và cứu hộ cứu nạn', '7860113', '', 'e'),
('coan', 'Tình báo an ninh', '7860117', '', 'e'),
('coan', 'Chỉ huy tham mưu lục quân', '7860201', '', 'e'),
('coan', 'Chỉ huy tham mưu hải quân', '7860202', '', 'e'),
('coan', 'Chỉ huy tham mưu không quân (phi công quân sự)', '7860203', '', 'e'),
('coan', 'Chỉ huy tham mưu phòng không', '7860204', '', 'e'),
('coan', 'Chỉ huy tham mưu pháo binh', '7860205', '', 'e'),
('coan', 'Hậu cần quân sự', '7860218', '', 'c');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidungcauhoi`
--

CREATE TABLE `noidungcauhoi` (
  `idcauhoi` int(255) DEFAULT NULL,
  `noidungcauhoi` varchar(255) NOT NULL,
  `idkhach` int(255) NOT NULL,
  `kcj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `noidungcauhoi`
--

INSERT INTO `noidungcauhoi` (`idcauhoi`, `noidungcauhoi`, `idkhach`, `kcj`) VALUES
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
-- Cấu trúc bảng cho bảng `toithichgi`
--

CREATE TABLE `toithichgi` (
  `idkhach` int(255) NOT NULL,
  `idcauhoi` int(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idtoithich` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `toithichgi`
--

INSERT INTO `toithichgi` (`idkhach`, `idcauhoi`, `noidung`, `idtoithich`) VALUES
(13, 15, 'chơi game, xem phim', 16);

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
  MODIFY `iddisc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `holland`
--
ALTER TABLE `holland`
  MODIFY `idholland` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `khach`
--
ALTER TABLE `khach`
  MODIFY `idkhach` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `toithichgi`
--
ALTER TABLE `toithichgi`
  MODIFY `idtoithich` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
