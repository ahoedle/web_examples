-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 30. Jul 2013 um 12:56
-- Server Version: 5.5.29
-- PHP-Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `sing_admin`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_category`
--

CREATE TABLE `sing_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Daten für Tabelle `sing_category`
--

INSERT INTO `sing_category` (`id`, `name`) VALUES
(1, 'Aktiv 10+'),
(2, 'Aktiv 50+'),
(3, 'Berufliche Weiterbildung'),
(4, 'Berufskraftfahrer'),
(5, 'Buchhaltung'),
(6, 'Büro'),
(7, 'Computerkurse'),
(8, 'ECDL'),
(9, 'ECDL Prüfungen'),
(10, 'Erwachsenenbildung'),
(11, 'Intensivunterricht'),
(12, 'Lehrabschluss'),
(13, 'Nachhilfe'),
(14, 'Sprachen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_central`
--

CREATE TABLE `sing_central` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `sing_central`
--

INSERT INTO `sing_central` (`id`, `name`) VALUES
(1, 'Dornbirn'),
(2, 'Hohenems'),
(3, 'Nenzing');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_class_time`
--

CREATE TABLE `sing_class_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Daten für Tabelle `sing_class_time`
--

INSERT INTO `sing_class_time` (`id`, `name`) VALUES
(1, 'A, Abendkurs'),
(2, 'V, Vormittagskurs'),
(3, 'N, Nachmittagskurs'),
(4, 'W, Wochenendkurs'),
(5, 'T, Tageskurs'),
(6, 'S, Sonstige');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_course`
--

CREATE TABLE `sing_course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_nr` varchar(20) DEFAULT NULL,
  `center` varchar(20) DEFAULT NULL,
  `category1` varchar(100) DEFAULT NULL,
  `category2` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `requirement` longtext,
  `content` longtext,
  `description` longtext,
  `place` varchar(100) DEFAULT NULL,
  `start` varchar(20) DEFAULT NULL,
  `end` varchar(20) DEFAULT NULL,
  `expiry` varchar(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `ue` varchar(100) DEFAULT NULL,
  `min_participants` int(11) DEFAULT NULL,
  `max_participants` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `class_time` varchar(100) DEFAULT NULL,
  `graduation` varchar(100) DEFAULT NULL,
  `statistics` varchar(100) DEFAULT NULL,
  `trainer` int(11) DEFAULT NULL,
  `master_course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  KEY `trainer` (`trainer`),
  KEY `master_course_id` (`master_course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Daten für Tabelle `sing_course`
--

INSERT INTO `sing_course` (`course_id`, `course_nr`, `center`, `category1`, `category2`, `type`, `title`, `requirement`, `content`, `description`, `place`, `start`, `end`, `expiry`, `status`, `duration`, `ue`, `min_participants`, `max_participants`, `price`, `class_time`, `graduation`, `statistics`, `trainer`, `master_course_id`) VALUES
(28, 'D1336BAborg', 'Dornbirn', 'Büro', 'Berufliche Weiterbildung', 'Lehrgang', 'Büroausbildung Grundkurs', 'EDV Kenntnisse (ECDL Niveau)<br><br>Ergänzungsmöglichkeiten:<br>ECDL Start, ECDL Core, Buchhaltung Kombi<br><br>Abschluss:<br>Abschlussprüfung mit Zertifikat<br>', '&lt;b&gt;Büroausbildung Grundkurs&lt;/b&gt;<br>- Zeitmanagement<br>- Kfm. Rechnen<br>- der moderne Schriftverkehr<br>- Grundlagen der Rechnungslegung<br>- Büroorganisation<br>- Neue Deutsche Rechtschreibung<br>- Grundlagen der Kommunikation<br>', '- Sie streben eine Tätigkeit im Büro an und verfügen bereits über gute EDV Kenntnisse<br>- Sie sind in einer Orientierungsphase und möchten sich umschulen lassen<br>- Sie möchten in Ihren alten Beruf wieder einsteigen<br>- dann sind Sie in diesem Kurs gut aufgehoben<br>', 'Dornbirn, Langegasse 31', '10/04/2013', '11/04/2013', '12/04/2013', 'Homepage', 'Mo bis Fr von 08:00 - 12:00 Uhr, lt. Stundenplan', '80 UE', 6, 10, 1150, 'V, Vormittagskurs', 'Zertifikat', '1', NULL, NULL),
(36, '', 'Hohenems', 'Aktiv 10+', 'Aktiv 10+', 'Intensivunterricht', '', '', '', '', 'Hohenems', '', '', '', 'Homepage', '', '', NULL, NULL, NULL, 'A, Abendkurs', 'Prüfung', '0', NULL, NULL),
(37, '', 'Nenzing', 'Aktiv 10+', 'Aktiv 10+', 'Intensivunterricht', '', '', '', '', 'Nenzing', '', '', '', 'Homepage', '', '', NULL, NULL, NULL, 'V, Vormittagskurs', 'Zertifikat', '1', NULL, NULL),
(38, '', 'Dornbirn', 'Aktiv 10+', 'Aktiv 10+', 'Intensivunterricht', '', '<b>Test</b>', '', '', '', '', '', '', 'Homepage', '', '', NULL, NULL, NULL, 'A, Abendkurs', 'Prüfung', '0', NULL, NULL),
(39, '', 'Dornbirn', 'Aktiv 10+', 'Aktiv 10+', 'Intensivunterricht', '', '<ul><li><span class="wysiwyg-color-red"><b>Test1</b></span></li><li>Test1</li><li>Test1</li><li>Test1</li></ul><br><br><br>', '', '', '', '', '', '', 'Homepage', '', '', NULL, NULL, NULL, 'A, Abendkurs', 'Prüfung', '0', NULL, NULL),
(40, '', 'Dornbirn', 'Aktiv 10+', 'Aktiv 10+', 'Intensivunterricht', '', '', '', '', '', '01.07.2013', '12.07.2013', '26.07.2013', 'Homepage', '', '', NULL, NULL, NULL, 'A, Abendkurs', 'Prüfung', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_coursetemplate`
--

CREATE TABLE `sing_coursetemplate` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `category1` varchar(100) DEFAULT NULL,
  `category2` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `requirement` longtext,
  `content` longtext,
  `description` longtext,
  `duration` varchar(100) DEFAULT NULL,
  `ue` varchar(100) DEFAULT NULL,
  `min_participants` int(11) DEFAULT NULL,
  `max_participants` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `class_time` varchar(100) DEFAULT NULL,
  `graduation` varchar(100) DEFAULT NULL,
  `statistics` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_course_given`
--

CREATE TABLE `sing_course_given` (
  `trainer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `is_lead_trainer` varchar(20) DEFAULT NULL,
  KEY `teacher_id` (`trainer_id`,`course_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_course_taken`
--

CREATE TABLE `sing_course_taken` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `course_id` (`course_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_graduation`
--

CREATE TABLE `sing_graduation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `sing_graduation`
--

INSERT INTO `sing_graduation` (`id`, `name`) VALUES
(1, 'Prüfung'),
(2, 'Zertifikat'),
(3, 'Teilnahmebestätigung');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_invoice_address`
--

CREATE TABLE `sing_invoice_address` (
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
-- Tabellenstruktur für Tabelle `sing_master_course`
--

CREATE TABLE `sing_master_course` (
  `master_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`master_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_status`
--

CREATE TABLE `sing_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `sing_status`
--

INSERT INTO `sing_status` (`id`, `name`) VALUES
(1, 'Homepage'),
(2, 'Intern'),
(3, 'Abgesagt'),
(4, 'Ausgebucht');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_trainer`
--

CREATE TABLE `sing_trainer` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `sing_trainer`
--

INSERT INTO `sing_trainer` (`trainer_id`, `password`, `salutation`, `title`, `first_name`, `last_name`, `address`, `postcode`, `place`, `tel`, `mobile`, `email`, `newsletter`, `info`, `recorded_by`, `birthday`, `status`, `social_security_nr`, `subjects`) VALUES
(1, 'petra', '0', '', 'Petra', 'Nachbaur', 'Marktstraße 13', '6845', 'Hohenems', '', '0676 3807103', 'petra.nachbaur@gmail.com', '0', '', 'Svetlana', '20.02.1988', '0', '3088 200288', 'Mathe\r\nDeutsch\r\nEnglisch'),
(2, 'petra', 'Frau', NULL, 'Petra', 'Nachbaur', 'Marktstraße 13', '6845', 'Hohenems', '', '06763807103', 'petranachbaur@blub.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'petra', 'Frau', NULL, 'Pe', 'Na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_type`
--

CREATE TABLE `sing_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `sing_type`
--

INSERT INTO `sing_type` (`id`, `name`) VALUES
(1, 'Intensivunterricht'),
(2, 'Kurs'),
(3, 'Lehrgang'),
(4, 'Lernbegleitung'),
(5, 'Nachhilfe'),
(6, 'Prüfung'),
(7, 'Raumvermietung'),
(8, 'Seminar');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sing_user`
--

CREATE TABLE `sing_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `internal_nr` varchar(30) DEFAULT NULL,
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
-- Daten für Tabelle `sing_user`
--

INSERT INTO `sing_user` (`user_id`, `internal_nr`, `course_id`, `salutation`, `title`, `first_name`, `last_name`, `address`, `postcode`, `place`, `tel`, `mobile`, `email`, `newsletter`, `educational_partner`, `info`, `recorded_by`, `birthday`, `status`, `social_security_nr`, `advisor1`, `advisor2`, `advisor_email`, `ams_district`) VALUES
(1, NULL, NULL, 'Frau', NULL, 'Claudia', 'Mayer', 'Feldweg 17', '6866', 'Andelsbuch', NULL, '0664 1723912 ', 'claudia.mayer@gmail.com', NULL, NULL, NULL, 'Svetlana', '12.11.1980', NULL, '1398 121180', NULL, NULL, NULL, 'AMS Bregenz');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `sing_course`
--
ALTER TABLE `sing_course`
  ADD CONSTRAINT `sing_course_ibfk_4` FOREIGN KEY (`master_course_id`) REFERENCES `sing_master_course` (`master_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sing_course_ibfk_3` FOREIGN KEY (`trainer`) REFERENCES `sing_course_given` (`trainer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sing_course_given`
--
ALTER TABLE `sing_course_given`
  ADD CONSTRAINT `sing_course_given_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `sing_course` (`course_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sing_course_given_ibfk_3` FOREIGN KEY (`trainer_id`) REFERENCES `sing_trainer` (`trainer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sing_course_taken`
--
ALTER TABLE `sing_course_taken`
  ADD CONSTRAINT `sing_course_taken_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `sing_user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sing_course_taken_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `sing_course` (`course_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sing_invoice_address`
--
ALTER TABLE `sing_invoice_address`
  ADD CONSTRAINT `sing_invoice_address_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `sing_user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `sing_user`
--
ALTER TABLE `sing_user`
  ADD CONSTRAINT `sing_user_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `sing_course` (`course_id`) ON DELETE NO ACTION ON UPDATE CASCADE;