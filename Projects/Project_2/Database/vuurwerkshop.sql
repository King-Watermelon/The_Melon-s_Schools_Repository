-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 jan 2019 om 21:26
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
('Lawine Pijl', '9.99', "<img src= 'Images/Lawine_Pijl.jpg' style='height: 200px; width: 150px;'>", 'Vuurpijl'),
('Sputnick', '9.99', "<img src= 'Images/sputnick_1.jpg' style='height: 200px; width: 150px;'>", 'Vuurpijl'),
('Bomba Pijl', '5.00', "<img src= 'Images/Bomba_Pijl_1.jpg' style='height: 200px; width: 150px;'>", 'Vuurpijl'),
('Thunderking', '7.00', "<img src= 'Images/Thunderking_1.jpg' style='height: 200px; width: 150px;'>", 'knalvuurwerk'),
('Black Mamba', '5.00', "<img src= 'Images/Black_Mamba_1.jpg' style='height: 200px; width: 150px;'>", 'knalvuurwerk'),
('Ratelband', '9.99', "<img src= 'Images/Ratelvband_1.jpg' style='height: 200px; width: 150px;'>", 'knalvuurwerk'),
('Killer Bee', '3.00',"<img src= 'Images/Killer_Bee_1.jpg' style='height: 200px; width: 150px;'>", 'Kindervuurwerk'),
('Grondbloemen', '4.00', "<img src= 'Images/Grondbloemen_1.jpg' style='height: 200px; width: 150px;'>", 'Kindervuurwerk'),
('Sterretje', '1.00', "<img src= 'Images/Sterretje_1.jpg' style='height: 200px; width: 150px;'>", 'Kindervuurwerk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
