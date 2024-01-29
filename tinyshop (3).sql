-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 10:06 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tinyshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_username` varchar(255) NOT NULL,
  `bill_hoten` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_sdt` varchar(50) NOT NULL,
  `bill_diachi` varchar(255) NOT NULL,
  `bill_thanhpho` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp \r\n2. Chuyển khoản\r\n3. Thanh toán online',
  `bill_ngay_dathang` varchar(50) DEFAULT NULL,
  `bill_tong_donhang` int(10) NOT NULL DEFAULT 0,
  `bill_trangthai` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Đang xử lý 2.Đang giao hàng 3. Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_username`, `bill_hoten`, `bill_email`, `bill_sdt`, `bill_diachi`, `bill_thanhpho`, `bill_pttt`, `bill_ngay_dathang`, `bill_tong_donhang`, `bill_trangthai`) VALUES
(1, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:20:57pm 01/10/2023', 1030, 0),
(2, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:24:11pm 01/10/2023', 1030, 0),
(3, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:29:14pm 01/10/2023', 1030, 0),
(4, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:30:15pm 01/10/2023', 1030, 0),
(5, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:35:46pm 01/10/2023', 1030, 0),
(6, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:41:10pm 01/10/2023', 1030, 0),
(7, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:41:44pm 01/10/2023', 1030, 0),
(8, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:42:59pm 01/10/2023', 1030, 0),
(9, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:43:20pm 01/10/2023', 1030, 0),
(10, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:46:25pm 01/10/2023', 1030, 0),
(11, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:47:31pm 01/10/2023', 1030, 0),
(12, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:48:16pm 01/10/2023', 1030, 0),
(13, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:48:29pm 01/10/2023', 1030, 0),
(14, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:53:16pm 01/10/2023', 1030, 0),
(15, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:53:28pm 01/10/2023', 1030, 0),
(16, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:53:50pm 01/10/2023', 1030, 0),
(17, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:54:04pm 01/10/2023', 1030, 0),
(18, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '01:56:59pm 01/10/2023', 1030, 0),
(19, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '01:58:47pm 01/10/2023', 1030, 0),
(20, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '01:59:03pm 01/10/2023', 1030, 0),
(21, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:01:44pm 01/10/2023', 1030, 0),
(22, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:02:55pm 01/10/2023', 1030, 0),
(23, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:04:40pm 01/10/2023', 1030, 0),
(24, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:06:15pm 01/10/2023', 1030, 0),
(25, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:06:52pm 01/10/2023', 1030, 0),
(26, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:09:28pm 01/10/2023', 1030, 0),
(27, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:10:31pm 01/10/2023', 1030, 0),
(28, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:10:43pm 01/10/2023', 1030, 0),
(29, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:11:08pm 01/10/2023', 1030, 0),
(30, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:12:53pm 01/10/2023', 1030, 0),
(31, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:14:41pm 01/10/2023', 1030, 0),
(32, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:14:49pm 01/10/2023', 1030, 0),
(33, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:22:30pm 01/10/2023', 1030, 0),
(34, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 1, '02:22:48pm 01/10/2023', 1030, 0),
(35, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '05:33:13pm 01/10/2023', 344119, 0),
(36, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '05:34:29pm 01/10/2023', 344119, 0),
(37, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 2, '05:36:22pm 01/10/2023', 344119, 0),
(38, 0, 'Bình ngô', 'binhngo', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:00:14pm 01/10/2023', 1233, 0),
(39, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:06:19pm 01/10/2023', 34878, 0),
(40, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:08:40pm 01/10/2023', 0, 0),
(41, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:31:59pm 01/10/2023', 0, 0),
(42, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:32:11pm 01/10/2023', 0, 0),
(43, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:32:42pm 01/10/2023', 0, 0),
(44, 0, '', '', '', '', '', '', 1, '06:34:50pm 01/10/2023', 343, 0),
(45, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '06:35:32pm 01/10/2023', 343, 0),
(46, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 3, '06:36:05pm 01/10/2023', 488, 0),
(47, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 3, '06:36:49pm 01/10/2023', 488, 0),
(48, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 3, '06:37:17pm 01/10/2023', 488, 0),
(49, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '06:42:23pm 01/10/2023', 488, 0),
(50, 0, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '06:42:31pm 01/10/2023', 0, 0),
(51, 0, 'Ngô', 'Bình', 'binhntps30045@fpt.edu.vn', '0339049735', '2/1/16 Tân Chánh Hiệp 18', 'Tân Chánh Hiệp', 2, '06:45:20pm 01/10/2023', 799086, 0),
(52, 11, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '07:23:03pm 01/10/2023', 686, 0),
(53, 11, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 2, '07:23:19pm 01/10/2023', 344, 0),
(54, 11, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '07:24:30pm 01/10/2023', 1778, 0),
(55, 11, 'admin3', 'admin2', 'binhntps30045@fpt.edu.vn', '', '', '', 1, '09:20:10pm 04/10/2023', 90909090, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh_bl` int(11) NOT NULL,
  `id_kh_bl` int(11) NOT NULL,
  `ngay_bl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh_bl`, `id_kh_bl`, `ngay_bl`) VALUES
(1, '', 41, 14, '01:49:17pm 29/09/2023'),
(2, 'ccccc', 41, 14, '01:49:31pm 29/09/2023'),
(3, 'aaaa', 41, 14, '01:53:52pm 29/09/2023'),
(4, 'đã', 41, 14, '02:05:23pm 29/09/2023'),
(5, 'kimochii', 39, 14, '02:09:46pm 29/09/2023'),
(6, 'đã', 31, 11, '06:44:55pm 01/10/2023'),
(7, 'phê', 31, 11, '06:45:05pm 01/10/2023'),
(8, 'đã', 23, 11, '09:18:14pm 04/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ten_hh` varchar(255) DEFAULT NULL,
  `don_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `hinh` varchar(255) DEFAULT NULL,
  `so_luong` int(3) NOT NULL,
  `thanh_tien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `ten_hh`, `don_gia`, `hinh`, `so_luong`, `thanh_tien`, `idbill`) VALUES
(1, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 1),
(2, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 1),
(3, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 1),
(4, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 2),
(5, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 2),
(6, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 2),
(7, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 3),
(8, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 3),
(9, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 3),
(10, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 4),
(11, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 4),
(12, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 4),
(13, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 5),
(14, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 5),
(15, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 5),
(16, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 6),
(17, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 6),
(18, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 6),
(19, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 7),
(20, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 7),
(21, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 7),
(22, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 8),
(23, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 8),
(24, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 8),
(25, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 9),
(26, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 9),
(27, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 9),
(28, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 10),
(29, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 10),
(30, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 10),
(31, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 11),
(32, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 11),
(33, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 11),
(34, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 12),
(35, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 12),
(36, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 12),
(37, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 13),
(38, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 13),
(39, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 13),
(40, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 14),
(41, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 14),
(42, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 14),
(43, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 15),
(44, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 15),
(45, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 15),
(46, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 16),
(47, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 16),
(48, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 16),
(49, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 17),
(50, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 17),
(51, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 17),
(52, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 18),
(53, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 18),
(54, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 18),
(55, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 19),
(56, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 19),
(57, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 19),
(58, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 20),
(59, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 20),
(60, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 20),
(61, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 21),
(62, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 21),
(63, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 21),
(64, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 22),
(65, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 22),
(66, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 22),
(67, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 23),
(68, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 23),
(69, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 23),
(70, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 24),
(71, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 24),
(72, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 24),
(73, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 25),
(74, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 25),
(75, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 25),
(76, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 26),
(77, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 26),
(78, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 26),
(79, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 27),
(80, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 27),
(81, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 27),
(82, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 28),
(83, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 28),
(84, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 28),
(85, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 29),
(86, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 29),
(87, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 29),
(88, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 30),
(89, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 30),
(90, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 30),
(91, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 31),
(92, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 31),
(93, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 31),
(94, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 32),
(95, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 32),
(96, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 32),
(97, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 33),
(98, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 33),
(99, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 33),
(100, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 34),
(101, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 34),
(102, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 34),
(104, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 36),
(105, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 36),
(106, 11, 31, 'Bàn Phím Esport Q75 Azure', 343432.00, 'uploads/esport_q75_azure.jpg', 1, 343432, 36),
(107, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 37),
(108, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 37),
(109, 11, 31, 'Bàn Phím Esport Q75 Azure', 343432.00, 'uploads/esport_q75_azure.jpg', 1, 343432, 37),
(110, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 38),
(111, 11, 38, 'Keycaps Matcha', 889.00, 'uploads/kc_mathca.jpg', 1, 889, 38),
(112, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 39),
(113, 11, 29, 'Bàn Phím E-Dra K395W', 34535.00, 'uploads/bpc_e-dra_k395W.jpg', 1, 34535, 39),
(115, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 45),
(116, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 46),
(117, 11, 43, 'Keycaps Mario', 145.00, 'uploads/kc_mario.jfif', 1, 145, 46),
(118, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 47),
(119, 11, 43, 'Keycaps Mario', 145.00, 'uploads/kc_mario.jfif', 1, 145, 47),
(120, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 48),
(121, 11, 43, 'Keycaps Mario', 145.00, 'uploads/kc_mario.jfif', 1, 145, 48),
(122, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 49),
(123, 11, 43, 'Keycaps Mario', 145.00, 'uploads/kc_mario.jfif', 1, 145, 49),
(124, 11, 28, 'Bàn phím văn phòng Apple Xanh ngọc ', 455654.00, 'uploads/bpc_dep_xanh.jfif', 1, 455654, 51),
(125, 11, 31, 'Bàn Phím Esport Q75 Azure', 343432.00, 'uploads/esport_q75_azure.jpg', 1, 343432, 51),
(126, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 52),
(127, 11, 42, 'Keycaps OnePiece', 343.00, 'uploads/kc_onepiece.jpg', 1, 343, 52),
(128, 11, 41, 'Keycaps Sóng Biển ', 344.00, 'uploads/kc_suft.jpg', 1, 344, 53),
(129, 11, 38, 'Keycaps Matcha', 889.00, 'uploads/kc_mathca.jpg', 1, 889, 54),
(130, 11, 38, 'Keycaps Matcha', 889.00, 'uploads/kc_mathca.jpg', 1, 889, 54),
(131, 11, 24, 'Bàn phím Keychron - K8 Pro low-profile', 45454545.00, 'uploads/Keychron_k8_pro_lowprofile.jfif', 1, 45454545, 55),
(132, 11, 24, 'Bàn phím Keychron - K8 Pro low-profile', 45454545.00, 'uploads/Keychron_k8_pro_lowprofile.jfif', 1, 45454545, 55);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(50) NOT NULL COMMENT 'tên hàng hóa',
  `don_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `giam_gia` double(10,2) DEFAULT 0.00,
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` text NOT NULL,
  `dac_biet` tinyint(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loaihh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loaihh`) VALUES
(21, 'Bàn phím văn phòng - Trắng Apple', 1111.00, 0.00, 'bpc_polarnight.jpg', '2023-09-19', 'Bàn phím văn phòng - Trắng Apple', 0, 0, 30),
(22, 'Bàn phím văn phòng + chuột', 232322.00, 0.00, 'banphimvanphong_trang+chuot.jpg', '2023-09-19', 'Bàn phím văn phòng + chuột', 0, 0, 30),
(23, 'Bàn phím low-profile', 6777777.00, 0.00, 'ban-phim-co-cidoo-abm084-tri-mode-white.jpg', '2023-09-19', 'Bàn phím low-profile', 0, 15, 32),
(24, 'Bàn phím Keychron - K8 Pro low-profile', 45454545.00, 0.00, 'Keychron_k8_pro_lowprofile.jfif', '2023-09-19', 'Bàn phím Keychron - K8 Pro low-profile', 0, 90, 32),
(25, 'Bàn phím JameDonkey A3 ', 778877.00, 0.00, 'JamesDonkeyA3.jfif', '2023-09-19', 'Bàn phím JameDonkey A3 - Bản hồng trắng', 0, 70, 29),
(26, 'Bàn phím AKKO 3098N', 4545444.00, 0.00, 'AKKO_3098N.jfif', '0000-00-00', 'Bàn phím AKKO 3098N đen vàng', 0, 34, 29),
(27, 'JamesDonkeyA3 - Bản Xám Trắng', 997788.00, 0.00, 'ban-phim-co-james-donkey-a3-thinkpro-nicespace.png', '2023-09-19', 'JamesDonkeyA3 - Bản Xám Trắng', 0, 50, 29),
(28, 'Bàn phím văn phòng Apple Xanh ngọc ', 455654.00, 0.00, 'akko_worldtour.jpg', '2023-09-19', 'Bàn phím văn phòng Apple Xanh ngọc ', 0, 0, 30),
(29, 'Bàn Phím E-Dra K395W', 34535.00, 0.00, 'bpc_e-dra_k395W.jpg', '2023-09-19', 'Bàn Phím E-Dra K395W', 0, 90, 29),
(30, 'Bàn Phím E-Dra EK300', 34343.00, 0.00, 'eDra_EK300.png', '2023-09-19', 'Bàn Phím E-Dra EK300', 0, 0, 29),
(31, 'Bàn Phím Esport Q75 Azure', 343432.00, 0.00, 'esport_q75_azure.jpg', '2023-09-19', 'Bàn Phím Esport Q75 Azure', 0, 89, 28),
(32, 'Bàn phím GK85', 450.00, 0.00, 'Gk85.png', '2023-09-19', 'Bàn phím GK85', 0, 0, 25),
(33, 'Phím giả cơ LEB RGB', 232.00, 0.00, 'hjk1.png', '2023-09-29', 'Phím giả cơ LEB RGB', 0, 0, 29),
(34, 'Phím Logitach văn phòng quốc dân', 100.00, 0.00, 'logitech_vanphong.png', '2023-09-19', 'Phím Logitach văn phòng quốc dân', 0, 0, 30),
(36, 'Bàn phím tròn hồng', 1234.00, 0.00, 'akko_blue.jfif', '2023-09-18', 'Bàn phím tròn hồng', 0, 0, 33),
(37, 'Bàn phím tròn - Vàng Đen', 676.00, 0.00, 'bpc_tron_vangden.jfif', '2023-09-16', 'Bàn phím tròn - Vàng Đen', 0, 23, 33),
(38, 'Keycaps Matcha', 889.00, 0.00, 'kc_mathca.jpg', '2023-09-22', 'Keycaps Matcha thịnh hành', 0, 0, 24),
(39, 'Keycaps Dragonball', 2322.00, 0.00, 'gokukb1.jpg', '2023-09-16', 'Keycaps Dragonball', 0, 0, 24),
(40, 'Keycaps Pokemon', 1222.00, 0.00, 'AKKO_3098N.jfif', '2023-09-22', 'Keycaps Pokemon', 0, 0, 24),
(41, 'Keycaps Sóng Biển ', 344.00, 0.00, 'kc_suft.jpg', '2023-09-22', 'Keycaps Sóng Biển ', 0, 0, 24),
(42, 'Keycaps OnePiece', 343.00, 0.00, 'kc_onepiece.jpg', '2023-09-22', 'Keycaps OnePiece', 0, 0, 24),
(43, 'Keycaps Mario', 145.00, 0.00, 'kc_mario.jfif', '2023-09-22', 'Keycaps Mario', 0, 0, 24),
(44, 'Switch Cream Blue V3 Akko', 20.00, 0.00, 'akko-switch-v3-cream-blue-02.jpg', '2023-10-05', '', 0, 0, 34),
(45, 'Switch Jelly Black Akko', 12.00, 0.00, 'akko-cs-switch-jelly-black-001.jpg', '2023-10-05', '', 0, 0, 34),
(46, 'Switch Haze Pink Akko', 23.00, 0.00, 'sw_haze_pink.jfif', '2023-10-05', '', 0, 444, 34),
(47, 'Switch Tactile Lavander', 33.00, 0.00, 'sw_lavender.jpg', '2023-10-05', '', 0, 0, 34),
(48, 'Switch Starfish Akko', 123.00, 0.00, 'akko-cs-starfish-45-switch-01.jpg', '0000-00-00', '', 0, 0, 34),
(49, 'Switch Crytal Wine Red', 22.00, 0.00, 'Crytal_sw.jfif', '0000-00-00', '', 0, 0, 34),
(50, 'Red Switch Radient', 11.00, 0.00, 'akko-radiant-red-45-switch-1.jpg', '2023-10-05', '', 0, 0, 34),
(51, 'Switch White Akko', 33.00, 0.00, 'akko_white.webp', '2023-10-05', '', 0, 0, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `ma_kh` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `vai_tro` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `ma_kh`, `ho_ten`, `mat_khau`, `email`, `hinh`, `vai_tro`) VALUES
(10, 'admin', 'admin', '$2y$10$U1YXQ2FLE.aaqE2R7hUq5upY4tn/9uFLv2wREXqvO7fzXxBGSWS0W', 'binhntps30045@fpt.edu.vn', '', b'0'),
(11, 'admin3', 'admin2', '$2y$10$iL2ZBLiFVPlGt1KFW7aI6.5VpPNEsVuyBnyaAoN9dhvkqPIW757Pi', 'binhntps30045@fpt.edu.vn', 'img_login.jpg', b'0'),
(12, 'trungtin', 'trungtin', '$2y$10$bFFd2FDZw1C4AaKGakIS1.5TFT8Ug5AG78raRQjdwVQMG7EtAXeFy', 'tin933102@gmail.com', '', b'0'),
(13, 'NgoThanhBinh', 'BinhNgo', '$2y$10$xEaNMZmp1QZ7nMDembA3SOieeido3MqybGTOI0mpLwA4s61VW9lhO', 'binhntps30045@fpt.edu.vn', 'img_update.jpg', b'0'),
(14, 'admin10', 'admin10', '$2y$10$Ew2iShZ9Ww5lqHcOH5Fq1uqMO6KSJ61JxPVmyEtMa1ub4xRCDtM82', 'binhntps30045@fpt.edu.vn', '', b'1'),
(15, 'test', 'test', '$2y$10$aEWbG.YKwX8ky1IeN3F5FeYM5hUeDNg9hJU6K1Sb5A4l/TF29rkGW', 'binhntps30045@fpt.edu.vn', 'img_login2.jpg', b'0'),
(16, 'binh', 'binh', '$2y$10$3ekZ3z4WY.3OCraXDHBoF.BqgQGn..KW/LamlnOkr6pIEkivs9cr2', 'binhntps30045@fpt.edu.vn', '', b'0'),
(17, 'admin99', 'admin99', '$2y$10$S8PuQBZXe4oxCQiN9qbNBeMKaOtUVwMb1jMsNpRsL8OQqfekavIMK', 'binhntps30045@fpt.edu.vn', 'img_login.jpg', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(24, 'Keycaps'),
(25, 'Bàn phím giá rẻ'),
(28, 'Bàn phím custom'),
(29, 'Bàn phím gaming'),
(30, 'Bàn phím văn phòng'),
(31, 'Dụng Cụ lube keyboard'),
(32, 'Bàn phím Low-profile '),
(33, 'Bàn phím keycaps tròn'),
(34, 'Switch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_binh_luan_hang_hoa` (`ma_hh_bl`),
  ADD KEY `fk_khach_hang_binh_luan` (`id_kh_bl`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_cart` (`iduser`),
  ADD KEY `fk_hang_hoa_cart` (`idpro`),
  ADD KEY `fk_bill_cart` (`idbill`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hanghoa_loai` (`ma_loaihh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binh_luan_hang_hoa` FOREIGN KEY (`ma_hh_bl`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `fk_khach_hang_binh_luan` FOREIGN KEY (`id_kh_bl`) REFERENCES `khach_hang` (`id_kh`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_bill_cart` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_hang_hoa_cart` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `fk_user_cart` FOREIGN KEY (`iduser`) REFERENCES `khach_hang` (`id_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hanghoa_loai` FOREIGN KEY (`ma_loaihh`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
