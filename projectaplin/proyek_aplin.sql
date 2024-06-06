-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 05:44 AM
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

CREATE TABLE `agen` (
  `agen_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `office_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`agen_id`, `username`, `office_id`) VALUES
(1, 'rosliana', 364),
(2, 'inoe', 365),
(3, 'nirmala', 366),
(4, 'aristyo', 367),
(5, 'hartono', 368),
(6, 'henry', 369),
(7, 'swandawati', 370),
(8, 'maria', 371),
(9, 'abuy', 372),
(10, 'ratih', 373),
(11, 'bambang', 374),
(12, 'valentia', 375),
(13, 'safitri', 376),
(14, 'solahudin', 377),
(15, 'richard', 378),
(16, 'juliastini', 379),
(17, 'marco', 380),
(18, 'tommy', 381),
(19, 'hafrizal', 382),
(20, 'anny', 383),
(21, 'harto', 384),
(22, 'melany', 385),
(23, 'irene', 386),
(24, 'kris', 387),
(25, 'tediyanto', 388),
(26, 'lukas', 389),
(27, 'sugiyanto', 390),
(28, 'neysa', 391),
(29, 'peter', 392),
(30, 'johnson', 393),
(31, 'rika', 394),
(32, 'evelyne', 395),
(33, 'nancy', 396),
(34, 'venny', 397),
(35, 'mira', 398),
(36, 'cornelis', 399),
(37, 'reyza', 400),
(38, 'andi', 401),
(39, 'muliana', 402),
(40, 'daniel', 403),
(41, 'tommie', 404),
(42, 'yusti', 405),
(43, 'gusti', 406),
(44, 'marius', 407),
(45, 'budi', 408),
(46, 'hose', 409),
(47, 'william', 410),
(48, 'anton2', 411),
(49, 'asep', 412),
(50, 'pramadhia', 413),
(51, 'jackson', 414),
(52, 'ike', 415),
(53, 'victor', 416),
(54, 'herlina', 417),
(55, 'shella', 418),
(56, 'yessica', 419),
(57, 'surianti', 420),
(58, 'michael', 421),
(59, 'agus', 422),
(60, 'jantje', 423),
(61, 'kho', 424),
(62, 'yauw', 425),
(63, 'edy', 426),
(64, 'dhanny', 427),
(65, 'yusliana', 428),
(66, 'lanny', 429),
(67, 'elshantie', 430),
(68, 'davina', 431),
(69, 'linawatisurya', 432),
(70, 'susanto', 433),
(71, 'lia', 434),
(72, 'bernadetta', 435),
(73, 'yullie', 436),
(74, 'tri', 364),
(75, 'jamilah', 366);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `kecamatan_nama` varchar(255) NOT NULL,
  `kota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kecamatan_nama`, `kota_id`) VALUES
(1, 'BANTAR GEBANG', 183),
(2, 'BEKASI BARAT', 183),
(3, 'BEKASI SELATAN', 183),
(4, 'BEKASI TIMUR', 183),
(5, 'BEKASI UTARA', 183),
(6, 'JATIASIH', 183),
(7, 'JATI SAMPURNA', 183),
(8, 'MEDANSATRIA', 183),
(9, 'MUSTIKAJAYA', 183),
(10, 'PONDEOKGEDE', 183),
(11, 'PONDOKMELATI', 183),
(12, 'RAWALUMBU', 183),
(13, 'BABELAN', 183),
(14, 'BOJONGMANGU', 183),
(15, 'CABANGBUNGIN', 183),
(18, 'CIBARUSAH', 183),
(19, 'CIBITUNG', 183),
(20, 'CIKARANG BARAT', 183),
(21, 'CIKARANG PUSAT', 183),
(22, 'CIKARANG SELATAN', 183),
(23, 'CIKARANG TIMUR', 183),
(24, 'CIKARANG UTARA', 183),
(25, 'KARANG BAHAGIA', 183),
(26, 'KEDUNG WARINGIN', 183),
(27, 'MUARA GEMBONG', 183),
(28, 'PEBAYURAN', 183),
(29, 'SERANG BARU', 183),
(30, 'SETU', 183),
(31, 'SUKAKARYA', 183),
(32, 'SUKATANI', 183),
(33, 'SUKAWANGI', 183),
(34, 'TAMBELANG', 183),
(35, 'TAMBUN SELATAN', 183),
(36, 'TAMBUN UTARA', 183),
(38, 'TARUMAJAYA', 183),
(39, 'ASEMROWO', 257),
(40, 'BENOWO', 257),
(41, 'BUBUTAN', 257),
(42, 'BULAK', 257),
(43, 'DUKUH PAKIS', 257),
(44, 'GAYUNGAN', 257),
(45, 'GENTENG', 257),
(46, 'GUBENG', 257),
(47, 'GUNUNG ANYAR', 257),
(48, 'JAMBANGAN', 257),
(49, 'KARANG PILANG', 257),
(50, 'KENJERAN', 257),
(51, 'KREMBANGAN', 257),
(52, 'LAKARSANTRI', 257),
(53, 'MULYOREJO', 257),
(54, 'PABEAN CANTIAN', 257),
(55, 'PAKAL', 257),
(56, 'RUNGKUT', 257),
(57, 'SAMBIKEREP', 257),
(59, 'SAWAHAN', 257),
(60, 'SEMAMPIR', 257),
(61, 'SUKOLILO', 257),
(62, 'SIMOKERTO', 257),
(63, 'SUKOMANUNGGAL', 257),
(64, 'TAMBAKSARI', 257),
(65, 'TANDES', 257),
(66, 'TEGALSARI', 257),
(67, 'TENGGILIS MEJOYO', 257),
(68, 'WIYUNG', 257),
(69, 'WONOCOLO', 257),
(70, 'WONOKROMO', 257),
(71, 'BALONGBEDO', 242),
(72, 'BUDURAN', 242),
(73, 'CANDI', 242),
(74, 'GEDANGAN', 242),
(75, 'JABON', 242),
(76, 'KREMBUNG', 242),
(77, 'KRIAN', 242),
(78, 'PORONG', 242),
(79, 'PRAMBON', 242),
(80, 'SEDATI', 242),
(81, 'SIDOARJO', 242),
(82, 'SUKODONO', 242),
(83, 'TAMAN', 242),
(84, 'TANGGULANGIN', 242),
(85, 'TARIK', 242),
(86, 'TULANGAN', 242),
(87, 'WARU', 242),
(88, 'WONOAYU', 242),
(89, 'BANYUATES', 254),
(90, 'CAMPLONG', 254),
(91, 'JRENGIK', 254),
(92, 'KARANGPENANG', 254),
(93, 'KEDUNGDUNG', 254),
(94, 'KETAPANG', 254),
(95, 'OMBEN', 254),
(96, 'ARONGAN LAMBALEK', 5),
(97, 'BUBON', 5),
(98, 'JOHAN PAHLAWAN', 5),
(99, 'KAWAY XVI', 5),
(100, 'MEUREBO', 5),
(101, 'PANTAI CEUREUMEN', 5),
(102, 'PANTON REU', 5),
(103, 'SAMATIGA', 5),
(104, 'SUNGAI MAS', 5),
(105, 'WOYLA', 5),
(106, 'WOYLA BARAT', 5),
(107, 'WOYLA TIMUR', 5),
(108, 'ARGOMULYO', 219),
(109, 'SIDOMUKTI', 219),
(110, 'SIDOREJO', 219),
(111, 'TINGKIR', 219);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

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
(257, 'SURABAYA', 15),
(258, 'TANGERANG', 16),
(259, 'TANGERANG SELATAN', 16),
(260, 'SERANG', 16),
(261, 'PANDEGLANG', 16),
(262, 'LEBAK', 16),
(263, 'CILEGON', 16),
(264, 'BADUNG', 17),
(265, 'BANGLI', 17),
(266, 'BULELENG', 17),
(267, 'DENPASAR', 17),
(268, 'GIANYAR', 17),
(269, 'JEMBRANA', 17),
(270, 'KARANGASEM', 17),
(271, 'KLUNGKUNG', 17),
(272, 'TABANAN', 17),
(273, 'BOALEMO', 29),
(274, 'BONE BOLANGO', 29),
(275, 'GORONTALO', 29),
(276, 'GORONTALO UTARA', 29),
(277, 'PAHUWATO', 29),
(279, 'BENGKAYANG', 20),
(280, 'KAPUAS HULU', 20),
(281, 'KAYONG UTARA', 20),
(282, 'KETAPANG', 20),
(283, 'KUBU RAYA', 20),
(284, 'LANDAK', 20),
(285, 'MELAWI', 20),
(286, 'MEMPAWAH', 20),
(287, 'PONTIANAK', 20),
(288, 'SAMBAS', 20),
(289, 'SANGGAU', 20),
(290, 'SEKADAU', 20),
(291, 'SINGKAWANG', 20),
(292, 'SINTANG', 20),
(293, 'BIAK NUMFOR', 33),
(294, 'JAYAPURA', 33),
(295, 'KEEROM', 33),
(296, 'KEPULAUAN YAPEN', 33),
(297, 'MAMBERAMO RAYA', 33),
(298, 'SARMI', 33),
(299, 'SUPIORI', 33),
(300, 'WAROPEN', 33);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

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
(364, 'ERA EKSPRES', 'RUKO EMERALD COMMERCIAL BLOK UG NO. 37', '(021) 2851 9260', 183, 'rosliana'),
(365, 'ERA JATI', 'JL. WIBAWA MUKTI 2', '(021) 821 9999', 183, 'inoe'),
(366, 'ERA SKY', 'RUKO RUBY BLOK TB NO. 15', '(021) 8945 9182', 183, 'nirmala'),
(367, 'ERA STAR BEKASI', 'JL. SURYA RAYA NO. 389', '02182732730', 183, 'aristyo'),
(368, 'ERA EXPERT PROJECT', 'RUKO THAMRIN BOULEVARD TIM. A16 JABABEKA', '081919189999', 183, 'hartono'),
(369, 'ERA FAJAR', 'JL. RAYA PAJAJARAN NO.59 G', '(0251) 8360 374', 179, 'henry'),
(370, 'ERA DMITRA', 'RUKO SENTRA EROPA BLOK A/2', '021 - 84934768', 160, 'swandawati'),
(371, 'ERA PROJECT CINERE', 'GEDUNG ITJEHER, JL.CINERE RAYA NO.7', '(021) 570 8000', 184, 'maria'),
(372, 'ERA FIESTA SAWANGAN', 'RUKO CITRALAKE BLOK B08 NO.05', '08170817555', 181, 'abuy'),
(373, 'ERA RADIANT', 'BINTARO TRADE CENTER B1/3A', '(021) 7486 2000', 258, 'ratih'),
(374, 'ERA CIPTA', 'TWOSPACES - COWORKING SPACE', '(021) 531 67910', 258, 'bambang'),
(375, 'ERA GRATIA', 'RUKO NORTH SOLVANG NO.26', '087808001950', 258, 'valentia'),
(376, 'ERA EMERALD', 'RUKO ALTHIA BLOK AP NO.39', '(021) 22210333', 258, 'safitri'),
(377, 'ERA MEDINA', 'RUKO KEBAYORAN ARCADE KA/C2-30', '(021) 7486 1333', 258, 'solahudin'),
(378, 'ERA HARVEST', '91 DISTRICT BLOK B/21, BSD PAGEDANGAN', '-', 258, 'richard'),
(379, 'ERA VICTORIA ALAM SUTERA', 'JL. SUTERA NIAGA I NO.28', '(021) 539 9888', 258, 'juliastini'),
(380, 'ERA PROJECT ALAM SUTERA', 'RUKO VICTORIA LANE NO.3 ALAM SUTERA', '(021) 570 8000', 258, 'marco'),
(381, 'ERA PROSPEK', 'KOMPLEK RUKO PURI MANSION BLOK A NO.12', '021 29528000', 158, 'tommy'),
(382, 'ERA STAR', 'KOMP. RUKAN CITTA GRAHA', '(021) 5366 4000', 158, 'hafrizal'),
(383, 'ERA CROWN', 'GREEN LAKE CITY, RUKAN WALL STREET', '(021) 290 17999', 158, 'anny'),
(384, 'ERA DEA', 'LIPPO ST. MORITZ OFFICE TOWER #0901', '021 30497711', 158, 'harto'),
(385, 'ERA INFINITY', 'SOHO CAPITAL LT. 19 UNIT # D 8-9', '02150515051', 158, 'melany'),
(386, 'ERA OPTIMA', 'GREEN LAKE CITY, RUKAN SENTRA NIAGA', '021 5503761', 158, 'irene'),
(387, 'ERA PEAK GREEN LAKE CITY', 'RUKO GREEN LAKE CITY - RUKAN WALLSTREET', '02129017887', 158, 'kris'),
(388, 'ERA TOP', 'INTILAND TOWER M2 FLOOR', '021 29022978', 156, 'tediyanto'),
(389, 'ERA MAX', 'CITY LOFTS SUDIRMAN LT. 28 SUITE 2817', '(021) 2991 8900', 156, 'lukas'),
(390, 'ERA PROJECT PURI INDAH', 'JL.LINGKAR LUAR BARAT NO.101', '(021) 570 8000', 158, 'sugiyanto'),
(391, 'ERA PRESTIGE', 'JL. R.P. SOEROSO NO.39 MENTENG', '(021) 398 30396', 156, 'neysa'),
(392, 'ERA POINT', 'GD. TAMANSARI PARAMA LT. 7B', '(021) 310 8703', 156, 'peter'),
(393, 'ERA GOLDEN TRIANGLE', 'APARTEMEN SETIABUDI SKY GARDEN UNIT 4105', '081977403529', 156, 'johnson'),
(394, 'ERA PROJECT TCC', 'RIKA DARMAJANTI WIDJAJA', '(021) 570 8000', 156, 'rika'),
(395, 'ERA VICTORIA', 'PONDOK INDAH PLAZA 2 BLOK BA-37', '(021) 769 3590', 159, 'evelyne'),
(396, 'ERA GRIYA SELARAS', 'SIMPRUG GALERI BLOK G', '(021) 726 0016', 159, 'nancy'),
(397, 'ERA GRAHA', 'RUKO THB JL. GEDUNG HIJAU RAYA NO. 39', '(021) 765 3888', 159, 'venny'),
(398, 'ERA MIRA', 'SUNGAI SAMBAS VI NO.10 KRAMAT PELA', '087885069711', 159, 'mira'),
(399, 'ERA VIVA', 'JL. M. KAHFI I NO. 234', '02122710008', 159, 'cornelis'),
(400, 'ERA PRIORITY', 'RADIO DALAM RAYA NO. H-5A RT.07/04', '0217228969', 159, 'reyza'),
(401, 'ERA ELITEMEDIFFA', 'BUNCIT BUSINESS CENTER B.8 LT.2', '021 26963218', 159, 'andi'),
(402, 'ERA VICTORIA TEBET', 'JL. TEBET TIMUR DALAM RAYA NO.29, TEBET', '02183704158', 159, 'muliana'),
(403, 'ERA PEAK KEMANG', 'JL. BANGKA RAYA NO.48 KEMANG', '021 2911 0999', 159, 'daniel'),
(404, 'ERA MATRIX', 'RUKO THE SAVOY C1-27 JAKARTA GARDEN CITY', '0811888297', 160, 'tommie'),
(405, 'ERA INTEN', 'RADEN INTEN CENTER 8A', '(021) 2962 2626', 160, 'yusti'),
(406, 'ERA AGUNG PRAWIRA', 'TAMAN BUARAN I', '(021) 861 1788', 160, 'gusti'),
(407, 'ERA GADING', 'JL. KELAPA GADING BOULEVARD', '(021) 2452 5252', 157, 'marius'),
(408, 'ERA BUANA', 'Ruko Golf Island PIK Blok A No. 18', '02129525783', 157, 'budi'),
(409, 'ERA MANSION', 'R. GORONTALO, LT 2 RUKO OCEAN PRINTING', '081905977889', 157, 'hose'),
(410, 'ERA ONE', 'BULEVARD RAYA LB3 NO.4 KELAPA GADING', '08192955551', 157, 'william'),
(411, 'ERA VICTORY', 'JL. MAHENDRADATA SELATAN NO. 18B', '(0361) 846 6678', 5, 'anton2'),
(412, 'ERA BANDUNG', 'JL. BAGUS RANGIN NO.12A, DIPATIUKUR', '(022) 250 7828', 181, 'asep'),
(413, 'ERA PRATAMA', 'JL. JEND. AHMAD YANI NO. 300B', '(022) 720 1070', 181, 'pramadhia'),
(414, 'ERA JACK', 'TAMAN KOPO INDAH 2 RUKO IA NO. 3', '(022) 888 86363', 181, 'jackson'),
(415, 'ERA INNO', 'RUKO SETRA SARI MALL B4 NO. 92', '(022) 877 83232', 181, 'ike'),
(416, 'ERA ULTIMA', 'BATUNUNGGAL INDAH RAYA NO. 397', '022-87313333', 181, 'victor'),
(417, 'ERA INNO MOH. TOHA', 'JL. MOH. TOHA NO. 355A', '022 5207559', 181, 'herlina'),
(418, 'ERA STAR BANDUNG', 'Jl. Wastukencana No.91', '022 20534000', 181, 'shella'),
(419, 'ERA INTEGRITY', 'SUROTOKUNTO RAWAGABUS NO. 28', '(0267) 840 6981', 175, 'yessica'),
(420, 'ERA VENTURA', 'JL. TERUSAN KAWI NO. 8C MALANG, JA-TIM', '(0341) 578 857', 234, 'surianti'),
(421, 'ERA LAND', 'TUMENGGUNG SURYO 131F PURWANTORO', '0341 493131', 234, 'michael'),
(422, 'ERA VICTORIA MALANG', 'BUNGUR 59D', '0341 4385635', 234, 'agus'),
(423, 'ERA SANTIKA', 'JL. EMBONG WUNGU 10-12', '(031) 5310732', 257, 'jantje'),
(424, 'ERA KITA', 'RAYA LONTAR NO.299', '(031) 7455 999', 257, 'kho'),
(425, 'ERA ARTA', 'JL. SULAWESI NO.14', '0411 362 9966', 5, 'yauw'),
(426, 'ERA ASCOT', 'JL. T. AMIR HAMZAH B 18', '(061) 800 31828', 49, 'edy'),
(427, 'ERA TOP GAJAH MADA', 'SEMARANG TOWN SQUARE LT. 3', '(024) 86041230', 220, 'dhanny'),
(428, 'ERA BANDUNG ANJASMORO', 'ANJASMORO RAYA NO. 6B', '(024) 76638888', 220, 'yusliana'),
(429, 'ERA PROSPERITY', 'BROTOJOYO TIMUR II NO.5', '082131607779', 220, 'lanny'),
(430, 'ERA MATARAM', 'JL. MT. HARYONO 770', '085875031200', 220, 'elshantie'),
(431, 'ERA DC', 'DI PANJAITAN 7B-C', '0243521919', 220, 'davina'),
(432, 'ERA ATLAS', 'JL. BRIGJEN KATAMSO', '(024) 841 8413', 220, 'linawatisurya'),
(433, 'ERA IREA', 'RUKO SOLO CENTER POINT B3', '(0271) 788 2233', 218, 'susanto'),
(434, 'ERA IREA SOLO BARU', 'JL. IR. SOEKARNO LJ 06', '(0271) 625 999', 218, 'lia'),
(435, 'ERA VENTURA SOLO', 'JL. VETERAN NO. 278', '(0271) 8899 774', 218, 'bernadetta'),
(436, 'ERA BAHARI', 'JL. LET. JEND. SUPRAPTO NO.86A, TEGAL', '0283321881', 222, 'yullie');

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE `properti` (
  `properti_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `kamar_tidur` int(11) NOT NULL,
  `kamar_mandi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `transaksi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `proptype_id` varchar(5) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `agen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`properti_id`, `judul`, `deskripsi`, `alamat`, `luas_tanah`, `luas_bangunan`, `kamar_tidur`, `kamar_mandi`, `harga`, `transaksi`, `foto`, `proptype_id`, `kecamatan_id`, `agen_id`) VALUES
(6, 'IDR 50.000.000', 'halo', 'cluster palma', 13, 142, 3, 3, 50000000, 'DIJUAL', 'https://member.eraindonesia.com/storage/listing/shares/O048098/O048098.jpg', 'RMH', 8, 75);

-- --------------------------------------------------------

--
-- Table structure for table `proptype`
--

CREATE TABLE `proptype` (
  `proptype_id` varchar(5) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proptype`
--

INSERT INTO `proptype` (`proptype_id`, `nama`) VALUES
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
('abuy', 'ABUY TJIA', 'abuytjia@yahoo.com', '123', '081219901919', 'https://member.eraindonesia.com/storage/user_member/shares/B65.jpg', 'agen'),
('admin', 'Admin', NULL, 'admin', '', '', 'admin'),
('agus', 'AGUS SULESTIJO', NULL, '123', '08123210223', 'https://member.eraindonesia.com/storage/user_member/shares/B49.jpg', 'agen'),
('andi', 'ANDI IRAWAN', NULL, '123', '087780955607', 'https://member.eraindonesia.com/storage/user_member/shares/365.jpg', 'agen'),
('anny', 'ANNY HALIM', NULL, '123', '087883408787', 'https://member.eraindonesia.com/storage/user_member/shares/289.jpg', 'agen'),
('anton', 'ANTON', NULL, '123', '-', 'https://member.eraindonesia.com/storage/user_member/shares/246.jpg', 'agen'),
('anton1', 'ANTON', NULL, '123', '-', 'https://member.eraindonesia.com/storage/user_member/shares/246.jpg', 'agen'),
('anton2', 'ANTON', NULL, '123', '-', 'https://member.eraindonesia.com/storage/user_member/shares/246.jpg', 'agen'),
('aristyo', 'ARISTYO MUWARDIKA', 'erastarbekasi@gmail.com', '123', '08136127555', 'https://member.eraindonesia.com/storage/user_member/shares/B12.jpg', 'agen'),
('asep', 'ASEP AHMAD ROSIDIN', NULL, '123', '081977807828', 'https://member.eraindonesia.com/storage/user_member/shares/049.jpg', 'agen'),
('bambang', 'BAMBANG SURYADI', 'info.eracipta@yahoo.co.id', '123', '0811193909', 'https://member.eraindonesia.com/storage/user_member/shares/256.jpg', 'agen'),
('bernadetta', 'BERNADETTA HARYANTI', NULL, '123', '-', 'https://member.eraindonesia.com/storage/user_member/shares/B35.jpg', 'agen'),
('budi', 'BUDI LIM', NULL, '123', '082188888578', 'https://member.eraindonesia.com/storage/user_member/shares/347.jpg', 'agen'),
('cornelis', 'CORNELIS SUHARYANTO', NULL, '123', '0817828381', 'https://member.eraindonesia.com/storage/user_member/shares/318.jpg', 'agen'),
('daniel', 'DANIEL MORRIS TAMBUNAN', NULL, '123', '085715888000', 'https://member.eraindonesia.com/storage/user_member/shares/A86.jpg', 'agen'),
('davina', 'DAVINA DIAN PRATIWI', NULL, '123', '082261137320', 'https://member.eraindonesia.com/storage/user_member/shares/360.jpg', 'agen'),
('defson', 'Defson Jeremy', NULL, '123', '', '', 'agen'),
('dhanny', 'DHANNY SUTEJA', NULL, '123', '085878995757', 'https://member.eraindonesia.com/storage/user_member/shares/B50.jpg', 'agen'),
('edy', 'EDY SANJAYA', NULL, '123', '0811 6209088', 'https://member.eraindonesia.com/storage/user_member/shares/334.jpg', 'agen'),
('elshantie', 'ELSHANTIE', NULL, '123', '08122505016', 'https://member.eraindonesia.com/storage/user_member/shares/363.jpg', 'agen'),
('evelyne', 'EVELYNE ADAM', NULL, '123', '0812-9923188', 'https://member.eraindonesia.com/storage/user_member/shares/010.jpg', 'agen'),
('gusti', 'I GUSTI AGUNG AYU PUTRI', NULL, '123', '0878-8822266', 'https://member.eraindonesia.com/storage/user_member/shares/017.jpg', 'agen'),
('hafrizal', 'HAFRIZAL CHAN', NULL, '123', '08118579898', 'https://member.eraindonesia.com/storage/user_member/shares/275.jpg', 'agen'),
('harto', 'HARTO MAEDHA', NULL, '123', '081290008200', 'https://member.eraindonesia.com/storage/user_member/shares/300.jpg', 'agen'),
('hartono', 'HARTONO SUTIOSO', 'eraexpert.project@gmail.com', '123', '081717778999', 'https://member.eraindonesia.com/storage/user_member/shares/B56.jpg', 'agen'),
('henry', 'HENRY WIRAHUTAMA', 'erafajarbogor@yahoo.com', '123', '087870673652', 'https://member.eraindonesia.com/storage/user_member/shares/242.jpg', 'agen'),
('herlina', 'HERLINA', NULL, '123', '08170211705', 'https://member.eraindonesia.com/storage/user_member/shares/B17.jpg', 'agen'),
('hose', 'HOSE R', NULL, '123', '-', 'https://member.eraindonesia.com/storage/user_member/shares/352.jpg', 'agen'),
('ike', 'IKE MONIAGA', NULL, '123', '087821507057', 'https://member.eraindonesia.com/storage/user_member/shares/345.jpg', 'agen'),
('indah_darmayanti', 'INDAH DWIDARMAYANTI', 'indah_darmayanti01@yahoo.com', '123', '08122814961', 'https://member.eraindonesia.com/storage/user_member/shares/24033.jpg', 'agen'),
('inoe', 'INOE SURANDONO', 'erajati01@gmail.com', '123', '0812-9049029', 'https://member.eraindonesia.com/storage/user_member/shares/309.jpg', 'agen'),
('irene', 'IRENE PRANATIA', NULL, '123', '0817 811381', 'https://member.eraindonesia.com/storage/user_member/shares/337.jpg', 'agen'),
('jackson', 'JACKSON', NULL, '123', '082216668839', 'https://member.eraindonesia.com/storage/user_member/shares/312.jpg', 'agen'),
('jamilah', 'JAMILAH', 'mila.erasky@gmail.com', '123', '081317576780', 'https://member.eraindonesia.com/storage/user_member/shares/21674.jpg', 'agen'),
('jantje', 'IR. JANTJE KAIROPAN', NULL, '123', '0811306602', 'https://member.eraindonesia.com/storage/user_member/shares/162.jpg', 'agen'),
('johnson', 'JOHNSON WILLIAM', NULL, '123', '081361638881', 'https://member.eraindonesia.com/storage/user_member/shares/358.jpg', 'agen'),
('juliastini', 'JULIASTINI SISWOJO', NULL, '123', '08129053877', 'https://member.eraindonesia.com/storage/user_member/shares/A37.jpg', 'agen'),
('kho', 'KHO MARTONO INDRA', NULL, '123', '081990099090', 'https://member.eraindonesia.com/storage/user_member/shares/233.jpg', 'agen'),
('kris', 'KRIS HARYANTO', NULL, '123', '0816717947', 'https://member.eraindonesia.com/storage/user_member/shares/A70.jpg', 'agen'),
('lanny', 'LANNY WIBOWO', NULL, '123', '087885295155', 'https://member.eraindonesia.com/storage/user_member/shares/366.jpg', 'agen'),
('lia', 'LIA IMELDA', NULL, '123', '08122682069', 'https://member.eraindonesia.com/storage/user_member/shares/B31.jpg', 'agen'),
('linawati', 'LINAWATI SURYA S', 'era_atlas_semarang@yahoo.co.id', '123', '0816 659210', 'https://member.eraindonesia.com/storage/user_member/shares/150.jpg', 'agen'),
('linawatisurya', 'LINAWATI SURYA S', NULL, '123', '0816 659210', 'https://member.eraindonesia.com/storage/user_member/shares/150.jpg', 'agen'),
('lukas', 'LUKAS BONG', NULL, '123', '081807858585', 'https://member.eraindonesia.com/storage/user_member/shares/217.jpg', 'agen'),
('marco', 'MARCO DARMA WANGSA', NULL, '123', '081387716626', 'https://member.eraindonesia.com/storage/user_member/shares/B54.jpg', 'agen'),
('maria', 'MARIA CHANDRAYANI', NULL, '123', '081293699168', 'https://member.eraindonesia.com/storage/user_member/shares/B62.jpg', 'agen'),
('marius', 'MARIUS DION', NULL, '123', '081293785000', 'https://member.eraindonesia.com/storage/user_member/shares/343.jpg', 'agen'),
('melany', 'MELANY, S.KOM', NULL, '123', '081389767878', 'https://member.eraindonesia.com/storage/user_member/shares/333.jpg', 'agen'),
('michael', 'MICHAEL HERTANTO', NULL, '123', '082232157418', 'https://member.eraindonesia.com/storage/user_member/shares/357.jpg', 'agen'),
('mira', 'MIRA ADYANTI', NULL, '123', '087885069711', 'https://member.eraindonesia.com/storage/user_member/shares/250.jpg', 'agen'),
('muliana', 'MARIA ASTUTI MULIANA', NULL, '123', '0818918735', 'https://member.eraindonesia.com/storage/user_member/shares/A38.jpg', 'agen'),
('nancy', 'NANCY AMELYA', NULL, '123', '08161908888', 'https://member.eraindonesia.com/storage/user_member/shares/014.jpg', 'agen'),
('neysa', 'NEYSA ARDITYA', NULL, '123', '081385473377', 'https://member.eraindonesia.com/storage/user_member/shares/319.jpg', 'agen'),
('nirmala', 'NIRMALA AFIATI', 'lala.erasky@gmail.com', '123', '0813 9994495', 'https://member.eraindonesia.com/storage/user_member/shares/331.jpg', 'agen'),
('peter', 'PETER WIJAYA', NULL, '123', '081586700840', 'https://member.eraindonesia.com/storage/user_member/shares/338.jpg', 'agen'),
('pramadhia', 'DRS.H.PRAMADHIA B.,APT.', NULL, '123', '081214012109', 'https://member.eraindonesia.com/storage/user_member/shares/192.jpg', 'agen'),
('ratih', 'RATIH RATNAWULAN', 'eraradiant@yahoo.co.id', '123', '0816805395', 'https://member.eraindonesia.com/storage/user_member/shares/211.jpg', 'agen'),
('reyza', 'REYZA MANDLIKO MIKAJEVA', NULL, '123', '081808357979', 'https://member.eraindonesia.com/storage/user_member/shares/340.jpg', 'agen'),
('richard', 'RICHARD', NULL, '123', '08118172937', 'https://member.eraindonesia.com/storage/user_member/shares/367.jpg', 'agen'),
('rika', 'RIKA DARMAJANTI WIDJAJA', NULL, '123', '0817808808', 'https://member.eraindonesia.com/storage/user_member/shares/B66.jpg', 'agen'),
('rosliana', 'ROSLIANA. SH', 'eraekspres95@yahoo.com', '123', '081212150722', 'https://member.eraindonesia.com/storage/user_member/shares/035.jpg', 'agen'),
('safitri', 'SAFITRI K. WARDHANI', 'eraemerald@gmail.com', '123', '08159500014', 'https://member.eraindonesia.com/storage/user_member/shares/298.jpg', 'agen'),
('samini', 'samini', NULL, '123', '', 'https://eraindonesia.com/profile/06836', 'agen'),
('shella', 'SHELLA AMELIA ROSA', NULL, '123', '081282333381', 'https://member.eraindonesia.com/storage/user_member/shares/B44.jpg', 'agen'),
('solahudin', 'SOLAHUDIN ALAYUBI', NULL, '123', '081218649787', 'https://member.eraindonesia.com/storage/user_member/shares/344.jpg', 'agen'),
('sugiyanto', 'HENRY SUGIYANTO', NULL, '123', '081932078977', 'https://member.eraindonesia.com/storage/user_member/shares/B53.jpg', 'agen'),
('surianti', 'SURIANTI', NULL, '123', '081373128999', 'https://member.eraindonesia.com/storage/user_member/shares/253.jpg', 'agen'),
('susanto', 'IR. SUSANTO', NULL, '123', '0811295454', 'https://member.eraindonesia.com/storage/user_member/shares/339.jpg', 'agen'),
('swandawati', 'SWANDAWATI', 'eradmitra@gmail.com', '123', '08176959490', 'https://member.eraindonesia.com/storage/user_member/shares/354.jpg', 'agen'),
('tediyanto', 'TEDIYANTO', NULL, '123', '083898487980', 'https://member.eraindonesia.com/storage/user_member/shares/143.jpg', 'agen'),
('tommie', 'TOMMIE BELGINO PASOREH', NULL, '123', '0811888297', 'https://member.eraindonesia.com/storage/user_member/shares/361.jpg', 'agen'),
('tommy', 'TOMMY TANUWIDJAJA', NULL, '123', '08128101988', 'https://member.eraindonesia.com/storage/user_member/shares/167.jpg', 'agen'),
('tri', 'TRI WIDIYANYO', '21143@eraindonesia.com', '123', '(021) 2851 9260', 'https://member.eraindonesia.com/storage/user_member/shares/21143.jpg', 'agen'),
('valentia', 'VALENTIA SURYANI', 'eragratiakarawaci@gmail.com', '123', '0816732278', 'https://member.eraindonesia.com/storage/user_member/shares/263.jpg', 'agen'),
('venny', 'VENNY TJAHJONO', NULL, '123', '0811161006', 'https://member.eraindonesia.com/storage/user_member/shares/030.jpg', 'agen'),
('victor', 'IR. VICTOR TAN, S.SI., MSC.', NULL, '123', '08990909393', 'https://member.eraindonesia.com/storage/user_member/shares/349.jpg', 'agen'),
('william', 'WILLIAM', NULL, '123', '08159954554', 'https://member.eraindonesia.com/storage/user_member/shares/364.jpg', 'agen'),
('yauw', 'YAUW KIEM PHIN', NULL, '123', '08155555525', 'https://member.eraindonesia.com/storage/user_member/shares/173.jpg', 'agen'),
('yessica', 'YESSICA', NULL, '123', '08111280715', 'https://member.eraindonesia.com/storage/user_member/shares/353.jpg', 'agen'),
('yullie', 'YULLIE ALANSIAH', NULL, '123', '08158018657', 'https://member.eraindonesia.com/storage/user_member/shares/210.jpg', 'agen'),
('yusliana', 'YUSLIANA DEWI', NULL, '123', '082136342229', 'https://member.eraindonesia.com/storage/user_member/shares/B41.jpg', 'agen'),
('yusti', 'YUSTI NURINGTIYAS', NULL, '123', '08111735453', 'https://member.eraindonesia.com/storage/user_member/shares/277.jpg', 'agen'),
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
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

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
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`properti_id`),
  ADD KEY `fk_properti_agen` (`agen_id`),
  ADD KEY `fk_properti_type` (`proptype_id`),
  ADD KEY `fk_properti_kec` (`kecamatan_id`);

--
-- Indexes for table `proptype`
--
ALTER TABLE `proptype`
  ADD PRIMARY KEY (`proptype_id`);

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
  MODIFY `agen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `properti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `fk_agen_office` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `fk_kecamatan_kota` FOREIGN KEY (`kecamatan_id`) REFERENCES `kota` (`kota_id`);

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `fk_kota_provinsi` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`provinsi_id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `fk_office_kota` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_office_user` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION;

--
-- Constraints for table `properti`
--
ALTER TABLE `properti`
  ADD CONSTRAINT `fk_properti_agen` FOREIGN KEY (`agen_id`) REFERENCES `agen` (`agen_id`),
  ADD CONSTRAINT `fk_properti_kec` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`kecamatan_id`),
  ADD CONSTRAINT `fk_properti_type` FOREIGN KEY (`proptype_id`) REFERENCES `proptype` (`proptype_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
