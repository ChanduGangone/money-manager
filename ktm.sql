-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 06:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `userid` int(11) NOT NULL,
  `Account` varchar(10) NOT NULL,
  `Ammount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `Account`, `Ammount`) VALUES
(7, 'bank', 5000),
(4, 'bank', 5000),
(4, 'bank', 5000),
(9, 'bank', 10000),
(9, 'cash', -500),
(10, 'bank', 103500),
(10, 'cash', 3799),
(12, 'bank', 8600),
(13, 'bank', -4800),
(14, 'bank', 193002),
(15, 'bank', 4000),
(15, 'pocketmone', 0),
(15, 'cash', 0),
(10, 'insurance', 14500),
(10, 'fromhome', 4000),
(10, 'loan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ecategory`
--

CREATE TABLE `ecategory` (
  `userid` int(11) NOT NULL,
  `Ecategory` varchar(10) NOT NULL,
  `Ammount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecategory`
--

INSERT INTO `ecategory` (`userid`, `Ecategory`, `Ammount`) VALUES
(7, 'food', 200),
(9, 'food', 0),
(9, 'party', 0),
(10, 'emi', 10000),
(10, 'food', 2800),
(10, 'party', 5000),
(12, 'food', 400),
(12, 'party', 1000),
(13, 'party', 5000),
(10, 'rent', 0),
(10, 'mess', 100),
(14, 'party', 4998),
(14, 'food', 2000),
(14, 'food', 2000),
(15, 'rent', 1000),
(15, 'cars', 0),
(15, 'coffee', 0),
(10, 'books', 0),
(10, 'health', 500),
(10, 'hostelrent', 0),
(10, 'apliances', 0);

-- --------------------------------------------------------

--
-- Table structure for table `etrans`
--

CREATE TABLE `etrans` (
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `account` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etrans`
--

INSERT INTO `etrans` (`userid`, `date`, `account`, `amount`, `category`) VALUES
(4, '2019-10-29', 'bank', 100, 'food'),
(4, '2019-10-29', 'bank', 23, 'food'),
(4, '2019-10-29', 'bank', 23, 'food'),
(4, '2019-10-29', 'bank', 23, 'food'),
(9, '2019-11-01', 'cash', 500, 'party'),
(10, '2019-11-02', 'bank', 10000, 'emi'),
(10, '2019-11-02', 'bank', 2000, 'food'),
(10, '2019-11-02', 'cash', 1000, 'food'),
(10, '2019-11-02', 'cash', 400, 'food'),
(10, '2019-11-02', 'cash', 400, 'food'),
(10, '2019-11-02', 'bank', 5000, 'emi'),
(10, '2019-11-02', 'bank', 5000, 'party'),
(12, '2019-11-05', 'bank', 400, 'food'),
(12, '2019-11-05', 'bank', 1000, 'party'),
(13, '2019-11-05', 'bank', 5000, 'party'),
(10, '2019-11-05', 'bank', 100, 'mess'),
(14, '2019-11-05', 'bank', 1000, 'party'),
(14, '2019-11-05', 'bank', 2000, 'food'),
(14, '2019-11-05', 'bank', 1999, 'party'),
(14, '2019-11-05', 'bank', 1999, 'party'),
(15, '2019-11-08', 'bank', 1000, 'rent'),
(10, '2019-11-11', 'bank', 5000, 'emi'),
(10, '2019-11-11', 'insurance', 500, 'health'),
(10, '2019-11-11', 'fromhome', 1000, 'food');

-- --------------------------------------------------------

--
-- Table structure for table `icategory`
--

CREATE TABLE `icategory` (
  `userid` int(11) NOT NULL,
  `icategary` varchar(10) NOT NULL,
  `Ammount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icategory`
--

INSERT INTO `icategory` (`userid`, `icategary`, `Ammount`) VALUES
(4, 'salary', 0),
(9, 'salary', 0),
(10, 'salary', 40200),
(10, 'bonus', 5599),
(12, 'salary', 10000),
(13, 'salary', 200),
(10, 'scholarshi', 0),
(14, 'salary', 200000),
(15, 'home', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `itrans`
--

CREATE TABLE `itrans` (
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `account` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itrans`
--

INSERT INTO `itrans` (`userid`, `date`, `account`, `amount`, `category`) VALUES
(4, '2019-10-30', 'bank', 100, 'salary'),
(9, '2019-11-01', 'bank', 10000, 'salary'),
(10, '2019-11-02', 'bank', 100000, 'salary'),
(10, '2019-11-02', 'cash', 5000, 'bonus'),
(10, '2019-11-02', 'bank', 5000, 'bonus'),
(10, '2019-11-02', 'bank', 200, 'salary'),
(10, '2019-11-02', 'bank', 100, 'salary'),
(10, '2019-11-02', 'bank', 100, 'salary'),
(10, '2019-11-02', 'bank', 10000, 'salary'),
(10, '2019-11-02', 'bank', 200, 'salary'),
(10, '2019-11-02', 'cash', 599, 'bonus'),
(12, '2019-11-05', 'bank', 10000, 'salary'),
(13, '2019-11-05', 'bank', 200, 'salary'),
(14, '2019-11-05', 'bank', 100000, 'salary'),
(14, '2019-11-05', 'bank', 100000, 'salary'),
(15, '2019-11-08', 'bank', 5000, 'home'),
(10, '2019-11-11', 'bank', 15000, 'salary'),
(10, '2019-11-11', 'insurance', 15000, 'salary'),
(10, '2019-11-12', 'fromhome', 5000, 'bonus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `contactno` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(1, 'Chandu', 'gangone', '2017bcs009@sggs.ac.in', 'hello@123', 2147483647, '2019-10-11 05:26:53'),
(2, 'raj', 'vishwas', 'csgangone@gmail.com', 'vishwas', 23834354, '2019-10-11 05:28:54'),
(4, 'abc', 'xyz', 'abc@xyz', 'abc', 1234, '2019-10-14 15:18:13'),
(5, 'akshay', 'chhajed', 'akshay@gmail', 'akshay', 123456, '2019-10-14 16:56:24'),
(6, 'kalyani', 'xyz', 'abc@ac', '1234', 676782, '2019-10-18 06:13:57'),
(7, 'xyz', 'xyz', 'xyz@xyz', '1234', 123456, '2019-10-22 08:36:38'),
(8, 'satish', 'gangone', 'qwe@rt', '12345', 234435, '2019-10-22 11:16:57'),
(9, 'chandu', 'gangone', 'chandu@sggs', '1234', 2147483647, '2019-10-30 12:08:38'),
(10, 'raj', 'vishvas', 'raj@sggs', '1234', 23834354, '2019-11-02 04:45:40'),
(11, 'chandu', 'gangone', 'chandu@mail', '1234', 12345678, '2019-11-03 05:46:21'),
(12, 'user1', 'jfufne', 'user@me', '1234', 23567587, '2019-11-05 04:45:23'),
(13, 'manisha', 'rautwad', '2017bcs018@sggs.ac.in', '1438', 12345678, '2019-11-05 05:17:57'),
(14, 'anurag', 'komrewar', 'anu@sggs', '1234', 56272487, '2019-11-05 10:06:32'),
(15, 'new ', 'user', 'new@user', 'user', 2147483647, '2019-11-08 04:36:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD KEY `Account` (`Account`),
  ADD KEY `userid` (`userid`,`Account`),
  ADD KEY `userid_2` (`userid`),
  ADD KEY `userid_3` (`userid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecategory`
--
ALTER TABLE `ecategory`
  ADD KEY `ex` (`userid`),
  ADD KEY `Ecategory` (`Ecategory`);

--
-- Indexes for table `etrans`
--
ALTER TABLE `etrans`
  ADD KEY `two` (`account`),
  ADD KEY `three` (`category`),
  ADD KEY `one` (`userid`);

--
-- Indexes for table `icategory`
--
ALTER TABLE `icategory`
  ADD KEY `in` (`userid`),
  ADD KEY `icategary` (`icategary`);

--
-- Indexes for table `itrans`
--
ALTER TABLE `itrans`
  ADD KEY `o` (`userid`),
  ADD KEY `t` (`account`),
  ADD KEY `th` (`category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `relate` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `ecategory`
--
ALTER TABLE `ecategory`
  ADD CONSTRAINT `ex` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `etrans`
--
ALTER TABLE `etrans`
  ADD CONSTRAINT `one` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `three` FOREIGN KEY (`category`) REFERENCES `ecategory` (`Ecategory`),
  ADD CONSTRAINT `two` FOREIGN KEY (`account`) REFERENCES `account` (`Account`);

--
-- Constraints for table `icategory`
--
ALTER TABLE `icategory`
  ADD CONSTRAINT `in` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `itrans`
--
ALTER TABLE `itrans`
  ADD CONSTRAINT `o` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `t` FOREIGN KEY (`account`) REFERENCES `account` (`Account`),
  ADD CONSTRAINT `th` FOREIGN KEY (`category`) REFERENCES `icategory` (`icategary`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
