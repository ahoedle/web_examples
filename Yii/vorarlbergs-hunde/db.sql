-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 04. Aug 2013 um 19:12
-- Server Version: 5.5.25
-- PHP-Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `hunde`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `opening`
--

CREATE TABLE `opening` (
  `opening_id` int(11) NOT NULL,
  `weekday` int(11) DEFAULT NULL,
  `open1` time DEFAULT NULL,
  `close1` time DEFAULT NULL,
  `open2` time DEFAULT NULL,
  `close2` time DEFAULT NULL,
  `vet_id` int(11) NOT NULL,
  PRIMARY KEY (`opening_id`),
  KEY `fk_opening_vet_idx` (`vet_id`),
  KEY `vet_id` (`vet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `opening`
--

INSERT INTO `opening` (`opening_id`, `weekday`, `open1`, `close1`, `open2`, `close2`, `vet_id`) VALUES
(1, 1, '09:30:00', '11:00:00', '17:00:00', '19:30:00', 1),
(2, 2, '09:30:00', '11:00:00', '17:00:00', '19:30:00', 1),
(3, 3, '09:30:00', '11:00:00', '17:00:00', '19:30:00', 1),
(4, 4, '09:30:00', '11:00:00', '17:00:00', '19:30:00', 1),
(5, 5, '09:30:00', '11:00:00', '17:00:00', '19:30:00', 1),
(6, 6, '09:00:00', '11:00:00', '00:00:00', '00:00:00', 1),
(7, 1, '10:00:00', '11:00:00', '16:30:00', '19:00:00', 2),
(8, 2, '10:00:00', '11:00:00', '16:30:00', '19:00:00', 2),
(9, 3, '10:00:00', '11:00:00', NULL, NULL, 2),
(10, 4, '10:00:00', '11:00:00', '16:30:00', '19:00:00', 2),
(11, 5, '10:00:00', '11:00:00', '13:00:00', '15:00:00', 2),
(12, 6, '10:00:00', '11:00:00', NULL, NULL, 2),
(13, 1, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 3),
(14, 2, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 3),
(15, 3, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 3),
(16, 4, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 3),
(17, 5, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 3),
(18, 6, '10:00:00', '11:00:00', NULL, NULL, 3),
(19, 1, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 4),
(20, 2, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 4),
(21, 4, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 4),
(22, 5, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 4),
(23, 3, '00:00:00', '00:00:00', '17:00:00', '19:00:00', 4),
(24, 6, '09:00:00', '10:00:00', '00:00:00', '00:00:00', 4),
(25, 1, '08:00:00', '10:00:00', '17:00:00', '19:00:00', 5),
(26, 2, '08:00:00', '10:00:00', '17:00:00', '19:00:00', 5),
(27, 3, '08:00:00', '10:00:00', '17:00:00', '19:00:00', 5),
(28, 4, '08:00:00', '10:00:00', '17:00:00', '19:00:00', 5),
(29, 5, '08:00:00', '12:30:00', NULL, NULL, 5),
(30, 1, '10:00:00', '12:00:00', '17:00:00', '19:00:00', 6),
(31, 2, '10:00:00', '12:00:00', '17:00:00', '19:00:00', 6),
(32, 3, '10:00:00', '12:00:00', '17:00:00', '19:00:00', 6),
(33, 4, '10:00:00', '12:00:00', '17:00:00', '19:00:00', 6),
(34, 5, '10:00:00', '12:00:00', '17:00:00', '19:00:00', 6),
(35, 6, '10:00:00', '12:00:00', NULL, NULL, 6),
(36, 1, '09:00:00', '11:00:00', '16:00:00', '19:00:00', 7),
(37, 2, '09:00:00', '11:00:00', '16:00:00', '19:00:00', 7),
(38, 3, '09:00:00', '11:00:00', '16:00:00', '19:00:00', 7),
(39, 4, '09:00:00', '11:00:00', '16:00:00', '19:00:00', 7),
(40, 5, '09:00:00', '11:00:00', '16:00:00', '19:00:00', 7),
(41, 6, '09:00:00', '11:00:00', NULL, NULL, 7),
(42, 1, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 8),
(43, 2, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 8),
(44, 3, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 8),
(45, 4, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 8),
(46, 5, '09:00:00', '11:00:00', '17:00:00', '19:00:00', 8),
(47, 6, '10:00:00', '11:00:00', NULL, NULL, 8),
(48, 1, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 9),
(49, 2, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 9),
(50, 4, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 9),
(51, 5, '10:00:00', '12:00:00', '16:00:00', '18:00:00', 9),
(52, 3, NULL, NULL, '17:00:00', '19:00:00', 9),
(53, 6, '10:00:00', '12:00:00', NULL, NULL, 9),
(54, 1, NULL, NULL, '18:30:00', '20:00:00', 10),
(55, 2, NULL, NULL, '18:30:00', '20:00:00', 10),
(56, 3, NULL, NULL, '18:30:00', '20:00:00', 10),
(57, 4, NULL, NULL, '18:30:00', '20:00:00', 10),
(58, 1, '10:00:00', '11:00:00', '16:00:00', '18:00:00', 11),
(59, 2, '10:00:00', '11:00:00', '16:00:00', '18:00:00', 11),
(60, 3, '10:00:00', '11:00:00', '16:00:00', '18:00:00', 11),
(61, 4, '10:00:00', '11:00:00', '16:00:00', '18:00:00', 11),
(62, 5, '10:00:00', '11:00:00', '16:00:00', '18:00:00', 11),
(63, 6, '10:00:00', '11:00:00', NULL, NULL, 11),
(64, 1, NULL, NULL, '14:00:00', '15:00:00', 12),
(65, 3, NULL, NULL, '14:00:00', '15:00:00', 12),
(66, 5, NULL, NULL, '14:00:00', '15:00:00', 12),
(67, 2, '10:00:00', '11:00:00', '14:00:00', '15:00:00', 12),
(68, 6, '10:00:00', '11:00:00', NULL, NULL, 12),
(69, 1, NULL, NULL, '14:00:00', '16:00:00', 13),
(70, 2, NULL, NULL, '14:00:00', '16:00:00', 13),
(71, 4, NULL, NULL, '14:00:00', '16:00:00', 13),
(72, 5, NULL, NULL, '14:00:00', '16:00:00', 13),
(73, 1, '11:00:00', '12:00:00', '17:00:00', '18:30:00', 19),
(74, 2, '11:00:00', '12:00:00', '17:00:00', '18:30:00', 19),
(75, 3, '11:00:00', '12:00:00', '17:00:00', '18:30:00', 19),
(76, 4, '11:00:00', '12:00:00', NULL, NULL, 19),
(77, 5, '11:00:00', '12:00:00', '17:00:00', '18:30:00', 19),
(78, 6, NULL, NULL, NULL, NULL, 19);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vet`
--

CREATE TABLE `vet` (
  `vet_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `homepage` varchar(100) NOT NULL,
  `Notfaelle` varchar(100) NOT NULL,
  PRIMARY KEY (`vet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Daten für Tabelle `vet`
--

INSERT INTO `vet` (`vet_id`, `name`, `address`, `postcode`, `place`, `tel`, `fax`, `email`, `homepage`, `Notfaelle`) VALUES
(1, 'Tierklinik Planner-Winsauer', 'Schulgasse 41', 6850, 'Dornbirn', '0043 5572 35355', '0043 5572 35355', 'tierklinik_planner@aon.at', 'http://www.tierklinik-planner.at', 'In dringenden Fällen 24 Stunden telefonisch erreichbar, auch sonn- und feiertags'),
(2, 'Dr. Sylvia & Dr. Rudolf Tschabrun, Fachärzte für Kleintiere', 'Eiserweg 8', 6714, 'Nüziders', '0043 5552 66755', NULL, 'sylvia.rudolf.tschabrun@vol.at', '', ''),
(3, 'Tierärzte Team - Mascha von Hooff - Jürgen Muther - Wolfgang Studer', 'Pulverturmstraße 6', 6700, 'Bludenz', '0043 5552 68899 ', '0043 5552 68899 4', 'tieraerzte.team@aon.at', 'http://www.tieraerzte-team.com', 'Notfälle jederzeit unter 0043 5552 68899'),
(4, 'Kleintierpraxis Dr. Susan Holzer', 'Jahnstraße 23', 6890, 'Lustenau', '0043 5577 62779 ', '0043 5577 62779 4', '', 'http://www.kleintierpraxis-holzer.at', 'nach telefonischer Vereinbarung'),
(5, 'Kleintierpraxis Dr. Med. Vet. Jutta Kronewetter', 'Wallenmahd 8', 6850, 'Dornbirn', '0043 5572 54411', '0043 5572 54411 5', NULL, '', ''),
(6, 'Tierklinik Cepicka - Mag. Albert und Mag. Gabriele Cepicka', 'Walgaustraße 19', 6824, 'Schlins', '0043 5524 5100 0', '0043 5524 5100 6', 'cepicka@gmx.at', '', ''),
(7, 'Tierklinik Schwarzmann GmbH', 'Bifangstraße 79', 6930, 'Rankweil', '0043 5522 44264', '0043 5522 44264 75', 'dr.schwarzmann@tierklinik.at', 'http://www.tierklinik.at', 'auch außerhalb der Ordinationszeiten, Bitte um telefonische Voranmeldung'),
(8, 'Tierarztpraxis Zohman', 'Mockenstraße 67', 6971, 'Hard', '0043 5574 66466', '0043 5574 86326', 'praxis@zohmann.at', 'http://www.zohmann.at', '0043 676 3751501'),
(9, 'Kleintierpraxis Dr. Hilgartner & Dr. Sohler', 'Zellgasse 39b', 6890, 'Lustenau', '0043 5577 85202', '0043 5577 85266', NULL, 'http://www.kleintierpraxis-vorarlberg.at', '0043 5577 85202'),
(10, 'Burtscher Wolfgang Dipl-TA Dr', 'Spitalgasse 18', 6700, 'Bludenz', '0043 5552 32586', '0043 5552 32586', 'wolfgang.burtscher@utanet.at', '', ''),
(11, 'Die Tierärzte - Dr. Sutterlüty & Dr. Kohler GsbR.', 'Scheidbuchen  682', 6866, 'Andelsbuch', '0043 5512 26426', '0043 5512 26426 66', 'praxis@dietieraerzte.com', 'http://www.dietieraerzte.com', '0043 05512 26426 11'),
(12, 'Kieber Bernhard und Sonja', 'Silvrettastraße 16', 6780, 'Schruns', '0043 5556 77877', '0043 5556 77877-16', NULL, '', ''),
(13, 'Dr. Erich Schwarzmann', 'Rohnen 785', NULL, 'Alberschwende', '0043 5579 4738', NULL, 'praxis@miau.at', 'http://www.miau.at', 'telefonische Vereinbarung'),
(14, 'Fürst Karl Dr. med. vet. ', 'Holzackergasse 13', 6900, 'Bregenz', '0043 5574 83500', NULL, NULL, 'http://www.tierpension-fuerst.at/', ''),
(15, 'Lorenzin Herbert Dr. & Lorenzin Silke Mag.', 'Nr. 254', 6721, 'Thüringerberg', '0043 664 5026480', '0043 5550 22833 12', NULL, '', ''),
(17, 'Summer Michael Dipl-TA Dr.', 'Rudolf-von-Ems-Str 40c', 6845, 'Hohenems', '0043 5576 79444', NULL, NULL, '', ''),
(18, 'Fink Hans Dipl-TA Dr.', 'Lindauer Straße 73', 6912, 'Hörbranz', '0043 5573 83179 0', NULL, 'hansfink@aon.at', '', ''),
(19, 'Greißing Markus Dr.', 'Am Steinenbach 7', 6900, 'Bregenz', '0043 5574 54000', NULL, 'markus.greissing@telemax.at', '', 'außerhallb der Ordinationszeiten nach Vereinbarung');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `opening`
--
ALTER TABLE `opening`
  ADD CONSTRAINT `opening_ibfk_1` FOREIGN KEY (`vet_id`) REFERENCES `vet` (`vet_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
