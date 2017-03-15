-- Client :  localhost:8889
-- Généré le :  Dim 05 Février 2017 à 16:31
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `my_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
`id` smallint(5) unsigned NOT NULL,
  `auteur` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `titre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `contenu` text COLLATE latin1_general_ci NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `contenu`, `dateAjout`, `dateModif`) VALUES
(1, 'Patrick', 'ma premiÃ¨re nouvelle', 'Bonjour le monde !', '2017-02-04 12:00:00', '2017-02-04 15:05:33');

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
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;