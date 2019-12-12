-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 déc. 2019 à 17:48
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_gestpers`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `datenaiss` date NOT NULL,
  `contacts` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `emploi` varchar(100) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `dateembauche` date NOT NULL,
  `login` varchar(10) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  `lieunaiss` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`matricule`, `nom`, `prenom`, `datenaiss`, `contacts`, `email`, `grade`, `emploi`, `fonction`, `direction`, `departement`, `service`, `dateembauche`, `login`, `motdepasse`, `lieunaiss`) VALUES
('211001A', 'KRAIDY', 'Franck', '1970-11-13', '0097653', 'franck@gmail.com', 'A5', 'INGENIEUR STATISTIQUE', 'CHEF DE SERVICE STATISTIQUE', 'DIRECTION DES STATISTIQUES', 'DEPARTEMENT DE LA PLANIFICATION', 'STATISTIQUES', '2000-01-01', 'franck', 'passe', 'ABIDJAN'),
('210002B', 'DIGBEU', 'Henry', '1987-12-22', '77889030', 'henry@yahoo.fr', 'A3', 'TECHNICIEN RESEAU', 'IT Support', 'DIRECTION GENERALE DE LA SANTE', 'SUIVI ET EVALUATION', 'SUIVI ET EVALUATION', '2012-12-22', 'henry', 'passe', 'GAGNOA'),
('398426U', 'TRAORE', 'Mamadou Ben', '1990-10-10', '+225 07 23 37 25', 'tmamadouben@yahoo.fr', 'A3', 'IT Specialist', 'Senior Software Engineer', 'DGS', 'DIIS', 'SEDVT', '2013-09-06', 'admin', 'Admin987654321', 'treichville'),
('123QST', 'COULIBALY', 'JUNIOR', '1978-10-10', '6677880', 'coul@gmail.com', 'P9', 'VENDEUR', 'CHEF', 'VENTE', 'VOITURE', 'PNEUS', '2000-09-12', 'coul', 'Admin123', 'PARIS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `matricule` (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
