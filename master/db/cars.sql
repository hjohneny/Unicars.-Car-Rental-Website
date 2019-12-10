-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 07:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'unicar', 'unicar');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` enum('hatchback','sedan','pickup','SUV','MPV','others') DEFAULT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(2, 'Toyota Hilux', 'pickup', 'car2.jpg', 80, 6, 'Available'),
(3, 'Toyota Vios', 'sedan', 'car3.jpg', 25, 6, 'Available'),
(6, 'Perodua Myvi', 'hatchback', 'myvi.webp', 7, 8, 'Available'),
(8, 'Perodua Viva', 'hatchback', 'KKKKirik.jpg', 100, 4, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `OTP` int(4) NOT NULL,
  `fullname` text NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `Acc_Balance` int(11) NOT NULL,
  `dtime` varchar(255) NOT NULL,
  `hours` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `uname`, `email`, `pass`, `phone`, `location`, `gender`, `car_id`, `status`, `OTP`, `fullname`, `transaction_id`, `Acc_Balance`, `dtime`, `hours`) VALUES
(10, 'John', 'hjohneny99@gmail.com', '!Qaz2wsx', 1939393, 'UNIGARDEN', 'Male', 0, 'Approved', 0, 'John Pie', '12566748', 15, '0000-00-00 00:00:00', 2023),
(12, 'awda', 'adsfa@rqwr.com', '1q2w3e4r', 123124, 'UNIMAS', 'Male', 0, 'No Request', 0, 'asdas', '', 0, '0000-00-00 00:00:00', 0),
(13, '', 'hjohneny99@gmail.com', '', 123456789, 'UNIGARDEN', 'Female', 0, 'No Request', 0, 'Kirik', '', 0, '0000-00-00 00:00:00', 0),
(14, 'Johnny', 'john@yahoo.com', '1q2w3e4r', 138363110, 'UNIGARDEN', 'Female', 3, 'Approved', 0, 'John', '0.80498400 1575950792', 0, '0000-00-00 00:00:00', 3),
(28, 'slayerbeam', 'hjohneny99@gmail.com', '!Qaz2wsx', 138363110, 'UNIGARDEN', 'Female', 3, 'Approved', 0, 'Hendrix', '', 25, '0000-00-00 00:00:00', 0),
(29, 'AbangSado', 'sado@gmai.co', '!Qaz2wsx', 1003874992, 'UNIGARDEN', 'Female', 0, 'Processing Payment... Wait for Admin Approval', 11234, 'Abang', '0.29989100 1575952196', 0, '2012-12-12 12:00:00', 2012),
(30, 'bossbaby', 'hasjdh@aiugs.com', '!Qaz2wsx', 1293077511, 'TABUAN', 'Male', 2, 'Approved', 11312, 'baby', '0.04957500 1575952902', 80, '', 0),
(31, 'kerekerhead', 'hjohneny99@gmail.com', '!Qaz2wsx', 2147483647, 'UNIGARDEN', 'Female', 8, 'Approved', 12312, 'kerek', '0.40918200 1575955141', 100, '', 5),
(32, 'kerekerhead', 'hjohneny99@gmail.com', '!Qaz2wsx', 2147483647, 'UNIGARDEN', 'Female', 8, 'Approved', 12312, 'kerek', '0.40918200 1575955141', 100, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dtime` datetime NOT NULL,
  `rtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hire_id`, `admin_id`, `client_id`, `car_id`, `status`, `dtime`, `rtime`) VALUES
(1, 1, 10, 6, 'Approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 14, 8, 'Approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 10, 8, 'Booked', '2019-12-11 07:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `client_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `message`, `status`, `time`, `client_email`) VALUES
(12, 'Good Service!', 'Read', '2019-12-06 05:25:30', ''),
(13, 'Thanks!', 'Unread', '2019-12-10 03:45:56', ''),
(15, 'Good Car\r\n', 'Unread', '2019-12-10 12:03:42', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`) USING BTREE;

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hire`
--
ALTER TABLE `hire`
  ADD CONSTRAINT `hire_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `hire_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `hire_ibfk_3` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `hire_ibfk_4` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
