-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 02:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plant`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL,
  `vendor_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `vendor_name`) VALUES
(18, 'snacks', 'malbok@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `vendor_name` text NOT NULL,
  `cat_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `vendor_name`, `cat_name`) VALUES
(15, 'Bonsi', 'malbok@gmail.com', 'water_and_beverages'),
(20, 'Vegetable', 'malbok@gmail.com', 'snacks'),
(31, 'Flower', 'malbok@gmail.com', 'haircare'),
(47, 'Show Plants', 'malbok@gmail.com', 'breads_and_buns');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `street`, `city`, `pincode`, `password`, `phone`) VALUES
(7, 'kedaresh', 'k@g.com', 'a', 'a', '577201', '123', '6360234576'),
(8, 'Jack_sparrow', 'd@h.vom', 'ggg', 'fssd', '577201', '123456', '6543217890'),
(9, 'kedaresh', 'kedaresh@gmail.com', 'ggg', 'fssd', '577201', '123456', '6543217890'),
(10, 'Jack_sparrow', 'k@gmail.com', 'ggg', 'fssd', '577201', '123', '6543217890');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `username`, `email`, `street`, `city`, `pincode`, `phone`) VALUES
(1, 'delivery_boy', 'gokhalehemal11@gmail.com', 'hdfc', 'pune', '411019', '1234567890'),
(2, 'delivery_boy_2', 'gokhalehemal11@gmail.com', 'kakde park', 'pune', '411014', '122111112'),
(95, 'delivery_boy_3', 'something@gmail.com', 'some_street', 'some city', '411019', '01234567890');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_price` int(100) DEFAULT NULL,
  `product_qty` int(100) DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `vendor_name` text DEFAULT NULL,
  `payment_id` text DEFAULT NULL,
  `payment_status` text DEFAULT NULL,
  `buyer_email` text DEFAULT NULL,
  `buyer_phone` text DEFAULT NULL,
  `buyer_name` text DEFAULT NULL,
  `order_date` varchar(250) DEFAULT NULL,
  `delivery_status` text DEFAULT NULL,
  `shipping_method` varchar(250) DEFAULT NULL,
  `buyer_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_title`, `product_price`, `product_qty`, `product_image`, `vendor_name`, `payment_id`, `payment_status`, `buyer_email`, `buyer_phone`, `buyer_name`, `order_date`, `delivery_status`, `shipping_method`, `buyer_address`) VALUES
(135, 'Beech', 250, 1, 'images/beech.jfif', 'hemal@gmail.com', 'COD950437462', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '29/09/2021 21:57:18', 'ND', 'Express', 'ggg, fssd, 577201'),
(136, 'Bodhi', 250, 1, 'images/bodhi.jfif', 'hemal@gmail.com', 'COD950437462', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '29/09/2021 21:57:18', 'ND', 'Express', 'ggg, fssd, 577201'),
(137, 'Beech', 250, 1, 'images/beech.jfif', 'hemal@gmail.com', 'COD958574497', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '29/09/2021 21:57:21', 'ND', 'Express', 'ggg, fssd, 577201'),
(138, 'Bodhi', 250, 1, 'images/bodhi.jfif', 'hemal@gmail.com', 'COD958574497', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '29/09/2021 21:57:21', 'ND', 'Express', 'ggg, fssd, 577201'),
(139, 'Daisy', 500, 1, 'images/daisy.jfif', 'hemal@gmail.com', 'COD718652798', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '29/09/2021 22:01:08', 'ND', 'Express', 'ggg, fssd, 577201'),
(140, 'Iris', 400, 1, 'images/iris.jfif', 'hemal@gmail.com', 'COD718652798', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '29/09/2021 22:01:08', 'ND', 'Express', 'ggg, fssd, 577201'),
(141, 'dracaena', 400, 1, 'images/dracaena.jfif', 'hemal@gmail.com', 'COD356529806', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 10:31:00', 'ND', 'Express', 'ggg, fssd, 577201'),
(142, 'dracaena', 400, 1, 'images/dracaena.jfif', 'hemal@gmail.com', 'COD675089117', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 10:32:41', 'ND', 'Express', 'ggg, fssd, 577201'),
(143, 'dracaena', 400, 1, 'images/dracaena.jfif', 'hemal@gmail.com', 'COD615288613', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 10:35:16', 'ND', 'Express', 'ggg, fssd, 577201'),
(144, 'dracaena', 400, 1, 'images/dracaena.jfif', 'hemal@gmail.com', 'COD214198589', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 10:35:28', 'ND', 'Express', 'ggg, fssd, 577201'),
(145, 'dracaena', 400, 1, 'images/dracaena.jfif', 'hemal@gmail.com', 'COD852074344', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 10:36:16', 'ND', 'Express', 'ggg, fssd, 577201'),
(146, 'dracaena', 400, 1, 'images/dracaena.jfif', 'hemal@gmail.com', 'COD861670351', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 10:37:21', 'ND', 'Express', 'ggg, fssd, 577201'),
(147, 'Beech', 250, 1, 'images/beech.jfif', 'hemal@gmail.com', 'COD240778129', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 11:19:31', 'ND', 'Express', 'ggg, fssd, 577201'),
(148, 'Bodhi', 250, 1, 'images/bodhi.jfif', 'hemal@gmail.com', 'COD240778129', 'Cod', 'k@gmail.com', '6543217890', 'Jack_sparrow', '30/09/2021 11:19:31', 'ND', 'Express', 'ggg, fssd, 577201');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selecttype` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `street`, `selecttype`, `phone`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(6, 'd', 'dad', 'ddda', 'da', 'dad', 555, 'dadd', 'ddd', '0000-00-00 00:00:00'),
(7, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(8, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(9, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(10, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(11, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(12, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(13, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(14, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(15, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(16, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(17, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(18, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(19, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(20, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(21, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(22, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(23, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(24, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(25, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(26, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(27, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(28, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(29, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(30, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(31, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(32, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(33, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(34, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(35, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(36, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(37, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(38, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(39, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(40, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(41, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(42, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(43, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(44, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(45, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(46, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(47, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(48, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(49, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(50, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(51, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(52, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(53, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 5555, 'pending', '', '0000-00-00 00:00:00'),
(54, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(55, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(56, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(57, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(58, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(59, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(60, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(61, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(62, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(63, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(64, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(65, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(66, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(67, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(68, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(69, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(70, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(71, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(72, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(73, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(74, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(75, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(76, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(77, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(78, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(79, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(80, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(81, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(82, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(83, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(84, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(85, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(86, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(87, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(88, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(89, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(90, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 100, 'pending', '', '0000-00-00 00:00:00'),
(91, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 1001, 'pending', '', '0000-00-00 00:00:00'),
(92, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 0, 'pending', '', '0000-00-00 00:00:00'),
(93, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 55, 'pending', '', '0000-00-00 00:00:00'),
(94, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 55, 'pending', '', '0000-00-00 00:00:00'),
(95, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 44, 'pending', '', '0000-00-00 00:00:00'),
(96, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 44, 'pending', '', '0000-00-00 00:00:00'),
(97, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(98, '4BD18CS032', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 4444, 'pending', '', '0000-00-00 00:00:00'),
(99, '4BD18CS032', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 4444, 'pending', '', '0000-00-00 00:00:00'),
(100, '4BD18CS032', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 4444, 'pending', '', '0000-00-00 00:00:00'),
(101, '4BD18CS032', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 4444, 'pending', '', '0000-00-00 00:00:00'),
(102, 'Username', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 4444, 'pending', '', '0000-00-00 00:00:00'),
(103, 'Username', 'kedaresh@gmail.com', 'dfd', 'Plants', '9482182149', 4444, 'pending', '', '0000-00-00 00:00:00'),
(104, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(105, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 444, 'pending', '', '0000-00-00 00:00:00'),
(106, 'Jack_sparrow', 'kedaresh@gmail.com', 'dfd', 'Seeds', '9482182149', 444, 'pending', '', '0000-00-00 00:00:00'),
(107, 'Username', 'kedaresh@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(108, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(109, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(110, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(111, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(112, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(113, 'Jack_sparrow', 'k@gmail.com', 'dfd', 'Plants', '9482182149', 0, 'pending', '', '0000-00-00 00:00:00'),
(114, 'Jack_sparrow', 'k@gmail.com', 'dfd', 'Plants', '9482182149', 0, 'pending', '', '0000-00-00 00:00:00'),
(115, 'Jack_sparrow', 'k@gmail.com', 'dfd', 'Plants', '9482182149', 0, 'pending', '', '0000-00-00 00:00:00'),
(116, 'Jack_sparrow', 'k@gmail.com', 'dfd', 'Plants', '9482182149', 0, 'pending', '', '0000-00-00 00:00:00'),
(117, 'Jack_sparrow', 'k@gmail.com', 'dfd', 'Plants', '9482182149', 0, 'pending', '', '0000-00-00 00:00:00'),
(118, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(119, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(120, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00'),
(121, 'Jack_sparrow', 'k@gmail.com', 'dfd', 'Plants', '9482182149', 400, 'pending', '', '0000-00-00 00:00:00'),
(122, 'Username', 'k@gmail.com', 'Street Address', 'Plants', 'Phone', 0, 'pending', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `vendor_name` text DEFAULT NULL,
  `pro_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `vendor_name`, `pro_price`) VALUES
(85, 15, 18, 'Beech', 250, 100, 'good for house', 'beech.jfif', 'hemal@gmail.com', '200'),
(86, 31, 18, 'Plant-Bluebell', 100, 100, 'blue-bell', 'bluebell.jfif', 'hemal@gmail.com', '85'),
(87, 15, 18, 'Bodhi', 250, 100, 'Good for oxygen', 'bodhi.jfif', 'hemal@gmail.com', '200'),
(88, 15, 18, 'Boxwood', 300, 100, 'very good plant', 'boxwood.jfif', 'hemal@gmail.com', '280'),
(89, 15, 18, 'Ficus', 400, 100, 'good plant', 'ficus.jfif', 'hemal@gmail.com', '370'),
(90, 15, 18, 'Crape Mytle', 500, 100, 'good plant', 'crape myrtle.jfif', 'hemal@gmail.com', '450'),
(91, 15, 18, 'Dwarf', 500, 100, 'Good plant', 'drawf.jfif', 'hemal@gmail.com', '470'),
(92, 15, 18, 'Red Maple', 600, 100, 'Good Plant', 'red maple.jfif', 'hemal@gmail.com', '500'),
(93, 31, 18, 'Daisy', 500, 100, 'good plant', 'daisy.jfif', 'hemal@gmail.com', '480'),
(94, 31, 18, 'Iris', 400, 100, 'good plant', 'iris.jfif', 'hemal@gmail.com', '350'),
(95, 31, 18, 'Jasmine', 400, 100, 'good plant', 'jasmine.jfif', 'hemal@gmail.com', '380'),
(96, 31, 18, 'Peony', 400, 100, 'good plant', 'peony.jfif', 'hemal@gmail.com', '370'),
(97, 31, 18, 'Rose', 500, 100, 'good plant', 'rose.jfif', 'hemal@gmail.com', '450'),
(98, 31, 18, 'Snowdrop', 250, 100, 'good plant', 'snowdrop.jfif', 'hemal@gmail.com', '200'),
(99, 31, 18, 'Tulip', 400, 100, 'good plant', 'tulip.jfif', 'hemal@gmail.com', '370'),
(100, 20, 18, 'Beans', 250, 100, 'good plant', 'beans.jfif', 'hemal@gmail.com', '200'),
(101, 20, 18, 'Bringal', 300, 100, 'good plant', 'brinjal.jfif', 'hemal@gmail.com', '250'),
(102, 20, 18, 'Capsicum', 300, 100, 'good plant', 'capsicum.jfif', 'hemal@gmail.com', '280'),
(103, 20, 18, 'Chilli', 250, 100, 'good plant', 'chili.jfif', 'hemal@gmail.com', '200'),
(104, 20, 18, 'Cucumber', 300, 100, 'good plant', 'cucumber.jfif', 'hemal@gmail.com', '280'),
(106, 20, 18, 'Tomato', 400, 30, 'good plant', 'tomato.jfif', 'hemal@gmail.com', '370'),
(107, 47, 18, 'dracaena', 400, 200, 'Good', 'dracaena.jfif', 'hemal@gmail.com', '370'),
(108, 47, 18, 'focus', 400, 299, 'good', 'focus.jfif', 'hemal@gmail.com', '370'),
(110, 47, 18, 'parlor palm', 500, 210, 'good', 'parlor palm.jfif', 'hemal@gmail.com', '450'),
(111, 47, 18, 'snake', 500, 400, 'good', 'snake.jfif', 'hemal@gmail.com', '48'),
(112, 47, 18, 'yucca', 400, 100, 'good', 'yucca.jfif', 'hemal@gmail.com', '370'),
(113, 47, 18, 'Pthas', 500, 100, 'good', 'pothas.jfif', 'hemal@gmail.com', '400'),
(114, 15, 18, 'banyan seeds', 400, 20, 'good', 'banyan seeds.jfif', 'hemal@gmail.com', '320'),
(115, 15, 18, 'banyan', 500, 100, 'good', 'banyan.jfif', 'hemal@gmail.com', '400'),
(116, 15, 18, 'boxwood seeds', 300, 100, 'good', 'boxwood seeds.jfif', 'hemal@gmail.com', '280'),
(117, 15, 18, 'ficus seeds', 500, 100, 'good', 'ficus seeds.jfif', 'hemal@gmail.com', '480'),
(118, 31, 18, 'bluebell seeds', 400, 30, 'good', 'bluebell seeds.jfif', 'hemal@gmail.com', '370'),
(119, 31, 18, 'jasmine seeds', 250, 18, 'good', 'jasmine seeds.jfif', 'hemal@gmail.com', '200'),
(120, 31, 18, 'rose seeds', 400, 166, 'good', 'rose seeds.jfif', 'hemal@gmail.com', '370'),
(121, 20, 18, 'tomato seeds', 300, 100, 'good', 'tomato seeds.jfif', 'hemal@gmail.com', '280'),
(122, 20, 18, 'chilli seeds', 400, 100, 'good', 'chilli seeds.jfif', 'hemal@gmail.com', '370'),
(123, 47, 18, 'aloe seeds', 300, 100, 'good', 'aloe seeds.jfif', 'hemal@gmail.com', '280'),
(124, 47, 18, 'dracaena seeds', 400, 100, 'good', 'dracaena seeds.jfif', 'hemal@gmail.com', '350'),
(125, 47, 18, 'snake seeds', 400, 199, 'good', 'snake seeds.jfif', 'hemal@gmail.com', '350'),
(126, 15, 18, 'bodhi seeds', 500, 100, 'good', 'bodhi seeds.jfif', 'hemal@gmail.com', '450'),
(127, 31, 18, 'peony seeds', 400, 100, 'good', 'peony seeds.jfif', 'hemal@gmail.com', '370');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `ifsc` text DEFAULT NULL,
  `pan_card` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `username`, `email`, `street`, `city`, `pincode`, `password`, `phone`, `ifsc`, `pan_card`) VALUES
(8, 'malbok', 'malbok@gmail.com', 'STR 2', 'Meghalaya', '411772', 'malbok123', '134567890', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2652;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
