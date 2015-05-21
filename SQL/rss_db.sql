-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 22 Février 2015 à 19:44
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `RSS`
--
CREATE DATABASE IF NOT EXISTS `RSS` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `RSS`;

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `img`
--

INSERT INTO `img` (`img_id`, `id_user`, `name`) VALUES
(1, 1, '../asset/avatar/1.jpg'),
(2, 1, '../asset/avatar/1.jpg'),
(3, 1, '../asset/avatar/1.jpg'),
(4, 1, '../asset/avatar/1.jpg'),
(5, 1, '../asset/avatar/1.jpg'),
(6, 1, '../asset/avatar/1.jpg'),
(7, 1, '../asset/avatar/1.jpg'),
(8, 1, '../asset/avatar/1.jpg'),
(9, 1, '../asset/avatar/1.jpg'),
(10, 1, '../asset/avatar/1.jpg'),
(11, 1, '../asset/avatar/1.jpg'),
(12, 1, '../asset/avatar/1.jpg'),
(13, 1, '../asset/avatar/1.jpg'),
(14, 2, '../asset/img/no_user.jpg'),
(15, 1, '../asset/avatar/1.jpg'),
(16, 1, '../asset/avatar/1.jpg'),
(17, 1, '../asset/avatar/1.jpg'),
(18, 1, '../asset/avatar/1.jpg'),
(19, 1, '../asset/avatar/1.jpg'),
(20, 1, '../asset/avatar/1.jpg'),
(21, 1, '../asset/avatar/1.jpg'),
(22, 1, '../asset/avatar/1.jpg'),
(23, 1, '../asset/avatar/1.jpg'),
(24, 1, '../asset/avatar/1.jpg'),
(25, 1, '../asset/avatar/1.jpg'),
(26, 1, '../asset/img/no_user.jpg'),
(27, 1, '../asset/img/no_user.jpg'),
(28, 1, '../asset/img/no_user.jpg'),
(29, 1, '../asset/img/no_user.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `id_site` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `favoris` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sites`
--

INSERT INTO `sites` (`id_site`, `id_user`, `name`, `link`, `active`, `favoris`) VALUES
(1, 1, 'MacGeneration', 'http://megaflux.macg.co', 1, 1),
(2, 1, 'iGeneration', 'http://rss.igen.fr', 1, 1),
(3, 1, 'Developpez.com', 'http://www.developpez.com/index/rss', 1, 0),
(4, 1, 'Blog - Stack Exchange', 'http://blog.stackoverflow.com/feed/', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `login`, `email`, `password`, `img`) VALUES
(1, 'Beors', 'Sofiane', 'kidd_soso', 'theabstractdev@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id_site`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
