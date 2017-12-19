-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 19. 12 2017 kl. 09:40:45
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
  `MedlemID` int(11) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kommendekampe`
--

CREATE TABLE `kommendekampe` (
  `ID` int(11) NOT NULL,
  `Tidspunkt` datetime NOT NULL,
  `HoldID` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Holdleder` varchar(10) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indeks for tabel `kommendekampe`
--
ALTER TABLE `kommendekampe`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `HoldSpil` (`HoldID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `kommendekampe`
--
ALTER TABLE `kommendekampe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `placering`
--
ALTER TABLE `placering`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `hold`
--
ALTER TABLE `hold`
  ADD CONSTRAINT `Medlemmer` FOREIGN KEY (`MedlemID`) REFERENCES `login` (`ID`);

--
-- Begrænsninger for tabel `kommendekampe`
--
ALTER TABLE `kommendekampe`
  ADD CONSTRAINT `HoldSpil` FOREIGN KEY (`HoldID`) REFERENCES `hold` (`ID`);

--
-- Begrænsninger for tabel `placering`
--
ALTER TABLE `placering`
  ADD CONSTRAINT `HoldPlacering` FOREIGN KEY (`HoldID`) REFERENCES `hold` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
