-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 06:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1
create table register_table(name varchar(30),email_id varchar(50) primary key,password varchar(20));


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Not Sure', '900', 1, 'image/cloth-1.jpg', 'p1000'),
(2, 'T-Shirt', '750', 1, 'image/cloth-2.jpg', 'p1001'),
(3, 'Not Sure', '650', 1, 'image/cloth-3.jpg', 'p1002'),
(4, 'T-Shirt', '150', 1, 'image/cloth-4.jpg', 'p1003'),
(5, 'Shoes', '2500', 1, 'image/cloth-5.jpg', 'p1004'),
(6, 'Shorts', '3500', 1, 'image/cloth-6.jpg', 'p1005'),
(7, 'Shirt', '1200', 1, 'image/cloth-7.jpg', 'p1006'),
(8, 'Shirt', '2500', 1, 'image/cloth-8.jpg', 'p1007'),
(9, 'Pants', '2500', 1, 'image/cloth-9.jpg', 'p1008'),
(10, 'Shoes', '2500', 1, 'image/cloth-10.jpg', 'p1009'),
(11, 'Pants', '2500', 1, 'image/cloth-11.jpg', 'p1010'),
(12, 'Shoes', '2000', 1, 'image/cloth-12.jpg', 'p1011'),
(13, 'Shoes', '5000', 1, 'image/cloth-13.jpg', 'p1012'),
(14, 'T-Shirt', '2500', 1, 'image/cloth-14.jpg', 'p1013'),
(15, 'Other', '200', 1, 'image/cloth-15.jpg', 'p1014'),
(16, 'kids', '5000', 1, 'image/cloth-16.jpg', 'p1015'),
(17, 'Other', '2500', 1, 'image/cloth-17.jpg', 'p1016'),
(18, 'Pants', '280', 1, 'image/cloth-18.jpg', 'p1017'),
(19, 'Other', '900', 1, 'image/cloth-19.jpg', 'p1018'),
(20, 'Skirt', '589', 1, 'image/cloth-20.jpg', 'p1019'),
(21, 'Pants', '559', 1, 'image/cloth-21.jpg', 'p1020'),
(22, 'Top', '469', 1, 'image/cloth-22.jpg', 'p1021'),
(23, 'Dress', '259', 1, 'image/cloth-23.jpg', 'p1022'),
(24, 'T-Shirt', '1599', 1, 'image/cloth-24.jpg', 'p1023'),
(25, 'Shorts', '250', 1, 'image/cloth-25.jpg', 'p1024'),
(26, 'Dress', '249', 1, 'image/cloth-26.jpg', 'p1025'),
(27, 'kids', '489', 1, 'image/cloth-27.jpg', 'p1026'),
(28, 'Body', '1999', 1, 'image/cloth-28.jpg', 'p1027'),
(29, 'kids', '889', 1, 'image/cloth-29.jpg', 'p1028'),
(30, 'Shoes', '229', 1, 'image/cloth-30.jpg', 'p1029'),
(31, 'T-Shirt', '799', 1, 'image/cloth-31.jpg', 'p1030'),
(32, 'Pants', '890', 1, 'image/cloth-32.jpg', 'p1031'),
(33, 'Shoes', '650', 1, 'image/cloth-33.jpg', 'p1032'),
(34, 'Shirt', '500', 1, 'image/cloth-34.jpg', 'p1033'),
(35, 'Skirt', '189', 1, 'image/cloth-35.jpg', 'p1034'),
(36, 'T-Shirt', '469', 1, 'image/cloth-36.jpg', 'p1035'),
(37, 'Dress', '179', 1, 'image/cloth-37.jpg', 'p1036'),
(38, 'Skirt', '200', 1, 'image/cloth-38.jpg', 'p1037'),
(39, 'T-Shirt', '300', 1, 'image/cloth-39.jpg', 'p1038'),
(40, 'T-Shirt', '200', 1, 'image/cloth-40.jpg', 'p1039'),
(41, 'kids', '400', 1, 'image/cloth-41.jpg', 'p1040'),
(42, 'Hat', '2000', 1, 'image/cloth-42.jpg', 'p1041'),
(43, 'Other', '240', 1, 'image/cloth-43.jpg', 'p1042'),
(44, 'Shirt', '789', 1, 'image/cloth-44.jpg', 'p1043'),
(45, 'Shirt', '300', 1, 'image/cloth-45.jpg', 'p1044'),
(46, 'Skirt', '200', 1, 'image/cloth-46.jpg', 'p1045'),
(47, 'Pants', '1000', 1, 'image/cloth-47.jpg', 'p1046'),
(48, 'T-Shirt', '800', 1, 'image/cloth-48.jpg', 'p1047'),
(49, 'T-Shirt', '300', 1, 'image/cloth-49.jpg', 'p1048'),
(50, 'LongSleeve', '279', 1, 'image/cloth-50.jpg', 'p1049'),
(51, 'Shoes', '499', 1, 'image/cloth-51.jpg', 'p1050'),
(52, 'Shoes', '899', 1, 'image/cloth-52.jpg', 'p1051'),
(53, 'T-Shirt', '999', 1, 'image/cloth-53.jpg', 'p1052'),
(54, 'Shorts', '229', 1, 'image/cloth-54.jpg', 'p1053'),
(55, 'kids', '789', 1, 'image/cloth-55.jpg', 'p1054'),
(56, 'Top', '260', 1, 'image/cloth-56.jpg', 'p1055'),
(57, 'T-Shirt', '300', 1, 'image/cloth-57.jpg', 'p1056'),
(58, 'Undershirt', '250', 1, 'image/cloth-58.jpg', 'p1057'),
(59, 'Top', '259', 1, 'image/cloth-59.jpg', 'p1058'),
(60, 'T-Shirt', '189', 1, 'image/cloth-60.jpg', 'p1059'),
(61, 'Pants', '800', 1, 'image/cloth-61.jpg', 'p1060'),
(62, 'Pants', '2500', 1, 'image/cloth-62.jpg', 'p1061'),
(63, 'Pants', '25000', 1, 'image/cloth-63.jpg', 'p1062'),
(64, 'LongSleeve', '2569', 1, 'image/cloth-64.jpg', 'p1063'),
(65, 'Longsleeve', '259', 1, 'image/cloth-65.jpg', 'p1064'),
(66, 'Longsleeve', '569', 1, 'image/cloth-66.jpg', 'p1065'),
(67, 'Shirt', '200', 1, 'image/cloth-67.jpg', 'p1066'),
(68, 'T-Shirt', '189', 1, 'image/cloth-68.jpg', 'p1067'),
(69, 'kids', '199', 1, 'image/cloth-69.jpg', 'p1068'),
(70, 'kids', '200', 1, 'image/cloth-70.jpg', 'p1069'),
(71, 'LongSleeve', '2500', 1, 'image/cloth-71.jpg', 'p1070'),
(72, 'Pants', '999', 1, 'image/cloth-72.jpg', 'p1071'),
(73, 'T-Shirt', '689', 1, 'image/cloth-73.jpg', 'p1072'),
(74, 'Pants', '249', 1, 'image/cloth-74.jpg', 'p1073'),
(75, 'Dress', '999', 1, 'image/cloth-75.jpg', 'p1074'),
(76, 'T-Shirt', '659', 1, 'image/cloth-76.jpg', 'p1075'),
(77, 'Shoes', '250', 1, 'image/cloth-77.jpg', 'p1076'),
(78, 'Pants', '900', 1, 'image/cloth-78.jpg', 'p1077'),
(79, 'Dress', '689', 1, 'image/cloth-79.jpg', 'p1078'),
(80, 'T-Shirt', '499', 1, 'image/cloth-80.jpg', 'p1079'),
(81, 'T-Shirt', '200', 1, 'image/cloth-81.jpg', 'p1080'),
(82, 'T-Shirt', '300', 1, 'image/cloth-82.jpg', 'p1081'),
(83, 'Undershirt', '250', 1, 'image/cloth-83.jpg', 'p1082'),
(84, 'Longsleeve', '289', 1, 'image/cloth-84.jpg', 'p1083'),
(85, 'T-Shirt', '250', 1, 'image/cloth-85.jpg', 'p1084'),
(86, 'Pants', '240', 1, 'image/cloth-86.jpg', 'p1085'),
(87, 'Not sure', '349', 1, 'image/cloth-87.jpg', 'p1086'),
(88, 'Polo', '2500', 1, 'image/cloth-88.jpg', 'p1087'),
(89, 'T-Shirt', '199', 1, 'image/cloth-89.jpg', 'p1088'),
(90, 'Shoes', '999', 1, 'image/cloth-90.jpg', 'p1089'),
(91, 'Undershirt', '200', 1, 'image/cloth-91.jpg', 'p1090'),
(92, 'Shorts', '2500', 1, 'image/cloth-92.jpg', 'p1091'),
(93, 'Shorts', '270', 1, 'image/cloth-93.jpg', 'p1092'),
(94, 'Shorts', '250', 1, 'image/cloth-94.jpg', 'p1093'),
(95, 'Dress', '2500', 1, 'image/cloth-95.jpg', 'p1094'),
(96, 'Undershirt', '200', 1, 'image/cloth-96.jpg', 'p1095'),
(97, 'T-Shirt', '200', 1, 'image/cloth-97.jpg', 'p1096'),
(98, 'Top', '500', 1, 'image/cloth-98.jpg', 'p1097'),
(99, 'Pants', '879', 1, 'image/cloth-99.jpg', 'p1098'),
(100, 'T-Shirt', '899', 1, 'image/cloth-100.jpg', 'p1099');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;