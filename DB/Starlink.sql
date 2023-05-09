-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 09, 2023 at 07:13 AM
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
(1, '** updated HET MEEST GEAVANCEERDE BREEDBAND SATELLIETINTERNET TER WERELD\r\nStarlink is \'s werelds eerste en grootste satellietconstellatie die gebruikmaakt van een lage baan om de aarde om breedbandinternet te leveren dat geschikt is voor streaming, online gamen, videogesprekken en meer.\r\n\r\nStarlink maakt gebruik van geavanceerde satellieten en gebruikershardware. Dankzij onze ruime ervaring met zowel ruimtevaartuigen als operaties in banen om de aarde levert Starlink snel internet met een lage latency aan gebruikers overal ter wereld.\r\nHOE STARLINK WERKT\r\nDe meeste satelliet-internetservices komen van enkelvoudige geostationaire satellieten in een baan om de planeet op 35.786 km hoogte. Als gevolg daarvan is de tijd voor dataoverdracht tussen de gebruiker en de satelliet - ook bekend als latency - hoog, waardoor het bijna onmogelijk is om streaming, online gaming, videogesprekken of andere activiteiten met hoge datasnelheid te ondersteunen.\r\n\r\nStarlink is een constellatie van duizenden satellieten die veel dichter om de aarde heen draaien, op ongeveer 550 km afstand, en de hele wereld bestrijken. Omdat Starlink-satellieten zich in een lage baan bevinden is de latency aanzienlijk lager; ongeveer 25 ms versus 600 ms of meer.    '),
(2, 'Betrouwbaar internet voor reizigers met Starlink'),
(3, 'Reis jij graag? Met Starlink\'s Portability add-on en Roam heb je overal toegang tot snel en betrouwbaar internet met lage latency. Neem je Starlink-apparatuur gemakkelijk mee en pauzeer en betaal alleen voor de periode waarin je internet nodig hebt met Roam. Ideaal voor werken op afstand, streamen en gamen tijdens het reizen.'),
(4, 'Flexibiliteit'),
(5, 'Starlink biedt flexibiliteit en eerlijke voorwaarden voor hun klanten door geen langetermijncontracten aan te bieden en prijzen naar behoefte aan te passen. Daarnaast kunnen klanten de service 30 dagen uitproberen en deze op elk moment annuleren zonder verplichtingen.');

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
  MODIFY `Info1ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
