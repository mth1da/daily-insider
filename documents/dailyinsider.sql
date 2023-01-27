-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 mai 2022 à 15:49
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dailyinsider`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int NOT NULL COMMENT 'identifiant de l''article',
  `titre` varchar(500) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'titre de l''article',
  `href` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `href`) VALUES
(1, 'Conflit du Tigré : les États-Unis se prononcent.', 'pol_tigre.php'),
(2, 'Frontière Pologne-Biélorussie : une attaque migratoire ?', 'pol_bielorussie.php'),
(3, 'France : Covid-19, le discours d\'Emmanuel Macron.', 'pol_macron.php'),
(4, 'France : Un budget serré pour Noël cette année ? ', 'eco_budgetNoel.php'),
(5, 'Elon Musk vend pour 5 Milliards de dollars d\'actions Tesla.', 'eco_tesla.php'),
(6, 'Réchauffement climatique et COP26.', 'env_cop.php'),
(7, 'Sri Lanka et Inde : Inondations au niveau du Tamil Nadu.', 'env_inondations.php'),
(8, 'France : Une baleine a été retrouvée sur le port de Calais.', 'env_baleine.php'),
(9, 'Autriche : Confinement pour les non-vaccinés.', 'soc_autriche.php'),
(10, 'Peng Shuai : une disparition inquiétante.', 'soc_shuai.php'),
(11, 'Joggeuse de 17 ans retrouvée vivante après sa disparition en Mayenne, a-t-elle été enlevée ?', 'soc_joggeuse.php'),
(12, 'France-Kazakhstan : les Bleus qualifiés pour la Coupe du Monde 2022.', 'sport_france_kazak.php'),
(13, 'Italie : Giro 2022, le parcours dévoilé.', 'sport_giro.php'),
(14, 'Thierry Mugler, Couturissime : Une exposition qui se conjugue au superlatif.', 'div_couturissime.php'),
(15, 'Flashback : la chute du Mur.', 'div_murdeberlin.php');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_user` int NOT NULL,
  `id_article` int NOT NULL,
  PRIMARY KEY (`id_user`,`id_article`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id_user`, `id_article`) VALUES
(1, 7),
(1, 12),
(1, 14),
(2, 6),
(2, 14),
(3, 1),
(3, 2),
(3, 12);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''utilisateur',
  `nom_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'nom de l''utilisateur',
  `prenom_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'prénom de l''utilisateur',
  `sexe_user` varchar(1) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'sexe de l''utilisateur',
  `naissance_user` date NOT NULL COMMENT 'date de naissance de l''utilisateur',
  `continent_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'continent de résidence de l''utilisateur',
  `mail_user` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'adresse mail de l''utilisateur',
  `mdp_user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'mot de passe de l''utilisateur',
  `pseudo_user` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`,`mail_user`),
  UNIQUE KEY `mail_user` (`mail_user`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `sexe_user`, `naissance_user`, `continent_user`, `mail_user`, `mdp_user`, `pseudo_user`) VALUES
(1, 'turra', 'mathilde', 'F', '2002-11-15', 'Europe', 'test@gmail.com', '1234', 'mathildet02'),
(2, 'sylla', 'fatou', 'F', '2002-09-24', 'Europe', 'spooky@gmail.com', 'spooky', 'fatous02'),
(3, 'cheron', 'lilian', 'H', '2002-01-19', 'Asie', 'test2@gmail.com', 'azerty', 'lilianc02'),
(4, 'exquis', 'aisha', 'F', '2001-01-01', 'Europe', 'exquis@gmail.com', 'exquis', 'aishae01'),
(5, 'tour', 'mathilde', 'F', '1999-08-19', 'Oceanie', 'test3@gmail.com', 'test3', 'mathildet99'),
(6, 'trou', 'mathilde', 'F', '1999-04-14', 'Oceanie', 'test4@gmail.com', 'test4', 'mathildet99-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
