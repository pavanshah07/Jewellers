-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 01:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cl_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cl_id`, `cart_id`, `pname`, `pprice`, `pimage`) VALUES
(3, 1, 'Mang-Tika-2', '$110', '3.png'),
(2, 2, 'Mang-Tika-2', '$110', '3.png'),
(3, 3, 'Mang-Tika-1', '$70', '1.png'),
(12, 6, 'Mang-Tika-3', '$160', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `pname`, `email`, `comment`) VALUES
(1, 'Mihir', 'divyeshsstatus12@gmail.com', 'gghgthgfh'),
(2, 'Brijesh', 'birju123@gmail.com', 'What a website..yehh'),
(4, 'Yogi', 'yogi123@gmail.com', 'What A Website !!');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pprice`, `pimage`) VALUES
(1, 'Mang-Tika-1', '$70', '1.png'),
(2, 'Mang-Tika-2', '$110', '3.png'),
(3, 'Mang-Tika-3', '$160', '6.png'),
(7, 'Mang-Tika-7', '200$', 'p4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'divyesh', '$2y$10$bhPi1bXBBNRT9.klwdj.ZOBOVafyt3oT.2rKfJXrFGGFETVbtmuhq'),
(3, 'mihir', '$2y$10$s4aVdPC6sW1vmOhTAhOLDuZcngMsVSTY9WEqAiuhBP74elXJS/dnG'),
(4, 'Shreena', '$2y$10$UO8Rh7JNC0diGcRoTI10tuIgUdldDOGtqfo8HE7GnN.CCXZy.bm.6'),
(6, 'Yogi', '$2y$10$OC1ZEdo7Do/X/iBiTCD./O.XbnSR6k9WRB0w/oEdhyV8kzfIu8nEm'),
(7, 'Nehal', '$2y$10$DJSqRPJtGXH1XdU.EEenVOFj/ZyRNRsQuNKVzhRY6HjjOY8r1mSUW'),
(8, 'pavanshah07', '$2y$10$Y6J.ykeqaIUP7whkRths0uygJ6AA.Svtdh8QVYp9Wcjviq3v4M6sO'),
(11, 'juhi', '$2y$10$iCUnO96BL9nRv8hQKs2ciuzxjpHfd7yx0NYfymaHvsPZshhTuCB9i'),
(12, 'pavanshah', '$2y$10$6DJuSZXmP8UzD.OFJDqL8.2MJ72vmMdqDT5fiVZNuXkNG/TDBzfj2'),
(13, 'admin', '$2y$10$nR62FqgQ7A0Q8h8K.qluEeb8O5N9MuKvqYaXbrKSBnOpPfMPwhw46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
