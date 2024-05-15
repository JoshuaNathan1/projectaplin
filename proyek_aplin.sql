-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 03:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_aplin`
--
CREATE DATABASE IF NOT EXISTS `proyek_aplin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyek_aplin`;

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

DROP TABLE IF EXISTS `agen`;
CREATE TABLE `agen` (
  `agen_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `office_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`agen_id`, `username`, `office_id`) VALUES
(1, 'linawati', 362),
(3, 'indah_darmayanti', 362);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota` (
  `kota_id` int(11) NOT NULL,
  `kota_nama` varchar(255) NOT NULL,
  `provinsi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota_id`, `kota_nama`, `provinsi_id`) VALUES
(1, 'ACEH SELATAN', 1),
(2, 'ACEH TENGGARA', 1),
(3, 'ACEH TIMUR', 1),
(4, 'ACEH TENGAH', 1),
(5, 'ACEH BARAT', 1),
(6, 'ACEH BESAR', 1),
(7, 'PIDIE', 1),
(8, 'ACEH UTARA', 1),
(9, 'SIMEULUE', 1),
(10, 'ACEH SINGKIL', 1),
(11, 'BIREUEN', 1),
(12, 'ACEH BARAT DAYA', 1),
(13, 'GAYO KUES', 1),
(14, 'ACEH JAYA', 1),
(15, 'NAGAN RAYA', 1),
(16, 'ACEH TAMIANG', 1),
(17, 'BENER MERIAH', 1),
(18, 'PIDIE JAYA', 1),
(19, 'BANDA ACEH', 1),
(20, 'SABANG', 1),
(21, 'LHOSEUMAWE', 1),
(22, 'LANGSA', 1),
(23, 'SUBULUSSAM', 1),
(24, 'TAPANULI TENGAH', 2),
(25, 'TAPANULI UTARA', 2),
(26, 'TAPANULI SELATAN', 2),
(27, 'NIAS', 2),
(28, 'LANGKAT', 2),
(29, 'KARO', 2),
(30, 'DELI SERDANG', 2),
(31, 'SIMALUNGUN', 2),
(32, 'ASAHAN', 2),
(33, 'LABUHANBATU', 2),
(34, 'DAIRI', 2),
(35, 'TOBA', 2),
(36, 'MANDAILING NATAL', 2),
(37, 'NIAS SELATAN', 2),
(38, 'PAKPAK BHARAT', 2),
(39, 'HUMBANG HASUNDUTAN', 2),
(40, 'SAMOSIR', 2),
(41, 'SERDANG BEDAGAI', 2),
(42, 'BATU BARA', 2),
(43, 'PADANG LAWAS UTARA', 2),
(44, 'PADAS LAWAS', 2),
(45, 'LABUHANBATU SELATAN', 2),
(46, 'LABUHANBATU UTARA', 2),
(47, 'NIAS UTARA', 2),
(48, 'NIAS BARAT', 2),
(49, 'MEDAN', 2),
(50, 'PEMATANGSIANTAR', 2),
(51, 'SIBOLGA', 2),
(52, 'TANJUNG BALAI', 2),
(53, 'BINJAU', 2),
(54, 'TEBING TINGGI', 2),
(55, 'PADANG SIDEMPUAN', 2),
(56, 'GUNUNGSITOLI', 2),
(57, 'PESISIR SELATAN', 3),
(59, 'SIJUNJUNG', 3),
(60, 'TANAH DATAR', 3),
(61, 'PADANG PARIAMAN', 3),
(62, 'AGAM', 3),
(63, 'LIMA PULUH KOTA', 3),
(64, 'PASAMAN', 3),
(65, 'KEPULAUAN MENTAWAI', 3),
(66, 'DHARMASRAYA', 3),
(67, 'SOLOK SELATAN', 3),
(68, 'PASAMAN BARAT', 3),
(69, 'PADANG', 3),
(70, 'SOLOK', 3),
(71, 'SAWAHLUNTO', 3),
(72, 'PADANG PANJANG', 3),
(73, 'BUKITTINGGI', 3),
(74, 'PAYAKUMBUH', 3),
(75, 'PARIAMAN', 3),
(76, 'KAMPAR', 4),
(77, 'INDRAGIRI HULU', 4),
(78, 'BENGKALIS', 4),
(79, 'INDRAGIRI HILIR', 4),
(80, 'PELALAWAN', 4),
(81, 'ROKAN HULU', 4),
(82, 'ROKAN HILIR', 4),
(83, 'SIAK', 4),
(84, 'KUANTAN SINGINGI', 4),
(85, 'KEPULAUAN MERANTI', 4),
(86, 'PEKANBARU', 4),
(87, 'DUMAI', 4),
(88, 'KERINCI', 5),
(89, 'MERANGIN', 5),
(90, 'SAROLANGUN', 5),
(91, 'BATANGHARI', 5),
(92, 'MUARO JAMBI', 5),
(93, 'TANJUNG JABUNG BARAT', 5),
(94, 'TANJUNG JABUNG TIMUR', 5),
(95, 'BUNGO', 5),
(96, 'TEBO', 5),
(97, 'JAMBI', 5),
(98, 'SUNGAI PENUH', 5),
(99, 'OGAN KOMERING ULU', 6),
(100, 'OGAN KEMERING ILIR', 6),
(101, 'MUARA ENIM', 6),
(102, 'LAHAT', 6),
(103, 'MUSI RAWAS', 6),
(104, 'MUSI BANYUASIN', 6),
(105, 'BANYUASIN', 6),
(106, 'OGAN KOMERING ULU TIMUR', 6),
(107, 'OGAN KOMERING ULU SELATAN', 6),
(108, 'OGAN ILIR', 6),
(109, 'EMPAT LAWANG', 6),
(110, 'PENUKAL ABAB LEMATANG ILIR', 6),
(111, 'MUSI RAWAS UTARA', 6),
(112, 'PALEMBANG', 6),
(113, 'PAGAR ALAM', 6),
(114, 'LUBUK LINGGAU', 6),
(115, 'PRABUMULIH', 6),
(116, 'BENGKULU SELATAN', 7),
(117, 'REJANG LEBONG', 7),
(118, 'BENGKULU UTARA', 7),
(119, 'KAUR', 7),
(120, 'SELUMA', 7),
(121, 'MUKO MUKO', 7),
(122, 'LEBONG', 7),
(123, 'KEPAHIANG', 7),
(124, 'BENGKULU TENGAH', 7),
(125, 'BENGKULU', 7),
(126, 'LAMPUNG SELATAN', 8),
(127, 'LAMPUNG TENGAH', 8),
(128, 'LAMPUNG UTARA', 8),
(129, 'LAMPUNG BARAT', 8),
(130, 'TULANG BAWANG', 8),
(131, 'TANGGAMUS', 8),
(132, 'LAMPUNG TIMUR', 8),
(133, 'WAY KANAN', 8),
(134, 'PESAWARAN', 8),
(135, 'PRINGSEWU', 8),
(136, 'MESUJI', 8),
(137, 'TULANG BAWANG BARAT', 8),
(138, 'PESISIR BARAT', 8),
(139, 'BANDAR LAMPUNG', 8),
(140, 'METRO', 8),
(141, 'BANGKA', 9),
(142, 'BELITUNG', 9),
(143, 'BANGKA SELATAN', 9),
(144, 'BANGKA TENGAH', 9),
(145, 'BANGKA BARAT', 9),
(146, 'BELITUNG TIMUR', 9),
(147, 'PANGKAL PINANG', 9),
(148, 'BINTAN', 10),
(149, 'KARIMUN', 10),
(150, 'NATUNA', 10),
(151, 'LINGGA', 10),
(152, 'KEPULAUAN ANAMBAS', 10),
(153, 'BATAM', 10),
(154, 'TANJUNG PINANG', 10),
(155, 'KEPULAUAN SERIBU', 11),
(156, 'JAKARTA PUSAT', 11),
(157, 'JAKARTA UTARA', 11),
(158, 'JAKARTA BARAT', 11),
(159, 'JAKARTA SELATAN', 11),
(160, 'JAKARTA TIMUR', 11),
(163, 'CIANJUR', 12),
(165, 'GARUT', 12),
(167, 'CIAMIS', 12),
(168, 'KUNINGAN', 12),
(170, 'MAJALENGKA', 12),
(171, 'SUMEDANG', 12),
(172, 'INDRAMAYU', 12),
(173, 'SUBANG', 12),
(174, 'PURWAKARTA', 12),
(175, 'KARAWANG', 12),
(177, 'BANDUNG BARAT', 12),
(178, 'PANGANDARAN', 12),
(179, 'BOGOR', 12),
(180, 'SUKABUMI', 12),
(181, 'BANDUNG', 12),
(182, 'CIREBON', 12),
(183, 'BEKASI', 12),
(184, 'DEPOK', 12),
(185, 'CIMAHI', 12),
(186, 'TASIKMALAYA', 12),
(187, 'BANJAR', 12),
(188, 'CILACAP', 13),
(189, 'BANYUMAS', 13),
(190, 'PURBALINGGA', 13),
(191, 'BANJARNEGARA', 13),
(192, 'KEBUMEN', 13),
(193, 'PURWOREJO', 13),
(194, 'WONOSOBO', 13),
(196, 'BOYOLALI', 13),
(197, 'KLATEN', 13),
(198, 'SUKOHARJO', 13),
(199, 'WONOGIRI', 13),
(200, 'KARANGANYAR', 13),
(201, 'SRAGEN', 13),
(202, 'GROBOGAN', 13),
(203, 'BLORA', 13),
(204, 'REMBANG', 13),
(205, 'PATI', 13),
(206, 'KUDUS', 13),
(207, 'JEPARA', 13),
(208, 'DEMAK', 13),
(210, 'TEMANGGUNG', 13),
(211, 'KENDAL', 13),
(212, 'BATANG', 13),
(214, 'PEMALANG', 13),
(216, 'BREBES', 13),
(217, 'MAGELANG', 13),
(218, 'SURAKARTA', 13),
(219, 'SALATIGA', 13),
(220, 'SEMARANG', 13),
(221, 'PEKALONGAN', 13),
(222, 'TEGAL', 13),
(223, 'KULON PROGO', 14),
(224, 'BANTUL', 14),
(225, 'GUNUNGKIDUL', 14),
(226, 'SLEMAN', 14),
(227, 'YOGYAKARTA', 14),
(228, 'PACITAN', 15),
(229, 'PONOROGO', 15),
(230, 'TRENGGALEK', 15),
(231, 'TULUNGAGUNG', 15),
(232, 'BLITAR', 15),
(233, 'KEDIRI', 15),
(234, 'MALANG', 15),
(235, 'LUMAJANG', 15),
(236, 'JEMBER', 15),
(237, 'BANYUWANGI', 15),
(238, 'BONDOWOSO', 15),
(239, 'SITUBONDO', 15),
(240, 'PROBOLINGGO', 15),
(241, 'PASURUAN', 15),
(242, 'SIDOARJO', 15),
(243, 'MOJOKERTO', 15),
(244, 'JOMBANG', 15),
(245, 'NGANJUK', 15),
(246, 'MADIUN', 15),
(247, 'MAGETAN', 15),
(248, 'NGAWI', 15),
(249, 'BOJONEGORO', 15),
(250, 'TUBAN', 15),
(251, 'LAMONGAN', 15),
(252, 'GRESIK', 15),
(253, 'BANGKALAN', 15),
(254, 'SAMPANG', 15),
(255, 'PAMEKASAN', 15),
(256, 'SUMENEP', 15),
(257, 'SURABAYA', 15);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

DROP TABLE IF EXISTS `office`;
CREATE TABLE `office` (
  `office_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `nama`, `alamat`, `telp`, `kota_id`, `username`) VALUES
(362, 'ERA ATLAS', 'JL. BRIGJEN KATAMSO', '(024) 841 8413', 220, 'indah_darmayanti');

-- --------------------------------------------------------

--
-- Table structure for table `proptype`
--

DROP TABLE IF EXISTS `proptype`;
CREATE TABLE `proptype` (
  `id_proptype` varchar(5) NOT NULL,
  `nama_proptype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proptype`
--

INSERT INTO `proptype` (`id_proptype`, `nama_proptype`) VALUES
('APT', 'APARTEMEN'),
('CND', 'CONDOTEL'),
('CNM', 'CONDOMINIUM'),
('GED', 'GEDUNG'),
('GUD', 'GUDANG'),
('HTL', 'HOTEL'),
('KOS', 'KOST'),
('LLN', 'LAIN-LAIN'),
('MAL', 'MAL'),
('OFC', 'OFFICE'),
('PB', 'PABRIK'),
('RK', 'RUKO'),
('RKN', 'RUKAN'),
('RMH', 'RUMAH'),
('STD', 'STUDIO'),
('TH', 'TOWN HOUSE'),
('TK', 'TOKO'),
('TNH', 'TANAH'),
('VL', 'VILLA'),
('WSM', 'WISMA');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi` (
  `provinsi_id` int(11) NOT NULL,
  `provinsi_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES
(1, 'ACEH'),
(2, 'SUMATERA UTARA'),
(3, 'SUMATERA BARAT'),
(4, 'RIAU'),
(5, 'JAMBI'),
(6, 'SUMATERA SELATAN'),
(7, 'BENGKULU'),
(8, 'LAMPUNG'),
(9, 'KEPULAUAN BANGKA BELITUNG'),
(10, 'KEPULAUAN RIAU'),
(11, 'DKI JAKARTA'),
(12, 'JAWA BARAT'),
(13, 'JAWA TENGAH'),
(14, 'YOGYAKARTA'),
(15, 'JAWA TIMUR'),
(16, 'BANTEN'),
(17, 'BALI'),
(18, 'NUSA TENGGARA BARAT'),
(19, 'NUSA TENGGARA TIMUR'),
(20, 'KALIMANTAN BARAT'),
(21, 'KALIMANTAN TENGAH'),
(22, 'KALIMANTAN SELATAN'),
(23, 'KALIMANTAN TIMUR'),
(24, 'KALIMANTAN UTARA'),
(25, 'SULAWESI UTARA'),
(26, 'SULAWESI TENGAH'),
(27, 'SULAWESI SELATAN'),
(28, 'SULAWESI TENGGARA'),
(29, 'GOTONTALO'),
(30, 'SULAWESI BARAT'),
(31, 'MALUKU'),
(32, 'MALUKU UTARA'),
(33, 'PAPUA'),
(34, 'PAPUA BARAT'),
(35, 'PAPUA SELATAN'),
(36, 'PAPUA TENGAH'),
(37, 'PAPUA PEGUNUNGAN'),
(38, 'PAPUA BARAT DAYA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `full_name`, `email`, `password`, `hp`, `profile_pic`, `role`) VALUES
('a', 'a', NULL, '123', '', '/public/img/profile/a.jpeg', 'pengguna'),
('admin', 'Admin', NULL, 'admin', '', '', 'admin'),
('defson', 'Defson Jeremy', NULL, '123', '', '', 'agen'),
('indah_darmayanti', 'INDAH DWIDARMAYANTI', 'indah_darmayanti01@yahoo.com', '123', '08122814961', 'https://member.eraindonesia.com/storage/user_member/shares/24033.jpg', 'agen'),
('linawati', 'LINAWATI SURYA S', 'era_atlas_semarang@yahoo.co.id', '123', '0816 659210', 'https://member.eraindonesia.com/storage/user_member/shares/150.jpg', 'agen'),
('samini', 'samini', NULL, '123', '', 'https://eraindonesia.com/profile/06836', 'agen'),
('z', 'z', NULL, '123', 'z', 'z', 'agen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`agen_id`),
  ADD KEY `fk_agen_office` (`office_id`),
  ADD KEY `fk_agen_users` (`username`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`),
  ADD KEY `fk_kota_provinsi` (`provinsi_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`),
  ADD KEY `fk_office_kota` (`kota_id`),
  ADD KEY `fk_office_user` (`username`);

--
-- Indexes for table `proptype`
--
ALTER TABLE `proptype`
  ADD PRIMARY KEY (`id_proptype`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `agen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `provinsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agen`
--
ALTER TABLE `agen`
  ADD CONSTRAINT `fk_agen_office` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `fk_agen_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `fk_kota_provinsi` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`provinsi_id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `fk_office_kota` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
