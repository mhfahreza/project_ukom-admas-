-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 11:08 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simb`
--

-- --------------------------------------------------------

--
-- Table structure for table `lupa_password`
--

CREATE TABLE `lupa_password` (
  `id_password` int(15) NOT NULL,
  `info_akun` varchar(250) NOT NULL,
  `level` varchar(35) NOT NULL,
  `password_baru` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('3525013006580042', 'Corvo Attano', 'corvo', '123', '082155661708'),
('3525013006920008', 'Miya Carrera', 'my', '123', '085176892231'),
('3525014603660003', 'Emily Kaldwin', 'emily', '123', '085832415575'),
('3525016004740003', 'Inka Rose', 'Ir', '123', '082199901563'),
('3525016401830001', 'Ezreal Lightborn', 'Ezr', '123', '092176851124'),
('3525016611770002', 'Samira DS', 'smra', '123', '085743986508'),
('3525016812770001', 'Samuel Alfarisi', 'sm', '123', '082187649928'),
('3525017006520020', 'Ashina Alfurqon', 'ashina', '123', '081722224356'),
('3525017006620060', 'Zara Altair', 'zara', '123', '082113378596'),
('3576447103910003', 'joko hamud', 'hmd', '123', '085883064127'),
('7678799', 'reji', 'adix', '123', '0898756657');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_kejadian` text NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('diverifikasi','diproses','selesai','tidak valid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `tempat_kejadian`, `isi_laporan`, `foto`, `status`) VALUES
(22, '2023-03-09', '3576447103910003', 'jl.siliwangi, dekat dengan danau', '<p>tolong bantuan nya disini banjir lumayan tinggi</p>', '3576447103910003_20230309_133202.jpg', 'selesai'),
(24, '2023-03-11', '3576447103910003', 'pocis tangsel', '<p>kuda lepas</p>', '3576447103910003_20230311_172307.avif', 'diproses'),
(25, '2023-03-11', '3576447103910003', 'cisauk muncul kesanaan dikit', '<p>kali di sekitar cisauk jadi sedikit lebih kotor</p>', '3576447103910003_20230311_172521.avif', 'selesai'),
(26, '2023-03-12', '3576447103910003', 'viktor', '<p>keributan acara hajatan</p>', '3576447103910003_20230312_111619.avif', 'selesai'),
(27, '2023-03-12', '3525014603660003', 'ramayana, ciputat', '<p>mas tolong kabel di daerah ciputat di ramayana nya mas tolong segera diperbaiki, terimakasih</p>', '3525014603660003_20230312_150315.avif', 'selesai'),
(28, '2023-03-14', '3525013006920008', 'pamulang', '<p>banyak kawat pagar berantakan</p>', '3525013006920008_20230314_161555.avif', 'diverifikasi'),
(29, '2023-03-14', '3525013006920008', 'ciputat jl.cicak', '<p>tembok rumah warga retak dan bolong dikarenakan pembangunan jalan</p>', '3525013006920008_20230314_165103.avif', 'diverifikasi'),
(30, '2023-03-14', '3525013006920008', 'jl.marble', '<p>rumah hancur dan berantakan karena penggusuran bangunan di sebelahnya</p>', '3525013006920008_20230314_165216.avif', 'diverifikasi'),
(31, '2023-03-15', '3525013006920008', 'djajakusuma', '<p>vandalisme pada rumah rumah warga</p>', '3525013006920008_20230315_044913.avif', 'diverifikasi'),
(32, '2023-03-15', '3525013006920008', 'unpam 1 arah ciputat', '<p>terjadi kerusuhan di dekat unpam</p>', '3525013006920008_20230315_045156.jpeg', 'diverifikasi'),
(33, '2023-03-15', '3525016812770001', 'bukit dago', '<p>beberapa anjing iar berkeliaran di pemukiman warga&nbsp;</p>', '3525016812770001_20230315_052927.avif', 'diverifikasi'),
(34, '2023-03-15', '3525016812770001', 'tangsel, jl.poncol', '<p>beberapa ular peliharan lepas dari kandang</p>', '3525016812770001_20230315_053223.avif', 'diverifikasi'),
(35, '2023-03-15', '3525016812770001', 'serang', '<p>oknum membuang sampah sembarangan&nbsp;</p>', '3525016812770001_20230315_071712.avif', 'diverifikasi'),
(36, '2023-03-15', '3525016812770001', 'pocil', '<p>mobil jatuh ke perkebunan</p>', '3525016812770001_20230315_073346.avif', 'diverifikasi'),
(37, '2023-03-15', '3525016812770001', 'viktor', '<p>tolong dibantu geng motor&nbsp; viktor geber geber mulu di malam hari</p>', '3525016812770001_20230315_073734.avif', 'diverifikasi'),
(38, '2023-03-15', '3525017006620060', 'cilegon', '<p>tolong bantuannya terjadi kemacetan di cilegon</p>', '3525017006620060_20230315_074449.avif', 'diverifikasi'),
(39, '2023-03-15', '3525017006620060', 'jl.eluka', '<p>tolong segera ditangani terdapat jalan rusaik</p>', '3525017006620060_20230315_075436.jpg', 'diverifikasi'),
(40, '2023-03-15', '3525017006620060', 'muncul', '<p>tolong dibantu beberapa kuda milik warga lepas</p>', '3525017006620060_20230315_075654.avif', 'diverifikasi'),
(41, '2023-03-15', '3525017006620060', 'jl.poncol', '<p><strong>tolong banyak ular lepas</strong></p>', '3525017006620060_20230315_082926.avif', 'diverifikasi'),
(42, '2023-03-15', '3525017006620060', 'ciputat', '<p>kerusuhan</p>', '3525017006620060_20230315_084134.jpeg', 'diverifikasi'),
(43, '2023-03-15', '3525013006580042', 'permata pamulang dekat masjid', '<p>jalanan full hancur di dekat masjid</p>', '3525013006580042_20230315_091036.jpg', 'diverifikasi'),
(44, '2023-03-15', '3525013006580042', 'bukit dago dan poncol', '<p>beberapa fasilitas taman tidak terusus</p>', '3525013006580042_20230315_095519.avif', 'selesai'),
(45, '2023-03-16', '3525013006580042', 'cisauk', '<p>mohon dibantu pohon tumbang&nbsp;</p>', '3525013006580042_20230316_020634.jpeg', 'diverifikasi'),
(46, '2023-03-16', '3525013006580042', 'cilegon', '<p>tolong bantuannya banyak hewan liar ke pemukiman warga&nbsp;</p>', '3525013006580042_20230316_021404.jpeg', 'diproses'),
(47, '2023-03-16', '3525013006580042', 'parakan', '<p>mohon ditindak lanjuti akhir akhir ini banyak aksi pembegalan di parakan</p>', '3525013006580042_20230316_021550.jpg', 'tidak valid'),
(48, '2023-03-16', '3525016004740003', 'kelapa dua', '<p>banjir karena arus air yang membesar dan saluran pembuangan yang kecil</p>', '3525016004740003_20230316_023137.jpg', 'diverifikasi'),
(49, '2023-03-16', '3525016004740003', 'depan unpam', '<p>macet karena jalan yang kecil dan pengendara yang banyak</p>', '3525016004740003_20230316_023449.avif', 'diverifikasi'),
(50, '2023-03-16', '3525016004740003', 'jl.poncol', '<p>tolong dicarikan solusi, jalan rusak parah</p>', '3525016004740003_20230316_023942.jpg', 'diverifikasi'),
(51, '2023-03-16', '3525016004740003', 'poncol', '<p>pemuda pemuda poncol melakukan aksi tawuran</p>', '3525016004740003_20230316_025933.webp', 'diverifikasi'),
(52, '2023-03-16', '3525016004740003', 'jl.poncol', '<p>vandalisme poncol</p>', '3525016004740003_20230316_030033.avif', 'diverifikasi'),
(53, '2023-03-16', '3525016401830001', 'parakan', '<p>parakan banjir parah dari kali</p>', '3525016401830001_20230316_033651.png', 'diverifikasi'),
(54, '2023-03-16', '3525016401830001', 'keranggan', '<p>banyak oknum buang sampah sembarangan depan rumah saya</p>', '3525016401830001_20230316_033809.jpg', 'diproses'),
(55, '2023-03-16', '3525016401830001', 'pocis', '<p>tolong jalanan di pocis diperluas, karena mobil susah untuk lewat</p>', '3525016401830001_20230316_034138.jpg', 'diverifikasi'),
(56, '2023-03-16', '3525016401830001', 'tangerang', '<p>tolong bantuannya banyak odgj berkeliaran</p>', '3525016401830001_20230316_035224.jpg', 'diverifikasi'),
(57, '2023-03-16', '3525016401830001', 'ciputat, unpam', '<p>macet dikit, aga parah si di depan unpam ke arah ciputat</p>', '3525016401830001_20230316_035423.avif', 'diverifikasi'),
(58, '2023-03-16', '3525016611770002', 'pamulang', '<p>tolong segera dibantu banyak kabel&nbsp;<strong>kusut berantakan</strong></p>', '3525016611770002_20230316_040037.jpg', 'diverifikasi'),
(59, '2023-03-16', '3525016611770002', 'ciater', '<p>ban mobil saya bocor karena banyak paku jalanan yang disebar oknum, tolong segera dibantu dan dibereskan&nbsp;</p>', '3525016611770002_20230316_040307.jpg', 'diverifikasi'),
(60, '2023-03-16', '3525017006520020', 'Jl. Masjid Ciater, Ciater, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', '<p>banyak tikus berkeliaran&nbsp; tolong segera ditangani</p>', '3525017006520020_20230316_042743.jpg', 'diverifikasi'),
(61, '2023-03-16', '3525017006520020', 'jl.ams puan', '<p>bangunan tidak terurus, takut roboh diberi pembatas</p>', '3525017006520020_20230316_044828.avif', 'diverifikasi'),
(62, '2023-03-16', '3525017006520020', 'jl.parakan dari arah warbon', '<p>beberapa pembatas jembatan hancur, tolong diberi pembatas atau segera diperbaiki</p>', '3525017006520020_20230316_045201.jpeg', 'diverifikasi'),
(63, '2023-03-16', '3525017006520020', 'jl.poncol', '<p>muncul banyak liar di sekitar poncol</p>', '3525017006520020_20230316_050634.avif', 'diverifikasi'),
(64, '2023-03-16', '3525017006520020', 'jl.ripul', '<p>ini jalan semakin rusak tolong bantu diperbaiki</p>', '3525017006520020_20230316_052308.jpg', 'diverifikasi'),
(65, '2023-03-18', '3525014603660003', 'jl.amd babakan pocis', '<p>tolong di jalan amd babakan pocis banyak jalan berlubang</p>', '3525014603660003_20230318_044404.jpg', 'diverifikasi'),
(66, '2023-03-18', '3525013006920008', 'jl.eluka', '<p>jalan berlubang dari arah pocis ke eluka</p>', '3525013006920008_20230318_044837.jpg', 'tidak valid');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'cleven brown', 'cleven', '123', '08123123', 'admin'),
(2, 'Anton Sokolov', 'anton', '123', '085753421153', 'petugas'),
(13, 'Astama Pasha', 'pasha', '123', '083144447543', 'petugas'),
(14, 'Saint Arthur', 'arthur', '123', '082136841908', 'petugas'),
(15, 'Alice Rose', 'alice', '123', '085744651324', 'admin'),
(16, 'Ferdy Alses', 'ferdy', '123', '087732518097', 'petugas'),
(18, 'Rob Mulder ', 'rb', '123', '082155631118', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(28, 22, '2023-03-11', '<p>baik akan segera kami konfirmasi</p>', 1),
(29, 22, '2023-03-11', 'status pekerjaan diubah ke proses', 1),
(30, 25, '2023-03-12', '<p>telah kami kirim tim untuk membantu mengurangi polusi air</p><p>&nbsp;</p>', 1),
(31, 25, '2023-03-12', 'status pekerjaan telah selesai', 1),
(33, 26, '2023-03-12', 'status pekerjaan diubah ke proses', 1),
(34, 26, '2023-03-12', 'status pekerjaan telah selesai', 1),
(35, 26, '2023-03-12', '<p>telah kami negosiasikan dengan penggelar acara semoga solusi ini membantu</p>', 1),
(36, 27, '2023-03-12', '<p>akan segera kami periksa</p>', 2),
(37, 27, '2023-03-12', 'status pekerjaan diubah ke peninjauan', 2),
(39, 27, '2023-03-12', 'status pekerjaan diubah ke proses', 2),
(40, 27, '2023-03-14', '<p>telah kami selesaikan</p>', 16),
(41, 27, '2023-03-14', 'status pekerjaan telah selesai', 16),
(42, 22, '2023-03-14', 'status pekerjaan telah selesai', 1),
(43, 44, '2023-03-15', 'status pekerjaan diubah ke peninjauan', 1),
(44, 44, '2023-03-15', 'status pekerjaan telah selesai', 1),
(45, 44, '2023-03-15', 'aduan tidak valid', 1),
(46, 44, '2023-03-15', 'status pekerjaan telah selesai', 1),
(47, 24, '2023-03-16', 'status pekerjaan diubah ke proses', 1),
(48, 54, '2023-03-16', 'status pekerjaan diubah ke peninjauan', 1),
(49, 54, '2023-03-16', 'status pekerjaan diubah ke proses', 1),
(50, 47, '2023-03-16', 'aduan tidak valid', 1),
(51, 46, '2023-03-16', 'status pekerjaan diubah ke proses', 1),
(52, 66, '2023-03-18', '<p>akan segera kami proses</p>', 2),
(53, 66, '2023-03-18', 'status pekerjaan diubah ke peninjauan', 2),
(54, 66, '2023-03-18', 'status pekerjaan diubah ke proses', 2),
(55, 66, '2023-03-18', 'aduan tidak valid', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lupa_password`
--
ALTER TABLE `lupa_password`
  ADD PRIMARY KEY (`id_password`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_pengaduan` (`id_pengaduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lupa_password`
--
ALTER TABLE `lupa_password`
  MODIFY `id_password` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
