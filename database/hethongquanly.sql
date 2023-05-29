-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2023 lúc 10:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hethongquanly`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang12`
--

CREATE TABLE `bang12` (
  `id` int(11) NOT NULL,
  `cacdonvi` varchar(100) NOT NULL,
  `hovaten` varchar(35) NOT NULL,
  `chucdanh` varchar(50) NOT NULL,
  `dienthoai` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang13`
--

CREATE TABLE `bang13` (
  `id` int(11) NOT NULL,
  `khoa` varchar(100) NOT NULL,
  `ctdtdh` int(11) NOT NULL,
  `svdh` int(11) NOT NULL,
  `ctdtsaudh` int(11) NOT NULL,
  `svsaudh` int(11) NOT NULL,
  `ctdtkhac` int(11) NOT NULL,
  `svkhac` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang14`
--

CREATE TABLE `bang14` (
  `id` int(11) NOT NULL,
  `tendonvi` varchar(50) NOT NULL,
  `namthanhlap` year(4) NOT NULL,
  `linhvuchd` varchar(50) NOT NULL,
  `slnghiencuuvien` int(11) NOT NULL,
  `slnhanvien` int(11) NOT NULL,
  `namnhapds` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang15`
--

CREATE TABLE `bang15` (
  `id` int(11) NOT NULL,
  `phancap` varchar(50) NOT NULL,
  `slcohuu` int(11) NOT NULL,
  `tscohuu` int(11) NOT NULL,
  `slhopdong` int(11) NOT NULL,
  `tshopdong` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang16`
--

CREATE TABLE `bang16` (
  `id` int(11) NOT NULL,
  `phancap` varchar(50) NOT NULL,
  `slcohuu` int(11) NOT NULL,
  `slhopdong` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang17`
--

CREATE TABLE `bang17` (
  `id` int(11) NOT NULL,
  `phanloai` varchar(50) NOT NULL,
  `nam` int(11) NOT NULL,
  `nu` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang18`
--

CREATE TABLE `bang18` (
  `id` int(11) NOT NULL,
  `chucdanh` varchar(50) NOT NULL,
  `gvbienche` int(11) NOT NULL,
  `gvhopdong` int(11) NOT NULL,
  `gvquanly` int(11) NOT NULL,
  `gvthinhgiang` int(11) NOT NULL,
  `gvthinhgiangqt` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang19`
--

CREATE TABLE `bang19` (
  `id` int(11) NOT NULL,
  `hocvi` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `nu` int(11) NOT NULL,
  `bamuoi` int(11) NOT NULL,
  `bonmuoi` int(11) NOT NULL,
  `nammuoi` int(11) NOT NULL,
  `saumuoi` int(11) NOT NULL,
  `trensaumuoi` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang20`
--

CREATE TABLE `bang20` (
  `id` int(11) NOT NULL,
  `tansuatsd` varchar(100) NOT NULL,
  `gvngoaingu` int(11) NOT NULL,
  `gvtinhoc` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang21`
--

CREATE TABLE `bang21` (
  `id` int(11) NOT NULL,
  `doituong` varchar(50) NOT NULL,
  `sothisinh` int(11) NOT NULL,
  `sotrungtuyen` int(11) NOT NULL,
  `sonhaphoc` int(11) NOT NULL,
  `diemdauvao` int(11) NOT NULL,
  `diemtb` int(11) NOT NULL,
  `slsinhvienqt` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang22`
--

CREATE TABLE `bang22` (
  `id` int(11) NOT NULL,
  `doituong` varchar(11) NOT NULL,
  `sothisinh` int(11) NOT NULL,
  `sotrungtuyen` int(11) NOT NULL,
  `sonhaphoc` int(11) NOT NULL,
  `diemdauvao` int(11) NOT NULL,
  `diemtb` int(11) NOT NULL,
  `slsinhvienqt` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang23`
--

CREATE TABLE `bang23` (
  `id` int(11) NOT NULL,
  `tieuchi` varchar(100) NOT NULL,
  `giatri` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang24`
--

CREATE TABLE `bang24` (
  `id` int(11) NOT NULL,
  `tieuchi` varchar(50) NOT NULL,
  `giatri` float NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang25`
--

CREATE TABLE `bang25` (
  `id` int(11) NOT NULL,
  `tieuchi` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang26`
--

CREATE TABLE `bang26` (
  `id` int(11) NOT NULL,
  `tieuchi` varchar(200) NOT NULL,
  `giatri` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang27`
--

CREATE TABLE `bang27` (
  `id` int(11) NOT NULL,
  `tieuchi` varchar(200) NOT NULL,
  `giatri` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang28`
--

CREATE TABLE `bang28` (
  `id` int(11) NOT NULL,
  `phanloaidetai` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `namhoc` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang29`
--

CREATE TABLE `bang29` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `doanhthu` int(13) NOT NULL,
  `tiledoanhthu` int(13) NOT NULL,
  `tisodoanhthu` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang30`
--

CREATE TABLE `bang30` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `sldetai` varchar(50) NOT NULL,
  `slcbNN` int(11) NOT NULL,
  `slcbB` int(11) NOT NULL,
  `slcbT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang31`
--

CREATE TABLE `bang31` (
  `id` int(11) NOT NULL,
  `loaisach` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nam` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang32`
--

CREATE TABLE `bang32` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `slsach` varchar(100) NOT NULL,
  `slvietSCK` int(11) NOT NULL,
  `slvietSGK` int(11) NOT NULL,
  `slvietSTK` int(11) NOT NULL,
  `slvietSHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang33`
--

CREATE TABLE `bang33` (
  `id` int(11) NOT NULL,
  `loaitapchi` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nam` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang34`
--

CREATE TABLE `bang34` (
  `id` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `slbaibao` varchar(50) NOT NULL,
  `sltcQT` int(11) NOT NULL,
  `sltcTN` int(11) NOT NULL,
  `sltcT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang35`
--

CREATE TABLE `bang35` (
  `id` int(11) NOT NULL,
  `loaihoithao` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `nam` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang36`
--

CREATE TABLE `bang36` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `slbaocao` varchar(50) NOT NULL,
  `slbcQT` int(11) NOT NULL,
  `slbcTN` int(11) NOT NULL,
  `slbcT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang37`
--

CREATE TABLE `bang37` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `slbang` int(11) NOT NULL,
  `noicap` varchar(30) NOT NULL,
  `thoigiancap` date NOT NULL,
  `nguoiduoccap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang38`
--

CREATE TABLE `bang38` (
  `id` int(11) NOT NULL,
  `thanhtich` varchar(100) NOT NULL,
  `soluong` int(50) NOT NULL,
  `nam` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang39`
--

CREATE TABLE `bang39` (
  `id` int(11) NOT NULL,
  `noidung` varchar(150) NOT NULL,
  `dientich` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `sohuu` varchar(1) NOT NULL,
  `lienket` varchar(1) NOT NULL,
  `thue` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang40`
--

CREATE TABLE `bang40` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `khoinganh` varchar(30) NOT NULL,
  `dausach` varchar(100) NOT NULL,
  `bansach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang41`
--

CREATE TABLE `bang41` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `tenphong` varchar(30) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thietbi` varchar(50) NOT NULL,
  `doituongsd` varchar(30) NOT NULL,
  `dientich` int(11) NOT NULL,
  `sohuu` varchar(1) NOT NULL,
  `lienket` varchar(1) NOT NULL,
  `thue` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang42`
--

CREATE TABLE `bang42` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `tongnguonthu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang43`
--

CREATE TABLE `bang43` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `tongthuhocphi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang44`
--

CREATE TABLE `bang44` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `chiNCKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang45`
--

CREATE TABLE `bang45` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `thuNCKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang46`
--

CREATE TABLE `bang46` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `chiHDDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang47`
--

CREATE TABLE `bang47` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `chiPTdoingu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang48`
--

CREATE TABLE `bang48` (
  `id` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `chiKNdoanhnghiep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangmoi`
--

CREATE TABLE `bangmoi` (
  `Tieuchi` char(100) DEFAULT NULL,
  `Năm2022` char(4) DEFAULT NULL,
  `Năm2023` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `excel24`
--

CREATE TABLE `excel24` (
  `Tieuchi` varchar(1000) DEFAULT NULL,
  `Năm2021` float DEFAULT NULL,
  `Năm2022` float DEFAULT NULL,
  `Năm2023` float DEFAULT NULL,
  `Năm2024` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `ten`, `password`, `role`) VALUES
(1, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'khoadien', 'Khoa điện', '202cb962ac59075b964b07152d234b70', 3),
(3, 'phongdaotao', 'Phòng Đào Tạo', '202cb962ac59075b964b07152d234b70', 3),
(4, 'phongtccb', 'Phòng Tổ chức cán bộ', '202cb962ac59075b964b07152d234b70', 3),
(5, 'phongctsv', 'Phòng Công tác sinh viên', '202cb962ac59075b964b07152d234b70', 3),
(6, 'phongkhhtqt', 'Phòng KH-HTQT', '202cb962ac59075b964b07152d234b70', 3),
(7, 'bpquanhedn', 'Bộ phận QHDN-VLSV', '202cb962ac59075b964b07152d234b70', 3),
(8, 'phongqttb', 'Phòng QTTB', '202cb962ac59075b964b07152d234b70', 3),
(9, 'thuvien', 'Thư viện', '202cb962ac59075b964b07152d234b70', 3),
(10, 'phongkttc', 'Phòng KT-TC', '202cb962ac59075b964b07152d234b70', 3),
(11, 'khoacntt', 'Khoa công nghệ thông tin', '202cb962ac59075b964b07152d234b70', 2),
(12, 'khoackct', 'Khoa cơ khí chế tạo', '202cb962ac59075b964b07152d234b70', 2),
(13, 'khoackdl', 'Khoa cơ khí động lực', '202cb962ac59075b964b07152d234b70', 2),
(14, 'khoadt', 'Khoa điện tử', '202cb962ac59075b964b07152d234b70', 2),
(15, 'khoakinhte', 'Khoa kinh tế', '202cb962ac59075b964b07152d234b70', 2),
(16, 'khoagddc', 'Khoa giáo dục đại cương', '202cb962ac59075b964b07152d234b70', 2),
(17, 'khoallct', 'Khoa lý luận chính trị', '202cb962ac59075b964b07152d234b70', 2),
(18, 'khoangoaing', 'Khoa ngoại ngữ', '202cb962ac59075b964b07152d234b70', 2),
(19, 'khoasp', 'Khoa sư phạm', '202cb962ac59075b964b07152d234b70', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bang12`
--
ALTER TABLE `bang12`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang13`
--
ALTER TABLE `bang13`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang14`
--
ALTER TABLE `bang14`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang15`
--
ALTER TABLE `bang15`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang16`
--
ALTER TABLE `bang16`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang17`
--
ALTER TABLE `bang17`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang18`
--
ALTER TABLE `bang18`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang19`
--
ALTER TABLE `bang19`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang20`
--
ALTER TABLE `bang20`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang21`
--
ALTER TABLE `bang21`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang22`
--
ALTER TABLE `bang22`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang23`
--
ALTER TABLE `bang23`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang24`
--
ALTER TABLE `bang24`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang25`
--
ALTER TABLE `bang25`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang26`
--
ALTER TABLE `bang26`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang27`
--
ALTER TABLE `bang27`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang28`
--
ALTER TABLE `bang28`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang29`
--
ALTER TABLE `bang29`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang30`
--
ALTER TABLE `bang30`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang31`
--
ALTER TABLE `bang31`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang32`
--
ALTER TABLE `bang32`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang33`
--
ALTER TABLE `bang33`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang34`
--
ALTER TABLE `bang34`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang35`
--
ALTER TABLE `bang35`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang36`
--
ALTER TABLE `bang36`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang37`
--
ALTER TABLE `bang37`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang38`
--
ALTER TABLE `bang38`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang39`
--
ALTER TABLE `bang39`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang40`
--
ALTER TABLE `bang40`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang41`
--
ALTER TABLE `bang41`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang42`
--
ALTER TABLE `bang42`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang43`
--
ALTER TABLE `bang43`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang44`
--
ALTER TABLE `bang44`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang45`
--
ALTER TABLE `bang45`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang46`
--
ALTER TABLE `bang46`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang47`
--
ALTER TABLE `bang47`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang48`
--
ALTER TABLE `bang48`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bang12`
--
ALTER TABLE `bang12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang13`
--
ALTER TABLE `bang13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang14`
--
ALTER TABLE `bang14`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang15`
--
ALTER TABLE `bang15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang16`
--
ALTER TABLE `bang16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang17`
--
ALTER TABLE `bang17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang18`
--
ALTER TABLE `bang18`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang19`
--
ALTER TABLE `bang19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang20`
--
ALTER TABLE `bang20`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang21`
--
ALTER TABLE `bang21`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang22`
--
ALTER TABLE `bang22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang23`
--
ALTER TABLE `bang23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang24`
--
ALTER TABLE `bang24`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang25`
--
ALTER TABLE `bang25`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang26`
--
ALTER TABLE `bang26`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang27`
--
ALTER TABLE `bang27`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang28`
--
ALTER TABLE `bang28`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang29`
--
ALTER TABLE `bang29`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang30`
--
ALTER TABLE `bang30`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang31`
--
ALTER TABLE `bang31`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang32`
--
ALTER TABLE `bang32`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang33`
--
ALTER TABLE `bang33`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang34`
--
ALTER TABLE `bang34`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang35`
--
ALTER TABLE `bang35`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang36`
--
ALTER TABLE `bang36`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang37`
--
ALTER TABLE `bang37`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang38`
--
ALTER TABLE `bang38`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang39`
--
ALTER TABLE `bang39`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang40`
--
ALTER TABLE `bang40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang41`
--
ALTER TABLE `bang41`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang42`
--
ALTER TABLE `bang42`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang43`
--
ALTER TABLE `bang43`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang44`
--
ALTER TABLE `bang44`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang45`
--
ALTER TABLE `bang45`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang46`
--
ALTER TABLE `bang46`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang47`
--
ALTER TABLE `bang47`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bang48`
--
ALTER TABLE `bang48`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
