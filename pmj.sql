-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 07 Avril 2015 à 08:46
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pmj`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_Commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_Utilisateur` int(11) DEFAULT NULL,
  `prix_total` int(50) DEFAULT NULL,
  `date_Commande` date DEFAULT NULL,
  `id_Livraison` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_Commande`),
  KEY `fk_Commande_Utilisateur` (`id_Utilisateur`),
  KEY `fk_Commande_Livraison` (`id_Livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

CREATE TABLE IF NOT EXISTS `concerne` (
  `quantité` int(100) DEFAULT NULL,
  `id_Commande` int(11) NOT NULL DEFAULT '0',
  `id_Produit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Commande`,`id_Produit`),
  KEY `fk_Concerne_Produit` (`id_Produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE IF NOT EXISTS `contenu` (
  `id_Contenu` int(3) NOT NULL AUTO_INCREMENT,
  `id_Produit` int(11) DEFAULT NULL,
  `Image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `type` char(40) DEFAULT NULL,
  `marque` char(40) DEFAULT NULL,
  `couleur` char(40) DEFAULT NULL,
  `saveur` char(40) DEFAULT NULL,
  PRIMARY KEY (`id_Contenu`),
  KEY `fk_Contenu_Produit` (`id_Produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE IF NOT EXISTS `livraison` (
  `id_Livraison` int(3) NOT NULL AUTO_INCREMENT,
  `datePrevue` date DEFAULT NULL,
  `dateReelle` date DEFAULT NULL,
  `AdresseLivraison` char(255) DEFAULT NULL,
  PRIMARY KEY (`id_Livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_Produit` int(3) NOT NULL AUTO_INCREMENT,
  `nomProd` char(50) DEFAULT NULL,
  `prix` float(5,2) DEFAULT NULL,
  `datePublication` date DEFAULT NULL,
  `note` float(2,1) DEFAULT NULL,
  `vue` int(10) DEFAULT NULL,
  `Disponibilite` char(40) DEFAULT NULL,
  PRIMARY KEY (`id_Produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Structure de la table `relai`
--

CREATE TABLE IF NOT EXISTS `relai` (
  `id_Relai` int(3) NOT NULL AUTO_INCREMENT,
  `adresseRelai` char(60) DEFAULT NULL,
  PRIMARY KEY (`id_Relai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(50) DEFAULT NULL,
  `prenom` char(50) DEFAULT NULL,
  `pseudo` char(50) DEFAULT NULL,
  `adresse` char(60) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `mot_de_passe` int(30) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_Utilisateur`, `nom`, `prenom`, `pseudo`, `adresse`, `cp`, `mot_de_passe`, `mail`) VALUES
(40, 'titi', 'titi', 'mact972', '50 rue du petit houx', 95200, 200000000, 'lauriane.ticquant@gmail.com'),
(41, 'titi', 'mike', 'mact972', '50 rue du petit houx', 95200, 85568, 'lauriane.ticquant@gmail.com');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_Commande_Livraison` FOREIGN KEY (`id_Livraison`) REFERENCES `livraison` (`id_Livraison`),
  ADD CONSTRAINT `fk_Commande_Utilisateur` FOREIGN KEY (`id_Utilisateur`) REFERENCES `utilisateur` (`id_Utilisateur`);

--
-- Contraintes pour la table `concerne`
--
ALTER TABLE `concerne`
  ADD CONSTRAINT `fk_Concerne_Commande` FOREIGN KEY (`id_Commande`) REFERENCES `commande` (`id_Commande`),
  ADD CONSTRAINT `fk_Concerne_Produit` FOREIGN KEY (`id_Produit`) REFERENCES `produit` (`id_Produit`);

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `fk_Contenu_Produit` FOREIGN KEY (`id_Produit`) REFERENCES `produit` (`id_Produit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
