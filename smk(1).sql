-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 09:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id` int(11) NOT NULL,
  `id_guru` varchar(255) DEFAULT NULL,
  `nuptk` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status_kepegawaian` varchar(255) DEFAULT NULL,
  `jenis_ptk` varchar(255) DEFAULT NULL,
  `tugas_tambahan` varchar(255) DEFAULT NULL,
  `status_pernikahan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `id_guru`, `nuptk`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `foto`, `hp`, `email`, `status_kepegawaian`, `jenis_ptk`, `tugas_tambahan`, `status_pernikahan`) VALUES
(1, '02', '1231321', NULL, 'Engkus K', 'Mukomuko', '2019-07-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '15', NULL, NULL, 'Dedy', 'Mukomuko', '1986-05-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '06', NULL, NULL, 'Ahmad Sugiri', 'Mukomuko', '1986-05-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '22', NULL, NULL, 'Ajeng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id` int(11) NOT NULL,
  `id_mapel` varchar(50) DEFAULT NULL,
  `thn_ajaran` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(50) DEFAULT NULL,
  `id_guru` varchar(50) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  `ruang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_mapel`, `thn_ajaran`, `id_kelas`, `id_guru`, `hari`, `jam`, `ruang`) VALUES
(1, '1', '20191', '1', '15', 'Senin', '10.00-12.00', 'Labor'),
(2, '2', '20191', '2', '22', 'Senin', '11.00-15.00', 'Kelas X A'),
(3, '1', '20191', '9', '22', 'Senin', '12.00-14.00', 'Kelas XII'),
(4, '2', '20191', '4', '15', 'Senin', '12.00-14.00', 'Kelas X B'),
(6, '2', '20191', '8', '02', 'Selasa', '12.00-14.00', 'Kelas IX MM');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id_jurusan` int(50) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `kajur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `kajur`) VALUES
(1, 'Ketenaga Listrikkan', 'Tono'),
(2, 'Teknik Komputer', 'Tini'),
(3, 'Informatika', 'Udin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `id_jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`) VALUES
(1, 'X Ketenagalistrikkan', '1'),
(2, 'XI Ketenagalistrikkan', '1'),
(3, 'XII Ketenagalistrikkan', '1'),
(4, 'X Teknik Komputer', '2'),
(5, 'XI Teknik Komputer', '2'),
(6, 'XII Teknik Komputer', '2'),
(7, 'X Teknik Informatika', '3'),
(8, 'XI Teknik Informatika', '3'),
(9, 'XII Teknik Informatika', '3');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
`id` int(50) NOT NULL,
  `kode_mapel` varchar(50) DEFAULT NULL,
  `nama_mapel` varchar(50) DEFAULT NULL,
  `id_guru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `kode_mapel`, `nama_mapel`, `id_guru`) VALUES
(1, 'PDS', 'Pemrograman Dasar', '15'),
(2, 'SK', 'Sistem Komputer', '15');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
`id` int(50) NOT NULL,
  `id_mapel` varchar(50) DEFAULT NULL,
  `nilai` varchar(50) DEFAULT NULL,
  `nipd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `id_mapel`, `nilai`, `nipd`) VALUES
(1, '1', '80', '123'),
(2, '2', '75', '123');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id` int(11) NOT NULL,
  `nipd` varchar(255) DEFAULT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `id_jurusan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_kelas` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nipd`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jk`, `id_jurusan`, `alamat`, `id_kelas`, `password`) VALUES
(1, '123', NULL, 'Ujang', 'Padang', '2018-02-01', 'L', '1', 'Penarik', '1', '4297f44b13955235245b2497399d7a93'),
(2, '124', NULL, 'Ani', 'Mukomuko', '2018-02-01', 'P', '2', 'Penarik', '1', '4297f44b13955235245b2497399d7a93'),
(3, '125', NULL, 'Budi', 'Penarik', '2018-02-01', 'L', '3', 'Penarik', '1', '4297f44b13955235245b2497399d7a93'),
(4, '126', NULL, 'Tono', 'Ipuh', '2019-07-29', 'L', '1', 'Penarik', '2', '4297f44b13955235245b2497399d7a93'),
(5, '127', NULL, 'Sinta', 'Bandung', '2009-06-20', 'P', '1', 'Penarik', '2', '4297f44b13955235245b2497399d7a93'),
(6, '128', '', 'Bayu', 'Jambi', '2018-06-20', 'L', '1', 'Penarik', '3', '4297f44b13955235245b2497399d7a93'),
(7, '129', NULL, 'Ucok', 'Aceh', '2009-07-20', 'L', '2', 'Penarik', '3', '4297f44b13955235245b2497399d7a93'),
(8, '130', NULL, 'Sintia', 'Muaro Bungo', '2018-02-01', 'P', '2', 'Penarik', '4', '4297f44b13955235245b2497399d7a93'),
(9, '131', NULL, 'Rani', 'Palembang', '2019-07-29', 'P', '2', 'Penarik', '4', '4297f44b13955235245b2497399d7a93'),
(10, '132', NULL, 'Reno', 'Medan', '2009-06-20', 'L', '2', 'Penarik', '4', '4297f44b13955235245b2497399d7a93'),
(11, '133', NULL, 'Herlan', 'Ujung Batu', '2018-06-20', 'L', '3', 'Penarik', '3', '4297f44b13955235245b2497399d7a93'),
(12, '134', NULL, 'Hendri', 'Pasir', '2009-07-20', 'P', '3', 'Penarik', '9', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jadwal`
--
CREATE TABLE IF NOT EXISTS `v_jadwal` (
`hari` varchar(50)
,`nama_kelas` varchar(255)
,`nama_guru` varchar(255)
,`id_guru` varchar(50)
,`jam` varchar(50)
,`ruang` varchar(50)
,`nama_mapel` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jadwal_siswa`
--
CREATE TABLE IF NOT EXISTS `v_jadwal_siswa` (
`id_mapel` varchar(50)
,`id_guru` varchar(50)
,`hari` varchar(50)
,`jam` varchar(50)
,`ruang` varchar(50)
,`nama_guru` varchar(255)
,`nama_kelas` varchar(255)
,`id_jurusan` varchar(255)
,`id_kelas` varchar(50)
,`nama_mapel` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mapel`
--
CREATE TABLE IF NOT EXISTS `v_mapel` (
`id_guru` varchar(255)
,`nama_guru` varchar(255)
,`nama_mapel` varchar(50)
,`kode_mapel` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_nilai_siswa`
--
CREATE TABLE IF NOT EXISTS `v_nilai_siswa` (
`id` int(50)
,`id_mapel` varchar(50)
,`nilai` varchar(50)
,`nipd` varchar(50)
,`nama_siswa` varchar(255)
,`kode_mapel` varchar(50)
,`nama_mapel` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa`
--
CREATE TABLE IF NOT EXISTS `v_siswa` (
`nipd` varchar(255)
,`nisn` varchar(255)
,`nama_siswa` varchar(255)
,`id_jurusan` int(50)
,`nama_kelas` varchar(255)
,`nama_jurusan` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa_kelas`
--
CREATE TABLE IF NOT EXISTS `v_siswa_kelas` (
);
-- --------------------------------------------------------

--
-- Structure for view `v_jadwal`
--
DROP TABLE IF EXISTS `v_jadwal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jadwal` AS select `jadwal`.`hari` AS `hari`,`kelas`.`nama_kelas` AS `nama_kelas`,`guru`.`nama_guru` AS `nama_guru`,`jadwal`.`id_guru` AS `id_guru`,`jadwal`.`jam` AS `jam`,`jadwal`.`ruang` AS `ruang`,`mapel`.`nama_mapel` AS `nama_mapel` from (((`jadwal` join `guru` on((`jadwal`.`id_guru` = `guru`.`id_guru`))) join `kelas` on((`kelas`.`id_kelas` = `jadwal`.`id_kelas`))) join `mapel` on((`jadwal`.`id_mapel` = `mapel`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `v_jadwal_siswa`
--
DROP TABLE IF EXISTS `v_jadwal_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jadwal_siswa` AS select `jadwal`.`id_mapel` AS `id_mapel`,`jadwal`.`id_guru` AS `id_guru`,`jadwal`.`hari` AS `hari`,`jadwal`.`jam` AS `jam`,`jadwal`.`ruang` AS `ruang`,`guru`.`nama_guru` AS `nama_guru`,`kelas`.`nama_kelas` AS `nama_kelas`,`kelas`.`id_jurusan` AS `id_jurusan`,`jadwal`.`id_kelas` AS `id_kelas`,`mapel`.`nama_mapel` AS `nama_mapel` from ((((`siswa` join `kelas` on((`siswa`.`id_kelas` = `kelas`.`id_kelas`))) join `jadwal` on((`siswa`.`id_kelas` = `jadwal`.`id_kelas`))) join `guru` on((`guru`.`id_guru` = `jadwal`.`id_guru`))) join `mapel` on((`mapel`.`id_guru` = `guru`.`id_guru`))) where (`jadwal`.`id_kelas` = `siswa`.`id_kelas`) group by `jadwal`.`id_kelas`;

-- --------------------------------------------------------

--
-- Structure for view `v_mapel`
--
DROP TABLE IF EXISTS `v_mapel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mapel` AS select `mapel`.`id_guru` AS `id_guru`,`guru`.`nama_guru` AS `nama_guru`,`mapel`.`nama_mapel` AS `nama_mapel`,`mapel`.`kode_mapel` AS `kode_mapel` from (`guru` join `mapel`) where (`mapel`.`id_guru` = `guru`.`id_guru`);

-- --------------------------------------------------------

--
-- Structure for view `v_nilai_siswa`
--
DROP TABLE IF EXISTS `v_nilai_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_nilai_siswa` AS select `nilai`.`id` AS `id`,`nilai`.`id_mapel` AS `id_mapel`,`nilai`.`nilai` AS `nilai`,`nilai`.`nipd` AS `nipd`,`siswa`.`nama_siswa` AS `nama_siswa`,`mapel`.`kode_mapel` AS `kode_mapel`,`mapel`.`nama_mapel` AS `nama_mapel` from ((`nilai` join `siswa` on((`nilai`.`nipd` = `siswa`.`nipd`))) join `mapel` on((`nilai`.`id_mapel` = `mapel`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `v_siswa`
--
DROP TABLE IF EXISTS `v_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa` AS select `siswa`.`nipd` AS `nipd`,`siswa`.`nisn` AS `nisn`,`siswa`.`nama_siswa` AS `nama_siswa`,`jurusan`.`id_jurusan` AS `id_jurusan`,`kelas`.`nama_kelas` AS `nama_kelas`,`jurusan`.`nama_jurusan` AS `nama_jurusan` from ((`siswa` join `jurusan` on((`siswa`.`id_jurusan` = `jurusan`.`id_jurusan`))) join `kelas` on((`kelas`.`id_kelas` = `siswa`.`id_kelas`)));

-- --------------------------------------------------------

--
-- Structure for view `v_siswa_kelas`
--
DROP TABLE IF EXISTS `v_siswa_kelas`;
-- in use(#1356 - View 'smk.v_siswa_kelas' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id_jurusan` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
