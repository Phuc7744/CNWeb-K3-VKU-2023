-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 03:53 PM
-- Phiên bản máy phục vụ: 10.11.2-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fashion_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`) VALUES
(4, 'nike', ''),
(5, 'puma', ''),
(6, 'adidas', ''),
(7, 'under armor', ''),
(8, 'converse', ''),
(9, 'new balance', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(3, 'giày chạy bộ'),
(4, 'giày bóng rổ'),
(5, 'giày thời trang'),
(6, 'giày bóng chuyền'),
(7, 'giày bóng đá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `price`, `brand_id`, `product_type_id`, `description`, `img_url`) VALUES
(14, 'KD16 EP', 4409000, 9, 4, '', 'public/img/shoes/4_4_0.webp'),
(15, 'Freak 5 EP', 3669000, 4, 4, '', 'public/img/shoes/4_4_1.webp'),
(16, 'JA 1', 2549000, 4, 4, '', 'public/img/shoes/4_4_2.webp'),
(17, 'Nike Impact 4', 2649000, 4, 4, '', 'public/img/shoes/4_4_3.webp'),
(18, 'Tatum 1', 3519000, 4, 4, '', 'public/img/shoes/4_4_4.webp'),
(19, 'Converse Chuck Taylor All Star Classic Hi Top', 1085000, 8, 5, '', 'public/img/shoes/4_5_5.webp'),
(20, 'Nike Structure 25', 3829000, 4, 3, '', 'public/img/shoes/4_3_6.jpg'),
(21, 'Nike Ultrafly', 7349000, 4, 3, '', 'public/img/shoes/4_3_7.webp'),
(22, 'Nike Pegasus 40 ', 4699000, 4, 3, '', 'public/img/shoes/4_3_8.webp'),
(23, 'ADIZERO ADIOS 8 W', 3500000, 6, 3, '', 'public/img/shoes/6_3_9.avif'),
(24, 'Under Armour Men\'s Spotlight Fran 2.0 Football Shoe', 900000, 7, 7, '', 'public/img/shoes/7_7_10.webp'),
(25, 'adidas Men\'s Freak 23 Sneaker', 1500000, 6, 7, '', 'public/img/shoes/6_7_11.jpg'),
(26, 'PUMA Men\'s Rapido III Firm Artificial Ground Soccer Shoe', 800000, 5, 3, '', 'public/img/shoes/5_3_12.jpg'),
(27, 'Under Armour Men\'s Command Mid Lacross Mt TPU Cleat Shoe', 1150000, 4, 7, '', 'public/img/shoes/4_7_13.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `shoes_ibfk_2` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
