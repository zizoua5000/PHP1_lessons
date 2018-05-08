-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 03:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details_s` text NOT NULL,
  `details` text NOT NULL,
  `available` int(11) NOT NULL,
  `pic_path` varchar(255) DEFAULT NULL,
  `pic_path_s` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `modDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `details_s`, `details`, `available`, `pic_path`, `pic_path_s`, `price`, `views`, `modDate`) VALUES
(1, 'sd', 'asd', 'asd', 2323, NULL, NULL, 23, 0, '0000-00-00 00:00:00'),
(2, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0, '0000-00-00 00:00:00'),
(3, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0, '0000-00-00 00:00:00'),
(4, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0, '0000-00-00 00:00:00'),
(5, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0, '0000-00-00 00:00:00'),
(6, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0, '0000-00-00 00:00:00'),
(7, 'sdf', 'asd', 'asdd d', 22, NULL, NULL, 32, 0, '0000-00-00 00:00:00'),
(8, 'sdf', 'asd', 'asdd d', 22, NULL, NULL, 32, 0, '0000-00-00 00:00:00'),
(9, 'sd', 'asd', 'asd', 23, NULL, NULL, 2333, 0, '0000-00-00 00:00:00'),
(10, 'sd', 'asd', 'asd', 23, NULL, NULL, 2333, 0, '0000-00-00 00:00:00'),
(11, 'df', 'sdf', 'sdf', 34, NULL, NULL, 52, 0, '0000-00-00 00:00:00'),
(12, 'df', 'sdf', 'sdf', 34, NULL, NULL, 52, 0, '0000-00-00 00:00:00'),
(13, 'df', 'sdf', 'sdf', 34, NULL, NULL, 52, 0, '0000-00-00 00:00:00'),
(14, 'fsdf', 'sdf', 'sdf', 344, NULL, NULL, 3443, 0, '0000-00-00 00:00:00'),
(15, 'fsdf', 'sdf', 'sdf', 344, NULL, NULL, 3443, 0, '0000-00-00 00:00:00'),
(16, 'sdf', 'asd', 'asd', 23, NULL, NULL, 42, 0, '0000-00-00 00:00:00'),
(17, 'sdf', 'asd', 'asd', 23, NULL, NULL, 42, 0, '0000-00-00 00:00:00'),
(18, 'asd', 'asd', 'sad', 233, NULL, NULL, 2331, 0, '0000-00-00 00:00:00'),
(19, 'sad', 'asd', 'asd', 233, NULL, NULL, 3, 0, '0000-00-00 00:00:00'),
(20, 'sad', 'asd', 'asd', 233, NULL, NULL, 3, 0, '0000-00-00 00:00:00'),
(21, 'sda', 'asd', 'asd', 22222, NULL, NULL, 222, 0, '0000-00-00 00:00:00'),
(22, 'sfsd', 'sdf', 'sdf', 4334, NULL, NULL, 3434, 0, '0000-00-00 00:00:00'),
(23, 'asd', 'asd', 'asdasd', 2323, NULL, NULL, 2323, 0, '0000-00-00 00:00:00'),
(24, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(25, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(26, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(27, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(28, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(29, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(30, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0, '0000-00-00 00:00:00'),
(31, 'dasd', 'asdasd', 'asdasd', 23123, NULL, NULL, 3333, 0, '0000-00-00 00:00:00'),
(32, 'dasd', 'asdasd', 'asd', 234, NULL, NULL, 233, 0, '0000-00-00 00:00:00'),
(33, 'sad', 'asd', 'asd', 234, NULL, NULL, 444, 0, '0000-00-00 00:00:00'),
(34, 'sdas', 'asd', 'asd', 3434, NULL, NULL, 4344, 0, '0000-00-00 00:00:00'),
(35, 'sdfsdf', 'sdfsdf', 'sdfsdf', 3434, NULL, NULL, 3434, 0, '0000-00-00 00:00:00'),
(36, 'sadasd', 'asd', 'asd', 33, NULL, NULL, 331, 0, '0000-00-00 00:00:00'),
(37, 'dasd', 'sd', 'asd', 43, NULL, NULL, 555, 0, '0000-00-00 00:00:00'),
(38, 'xcvxcv', 'xcv', 'xcv', 44, NULL, NULL, 55, 0, '0000-00-00 00:00:00'),
(39, 'sdasd', 'asdasd', 'asdasd', 3333, NULL, NULL, 441, 0, '0000-00-00 00:00:00'),
(40, 'sdas', 'asdasd', 'asdasd', 3434, NULL, NULL, 220, 0, '0000-00-00 00:00:00'),
(41, 'asdasd', 'asd', 'dfgfdg', 434, NULL, NULL, 3453, 0, '0000-00-00 00:00:00'),
(42, 'sdd', 'asdasd', 'asdasd', 2324, NULL, NULL, 2344, 0, '0000-00-00 00:00:00'),
(43, 'sdasd', 'asdas', 'asd', 3333, NULL, NULL, 443, 0, '0000-00-00 00:00:00'),
(44, 'asd', 'asd', 'asd', 344, NULL, NULL, 53, 0, '0000-00-00 00:00:00'),
(45, 'vbv', 'bbb', 'bbb', 5466, NULL, NULL, 5654, 0, '0000-00-00 00:00:00'),
(46, 'fsdf', 'sdf', 'sdf', 344, NULL, NULL, 555, 0, '0000-00-00 00:00:00'),
(47, 'sdas', 'asdas', 'asdasd', 2323, NULL, NULL, 2323, 0, '0000-00-00 00:00:00'),
(48, 'asdasd', 'asdasd', 'asdasd', 434, NULL, NULL, 555, 0, '0000-00-00 00:00:00'),
(49, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 10:46:11'),
(50, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 11:18:02'),
(51, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 12:09:10'),
(52, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 12:12:41'),
(53, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 12:12:55'),
(54, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 12:15:55'),
(55, 'sdf', 'sdf', 'sdfg', 4545, NULL, NULL, 4545, 0, '2018-05-08 12:17:04'),
(56, 'dsf', 'sdf', 'sdf', 34, NULL, NULL, 55, 0, '2018-05-08 12:19:37'),
(57, 'dsf', 'sdf', 'sdf', 34, NULL, NULL, 55, 0, '2018-05-08 12:22:01'),
(58, 'ZX', 'cvfd', 'dfv', 333, NULL, NULL, 44, 0, '2018-05-08 12:22:32'),
(59, 'ZX', 'cvfd', 'dfv', 333, NULL, NULL, 44, 0, '2018-05-08 12:27:33'),
(60, 'ada', 'asdsd', 'asdad', 234, NULL, NULL, 2342, 0, '2018-05-08 12:28:08'),
(61, 'ad', 'asd', 'asd', 343, NULL, NULL, 3434, 0, '2018-05-08 12:28:50'),
(62, 'dasd', 'jgj', 'jhkh', 5676, NULL, NULL, 8768, 0, '2018-05-08 12:32:08'),
(63, 'jhjh', 'fgbcv', 'fgb', 44, NULL, NULL, 55, 0, '2018-05-08 12:33:56'),
(64, 'cv', 'dfvb', 'dfg', 54, NULL, NULL, 64, 0, '2018-05-08 12:36:05'),
(65, 'kgkg', 'sdfsdf', 'sdf', 3434, NULL, NULL, 3434, 0, '2018-05-08 12:36:39'),
(66, 'asdas', 'asdad', 'asdasd', 324234, NULL, NULL, 23423, 0, '2018-05-08 12:37:52'),
(67, 'asd', 'asd', 'asd', 34, NULL, NULL, 234, 0, '2018-05-08 12:39:07'),
(68, 'asd', 'asd', 'asd', 3434, NULL, NULL, 4545, 0, '2018-05-08 12:42:13'),
(69, 'asd', 'asd', 'asd', 454, NULL, NULL, 4545, 0, '2018-05-08 12:43:52'),
(70, 'dfdg', 'dfgdfg', 'dfg', 545, NULL, NULL, 455, 0, '2018-05-08 12:49:29'),
(71, 'zxc', 'zxc', 'zxc', 5445, NULL, NULL, 56, 0, '2018-05-08 12:50:10'),
(72, 'asdasd', 'asd', 'asd', 34, NULL, NULL, 34, 0, '2018-05-08 13:09:28'),
(73, 'ddf', 'ddffsd', 'sdf', 44, NULL, NULL, 55, 0, '2018-05-08 13:10:09'),
(74, 'asd', 'asd', 'asd', 34, NULL, NULL, 55, 0, '2018-05-08 13:10:50'),
(75, 'asd', 'asd', 'asd', 34, NULL, NULL, 55, 0, '2018-05-08 13:37:05'),
(76, 'asd', 'asd', 'asd', 34, NULL, NULL, 55, 0, '2018-05-08 13:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(1, 'Items');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
