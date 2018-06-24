-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Feb 2018 la 18:16
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumeapisicilor`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nume` varchar(20) NOT NULL,
  `parola` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nume`, `parola`) VALUES
(1, 'admin', 'adriana'),
(2, 'admin', 'adriana');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categorie`
--

CREATE TABLE `categorie` (
  `id_categ` int(11) NOT NULL,
  `categoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `categorie`
--

INSERT INTO `categorie` (`id_categ`, `categoria`) VALUES
(3, 'curiozit'),
(1, 'despre'),
(4, 'jucarii'),
(2, 'rase');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `formular`
--

CREATE TABLE `formular` (
  `ID` int(2) NOT NULL,
  `nume` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subiect` varchar(200) NOT NULL,
  `mesaj` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `formular`
--

INSERT INTO `formular` (`ID`, `nume`, `email`, `subiect`, `mesaj`) VALUES
(1, 'Adriana', 'AFSATY@HUU', '', ''),
(2, 'Adriana', 'AFSATY@HUU', '', ''),
(3, 'Adriana', 'adriana_adry92@yahoo.com', 'sds', 'ssafa'),
(4, 'Adriana', 'adriana_adry92@yahoo.com', 'sds', 'ssafa'),
(5, 'Adriana', 'wer', 'rewr', 'ew'),
(6, '', '', '', ''),
(7, 'dsdfsas', 'sdfgdsgsnmbjhas', 'dasfas', 'safasf'),
(8, 'hfsays', 'asdwsfds', 'fdwf', 'fdwger');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `imagini`
--

CREATE TABLE `imagini` (
  `id_imagine` int(2) NOT NULL,
  `fisier_imagine` varchar(50) NOT NULL,
  `id_categ` int(2) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `prezentare` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `imagini`
--

INSERT INTO `imagini` (`id_imagine`, `fisier_imagine`, `id_categ`, `nume`, `prezentare`) VALUES
(1, 'exotic.jpg', 2, '', ''),
(2, 'imagine2.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(3, 'img3.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(4, '23336126_10208938740460398_1081248327_o.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(5, '23336126_10208938740460398_1081248327_o.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(6, '23336126_10208938740460398_1081248327_o.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(7, '23336126_10208938740460398_1081248327_o.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(8, '23336126_10208938740460398_1081248327_o.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(9, '23336126_10208938740460398_1081248327_o.jpg', 4, 'ASDsefsa', 'DFWEGAEFV'),
(10, 'pisicascottish.jpg', 3, 'Scottish Fold', 'SDEEWFDW'),
(11, '23336126_10208938740460398_1081248327_o.jpg', 4, 'Adriana', 'a'),
(12, '20526772_10208368307159922_763982385_n.png', 3, 'xz', 'Aa'),
(13, 'undita.jpeg', 2, 'aGSIud', ''),
(14, 'IMG_20171111_192759.jpg', 3, 'dADSa', 'dsfsa'),
(15, 'cats.jpg', 2, 'pisici', 'sdadA'),
(16, 'americanwirehair.jpg', 3, 'fffrrrr', 'fffrrrr'),
(17, 'IMG_20171111_192759.jpg', 1, 'asd', 'DAFS'),
(18, 'IMG_20171111_192759.jpg', 4, 'dddddd', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `nume` (`nume`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categ`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `categoria_2` (`categoria`);

--
-- Indexes for table `formular`
--
ALTER TABLE `formular`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imagini`
--
ALTER TABLE `imagini`
  ADD PRIMARY KEY (`id_imagine`),
  ADD KEY `id_categ` (`id_categ`),
  ADD KEY `fisier_imagine` (`fisier_imagine`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `formular`
--
ALTER TABLE `formular`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `imagini`
--
ALTER TABLE `imagini`
  MODIFY `id_imagine` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
