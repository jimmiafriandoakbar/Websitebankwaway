-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2023 at 02:55 AM
-- Server version: 5.7.36
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankwawa_wawaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kab_kota`
--

CREATE TABLE `kab_kota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kab_kota`
--

INSERT INTO `kab_kota` (`id`, `nama`) VALUES
(1, 'Kabupaten Aceh Barat'),
(2, 'Kabupaten Aceh Barat Daya'),
(3, 'Kabupaten Aceh Besar'),
(4, 'Kabupaten Aceh Jaya'),
(5, 'Kabupaten Aceh Selatan'),
(6, 'Kabupaten Aceh Singkil'),
(7, 'Kabupaten Aceh Tamiang'),
(8, 'Kabupaten Aceh Tengah'),
(9, 'Kabupaten Aceh Tenggara'),
(10, 'Kabupaten Aceh Timur'),
(11, 'Kabupaten Aceh Utara'),
(12, 'Kabupaten Administrasi Kepulauan Seribu'),
(13, 'Kabupaten Agam'),
(14, 'Kabupaten Alor'),
(15, 'Kabupaten Asahan'),
(16, 'Kabupaten Asmat'),
(17, 'Kabupaten Badung'),
(18, 'Kabupaten Balangan'),
(19, 'Kabupaten Bandung'),
(20, 'Kabupaten Bandung Barat'),
(21, 'Kabupaten Banggai'),
(22, 'Kabupaten Banggai Kepulauan'),
(23, 'Kabupaten Banggai Laut'),
(24, 'Kabupaten Bangka'),
(25, 'Kabupaten Bangka Barat'),
(26, 'Kabupaten Bangka Selatan'),
(27, 'Kabupaten Bangka Tengah'),
(28, 'Kabupaten Bangkalan'),
(29, 'Kabupaten Bangli'),
(30, 'Kabupaten Banjar'),
(31, 'Kabupaten Banjarnegara'),
(32, 'Kabupaten Bantaeng'),
(33, 'Kabupaten Bantul'),
(34, 'Kabupaten Banyuasin'),
(35, 'Kabupaten Banyumas'),
(36, 'Kabupaten Banyuwangi'),
(37, 'Kabupaten Barito Kuala'),
(38, 'Kabupaten Barito Selatan'),
(39, 'Kabupaten Barito Timur'),
(40, 'Kabupaten Barito Utara'),
(41, 'Kabupaten Barru'),
(42, 'Kabupaten Batang'),
(43, 'Kabupaten Batanghari'),
(44, 'Kabupaten Batubara'),
(45, 'Kabupaten Bekasi'),
(46, 'Kabupaten Belitung'),
(47, 'Kabupaten Belitung Timur'),
(48, 'Kabupaten Belu'),
(49, 'Kabupaten Bener Meriah'),
(50, 'Kabupaten Bengkalis'),
(51, 'Kabupaten Bengkayang'),
(52, 'Kabupaten Bengkulu Selatan'),
(53, 'Kabupaten Bengkulu Tengah'),
(54, 'Kabupaten Bengkulu Utara'),
(55, 'Kabupaten Berau'),
(56, 'Kabupaten Biak Numfor'),
(57, 'Kabupaten Bima'),
(58, 'Kabupaten Bintan'),
(59, 'Kabupaten Bireuen'),
(60, 'Kabupaten Blitar'),
(61, 'Kabupaten Blora'),
(62, 'Kabupaten Boalemo'),
(63, 'Kabupaten Bogor'),
(64, 'Kabupaten Bojonegoro'),
(65, 'Kabupaten Bolaang Mongondow'),
(66, 'Kabupaten Bolaang Mongondow Selatan'),
(67, 'Kabupaten Bolaang Mongondow Timur'),
(68, 'Kabupaten Bolaang Mongondow Utara'),
(69, 'Kabupaten Bombana'),
(70, 'Kabupaten Bondowoso'),
(71, 'Kabupaten Bone'),
(72, 'Kabupaten Bone Bolango'),
(73, 'Kabupaten Boven Digoel'),
(74, 'Kabupaten Boyolali'),
(75, 'Kabupaten Brebes'),
(76, 'Kabupaten Buleleng'),
(77, 'Kabupaten Bulukumba'),
(78, 'Kabupaten Bulungan'),
(79, 'Kabupaten Bungo'),
(80, 'Kabupaten Buol'),
(81, 'Kabupaten Buru'),
(82, 'Kabupaten Buru Selatan'),
(83, 'Kabupaten Buton'),
(84, 'Kabupaten Buton Selatan'),
(85, 'Kabupaten Buton Tengah'),
(86, 'Kabupaten Buton Utara'),
(87, 'Kabupaten Ciamis'),
(88, 'Kabupaten Cianjur'),
(89, 'Kabupaten Cilacap'),
(90, 'Kabupaten Cirebon'),
(91, 'Kabupaten Dairi'),
(92, 'Kabupaten Deiyai'),
(93, 'Kabupaten Deli Serdang'),
(94, 'Kabupaten Demak'),
(95, 'Kabupaten Dharmasraya'),
(96, 'Kabupaten Dogiyai'),
(97, 'Kabupaten Dompu'),
(98, 'Kabupaten Donggala'),
(99, 'Kabupaten Empat Lawang'),
(100, 'Kabupaten Ende'),
(101, 'Kabupaten Enrekang'),
(102, 'Kabupaten Fakfak'),
(103, 'Kabupaten Flores Timur'),
(104, 'Kabupaten Garut'),
(105, 'Kabupaten Gayo Lues'),
(106, 'Kabupaten Gianyar'),
(107, 'Kabupaten Gorontalo'),
(108, 'Kabupaten Gorontalo Utara'),
(109, 'Kabupaten Gowa'),
(110, 'Kabupaten Gresik'),
(111, 'Kabupaten Grobogan'),
(112, 'Kabupaten Gunung Mas'),
(113, 'Kabupaten Gunungkidul'),
(114, 'Kabupaten Halmahera Barat'),
(115, 'Kabupaten Halmahera Selatan'),
(116, 'Kabupaten Halmahera Tengah'),
(117, 'Kabupaten Halmahera Timur'),
(118, 'Kabupaten Halmahera Utara'),
(119, 'Kabupaten Hulu Sungai Selatan'),
(120, 'Kabupaten Hulu Sungai Tengah'),
(121, 'Kabupaten Hulu Sungai Utara'),
(122, 'Kabupaten Humbang Hasundutan'),
(123, 'Kabupaten Indragiri Hilir'),
(124, 'Kabupaten Indragiri Hulu'),
(125, 'Kabupaten Indramayu'),
(126, 'Kabupaten Intan Jaya'),
(127, 'Kabupaten Jayapura'),
(128, 'Kabupaten Jayawijaya'),
(129, 'Kabupaten Jember'),
(130, 'Kabupaten Jembrana'),
(131, 'Kabupaten Jeneponto'),
(132, 'Kabupaten Jepara'),
(133, 'Kabupaten Jombang'),
(134, 'Kabupaten Kaimana'),
(135, 'Kabupaten Kampar'),
(136, 'Kabupaten Kapuas'),
(137, 'Kabupaten Kapuas Hulu'),
(138, 'Kabupaten Karanganyar'),
(139, 'Kabupaten Karangasem'),
(140, 'Kabupaten Karawang'),
(141, 'Kabupaten Karimun'),
(142, 'Kabupaten Karo'),
(143, 'Kabupaten Katingan'),
(144, 'Kabupaten Kaur'),
(145, 'Kabupaten Kayong Utara'),
(146, 'Kabupaten Kebumen'),
(147, 'Kabupaten Kediri'),
(148, 'Kabupaten Keerom'),
(149, 'Kabupaten Kendal'),
(150, 'Kabupaten Kepahiang'),
(151, 'Kabupaten Kepulauan Anambas'),
(152, 'Kabupaten Kepulauan Aru'),
(153, 'Kabupaten Kepulauan Mentawai'),
(154, 'Kabupaten Kepulauan Meranti'),
(155, 'Kabupaten Kepulauan Sangihe'),
(156, 'Kabupaten Kepulauan Selayar'),
(157, 'Kabupaten Kepulauan Siau Tagulandang Biaro'),
(158, 'Kabupaten Kepulauan Sula'),
(159, 'Kabupaten Kepulauan Talaud'),
(160, 'Kabupaten Kepulauan Yapen'),
(161, 'Kabupaten Kerinci'),
(162, 'Kabupaten Ketapang'),
(163, 'Kabupaten Klaten'),
(164, 'Kabupaten Klungkung'),
(165, 'Kabupaten Kolaka'),
(166, 'Kabupaten Kolaka Timur'),
(167, 'Kabupaten Kolaka Utara'),
(168, 'Kabupaten Konawe'),
(169, 'Kabupaten Konawe Kepulauan'),
(170, 'Kabupaten Konawe Selatan'),
(171, 'Kabupaten Konawe Utara'),
(172, 'Kabupaten Kotabaru'),
(173, 'Kabupaten Kotawaringin Barat'),
(174, 'Kabupaten Kotawaringin Timur'),
(175, 'Kabupaten Kuantan Singingi'),
(176, 'Kabupaten Kubu Raya'),
(177, 'Kabupaten Kudus'),
(178, 'Kabupaten Kulon Progo'),
(179, 'Kabupaten Kuningan'),
(180, 'Kabupaten Kupang'),
(181, 'Kabupaten Kutai Barat'),
(182, 'Kabupaten Kutai Kartanegara'),
(183, 'Kabupaten Kutai Timur'),
(184, 'Kabupaten Labuhanbatu'),
(185, 'Kabupaten Labuhanbatu Selatan'),
(186, 'Kabupaten Labuhanbatu Utara'),
(187, 'Kabupaten Lahat'),
(188, 'Kabupaten Lamandau'),
(189, 'Kabupaten Lamongan'),
(190, 'Kabupaten Lampung Barat'),
(191, 'Kabupaten Lampung Selatan'),
(192, 'Kabupaten Lampung Tengah'),
(193, 'Kabupaten Lampung Timur'),
(194, 'Kabupaten Lampung Utara'),
(195, 'Kabupaten Landak'),
(196, 'Kabupaten Langkat'),
(197, 'Kabupaten Lanny Jaya'),
(198, 'Kabupaten Lebak'),
(199, 'Kabupaten Lebong'),
(200, 'Kabupaten Lembata'),
(201, 'Kabupaten Lima Puluh Kota'),
(202, 'Kabupaten Lingga'),
(203, 'Kabupaten Lombok Barat'),
(204, 'Kabupaten Lombok Tengah'),
(205, 'Kabupaten Lombok Timur'),
(206, 'Kabupaten Lombok Utara'),
(207, 'Kabupaten Lumajang'),
(208, 'Kabupaten Luwu'),
(209, 'Kabupaten Luwu Timur'),
(210, 'Kabupaten Luwu Utara'),
(211, 'Kabupaten Madiun'),
(212, 'Kabupaten Magelang'),
(213, 'Kabupaten Magetan'),
(214, 'Kabupaten Mahakam Ulu'),
(215, 'Kabupaten Majalengka'),
(216, 'Kabupaten Majene'),
(217, 'Kabupaten Malaka'),
(218, 'Kabupaten Malang'),
(219, 'Kabupaten Malinau'),
(220, 'Kabupaten Maluku Barat Daya'),
(221, 'Kabupaten Maluku Tengah'),
(222, 'Kabupaten Maluku Tenggara'),
(223, 'Kabupaten Maluku Tenggara Barat'),
(224, 'Kabupaten Mamasa'),
(225, 'Kabupaten Mamberamo Raya'),
(226, 'Kabupaten Mamberamo Tengah'),
(227, 'Kabupaten Mamuju'),
(228, 'Kabupaten Mamuju Tengah'),
(229, 'Kabupaten Mamuju Utara'),
(230, 'Kabupaten Mandailing Natal'),
(231, 'Kabupaten Manggarai'),
(232, 'Kabupaten Manggarai Barat'),
(233, 'Kabupaten Manggarai Timur'),
(234, 'Kabupaten Manokwari'),
(235, 'Kabupaten Manokwari Selatan'),
(236, 'Kabupaten Mappi'),
(237, 'Kabupaten Maros'),
(238, 'Kabupaten Maybrat'),
(239, 'Kabupaten Melawi'),
(240, 'Kabupaten Mempawah'),
(241, 'Kabupaten Merangin'),
(242, 'Kabupaten Merauke'),
(243, 'Kabupaten Mesuji'),
(244, 'Kabupaten Mimika'),
(245, 'Kabupaten Minahasa'),
(246, 'Kabupaten Minahasa Selatan'),
(247, 'Kabupaten Minahasa Tenggara'),
(248, 'Kabupaten Minahasa Utara'),
(249, 'Kabupaten Mojokerto'),
(250, 'Kabupaten Morowali'),
(251, 'Kabupaten Morowali Utara'),
(252, 'Kabupaten Muara Enim'),
(253, 'Kabupaten Muaro Jambi'),
(254, 'Kabupaten Mukomuko'),
(255, 'Kabupaten Muna'),
(256, 'Kabupaten Muna Barat'),
(257, 'Kabupaten Murung Raya'),
(258, 'Kabupaten Musi Banyuasin'),
(259, 'Kabupaten Musi Rawas'),
(260, 'Kabupaten Musi Rawas Utara'),
(261, 'Kabupaten Nabire'),
(262, 'Kabupaten Nagan Raya'),
(263, 'Kabupaten Nagekeo'),
(264, 'Kabupaten Natuna'),
(265, 'Kabupaten Nduga'),
(266, 'Kabupaten Ngada'),
(267, 'Kabupaten Nganjuk'),
(268, 'Kabupaten Ngawi'),
(269, 'Kabupaten Nias'),
(270, 'Kabupaten Nias Barat'),
(271, 'Kabupaten Nias Selatan'),
(272, 'Kabupaten Nias Utara'),
(273, 'Kabupaten Nunukan'),
(274, 'Kabupaten Ogan Ilir'),
(275, 'Kabupaten Ogan Komering Ilir'),
(276, 'Kabupaten Ogan Komering Ulu'),
(277, 'Kabupaten Ogan Komering Ulu Selatan'),
(278, 'Kabupaten Ogan Komering Ulu Timur'),
(279, 'Kabupaten Pacitan'),
(280, 'Kabupaten Padang Lawas'),
(281, 'Kabupaten Padang Lawas Utara'),
(282, 'Kabupaten Padang Pariaman'),
(283, 'Kabupaten Pakpak Bharat'),
(284, 'Kabupaten Pamekasan'),
(285, 'Kabupaten Pandeglang'),
(286, 'Kabupaten Pangandaran'),
(287, 'Kabupaten Pangkajene dan Kepulauan'),
(288, 'Kabupaten Paniai'),
(289, 'Kabupaten Parigi Moutong'),
(290, 'Kabupaten Pasaman'),
(291, 'Kabupaten Pasaman Barat'),
(292, 'Kabupaten Paser'),
(293, 'Kabupaten Pasuruan'),
(294, 'Kabupaten Pati'),
(295, 'Kabupaten Pegunungan Arfak'),
(296, 'Kabupaten Pegunungan Bintang'),
(297, 'Kabupaten Pekalongan'),
(298, 'Kabupaten Pelalawan'),
(299, 'Kabupaten Pemalang'),
(300, 'Kabupaten Penajam Paser Utara'),
(301, 'Kabupaten Penukal Abab Lematang Ilir'),
(302, 'Kabupaten Pesawaran'),
(303, 'Kabupaten Pesisir Barat'),
(304, 'Kabupaten Pesisir Selatan'),
(305, 'Kabupaten Pidie'),
(306, 'Kabupaten Pidie Jaya'),
(307, 'Kabupaten Pinrang'),
(308, 'Kabupaten Pohuwato'),
(309, 'Kabupaten Polewali Mandar'),
(310, 'Kabupaten Ponorogo'),
(311, 'Kabupaten Poso'),
(312, 'Kabupaten Pringsewu'),
(313, 'Kabupaten Probolinggo'),
(314, 'Kabupaten Pulang Pisau'),
(315, 'Kabupaten Pulau Morotai'),
(316, 'Kabupaten Pulau Taliabu'),
(317, 'Kabupaten Puncak'),
(318, 'Kabupaten Puncak Jaya'),
(319, 'Kabupaten Purbalingga'),
(320, 'Kabupaten Purwakarta'),
(321, 'Kabupaten Purworejo'),
(322, 'Kabupaten Raja Ampat'),
(323, 'Kabupaten Rejang Lebong'),
(324, 'Kabupaten Rembang'),
(325, 'Kabupaten Rokan Hilir'),
(326, 'Kabupaten Rokan Hulu'),
(327, 'Kabupaten Rote Ndao'),
(328, 'Kabupaten Sabu Raijua'),
(329, 'Kabupaten Sambas'),
(330, 'Kabupaten Samosir'),
(331, 'Kabupaten Sampang'),
(332, 'Kabupaten Sanggau'),
(333, 'Kabupaten Sarmi'),
(334, 'Kabupaten Sarolangun'),
(335, 'Kabupaten Sekadau'),
(336, 'Kabupaten Seluma'),
(337, 'Kabupaten Semarang'),
(338, 'Kabupaten Seram Bagian Barat'),
(339, 'Kabupaten Seram Bagian Timur'),
(340, 'Kabupaten Serang'),
(341, 'Kabupaten Serdang Bedagai'),
(342, 'Kabupaten Seruyan'),
(343, 'Kabupaten Siak'),
(344, 'Kabupaten Sidenreng Rappang'),
(345, 'Kabupaten Sidoarjo'),
(346, 'Kabupaten Sigi'),
(347, 'Kabupaten Sijunjung'),
(348, 'Kabupaten Sikka'),
(349, 'Kabupaten Simalungun'),
(350, 'Kabupaten Simeulue'),
(351, 'Kabupaten Sinjai'),
(352, 'Kabupaten Sintang'),
(353, 'Kabupaten Situbondo'),
(354, 'Kabupaten Sleman'),
(355, 'Kabupaten Solok'),
(356, 'Kabupaten Solok Selatan'),
(357, 'Kabupaten Soppeng'),
(358, 'Kabupaten Sorong'),
(359, 'Kabupaten Sorong Selatan'),
(360, 'Kabupaten Sragen'),
(361, 'Kabupaten Subang'),
(362, 'Kabupaten Sukabumi'),
(363, 'Kabupaten Sukamara'),
(364, 'Kabupaten Sukoharjo'),
(365, 'Kabupaten Sumba Barat'),
(366, 'Kabupaten Sumba Barat Daya'),
(367, 'Kabupaten Sumba Tengah'),
(368, 'Kabupaten Sumba Timur'),
(369, 'Kabupaten Sumbawa'),
(370, 'Kabupaten Sumbawa Barat'),
(371, 'Kabupaten Sumedang'),
(372, 'Kabupaten Sumenep'),
(373, 'Kabupaten Supiori'),
(374, 'Kabupaten Tabalong'),
(375, 'Kabupaten Tabanan'),
(376, 'Kabupaten Takalar'),
(377, 'Kabupaten Tambrauw'),
(378, 'Kabupaten Tana Tidung'),
(379, 'Kabupaten Tana Toraja'),
(380, 'Kabupaten Tanah Bumbu'),
(381, 'Kabupaten Tanah Datar'),
(382, 'Kabupaten Tanah Laut'),
(383, 'Kabupaten Tangerang'),
(384, 'Kabupaten Tanggamus'),
(385, 'Kabupaten Tanjung Jabung Barat'),
(386, 'Kabupaten Tanjung Jabung Timur'),
(387, 'Kabupaten Tapanuli Selatan'),
(388, 'Kabupaten Tapanuli Tengah'),
(389, 'Kabupaten Tapanuli Utara'),
(390, 'Kabupaten Tapin'),
(391, 'Kabupaten Tasikmalaya'),
(392, 'Kabupaten Tebo'),
(393, 'Kabupaten Tegal'),
(394, 'Kabupaten Teluk Bintuni'),
(395, 'Kabupaten Temanggung'),
(396, 'Kabupaten Timor Tengah Selatan'),
(397, 'Kabupaten Timor Tengah Utara'),
(398, 'Kabupaten Toba Samosir'),
(399, 'Kabupaten Tojo Una-Una'),
(400, 'Kabupaten Tolikara'),
(401, 'Kabupaten Toli-Toli'),
(402, 'Kabupaten Toraja Utara'),
(403, 'Kabupaten Trenggalek'),
(404, 'Kabupaten Tuban'),
(405, 'Kabupaten Tulang Bawang'),
(406, 'Kabupaten Tulang Bawang Barat'),
(407, 'Kabupaten Tulungagung'),
(408, 'Kabupaten Wajo'),
(409, 'Kabupaten Wakatobi'),
(410, 'Kabupaten Waropen'),
(411, 'Kabupaten Way Kanan'),
(412, 'Kabupaten Wonogiri'),
(413, 'Kabupaten Wonosobo'),
(414, 'Kabupaten Yahukimo'),
(415, 'Kabupaten Yalimo'),
(416, 'Kota Administrasi Jakarta Barat'),
(417, 'Kota Administrasi Jakarta Pusat'),
(418, 'Kota Administrasi Jakarta Selatan'),
(419, 'Kota Administrasi Jakarta Timur'),
(420, 'Kota Administrasi Jakarta Utara'),
(421, 'Kota Ambon'),
(422, 'Kota Balikpapan'),
(423, 'Kota Banda Aceh'),
(424, 'Kota Bandar Lampung'),
(425, 'Kota Bandung'),
(426, 'Kota Banjar'),
(427, 'Kota Banjarbaru'),
(428, 'Kota Banjarmasin'),
(429, 'Kota Batam'),
(430, 'Kota Batu'),
(431, 'Kota Bau-Bau'),
(432, 'Kota Bekasi'),
(433, 'Kota Bengkulu'),
(434, 'Kota Bima'),
(435, 'Kota Binjai'),
(436, 'Kota Bitung'),
(437, 'Kota Blitar'),
(438, 'Kota Bogor'),
(439, 'Kota Bontang'),
(440, 'Kota Bukittinggi'),
(441, 'Kota Cilegon'),
(442, 'Kota Cimahi'),
(443, 'Kota Cirebon'),
(444, 'Kota Denpasar'),
(445, 'Kota Depok'),
(446, 'Kota Dumai'),
(447, 'Kota Gorontalo'),
(448, 'Kota Gunungsitoli'),
(449, 'Kota Jambi'),
(450, 'Kota Jayapura'),
(451, 'Kota Kediri'),
(452, 'Kota Kendari'),
(453, 'Kota Kotamobagu'),
(454, 'Kota Kupang'),
(455, 'Kota Langsa'),
(456, 'Kota Lhokseumawe'),
(457, 'Kota Lubuklinggau'),
(458, 'Kota Madiun'),
(459, 'Kota Magelang'),
(460, 'Kota Makassar'),
(461, 'Kota Malang'),
(462, 'Kota Mamuju'),
(463, 'Kota Manado'),
(464, 'Kota Mataram'),
(465, 'Kota Medan'),
(466, 'Kota Metro'),
(467, 'Kota Mojokerto'),
(468, 'Kota Padang'),
(469, 'Kota Padangpanjang'),
(470, 'Kota Padangsidempuan'),
(471, 'Kota Pagar Alam'),
(472, 'Kota Palangka Raya'),
(473, 'Kota Palembang'),
(474, 'Kota Palopo'),
(475, 'Kota Palu'),
(476, 'Kota Pangkal Pinang'),
(477, 'Kota Parepare'),
(478, 'Kota Pariaman'),
(479, 'Kota Pasuruan'),
(480, 'Kota Payakumbuh'),
(481, 'Kota Pekalongan'),
(482, 'Kota Pekanbaru'),
(483, 'Kota Pematangsiantar'),
(484, 'Kota Pontianak'),
(485, 'Kota Prabumulih'),
(486, 'Kota Probolinggo'),
(487, 'Kota Sabang'),
(488, 'Kota Salatiga'),
(489, 'Kota Samarinda'),
(490, 'Kota Sawahlunto'),
(491, 'Kota Semarang'),
(492, 'Kota Serang'),
(493, 'Kota Sibolga'),
(494, 'Kota Singkawang'),
(495, 'Kota Solok'),
(496, 'Kota Subulussalam'),
(497, 'Kota Sukabumi'),
(498, 'Kota Sungai Penuh'),
(499, 'Kota Surabaya'),
(500, 'Kota Surakarta'),
(501, 'Kota Tangerang'),
(502, 'Kota Tangerang Selatan'),
(503, 'Kota Tanjung Pinang'),
(504, 'Kota Tanjungbalai'),
(505, 'Kota Tarakan'),
(506, 'Kota Tasikmalaya'),
(507, 'Kota Tebing Tinggi'),
(508, 'Kota Tegal'),
(509, 'Kota Ternate'),
(510, 'Kota Tidore Kepulauan'),
(511, 'Kota Tomohon'),
(512, 'Kota Tual'),
(513, 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Telukbetung Barat'),
(2, 'Telukbetung Barat'),
(3, 'Kemiling'),
(4, 'Kemiling'),
(5, 'Langkapura'),
(6, 'Kedamaian'),
(7, 'Bumi Waras'),
(8, 'Bumi Waras'),
(9, 'Sukabumi'),
(10, 'Sukabumi'),
(11, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(12, 'Enggal'),
(13, 'Bumi Waras'),
(14, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(15, 'Rajabasa'),
(16, 'Rajabasa'),
(17, 'Telukbetung Selatan'),
(18, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(19, 'Telukbetung Utara'),
(20, 'Langkapura'),
(21, 'Telukbetung Selatan'),
(22, 'Enggal'),
(23, 'Way Halim'),
(24, 'Langkapura'),
(25, 'Way Halim'),
(26, 'Way Halim'),
(27, 'Way Halim'),
(28, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(29, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(30, 'Kedamaian'),
(31, 'Labuhan Ratu'),
(32, 'Labuhan Ratu'),
(33, 'Bumi Waras'),
(34, 'Panjang'),
(35, 'Tanjungkarang Timur (Tanjung Karang Timur)'),
(36, 'Kedamaian'),
(37, 'Kedaton'),
(38, 'Kemiling'),
(39, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(40, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(41, 'Kemiling'),
(42, 'Kemiling'),
(43, 'Panjang'),
(44, 'Panjang'),
(45, 'Telukbetung Timur'),
(46, 'Sukarame'),
(47, 'Sukarame'),
(48, 'Tanjungkarang Timur (Tanjung Karang Timur)'),
(49, 'Telukbetung Timur'),
(50, 'Telukbetung Timur'),
(51, 'Labuhan Ratu'),
(52, 'Telukbetung Utara'),
(53, 'Telukbetung Utara'),
(54, 'Telukbetung Utara'),
(55, 'Telukbetung Barat'),
(56, 'Tanjung Senang'),
(57, 'Labuhan Ratu'),
(58, 'Labuhan Ratu'),
(59, 'Langkapura'),
(60, 'Langkapura'),
(61, 'Telukbetung Barat'),
(62, 'Sukabumi'),
(63, 'Enggal'),
(64, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(65, 'Panjang'),
(66, 'Panjang'),
(67, 'Telukbetung Timur'),
(68, 'Tanjungkarang Pusat (Tanjung Karang Pusat)'),
(69, 'Enggal'),
(70, 'Tanjung Senang'),
(71, 'Kedaton'),
(72, 'Kedaton'),
(73, 'Telukbetung Utara'),
(74, 'Way Halim'),
(75, 'Tanjung Senang'),
(76, 'Telukbetung Selatan'),
(77, 'Panjang'),
(78, 'Kemiling'),
(79, 'Rajabasa'),
(80, 'Rajabasa'),
(81, 'Rajabasa'),
(82, 'Rajabasa'),
(83, 'Rajabasa'),
(84, 'Enggal'),
(85, 'Tanjungkarang Timur (Tanjung Karang Timur)'),
(86, 'Tanjungkarang Timur (Tanjung Karang Timur)'),
(87, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(88, 'Labuhan Ratu'),
(89, 'Kedaton'),
(90, 'Panjang'),
(91, 'Sukabumi'),
(92, 'Sukabumi'),
(93, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(94, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(95, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(96, 'Telukbetung Timur'),
(97, 'Kedaton'),
(98, 'Kedaton'),
(99, 'Bumi Waras'),
(100, 'Sukarame'),
(101, 'Sukarame'),
(102, 'Telukbetung Barat'),
(103, 'Kemiling'),
(104, 'Kemiling'),
(105, 'Kemiling'),
(106, 'Telukbetung Utara'),
(107, 'Telukbetung Selatan'),
(108, 'Kedaton'),
(109, 'Tanjungkarang Barat (Tanjung Karang Barat)'),
(110, 'Telukbetung Selatan'),
(111, 'Tanjungkarang Timur (Tanjung Karang Timur)'),
(112, 'Tanjung Senang'),
(113, 'Kedamaian'),
(114, 'Kedamaian'),
(115, 'Kedamaian'),
(116, 'Enggal'),
(117, 'Kedamaian'),
(118, 'Telukbetung Selatan'),
(119, 'Sukarame'),
(120, 'Sukarame'),
(121, 'Sukabumi'),
(122, 'Way Halim'),
(123, 'Tanjung Senang'),
(124, 'Sukabumi'),
(125, 'Panjang'),
(126, 'Telukbetung Timur');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`) VALUES
(1, 'Bakung'),
(2, 'Batu Putuk'),
(3, 'Beringin Jaya (Beringin Raya)'),
(4, 'Beringin Raya'),
(5, 'Bilabong Jaya'),
(6, 'Bumi Kedamaian'),
(7, 'Bumi Raya'),
(8, 'Bumi Waras'),
(9, 'Campang Jaya'),
(10, 'Campang Raya'),
(11, 'Durian Payung'),
(12, 'Enggal'),
(13, 'Garuntang'),
(14, 'Gedong Air'),
(15, 'Gedong Meneng'),
(16, 'Gedong Meneng Baru'),
(17, 'Gedong Pakuon (Gedong Pakuan / Pakuon)'),
(18, 'Gotong Royong'),
(19, 'Gulak Galik'),
(20, 'Gunungagung (Gunung Agung)'),
(21, 'Gunungmas (Gunung Mas)'),
(22, 'Gunungsari (Gunung Sari)'),
(23, 'Gunungsulah (Gunung Sulah)'),
(24, 'Gunungterang (Gunung Terang)'),
(25, 'Jagabaya I (Jaga Baya I)'),
(26, 'Jagabaya II'),
(27, 'Jagabaya III'),
(28, 'Kaliawi'),
(29, 'Kaliawi Persada'),
(30, 'Kalibalau Kencana (Kali Balok / Balau Kencana)'),
(31, 'Kampung Baru'),
(32, 'Kampung Baru Raya'),
(33, 'Kangkung'),
(34, 'Karang Maritim'),
(35, 'Kebon Jeruk (Kebonjeruk)'),
(36, 'Kedamaian'),
(37, 'Kedaton'),
(38, 'Kedaung'),
(39, 'Kelapa Tiga'),
(40, 'Kelapa Tiga Permai'),
(41, 'Kemiling Permai'),
(42, 'Kemiling Raya'),
(43, 'Ketapang'),
(44, 'Ketapang Kuala'),
(45, 'Keteguhan'),
(46, 'Korpri Jaya'),
(47, 'Korpri Raya'),
(48, 'Kota Baru'),
(49, 'Kota Karang'),
(50, 'Kota Karang Raya'),
(51, 'Kota Sepang'),
(52, 'Kupang Kota'),
(53, 'Kupang Raya'),
(54, 'Kupang Teba'),
(55, 'Kuripan'),
(56, 'Labuhan Dalam'),
(57, 'Labuhan Ratu'),
(58, 'Labuhan Ratu Raya'),
(59, 'Langkapura (Langka Pura)'),
(60, 'Langkapura Baru (Langka Pura Baru)'),
(61, 'Negeri Olok Gading'),
(62, 'Nusantara Permai'),
(63, 'Pahoman'),
(64, 'Palapa'),
(65, 'Panjang Selatan'),
(66, 'Panjang Utara'),
(67, 'Parwata (Perwata)'),
(68, 'Pasir Gintung'),
(69, 'Pelita'),
(70, 'Pematang Wangi'),
(71, 'Penengahan'),
(72, 'Penengahan Raya'),
(73, 'Pengajaran'),
(74, 'Perumnas Way Halim'),
(75, 'Perumnas Way Kandis'),
(76, 'Pesawahan'),
(77, 'Pidada'),
(78, 'Pinang Jaya'),
(79, 'Rajabasa'),
(80, 'Rajabasa Jaya'),
(81, 'Rajabasa Nunyai'),
(82, 'Rajabasa Pemuka'),
(83, 'Rajabasa Raya'),
(84, 'Rawalaut (Rawa Laut)'),
(85, 'Sawah Brebes'),
(86, 'Sawah Lama'),
(87, 'Segalamider (Segala Mider)'),
(88, 'Sepang Jaya'),
(89, 'Sidodadi'),
(90, 'Srengsem'),
(91, 'Sukabumi'),
(92, 'Sukabumi Indah'),
(93, 'Sukadana Ham'),
(94, 'Sukajawa (Suka Jawa)'),
(95, 'Sukajawa Baru'),
(96, 'Sukamaju'),
(97, 'Sukamenanti'),
(98, 'Sukamenanti Baru'),
(99, 'Sukaraja'),
(100, 'Sukarame'),
(101, 'Sukarame Baru'),
(102, 'Sukarame II'),
(103, 'Sumber Agung'),
(104, 'Sumber Rejo'),
(105, 'Sumberrejo Sejahtera (Sumber Rejo Sejahtera)'),
(106, 'Sumur Batu'),
(107, 'Sumur Putri'),
(108, 'Surabaya'),
(109, 'Susunan Baru'),
(110, 'Talang'),
(111, 'Tanjung Agung'),
(112, 'Tanjung Senang'),
(113, 'Tanjungagung Raya (Tanjung Agung Raya)'),
(114, 'Tanjungbaru (Tanjung Baru)'),
(115, 'Tanjunggading (Tanjung Gading)'),
(116, 'Tanjungkarang (Tanjung Karang)'),
(117, 'Tanjungraya (Tanjung Raya)'),
(118, 'Telukbetung (Teluk Betung)'),
(119, 'Way Dadi'),
(120, 'Way Dadi Baru'),
(121, 'Way Gubak'),
(122, 'Way Halim Permai'),
(123, 'Way Kandis'),
(124, 'Way Laga'),
(125, 'Way Lunik'),
(126, 'Way Tataan');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pos`
--

CREATE TABLE `kode_pos` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_pos` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_pos`
--

INSERT INTO `kode_pos` (`id`, `kode_pos`) VALUES
(1, 35238),
(2, 35239),
(3, 35158),
(4, 35158),
(5, 35155),
(6, 35122),
(7, 35228),
(8, 35225),
(9, 35122),
(10, 35122),
(11, 35116),
(12, 35118),
(13, 35227),
(14, 35151),
(15, 35145),
(16, 35145),
(17, 35222),
(18, 35119),
(19, 35214),
(20, 35157),
(21, 35211),
(22, 35111),
(23, 35136),
(24, 35152),
(25, 35123),
(26, 35132),
(27, 35132),
(28, 35115),
(29, 35115),
(30, 35132),
(31, 35149),
(32, 35149),
(33, 35224),
(34, 35245),
(35, 35121),
(36, 35122),
(37, 35141),
(38, 35158),
(39, 35111),
(40, 35159),
(41, 35158),
(42, 35158),
(43, 35245),
(44, 35246),
(45, 35235),
(46, 35131),
(47, 35131),
(48, 35121),
(49, 35231),
(50, 35231),
(51, 35148),
(52, 35211),
(53, 35212),
(54, 35212),
(55, 35232),
(56, 35142),
(57, 35142),
(58, 35142),
(59, 35154),
(60, 35154),
(61, 35233),
(62, 35122),
(63, 35213),
(64, 35116),
(65, 35243),
(66, 35241),
(67, 35237),
(68, 35113),
(69, 35117),
(70, 35141),
(71, 35112),
(72, 35112),
(73, 35215),
(74, 35141),
(75, 35141),
(76, 35223),
(77, 35241),
(78, 35158),
(79, 35144),
(80, 35144),
(81, 35144),
(82, 35144),
(83, 35144),
(84, 35127),
(85, 35124),
(86, 35125),
(87, 35152),
(88, 35148),
(89, 35147),
(90, 35242),
(91, 35134),
(92, 35132),
(93, 35156),
(94, 35151),
(95, 35151),
(96, 35236),
(97, 35146),
(98, 35146),
(99, 35226),
(100, 35131),
(101, 35131),
(102, 35234),
(103, 35158),
(104, 35153),
(105, 35153),
(106, 35214),
(107, 35215),
(108, 35148),
(109, 35155),
(110, 35229),
(111, 35126),
(112, 35141),
(113, 35129),
(114, 35133),
(115, 35128),
(116, 35111),
(117, 35128),
(118, 35221),
(119, 35131),
(120, 35131),
(121, 35244),
(122, 35135),
(123, 35143),
(124, 35245),
(125, 35244),
(126, 35236);

-- --------------------------------------------------------

--
-- Table structure for table `kritikdansaran`
--

CREATE TABLE `kritikdansaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritikdansaran`
--

INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'qweqwe', 'asdsf@mail.com', '123kmdcmdn dkmckkas', '2023-03-28 03:47:53', NULL),
(2, 'Dennisjed', 'zelatcol@gmail.com', 'Salut, ech wollt Ã„re PrÃ¤is wÃ«ssen.', '2023-03-20 07:00:00', NULL),
(3, 'user name', 'name@mail.com', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsum', '2023-03-21 07:00:00', NULL),
(4, 'Sterling Woolcock', 'woolcock.sterling@googlemail.com', 'Submit your new website to our free directory and start seeing increased traffic. https://bit.ly/3JoPApn', '2023-03-24 07:00:00', NULL),
(12, 'Caridad Starkey', 'caridad.starkey@hotmail.com', 'Get your site listed in 1000 business directories with just one click here-> https://bit.ly/3JoPApn', '2023-03-28 07:00:00', NULL),
(13, 'Robertfor', 'al.b.er.th.a.ns.hi.n.49@gmail.com', '<html><a href=\"https://google.com\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEgXM4xrSRAnQQOLZImSaLdACcB-BosbLfsYEsXB-lLBl71Ma4AFA4xbB22ruqkub9W8nQCJVUXuXvJQeNLG2yoUL-OxTbhSvuyduxRSQI5RsQSu6DbfkMCVMuCuRB1uzs4KNkp3gZjcKQeubD_3RZ6p3xDAEpOwy6', '2023-03-31 07:00:00', NULL),
(14, 'Jacobjed', 'zelatcol@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2023-04-01 07:00:00', NULL),
(15, 'user Test', 'usertest@gmail.com', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsum', '2023-04-02 07:00:00', NULL),
(16, 'Raymondbip', 'no.reply.MatheusSvensson@gmail.com', 'Good morning! bankwawaylampung.com \r\n \r\nDid you know that it is possible to send business proposal fully legitimately? We present a new, legal way of sending messages through contact forms. You can locate these kinds of feedback forms on numerous webpages', '2023-04-03 07:00:00', NULL),
(17, 'Andi', 'andiduta61@gmail.com', 'Ok', '2023-04-04 07:00:00', NULL),
(18, 'Salvador Kelzer', 'businessinquiries@logintank.com', 'Have you imagined been able to own your own AI Chatbot…\r\n\r\n>> Click here to start your ChatGPT-like ChatBot: https://www.logintank.com/ai\r\n\r\nChatGPT is the new Big thing now and if you can own your ChatGPT AI it will make you unimaginable profit in your o', '2023-04-08 07:00:00', NULL),
(19, 'Tawnya Chuter', 'hacker@chemdrydoornenbal.nl', 'We have hacked your website bankwawaylampung.com and extracted your databases. This was due to the security holes you had in your your site/server which have gained us remote control of everything that was on the server. \r\n\r\nOur team is mostly interested ', '2023-04-11 07:00:00', NULL),
(20, 'AlfonsoBus', 'calemaddy@calermaddypllc.com', 'Build a Stronger, More Engaged Social Media Audience with Elite SMM Services https://smm-elite-service.rislipprothslice.tk/invite-5987', '2023-04-14 07:00:00', NULL),
(21, 'Mike Bootman', 'no-replyvesine@gmail.com', 'Greetings \r\n \r\nI have just took a look on your  bankwawaylampung.com for the current onsite SEO status and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what you are offering or selling, having a poor optimized si', '2023-04-17 07:00:00', NULL),
(22, 'Dentalgrorn', 'taisiya.alximowa@mail.ru', '<a href=https://www.oblakann.ru/>Стоматология в Нижнем Новгороде</a>  «Новодент», цены на сайте \r\nСтоматология. Выгодные цены и опытные врачи в медицинском диагностическом центре «Новодент» в Нижнем Новгороде! Запись на прием на сайте. \r\nстоматологическая', '2023-04-18 07:00:00', NULL),
(23, '%first name% %last name%', 'lamothe.maple@gmail.com', 'Easily add your site to 1000 business directories with one click here-> https://cutt.ly/X72sbGa', '2023-04-23 07:00:00', NULL),
(24, 'Mike Brown', 'no-replyvesine@gmail.com', 'Hi there \r\n \r\nThis is Mike Brown\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will mak', '2023-04-24 07:00:00', NULL),
(25, 'Jimmi Afriando', 'Jimmiafriando@gmail.com', 'sangat baik', '2023-03-14 07:00:00', NULL),
(26, 'Robertjed', 'zelatcol@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2023-04-28 07:40:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_03_14_091534_create_kritikDanSaran_table', 2),
(5, '2023_03_16_025834_create_formPembukaanRekening_table', 2),
(6, '2023_03_24_010313_create_kab_kota_table', 2),
(7, '2023_03_24_012927_create_drop_column_formpembukaanrek_table', 2),
(8, '2023_03_24_014909_create_drop_column_jumlah_tanggungan_table', 2),
(9, '2023_03_24_020830_create_addcolumn_tempat_table', 2),
(10, '2023_03_24_022739_create_kode_pos_table', 2),
(11, '2023_03_24_023603_create_kelurahan_table', 2),
(12, '2023_03_24_025934_create_kec_table', 2),
(13, '2023_03_30_010321_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 9),
(1, 'App\\User', 18),
(1, 'App\\User', 19),
(1, 'App\\User', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan_konsumens`
--

CREATE TABLE `pelayanan_konsumens` (
  `id` int(20) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanan_konsumens`
--

INSERT INTO `pelayanan_konsumens` (`id`, `judul`, `file`, `created_at`, `updated_at`) VALUES
(1, 'TW III Tahun 2022', 'filePdf/layananKonsumen/tRRDtyAp3UuIf2SBWxZE2rcNwpTFx8URmFYEuOdw.pdf', '2023-05-04 15:54:44', NULL),
(2, 'TW IV Tahun 2022', 'filePdf/layananKonsumen/rdI7rHxdGgH0FPzvjn0ZLwaobxr8bSigIwSf0uJF.pdf', '2023-05-04 15:55:08', NULL),
(4, 'TW I Tahun 2023', 'filePdf/layananKonsumen/EVzjPqkOzg6DL9xhbxfhiGBOwe968D5p6JSqpGfL.pdf', '2023-05-04 09:48:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaranrekening`
--

CREATE TABLE `pendaftaranrekening` (
  `id` int(10) UNSIGNED NOT NULL,
  `rekening_yang_dikehendaki` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_alias` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kartu_identitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_identitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kab_kota_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kab_kota_tmpt_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gadis_ibu_kandung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` bigint(20) UNSIGNED DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlpn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tempat_tinggal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_pembuatan_rekening` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_usaha` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pendirian_perusahaan` date DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_gol` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai_bekerja` date DEFAULT NULL,
  `alamat_kantor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_tlpn_kantor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendapatan_rata_rata_perbulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_pendapatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal_pendapatan` int(10) UNSIGNED NOT NULL,
  `nama_lengkap_kontak_darurat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan_dengan_pemohon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kontak_darurat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlpn_kontak_darurat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaranrekening`
--

INSERT INTO `pendaftaranrekening` (`id`, `rekening_yang_dikehendaki`, `nama_lengkap`, `nama_alias`, `kartu_identitas`, `no_identitas`, `alamat_identitas`, `kelurahan`, `kecamatan`, `kode_pos_alamat`, `kab_kota_alamat`, `kab_kota_tmpt_lahir`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `status_perkawinan`, `nama_gadis_ibu_kandung`, `agama`, `kewarganegaraan`, `npwp`, `pendidikan_terakhir`, `no_tlpn`, `no_hp`, `alamat_email`, `status_tempat_tinggal`, `tujuan_pembuatan_rekening`, `pekerjaan`, `nama_perusahaan`, `bidang_usaha`, `tanggal_pendirian_perusahaan`, `jabatan`, `nip_gol`, `mulai_bekerja`, `alamat_kantor`, `no_tlpn_kantor`, `pendapatan_rata_rata_perbulan`, `sumber_pendapatan`, `nominal_pendapatan`, `nama_lengkap_kontak_darurat`, `hubungan_dengan_pemohon`, `alamat_kontak_darurat`, `no_tlpn_kontak_darurat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Rachmad Budianto', NULL, 'KTP', '1239182398123', '--', 'Bakung', 'Telukbetung Barat', '35158', 'Kabupaten Aceh Barat', 'Kabupaten Aceh Barat', '2023-03-15', 'Kabupaten Aceh Barat', 'Pria', 'lajang', 'Painah', 'Islam', 'Indonesia', 345678765678, 'S1', '987654567', '9876567890', 'qwe@qwe', 'milikSendiri', 'transaksi', 'BUMN/BUMD', NULL, '--', NULL, '--', NULL, '2023-03-22', '--', '09876543212345', '>2-5juta', 'gaji', 123456789, 'ascscds', 'keluarga', '--', '09876543223456', '2023-03-28 02:45:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-03-29 18:58:24', '2023-03-29 18:58:24'),
(2, 'user', 'web', '2023-03-29 18:58:24', '2023-03-29 18:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', '0000-00-00 00:00:00', '$2y$10$X8fonA8KCcQsHEjxiQ/rLOJYmfjzr1HbfQ90SY5joEba/2e4AdQmK', NULL, '2023-03-27 18:51:14', '2023-03-27 18:51:14'),
(18, 'admin', 'jimmiafriando@gmail.com', '2023-03-29 01:02:38', '$2y$10$xZc5LegvaS9VLEBB23G.D.Oju00WZunS/D/fFwtmUXleOu4v24J3K', 'EW1kAU6eutswfkmybKD5ekTdyhMvCE6Ci62YJS97GhLIjt6jQ1tV1VKcYGT5', '2023-03-29 00:59:53', '2023-05-04 23:47:17'),
(20, 'rachmad', 'rbudianto87@gmail.com', '2023-03-29 19:01:15', '$2y$10$JBuL2KA.K4ayxWaEYBfxzOp.X4y5WP7MwvL9wvamqcm/nV//NKa2C', 'Eg6O210msLXUDp3vSor5D4l1C2ib4oLrTP4tTDY8gs0ocLFsasziknJyJKng', '2023-03-29 19:01:15', '2023-05-03 15:05:30'),
(25, 'mozza nih', 'mozza10ribu@gmail.com', '2023-04-28 23:18:01', '$2y$10$GibbKDo.EcOp6SQYUhlbWui4tftyK.ImvA.E/DODlDEy.viBMzQAW', NULL, '2023-04-28 23:17:44', '2023-04-28 23:18:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kab_kota`
--
ALTER TABLE `kab_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pos`
--
ALTER TABLE `kode_pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelayanan_konsumens`
--
ALTER TABLE `pelayanan_konsumens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaranrekening`
--
ALTER TABLE `pendaftaranrekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kab_kota`
--
ALTER TABLE `kab_kota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `kode_pos`
--
ALTER TABLE `kode_pos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelayanan_konsumens`
--
ALTER TABLE `pelayanan_konsumens`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftaranrekening`
--
ALTER TABLE `pendaftaranrekening`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
