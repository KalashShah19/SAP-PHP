-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 06:55 PM
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
(1, 'Kalash', 'Abhay', 'Shah', 'k', 'k', 9426921383, 'male', 'Navsari', 'owner', 'kalashshahnvs@gmail.com'),
(6, 'jainam', 'Abhay', 'Shah', 'j', 'j', 9874456321, 'male', 'navsari', 'client', 'jainamshah@gmail.com'),
(18, 'Kashish', 'jigar', 'Sukhadia', 'ks', 'k', 9632587410, 'female', 'nvs', 'admin', 'kashishsukhadia8@gmail.com'),
(19, 'aamena', 'zakir', 'shaikh', 'a', 'a', 8520147963, 'female', 'chikhli', 'admin', 'aamushaikh1010@gmail.com'),
(20, 'nidhi', 'jay', 'patel', 'p', 'p', 7410258963, 'female', 'bardoli', 'client', 'nidhi@gmail.com'),
(21, 'nishtha', 'satish', 'tandel', 'ni', 'n', 9632587410, 'female', 'nvs', 'client', 'tandelnishtha07@gmail.com'),
(22, 'Amit', 'b', 'patel', 'am', 'a', 9874563210, 'male', 'vyara', 'admin', 'am@gmail.com');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
