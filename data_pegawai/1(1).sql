-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 03:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anak`
--

CREATE TABLE `tb_anak` (
  `id_anak` int(20) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `anak_ke` varchar(50) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `id_istri` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anak`
--

INSERT INTO `tb_anak` (`id_anak`, `nama_anak`, `anak_ke`, `usia`, `id_istri`) VALUES
(1, 'DiaH', '0', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_istri`
--

CREATE TABLE `tb_data_istri` (
  `id_istri` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `nama_istri` varchar(20) NOT NULL,
  `ket` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_istri`
--

INSERT INTO `tb_data_istri` (`id_istri`, `id_pegawai`, `nama_istri`, `ket`) VALUES
(1, 1, 'kamuH', 'Suami'),
(2, 2, 'FFF', 'Suami');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `tgl_gaji` date DEFAULT NULL,
  `tunjangan` int(100) DEFAULT NULL,
  `gaji_pokok` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`id_gaji`, `id_pegawai`, `tgl_gaji`, `tunjangan`, `gaji_pokok`) VALUES
(2, 1, '2020-09-03', 3000000, 4000000),
(3, 2, '2020-09-03', 4000000, 1000000),
(4, 1, '2020-09-03', 28288282, 98888000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_gol` int(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `id_pegawai` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`id_gol`, `divisi`, `golongan`, `id_pegawai`) VALUES
(1, 'kabag', '2A', 1),
(2, 'Kasubag', '2B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tahun_masuk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `status`, `alamat`, `telepon`, `email`, `tahun_masuk`) VALUES
(1, 123456789, 'Siska', 'Paya Lombang', '1999-10-02', 'Islam', 'Laki-Laki', 'Menikah', 'JL. Gaharu', 877653425, 'siska@gmail.com', 2007),
(2, 23456, 'Dina', 'Medan', '1999-03-17', 'Islam', 'Laki-Laki', 'Menikah', 'Letsu', 98820200, 'dina@gmail.com', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pensiun`
--

CREATE TABLE `tb_pensiun` (
  `id_pensiun` int(20) NOT NULL,
  `usia` int(20) NOT NULL,
  `tahun_pensiun` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_level` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`, `user_level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `id_istri` (`id_istri`);

--
-- Indexes for table `tb_data_istri`
--
ALTER TABLE `tb_data_istri`
  ADD PRIMARY KEY (`id_istri`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_gol`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  ADD PRIMARY KEY (`id_pensiun`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anak`
--
ALTER TABLE `tb_anak`
  MODIFY `id_anak` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_data_istri`
--
ALTER TABLE `tb_data_istri`
  MODIFY `id_istri` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `id_gaji` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_gol` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  MODIFY `id_pensiun` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD CONSTRAINT `tb_anak_ibfk_1` FOREIGN KEY (`id_istri`) REFERENCES `tb_data_istri` (`id_istri`);

--
-- Constraints for table `tb_data_istri`
--
ALTER TABLE `tb_data_istri`
  ADD CONSTRAINT `tb_data_istri_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD CONSTRAINT `tb_gaji_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD CONSTRAINT `tb_golongan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  ADD CONSTRAINT `tb_pensiun_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
