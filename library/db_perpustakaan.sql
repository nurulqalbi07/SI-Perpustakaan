-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 01:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1507, 'Nurul Qalbi Haeruddin', 'nurul', 'nurul07'),
(1508, 'Ervina Novlianti', 'ervina', 'ervina03');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk_anggota` char(10) NOT NULL,
  `jurusan_anggota` varchar(30) NOT NULL,
  `notelp_anggota` varchar(13) NOT NULL,
  `alamat_anggota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `tgl_daftar`, `thn_ajaran`, `nama_anggota`, `tmp_lahir`, `tgl_lahir`, `jk_anggota`, `jurusan_anggota`, `notelp_anggota`, `alamat_anggota`) VALUES
('P202100011', '2021-07-07', '2021/2022', 'Antonio', 'Surabayaa', '1996-06-14', 'Laki-laki', 'Sistem Informasi', '087456376458', 'Jl. Pahlawan'),
('P202100012', '2021-07-07', '2021/2022', 'Calista', 'Jakarta', '2021-07-03', 'Perempuan', 'Teknik Informatika', '089743278459', 'Jl. Flamboyan'),
('P202100013', '2021-07-07', '2021/2022', 'Safana', 'Bali', '2021-07-03', 'Perempuan', 'Teknik Informatika', '123456', 'Jl.Badak'),
('P202100014', '2021-07-07', '2021/2022', 'Azalia Azzahra', 'Bandung', '2001-06-13', 'Perempuan', 'Sistem Informasi', '0852550984672', 'Jl.Bakti'),
('P202100015', '2021-07-07', '2021/2022', 'Fauzi', 'Padang Pariama', '2021-07-09', 'Perempuan', 'Sistem Informasi', '087321897985', 'Jl. Bangsa 2'),
('P202100016', '2021-07-25', '2021/2022', 'Aza Calista', 'Jakarta', '2021-06-27', 'Perempuan', 'Sistem Informasi', '085255986456', 'Jl. Alamanda'),
('P202100017', '2021-07-25', '2021/2022', 'Arindah', 'Bandung', '2021-07-03', 'Perempuan', 'Manajemen Informatika', '087456346095', 'Jl. Alabama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1509;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
