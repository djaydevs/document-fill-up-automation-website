-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 02:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_residents`
--

CREATE TABLE `table_residents` (
  `rin` int(100) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `mi` varchar(500) NOT NULL,
  `housenum` varchar(500) NOT NULL,
  `street` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `age` varchar(500) NOT NULL,
  `yearofstay` varchar(500) NOT NULL,
  `birthday` varchar(500) NOT NULL,
  `birthplace` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_residents`
--

INSERT INTO `table_residents` (`rin`, `lname`, `fname`, `mi`, `housenum`, `street`, `gender`, `age`, `yearofstay`, `birthday`, `birthplace`, `contact`) VALUES
(202201, 'Avendaño', 'Reymart', 'V', '306', 'Saint Jude', 'Male', '24', '1998', '1998-02-16', 'SJDM ', '09551909296'),
(202202, 'Flores', 'Danny Jay', 'M', '13', 'Cornelia', 'Male', '20', '2002', '2002-04-15', 'Bulacan ', '09951866751'),
(202203, 'Senining', 'Jovie', 'P', '22', 'Maya', 'Female', '21', '2001', '2001-08-09', 'Bulacan ', '09912345678'),
(202204, 'Lucero', 'Alonzo', 'E', '103', 'Oriole', 'Male', '20', '2002', '2002-06-15', 'Bulacan ', '09992223333');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `reqid` int(100) NOT NULL,
  `residentnum` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `document` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`reqid`, `residentnum`, `name`, `purpose`, `document`) VALUES
(23, 202201, 'Reymart Avendano', 'Scholarship', 'Certificate of Indgency');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_residents`
--
ALTER TABLE `table_residents`
  ADD PRIMARY KEY (`rin`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_residents`
--
ALTER TABLE `table_residents`
  MODIFY `rin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202205;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `reqid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
