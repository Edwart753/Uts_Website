-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 06:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `phone`, `address`, `created`, `updated`) VALUES
(4, 'Andy', 'L', '086677331', 'Jakarta Raya, Kota', '2022-12-04 09:58:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`) VALUES
(2, 'Minuman', '2022-11-30 16:26:15', '0000-00-00 00:00:00'),
(5, 'Snack', '2022-12-03 01:22:35', '0000-00-00 00:00:00'),
(6, 'Barang', '2022-12-04 10:03:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `created`, `updated`) VALUES
(9, 'BA0001', 'Cheetoz', 5, 7, 11500, 250, '2022-12-04 09:45:28', NULL),
(11, 'BB0001', 'Aquaz', 2, 8, 6500, 100, '2022-12-04 09:47:04', NULL),
(12, 'AC0001', 'Pen Fasterz', 6, 9, 9500, 0, '2022-12-04 10:11:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(5, 'Biji', '2022-11-30 23:58:36', '0000-00-00 00:00:00'),
(6, 'Buah', '2022-12-01 22:00:51', '0000-00-00 00:00:00'),
(7, 'Bungkus', '2022-12-03 01:22:43', '0000-00-00 00:00:00'),
(8, 'Botol', '2022-12-03 01:22:48', '0000-00-00 00:00:00'),
(9, 'Kotak', '2022-12-04 09:49:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(7, 'Agen Makanan', '083312312', 'Pasar Jakarta', 'Supply makanan snack', '2022-12-04 09:41:19', NULL),
(8, 'Agen Minuman', '08138889913', 'Pasar Tangerang Kota', 'Menjual Minuman ', '2022-12-04 09:44:03', NULL),
(9, 'Agen Alat Tulis', '0852213182', 'Pasar Baru Selatan', 'Menjual Alat tulis grosir', '2022-12-04 09:48:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(7, 11, 'in', 'Minuman botol', 8, 100, '2022-12-04', '2022-12-04 10:08:04', 1),
(8, 9, 'in', 'Snack lagi rame', 7, 250, '2022-12-04', '2022-12-04 10:09:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Edward Thomas', 'Cengkareng', 1),
(2, 'kasir1', '874c0ac75f323057fe3b7fb3f5a8a41df2b94b1d', 'Thomas', 'Jakarta', 2),
(17, 'Edward', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Edward Thomas', 'Jakarta, Cengkareng', 1),
(18, 'Janson', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Janson Hendryli', 'Universitas Tarumanagara', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `p_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`),
  ADD CONSTRAINT `p_item_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`);

--
-- Constraints for table `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
