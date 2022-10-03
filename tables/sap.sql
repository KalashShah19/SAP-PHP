-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2022 at 08:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sap`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `personalized` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `travelcharges` float DEFAULT NULL,
  `instructions` varchar(200) DEFAULT NULL,
  `bstatus` varchar(20) DEFAULT NULL,
  `totalamount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `event`, `personalized`, `uid`, `start`, `end`, `baddress`, `travelcharges`, `instructions`, `bstatus`, `totalamount`) VALUES
(1, 'birthday', '', 6, '2022-09-30', '2023-11-15', ' daman', 0, '', 'approved', 8000),
(2, 'meeting', '', 6, '2022-09-30', '2023-11-15', ' daman', 0, '', 'approved', 13000),
(3, 'birthday', '', 6, '2022-09-27', '2022-09-27', ' navsari', 0, '', 'approved', 0),
(4, 'birthday', '', 6, '2022-09-27', '2022-09-27', ' navsari', 0, '', 'approved', 0),
(5, 'sports', '', 6, '2022-09-30', '2022-09-30', ' Surat', 0, '', 'pending', 0),
(6, 'sports', '', 6, '2022-09-30', '2022-09-30', ' Surat', 0, '', 'approved', 0),
(7, 'sports', '', 6, '2022-09-30', '2022-09-30', ' Surat', 0, '', 'pending', 0),
(8, 'prewedding', '', 6, '2022-09-20', '2022-09-22', ' Goa', 0, '', 'pending', 0),
(9, 'prewedding', '', 6, '2022-09-20', '2022-09-22', ' Goa', 0, '', 'pending', 0),
(10, 'portfolio shoot', '', 6, '2022-09-19', '2022-09-19', ' Bardoli', 0, '', 'pending', 0),
(11, 'party', '', 6, '2022-09-20', '2022-09-20', ' uka tarsadiya ', 0, '', 'pending', 0),
(12, 'competetion', '', 6, '2022-09-06', '2022-09-14', ' nvs', 0, '', 'pending', 0),
(13, 'personalized', 'parna', 6, '2022-09-27', '2022-09-28', ' nvs', 0, '', 'pending', 0),
(14, 'personalized', 'parna', 6, '2022-09-27', '2022-09-28', ' nvs', 0, '', 'pending', 0),
(15, 'personalized', 'parna', 6, '2022-09-27', '2022-09-28', ' nvs', 0, '', 'pending', 31000),
(16, 'wedding', '', 6, '2022-09-14', '2022-09-01', ' nvs', 0, '', 'pending', 88500),
(17, 'anniversary', '', 6, '2022-09-17', '2022-09-17', ' bardoli', 0, '', 'pending', 31000),
(18, 'anniversary', '', 6, '2022-09-17', '2022-09-17', ' bardoli', 0, '', 'pending', 31000),
(19, 'wedding', '', 6, '2022-09-13', '2022-09-01', ' asg', 0, '', 'pending', 57500),
(20, 'inogration/opening', '', 6, '2023-09-27', '2022-09-15', ' fdj', 0, '', 'pending', 8000),
(21, 'inogration/opening', '', 6, '2022-09-21', '2022-09-21', ' dahz', 0, '', 'pending', 80500);

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `bdid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `SrvEveID` int(11) NOT NULL,
  `stid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`bdid`, `bid`, `SrvEveID`, `stid`) VALUES
(1, 16, 0, NULL),
(2, 16, 0, NULL),
(3, 16, 0, NULL),
(4, 16, 0, NULL),
(5, 16, 0, NULL),
(6, 17, 0, NULL),
(7, 17, 0, NULL),
(8, 17, 0, NULL),
(9, 17, 0, NULL),
(10, 17, 0, NULL),
(11, 21, 0, NULL),
(12, 21, 0, NULL),
(13, 21, 0, NULL),
(14, 21, 0, NULL),
(15, 21, 0, NULL),
(16, 21, 0, NULL),
(17, 21, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE `cartdetails` (
  `cdid` int(11) NOT NULL,
  `cartid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `cfname` varchar(50) NOT NULL,
  `cmname` varchar(50) NOT NULL,
  `clname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cmsg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `cfname`, `cmname`, `clname`, `cemail`, `cmsg`) VALUES
(0, 'kevin', 'p', 'gandhi', 'k@gmail.com', 'Hey, i just wanted to know ....'),
(0, 'k', 'k', 'k', 'k@g.com', 'k'),
(0, 'k', 'k', 'k', 'k@g.com', 'k'),
(0, 'j', 'j', 'j', 'j@g.vom', 'j'),
(0, 'a', 'a', 'a', 'a@a.com', 'aaaa'),
(0, 'jb', 'bh', 'bhj', 'b@c.om', 'ckghv');

-- --------------------------------------------------------

--
-- Table structure for table `cover`
--

CREATE TABLE `cover` (
  `coid` int(11) NOT NULL,
  `coname` varchar(50) NOT NULL,
  `copath` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `lid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `reason` varchar(50) NOT NULL,
  `leavestatus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`lid`, `uid`, `startdate`, `enddate`, `reason`, `leavestatus`) VALUES
(1, 22, '2022-09-12', '2022-09-12', 'sick', 'approved'),
(2, 22, '2022-09-12', '2022-09-12', 'sick', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `math` varchar(100) NOT NULL,
  `mediatype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `deliverystatus` varchar(20) NOT NULL,
  `orderpayment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `pname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `sid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_events`
--

CREATE TABLE `tbl_service_events` (
  `SrvEveID` int(11) NOT NULL,
  `SrvEveName` varchar(50) NOT NULL,
  `SrvEveCharges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_events`
--

INSERT INTO `tbl_service_events` (`SrvEveID`, `SrvEveName`, `SrvEveCharges`) VALUES
(1, 'drone', 8000),
(2, 'LED wall', 12500),
(3, 'LED wall + live', 45000),
(4, 'candid photographer', 10000),
(5, 'cinematographer', 13000),
(6, 'entry display setup x 3 (40inch)', 7500),
(7, 'entry display setup x 5 (40inch)', 11500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `mname`, `lname`, `username`, `password`, `contact`, `gender`, `address`, `usertype`, `email`) VALUES
(1, 'Kalash', 'Abhay', 'Shah', 'k', '8ce4b16b22b58894aa86c421e8759df3', 9426921383, 'male', 'Navsari', 'owner', 'kalashshahnvs@gmail.com'),
(6, 'Jainam', 'A', 'Shah', 'j', '363b122c528f54df4a0446b6bab05515', 1234567890, 'male', 'nvs', 'client', 'j@g.c'),
(19, 'aamena', 'zakir', 'shaikh', 'aa', '4124bc0a9335c27f086f24ba207a4912', 9632587410, 'female', 'chikhli', 'client', '20bmiit056@gmail.com'),
(22, 'AMIT', 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 1234567890, 'male', 'nvs', 'admin', 'a@a.c'),
(27, 'varshal', 'jignesh', 'patel', 'v', '9e3669d19b675bd57058fd4664205d2a', 9874563210, 'male', 'kumbhar faliya', 'client', '20bmiit033@gmail.com'),
(28, 'nishtha', 'satish', 'tandel', 'ni', 'e6c151d449e1db05b1ffb5ad5ec656cf', 7410258963, 'female', 'navsari', 'client', 'ni@gmail.com'),
(29, 'prince', 'v', 'patel', 'pr', '64e1e1cbe1ca8e88ef3a838a3e7b57d6', 8520147963, 'male', 'bilimora', 'client', 'pr@g.com'),
(32, 'Ram', 'Dashrat', 'Bhagwanji', 'ram', '4641999a7679fcaef2df0e26d11e3c72', 9090090900, 'male', 'Ayodhya', 'client', 'ram12@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`bdid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `cartdetails`
--
ALTER TABLE `cartdetails`
  ADD PRIMARY KEY (`cdid`);

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_service_events`
--
ALTER TABLE `tbl_service_events`
  ADD PRIMARY KEY (`SrvEveID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartdetails`
--
ALTER TABLE `cartdetails`
  MODIFY `cdid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_events`
--
ALTER TABLE `tbl_service_events`
  MODIFY `SrvEveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
