-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 05:08 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idMonAn` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE `loaimonan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenLoaiMonAn` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaimonan`
--

INSERT INTO `loaimonan` (`id`, `TenLoaiMonAn`, `created_at`, `updated_at`) VALUES
(1, 'Cơm', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(2, 'Phở,Mì', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(3, 'Đồ ăn', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(4, 'Ăn vặt vỉa hè', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(5, 'Đồ Uống', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(6, 'Lẩu/Nướng', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(7, 'Bánh Mì', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(8, 'Bánh Kem', '2018-12-17 17:00:00', '2018-12-17 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id` int(10) UNSIGNED NOT NULL,
  `idphanloaimonan` int(10) UNSIGNED NOT NULL,
  `TenMonAn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NhaHang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLienHeDatHang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaCa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiBat` int(11) NOT NULL DEFAULT '0',
  `SoLuotXem` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`id`, `idphanloaimonan`, `TenMonAn`, `NoiDung`, `Hinh`, `NhaHang`, `SoLienHeDatHang`, `GiaCa`, `NoiBat`, `SoLuotXem`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cơm gà đảo chua ngọt', 'Ngon tuyệt!', 'Food12.jfif', ' Food corner', 'số 2 Lý Thái Tổ, Hoàn Kiếm', '35.000đ', 0, 0, '2018-12-18 16:29:27', '2018-12-18 16:29:27'),
(2, 7, 'Bánh mỳ chảo', '-Phục vụ bữa sáng, bữa trưa và bữa tối\r\n-Dịch Vụ\r\n +Dịch vụ ăn uống\r\n +Tốt cho nhóm\r\n +Mang về\r\n +Phục vụ bàn', 'Food16.jfif', '67 Hồ Đắc Di', '', '25000-35000', 0, 0, '2018-12-19 21:07:20', '2018-12-19 21:07:20'),
(3, 7, 'Humberger gà', 'Đồ ăn nhanh', '', 'The Cangteen-Đặng Văn Ngữ', '024.629 39 792 - 037 234 0073', '20000', 0, 0, '2018-12-19 21:18:48', '2018-12-19 21:18:48'),
(4, 4, 'Bánh tráng trộn', 'Quán ăn vỉa hè', '', 'Bánh tráng trộn chú Viên', '', '25000', 0, 0, '2018-12-19 21:21:33', '2018-12-19 21:21:33'),
(5, 3, 'Vịt quay Bắc Kinh', 'Quán ăn ngon hà nội , vịt ngon hà nội , quán ăn sạch hà nội , quán vịt nướng bắc kinh , quán ăn đêm', 'Food13.jpg', 'Vịt quay Bắc Kinh-77 Đặng Văn Ngữ, quận Đống Đa, HN', ' 037 976 5568', '330000', 0, 0, '2018-12-19 21:44:11', '2018-12-19 21:44:11'),
(6, 1, 'Cơm rang dưa bò', '', '', 'Cơm rang cô Tám - Số 126 Hồng Mai, Hai Bà Trưng,HN', '0966049055', '32000', 0, 0, '2018-12-19 21:46:19', '2018-12-19 21:46:19'),
(7, 5, 'Trà sữa matcha đậu đỏ', 'Trà sữa hảo hạng, kem cheese mặn đặc trưng chính hiệu, hoa quả tươi 100% nguyên chất, trân châu nhập khẩu Cao Hùng - Đài Loan, Matcha Uji cao cấp Nhật Bản\r\n', 'Food14.jpg', 'Royaltea 256 Thái Hà', ' 0123 888 9388', '48000', 0, 0, '2018-12-20 01:41:16', '2018-12-20 01:41:16'),
(8, 3, 'Cháo sườn sụn', 'Được mọi người biết đến với cái tên cháo sườn sụn Đồng Xuân\r\n', '', 'Cháo sườn sụn Huyền Anh - 14 Phố Đồng xuân', ' 091 555 06 46', '30000', 0, 0, '2018-12-20 01:45:30', '2018-12-20 01:45:30'),
(9, 4, 'Nem lụi', 'Mở cửa :11h -> 23h \r\n- Giá: 10k/bánh xèo,6k/nem lụi và 5k/bánh bột lọc\r\n- Và còn nhiều món ngon khác......\r\n- wifi free nhé!!', '', 'Bánh Xèo - Nem Lụi 166B Đội Cấn,HN', '091 557 77 52', '10000', 0, 0, '2018-12-20 01:51:01', '2018-12-20 01:51:01'),
(10, 1, 'Cơm niêu xá xíu', 'Cơm Niêu Singapore đầu tiên tại Hà Nội', '', 'Cơm niêu hải ngư Singapore- 111k1 GIẢNG VÕ, HN', '024 3512 0782', '75000', 0, 0, '2018-12-20 02:02:28', '2018-12-20 02:02:28'),
(11, 5, 'Cà phê bạc xỉu', 'Cafe, sinh tố, nước ép đồ ăn nhanh\r\n', '', 'Cafe Hói- 14 Nguyễn Văn Ngọc, quận Ba Đình, HN', '090 222 68 66', '25000', 0, 0, '2018-12-20 02:06:06', '2018-12-20 02:06:06'),
(12, 5, 'Matcha chân trâu đường đen', 'Đồ uống của The Alley tạo ra những câu chuyện tuyệt vời trong cuộc sống của bạn.\r\nHãy cùng nhau thưởng thức nhé !\r\n', '', 'THE ALLEY - 200 Thái Hà', ' 0813376699', '65000', 0, 0, '2018-12-20 02:18:07', '2018-12-20 02:18:07'),
(13, 6, 'Buffet DẺ SƯỜN - HẢI SẢN', '-Trên đường, bãi đỗ xe và người phục vụ bãi đỗ\r\n-Khoảng giá\r\n$$\r\n-Chuyên nghành\r\n +Phục vụ bữa trưa, bữa tối và đồ uống\r\n-Dịch Vụ\r\n +Tốt cho nhóm\r\n +Tốt cho trẻ em\r\n +Đặt chỗ\r\n +Mang về\r\n +Phục vụ bàn', '', 'One Piece - Buffet BBQ & Hotpot 198 Xã Đàn', '091 916 92 95', '239000', 0, 0, '2018-12-20 02:18:07', '2018-12-20 02:18:07'),
(14, 2, 'Phở bò', 'Phở Lý Quốc Sư - Hương Vị Hà Thành - Thương hiệu đã được khẳng định', '', 'Phở Lý Quốc Sư - 120B1 Thành Công', '0901.738.567 - 0974.931.335', '60000', 0, 0, '2018-12-20 02:28:38', '2018-12-20 02:28:38'),
(15, 3, 'Bún đậu mắm tôm', '', '', 'Ngõ 185 Chùa Láng', '', '25000-35000', 0, 0, '2018-12-20 02:28:38', '2018-12-20 02:28:38'),
(16, 8, 'Chocolate cake - FGC52', 'Bánh sinh nhật ', '', 'Fresh garden -112 C2 Phạm Ngọc Thạch. ', ' 0869.977.096', '180000-310000', 0, 0, '2018-12-20 03:27:28', '2018-12-20 03:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `phanloaimonan`
--

CREATE TABLE `phanloaimonan` (
  `id` int(10) UNSIGNED NOT NULL,
  `idloaimonan` int(10) UNSIGNED NOT NULL,
  `TenMonAn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanloaimonan`
--

INSERT INTO `phanloaimonan` (`id`, `idloaimonan`, `TenMonAn`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cơm gà', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(2, 1, 'Cơm sườn', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(3, 2, 'Phở Bò', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(4, 2, 'Phở Gà', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(5, 3, 'Mì Xào Bò', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(6, 3, 'Mì Lạnh Hàn Quốc', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(7, 4, 'Bánh tráng trộn', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(8, 4, 'Nem chua rán', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(9, 5, 'Trà sữa', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(10, 5, 'Cafe', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(11, 6, 'Lẩu', '2018-12-17 17:00:00', '2018-12-17 17:00:00'),
(12, 6, 'Nướng', '2018-12-17 17:00:00', '2018-12-17 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenKhachHang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`),
  ADD KEY `comment_idMonAn_foreign` (`idMonAn`);

--
-- Indexes for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monan_idphanloaimonan_foreign` (`idphanloaimonan`);

--
-- Indexes for table `phanloaimonan`
--
ALTER TABLE `phanloaimonan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phanloaimonan_idloaimonan_foreign` (`idloaimonan`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `phanloaimonan`
--
ALTER TABLE `phanloaimonan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_idMonAn_foreign` FOREIGN KEY (`idMonAn`) REFERENCES `monan` (`id`),
  ADD CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
