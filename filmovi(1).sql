-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2014 at 01:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `filmovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ankete`
--

CREATE TABLE IF NOT EXISTS `ankete` (
  `id_ankete` int(11) NOT NULL AUTO_INCREMENT,
  `pitanje` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aktivna` int(1) NOT NULL,
  PRIMARY KEY (`id_ankete`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ankete`
--

INSERT INTO `ankete` (`id_ankete`, `pitanje`, `aktivna`) VALUES
(30, 'Da li Vas je impresionirao sajt?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `id_zanr` int(11) NOT NULL,
  `naziv` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `id_zanr`, `naziv`, `opis`, `slika`) VALUES
(1, 2, 'jAMES BOND', 'OPIS JAMES BONDA', 'images/1.jpg'),
(2, 1, 'qweqweqw', 'qweqweqwe', 'images/futer.png');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `id_korisnik` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` text COLLATE utf8_unicode_ci NOT NULL,
  `pol` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_korisnik`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id_korisnik`, `ime`, `lozinka`, `pol`, `mail`, `uloga`) VALUES
(27, 'joc', 'joc', 'M', 'silawar@hotmail.com', 'korisnik'),
(28, 'jo', 'd41d8cd98f00b204e9800998ecf8427e', 'M', 'jovaneta93@hotmail.com', 'korisnik'),
(29, 's', 'b858cb282617fb0956d960215c8e84d1ccf909c6', 'M', 'qweqwew@hotmail.com', 'korisnik'),
(30, 'student', 'b858cb282617fb0956d960215c8e84d1ccf909c6', 'M', 'qweqwew@hotmail.com', 'korisnik'),
(25, 'jovan', '7215ee9c7d9dc229d2921a40e899ec5f', 'M', 'jovaneta93@hotmail.com', 'korisnik'),
(26, 'joca', 'joca', 'M', 'jovaneta93@hotmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE IF NOT EXISTS `meni` (
  `id_meni` int(11) NOT NULL AUTO_INCREMENT,
  `ime_strane` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_meni`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE IF NOT EXISTS `ocene` (
  `id_ocene` int(11) NOT NULL AUTO_INCREMENT,
  `id_korisnik` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `ocena` int(1) NOT NULL,
  PRIMARY KEY (`id_ocene`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `odgovori`
--

CREATE TABLE IF NOT EXISTS `odgovori` (
  `id_odgovori` int(10) NOT NULL AUTO_INCREMENT,
  `id_ankete` int(10) NOT NULL,
  `odgovori` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_odgovori`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `odgovori`
--

INSERT INTO `odgovori` (`id_odgovori`, `id_ankete`, `odgovori`) VALUES
(25, 30, 'Ne'),
(26, 30, 'Da');

-- --------------------------------------------------------

--
-- Table structure for table `rezultat`
--

CREATE TABLE IF NOT EXISTS `rezultat` (
  `id_rezultat` int(10) NOT NULL AUTO_INCREMENT,
  `id_ankete` int(10) NOT NULL,
  `id_odgovori` int(10) NOT NULL,
  `rezultat` int(10) NOT NULL,
  PRIMARY KEY (`id_rezultat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `rezultat`
--

INSERT INTO `rezultat` (`id_rezultat`, `id_ankete`, `id_odgovori`, `rezultat`) VALUES
(29, 30, 26, 0),
(28, 30, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sadrzaj`
--

CREATE TABLE IF NOT EXISTS `sadrzaj` (
  `id_sadrzaj` int(11) NOT NULL AUTO_INCREMENT,
  `id_meni` int(11) NOT NULL,
  `sadrzaj` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sadrzaj`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE IF NOT EXISTS `zanr` (
  `id_zanr` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_zanr`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`id_zanr`, `naziv`) VALUES
(1, 'Akcija'),
(2, 'Misterija');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
