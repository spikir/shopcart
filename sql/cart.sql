-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 12:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `order_user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_product_id`, `order_user_id`) VALUES
(1, '2017-05-26 00:00:00', 4, 2),
(2, '2017-05-26 00:00:00', 3, 2),
(3, '2017-05-26 00:00:00', 1, 2),
(4, '2017-05-26 00:00:00', 2, 2),
(5, '2017-05-26 15:44:50', 2, 2),
(6, '2017-05-26 15:45:45', 2, 2),
(7, '2017-05-26 15:45:45', 1, 2),
(8, '2017-05-30 11:08:57', 2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(11) NOT NULL,
  `product_name` varchar(32) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'Android Phone', 'this is an android phone', '200'),
(2, 'Television DX', 'this is flatscreen television with internet connection', '400'),
(3, 'MyProduct', '', '800'),
(4, 'MyProduct', 'First product with sensor', '800'),
(5, 'ASUS M32CD-K-CH020T', 'Computer', '699');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_username` varchar(32) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_email`) VALUES
(1, 'test', 'tsfm', 'lÃ©dfs'),
(2, 'admin', '1234', 'test@test.com'),
(6, 'test', '123545', 'test@test.com'),
(8, 'iam', 'test', '1234@gmail.com'),
(9, 'meuser', '1234', 'test1@test.com'),
(10, 'user', '123456', 'user2@test.com'),
(11, 'userHash', '$2y$10$ibyuj8JIv5Q1VUB60qIP6.dDr', 'hash@gmail.com'),
(12, 'hashtag', '$2y$10$HcDWkHazaEo1yVs2K9RPaOIQf', 'userhash@test.com'),
(13, 'has', '$2y$10$0m762HOSF6rt3MZFwyFQd.tT1', '12345@gmail.com'),
(14, 'user1', '$2y$10$nVyYGPEjYZBArHdTyBKYPeGET', '12425@gmail.com'),
(15, 'usertest', '123456', 'testing@gmail.com'),
(16, 'testing', '123456', '12345@gmail.com'),
(17, 'hashu', '$2y$10$8QcbmtORZcO/IfrSU61RReygq', 'email@mail.com'),
(18, 'hashs', '$2y$10$ATbWDCjRZvvX/7m4F5OfS.vYsFmu018QDkhiRoUVDMpzqVcrB51pu', 'email12@mail.com'),
(19, 'mvc', '$2y$10$DxtGYXgkAj4MsyjQgdV7Zefs8.QM3mYpbqV1kTC5P9qiDwVJJthM.', 'user@gmail.com'),
(20, 'mvc2', '$2y$10$oaDavMOqn0uoLswCa1mdbemdXsp8VsFeYxTlkPffICtzJoanVyqpO', 'testuser@gmail.com'),
(21, 'mvc3', '$2y$10$rEMcxPpA4mpX5wsxptvgRunwNQBahiSclD3/wVxGUm9eIPhVmZq6m', 'usermvc3@gmail.com'),
(22, 'mvc4', '$2y$10$OpMCMiKcdLe4ORRBlU2ahuA2w6TdK5CYl4gSpn/ZIZRNQC2uy0EhG', 'mvc4@gmail.com'),
(23, 'mvc5', '$2y$10$qQHOfO6Jmvkq7peejp/LP.62yylkEhtG3yARNQaVH.9vS4CX7b1bW', 'mvc5@gmail.com'),
(24, 'mvc6', '$2y$10$uB4KhbyGYj3od4OJClJMTuJapbT4ABoAlGfnh8yDnyZiuTGbKWZ7e', 'mvc6@gmail.com'),
(25, 'mvc7', '$2y$10$zXlii1WmU/wygB0gi8n4HuY3FsJdJwWG4Idb0YkENzial1m6UlKxm', 'mvc7@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
