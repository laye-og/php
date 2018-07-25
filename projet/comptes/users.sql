-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 03 Juillet 2018 à 11:22
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tennis`
--

-- --------------------------------------------------------

--
-- Structure de la table `journaliste`
--

CREATE TABLE `journaliste` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) DEFAULT NULL,
  `nom` varchar(35) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `ddn` date NOT NULL,
  `mdp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `journaliste`
--

INSERT INTO `journaliste` (`id`, `pseudo`, `nom`, `prenom`, `ddn`, `mdp`) VALUES
(46, 'dddd', 'fffff', 'fffff', '1111-11-11', 'cuisine'),
(47, 'loolo', 'lollool', 'lloll', '0000-00-00', 'cuisine'),
(48, 'eee', 'rrrr', 'tttt', '0011-11-11', 'cuisine'),
(49, 'laye', 'grd', 'mbacké', '0001-11-11', 'limousine'),
(50, 'laye', 'grd', 'mbacké', '0001-11-11', 'cuisine'),
(51, 'laze', 'kkdkdk', 'ddjdjdj', '1111-11-11', 'cuisine'),
(52, 'knlkn', 'rgdger', 'greyger', '1111-11-11', 'laye'),
(53, 'laye', 'ndiaye', 'abdoulaye', '0000-00-00', 'admin'),
(54, 'tima', 'hann', 'fatima', '1111-11-11', 'cuisine'),
(55, 'tassy', 'sy', 'aissata', '2012-12-12', 'tassy'),
(56, 'adja', 'tr', 'awa', '1111-11-11', 'adja');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `journaliste`
--
ALTER TABLE `journaliste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `journaliste`
--
ALTER TABLE `journaliste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;