-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 01:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teosport`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`) VALUES
(1, 'Nike'),
(2, 'Puma'),
(3, 'Diadora'),
(4, 'Adidas'),
(5, 'Segio Tacchini'),
(6, 'Lotto'),
(7, 'New Balance'),
(8, 'Rang'),
(9, 'Reebok'),
(10, 'Skechers'),
(11, 'Solomon'),
(12, 'Russell Athletic');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'obuca'),
(2, 'odeca'),
(3, 'akcesoari');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_price_new` decimal(10,2) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sex_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`, `item_price_new`, `brand_id`, `cat_id`, `sex_id`) VALUES
(1, 'Nike', 'MUŠKE PATIKE NIKE REAX 8 TR MESH', '11990.00', './assets/products/svi_proizvodi/1.jpg', '2022-09-26 12:43:20', '8990.00', 1, 1, 1),
(2, 'Adidas', 'ŽENSKE PATIKE ADIDAS GALAXY 5 W', '7490.00', './assets/products/svi_proizvodi/2.jpg', '2022-09-26 11:08:57', '5590.00', 4, 1, 2),
(3, 'Adidas', 'MUŠKE PATIKE ADIDAS DURAMO 10 M', '14299.00', './assets/products/svi_proizvodi/3.jpg', '2022-09-26 11:08:57', '12490.00', 4, 1, 1),
(4, 'Solomon', 'MUŠKE CIPELE PATIKE SALOMON X ULTRA', '15290.00', './assets/products/svi_proizvodi/4.jpg', '2022-09-26 12:46:23', '11490.00', 11, 1, 1),
(5, 'Diadora', 'ŽENSKE PATIKE DIADORA STEP P', '4590.00', './assets/products/svi_proizvodi/5.jpg', '2022-09-26 11:08:57', '3590.00', 3, 1, 2),
(6, 'Diadora', 'MUŠKE PATIKE DIADORA N.92', '13390.00', './assets/products/svi_proizvodi/6.jpg', '2022-09-26 11:08:57', '12490.00', 3, 1, 1),
(7, 'Puma ', 'MUŠKE PATIKE PUMA BMW MMS MACO SL', '16490.00', './assets/products/svi_proizvodi/7.jpg', '2022-09-26 12:53:48', '14290.00', 2, 1, 1),
(8, 'Adidas', 'ŽENSKE PATIKE ADIDAS FUTUREFLOW', '6690.00', './assets/products/svi_proizvodi/8.jpg', '2022-09-26 12:55:03', '4390.00', 4, 1, 2),
(9, 'Nike', 'ŽENSKA MAJICA NIKE W NK DRY TEE', '1890.00', './assets/products/svi_proizvodi/9.jpg', '2022-09-26 12:58:48', '1000.00', 1, 2, 2),
(10, 'Puma', 'ŽENSKE PATIKE PUMA CARINA', '5790.00', './assets/products/svi_proizvodi/10.jpg', '2022-09-26 12:59:01', NULL, 2, 1, 2),
(11, 'Puma', 'MUŠKI SORC PUMA TRAIN BND WOVEN 8', '3770.00', './assets/products/svi_proizvodi/11.jpg', '2022-09-26 13:01:12', NULL, 2, 2, 1),
(12, 'Puma', 'ŽENSKE PATIKE PUMA CASSIA', '6690.00', './assets/products/svi_proizvodi/12.jpg', '2022-09-26 13:02:18', NULL, 2, 1, 2),
(13, 'Puma', 'ŽENSKE PATIKE PUMA CASSIA SL', '8290.00', './assets/products/svi_proizvodi/13.jpg', '2022-09-26 13:03:42', NULL, 2, 1, 2),
(14, 'Nike', 'MUŠKE PATIKE NIKE AIR MAX BOLT', '12490.00', './assets/products/svi_proizvodi/14.jpg', '2022-09-26 13:06:03', NULL, 1, 1, 1),
(15, 'Puma', 'MUŠKA MAJICA PUMA RUN WOOL SS TEE M', '1790.00', './assets/products/svi_proizvodi/15.jpg', '2022-09-26 13:07:12', NULL, 2, 2, 1),
(16, 'Nike', 'MUŠKE PATIKE NIKE AIR MAX IMPACT 3', '8490.00', './assets/products/svi_proizvodi/16.jpg', '2022-09-26 13:08:08', NULL, 1, 1, 1),
(17, 'Nike', 'DEČIJE PATIKE NIKE AIR MAX BOLT', '5590.00', './assets/products/svi_proizvodi/17.jpg', '2022-09-26 13:08:49', NULL, 1, 1, 3),
(18, 'Puma', 'DEČIJE PATIKE PUMA X-RAY JR', '5490.00', './assets/products/svi_proizvodi/18.jpg', '2022-09-26 13:10:44', NULL, 2, 1, 3),
(19, 'Reebok', 'DEČIJE PATIKE REEBOK ROYAL CLJOG', '4790.00', './assets/products/svi_proizvodi/19.jpg', '2022-09-26 13:12:30', NULL, 9, 1, 3),
(20, 'Skechers', 'DEČIJE PATIKE SKECHERS HEART LIGHTS', '7790.00', './assets/products/svi_proizvodi/20.jpg', '2022-09-26 13:18:22', NULL, 10, 1, 3),
(21, 'Adidas', 'DEČIJE PATIKE ADIDAS DURAMO 10 K', '3590.00', './assets/products/svi_proizvodi/21.jpg', '2022-09-26 13:19:45', NULL, 4, 1, 3),
(22, 'Nike', 'DEČIJE PATIKE NIKE AIR MAX BOLT', '6390.00', './assets/products/svi_proizvodi/22.jpg', '2022-09-26 13:21:14', NULL, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `sex_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`sex_id`, `name`) VALUES
(1, 'muskarci'),
(2, 'zene'),
(3, 'deca');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `sex_id` (`sex_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `sex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sex_id`) REFERENCES `sex` (`sex_id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
