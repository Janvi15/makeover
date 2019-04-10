-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 06:51 AM
-- Server version: 10.1.34-MariaDB
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
-- Database: `makeover`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `A_Email` varchar(20) NOT NULL,
  `A_Password` varchar(20) NOT NULL,
  `A_Fname` varchar(15) NOT NULL,
  `A_Lname` varchar(15) NOT NULL,
  `A_PhoneNo` int(10) NOT NULL,
  `A_Photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_detail`
--

CREATE TABLE `appointment_detail` (
  `appointment_id` int(100) NOT NULL,
  `shop_id` varchar(255) NOT NULL DEFAULT '11',
  `customer_id` varchar(255) NOT NULL DEFAULT 'krupa567@yahoo.com',
  `date_time` datetime NOT NULL,
  `Hair_cut` int(2) NOT NULL,
  `Pedicure` int(11) NOT NULL,
  `Facial_and_Clean_ups` int(11) NOT NULL,
  `Waxing_normal` int(11) NOT NULL,
  `Dettaning` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `C_Email` varchar(30) NOT NULL,
  `C_Fname` varchar(20) NOT NULL,
  `C_Lname` varchar(20) NOT NULL,
  `C_PhoneNo` int(10) NOT NULL,
  `C_Password` varchar(20) NOT NULL,
  `C_Gender` varchar(10) DEFAULT NULL,
  `C_State` varchar(20) DEFAULT NULL,
  `C_City` varchar(15) DEFAULT NULL,
  `C_Street` varchar(15) DEFAULT NULL,
  `C_Pincode` int(6) DEFAULT NULL,
  `C_Photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`C_Email`, `C_Fname`, `C_Lname`, `C_PhoneNo`, `C_Password`, `C_Gender`, `C_State`, `C_City`, `C_Street`, `C_Pincode`, `C_Photo`) VALUES
('janvirai000@gmail.com', 'Janvi', 'Rai', 1234567890, 'janvi', NULL, NULL, NULL, NULL, NULL, NULL),
('krupa567@yahoo.com', 'krupa', 'chauhan', 1234567890, 'krupa', NULL, NULL, NULL, NULL, NULL, NULL),
('krupa@gmail.com', 'krup', 'chauhan', 1111111111, '111111', NULL, NULL, NULL, NULL, NULL, NULL),
('harshita121@gmail.com', 'harshita', 'mantri', 123456790, 'harshita', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `shop_id` int(5) NOT NULL,
  `Hair_cut` int(5) NOT NULL,
  `Pedicure` int(5) NOT NULL,
  `Facial_and_Clean_ups` int(5) NOT NULL,
  `Waxing_normal` int(5) NOT NULL,
  `Dettaning` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`shop_id`, `Hair_cut`, `Pedicure`, `Facial_and_Clean_ups`, `Waxing_normal`, `Dettaning`) VALUES
(11, 200, 150, 200, 200, 250);

-- --------------------------------------------------------

--
-- Table structure for table `shopowner_detail`
--

CREATE TABLE `shopowner_detail` (
  `S_Email` varchar(20) NOT NULL,
  `S_Password` varchar(15) NOT NULL,
  `S_Fname` varchar(15) NOT NULL,
  `S_Lname` varchar(15) NOT NULL,
  `ShopName` varchar(30) NOT NULL,
  `shop_id` int(5) NOT NULL,
  `Shop_State` varchar(15) NOT NULL,
  `Shop_City` varchar(17) NOT NULL,
  `Shop_Street` varchar(25) NOT NULL,
  `S_PinCode` int(6) NOT NULL,
  `S_Photo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopowner_detail`
--

INSERT INTO `shopowner_detail` (`S_Email`, `S_Password`, `S_Fname`, `S_Lname`, `ShopName`, `shop_id`, `Shop_State`, `Shop_City`, `Shop_Street`, `S_PinCode`, `S_Photo`) VALUES
('shop1@google.com', 'shop1', 'Aniket', 'Gautam', 'Kalista Beauty Hair salon', 11, 'Gujarat', 'Gandhinagar', 'Sector 21', 302621, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  ADD PRIMARY KEY (`appointment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_detail`
--
ALTER TABLE `appointment_detail`
  MODIFY `appointment_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
