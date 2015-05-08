-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Mai 2015 à 21:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `code`) VALUES
(1, 'Animal', 'animal'),
(2, 'Humain', 'humain'),
(3, 'Nature', 'nature'),
(4, 'Outil', 'outil'),
(5, 'Loisirs', 'loisirs'),
(6, 'Transport', 'transport'),
(7, 'Arme', 'arme'),
(8, 'Alarme', 'alarme'),
(9, 'Instrument', 'instrument');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `prenom`, `nom`, `sexe`, `nationalite`, `date_naissance`, `mail`) VALUES
(1, 'Reda', 'Affane', 'masculin', 'france', '0000-00-00', 'reda.affane@telecom-bretagne.eu'),
(2, 'fvvdfvd', 'dvdef', 'masculin', 'france', '0000-00-00', 'vev@ve.ve'),
(3, 'dfvd', 'dvbd', 'masculin', 'france', '0000-00-00', 'reda.affane@telecom-bretagne.eu'),
(4, 'zgzevgz', 'reda', 'masculin', 'france', '0000-00-00', 'azfa@sdgvs.com'),
(5, 'hyguyg', 'reda', 'feminin', 'france', '0000-00-00', 'segeg@dfdef.ge');

-- --------------------------------------------------------

--
-- Structure de la table `son`
--

CREATE TABLE IF NOT EXISTS `son` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `duree` float NOT NULL,
  `choix` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `frequence` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contiendra tous les sons' AUTO_INCREMENT=106 ;

--
-- Contenu de la table `son`
--

INSERT INTO `son` (`id`, `nom`, `duree`, `choix`, `type`, `frequence`, `lien`, `id_categorie`) VALUES
(1, 'ane', 0.25, 'a', 'mono', '44100', '../MES_SONS/ane_0.25_a_mono_44100.wav', 1),
(2, 'ane', 0.25, 'b', 'mono', '44100', '../MES_SONS/ane_0.25_b_mono_44100.wav', 1),
(3, 'ane', 0.25, 'c', 'mono', '44100', '../MES_SONS/ane_0.25_c_mono_44100.wav', 1),
(4, 'ane', 0.25, 'd', 'mono', '44100', '../MES_SONS/ane_0.25_d_mono_44100.wav', 1),
(5, 'ane', 0.25, 'e', 'mono', '44100', '../MES_SONS/ane_0.25_e_mono_44100.wav', 1),
(6, 'ane', 0.5, 'a', 'mono', '44100', '../MES_SONS/ane_0.5_a_mono_44100.wav', 1),
(7, 'ane', 0.5, 'b', 'mono', '44100', '../MES_SONS/ane_0.5_b_mono_44100.wav', 1),
(8, 'ane', 0.5, 'c', 'mono', '44100', '../MES_SONS/ane_0.5_c_mono_44100.wav', 1),
(9, 'ane', 0.5, 'd', 'mono', '44100', '../MES_SONS/ane_0.5_d_mono_44100.wav', 1),
(10, 'ane', 0.5, 'e', 'mono', '44100', '../MES_SONS/ane_0.5_e_mono_44100.wav', 1),
(11, 'ane', 1, 'a', 'mono', '44100', '../MES_SONS/ane_1_a_mono_44100.wav', 1),
(12, 'ane', 1, 'b', 'mono', '44100', '../MES_SONS/ane_1_b_mono_44100.wav', 1),
(13, 'ane', 1, 'c', 'mono', '44100', '../MES_SONS/ane_1_c_mono_44100.wav', 1),
(14, 'ane', 1, 'd', 'mono', '44100', '../MES_SONS/ane_1_d_mono_44100.wav', 1),
(15, 'ane', 1, 'e', 'mono', '44100', '../MES_SONS/ane_1_e_mono_44100.wav', 1),
(16, 'cloche', 0.25, 'a', 'mono', '44100', '../MES_SONS/cloche_0.25_a_mono_44100.wav', 8),
(17, 'cloche', 0.25, 'b', 'mono', '44100', '../MES_SONS/cloche_0.25_b_mono_44100.wav', 8),
(18, 'cloche', 0.25, 'c', 'mono', '44100', '../MES_SONS/cloche_0.25_c_mono_44100.wav', 8),
(19, 'cloche', 0.25, 'd', 'mono', '44100', '../MES_SONS/cloche_0.25_d_mono_44100.wav', 8),
(20, 'cloche', 0.25, 'e', 'mono', '44100', '../MES_SONS/cloche_0.25_e_mono_44100.wav', 8),
(21, 'cloche', 0.5, 'a', 'mono', '44100', '../MES_SONS/cloche_0.5_a_mono_44100.wav', 8),
(22, 'cloche', 0.5, 'b', 'mono', '44100', '../MES_SONS/cloche_0.5_b_mono_44100.wav', 8),
(23, 'cloche', 0.5, 'c', 'mono', '44100', '../MES_SONS/cloche_0.5_c_mono_44100.wav', 8),
(24, 'cloche', 0.5, 'd', 'mono', '44100', '../MES_SONS/cloche_0.5_d_mono_44100.wav', 8),
(25, 'cloche', 0.5, 'e', 'mono', '44100', '../MES_SONS/cloche_0.5_e_mono_44100.wav', 8),
(26, 'cloche', 1, 'a', 'mono', '44100', '../MES_SONS/cloche_1_a_mono_44100.wav', 8),
(27, 'cloche', 1, 'b', 'mono', '44100', '../MES_SONS/cloche_1_b_mono_44100.wav', 8),
(28, 'cloche', 1, 'c', 'mono', '44100', '../MES_SONS/cloche_1_c_mono_44100.wav', 8),
(29, 'cloche', 1, 'd', 'mono', '44100', '../MES_SONS/cloche_1_d_mono_44100.wav', 8),
(30, 'cloche', 1, 'e', 'mono', '44100', '../MES_SONS/cloche_1_e_mono_44100.wav', 8),
(31, 'Gong', 0.25, 'a', 'mono', '44100', '../MES_SONS/Gong_0.25_a_mono_44100.wav', 8),
(32, 'Gong', 0.25, 'b', 'mono', '44100', '../MES_SONS/Gong_0.25_b_mono_44100.wav', 8),
(33, 'Gong', 0.25, 'c', 'mono', '44100', '../MES_SONS/Gong_0.25_c_mono_44100.wav', 8),
(34, 'Gong', 0.25, 'd', 'mono', '44100', '../MES_SONS/Gong_0.25_d_mono_44100.wav', 8),
(35, 'Gong', 0.25, 'e', 'mono', '44100', '../MES_SONS/Gong_0.25_e_mono_44100.wav', 8),
(36, 'Gong', 0.5, 'a', 'mono', '44100', '../MES_SONS/Gong_0.5_a_mono_44100.wav', 8),
(37, 'Gong', 0.5, 'b', 'mono', '44100', '../MES_SONS/Gong_0.5_b_mono_44100.wav', 8),
(38, 'Gong', 0.5, 'c', 'mono', '44100', '../MES_SONS/Gong_0.5_c_mono_44100.wav', 8),
(39, 'Gong', 0.5, 'd', 'mono', '44100', '../MES_SONS/Gong_0.5_d_mono_44100.wav', 8),
(40, 'Gong', 0.5, 'e', 'mono', '44100', '../MES_SONS/Gong_0.5_e_mono_44100.wav', 8),
(41, 'Gong', 1, 'a', 'mono', '44100', '../MES_SONS/Gong_1_a_mono_44100.wav', 8),
(42, 'Gong', 1, 'b', 'mono', '44100', '../MES_SONS/Gong_1_b_mono_44100.wav', 8),
(43, 'Gong', 1, 'c', 'mono', '44100', '../MES_SONS/Gong_1_c_mono_44100.wav', 8),
(44, 'Gong', 1, 'd', 'mono', '44100', '../MES_SONS/Gong_1_d_mono_44100.wav', 8),
(45, 'Gong', 1, 'e', 'mono', '44100', '../MES_SONS/Gong_1_e_mono_44100.wav', 8),
(46, 'Bongo', 0.25, 'a', 'mono', '44100', '../MES_SONS/Bongo_0.25_a_mono_44100.wav', 9),
(47, 'Bongo', 0.25, 'b', 'mono', '44100', '../MES_SONS/Bongo_0.25_b_mono_44100.wav', 9),
(48, 'Bongo', 0.25, 'c', 'mono', '44100', '../MES_SONS/Bongo_0.25_c_mono_44100.wav', 9),
(49, 'Bongo', 0.25, 'd', 'mono', '44100', '../MES_SONS/Bongo_0.25_d_mono_44100.wav', 9),
(50, 'Bongo', 0.25, 'e', 'mono', '44100', '../MES_SONS/Bongo_0.25_e_mono_44100.wav', 9),
(51, 'Bongo', 0.5, 'a', 'mono', '44100', '../MES_SONS/Bongo_0.5_a_mono_44100.wav', 9),
(52, 'Bongo', 0.5, 'b', 'mono', '44100', '../MES_SONS/Bongo_0.5_b_mono_44100.wav', 9),
(53, 'Bongo', 0.5, 'c', 'mono', '44100', '../MES_SONS/Bongo_0.5_c_mono_44100.wav', 9),
(54, 'Bongo', 0.5, 'd', 'mono', '44100', '../MES_SONS/Bongo_0.5_d_mono_44100.wav', 9),
(55, 'Bongo', 0.5, 'e', 'mono', '44100', '../MES_SONS/Bongo_0.5_e_mono_44100.wav', 9),
(56, 'Bongo', 1, 'a', 'mono', '44100', '../MES_SONS/Bongo_1_a_mono_44100.wav', 9),
(57, 'Bongo', 1, 'b', 'mono', '44100', '../MES_SONS/Bongo_1_b_mono_44100.wav', 9),
(58, 'Bongo', 1, 'c', 'mono', '44100', '../MES_SONS/Bongo_1_c_mono_44100.wav', 9),
(59, 'Bongo', 1, 'd', 'mono', '44100', '../MES_SONS/Bongo_1_d_mono_44100.wav', 9),
(60, 'Bongo', 1, 'e', 'mono', '44100', '../MES_SONS/Bongo_1_e_mono_44100.wav', 9),
(61, 'Congas', 0.25, 'a', 'mono', '44100', '../MES_SONS/Congas_0.25_a_mono_44100.wav', 9),
(62, 'Congas', 0.25, 'b', 'mono', '44100', '../MES_SONS/Congas_0.25_b_mono_44100.wav', 9),
(63, 'Congas', 0.25, 'c', 'mono', '44100', '../MES_SONS/Congas_0.25_c_mono_44100.wav', 9),
(64, 'Congas', 0.25, 'd', 'mono', '44100', '../MES_SONS/Congas_0.25_d_mono_44100.wav', 9),
(65, 'Congas', 0.25, 'e', 'mono', '44100', '../MES_SONS/Congas_0.25_e_mono_44100.wav', 9),
(66, 'Congas', 0.5, 'a', 'mono', '44100', '../MES_SONS/Congas_0.5_a_mono_44100.wav', 9),
(67, 'Congas', 0.5, 'b', 'mono', '44100', '../MES_SONS/Congas_0.5_b_mono_44100.wav', 9),
(68, 'Congas', 0.5, 'c', 'mono', '44100', '../MES_SONS/Congas_0.5_c_mono_44100.wav', 9),
(69, 'Congas', 0.5, 'd', 'mono', '44100', '../MES_SONS/Congas_0.5_d_mono_44100.wav', 9),
(70, 'Congas', 0.5, 'e', 'mono', '44100', '../MES_SONS/Congas_0.5_e_mono_44100.wav', 9),
(71, 'Congas', 1, 'a', 'mono', '44100', '../MES_SONS/Congas_1_a_mono_44100.wav', 9),
(72, 'Congas', 1, 'b', 'mono', '44100', '../MES_SONS/Congas_1_b_mono_44100.wav', 9),
(73, 'Congas', 1, 'c', 'mono', '44100', '../MES_SONS/Congas_1_c_mono_44100.wav', 9),
(74, 'Congas', 1, 'd', 'mono', '44100', '../MES_SONS/Congas_1_d_mono_44100.wav', 9),
(75, 'Congas', 1, 'e', 'mono', '44100', '../MES_SONS/Congas_1_e_mono_44100.wav', 9),
(76, 'Harp', 0.25, 'a', 'mono', '44100', '../MES_SONS/Harp_0.25_a_mono_44100.wav', 9),
(77, 'Harp', 0.25, 'b', 'mono', '44100', '../MES_SONS/Harp_0.25_b_mono_44100.wav', 9),
(78, 'Harp', 0.25, 'c', 'mono', '44100', '../MES_SONS/Harp_0.25_c_mono_44100.wav', 9),
(79, 'Harp', 0.25, 'd', 'mono', '44100', '../MES_SONS/Harp_0.25_d_mono_44100.wav', 9),
(80, 'Harp', 0.25, 'e', 'mono', '44100', '../MES_SONS/Harp_0.25_e_mono_44100.wav', 9),
(81, 'Harp', 0.5, 'a', 'mono', '44100', '../MES_SONS/Harp_0.5_a_mono_44100.wav', 9),
(82, 'Harp', 0.5, 'b', 'mono', '44100', '../MES_SONS/Harp_0.5_b_mono_44100.wav', 9),
(83, 'Harp', 0.5, 'c', 'mono', '44100', '../MES_SONS/Harp_0.5_c_mono_44100.wav', 9),
(84, 'Harp', 0.5, 'd', 'mono', '44100', '../MES_SONS/Harp_0.5_d_mono_44100.wav', 9),
(85, 'Harp', 0.5, 'e', 'mono', '44100', '../MES_SONS/Harp_0.5_e_mono_44100.wav', 9),
(86, 'Harp', 1, 'a', 'mono', '44100', '../MES_SONS/Harp_1_a_mono_44100.wav', 9),
(87, 'Harp', 1, 'b', 'mono', '44100', '../MES_SONS/Harp_1_b_mono_44100.wav', 9),
(88, 'Harp', 1, 'c', 'mono', '44100', '../MES_SONS/Harp_1_c_mono_44100.wav', 9),
(89, 'Harp', 1, 'd', 'mono', '44100', '../MES_SONS/Harp_1_d_mono_44100.wav', 9),
(90, 'Harp', 1, 'e', 'mono', '44100', '../MES_SONS/Harp_1_e_mono_44100.wav', 9),
(91, 'Timbale', 0.25, 'a', 'mono', '44100', '../MES_SONS/Timbale_0.25_a_mono_44100.wav', 9),
(92, 'Timbale', 0.25, 'b', 'mono', '44100', '../MES_SONS/Timbale_0.25_b_mono_44100.wav', 9),
(93, 'Timbale', 0.25, 'c', 'mono', '44100', '../MES_SONS/Timbale_0.25_c_mono_44100.wav', 9),
(94, 'Timbale', 0.25, 'd', 'mono', '44100', '../MES_SONS/Timbale_0.25_d_mono_44100.wav', 9),
(95, 'Timbale', 0.25, 'e', 'mono', '44100', '../MES_SONS/Timbale_0.25_e_mono_44100.wav', 9),
(96, 'Timbale', 0.5, 'a', 'mono', '44100', '../MES_SONS/Timbale_0.5_a_mono_44100.wav', 9),
(97, 'Timbale', 0.5, 'b', 'mono', '44100', '../MES_SONS/Timbale_0.5_b_mono_44100.wav', 9),
(98, 'Timbale', 0.5, 'c', 'mono', '44100', '../MES_SONS/Timbale_0.5_c_mono_44100.wav', 9),
(99, 'Timbale', 0.5, 'd', 'mono', '44100', '../MES_SONS/Timbale_0.5_d_mono_44100.wav', 9),
(100, 'Timbale', 0.5, 'e', 'mono', '44100', '../MES_SONS/Timbale_0.5_e_mono_44100.wav', 9),
(101, 'Timbale', 1, 'a', 'mono', '44100', '../MES_SONS/Timbale_1_a_mono_44100.wav', 9),
(102, 'Timbale', 1, 'b', 'mono', '44100', '../MES_SONS/Timbale_1_b_mono_44100.wav', 9),
(103, 'Timbale', 1, 'c', 'mono', '44100', '../MES_SONS/Timbale_1_c_mono_44100.wav', 9),
(104, 'Timbale', 1, 'd', 'mono', '44100', '../MES_SONS/Timbale_1_d_mono_44100.wav', 9),
(105, 'Timbale', 1, 'e', 'mono', '44100', '../MES_SONS/Timbale_1_e_mono_44100.wav', 9);

-- --------------------------------------------------------

--
-- Structure de la table `test_categorie`
--

CREATE TABLE IF NOT EXISTS `test_categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `template` text NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `test_categorie`
--

INSERT INTO `test_categorie` (`id`, `nom`, `template`) VALUES
(5, 'test_affectif', ''),
(2, 'test_categorisation', ''),
(3, 'test_familiarite', ''),
(1, 'test_identification', ''),
(4, 'test_imageabilite', ''),
(6, 'test_representativite', '');

-- --------------------------------------------------------

--
-- Structure de la table `test_personne`
--

CREATE TABLE IF NOT EXISTS `test_personne` (
  `id_test` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_son` int(11) NOT NULL,
  `test_identification` varchar(255) NOT NULL,
  `test_categorisation` varchar(255) NOT NULL,
  `test_representativite` int(11) NOT NULL,
  `test_familiarite` int(11) NOT NULL,
  `test_affectif` int(11) NOT NULL,
  `test_imageabilite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='stock les résultats des utilisateurs';

--
-- Contenu de la table `test_personne`
--

INSERT INTO `test_personne` (`id_test`, `id_personne`, `id_son`, `test_identification`, `test_categorisation`, `test_representativite`, `test_familiarite`, `test_affectif`, `test_imageabilite`) VALUES
(0, 0, 0, '', '0', 0, 3, 0, 0),
(0, 0, 0, 'tonnerre', '0', 0, 0, 0, 0),
(0, 0, 0, '', '0', 0, 0, 0, 0),
(0, 0, 0, '', '0', 0, 0, 0, 0),
(0, 0, 0, '', '0', 0, 0, 0, 0),
(0, 0, 0, '', '0', 0, 6, 0, 0),
(0, 0, 0, '', 'transport', 0, 0, 0, 0),
(0, 0, 0, '', '2', 0, 0, 0, 0),
(0, 0, 0, '', '5', 0, 0, 0, 0),
(0, 0, 0, '', '', 0, 0, 0, 1),
(0, 0, 0, '', '', 0, 0, 0, 3),
(0, 0, 0, '', '', 0, 0, 0, 4),
(0, 0, 0, '', '', 0, 0, 0, -2),
(0, 0, 0, '', '', 0, 0, 1, 0),
(0, 0, 0, '', '', 0, 0, -1, 0),
(0, 0, 0, 'tonnerre', '', 0, 0, 0, 0),
(0, 0, 1, 'blabla', '', 0, 0, 0, 0),
(0, 0, 0, '', 'nature', 0, 0, 0, 0),
(0, 0, 0, 'zefzfz', '', 0, 0, 0, 0),
(0, 0, 0, '', '', 0, 0, 0, 0),
(0, 0, 0, 'azaz', '', 0, 0, 0, 0),
(0, 0, 0, 'qsdvsdvs', '', 0, 0, 0, 0),
(0, 0, 0, '', 'animal', 0, 0, 0, 0),
(0, 0, 0, '', '', 0, 2, 0, 0),
(0, 0, 0, '', '', 0, 0, 0, 3),
(0, 0, 0, '', 'humain', 0, 0, 0, 0),
(0, 0, 0, '', 'nature', 0, 0, 0, 0),
(0, 0, 0, '', 'aaa', 0, 0, 0, 0),
(0, 0, 0, '', 'aaa', 0, 0, 0, 0),
(0, 0, 0, '', 'aaa', 0, 0, 0, 0),
(0, 0, 0, '', 'outil', 0, 0, 0, 0),
(0, 0, 0, '', '$donnees[''code'']', 0, 0, 0, 0),
(0, 0, 0, '', 'arme', 0, 0, 0, 0),
(0, 0, 0, '', '5', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
