-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 12:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(80) NOT NULL,
  `creation_date` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `update_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_desc`, `creation_date`, `update_date`) VALUES
(11, 'Electronic', 'All electronics product are available.', '25-10-2021 01:50:49 ', ''),
(12, 'Books', 'We Have All Types Of Books Are There.', '25-10-2021 01:51:13 ', ''),
(13, 'Furniture', 'We Have Different types of furniture are their as comfort to your home/office.', '25-10-2021 01:51:58 ', ''),
(14, 'Fashion', 'we have all latest types of fashion product available.', '25-10-2021 01:52:35 ', ''),
(15, 'Cosmetics', 'all cosmetic product are available.', '25-10-2021 01:53:21 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `shipping_state` varchar(50) NOT NULL,
  `shipping_city` varchar(30) NOT NULL,
  `shipping_pincode` varchar(10) NOT NULL,
  `billing_address` varchar(100) NOT NULL,
  `billing_state` varchar(20) NOT NULL,
  `billing_city` varchar(20) NOT NULL,
  `billing_pincode` varchar(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `register_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_track`
--

CREATE TABLE `order_track` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `remark` mediumtext NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `description` varchar(80) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `shipping` varchar(50) NOT NULL,
  `available` varchar(10) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `sub_category`, `product_name`, `company`, `price`, `discount`, `description`, `img1`, `img2`, `img3`, `shipping`, `available`, `posting_date`, `update_date`) VALUES
(7, 'Books', 'Action and Adventure', 'Harry Potter', 'Mariko', 399, 299, 'This Is Story Book. ', '../images/ book2.jpg', '../images/ book2.jpg', '../images/ book2.jpg', '99', 'In Stock', '2021-10-22 17:43:13', ''),
(9, 'Electronic', 'mobile', 'Iphone 13 pro', 'Apple', 70000, 62000, 'this has many feature are also available in our strore.', '../images/  mobile.jpg', '../images/ 1-2-iphone-png-picture-png-clipart.png', '../images/ mobile1.jpeg', '99', 'In Stock', '2021-10-25 08:32:52', ''),
(11, 'Books', 'Action and Adventure', 'Ivanhoe', 'by Walter Scott', 349, 299, ' Ivanhoe is set in the 12th century and focuses on one of the few Saxon noble fa', '../images/ book.jpg', '../images/ book1.jpg', '../images/  slider3.jpg', '99', 'In Stock', '2021-10-25 23:58:56', ''),
(15, 'Electronic', 'Digital Watch', 'ColorFit Ultra', 'Noice ColorFit Ultra', 5999, 3299, 'The ColorFit Ultra is more than what meets the eye.', '../images/ watch.png', '../images/ watch.png', '../images/ watch.png', '99', 'In Stock', '2021-10-27 18:31:32', ''),
(16, 'Books', 'Horror', 'The Demonic', 'Createspace ', 299, 149, 'This Is real based story on person who based in US.', '../images/ book1.jpeg', '../images/ book1.jpeg', '../images/ book1.jpeg', '99', 'In Stock', '2021-10-27 19:07:13', ''),
(17, 'Furniture', 'Sofas', ' L Shape Sofa', 'Adorn India', 39999, 29999, 'Warranty : 2 year warranty for frame and foam', '../images/ sofa.jpg', '../images/ sofa.jpg', '../images/ sofa.jpg', '99', 'In Stock', '2021-10-27 19:15:26', ''),
(18, 'Furniture', 'Accent Chairs', 'Single Seater Reclin', 'Mehtas Brand', 27000, 16999, 'Warranty on manufacturing defects: 3 years', '../images/ sofa1.jpg', '../images/ sofa1.jpg', '../images/ sofa1.jpg', '99', 'In Stock', '2021-10-27 19:18:31', ''),
(19, 'Furniture', 'Chaises', 'Café Chair', 'Bhumika Overseas', 5999, 2999, 'Main Material: Faux Leather, Leg Material: Wood', '../images/ sofa2.jpg', '../images/ sofa2.jpg', '../images/ sofa2.jpg', '99', 'In Stock', '2021-10-27 19:21:07', ''),
(20, 'Electronic', 'mobile', 'Samsung A50', 'Samsung', 30000, 26799, 'this is good quality product.', '../images/sam.jpg ', '../images/ samsung.jpg', '../images/ samsung1.jpeg', '99', 'In Stock', '2021-10-29 09:10:58', ''),
(21, 'Electronic', 'Laptop', 'Mac Book Pro', 'Apple', 80000, 72000, 'this product has M1 chip with 11th gen pro.', '../images/  laptop.jpg', '../images/  laptop.jpg', '../images/  laptop.jpg', '99', 'In Stock', '2021-10-29 09:12:51', ''),
(22, 'Books', 'Action and Adventure', 'Harry Potter', 'Mariko', 399, 299, 'The books have been made into eight films by Warner Bros. The last book was spli', '../images/ book2.jpg', '../images/ book1.jpeg', '../images/ book.jpg', '99', 'In Stock', '2021-10-31 00:30:08', ''),
(23, 'Books', 'study', 'C Programming', 'Biswajoy', 499, 299, 'Study Material on C Programming: Version 1.45 .', '../images/ c.jpg', '../images/ php.jpg', '../images/ java.jpg', '99', 'In Stock', '2021-11-01 05:07:40', ''),
(24, 'Books', 'study', 'Java Programming', 'mr. kothyana', 599, 349, 'In this book solve all the programs for basic to advance & easy to learn. ', '../images/  java.jpg', '../images/  c.jpg', '../images/ php.jpg', '99', 'In Stock', '2021-11-01 05:09:35', ''),
(25, 'Books', 'study', 'PHP Programming ', 'mr. kothyana', 399, 299, 'In this book is solve all basic concept of OOPS, MVC, etc...', '../images/  php.jpg', '../images/  c.jpg', '../images/ java.jpg', '99', 'In Stock', '2021-11-01 05:11:11', ''),
(26, 'Books', 'motivation', 'Think & Grow Rich', 'Napoleon', 599, 349, 'Think and Grow Rich by Napoleon Hill examines the psychological power of thought', '../images/ moti.jpg', '../images/ moti.jpg', '../images/ moti.jpg', '99', 'In Stock', '2021-11-01 05:15:53', ''),
(27, 'Furniture', 'Sectionals', '8-pices sectionals s', 'Modway', 19299, 15999, 'This Sectionals sofa has large than orthers.', '../images/ sofa3.jpg', '../images/  sofa.jpg', '../images/  sofa.jpg', '129', 'In Stock', '2021-11-01 06:02:14', ''),
(28, 'Furniture', 'Sectionals', '12-pices sectionals ', 'Dennis', 22000, 19000, 'Best furniture 12 Seater Sectionals and Loveseats Wood Sofa Set (White and Blue)', '../images/ sofa4.jpg', '../images/ sofa3.jpg', '../images/  sofa.jpg', '129', 'In Stock', '2021-11-01 06:18:34', ''),
(29, 'Electronic', 'Laptop', 'Apple MacBook Pro', 'Apple', 239900, 239400, 'Apple M1 Pro or M1 Max chip for a massive leap in CPU, GPU and machine learning ', '../images/ laptop1.jpg', '../images/ laptop.jpg', '../images/ laptop1.jpg', 'Free', 'In Stock', '2021-11-22 10:15:07', ''),
(30, 'Electronic', 'Digital Watch', 'Digital Mens Watch', 'Carlson Raulen', 1999, 799, 'Sports watch: Suitable for men, especially to those who like doing sports, multi', '../images/ watch1.jpg', '../images/ watch.png', '../images/ watch1.jpg', '99', 'In Stock', '2021-11-22 10:22:42', ''),
(31, 'Electronic', 'Headphone', 'boAt Bassheads', 'BOAT', 2490, 599, 'boAt Bassheads 900 Wired On Ear Headphones with Mic (Carbon Black)', '../images/ headphone.jpg', '../images/    logo.png', '../images/ headphone.jpg', 'Free', 'In Stock', '2021-11-22 10:26:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `summary` varchar(50) NOT NULL,
  `review` longtext NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `sub_cat` varchar(50) NOT NULL,
  `creation_date` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `update_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cat_id`, `sub_cat`, `creation_date`, `update_date`) VALUES
(7, '11', 'mobile', '25-10-2021 01:57:08', ''),
(8, '14', 'Men shirt', '25-10-2021 01:57:08 ', ''),
(9, '12', 'Action and Adventure', '26-10-2021 05:18:50 ', ''),
(10, '13', 'Commercial Furniture', '26-10-2021 05:19:15 ', ''),
(11, '15', 'Lakmes', '26-10-2021 05:21:09 ', ''),
(12, '11', 'Headphone', '27-10-2021 11:40:59 ', ''),
(13, '11', 'Laptop', '27-10-2021 11:54:21 ', ''),
(14, 'Select', 'Digital Watch', '27-10-2021 11:58:02 ', ''),
(15, '12', 'Horror', '28-10-2021 12:30:58 ', ''),
(16, '12', 'Comic Book', '28-10-2021 12:31:10 ', ''),
(17, '13', 'Sofas', '28-10-2021 12:39:07 ', ''),
(18, '13', 'Accent Chairs', '28-10-2021 12:39:33 ', ''),
(19, '13', 'Chaises', '28-10-2021 12:39:57 ', ''),
(20, '14', 'Women', '28-10-2021 12:55:00 ', ''),
(21, '14', 'Jeans', '28-10-2021 12:55:22 ', ''),
(22, '14', 'Kids', '28-10-2021 12:58:40 ', ''),
(23, '12', 'study', '01-11-2021 10:34:30 ', ''),
(24, '12', 'motivation', '01-11-2021 10:34:38 ', ''),
(25, '13', 'Sectionals', '01-11-2021 11:29:24 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `shipping_state` varchar(50) NOT NULL,
  `shipping_city` varchar(50) NOT NULL,
  `shipping_pincode` varchar(20) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `billing_state` varchar(50) NOT NULL,
  `billing_city` varchar(50) NOT NULL,
  `billing_pincode` varchar(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `total_amount` varchar(30) NOT NULL,
  `register_date` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `update_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `contact`, `shipping_address`, `shipping_state`, `shipping_city`, `shipping_pincode`, `billing_address`, `billing_state`, `billing_city`, `billing_pincode`, `product_name`, `qty`, `total_amount`, `register_date`, `update_date`) VALUES
(14, 'Harsh Jain', 'harsh@gmail.com', '8668717465', 'civil lines Nagpur', 'maharashtra', 'Nagpur', '440010', 'civil lines Nagpur', 'maharashtra', 'Nagpur', '440010', 'Iphone 13 pro', '1', '62,000.00', '0000-00-00 00:00:00', ''),
(15, 'rohan wandhre', 'rohan@gmail.com', '8668717465', 'civil lines chandrapur', 'maharashtra', 'Nagpur', '440010', 'civil lines chandrapur', 'maharashtra', 'Nagpur', '440010', 'ColorFit Ultra', '1', '3,299.00', '0000-00-00 00:00:00', ''),
(16, 'rohan wandhre', 'rohan@gmail.com', '8668717465', 'civil lines chandrapur', 'maharashtra', 'Nagpur', '440010', 'civil lines chandrapur', 'maharashtra', 'Nagpur', '440010', 'ColorFit Ultra', '1', '3,299.00', '02-12-2021 12:55:37,', ''),
(17, 'Harsh Jain', 'harsh@gmail.com', '8668717465', 'civil lines Nagpur', 'maharashtra', 'Nagpur', '440010', 'civil lines Nagpur', 'maharashtra', 'Nagpur', '440010', 'Iphone 13 pro', '1', '62,000.00', '02-12-2021 01:00:31,', ''),
(18, 'abc', 'abc@gmail.com', '9689169170', 'girnar chowk', 'maharashtra', 'chandrapur', '442905', 'girnar chowk', 'maharashtra', 'chandrapur', '442905', 'Café Chair', '2', '5,998.00', '02-12-2021 01:01:52,', ''),
(19, 'pranit chalak', 'pranit@gmail.com', '1234567890', 'civil lines chandrapur', 'maharashtra', 'Nagpur', '440010', 'civil lines chandrapur', 'maharashtra', 'Nagpur', '440010', 'The Demonic', '1', '149.00', '02-12-2021 01:04:47,', ''),
(20, 'Mayur', 'mayur@gmail.com', '8657854282', 'raytwari complex', 'maharashtra', 'Nagpur', '440010', 'raytwari complex', 'maharashtra', 'Nagpur', '440010', '8-pices sectionals s', '1', '15,999.00', '02-12-2021 01:07:25,', ''),
(21, 'Harsh', 'harsh@gmail.com', '9689169170', 'civil lines Nagpur', 'maharashtra', 'Nagpur', '440010', 'civil lines Nagpur', 'maharashtra', 'Nagpur', '440010', '8-pices sectionals s', '1', '15,999.00', '03-12-2021 01:09:43,', ''),
(22, 'Roshan', 'roshan@gmail.com', '9922778847', 'nehru chowk rajura', 'maharashtra', 'Rajura', '442905', 'nehru chowk rajura', 'maharashtra', 'Rajura', '442905', 'Samsung A50', '3', '80,397.00', '03-12-2021 01:17:45,', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `ip` binary(10) NOT NULL,
  `login_time` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `user_email`, `ip`, `login_time`, `logout`) VALUES
(6, 'abc@gmail.com', 0x3a3a3100000000000000, '04-12-2021 01:10:59,', ''),
(7, '', 0x00000000000000000000, '2021-12-03 23:46:37', '04-12-2021 01:16:37,'),
(8, 'harsh@gmail.com', 0x00000000000000000000, '04-12-2021 01:18:37,', ''),
(9, '', 0x00000000000000000000, '2021-12-03 23:48:39', '04-12-2021 01:18:39,'),
(10, 'roahn@gmail.com', 0x00000000000000000000, '04-12-2021 01:19:06,', ''),
(11, '', 0x00000000000000000000, '2021-12-03 23:49:08', '04-12-2021 01:19:08,'),
(12, 'abc@gmail.com', 0x00000000000000000000, '12-12-2021 05:03:43,', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `first_name`, `last_name`, `email`, `password`, `mob`, `address`, `city`) VALUES
(1, 'Harsh', 'Jain', 'harsh@gmail.com', 'admin', '8668717465', 'civil lines, nagpur', 'Nagpur'),
(2, 'Harsh', 'Jain', 'harsh@gmail.com', 'admin', '8668717465', 'civil lines, nagpur', 'Nagpur'),
(3, 'rohan', 'wandhre', 'roahn@gmail.com', 'rohan', '8657854282', 'girnar chowk chandrapur', 'chandrapur'),
(4, 'abc', 'def', 'abc@gmail.com', 'abc', '1234567890', 'girnar chowk', 'Rajura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_track`
--
ALTER TABLE `order_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_track`
--
ALTER TABLE `order_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
