-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2022 at 10:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(50) NOT NULL,
  `customerID` int(50) NOT NULL,
  `accountType` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `customerID`, `accountType`, `balance`, `status`) VALUES
(1, 16, 1, 15000, 'opened'),
(2, 19, 1, 0, 'closed'),
(3, 20, 1, 0, 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'junebhone');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `NRC` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `CompanyNRC` varchar(50) DEFAULT NULL,
  `CompanyAddress` varchar(50) DEFAULT NULL,
  `PhNumber` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `FirstName`, `LastName`, `Gender`, `DOB`, `NRC`, `Type`, `CompanyName`, `CompanyNRC`, `CompanyAddress`, `PhNumber`, `City`, `Address`, `status`) VALUES
(16, 'bhonekyaw', 'sihein', 'male', '2003-06-12', '12/BHN(N)108238', 'individual', '', '', '', '09421768835', 'ygn', '41/17(B) Golden Hill Villa', 'active'),
(19, 'oo wit ', 'yee mg', 'female', '2002-08-25', '12/TGK(N)197145', 'individual', '', '', '', '09954582002', 'ygn', 'No,5/1 Kyautlyin Street Thingn Township', 'blocked'),
(20, 'zaw', 'zaw', 'male', '1999-06-23', '14/JHN(N)102834', 'individual', '', '', '', '01293213', 'mdy', 'Bahan', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(50) NOT NULL,
  `accountID` int(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionID`, `accountID`, `amount`, `date`, `description`) VALUES
(1, 1, 200, '2022-07-25', 'deposit'),
(2, 1, 200, '2022-07-25', 'withdraw'),
(3, 1, 200, '2022-07-25', 'deposit'),
(4, 1, 200, '2022-07-25', 'deposit'),
(5, 1, 200, '2022-07-25', 'withdraw'),
(6, 1, 200, '2022-07-25', 'withdraw'),
(7, 1, -100, '2022-07-25', 'withdraw'),
(8, 1, 100, '2022-07-26', 'deposit'),
(9, 1, -100, '2022-07-26', 'withdraw'),
(10, 1, 100, '2022-07-26', 'deposit'),
(11, 2, -100, '2022-07-26', 'withdraw'),
(12, 2, -800, '2022-07-26', 'Account Closed'),
(13, 3, -5000, '2022-07-27', 'Account Closed'),
(14, 1, 2000, '2022-07-28', 'deposit'),
(15, 2, 0, '2022-07-28', 'Account Closed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
