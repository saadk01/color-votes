-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.13-MariaDB - mariadb.org binary distribution
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for color_votes
CREATE DATABASE IF NOT EXISTS `color_votes` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `color_votes`;


-- Dumping structure for table color_votes.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table color_votes.cities: ~4 rows (approximately)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `name`) VALUES
	(1, 'Anchorage'),
	(2, 'Brooklyn'),
	(3, 'Detroit'),
	(4, 'Selma');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;


-- Dumping structure for table color_votes.colors
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table color_votes.colors: ~7 rows (approximately)
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` (`id`, `name`) VALUES
	(1, 'Red'),
	(2, 'Orange'),
	(3, 'Yellow'),
	(4, 'Green'),
	(5, 'Blue'),
	(6, 'Indigo'),
	(7, 'Violet');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;


-- Dumping structure for table color_votes.votes
CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` int(11) unsigned NOT NULL,
  `color_id` int(11) unsigned NOT NULL,
  `vote_on` date NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_votes_cities` (`city_id`),
  KEY `FK_votes_colors` (`color_id`),
  CONSTRAINT `FK_votes_cities` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_votes_colors` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table color_votes.votes: ~7 rows (approximately)
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
INSERT INTO `votes` (`id`, `city_id`, `color_id`, `vote_on`, `votes`) VALUES
	(1, 1, 3, '2016-06-16', 15000),
	(2, 1, 5, '2016-06-16', 10000),
	(3, 2, 1, '2016-06-21', 100000),
	(4, 2, 5, '2016-06-21', 250000),
	(5, 3, 1, '2016-06-25', 260000),
	(6, 4, 3, '2016-06-27', 15000),
	(7, 4, 7, '2016-06-27', 5000),
	(8, 1, 3, '2016-07-01', 6500),
	(9, 3, 7, '2016-07-01', 3200);
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
