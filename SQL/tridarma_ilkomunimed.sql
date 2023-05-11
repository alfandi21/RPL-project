-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230510.2aca933933
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 12:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tridarma_ilkomunimed`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatridarma`
--

CREATE TABLE `datatridarma` (
  `id` int(20) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `volume/No/Tahun` varchar(20) NOT NULL,
  `Penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatTanggalLahir` date NOT NULL,
  `golongan` int(11) NOT NULL,
  `pendidikanS1` varchar(20) NOT NULL,
  `pendidikanS2` varchar(20) NOT NULL,
  `pendidikanS3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`) VALUES
(1, '12345678910', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id` int(14) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `NIDN` int(20) NOT NULL,
  `Jabatan` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NO_HP` varchar(15) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `no_telp_kantor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id`, `Nama`, `Gender`, `NIDN`, `Jabatan`, `tgl_lahir`, `Email`, `NO_HP`, `alamat_kantor`, `no_telp_kantor`) VALUES
(21, 'alfandi mualo', 'Laki-Laki', 23423234, 'w11esq', '2023-05-10', 'alfandii@gmail.com', '082169170950', 'awdadwa', '878787878787'),
(22, 'Alfandi', 'Laki-Laki', 3453434, 'asdfdaad', '2023-05-11', 'alfaaddadandi@gmail.com', '34212113', 'sdfdaa', '14313431');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatridarma`
--
ALTER TABLE `datatridarma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datatridarma`
--
ALTER TABLE `datatridarma`
  ADD CONSTRAINT `datatridarma_ibfk_1` FOREIGN KEY (`id`) REFERENCES `data_dosen` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD CONSTRAINT `data_dosen_ibfk_1` FOREIGN KEY (`id`) REFERENCES `loginform` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
