-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 07:23 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `geek_intern`
--
CREATE DATABASE IF NOT EXISTS `geek_intern` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `geek_intern`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chart`
--

CREATE TABLE `chart` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `power` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chart`
--

INSERT INTO `chart` (`_id`, `name`, `power`) VALUES
(1, 'TV', 50),
(2, 'Phone', 90),
(3, 'Fan', 30),
(4, 'Bulb', 70),
(5, 'Laptop', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `devices`
--

CREATE TABLE `devices` (
  `_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mac_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `c_time` date NOT NULL,
  `power` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `devices`
--

INSERT INTO `devices` (`_id`, `name`, `mac_address`, `ip_address`, `c_time`, `power`) VALUES
(1, 'TV', '2d:4f:5e:1v:5t', '127.0.0.1', '2021-10-10', 50),
(5, 'Phone', '1v:5t:2d:4f:5e', '127.0.0.2', '2021-08-10', 90),
(6, 'Fan', '5e:1v:2d:4f:5t', '127.0.0.3', '2021-09-10', 30),
(7, 'Bulb', '4f:5e:2d:1v:5t', '127.0.0.4', '2021-07-10', 70),
(8, 'Laptop', '5t:2d:4f:5e:1v', '127.0.0.5', '2021-06-10', 20),
(56, 'b', 'a3:b4:c5:d2:e7', '21233', '2021-11-26', 33);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `c_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `logs`
--

INSERT INTO `logs` (`_id`, `name`, `action`, `c_time`) VALUES
(1, 'Fan', 'Off', '0000-00-00'),
(2, 'Fan', 'On', '0000-00-00'),
(3, 'Laptop', 'Off', '0000-00-00'),
(4, 'Bulbs', 'On', '0000-00-00'),
(5, 'Laptop', 'Off', '0000-00-00'),
(6, 'Bulbs', 'On', '0000-00-00'),
(7, 'Bulbs', 'Off', '0000-00-00'),
(8, 'Refrigerator', 'Sleep', '0000-00-00'),
(9, 'Refrigerator', 'Off', '0000-00-00'),
(10, 'Fan', 'On', '0000-00-00'),
(11, 'Fan', 'Off', '0000-00-00'),
(12, 'Fan', 'On', '0000-00-00'),
(13, 'Laptop', 'Off', '0000-00-00'),
(14, 'Fan', 'On', '0000-00-00'),
(15, 'Laptop', 'Off', '0000-00-00'),
(16, 'Bulbs', 'On', '0000-00-00'),
(17, 'Bulbs', 'Off', '0000-00-00'),
(18, 'Refrigerator', 'On', '0000-00-00'),
(19, 'Bulbs', 'Off', '0000-00-00'),
(20, 'Fan', 'On', '0000-00-00'),
(21, 'Fan', 'Off', '0000-00-00'),
(22, 'Fan', 'On', '0000-00-00'),
(23, 'Bulbs', 'Sleep', '0000-00-00'),
(24, 'Fan', 'On', '0000-00-00'),
(25, 'Laptop', 'Off', '0000-00-00'),
(26, 'Bulbs', 'On', '0000-00-00'),
(27, 'Bulbs', 'Off', '0000-00-00'),
(28, 'Bulbs', 'On', '0000-00-00'),
(29, 'Refrigerator', 'Off', '0000-00-00'),
(30, 'Fan', 'On', '0000-00-00'),
(31, 'Bulbs', 'On', '0000-00-00'),
(32, 'Refrigerator', 'Off', '0000-00-00'),
(33, 'Fan', 'Off', '0000-00-00'),
(34, 'Fan', 'On', '0000-00-00'),
(35, 'Laptop', 'Off', '0000-00-00'),
(36, 'Bulbs', 'On', '0000-00-00'),
(37, 'Laptop', 'Off', '0000-00-00'),
(38, 'Bulbs', 'On', '0000-00-00'),
(39, 'Bulbs', 'Off', '0000-00-00'),
(40, 'Refrigerator', 'Sleep', '0000-00-00'),
(41, 'Refrigerator', 'Off', '0000-00-00'),
(42, 'Fan', 'On', '0000-00-00'),
(43, 'Fan', 'Off', '0000-00-00'),
(44, 'Fan', 'On', '0000-00-00'),
(45, 'Laptop', 'Off', '0000-00-00'),
(46, 'Fan', 'On', '0000-00-00'),
(47, 'Laptop', 'Off', '0000-00-00'),
(48, 'Bulbs', 'On', '0000-00-00'),
(49, 'Bulbs', 'Off', '0000-00-00'),
(50, 'Refrigerator', 'On', '0000-00-00'),
(51, 'Bulbs', 'Off', '0000-00-00'),
(52, 'Fan', 'On', '0000-00-00'),
(53, 'Fan', 'Off', '0000-00-00'),
(54, 'Fan', 'On', '0000-00-00'),
(55, 'Bulbs', 'Sleep', '0000-00-00'),
(56, 'Fan', 'On', '0000-00-00'),
(57, 'Laptop', 'Off', '0000-00-00'),
(58, 'Bulbs', 'On', '0000-00-00'),
(59, 'Bulbs', 'Off', '0000-00-00'),
(60, 'Bulbs', 'On', '0000-00-00'),
(61, 'Refrigerator', 'Off', '0000-00-00'),
(62, 'Fan', 'On', '0000-00-00'),
(63, 'Bulbs', 'On', '0000-00-00'),
(64, 'Refrigerator', 'Off', '0000-00-00'),
(65, 'Fan', 'Off', '0000-00-00'),
(66, 'Laptop', 'Off', '0000-00-00'),
(67, 'Bulbs', 'On', '0000-00-00'),
(68, 'Laptop', 'Off', '0000-00-00'),
(69, 'Bulbs', 'On', '0000-00-00'),
(70, 'Bulbs', 'Off', '0000-00-00'),
(71, 'Refrigerator', 'Sleep', '0000-00-00'),
(72, 'Refrigerator', 'Off', '0000-00-00'),
(73, 'Fan', 'On', '0000-00-00'),
(74, 'Fan', 'Off', '0000-00-00'),
(75, 'Fan', 'On', '0000-00-00'),
(76, 'Laptop', 'Off', '0000-00-00'),
(77, 'Fan', 'On', '0000-00-00'),
(78, 'Laptop', 'Off', '0000-00-00'),
(79, 'Bulbs', 'On', '0000-00-00'),
(80, 'Bulbs', 'Off', '0000-00-00'),
(81, 'Refrigerator', 'On', '0000-00-00'),
(82, 'Bulbs', 'Off', '0000-00-00'),
(83, 'Fan', 'On', '0000-00-00'),
(84, 'Fan', 'Off', '0000-00-00'),
(85, 'Fan', 'On', '0000-00-00'),
(86, 'Bulbs', 'Sleep', '0000-00-00'),
(87, 'Fan', 'On', '0000-00-00'),
(88, 'Laptop', 'Off', '0000-00-00'),
(89, 'Bulbs', 'On', '0000-00-00'),
(90, 'Bulbs', 'Off', '0000-00-00'),
(91, 'Bulbs', 'On', '0000-00-00'),
(92, 'Refrigerator', 'Off', '0000-00-00'),
(93, 'Fan', 'On', '0000-00-00'),
(94, 'Bulbs', 'On', '0000-00-00'),
(95, 'Refrigerator', 'Off', '0000-00-00'),
(96, 'Laptop', 'Off', '0000-00-00'),
(97, 'Bulbs', 'On', '0000-00-00'),
(98, 'Laptop', 'Off', '0000-00-00'),
(99, 'Bulbs', 'On', '0000-00-00'),
(100, 'Bulbs', 'Off', '0000-00-00'),
(101, 'Refrigerator', 'Sleep', '0000-00-00'),
(102, 'Refrigerator', 'Off', '0000-00-00'),
(103, 'Fan', 'On', '0000-00-00'),
(104, 'Fan', 'Off', '0000-00-00'),
(105, 'Fan', 'On', '0000-00-00'),
(106, 'Laptop', 'Off', '0000-00-00'),
(107, 'Fan', 'On', '0000-00-00'),
(108, 'Laptop', 'Off', '0000-00-00'),
(109, 'Bulbs', 'On', '0000-00-00'),
(110, 'Bulbs', 'Off', '0000-00-00'),
(111, 'Refrigerator', 'On', '0000-00-00'),
(112, 'Bulbs', 'Off', '0000-00-00'),
(113, 'Fan', 'On', '0000-00-00'),
(114, 'Fan', 'Off', '0000-00-00'),
(115, 'Fan', 'On', '0000-00-00'),
(116, 'Bulbs', 'Sleep', '0000-00-00'),
(117, 'Fan', 'On', '0000-00-00'),
(118, 'Laptop', 'Off', '0000-00-00'),
(119, 'Bulbs', 'On', '0000-00-00'),
(120, 'Bulbs', 'Off', '0000-00-00'),
(121, 'Bulbs', 'On', '0000-00-00'),
(122, 'Refrigerator', 'Off', '0000-00-00'),
(123, 'Fan', 'On', '0000-00-00'),
(124, 'Bulbs', 'On', '0000-00-00'),
(125, 'Refrigerator', 'Off', '0000-00-00'),
(126, 'Fan', 'Off', '0000-00-00'),
(127, 'Laptop', 'Off', '0000-00-00'),
(128, 'Bulbs', 'On', '0000-00-00'),
(129, 'Laptop', 'Off', '0000-00-00'),
(130, 'Bulbs', 'On', '0000-00-00'),
(131, 'Bulbs', 'Off', '0000-00-00'),
(132, 'Refrigerator', 'Sleep', '0000-00-00'),
(133, 'Refrigerator', 'Off', '0000-00-00'),
(134, 'Fan', 'On', '0000-00-00'),
(135, 'Fan', 'Off', '0000-00-00'),
(136, 'Fan', 'On', '0000-00-00'),
(137, 'Laptop', 'Off', '0000-00-00'),
(138, 'Fan', 'On', '0000-00-00'),
(139, 'Laptop', 'Off', '0000-00-00'),
(140, 'Bulbs', 'On', '0000-00-00'),
(141, 'Bulbs', 'Off', '0000-00-00'),
(142, 'Refrigerator', 'On', '0000-00-00'),
(143, 'Bulbs', 'Off', '0000-00-00'),
(144, 'Fan', 'On', '0000-00-00'),
(145, 'Fan', 'Off', '0000-00-00'),
(146, 'Fan', 'On', '0000-00-00'),
(147, 'Bulbs', 'Sleep', '0000-00-00'),
(148, 'Fan', 'On', '0000-00-00'),
(149, 'Laptop', 'Off', '0000-00-00'),
(150, 'Bulbs', 'On', '0000-00-00'),
(151, 'Bulbs', 'Off', '0000-00-00'),
(152, 'Bulbs', 'On', '0000-00-00'),
(153, 'Refrigerator', 'Off', '0000-00-00'),
(154, 'Fan', 'On', '0000-00-00'),
(155, 'Bulbs', 'On', '0000-00-00'),
(156, 'Refrigerator', 'Off', '0000-00-00'),
(157, 'Fan', 'Off', '2021-10-10'),
(158, 'Laptop', 'Off', '2021-10-10'),
(159, 'Bulbs', 'On', '2021-10-10'),
(160, 'Laptop', 'Off', '2021-10-10'),
(161, 'Bulbs', 'On', '2021-10-10'),
(162, 'Bulbs', 'Off', '2021-10-10'),
(163, 'Refrigerator', 'Sleep', '2021-10-10'),
(164, 'Refrigerator', 'Off', '2021-10-10'),
(165, 'Fan', 'On', '2021-10-10'),
(166, 'Fan', 'Off', '2021-10-10'),
(167, 'Fan', 'On', '2021-10-10'),
(168, 'Laptop', 'Off', '2021-10-10'),
(169, 'Fan', 'On', '2021-10-10'),
(170, 'Laptop', 'Off', '2021-10-10'),
(171, 'Bulbs', 'On', '2021-10-10'),
(172, 'Bulbs', 'Off', '2021-10-10'),
(173, 'Refrigerator', 'On', '2021-10-10'),
(174, 'Bulbs', 'Off', '2021-10-10'),
(175, 'Fan', 'On', '2021-10-10'),
(176, 'Fan', 'Off', '2021-10-10'),
(177, 'Fan', 'On', '2021-10-10'),
(178, 'Bulbs', 'Sleep', '2021-10-10'),
(179, 'Fan', 'On', '2021-10-10'),
(180, 'Laptop', 'Off', '2021-10-10'),
(181, 'Bulbs', 'On', '2021-10-10'),
(182, 'Bulbs', 'Off', '2021-10-10'),
(183, 'Bulbs', 'On', '2021-10-10'),
(184, 'Refrigerator', 'Off', '2021-10-10'),
(185, 'Fan', 'On', '2021-10-10'),
(186, 'Bulbs', 'On', '2021-10-10'),
(187, 'Refrigerator', 'Off', '2021-10-10'),
(188, 'Fan', 'On', '2021-10-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`_id`, `username`, `password`) VALUES
(1, 'quang', '123'),
(2, 'binh', '123'),
(3, 'trung', '123'),
(4, 'john', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`_id`);

--
-- Chỉ mục cho bảng `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`_id`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chart`
--
ALTER TABLE `chart`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `devices`
--
ALTER TABLE `devices`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `logs`
--
ALTER TABLE `logs`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
