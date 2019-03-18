-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 dec 2018 om 15:29
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerkshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inventory`
--

CREATE TABLE `inventory` (
  `Name` varchar(255) DEFAULT NULL,
  `Price` decimal(3,2) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `inventory`
--

INSERT INTO `inventory` (`Name`, `Price`, `Image`, `Categorie`) VALUES
('Lawine Pijl', '9.99', 'Project/Project_2/Code/Images/Lawine_Pijl.jpg', 'Vuurpijl'),
('Sputnick', '9.99', 'Project/Project_2/Code/Images/sputnick_1.jpg', 'Vuurpijl'),
('Bomba Pijl', '5.00', 'Project/Project_2/Code/Images/Bomba_Pijl_1.jpg', 'Vuurpijl'),
('Thunderking', '7.00', 'Project/Project_2/Code/Images/Thunderking_1.jpg', 'knalvuurwerk'),
('Black Mamba', '5.00', 'Project/Project_2/Code/Images/Black_Mamba_1.jpg', 'knalvuurwerk'),
('Ratelband', '9.99', 'Project/Project_2/Code/Images/Ratelvband_1.jpg', 'knalvuurwerk'),
('Killer Bee', '3.00', 'Project/Project_2/Code/Images/Killer_Bee_1.jpg', 'Kindervuurwerk'),
('Grondbloemen', '4.00', 'Project/Project_2/Code/Images/Grondbloemen_1.jpg', 'Kindervuurwerk'),
('Sterretje', '1.00', 'Project.Project_2/Code/Images/Sterretje_1.jpg', 'Kindervuurwerk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
