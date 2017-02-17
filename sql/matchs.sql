-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Février 2017 à 12:15
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation-php-poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE `matchs` (
  `id` int(11) NOT NULL,
  `equipe_recevant` varchar(255) NOT NULL,
  `equipe_recue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `type_competition` varchar(255) NOT NULL,
  `resultat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matchs`
--

INSERT INTO `matchs` (`id`, `equipe_recevant`, `equipe_recue`, `date`, `lieu`, `type_competition`, `resultat`) VALUES
(1, 'Juventus', 'Arsenal', '2016-12-15', 'Lyon', 'Europa League', ''),
(2, 'Juventus', 'FC Porto', '2016-12-15', 'Paris', 'Europa League', '3/2'),
(3, 'Benefica Lisbonne', 'PSG', '2016-12-15', 'Paris', 'Europa League', '0/5'),
(4, 'FC Porto', 'Benefica Lisbonne', '2015-12-15', 'Madrid', 'Europa League', '2/2'),
(5, 'Arsenal', 'PSG', '2015-12-25', 'Madrid', 'Europa League', '4/4'),
(6, 'FC Porto', 'Juventus', '2017-02-08', 'Paris', 'Europa League', '3/2'),
(7, 'Benefica Lisbonne', 'FC Porto', '2016-12-08', 'Paris', 'amicale', '3-2'),
(8, 'FC Porto', 'Juventus', '2016-12-08', 'Paris', 'amicale', '3-2');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `matchs`
--
ALTER TABLE `matchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
