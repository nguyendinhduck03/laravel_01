-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 03, 2024 lúc 05:21 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 6, '2024-08-01 20:39:36', '2024-08-01 20:39:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', 'uploads/categoreis/OxhpT4B1DgqCqkDLXpB1FyYxpYbBo6T3cY86aqoy.avif', 'Khám phá các loại cà phê đa dạng từ Espresso đậm đà, Americano nhẹ nhàng, đến Latte và Cappuccino với sự kết hợp hoàn hảo giữa cà phê và sữa. Mỗi ly cà phê của chúng tôi được pha chế từ hạt cà phê chất lượng cao, mang đến hương vị tinh tế và trải nghiệm tuyệt vời.', NULL, '2024-07-31 07:09:37'),
(2, 'Tea', 'uploads/categoreis/UuxkYM9TUIvFOBQmHPpiciWzoZ748ZocUXA5Vphg.webp', 'Khám phá bộ sưu tập trà phong phú của chúng tôi, từ Trà Xanh tươi mát, Trà Đen đậm đà, đến Trà Thảo Mộc nhẹ nhàng và Trà Sữa thơm ngon. Mỗi loại trà được chọn lọc kỹ lưỡng và pha chế để mang lại hương vị tinh tế và trải nghiệm thư giãn tuyệt vời.', NULL, '2024-07-31 07:09:48'),
(3, 'Bingsu', 'uploads/categoreis/pDxeEyagJFgIHVOWNXaFiHvKYzoC1Fxsrqj9ZjSP.jpg', 'Thưởng thức Bingsu, món tráng miệng đá bào Hàn Quốc mát lạnh với lớp đá bào mềm mịn và các lớp topping phong phú như trái cây tươi, đậu đỏ, và sữa đặc. Một sự kết hợp hoàn hảo của vị ngọt, tươi mát và giòn tan, lý tưởng cho những ngày hè nóng bức.', NULL, '2024-07-31 07:09:57'),
(4, 'Waffle', 'uploads/categoreis/4mw4MupZ2B0R6rIoMQ3majFxEOztxPCOpVZsTvHD.jpg', 'Thưởng thức Waffle của chúng tôi với lớp ngoài giòn rụm và lớp trong mềm mịn. Được phục vụ với các loại topping phong phú như trái cây tươi, siro ngọt, kem tươi, và sô-cô-la. Một món tráng miệng hoàn hảo để bắt đầu hoặc kết thúc bữa ăn của bạn.', NULL, '2024-07-31 07:10:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` date NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `day`, `user_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'dc đấy chứ', '2024-08-01', 6, 2, 1, '2024-08-01 13:17:02', '2024-08-01 13:17:02'),
(4, 'Tuyệ vơiiiii', '2024-08-02', 6, 1, 1, '2024-08-01 21:20:59', '2024-08-01 21:22:47'),
(5, 'Uaayyyy ngonnnn nhaaaaaa', '2024-08-02', 6, 3, 1, '2024-08-01 21:21:47', '2024-08-01 21:21:47'),
(6, 'tuyetttttttttt', '2024-08-02', 6, 3, 1, '2024-08-01 21:21:59', '2024-08-01 21:21:59'),
(7, 'ddddddddddddđ', '2024-08-02', 6, 3, 1, '2024-08-01 21:22:03', '2024-08-01 21:22:03'),
(8, 'dddddddddddddd', '2024-08-02', 6, 3, 1, '2024-08-01 21:22:10', '2024-08-01 21:22:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_carts`
--

CREATE TABLE `detail_carts` (
  `id` bigint UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_orders`
--

CREATE TABLE `detail_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `price` double(11,2) NOT NULL,
  `total_price` double(11,2) NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_orders`
--

INSERT INTO `detail_orders` (`id`, `name`, `quantity`, `price`, `total_price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(17, 'Americano', 1, 400000.00, 400000.00, 16, 2, '2024-08-01 13:17:28', '2024-08-01 13:17:28'),
(18, 'Cappuccino', 1, 450000.00, 450000.00, 16, 3, '2024-08-01 13:17:28', '2024-08-01 13:17:28'),
(19, 'Espresso', 1, 350000.00, 350000.00, 17, 1, '2024-08-01 20:36:26', '2024-08-01 20:36:26'),
(20, 'Americano', 1, 400000.00, 400000.00, 17, 2, '2024-08-01 20:36:26', '2024-08-01 20:36:26'),
(21, 'Espresso', 1, 350000.00, 350000.00, 18, 1, '2024-08-01 22:34:33', '2024-08-01 22:34:33'),
(22, 'Espresso', 3, 350000.00, 1050000.00, 18, 1, '2024-08-01 22:34:33', '2024-08-01 22:34:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_products`
--

INSERT INTO `image_products` (`id`, `link`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'uploads/products/tx07TTKkbLntmvrzcbVPWj8zc0VqVbEz9NAXzOOE.jpg', 1, '2024-07-31 08:09:10', '2024-07-31 08:09:10'),
(2, 'uploads/products/ijYk8ApvxkkEZYAX0X9i6LUZhbbU7Uet4aSNHZYl.jpg', 1, '2024-07-31 08:09:10', '2024-07-31 08:09:10'),
(3, 'uploads/products/wUnTBJftmWm7sSzUKzEtS71UlXWFSxOCBO2wjrWL.jpg', 1, '2024-07-31 08:09:10', '2024-07-31 08:09:10'),
(4, 'uploads/products/PO3wLCo2YjBoHcEy9EkR8uFi91HIcug0jAZJwpWr.jpg', 1, '2024-07-31 08:09:10', '2024-07-31 08:09:10'),
(5, 'uploads/products/IMT5ZSs8JLu9qpP3b2zReC4mx70XgKc55QNdGcvX.jpg', 2, '2024-07-31 08:10:00', '2024-07-31 08:10:00'),
(6, 'uploads/products/nXkREgcEHIZarlG0AHZyrS7oOsMxWyIMkE1aLSjo.jpg', 2, '2024-07-31 08:10:00', '2024-07-31 08:10:00'),
(7, 'uploads/products/8uPGOF3Ff6gTELjhQGtnv0SGoJh3FQ0yE1KPGZ4K.jpg', 2, '2024-07-31 08:10:00', '2024-07-31 08:10:00'),
(8, 'uploads/products/xIjryycEKGadMkkm7gifVKWSWYkMm9pckpT7t7h6.jpg', 2, '2024-07-31 08:10:00', '2024-07-31 08:10:00'),
(9, 'uploads/products/Uf8ZU2aucMCJ0MIYQtboAmyEEjZUJsCXVJupiIQU.jpg', 3, '2024-07-31 08:10:19', '2024-07-31 08:10:19'),
(10, 'uploads/products/RUYcZ86DVZp4F7i0fTwxPqqB9SOhkrbBUV5YFSoi.jpg', 3, '2024-07-31 08:10:19', '2024-07-31 08:10:19'),
(11, 'uploads/products/R65EekCJMQb6oInjluZhVfmkKlDdrbsUmGwq0mts.jpg', 3, '2024-07-31 08:10:19', '2024-07-31 08:10:19'),
(12, 'uploads/products/Cdsn2eTiiT6vlq2QxaACJC58vxgUIFR1UqVOGkO2.jpg', 3, '2024-07-31 08:10:19', '2024-07-31 08:10:19'),
(13, 'uploads/products/pzyOp5GX30b5sGPVpycUqrVnja2eQw98XlH9XTd4.jpg', 4, '2024-07-31 08:10:35', '2024-07-31 08:10:35'),
(14, 'uploads/products/HWGljoza3P4GFhoOPLEXYfco1tgHd6QihfvymFO3.jpg', 4, '2024-07-31 08:10:35', '2024-07-31 08:10:35'),
(15, 'uploads/products/isfdpUIMBV91dJFdxz0c3L7nvs4MZAhKEs8pt0dA.jpg', 4, '2024-07-31 08:10:35', '2024-07-31 08:10:35'),
(16, 'uploads/products/K0hGvxtGO3COtsIVBQQfV81mkSGEthIfQcqOuYKO.jpg', 4, '2024-07-31 08:10:35', '2024-07-31 08:10:35'),
(17, 'uploads/products/ibovOyt2UiGaBNnMtfxOGj8aPuhlvTOi5iXir8uF.jpg', 5, '2024-07-31 08:10:52', '2024-07-31 08:10:52'),
(18, 'uploads/products/b27V4uBAAOU0H0BoeVYmziXYBncr1LFs1Vgyw4SV.jpg', 5, '2024-07-31 08:10:52', '2024-07-31 08:10:52'),
(19, 'uploads/products/qpe10eKCeo6J1sfxU0HuBi0VyBBukkRoL1ye6Dd1.jpg', 5, '2024-07-31 08:10:52', '2024-07-31 08:10:52'),
(20, 'uploads/products/B2U8HbIac66wFXty67a38cRWijgE547wjSyvnfOf.jpg', 5, '2024-07-31 08:10:52', '2024-07-31 08:10:52'),
(21, 'uploads/products/Z2ucuyBlVX2SKMt5uuoS2ZxiVEgvf19xvW85LX6z.jpg', 6, '2024-07-31 08:11:06', '2024-07-31 08:11:06'),
(22, 'uploads/products/Nb8GdyAR9TFzEAUZvzVtSBfteYzRxh4fCt7vpGUU.jpg', 6, '2024-07-31 08:11:06', '2024-07-31 08:11:06'),
(23, 'uploads/products/g4jV2CXK46657FA4i9VSDJ8JUIA6RuXIx3OIDKoC.jpg', 6, '2024-07-31 08:11:06', '2024-07-31 08:11:06'),
(24, 'uploads/products/Fo3X18t9nzb9SgOrgSjOBIUfccVKAIIkzSnNJeMQ.jpg', 6, '2024-07-31 08:11:06', '2024-07-31 08:11:06'),
(25, 'uploads/products/v2Szx6CHE0oDeT2jSs72g7ZCKU7k8stz2g0ZRfbK.jpg', 9, '2024-07-31 08:11:28', '2024-07-31 08:11:28'),
(26, 'uploads/products/ue7cdjxZHF0rZWE9xITiF1QXazoT3V7OdDrKaTqU.jpg', 9, '2024-07-31 08:11:28', '2024-07-31 08:11:28'),
(27, 'uploads/products/QQ2hEJ8qrXkmdzRNJt5o49O7KENjzXcPx1ATFCnF.jpg', 9, '2024-07-31 08:11:28', '2024-07-31 08:11:28'),
(28, 'uploads/products/I3iVA2u8L6Xu2FrHjbAC63cRovTGEPLmA36CiJ7p.jpg', 9, '2024-07-31 08:11:28', '2024-07-31 08:11:28'),
(29, 'uploads/products/wsUw3AFMqnN6CesSp2I9nMCblxuui3kpUi1DkIXS.jpg', 10, '2024-07-31 08:11:50', '2024-07-31 08:11:50'),
(30, 'uploads/products/AIIuE31bEqlsTxkVV9K4r9kVik436w12RbpTJxmm.jpg', 10, '2024-07-31 08:11:50', '2024-07-31 08:11:50'),
(31, 'uploads/products/LbqSKZ5Vh5pFaIP96PhytJqnw25UPwjA31qZRWtH.jpg', 10, '2024-07-31 08:11:50', '2024-07-31 08:11:50'),
(32, 'uploads/products/Xs4F5saODqzrkc7BwbX6BoMb0U1VEAYe87Ph6bFZ.jpg', 10, '2024-07-31 08:11:50', '2024-07-31 08:11:50'),
(33, 'uploads/products/u3RomeXi4JmeJIEdmRSoMuxdxKYr78iA7f7GxsTA.jpg', 14, '2024-07-31 08:16:07', '2024-07-31 08:16:07'),
(34, 'uploads/products/4BSkU5uFmqrGDpbjoc9Zigs0UBLgI00jmZ27W9AQ.jpg', 14, '2024-07-31 08:16:07', '2024-07-31 08:16:07'),
(35, 'uploads/products/33vvdmLQb4kQ7duHogNYQgaAMQkFT8TBFv45oxIF.jpg', 14, '2024-07-31 08:16:07', '2024-07-31 08:16:07'),
(36, 'uploads/products/fStdLKQcwjyVeRZjxxCHtD4pZKa0GoVrgznLDmc5.jpg', 14, '2024-07-31 08:16:07', '2024-07-31 08:16:07'),
(37, 'uploads/products/Z3Vmyhs5iHrd9kuG6v4HVAkhifoEYOVIBaa9DB0v.jpg', 15, '2024-07-31 08:16:26', '2024-07-31 08:16:26'),
(38, 'uploads/products/AzlodC41Kuo7rfdwI6zXuD5H7hvaU3oA84ekwQq9.jpg', 15, '2024-07-31 08:16:26', '2024-07-31 08:16:26'),
(39, 'uploads/products/AzvOXvaBeyfq9AOQvx6X61bCNs1vJEYvVj3wzW7e.jpg', 15, '2024-07-31 08:16:26', '2024-07-31 08:16:26'),
(40, 'uploads/products/xl1xjFalQFypeFHmj1rdEQWVqmgAwfnvnmfioYbl.jpg', 15, '2024-07-31 08:16:26', '2024-07-31 08:16:26'),
(41, 'uploads/products/s1zAdZ6cyqkya5dakhBoZeKDTn2Lq3XvHmI39hkg.jpg', 16, '2024-07-31 08:16:46', '2024-07-31 08:16:46'),
(42, 'uploads/products/Vn6m7qunzAruczQxYikzBx6BZ7zAkPUEqWu1CRID.jpg', 16, '2024-07-31 08:16:46', '2024-07-31 08:16:46'),
(43, 'uploads/products/g06igMAUf8CBU7zBsdmlyqIu4Y91N5VUfyKvjoF7.jpg', 16, '2024-07-31 08:16:46', '2024-07-31 08:16:46'),
(44, 'uploads/products/5yHjgI4ykULtOIVMOCnBeSYG1x4sybWxVGsN0PeK.jpg', 16, '2024-07-31 08:16:46', '2024-07-31 08:16:46'),
(45, 'uploads/products/mfusMCmTbCRyAgM4iHB8OcKsi4xWwis0ogiCepxC.jpg', 17, '2024-07-31 08:17:02', '2024-07-31 08:17:02'),
(46, 'uploads/products/lAr7nMHzxmMPuzqSUHKD9aJwJJItIwxyTZl8Rpza.jpg', 17, '2024-07-31 08:17:02', '2024-07-31 08:17:02'),
(47, 'uploads/products/EZvQfCRFwrHYm9VKdzpvAeLj5cm6nt3ReuC2KY8h.jpg', 17, '2024-07-31 08:17:02', '2024-07-31 08:17:02'),
(48, 'uploads/products/9DP9gLg0wlozCeAew4JtiJ9HgIeZvDCYQFvpbl8v.jpg', 17, '2024-07-31 08:17:02', '2024-07-31 08:17:02'),
(49, 'uploads/products/WRkyzRoB8kBUyvugUJ9zNPaFme8abpAjHcDPkoTZ.jpg', 18, '2024-07-31 08:17:23', '2024-07-31 08:17:23'),
(50, 'uploads/products/xEUCoY28HXeP7XrWEgFBqGz8VV4d5pPIGRysTjHH.jpg', 18, '2024-07-31 08:17:23', '2024-07-31 08:17:23'),
(51, 'uploads/products/lWmLZNhAaIYKRFSfOXna0TEWz3XdEe1iznS3BClP.jpg', 18, '2024-07-31 08:17:23', '2024-07-31 08:17:23'),
(52, 'uploads/products/YQAxn3Wy07j3PxncZIWVeCsip16so1vrffkjGsSr.jpg', 18, '2024-07-31 08:17:23', '2024-07-31 08:17:23'),
(53, 'uploads/products/pesGngqT8pt6wFOom6E9bRsMxQT0DbjgyXg6bwGQ.jpg', 19, '2024-07-31 08:17:37', '2024-07-31 08:17:37'),
(54, 'uploads/products/BOfZ41uMzxpYJgymom5uHDQXrYfA96M1OqyoJaNS.jpg', 19, '2024-07-31 08:17:37', '2024-07-31 08:17:37'),
(55, 'uploads/products/4ARWQ37aWOKUKaXAEKycnQPLKVi5s0PAbfAcGLfB.jpg', 19, '2024-07-31 08:17:37', '2024-07-31 08:17:37'),
(56, 'uploads/products/no1cPHam5frmjcKjW0y0E2bmeGjwidzieigc2YJw.jpg', 19, '2024-07-31 08:17:37', '2024-07-31 08:17:37'),
(57, 'uploads/products/6tGjnmkA1tTAmD9e3HQ5xXiyhWXx6Ur1rSbkWaL6.jpg', 20, '2024-07-31 08:17:50', '2024-07-31 08:17:50'),
(58, 'uploads/products/0FAX9F0LEmd20tdyQRJpPQfI9x2hznbor87TNMnT.jpg', 20, '2024-07-31 08:17:50', '2024-07-31 08:17:50'),
(59, 'uploads/products/6aQJIoozvRD2VL0y30PYzl2MdixwtL65KKIk4fhp.jpg', 20, '2024-07-31 08:17:50', '2024-07-31 08:17:50'),
(60, 'uploads/products/0T26Zdc7RrX12T6XgS33mUVE916IzUsw0CggL61N.jpg', 20, '2024-07-31 08:17:50', '2024-07-31 08:17:50'),
(61, 'uploads/products/IzfOZzUdAw658LCELCN6IpV89lgv3u1kPu5lR2Wq.jpg', 21, '2024-07-31 08:18:02', '2024-07-31 08:18:02'),
(62, 'uploads/products/N02Vf8WHcfrOWSUMlRxuoFeOuGsn3cNgSNuWewRy.jpg', 21, '2024-07-31 08:18:02', '2024-07-31 08:18:02'),
(63, 'uploads/products/t2mkHnWgZKuwLCR79w2aAlaUA4ga9Nh5MBylbZtH.jpg', 21, '2024-07-31 08:18:02', '2024-07-31 08:18:02'),
(64, 'uploads/products/3zL0lmYw161vQFZtAMqFwosXRWkNUAVpLKzQQ4ab.jpg', 21, '2024-07-31 08:18:02', '2024-07-31 08:18:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(91, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(92, '2019_08_19_000000_create_failed_jobs_table', 1),
(93, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(94, '2024_07_20_070718_create_roles_table', 1),
(95, '2024_07_20_071008_create_categories_table', 1),
(96, '2024_07_20_071036_create_payment_methods_table', 1),
(97, '2024_07_20_071117_create_status_orders_table', 1),
(98, '2024_07_20_071135_create_users_table', 1),
(99, '2024_07_20_071151_create_products_table', 1),
(100, '2024_07_20_071205_create_carts_table', 1),
(101, '2024_07_20_071236_create_image_products_table', 1),
(102, '2024_07_20_071253_create_comments_table', 1),
(103, '2024_07_20_071309_create_orders_table', 1),
(104, '2024_07_20_071328_create_detail_orders_table', 1),
(105, '2024_07_20_071353_create_detail_carts_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` date NOT NULL,
  `order_amount` double(11,2) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `status_order_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name_user`, `email_user`, `number_user`, `address_user`, `day`, `order_amount`, `note`, `payment_method_id`, `status_order_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(16, 6, 'Matcha trứng', '6', 'ducndph41389@fpt.edu.vn', 'Phú Đô, Hà Nội', '2024-08-01', 850000.00, 'nhanh nhesssssssssss', 1, 2, NULL, '2024-08-01 13:17:28', '2024-08-01 21:18:32'),
(17, 6, 'Matcha trứng', '6', 'ducndph41389@fpt.edu.vn', 'Phú Đô, Hà Nội', '2024-08-02', 750000.00, 'ddddddddddđ', 1, 3, NULL, '2024-08-01 20:36:26', '2024-08-01 21:19:44'),
(18, 8, 'Đức Nguyễn', '8', 'ducndph413899@fpt.edu.vn', 'Phú Đô, Hà Nội', '2024-08-02', 1400000.00, 'vvh', 1, 1, NULL, '2024-08-01 22:34:33', '2024-08-01 22:34:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thanh toán trực tiếp', NULL, NULL),
(2, 'Thanh toán online', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `price` double(11,2) NOT NULL,
  `day_add` date NOT NULL,
  `description` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int NOT NULL DEFAULT '0',
  `category_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `day_add`, `description`, `view`, `category_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Espresso', 36, 350000.00, '2024-07-31', 'Cà phê đậm đà và mạnh mẽ, được pha chế từ nước nóng qua cà phê xay mịn dưới áp suất cao. Tạo nên một lớp crema vàng óng và hương vị sâu lắng.', 21, 1, 1, NULL, NULL, '2024-07-31 08:09:10'),
(2, 'Americano', 45, 400000.00, '2024-07-31', 'Kết hợp giữa Espresso và nước nóng, tạo ra một ly cà phê nhẹ nhàng hơn nhưng vẫn giữ được hương vị đậm đà. Lý tưởng cho những ai yêu thích cà phê nhưng không quá mạnh.', 12, 1, 1, NULL, NULL, '2024-07-31 08:10:00'),
(3, 'Cappuccino', 36, 450000.00, '2024-07-31', 'Một phần Espresso, một phần sữa nóng và một phần bọt sữa dày. Hương vị cân bằng giữa cà phê mạnh mẽ và sữa béo ngậy, tạo cảm giác mềm mại và dễ chịu.', 3, 1, 1, NULL, NULL, '2024-07-31 08:10:19'),
(4, 'Latte', 45, 50000.00, '2024-07-31', 'Espresso kết hợp với sữa nóng và một lớp bọt sữa mịn. Mềm mại và dễ uống, phù hợp cho những ai thích cà phê với hương vị sữa nhẹ nhàng.', 6, 1, 1, NULL, NULL, '2024-07-31 08:10:34'),
(5, 'Macchiato', 29, 45000.00, '2024-07-31', 'Espresso nhỏ giọt với một chút sữa hoặc kem. Đem lại hương vị cà phê mạnh mẽ với một chút ngọt ngào.', 11, 1, 1, NULL, NULL, '2024-07-31 08:10:52'),
(6, 'Matcha', 36, 25000.00, '2024-07-31', 'Matcha là trà xanh Nhật Bản cao cấp, được nghiền từ lá trà tươi thành bột mịn. Khi thưởng thức, bạn sẽ cảm nhận được hương vị đặc trưng của trà xanh, cùng với sự hòa quyện của vị ngọt nhẹ và đắng thanh. Matcha không chỉ thơm ngon mà còn chứa nhiều chất chống oxy hóa, giúp tăng cường sức khỏe và mang lại cảm giác thư giãn.', 5, 2, 1, NULL, NULL, '2024-07-31 08:11:06'),
(9, 'Matcha Latte', 36, 45000.00, '2024-07-31', 'Matcha Latte là sự kết hợp hoàn hảo giữa bột trà xanh Matcha và sữa tươi, tạo nên một ly trà latte mịn màng và thơm ngon. Với hương vị trà xanh đặc trưng hòa quyện cùng sữa mềm mại, Matcha Latte mang đến trải nghiệm cà phê thú vị, vừa có lợi cho sức khỏe vừa dễ uống.', 9, 2, 1, NULL, NULL, '2024-07-31 08:11:28'),
(10, 'Freeze Matcha', 52, 55000.00, '2024-07-31', 'Freeze Matcha là món trà xanh đông lạnh tuyệt vời, kết hợp giữa bột Matcha tinh chất và đá xay mịn, tạo nên một thức uống mát lạnh, tươi mới. Với hương vị Matcha đậm đà và độ mịn mượt của đá bào, đây là lựa chọn lý tưởng để giải nhiệt trong những ngày hè nóng bức.', 41, 2, 1, NULL, NULL, '2024-07-31 08:11:50'),
(11, 'Trà Đào', 36, 20000.00, '2024-07-31', 'Trà Đào là sự kết hợp hoàn hảo giữa trà đen thơm ngon và hương vị ngọt ngào của đào tươi. Với lớp trà đen đậm đà và tinh chất đào tự nhiên, món trà này mang đến trải nghiệm thưởng thức tươi mới và dễ chịu. Đây là lựa chọn tuyệt vời cho những ai yêu thích sự hòa quyện giữa hương trà và trái cây.', 20, 2, 0, '2024-07-31 08:23:57', NULL, '2024-07-31 08:23:57'),
(14, 'Red Bean Bingsu', 2, 80000.00, '2024-07-31', 'Bingsu Đậu Đỏ là món tráng miệng đá bào với lớp đá bào mịn, được phủ bởi đậu đỏ ngọt và kem tươi. Đậu đỏ được chế biến mềm mịn, kết hợp hoàn hảo với lớp đá bào và topping thơm ngon.', 17, 3, 1, NULL, NULL, '2024-07-31 08:16:07'),
(15, 'Fruit Bingsu', 45, 90000.00, '2024-07-31', 'Bingsu Trái Cây được trang trí với các loại trái cây tươi ngon như dưa hấu, dứa, kiwi, và dâu tây. Lớp đá bào mịn kết hợp với trái cây tươi và siro trái cây tạo nên một món tráng miệng giải nhiệt hoàn hảo.', 2, 3, 1, NULL, NULL, '2024-07-31 08:16:26'),
(16, 'Chocolate Bingsu', 36, 95000.00, '2024-07-31', 'Bingsu Sô-Cô-La kết hợp giữa lớp đá bào mịn và sô-cô-la ngọt ngào. Món tráng miệng này thường được phủ bởi các lớp sốt sô-cô-la, vụn sô-cô-la, và kem tươi, tạo ra một trải nghiệm ngọt ngào và phong phú.', 24, 3, 1, NULL, NULL, '2024-07-31 08:16:46'),
(17, 'Matcha Bingsu', 52, 95000.00, '2024-07-31', 'Bingsu Matcha kết hợp giữa đá bào mịn và bột matcha xanh tươi mát. Được trang trí với các lớp bột matcha, siro ngọt và kem tươi, món này mang đến hương vị trà xanh đặc trưng cùng với độ mát lạnh dễ chịu.', 31, 3, 1, NULL, NULL, '2024-07-31 08:17:02'),
(18, 'Strawberry Bingsu', 4, 95000.00, '2024-07-31', 'Bingsu Dâu Tây là món tráng miệng đá bào mát lạnh với hương vị dâu tây tươi ngon. Được phủ bởi dâu tây tươi, sốt dâu, và kem tươi, món này không chỉ hấp dẫn với màu sắc tươi sáng mà còn mang đến sự kết hợp hoàn hảo giữa vị ngọt ngào và tươi mát của dâu tây.', 38, 3, 1, NULL, NULL, '2024-07-31 08:17:23'),
(19, 'Fruit Waffle', 36, 75000.00, '2024-07-31', 'Waffle Trái Cây có lớp ngoài giòn rụm và lớp trong mềm mịn, được trang trí với các loại trái cây tươi như dâu tây, kiwi, và chuối. Được phủ với siro trái cây ngọt và kem tươi, món này mang đến sự kết hợp hoàn hảo giữa vị ngọt của trái cây và độ giòn của waffle.', 36, 4, 1, NULL, NULL, '2024-07-31 08:17:36'),
(20, 'Chocolate Waffle', 52, 80000.00, '2024-07-31', 'Waffle Sô-Cô-La là món waffle với lớp ngoài giòn rụm và lớp trong mềm mịn, được phủ bởi sốt sô-cô-la ngọt ngào, vụn sô-cô-la, và kem tươi. Món này lý tưởng cho những ai yêu thích sự kết hợp giữa sô-cô-la và waffle.', 27, 4, 1, NULL, NULL, '2024-07-31 08:17:50'),
(21, 'Ice Cream Waffle', 29, 85000.00, '2024-07-31', 'Waffle Kem kết hợp giữa waffle giòn rụm và một viên kem tươi mát. Waffle được trang trí với các loại kem yêu thích như vani, chocolate, hoặc dâu, kèm theo siro ngọt và các loại topping như hạt, socola vụn. Đây là món tráng miệng hoàn hảo cho những ai yêu thích sự kết hợp giữa kem và waffle.', 9, 4, 1, NULL, NULL, '2024-07-31 08:18:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', NULL, NULL),
(2, 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_orders`
--

CREATE TABLE `status_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status_orders`
--

INSERT INTO `status_orders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đang xử lý', NULL, NULL),
(2, 'Đã nhận', NULL, NULL),
(3, 'Đã hủy', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `avatar`, `email`, `number`, `gender`, `address`, `date`, `role_id`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đức Nguyễn', '$2y$10$dqz4URVDTuaHkGcZzXVrTeV41WFyIKtPoN3zL3z4l7JLXdBvS0c5S', NULL, 'nguyendinhduc.yb.k03@gmail.com', NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, '2024-07-31 06:48:32', '2024-07-31 06:48:32'),
(6, 'Matcha trứng', '$2y$10$U4KqGzFdK23IGPA6mVVrZ.JlxLW1ySPtAxTlkcSMEHJodt.egRVD2', 'uploads/users/SjKlINHFf92pJcJxbWrfRHMWF2mi3HIuLS3MpC2k.jpg', 'ducndph41389@fpt.edu.vn', '0365707628', 'Nữ', 'Phú Đô, Hà Nội', '2024-08-02', 1, 1, NULL, NULL, '2024-08-01 07:39:21', '2024-08-01 19:57:21'),
(7, 'Đèn ledd', '$2y$10$oKqC3QcSdUSPtH0VprNWWO549uIahk8kr4MafJJ4YyySHp0.Qs8zq', NULL, 'phanminh8@gmail.com', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, '2024-08-01 07:40:59', '2024-08-01 07:40:59'),
(8, 'Đức Nguyễn', '$2y$10$TPUgqElFd2y/4nudfnzQ5.fjodhtKb5lnxIdjcj9UiY7QQeBz9mBy', NULL, 'ducndph413899@fpt.edu.vn', '0365707628', 'Nam', 'Phú Đô, Hà Nội', '2024-08-02', 1, 1, NULL, NULL, '2024-08-01 22:31:35', '2024-08-01 22:34:08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `detail_carts`
--
ALTER TABLE `detail_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_carts_cart_id_foreign` (`cart_id`),
  ADD KEY `detail_carts_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_orders_order_id_foreign` (`order_id`),
  ADD KEY `detail_orders_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_method_id_foreign` (`payment_method_id`),
  ADD KEY `orders_status_order_id_foreign` (`status_order_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_orders`
--
ALTER TABLE `status_orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `detail_carts`
--
ALTER TABLE `detail_carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `detail_orders`
--
ALTER TABLE `detail_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `status_orders`
--
ALTER TABLE `status_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_carts`
--
ALTER TABLE `detail_carts`
  ADD CONSTRAINT `detail_carts_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD CONSTRAINT `detail_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `image_products`
--
ALTER TABLE `image_products`
  ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_status_order_id_foreign` FOREIGN KEY (`status_order_id`) REFERENCES `status_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
