-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 juil. 2024 à 00:22
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blueprotein`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE `application` (
  `id_application` int(255) NOT NULL,
  `application_produit` text NOT NULL,
  `image_application` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avantage`
--

CREATE TABLE `avantage` (
  `id_avantage` int(255) NOT NULL,
  `avantage_produit` text NOT NULL,
  `image_avantage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bloc`
--

CREATE TABLE `bloc` (
  `id_bloc` int(255) NOT NULL,
  `bloc` text NOT NULL,
  `image_etape` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `certification`
--

CREATE TABLE `certification` (
  `id_certificat` int(255) NOT NULL,
  `certificat_produit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `composition`
--

CREATE TABLE `composition` (
  `id_composition` int(255) NOT NULL,
  `composition_produit` text NOT NULL,
  `image_composition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `culture`
--

CREATE TABLE `culture` (
  `id_culture` int(255) NOT NULL,
  `culture_produit` text NOT NULL,
  `image_culture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `distributeur`
--

CREATE TABLE `distributeur` (
  `id_revendeur` int(255) NOT NULL,
  `nom_revendeur` varchar(255) NOT NULL,
  `latitude_revendeur` int(255) NOT NULL,
  `longitude_revendeur` int(255) NOT NULL,
  `mail_revendeur` varchar(255) NOT NULL,
  `tel_revendeur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `id_etape` int(255) NOT NULL,
  `etape_produit` text NOT NULL,
  `image_etape` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `image_produit` varchar(255) NOT NULL,
  `id_avantage` int(255) NOT NULL,
  `id_composition` int(255) NOT NULL,
  `id_utilisation` int(255) NOT NULL,
  `id_précaution` int(255) NOT NULL,
  `description1_produit` text NOT NULL,
  `description2_produit` int(255) NOT NULL,
  `id_application` int(255) NOT NULL,
  `id_culture` int(255) NOT NULL,
  `id_etape` int(255) NOT NULL,
  `id_certification` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `précaution`
--

CREATE TABLE `précaution` (
  `id_précaution` int(255) NOT NULL,
  `précaution_produit` text NOT NULL,
  `image_précaution` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

CREATE TABLE `utilisation` (
  `id_utilisation` int(255) NOT NULL,
  `utilisation_produit` text NOT NULL,
  `image_utilisation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id_application`);

--
-- Index pour la table `avantage`
--
ALTER TABLE `avantage`
  ADD PRIMARY KEY (`id_avantage`);

--
-- Index pour la table `bloc`
--
ALTER TABLE `bloc`
  ADD PRIMARY KEY (`id_bloc`);

--
-- Index pour la table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id_certificat`);

--
-- Index pour la table `composition`
--
ALTER TABLE `composition`
  ADD PRIMARY KEY (`id_composition`);

--
-- Index pour la table `culture`
--
ALTER TABLE `culture`
  ADD PRIMARY KEY (`id_culture`);

--
-- Index pour la table `distributeur`
--
ALTER TABLE `distributeur`
  ADD PRIMARY KEY (`id_revendeur`);

--
-- Index pour la table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`id_etape`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_avantage` (`id_avantage`),
  ADD KEY `id_utilisation` (`id_utilisation`),
  ADD KEY `id_composition` (`id_composition`),
  ADD KEY `id_précaution` (`id_précaution`),
  ADD KEY `id_application` (`id_application`),
  ADD KEY `id_etape` (`id_etape`),
  ADD KEY `id_culture` (`id_culture`),
  ADD KEY `id_certification` (`id_certification`);

--
-- Index pour la table `précaution`
--
ALTER TABLE `précaution`
  ADD PRIMARY KEY (`id_précaution`);

--
-- Index pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD PRIMARY KEY (`id_utilisation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `application`
--
ALTER TABLE `application`
  MODIFY `id_application` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avantage`
--
ALTER TABLE `avantage`
  MODIFY `id_avantage` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bloc`
--
ALTER TABLE `bloc`
  MODIFY `id_bloc` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `certification`
--
ALTER TABLE `certification`
  MODIFY `id_certificat` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `culture`
--
ALTER TABLE `culture`
  MODIFY `id_culture` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `distributeur`
--
ALTER TABLE `distributeur`
  MODIFY `id_revendeur` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `id_etape` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `précaution`
--
ALTER TABLE `précaution`
  MODIFY `id_précaution` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisation`
--
ALTER TABLE `utilisation`
  MODIFY `id_utilisation` int(255) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_avantage`) REFERENCES `avantage` (`id_avantage`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_utilisation`) REFERENCES `utilisation` (`id_utilisation`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`id_composition`) REFERENCES `composition` (`id_composition`),
  ADD CONSTRAINT `produit_ibfk_4` FOREIGN KEY (`id_précaution`) REFERENCES `précaution` (`id_précaution`),
  ADD CONSTRAINT `produit_ibfk_5` FOREIGN KEY (`id_application`) REFERENCES `application` (`id_application`),
  ADD CONSTRAINT `produit_ibfk_6` FOREIGN KEY (`id_etape`) REFERENCES `etape` (`id_etape`),
  ADD CONSTRAINT `produit_ibfk_7` FOREIGN KEY (`id_culture`) REFERENCES `culture` (`id_culture`),
  ADD CONSTRAINT `produit_ibfk_8` FOREIGN KEY (`id_certification`) REFERENCES `certification` (`id_certificat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
