-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 07:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `beautician` varchar(255) NOT NULL,
  `ApplyDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `RemarkDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`ID`, `AptNumber`, `PhoneNumber`, `Services`, `beautician`, `ApplyDate`, `Remark`, `Status`, `name`, `email`, `date`, `timeslot`, `RemarkDate`) VALUES
(4, NULL, 714083888, ' Hair Cut', ' Shehani Silva', '2021-06-09 06:04:55', 'shehani', '1', 'Test', 'test@gmail.com', '2021-06-10', '14:00PM-15:00PM', '2021-06-09 08:14:25'),
(5, NULL, 714083888, 'Layer Haircut', ' Dilini Randeniya', '2021-06-09 06:13:45', 'dilini', '1', 'Test', 'test@gmail.com', '2021-06-18', '14:00PM-15:00PM', '2021-06-09 08:15:05'),
(6, NULL, 73333333, NULL, '', '2021-06-09 06:41:58', 'dilini', '1', 'Hasani WIjeweera', 'Hasani@gmail.com', '0000-00-00', '', '2021-06-09 08:14:38'),
(7, NULL, 714083888, 'peeling Pedicure', ' Shehani Silva', '2021-06-09 06:44:32', 'dilini', '1', 'Test', 'test@gmail.com', '2021-06-25', '15:00PM-16:00PM', '2021-06-09 08:14:48'),
(8, NULL, 4444444444, 'peeling Pedicure', ' Dilini Randeniya', '2021-06-09 06:53:29', 'dilini', '1', 'Hasani Wijeweera', 'wijeweera@gmail.com', '2021-06-25', '06:00AM-07:00AM', '2021-06-09 06:54:00'),
(9, NULL, 714083888, ' Hair Cut', ' Dilini Randeniya', '2021-06-09 09:09:55', 'dilini', '1', 'object', 'object@gmail.com', '2021-06-30', '06:00AM-07:00AM', '2021-06-09 09:12:07'),
(10, NULL, 4444444444, 'Normal Pedicure', ' Shehani Silva', '2021-06-09 09:33:02', 'dilini', '1', 'object3', 'object3@gmail.com', '2021-06-30', '07:00AM-08:00AM', '2021-06-09 09:34:20'),
(11, NULL, 714083888, 'peeling Pedicure', ' Dilini Randeniya', '2021-06-09 09:51:18', 'dilini', '1', 'object2', 'object2@gmail.com', '2021-06-30', '08:00AM-09:00AM', '2021-06-09 09:51:44'),
(12, NULL, 714083888, ' Menicure', ' Dilini Randeniya', '2021-06-09 09:53:02', 'dilini', '1', 'object2', 'object2@gmail.com', '2021-06-30', '09:00AM-10:00AM', '2021-06-09 09:53:27'),
(13, NULL, 4444444444, 'Charcol Facial', ' Dilini Randeniya', '2021-06-09 09:58:44', 'dilini', '1', 'object', 'objects@gmail.com', '2021-06-30', '10:00AM-11:00AM', '2021-06-09 09:59:14'),
(14, NULL, 4444444444, 'Normal Pedicure', ' Dilini Randeniya', '2021-06-09 10:11:09', 'dilini', '1', 'Hasani Wijeweera', 'hasani123@gmail.com', '2021-06-30', '11:00AM-12:00PM', '2021-06-09 10:11:35'),
(15, NULL, 714083888, 'peeling Pedicure', ' Shehani Silva', '2021-06-09 10:12:39', 'dilini', '1', 'Hasani Wijeweera', 'hasani123@gmail.com', '2021-06-30', '12:00PM-13:00PM', '2021-06-09 10:13:10'),
(16, NULL, 714083888, 'Normal Pedicure', ' Dilini Randeniya', '2021-06-09 10:22:18', 'dilini', '1', 'Test', 'test@gmail.com', '2021-06-30', '13:00PM-14:00PM', '2021-06-09 10:23:48'),
(17, NULL, 714083888, 'Normal Menicure', ' Dilini Randeniya', '2021-06-09 10:46:48', 'dilini', '1', 'Test4', 'test4@gmail.com', '2021-06-30', '14:00PM-15:00PM', '2021-06-09 10:48:02'),
(18, NULL, 714083888, ' Menicure', ' Dilini Randeniya', '2021-06-09 11:10:52', 'dilini', '1', 'Hasani Wijeweera', 'hasani12345@gmail.com', '2021-06-13', '06:00AM-07:00AM', '2021-06-09 11:12:19'),
(19, NULL, 714083888, ' Menicure', ' Dilini Randeniya', '2021-06-09 11:30:09', 'dilini', '1', 'Hasani Wijeweera', 'user12345@gmail.com', '2021-06-20', '06:00AM-07:00AM', '2021-06-09 11:31:37'),
(20, NULL, 714083888, 'Normal Menicure', ' Dilini Randeniya', '2021-06-12 14:18:54', '', '', 'Hasani Wijeweera', 'user12345@gmail.com', '2021-06-16', '06:00AM-07:00AM', '2021-06-12 14:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL),
(7, 4, '2', 1, '2021-06-03 15:08:37', 'COD', NULL),
(8, 4, '15', 1, '2021-06-03 15:08:37', 'COD', NULL),
(9, 4, '16', 1, '2021-06-03 15:08:37', 'COD', NULL),
(10, 4, '17', 1, '2021-06-03 15:08:37', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `contactno`, `Details`) VALUES
(1, 'Sothys pvt', 'sothys@gmail.com', 112926423, 'sothys golden facial kit'),
(2, 'viana cosmetics', 'viana@gmail.com', 334564327, 'Viana hair treatment\r\nviana fairness kit'),
(5, 'Jovees Lanka', 'Jovees@gmail.com', 336548268, 'jovees facial range'),
(6, 'Naturals', 'Natural@gmail.com', 786652648, 'Naturals hair care'),
(7, 'janet', 'janet@gmail.com', 773336553, 'Janet night cream range'),
(10, 'Lekha', 'hasani@gmail.com', 2222222222, 'tessd');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `User_role` varchar(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `User_role`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, '', 'Admin', 'admin', 714083888, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`ID`, `Name`, `email`, `contactno`) VALUES
(1, 'Dilini Randeniya', 'dilini@gmail.com', 715365373),
(2, 'Shehani Silva', 'shehani@gmail.com', 714567545);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(1, 4, 6, 548462525, '2021-06-09 06:33:56'),
(3, 4, 8, 902604922, '2021-06-09 06:37:19'),
(4, 4, 10, 902604922, '2021-06-09 06:37:20'),
(5, 6, 6, 923621903, '2021-06-09 06:42:19'),
(6, 0, 4, 121315127, '2021-06-09 06:43:03'),
(7, 5, 5, 330544182, '2021-05-09 06:43:24'),
(8, 5, 9, 330544182, '2021-05-09 06:43:24'),
(9, 7, 7, 201147664, '2021-06-09 06:44:46'),
(10, 7, 10, 201147664, '2020-06-09 06:44:47'),
(11, 7, 1, 857120010, '2020-06-09 06:47:11'),
(12, 4, 5, 830754355, '2020-06-09 06:50:04'),
(13, 0, 7, 470209979, '2021-06-09 06:51:31'),
(14, 8, 4, 315715154, '2021-06-09 06:54:21'),
(15, 8, 8, 315715154, '2021-06-09 06:54:21'),
(16, 9, 2, 830606291, '2021-06-09 09:12:58'),
(17, 9, 8, 830606291, '2021-06-09 09:12:58'),
(18, 0, 6, 729832872, '2021-06-09 09:14:28'),
(19, 0, 8, 729832872, '2021-06-09 09:14:28'),
(20, 10, 6, 559910832, '2021-06-09 09:35:31'),
(21, 10, 10, 559910832, '2021-06-09 09:35:31'),
(22, 10, 5, 886198428, '2021-06-09 09:35:57'),
(23, 10, 6, 886198428, '2021-06-09 09:35:57'),
(24, 0, 8, 775731615, '2021-06-09 09:36:12'),
(25, 10, 6, 546121109, '2021-06-09 09:36:52'),
(26, 11, 4, 983727448, '2021-06-09 09:52:14'),
(27, 11, 8, 983727448, '2021-06-09 09:52:14'),
(28, 12, 5, 205178151, '2021-06-09 09:53:46'),
(29, 12, 11, 205178151, '2021-06-09 09:53:46'),
(30, 13, 5, 234419927, '2021-06-09 09:59:34'),
(31, 13, 9, 234419927, '2021-06-09 09:59:34'),
(32, 0, 8, 723482742, '2021-06-09 10:00:37'),
(33, 0, 9, 723482742, '2021-06-09 10:00:37'),
(34, 9, 6, 395592747, '2021-06-09 10:02:43'),
(35, 9, 11, 395592747, '2021-06-09 10:02:43'),
(36, 6, 8, 260233047, '2021-06-09 10:03:43'),
(37, 6, 10, 260233047, '2021-06-09 10:03:43'),
(38, 6, 11, 260233047, '2021-06-09 10:03:43'),
(39, 13, 5, 966745535, '2021-06-09 10:06:37'),
(40, 13, 10, 966745535, '2021-06-09 10:06:37'),
(41, 14, 8, 260151061, '2021-06-09 10:11:51'),
(42, 14, 10, 260151061, '2021-06-09 10:11:51'),
(43, 15, 7, 780811883, '2021-06-09 10:12:56'),
(44, 15, 10, 780811883, '2021-06-09 10:12:56'),
(45, 4, 8, 723660766, '2021-06-09 10:13:21'),
(46, 15, 7, 240232650, '2021-06-09 10:14:19'),
(47, 15, 10, 240232650, '2021-06-09 10:14:20'),
(48, 0, 9, 667955048, '2021-06-09 10:16:53'),
(49, 0, 11, 667955048, '2021-06-09 10:16:53'),
(50, 16, 4, 280672636, '2021-06-09 10:24:42'),
(51, 16, 9, 280672636, '2021-06-09 10:24:42'),
(52, 0, 5, 671145615, '2021-06-09 10:26:15'),
(53, 0, 8, 671145615, '2021-06-09 10:26:15'),
(54, 16, 6, 154415703, '2021-06-09 10:31:27'),
(55, 16, 10, 154415703, '2021-06-09 10:31:27'),
(56, 16, 5, 320261188, '2021-06-09 10:31:49'),
(57, 16, 8, 320261188, '2021-06-09 10:31:49'),
(58, 17, 4, 786637159, '2021-06-09 10:49:09'),
(59, 17, 5, 786637159, '2021-06-09 10:49:10'),
(60, 17, 7, 786637159, '2021-06-09 10:49:10'),
(61, 17, 10, 786637159, '2021-06-09 10:49:10'),
(62, 18, 5, 801359146, '2021-06-09 11:13:28'),
(63, 18, 9, 801359146, '2021-06-09 11:13:28'),
(64, 18, 10, 801359146, '2021-06-09 11:13:28'),
(65, 19, 5, 988057236, '2021-06-09 11:32:27'),
(66, 19, 6, 988057236, '2021-06-09 11:32:27'),
(67, 19, 10, 988057236, '2021-06-09 11:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '        Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials &amp; fashion hair colourings.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', 'ttt64,Ihalakaragahamuna,Kadawatha', 'AURA@gmail.com', 7896541236, NULL, '08:30 am to 6:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `image`, `Cost`, `CreationDate`) VALUES
(1, 'none', '', 0, '2019-07-25 11:22:38'),
(2, 'Fruit Facial', '', 500, '2019-07-25 11:22:53'),
(3, 'Charcol Facial', '', 1000, '2019-07-25 11:23:10'),
(4, ' Menicure', '', 500, '2019-07-25 11:23:34'),
(5, 'peeling Pedicure', '', 600, '2019-07-25 11:23:47'),
(6, 'Normal Menicure', '', 300, '2019-07-25 11:24:01'),
(7, 'Normal Pedicure', '', 400, '2019-07-25 11:24:19'),
(8, ' Hair Cut', '', 250, '2019-07-25 11:24:38'),
(9, 'Layer Haircut', '', 550, '2019-07-25 11:24:53'),
(10, 'Rebonding', '', 3999, '2019-07-25 11:25:08'),
(11, ' Hair Coloring', '', 1250, '2019-07-25 11:25:35'),
(20, 'Full body Hair Removing Treatment', '', 12444, '2021-06-09 11:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblsuppliers`
--

CREATE TABLE `tblsuppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `contactno` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsuppliers`
--

INSERT INTO `tblsuppliers` (`id`, `name`, `product`, `contactno`, `email`) VALUES
(1, 'Sothys company', 'sothys products', 787878787, 'sothys@gmail.com'),
(2, 'Jovees ', 'jovees gold facial kit', 123456789, 'Jovees@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` int(100) NOT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Details` varchar(255) NOT NULL,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `contactno`, `password`, `regDate`, `Details`, `updationDate`) VALUES
(1, 'Hasani Wijeweera', 'hasani123@gmail.com', 24, 714083888, '4ab4e72cf6ff12f804df153cd2563372', '2021-06-09 10:10:44', 'good', NULL),
(2, 'heshan', 'heshan@gmail.com', 22, 5555555555, '234', '2021-06-09 10:16:24', 'good', NULL),
(3, 'Test', 'Test@gmail.com', 12, 5555555555, '15de21c670ae7c3f6f3f1f37029303c9', '2021-06-09 10:21:13', 'good', NULL),
(6, 'Lekha', 'hasani@gmail.com', 24, 2222222222, 'sample', '2021-06-09 10:27:30', 'good', NULL),
(7, 'object555', 'object555@gmail.com', 23, 828767555, '202cb962ac59075b964b07152d234b70', '2021-06-09 10:36:52', 'good', NULL),
(9, 'user123', 'user1234@gmail.com', 11, 2223222222, '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-09 10:38:20', 'good', NULL),
(11, 'Hasani Wijeweera', 'hasani99@gmail.com', 11, 2223222222, '81b073de9370ea873f548e31b8adc081', '2021-06-09 10:39:53', 'good', NULL),
(12, 'Test', 'Test999@ail.com', 21, 828767633, '202cb962ac59075b964b07152d234b70', '2021-06-09 10:44:54', 'good', NULL),
(13, 'Test4', 'Test4@gmail.com', 22, 777777777, '310dcbbf4cce62f762a2aaa148d556bd', '2021-06-09 10:45:56', 'good', NULL),
(15, 'testrr', 'hasrani@gmail.com', 33, 2222222222, 'sample', '2021-06-09 10:51:34', 'dddd', NULL),
(16, 'Hasani Wijeweera', 'hasani12345@gmail.com', 33, 714083888, 'fae0b27c451c728867a567e8c1bb4e53', '2021-06-09 11:09:11', 'good', NULL),
(18, 'Lekha', 'object2@gmail.com', 22, 1111111111, 'sample', '2021-06-09 11:15:47', 'hh', NULL),
(19, 'Hasani Wijeweera', 'user12345@gmail.com', 24, 6666666666, '25f9e794323b453885f5181f1b624d0b', '2021-06-09 11:28:03', 'good', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsuppliers`
--
ALTER TABLE `tblsuppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
