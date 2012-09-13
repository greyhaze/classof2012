-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2012 at 09:15 PM
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
  `label` varchar(25) DEFAULT NULL,
  `miniature_id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `miniature_id` (`miniature_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `alternates`
--

INSERT INTO `alternates` (`id`, `label`, `miniature_id`, `link`) VALUES
(1, 'Green Wings', 0, ''),
(2, 'Dark Brown', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `armours`
--

CREATE TABLE IF NOT EXISTS `armours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `label`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `entries_miniatures`
--

CREATE TABLE IF NOT EXISTS `entries_miniatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `miniature_id` int(11) NOT NULL,
  `manual` varchar(25) DEFAULT NULL,
  `heading` varchar(25) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entry_id` (`entry_id`,`miniature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `miniatures`
--

CREATE TABLE IF NOT EXISTS `miniatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `size_id` varchar(20) DEFAULT NULL,
  `rarity_id` varchar(10) DEFAULT NULL,
  `type_id` varchar(25) DEFAULT NULL,
  `origin_id` varchar(25) DEFAULT NULL,
  `race` varchar(25) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `class_id` varchar(25) DEFAULT NULL,
  `details` varchar(140) DEFAULT NULL,
  `weapons_id` varchar(25) DEFAULT NULL,
  `armour_id` varchar(25) DEFAULT NULL,
  `setnum` tinyint(3) DEFAULT NULL,
  `setname_id` varchar(25) DEFAULT NULL,
  `productionline_id` varchar(25) NOT NULL,
  `manufacturer_id` varchar(25) NOT NULL,
  `streetdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `miniatures`
--

INSERT INTO `miniatures` (`id`, `label`, `image`, `size_id`, `rarity_id`, `type_id`, `origin_id`, `race`, `gender`, `class_id`, `details`, `weapons_id`, `armour_id`, `setnum`, `setname_id`, `productionline_id`, `manufacturer_id`, `streetdate`) VALUES
(1, 'Alu Demon', './views/images/pfb_02/alu_demon.jpg', 'Medium', 'Common', 'Outsider', 'Abyss', 'Demon', 'Female', 'NA', 'Demonic chick with skimpy clothes.', 'Unarmed', 'Unarmoured', 2, 'Heroes & Monsters', 'Hot Chicks', 'DCM', '0000-00-00'),
(2, 'Aldern Foxglove', './views/images/pfb_02/aldern_foxglove.jpg', 'Medium', 'Rare', 'Humanoid', 'Material Plane', 'Human', 'Male', 'Noble', 'Man in fancy suit', 'Cane', 'Unarmoured', 1, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(3, 'Dire Bear', './views/images/pfb_02/dire_bear.jpg', 'Large', 'Uncommon', 'Animal', 'Material Plane', 'Bear', 'NA', 'NA', 'Big brown bear', 'Unarmed', 'Unarmoured', 7, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(4, 'Goblin Commando', './views/images/pfb_02/goblin_commando.jpg', 'Small', 'Common', 'Humanoid', 'Material Plane', 'Goblin', 'Male', 'Fighter', 'Goblin with a bone pick', 'Pick', 'Unarmoured', 10, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(5, 'Karzoug Statue', './views/images/pfb_02/karzoug_statue.jpg', 'Huge', 'Rare', 'Construct', 'Material Plane', 'Golem', 'Male', 'NA', 'Giant stone statue', 'Polearm', 'Unarmoured', 20, 'Earthy Constructs', 'Big Statues', 'WotC', '0000-00-00'),
(6, 'Lamia Matriarch', './views/images/pfb_02/lamia_matriarch.jpg', 'Large', 'Uncommon', 'Aberration', 'Material Plane', 'Lamia', 'Female', 'Warrior', 'Woman with snake lower body', 'Dual Wielding', 'Unarmoured', 28, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(7, 'Ordikon', './views/images/pfb_02/ordikon.jpg', 'Medium', 'Rare', 'Construct', 'Material Plane', 'Golem', 'Male', 'Wizard', 'Mithril wizard', 'Staff', 'Unarmoured', 36, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00'),
(8, 'Wraith', './views/images/pfb_02/wraith.jpg', 'Medium', 'Rare', 'Undead', 'Material Plane', 'Undead', 'Male', 'NA', 'Black ghost with exploding red head', 'Unarmed', 'Unarmoured', 61, 'Rise of the Rune Lords', 'Pathfinder Battles', 'Paizo/Wizkids', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `origins`
--

CREATE TABLE IF NOT EXISTS `origins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productionline`
--

CREATE TABLE IF NOT EXISTS `productionline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `proxies`
--

CREATE TABLE IF NOT EXISTS `proxies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) DEFAULT NULL,
  `miniature_id` int(11) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `miniature_id` (`miniature_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `proxies`
--

INSERT INTO `proxies` (`id`, `label`, `miniature_id`, `link`) VALUES
(1, 'Succubus', 0, NULL),
(2, 'Dire Bear', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rarities`
--

CREATE TABLE IF NOT EXISTS `rarities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `setname`
--

CREATE TABLE IF NOT EXISTS `setname` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE IF NOT EXISTS `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `label`) VALUES
(1, 'Source 1'),
(2, 'Source 2');

-- --------------------------------------------------------

--
-- Table structure for table `sources_miniatures`
--

CREATE TABLE IF NOT EXISTS `sources_miniatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `miniature_id` int(11) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `source_id` (`source_id`,`miniature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `label`) VALUES
(1, 'DDM'),
(2, 'DDM2.0');

-- --------------------------------------------------------

--
-- Table structure for table `stats_miniatures`
--

CREATE TABLE IF NOT EXISTS `stats_miniatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stat_id` int(11) NOT NULL,
  `miniature_id` int(11) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stat_id` (`stat_id`,`miniature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE IF NOT EXISTS `weapons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
