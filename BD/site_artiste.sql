-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 08 nov. 2020 à 01:17
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_artiste`
--

-- --------------------------------------------------------

--
-- Structure de la table `exposition`
--

CREATE TABLE `exposition` (
  `id` int(5) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `lieu` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `dateVernissage` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exposition`
--

INSERT INTO `exposition` (`id`, `nom`, `lieu`, `adresse`, `dateDebut`, `dateFin`, `dateVernissage`) VALUES
(1, 'expo1', 'centre 1', 'rue machin', '2016-06-10', '2016-06-24', '2016-06-10 18:00:00'),
(2, 'expo2', 'centre 2', 'rue chose', '2017-09-03', '2016-09-24', '2016-09-05 19:00:00'),
(3, 'expo3', 'centre 3', 'rue truc', '2018-02-25', '2018-03-10', '2016-02-10 18:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

CREATE TABLE `oeuvre` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `annee` int(4) NOT NULL,
  `technique` varchar(20) NOT NULL,
  `support` varchar(20) NOT NULL,
  `largeur` int(3) NOT NULL,
  `hauteur` int(3) NOT NULL,
  `prix` int(6) NOT NULL,
  `petiteImage` varchar(20) NOT NULL,
  `grandeImage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `oeuvre`
--

INSERT INTO `oeuvre` (`id`, `titre`, `annee`, `technique`, `support`, `largeur`, `hauteur`, `prix`, `petiteImage`, `grandeImage`) VALUES
(1, 'titre1', 2016, 'huile', 'toile', 40, 50, 500, 'image\\titre1m.jpg', 'image\\titre1.jpg'),
(2, 'titre2', 2016, 'acrylique', 'toile', 30, 60, 500, 'image\\titre2m.jpg', 'image\\titre2.jpg'),
(3, 'titre3', 2016, 'pastel à l\'huile', 'papier', 100, 120, 1000, 'image\\titre3m.jpg', 'image\\titre3.jpg'),
(4, 'titre4', 2017, 'huile', 'bois', 40, 50, 800, 'image\\titre4m.jpg', 'image\\titre4.jpg'),
(5, 'titre5', 2017, 'huile', 'toile', 20, 15, 200, 'image\\titre5m.jpg', 'image\\titre5.jpg'),
(6, 'titre6', 2017, 'pastel à l\'huile', 'papier', 40, 50, 400, 'image\\titre6m.jpg', 'image\\titre6.jpg'),
(7, 'titre7', 2018, 'acrylique', 'toile', 40, 50, 600, 'image\\titre7m.jpg', 'image\\titre7.jpg'),
(8, 'titre8', 2017, 'huile', 'toile', 20, 15, 200, 'image\\titre8m.jpg', 'image\\titre8.jpg'),
(9, 'titre9', 2017, 'pastel à l\'huile', 'papier', 40, 50, 400, 'image\\titre9m.jpg', 'image\\titre9.jpg'),
(10, 'titre10', 2018, 'acrylique', 'toile', 40, 50, 600, 'image\\titre10m.jpg', 'image\\titre10.jpg'),
(11, 'titre11', 2017, 'pastel à l\'huile', 'papier', 40, 50, 400, 'image\\titre11m.jpg', 'image\\titre11.jpg'),
(12, 'titre12', 2018, 'acrylique', 'toile', 40, 50, 600, 'image\\titre12m.jpg', 'image\\titre12.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre_exposee`
--

CREATE TABLE `oeuvre_exposee` (
  `id_exposition` int(5) NOT NULL,
  `id_oeuvre` int(11) NOT NULL,
  `prix` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `oeuvre_exposee`
--

INSERT INTO `oeuvre_exposee` (`id_exposition`, `id_oeuvre`, `prix`) VALUES
(1, 1, 500),
(1, 2, 500),
(2, 2, 550),
(3, 2, 450),
(1, 3, 1000),
(2, 3, 1100),
(2, 4, 880),
(3, 4, 800),
(2, 5, 220),
(2, 6, 440),
(3, 6, 400),
(3, 7, 600);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exposition`
--
ALTER TABLE `exposition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oeuvre_exposee`
--
ALTER TABLE `oeuvre_exposee`
  ADD PRIMARY KEY (`id_oeuvre`,`id_exposition`),
  ADD KEY `id_exposition` (`id_exposition`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exposition`
--
ALTER TABLE `exposition`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `oeuvre_exposee`
--
ALTER TABLE `oeuvre_exposee`
  ADD CONSTRAINT `oeuvre_exposee_ibfk_1` FOREIGN KEY (`id_oeuvre`) REFERENCES `oeuvre` (`id`),
  ADD CONSTRAINT `oeuvre_exposee_ibfk_2` FOREIGN KEY (`id_exposition`) REFERENCES `exposition` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
