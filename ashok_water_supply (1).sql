-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 01:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashok water supply`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `name`, `contact`, `date`, `work`, `location`, `status`) VALUES
(13, '20415@sdmcbm.ac.in', '6361521279', '2023-06-20', 'kjjbnkmk', '13', 'Completed'),
(14, 'ramazan@gmail.com', '9880724749', '2023-06-29', 'kjjbnkmk', '13', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(30) NOT NULL,
  `date` date NOT NULL,
  `attn` varchar(500) NOT NULL,
  `wid` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `date`, `attn`, `wid`) VALUES
(2, '2023-06-17', 'Present', 'ramazan@gmail.com'),
(3, '2023-06-17', 'Present', '20415@sdmcbm.ac.in'),
(4, '2023-06-18', 'Present', '20415@sdmcbm.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(30) NOT NULL,
  `bno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `discount` double NOT NULL,
  `paystatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bno`, `name`, `phone`, `date`, `capacity`, `price`, `status`, `discount`, `paystatus`) VALUES
(1, '1', 'rahul', '6361521279', '2023-06-16', '1200', 1200, 'Confirm', 1, 'paid'),
(2, '1', 'rahul', '6361521279', '2023-06-16', '6000', 7800, 'Confirm', 1, 'paid'),
(3, '2', 'rahul', '6361521279', '2023-06-06', '3000', 1200, 'Confirm', 2, 'paid'),
(4, '3', 'rahul', '6361521279', '2023-06-06', '3000', 1200, 'Confirm', 5, ''),
(5, '3', 'rahul', '6361521279', '2023-06-06', '6000', 1200, 'Confirm', 5, ''),
(6, '4', 'rahul.ashok', '6361521279', '2023-06-22', '3000', 1200, 'Confirm', 3, ''),
(7, '4', 'rahul.ashok', '6361521279', '2023-06-22', '3000', 1200, 'Confirm', 3, ''),
(8, '5', 'Rahul', '6361521279', '2023-06-17', '3000', 1200, 'Confirm', 0, ''),
(9, '6', 'rahul', '6361521279', '2023-06-21', '1200', 1200, 'Confirm', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `citydep` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `capacityid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `email`, `contact`, `citydep`, `date`, `capacityid`) VALUES
(3, 'rahul', 'rahulashok5685@gmail.com', '9880724749', 'bejai', '2023-06-05', '4'),
(4, 'rahul', 'rahulashok5685@gmail.com', '9880724749', 'bejai', '2023-06-05', '4'),
(5, 'srijan', 'srijan123@gmail.com', '9880724749', 'bejai', '2023-06-10', '1'),
(6, 'srijan', 'srijan123@gmail.com', '9880724749', 'bejai', '2023-06-20', '1'),
(7, 'srijan', 'srijan123@gmail.com', '', '', '2023-06-18', '1'),
(8, 'srijan', 'srijan123@gmail.com', '6361521279', 'bejai', '2023-06-18', '1'),
(9, 'srijan', 'srijan123@gmail.com', '', '', '2023-06-18', '1'),
(10, 'srijan', 'srijan123@gmail.com', '', '', '2023-06-18', '6');

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `id` int(30) NOT NULL,
  `ltr` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `vno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`id`, `ltr`, `amt`, `vno`) VALUES
(1, '1200', '1200', 'KA-19-MD-9600'),
(4, '3000', '1200', 'KA-19-MD-3269'),
(5, '6000', '1200', 'KA-19-MD-6596'),
(6, '6000', '7800', 'KA-19-WE-3290');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'rahul.ashok', 'admin@gmail.com', 'good', 'gwgwhjhkhw2kus'),
(2, 'scda', 'rahulashok5685@gmail.com', 'good', 'hhidceiuf'),
(3, 'rahul.ashok', 'admin@gmail.com', 'dffwsd', 'zwxs'),
(4, 'rahul', '', ' nxqkb', 'f'),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `leavenote`
--

CREATE TABLE `leavenote` (
  `id` int(30) NOT NULL,
  `wid` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavenote`
--

INSERT INTO `leavenote` (`id`, `wid`, `date`, `subject`, `message`, `status`) VALUES
(3, '20415@sdmcbm.ac.in', '2023-06-06', 'leave', 'cedcrcrfvr', 'Accepted'),
(4, 'ramazan@gmail.com', '2023-06-22', 'dffwsd', 'zesxdrctfvgybhunjmi', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `address`, `url`, `username`, `phone`) VALUES
(13, 'Hash infotech', 'Kulshakar Mangalore', 'https://goo.gl/maps/z2qiMd3MVMwkSd1y6', 'srijan', '6361521279'),
(14, 'Hash infotech', 'mxjkbnsx', 'https://goo.gl/maps/eQp46e33dwHUD4eZ8?coh=178573&entry=tt', 'admin', '6361521279');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `bill` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `paymentst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `phone`, `address`) VALUES
(1, 'rahul', 'rahulashok5685@gmail.com', '123', '', ''),
(2, 'srijan', 'srijan123@gmail.com', '123', '', ''),
(3, 'navneeth', 'navnneth123@gmail.com', '123', '', ''),
(4, 'ashok', 'ashok@gmail.com', '123', '6361521279', 'Kulshakar Mangalore'),
(5, 'Jeevan', 'jeevan@gmail.com', '123456', '6361107028', 'Manglore');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `date`, `salary`, `status`) VALUES
(4, 'ramazan@gmail.com', '2023-05-11', '20000', 'Received'),
(5, '20415@sdmcbm.ac.in', '2023-05-31', '20000', 'Received'),
(6, '20415@sdmcbm.ac.in', '2023-06-05', '15000', 'Received'),
(7, 'ramazan@gmail.com', '2023-06-13', '10000', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(30) NOT NULL,
  `workername` varchar(50) NOT NULL,
  `profilephoto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `adharphoto` varchar(50) NOT NULL,
  `licenceno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `workername`, `profilephoto`, `email`, `mobile`, `adharphoto`, `licenceno`, `password`) VALUES
(1, 'rahul.ashok', 'rahul.ashok6314bd12b1684.jpg', '20415@sdmcbm.ac.in', '456789876545', 'rahul.ashok1838832.jpg', 'ghjkm', 'nbm'),
(3, 'ramazan', 'ramazandownload.jpg', 'ramazan@gmail.com', '8245678912', 'ramazan1838832.jpg', 'ssd1234', '1234'),
(4, 'rahul.ashok', 'rahul.ashok5-key-Elements-of-a-Lone-Worker-policy.', 'rahulashok5685@gmail.com', '456789876545', 'rahul.ashok1096498.jpg', 'ghjkm', 'nbm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavenote`
--
ALTER TABLE `leavenote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `capacity`
--
ALTER TABLE `capacity`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leavenote`
--
ALTER TABLE `leavenote`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
