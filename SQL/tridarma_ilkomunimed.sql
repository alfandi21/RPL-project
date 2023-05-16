-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 07:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatTanggalLahir` date NOT NULL,
  `golongan` int(11) NOT NULL,
  `pendidikanS1` varchar(20) NOT NULL,
  `pendidikanS2` varchar(20) NOT NULL,
  `pendidikanS3` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_tridharma`
--

CREATE TABLE `data_tridharma` (
  `id` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `Tahun` year(4) NOT NULL,
  `nip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_tridharma`
--

INSERT INTO `data_tridharma` (`id`, `Judul`, `tipe`, `Tahun`, `nip`) VALUES
(1, 'Analisis Jaringan Komputer', 'Riset', 2021, '22211122'),
(2, 'Algoritma dan Pemrograman Dasar', 'Pengajaran', 2019, '22211122'),
(3, 'Penerapan Teknologi Chat GPT pada SMA ABCD', 'Dedikasi', 2020, '22211122'),
(4, 'Analsisi Kesalahan Mahasiswa Ilkom Unimed ', 'Dedikasi', 2023, '22211122');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`) VALUES
(1, '12345678910', '12345'),
(2, '22211122', 'psika21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nidn` varchar(25) NOT NULL,
  `golongan/jabatan` varchar(50) NOT NULL,
  `jabatan_fungsional` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp_kantor` varchar(15) NOT NULL,
  `pendidikanS1` varchar(50) NOT NULL,
  `pendidikanS2` varchar(50) NOT NULL,
  `pendidikanS3` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `gender`, `nip`, `nidn`, `golongan/jabatan`, `jabatan_fungsional`, `birthdate`, `tempat`, `email`, `no_hp`, `alamat`, `no_tlp_kantor`, `pendidikanS1`, `pendidikanS2`, `pendidikanS3`, `foto`) VALUES
(1, 'PSIKA21, S.Kom, M.Kom', 'Laki-Laki', '22211122', '3332112', 'IIIC/Letcurer', 'Kepala Prodi', '2023-01-29', 'Medan', 'psika21@gmail.com', '0812-3221-1122', 'UNIMED', '66 543221', 'S1 Ilmu Komputer - UNIMED', 'S2 Teknik Informatika - UGM', 'none', 'person.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tridharma`
--
ALTER TABLE `data_tridharma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tridharma`
--
ALTER TABLE `data_tridharma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD CONSTRAINT `data_dosen_ibfk_1` FOREIGN KEY (`id`) REFERENCES `loginform` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
