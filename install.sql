
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ventour`
--
CREATE DATABASE IF NOT EXISTS `db_ventour` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_ventour`;

-- --------------------------------------------------------

--
-- Table structure for table `Attivita`
--

CREATE TABLE `Attivita` (
  `Id` int(100) NOT NULL,
  `Titolo` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `Descrizione` varchar(1000) NOT NULL,
  `Categoria` varchar(30) DEFAULT NULL,
  `Attivita1` varchar(30) DEFAULT NULL,
  `Luogo` varchar(30) DEFAULT NULL,
  `Cap` varchar(10) DEFAULT NULL,
  `Data_attivita` varchar(30) DEFAULT NULL,
  `Sesso` varchar(30) DEFAULT NULL,
  `Durata` varchar(10) NOT NULL,
  `Posti_max` varchar(20) NOT NULL,
  `Data_inserimento` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `Immagini_eventi`
--

CREATE TABLE `Immagini_eventi` (
  `id` int(20) NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `Attivita` varchar(30) NOT NULL,
  `Url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `Iscritti_attivita`
--

CREATE TABLE `Iscritti_attivita` (
  `Id` int(20) NOT NULL,
  `Id_attivita` int(20) NOT NULL,
  `User_id` varchar(50) NOT NULL,
  `Data` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `Utenti`
--

CREATE TABLE `Utenti` (
  `Id` int(10) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Cognome` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `immagine` varchar(40) NOT NULL,
  `fascia_eta` varchar(20) NOT NULL,
  `sesso` varchar(10) NOT NULL,
  `Citta` varchar(30) NOT NULL,
  `id_fb` varchar(40) NOT NULL,
  `Data_nascita` varchar(20) NOT NULL,
  `Data_iscr` varchar(20) NOT NULL,
  `cellulare` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Attivita`
--
ALTER TABLE `Attivita`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Immagini_eventi`
--
ALTER TABLE `Immagini_eventi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Iscritti_attivita`
--
ALTER TABLE `Iscritti_attivita`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Utenti`
--
ALTER TABLE `Utenti`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Attivita`
--
ALTER TABLE `Attivita`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `Immagini_eventi`
--
ALTER TABLE `Immagini_eventi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Iscritti_attivita`
--
ALTER TABLE `Iscritti_attivita`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `Utenti`
--
ALTER TABLE `Utenti`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
