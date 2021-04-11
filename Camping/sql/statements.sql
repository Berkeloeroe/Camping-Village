CREATE database campingvillage;

USE campingvillage:

CREATE TABLE `reservering` (
  `ID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `datum` date NOT NULL,
  `duur` int(11) NOT NULL,
  `keuze_verblijf` varchar(255) NOT NULL,
  `aantal_personen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `activiteiten` (
  `ID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `naam` varchar(255) NOT NULL,
  `keuzeactiviteit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `medewerkers` (
  `ID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `naam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
