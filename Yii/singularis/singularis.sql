-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 29. Jul 2013 um 16:37
-- Server Version: 5.5.29
-- PHP-Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `singularis`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Course`
--

CREATE TABLE `Course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_full` varchar(100) DEFAULT NULL,
  `start` varchar(20) DEFAULT NULL,
  `end` varchar(20) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `course_nr` varchar(20) DEFAULT NULL,
  `category1` varchar(100) DEFAULT NULL,
  `category2` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `requirement` varchar(1000) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `center` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `expiry` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `ue` varchar(100) DEFAULT NULL,
  `min_participants` int(11) DEFAULT NULL,
  `max_participants` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `class_time` varchar(100) DEFAULT NULL,
  `graduation` varchar(100) DEFAULT NULL,
  `statistics` varchar(100) DEFAULT NULL,
  `invoice` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `lead_trainer` int(11) DEFAULT NULL,
  `trainer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  KEY `lead_trainer` (`lead_trainer`),
  KEY `lead_trainer_2` (`lead_trainer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Daten für Tabelle `Course`
--

INSERT INTO `Course` (`course_id`, `name_full`, `start`, `end`, `place`, `description`, `visible`, `course_nr`, `category1`, `category2`, `type`, `requirement`, `content`, `center`, `status`, `expiry`, `duration`, `ue`, `min_participants`, `max_participants`, `price`, `class_time`, `graduation`, `statistics`, `invoice`, `link`, `lead_trainer`, `trainer`) VALUES
(20, 'Büroausbildung Grundkurs', '02.09.2013', '04.10.2013', 'Dornbirn', '- Sie streben eine Tätigkeit im Büro an und verfügen bereits über gute EDV Kenntnisse \r\n- Sie sind in einer Orientierungsphase und möchten sich umschulen lassen \r\n- Sie möchten in Ihren alten Beruf wieder einsteigen \r\n- dann sind Sie in diesem Kurs gut aufgehoben', NULL, 'D1336BAborg', '6', '3', '3', 'EDV Kenntnisse (ECDL Niveau)  \r\n\r\nErgänzungsmöglichkeiten: ECDL Start, ECDL Core, Buchhaltung Kombi  \r\n\r\nAbschluss: Abschlussprüfung mit Zertifikat', '<b>Büroausbildung Grundkurs</b> \r\n- Zeitmanagement \r\n- Kfm. Rechnen \r\n- der moderne Schriftverkehr \r\n- Grundlagen der Rechnungslegung \r\n- Büroorganisation \r\n- Neue Deutsche Rechtschreibung \r\n- Grundlagen der Kommunikation', '1', '0', '04.11.2013', 'Mo bis Fr von 08:00 - 12:00, lt. Stundenplan', '80 UE', 6, 10, 1150, '2', '2', '1', '', '', 0, NULL),
(21, 'EDV Basisausbildung mit Einführung', '08/05/2013', '09/13/2013', 'Dornbirn, Langegasse 31', '- Sie möchten Ihre ersten Erfahrungen am Computer machen\r\n- Sie möchten die verschiedenen Office-Programme kennen lernen\r\n- Sie möchten Ihre Chancen auf dem Arbeitsmarkt durch grundlegende Computerkenntnisse erhöhen\r\n\r\ndann sind Sie in diesem Kurs gut aufgehoben', NULL, 'D1332COeedv', '8', '7', '2', 'keine\r\ndie Unterrichtsstunden für die Einführung in der ersten Woche kann eventuell auch nachmittags sein, Termin nach Vereinbarung', '<b>Einführung in die EDV</b>\r\n- Mausbenutzung\r\n- Tastaturbenutzung\r\n- Öffnen und speichern von Dokumenten\r\n\r\n<b>EDV-Basisausbildung</b>\r\n- Dateimanagement Windows Vista / Win7\r\n- Textverarbeitung Word 2007\r\n- Tabellenkalkulation Excel 2007\r\n- Internet & Email Outlook 2007\r\n\r\n<i>Die Kursinhalte orientieren sich am aktuellen Syllabus – Informationen unter www.ecdl.at</i>', '1', '0', '10/13/2013', 'Mo bis Fr, von 08:00 - 12:00, lt. Stundenplan', '64 UE (inkl. Lernstunden mind. 16 Wochenstunden)', 6, 8, 1160, '2', '3', '1', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `course_given`
--

CREATE TABLE `course_given` (
  `trainer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  KEY `teacher_id` (`trainer_id`,`course_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `course_taken`
--

CREATE TABLE `course_taken` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `course_id` (`course_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `invoice_address`
--

CREATE TABLE `invoice_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nr` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Trainer`
--

CREATE TABLE `Trainer` (
  `trainer_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(45) NOT NULL,
  `salutation` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `newsletter` varchar(10) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL,
  `recorded_by` varchar(100) DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `social_security_nr` varchar(100) DEFAULT NULL,
  `subjects` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`trainer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `Trainer`
--

INSERT INTO `Trainer` (`trainer_id`, `password`, `salutation`, `title`, `first_name`, `last_name`, `address`, `postcode`, `place`, `tel`, `mobile`, `email`, `newsletter`, `info`, `recorded_by`, `birthday`, `status`, `social_security_nr`, `subjects`) VALUES
(1, 'petra', '0', '', 'Petra', 'Nachbaur', 'Marktstraße 13', '6845', 'Hohenems', '', '0676 3807103', 'petra.nachbaur@gmail.com', '0', '', 'Svetlana', '20.02.1988', '0', '3088 200288', 'Mathe\r\nDeutsch\r\nEnglisch');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(45) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `salutation` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `newsletter` varchar(10) DEFAULT NULL,
  `educational_partner` varchar(100) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL,
  `recorded_by` varchar(100) DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `social_security_nr` varchar(100) DEFAULT NULL,
  `advisor1` varchar(100) DEFAULT NULL,
  `advisor2` varchar(100) DEFAULT NULL,
  `advisor_email` varchar(100) DEFAULT NULL,
  `ams_district` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_user_Course_idx` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `User`
--

INSERT INTO `User` (`user_id`, `password`, `course_id`, `salutation`, `title`, `first_name`, `last_name`, `address`, `postcode`, `place`, `tel`, `mobile`, `email`, `newsletter`, `educational_partner`, `info`, `recorded_by`, `birthday`, `status`, `social_security_nr`, `advisor1`, `advisor2`, `advisor_email`, `ams_district`) VALUES
(1, 'claudia', NULL, 'Frau', NULL, 'Claudia', 'Mayer', 'Feldweg 17', '6866', 'Andelsbuch', NULL, '0664 1723912 ', 'claudia.mayer@gmail.com', NULL, NULL, NULL, 'Svetlana', '12.11.1980', NULL, '1398 121180', NULL, NULL, NULL, 'AMS Bregenz');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `Course_ibfk_1` FOREIGN KEY (`lead_trainer`) REFERENCES `Course` (`lead_trainer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `course_given`
--
ALTER TABLE `course_given`
  ADD CONSTRAINT `course_given_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `Trainer` (`trainer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `course_given_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `course_taken`
--
ALTER TABLE `course_taken`
  ADD CONSTRAINT `course_taken_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `course_taken_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `invoice_address`
--
ALTER TABLE `invoice_address`
  ADD CONSTRAINT `invoice_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `fk_user_Course` FOREIGN KEY (`course_id`) REFERENCES `Course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
