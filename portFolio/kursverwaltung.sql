-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Aug 2020 um 15:35
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
(12, 'Andreas', '', ''),
(13, 'Hessler', '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurs`
--

CREATE TABLE `kurs` (
  `kursID` int(11) NOT NULL,
  `kursNummer` int(11) NOT NULL,
  `kursName` varchar(255) NOT NULL,
  `kursBeginn` date NOT NULL,
  `kursEnde` date NOT NULL,
  `teilnehmerAnzahl` int(11) NOT NULL,
  `dozentID` int(11) NOT NULL,
  `kosten` decimal(10,0) NOT NULL,
  `kursCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `kurs`
--

INSERT INTO `kurs` (`kursID`, `kursNummer`, `kursName`, `kursBeginn`, `kursEnde`, `teilnehmerAnzahl`, `dozentID`, `kosten`, `kursCreated`) VALUES
(67, 1986, 'HTML', '2020-08-06', '2020-08-13', 10, 12, '0', '2020-08-15 13:28:22'),
(68, 681425, 'CSS', '2020-08-26', '2020-09-26', 10, 12, '0', '2020-08-15 13:28:46'),
(69, 12452, 'Abdessamad ds', '2020-07-29', '2020-07-29', 10, 12, '0', '2020-08-15 13:30:13'),
(70, 123456, 'HTML', '2020-08-06', '2020-08-13', 12, 12, '0', '2020-08-15 15:05:19'),
(71, 112233, 'OOP', '2020-08-14', '2020-08-15', 2, 12, '0', '2020-08-15 15:09:20'),
(72, 198622, 'HTML', '2020-08-12', '2020-08-22', 20, 12, '0', '2020-08-15 17:50:15'),
(73, 198622, 'HTML', '2020-08-05', '2020-08-22', 12, 12, '0', '2020-08-15 19:16:32');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pruefung`
--

CREATE TABLE `pruefung` (
  `pruefungID` int(11) NOT NULL,
  `pruefungNummer` int(11) NOT NULL,
  `pruefungName` varchar(255) NOT NULL,
  `pruefungBeginn` date NOT NULL,
  `pruefungEnde` date NOT NULL,
  `teilnehmerAnzahl` int(11) NOT NULL,
  `dozentID` int(11) NOT NULL,
  `kosten` decimal(10,0) NOT NULL,
  `pruefungCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `pruefung`
--

INSERT INTO `pruefung` (`pruefungID`, `pruefungNummer`, `pruefungName`, `pruefungBeginn`, `pruefungEnde`, `teilnehmerAnzahl`, `dozentID`, `kosten`, `pruefungCreated`) VALUES
(13, 131452, 'Java', '2020-07-29', '2020-08-04', 6, 12, '50', '2020-08-15 10:20:48'),
(14, 111111, 'dsds', '2020-08-04', '2020-09-09', 6, 12, '100', '2020-08-15 10:59:19'),
(15, 101010, 'Projekt', '2020-08-19', '2020-08-30', 20, 12, '0', '2020-08-15 13:25:24'),
(16, 1111111111, 'Zoubayr Aouam', '2020-08-05', '2020-08-11', 11, 12, '0', '2020-08-15 13:30:30');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teilnehmer`
--

CREATE TABLE `teilnehmer` (
  `teilnehmerID` int(11) NOT NULL,
  `teilnehmerName` varchar(100) NOT NULL,
  `teilnehmerEmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kursID` int(11) DEFAULT NULL,
  `pruefungID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `teilnehmer`
--

INSERT INTO `teilnehmer` (`teilnehmerID`, `teilnehmerName`, `teilnehmerEmail`, `password`, `kursID`, `pruefungID`) VALUES
(5, 'Abdessamad', 'a@b.c', '', 67, NULL),
(6, 'Abdessamad Aouam', 'a.aouam@hotmail.de', '', 67, NULL),
(7, 'Abdessamad Aouam', 'a.aouam@hotmail.de', '', 67, NULL),
(8, 'Abdessamad Aouam', 'a.aouam@hotmail.de', '', 67, NULL);

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
  ADD KEY `TeilnehmerID` (`teilnehmerAnzahl`),
  ADD KEY `dozentID` (`dozentID`);

--
-- Indizes für die Tabelle `pruefung`
--
ALTER TABLE `pruefung`
  ADD PRIMARY KEY (`pruefungID`),
  ADD KEY `dozentID` (`dozentID`);

--
-- Indizes für die Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD PRIMARY KEY (`teilnehmerID`),
  ADD KEY `kursID` (`kursID`),
  ADD KEY `pruefungID` (`pruefungID`);

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
  MODIFY `dozentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `kurs`
--
ALTER TABLE `kurs`
  MODIFY `kursID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT für Tabelle `pruefung`
--
ALTER TABLE `pruefung`
  MODIFY `pruefungID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  MODIFY `teilnehmerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `verwalter`
--
ALTER TABLE `verwalter`
  MODIFY `verwalterID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `kurs`
--
ALTER TABLE `kurs`
  ADD CONSTRAINT `kurs_ibfk_1` FOREIGN KEY (`dozentID`) REFERENCES `dozent` (`dozentID`);

--
-- Constraints der Tabelle `pruefung`
--
ALTER TABLE `pruefung`
  ADD CONSTRAINT `pruefung_ibfk_1` FOREIGN KEY (`dozentID`) REFERENCES `dozent` (`dozentID`);

--
-- Constraints der Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD CONSTRAINT `teilnehmer_ibfk_1` FOREIGN KEY (`kursID`) REFERENCES `kurs` (`kursID`),
  ADD CONSTRAINT `teilnehmer_ibfk_2` FOREIGN KEY (`pruefungID`) REFERENCES `pruefung` (`pruefungID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
