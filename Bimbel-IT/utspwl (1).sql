-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 09:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_mapel` int(11) NOT NULL,
  `nip_guru` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `id_user`, `id_mapel`, `nip_guru`, `nama_guru`, `images`) VALUES
(3, 8, 2, '18417202', 'Vic Fuentes', 'fic.jpg'),
(4, 9, 3, '18417203', 'Gerard Way', 'gerard.jpg'),
(5, 10, 4, '18417204', 'Adam Levine', 'adam.jpg'),
(6, 11, 5, '18417205', 'Kellin Quinn', 'kellin.jpg'),
(8, 7, 1, '1841720122', 'Oliver Sykes', 'oliver.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`, `deskripsi`, `image`) VALUES
(1, 'MPW01', 'Pemograman Web', 'Pengembangan web adalah istilah yang luas untuk pekerjaan yang terlibat dalam mengembangkan suatu situs web untuk internet atau intranet', 'web.jpg'),
(2, 'MPM02', 'Pemograman Mobile', ' Pemrograman ini secara singkat memiliki makna proses menulis kode-kode program untuk membuat aplikasi yang ditujukan untuk perangkat bergerak (Mobile).', 'mobile.jpg'),
(3, 'MUD03', 'UX Designer', 'unakan komunikasi dari pengguna (user) dengan sistem pada sebuah program, mulai dari aplikasi website, mobile ataupun software. ... Sedangkan ', 'ux.jpg'),
(4, 'MIOT04', 'Internet Of Things', 'Internet of Things adalah suatu konsep dimana objek tertentu punya kemampuan untuk mentransfer data lewat jaringan tanpa memerlukan adanya interaksi dari manusia ke manusia ataupun dari manusia ke perangkat komputer.', 'iot.jpg'),
(5, 'MPG05', 'Pemograman Game', 'Pemrograman game, bagian dari pengembangan game, adalah pengembangan perangkat lunak dari video game.', 'game.png');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `nim_murid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `id_user`, `id_guru`, `id_mapel`, `nim_murid`) VALUES
(4, 6, 8, 1, '12345'),
(8, 6, 3, 2, '21323');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `is_actived` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`, `jenis_kelamin`, `telepon`, `alamat`, `date_created`, `is_actived`) VALUES
(1, 'admin', 'admin@mail.com', 'admin', 'admin', 'laki-laki', '085850336940', 'MA3 Q55/ Surabaya', '', 1),
(2, 'user', 'user@mail.com', 'user', 'user', '-', '-', '-', '', 1),
(3, 'guru', 'guru@mail.com', 'guru', 'guru', '-', '-', '-', '', 1),
(6, 'aldi', 'aldi@email.com', 'aldi', 'user', 'laki-laki', '085850336940', 'Surabaya', '1585645227', 1),
(7, 'Oliver Sykes', 'oliver@mail.com', 'oliver', 'guru', 'laki-laki', '0897865432', 'London', '1585749582', 1),
(8, 'Vic Fuentes', 'vic@mail.com', 'vic', 'guru', 'laki-laki', '0876543217', 'San Diego', '1585801030', 1),
(9, 'Gerard Way', 'gerard@mail.com', 'gerard', 'guru', 'laki-laki', '0987653456', 'Newark', '1585801534', 1),
(10, 'Adam Levine', 'adam@mail.com', 'adam', 'guru', 'laki-laki', '0897542168', 'Los Angeles', '1585801685', 1),
(11, 'Kellin Quinn', 'kellin@mail.com', 'kellin', 'guru', 'laki-laki', '0897865432', 'Oregon', '1585802060', 1),
(15, 'aku', 'saya@mail.com', 'saya', 'user', 'laki-laki', '0898977576', 'Disini', '-', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_user` (`id_user`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`),
  ADD KEY `id_user` (`id_user`,`id_guru`,`id_mapel`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `murid_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `murid_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
