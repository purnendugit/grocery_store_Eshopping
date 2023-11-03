-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 03:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'Purnendu Pandit', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `product_name`, `product_id`, `created_at`) VALUES
(12, 'Beverages', 0, '2023-10-14 17:15:03'),
(14, 'Cold Drinks', 12, '2023-10-14 17:24:49'),
(15, 'Cake', 0, '2023-10-28 03:22:25'),
(16, 'Cup Cake', 15, '2023-10-28 03:23:24'),
(17, 'Vegetable', 0, '2023-10-28 06:59:01'),
(18, 'Onion', 17, '2023-10-28 06:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `t_product` varchar(255) NOT NULL,
  `t_price` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `uid`, `u_name`, `mobile`, `landmark`, `town`, `address`, `t_product`, `t_price`, `status`, `created_at`) VALUES
(8, 8, 'Sreeja', '7980567600', 'kly', 'kal', 'Home', 'Paper Boat (1), Marinda (1)', '118', '1', '2023-10-19 05:28:29'),
(9, 8, 'Sreeja', '7980567600', 'suor', 'babay', 'Home', 'Marinda (1)', '106.2', '1', '2023-10-29 04:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `ch_name` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `pp` int(255) NOT NULL,
  `p_disc` int(255) NOT NULL,
  `ps` int(255) NOT NULL,
  `p_col` varchar(255) NOT NULL,
  `p_qty` int(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_images` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `pr_name`, `ch_name`, `prod_name`, `pp`, `p_disc`, `ps`, `p_col`, `p_qty`, `p_desc`, `p_images`, `created_at`) VALUES
(30, 'Drinks', 'Cold Drinks', 'Marinda', 90, 1, 90, 'Drinks', 26, 'Refresh ment Drinks', '169730440849.png', '2023-10-14 17:26:48'),
(31, 'Drinks', 'Cold Drinks', 'Paper Boat', 10, 0, 10, 'Drinks', 10, 'Refreshment drinks', '169730464850.png', '2023-10-14 17:30:48'),
(32, 'Cake', 'Cup Cake', 'Chocolate Cup Cake', 20, 2, 18, 'Cake', 30, 'Chocolate flavor cake, Good for  children tiffin.', '169847618137.png', '2023-10-28 06:56:21'),
(33, 'Vegetable', 'Onion', 'Onion', 40, 0, 40, 'Vegetable', 50, 'Good Quality Onion', '169847644433.png', '2023-10-28 07:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `c_id` int(11) NOT NULL,
  `uid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_qty` int(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `full_name`, `email`, `phone`, `image`, `password`, `created_at`) VALUES
(8, 'Sreeja', 'p@gmail.com', '7980567600', '1697523396Screenshot 2023-08-29 013638.png', '$2y$10$yJlEF8dspkKugPXZ0CLCFu3hhVTNYCCf9BEo/pCXVbhfXfiXbACvG', '2023-10-14 19:34:10');

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
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
