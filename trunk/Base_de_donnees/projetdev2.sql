-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Mai 2015 à 21:25
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
