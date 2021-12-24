-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2021 lúc 02:49 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hahalolo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_status` int(10) NOT NULL,
  `id_nguoidung` int(10) NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friend`
--

CREATE TABLE `friend` (
  `id_friend1` int(10) NOT NULL,
  `id_friend2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likestatus`
--

CREATE TABLE `likestatus` (
  `id_status` int(10) NOT NULL,
  `songuoilike` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id_status` int(10) NOT NULL,
  `id_nguoidung` int(10) DEFAULT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(2, 'Nguyễn Công Giang', 'nguyenconggiang21@gmail.com', 'Giangcr7', 1, '90d1903b15d00468c03a14f4c36ad22e398', '2021-12-24 07:45:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `FK_idcmt` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id_friend1`,`id_friend2`),
  ADD KEY `FK_friend2` (`id_friend2`);

--
-- Chỉ mục cho bảng `likestatus`
--
ALTER TABLE `likestatus`
  ADD PRIMARY KEY (`id_status`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `FK_idnguoidung` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_idcmt` FOREIGN KEY (`id_nguoidung`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_idstatus` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Các ràng buộc cho bảng `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `FK_friend` FOREIGN KEY (`id_friend1`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_friend2` FOREIGN KEY (`id_friend2`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `likestatus`
--
ALTER TABLE `likestatus`
  ADD CONSTRAINT `FK_like` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Các ràng buộc cho bảng `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `FK_idnguoidung` FOREIGN KEY (`id_nguoidung`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
