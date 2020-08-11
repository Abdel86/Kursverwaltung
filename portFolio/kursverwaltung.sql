-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Aug 2020 um 20:40
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kursverwaltung`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dozent`
--

CREATE TABLE `dozent` (
  `dozentID` int(11) NOT NULL,
  `dozentName` varchar(100) NOT NULL,
  `dozentEmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `dozent`
--

INSERT INTO `dozent` (`dozentID`, `dozentName`, `dozentEmail`, `password`) VALUES
(1, 'Kressler', '', ''),
(2, 'Hinrich', '', ''),
(3, 'Lenkau', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurs`
--

CREATE TABLE `kurs` (
  `kursID` int(11) NOT NULL,
  `kursNummer` int(11) NOT NULL,
  `kursBeginn` date NOT NULL,
  `kursEnde` date NOT NULL,
  `teilnehmerAnzahl` int(11) NOT NULL,
  `kursCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `kurs`
--

INSERT INTO `kurs` (`kursID`, `kursNummer`, `kursBeginn`, `kursEnde`, `teilnehmerAnzahl`, `kursCreated`) VALUES
(1, 12452, '2020-08-12', '2020-08-19', 9, '2020-08-08 23:00:12'),
(2, 1221, '2020-08-18', '2020-08-19', 8, '2020-08-08 23:02:47'),
(3, 1221, '2020-08-19', '2020-08-20', 5, '2020-08-08 23:03:22'),
(4, 22211, '2020-08-22', '2020-08-14', 11, '2020-08-08 23:04:28'),
(5, 5555555, '2020-08-12', '2020-08-11', 10, '2020-08-08 23:06:42'),
(6, 666666, '2020-08-05', '2020-08-04', 9, '2020-08-08 23:07:56'),
(7, 1010101, '2020-08-05', '0000-00-00', 122, '2020-08-10 19:43:18'),
(8, 0, '0000-00-00', '0000-00-00', 0, '2020-08-11 13:26:00'),
(9, 0, '0000-00-00', '0000-00-00', 0, '2020-08-11 13:27:15'),
(10, 0, '0000-00-00', '0000-00-00', 0, '2020-08-11 14:10:39'),
(11, 0, '0000-00-00', '0000-00-00', 0, '2020-08-11 14:13:38'),
(12, 1111111111, '2020-07-29', '0000-00-00', 10, '2020-08-11 14:18:24'),
(13, 1111111111, '2020-08-20', '0000-00-00', 10, '2020-08-11 14:18:56'),
(14, 1111111111, '2020-08-06', '2020-08-26', 100, '2020-08-11 14:19:10'),
(15, 1986, '2020-08-13', '2020-08-21', 120, '2020-08-11 14:39:59'),
(16, 88888888, '2020-07-29', '2020-08-20', 124, '2020-08-11 16:51:06');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pruefung`
--

CREATE TABLE `pruefung` (
  `pruefungID` int(11) NOT NULL,
  `pruefungNummer` int(11) NOT NULL,
  `pruefungBeginn` date NOT NULL,
  `pruefungEnde` date NOT NULL,
  `teilnehmerAnzahl` int(11) NOT NULL,
  `pruefungCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `pruefung`
--

INSERT INTO `pruefung` (`pruefungID`, `pruefungNummer`, `pruefungBeginn`, `pruefungEnde`, `teilnehmerAnzahl`, `pruefungCreated`) VALUES
(1, 22211, '2020-08-05', '2020-08-20', 8, '2020-08-08 23:19:58'),
(2, 1111111111, '2020-08-19', '2020-08-20', 100, '2020-08-11 14:27:59'),
(3, 222222, '2020-08-20', '2020-08-13', 10, '2020-08-11 14:30:48'),
(4, 0, '2020-09-04', '2020-08-13', 152, '2020-08-11 14:32:28'),
(5, 1986, '2020-08-15', '2020-08-19', 120, '2020-08-11 14:41:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teilnehmer`
--

CREATE TABLE `teilnehmer` (
  `teilnehmerID` int(11) NOT NULL,
  `teilnehmerName` varchar(100) NOT NULL,
  `teilnehmerEmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verwalter`
--

CREATE TABLE `verwalter` (
  `verwalterID` int(11) NOT NULL,
  `verwalterUsername` varchar(150) NOT NULL,
  `verwalterEmail` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kursID` int(11) NOT NULL,
  `pruefungsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `dozent`
--
ALTER TABLE `dozent`
  ADD PRIMARY KEY (`dozentID`);

--
-- Indizes für die Tabelle `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`kursID`),
  ADD KEY `TeilnehmerID` (`teilnehmerAnzahl`);

--
-- Indizes für die Tabelle `pruefung`
--
ALTER TABLE `pruefung`
  ADD PRIMARY KEY (`pruefungID`);

--
-- Indizes für die Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD PRIMARY KEY (`teilnehmerID`);

--
-- Indizes für die Tabelle `verwalter`
--
ALTER TABLE `verwalter`
  ADD PRIMARY KEY (`verwalterID`),
  ADD KEY `kursID` (`kursID`),
  ADD KEY `pruefungsID` (`pruefungsID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `dozent`
--
ALTER TABLE `dozent`
  MODIFY `dozentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `kurs`
--
ALTER TABLE `kurs`
  MODIFY `kursID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `pruefung`
--
ALTER TABLE `pruefung`
  MODIFY `pruefungID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  MODIFY `teilnehmerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `verwalter`
--
ALTER TABLE `verwalter`
  MODIFY `verwalterID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
