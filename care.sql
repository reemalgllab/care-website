-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 12:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_passward` varchar(255) NOT NULL,
  `full_name` text NOT NULL,
  `admin_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_passward`, `full_name`, `admin_img`) VALUES
(102, 'jmohmmad@yahoo.com', '147258', 'jaber mohmmad', 'jaber mohmmad.jpg'),
(103, 'omar.abdallah@hotmail.com', '258369', 'omar abdallah', 'omarabdallah.jpg'),
(104, 'samerowdeh@yahoo.com', '789456', 'samer owdeh', 'samerowdeh.jpg'),
(105, 'yamenali@hotmail.com', '456123', 'yamen ali', 'yamennali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(20, 'women', 'women.jpg'),
(21, 'men', 'men.jpg'),
(22, 'girl', 'girl.jpg'),
(23, 'boy', 'boy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_passward` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_passward`, `mobile`, `address`) VALUES
(4, 'reem', 'reem.algllab@hotmail.com', 'lknlk', 546522225, 'nnkkkkjb'),
(7, 'lolo', 'wad-algallab89@outlook.com', 'kflkvdlk', 785946321, 'ajloon'),
(9, 'omar', 'omar@hotmail.com', '123456', 795864585, 'amman');

-- --------------------------------------------------------

--
-- Table structure for table `customorder`
--

CREATE TABLE `customorder` (
  `order_id` int(255) NOT NULL,
  `order_date` date NOT NULL,
  `customer_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(255) NOT NULL,
  `pro_imge` varchar(255) NOT NULL,
  `pro_desc` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_imge`, `pro_desc`, `cat_id`) VALUES
(34, ' Dress Vogue Lace ', 28, 'p1.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(35, ' Dress classy  ', 40, 'p2.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(36, 'blue dress', 52, 'p3.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(37, 'pink dress', 12, 'p4.jpeg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(38, 'yellow dress', 44, 'p5.jpeg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(39, 'grey dress', 40, 'p6.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(40, 'dark yellow dress', 33, 'p7.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(41, 'baby pink dress', 70, 'p8.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(42, 'brown dress', 30, 'p10.jpg', 'baby girl summer dress fashion flower decoration lovely princess dress ', 22),
(43, 'flower T-shirt', 12, 'w1.jpg', 'casual women tshirt ', 20),
(44, 'black T-shirt', 10, 'w2.jpg', 'casual women tshirt ', 20),
(45, 'pink and white T-shirt', 5, 'w3.jpg', 'casual women tshirt ', 20),
(46, 'blue T-shirt ', 58, 'w4.jpg', 'casual women tshirt ', 20),
(47, 'fish t-shirt', 55, 'w5.jpg', 'casual women tshirt ', 20),
(48, 'black T-shirt', 88, 'w6.jpg', 'casual women tshirt ', 20),
(49, 'wonderful t-shirt', 55, 'w7.jpg', 'casual women tshirt ', 20),
(50, 'dark blue t-shirt', 63, 'w8.jpg', 'casual women tshirt ', 20),
(51, 'baby blue t-shirt', 45, 'w9.jpg', 'casual women tshirt ', 20),
(52, 'red blue', 12, 'm1.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(53, 'white blue', 10, 'm2.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(54, 'yellow ', 14, 'm3.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(55, 'giraffe', 55, 'm4.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(56, 'tree', 85, 'm5.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(57, 'traditional', 66, 'm6.jpeg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(58, 'green', 88, 'm7.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(59, 'pink yellow', 88, 'm8.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(60, 'Beach', 55, 'm10.jpg', 'Men Summer Casual Ethnic Style Pattern Printed Shirts Tops from Men', 21),
(61, 'green and blue', 11, 'b1.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(62, 'pink and blue', 15, 'b2.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(63, 'anchor', 100, 'b3.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(64, 'anchor tall', 55, 'b4.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(65, '', 44, 'b11.jpg', 'summer style baby boys clothing set brand Captain America', 0),
(66, 't-shirt and short', 12, 'b6.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(68, 'star', 33, 'b7.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(69, 'ice cream t-shirt', 55, 'b8.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(70, '', 88, 'b3.jpg', 'summer style baby boys clothing set brand Captain America', 0),
(71, 'Dinosaur t-shirt', 55, 'b9.jpg', 'summer style baby boys clothing set brand Captain America', 23),
(72, 'gentle short', 63, 'b11.jpg', 'summer style baby boys clothing set brand Captain America', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customorder`
--
ALTER TABLE `customorder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customorder`
--
ALTER TABLE `customorder`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
