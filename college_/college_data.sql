-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2019 at 01:26 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `matiere`, `note`, `date`, `idEleve`) VALUES
(1, 'Français', 5, '2019-09-09', 1),
(2, 'Histoire-Géographie', 15, '2019-09-09', 1),
(3, 'Mathématiques', 16, '2019-09-09', 2),
(4, 'Mathématiques', 10, '2019-09-10', 1),
(5, 'Sciences', 9, '2019-09-10', 2),
(6, 'Sport', 18, '2019-09-10', 3);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `statut`, `nom`, `prenom`, `sexe`, `age`, `motDePasse`, `classe`, `eleve_id`, `emailParent`, `email`, `anciennete`, `salaire`, `expulsion`) VALUES
(1, 'Directeur', 'Goldman', 'Jean-Jacques', NULL, NULL, 'goldPass', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Instituteur', 'Delenoix', 'Jean', NULL, NULL, 'delePass', 'CP', NULL, NULL, 'jean.delenoix@mail.com', 1, 24000, NULL),
(3, 'Instituteur', 'Bekritch', 'Justine', NULL, NULL, 'bekrPass', 'CE1', NULL, NULL, 'justine.bekritch@mail.com', 12, 28000, NULL),
(4, 'Instituteur', 'Garbo', 'Greta', NULL, NULL, 'garbPass', 'CE2', NULL, NULL, 'greta.garbo@mail.com', 7, 26800, NULL),
(5, 'Instituteur', 'Ghelain', 'Georges', NULL, NULL, 'ghelPass', 'CM1', NULL, NULL, 'georges.ghelain@mail.com', 8, 27000, NULL),
(6, 'Instituteur', 'Charbonnier', 'Gisèle', NULL, NULL, 'charPass', 'CM2', NULL, NULL, 'gisele.charbonnier@mail.com', 5, 23000, NULL),
(7, 'Elève', 'Allon', 'Levy', 'h', 6, 'allonPass', 'CP', 1, 'famille.allon@mail.com', NULL, NULL, NULL, 0),
(8, 'Elève', 'Bacard', 'Hugo', 'h', 5, 'bacardPass', 'CP', 2, 'famille.bacard@mail.com', NULL, NULL, NULL, 1),
(9, 'Elève', 'Becker', 'Matthew', 'h', 6, 'beckerPass', 'CP', 3, 'famille.becker@mail.com', NULL, NULL, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
