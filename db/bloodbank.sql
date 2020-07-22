-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 03:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogs`
--

CREATE TABLE `adminlogs` (
  `logid` int(255) NOT NULL,
  `adminid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `logindatetime` datetime DEFAULT NULL,
  `logoutdatetime` datetime DEFAULT NULL,
  `ipaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbankregistration`
--

CREATE TABLE `bloodbankregistration` (
  `bbid` int(255) NOT NULL,
  `bloodbankname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `staffcontact` bigint(255) NOT NULL,
  `headcontact` bigint(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `currdate` date NOT NULL,
  `currtime` time NOT NULL,
  `ipaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbankregistration`
--

INSERT INTO `bloodbankregistration` (`bbid`, `bloodbankname`, `username`, `emailid`, `address`, `pincode`, `staffcontact`, `headcontact`, `password`, `currdate`, `currtime`, `ipaddress`) VALUES
(1, 'Rudra Blood Bank', 'rudra', 'rudra@gmail.com', 'Panvel', 410206, 8867516278, 9969727251, '123123', '2019-11-18', '09:36:36', '::1'),
(2, 'Kamothe Blood Bank', 'km132', 'kamothe@gmail.com', 'Bandra', 400901, 9972725198, 7787615267, 'kamothe', '2019-11-18', '09:37:43', '::1'),
(3, 'Vinam Blood Bank', 'vinam1', 'vinam@gmail.com', 'Virar', 600205, 9969515141, 7789656512, '123123', '2019-11-18', '09:39:03', '::1'),
(5, 'Kamothe Blood Bank', 'Manish', 'manish@gmail.com', 'Panvel', 201601, 8867516278, 9969727251, '123123', '2019-11-21', '18:38:37', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `donorregistration`
--

CREATE TABLE `donorregistration` (
  `did` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contactno` bigint(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `currdate` date NOT NULL,
  `currtime` time NOT NULL,
  `ipaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorregistration`
--

INSERT INTO `donorregistration` (`did`, `firstname`, `middlename`, `lastname`, `bloodgroup`, `gender`, `dob`, `contactno`, `pincode`, `emailid`, `currdate`, `currtime`, `ipaddress`) VALUES
(1, 'Pranay', 'Anilkumar', 'Zagde', 'A+', 'Male', '2019-11-10', 8899765645, 410206, 'pranay@gmail.com', '2019-11-18', '09:40:40', '::1'),
(2, 'Sankalp', 'Sunil', 'Rajan', 'B+', 'Male', '2019-11-13', 9978655633, 201601, 'sankalp@gmail.com', '2019-11-18', '09:41:59', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `rid` int(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `currdate` date NOT NULL,
  `currtime` time NOT NULL,
  `ipaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`rid`, `bloodgroup`, `name`, `contact`, `pincode`, `currdate`, `currtime`, `ipaddress`) VALUES
(1, 'A+', 'Pranay', 9988789722, 410206, '2019-11-18', '09:33:29', '::1'),
(2, 'B+', 'Harsh', 9969717141, 100206, '2019-11-18', '09:33:52', '::1'),
(3, 'AB+', 'Swapnil ', 9960715141, 201601, '2019-11-18', '09:34:36', '::1'),
(4, 'O+', 'Samruddhi', 8652717151, 600100, '2019-11-18', '09:35:09', '::1'),
(5, 'O-', 'Akanksha', 7767218967, 400106, '2019-11-18', '09:35:42', '::1'),
(6, 'AB+', 'Sanket', 8809727251, 401404, '2019-11-18', '09:49:58', '::1'),
(7, 'B-', 'Mithali', 9909878721, 400102, '2019-11-18', '09:50:23', '::1'),
(8, 'AB+', 'Sahil', 8898717151, 410206, '2019-11-18', '09:50:47', '::1'),
(12, 'B+', 'Swapnil test', 8877898922, 400106, '2019-11-22', '12:01:52', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mobileno` bigint(255) NOT NULL,
  `anothermobileno` bigint(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `currdatetime` datetime NOT NULL,
  `ipaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `pass`, `mobileno`, `anothermobileno`, `address`, `emailid`, `currdatetime`, `ipaddress`) VALUES
(1, 'Pranay', '4297f44b13955235245b2497399d7a93', 9977878266, 1188927266, 'Thane', 'pranay@gmail.com', '2019-11-21 18:39:36', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `bloodbankregistration`
--
ALTER TABLE `bloodbankregistration`
  ADD PRIMARY KEY (`bbid`);

--
-- Indexes for table `donorregistration`
--
ALTER TABLE `donorregistration`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogs`
--
ALTER TABLE `adminlogs`
  MODIFY `logid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodbankregistration`
--
ALTER TABLE `bloodbankregistration`
  MODIFY `bbid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donorregistration`
--
ALTER TABLE `donorregistration`
  MODIFY `did` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
