-- phpMyAdmin SQL Dump
-- version 5.3.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.30.23
-- Generation Time: Sep 27, 2022 at 06:10 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `techshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `techshop`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `cart` (
  `productID` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity`int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `cart` (`productID`, `name`, `price`, `quantity`, `status`, `image`) VALUES
(1, 'Iphone 14 Promax', '40.000.000', 1, 'checked', 'https://cdn.tgdd.vn/Files/2022/09/30/1473177/cau-hinh-iphone-14-pro-max-2.jpg'),
(2, 'Iphone 13 Promax', '30.000.000', 2, 'unchecked', 'https://cdn.tgdd.vn/Files/2022/06/11/1438848/tinh-nang-camera-iphone-13-7.jpg');

ALTER TABLE `cart`
  ADD PRIMARY KEY (`productID`);