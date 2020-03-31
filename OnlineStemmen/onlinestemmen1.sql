-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mrt 2020 om 11:16
-- Serverversie: 10.4.10-MariaDB
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestemmen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stemmen`
--

DROP TABLE IF EXISTS `stemmen`;
CREATE TABLE IF NOT EXISTS `stemmen` (
  `Partijen` tinytext NOT NULL,
  `stemmen` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `geboortedatum` date NOT NULL,
  `adres` text NOT NULL,
  `postcode` text NOT NULL,
  `woonplaats` text NOT NULL,
  `Stem_Partij` tinytext NOT NULL,
  `Stem_kandidaat` int(11) NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `geboortedatum`, `adres`, `postcode`, `woonplaats`, `Stem_Partij`, `Stem_kandidaat`) VALUES
(13, 'Karin', 'brabb@gmail.com', '$2y$10$gGBi1PZf4QsgDm3P4aKGmOvmMrWLspU8s/6OGvkmvzIDeUjGGfVW6', '1990-05-12', '', '', '', '', 0),
(9, 'kees', 'brab@gmail.com', '$2y$10$hF1zn39Sp4ntZ7Pvteiy5OSt4xa8LfVUlRTRGTEYijRoHhEoqqW7u', '1991-02-11', '', '', '', '', 0),
(11, 'qwerty', 'karelll@gmail.com', '$2y$10$dPxJZzhoYxeVRseuzF/ce.2Pzw8PH/LgzLq48szQNDDx2XfCrTCDK', '1999-01-01', '', '', '', '', 0),
(12, 'keesw', 'brabb@gmail.com', '$2y$10$F9XkgbjvdcBKSGR81M..humX5UpjGdIL.7OZIU/o2Wjt3hQUQ0uE6', '2000-03-10', '', '', '', '', 0),
(14, 'karel', 'brabbb@gmail.com', '$2y$10$Jjro6WHIXBDXGnBvzUrKDeT1aXbllXnOY9rdHt8IlQ5z.EamsxEI.', '2001-03-18', '', '', '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
