-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 09:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lafleur`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_code` char(3) NOT NULL DEFAULT '',
  `cat_libelle` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_code`, `cat_libelle`) VALUES
('bul', 'Bulbes'),
('mas', 'Plantes à massif'),
('ros', 'Rosiers');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL DEFAULT '',
  `prix` decimal(5,2) NOT NULL DEFAULT '0.00',
  `image` varchar(50) NOT NULL DEFAULT '',
  `categorie` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `designation`, `prix`, `image`, `categorie`) VALUES
(1, '3 bulbes de bégonias', '5.00', 'bulbes_begonia', 'bul'),
(2, '10 bulbes de dahlias', '12.00', 'bulbes_dahlia', 'bul'),
(3, '50 glaïeuls', '9.00', 'bulbes_glaieul', 'bul'),
(4, 'Lot de 3 marguerites multicolores', '5.00', 'massif_marguerite', 'mas'),
(5, 'Bouquet de 6 pensées', '6.00', 'massif_pensee', 'mas'),
(6, 'Mélange varié de 10 plantes à massif', '15.00', 'massif_melange', 'mas'),
(7, '1 pied spécial grandes fleurs', '20.00', 'rosiers_gdefleur', 'ros'),
(8, 'Sélectionnée pour son parfum', '9.00', 'rosiers_parfum', 'ros'),
(9, 'Rosier arbuste grand développement', '8.00', 'rosiers_arbuste', 'ros');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
