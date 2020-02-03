-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2020 lúc 07:58 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `side_admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activate` int(10) NOT NULL,
  `timeCreated` date NOT NULL,
  `timeUpdated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `categoryName`, `activate`, `timeCreated`, `timeUpdated`) VALUES
(1, 'shoes', 1, '2020-01-02', '2020-01-09'),
(2, 'clothes', 0, '2020-01-06', '2020-01-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'hanguyen', '123456'),
(2, 'hieunguyen', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullName`, `userName`, `email`, `password`, `active`) VALUES
(1, '1', 'hanguyennnnnn', 'ha@gmail.com', '$2y$10$BiOQgcgx9eJIBTRSmZTPm.XZVRhZTY6YzSSg1aouoIdbOcMpOfFJy', 1),
(2, '2', 'anguyen', 'anguyen@gmail.com', '$2y$10$giJipoE1zW8FFCZjKmVl9.YnkIByCiO1Xa9p1c0IAs5.DJWay6V8G', 0),
(3, '3', 'hanguyen', 'admin123456@gmail.com', '$2y$10$ZdFnuT74LZC8EjGfd7WXVuHflzU0WZmwCSF1muBbcqabjDf3xQlv2', 1),
(4, '4', 'hanguyen', 'admin123@gmail.com', '$2y$10$he8/HkAiQC.0hQr8x/WdLOHjwqPlzIQZaPUWKaBD9G0oxys8/6/Fy', 1),
(5, 'hieu truong minh', 'hieutm', 'hieu@gmail.com', '$2y$10$5FJ2F9F4LolGhLLhqXqvT./VkuRtYPjid6H3lhsRa3wrFOJCc3Ps6', 0),
(6, '6', 'ntqAdmin123111', 'adminntq@gmail.com', '$2y$10$oBZOoysDCuKmPBrFobpBpeHykLjpMQHNdYBLPcg0GKckMXeFHVTr6', 0),
(7, 'admin ntq', 'ntqAdmin', 'adminntq@gmail.com', '$2y$10$ezwTR1dbXv04zyh1unmwte0oF57fLVriCJKuLLce9onMOI2MwBchq', 0),
(8, 'phpUser', 'phpName', 'php@gmail.com', '$2y$10$8QW87ZBJlA5Np4HgHEOXnOFSYQuQC7QNDtpEtSq/2F2yQJRo7diHy', 0),
(9, 'phpUser', 'phpName', 'php@gmail.com', '$2y$10$/kTp1ETZbdDcFLFkqVl52eS57Fd6xke1DKlFX1USOoqkg3sRh01ZC', 0),
(10, 'laravelUser', 'laravelName', 'laravel@gmail.com', '$2y$10$0SOLCNukr8Bi3YvybaV1u.4qToAF.qPurkcx9DkEgyB.T3eudJhQi', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
