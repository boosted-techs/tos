-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 09:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tos`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_vehicle` varchar(100) NOT NULL,
  `vehicle_reg_no` varchar(1000) NOT NULL,
  `licence` varchar(1000) NOT NULL,
  `driver_name` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `driver_class` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_vehicle`, `vehicle_reg_no`, `licence`, `driver_name`, `gender`, `driver_class`) VALUES
(1, 'MTN', 'MTN:Vehicle UBG 044E', '', '', '', '', ''),
(2, 'MAKERERE', 'MAKERERE: Vehicle UAS 342T', '', '', '', '', ''),
(3, 'King Fisher', 'WAGON BOX ', 'UBM 035X', 'UXG29900049LMS', 'Kabaata', 'Male', 'CLASS B');

-- --------------------------------------------------------

--
-- Table structure for table `offence`
--

CREATE TABLE `offence` (
  `id` int(11) NOT NULL,
  `offence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reported_offence`
--

CREATE TABLE `reported_offence` (
  `id` int(11) NOT NULL,
  `offence_id` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `offence` varchar(1000) NOT NULL,
  `company_vehicle` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reported_offence`
--

INSERT INTO `reported_offence` (`id`, `offence_id`, `address`, `offence`, `company_vehicle`, `photo`, `date`) VALUES
(2, 'c981f3', 'Masaka', 'Drinking & Driving', '', '', '2022-06-18'),
(3, '1de9c8', 'Masaka Nyendo', 'Dangerous Driving', '', '', '2022-06-29'),
(4, '397ae1', 'MASAKA KADUGALA', 'Making calls while driving', '', '', '2022-06-29'),
(5, '32cdf4', 'Kampala', 'Constantly caught for No seatbelt', '', '', '2022-09-02'),
(6, '', 'Katagata Mayanga', '7trt', '1', 'offence.PNG', '2022-09-13'),
(7, '', 'Katagata Mayanga Kabira', 'the car is black in color, please go for it', 'MAKERERE: Vehicle UAS 342T', 'login.png', '2022-09-13'),
(8, '', 'Kampala', 'rtrggrgregt', 'MTN:Vehicle UBG 044E', 'login.png', '2022-09-13'),
(9, '', 'Katagata Mayanga', 'tt', 'MAKERERE: Vehicle UAS 342T', 'offence.PNG', '2022-09-13'),
(10, '', 'Katagata Mayanga', 'tt', 'MAKERERE: Vehicle UAS 342T', 'offence.PNG', '2022-09-13'),
(11, '', 'Masaka Mitala Maria', 'He bumped into us', 'MAKERERE: Vehicle UAS 342T', 'Concrete-mixer.jpg', '2022-09-14'),
(12, '', 'Mvule crescent jinja', 'Bank of Baroda Uganda is currently at a market price of UGX 85.0000. With their dividend payment scheduled for 25th November 2022 worth UGX 10.0000 per share. This attracts a dividend yield of 11.76% before taxes. Investors have the ability to grow their wealth by 11.76% within the near term. \r\n\r\nUMEME \r\nUganda is currently at a market price of UGX 200.0000. This is still a firm buying support level for long-term investors. Having government consider the buy-out clause that is priced at 3.3X the current market price (UGX 200), provides you with leverage and a massive capital gain. The counter has turned a sellerâ€™s stock as it\'s always more bid with no-size offers. Institutional volumes seen rarely made it the top value mover in the market for the month under review. \r\n\r\nKENYA\r\nNo alt text provided for this image\r\nStocks to watch:\r\nEABL â€“ TPKES 232.0 - BUY\r\nHigher beer volumes to drive earnings.\r\nWell positioned to take advantage of demand growth opportunities via a well-diversified', 'MTN:Vehicle UBG 044E', 'GALLERY-Toyota-Land-Cruiser-79-Series.jpg', '2022-09-14'),
(13, '', 'Mityana road', 'He killed one and ran', 'WAGON BOX ', 'IMG_20220820_155244.jpg', '2022-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(300) NOT NULL,
  `site_desc` varchar(2000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_desc`, `email`, `phone`, `address`, `city`, `country`) VALUES
(1, 'Bad Driving  Alert Sys', 'Welcome to Bad Driving Alert Dashboard', 'admin@baddrivngalert.com', '+256707277630', 'Masaka', 'Kampala', 'Uganda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `position` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `username`, `pass`, `email`, `address`, `position`) VALUES
(1, 'bcefa114ee', 'Adeyemi   Femipo', 'Torrahclef', 'yemiyemi', 'awolu_faith@live.com', 'Alagbaka, Akure, Ondo Nigeria', 'admin'),
(4, '0fd73c73c1', 'Full Name', 'Olapade', 'uhsfr', 'ayomi@we.com', 'Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09', 'admin'),
(5, '5dea1fd9c3', 'GROUP 9', 'tobi', 'tobi', 'ayomi@we.com', 'kampala', 'officer'),
(6, '512047cf54', 'Winnie', 'admin', 'admin', 'nwinnie833@gmail.com', 'kampala', 'admin'),
(9, '118e919206', 'Ahabwe Bob', 'Bob', '1234', 'nuwahabob@gmail.com', 'Kampala', 'passenger'),
(11, '85e00b1b33', 'guide guide', 'guide', '123', 'narath@gmail.com', 'Kampala', 'passenger'),
(12, '6a2c102faa', 'Winnie Namazzi', 'finance', '123', 'nuwahabeob@gmail.com', 'Kampala', 'passenger'),
(15, '472574ba89', 'Winnie Nama', 'try', '123', 'narath12@gmail.com', 'Jinja', 'Company CarOwner'),
(16, 'b3726c33a7', 'LASK AFRICAo', 'try1', '123', 'ruinf@gmail.com', 'Mvule crescent jinja', 'passenger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `reported_offence`
--
ALTER TABLE `reported_offence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reported_offence`
--
ALTER TABLE `reported_offence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD CONSTRAINT `site_settings_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
