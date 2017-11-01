-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2017 at 03:52 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2271749_nineleaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `EID` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Designation` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Manager` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`EID`, `Name`, `Designation`, `Manager`) VALUES
(1, 'Anchal', 'CEO', ' '),
(2, 'Anika', 'COO', 'Anchal'),
(3, 'Ashlesha', 'VP Sales', 'Anchal'),
(4, 'Birju', 'VP Marketing', 'Anchal'),
(5, 'Devak', 'Head (HR)', 'Anchal'),
(6, 'Phani', 'Head (Finance)', 'Anchal'),
(7, 'Hardik', 'Manager Sales', 'Ashlesha'),
(8, 'Jaganmay', 'Manager Marketing', 'Birju'),
(9, 'Lakhan', 'Recruitment Manager', 'Devak'),
(10, 'Naamdev', 'L&D Manager', 'Devak'),
(11, 'Pradosh', 'Facilities', 'Devak'),
(12, 'Sachit', 'CTO', 'Anchal'),
(13, 'Udit', 'Accounts Manager', 'Anika'),
(14, 'Yatiyasa', 'Business Analyst', 'Anika'),
(15, 'Zena', 'Scrum Manager', 'Anika'),
(16, 'Aahna', 'Head (Quality)', 'Anika'),
(17, 'Yashraj', 'Quality Manager', 'Aahna'),
(18, 'Veena', 'Tester', 'Yashraj'),
(19, 'Torsha', 'Mobile Tester', 'Yashraj'),
(20, 'Ruchita', 'Tester', 'Yashraj'),
(21, 'Oindrila', 'Mobile Tester', 'Yashraj'),
(22, 'Madhulika', 'Head(Development)', 'Anika'),
(23, 'Kimaya', 'Developer', 'Madhulika'),
(24, 'Indu', 'Developer', 'Madhulika'),
(25, 'Gayatri', 'Developer', 'Madhulika'),
(26, 'Ekaa', 'Solution Architect', 'Sachit'),
(27, 'Chitral', 'Solution Architect', 'Sachit'),
(28, 'Shivkant Dohaliya', 'Tester', 'Anchal'),
(29, 'Manu Saraswat', 'Tester', 'Shivkant Dohaliya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_email`, `user_password`) VALUES
('dohaliyashivkant@gmail.com', 'Shiv@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`EID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
