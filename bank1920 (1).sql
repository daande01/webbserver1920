-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 21 okt 2019 kl 06:31
-- Serverversion: 5.7.23
-- PHP-version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `bank1920`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `kort`
--

DROP TABLE IF EXISTS `kort`;
CREATE TABLE IF NOT EXISTS `kort` (
  `kortnr_pk` int(6) NOT NULL AUTO_INCREMENT,
  `typ_fk` int(6) DEFAULT NULL,
  `personnr_fk` int(6) DEFAULT NULL,
  `kontonr_fk` int(6) DEFAULT NULL,
  PRIMARY KEY (`kortnr_pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `kort`
--

INSERT INTO `kort` (`kortnr_pk`, `typ_fk`, `personnr_fk`, `kontonr_fk`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `personnr_pk` int(6) NOT NULL AUTO_INCREMENT,
  `namn` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`personnr_pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `person`
--

INSERT INTO `person` (`personnr_pk`, `namn`) VALUES
(1, 'daniel'),
(2, 'veronica');

-- --------------------------------------------------------

--
-- Tabellstruktur `typ`
--

DROP TABLE IF EXISTS `typ`;
CREATE TABLE IF NOT EXISTS `typ` (
  `typ_pk` int(6) NOT NULL AUTO_INCREMENT,
  `typ` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`typ_pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `typ`
--

INSERT INTO `typ` (`typ_pk`, `typ`) VALUES
(1, 'kreditkort'),
(2, 'kontokort');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
