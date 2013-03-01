# Sequel Pro dump
# Version 2210
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.44-log)
# Database: lovegame
# Generation Time: 2013-03-01 11:30:47 +0000
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table genres
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` (`id`,`name`)
VALUES
	(1,'homme'),
	(2,'femme');

/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`,`name`)
VALUES
	(1,'admin'),
	(2,'lover');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `exp_id` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`,`contenu`,`exp_id`,`dest_id`,`created`)
VALUES
	(1,'Yep t\'es charmante\n',NULL,NULL,NULL),
	(2,'Ouais je sais, t\'es fan de ma photo ? ',NULL,NULL,NULL),
	(3,'Yep t\'es canon \n',NULL,NULL,NULL),
	(4,'NAaaaananaaan arr',NULL,NULL,NULL),
	(5,'Ok je mens. T\'es trop moche NEXT\n',NULL,NULL,NULL),
	(6,'hello',9,9,'2013-03-01 11:26:31'),
	(7,'patapoin',9,7,'2013-03-01 11:26:42'),
	(8,'salut bill',9,1,'2013-03-01 11:28:38'),
	(9,'salut gasp',1,9,'2013-03-01 11:29:32');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orientations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orientations`;

CREATE TABLE `orientations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

LOCK TABLES `orientations` WRITE;
/*!40000 ALTER TABLE `orientations` DISABLE KEYS */;
INSERT INTO `orientations` (`id`,`type`)
VALUES
	(1,'hetero');

/*!40000 ALTER TABLE `orientations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `style` varchar(11) DEFAULT NULL,
  `description` text,
  `photo` varchar(255) DEFAULT NULL,
  `orientation_id` int(1) DEFAULT NULL,
  `genre_id` int(1) DEFAULT NULL,
  `message_id` tinyint(1) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `coeur` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`nom`,`prenom`,`naissance`,`username`,`password`,`email`,`style`,`description`,`photo`,`orientation_id`,`genre_id`,`message_id`,`group_id`,`coeur`,`created`,`update`)
VALUES
	(1,'nunuch','bill','2033-03-27','billou','43458e4e43d139c6fc832723a95fc6e679fc1ba7','billou@toto.to','BCBG','je suis riche\r\n',NULL,1,1,NULL,2,NULL,NULL,NULL),
	(2,'chiguer','wahren','2033-09-13','wawa','43458e4e43d139c6fc832723a95fc6e679fc1ba7','wawa@toto.to','gothique','ce mec est triste depuis 6 ans... Il cherche a m\'?pous? mais la bague n\'est pas assez ch?re...\r\n','',1,2,NULL,2,NULL,NULL,NULL),
	(3,'henri','paul','1993-04-23','paulou','43458e4e43d139c6fc832723a95fc6e679fc1ba7','paulou@toto.to','classic','je suis pas tres sociable\r\n\r\n','',1,2,NULL,2,NULL,NULL,NULL),
	(4,'botohely','anissa','1993-09-27','anou','pass','anou@toto.to','superGo','je suis une fille aux dernieres nouvelles','',1,2,NULL,2,0,'2013-02-25 21:55:01','2013-02-25 21:53:00'),
	(6,'grillet','nunuch','2013-02-25',NULL,NULL,NULL,'basket','je joue au basket','',NULL,NULL,NULL,2,0,'2013-02-25 23:47:12','2013-02-25 23:46:00'),
	(7,'pierre','pierre','2013-02-26',NULL,NULL,NULL,'pierre','je suis pierre','',NULL,NULL,NULL,2,0,'2013-02-26 10:36:05',NULL),
	(8,'pierre','pierre','2013-02-26','pierre','43458e4e43d139c6fc832723a95fc6e679fc1ba7',NULL,'pierre','je suis une pierre','',NULL,NULL,NULL,1,NULL,'2013-02-26 10:41:14',NULL),
	(9,'gasp','nymous','1993-04-02','gasp','43458e4e43d139c6fc832723a95fc6e679fc1ba7','','classe','je suis classe',':D',1,1,NULL,1,-3,'2013-02-26 11:02:55',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
