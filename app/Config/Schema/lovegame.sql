-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Ven 01 Mars 2013 à 10:38
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lovegame`
--

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'homme'),
(2, 'femme');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'lover');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contenu` text,
  `dest_id` int(11) DEFAULT NULL,
  `exp_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `dest_id`, `exp_id`, `created`) VALUES
(1, 'Yep t''es charmante\n', NULL, NULL, NULL),
(2, 'Ouais je sais, t''es fan de ma photo ? ', NULL, NULL, NULL),
(3, 'Yep t''es canon \n', NULL, NULL, NULL),
(4, 'NAaaaananaaan arrête de mentir...', NULL, NULL, NULL),
(5, 'Ok je mens. T''es trop moche NEXT\n', NULL, NULL, NULL),
(6, 'Salut', 9, 2, '2013-03-01 08:46:40'),
(7, 'yo\r\n', 2, 9, '2013-03-01 08:55:04'),
(8, 'ça va?\r\n', 9, 2, '2013-03-01 08:55:43'),
(9, 'quoi de neuf', 9, 2, '2013-03-01 08:57:07'),
(21, 'C''est dur :/', 9, 2, '2013-03-01 09:23:43'),
(20, 'cakephp', 9, 2, '2013-03-01 09:22:50'),
(19, 'cakephp', 9, 2, '2013-03-01 09:22:02'),
(18, 'tu fais quoi?', 2, 9, '2013-03-01 09:13:21');

-- --------------------------------------------------------

--
-- Structure de la table `orientations`
--

CREATE TABLE IF NOT EXISTS `orientations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `orientations`
--

INSERT INTO `orientations` (`id`, `type`) VALUES
(1, 'hetero');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
  `orientation_id` tinyint(1) DEFAULT NULL,
  `genre_id` tinyint(1) DEFAULT NULL,
  `message_id` tinyint(1) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `coeur` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `naissance`, `username`, `password`, `email`, `style`, `description`, `photo`, `orientation_id`, `genre_id`, `message_id`, `group_id`, `coeur`, `created`, `update`) VALUES
(1, 'nunuch', 'bill', '2033-03-27', 'billou', 'pass', 'billou@toto.to', 'BCBG', 'je suis riche\r\n', NULL, 1, 1, NULL, 2, NULL, NULL, NULL),
(2, 'chiguer', 'wahren', '2033-09-13', 'wawa', '43458e4e43d139c6fc832723a95fc6e679fc1ba7', 'wawa@toto.to', 'gothique', 'ce mec est triste depuis 6 ans... Il cherche a m''épousé mais la bague n''est pas assez chère...\r\n', '', 1, 2, NULL, 2, 98, NULL, NULL),
(3, 'henri', 'paul', '1993-04-23', 'paulou', 'pass', 'paulou@toto.to', 'classic', 'je suis pas tres sociable\r\n\r\n', '', 1, 2, NULL, 2, NULL, NULL, NULL),
(4, 'botohely', 'anissa', '1993-09-27', 'anou', 'pass', 'anou@toto.to', 'superGo', 'je suis une fille aux dernières nouvelles', '', 1, 2, NULL, 2, 0, '2013-02-25 21:55:01', '2013-02-25 21:53:00'),
(6, 'grillet', 'nunuch', '2013-02-25', NULL, NULL, NULL, 'basket', 'je joue au basket', '', NULL, NULL, NULL, 2, 0, '2013-02-25 23:47:12', '2013-02-25 23:46:00'),
(7, 'pierre', 'pierre', '2013-02-26', NULL, NULL, NULL, 'pierre', 'je suis pierre', '', NULL, NULL, NULL, 2, 0, '2013-02-26 10:36:05', NULL),
(8, 'pierre', 'pierre', '2013-02-26', 'pierre', '43458e4e43d139c6fc832723a95fc6e679fc1ba7', NULL, 'pierre', 'je suis une pierre', '', NULL, NULL, NULL, 1, NULL, '2013-02-26 10:41:14', NULL),
(9, 'ano', 'nymous', '1993-04-02', 'gasp', '43458e4e43d139c6fc832723a95fc6e679fc1ba7', NULL, 'classe', 'je suis classe', ':D', NULL, NULL, NULL, 1, 102, '2013-02-26 11:02:55', NULL);
