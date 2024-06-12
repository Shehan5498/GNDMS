-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 07:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gndmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UserType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UserType`) VALUES
(2, 'Admin', 'admin', 1234596321, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2023-03-16 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcommunity`
--

CREATE TABLE `tblcommunity` (
  `ID` int(11) NOT NULL,
  `CommunityCode` varchar(200) DEFAULT NULL,
  `CommunityName` varchar(250) DEFAULT NULL,
  `NatureofORG` varchar(45) DEFAULT NULL,
  `Addedby` varchar(100) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcommunity`
--

INSERT INTO `tblcommunity` (`ID`, `CommunityCode`, `CommunityName`, `NatureofORG`, `Addedby`, `CreationDate`) VALUES
(11, '0119', 'police', 'Security', 'admin', '2024-06-11 21:56:31'),
(12, '0014', 'kapruka', 'commercial', 'admin', '2024-06-12 00:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About us', 'Grama Niladhari Division Management System is web-based application which store the data of Grama Niladhari Divisions of Sri lanka. This system helps the people to view the details of Grama Niladhari Division online.', NULL, NULL, '2024-06-10 18:54:16'),
(2, 'contactus', 'Contact Us', 'Sabaragamuwa University of Sri Lanka, P.O. Box 02, Belihuloya, 70140, Sri Lanka.', 'phoenixinfo@gmail.com', 112345678, '2024-06-10 18:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblpopulation`
--

CREATE TABLE `tblpopulation` (
  `ID` int(5) NOT NULL,
  `NIC` int(15) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `CivilStatus` varchar(250) DEFAULT NULL,
  `Ethnicity` varchar(250) DEFAULT NULL,
  `Religion` varchar(150) DEFAULT NULL,
  `HomeRegCode` varchar(125) DEFAULT NULL,
  `NameofFather` varchar(250) DEFAULT NULL,
  `ElectoralRegNo` varchar(45) DEFAULT NULL,
  `MobileNumber` varchar(45) DEFAULT NULL,
  `HousingSituation` varchar(45) DEFAULT NULL,
  `TypeofAidreceived` varchar(45) DEFAULT NULL,
  `JobNature` varchar(45) DEFAULT NULL,
  `dateofjoiningindivision` date DEFAULT NULL,
  `BirthCertificatePic` varchar(250) DEFAULT NULL,
  `AddedBy` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpopulation`
--

INSERT INTO `tblpopulation` (`ID`, `NIC`, `Name`, `Address`, `DateofBirth`, `Gender`, `CivilStatus`, `Ethnicity`, `Religion`, `HomeRegCode`, `NameofFather`, `ElectoralRegNo`, `MobileNumber`, `HousingSituation`, `TypeofAidreceived`, `JobNature`, `dateofjoiningindivision`, `BirthCertificatePic`, `AddedBy`, `CreationDate`) VALUES
(8, 2147483647, '', '280/1,Eksath Mawatha,Siyambalape.', '0000-00-00', '0', 'single', 'Kadawatha', 'buddhism', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', 'admin', '2024-06-11 23:48:05'),
(9, 2147483647, '', '161,A, dompe', '0000-00-00', '0', 'single', 'sinhala', 'buddhism', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', 'admin', '2024-06-11 23:50:56'),
(10, 2147483647, '', '280/1,Eksath Mawatha,Siyambalape.', '0000-00-00', '', 'single', 'sinhala', 'buddhism', '', '', '', '', '', '', '', '0000-00-00', '', 'admin', '2024-06-12 00:00:58'),
(11, 2147483647, '', '280/1,Eksath Mawatha,Siyambalape.', '0000-00-00', '', 'single', 'sinhala', 'buddhism', '', '', '', '', '', '', '', '0000-00-00', '', 'admin', '2024-06-12 00:03:10'),
(12, 2147483647, '', '280/1,Eksath Mawatha,Siyambalape.', '0000-00-00', '', 'single', 'sinhala', 'buddhism', '', '', '', '', '', '', '', '0000-00-00', '', 'admin', '2024-06-12 00:13:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcommunity`
--
ALTER TABLE `tblcommunity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpopulation`
--
ALTER TABLE `tblpopulation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcommunity`
--
ALTER TABLE `tblcommunity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpopulation`
--
ALTER TABLE `tblpopulation`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
