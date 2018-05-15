-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 08:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careoff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `password`) VALUES
('jifrivly@gmail.com', '9744344978');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `no` int(11) NOT NULL,
  `c_id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`no`, `c_id`, `name`) VALUES
(22, 'category10001', 'SHIRTS'),
(23, 'category10002', 'SHOES'),
(24, 'category10003', 'PANTS'),
(25, 'category10004', 'KURTHAS'),
(26, 'category10005', 'CHAPPALS');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(16) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `phone`, `password`) VALUES
(1, 'sayyid muhammed hasan jifri', 'jifripm@gmail.com', 2147483647, '269ae29330f93a813bc5d00a35ebb68c');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `c_id` varchar(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` float(10,3) NOT NULL,
  `mainpic` varchar(40) NOT NULL,
  `thumbnailpic` varchar(40) NOT NULL,
  `side1pic` varchar(40) NOT NULL,
  `side2pic` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_id`, `c_id`, `title`, `description`, `price`, `mainpic`, `thumbnailpic`, `side1pic`, `side2pic`) VALUES
(1, 'product100001', 'category10001', 'Shirt1', 'Description about Shirt1', 1500.500, 'product100001mainpic.jpg', 'product100001thumbnailpic.jpg', 'product100001side1pic.jpg', 'product100001side2pic.jpg'),
(2, 'product100002', 'category10001', 'Shirt2', 'Descrition about the Shirt 2 Descrition about the Shirt 2Descrition about the Shirt 2Descrition about the Shirt 2Descrition about the Shirt 2\r\n', 2750.000, 'product100002mainpic.jpg', 'product100002thumbnailpic.jpg', 'product100002side1pic.jpg', 'product100002side2pic.jpg'),
(3, 'product100003', 'category10003', 'Pant1', 'Description about Pant 1', 1500.000, 'product100003mainpic.jpg', 'product100003thumbnailpic.jpg', 'product100003side1pic.jpg', 'product100003side2pic.jpg'),
(4, 'product100004', 'category10004', 'Kurtha 1', 'Description about Kurtha 1', 3500.000, 'product100004mainpic.jpg', 'product100004thumbnailpic.jpg', 'product100004side1pic.jpg', 'product100004side2pic.jpg'),
(5, 'product100005', 'category10002', 'Shoes 1', 'Description about Shoes 1', 650.500, 'product100005mainpic.jpg', 'product100005thumbnailpic.jpg', 'product100005side1pic.png', 'product100005side2pic.png'),
(10, 'product100006', 'category10002', ',xcbjhvdhv;kfjvnuv gfy', 'fvkjib7 euyefuiwyfyerhbj', 10000000.000, 'product100006mainpic3.jpg', 'product100006thumbnailpic4.jpg', 'product100006side1pic4.jpg', 'product100006side2pic4.jpg'),
(11, 'product100007', 'category10005', 'Bishr', 'S sohohshkd fdghe ehen egen', 50.500, 'product100007mainpic.jpg', 'product100007thumbnailpic.jpg', 'product100007side1pic.jpg', 'product100007side2pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `purchase_id`, `p_id`, `email`, `date`) VALUES
(1, 'purchase1000001', 'product100002', 'jifripm@gmail.com', '2018-05-13 23:48:31'),
(2, 'purchase1000002', 'product100002', 'jifripm@gmail.com', '2018-05-14 00:09:05'),
(3, 'purchase1000003', 'product100002', 'jifripm@gmail.com', '2018-05-14 00:10:16'),
(4, 'purchase1000004', 'product100002', 'jifripm@gmail.com', '2018-05-14 00:12:29'),
(5, 'purchase1000005', 'product100004', 'jifripm@gmail.com', '2018-05-14 00:14:25'),
(6, 'purchase1000006', 'product100002', 'jifripm@gmail.com', '2018-05-14 00:16:18'),
(7, 'purchase1000007', 'product100007', 'jifripm@gmail.com', '2018-05-14 00:18:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `p_id` (`p_id`),
  ADD KEY `category of product` (`c_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD UNIQUE KEY `purchase_id` (`purchase_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `productforiegnkey` (`p_id`),
  ADD KEY `customerforiegnkey` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category of product` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `customerforiegnkey` FOREIGN KEY (`email`) REFERENCES `customers` (`email`),
  ADD CONSTRAINT `productforiegnkey` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
