-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 01:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE `adminregistration` (
  `Id` int(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `Phone_number` bigint(20) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Institute_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregistration`
--

INSERT INTO `adminregistration` (`Id`, `First_Name`, `Last_Name`, `Email`, `Password`, `Birthdate`, `Phone_number`, `Gender`, `Institute_Name`) VALUES
(1, 'Ahmed', 'Shuvo', 'riahmedkhan@gmail.com', '$2y$10$e5xikLX441jkkD/HmuW6KuY9qc.crmE3LwNowT2BBbRtbopOxuuMm', '1999-11-18', 1750114128, 'm', 'Prime University');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`Id`, `Title`, `Description`, `Image`) VALUES
(22, 'Inside PE firm True North’s investments in late-stage Indian startups', '﻿Zomato﻿’s initial public offering in 2021 was a defining moment for Indian startups as the first internet-tech company to make a stock market bid. Since then, a number of late-stage startups have made a beeline for public markets.\r\n\r\nProportionately, interest in late-stage startups and pre-IPO deals has seen an uptick, and, after a two-year decline, private equity firms are finally returning to the ecosystem.\r\n\r\nGlobal PE firms such as Blackstone, KKR, Carlyle and TPG have always actively invested in mid- to late-stage, and even some promising early-stage, startups. But in the Indian diaspora, PE funds have historically kept away.\r\n\r\nWith bigger startups finally getting their public market listing plans in place, Indian PE funds are on an active hunt to find the next big bet, investing in businesses that have proved their market values.\r\n\r\nMumbai-based ﻿True North﻿ is one such PE firm.\r\n\r\nFounded in 1999, True North mostly invests in mid-sized, India-focussed businesses across four sectors: healthcare, financial services, consumer, and technology. It has invested around $3 billion across six funds so far.\r\nIts first venture into the startup space, in terms of investment, was ﻿PolicyBazaar﻿ in 2017, where it invested around $50 million in total funding. It sold a part of its stake in the insurance aggregator in 2021, but not before setting up the company for an initial public offering.\r\n\r\n', 'images/Screenshot 2022-08-13 022923.png'),
(23, 'Act on preventive measures at the earliest to reduce exposure to cyberattacks, say experts', 'Enterprises are transforming to accommodate the hybrid workforce, data center cloud migration, and SOC automation. Besides, the adoption of a hybrid cloud has spurred a growing demand for consumption-based IT, where the cloud consumption models are making their way into on-premises data centers, creating opportunities for channel partners. While resorting to the various modes of cloud consumption, enterprises are being habituated with cloud security as a practice.\r\n\r\nResponding to this, several security vendors have begun to recommend Zero Trust for the cloud as an approach to cybersecurity that simplifies risk management to a single-use case. Irrespective of the situation, user, user location, and access method, the security becomes one single use case with the most extreme cybersecurity checks, owing to Zero Trust.', 'images/Screenshot 2022-08-13 040755.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `posT_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id`, `Name`, `Comment`, `posT_id`) VALUES
(107, 'Rahid', 'Hello Guys', 22),
(108, 'Riad', 'THis is great', 22),
(109, 'Riad', 'Good News', 23);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `Post_ID` int(11) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `username`, `name`, `email`, `password`, `user_id`) VALUES
(19, 'saddasdasd', 'ad', 'abcd@gmail.com', '$2y$10$Vcf8GZf1RGqm5rG2U2U1ue8NbXZKeSfz/eL1yNAszao3l2TPHF2te', ''),
(20, 'Riad45', 'Riad Ahmed', 'riahmedkhan@gmail.com', '$2y$10$CMjSQPcijXf3TOvLaVHygOKXWKv2sfC95nCejX3u95.z2zOGvDsqW', 'Riad4501');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregistration`
--
ALTER TABLE `adminregistration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregistration`
--
ALTER TABLE `adminregistration`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
