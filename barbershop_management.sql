-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 06:38 AM
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
-- Table structure for table `qua`
--

CREATE TABLE `qua` (
  `date` varchar(10) NOT NULL,
  `qua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `About_id` int(2) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(20, 13, '2', 1, '2022-05-09', '12:29:00', 3, 3),
(21, 15, '2', 1, '2022-05-11', '11:27:00', 1, 5),
(28, 1, '1', 2, '2022-05-12', '15:12:00', 19, 1),
(31, 15, '4', 1, '2022-05-18', '16:00:00', 4, 1),
(33, 15, '6', 2, '2022-05-10', '11:17:00', 6, 1),
(34, 15, '8', 2, '2022-05-09', '10:18:00', 8, 1),
(35, 15, '12', 3, '2022-05-09', '11:25:00', 12, 1),
(36, 25, '1', 1, '2022-05-09', '10:49:00', 4, 1),
(37, 25, '2', 1, '2022-05-09', '11:11:00', 27, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barbershop`
--

CREATE TABLE `tbl_barbershop` (
  `Detail_id` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `Cat_id` int(11) NOT NULL,
  `Days_of_operation` datetime(6) NOT NULL,
  `Opening_time` time(6) NOT NULL,
  `Closing_time` time(6) NOT NULL,
  `House_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barbershop`
--

INSERT INTO `tbl_barbershop` (`Detail_id`, `Reg_id`, `Cat_id`, `Days_of_operation`, `Opening_time`, `Closing_time`, `House_name`) VALUES
(1, 28, 1, '0000-00-00 00:00:00.000000', '00:00:08.000000', '00:00:05.000000', ''),
(2, 29, 1, '0000-00-00 00:00:00.000000', '00:00:08.000000', '00:00:05.000000', ''),
(3, 30, 1, '0000-00-00 00:00:00.000000', '00:00:08.000000', '00:00:05.000000', 'GMT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `Bill_id` int(2) NOT NULL,
  `Bill_no` int(5) NOT NULL,
  `Bill_date` date NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Item_id` int(2) NOT NULL,
  `Total_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `Brand_id` int(2) NOT NULL,
  `Brand_name` varchar(20) NOT NULL,
  `Status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`Brand_id`, `Brand_name`, `Status`) VALUES
(1, 'Loreal', '1'),
(2, 'Lakme', '1'),
(3, 'Dove', '1'),
(4, 'Pantene', '1'),
(5, 'Bidco', '1');

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
(20, 7, 'categoty one', 500, 1),
(21, 7, 'category two', 400, 1),
(22, 8, 'CatOneSunday', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `Feed_id` int(2) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Feed_msg` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`Feed_id`, `Reg_id`, `Date`, `Feed_msg`, `status`) VALUES
(1, 9, '2022-04-26', 'Customersunday feedback two ', 0),
(2, 15, '2022-05-06', 'Customersunday feedback two ', 1),
(3, 15, '2022-05-06', 'Customersunday feedback two ', 0),
(4, 24, '2022-05-08', 'Customersunday feedback two ', 1),
(5, 24, '2022-05-08', 'Customersunday feedback two edited', 1),
(6, 24, '2022-05-08', 'customersunday second feedback', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `Item_id` int(2) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Brand_id` int(2) NOT NULL,
  `Item_Cat_id` int(2) NOT NULL,
  `Item_price` int(50) NOT NULL,
  `Item_stock` int(50) NOT NULL,
  `Item_image` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`Item_id`, `Item_name`, `Brand_id`, `Item_Cat_id`, `Item_price`, `Item_stock`, `Item_image`, `status`) VALUES
(1, 'Shampoo', 4, 1, 200, 50, 'Pantene-Conditioner-Hair-Fall-Control-2-size-2.jpg', 1),
(2, 'Soap', 3, 1, 50, 50, 'Dove-Gentle-Exfoliating-Beauty-Bar-Soap.jpg', 1),
(3, 'Menengai', 5, 5, 200, 10, '11.jpg', 1),
(4, 'Menengai', 1, 2, 30, 2, '10.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_category`
--

CREATE TABLE `tbl_item_category` (
  `Item_Cat_id` int(2) NOT NULL,
  `Item_Cat_name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_category`
--

INSERT INTO `tbl_item_category` (`Item_Cat_id`, `Item_Cat_name`, `Description`, `Status`) VALUES
(1, 'Hair kit', 'Hair kitt', 1),
(2, 'Nail kit', 'Nail kit\r\n', 1),
(3, 'Shave kit', 'Eye kit\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `Leave_id` int(2) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Section` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Reason` varchar(70) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'liyamathew11@gmail.com', '83bf6caa59c17cd19dc94c7c7ee5f9ab', 1, 1, 1),
(2, 'jannet@gmail.com', '$2y$10$87wI0B4R3PHUZZhIlPMEtOcKRgyOfsyEn952EWxikQu', 1, 2, 1),
(3, 'admin', 'admin', 0, 0, 0),
(4, 'dilu@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 3, 1),
(5, 'navya@gmail.com', '27e1b4ba0a4d02ac247463a31ce38115', 2, 4, 1),
(6, 'merin@gmail.com', 'e26f9703234847ff245ebb6e636a5e6e', 2, 5, 1),
(7, 'lilly1@gmail.com', '1eef609783c38c3993ed1805db4dddc8', 2, 6, 1),
(8, 'reshma@gmail.com', 'b91cc4164c884921da4164aa2f5781b0', 2, 7, 1),
(9, 'merinm@gmail.com', '3e960e88df01375667d519a41553cc28', 2, 8, 1),
(10, 'mathumichael17@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 9, 1),
(13, 'Mathu', '25d55ad283aa400af464c76d713c07ad', 1, 12, 1),
(14, 'mike@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 13, 1),
(15, 'joe@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 0, 1),
(16, 'dennis@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 0, 1),
(17, 'nzoma@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 14, 1),
(18, 'customer@gmail.com', '', 1, 15, 1),
(19, 'CustomerTwo', '25d55ad283aa400af464c76d713c07ad', 1, 16, 1),
(20, 'uwezo@gmailc.om', '25d55ad283aa400af464c76d713c07ad', 2, 17, 1),
(21, 'barbershopOne@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 18, 1),
(22, 'shopone@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 19, 1),
(23, 'shopthree@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 0, 1),
(24, 'shopfour@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 0, 1),
(25, 'shopfive@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 0, 1),
(27, 'shoptensunday@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 21, 1),
(28, 'ShopTwoSunday', '25d55ad283aa400af464c76d713c07ad', 2, 22, 1),
(29, 'CustomerOneSunday', '25d55ad283aa400af464c76d713c07ad', 1, 23, 1),
(30, 'customertwosunday@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 24, 1),
(31, 'customeronemonday', '25d55ad283aa400af464c76d713c07ad', 1, 25, 1),
(32, 'barberonemonday', '25d55ad283aa400af464c76d713c07ad', 2, 26, 1),
(33, 'barbershoptwomonday', '25d55ad283aa400af464c76d713c07ad', 2, 27, 1),
(34, 'barberone', '25d55ad283aa400af464c76d713c07ad', 2, 28, 1),
(35, 'barber2', '25d55ad283aa400af464c76d713c07ad', 2, 29, 1),
(36, 'barber3', '25d55ad283aa400af464c76d713c07ad', 2, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Pay_id` int(2) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Card_no` varchar(50) NOT NULL,
  `Cvv` int(50) NOT NULL,
  `Bank` varchar(50) NOT NULL,
  `Expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Pay_id`, `Name`, `Card_no`, `Cvv`, `Bank`, `Expiry`) VALUES
(1, 'Liya Mathew', '123456789123456', 123, 'Federal Bank', '2020-08-02'),
(2, 'Jannet George', '147258369741852', 147, 'Federal Bank', '2020-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `Pur_id` int(2) NOT NULL,
  `Reg_id` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Item_id` int(2) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Total` int(50) NOT NULL,
  `Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`Pur_id`, `Reg_id`, `Date`, `Item_id`, `Quantity`, `Total`, `Status`) VALUES
(1, 1, '2017-07-05', 1, 1, 200, 2),
(2, 1, '2017-07-05', 2, 2, 100, 2),
(3, 1, '2017-07-05', 1, 8, 1600, 2),
(4, 1, '2017-07-05', 1, 1, 200, 2),
(5, 9, '2022-04-26', 1, 2, 400, 1),
(6, 9, '2022-04-26', 2, 2, 100, 1),
(7, 12, '2022-05-04', 1, 7, 1400, 1),
(8, 24, '2022-05-08', 1, 2, 400, 1),
(9, 25, '2022-05-09', 3, 2, 60, 1);

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
(1, 'Liya', 0, '8594075060', 'liyamathew11@gmail.com', '7212Liya Mathew.jpg', 1),
(2, 'Jannet', 0, '9876543210', 'jannet@gmail.com', '7199Janet George.jpg', 1),
(3, 'Dilu', 0, '8741256390', 'dilu@gmail.com', 'FB_IMG_1477337941528.jpg', 2),
(4, 'Merin', 0, '8741256390', 'navya@gmail.com', 'FB_IMG_1492343415241.jpg', 2),
(5, 'Navya', 0, '9874563210', 'merin@gmail.com', 'Merin Miss 20161219_213005.jpg', 2),
(6, 'Lilly', 0, '8606421480', 'lilly1@gmail.com', 'IMG_20161225_091341.jpg', 2),
(7, 'Reshma', 0, '7412589630', 'reshma@gmail.com', '2017-01-28-09-36-53-532.jpg', 2),
(8, 'Merin', 0, '8963254170', 'merinm@gmail.com', '2017-01-30-22-07-07-834.jpg', 2),
(9, 'Michael', 0, '8594075060', 'mathumichael17@gmail.com', '3 (2).jpg', 1),
(12, 'Mathu', 3, '0798827450', 'mathu@gmail.com', '', 1),
(13, 'mike', 0, '0798827444', 'mike@gmail.com', '', 1),
(14, 'Nzoma', 0, '0799333444', 'nzoma@gmail.com', '6.jpg', 2),
(15, 'CustomerOne', 3, '0788999888', 'customer@gmail.com', '7.jpg', 1),
(16, 'CostomerTwo', 2, '0777777777', 'csutomertwo@gmail.com', '6.jpg', 1),
(17, 'Uwezo', 0, '0788999888', 'uwezo@gmailc.om', '15.jpg', 2),
(18, '', 3, '0788888777', 'barbershopOne@gmail.com', '14.jpg', 2),
(19, 'ShopOne', 1, '078899999555', 'shopone@gmail.com', '9.jpg', 2),
(21, 'ShoptenSunday', 3, '0788999445', 'shoptensunday@gmail.com', '7.jpg', 2),
(22, 'ShopTwoSunday', 3, '0744333777', 'shoptwosunday@gmail.com', '2.jpg', 2),
(23, 'CustomerOneSunday', 0, '0788999888', 'customeronesunday@gmail.com', '14.jpg', 1),
(24, 'customertwosunday', 0, '0766666666', 'customertwosunday@gmail.com', '4.jpg', 1),
(25, 'customeronemonday', 1, '0788999888', 'customeronemonday@gmail.com', '4.jpg', 1),
(26, 'barberonemonday', 2, '0788844666', 'barberonemonday@gmail.com', '8.jpg', 2),
(27, 'barbershoptwomonday', 2, '0788999999', 'barbershoptwomonday@gmail.com', '6.jpg', 2),
(28, 'barberone', 1, '0798827450', 'barberone@gmail.com', '2.jpg', 2),
(29, 'barber2', 4, '0798827450', 'barber2@gmail.com', '6.jpg', 2),
(30, 'barber3', 3, '0798827450', 'barber3@gmail.com', '3.jpg', 2);

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
(7, 'added one service', 1),
(8, 'ServiceOneSunday', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`About_id`);

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
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`Bill_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`Brand_id`);

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
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `tbl_item_category`
--
ALTER TABLE `tbl_item_category`
  ADD PRIMARY KEY (`Item_Cat_id`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`Leave_id`);

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
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Pay_id`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`Pur_id`);

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
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `About_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `App_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_barbershop`
--
ALTER TABLE `tbl_barbershop`
  MODIFY `Detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `Bill_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `Brand_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `ser_cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `Feed_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `Item_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_item_category`
--
ALTER TABLE `tbl_item_category`
  MODIFY `Item_Cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `Leave_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `Location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `Log_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `Pay_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `Pur_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `Reg_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_service_category`
--
ALTER TABLE `tbl_service_category`
  MODIFY `Cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
