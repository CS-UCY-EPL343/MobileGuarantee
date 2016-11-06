-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2016 at 09:17 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MicroPro`
--

-- --------------------------------------------------------

--
-- Table structure for table `Corporation`
--

CREATE TABLE `Corporation` (
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `numberCorporation` int(6) NOT NULL,
  `name` varchar(15) COLLATE utf8_bin NOT NULL,
  `AFM` varchar(15) COLLATE utf8_bin NOT NULL,
  `Address` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(16) COLLATE utf8_bin NOT NULL,
  `telNumber` int(8) NOT NULL,
  `category` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `Receipt`
--

CREATE TABLE `Receipt` (
  `serialNo` varchar(20) COLLATE utf8_bin NOT NULL,
  `modelNo` varchar(20) COLLATE utf8_bin NOT NULL,
  `barcode` int(15) NOT NULL,
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `buyDay` datetime NOT NULL,
  `expiryDate` datetime NOT NULL,
  `constructor` varchar(20) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `receiptNo` varchar(20) COLLATE utf8_bin NOT NULL,
  `factoryQuarantee` varchar(20) COLLATE utf8_bin NOT NULL,
  `invoiceNo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `incCustomerNumber` int(6) NOT NULL,
  `name` varchar(15) COLLATE utf8_bin NOT NULL,
  `surname` varchar(15) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `telNumber` int(8) NOT NULL,
  `password` varchar(16) COLLATE utf8_bin NOT NULL,
  `category` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Corporation`
--
ALTER TABLE `Corporation`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Receipt`
--
ALTER TABLE `Receipt`
  ADD PRIMARY KEY (`serialNo`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
