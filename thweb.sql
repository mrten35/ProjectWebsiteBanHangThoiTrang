-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Dec 22, 2021 at 03:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `manv` char(10) NOT NULL,
  `tennv` varchar(50) NOT NULL,
  `email` char(50) NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`manv`, `tennv`, `email`, `username`, `password`) VALUES
('nv01', 'Nam Tân Binh', 'nam0147@gmail.com', 'nam', '123'),
('nv02', 'Nam Tân', 'nam011147@gmail.com', 'nam123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madm` char(10) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madm`, `tendm`, `soluong`) VALUES
('AK', 'Áo khoát', 10),
('AT', 'Áo thun nữ', 10),
('ATN', 'Áo thun nam', 1),
('CV', 'Chân váy', 1),
('DN', 'Đầm nữ', 10),
('TL', 'Thắc lưng', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madh` char(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `ngaydat` datetime NOT NULL DEFAULT current_timestamp(),
  `ngaygiao` datetime NOT NULL,
  `phuongthuctt` varchar(50) NOT NULL,
  `manv` char(10) NOT NULL,
  `makh` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `giamoi` double NOT NULL,
  `giacu` double DEFAULT NULL,
  `mota` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `hinh` char(50) NOT NULL,
  `madm` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giamoi`, `giacu`, `mota`, `soluong`, `mausac`, `hinh`, `madm`) VALUES
(1, 'ÁO THUN POLO SPKM', 120000, 142000, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 10, 'Trắng', 'ATN1.jpg', 'ATN'),
(2, 'ÁO THUN POLO SPNP', 120000, NULL, '1', 10, 'Vàng nhạt', 'ATN2.jpg', 'ATN'),
(3, 'ÁO THUN POLO SPCK', 140000, NULL, '1', 5, 'ĐEN', 'ATN3.jpg', 'ATN'),
(4, 'ÁO THUN POLO PNC', 76000, NULL, '1', 5, 'XANH', 'ATN4.jpg', 'ATN'),
(5, 'ÁO THUN POLO SPOD', 162000, NULL, '1', 1, 'Xanh Mint', 'ATN5.jpg', 'ATN'),
(6, 'ÁO THUN POLO SPVE', 230000, NULL, '1', 1, 'Vàng', 'ATN6.jpg', 'ATN'),
(7, 'ÁO THUN POLO SPDK', 158000, 162000, '2', 2, 'Kem', 'ATN7.jpg', 'ATN'),
(8, 'ÁO THUN POLO SPAH', 85000, NULL, '2', 2, 'Xanh', 'ATN8.jpg', 'ATN'),
(9, 'Thắt lưng đẹp da bò nguyên miếng', 920000, NULL, '1', 10, 'Đen', 'thac lung nam/1.jpg', 'TL'),
(10, 'Thắt lưng nam quần Jean hàng hiệu', 628000, NULL, '1', 1, 'Đen', 'thac lung nam/2.jpg', 'TL'),
(11, 'Thắt lưng da cá sấu dây nối bản 3.5 cm ', 440000, NULL, '1', 1, 'Đen', 'thac lung nam/3.jpg', 'TL'),
(12, 'Thắt lưng nam quần Jean DJTANHZ', 776000, NULL, '1', 1, 'Đen', 'thac lung nam/4.jpg', 'TL'),
(15, 'ÁO THUN POLO SPCK', 150000, NULL, '1', 5, 'ĐEN', 'ATNATN2.jpg', 'ATN'),
(16, 'ÁO THUN POLO SPNP', 150000, NULL, '1', 10, 'Vàng nhạt', 'ATNATN2.jpg', 'ATN'),
(17, 'CHÂN VẤY 3 TẦNG', 170000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất vải mỏng, lý do bên mình chọn làm loại vải nàylà vì bên mình đã làm trong lĩnh vực may mặc rất nhiều năm, nhận thấy những ưu điểm nổi bật của loại vải nà', 20, 'Sọc caro', 'img/image/chanvay/3.jpg', 'CV'),
(18, 'CHÂN VÁY A XÒE', 240000, 260000, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 20, 'Trắng', 'img/image/chanvay/1.jpg', 'CV'),
(19, 'CHÂN VÁY BÚT CHÌ 1 NÚT', 320000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 10, 'Xanh', 'img/image/chanvay/2.jpg', 'CV'),
(22, 'CHÂN VẤY RÚT DÂY', 460000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 13, 'Đỏ', 'img/image/chanvay/4.jpg', 'CV'),
(23, 'CHÂN VẤY HOA', 275000, 300000, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 15, 'Kem', 'img/image/chanvay/5.jpg', 'CV'),
(24, 'CHÂN VẤY PHỐI NÚT', 345000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 14, 'Trắng', 'img/image/chanvay/6.jpg', 'CV'),
(28, 'ĐẦM CHỮ A 2 LỚP', 240000, 260000, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 20, 'Xanh', 'img/image/đầm nữ/1.jpg', 'DN'),
(29, 'TWEED DRESSES', 320000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 20, 'Đỏ dô', 'img/image/đầm nữ/2.jpg', 'DN'),
(32, 'ĐẦM REN ÔM VIỀN MÀU', 170000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 30, 'Đen', 'img/image/đầm nữ/3.jpg', 'DN'),
(33, 'Đầm nhung cổ vuông', 460000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 45, 'Đỏ', 'img/image/đầm nữ/4.jpg', 'DN'),
(34, 'ĐẦM ÔM TAY HẾN 2 LỚP', 2750000, 300000, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 23, 'Trắng', 'img/image/đầm nữ/5.jpg', 'DN'),
(35, 'ĐẦM XÒE TAY HẾN', 345000, NULL, 'Thông tin sản phẩm quần jean ôm cạp cao nắp lệch hót bên mình sản xuất có chất liệu co giãn tốt, chất jean mỏng, lý do bên mình chọn làm loại jean mỏng là vì bên mình đã làm trong lĩnh vực jean rất nhiều năm, nhận thấy những ưu điểm nổi bật jean mỏng đem ', 34, 'Trắng', 'img/image/đầm nữ/6.jpg', 'DN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `makh` int(20) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` char(50) NOT NULL,
  `tendangnhap` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `sdt` char(10) NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`makh`, `tenkh`, `email`, `tendangnhap`, `password`, `sdt`, `gioitinh`) VALUES
(3, 'Lê Thị Kim Ngân', 'lengan9391@gmail.com', 'LeNgan', '827ccb0eea8a706c4c34a16891f84e7b', '0971724546', 'Nữ'),
(7, 'Trần Văn A', 'tranvan@gmail.com', 'TranVan', '202cb962ac59075b964b07152d234b70', '8765432', 'Nam'),
(24, 'Huỳnh Lệ Hoa', 'lehoa@gmail.com', 'LeHoa', '827ccb0eea8a706c4c34a16891f84e7b', '8765432', 'Nữ'),
(25, 'Lê Thị Mai', 'lethimai@gmail.com', 'LeMai', '827ccb0eea8a706c4c34a16891f84e7b', '0971724546', 'Nữ'),
(31, 'Huỳnh Văn Khang', 'khanghuynh@gmail.com', 'KhangHuynh', '827ccb0eea8a706c4c34a16891f84e7b', '0167552745', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`madm`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `fk_admin` (`manv`),
  ADD KEY `fk_user` (`makh`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_madm` (`madm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`makh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `makh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`manv`) REFERENCES `admin` (`manv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`makh`) REFERENCES `user` (`makh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_madm` FOREIGN KEY (`madm`) REFERENCES `danhmucsanpham` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
