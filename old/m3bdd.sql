-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 09 oct. 2021 à 06:37
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `m3bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `m3_prod`
--

CREATE TABLE `m3_prod` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `format` varchar(256) NOT NULL,
  `technique` varchar(256) NOT NULL,
  `prix` int(11) NOT NULL,
  `rubrique` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `m3_prod`
--

INSERT INTO `m3_prod` (`id`, `title`, `format`, `technique`, `prix`, `rubrique`) VALUES
(55, 'inquisite NÂ°1', '100x81cm', 'acrylique sur toile', 700, 'peinture'),
(58, 'inquisite NÂ°3', '100x81cm', 'acrylique sur toile', 700, 'peinture'),
(45, 'vartiations', '100x100cm', 'infographie', 600, 'infographie'),
(44, 'roll over beethoven', '100x70cm', 'infographie', 600, 'infographie'),
(56, 'dance NÂ°4', '100x100cm', 'infographie/3d', 600, 'infographie'),
(57, 'inquisite NÂ°2', '100x81cm', 'acrylique sur toile', 700, 'peinture'),
(53, 'dance NÂ°3', '100x100cm', 'infographie', 600, 'infographie'),
(52, 'dance NÂ°2', '100x10cm', 'infographie', 600, 'infographie'),
(51, 'dance NÂ°1', '100x70', 'infographie/3d', 600, 'infographie'),
(50, 'brother spawn', '100x70cm', 'infographie', 600, 'infographie'),
(49, 'controversy', '100x70cm', 'infographie', 600, 'infographie'),
(48, 'cold clouds', '100x70cm', 'infographie', 600, 'infographie'),
(47, 'cheers', '100x70cm', 'infographie', 600, 'infographie'),
(46, 'variations NÂ°2', '100x70cm', 'infographie', 600, 'infographie'),
(43, 'monolith', '100x70cm', 'infographie', 600, 'infographie'),
(59, 'inquisite NÂ°4', '100x81cm', 'acrylique sur toile', 700, 'peinture'),
(60, 'pastels polyptique', '63x90cm', 'pastels et encre', 600, 'pastel'),
(61, 'anges et archange', '63x90cm', 'pastels et encre', 600, 'pastel'),
(62, 'polyptique NÂ°1', '63x60', 'pastels et encre', 600, 'pastel'),
(63, 'road runners', '84x90', 'pastels et encre', 800, 'pastel'),
(64, 'cohorte', '30x30', 'impression 3d', 700, 'sculpture'),
(65, 'bob eleven', '30x30', 'impression 3d', 700, 'sculpture'),
(66, 'bob eleven NÂ°2', '30x30cm', 'impression 3d', 700, 'sculpture'),
(67, 'bob spotlight', '20x20cm', 'impression 3d', 400, 'sculpture'),
(68, 'faucheuse', '65x50cm', 'encre sur papier', 500, 'dessin'),
(69, 'wrong time', '65x50cm', 'encre sur papier', 500, 'dessin'),
(70, 'this is it', '65x50cm', 'encre sur papier', 500, 'dessin'),
(71, 'manu militari', '65x50cm', 'encre sur papier', 500, 'dessin'),
(72, 'sans dessus dessous', '65x50cm', 'encre sur papier', 500, 'dessin'),
(73, 'panne de secteur', '65x50cm', 'encre sur papier', 500, 'dessin'),
(74, 'triste', '65x50cm', 'encre sur papier', 500, 'dessin'),
(75, 'overburning', '65x50cm', 'encre sur papier', 500, 'dessin');

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE `rubriques` (
  `id_rubrique` int(11) NOT NULL,
  `rubrique_name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rubriques`
--

INSERT INTO `rubriques` (`id_rubrique`, `rubrique_name`) VALUES
(1, 'peinture'),
(2, 'pastel'),
(3, 'infographie'),
(4, 'dessin'),
(5, 'sculpture');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `nom` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `sitename` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`nom`, `pass`, `sitename`) VALUES
('remib', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'm3commerce of Art'),
('remib', '05395b37107ddc07b95434e0519c18271d9eddfa', 'adacadabra ecommerce'),
('remib', '01550739a0eff55de5ac6106c1ea6854d8dfdcb1', 'remib artshop');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `m3_prod`
--
ALTER TABLE `m3_prod`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD PRIMARY KEY (`id_rubrique`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `m3_prod`
--
ALTER TABLE `m3_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `rubriques`
--
ALTER TABLE `rubriques`
  MODIFY `id_rubrique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
