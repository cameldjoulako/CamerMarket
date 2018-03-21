-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Mai 2017 à 10:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `camermarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Ordinateur'),
(2, 'Televiseur'),
(3, 'Telephone'),
(4, 'Appareil_Photos');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `telephone` (`telephone`),
  UNIQUE KEY `password_2` (`password`),
  UNIQUE KEY `password_3` (`password`),
  UNIQUE KEY `telephone_2` (`telephone`),
  UNIQUE KEY `telephone_3` (`telephone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `password`, `telephone`, `email`, `adresse`) VALUES
(1, 'DJOULAKO', 'CAMEL LEONCE', 'lemonde', 69857497, 'cameldjoulako17@gmail.com', 'Dschang Foto'),
(2, 'MANEGUE', 'LÃ©onne Vastyde', 'leonnevas', 56854218, 'leonne@gmail.com', 'Kribi chateau'),
(3, 'ZANKIA', 'Donald', 'leboy', 98546799, 'donald@gmail.com', 'Buea citÃ© lumiere'),
(7, 'MATHIEU', 'Nebra', 'beraninfo', 254587952, 'nebra@hotmzil.com', 'Limbe cocotier'),
(14, 'FOTIE', 'hito', 'sdfghj', 852963741, 'fotie@gamil.com', 'dschang '),
(17, 'Hackeur', 'Leonce', 'hackeur', 36985632, 'camoiu@hyi.com', 'Dschang cm tamtm'),
(21, 'blaise', 'sokamte', 'lepititi', 674191692, 'blaiso@gmail.com', 'YaoundÃ© ODZA'),
(22, 'hef', 'grgg', 'gt(g', 2147483647, 'CEDCDCDFC@HT', 'cffrc'),
(24, 'leomamo', 'cabrel25', 'azertyu', 698547854, 'cameldjoulako17@gmail.com25', 'Nkongsamba25');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `prix`, `categorie`, `stock`, `quantite`) VALUES
(22, 'Itel 720', 'TÃ©lÃ©phone trÃ¨s puissant\r\nMÃ©moire interne: 16Go\r\nRam: 2Go', 78000, 'Telephone', 0, NULL),
(25, 'TOSHIBA ', 'DD 2To\r\nRAM: 16Go', 300000, 'Ordinateur', 113, NULL),
(28, 'HT 6459', 'DD 500Go\r\nRAM 4Go', 250000, 'Ordinateur', 10, NULL),
(29, 'MTN Brand', 'vyusjgv', 34000, 'Telephone', 10, NULL),
(30, 'FUJIFILM 6441', '62px\r\nmemoire interne 16go', 85000, 'Appareil_Photos', 14, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
