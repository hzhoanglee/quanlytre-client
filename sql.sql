-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 18, 2020 lúc 09:35 PM
-- Phiên bản máy phục vụ: 5.7.25
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Cơ sở dữ liệu: `qltre`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `devicesid`
--

CREATE TABLE `devicesid` (
  `id` int(11) NOT NULL,
  `token` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `devicesid`
--

INSERT INTO `devicesid` (`id`, `token`) VALUES
(1, 'd24NkOSxTV-RcNwvCJrGdr:APA91bFBr0bTsLKVXo65U4Acdx4-eeq5SQ2pODUDESR0q4vrvx5z_2ikJhldOOVm3ULR1qJoVK6WhnNiOEtayqRxmOd8UrtTchOSGldJft3o8wYQrfPZ94lHZ04Bqk_m7__figtBkjJm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `time` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `logs`
--

INSERT INTO `logs` (`id`, `type`, `time`, `data`) VALUES
(7, 'TV', 1608172649, 'TV off'),
(8, 'Door', 1608301260, 'Door Opened'),
(9, 'Range', 1608301260, 'Out Range'),
(10, 'Range', 1608301299, 'Out Range'),
(11, 'Door', 1608301318, 'Door Closed'),
(12, 'Door', 1608301323, 'Door Closed'),
(13, 'Door', 1608301330, 'Door Closed'),
(14, 'Door', 1608301342, 'Door Closed'),
(15, 'Door', 1608301376, 'Door Closed'),
(16, 'Range', 1608301399, 'Out Range'),
(17, 'Door', 1608301405, 'Door Closed'),
(18, 'Range', 1608301424, 'Out Range'),
(19, 'Door', 1608301433, 'Door Opened'),
(20, 'Door', 1608301446, 'Door Closed'),
(21, 'Door', 1608301448, 'Door Opened'),
(22, 'Door', 1608301452, 'Door Closed'),
(23, 'Door', 1608301458, 'Door Opened'),
(24, 'Door', 1608301462, 'Door Closed'),
(25, 'Door', 1608301470, 'Door Closed'),
(26, 'Door', 1608301477, 'Door Opened'),
(27, 'Door', 1608301483, 'Door Closed'),
(28, 'Door', 1608301495, 'Door Closed'),
(29, 'Door', 1608301513, 'Door Opened'),
(30, 'Range', 1608301520, 'Out Range'),
(31, 'Door', 1608301535, 'Door Opened'),
(32, 'Door', 1608301551, 'Door Closed');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `type` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`type`, `value`) VALUES
('alert_cooldown', '10'),
('alert_phone_1', '0886662806'),
('alert_phone_2', '0395692310'),
('alert_phone_3', '0989469890'),
('alert_tempMax', '34'),
('alert_tempMin', '23'),
('limit_tv', '12'),
('system_firebase_url', 'https://project-d478b.firebaseio.com'),
('system_site_url', 'qrqwr');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` text,
  `fname` text,
  `lname` text,
  `country` text,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `fname`, `lname`, `country`, `password`) VALUES
(1, 'admin', 'admin@hzv.io', 'admin', '', 'VN', '14e1b600b1fd579f47433b88e8d85291'),
(2, 'hoanghz', 'admin@hz319.com', 'Hoang', 'Le', 'Vietnam', '9b7b45620ee812b1c3baae6cd0bc990a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `devicesid`
--
ALTER TABLE `devicesid`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`type`(100));

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `devicesid`
--
ALTER TABLE `devicesid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
