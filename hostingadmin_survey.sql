-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2019 at 07:46 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostingadmin_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `images1` varchar(255) NOT NULL,
  `offer` varchar(255) NOT NULL,
  `offer1` varchar(100) NOT NULL,
  `regulartext` varchar(100) NOT NULL,
  `url_1` varchar(255) DEFAULT NULL,
  `tracking_link` varchar(255) NOT NULL,
  `ct_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `images`, `images1`, `offer`, `offer1`, `regulartext`, `url_1`, `tracking_link`, `ct_dt`) VALUES
(49, '../images/9.png', '../images/9.png', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'Keto Burn', 'http://fitbitty.com/usketoss/v1/', 'https://www.ketonediethack.com/v1-r-1/?affId=9880319E&c1=%7Baffiliate_id%7D&c2=%7Btransaction_id%7D	', '2019-05-31 10:07:46'),
(60, 'images/9.png', 'images/9.png', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'Keto Burn', 'http://fitbitty.com/usketoss/v2/', 'https://www.ketonediethack.com/v1-r-1/?affId=9880319E&c1=%7Baffiliate_id%7D&c2=%7Btransaction_id%7D	', '2019-05-31 09:50:39'),
(61, 'images/9.png', 'images/9.png', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'Keto Burn', 'http://fitbitty.com/usketoss/v3/', 'https://www.ketonediethack.com/v1-r-1/?affId=9880319E&c1=%7Baffiliate_id%7D&c2=%7Btransaction_id%7D	', '2019-05-30 12:06:03'),
(62, 'images/KetoHack_final.png', 'images/KetoHack_final.png', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', 'Keto Hack', 'http://fitbitty.com/usketoss/v4/', 'https://www.ketonediethack.com/v1-r-1/?affId=9880319E&c1=%7Baffiliate_id%7D&c2=%7Btransaction_id%7D	', '2019-05-31 09:50:48'),
(63, 'images/9.png', 'images/9.png', 'CLICK HERE to Claim Your Exclusive 40% Discount and FREE shipping on Keto Burn', '40% DISCOUNT + FREE SHIPPING OF KETO BURN', 'Keto Burn', 'http://fitbitty.com/usketoss/v5/', 'https://www.ketonediethack.com/v1-r-1/?affId=9880319E&c1=%7Baffiliate_id%7D&c2=%7Btransaction_id%7D	', '2019-05-30 12:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ct_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ct_dt`) VALUES
(1, 'amzus@crm.com', 'Admin@1', '2019-04-19 05:23:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
