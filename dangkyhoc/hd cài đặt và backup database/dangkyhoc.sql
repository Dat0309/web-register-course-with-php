SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dangkyhoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdangky`
--

CREATE TABLE `dsdangky` (
  `mamonhoc` varchar(50) NOT NULL,
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dstenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dsgiangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dssotinchi` int(10) NOT NULL,
  `dshocphi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `khoa` (
  `makhoa` varchar(50) NOT NULL,
  `tenkhoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công nghệ thông tin'),
('LH', 'Luật học'),
('QT', 'Quản trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `lop` varchar(50) NOT NULL,
  `makhoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`lop`, `makhoa`) VALUES
('CTK45', 'CNTT'),
('CTK44', 'CNTT'),
('CTK43', 'CNTT'),
('LHK45', 'LH'),
('LHK44', 'LH'),
('LHK43', 'LH'),
('QTK45', 'QT'),
('QTK44', 'QT'),
('QTK42', 'QT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamonhoc` varchar(50) NOT NULL,
  `tenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(50) DEFAULT NULL,
  `sotinchi` int(10) NOT NULL,
  `hocphi` varchar(50) DEFAULT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`, `giangvien`, `lichhoc`, `sotinchi`, `hocphi`, `makhoa`) VALUES
('CNTT2', 'Phát triển ứng dụng di động', 'Thái Duy Quý', NULL, 3, NULL, 'CNTT'),
('CNTT3', 'Phát triển ứng dụng web', 'Lê Gia Công', NULL, 3, NULL, 'CNTT'),
('CNTT4', 'Lập trình java', 'Thái Duy Quý', NULL, 3, NULL, 'CNTT'),
('CT1', 'Địa chất công trình', 'Lê Văn Tài', NULL, 2, NULL, 'LH'),
('CT2', 'Luật đất đai', 'Nguyễn Tuấn Tài', NULL, 3, NULL, 'LH'),
('CT3', 'Luật hình sự', 'Hoàng Văn Vinh', NULL, 3, NULL, 'LH'),
('CT4', 'Pháp luật đại cương', 'Lê Đức Thọ', NULL, 3, NULL, 'LH'),
('CT5', 'Luật nhà đất', 'Hồ Xuân Hương', NULL, 2, NULL, 'LH'),
('CNTT5', 'Mạng máy tính', 'Nguyễn Văn Huy Dũng', NULL, 2, NULL, 'CNTT'),
('CNTT6', 'Lập trình C++', 'La Quốc Thắng', NULL, 3, NULL, 'CNTT'),
('KT2', 'Marketing căn bản', 'Lê Thị Tươi', NULL, 2, NULL, 'QT'),
('CNTT7', 'Kiến trúc máy tính', 'Trần Ngô Như Khánh', NULL, 3, NULL, 'CNTT'),
('CNTT8', 'Nhập mông CNTT', 'Trần Ngô Như Khánh', NULL, 3, NULL, 'CNTT'),
('CNTT9', 'An toàn và bảo mật hệ thống thông tin', 'Vũ Duy Quan', NULL, 2, NULL, 'CNTT'),
('CNTT10', 'Hệ quản trị Cơ sở dữ liệu', 'Phan Thị Thanh Nga', NULL, 3, NULL, 'CNTT'),
('CT6', 'Kinh tế học đại cương', 'Vũ Trọng Đại', NULL, 3, NULL, 'QT'),
('CT7', 'Toán cao cấp', 'Lê Xuân Mai', NULL, 2, NULL, 'QT'),
('CT8', 'Luật 1', 'Trịnh Xuân Quyết', NULL, 3, NULL, 'LH'),
('CT9', 'Luật 2', 'Nguyễn Thanh Tùng', NULL, 3, NULL, 'LH'),
('KT4', 'Pháp luật kinh tế', 'Lê Thị Hoa', NULL, 3, NULL, 'QT'),
('KT6', 'Kinh tế vĩ mô', 'Nguyễn Văn Sắc', NULL, 3, NULL, 'QT'),
('KT7', 'Kế toán xây dựng cơ bản', 'Nguyễn Hồng Đăng', NULL, 3, NULL, 'QT'),
('CNTT11', 'Kỹ thuật đồ họa máy tính', 'Nguyễn Tuấn Anh', NULL, 3, NULL, 'CNTT'),
('CNTT12', 'Đồ án Hệ thống thông tin', 'Nguyễn Thị Lương', NULL, 3, NULL, 'CNTT'),
('CT13', 'Trí tuệ nhân tạo', 'Nguyễn Thị Lương', NULL, 2, NULL, 'CNTT'),
('MH22', 'Thiết kế web', 'Lê Gia Công', NULL, 3, '', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lop` varchar(50) NOT NULL,
  `quequan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masinhvien`, `username`, `password`, `hoten`, `ngaysinh`, `gioitinh`, `lop`, `quequan`, `avatar`) VALUES
('1914775', '1914775', '1914775', 'Đinh Trọng Đạt', '2001-09-03', 'Nam', 'CTK43', 'Đà Lạt', '../model/uploads/dat.jpg'),
('1914899', '1914899', '1914899', 'Trần Minh Cảnh', '2000-06-14', 'Nam', 'CTK43', 'Thanh Hóa', '../model/uploads/canh.jpg'),
('1911155', '1911155', '1911155', 'Nguyễn Anh Nhật Huy', '2001-01-12', 'Nam', 'CTK45', 'Thanh Hoá', '../model/uploads/huy.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD PRIMARY KEY (`mamonhoc`),
  ADD KEY `masinhvien` (`masinhvien`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`lop`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masinhvien`),
  ADD KEY `malop` (`lop`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD CONSTRAINT `dsdangky_ibfk_1` FOREIGN KEY (`masinhvien`) REFERENCES `sinhvien` (`masinhvien`);

--
-- Các ràng buộc cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`lop`) REFERENCES `lophoc` (`lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
