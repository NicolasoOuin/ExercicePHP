-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 27 Février 2017 à 17:41
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `my_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
`id` smallint(5) unsigned NOT NULL,
  `auteur` varchar(30) CHARACTER SET latin1 NOT NULL,
  `titre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contenu` text CHARACTER SET latin1 NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `contenu`, `dateAjout`, `dateModif`) VALUES
(1, 'Patrick', 'ma premiÃ¨re nouvelle', 'Bonjour le monde !', '2017-02-04 12:00:00', '2017-02-06 16:55:06'),
(2, 'Patrick', '2Ã¨me changÃ©', 'Salut !!!', '2017-02-06 16:13:18', '2017-02-27 16:06:31'),
(3, 'Patrick', '3 changÃ©', 'C''est un autre changement sur le 3', '2017-02-27 14:57:08', '2017-02-27 15:51:46'),
(4, 'Patrick', 'ma 4Ã¨me news', 'c''est un changement !', '2017-02-27 15:08:44', '2017-02-27 16:14:55'),
(5, 'Patrick', '5 changÃ©', 'bonsoir !!!!', '2017-02-27 15:48:15', '2017-02-27 17:09:08');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
