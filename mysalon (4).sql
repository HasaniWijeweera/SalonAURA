-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 11:39 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'serbermz', '$2y$10$U4/qPW2j25anqXV55md94uA07ZZ/lECSQPvaDYalJIX9Oxj7H4INy', 'Lyndon', 'Bermoy', 'profile youtube.jpg', '2018-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(87, 1, '2020-05-08', '01:40:51', 1, '00:00:00', 0),
(88, 1, '2021-07-14', '15:30:00', 0, '03:30:00', 11),
(89, 0, '2021-07-21', '09:10:00', 0, '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ID` int(10) NOT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ServicesID` int(250) NOT NULL,
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

INSERT INTO `bookings` (`ID`, `PhoneNumber`, `Services`, `ServicesID`, `beautician`, `ApplyDate`, `Remark`, `Status`, `name`, `email`, `date`, `timeslot`, `RemarkDate`) VALUES
(46, 714083888, 'peeling Pedicure', 0, ' Dilini Randeniya', '2021-06-24 00:48:46', 'remarked', '1', 'Hasani Wijeweera', 'user12345@gmail.com', '2021-07-24', '06:00AM-07:00AM', '2021-07-16 11:48:44'),
(49, 714083888, 'Charcol Facial', 0, ' Dilini Randeniya', '2021-06-24 00:50:40', 'remarked', '1', 'Hasani Wijeweera', 'user12345@gmail.com', '2021-06-24', '14:00PM-15:00PM', '2021-06-29 10:24:39'),
(77, 0, 'peeling Pedicure', 0, ' Mihili Ranawarana', '2021-06-30 09:26:37', '', '1', 'Hasani Dilhara', 'user12345@gmail.com', '2021-06-30', '14:00PM-15:00PM', '2021-07-13 14:43:16'),
(78, 0, 'peeling Pedicure', 0, ' Mihili Ranawarana', '2021-06-30 09:26:37', 'remarked', '1', 'Hasani Dilhara', 'user12345@gmail.com', '2021-06-30', '15:00PM-16:00PM', '2021-07-13 08:59:15'),
(79, 0, 'peeling Pedicure', 0, ' Mihili Ranawarana', '2021-06-30 09:26:37', 'jj', '2', 'Hasani Dilhara', 'user12345@gmail.com', '2021-06-30', '16:00PM-17:00PM', '2021-07-13 14:42:14'),
(80, 714083888, 'peeling Pedicure', 0, ' Mihili Ranawarana', '2021-07-09 00:29:22', 'hh', '2', 'Hasani Dilhara1', 'user12345@gmail.com', '2021-07-16', '07:00AM-08:00AM', '2021-07-14 05:16:59'),
(85, 714083888, 'Charcol Facial', 0, ' Dilini Randeniya', '2021-07-12 12:26:20', '', '', 'Hasani Dilhara1', 'user12345@gmail.com', '2021-07-14', '12:00PM-13:00PM', '2021-07-12 12:26:20'),
(86, 714083888, 'Charcol Facial', 0, ' Dilini Randeniya', '2021-07-12 12:26:20', 'sas', '1', 'Hasani Dilhara1', 'user12345@gmail.com', '2021-07-14', '13:00PM-14:00PM', '2021-07-13 14:38:55'),
(88, 8888888888, 'Hair Cut', 6, 'Dilini Randeniya', '2021-07-21 06:00:50', '', '', 'buddhima', '\r\nbuddhima@gmail.com', '0000-00-00', '', '2021-07-21 06:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `employee_id`, `amount`) VALUES
(2, '2018-05-02', '1', 1000),
(3, '2018-05-02', '1', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(1, 'SSS', 100),
(2, 'Pagibig', 150),
(3, 'PhilHealth', 150);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `created_on`) VALUES
(1, 'ABC123456789', 'Dilini', 'Randeniya', 'Mahara Kadawatha', '2018-04-02', '09079373999', 'Female', 1, 2, '2018-04-28'),
(3, 'DYE473869250', 'Jonah', 'Juarez', 'Surigao City', '1992-05-02', '09123456789', 'Female', 2, 2, '2018-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `quality_score` varchar(10) NOT NULL,
  `beauty_score` varchar(10) NOT NULL,
  `treat_score` varchar(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `quality_score`, `beauty_score`, `treat_score`, `feedback`) VALUES
(46, '0', '0', '0', 'qqqqqqqqqq'),
(49, '2', '2', '2', 'THank you'),
(72, '1', '2', '0', 'abcd'),
(74, '2', '2', '2', 'ada'),
(77, '1', '2', '2', 'gg'),
(78, '2', '1', '0', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(1, 'Programmer', 100),
(2, 'Writer', 50);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(250) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `ProductPrice` varchar(250) NOT NULL,
  `OrderQuantity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `supplier_name`, `ProductName`, `ProductPrice`, `OrderQuantity`) VALUES
(1, 'Sothys', 'Product', '250', '4'),
(3, 'Jovees Lanka', 'Naturals hair care', '1000', '5'),
(4, 'Naturals', 'sothys peeling kit', '5000', '7');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

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
(5, 'Jovees Lanka', 'Jovees@gmail.com', 112970424, 'abc'),
(6, 'Naturals', 'Natural@gmail.com', 786652648, 'Naturals hair care'),
(13, 'Sothys pvt lmd', 'sothysz@gmail.com', 346586725, 'sothys peeling kit');

-- --------------------------------------------------------

--
-- Table structure for table `taskduration`
--

CREATE TABLE `taskduration` (
  `ID` int(120) NOT NULL,
  `taskname` varchar(100) NOT NULL,
  `Cost` varchar(120) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taskduration`
--

INSERT INTO `taskduration` (`ID`, `taskname`, `Cost`, `duration`) VALUES
(1, 'Fruit Facial', '2505', 1),
(2, 'Charcol Facial', '3000', 2),
(3, 'peeling Pedicure', '5500', 3),
(4, 'Normal Pedicure', '5000', 2),
(5, 'Normal Menicure', '2500', 2),
(6, 'Hair Cut', '1000', 1),
(7, 'Hair Coloring', '7000', 2),
(8, 'Full body Hair Removing Treatment', '10000', 3),
(9, 'Menicure', '4000', 1),
(10, 'Layer Haircut', '1500', 2),
(11, 'Rebonding', '8500', 3);

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
  `email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `User_role`, `AdminName`, `UserName`, `MobileNumber`, `email`, `Password`, `AdminRegdate`) VALUES
(1, '', 'Admin', 'admin', 714083888, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-25 00:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `ID` int(255) NOT NULL,
  `employee_id` varchar(210) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` int(10) NOT NULL,
  `salary` int(120) NOT NULL,
  `role` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `discount_amount` varchar(250) NOT NULL,
  `tot_amount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`ID`, `employee_id`, `Name`, `email`, `contactno`, `salary`, `role`, `password`, `discount_amount`, `tot_amount`) VALUES
(1, 'dilini123', 'Dilini Randeniya', 'dilini@gmail.com', 113454675, 50000, 'Owner', '827ccb0eea8a706c4c34a16891f84e7b', '444', '06'),
(2, 'shehani123', 'Shehani Silva', 'shehani@gmail.com', 714567545, 50000, 'Receptionist', '', '678', '0266'),
(3, 'mihili123', 'Mihili Ranawarana', 'mihili@gmail.com', 714653722, 50000, 'Beautician', '', '673', '2'),
(8, 'thushari123', 'Thushari Dodanwala', 'thushari@gmail.com', 786539275, 50000, 'Beautician', '', '67', '022'),
(12, 'dinusha123', 'dinusha Sandamali', 'dinusha@gmail.com', 112970424, 50007, 'hh', '4eae35f1b35977a00ebd8086c259d4c9', '66', '233');

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
(73, 16, 5, 105148950, '2021-06-24 02:55:48'),
(74, 13, 9, 105148950, '2021-06-24 02:55:48'),
(75, 34, 5, 878845002, '2021-06-24 04:58:44'),
(76, 15, 8, 878845002, '2021-06-24 04:58:44'),
(77, 18, 4, 367486108, '2021-06-24 07:41:26'),
(78, 18, 10, 481055566, '2021-07-13 00:05:54'),
(79, 9, 3, 703867824, '2021-07-13 02:41:35'),
(80, 24, 4, 703867824, '2021-07-13 02:41:36'),
(81, 33, 7, 930826503, '2021-07-13 03:01:05'),
(82, 22, 9, 930826503, '2021-07-13 03:01:05'),
(83, 15, 5, 627689705, '2021-07-14 05:11:44'),
(84, 33, 4, 741261213, '2021-07-20 07:04:32'),
(85, 27, 5, 741261213, '2021-07-20 07:04:32'),
(86, 22, 6, 741261213, '2021-07-20 07:04:32'),
(87, 13, 6, 593687313, '2021-07-21 03:59:32'),
(88, 19, 7, 593687313, '2021-07-21 03:59:32'),
(89, 0, 1, 687260075, '2021-07-21 04:02:36'),
(90, 16, 1, 176585178, '2021-07-21 04:03:37'),
(91, 15, 2, 602146815, '2021-07-21 04:17:09'),
(92, 15, 3, 602146815, '2021-07-21 04:17:09'),
(93, 15, 4, 602146815, '2021-07-21 04:17:09'),
(94, 9, 2, 958627914, '2021-07-21 04:34:24'),
(95, 21, 11, 477475213, '2021-07-21 04:40:02'),
(96, 85, 7, 318827134, '2021-07-21 05:41:37'),
(97, 85, 4, 908067019, '2021-07-21 05:47:58'),
(98, 85, 7, 908067019, '2021-07-21 05:47:58'),
(99, 15, 3, 705779809, '2021-07-21 05:48:19'),
(100, 15, 4, 705779809, '2021-07-21 05:48:19'),
(101, 18, 8, 167191751, '2021-07-21 05:50:08'),
(102, 24, 6, 664824891, '2021-07-21 05:51:12'),
(103, 24, 7, 664824891, '2021-07-21 05:51:12'),
(104, 24, 8, 664824891, '2021-07-21 05:51:12'),
(105, 85, 5, 135272035, '2021-07-21 05:54:45'),
(106, 85, 8, 865523258, '2021-07-21 05:56:36'),
(107, 85, 9, 865523258, '2021-07-21 05:56:36');

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
(9, 'user123', 'user1234@gmail.com', 11, 2223222222, '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-09 05:08:20', 'good', NULL),
(13, 'Test4', 'Test4@gmail.com', 22, 777777777, '310dcbbf4cce62f762a2aaa148d556bd', '2021-06-09 05:15:56', 'good', NULL),
(15, 'testrr', 'hasrani@gmail.com', 33, 2222222222, 'sample', '2021-06-09 05:21:34', 'dddd', NULL),
(16, 'Hasani Wijeweera', 'hasani12345@gmail.com', 33, 714083888, 'fae0b27c451c728867a567e8c1bb4e53', '2021-06-09 05:39:11', 'good', NULL),
(18, 'Lekha', 'object2@gmail.com', 22, 1111111111, 'sample', '2021-06-09 05:45:47', 'hh', NULL),
(19, 'Hasani Dilhara', 'user12345@gmail.com', 24, 6666666666, '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-09 05:58:03', 'good', NULL),
(21, 'buddhima', 'buddhima@gmail.com', 45, 3333333333, 'b706835de79a2b4e80506f582af3676a', '2021-06-23 23:13:32', 'good', NULL),
(22, 'Lekha', 'llll@gmail.com', 33, 2222222222, 'sample', '2021-06-24 04:54:22', 'dfeeed', NULL),
(24, 'Sujani', 'Sujani@gmail.com', 33, 7153653738, '4444', '2021-06-26 12:48:06', 'good', NULL),
(27, 'Sujani Perera', 'sujani1@gmail.com', 33, 777777777, 'dbc4d84bfcfe2284ba11beffb853a8c4', '2021-06-26 12:51:02', 'good', NULL),
(34, 'gihani perera', 'gihani@gmail.com', 34, 4456666666, '5e8ff9bf55ba3508199d22e984129be6', '2021-07-16 10:43:04', 'good', NULL),
(85, 'Beautician', 'beauty@gmail.com', 43, 714948733, '202cb962ac59075b964b07152d234b70', '2021-07-13 03:25:13', 'good', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskduration`
--
ALTER TABLE `taskduration`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `taskduration`
--
ALTER TABLE `taskduration`
  MODIFY `ID` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
