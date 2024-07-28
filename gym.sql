-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 01:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('username', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `member_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `bill_date` varchar(32) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`member_id`, `name`, `bill_date`, `dob`, `amount`) VALUES
(0, '', '', '', 0),
(101, 'Dibash Timalsina', '2023-03-02', '', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(32) NOT NULL,
  `contact_email` varchar(32) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'Saurav ', 'saurav@gmail.com', 'never give up'),
(2, '', '', ''),
(3, 'Roshan', 'saurav@gmail.com', 'i want to join gym'),
(4, 'Ramesh', 'ramesh@gmail.com', 'i am willing to join soon'),
(5, 'Samir Rai', 'samir@gmail.com', 'i am seeking for good fitness club');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `join_date` varchar(32) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `join_date`, `dob`, `phone`, `email`) VALUES
(101, 'Dibash Timalsina', '2022-03-12', '1999-12-02', 9824213422, 'dibash9@gmail.com'),
(102, 'surya', '2023-05-26', '2000-06-21', 9856453212, 'surya@gmail.com'),
(103, 'Preya', '2023-07-02', '2001-01-04', 9824211010, 'preya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `recep_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`recep_id`, `name`, `dob`, `address`, `phone`) VALUES
(10, 'saira', '1997-02-12', 'ktm', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `booking_date` varchar(30) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `package_id`, `uname`, `email`, `booking_date`, `package_name`, `duration`, `payment_type`, `amount`) VALUES
(2, 1, 'Sunil khatiwada', '', '2023-12-19', 'BASIC', '1 month', '0', 2500),
(4, 1, 'test1', 'test@gmail.com', '2023-12-19', 'BASIC', '1 month', '0', 3000),
(6, 1, 'Sunil khatiwada', 'sunilkhatiwada2002@gmail.com', '2023-12-19', 'BASIC', '1 month', '0', 2500),
(7, 2, 'Saroj Gautam', 'sarojpgautamchapur@gamil.com', '2023-12-17', 'BASIC', '1 month', '0', -400),
(14, 2, 'Saroj Gautam', 'sarojpgautamchapur@gmail.com', '2023-12-19', 'PREMIUM', '1 month', '0', 5000),
(15, 1, 'test1', 'test2@gmail.com', '2023-12-19', 'BASIC', '1 month', '0', 3000),
(16, 2, 'test2', 'test2@gmail.com', '2023-12-19', 'BASIC', '1 month', 'cash', 3000),
(17, 1, 'Saroj Gautam', 'sarojpgautamchapur@gmail.com', '2023-12-24', 'BASIC', '1 month', 'cash', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tblpackage`
--

CREATE TABLE `tblpackage` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpackage`
--

INSERT INTO `tblpackage` (`package_id`, `package_name`) VALUES
(1, 'BASIC'),
(2, 'PREMIUM');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `experience` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `name`, `dob`, `experience`) VALUES
(1, 'Rajesh', '1995-03-20', '2 years'),
(2, 'surya', '1990-05-03', '5 years');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sign_id` int(11) NOT NULL,
  `User_name` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sign_id`, `User_name`, `Address`, `Gender`, `Email`, `Password`) VALUES
(1, 'Dibash Timalsina', 'Hetauda', 'male', 'dibash9@gmail.com', 'dibash123'),
(2, 'sujita', 'ktm', 'female', 'sujita@gmail.com', 'sujita123'),
(3, 'Saroj Gautam', 'chandrapur', 'male', 'sarojpgautamchapur@gmail.com', 'spg@123'),
(4, 'Sunil Budathoki', 'pokhara', 'male', 'sunil@gmail.com', 'sunil123'),
(5, 'Dibash ', 'ktm', 'male', '', '12345'),
(6, 'upendra', 'Dhangadi', 'male', 'upen7@gmail.com', '23456'),
(8, 'Rajesh', 'sarlahi', 'male', 'rajesh@gmail.com', '567'),
(9, 'Rajani', 'sinduli', 'female', 'rajani@gmail.com', '123'),
(13, 'saira', 'ktm', 'female', 'saira@gmail.com', '12345'),
(14, 'dawa lama', 'jorpati', 'male', 'dawa34@gmail.com', '12345'),
(43, 'sanjay', 'pokhara', 'male', 'sanjay@gmail.com', 'sanjay1'),
(44, 'Sunil khatiwada', 'ktm', 'male', 'sunilkhatiwada2002@gmail.com', 'sunil$12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`recep_id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `tblpackage`
--
ALTER TABLE `tblpackage`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sign_id`),
  ADD UNIQUE KEY `User_name` (`User_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `tblbooking_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `tblpackage` (`package_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
