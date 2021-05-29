-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 09:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `book11`
--

CREATE TABLE `book11` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book12`
--

CREATE TABLE `book12` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book13`
--

CREATE TABLE `book13` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book14`
--

CREATE TABLE `book14` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book15`
--

CREATE TABLE `book15` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book16`
--

CREATE TABLE `book16` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book17`
--

CREATE TABLE `book17` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book18`
--

CREATE TABLE `book18` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book21`
--

CREATE TABLE `book21` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book22`
--

CREATE TABLE `book22` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book23`
--

CREATE TABLE `book23` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book24`
--

CREATE TABLE `book24` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book25`
--

CREATE TABLE `book25` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book26`
--

CREATE TABLE `book26` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book27`
--

CREATE TABLE `book27` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book28`
--

CREATE TABLE `book28` (
  `Id` int(11) NOT NULL,
  `book` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(11) NOT NULL,
  `Book` varchar(200) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `Book`, `sid`, `cid`) VALUES
(1, 'web1a.JPG', 1, 1),
(13, 'saloon.jpg', 2, 3),
(14, 'WhatsApp Image 2020-10-22 at 4.57.58 PM.jpeg', 2, 2),
(15, 'Screenshot (168).png', 2, 2),
(16, 'pnav.jpeg', 2, 2),
(17, 'pnav.jpeg', 2, 2),
(18, 'pnav.jpeg', 2, 2),
(19, 'my card.jpg', 1, 2),
(20, 'my card.jpg', 1, 2),
(21, 'my card (1).ai', 1, 2),
(22, 'ITAP2003-FinalAssessment-S22020.docx', 3, 2),
(23, 'appdev.jpg', 3, 2),
(24, 'ITAP3010 - Project (2).docx', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(6) UNSIGNED NOT NULL,
  `userId` int(6) UNSIGNED DEFAULT NULL,
  `courseTitle` varchar(30) NOT NULL,
  `courseSubscribers` int(11) DEFAULT NULL,
  `courseRating` int(11) DEFAULT NULL,
  `totalVideoNumber` int(11) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phone`, `message`) VALUES
('Fariha', 'fariha@gmail.com', '55145416514', 'Hello world'),
('asdsa', 'asdas', 'asd', 'asd'),
('Hafsa', 'hafsa@gmail.com', '555445', 'Hello world'),
('Marium', 'marium@gmail.com', '6545412521', 'Hello world');

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE `softwares` (
  `Id` int(11) NOT NULL,
  `software` varchar(200) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`Id`, `software`, `sid`, `cid`) VALUES
(1, 'ising-model.docx', 3, 2),
(2, 'Final Project ITAP2003 (1).pdf', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `u_name`, `u_pass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `videoId` int(6) UNSIGNED NOT NULL,
  `courseId` int(6) UNSIGNED DEFAULT NULL,
  `userId` int(6) UNSIGNED DEFAULT NULL,
  `videoTitle` varchar(30) NOT NULL,
  `videoWatched` int(11) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book11`
--
ALTER TABLE `book11`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `book12`
--
ALTER TABLE `book12`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `book13`
--
ALTER TABLE `book13`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `book14`
--
ALTER TABLE `book14`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `book15`
--
ALTER TABLE `book15`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`videoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book11`
--
ALTER TABLE `book11`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book12`
--
ALTER TABLE `book12`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book13`
--
ALTER TABLE `book13`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book14`
--
ALTER TABLE `book14`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book15`
--
ALTER TABLE `book15`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `videoId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
