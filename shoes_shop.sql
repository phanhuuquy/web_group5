-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 19, 2023 lúc 03:19 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hangs`
--

CREATE TABLE `chi_tiet_don_hangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dh` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hangs`
--

INSERT INTO `chi_tiet_don_hangs` (`id`, `id_dh`, `id_sp`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(4, 3, 1, 1, 1200000, NULL, NULL),
(5, 3, 10, 1, 699000, NULL, NULL),
(7, 5, 4, 1, 1590000, NULL, NULL),
(8, 6, 1, 3, 1200000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id_danh_gia` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `ten_danh_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_gia_binh_luan` longtext COLLATE utf8mb4_unicode_ci,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(10) UNSIGNED NOT NULL,
  `ten_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tong_tien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_thuc_thanh_toan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoa_don` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `id_gian_hang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `ten_nguoi_nhan`, `sdt`, `dia_chi_nhan`, `ghi_chu`, `tong_tien`, `hinh_thuc_thanh_toan`, `hoa_don`, `status`, `id_gian_hang`, `created_at`, `updated_at`) VALUES
(3, 'Tu', '0123456787', 'Ha Noi', '1', '1899000', 'Sau khi nhận hàng', 'a:4:{i:1;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay13.jpg\";s:11:\"ten_sanpham\";s:6:\"NMD R2\";s:7:\"don_gia\";s:7:\"1200000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:1;}i:10;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay16.jpg\";s:11:\"ten_sanpham\";s:12:\"CNVR-WZ87_V1\";s:7:\"don_gia\";s:6:\"699000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:1;}i:2;a:5:{s:10:\"hinh_anh_1\";s:9:\"giay4.jpg\";s:11:\"ten_sanpham\";s:12:\"Nike Joma IC\";s:7:\"don_gia\";s:6:\"666000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:2;}i:4;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay20.jpg\";s:11:\"ten_sanpham\";s:19:\"Adidas PUREBOOST 21\";s:7:\"don_gia\";s:7:\"1590000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:3;}}', 0, 1, '2023-07-15 08:17:04', '2023-07-15 08:17:04'),
(5, 'Tu', '0123456787', 'Ha Noi', '1', '1590000', 'Sau khi nhận hàng', 'a:4:{i:1;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay13.jpg\";s:11:\"ten_sanpham\";s:6:\"NMD R2\";s:7:\"don_gia\";s:7:\"1200000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:1;}i:10;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay16.jpg\";s:11:\"ten_sanpham\";s:12:\"CNVR-WZ87_V1\";s:7:\"don_gia\";s:6:\"699000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:1;}i:2;a:5:{s:10:\"hinh_anh_1\";s:9:\"giay4.jpg\";s:11:\"ten_sanpham\";s:12:\"Nike Joma IC\";s:7:\"don_gia\";s:6:\"666000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:2;}i:4;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay20.jpg\";s:11:\"ten_sanpham\";s:19:\"Adidas PUREBOOST 21\";s:7:\"don_gia\";s:7:\"1590000\";s:8:\"so_luong\";i:1;s:12:\"id_gian_hang\";i:3;}}', 2, 3, '2023-07-15 08:17:04', '2023-07-15 09:07:51'),
(6, 'user', '0368822642', 'Ha Noi', 'a', '3600000', 'Sau khi nhận hàng', 'a:1:{i:1;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay13.jpg\";s:11:\"ten_sanpham\";s:6:\"NMD R2\";s:7:\"don_gia\";s:7:\"1200000\";s:8:\"so_luong\";s:1:\"3\";s:12:\"id_gian_hang\";i:1;}}', 0, 1, '2023-07-19 07:04:20', '2023-07-19 07:04:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gian_hangs`
--

CREATE TABLE `gian_hangs` (
  `id_gian_hang` int(10) UNSIGNED NOT NULL,
  `ten_gianhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_loai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gian_hangs`
--

INSERT INTO `gian_hangs` (`id_gian_hang`, `ten_gianhang`, `status`, `id_user`, `id_loai`, `created_at`, `updated_at`) VALUES
(1, 'Shop Giày', 1, 2, 1, NULL, NULL),
(3, 'Shop Quần', 1, 4, 3, NULL, NULL),
(4, 'Đồ gia dụng', 1, 8, 2, '2023-07-19 07:05:11', '2023-07-19 07:06:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(10) UNSIGNED NOT NULL,
  `ten_khuyen_mai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tri_khuyen_mai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_khuyen_mai`, `gia_tri_khuyen_mai`) VALUES
(1, 'Không khuyễn mãi', '0'),
(2, 'Ngày lễ', '15'),
(3, 'Mới ra mắt', '10'),
(4, 'Sale cuối năm', '5'),
(5, 'Chủ vui nên khuyến mãi', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loais`
--

CREATE TABLE `loais` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loais`
--

INSERT INTO `loais` (`id`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'Thực phẩm', NULL, NULL),
(2, 'Gia dụng', NULL, NULL),
(3, 'Thời trang', NULL, NULL),
(4, 'Mỹ phẩm', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_resets_table', 1),
(29, '2019_08_19_000000_create_failed_jobs_table', 1),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(31, '2020_07_15_031224_create_loais_table', 1),
(32, '2021_07_15_012948_create_gian_hangs_table', 1),
(33, '2021_11_02_024954_create_sessions_table', 1),
(34, '2021_11_16_082748_khuyen_mai_table', 1),
(35, '2021_11_16_101507_phan_quyen_table', 1),
(36, '2023_07_14_025722_create_don_hang_table', 1),
(37, '2023_07_15_031013_create_san_phams_table', 1),
(38, '2023_07_15_135556_create_chi_tiet_don_hangs_table', 1),
(39, '2023_11_30_143926_create_danh_gia_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `id_phan_quyen` int(10) UNSIGNED NOT NULL,
  `ten_phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_quyen`
--

INSERT INTO `phan_quyen` (`id_phan_quyen`, `ten_phan_quyen`) VALUES
(1, 'Quản trị viên'),
(2, 'Nhân viên'),
(3, 'Người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `ten_sanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` longtext COLLATE utf8mb4_unicode_ci,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_gian_hang` int(10) UNSIGNED NOT NULL,
  `id_loai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id_sanpham`, `ten_sanpham`, `mo_ta`, `don_gia`, `so_luong`, `hinh_anh_1`, `hinh_anh_2`, `hinh_anh_3`, `hinh_anh_4`, `id_gian_hang`, `id_loai`, `created_at`, `updated_at`) VALUES
(1, 'NMD R2', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1200000', '100', 'giay13.jpg', 'giay13.jpg', 'giay13.jpg', 'giay13.jpg', 1, 1, '2021-11-25 07:59:26', '2021-11-25 07:59:26'),
(4, 'Adidas PUREBOOST 21', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1590000', '100', 'giay20.jpg', 'giay20.jpg', 'giay20.jpg', 'giay20.jpg', 3, 2, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(5, 'Adidas STAN SMITH', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1290000', '100', 'giay21.jpg', 'giay21.jpg', 'giay21.jpg', 'giay21.jpg', 3, 2, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(6, 'Adidas ALPHAMAGMA', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '799000', '100', 'giay22.jpg', 'giay22.jpg', 'giay22.jpg', 'giay22.jpg', 3, 2, '2021-12-01 10:21:31', '2023-07-15 08:10:48'),
(7, 'Adidas RUNFALCON 2.0', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '599000', '100', 'giay23.jpg', 'giay23.jpg', 'giay23.jpg', 'giay23.jpg', 3, 2, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(8, 'Adidas Tiempo Legend 9', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay2.jpg', 'giay2.jpg', 'giay2.jpg', 'giay2.jpg', 3, 2, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(10, 'CNVR-WZ87_V1', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '699000', '100', 'giay16.jpg', 'giay16.jpg', 'giay16.jpg', 'giay16.jpg', 1, 3, '2021-12-01 10:21:31', '2023-07-15 08:10:48'),
(11, 'Run Star Hike Sneaker', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '966000', '100', 'giay17.jpg', 'giay17.jpg', 'giay17.jpg', 'giay17.jpg', 1, 3, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(12, 'Chuck 70 Sneaker', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1280000', '100', 'giay18.jpg', 'giay18.jpg', 'giay18.jpg', 'giay18.jpg', 1, 3, '2021-12-01 10:21:31', '2023-07-15 08:10:48'),
(13, 'Archive Paint Splatter', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1880000', '100', 'giay19.jpg', 'giay19.jpg', 'giay19.jpg', 'giay19.jpg', 1, 3, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(17, 'Adidas X Tango 17.1 FG', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay5.jpg', 'giay5.jpg', 'giay5.jpg', 'giay5.jpg', 3, 3, '2021-12-01 10:21:31', '2023-07-15 08:10:48'),
(21, 'ADIDAS X Speedflow', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay12.jpg', 'giay12.jpg', 'giay12.jpg', 'giay12.jpg', 3, 2, '2021-12-01 10:21:31', '2023-07-15 08:10:48'),
(22, 'Jung 96', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '899000', '100', 'giay14.jpg', 'giay14.jpg', 'giay14.jpg', 'giay14.jpg', 3, 2, '2021-12-01 10:21:31', '2023-07-15 08:10:48'),
(23, 'Mercurial Superfly', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay6.jpg', 'giay6.jpg', 'giay6.jpg', 'giay6.jpg', 1, 3, '2021-11-24 07:59:26', '2021-11-24 07:59:26'),
(24, 'San pham', '<p>ok</p>', '10000000', '12', 'giay4.jpg', 'giay9.jpg', 'giay4.jpg', 'giay4.jpg', 4, 2, '2023-07-19 07:08:17', '2023-07-19 07:08:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c27jn8dcaPH3UNis8XH31VkPln80odeyeCmpjaEn', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUkhwMDZnZlFLVlFFR2o3RFBvQUY5VnBKNVA1dWpRTGpQSk9BbmVVUCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRXbXg0ZXhQQml6WGhQMEVTcko5cmhlYlU0Z2RIMUZXUUN6NGhnVnhzN0ozWTM3SzI1NjBDaSI7fQ==', 1689775511),
('haRA28D5LmgRRFqiq71OTqtUojG0E0R1nmv8wTCq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZ2JvUVNVWmR4U0x5dUs4SFlIdTI4UUJQalZ4MWhHazR0RnptTnM5dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9naWFuaGFuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQza3Y0YVQzcDR6eTdCVjFPUjhCNWx1QjdvMUo3Sm5kbFo1dnA4ZVY3b2dIZExLWk52ZEN1VyI7fQ==', 1689775617),
('jx4m0waorjwnSPvpntQD9zWUiSEPa1BwRSmerNKR', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibE8yVFcxYWZjbTdZQVBoY0hOdTQ4QUdKNFRpVENrNTUzeUxrbU0yUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9naWFuaGFuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQva3Q1YkpVNk9hS3lQajM2RGJXcUJPdlZCNHZnWTB1NC4uY0tlQzFvNzUzWDU2V1ZCNFduYSI7czo4OiJnaW9faGFuZyI7YTowOnt9fQ==', 1689775912),
('QG9y8rZTFwdgVuYXQBfB0bb9TxwLi7ogU4ClqLXx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXZRbDExbzZ5bHNmc3pFVzA0RG1iRkNBWHMxN2hNMjFudGVVV1Z0WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdXRoL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1689775862),
('x2XQaYtZ4dGwHoW34m0erST77NALc1epxEEKeDra', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZFdoNVJ5em1rVnNxM3Q2VElDcnFUNHd6N1lLOFZEN01HejRwblRreCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kb25oYW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFdteDRleFBCaXpYaFAwRVNySjlyaGViVTRnZEgxRldRQ3o0aGdWeHM3SjNZMzdLMjU2MENpIjtzOjg6Imdpb19oYW5nIjthOjA6e319', 1689775766);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ten_dang_nhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `ten_nguoi_dung`, `email`, `sdt`, `Ten_dang_nhap`, `password`, `id_phan_quyen`) VALUES
(1, 'Admin', 'admin@gmail.com', '0123456789', 'admin', '$2y$10$3kv4aT3p4zy7BV1OR8B5luB7o1J7JndlZ5vp8eV7ogHdLKZNvdCuW', '1'),
(2, 'Duong Van Khai', 'khai@gmail.com', '0123456788', 'bang', '$2y$10$uo8STSAApVaS2c7mcys/TOzF1.K1h3B4mx2sSk5gPg9YcRlvyl./S', '2'),
(3, 'Duong Van Khai 2', 'khai2@gmail.com', '0123456787', 'khai2', '$2y$10$nLu36XHfnbf4pUmGAX3ZL.28zcNckWyAsydHBMWGOxeHN2UsvNcW6', '3'),
(4, 'Tu', 'tu@gmail.com', '0123456787', 'tu', '$2y$10$abq3rThhlplTK0a/OAh07OcZ3/GS2yqiFJx5m8Kk8Rb1/AvDuRlle', '2'),
(5, 'Tuan', 'tuan@gmail.com', '0123456787', 'tuan', '$2y$10$aGcrty3Oe0LCCFs1N/y2b.lxpsHwNTDEPLW70y7GO6KuC4my5SrLu', '3'),
(6, 'Tuan', 'kien@gmail.com', '0123456787', 'kien', '$2y$10$/kt5bJU6OaKyPj36DbWqBOvVB4vgY0u4..cKeC1o753X56WVB4Wna', '3'),
(7, 'Tuan', 'huan@gmail.com', '0123456787', 'huan', '$2y$10$VHo315POyy4B07ba3a1oHOHHrNlYx3SMegdnP9okmWDn3ZkJUK/ni', '3'),
(8, 'user', 'user@gmail.com', '0368822642', 'user', '$2y$10$Wmx4exPBizXhP0ESrJ9rhebU4gdH1FWQCz4hgVxs7J3Y37K2560Ci', '2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_tiet_don_hangs_id_dh_foreign` (`id_dh`),
  ADD KEY `chi_tiet_don_hangs_id_sp_foreign` (`id_sp`);

--
-- Chỉ mục cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id_danh_gia`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`),
  ADD KEY `don_hang_id_gian_hang_foreign` (`id_gian_hang`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `gian_hangs`
--
ALTER TABLE `gian_hangs`
  ADD PRIMARY KEY (`id_gian_hang`),
  ADD KEY `gian_hangs_id_user_foreign` (`id_user`),
  ADD KEY `gian_hangs_id_loai_foreign` (`id_loai`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Chỉ mục cho bảng `loais`
--
ALTER TABLE `loais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`id_phan_quyen`);

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `san_phams_id_gian_hang_foreign` (`id_gian_hang`),
  ADD KEY `san_phams_id_loai_foreign` (`id_loai`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_ten_dang_nhap_unique` (`Ten_dang_nhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id_danh_gia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gian_hangs`
--
ALTER TABLE `gian_hangs`
  MODIFY `id_gian_hang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loais`
--
ALTER TABLE `loais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `id_phan_quyen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id_sanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD CONSTRAINT `chi_tiet_don_hangs_id_dh_foreign` FOREIGN KEY (`id_dh`) REFERENCES `don_hang` (`id_don_hang`) ON DELETE CASCADE,
  ADD CONSTRAINT `chi_tiet_don_hangs_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `san_phams` (`id_sanpham`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_id_gian_hang_foreign` FOREIGN KEY (`id_gian_hang`) REFERENCES `gian_hangs` (`id_gian_hang`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `gian_hangs`
--
ALTER TABLE `gian_hangs`
  ADD CONSTRAINT `gian_hangs_id_loai_foreign` FOREIGN KEY (`id_loai`) REFERENCES `loais` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gian_hangs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD CONSTRAINT `san_phams_id_gian_hang_foreign` FOREIGN KEY (`id_gian_hang`) REFERENCES `gian_hangs` (`id_gian_hang`) ON DELETE CASCADE,
  ADD CONSTRAINT `san_phams_id_loai_foreign` FOREIGN KEY (`id_loai`) REFERENCES `loais` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
