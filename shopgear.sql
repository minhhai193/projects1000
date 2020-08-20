-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2020 lúc 09:03 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgear`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_staff`
--

CREATE TABLE `users_staff` (
  `Id_User_Staff` int(11) NOT NULL,
  `Username_Staff` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password_Staff` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CMND` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Role` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Create_Date` datetime NOT NULL,
  `Create_By` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Update_Date` datetime NOT NULL,
  `Update_By` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Is_Delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_staff`
--

INSERT INTO `users_staff` (`Id_User_Staff`, `Username_Staff`, `Password_Staff`, `Phone`, `CMND`, `Address`, `Id_Role`, `Create_Date`, `Create_By`, `Update_Date`, `Update_By`, `Is_Delete`) VALUES
(1, 'hieu', '123', '0902622737', '079099005083', '429 lô B4 chung cư phường 3 quận 4, TP.HCM', '', '2020-08-20 11:26:11', '', '0000-00-00 00:00:00', '', 0),
(2, 'hai', '123', '0123456789', '123456789123', 'quận 3', '', '2020-08-20 11:41:38', 'hieu', '0000-00-00 00:00:00', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users_staff`
--
ALTER TABLE `users_staff`
  ADD PRIMARY KEY (`Id_User_Staff`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users_staff`
--
ALTER TABLE `users_staff`
  MODIFY `Id_User_Staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
