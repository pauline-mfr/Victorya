-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 sep. 2020 à 11:40
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'rajae19beddi@gmail.com', 'ee3ebca3f5e6c24897c532f6c9519656');

-- --------------------------------------------------------

--
-- Structure de la table `dish`
--

DROP TABLE IF EXISTS `dish`;
CREATE TABLE IF NOT EXISTS `dish` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dish`
--

INSERT INTO `dish` (`id`, `title`, `description`, `price`, `image`, `category`) VALUES
(12, 'Ham Sandwich', 'lorem ipsum dolor sit amet. consetetur sadipscing elitr.', '10', 'ima11.png', 'starter'),
(16, 'Ham Sandwich', 'lorem ipsum dolor sit amet. consetetur sadipscing elitr.', '10', 'p9eh9haz.png', 'starter'),
(13, 'Ham Sandwich', 'lorem ipsum dolor sit amet. consetetur sadipscing elitr.', '11', 'ima12.png', 'starter'),
(14, 'Ham Sandwich', 'lorem ipsum dolor sit amet. consetetur sadipscing elitr.', '10', 'ima13.png', 'starter'),
(15, 'Ham Sandwich', 'lorem ipsum dolor sit amet. consetetur sadipscing elitr.', '10', 'suts9k7v.png', 'starter'),
(17, 'Ham Sandwich', 'lorem ipsum dolor sit amet. consetetur sadipscing elitr.', '10', 'aiu45f8t.png', 'starter');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
