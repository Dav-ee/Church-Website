-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 03:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cman`
--
CREATE DATABASE IF NOT EXISTS `cman` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cman`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `keyu` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Residence` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `ministry` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`keyu`, `fname`, `sname`, `lname`, `Gender`, `Birthday`, `Residence`, `pob`, `ministry`, `mobile`, `email`, `password`, `id`, `date`) VALUES
(1, 'Davies', 'Kiprono', 'Langat', 'Male', '2000-01-01', 'SEKU', 'Mombasa', 'Media and Instruments', 'G126/0633/2018', 'Davies.langatt@gmail.com', 'root', 'G126/0633/', '2020-02-21 16:06:06'),
(11, 'admin', 'admin', 'admin', 'Male', '1980-03-18', 'SEKU', 'Bungoma', 'Media and Instruments', 'G126/0633/2020', 'min@gmail.com', '', 'G126/0633/', '2020-03-22 08:39:53'),
(12, 'dfk', 'js', 'ws', 'Male', '2020-04-01', 's', 'Machakos', 'Mission & Evangelism', 'kd', 'joed%gdhd@edf', '', 'kd', '2020-03-23 11:26:08'),
(13, 'dfk', 'js', 'ws', 'Male', '2020-04-01', 's', 'Machakos', 'Mission & Evangelism', 'kdUR', '', '', 'kdUR', '2020-03-23 11:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors` (
  `key_id` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`key_id`, `fname`, `sname`, `gender`, `email`, `mobile`, `password`, `date`) VALUES
(1, 'davies', 'langat', 'Male', 'Zero@gmail.com', '0704988930', NULL, '2020-02-21 15:52:46'),
(2, 'Alphonce', 'Kiprotich', 'Male', 'AlphonceKip@gmail.com', '074563846', NULL, '2020-02-24 08:47:00'),
(3, 'peter', 'mwendwa', 'Male', 'ddsd@gmail.com', '0789678543', NULL, '2020-02-26 09:54:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`keyu`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`key_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `keyu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `key_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
