-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 nov. 2023 à 09:21
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `youcontact`
--

-- --------------------------------------------------------




-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `dateinscription` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
--
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL, 
  `phone` varchar(250) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  FOREIGN KEY (id_user) REFERENCES utilisateur (id)
) ENGINE=InnoDB;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`, `email`, `dateinscription`) VALUES
(1, 'yassirrachad', 'yassir12568', 'yassirrachad123@gmail.com', '2023-11-22 16:16:10');
COMMIT;


-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `id_user`) VALUES
(1, 'hassan haraf', 'hassanharaf@gmail.com', '+212665478932', 1),
(2, 'zineb mokliss', 'zinebmokhliss2001@gmail.com', '+212645789321', 1),
(3, 'aguinan hok', 'hokaguinan@gmail.com', '+212678963210', 1),
(4, 'mohssin hassan', 'mohssin14789@gmail.com', '+212710325647', 1),
(5, 'agence tashilat', 'tashilatlmhadi@gmail.com', '+212525201348', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
