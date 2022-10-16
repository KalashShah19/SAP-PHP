-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 11:34 AM
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
(26, 'inogration/opening', '', 27, '2022-10-31', '2022-10-31', ' nvs', NULL, '', 'approved', 31000, '1,4,5');

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `deliverystatus` varchar(20) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `ordertotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `deliverystatus`, `pid`, `ordertotal`) VALUES
(1, 6, 'd', '1,2', 500),
(2, 27, 'delivered', '2,3', 350);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `mid`, `price`, `size`, `color`) VALUES
(1, 'Frame', '1', 400, 'small', 'brown'),
(2, 'Cup', '2', 300, 'small', 'black'),
(3, 'Key chain', '3', 100, 'small', 'black'),
(7, 'Bedsheet', '4', 250, 'small', 'blue'),
(8, 'Cushion Cover', '5', 200, 'Small', 'White');

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
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `password`, `contact`, `gender`, `address`, `usertype`, `email`) VALUES
(1, 'Kalash', 'Shah', '8ce4b16b22b58894aa86c421e8759df3', 9426921383, 'male', 'Navsari', 'owner', '20bmiit040@gmail.com'),
(6, 'jainam', 'shah', '363b122c528f54df4a0446b6bab05515', 7410852963, 'male', 'nvs', 'admin', '21bmiit079@gmai.com'),
(19, 'aamena', 'shaikh', '4124bc0a9335c27f086f24ba207a4912', 9632587410, 'female', 'chikhli', 'client', '20bmiit056@gmail.com'),
(22, 'amit', 'bhai', 'am', 8520147963, 'male', 'nvs', 'admin', 'amit@gmail.com'),
(27, 'varshal', 'patel', '9e3669d19b675bd57058fd4664205d2a', 9874563210, 'male', 'kumbhar faliya', 'client', '20bmiit033@gmail.com'),
(28, 'nishtha', 'tandel', 'e6c151d449e1db05b1ffb5ad5ec656cf', 7410258963, 'female', 'navsari', 'client', '20bmiit088@gmail.com'),
(29, 'prince', 'patel', '64e1e1cbe1ca8e88ef3a838a3e7b57d6', 8520147963, 'male', 'bilimora', 'client', '20bmiit002@gmai.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`lid`);

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
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
