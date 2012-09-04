-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2012 at 05:42 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternates`
--

CREATE TABLE IF NOT EXISTS `alternates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galleries` int(11) NOT NULL COMMENT 'link to main table id',
  `label` varchar(25) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alternates`
--

INSERT INTO `alternates` (`id`, `id_galleries`, `label`, `link`) VALUES
(1, 1, 'Green Wings', 'Null'),
(2, 3, 'Dark Brown', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galleries` int(11) NOT NULL,
  `source` varchar(25) NOT NULL,
  `heading` varchar(25) NOT NULL,
  `page` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `id_galleries`, `source`, `heading`, `page`) VALUES
(1, 1, 'Fiend Folio', 'Demons', 127),
(2, 1, 'Monster Manual', 'Alu Demons', 15),
(3, 1, 'Bestiary', 'Demons', 125),
(4, 3, 'Monster Manual', 'Bear, Dire', 33),
(5, 4, 'Monster Manual', 'Goblin', 48);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `rarity` varchar(10) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `origin` varchar(25) DEFAULT NULL,
  `race` varchar(25) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `class` varchar(25) DEFAULT NULL,
  `details` varchar(140) DEFAULT NULL,
  `weapons` varchar(25) DEFAULT NULL,
  `armour` varchar(25) DEFAULT NULL,
  `setnum` tinyint(3) DEFAULT NULL,
  `setname` varchar(25) DEFAULT NULL,
  `productionline` varchar(25) NOT NULL,
  `manufacturer` varchar(25) NOT NULL,
  `streetdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `size`, `rarity`, `type`, `origin`, `race`, `gender`, `class`, `details`, `weapons`, `armour`, `setnum`, `setname`, `productionline`, `manufacturer`, `streetdate`) VALUES
(1, 'Alu Demon', './views/images/pfb_02/alu_demon.jpg', 'Medium', 'Common', 'Outsider', 'Abyss', 'Demon', 'Female', 'NA', 'Demonic chick with skimpy clothes.', 'Unarmed', 'Unarmoured', 2, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(2, 'Aldern Foxglove', './views/images/pfb_02/aldern_foxglove.jpg', 'Medium', 'Rare', 'Humanoid', 'Material Plane', 'Human', 'Male', 'Noble', 'Man in fancy suit', 'Cane', 'Unarmoured', 1, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(3, 'Dire Bear', './views/images/pfb_02/dire_bear.jpg', 'Large', 'Uncommon', 'Animal', 'Material Plane', 'Bear', 'NA', 'NA', 'Big brown bear', 'Unarmed', 'Unarmoured', 7, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(4, 'Goblin Commando', './views/images/pfb_02/goblin_commando.jpg', 'Small', 'Common', 'Humanoid', 'Material Plane', 'Goblin', 'Male', 'Fighter', 'Goblin with a bone pick', 'Pick', 'Unarmoured', 10, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(5, 'Karzoug Statue', './views/images/pfb_02/karzoug_statue.jpg', 'Huge', 'Rare', 'Construct', 'Material Plane', 'Golem', 'Male', 'NA', 'Giant stone statue', 'Polearm', 'Unarmoured', 20, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(6, 'Lamia Matriarch', './views/images/pfb_02/lamia_matriarch.jpg', 'Large', 'Uncommon', 'Monstrous Humanoid', 'Material Plane', 'Lamia', 'Female', 'Warrior', 'Woman with snake lower body', 'Dual Wielding', 'Unarmoured', 28, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(7, 'Ordikon', './views/images/pfb_02/ordikon.jpg', 'Medium', 'Rare', 'Construct', 'Material Plane', 'Golem', 'Male', 'NA', 'Mithril wizard', 'Staff', 'Unarmoured', 36, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(8, 'Wraith', './views/images/pfb_02/wraith.jpg', 'Medium', 'Rare', 'Undead', 'Material Plane', 'Undead', 'Male', 'NA', 'Black ghost with exploding red head', 'Unarmed', 'Unarmoured', 61, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `proxies`
--

CREATE TABLE IF NOT EXISTS `proxies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galleries` int(11) NOT NULL,
  `label` varchar(25) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `proxies`
--

INSERT INTO `proxies` (`id`, `id_galleries`, `label`, `link`) VALUES
(1, 1, 'Succubus', 'Null'),
(2, 3, 'Dire Bear', 'www.plasticrypt.com/forum/');

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galleries` int(11) NOT NULL,
  `label` varchar(25) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `id_galleries`, `label`, `link`) VALUES
(1, 5, 'Source 1', 'www.plasticrypt.com/forum/'),
(2, 5, 'Source 2', 'www.plasticrypt.com/forum/');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galleries` int(11) NOT NULL,
  `label` varchar(25) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `id_galleries`, `label`, `link`) VALUES
(1, 3, 'DDM', 'www.plasticrypt.com/forum/'),
(2, 8, 'DDM2.0', 'Null');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
