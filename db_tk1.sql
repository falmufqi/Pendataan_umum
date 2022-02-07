-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 04:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tk1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `kd_login` int(4) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`kd_login`, `nama_user`, `nik`, `alamat`, `username`, `password`) VALUES
(1, 'Fabiano Milan Almufqi', '3215011802010004', 'Jl.Rajawali 3 Blok Q no 3', 'fabian', '$2y$10$REdJLxqGXrnIx');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_beasiswa`
--

CREATE TABLE `siswa_beasiswa` (
  `kd_beasiswa` int(6) NOT NULL,
  `nama_siswa_bea` varchar(50) NOT NULL,
  `nisn_bea` varchar(10) NOT NULL,
  `tempat_bea` varchar(30) NOT NULL,
  `tgl_lahir_bea` date NOT NULL,
  `jenis_kel_bea` enum('Pria','Wanita') NOT NULL,
  `agama_bea` enum('Islam','Kristen','Hindu','Konghuch','Hindu') NOT NULL,
  `nm_ayah_bea` varchar(50) NOT NULL,
  `nm_ibu_bea` varchar(50) NOT NULL,
  `job_ayah_bea` enum('Wiraswasta','PNS/TNI/POLRI','Buruh','Petani','IRT','Tidak Bekerja') NOT NULL,
  `job_ibu_bea` enum('Wiraswasta','PNS/TNI/POLRI','Buruh','Petani','IRT','Tidak Bekerja') NOT NULL,
  `alamat_bea` varchar(50) NOT NULL,
  `dr_sltp_bea` varchar(50) NOT NULL,
  `jurusan_bea` enum('Mekanik Industri','Pengelasan','Desain Grafis','Belum Menentukan') NOT NULL,
  `no_siswa_bea` varchar(13) NOT NULL,
  `no_ortu_bea` varchar(13) NOT NULL,
  `program_bea` enum('Beasiswa') NOT NULL,
  `keterangan` enum('MOU','Belum MOU','Mengundurkan Diri') NOT NULL,
  `refrensi_bea` varchar(50) NOT NULL,
  `formulir_bea` enum('Sudah','Belum') NOT NULL,
  `skl_bea` enum('Sudah','Belum') NOT NULL,
  `ktp_ortu_bea` enum('Sudah','Belum') NOT NULL,
  `kk_bea` enum('Sudah','Belum') NOT NULL,
  `akte_bea` enum('Sudah','Belum') NOT NULL,
  `skkb_bea` enum('Sudah','Belum') NOT NULL,
  `kip_bea` enum('Sudah','Belum') NOT NULL,
  `pkh_bea` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa_beasiswa`
--

INSERT INTO `siswa_beasiswa` (`kd_beasiswa`, `nama_siswa_bea`, `nisn_bea`, `tempat_bea`, `tgl_lahir_bea`, `jenis_kel_bea`, `agama_bea`, `nm_ayah_bea`, `nm_ibu_bea`, `job_ayah_bea`, `job_ibu_bea`, `alamat_bea`, `dr_sltp_bea`, `jurusan_bea`, `no_siswa_bea`, `no_ortu_bea`, `program_bea`, `keterangan`, `refrensi_bea`, `formulir_bea`, `skl_bea`, `ktp_ortu_bea`, `kk_bea`, `akte_bea`, `skkb_bea`, `kip_bea`, `pkh_bea`) VALUES
(1, 'Aryl Alfat Muhammad Iqbal', '123232443', 'Karawang', '1996-06-17', 'Pria', 'Islam', 'Bambang Bastomi Saad', 'Sri Meilani', 'Wiraswasta', 'IRT', 'Jl.Rajawali 3 Blok Q no 3', 'Al Irsyad', 'Mekanik Industri', '082345676543', '081388671983', 'Beasiswa', 'MOU', 'Bambang', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_reguler`
--

CREATE TABLE `siswa_reguler` (
  `kd_reguler` int(6) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` enum('Pria','Wanita') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Konghuch','Budha') NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `job_ayah` enum('Wiraswasta','PNS/TNI/POLRI/','Buruh','Petani','IRT','Tidak Bekerja') NOT NULL,
  `job_ibu` enum('Wiraswasta','PNS/TNI/POLRI','Buruh','Petani','IRT','Tidak Bekerja') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `dr_sltp` varchar(50) NOT NULL,
  `jurusan` enum('Mekanik Industri','Pengelasan','Desain Grafis','Belum Menentukan') NOT NULL,
  `no_siswa` varchar(13) NOT NULL,
  `no_ortu` varchar(13) NOT NULL,
  `program` enum('Reguler') NOT NULL,
  `refrensi` varchar(50) NOT NULL,
  `formulir` enum('Sudah','Belum') NOT NULL,
  `skl` enum('Sudah','Belum') NOT NULL,
  `ktp_ortu` enum('Sudah','Belum') NOT NULL,
  `kk` enum('Sudah','Belum') NOT NULL,
  `akte` enum('Sudah','Belum') NOT NULL,
  `skkb` enum('Sudah','Belum') NOT NULL,
  `kip` enum('Sudah','Belum') NOT NULL,
  `pkh` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa_reguler`
--

INSERT INTO `siswa_reguler` (`kd_reguler`, `nama_siswa`, `nisn`, `tempat`, `tgl_lahir`, `jenis_kel`, `agama`, `nm_ayah`, `nm_ibu`, `job_ayah`, `job_ibu`, `alamat`, `dr_sltp`, `jurusan`, `no_siswa`, `no_ortu`, `program`, `refrensi`, `formulir`, `skl`, `ktp_ortu`, `kk`, `akte`, `skkb`, `kip`, `pkh`) VALUES
(1, 'Fabiano Milan Almufqi', '321112312', 'Karawang', '2001-02-18', 'Pria', 'Islam', 'Bambang Bastomi Saad', 'Sri Meilani', 'Wiraswasta', 'IRT', 'Jl.Rajawali 3 Blok Q no 3', 'Harapan Ummat', 'Desain Grafis', '081294329345', '081388671983', 'Reguler', 'Bambang', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Sudah', 'Belum', 'Belum', 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`kd_login`);

--
-- Indexes for table `siswa_beasiswa`
--
ALTER TABLE `siswa_beasiswa`
  ADD PRIMARY KEY (`kd_beasiswa`);

--
-- Indexes for table `siswa_reguler`
--
ALTER TABLE `siswa_reguler`
  ADD PRIMARY KEY (`kd_reguler`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `kd_login` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa_beasiswa`
--
ALTER TABLE `siswa_beasiswa`
  MODIFY `kd_beasiswa` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa_reguler`
--
ALTER TABLE `siswa_reguler`
  MODIFY `kd_reguler` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
