-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 03:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `App_id` int(2) NOT NULL,
  `Reg_no` int(2) NOT NULL,
  `ser_cat_id` varchar(20) NOT NULL,
  `Cat_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Barbershop_id` int(2) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`App_id`, `Reg_no`, `ser_cat_id`, `Cat_id`, `Date`, `Time`, `Barbershop_id`, `Status`) VALUES
(98, 32, '1', 1, '2022-06-16', '15:33:00', 36, 1),
(99, 32, '2', 1, '2022-06-16', '18:42:00', 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barbershop`
--

CREATE TABLE `tbl_barbershop` (
  `Detail_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `House_name` varchar(255) NOT NULL,
  `Originator_Mobile` varchar(15) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barbershop`
--

INSERT INTO `tbl_barbershop` (`Detail_id`, `Reg_id`, `House_name`, `Originator_Mobile`, `Message`) VALUES
(5, 33, 'Uwezo pLaza', '+254751724544', 'Your service is about time.'),
(6, 34, 'Uwezo pLaza', '+254751724544', 'Your service is about time.'),
(7, 35, '', '+254751724544', 'Your service is about time.'),
(8, 36, 'Uwezo pLaza', '+254766666666', 'Testing testing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `ser_cat_id` int(5) NOT NULL,
  `Cat_id` int(5) NOT NULL,
  `ser_cat_name` varchar(50) NOT NULL,
  `ser_cat_price` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`ser_cat_id`, `Cat_id`, `ser_cat_name`, `ser_cat_price`, `status`) VALUES
(1, 1, 'Hair Cut', 150, 1),
(2, 1, 'Hair Coloring', 500, 1),
(3, 1, 'Hair Straightening', 5000, 1),
(4, 1, 'Hair Dye', 200, 1),
(5, 1, 'Hair Smoothening', 6000, 1),
(6, 2, 'Manicure', 500, 1),
(7, 2, 'Pedicure', 100, 1),
(8, 2, 'Gel polish', 100, 1),
(9, 2, 'Nail Art', 120, 1),
(10, 2, 'Nail cut', 50, 1),
(11, 3, 'Traditional straight razor shaves', 1000, 1),
(12, 3, 'Hot Towels', 5000, 1),
(13, 3, 'Balm Treatment', 500, 1),
(15, 4, 'Essential facials and peels', 1000, 1),
(16, 4, 'Sports massage', 1000, 1),
(17, 4, 'Deep tissue massage', 2000, 1),
(18, 5, 'Eyebrow shaping', 500, 1),
(23, 9, 'CategoryNameOne', 150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `Feed_id` int(2) NOT NULL,
  `App_id` varchar(255) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Barbershop_id` varchar(11) NOT NULL,
  `Date` date NOT NULL,
  `Feed_msg` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`Feed_id`, `App_id`, `Reg_id`, `Barbershop_id`, `Date`, `Feed_msg`, `status`) VALUES
(32, '93', 32, '36', '2022-06-15', 'Nice service', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `Location_id` int(11) NOT NULL,
  `Location_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`Location_id`, `Location_name`) VALUES
(1, 'Kilifi'),
(2, 'Mombasa'),
(3, 'Malindi'),
(4, 'Mtwapa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Log_id` int(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role_id` int(5) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Log_id`, `Username`, `Password`, `Role_id`, `Reg_id`, `Status`) VALUES
(3, 'admin', 'admin', 0, 0, 0),
(38, 'CustomerOne', '25d55ad283aa400af464c76d713c07ad', 1, 32, 1),
(39, 'Rich Dad', '25d55ad283aa400af464c76d713c07ad', 2, 33, 1),
(40, 'KevinShop', '25d55ad283aa400af464c76d713c07ad', 2, 34, 1),
(41, 'MikeShop', '25d55ad283aa400af464c76d713c07ad', 2, 35, 1),
(42, 'UwezoShop', '25d55ad283aa400af464c76d713c07ad', 2, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Reg_id` int(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Location_id` int(20) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Reg_id`, `Username`, `Location_id`, `Mobile`, `Email`, `Image`, `Status`) VALUES
(32, 'CustomerOne', 1, '0798827450', 'customerone@gmail.com', '1 (2).jpg', 1),
(33, 'Rich Dad', 1, '0798827450', 'richdad@gmail.com', '3.jpg', 2),
(34, 'KevinShop', 4, '0799999663', 'kevinshop@gmail.com', '1.jpg', 2),
(35, 'MikeShop', 2, '0798827450', 'mikeshop@gmail.com', '4 (2).jpg', 2),
(36, 'UwezoShop', 3, '0798827450', 'uwezo@gmail.com', '8.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_category`
--

CREATE TABLE `tbl_service_category` (
  `Cat_id` int(2) NOT NULL,
  `Cat_name` varchar(50) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_category`
--

INSERT INTO `tbl_service_category` (`Cat_id`, `Cat_name`, `Status`) VALUES
(1, 'Hair Treatment', 1),
(2, 'Nail Treatments', 1),
(3, 'Shaves', 1),
(4, 'Men\'s Services', 1),
(5, 'Waxing Services', 1),
(9, 'ServiceOne', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`App_id`);

--
-- Indexes for table `tbl_barbershop`
--
ALTER TABLE `tbl_barbershop`
  ADD PRIMARY KEY (`Detail_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`ser_cat_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`Feed_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`Location_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`Log_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `App_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_barbershop`
--
ALTER TABLE `tbl_barbershop`
  MODIFY `Detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `ser_cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `Feed_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `Location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `Log_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `Reg_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  MODIFY `Cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
