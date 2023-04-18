-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 18, 2023 at 07:07 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Starlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `CMS`
--

CREATE TABLE `CMS` (
  `Info1ID` int(255) NOT NULL,
  `Info1` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CMS`
--

INSERT INTO `CMS` (`Info1ID`, `Info1`) VALUES
(1, 'Reis jij graag? Met Starlink\'s Portability add-on en Roam heb je overal toegang tot snel en betrouwbaar internet met lage latency. Neem je Starlink-apparatuur gemakkelijk mee en pauzeer en betaal alleen voor de periode waarin je internet nodig hebt met Roam. Ideaal voor werken op afstand, streamen en gamen tijdens het reizen.'),
(2, 'this is a testing text i hope this works'),
(3, 'this is a testing text i hope this works');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefoon` varchar(20) NOT NULL,
  `Opmerking` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`Name`, `Email`, `Telefoon`, `Opmerking`) VALUES
('Allard', 'allarddepedo@gmail.com', '03537265323', 'nvt'),
('Allard', 'allarddepedo@gmail.com', '03537265323', 'nvt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CMS`
--
ALTER TABLE `CMS`
  ADD PRIMARY KEY (`Info1ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CMS`
--
ALTER TABLE `CMS`
  MODIFY `Info1ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
