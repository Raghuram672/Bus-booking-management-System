-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 08:44 AM
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
-- Database: `easybus`
--

-- --------------------------------------------------------

--
-- Table structure for table `busrate`
--

CREATE TABLE `busrate` (
  `id` int(200) NOT NULL,
  `bus_type` varchar(200) NOT NULL,
  `rate` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busrate`
--

INSERT INTO `busrate` (`id`, `bus_type`, `rate`) VALUES
(6, 'Volvo', 45),
(7, 'Airavata', 100),
(8, 'Rajahamsa', 100),
(9, 'Mini Bus', 25);

-- --------------------------------------------------------

--
-- Table structure for table `bus_list`
--

CREATE TABLE `bus_list` (
  `id` int(200) NOT NULL,
  `bus_number` varchar(200) NOT NULL,
  `Driver` varchar(200) NOT NULL,
  `pickup` varchar(200) NOT NULL,
  `dest` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `depart_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_list`
--

INSERT INTO `bus_list` (`id`, `bus_number`, `Driver`, `pickup`, `dest`, `price`, `depart_date`) VALUES
(2, 'ka05', 'raghu', 'bangalore', 'mysore', 200, '2022-02-15'),
(3, 'ka09', 'madan', 'bangalore', 'gulbarga', 300, '2022-02-25'),
(4, 'ka06', 'hemanth', 'bangalore', 'kolar', 300, '2022-03-15'),
(5, 'ka01', 'wing', 'bangalore', 'goa', 800, '2022-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `id` int(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `typeofbus` varchar(200) NOT NULL,
  `days` int(100) NOT NULL,
  `departure` date NOT NULL,
  `Approved_status` varchar(200) NOT NULL DEFAULT 'Approval Pending',
  `user_status` varchar(200) NOT NULL DEFAULT 'Reserved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`id`, `Name`, `email`, `phone`, `typeofbus`, `days`, `departure`, `Approved_status`, `user_status`) VALUES
(1, 'Raghuram', 'raghuram64375@gmail.com', '4848484406', 'Sleeper AC', 3, '2022-01-18', 'Approved', 'Reserved'),
(2, 'sreenivasa', 'sreenivasatejaswini@gmail.com', '9986888405', 'Airavata', 5, '2022-01-27', 'Cancelled', 'Cancelled'),
(3, 'demo', 'raghuram64375@gmail.com', '7363837676', 'Mini Bus', 4, '2022-01-26', 'Approval Pending', 'Reserved'),
(4, 'hemanth', 'hemanthkumar96333@gmail.com', '7349375658', 'Rajahamsa', 3, '2022-03-16', 'Cancelled', 'Cancelled'),
(5, 'prajwal', 'hemanthkumar96333@gmail.com', '8123008512', 'Mini Bus', 2, '2022-03-18', 'Approved', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `tickets` int(200) NOT NULL,
  `pick` varchar(200) NOT NULL,
  `dest` varchar(200) NOT NULL,
  `depart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`id`, `name`, `phone`, `tickets`, `pick`, `dest`, `depart`) VALUES
(14, 'Raghuram', '9986888405', 4, 'bangalore', 'gulbarga', '2022-02-25'),
(15, 'aksh', '4848484406', 5, 'bangalore', 'kolar', '2022-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `cpassword`) VALUES
(6, 'Raghuram', 'raghuram64375@gmail.com', '8431953858', '12345', '12345'),
(7, 'Tejaswini', 'sreenivasatejaswini@gmail.com', '8431953858', 'teju', 'teju'),
(8, 'Admin', 'admin123@gmail.com', '9986888405', 'admin@123', 'admin@123'),
(9, 'demo', 'demo@gmail.com', '9844647467', '1234', '1234'),
(10, 'hemanth', 'hemanthkumar96333@gmail.com', '7349375658', '12345678', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busrate`
--
ALTER TABLE `busrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_list`
--
ALTER TABLE `bus_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busrate`
--
ALTER TABLE `busrate`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bus_list`
--
ALTER TABLE `bus_list`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
