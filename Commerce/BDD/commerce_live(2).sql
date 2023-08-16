-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 août 2023 à 06:59
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `commerce_live`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id_commande` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `moyen_livraison` varchar(205) DEFAULT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

DROP TABLE IF EXISTS `details_commande`;
CREATE TABLE IF NOT EXISTS `details_commande` (
  `id_detail` int(11) NOT NULL,
  `id_commande` int(11) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL,
  `quantite_unitaire` int(11) DEFAULT NULL,
  `statut` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_commande` (`id_commande`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(11) NOT NULL,
  `id_commande` int(11) DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL,
  'date_facture' DATE NOT NULL,
  `quantite_acheter` int(11) DEFAULT NULL,
  `prix_unitaire` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_facture`),
  KEY `id_commande` (`id_commande`),
  KEY `id_produit` (`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `id_fournisseur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numero_telephone` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_fournisseur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `quantite_en_stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `description`, `prix`, `quantite_en_stock`) VALUES
(1, 'Samsung note 22', 'Telephone_Android', '800.00', 20),
(2, 'Samsung note 20', 'Telephone_Android', '700.00', 20),
(3, 'Samsung A 13', 'Telephone_Android', '150.00', 10),
(4, 'Samsung A54', 'Telephone_Android', '300.00', 15),
(5, 'Samsung S21', 'Telephone_Android', '400.00', 5),
(6, 'Samsung Z', 'Telephone_Android', '1300.00', 6),
(7, 'Redmi Note8', 'Telephone_Android', '120.00', 6),
(8, 'Redmi Note11', 'Telephone_Android', '450.00', 6),
(9, 'Iphone 14pro', 'Iphone14,avec Accessoire', '1500.00', 6),
(10, 'Iphone12 proMax', 'Iphone12,avec Accessoire', '1000.00', 6),
(11, 'Iphone11 proMax', 'Iphone11,avec Accessoire', '500.00', 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mot_de_passe` varchar(250) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `email`, `mot_de_passe`, `role`) VALUES
(1, 'AHMED', 'Moindjie', 'moindjieamid@gmail.com', 'Amid123', 'Administrateur'),
(2, 'MOHAMED', 'Ali', 'mohamedali@gmail.com', 'Ali1011', 'Client'),
(3, 'DERA', 'Yves', 'derayves@gmail.com', 'Dyves45', 'Client');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
