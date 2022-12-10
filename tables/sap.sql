-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 06:17 AM
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
  `totalamount` float DEFAULT NULL,
  `SrvEveID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `event`, `personalized`, `uid`, `start`, `end`, `baddress`, `travelcharges`, `instructions`, `bstatus`, `totalamount`, `SrvEveID`) VALUES
(25, 'birthday', '', 19, '2022-10-19', '2022-10-19', ' chikhli', NULL, '', 'pending', 43500, '1,2,4,5'),
(26, 'inogration/opening', '', 27, '2022-10-31', '2022-10-31', ' nvs', NULL, '', 'approved', 31000, '1,4,5'),
(27, 'party', '', 30, '2022-10-19', '2022-10-19', ' Navsari', NULL, '', 'pending', 43500, '1,2,4,5'),
(32, 'wedding', '', 30, '2022-12-20', '2022-12-22', ' Navsari', NULL, '', 'rejected', 107500, '1,2,3,4,5,6');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(500) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `pname`, `size`, `price`, `image`, `uid`) VALUES
(18, 'Bedsheet', 'big', 250, 'PicsArt_06-11-11.12.40.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `cfname` varchar(100) NOT NULL,
  `clname` varchar(100) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `cmsg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `cfname`, `clname`, `cemail`, `cmsg`) VALUES
(1, 'kevin', 'gandhi', 'kevin@gmail.com', 'hello');

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
(1, 6, '2022-09-12', '2022-09-12', 'picnic', 'pending'),
(2, 22, '2022-09-12', '2022-09-12', 'sick', 'approved'),
(3, 6, '2022-09-12', '2022-09-12', 'relative visit', 'pending'),
(4, 22, '2022-09-12', '2022-09-12', 'death of relative', 'approved'),
(5, 6, '2022-09-12', '2022-09-12', 'sick', 'approved'),
(6, 6, '2022-09-12', '2022-09-12', 'picnic', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `mid` int(11) NOT NULL,
  `medianame` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `mediafolder` varchar(100) NOT NULL,
  `selected` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`mid`, `medianame`, `uid`, `mediafolder`, `selected`) VALUES
(1, 'img1.jpg', 19, 'haldi/', 'yes'),
(2, 'img2.jpg', 19, 'haldi/', 'yes'),
(4, 'img1.png', 19, 'mehndi/', 'yes'),
(6, 'img3.jpg', 19, 'mehndi/', 'no'),
(7, 'img4.jpg', 19, 'haldi/', 'yes'),
(8, 'img5.jpg', 19, 'haldi/', 'no'),
(9, 'img6.jpg', 19, 'haldi/', 'no'),
(10, 'img7.jpg', 19, 'haldi/', 'yes'),
(11, 'album.jpg', 1, 'products/', 'no'),
(12, 'bedsheet.jpg', 1, 'products/', 'no'),
(13, 'cover.jpg', 1, 'products/', 'no'),
(14, 'cup.jpg', 1, 'products/', 'no'),
(15, 'cushion.jpg', 1, 'products/', 'no'),
(16, 'film.png', 1, 'products/', 'no'),
(17, 'frame.jfif', 1, 'products/', 'no'),
(18, 'keychain.jpg', 1, 'products/', 'no'),
(19, 'page.jpg', 1, 'products/', 'no'),
(20, 'stickers.jfif', 1, 'products/', 'no'),
(32, 'ACS00412.JPG', 1, 'portfolio/', 'no'),
(33, 'ACS00425.JPG', 1, 'portfolio/', 'no'),
(34, 'ACS00433.JPG', 1, 'portfolio/', 'no'),
(36, '003 _ACS00243.jpg', 1, 'portfolio/', 'no'),
(37, 'ACS00214 copy.jpg', 1, 'portfolio/', 'no'),
(38, 'ACS00192.JPG', 1, 'portfolio/', 'no'),
(39, '004.jpg', 1, 'portfolio/', 'no'),
(40, 'ACS00407.JPG', 1, 'prewedding/', 'no'),
(41, '003 _ACS00243.jpg', 1, 'prewedding/', 'no'),
(42, 'ACS00362.JPG', 1, 'prewedding/', 'no'),
(43, 'vidai5.jpg', 1, 'vidai/', 'no'),
(44, 'vidai4.jpg', 1, 'vidai/', 'no'),
(45, 'vidai3.jpg', 1, 'vidai/', 'no'),
(46, 'Vidai2.jpg', 1, 'vidai/', 'no'),
(47, 'vidia.jpg', 1, 'vidai/', 'no'),
(49, 'phera4.jpg', 1, 'phera/', 'no'),
(50, 'phera3.jpeg', 1, 'phera/', 'no'),
(51, 'phera2.jpg', 1, 'phera/', 'no'),
(52, 'phera.jpeg', 1, 'phera/', 'no'),
(53, 'phera5.png', 1, 'phera/', 'no'),
(54, 'mm5.jpg', 1, 'mandap muhrat/', 'no'),
(55, 'mm4.jpg', 1, 'mandap muhrat/', 'no'),
(56, 'mm3.jpg', 1, 'mandap muhrat/', 'no'),
(57, 'mm2.jpg', 1, 'mandap muhrat/', 'no'),
(58, 'mm1.jpg', 1, 'mandap muhrat/', 'no'),
(59, 'mehndi3.jpg', 1, 'mehndi/', 'no'),
(60, 'mehndi2.jpg', 1, 'mehndi/', 'no'),
(61, 'mehndi.jpg', 1, 'mehndi/', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `deliverystatus` varchar(20) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `ordertotal` float NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `deliverystatus`, `pname`, `ordertotal`, `image`) VALUES
(2, 19, 'delivered', 'Frame, Key Chain', 500, '0'),
(13, 30, 'pending', 'Frame,Key chain,', 500, '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `mid`, `price`) VALUES
(1, 'Frame', '17', 400),
(2, 'Cup', '14', 300),
(3, 'Key chain', '18', 100),
(7, 'Bedsheet', '12', 250),
(8, 'Cushion Cover', '15', 200),
(9, 'Album', '11', 30000),
(10, 'Short Film', '16', 10000),
(11, 'Stickers', '20', 100),
(12, 'Key chain', '18', 100),
(13, 'Key chain', '18', 100),
(14, 'Key chain', '18', 100),
(15, 'Key chain', '18', 100),
(16, 'Key chain', '18', 100),
(17, 'Short Film', '16', 10000),
(18, 'Short Film', '16', 10000),
(19, 'Cup', '14', 300),
(20, 'Cup', '14', 300),
(21, 'Frame', '17', 400),
(22, 'Frame', '17', 400),
(23, 'Frame', '17', 400),
(24, 'Frame', '17', 400),
(25, 'Phone Cover', '19', 200);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `uid`, `subject`, `experience`, `rating`) VALUES
(1, 19, 'Overall', 'I booked Shah Abhay Photography for my Birthday party shoot, they were Amazing, the Cinematic Videos were just Brilliant. Loved them.', 5),
(2, 27, 'Photography', 'Excellent Photography Skills.', 4.5),
(3, 29, 'Editing', 'The Editing was very Professional. Specially the Beat Sync part was Awesome.', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `stid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `salary` float NOT NULL,
  `role` varchar(50) NOT NULL,
  `joindate` date NOT NULL,
  `leavedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`stid`, `uid`, `salary`, `role`, `joindate`, `leavedate`) VALUES
(1, 22, 15000, 'Manager', '2000-04-01', '0000-00-00');

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
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `password`, `contact`, `gender`, `address`, `usertype`, `email`, `profile`) VALUES
(1, 'Kalash', 'Shah', '8ce4b16b22b58894aa86c421e8759df3', 9426921383, 'male', 'Navsari', 'owner', '20bmiit040@gmail.com', 'PicsArt_06-11-11.12.40.jpg'),
(19, 'Aamena', 'shaikh', '4124bc0a9335c27f086f24ba207a4912', 9632587410, 'female', 'chikhli', 'client', '20bmiit056@gmail.com', 'ACS09903.JPG'),
(22, 'amit', 'kumar', 'c04cd38aeb30f3ad1f8ab4e64a0ded7b', 8520147963, 'male', 'nvs', 'admin', 'amit@gmail.com', '20201127_211040.jpg'),
(28, 'nishtha', 'tandel', 'e6c151d449e1db05b1ffb5ad5ec656cf', 7410258963, 'female', 'navsari', 'client', '20bmiit088@gmail.com', 'ACS09941.JPG'),
(29, 'prince', 'patel', '64e1e1cbe1ca8e88ef3a838a3e7b57d6', 8520147963, 'male', 'bilimora', 'client', '20bmiit002@gmai.com', ''),
(30, 'Kalash', 'Shah', '8ce4b16b22b58894aa86c421e8759df3', 9632587414, 'male', 'nvs', 'client', 'k@gmail.com', 'ACS09953.JPG'),
(31, 'heet', 'doshi', '2510c39011c5be704182423e3a695e91', 7410258963, 'male', 'nvs', 'client', 'heet@gmail.com', 'ACS00192.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`stid`);

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
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_service_events`
--
ALTER TABLE `tbl_service_events`
  MODIFY `SrvEveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
