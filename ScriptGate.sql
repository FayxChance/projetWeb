-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 07 Novembre 2018 à 11:24
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ScriptGate`
--

-- --------------------------------------------------------

--
-- Structure de la table `Actus`
--

CREATE TABLE `Actus` (
  `idActus` int(11) NOT NULL,
  `titreActus` varchar(100) NOT NULL,
  `dateActus` date NOT NULL,
  `utilisateurActus` int(11) NOT NULL,
  `contenuActus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Actus`
--

INSERT INTO `Actus` (`idActus`, `titreActus`, `dateActus`, `utilisateurActus`, `contenuActus`) VALUES
(1, 'Test', '2018-11-07', 1, 'Ceci est un test');

-- --------------------------------------------------------

--
-- Structure de la table `Evenement`
--

CREATE TABLE `Evenement` (
  `idEvenement` int(11) NOT NULL,
  `nomEvenement` varchar(100) NOT NULL,
  `descriptionEvenement` text NOT NULL,
  `dateEvenement` date NOT NULL,
  `lieuEvenement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Projet`
--

CREATE TABLE `Projet` (
  `idProjet` int(11) NOT NULL,
  `evenementProjet` int(11) NOT NULL,
  `utilisateurProjet` int(11) NOT NULL,
  `titreProjet` varchar(100) NOT NULL,
  `descriptionProjet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `idRole` int(11) NOT NULL,
  `roleRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Role`
--

INSERT INTO `Role` (`idRole`, `roleRole`) VALUES
(1, 'admin'),
(2, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(20) NOT NULL,
  `prenomUtilisateur` varchar(20) NOT NULL,
  `pseudoUtilisateur` varchar(20) NOT NULL,
  `telUtilisateur` int(11) NOT NULL,
  `mailUtilisateur` varchar(50) NOT NULL,
  `mdpUtilisateur` varchar(16) NOT NULL,
  `roleUtilisateur` int(11) NOT NULL,
  `fonctionUtilisateur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `pseudoUtilisateur`, `telUtilisateur`, `mailUtilisateur`, `mdpUtilisateur`, `roleUtilisateur`, `fonctionUtilisateur`) VALUES
(1, 'Admin', 'hamze', 'admin', 0, 'admin@gmail.com', 'admin', 1, 'WebMaster');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Actus`
--
ALTER TABLE `Actus`
  ADD PRIMARY KEY (`idActus`);

--
-- Index pour la table `Evenement`
--
ALTER TABLE `Evenement`
  ADD PRIMARY KEY (`idEvenement`);

--
-- Index pour la table `Projet`
--
ALTER TABLE `Projet`
  ADD PRIMARY KEY (`idProjet`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`idRole`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Actus`
--
ALTER TABLE `Actus`
  MODIFY `idActus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Evenement`
--
ALTER TABLE `Evenement`
  MODIFY `idEvenement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Projet`
--
ALTER TABLE `Projet`
  MODIFY `idProjet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
