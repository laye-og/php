-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2018 at 10:22 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mon_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL,
  `nom_album` varchar(110) DEFAULT NULL,
  `profil` smallint(6) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_mise_jour` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nom_album` (`nom_album`),
  KEY `profil` (`profil`),
  KEY `date_creation` (`date_creation`),
  KEY `date_mise_jour` (`date_mise_jour`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `Titre` varchar(100) DEFAULT NULL,
  `Description` text,
  `Hauteur` int(11) DEFAULT NULL,
  `Largeur` int(11) DEFAULT NULL,
  `mots_cles` varchar(150) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_mise_jour` datetime DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  KEY `album_id` (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(23) DEFAULT NULL,
  `prenom` varchar(19) DEFAULT NULL,
  `date_naissance` varchar(10) NOT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `mot_de_passe` varchar(16) DEFAULT NULL,
  `profil` smallint(6) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_mise_jour` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date_naissance`, `Email`, `mot_de_passe`, `profil`, `date_creation`, `date_mise_jour`) VALUES
(4, 'sy', 'abdou', '18/01/96', 'abdoucognasy@hotmail.fr', 'passer', NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
