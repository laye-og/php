-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Mars 2018 à 14:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tennis`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbitre`
--

CREATE TABLE IF NOT EXISTS `arbitre` (
  `idArbitre` int(11) NOT NULL AUTO_INCREMENT,
  `NomArbitre` varchar(45) NOT NULL,
  `PrenomArbitre` varchar(45) NOT NULL,
  `NationaliteArbitre` varchar(45) NOT NULL,
  PRIMARY KEY (`idArbitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `entraineur`
--

CREATE TABLE IF NOT EXISTS `entraineur` (
  `IdEntraineur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `ddn` varchar(45) NOT NULL,
  `pseudo` varchar(23) NOT NULL,
  `mdp` varchar(15) NOT NULL,
  `NationaliteEntraineur` varchar(45) NOT NULL,
  PRIMARY KEY (`IdEntraineur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `TypeEvenement` int(11) NOT NULL,
  `Rencontre_DateRencontre` date NOT NULL,
  PRIMARY KEY (`TypeEvenement`),
  KEY `fk_Evenement_Rencontre1_idx` (`Rencontre_DateRencontre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `idJoueur` int(11) NOT NULL AUTO_INCREMENT,
  `NomJoueur` varchar(45) NOT NULL,
  `PrenomJoueur` varchar(45) NOT NULL,
  `AgeJoueur` int(11) NOT NULL,
  `SexeJoueur` varchar(1) NOT NULL,
  `NationaliteJoueur` varchar(45) NOT NULL,
  `ClassementJoueur` varchar(45) NOT NULL,
  `Entraineur_IdEntraineur` int(11) NOT NULL,
  PRIMARY KEY (`idJoueur`),
  KEY `fk_Joueur_Entraineur1_idx` (`Entraineur_IdEntraineur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `joueur_has_evenement`
--

CREATE TABLE IF NOT EXISTS `joueur_has_evenement` (
  `Joueur_idJoueur` int(11) NOT NULL,
  `Evenement_TypeEvenement` int(11) NOT NULL,
  PRIMARY KEY (`Joueur_idJoueur`,`Evenement_TypeEvenement`),
  KEY `fk_Joueur_has_Evenement_Evenement1_idx` (`Evenement_TypeEvenement`),
  KEY `fk_Joueur_has_Evenement_Joueur1_idx` (`Joueur_idJoueur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `journaliste`
--

CREATE TABLE IF NOT EXISTS `journaliste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` mediumtext NOT NULL,
  `article` longtext NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pseudo` varchar(30) DEFAULT NULL,
  `nom` varchar(35) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `ddn` date NOT NULL,
  `mdp` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

-- --------------------------------------------------------

--
-- Structure de la table `phase`
--

CREATE TABLE IF NOT EXISTS `phase` (
  `NomPhase` varchar(45) NOT NULL,
  `NbPhase` int(11) NOT NULL,
  `Tournoi_NomTournoi` int(11) NOT NULL,
  PRIMARY KEY (`NomPhase`),
  KEY `fk_Phase_Tournoi1_idx` (`Tournoi_NomTournoi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rencontre`
--

CREATE TABLE IF NOT EXISTS `rencontre` (
  `DateRencontre` date NOT NULL,
  `Phase_NomPhase` varchar(45) NOT NULL,
  `Stade_NomStade` varchar(45) NOT NULL,
  `Stade_LieuxStade` varchar(45) NOT NULL,
  `Arbitre_idArbitre` int(11) NOT NULL,
  PRIMARY KEY (`DateRencontre`),
  KEY `fk_Rencontre_Phase1_idx` (`Phase_NomPhase`),
  KEY `fk_Rencontre_Stade1_idx` (`Stade_NomStade`,`Stade_LieuxStade`),
  KEY `fk_Rencontre_Arbitre1_idx` (`Arbitre_idArbitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rencontre_has_joueur`
--

CREATE TABLE IF NOT EXISTS `rencontre_has_joueur` (
  `Rencontre_DateRencontre` date NOT NULL,
  `Joueur_idJoueur` int(11) NOT NULL,
  PRIMARY KEY (`Rencontre_DateRencontre`,`Joueur_idJoueur`),
  KEY `fk_Rencontre_has_Joueur_Joueur1_idx` (`Joueur_idJoueur`),
  KEY `fk_Rencontre_has_Joueur_Rencontre_idx` (`Rencontre_DateRencontre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stade`
--

CREATE TABLE IF NOT EXISTS `stade` (
  `NomStade` varchar(45) NOT NULL,
  `LieuxStade` varchar(45) NOT NULL,
  `NbPlaces` int(11) NOT NULL,
  PRIMARY KEY (`NomStade`,`LieuxStade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tournoi`
--

CREATE TABLE IF NOT EXISTS `tournoi` (
  `NomTournoi` int(11) NOT NULL,
  PRIMARY KEY (`NomTournoi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_Evenement_Rencontre1` FOREIGN KEY (`Rencontre_DateRencontre`) REFERENCES `rencontre` (`DateRencontre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `fk_Joueur_Entraineur1` FOREIGN KEY (`Entraineur_IdEntraineur`) REFERENCES `entraineur` (`IdEntraineur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `joueur_has_evenement`
--
ALTER TABLE `joueur_has_evenement`
  ADD CONSTRAINT `fk_Joueur_has_Evenement_Joueur1` FOREIGN KEY (`Joueur_idJoueur`) REFERENCES `joueur` (`idJoueur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Joueur_has_Evenement_Evenement1` FOREIGN KEY (`Evenement_TypeEvenement`) REFERENCES `evenement` (`TypeEvenement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `phase`
--
ALTER TABLE `phase`
  ADD CONSTRAINT `fk_Phase_Tournoi1` FOREIGN KEY (`Tournoi_NomTournoi`) REFERENCES `tournoi` (`NomTournoi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rencontre`
--
ALTER TABLE `rencontre`
  ADD CONSTRAINT `fk_Rencontre_Phase1` FOREIGN KEY (`Phase_NomPhase`) REFERENCES `phase` (`NomPhase`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rencontre_Stade1` FOREIGN KEY (`Stade_NomStade`, `Stade_LieuxStade`) REFERENCES `stade` (`NomStade`, `LieuxStade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rencontre_Arbitre1` FOREIGN KEY (`Arbitre_idArbitre`) REFERENCES `arbitre` (`idArbitre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rencontre_has_joueur`
--
ALTER TABLE `rencontre_has_joueur`
  ADD CONSTRAINT `fk_Rencontre_has_Joueur_Rencontre` FOREIGN KEY (`Rencontre_DateRencontre`) REFERENCES `rencontre` (`DateRencontre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rencontre_has_Joueur_Joueur1` FOREIGN KEY (`Joueur_idJoueur`) REFERENCES `joueur` (`idJoueur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
