-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 08:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` char(6) COLLATE utf8_bin NOT NULL,
  `userName` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(6) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `userName`, `password`, `email`) VALUES
('123', 'ngad-min', 'adm12.', 'admin@kusuma.com');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `idKonfirm` char(6) COLLATE utf8_bin NOT NULL,
  `idTamu` char(6) COLLATE utf8_bin NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(7, 'k@k.k', '$2y$10$TjeTBjz7hA5/1.BU5bSeremntzjNo0.NwWq8wb.uhWq'),
(8, 'a@a.a', '$2y$10$12SUrbSxMonjDNDoqMz0l.EGXll5kOjofyZOL9ipya5'),
(10, 'q@q.q', '$2y$10$ZcPaqxLfQbotZNfAP8RqAeyicHBoyGDSKp43aivUuMwenyqUzhrjm'),
(11, 'qw@qw.q', '$2y$10$h4cmSraRazBszJMxADCgHuQWyBt2phmtSBPfI9vgTfgcFKruVVgMq');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `idTamu` char(6) COLLATE utf8_bin NOT NULL,
  `userName` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(6) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(50) COLLATE utf8_bin NOT NULL,
  `noTelp` int(13) NOT NULL,
  `email` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idPesan` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(20) COLLATE utf8_bin NOT NULL,
  `pesan` varchar(250) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idPesan`, `nama`, `alamat`, `email`, `pesan`) VALUES
(2, 'q', 'qq', 'q', NULL),
(6, 'nama', 'asem', 'as@em.com', 'jdfaokdoaskcoakovfakwofdka');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_kamar`
--

CREATE TABLE `reservasi_kamar` (
  `idReservasi` char(6) COLLATE utf8_bin NOT NULL,
  `noKamar` char(6) COLLATE utf8_bin NOT NULL,
  `idTamu` char(6) COLLATE utf8_bin NOT NULL,
  `jumKamar` int(3) NOT NULL,
  `tglCheckIn` date NOT NULL,
  `tglCheckOut` date NOT NULL,
  `tanggalReservasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `noKamar` char(6) COLLATE utf8_bin NOT NULL,
  `hargaKamar` decimal(10,0) NOT NULL,
  `tipeKamar` varchar(20) COLLATE utf8_bin NOT NULL,
  `statusKamar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`noKamar`, `hargaKamar`, `tipeKamar`, `statusKamar`) VALUES
('102', '550000', ' Executive Suite 1', 0),
('103', '550000', ' Executive Suite 1', 0),
('104', '550000', ' Executive Suite 1', 0),
('12', '550000', 'Executive Suite 1', 0),
('122', '200000', 'Deluxe', 0),
('222', '175000', 'Bussines Standard', 0),
('321', '275000', 'Executive', 0),
('33', '385000', 'Executive Suite', 0);

-- --------------------------------------------------------

--
-- Table structure for table `validasi_pembayaran`
--

CREATE TABLE `validasi_pembayaran` (
  `idValidasi` char(6) COLLATE utf8_bin NOT NULL,
  `idKonfirm` char(6) COLLATE utf8_bin NOT NULL,
  `idAdmin` char(6) COLLATE utf8_bin NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD KEY `idAdmin` (`idAdmin`),
  ADD KEY `idAdmin_2` (`idAdmin`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`idKonfirm`),
  ADD KEY `idTamu` (`idTamu`),
  ADD KEY `idTamu_2` (`idTamu`),
  ADD KEY `idKonfirm` (`idKonfirm`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`idTamu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indexes for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  ADD PRIMARY KEY (`idReservasi`),
  ADD KEY `noKamar` (`noKamar`),
  ADD KEY `idTamu` (`idTamu`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`noKamar`);

--
-- Indexes for table `validasi_pembayaran`
--
ALTER TABLE `validasi_pembayaran`
  ADD PRIMARY KEY (`idValidasi`),
  ADD KEY `idKonfirm` (`idKonfirm`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `konfirmasi_pembayaran_ibfk_1` FOREIGN KEY (`idTamu`) REFERENCES `pengunjung` (`idTamu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  ADD CONSTRAINT `reservasi_kamar_ibfk_1` FOREIGN KEY (`noKamar`) REFERENCES `room` (`noKamar`),
  ADD CONSTRAINT `reservasi_kamar_ibfk_2` FOREIGN KEY (`idTamu`) REFERENCES `pengunjung` (`idTamu`);

--
-- Constraints for table `validasi_pembayaran`
--
ALTER TABLE `validasi_pembayaran`
  ADD CONSTRAINT `validasi_pembayaran_ibfk_1` FOREIGN KEY (`idKonfirm`) REFERENCES `konfirmasi_pembayaran` (`idKonfirm`),
  ADD CONSTRAINT `validasi_pembayaran_ibfk_2` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
