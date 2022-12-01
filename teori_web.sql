-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 02:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teori_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `levels` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `pass`, `levels`) VALUES
(4, 'warga', 'herby.jan1102@gmail.com', '$2y$10$MsfkOcxJUNHytRurtrFSW.J.Jm4rMJVBjmG1lYB83RMrMfNpMtASC', 'Warga'),
(5, 'admin', 'hernishrtt@gmail.com', '$2y$10$ML5PQaOSoy9ROXnyEYdRFuaLTf7xqKjnxdrXk5z7DsUWvaAXgZcnG', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomorhp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`id`, `nama`, `nomorhp`, `email`, `alamat`, `universitas`, `jurusan`, `prodi`, `angkatan`, `tgl_lahir`, `gender`) VALUES
(2, 'Herniii', '082233112321', 'herby.jan1102@gmail.com', 'Asmaba', 'Mulawarman', '-', 'Informatika', '2021', '2022-12-01', 'Perempuan'),
(3, 'Tihani', '083312121314', 'herby.jan1102@gmail.com', 'Asmaba', 'Mulawarman', 'Kehutanan', 'Kehutanan', '2021', '2022-11-10', 'Perempuan'),
(4, 'Indy', '081232131415', 'herby.jan1102@gmail.com', 'Asmaba', 'UMKT', '-', 'S1 Psikologi', '2021', '2022-11-01', 'Perempuan'),
(5, 'Raudha', '081289738912', 'herby.jan1102@gmail.com', 'Asmaba', 'Mulawarman', '-', 'PGSD', '2021', '2022-10-05', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tso` varchar(50) NOT NULL,
  `tgl_kegiatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `tso`, `tgl_kegiatan`) VALUES
(2, 'Kerja bakti', 'Seluruh warga', '2022-10-12'),
(3, 'Asmaba Times', 'Seluruh warga', '2022-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
