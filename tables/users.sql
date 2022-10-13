-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2022 at 09:11 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `lname` varchar(50) NOT NULL,
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

INSERT INTO `users` (`uid`, `fname`, `lname`, `password`, `contact`, `gender`, `address`, `usertype`, `email`) VALUES
(1, 'Kalash', 'Shah', '8ce4b16b22b58894aa86c421e8759df3', 9426921383, 'male', 'Navsari', 'owner', '20bmiit040@gmail.com'),
(6, 'Jainam', 'Shah', '363b122c528f54df4a0446b6bab05515', 9632587412, 'male', 'nvs', 'client', 'jainamshahnvs@gmail.com'),
(19, 'aamena', 'shaikh', '4124bc0a9335c27f086f24ba207a4912', 9632587410, 'female', 'chikhli', 'client', '20bmiit056@gmail.com'),
(22, 'amit', 'patel', 'c04cd38aeb30f3ad1f8ab4e64a0ded7b', 8520369741, 'male', 'nvs', 'admin', 'am@gmail.com'),
(27, 'varshal', 'patel', '9e3669d19b675bd57058fd4664205d2a', 9874563210, 'male', 'kumbhar faliya', 'client', 'v@gmail.com'),
(28, 'nishtha', 'tandel', 'e6c151d449e1db05b1ffb5ad5ec656cf', 7410258963, 'female', 'navsari', 'client', 'ni@gmail.com'),
(29, 'prince', 'patel', '64e1e1cbe1ca8e88ef3a838a3e7b57d6', 8520147963, 'male', 'bilimora', 'client', 'pr@g.com');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
