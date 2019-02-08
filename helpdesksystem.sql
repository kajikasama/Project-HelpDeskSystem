-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 06:13 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `adminnama` text NOT NULL,
  `adminemail` varchar(20) NOT NULL,
  `adminalamat` text NOT NULL,
  `adminusername` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `costumerid` int(20) NOT NULL,
  `costumernama` varchar(50) NOT NULL,
  `costumeremail` varchar(50) NOT NULL,
  `costumeralamat` text NOT NULL,
  `costumertelepon` varchar(16) NOT NULL,
  `costumerusername` varchar(50) NOT NULL,
  `costumerpassword` varchar(50) NOT NULL,
  `costumertanggaldaftar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(30) NOT NULL,
  `staffnama` text NOT NULL,
  `staffemail` varchar(50) NOT NULL,
  `staffalamat` text NOT NULL,
  `staffusername` varchar(50) NOT NULL,
  `staffpassword` varchar(50) NOT NULL,
  `staffidstaffcatagory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffcategory`
--

CREATE TABLE `staffcategory` (
  `staffcategoryid` int(20) NOT NULL,
  `staffcategorynama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticketid` varchar(20) NOT NULL,
  `ticketidcostumer` int(20) NOT NULL,
  `ticketidticketcategory` varchar(20) NOT NULL,
  `ticketjudul` text NOT NULL,
  `ticketketerangan` text NOT NULL,
  `tickettanggal` varchar(20) NOT NULL,
  `ticketstatus` text NOT NULL,
  `ticketidstaff` int(20) NOT NULL,
  `ticketreply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticketcategory`
--

CREATE TABLE `ticketcategory` (
  `ticketcategoryid` int(20) NOT NULL,
  `ticketcategorynama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`,`adminemail`,`adminusername`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`,`staffemail`,`staffusername`);

--
-- Indexes for table `staffcategory`
--
ALTER TABLE `staffcategory`
  ADD PRIMARY KEY (`staffcategoryid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketid`,`ticketidcostumer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
