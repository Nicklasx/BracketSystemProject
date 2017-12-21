-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 21. 12 2017 kl. 10:18:20
-- Serverversion: 10.1.28-MariaDB
-- PHP-version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bracketsystem`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `hold`
--

CREATE TABLE `hold` (
  `ID` int(11) NOT NULL,
  `HoldNavn` varchar(255) NOT NULL,
  `MedlemID` varchar(255) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `hold`
--

INSERT INTO `hold` (`ID`, `HoldNavn`, `MedlemID`, `Created`, `modified`) VALUES
(3, 'nej', '3', '2017-12-20 11:22:42', '2017-12-20 11:22:42'),
(4, 'enj', '3,19', '2017-12-20 11:23:12', '2017-12-20 11:23:12'),
(6, 'ej', '3', '2017-12-20 11:33:08', '2017-12-20 11:33:08'),
(7, 'ko', '3', '2017-12-21 08:33:42', '2017-12-21 08:33:42');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Mobil nummer` bigint(20) NOT NULL,
  `Fornavn` varchar(255) NOT NULL,
  `Efternavn` varchar(255) NOT NULL,
  `GamerTag` varchar(255) NOT NULL,
  `Holdleder` varchar(10) DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`, `E-mail`, `Mobil nummer`, `Fornavn`, `Efternavn`, `GamerTag`, `Holdleder`, `Created`, `modified`) VALUES
(3, 'ni', 'ni', 'ni', 13, 'ni', 'ni', 'ni', '', '2017-12-19 11:52:02', '2017-12-19 11:52:02'),
(19, 'in', 'ni', 'in', 0, 'ni', 'ni', 'in', '', '2017-12-20 11:09:19', '2017-12-20 11:09:19');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `placering`
--

CREATE TABLE `placering` (
  `ID` int(11) NOT NULL,
  `HoldID` int(11) NOT NULL,
  `HoldPlacering` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `hold`
--
ALTER TABLE `hold`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MedlemID` (`MedlemID`);

--
-- Indeks for tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks for tabel `placering`
--
ALTER TABLE `placering`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `HoldPlacering` (`HoldID`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `hold`
--
ALTER TABLE `hold`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tilføj AUTO_INCREMENT i tabel `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tilføj AUTO_INCREMENT i tabel `placering`
--
ALTER TABLE `placering`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
