-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 12:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` varchar(200) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`OrderID`, `ProductName`, `Quantity`, `Price`) VALUES
('OI0003', 'x', 6, 2),
('OI0003', 'aaaaax', 5, 123),
('OI0005', 'x', 6, 2),
('OI0005', 'aaaaax', 1, 123),
('OI0006', 'aaaaax', 1, 123),
('OI0006', 'x', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderinfor`
--

CREATE TABLE `orderinfor` (
  `id` varchar(50) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `TotalPrice` int(11) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfor`
--

INSERT INTO `orderinfor` (`id`, `Email`, `Address`, `Date`, `TotalPrice`, `Telephone`, `Name`) VALUES
('OI0001', 'admin@gmail.com', 'Some where in university', '2021-10-24', 627, '0967123452', 'ADMIN'),
('OI0002', 'admin@gmail.com', 'Some where in university', '2021-10-03', 627, '0967123452', 'ADMIN'),
('OI0003', 'admin@gmail.com', 'Some where in university', '2021-11-24', 627, '0967123452', 'ADMIN'),
('OI0004', 'admin@gmail.com', 'Some where in university', '2021-11-24', 627, '0967123452', 'ADMIN'),
('OI0005', 'admin@gmail.com', 'Some where in university', '2021-11-24', 135, '0967123452', 'ADMIN'),
('OI0006', 'user@gmail.com', '123 street 789 district 10', '2021-11-25', 129, '0967123456aa', 'UserName');

-- --------------------------------------------------------

--
-- Table structure for table `productinfor`
--

CREATE TABLE `productinfor` (
  `id` varchar(10) NOT NULL,
  `ProductName` varchar(10) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `PicturePath` varchar(200) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productinfor`
--

INSERT INTO `productinfor` (`id`, `ProductName`, `Description`, `PicturePath`, `Price`, `Category`, `Name`) VALUES
('P00002', 'aaaaax', 'ascX', 'storage/product/118156.jpg', 123, 'Accessory', NULL),
('P00010', 'x', 'SSS', 'storage/product/pexels-max-andrey-1254736.jpg', 2, 'Dog Food', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `StaffName` varchar(200) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`StaffName`, `Telephone`, `Address`, `Role`) VALUES
('tin', 0, 'itiririr', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `userinfor`
--

CREATE TABLE `userinfor` (
  `Email` varchar(100) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Telephone` varchar(10) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Role` varchar(10) DEFAULT 'User',
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfor`
--

INSERT INTO `userinfor` (`Email`, `Name`, `Telephone`, `Address`, `Role`, `Password`) VALUES
('admin@gmail.com', 'ADMIN', '0967123452', 'Some where in university', 'Admin', '1'),
('user@gmail.com', 'UserName', '0967123456', '123 street 789 district 10', 'User', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `orderinfor`
--
ALTER TABLE `orderinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productinfor`
--
ALTER TABLE `productinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfor`
--
ALTER TABLE `userinfor`
  ADD PRIMARY KEY (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orderinfor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
