-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2020 at 07:57 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `qltre`
--

-- --------------------------------------------------------

--
-- Table structure for table `devicesid`
--

CREATE TABLE `devicesid` (
  `id` int(11) NOT NULL,
  `token` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devicesid`
--

INSERT INTO `devicesid` (`id`, `token`) VALUES
(1, 'cEP9S6NvR0eYiFSW0L0Y-Q:APA91bE6Bl1S88SAIJOZlAWrx2KRaEFKHFsSBt0amIw-P4Td1oOn913dGBXEfzvZ2LHaJRJ0y15uvkC4daNqzCPrBcdpAjt7jvCDtDqeUIsC48XQ6Uq8NpHx_ahzIU1cQI76yIFGOuuL');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `type` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `fname`, `lname`, `country`, `password`) VALUES
(1, 'admin', 'admin@hzv.io', 'admin', '', 'VN', '14e1b600b1fd579f47433b88e8d85291'),
(2, 'hoanghz', 'admin@hz319.com', 'Hoang', 'Le', 'Vietnam', '9b7b45620ee812b1c3baae6cd0bc990a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devicesid`
--
ALTER TABLE `devicesid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`type`(100));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devicesid`
--
ALTER TABLE `devicesid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
