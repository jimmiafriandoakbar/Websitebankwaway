-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Okt 2025 pada 11.38
-- Versi server: 10.6.23-MariaDB-cll-lve
-- Versi PHP: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankwawa_bapas1970pusat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buka_deposito`
--

CREATE TABLE `buka_deposito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buka_deposito`
--

INSERT INTO `buka_deposito` (`id`, `nama`, `no_tlp`, `email`, `provinsi`, `kota`, `created_at`, `updated_at`) VALUES
(3, 'ANGGER HEPI KUSUMA', '08118181111', 'admin@mail.com', 'Lampung', 'Bandar Lampung', '2024-01-25 01:02:13', NULL),
(4, 'Rachmad Budianto', '+62895609934586', 'rachmad.16421044@student.ubl.ac.id', 'Lampung', 'Bandar Lampung', '2024-01-26 01:30:09', NULL),
(5, 'Jimmi Afriando', '0895609934586', 'jimmi@mail.com', 'Lampung', 'Lampung', '2024-01-31 03:40:44', NULL),
(6, 'ANGKASTARIA', '082281194864', 'angkastaria1982@gmail.com', 'Lampung', 'Bandar Lampung', '2024-08-07 06:43:56', NULL),
(7, 'Budi Parianto', '0895411818020', 'budiparianto07@gmail.com', 'Lampung', 'Bandar Lampung', '2024-12-14 01:32:32', NULL),
(8, 'Budi Parianto', '0895411818020', 'budiparianto07@gmail.com', 'Lampung', 'Bandar Lampung', '2024-12-15 23:22:16', NULL),
(9, 'Budi Parianto', '0895411818020', 'budiparianto07@gmail.com', 'Lampung', 'Bandar Lampung', '2024-12-15 23:23:20', NULL),
(10, 'Riya Septiyana', '081286252500', 'riyasepti.ok84@gmail.com', 'Lampung', 'Bandar Lampung', '2025-01-23 12:31:59', NULL),
(11, 'Fadli Adriansyah', '081271636787', 'fadliadriansyah2205@gmail.com', 'Lampung', 'Bandar lampung', '2025-02-09 04:35:25', NULL),
(12, 'Riya Septiyana', '081286252500', 'riyasepti.ok84@gmail.com', 'Lampung', 'Bandar Lampung', '2025-04-30 17:02:53', NULL),
(13, 'Ayunda Herlistiani', '082186856665', 'herlistianiayunda@gmail.com', 'Lampung', 'Bandar Lampung', '2025-05-14 04:24:34', NULL),
(14, 'Agus rifin', '0895352759455', 'agusrifin72@gmailcom', 'Bandar lampung', 'Kurifan', '2025-05-14 15:03:56', NULL),
(15, 'dsadsa', '3123213131231', 'tesdsadsdt@gmail.com', 'dsadadsad', 'dsadsad', '2025-06-30 08:35:36', NULL),
(16, 'Riya Septiyana', '081286252500', 'riyasepti.ok84@gmail.com', 'Lampung', 'Bandar Lampung', '2025-07-07 03:28:39', NULL),
(17, 'INDRI ERANI', '08982293427', 'indri.erani@gmail.com', 'LAMPUNG', 'BANDARLAMPUNG', '2025-09-08 06:19:56', NULL),
(18, 'INDRI ERANI', '08982293427', 'indri.erani@gmail.com', 'LAMPUNG', 'BANDARLAMPUNG', '2025-09-08 06:25:28', NULL),
(19, 'Indah permatasari', '085609926860', 'indah.permattasari00@gmail.com', 'Lampung', 'Metro', '2025-09-20 02:30:55', NULL),
(20, 'Syamsu', '081373585027', 'asyamsu270969@gmail.com', 'Lampung', 'Bandar Lampung', '2025-10-13 02:17:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cover`
--

CREATE TABLE `cover` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_kredit`
--

CREATE TABLE `form_kredit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_panggilan_pemohon` varchar(50) NOT NULL,
  `tmplahir` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL,
  `jnsid` varchar(255) NOT NULL,
  `noid` int(11) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `rw` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `tmpt_tinggal_sekarang` varchar(255) DEFAULT NULL,
  `status_tempat_tinggal` varchar(255) DEFAULT NULL,
  `atas_nama_sendiri` varchar(255) DEFAULT NULL,
  `alamat_usaha` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `no_tlp_hp` int(11) NOT NULL,
  `telp_rumah` varchar(255) DEFAULT NULL,
  `telp_saudara` varchar(255) NOT NULL,
  `pendamping` varchar(255) DEFAULT NULL,
  `panggilan_pendamping` varchar(255) DEFAULT NULL,
  `no_hp_pendamping` varchar(255) DEFAULT NULL,
  `status_pendamping` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nama_pasangan` varchar(255) DEFAULT NULL,
  `perkawinan_ke` varchar(255) DEFAULT NULL,
  `jmlh_anak` varchar(255) DEFAULT NULL,
  `nama_ibu_kndung` varchar(255) DEFAULT NULL,
  `usaha_pokok` varchar(255) NOT NULL,
  `usaha_smpingn` varchar(255) DEFAULT NULL,
  `lm_usaha` varchar(255) DEFAULT NULL,
  `referensi` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `siup` varchar(255) DEFAULT NULL,
  `tdp` varchar(255) DEFAULT NULL,
  `pegawai` varchar(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `jenis_usaha` varchar(255) DEFAULT NULL,
  `lama_bekerja` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `npwp_debitur` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) NOT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `ket_penggunaan` varchar(255) DEFAULT NULL,
  `permohonan` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `sumber_penghasilan` varchar(255) NOT NULL,
  `berapakali_pinjam` varchar(255) DEFAULT NULL,
  `plafon_terakhir` varchar(255) DEFAULT NULL,
  `jk_terakhir` varchar(255) DEFAULT NULL,
  `tujuan_pinjaman_sebelumnya` varchar(255) DEFAULT NULL,
  `tglpelunasan` varchar(255) DEFAULT NULL,
  `data_jaminan` varchar(255) DEFAULT NULL,
  `ket_agunan_non_bergerak` varchar(255) DEFAULT NULL,
  `nilai_jaminan_non_bergerak` varchar(255) DEFAULT NULL,
  `taksasi_1` varchar(255) DEFAULT NULL,
  `j_agunan_liquidasi1` varchar(255) DEFAULT NULL,
  `data_jaminan2` varchar(255) DEFAULT NULL,
  `ket_agunan_bergerak` varchar(255) DEFAULT NULL,
  `nilai_jaminan_bergerak` varchar(255) DEFAULT NULL,
  `taksasi_2` varchar(255) DEFAULT NULL,
  `j_agunan_liquidasi2` varchar(255) DEFAULT NULL,
  `data_jaminan3` varchar(255) DEFAULT NULL,
  `ket_agunan_lainnya` text DEFAULT NULL,
  `nilai_jaminan_lainnya` text DEFAULT NULL,
  `taksasi_3` text DEFAULT NULL,
  `j_agunan_liquidasi3` text DEFAULT NULL,
  `data_pinjaman_lembaga_lain` text DEFAULT NULL,
  `ket_pinjaman_lain` text DEFAULT NULL,
  `addpendaftaran` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `form_kredit`
--

INSERT INTO `form_kredit` (`id`, `nama`, `nama_panggilan_pemohon`, `tmplahir`, `tgllahir`, `jnsid`, `noid`, `pekerjaan`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `rt`, `rw`, `kewarganegaraan`, `tmpt_tinggal_sekarang`, `status_tempat_tinggal`, `atas_nama_sendiri`, `alamat_usaha`, `pendidikan`, `no_tlp_hp`, `telp_rumah`, `telp_saudara`, `pendamping`, `panggilan_pendamping`, `no_hp_pendamping`, `status_pendamping`, `status`, `nama_pasangan`, `perkawinan_ke`, `jmlh_anak`, `nama_ibu_kndung`, `usaha_pokok`, `usaha_smpingn`, `lm_usaha`, `referensi`, `npwp`, `siup`, `tdp`, `pegawai`, `nama_perusahaan`, `jenis_usaha`, `lama_bekerja`, `jabatan`, `npwp_debitur`, `tujuan`, `instansi`, `ket_penggunaan`, `permohonan`, `jk`, `sumber_penghasilan`, `berapakali_pinjam`, `plafon_terakhir`, `jk_terakhir`, `tujuan_pinjaman_sebelumnya`, `tglpelunasan`, `data_jaminan`, `ket_agunan_non_bergerak`, `nilai_jaminan_non_bergerak`, `taksasi_1`, `j_agunan_liquidasi1`, `data_jaminan2`, `ket_agunan_bergerak`, `nilai_jaminan_bergerak`, `taksasi_2`, `j_agunan_liquidasi2`, `data_jaminan3`, `ket_agunan_lainnya`, `nilai_jaminan_lainnya`, `taksasi_3`, `j_agunan_liquidasi3`, `data_pinjaman_lembaga_lain`, `ket_pinjaman_lain`, `addpendaftaran`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asd', 'asd', '2023-12-05', 'SIM', 123, 'qwe', 'asdadads', 'DKI Jakarta (Ibu Kota Jakarta)', 'Aceh Jaya', '3', 'Beringin Jaya (Beringin Raya)', '1', '2', 'WNA', 'dssdff', 'MILIK ORANG LAIN', 'TIDAK', 'sdfsf', 'SD', 23, '123', '12233', 'asdaasd', 'ZXZX', NULL, 'ISTRI', 'Tidak Kawin', 'asd', '1', '2', 'sasdc', 'sdcsdc', 'sdcsdc', '12', '12', 'sdc', 'sdc', 'sdc', 'Y', 'sdc', 'sdc', NULL, 'sdc', '12312', 'MODAL USAHA', 'scdcsd', 'sdcsd', '11', '1', 'Gaji', '23', '123', '23', 'asdasd', '2023-12-12', NULL, 'asdsd', '21', '11', 'Lapak', 'Y', 'asdas', '123', '13', 'Kendaraan Baru', 'Y', 'sdf', '123', '12', 'Deposito/Tabungan', 'Y', 'sdvdcs', 'SIMPAN', '2023-12-15 07:28:12', NULL),
(2, 'asdasd', 'asd', 'asd', '2023-12-05', 'SIM', 123, 'qwe', 'asdadads', 'DKI Jakarta (Ibu Kota Jakarta)', 'Aceh Jaya', '3', 'Beringin Jaya (Beringin Raya)', '1', '2', 'WNA', 'dssdff', 'MILIK ORANG LAIN', 'TIDAK', 'sdfsf', 'SD', 23, '123', '12233', 'asdaasd', 'ZXZX', NULL, 'ISTRI', 'Tidak Kawin', 'asd', '1', '2', 'sasdc', 'sdcsdc', 'sdcsdc', '12', '12', 'sdc', 'sdc', 'sdc', 'Y', 'sdc', 'sdc', NULL, 'sdc', '12312', 'MODAL USAHA', 'scdcsd', 'sdcsd', '11', '1', 'Gaji', '23', '123', '23', 'asdasd', '2023-12-12', NULL, 'asdsd', '21', '11', 'Lapak', 'Y', 'asdas', '123', '13', 'Kendaraan Baru', 'Y', 'sdf', '123', '12', 'Deposito/Tabungan', 'Y', 'sdvdcs', 'SIMPAN', '2023-12-15 07:28:57', NULL),
(3, 'sxas', 'asx', 'asd', '2023-12-04', 'SIM', 123, 'qweq', 'asdasd', 'Sumatera Selatan (Ibu Kota Palembang)', 'Aceh Barat', '2', 'Bakung', '12', '1', 'WNI', 'asdf', 'MILIK SENDIRI', 'YA', 'wefwef', 'SMP', 123, '123', '12312', 'asdas', 'asdasd', '123123', 'ISTRI', 'Kawin', 'asdasd', '1', '3', 'sdfsd', 'sdfsdf', 'sdfsdf', '12', 'sdasd', '123123', 'asdsda', 'awaasd', 'Y', 'asdasd', 'asd', NULL, 'asdasd', '12312', 'MODAL USAHA', 'qweqw', 'qweqw', '12', '2', 'Warisan', '1', '12', '12', 'qweqw', '2023-12-06', 'Y', 'weqwe', '12', '1', 'Tanah', 'Y', 'qwdq', '12', '12', 'Kendaraan Bekas>15th', 'Y', 'qwdqwd', '12', '21', NULL, 'Y', 'qweqwe', 'SIMPAN', '2023-12-15 07:36:15', NULL),
(4, 'raden rahmad', 'rahmad', 'Balai Ranjang', '2010-05-10', 'KTP', 12, 'Peternak Babi', 'Desa karang Anyar Dusun Ngampel', 'Lampung (Ibu Kota Bandar Lampung)', 'Kota Bandar Lampung', '1', 'Beringin Raya', '1', '2', 'WNI', NULL, 'MILIK SENDIRI', 'TIDAK', NULL, 'SD', 811210102, NULL, '081111', 'WifeLovely', 'Wifi', '0811112323', NULL, NULL, NULL, '0', '0', NULL, 'Peternakan Babi', 'tidak ada', '10', 'Balai', '231132446464722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MODAL USAHA', NULL, NULL, '100000000', '43', 'Lainnya', '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, 'SIMPAN', '2023-12-15 23:26:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasis`
--

CREATE TABLE `informasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasis`
--

INSERT INTO `informasis` (`id`, `cover`, `judul`, `file`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'assetGuest/img/Informasi/9zbkr45Miw7871Dx26ihBbV3bDWkgb3XnkmYSqge.jpg', 'BPR Waway Lampung: Penukaran Uang Baru Hanya Melalui Website Resmi BI', NULL, 'PT BPR Waway Lampung (Perseroda) saat ini bahwa kami tidak menyediakan layanan penukaran uang baru di Kantor Pusat atau di Kantor Kas kami. Untuk melakukan penukaran uang baru, pelanggan diharapkan untuk menggunakan website resmi Bank Indonesia. Kebijakan ini bertujuan untuk memastikan keamanan dan efisiensi dalam proses penukaran uang baru sesuai dengan pedoman yang ditetapkan oleh otoritas perbankan. PT BPR Waway Lampung mengajak nasabah untuk mematuhi tata cara yang berlaku dan memanfaatkan sarana yang telah disediakan oleh Bank Indonesia untuk keperluan penukaran uang baru.', '2024-03-25 20:29:14', NULL),
(2, 'assetGuest/img/Informasi/8jrRKfvelxuBY5EK8TQVqplmEy95edAZyuCz37wn.jpg', 'Pembayaran Angsuran Nasabah BPR Bank Waway Lampung pada Hari Libur Nasional', NULL, 'Dalam rangka memperingati Hari Libur Nasional yang mengenang Wafatnya Yesus Kristus tahun 2024, kami memberikan pengumuman penting kepada seluruh nasabah BPR Bank Waway Lampung yang memiliki kewajiban angsuran. Kami menghimbau agar semua nasabah segera melaksanakan pembayaran paling lambat pada Kamis, 28 Maret 2024. Tanggal tersebut dijadwalkan sebagai batas waktu untuk pembayaran angsuran. Pembayaran dapat dilakukan melalui Kantor Pusat kami, dan kami mendorong nasabah untuk mengambil langkah segera guna memastikan bahwa pembayaran angsuran mereka diproses tepat waktu. Terima kasih atas perhatian dan kerjasamanya.', '2024-03-26 15:28:49', NULL),
(3, 'assetGuest/img/Informasi/PhuNiBY3KN0NG1OPNauOfeP8XTPRxgLKWK1HYYXm.jpg', 'Waspada Penipuan', NULL, 'Kami ingin mengingatkan semua nasabah kami untuk tetap waspada terhadap upaya penipuan  dengan modus transfer ke Bank PT BPR WAWAY LAMPUNG (Perseroda). Sangat penting untuk tidak terburu-buru dalam melakukan transaksi dan selalu melakukan verifikasi mendalam sebelum mentransfer dana atau memberikan informasi sensitif lainnya. Kehati-hatian Anda tidak hanya melindungi aset finansial Anda, tetapi juga melindungi keamanan dan privasi pribadi Anda dari serangan cyber yang mungkin merugikan. Bersama-sama, mari kita jaga keamanan transaksi dan informasi pribadi kita dengan cermat, Terima Kasih.', '2024-04-23 16:01:43', NULL),
(4, 'assetGuest/img/Informasi/HaTZWSbMvh03Yxqy2YtZ4ozKYYeuQ8MUHe8xkVfq.jpg', 'KHITANAN MASAL', NULL, 'Merayakan HUT ke-342 Kota Bandar Lampung dengan senyuman anak-anak melalui khitanan massal. Semoga selalu diberkahi dan semakin maju!', '2024-07-04 06:05:53', NULL),
(8, 'assetGuest/img/Informasi/0P6QC5cuo2K00E6uBsCp260eLlu2PjfN6kgQNRSz.png', 'PENGUMUMAN I (PERTAMA) LELANG NON EKSEKUSI', 'filePdf/informasi/39D0NTEMcNKo097s0wPc1nPNUnMIe0nZxHhDf2nR.pdf', 'Berdasarkan Rencana Bisnis Bank (RBB) Tahun 2024 dan Rapat Umum Pemegang Saham Luar\r\nBiasa (RUPSLB) pada tanggal 16 Februari 2024 \"DEMI KEADILAN BERDASARKAN\r\nKETUHANAN YANG MAHA ESA\" PT BPR WAWAY LAMPUNG di Bandar Lampung akan\r\nmengadakan Lelang Non Eksekusi dengan perantara Kantor Pelayanan Kekayaan dan Lelang\r\n(KPKNL) Bandar Lampung terhadap aset Kendaraan Bermotor Roda Dua Sebagai Berikut', '2024-12-10 05:48:27', NULL),
(10, 'assetGuest/img/Informasi/IMWmGa8oFlWGibpCAhEceH2Fd5UvN3r9w0z2hqp9.png', 'PIAGAM AUDIT INTERN', 'filePdf/informasi/qL5Tn6mTh8M1tNG9YfZ69xsrBYzbjdJShZrq8vX5.pdf', 'Penyusunan Internal Audit Charter berdasarkan pada Peraturan Otoritas Jasa Keuangan No 56/POJK.04/2015 yaitu tentang pembentukan penyusunan Piagam Audit Internal. Piagam Audit intern ( Internal Audit Charter )ini merupakan landasan dan pedoman bagi kegiatan internal audit PT BPR Waway Lampung ( Perseroda ) untuk mengamankan visi dan misi PT BPR Waway Lampung ( Perseroda ) serta memberikan landasan dan pedoman bagi Satuan Kerja Audit Internal (SKAI) yang merupakan bagian dari Sistem Pengendalian Intern, maka perlu ditetapkan Internal Audit Charter.', '2024-12-10 09:55:47', NULL),
(12, 'assetGuest/img/Informasi/KSgkVKwLOS5OsiKhkpKOySirefiIhzo7bak9C5QA.png', 'PENYELESAIAN SENGKETA DI SEKTOR JASA KEUANGAN', 'filePdf/informasi/FAb3tgRxt5ZRWXruU8EPuMsYHAywXVVZPXaSB584.pdf', 'Dalam interaksi antara konsumen dengan Pelaku Usaha Jasa Keuangan (PUJK) yang dinamis, ditambah dengan jumlah produk dan layanan jasa keuangan yang selalu berkembang; kemungkinan terjadinya sengketa tak terhindarkan. Hal tersebut disebabkan beberapa faktor, di antaranya adalah perbedaan pemahaman antara konsumen dengan PUJK mengenai suatu produk atau layanan jasa keuangan terkait. Sengketa juga dapat disebabkan kelalaian konsumen atau PUJK dalam melaksanakan kewajiban dalam perjanjian terkait produk atau layanan dimaksud. Selengkapnya....', '2024-12-12 06:07:29', NULL),
(13, 'assetGuest/img/Informasi/UpEmFfkPD5a7tzpNUCqU6gaacyJXcE10LCKq1rXZ.png', 'PENGUMUMAN', 'filePdf/informasi/smYmcfzOkaS1eZmNvGIe5vxjVZ5L3XGjTE5MkJuR.pdf', 'Terkait Penggunaan Slip Tanda Penyetoran dengan Nomor Registrasi Khusus', '2024-12-24 07:02:32', NULL),
(14, 'assetGuest/img/Informasi/jtUo0z477oMYWgwsiqoICl5Lsv9cJDMLD0OUh8kG.png', 'PT BPR WAWAY LAMPUNG (Perseroda) Kini Hadir di Gedung MPP Bandar Lampung!', NULL, 'PT BPR WAWAY LAMPUNG (Perseroda) dengan bangga mengumumkan bahwa kini kami hadir Kantor KAS di Gedung Mall Pelayanan Publik (MPP) Bandar Lampung untuk memberikan kemudahan bagi masyarakat dalam mengakses layanan perbankan. Melalui kantor kas yang baru ini, kami siap melayani berbagai kebutuhan Anda, seperti pembukaan tabungan untuk membantu pengelolaan keuangan Anda, deposito sebagai solusi investasi yang aman dan menguntungkan, serta layanan penarikan dan setoran yang cepat dan mudah. Selain itu, kami juga menyediakan informasi lengkap terkait produk dan layanan unggulan dari Bank Waway untuk memastikan Anda mendapatkan solusi keuangan terbaik. Dengan lokasi strategis dan suasana yang nyaman di Gedung MPP, kami berkomitmen memberikan pelayanan yang ramah, profesional, dan memudahkan setiap langkah finansial Anda. Jadikan PT BPR WAWAY LAMPUNG (Perseroda) sebagai mitra terpercaya dalam memenuhi kebutuhan keuangan Anda. Kunjungi kami sekarang dan rasakan kemudahan layanan perbankan bersama Bank Waway!', '2025-01-10 09:03:40', NULL),
(15, 'assetGuest/img/Informasi/8D6PA7jsbTWYMK6N6XlxB0Ors8e3N3mtc556Cirt.png', 'PELANTIKAN WALI KOTA & WAKIL WALI KOTA BANDAR LAMPUNG', NULL, 'Selamat dengan dilantiknya Ibu Eva Dwiana & Bapak Deddy Amarullah sebagai Wali Kota & Wakil Wali Kota Bandar Lampung periode 2025 - 2030. Sebuah babak baru dalam melanjutkan kepemimpinan, memperkuat pembangunan, serta membawa kota ini menuju masa depan yang lebih maju dan berdaya saing. Semoga kepemimpinan yang baru ini senantiasa diberikan kelancaran, keberkahan, dan mampu mewujudkan harapan masyarakat Bandar Lampung.', '2025-02-20 01:39:56', NULL),
(16, 'assetGuest/img/Informasi/Zbtd7VggsInWbxTNIozA2eXeH1P7rBVv6HhXT6MC.png', 'PENGUMUMAN PENERAPAN KEBIJAKAN REKENING DORMANT PT. BPR WAWAY LAMPUNG (PERSERODA)', 'filePdf/informasi/dTUwkK18Pr2vDKCrqYPaJiUHPLwxAkzfiVukxBET.pdf', 'Yth. Nasabah PT. BPR Waway Lampung,\r\nDalam rangka meningkatkan efektivitas operasional dan transparansi dalam pengelolaan rekening dormant (rekening pasif), serta untuk memenuhi ketentuan yang diatur oleh Otoritas Jasa Keuangan (OJK), dengan ini kami menginformasikan bahwa mulai Senin, 3 Maret 2025, PT. BPR Waway Lampung akan menerapkan kebijakan baru terkait rekening dormant dengan ketentuan sebagai berikut: ...', '2025-02-27 03:39:15', NULL),
(17, 'assetGuest/img/Informasi/NkzYw2l5Pmg9OwtImsBSJFJTthzCHbD5XR5llbYr.png', 'PENYESUAIAN BIAYA ADMINISTRASI TABUNGAN', 'filePdf/informasi/XZypotX1ukj7yn1tYVexPUbb4WWs51SGEz2g3Dsn.pdf', 'Kami informasikan bahwa akan dilakukan penyesuaian biaya administrasi tabungan di Bank Waway Lampung sesuai dengan kebijakan terbaru, untuk informasi lebih lanjut silakan menghubungi petugas kami atau unduh file di bawah ini.', '2025-03-07 07:50:51', NULL),
(18, 'assetGuest/img/Informasi/jd45ruO0gBAoUPYg6UHLJ5kZfG8UHos17V36vXHS.png', 'NABUNG UNTUNG BERSAMA BANK WAWAY', NULL, 'Ayo simpan dana Anda di Bank Waway Lampung dan nikmati berbagai keuntungan menarik! Dengan menabung di Bank Waway, Anda tidak hanya mendapatkan keamanan dan kenyamanan dalam pengelolaan keuangan, tetapi juga berkesempatan memperoleh hadiah langsung. Jangan lewatkan kesempatan ini—segera tingkatkan tabungan Anda dan raih berbagai hadiah menarik hanya di Bank Waway!', '2025-03-11 07:04:36', NULL),
(20, 'assetGuest/img/Informasi/ezSDKzoIJOEBGqWhU4pOopRlkZeEno329Ug66uWO.png', 'BANK WAWAY MERUPAKAN PESERTA PENJAMINAN LPS', NULL, 'PT BPR WAWAY LAMPUNG (Perseroda) merupakan peserta resmi program penjaminan simpanan yang diselenggarakan oleh Lembaga Penjamin Simpanan (LPS). Sebagai Bank Perkreditan Rakyat (BPR), simpanan nasabah di PT BPR WAWAY LAMPUNG dijamin oleh LPS hingga maksimal Rp2 miliar per nasabah per bank. Informasi lebih lanjut mengenai tingkat bunga penjaminan dan daftar bank peserta dapat diakses melalui tautan resmi LPS: https://apps.lps.go.id/BankPesertaLPSRate.', '2025-06-02 07:52:39', NULL),
(21, 'assetGuest/img/Informasi/W01w7dX7W7ieC9bypMUcPZB5QpKuFkiT98snhiMC.png', 'PERUBAHAN KETENTUAN LAYANAN PAYROLL', 'filePdf/informasi/MIkJgXM62a0wQvMTMnsuclwyEDUZS1WbskPAU3Rb.pdf', 'Dengan ini kami informasikan bahwa mulai 1 juli 2025 terdapat perubahan ketentuan layanan payroll di PT Bank Perekonomian Rakyat Waway Lampung (Perseroda). Demikian kami sampaikan. Atas perhatian dan kerja samanya, kami ucapkan terimakasih', '2025-06-11 02:20:41', NULL),
(22, 'assetGuest/img/Informasi/VSeVkl1alz70bvkiqhAg0F3A9elD41Zwj0dnnZEH.png', 'PIAGAM AUDIT INTERN 2026', 'filePdf/informasi/IzFJjGWIIocJMGiR3WzBGC5L7C4BsPsb5o3RzxCo.pdf', 'Piagam Audit Internal (Internal Audit Charter) ini adalah fondasi dan panduan utama bagi semua kegiatan audit internal di PT Bank Perekonomian Rakyat Waway Lampung (Perseroda), atau yang selanjutnya kita sebut Bank Waway. Kami menyusun piagam ini untuk menjaga dan mendukung visi serta misi Bank Waway, sekaligus memberikan arah yang jelas bagi Satuan Kerja Audit Internal (SKAI) sebagai bagian tak terpisahkan dari Sistem Pengendalian Internal Bank.', '2025-08-25 04:28:10', NULL),
(23, 'assetGuest/img/Informasi/bMQfnGyauaw5aIwGtyihP2nZ9CTMOvsrjx9BLJoV.png', 'PEMOTONGAN BIAYA LAYANAN', NULL, 'Kepada Yth. Nasabah PT BPR Waway Lampung\r\nDengan hormat,\r\nSehubungan dengan adanya penyaluran insentif/bantuan dana dari Pemerintah Kota Bandar Lampung melalui PT BPR Waway Lampung, bersama ini kami informasikan bahwa setiap transaksi pencairan dana diluar kantor Bank Waway akan dikenakan Biaya Layanan sebesar Rp1.500,- Per transaksi Layanan.\r\n\r\nDemikian informasi ini kami sampaikan. Atas perhatian dan kerja samanya, kami ucapkan terima kasih.\r\n\r\nHormat kami,\r\nPT BPR Waway Lampung (Perseroda)', '2025-10-03 07:46:43', NULL),
(24, 'assetGuest/img/Informasi/JTLLApNagc0va24rLtC6Rr7NVMddMO4rNdT9ox5z.png', 'KEBIJAKAN KEAMANAN INFORMASI', 'filePdf/informasi/WR937ONoczGOZCPi5XRQuny1OrgjCofjkRW2Hqem.pdf', 'PT BPR WAWAY LAMPUNG (Perseroda) berkomitmen menerapkan Sistem Manajemen Keamanan Informasi berdasarkan ISO 27001:2022 dan senantiasa mematuhi peraturan perundang-undangan terkait pengamanan informasi yang berlaku serta melakukan perbaikan secara berkelanjutan terhadap sistem manajemen keamanan informasi.', '2025-10-20 10:38:14', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kab_kota`
--

CREATE TABLE `kab_kota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kab_kota`
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
-- Struktur dari tabel `karirs`
--

CREATE TABLE `karirs` (
  `id` int(20) NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `karirs`
--

INSERT INTO `karirs` (`id`, `judul`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(10, 'PENERIMAAN CALON DIREKSI', 'Ditutup..!!', 'filePdf/karir/jPCbg0lLB86S7tPamRIuOoPr5F1MTyBLdjKpXCt3.pdf', '2023-08-04 09:27:12', NULL),
(12, 'Pembukaan Recruitment Teller, Customer Service, dan Marketing', 'Sudah Ditutup', 'filePdf/karir/bWhC8CWs8CF7ANWLcVHbiCPGW2xPizXsVAyFHRd1.pdf', '2024-02-13 01:12:30', NULL),
(16, 'Pembukaan Recruitment Satpam & Office Boy', 'Sudah Ditutup', 'filePdf/karir/pdJy8DvfGEQlEy4IczfWVsQZGjomXs3ZnhNAIxFN.pdf', '2024-08-14 01:03:29', NULL),
(15, 'Pembukaan Recruitment Perencanaan dan pengembangan Produk & IT', 'Sudah Ditutup', 'filePdf/karir/JNCb8wpvRfSotSIyjHEvxXUkQkOZtHNzdAUaYLyh.pdf', '2024-08-02 06:48:27', NULL),
(18, 'Open Recruitment Direksi & Komisaris', 'Pendaftaran diperpanjang 31 Desember 2024.', 'filePdf/karir/NW7PoVVHGE9WfuTooy2obSlxkhk7NrvwKF2EAnBA.pdf', '2024-11-25 01:59:02', NULL),
(19, 'OPEN RECRUITMENT 2025', 'Batas Pendaftaran 23 Mei 2025', 'filePdf/karir/8Op2iG8JVzWQ5Rdjzy50qLQgdo4J1wP0ubHwbX76.pdf', '2025-05-10 11:02:08', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatan`
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
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelurahan`
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
-- Struktur dari tabel `kode_pos`
--

CREATE TABLE `kode_pos` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_pos` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kode_pos`
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
-- Struktur dari tabel `kredit_pegawai`
--

CREATE TABLE `kredit_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `jenis_kredit` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `nominal` decimal(18,2) NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `tujuan_pengajuan_kredit` varchar(255) NOT NULL,
  `jenis_agunan` varchar(255) DEFAULT NULL,
  `ket_karpeg` text DEFAULT NULL,
  `ket_taspen` text DEFAULT NULL,
  `ket_sk80` text DEFAULT NULL,
  `ket_sk100` text DEFAULT NULL,
  `ket_sk` text DEFAULT NULL,
  `ket_lainnya` text DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kredit_pegawai`
--

INSERT INTO `kredit_pegawai` (`id`, `nik`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_tlp`, `pekerjaan`, `jenis_kredit`, `tujuan`, `nominal`, `jangka_waktu`, `tujuan_pengajuan_kredit`, `jenis_agunan`, `ket_karpeg`, `ket_taspen`, `ket_sk80`, `ket_sk100`, `ket_sk`, `ket_lainnya`, `ktp`, `created_at`, `updated_at`) VALUES
(10, '12345678987654', 'Jhon', 'Jh', 'Lampung', '2021-12-12', 'Lorem Lorem Lorem Lorem Lorem', '089838475887', 'KARYAWAN SWASTA', 'Kredit Modal Kerja', 'PUSAT', 32000000.00, 12, 'MAKAN MAKAN', 'TASPEN, SK', NULL, '--', NULL, NULL, 'SK PPPK', NULL, 'ktp/jTFCIbqThlVi4Sg5TPqhBQ7c4FR2NUWZuNPn4ha6.jpg', '2025-07-09 04:35:46', '2025-07-09 04:35:46'),
(11, '11213143435345', 'Andika Rendy', 'Angga', 'Balik Ranjang', '1989-12-07', 'adccaasd', '08812886651212', 'Kuli panggul', 'Kredit Konsumsi', 'PUSAT', 100000000.00, 20, 'lain', 'KARPEG, TASPEN, SK80, SK100, SK, lainnya', NULL, NULL, NULL, NULL, NULL, NULL, 'ktp/E8R88AJdD9fO4gPgY5RH1GU4exQx6qc6TCYcd9uA.jpg', '2025-07-09 08:48:04', '2025-07-09 08:48:04'),
(12, '1804104507960001', 'LIS YULITASARI', 'LITA', 'SUKABUMI', '1996-07-05', 'Perumahan Rajawali Residence Blok D22, Candimas, Kec. Natar, Kabupaten Lampung Selatan', '081369999660', 'DOSEN', 'Lainnya...', 'PUSAT', 100000000.00, 60, 'MEMBELI KENDARAAN', 'SK80', NULL, NULL, NULL, NULL, NULL, NULL, 'ktp/NWFWBS0RNHMfOcm83skbVtYbBIQ7Ce6zZiIBY9Dd.jpg', '2025-08-18 10:03:32', '2025-08-18 10:03:32'),
(13, '1234567891012345', 'Arif Abdurahman', 'Arif', 'Kota Bandar Lampung', '2000-01-12', 'BANDAR LAMPUNG', '085156547551', 'BANK WAWAY', 'Kredit Konsumsi', 'PUSAT', 2000000.00, 46, 'UMKM', 'SK100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-04 10:40:14', '2025-09-04 10:40:14'),
(14, '1234567891012344', 'MEMET', 'MEMET', 'Kota Bandar Lampung', '2000-01-12', 'BANDAR LAMPUNG', '085156547551', 'BUMD', 'Kredit Konsumsi', 'PUSAT', 20000000.00, 46, 'UMKM', 'SK80, SK100, lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-04 10:44:24', '2025-09-04 10:44:24'),
(15, '1871105606700012', 'Jimmi Afriando Akbar', 'Jimmi', 'Bandar Lampung', '2000-01-12', 'Jln Imam Bonjol Gg Durian Gedong Air', '085156437751', 'Staff Bank', 'Kredit Investasi', 'PUSAT', 200000000.00, 45, 'Crypto', 'SK100', NULL, NULL, NULL, NULL, NULL, NULL, 'ktp/UgNstGI549Gju7FLOl0oqYpoYUy3eCzEzK6dGGz5.jpg', '2025-09-09 05:01:47', '2025-09-09 05:01:47'),
(16, '1611042605980005', 'Hendri', '-', 'Muara saling', '1998-05-26', 'Perum bkp blok z no 180 kelurahan kemiling permai kecamatan kemiling kota bandar lampung', '085839264867', 'Perawat', 'Lainnya...', 'PUSAT', 100000000.00, 60, 'Beli rumah', 'SK', NULL, NULL, NULL, NULL, 'Pppk', NULL, 'ktp/7pZRH5Ph3ThBXDCO5oGXryOJiWTfvEB1r3mPvi5i.jpg', '2025-09-25 05:53:14', '2025-09-25 05:53:14'),
(17, '1803021908860001', 'Rudi Agustiawan', 'Rudi', 'Kotabumi', '1986-08-19', 'Dusun VII Kramat Jaya RT 002/RW 001 Desa Gunung Agung Kecamatan Sekampung Udik Lampung Timur', '082371163020', 'Wiraswasta', 'Kredit Modal Kerja', 'PUSAT', 2000000000.00, 48, 'Pekerjaan Project Bellagio Mall, Pengadaan Pipa PDAM Kabupaten Serang, Pengadaan Alat Elektronik Kabupaten Serang, Pengadaan AC Kabupaten Serang, Renovasi 2 Ruangan RSDP Kabupaten Serang', 'lainnya', NULL, NULL, NULL, NULL, NULL, NULL, 'ktp/QyAFGKvmzq3uyLxRgLMrj0sUyhatMZV0Tm5loan1.jpg', '2025-10-17 05:47:42', '2025-10-17 05:47:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritikdansaran`
--

CREATE TABLE `kritikdansaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kritikdansaran`
--

INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
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
(26, 'Robertjed', 'zelatcol@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2023-04-28 07:40:24', NULL),
(27, 'Hello World! https://racetrack.top/go/hezwgobsmq5dinbw?hs=d440e3fb1406735a3e5a59cec18d7703&', 'yhfee@chitthi.in', 'l5wj4l', '2023-05-08 07:06:28', NULL),
(28, 'Hello World! https://racetrack.top/go/hezwgobsmq5dinbw?hs=1882080bdda9844f10c544f3c5752ccd&', 'yhfee@chitthi.in', 'o4coyf', '2023-05-08 07:06:30', NULL),
(38, 'Anita Prada', 'prada.anita38@gmail.com', 'Are you tired of spending a fortune on PPC advertising and getting little to no results? Our PPV traffic service delivers real visitors to your site for a fraction of the cost of Google and Facebook ads. See the difference! visit: www.tmast.xyz', '2023-05-08 23:55:43', NULL),
(39, 'Chih Chien Chang', 'dir.chau0040@gmail.com', 'Greetings, \r\n \r\nI would like to extend a professional and alluring business opportunity to you. Kindly respond to my email address provided below (dir.chau0040@yahoo.com) for further deliberation. \r\n \r\nThank you \r\nDir. Chih Chien Chang', '2023-05-10 01:32:21', NULL),
(40, 'JamesLab', 'egori.nosovpjs@mail.ru', 'Знакомства на Loveawake.Ru \r\n<a href=https://loveawake.ru>Show more!..</a>', '2023-05-11 10:30:14', NULL),
(41, 'SiterShaws', 'sirfak@yandex.com', '<a href=https://megaremont.pro/grodno-restavratsiya-vann>pemulihan mandi dengan enamel</a>', '2023-05-12 15:52:28', NULL),
(42, 'Evangeline Damron', 'evangeline.damron@gmail.com', 'Are you struggling to get your website noticed by search engines? Our PPV traffic service can help kickstart your site\'s popularity and boost your search engine rankings. Get started today and get more traffic for less! http://customerboost.tmast.xyz/', '2023-05-13 13:19:06', NULL),
(43, 'MatthewRex', 'yasen.krasen.13+81608@mail.ru', 'Ufieuhdidhefh wjdwdjqwidjwefhwfakj oijofqwfbvsdfjfwej ijwqiofjewuhfwedjawdhewh ouhwidwjpouweiofeiouqwruio ioqwiwuifewifjfifhw jiwfjiewhfewgiewufewio bankwawaylampung.com', '2023-05-22 07:07:33', NULL),
(44, 'StevenFlugs', 'rohan@mcpheeit.com.au', 'Put Your Website in the Spotlight: Social Signals Attract the Right Attention https://unlock-the-power-of-social-signals.blogspot.cz/2023/05/unlock-power-of-social-signals-boost.html', '2023-05-25 20:14:59', NULL),
(45, 'RichardFat', 'OFFICE@LINKDISCOUNTCARD.COM.AU', 'Become an SEO Superstar: Leverage Social Signals for Website Growth https://harness-the-magic-of-social-signals.blogspot.com.br/2023/05/harness-magic-of-social-signals-for.html', '2023-05-26 15:33:16', NULL),
(46, 'Rick Oneil', 'oneil.rick@googlemail.com', 'Want free traffic? Submit your website for free to over 35 classified ad sites here: https://bit.ly/3oBT41j', '2023-05-27 00:02:00', NULL),
(47, 'Aracely Meeks', 'meeks.aracely18@gmail.com', 'Put an end to gambling your advertising budget, we provide a guaranteed return on investment! Take a look at our site here: https://bit.ly/45C9SWD', '2023-05-27 01:33:47', NULL),
(48, 'Audrey Akhurst', 'akhurst.audrey@gmail.com', 'Want to find out how you can send mass messages to millions of websites just like I did via your site\'s contact page just now? Email me back here: mk6573a5u0f@ezztt.com', '2023-06-01 22:13:27', NULL),
(49, 'Arjunaapriyadi', 'arjunsing@gmail.com', 'Saya mau liat saldo saya', '2023-06-02 00:52:53', NULL),
(50, 'Stanleycreef', 'home@shaunjohnston.id.au', 'Experience Unprecedented ROI: Invest in the 10 Cryptos Set to Surge by 20,000% https://jtbtigers.com/9r8qk', '2023-06-03 12:26:50', NULL),
(51, 'Thomasamock', 'romaine.robyr@sunrise.ch', 'Fuel Your Website\'s Success: 3104 Verified Links from Google—for FREE http://freetrusttop.slushshed.xyz/googleboost', '2023-06-14 09:23:24', NULL),
(52, 'Robertjed', 'zelatcol@gmail.com', 'Szia, meg akartam tudni az árát.', '2023-06-15 08:54:55', NULL),
(53, 'Stephenenubs', 'uzair.chughtai@gmail.com', 'Start living life on your terms: 10,000 EUR monthly from crypto investments http://euroinvest-4796551.spesfivitechthe.tk/anwendung-9834667', '2023-06-17 09:39:39', NULL),
(54, 'Marcelsiz', 'susan@textileimage.ca', 'Skyrocket Your Business with Our Discounted Email Database http://greenthumbs-373.ab-567.com/travelguides-280', '2023-06-21 02:11:21', NULL),
(55, 'ArthurTousy', 'dave@castlecreek.ca', 'Maximize the Impact of Your Video Content with Elite SEO AI http://brandprogrameliteseo.cn0743.com/automationbusiness', '2023-06-29 15:19:52', NULL),
(56, 'KeithMeark', 'aorikudaisuki@yahoo.co.jp', 'POPULAR ADULT DATING APP IN JAPAN 2023 http://adult-dating-in-japan.randiesiegellaw.com/dating-for-sex-in-japan', '2023-07-01 05:11:54', NULL),
(57, 'NorbertVox', 'oarc@oarc.ca', 'ALTCOIN RICHES AWAIT: MULTIPLY YOUR $100 INVESTMENT INTO A STAGGERING $5,000,000 http://cryptopicks.gaa258.com/cryptotarget', '2023-07-03 05:48:01', NULL),
(58, 'Robertjed', 'alfredegov@gmail.com', 'Hallo, ek wou jou prys ken.', '2023-07-04 23:02:19', NULL),
(59, 'Robertnic', 'durandm3@videotron.ca', 'ChatGPT: The Automated Cash Flow Engine Generating $21,000/Month of Passive Income https://vidlocity.tv/wp-content/themes/Attitude/go.php?https://onlinshopbest.sell.app/product/passive-income-of-21000-per-month-with-chatgpt-is-easy-money?501999555', '2023-07-05 06:20:56', NULL),
(60, 'Ladonna', 'ladonna@necaise.thawking.co', 'Good Morning \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thawking.co\r\n \r\nThanks and Best Regards, \r\n \r\nLadonna', '2023-07-10 12:44:38', NULL),
(61, 'MarcusplexT', 'loretta@misskiss.com.au', 'SECURE YOUR WEALTH: BUY A WALLET FILE LOADED WITH 12600 BTC http://btcblitzers.eddybautista.xyz/btcjumpstart', '2023-07-15 03:27:36', NULL),
(62, 'Brianonese', 'bronwyn@newyoungtravel.com.au', 'Claim 12600 BTC Today http://bitcoinexpressearn.digitaleyecare.xyz/bitcoinwave', '2023-07-19 18:54:48', NULL),
(63, 'Robertjed', 'alfredegov@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2023-07-22 17:06:44', NULL),
(64, 'SINGGA AMANULLAH', 'singgaamanullah@gmail.com', 'Ingin buka rekening', '2023-07-31 05:12:32', NULL),
(65, 'Eko Kristanto', 'ekonescafe@gmail.com', 'Apakah bisa mengajukan pinjaman untuk pegawai swasta?', '2023-07-31 10:26:10', NULL),
(66, 'Robertjed', 'alfredegov@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2023-08-11 01:51:59', NULL),
(67, 'Pudpa', 'puspams89@gmail.com', 'Mau tanya kak,,klo tabungan simpel pelajar sistemnya bagaimana,,setoran awalnya berapa dan admin perbulannya berapa,terima kasih', '2023-08-15 09:18:34', NULL),
(68, 'RolandExafe', 'yasen.krasen.13+73598@mail.ru', 'Mfhfujfehfueh ifwjifjeighufijsdh uidfsjkdokwefuhgedjij idoweweureiurioweiidkjsdj iwjdsksosjfeihfiwskdoakd ijwdiwdowjfihefiwjdiwhfgue bankwawaylampung.com', '2023-08-16 09:27:29', NULL),
(69, 'Saeni', 'saenie858@gamil.com', 'Tetap berjaya', '2023-08-22 09:44:53', NULL),
(70, 'RonalddursE', 'soccer_klick09@yahoo.com', 'A quick way to make money on AI from $1000 per day http://passive-income-3981.janoub-hightech.com/invite', '2023-08-23 09:15:48', NULL),
(71, 'Scottthype', 'thesethmoherman@gmail.com', 'Get more than 1,000,000 potential customers right now for your business http://best-business-2231.ketlenpack.online/invite', '2023-08-24 11:59:54', NULL),
(72, 'Robertjed', 'alfredegov@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2023-08-26 07:47:16', NULL),
(73, 'Timothybip', 'blhenderson@sctelco.net.au', 'ARCHIVAL PRIVATE PHOTOS OF NAKED KIM KARDASHIAN - 34 PHOTOS http://naked-21691.igspeedster.com/page', '2023-09-09 22:22:53', NULL),
(74, 'Robertjed', 'alfredegov@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2023-09-12 08:27:35', NULL),
(75, 'Philjed', 'draikkimr976@gmail.com', 'Hola, volia saber el seu preu.', '2023-09-14 11:43:47', NULL),
(76, 'iqapemexihoyi', 'ofufuhi@a.fastretmail.com', 'http://slkjfdf.net/ - Tedemic <a href=\"http://slkjfdf.net/\">Awaweztaf</a> nei.cvac.bankwawaylampung.com.ymt.cy http://slkjfdf.net/', '2023-09-17 01:43:08', NULL),
(77, 'iqapemexihoyi', 'ofufuhi@a.fastretmail.com', 'http://slkjfdf.net/ - Tedemic <a href=\"http://slkjfdf.net/\">Awaweztaf</a> nei.cvac.bankwawaylampung.com.ymt.cy http://slkjfdf.net/', '2023-09-17 01:50:10', NULL),
(78, 'Tammy Kernot', 'kernot.tammy@outlook.com', 'Looking for unique advertising that doesn\'t cost thousands of dollars to deliver mediocre results? How about contact form blasting? This is how I\'m reaching out to you right now! For more info hit me up on and Email here: Tammy@gomail2.xyz', '2023-09-18 02:27:06', NULL),
(79, 'Herlansyah Saputra', 'herlansyahsaputra1616@gmail.com', 'Selamat Siang... Saya Berminat untuk Deposito Selama 12 Bulan Di Bank Waway. Jumlah yang akan saya Deposito kan sebesar 100 Juta Rupiah. Yang ingin saya tanyakan berapakah setiap bulan keuntungan yang saya terima? Terima kasih', '2023-09-20 06:36:39', NULL),
(80, 'GordonChopy', 'buth@biebel54.dynainbox.com', 'brillx официальный сайт играть онлайн \r\n<a href=\"https://brillx-kazino.com\">https://brillx-kazino.com</a>', '2023-09-22 12:56:13', NULL),
(81, 'Robertmix', 'worthashot@me.com', 'URGENT! TRANSFER TO YOU $24,356.98 IN 364 DAYS. URGENTLY CONFIRM THE TRANSACTION http://payment-request-813715.hempproductsadagency.com/bank', '2023-09-24 01:27:40', NULL),
(82, 'Robertjed', 'alfredegov@gmail.com', 'Hola, quería saber tu precio..', '2023-09-28 03:38:02', NULL),
(83, 'StevenScief', 'wilsonmjamie26@gmail.com', 'URGENT MESSAGE! SEMI-PASSIVE INCOME OF EXACTLY $1000 PER DAY IN CRYPTOCURRENCY http://the-519571.agentbios.com/service', '2023-09-29 21:55:15', NULL),
(84, 'Muhammad Syafrizal', 'Syafrizalonk@gmail.com', 'Surat lamaran kerja', '2023-09-30 15:53:16', NULL),
(85, 'LouisFam', 'alexandrasantana@hotmail.ch', 'ENTDECKEN SIE DAS GEHEIMNIS DES 1000-EURO-CLUB MIT KRYPTOWAHRUNG UND KI http://euro-915594.gotherealworld.com/app', '2023-10-03 14:33:03', NULL),
(86, 'oxuqenuvuge', 'icoyaraya@a.youemailrety.com', 'http://slkjfdf.net/ - Abepau <a href=\"http://slkjfdf.net/\">Phupifo</a> vag.auhm.bankwawaylampung.com.qcz.az http://slkjfdf.net/', '2023-10-04 18:37:43', NULL),
(87, 'oxuqenuvuge', 'icoyaraya@a.youemailrety.com', 'http://slkjfdf.net/ - Abepau <a href=\"http://slkjfdf.net/\">Phupifo</a> vag.auhm.bankwawaylampung.com.qcz.az http://slkjfdf.net/', '2023-10-04 18:43:58', NULL),
(88, 'JosephLibre', 'emandro@rambler.ru', 'https://volgateam.ru/', '2023-10-07 21:30:56', NULL),
(89, 'JosephBah', 'louised814@gmail.com', 'YOUR FINANCIAL SUCCESS IS ASSURED - $1000 PER DAY GUARANTEED INCOME http://secret-310811.svvclinic.com/buy', '2023-10-08 13:01:58', NULL),
(90, 'ENDI PUTRA', 'endiputra85@yahoo.com', 'Selamat siang min, hanya untuk memastikan saja untuk penerimaan calon Direksi BPR Waway Lampung apakah sudah terisi semua ya, atau apakah ada perpanjangan masa pendaftaran.. terima kasih..Ttd Endi Putra', '2023-10-10 08:03:06', NULL),
(91, 'Philjed', 'alvinbbm41@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2023-10-11 06:03:17', NULL),
(92, 'Kendall', 'kendall@reid.thawking.co', 'Morning \r\n\r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time.\r\n\r\nBuy now: https://thawking.co\r\n\r\nThank You, \r\n\r\nKendall', '2023-10-13 01:31:02', NULL),
(93, 'Robertjed', 'alfredegov@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2023-10-15 15:49:52', NULL),
(94, 'HarryPew', 'queen_ga3_3@outlook.com', 'Fine crypto news in troubled times. Great crypto prices near you! \r\n<a href=https://is.gd/e7c87W><b><u>Best crypto to buy now!</b></u></a>', '2023-10-16 00:25:08', NULL),
(95, 'Ema Mooney', 'mooney.carlos@gmail.com', 'Hello! A lot of grames for any taste. Join us\r\n\r\n <a href=https://bit.ly/3ZSKidO>https://bit.ly/3ZSKidO</a>\r\n [url]https://bit.ly/3ZSKidO[url]\r\n\r\nEma', '2023-10-17 09:39:04', NULL),
(96, 'Clintron', 'yasen.krasen.13+70927@mail.ru', 'Nguheidjiwfefhei ijiwdwjurFEJDKWIJFEIF аоушвцшургаруш ШОРГПГОШРГРПГОГРГ iryuieoieifegjejj bvncehfedjiehfu bankwawaylampung.com', '2023-10-19 00:21:05', NULL),
(97, 'fBXMlwtwOByhBzmOoQO', 'xWWMep.qhjbpph@pointel.xyz', 'fBXMlwtwOByhBzmOoQO', '2023-10-24 20:02:32', NULL),
(98, 'Jamiearron', 'rock8past@gmail.com', 'Guaranteed income from email newsletters over $30,000 per month http://marketing-21553512.propertyybecho.com/price?74086', '2023-10-30 18:21:45', NULL),
(99, 'Normanpam', 'trust_gektor@outlook.com', 'Open the world of cryptocurrencies. Let cryptocurrencies go in your life. \r\n<a href=https://mirebugagefi.top/go/5423v2/74w2><b><u>Be stylish!</b></u></a>', '2023-11-06 01:06:36', NULL),
(100, 'Stevenkib', 'williamsrx1@yahoo.com', 'IMPORTANT! You earned $45,284.53. Urgently withdraw your earned money http://cashoutexpresszoomrideway-4179227.dairobustos.com/on?333', '2023-11-06 04:03:22', NULL),
(101, 'Nereida Griffin', 'griffin.nereida@gmail.com', 'Want to learn how to get more customers without paying for advertising? Visit http://Nereida.tg4.xyz', '2023-11-10 11:26:10', NULL),
(102, 'Charlesaceld', 'coco.rouviere@hotmail.fr', 'We analyzed the position of your site in Google search results and developed a method for promoting your site bankwawaylampung.com in the TOP 1 of Google search results in 3 minutes - https://shoppy.gg/product/Jqmdt8y?bankwawaylampung.com', '2023-11-12 14:19:16', NULL),
(103, 'jNroOFmOLQzsrHUtxwLu', 'VLoEXy.hmbbpd@spinapp.bar', 'jNroOFmOLQzsrHUtxwLu', '2023-11-13 04:07:47', NULL),
(104, 'Andre', 'andrefabrian000@gmail.com', 'Bagaimana cara pengajuan pinjaman dana tunai dengan jaminan sertifikat rumah', '2023-11-17 13:19:24', NULL),
(105, 'Jasonhip', 'verdammte-inzucht14@web.de', 'Sexy girls in your city are looking for dating http://dating-2516.situs-mega4d.com/no-091', '2023-11-18 12:11:02', NULL),
(106, 'Charlesaceld', 'johnny2004@live.co.uk', 'Your opinion is important to us, so we are ready to pay up to $5000 - http://take-survey-17.hindisa.xyz/id-98', '2023-11-19 08:25:07', NULL),
(107, 'xBJRjRMJoeUujkSYApLMODjJhbXRN', 'SFljVn.dwbddp@anaphora.team', 'xBJRjRMJoeUujkSYApLMODjJhbXRN', '2023-11-19 23:11:41', NULL),
(108, 'Deniel', 'deniel@hotmail.com', 'https://go.hesoties.com/0lxh \r\n \r\nThis is where I earn money every day.', '2023-11-21 13:43:57', NULL),
(109, 'Maria Malone', 'maria@furthertrends.com', 'Hey,\r\n\r\nHave you guys seen the new free A.I. tool that turns your website content into videos?\r\n\r\nCheck it out here: http://furthertrends.com\r\n\r\n-Maria\r\n\r\nunsub from future comms: https://u.furthertrends.com', '2023-11-22 03:41:47', NULL),
(110, 'Anthony', 'drbreiner555@gmail.com', 'Hello, \r\n \r\nI\'m Anthony, a Research Director in the UK. I have valuable business insights to share. Please respond to this email (Anthony@hmcncl.org) for details. Swift replies appreciated. \r\n \r\nBest, \r\nAnthony', '2023-11-22 07:56:58', NULL),
(111, 'Mitzi Swafford', 'mitzi.swafford@gmail.com', 'Want to learn how to get more customers without spending money on advertising? Go to http://Mitzi.tg4.xyz', '2023-11-24 10:35:23', NULL),
(112, 'Steve Cornwall', 'steve82991@gmail.com', 'the laptop i bought from your amazon store is not working.. this model https://amzn.to/46pmr71 amazon said to contact you directly for tech support or returns? this was purchased as a gift, plz get back to me asap thanks, Steve', '2023-11-27 14:50:28', NULL),
(113, 'Philjed', 'septon36giannixi@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2023-11-28 06:34:24', NULL),
(114, 'DanielPhave', 'haily.tree.97@gmail.com', 'Cryptocurrency in top spaces. Superior method to get thrive. \r\n<a href=https://links-topartners.top/go/5423v2/74y2><b><u>Just do it!</b></u></a>', '2023-11-28 17:30:00', NULL),
(115, 'Esmeralda Valenzuela', 'LRuonD.qttthjm@anaphora.team', 'Esmeralda Valenzuela', '2023-12-02 14:22:13', NULL),
(116, 'DanielPhave', 'haily.tree.97@gmail.com', 'Cryptocurrency in top spaces. Superior method to get flourish. \r\n<a href=https://gotolinkspartner.top/go/5423v2/7453><b><u>Just do it!</b></u></a>', '2023-12-02 16:09:56', NULL),
(117, 'BBppUInRKtcPQJR', 'rCxLPW.dhdcjpb@rottack.autos', 'BBppUInRKtcPQJR', '2023-12-05 22:58:41', NULL),
(118, 'AlfredNof', 'karolt@searchsmart.com.au', 'Rank #1 on Google in 2 weeks with a 3-year guarantee https://marketplacebest888.sell.app/product/we-bring-anything-to-the-top-of-google-in-2-weeks-3-year-warranty?24764709', '2023-12-06 04:28:34', NULL),
(119, 'Charlestob', 'cryturbom@gmail.com', '10% in two days, easier than making yourself a cup of coffee! \r\n \r\nhttps://u.to/z40kIA', '2023-12-06 08:24:38', NULL),
(120, 'Rubenneutt', 'thomas.tonda@gmail.com', 'GameDev: Create a game from scratch in 10 minutes and earn $1,000,000 https://www.813area.com/urldirect.php?biz=192396&xurl=https%3A%2F%2Fshoppy.gg%2Fproduct%2FsdrduvV%3F4765', '2023-12-08 11:53:55', NULL),
(121, 'LucasPaics', 'fourwoods@yahoo.com.au', 'GAME DEVELOPMENT FOR DUMMIES: MAKE $1,000,000 WITH ZERO SKILLS http://www.digitorient.com/wp/go.php?https://shoppy.gg/product/sdrduvV?1259 \r\n \r\n \r\n \r\n \r\nn3ro7u4i6c4z1o0h \r\nu2cf0x4o7x4i2f6v \r\nn1wl2t1c5j9z4b5n', '2023-12-11 05:04:02', NULL),
(122, 'WfzTjcIiIQcBbXmvNoPjvllrj', 'MKTNet.bpdwtcc@sabletree.foundation', 'WfzTjcIiIQcBbXmvNoPjvllrj', '2023-12-12 12:17:18', NULL),
(123, 'Giles Nicholas', 'giles@gilesnicholas.net', 'Hi, I am doing a free lead generation service, I\'d like to send your company some leads for free, if you\'re interested let me know and I can show you how it works!', '2023-12-12 12:29:40', NULL),
(124, 'DanielPhave', 'dragunolga77@gmail.com', 'Prosperous deposit on a new wave of luck. New path to significant wealth. \r\n<a href=https://newsgosite.top/go/5423v2/74y2><b><u>Explore the world of cryptocurrencies right now!</b></u></a>', '2023-12-13 20:12:31', NULL),
(125, 'VjchEtcEweKCVkRFXFynFbzCj', 'HFfTfJ.wcmwptb@usufruct.bar', 'VjchEtcEweKCVkRFXFynFbzCj', '2023-12-14 04:33:23', NULL),
(126, 'Richardgrili', 'tcollins@gmail.com', 'THE FUTURE OF INCOME: $3 PER MINUTE ON AUTOPILOT – TIME-ACTIVATED PROSPERITY http://tinyl.net/FvDj?7770 \r\n \r\n \r\n \r\n \r\ns2qd9s0o5m3d5h2t \r\ng8ti1r1f4s8h0c4d \r\nw2ld7i6y2g8x8j4a', '2023-12-15 11:54:22', NULL),
(127, 'Timothy Rosales', 'BozjJT.qhwwbpc@anaphora.team', 'Timothy Rosales', '2023-12-17 05:38:11', NULL),
(128, 'BitcoinSystem', 'bitcoinsystem@hotmail.com', 'http://go.nozeqaan.com/0m1v Het enige wat u hoeft te doen is uw software nu GRATIS aan te schaffen.', '2023-12-17 10:50:45', NULL),
(129, 'Philjed', 'septon36giannixi@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2023-12-17 23:38:36', NULL),
(130, 'Robertjed', 'lucido.leinteract@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2023-12-18 03:27:49', NULL),
(131, 'Thomasthesy', 'exchangeaibot@proton.me', 'Enter the Trust Wallet giveaway and win up to $750,000 and NFT vouchers! Just go to the official giveaway page at https://trustgiveawayse.com/trust connect your wallet and receive a guaranteed prize. Good luck!', '2023-12-19 10:23:26', NULL),
(132, 'anowavuk', 'ezabadi@c.trendesmail.com', '<a href=http://fjksldhyaodh.com/>Nekrafai</a> <a href=\"http://fjksldhyaodh.com/\">Inelijo</a> nbg.xqlz.bankwawaylampung.com.erz.ec http://fjksldhyaodh.com/', '2023-12-21 05:19:27', NULL),
(133, 'anowavuk', 'ezabadi@c.trendesmail.com', '<a href=http://fjksldhyaodh.com/>Nekrafai</a> <a href=\"http://fjksldhyaodh.com/\">Inelijo</a> nbg.xqlz.bankwawaylampung.com.erz.ec http://fjksldhyaodh.com/', '2023-12-21 05:26:06', NULL),
(134, 'Edwardneutt', 'secrify1999@proton.me', 'Cool Bitcoin on freeze snow. Christmas crypto propose with great benefits. \r\n<a href=https://pro-gopartner-get.top/go/5423v2/74z2><b><u>Indulge yourself to something adorable before New Year!</b></u></a>', '2023-12-21 07:22:28', NULL),
(135, 'Robertjed', 'lucido.leinteract@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2023-12-22 00:13:41', NULL),
(136, 'CityTravel', 'citytravel@hotmail.com', 'https://bit.ly/483FLIA chip flights.', '2023-12-24 18:44:56', NULL),
(137, 'Help', 'help@hotmail.com', 'https://www.donationalerts.com/r/spasibotebel Please help a little girl with food. All funds will go to her. Thank you kind man.', '2023-12-28 04:14:49', NULL),
(138, 'AliExpress', 'aliexpress@hotmail.com', 'https://bit.ly/47NAT9Q Welcome!', '2023-12-30 17:27:05', NULL),
(139, 'Doug Shume', 'dougshume@gmail.com', 'Hi, I have an overflow of customers that I\'d like to send to you but I want to make sure you can handle more leads, let me know if you\'d like me to send you more info.', '2023-12-30 21:32:40', NULL),
(140, 'Wil Bur', 'hifromwilbur@gmail.com', 'Hey, there! My name is Wil and I have a MASSIVE list of leads that are interested in buying from you. Is this a good place to to send you more information about the leads? Let me know.', '2024-01-02 14:36:33', NULL),
(141, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hola, quería saber tu precio..', '2024-01-07 07:11:49', NULL),
(142, 'Robertjed', 'lucido.leinteract@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2024-01-08 06:58:48', NULL),
(143, 'Davidarork', 'oscarmmxii@gmail.com', 'Upcoming Crypto Marvel: New Meme Token Predicted to Gain 300,000,000% http://withdrawsprint-5773.blackmenwellness.com/bank \r\n \r\n \r\n \r\n \r\nk0hu6k5e0p1r1d7a \r\nk4ql3c3x2s3k8g0u \r\nu4on9r8x0o0t8e5z', '2024-01-08 13:03:18', NULL),
(144, 'MichaelRuilm', 'jerikamorgan@gmail.com', 'Crypto Thunder: A 300,000,000% Gain Predicted for This New Meme Token http://xn--80aefrkqfv.com/bitrix/click.php?goto=https%3A%2F%2Ftelegra.ph%2Fch-01-09%3F1f \r\n \r\n \r\n \r\n \r\n \r\n \r\nk1zy9t9q6u5y6d7g \r\ni3ci1p1x2l7v9j9j \r\nk7uk6v6p2n5k2q9f', '2024-01-10 05:52:40', NULL),
(145, 'Helga', 'helga24@gmx.de', 'Hi. I\'m Helga, do you want to see my hot photos? \r\n \r\nhttps://girls.stictgt.nl/', '2024-01-12 00:33:47', NULL),
(146, 'adofits', 'adofits@kmaill.xyz', 'Chimeric mice were generated using a morula aggregation method <a href=http://vardenafil.top>prix levitra levitra 20 mg paris 2008</a>', '2024-01-12 12:34:00', NULL),
(147, 'XRumerTest', 'yourmail@gmail.com', 'Hello. And Bye.', '2024-01-12 12:47:52', NULL),
(148, 'Landen Marshall', 'wnQLjY.wmdtdmh@carnana.art', 'Landen Marshall', '2024-01-13 04:40:54', NULL),
(149, 'James Johnson', 'jamesjohnson145789@gmail.com', 'Hi, I noticed a few things wrong with your Google listing, is this a good place to send the problems?', '2024-01-13 13:41:58', NULL),
(150, 'Coraline Mccall', 'fTKyXk.dqhbbh@virilia.life', 'Coraline Mccall', '2024-01-14 00:36:59', NULL),
(151, 'Brent Fouch', 'brentfouch@aiviralvideo.com', 'Hey, I noticed your website isn\'t using AI yet, can I send over something that I think would help?', '2024-01-14 04:21:41', NULL),
(152, 'AlonzoLix', 'natberkany@gmail.com', 'Revolutionary penetration in cryptocurrencies. Universal means of increasing and saving your capital. \r\n<a href=https://binancepartners-btc-go.com/go/5423v2/74y2><b><u>Try it now!</b></u></a>', '2024-01-14 04:44:42', NULL),
(153, 'Richard Thomas', 'richard@aimoneymakingcourse.com', 'Hi, I noticed a few things wrong with your Google listing, is this a good place to send the problems?', '2024-01-14 15:20:30', NULL),
(154, 'Kenneth White', 'kenneth@adamhustle.com', 'Hi, I noticed your website hasn\'t embraced AI capabilities yet. Would you be interested in a suggestion I have?', '2024-01-14 17:40:50', NULL),
(155, 'Leo Whatmore', 'whatmore.leo@gmail.com', 'Your ad message sent to contact forms on millions of sites. It\'s way more affordable than conventional advertising. Contact me at my email or skype below for details.\r\n\r\nPhil Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps23030@gomail2.xyz', '2024-01-16 12:50:44', NULL),
(156, 'Anthony Lewis', 'anthony@rapidprofitmachine1.com', 'Hello, did you notice the problems with your website\'s performance?', '2024-01-16 16:35:09', NULL),
(157, 'Richard Thomas', 'richard@aimoneymakingcourse.com', 'I saw that your google my business listing is not working as it should.  Like where google show customers your business.  I can give you a list of a couple things to fix, is that ok?', '2024-01-17 01:02:51', NULL),
(158, 'Steven Clark', 'steven@rapidprofitmachine1.com', 'noticed your google setup is messed up, didn\'t know if you knew, I can tell you what it is if you want?', '2024-01-17 01:57:56', NULL),
(159, 'Aleggatorseo', 'aleggatorseo@hotmail.com', 'https://seo-progony.ru/ обращайтесь, отзывы положительные. \r\n \r\nПринимаем в работу все тематики.', '2024-01-17 08:02:33', NULL),
(160, 'DouglasFer', 'mesblast@gmx.ch', 'Breaking News: PASSIVE INCOME ALCHEMY: TURN $50K INVESTMENT INTO GOLD https://whittlesealeader.localnewspapers.today/jump.php?link=https%3A%2F%2Fpolska-mysla.blogspot.com%3F41 \r\n \r\n \r\n \r\n \r\ns4cf3e4f8b3y6i2i \r\nb2jb4v6l4m3w8n9w \r\nq1ar7k8e7p9d0u8e', '2024-01-17 10:52:06', NULL),
(161, 'Matthew Martinez', 'matthewm@aibestsuite.com', 'Hi, I\'ve observed some inaccuracies in your Google listing; is this the correct contact for addressing them?', '2024-01-18 14:26:23', NULL),
(162, 'Maxeditpro', 'maxeditpro@hotmail.com', 'https://maxeditpro.ru/ MaxEditPro: легко, креативно, профессионально. Редактирование видео и вставка 3D для ваших уникальных проектов.', '2024-01-19 10:01:01', NULL),
(163, 'Iirinabug', 'Wabamoub@gmail.com', 'Hai! Miliki s3x di kota Anda hari ini.  -  http://tinyurl.com/mrxncvuf?bug', '2024-01-19 20:47:34', NULL),
(164, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Hallo, ek wou jou prys ken.', '2024-01-21 13:40:47', NULL),
(165, 'Aleggatorseo', 'aleggatorseo@hotmail.com', 'https://seo-progony.ru/ обращайтесь, отзывы положительные. \r\n \r\nПринимаем в работу все тематики.', '2024-01-22 12:19:24', NULL),
(166, 'CarltonUtent', 'briannamathers1996@gmail.com', 'Beautiful girls are looking for sex for one time only on this site http://bpl.kr/o9B2 \r\n \r\n \r\n \r\n \r\nl7mq1j0l5h1y9c4e \r\ne5wh2o7d5k6r1v7o \r\nz3am2k5i9e2x7a1y', '2024-01-22 14:14:49', NULL),
(167, 'Joshua Walker', 'joshua@airapidprofits.com', 'Hello, may I report some issues I\'ve spotted with your website on Google?', '2024-01-22 16:55:33', NULL),
(168, 'Bobby Ryan', 'heyitsbobbyryan@gmail.com', 'Hi, I noticed a few problems affecting your website on Google, is this a good place to send them?', '2024-01-22 18:30:36', NULL),
(169, 'okeoek', 'okeoke@mail.com', 'okeokeokeokeokeokeokeokeokeoek', '2024-01-23 01:23:14', NULL),
(170, 'Richard Thomas', 'richard@aimoneymakingcourse.com', 'I saw your google, its not, well its not right.    Like where google show customers about your business.  I don\'t want to impose, but there are a couple things that are just not right, may I tell you what they are?', '2024-01-24 01:04:02', NULL),
(171, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2024-01-31 07:15:06', NULL),
(172, 'okifivubi', 'ojoyeerei@a.fastretmail.com', 'http://fjksldhyaodh.com/ - Ubfbodaj <a href=\"http://fjksldhyaodh.com/\">Icigisise</a> bny.hlox.bankwawaylampung.com.fnu.fj http://fjksldhyaodh.com/', '2024-01-31 20:02:07', NULL),
(173, 'okifivubi', 'ojoyeerei@a.fastretmail.com', 'http://fjksldhyaodh.com/ - Ubfbodaj <a href=\"http://fjksldhyaodh.com/\">Icigisise</a> bny.hlox.bankwawaylampung.com.fnu.fj http://fjksldhyaodh.com/', '2024-01-31 20:09:53', NULL),
(174, 'Brent Fouch', 'brentfouch@aiviralvideo.com', 'Can I send you something to help your website use AI?', '2024-02-01 10:58:10', NULL),
(175, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2024-02-03 03:54:05', NULL),
(176, 'Matthew Martinez', 'matthewm@aibestsuite.com', 'Hello, I noticed mistakes in your Google listing. Can I contact you to fix them?', '2024-02-03 08:37:55', NULL),
(177, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2024-02-05 09:35:14', NULL),
(178, 'Juliosiz', 'craigjohnesjr@gmail.com', 'Profitable financing of crypto projects. Secure transactions. Guaranteed advantage. \r\n<a href=https://pageviewergo.top/go/5423v2/74w2?ups=2><b><u>Get it right now! </b></u></a>', '2024-02-05 10:51:52', NULL),
(179, 'Anthony Lewis', 'anthony@rapidprofitmachine1.com', 'Did you see that your website is having performance issues?', '2024-02-06 22:27:40', NULL),
(180, 'Bellahoifs', 'bellahoifs@gmail.com', 'Invest today and become the next millionaire http://go.sekubaiz.com/0m8r', '2024-02-07 17:04:23', NULL),
(181, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2024-02-08 21:36:38', NULL),
(182, 'Robertjed', 'lucido.leinteract@gmail.com', 'Szia, meg akartam tudni az árát.', '2024-02-09 04:08:46', NULL),
(183, 'Bobby Ryan', 'heyitsbobbyryan@gmail.com', 'Hello, I\'ve observed some issues with your website\'s performance on Google. May I send the details here?', '2024-02-11 00:14:53', NULL),
(184, 'Brent Fouch', 'brentfouch@aiviralvideo.com', 'May I send you something to enhance your website with AI?', '2024-02-11 16:40:38', NULL),
(185, 'Grady', 'marydaze2020@gmail.com', 'Hi, I teach businesses like yours on getting new clients. When do you have time for a call this\r\nweek?', '2024-02-12 09:40:20', NULL),
(186, 'Anthony Lewis', 'anthony@rapidprofitmachine1.com', 'Have you noticed that your website is running slowly?', '2024-02-12 13:13:27', NULL),
(187, 'Charlestob', 'cryturbom@gmail.com', '10% in two days, easier than making yourself a cup of coffee! \r\n \r\nhttps://dc-btc.cc/?ref=bc1qe0pjhgnflays7hk3nwmq8lkm5vu04sqc7x5zmz', '2024-02-12 15:25:04', NULL),
(188, 'Brent Fouch', 'brentfouch@aiviralvideo.com', 'Have you noticed your website\'s performance problems?', '2024-02-14 09:18:28', NULL),
(189, 'KuzovdMl', 'yanvorobey94@gmail.com', 'Приветствую. <a href=https://kuzovdetali.by/>kuzovdetali</a> - достойный ассортимент товаров и подбор автозапчастей для кузова авто. Перейдите в интернет-магазин для заказа новых и оригинальных товаров на машины. Гарантия и доставка по РБ.', '2024-02-14 12:06:50', NULL),
(190, 'Wilfred Hirst', 'telesyncai@gmail.com', 'Special promotion: Get started with conversation Ai and boost your business operations for under $1,000 a month. \r\n\r\nDon\'t get left behind; unlock your free 30 minute demonstration here. \r\n\r\nhttps://www.dahbahmdm.com/free-ai-lead-information', '2024-02-14 13:31:16', NULL),
(191, 'ThomasLot', 'yasen.krasen.13+71659@mail.ru', 'Ofokfojfief jwlkfeejereghfj iewojfekfjergij wiojewjfewitghuhwrgtjgh ewjhfwqjhdfuewgtuiwe huegfrwgyewgtywegt bankwawaylampung.com', '2024-02-15 05:31:53', NULL),
(192, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2024-02-15 13:43:44', NULL),
(193, 'Kenneth White', 'kenneth@adamhustle.com', 'Hello, have you seen the issues with your website\'s performance?', '2024-02-16 02:44:11', NULL),
(194, 'Robertjed', 'lucido.leinteract@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2024-02-16 09:24:09', NULL),
(195, 'Changmar', 'istpaingistol@gmail.com', 'Artificial Intelligence is able to create videos. \r\nWhat you think is the first use of that? \r\nOf course, Porn. Are you curious to check it out? \r\nIs free. https://hentai.movie', '2024-02-17 04:37:04', NULL),
(196, 'Steven Clark', 'steven@rapidprofitmachine1.com', 'Do you want to grow your business and get more customers by using expert lead generation services?', '2024-02-17 08:44:39', NULL),
(197, 'Anthony Lewis', 'anthony@rapidprofitmachine1.com', 'Hi, did you see that your website is having performance issues?', '2024-02-18 06:53:38', NULL),
(198, 'Bobby Ryan', 'heyitsbobbyryan@gmail.com', 'I\'ve got some leads that are interested in your company, who/where can I send them?', '2024-02-19 16:35:40', NULL),
(199, 'Davidjed', 'lucido.leinteract@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2024-02-21 20:17:30', NULL),
(200, 'Louis Whiting', 'dodsonlouis79@gmail.com', 'Hi, I made a free video for your business. May I ask if this is the best place to send it?', '2024-02-22 20:48:37', NULL),
(201, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2024-02-24 19:51:30', NULL),
(202, 'Robertjed', 'lucido.leinteract@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2024-02-24 22:34:23', NULL),
(203, 'Olivia Shultz', 'richard@aimoneymakingcourse.com', 'Hi, I noticed a few problems affecting your website on Google, is this a good place to send them?', '2024-02-25 05:41:46', NULL),
(204, 'Catalina Delmonte', 'salcidomedia@gmail.com', 'It’s time to create VIRAL content through our POWERFUL AI tool!\r\nShinefy creates VIRAL content for you in SECONDS!\r\nVisit https://deidre--chasereiner.thrivecart.com/yearly-shinefy-subscription/ now!', '2024-02-25 06:20:13', NULL),
(205, 'Robertjed', 'lucido.leinteract@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-02-25 07:30:48', NULL),
(206, 'LarryNeino', 'arrymed@gmail.com', 'Hello from Sporthappy.', '2024-02-25 09:38:18', NULL),
(207, 'Ernestowal', 'drgreeno@me.com', 'Don\'t Leave Money on the Table: $68,000 – Withdraw Now and Win Big! http://www.tonkinggroup.com.hk/en/fileview.php?file=https%3A%2F%2F9mlnnnst.blogspot.com%3F6387&lang=en&code=8326 \r\n \r\n \r\n \r\n \r\n \r\n \r\no3ud6x7m1g3a3z3t \r\nv5ph8u7g9c3y3z8m \r\nj2qm3p6j1d9a1f0r', '2024-02-26 03:45:32', NULL),
(208, 'Sheldonskisk', 'nitinarora78@gmail.com', 'AUTOMATISIEREN SIE IHREN REICHTUM: VERDIENEN SIE SPIELEND 890.000 EURO PRO WOCHE! http://www.mottimes.com/cht/inner.php?ad=6&target=https%3A%2F%2F5mln-usd.blogspot.com%3F1368 \r\n \r\n \r\n \r\n \r\n \r\n \r\ni0gl4k1q1t5w2s4i \r\nh6no2v7w2a3o7j0w \r\ni6bo8k2n0z8u3x3d', '2024-02-26 13:47:56', NULL),
(209, 'LarryNeino', 'arrymed@gmail.com', 'Hello from Sporthappy.', '2024-02-27 02:06:13', NULL),
(210, 'Monica Walker', 'joshua@airapidprofits.com', 'Hello, I\'ve detected some inconsistencies in your Google listing. Is this the right place to discuss them?', '2024-02-28 07:10:45', NULL),
(211, 'Sheldon Ram', 'sheldonram59@gmail.com', 'Hi,  I\'m looking to buy a business like yours. Can I make you an offer?  \r\nThanks, \r\nSheldon', '2024-02-28 08:17:34', NULL),
(212, 'Jaredpywor', 'adviste.cheplay490@mail.ru', 'HД±zlД± kaydolun! KomЕџunuz pahalД± bir araba aldД±! Bir gГјnde milyoner oldu! TД±klayД±n ve garantili bonusu alД±n Acele et bonusunu al!\r\n ++>> https://siite.com/?gennick<EluhesiZgiferoBN>62', '2024-03-02 01:02:21', NULL),
(213, 'Noverly', 'qyainover@gmail.com', 'Biaya administrasi kalian terlalu besar', '2024-03-05 10:24:22', NULL),
(214, 'Noverly', 'qyainover@gmail.com', 'Biaya administrasi kalian terlalu besar', '2024-03-05 10:24:46', NULL),
(215, 'Bella', 'bellahoifs@gmail.com', 'https://bit.ly/49lS7N0 Huge selection!', '2024-03-05 21:42:43', NULL),
(216, 'Robertjed', 'lucido.leinteract@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2024-03-06 03:51:02', NULL),
(217, 'JaimHully', 'jab1rully@mail.com', 'Halo! Kami mengirimkan kode promosi kepada Anda untuk berpartisipasi dalam proyek crypto traiding bersama kami \r\nKami akan senang melihat Anda di tim kami! Kode promo Anda untuk 0,5 ETH - ILMS24 \r\nJumlah undangan terbatas, daftar - https://cexasia.pro', '2024-03-09 19:14:06', NULL),
(218, 'Robertjed', 'lucido.leinteract@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2024-03-13 05:18:42', NULL),
(219, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-03-14 02:55:27', NULL),
(220, 'Williambon', 'trishcolles@gmail.com', 'Gigantic crypto news in arduous times. \r\n<a href=https://rb.gy/dvef75><b><u>Cosmic crypto prices near you.</b></u></a>', '2024-03-14 07:18:10', NULL),
(221, 'maedelle draheim', 'hcjwhphct.j@monochord.xyz', 'maedelle draheim', '2024-03-16 14:47:52', NULL),
(222, 'Davidjed', 'lucido.leinteract@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2024-03-16 20:50:52', NULL),
(223, 'AnnaGaupt', 'annahoifs@gmail.com', 'https://xn----8sbeamu6abjbbbj3a9e.xn--p1ai/akt-na-spisanie-fasadnoy-kraski-i-kistochki.html here is an article on your topic', '2024-03-17 08:19:02', NULL),
(224, 'SpeedyIndex', 'speedyindex@gmail.com', 'https://bit.ly/3OV6orJ service for fast indexing of links in Google. First result in 48 hours. 100 links for FREE.', '2024-03-19 15:23:36', NULL),
(225, 'RichardLar', 'richardjs@gmail.com', 'Hello, \r\n \r\nNew 2024 club music https://0daymusic.org MP3, FLAC, Music Videos. \r\n \r\n0daymusic Team', '2024-03-20 23:53:18', NULL),
(226, 'Robertjed', 'lucido.leinteract@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2024-03-21 00:24:27', NULL),
(227, 'Seoprogony', 'seoprogony@gmail.com', 'https://seo-progony.ru/ обращайтесь, будем рады Вас видеть в качестве нашего клиента.', '2024-03-21 17:51:02', NULL),
(228, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-03-22 02:04:06', NULL),
(229, 'RichardLar', 'richardjs@gmail.com', 'Hello, \r\n \r\nNew 2024 club music https://0daymusic.org MP3, FLAC, Music Videos. \r\n \r\n0daymusic Team', '2024-03-23 21:21:24', NULL),
(230, 'Seoprogony', 'seoprogony@gmail.com', 'https://seo-progony.ru/ обращайтесь, будем рады Вас видеть в качестве нашего клиента.', '2024-03-24 07:58:09', NULL),
(231, 'kemarcus polgovsky', 'qqbhjtqqtp.j@monochord.xyz', 'kemarcus polgovsky', '2024-03-25 07:51:18', NULL),
(232, 'RichardLar', 'richardjs@gmail.com', 'Hello, \r\n \r\nDownload club music https://0daymusic.org MP3, FLAC, Music Videos. \r\n \r\n0daymusic Team', '2024-03-26 16:34:49', NULL),
(233, 'Hershelbiz', 'chrisrolly72@gmail.com', 'I love getting y\'all right Shitt Too Easy Y’all Better Get In Motion If u Ready for business no bullshit  Join my Telegram : https://t.me/+RTZIjvFh2EJkNTU0', '2024-03-27 09:08:21', NULL),
(234, 'pMVtWZqbYHoAO', 'poojankoniahp@outlook.com', 'WSCjyufsNaVPBGA', '2024-03-27 21:30:08', NULL),
(235, 'pMVtWZqbYHoAO', 'poojankoniahp@outlook.com', 'WSCjyufsNaVPBGA', '2024-03-27 21:30:11', NULL),
(236, 'pMVtWZqbYHoAO', 'poojankoniahp@outlook.com', 'WSCjyufsNaVPBGA', '2024-03-27 21:30:14', NULL),
(237, 'earnstine milheim', 'qddmjmmjmb.j@monochord.xyz', 'earnstine milheim', '2024-03-29 12:29:36', NULL),
(238, 'Jessetobia', 'serverpromomusic@gmail.com', 'Hello, \r\n \r\nNew club music, private server MP3/FLAC, Label, LIVESETS, Music Videos https://0daymusic.org \r\nAvailable only on our secure FTP server. \r\n \r\n0daymusic Team', '2024-03-29 21:16:54', NULL),
(239, 'Robertjed', 'lucido.leinteract@gmail.com', 'Здравейте, исках да знам цената ви.', '2024-04-01 16:47:20', NULL),
(240, 'Robertjed', 'lucido.leinteract@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2024-04-03 14:27:33', NULL),
(241, 'Davidjed', 'lucido.leinteract@gmail.com', 'Hola, volia saber el seu preu.', '2024-04-05 11:49:13', NULL),
(242, 'BlackSun', 'sugarwork78@gmail.com', 'Never miss a beat with your website\'s performance. Receive real-time alerts on messenger apps and stay proactive with this solution https://listings.surge.sh/posts/uptime-kuma/', '2024-04-08 11:02:29', NULL),
(243, 'Robertjed', 'lucido.leinteract@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2024-04-10 20:32:58', NULL),
(244, 'Brent Fouch', 'brentfouch@aiviralvideo.com', 'May I buy either your Facebook page or your Instagram account or both?\r\nPlease tell me here\r\nhttps://sellyourfbpage.com/', '2024-04-11 08:19:53', NULL),
(245, 'Kenneth White', 'kenneth@adamhustle.com', 'May I purchase your Instagram account and your Facebook page?\r\nPlease let me know here\r\nhttps://sellyourfbpage.com/', '2024-04-11 13:34:39', NULL),
(246, 'Steven Clark', 'steven@rapidprofitmachine1.com', 'Can I buy your Facebook page and your Instagram account?\r\nLet me know here\r\nhttps://sellyourfbpage.com/', '2024-04-11 15:42:55', NULL),
(247, 'Robertjed', 'lucido.leinteract@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2024-04-13 11:23:14', NULL),
(248, 'Brent Fouch', 'brentfouch@aiviralvideo.com', 'May I buy either your Facebook page or your Instagram account or both?\r\nPlease tell me here\r\nhttps://sellyourfbpage.com/', '2024-04-13 19:57:06', NULL),
(249, 'Robertjed', 'lucido.leinteract@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2024-04-20 21:41:27', NULL),
(250, 'JasonTunda', 'yasen.krasen.13+73947@mail.ru', 'Odowidjwoidwo wojdwkslqmwjfbjjdwkd jkwlsqswknfbjwjdmkqendj kedwjdbwhbdqjswkdwjfj eqwkdwknf bankwawaylampung.com', '2024-04-23 09:46:03', NULL),
(251, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2024-04-24 09:46:56', NULL),
(252, 'Kenneth White', 'kenneth@adamhustle.com', 'Curious if you would be willing the part with your Facebook page or your instagram account or both?\r\n\r\nIf so can you give me a bit more info here please\r\nhttps://sellyourfbpage.com/', '2024-04-26 13:36:58', NULL),
(253, 'RobinLomia', 'schulenberg-leuckel@madu58.funny3delements.com', '<a href=\"https://mfc-sosnovskoe.ru\">Казино с пополнением с Qiwi', '2024-04-27 08:02:36', NULL),
(254, 'Robertjed', 'lucido.leinteract@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2024-04-28 18:46:09', NULL),
(255, 'XRumer23hoifs', 'xrumer23hoifs@gmail.com', 'Bases for Xrumer https://dims-tudio.ru', '2024-04-30 10:48:13', NULL),
(256, 'gianidistributionltd', 'gianidistributionltd@gmail.com', 'https://www.gianidistributionltd.com/   Great price! \r\n \r\n+39 351 017 0186 WhatsApp', '2024-05-02 20:14:34', NULL),
(257, 'Robertjed', 'lucido.leinteract@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-05-07 02:06:26', NULL),
(258, 'PbUkWniAjHecoGJs', 'smith.emily6125@yahoo.com', 'YhHeltfRpcugsjWo', '2024-05-09 02:31:42', NULL),
(259, 'PbUkWniAjHecoGJs', 'smith.emily6125@yahoo.com', 'YhHeltfRpcugsjWo', '2024-05-09 02:31:45', NULL),
(260, 'PbUkWniAjHecoGJs', 'smith.emily6125@yahoo.com', 'YhHeltfRpcugsjWo', '2024-05-09 02:31:48', NULL),
(261, 'Robertref', 'maski8rully@hotmail.com', 'Selamat siang! Kami memberi Anda kode promo - ZBXM777 \r\nAktifkan di akun pribadi Anda setelah mendaftar di www.cexasia.pro \r\nDan Anda akan menerima hingga 1000 USDT untuk deposit Anda. Selamat berdagang!', '2024-05-09 18:54:02', NULL),
(262, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', '2024-05-11 06:35:31', NULL),
(263, 'Robertjed', 'lucido.leinteract@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2024-05-13 16:59:55', NULL),
(264, 'HhigpEIZ', 'hahnlashonda5258@gmail.com', 'ZfcXlykmILRqrsj', '2024-05-16 04:22:38', NULL),
(265, 'HhigpEIZ', 'hahnlashonda5258@gmail.com', 'ZfcXlykmILRqrsj', '2024-05-16 04:22:44', NULL),
(266, 'Abussana', 'agilqvc@gmail.com', 'Bagaimana cara mengajukan pinjaman', '2024-05-17 08:26:35', NULL),
(267, 'XRumer23hoifs', 'xrumer23hoifs@gmail.com', 'Bases for Xrumer https://dims-tudio.ru', '2024-05-17 17:29:30', NULL),
(268, 'Jolene Kincaid', 'kincaid.jolene@gmail.com', 'Your site seems to be broken in a few areas.\r\nFind the issues here: https://brokensitefix.com', '2024-05-24 22:02:42', NULL),
(269, 'Horny Girl', 'cheryle.zimmer@gmail.com', 'My live cam is here: https://chatxcamy.com', '2024-05-25 06:47:39', NULL),
(270, 'Williamatmof', 'gatesofolumpus1000@mail.ro', '<a href=https://gates-of-olympus-1000.fun/>играть gates of olympus 1000</a>', '2024-05-26 02:26:39', NULL),
(271, 'DwJeRIaEKsSpVvYq', 'noelh7429@gmail.com', 'kynclJqdYxfzCZI', '2024-05-26 17:27:24', NULL),
(272, 'DwJeRIaEKsSpVvYq', 'noelh7429@gmail.com', 'kynclJqdYxfzCZI', '2024-05-26 17:27:25', NULL),
(273, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2024-05-27 00:40:04', NULL),
(274, 'Davidjed', 'lucido.leinteract@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-05-27 14:06:48', NULL),
(275, 'Kyle Smith', 'emailaudits@gmail.com', 'Hi, I\'m Kyle. I\'d like to volunteer my web building and marketing skills. I believe volunteering is one of the best ways to connect with new people so I\'d like to donate some time to you. Text me at +1 803 574 9421 Talk soon, -Kyle', '2024-05-29 12:35:38', NULL),
(276, 'AndrewStync', 'readytostartcr@gmail.com', 'Самые последние новости по сделкам с криптобирж. К вашим услугами вся оперативная инфа для успешного трейдинга. Обучаем новичков к самостоятельному старту. \r\n<a href=https://bit.ly/3xMLoxu><b><u>Будьте с нами и будьте всегда в тренде!</a></b></u>', '2024-05-29 21:32:37', NULL),
(277, 'Masonjed', 'kaenquirynicholls@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2024-05-30 05:08:50', NULL),
(278, 'RleTvPDscg', 'cliffordrz_mathess3@outlook.com', 'hTmbIMsDPFxCEGz', '2024-05-30 12:03:56', NULL),
(279, 'RleTvPDscg', 'cliffordrz_mathess3@outlook.com', 'hTmbIMsDPFxCEGz', '2024-05-30 12:03:58', NULL),
(280, 'Amandacruitsb', 'amandaLorpoicy1@gmail.com', 'Hei sayang, mau nongkrong? -  https://rb.gy/7xb976?Apesse', '2024-06-03 19:14:14', NULL),
(281, 'Robertjed', 'algebraically.pawlo@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2024-06-03 22:37:38', NULL),
(282, 'VodaMarket', 'voda@yandex.ru', 'https://www.wildberries.ru/catalog/176740466/detail.aspx?targetUrl=EX широкий выбор подставок.', '2024-06-05 22:13:31', NULL),
(283, 'Phil Stewart', 'noreplyhere@aol.com', 'I was interested in whether or not you would like me to blast your ad to millions of contact forms. You\'re reading this message so you know others will read yours the same way. Take a peek at my site below for info\r\n\r\nhttp://l69wxc.blast-to-forms.xyz', '2024-06-10 08:40:10', NULL),
(284, 'Earnestine Mackinlay', 'earnestine.mackinlay@gmail.com', 'Hi, I was trying to contact the business owner because I found a great system for marketing and automation.  Go High Level is the name of the game and you get 14 days for free in using this link.\r\n https://shorturl.at/c9O0A', '2024-06-10 09:08:18', NULL),
(285, 'Davidjed', 'algebraically.pawlo@gmail.com', 'Ola, quería saber o seu prezo.', '2024-06-10 09:24:41', NULL),
(286, 'hoifs', 'donor@sendservice.pro', '10% for 2 days, link >>> http://dc-btc.space', '2024-06-11 21:02:48', NULL),
(287, 'Masonjed', 'alden.provitt773@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2024-06-12 18:27:48', NULL),
(288, 'Lilliana Rotz', 'rotz.lilliana43@hotmail.com', 'Hey, you might need a better system for automation, CRM, Tools, etc - Geta 100% FREE 14 Day trial here:  https://shorturl.at/c9O0A', '2024-06-14 10:09:17', NULL),
(289, 'Andrewlib', 'datingsforsouls@gmail.com', 'Try <a href=https://bit.ly/3RcVqyK><b>HARD</b></a> sex \r\nOR \r\nTry <a href=https://bit.ly/4aRJr0C><b>SOFT</b></a> sex \r\nYour decision?', '2024-06-15 04:06:45', NULL),
(290, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2024-06-15 18:16:54', NULL),
(291, 'xQPurjIioSdlnLh', 'kbridgessh@gmail.com', 'jomtUVzCZWRBgdLG', '2024-06-17 09:01:10', NULL),
(292, 'xQPurjIioSdlnLh', 'kbridgessh@gmail.com', 'jomtUVzCZWRBgdLG', '2024-06-17 09:01:14', NULL);
INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(293, 'XRumer23hoifs', 'xrumer23hoifs@gmail.com', 'Hey people!!!!! \r\nGood mood and good luck to everyone!!!!!', '2024-06-20 02:07:27', NULL),
(294, 'Davidjed', 'cautioningsehomogen@gmail.com', 'Hola, volia saber el seu preu.', '2024-06-20 08:11:53', NULL),
(295, 'VoFZsDIncHuNXp', 'melissa13jacobewr@outlook.com', 'bQqpiaJySglNhAKw', '2024-06-20 18:04:31', NULL),
(296, 'VoFZsDIncHuNXp', 'melissa13jacobewr@outlook.com', 'bQqpiaJySglNhAKw', '2024-06-20 18:04:33', NULL),
(297, 'VoFZsDIncHuNXp', 'melissa13jacobewr@outlook.com', 'bQqpiaJySglNhAKw', '2024-06-20 18:04:41', NULL),
(298, 'X23hoifs', 'xrumer23hoifs@gmail.com', 'Hey people!!!!! \r\nGood mood and good luck to everyone!!!!!', '2024-06-20 20:27:35', NULL),
(299, 'Bob Jimerson', 'jimersonbob6@gmail.com', 'Hey, I noticed a few issues with your website, do you have a second to chat, I\'d love to help get them fixed free of charge. Respond, \"yes\" if you\'re interested.', '2024-06-22 07:15:45', NULL),
(300, 'Bob', 'jimersonbob6@gmail.com', 'Hi, I did a free marketing video for your website, is this a good place to send it?\r\nPlease fill out your info here if so: https://freevideoservice.com/', '2024-06-28 02:46:55', NULL),
(301, 'SpeedyIndexBot', 'speedyindexbot@gmail.com', 'https://bit.ly/3OV6orJ SpeedyIndexBot - service for indexing of links in Google. First result in 48 hours. 200 links for FREE.', '2024-06-28 16:17:12', NULL),
(302, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2024-07-04 13:28:21', NULL),
(303, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2024-07-07 08:10:49', NULL),
(304, 'Davidamouh', 'tracysitsler@gmail.com', 'Get a Definite $11,000 In Exactly 24 Hours. Click here >>>>> https://trk.mail.ru/c/gctk29?ID1454', '2024-07-07 13:42:38', NULL),
(305, 'Tiffany Hubbs', 'blair.hubbs17@hotmail.com', 'I\'m so horny right now. I hope you can help me masturbate.\r\n\r\nhttps://tiffanycamgirl.com', '2024-07-08 09:30:19', NULL),
(306, 'SpeedyIndexBot', 'speedyindexbot@gmail.com', 'https://bit.ly/3OV6orJ SpeedyIndexBot - service for indexing of links in Google. First result in 48 hours. 200 links for FREE.', '2024-07-09 07:23:41', NULL),
(307, 'Hootie', 'info@beckmanandassociates.com', 'Hey everyone! Interested in a cool blockchain adventure? Join me in playing Notcoin! Simple to start. Join my team! Click here: http://tiny.cc/notcoinz', '2024-07-12 11:29:59', NULL),
(308, 'Amandacruits2', 'amandaLorpoicyb@gmail.com', 'Hei sayang, mau nongkrong? -  https://is.gd/2xVU7z?crarm', '2024-07-13 05:40:21', NULL),
(309, 'Davidjed', 'kayleighbpsteamship@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-07-15 07:13:37', NULL),
(310, 'Sandraevoda', 'mystichelptoday@gmail.com', '<b>House, Family, Good Job</b> - \r\n<a href=https://bit.ly/4ckS5WB><b><u>Find Your Success Way Right Now!</u></b></a>', '2024-07-15 21:28:23', NULL),
(311, 'Davidjed', 'kayleighbpsteamship@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2024-07-16 00:22:31', NULL),
(312, 'Sandraevoda', 'mystichelptoday@gmail.com', '<b>House, Family, Good Job</b> - \r\n<a href=https://bit.ly/4ckS5WB><b><u>Find Your Success Way Right Now!</u></b></a>', '2024-07-16 12:39:31', NULL),
(313, 'Tedjed', 'yjdisantoyjdissemin@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-07-16 21:08:28', NULL),
(314, 'Amandacruits2', 'amandaLorpoicyb@gmail.com', 'Hei sayang, mau nongkrong? -  http://surl.li/ulebc?crarm', '2024-07-19 10:45:10', NULL),
(315, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Hallo, ek wou jou prys ken.', '2024-07-19 20:58:01', NULL),
(316, 'Amandacruitsa', 'amandaLorpoicy1@gmail.com', 'Saya sudah nakal, ingin membantu saya dengan itu?) -  https://goo.su/zARWg?crarm', '2024-07-22 21:56:35', NULL),
(317, 'Robertutibe', 'yasen.krasen.13+93597@mail.ru', 'Ofedkwdkjwkjdkwjdkjw jdwidjwijdwfw fjdkqwasqfoewofjewof ojqwejfqwkdokjwofjewofjewoi bankwawaylampung.com', '2024-07-26 07:46:35', NULL),
(318, 'Amandacruitsa', 'amandaLorpoicy2@gmail.com', 'Saya sudah nakal, ingin membantu saya dengan itu?) -  https://rb.gy/7rnhss?Apesse', '2024-07-26 16:33:16', NULL),
(319, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Hola, volia saber el seu preu.', '2024-07-28 12:29:57', NULL),
(320, 'Amandacruits1', 'amandaLorpoicy1@gmail.com', 'Tidak sabar untuk menunjukkan waktu yang menyenangkan malam ini. -  https://goo.su/zARWg?crarm', '2024-07-28 20:17:34', NULL),
(321, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2024-07-29 08:58:51', NULL),
(322, 'Amandacruitsb', 'amandaLorpoicyc@gmail.com', 'Saya sudah nakal, ingin membantu saya dengan itu?) -  https://goo.su/zARWg?crarm', '2024-07-30 03:17:00', NULL),
(323, 'Phil Stewart', 'noreplyhere@aol.com', 'Curious about getting your ad seen by millions? I sent this message to your contact form, and here you are reading it! Visit my site below to find out more.\r\n\r\nhttp://m2x0f4.contactformmarketing.xyz', '2024-07-31 00:08:30', NULL),
(324, 'Davidgeota', 'kapiton.dyakonov@yandex.ru', 'Как выиграть iPhone 15 PRO: Полезные советы  - https://1l1.su/LPIx', '2024-07-31 03:56:57', NULL),
(325, 'Amandacruitsa', 'amandaLorpoicy2@gmail.com', 'Tidak sabar untuk menunjukkan waktu yang menyenangkan malam ini. -  https://rb.gy/7rnhss?Apesse', '2024-08-01 12:25:32', NULL),
(326, 'Brian Zook', 'brianw9655@gmail.com', 'Hey!\r\n\r\nI’d love to help volunteer and be your video expert!\r\n\r\nI have a video that I made for your site but before I send it I just want to ask if you have time to chat afterwards about it.\r\n\r\nLet  me know,\r\n\r\nBrian', '2024-08-01 19:21:31', NULL),
(327, 'Kennethmus', 'kennethgaw@gmail.com', '<a href=https://gogocasino.one>https://gogocasino.one</a>', '2024-08-03 23:50:16', NULL),
(328, 'cBjoCesVMg', 'kleirkt@gmail.com', 'fuxklGKwLMiJWDdC', '2024-08-04 07:53:16', NULL),
(329, 'cBjoCesVMg', 'kleirkt@gmail.com', 'fuxklGKwLMiJWDdC', '2024-08-04 07:53:20', NULL),
(330, 'ThomasSmare', 'tropicar@bigpond.com', 'AMAZING WIN: IPHONE 16 PRO MAX http://anifre.com/out.html?go=https%3A%2F%2Ftelegra.ph%2Fiphone-07-06-5%3F5038', '2024-08-04 16:24:58', NULL),
(331, 'ThomasSmare', 'nshah01@icloud.com', 'Big Congratulations iPhone 16 Pro Max https://www.forodvd.com/redirect-to/?redirect=https%3A%2F%2Ftelegra.ph%2Fiphone-07-06-5%3F6938', '2024-08-06 04:56:56', NULL),
(332, 'MtfyCaqFKZDiuw', 'ksavaiorhendricks506@gmail.com', 'LQWecKzoYufDsUH', '2024-08-07 16:33:28', NULL),
(333, 'MtfyCaqFKZDiuw', 'ksavaiorhendricks506@gmail.com', 'LQWecKzoYufDsUH', '2024-08-07 16:33:31', NULL),
(334, 'ebXlHrKMVQYoT', 'ksavaiorhendricks506@gmail.com', 'RkNUjKJnDoYMzra', '2024-08-07 16:33:36', NULL),
(335, 'ebXlHrKMVQYoT', 'ksavaiorhendricks506@gmail.com', 'RkNUjKJnDoYMzra', '2024-08-07 16:33:39', NULL),
(336, 'Richardjat', 'madpleasureforyou@gmail.com', '<b>Show your wildness</b> - <a href=https://psee.io/663bfw><b>satisfy your sexual desire right now!</b></a>', '2024-08-08 02:07:43', NULL),
(337, 'Alex Holmes', 'realalexholmes@gmail.com', 'I noticed an issue on your website, I\'d like to help fix it for you here: https://alexholme.com/', '2024-08-09 04:21:38', NULL),
(338, 'BplxiAuMVL', 'evex2_bloomog@outlook.com', 'rCdxGbBetYcHQPNo', '2024-08-10 19:01:40', NULL),
(339, 'BplxiAuMVL', 'evex2_bloomog@outlook.com', 'rCdxGbBetYcHQPNo', '2024-08-10 19:01:44', NULL),
(340, 'Mas Houdy', 'mashoudyprabu@gmail.com', 'Kami PT.Ternak Sapi Nusantara Tengah,', '2024-08-11 07:31:08', NULL),
(341, 'Davidjed', 'kayleighbpsteamship@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2024-08-13 17:36:17', NULL),
(342, 'MarvinMax', 'mmohsinnawaz359@gmail.com', 'GRAB YOUR $50,000 WINNINGS: CLAIM TODAY https://script.google.com/macros/s/AKfycbzKQpW8lTGNcvkDn_wAxvb2sL9S7luoRrLTGM5dC15HH3sNobjBMw_XPgBHFScsavcxHQ/exec', '2024-08-14 08:10:27', NULL),
(343, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2024-08-14 17:10:45', NULL),
(344, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbuj@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:21:28', NULL),
(345, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbuz@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:21:36', NULL),
(346, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbue@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:21:40', NULL),
(347, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbub@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:21:42', NULL),
(348, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbub@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:21:51', NULL),
(349, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbur@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:21:58', NULL),
(350, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'aesbsbrbua@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-15 14:22:01', NULL),
(351, 'Phil Stewart', 'noreplyhere@aol.com', 'Hey, want your ad to reach millions of contact forms? Just like you\'re reading this message, others can read yours too. Visit my site below for details.\r\n\r\nhttp://lqn6n6.contactformmarketing.xyz', '2024-08-15 17:30:51', NULL),
(352, 'Tonyjed', 'kayleighbpsteamship@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2024-08-16 21:45:50', NULL),
(353, 'fYcDaUhXsB', 'abnarmrj1055@gmail.com', 'atRQceSDHCgLhIby', '2024-08-17 02:42:50', NULL),
(354, 'fYcDaUhXsB', 'abnarmrj1055@gmail.com', 'atRQceSDHCgLhIby', '2024-08-17 02:42:54', NULL),
(355, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-08-17 10:29:14', NULL),
(356, 'Miquel', 'info@oldaker.pawsafer.net', 'PawSafer™ Can Safely Trim Your Dog\'S Nails In No Time From Home.\r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: https://pawsafer.net\r\n \r\nCheers, \r\n \r\nMiquel', '2024-08-18 09:29:16', NULL),
(357, 'Amandacruitsa', 'amandaLorpoicy1@gmail.com', 'Saya sudah nakal, ingin membantu saya dengan itu?) -  https://goo.su/zARWg?crarm', '2024-08-18 21:24:30', NULL),
(358, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiuj@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:07', NULL),
(359, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiuz@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:13', NULL),
(360, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiue@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:16', NULL),
(361, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiub@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:18', NULL),
(362, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiub@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:23', NULL),
(363, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiur@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:25', NULL),
(364, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'szljmaeiua@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-19 06:01:26', NULL),
(365, 'dmgybTLFus', 'howard.kim2003@yahoo.com', 'VUfEMyrluAHkBnN', '2024-08-19 08:11:57', NULL),
(366, 'dmgybTLFus', 'howard.kim2003@yahoo.com', 'VUfEMyrluAHkBnN', '2024-08-19 08:12:01', NULL),
(367, 'Davidjed', 'kayleighbpsteamship@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2024-08-19 21:13:27', NULL),
(368, 'Tedjed', 'yjdisantoyjdissemin@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2024-08-23 07:01:17', NULL),
(369, 'RamonLUg', 'sutcliffecourtney@myyahoo.com', 'CRITICAL: YOUR BALANCE IS $50,000—WITHDRAW NOW https://script.google.com/macros/s/AKfycbxW-h1RncjiTInqgrt0HAkL8dgIxULGM2F-mezPQixaCa2p2a7_v9626_bGlz8nsTFIFg/exec', '2024-08-23 12:35:22', NULL),
(370, 'RamonLUg', 'rose_red2006@yahoo.com', 'Withdraw Urgently: Balance Is $50,000 https://script.google.com/macros/s/AKfycbyd-QfgUVGxMfUsxK4XOArYGtEC20ZXmxqIbOqW93J7jkHy06djRZ260lP6YGqaE4g9jQ/exec', '2024-08-24 21:28:51', NULL),
(371, 'Amandacruits2', 'amandaLorpoicyc@gmail.com', 'Saya sudah nakal, ingin membantu saya dengan itu?) -  https://goo.su/zARWg?crarm', '2024-08-24 23:45:24', NULL),
(372, 'KBZWrnGq', 'deiterjeffery5744@yahoo.com', 'RwQnDBkYsEPdjxG', '2024-08-25 07:46:10', NULL),
(373, 'KBZWrnGq', 'deiterjeffery5744@yahoo.com', 'RwQnDBkYsEPdjxG', '2024-08-25 07:46:11', NULL),
(374, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2024-08-25 14:57:07', NULL),
(375, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjuj@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:41:49', NULL),
(376, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjuz@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:41:59', NULL),
(377, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjue@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:42:03', NULL),
(378, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjub@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:42:05', NULL),
(379, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjub@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:42:09', NULL),
(380, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjur@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:42:10', NULL),
(381, '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', 'zzbmsjimjua@solid-hamster.skin', '1E5TMy21DM2cR13sQbLukgKBkR3ZSaRbeB', '2024-08-26 12:42:12', NULL),
(382, 'Amandacruits3', 'amandaLorpoicya@gmail.com', 'Tidak sabar untuk menunjukkan waktu yang menyenangkan malam ini. -  https://goo.su/zARWg?crarm', '2024-08-26 15:14:51', NULL),
(383, 'Amandacruits2', 'amandaLorpoicya@gmail.com', 'Jelajahi profil saya, mari buat itu tak terlupakan. -  https://goo.su/zARWg?crarm', '2024-08-30 12:20:49', NULL),
(384, 'Amandacruits2', 'amandaLorpoicya@gmail.com', 'Ingin melihat lebih banyak? Periksa profil saya sekarang. -  https://rb.gy/7rnhss?Apesse', '2024-08-31 21:44:53', NULL),
(385, 'Amandacruits1', 'amandaLorpoicy2@gmail.com', 'Ingin melihat lebih banyak? Periksa profil saya sekarang. -  https://rb.gy/7rnhss?Apesse', '2024-09-03 00:07:21', NULL),
(386, 'Phil Stewart', 'noreplyhere@aol.com', 'Hi, would you be interested in having your ad reach millions of contact forms just like this one did? Check out my site below for more details.\r\n\r\nhttp://lcxgze.contactuspagemarketing.xyz', '2024-09-03 08:02:50', NULL),
(387, 'Amandacruits1', 'amandaLorpoicy3@gmail.com', 'Jelajahi profil saya, mari buat itu tak terlupakan. -  https://rb.gy/7rnhss?Apesse', '2024-09-04 22:01:13', NULL),
(388, 'EeJGBPYVmCDx', 'eliotc518@gmail.com', 'XJNlxCqDUfAyTakb', '2024-09-06 04:25:13', NULL),
(389, 'EeJGBPYVmCDx', 'eliotc518@gmail.com', 'XJNlxCqDUfAyTakb', '2024-09-06 04:25:18', NULL),
(390, 'Tedjed', 'kayleighbpsteamship@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-09-06 16:45:01', NULL),
(391, 'Amandacruits2', 'amandaLorpoicya@gmail.com', 'Ingin melihat lebih banyak? Periksa profil saya sekarang. -  https://goo.su/zARWg?crarm', '2024-09-08 18:16:01', NULL),
(392, 'Amandacruitsb', 'amandaLorpoicy3@gmail.com', 'Jelajahi profil saya, mari buat itu tak terlupakan. -  https://goo.su/zARWg?crarm', '2024-09-09 21:42:01', NULL),
(393, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2024-09-11 02:54:06', NULL),
(394, 'Tedjed', 'kayleighbpsteamship@gmail.com', 'Ola, quería saber o seu prezo.', '2024-09-11 10:39:55', NULL),
(395, 'Phil Stewart', 'noreplyhere@aol.com', 'Hey, want your ad to reach millions of contact forms? Just like you\'re reading this message, others can read yours too. Visit my site below for details.\r\n\r\nhttp://tmj47s.contactuspagemarketing.xyz', '2024-09-11 18:22:44', NULL),
(396, '24hoifs', '24hoifs@gmail.com', 'Hey people!!!!! \r\nGood mood and good luck to everyone!!!!!', '2024-09-12 18:33:39', NULL),
(397, 'Amandacruitsa', 'amandaLorpoicy3@gmail.com', 'Ingin melihat lebih banyak? Periksa profil saya sekarang. -  https://rb.gy/7rnhss?Apesse', '2024-09-12 20:02:13', NULL),
(398, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2024-09-13 02:47:29', NULL),
(399, 'Davidjed', 'kayleighbpsteamship@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-09-15 06:46:12', NULL),
(400, 'Paulette Borelli', 'paulette.borelli@gmail.com', 'Seeking the best financial support for your business growth? Look no further! Our business loan packages are crafted to help you expand seamlessly. Email us at info@financeworldwidehk.com to get started today!\r\n\r\nBest regards,\r\nLaura Cha', '2024-09-16 15:03:03', NULL),
(401, 'Amandacruits1', 'amandaLorpoicya@gmail.com', 'Ingin melihat lebih banyak? Periksa profil saya sekarang. -  https://rb.gy/7rnhss?Apesse', '2024-09-16 22:08:47', NULL),
(402, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Hi, I wanted to know your price.', '2024-09-20 12:03:58', NULL),
(403, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-09-20 12:46:25', NULL),
(404, 'Amandacruitsa', 'amandaLorpoicya@gmail.com', 'Jelajahi profil saya, mari buat itu tak terlupakan. -  https://rb.gy/7rnhss?Apesse', '2024-09-20 17:26:51', NULL),
(405, 'Amandacruits2', 'amandaLorpoicyc@gmail.com', 'Ingin melihat lebih banyak? Periksa profil saya sekarang. -  https://rb.gy/7rnhss?Apesse', '2024-09-22 20:47:48', NULL),
(406, 'Davidjed', 'kayleighbpsteamship@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2024-09-23 03:44:08', NULL),
(407, 'Tedjed', 'kayleighbpsteamship@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2024-09-23 22:52:31', NULL),
(408, 'Tedjed', 'kayleighbpsteamship@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2024-09-23 23:43:17', NULL),
(409, 'Amandacruits2', 'amandaLorpoicyc@gmail.com', 'Mendekatlah, temukan aku menunggu di profilku. -  https://rb.gy/ycu4is/?Apesse', '2024-09-27 07:05:37', NULL),
(410, 'Phil Stewart', 'noreplyhere@aol.com', 'Ever thought about having your ad blasted to millions of contact forms? You\'re reading this message, so you know it works! Check out my site below for more info.\r\n\r\nhttp://x8hq9s.contactuspagemarketing.xyz', '2024-09-28 23:37:14', NULL),
(411, 'Amandacruits3', 'amandaLorpoicy2@gmail.com', 'Penasaran? Selami lebih dalam dan temukan aku di sini sekarang. -  https://bit.ly/3Y2npoM?Apesse', '2024-10-01 02:23:19', NULL),
(412, 'Masonjed', 'yjdisantoyjdissemin@gmail.com', 'Hallo, ek wou jou prys ken.', '2024-10-01 02:37:23', NULL),
(413, 'Marie Hanks', 'marie.hanks11@msn.com', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com\r\n\r\nStruggling to rank on Google? Our SEO experts can help. Contact es.olus@gmail.com', '2024-10-02 05:17:44', NULL),
(414, 'Amandacruits2', 'amandaLorpoicy1@gmail.com', 'Mendekatlah, temukan aku menunggu di profilku. -  https://rb.gy/ycu4is?Apesse', '2024-10-03 04:10:17', NULL),
(415, 'X22hoifs', 'cywozkvsrEt@xruma.store', 'Hey people!!!!! \r\nGood mood and good luck to everyone!!!!!', '2024-10-03 21:56:28', NULL),
(416, 'Amandacruitsc', 'amandaLorpoicy2@gmail.com', 'Penasaran? Selami lebih dalam dan temukan aku di sini sekarang. -  https://rb.gy/ycu4is?Apesse', '2024-10-05 12:53:57', NULL),
(417, 'Tedjed', 'kayleighbpsteamship@gmail.com', 'Szia, meg akartam tudni az árát.', '2024-10-07 15:48:01', NULL),
(418, 'Masonjed', 'agavapicod390@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2024-10-07 23:40:10', NULL),
(419, 'Masonjed', 'yawiviseya67@gmail.com', 'Hola, quería saber tu precio..', '2024-10-11 12:55:36', NULL),
(420, 'Davidjed', 'ibucezevuda439@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2024-10-11 16:56:15', NULL),
(421, 'Masonjed', 'somasesokiyo31@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-10-12 02:36:02', NULL),
(422, 'Tedjed', 'axobajigufo34@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-10-12 14:19:40', NULL),
(423, 'Cecilamosy', 'sharonforet1900@microoremail.ru', 'Лучшие базы для Xrumer и GSA Search Engine Ranker по самым лучшим ценам \r\nhttps://dseo24.monster \r\nОнлайн магазин баз для Xrumer и GSA     лучшие цены', '2024-10-13 13:16:30', NULL),
(424, 'Marion', 'marion@baile.thawking.shop', 'Hi \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thawking.shop\r\n \r\nTo your success, \r\n \r\nMarion', '2024-10-13 14:14:46', NULL),
(425, 'Sssrhoifs', 'oleghoifs@gmail.com', 'Добро пожаловать https://vk.com/club46394899', '2024-10-13 23:51:07', NULL),
(426, 'Amandacruits2', 'amandaLorpoicy2@gmail.com', 'Saya tidak bisa menunggu lebih lama lagi... datanglah malam ini dan mari kita membuatnya tak terlupakan. -  https://rb.gy/ycu4is?Apesse', '2024-10-14 04:55:27', NULL),
(427, 'Amandacruitsa', 'amandaLorpoicy2@gmail.com', 'Saya tidak bisa menunggu lebih lama lagi... datanglah malam ini dan mari kita membuatnya tak terlupakan. -  https://rb.gy/ycu4is?Apesse', '2024-10-16 13:34:04', NULL),
(428, 'Amandacruits3', 'amandaLorpoicy2@gmail.com', 'Saya tidak bisa menunggu lebih lama lagi... datanglah malam ini dan mari kita membuatnya tak terlupakan. -  https://rb.gy/ycu4is?Apesse', '2024-10-19 09:47:41', NULL),
(429, 'Amandacruits3', 'amandaLorpoicyb@gmail.com', 'Saya tidak bisa menunggu lebih lama lagi... datanglah malam ini dan mari kita membuatnya tak terlupakan. -  https://rb.gy/ycu4is?Apesse', '2024-10-20 06:29:03', NULL),
(430, 'Davidjed', 'ibucezevuda439@gmail.com', 'Здравейте, исках да знам цената ви.', '2024-10-20 12:51:43', NULL),
(431, 'Masonjed', 'duqotayowud23@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2024-10-22 14:33:48', NULL),
(432, 'Tedjed', 'axobajigufo34@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2024-10-22 23:08:57', NULL),
(433, 'RobertFisee', 'dvdvvevveve@gmail.com', 'President of Russia support Kamala Harris \r\n \r\nhttps://www.oklahoman.com/story/news/2024/09/06/did-vladimir-putin-endorse-kamala-harris-fact-check-conference-comment-russia/75106285007/', '2024-10-25 00:24:22', NULL),
(434, 'GeorgeDam', 'dfdfdfdfddfddfgeaeb@gmail.com', 'President of Russia support Kamala Harris \r\n \r\nhttps://www.oklahoman.com/story/news/2024/09/06/did-vladimir-putin-endorse-kamala-harris-fact-check-conference-comment-russia/75106285007/', '2024-10-25 23:28:17', NULL),
(435, 'Amandacruitsa', 'amandaLorpoicya@gmail.com', 'Saya tidak bisa menunggu lebih lama lagi... datanglah malam ini dan mari kita membuatnya tak terlupakan. -  https://rb.gy/ycu4is?Apesse', '2024-10-26 02:40:36', NULL),
(436, 'Tedjed', 'axobajigufo34@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2024-10-27 06:46:15', NULL),
(437, 'Amandacruitsa', 'amandaLorpoicy2@gmail.com', 'Aku menginginkanmu malam ini... hanya kami berdua, tidak ada gangguan -  https://rb.gy/ycu4is?Apesse', '2024-10-27 23:50:49', NULL),
(438, 'RoLouct', 'emilyjonesg89@gmail.com', 'Struggling with your weight loss journey? This simple trick changes everything. Its fast, takes only minutes, and youll see results fast. Click here to get the details.  https://sites.google.com/view/mystory12?Louct \r\n \r\n \r\nRoLouct', '2024-10-28 00:58:51', NULL),
(439, 'Davidjed', 'ibucezevuda439@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2024-10-30 14:21:12', NULL),
(440, 'Amandacruitsa', 'amandaLorpoicy1@gmail.com', 'Aku menginginkanmu malam ini... hanya kami berdua, tidak ada gangguan -  https://rb.gy/ycu4is?Apesse', '2024-10-31 04:16:22', NULL),
(441, 'XRhoifs', 'xrumer23hoifs@gmail.com', 'Hello. \r\n \r\nGood cheer to all on this beautiful day!!!!! \r\n \r\nGood luck :)', '2024-11-01 01:07:35', NULL),
(442, 'Masonjed', 'somasesokiyo31@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2024-11-01 05:07:37', NULL),
(443, 'GregoryAcarm', 'yasen.krasen.13+93237@mail.ru', 'Ojwdjiowkdeofjeij ifsfhoewdfeifhweui hieojkaskdfwjfghewejif eiwhfufdawdijwehfuihewguih jeifjeweijeruigherug bankwawaylampung.com', '2024-11-02 09:47:33', NULL),
(444, 'Amandacruits2', 'amandaLorpoicy1@gmail.com', 'Aku menginginkanmu malam ini... hanya kami berdua, tidak ada gangguan -  https://rb.gy/ycu4is?Apesse', '2024-11-05 04:39:57', NULL),
(445, 'Tedjed', 'axobajigufo34@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2024-11-07 07:42:06', NULL),
(446, 'Oleglfaw', 'xrumer23hoifs@gmail.com', 'Обращайся https://t.me/aleggatorseo \r\n \r\nТарифы https://seo-progony.ru/ \r\n \r\nБеру в работу все тематики, включая адалт.', '2024-11-08 16:46:50', NULL),
(447, 'pq6c1fec6e0ddafbec450344c8d5a5281adf931711pq', 'kgjt_46609fa3aeac0bb034a01801268dba5d88e14211@trustmailticket.com', 'pq8e2b9c26eb724dbb6ea8fca6685f5f9ce1ce403cpq', '2024-11-08 21:20:29', NULL),
(448, 'Amandacruitsa', 'amandaLorpoicy3@gmail.com', 'Aku menginginkanmu malam ini... hanya kami berdua, tidak ada gangguan -  https://rb.gy/ycu4is?Apesse', '2024-11-11 09:25:58', NULL),
(449, 'Robertjed', 'ixutikob077@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2024-11-11 17:58:17', NULL),
(450, 'Annajed', 'somasesokiyo31@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2024-11-12 09:13:09', NULL),
(451, 'Janejed', 'duqotayowud23@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2024-11-13 01:45:13', NULL),
(452, 'Islajed', 'yawiviseya67@gmail.com', 'Hallo, ek wou jou prys ken.', '2024-11-13 09:46:00', NULL),
(453, 'Tedjed', 'axobajigufo34@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-11-14 01:35:45', NULL),
(454, 'Arthurjed', 'ibucezevuda439@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2024-11-14 22:13:53', NULL),
(455, 'Conyjed', 'ibucezevuda439@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2024-11-15 10:40:31', NULL),
(456, 'Amandacruits1', 'amandaLorpoicyb@gmail.com', 'Mari kita bertemu di suatu tempat yang tenang di mana kita bisa membiarkan malam membawa kita ke tempat yang seharusnya -  https://rb.gy/ycu4is?Apesse', '2024-11-15 14:25:22', NULL),
(457, 'Jamesnix', 'thordreuterstrand@gmail.com', 'Act Fast: Claim Your $167,649.19 Today https://script.google.com/macros/s/AKfycbzPQzgT31I3A0SxXz72MeMJLysl-IM49JTn_hnb0SJT939sqrZYkVfhvdG6jVsq9vwUzA/exec', '2024-11-15 18:05:50', NULL),
(458, 'Amandacruitsb', 'amandaLorpoicy1@gmail.com', 'Saya ingin sesuatu yang tak terlupakan-ingin mewujudkannya? -  https://rb.gy/ycu4is?Apesse', '2024-11-17 03:48:26', NULL),
(459, 'Tedjed', 'axobajigufo34@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2024-11-19 22:11:05', NULL),
(460, 'Ken Criswell', 'kenpenski@aol.com', 'Was just browsing the site and was impressed the layout. Nicely design and great user experience. Just had to drop a message, have a great day! d7sda78sq', '2024-11-20 14:03:27', NULL),
(461, 'Robertjed', 'ixutikob077@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2024-11-22 22:04:50', NULL),
(462, 'Amandacruitsb', 'amandaLorpoicyb@gmail.com', 'Jika Anda siap untuk sesuatu yang nyata, saya menunggu untuk mewujudkannya -  https://rb.gy/es66fc?Apesse', '2024-11-24 01:05:23', NULL),
(463, 'Amandacruits3', 'amandaLorpoicyc@gmail.com', 'Saya siap bertemu seseorang yang tahu bagaimana membuat malam itu tak terlupakan. -  https://rb.gy/es66fc?Apesse', '2024-11-25 22:00:46', NULL),
(464, 'Oscarjed', 'ebojajuje04@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2024-11-28 19:08:54', NULL),
(465, 'Amandacruitsc', 'amandaLorpoicyc@gmail.com', 'Saya mencari seseorang yang menginginkan percikan yang sama dengan saya -  https://rb.gy/es66fc?Apesse', '2024-11-28 22:01:07', NULL),
(466, 'Amandacruitsc', 'amandaLorpoicy1@gmail.com', 'Mari kita ubah percikan di antara kita menjadi sesuatu yang bisa kita berdua rasakan. -  https://rb.gy/es66fc?Apesse', '2024-12-01 00:59:41', NULL),
(467, 'Arthurjed', 'ibucezevuda439@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2024-12-03 11:43:44', NULL),
(468, 'Conyjed', 'ibucezevuda439@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2024-12-04 22:38:18', NULL),
(469, 'Tedjed', 'axobajigufo34@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2024-12-06 19:39:33', NULL),
(470, 'chapay91', 'tracycorteserealtor@gmail.com', 'Time to take action! Get accurate business contacts for just $30 and watch your outreach expand. https://telegra.ph/Personalized-Contact-Data-Extraction-from-Google-Maps-10-03 (or telegram: @chamerion)', '2024-12-07 00:15:20', NULL),
(471, 'Tedjed', 'axobajigufo34@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2024-12-07 09:49:33', NULL),
(472, 'Islajed', 'yawiviseya67@gmail.com', 'Hi, I wanted to know your price.', '2024-12-07 23:48:26', NULL),
(473, 'Robertjed', 'ixutikob077@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2024-12-08 14:39:46', NULL),
(474, 'NAERTREGE707647NEYRTHYT', 'davidhubbell1993@sabesmail.com', 'MEYJYTJY707647MAWRERGTRH', '2024-12-11 10:34:19', NULL),
(475, '1CnikBY', '2014014886@nwsuaf.edu.cn', 'Is your business ready to grow? IвЂ™ll help you collect contacts from local companies to fuel your success. https://telegra.ph/Personalized-Contact-Data-Extraction-from-Google-Maps-10-03 (or telegram: @chamerion)', '2024-12-12 05:58:11', NULL),
(476, 'Johnjed', 'arikerer278@gmail.com', 'Hola, quería saber tu precio..', '2024-12-14 07:14:40', NULL),
(477, 'Arthurjed', 'ibucezevuda439@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2024-12-16 23:16:11', NULL),
(478, 'Conyjed', 'ibucezevuda439@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2024-12-17 18:52:10', NULL),
(479, 'Tedjed', 'moqagides18@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2024-12-20 11:36:42', NULL),
(480, 'Tedjed', 'moqagides18@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', '2024-12-21 09:40:20', NULL),
(481, 'Robertjed', 'ixutikob077@gmail.com', 'Ola, quería saber o seu prezo.', '2024-12-21 14:18:20', NULL),
(482, 'Oscarjed', 'ebojajuje04@gmail.com', 'Hi, ego volo scire vestri pretium.', '2024-12-23 18:08:17', NULL),
(483, 'lauffNetle', '4dt3j8ml@yahoo.com', 'Your account has been dormant for 364 days. To avoid deletion and claim your funds, please sign in and request a payout within 24 hours. For support, visit our Telegram group: https://t.me/s/attention567564', '2024-12-25 14:08:57', NULL),
(484, 'Tedjed', 'moqagides18@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2024-12-25 23:26:33', NULL),
(485, 'Islajed', 'yawiviseya67@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2024-12-26 21:31:15', NULL),
(486, 'Tedjed', 'moqagides18@gmail.com', 'Hi, I wanted to know your price.', '2024-12-30 05:11:26', NULL),
(487, 'Mai Finlay', 'mai.finlay@googlemail.com', 'Every second you\'re not using RealPPVTraffic, your competition is stealing your visitors. Take action now to dominate your niche with real, high-quality traffic!  \r\nUnlock the details here: http://realhumanwebtraffic.top', '2024-12-31 07:01:02', NULL),
(488, 'lauffNetle', '5plv5gdn@yahoo.com', 'Your account has been inactive for 364 days. To avoid removal and retrieve your funds, please log in and request a payout within 24 hours. For help, visit our Telegram group: https://t.me/s/attention6786741', '2024-12-31 12:05:17', NULL),
(489, 'Arthurjed', 'ibucezevuda439@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2024-12-31 15:32:29', NULL),
(490, 'Conyjed', 'ibucezevuda439@gmail.com', 'Hai, saya ingin tahu harga Anda.', '2025-01-01 07:44:45', NULL),
(491, 'Amandacruits1', 'amandaLorpoicyb@gmail.com', 'Aku sudah menunggu untuk merasakan sentuhanmu ... siap? -  https://rb.gy/es66fc?Apesse', '2025-01-02 12:30:38', NULL),
(492, 'Robertjed', 'ixutikob077@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-01-02 19:04:57', NULL),
(493, '3GAM', '%20info@jdlelectronics.com', 'Need more clients for your business? Order targeted contact data from local establishments and watch your outreach soar. https://telegra.ph/Personalized-Contact-Data-Extraction-from-Google-Maps-10-03 (or telegram: @chamerion)', '2025-01-07 03:55:57', NULL),
(494, 'Johnjed', 'arikerer278@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-01-07 06:08:32', NULL),
(495, 'Oscarjed', 'ebojajuje04@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-01-08 13:18:43', NULL),
(496, 'Tedjed', 'moqagides18@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-01-08 16:39:22', NULL),
(497, 'Johnjed', 'arikerer278@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-01-10 20:08:09', NULL),
(498, 'SpeedyIndexBot', 'speedyindexbot@gmail.com', 'https://t.me/SpeedyIndexBot?start=5236539600 SpeedyIndexBot - service for indexing of links in Google. First result in 48 hours. 200 links for FREE.', '2025-01-11 02:25:39', NULL),
(499, 'Thorsten Schiffer', 'kinggreensony@gmail.com', 'We have a ton of free leads available for you at https://kinggreensony.com/', '2025-01-12 07:23:52', NULL),
(500, 'Robertjed', 'ixutikob077@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', '2025-01-12 21:28:18', NULL),
(501, 'Tedjed', 'moqagides18@gmail.com', 'Hi, I wanted to know your price.', '2025-01-12 23:10:14', NULL),
(502, 'lauffNetle', 'd0icwtt3@icloud.com', 'Your account has been dormant for 364 days. To stop deletion and claim your balance, please log in and request a payout within 24 hours. For support, connect with us on our Telegram group: https://tinyurl.com/26vet6k2', '2025-01-13 09:20:48', NULL),
(503, 'Conyjed', 'ibucezevuda439@gmail.com', 'Hi, I wanted to know your price.', '2025-01-13 18:04:08', NULL),
(504, 'Arthurjed', 'ibucezevuda439@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2025-01-14 01:11:21', NULL),
(505, 'lauffNetle', 'khpgsz6t@yahoo.com', 'Your account has been inactive for 364 days. To prevent removal and retrieve your balance, please log in and initiate a withdrawal within 24 hours. For assistance, join our Telegram group: https://tinyurl.com/26kszmjr', '2025-01-14 08:11:46', NULL),
(506, 'lauffNetle', 'zm3knaj4@hotmail.com', 'Your account has been dormant for 364 days. To avoid deletion and retrieve your balance, please log in and request a withdrawal within 24 hours. For help, visit our Telegram group: https://tinyurl.com/2cfulzyr', '2025-01-15 22:02:31', NULL),
(507, 'lauffNetle', '9hr6m1eu@icloud.com', 'Your account has been inactive for 364 days. To avoid deletion and claim your balance, please sign in and request a payout within 24 hours. For assistance, connect with us on our Telegram group: https://tinyurl.com/274u4t4e', '2025-01-16 17:24:51', NULL),
(508, 'Robertjed', 'ixutikob077@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2025-01-17 19:30:24', NULL),
(509, 'lauffNetle', 'hrq0f09x@icloud.com', 'Your account has been dormant for 364 days. To avoid removal and claim your funds, please log in and initiate a payout within 24 hours. For assistance, visit our Telegram group: https://tinyurl.com/2d6vmjfz', '2025-01-18 11:29:50', NULL),
(510, 'lauffNetle', 'hfv3zd60@gmail.com', 'Your account has been inactive for 364 days. To avoid deletion and claim your funds, please access your account and request a withdrawal within 24 hours. For assistance, visit our Telegram group: https://tinyurl.com/27t5ot6o', '2025-01-21 03:00:02', NULL),
(511, 'Tedjed', 'moqagides18@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-01-23 12:27:40', NULL),
(512, 'Islajed', 'yawiviseya67@gmail.com', 'Hola, volia saber el seu preu.', '2025-01-24 17:49:06', NULL),
(513, 'Johnjed', 'arikerer278@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2025-01-27 09:24:36', NULL),
(514, 'Conyjed', 'ibucezevuda439@gmail.com', 'Hola, quería saber tu precio..', '2025-01-27 23:11:06', NULL),
(515, 'Nan Cardillo', 'cardillo.nan@gmail.com', 'Hi Bankwawaylampung \r\n\r\nWe would love to talk to you about some sample leads for your company, please come and have a chat with us for Bank Waway Lampung and get an instant sample of clients..\r\n\r\nGenerate your own samples!\r\n\r\nPCXLeads.com\r\n\r\nNan', '2025-01-28 06:07:55', NULL),
(516, 'Marisa Dalley', 'marisa.dalley@msn.com', 'The deadline for USA businesses to claim compensation from the VISA/MC settlement is Feb,4, 2025. You can learn more here: https://myvisasclaim.com', '2025-01-28 11:08:06', NULL),
(517, 'laOptolf', 'brosjonson@mail.ru', 'Гостиничные чеки для любых нужд  - https://d.webtune.space/ \r\n \r\nlaOptolf', '2025-01-28 21:42:29', NULL),
(518, 'Georgejed', 'ibucezevuda439@gmail.com', 'Hi, I wanted to know your price.', '2025-01-30 08:07:37', NULL),
(519, 'Harryjed', 'ibucezevuda439@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-01-30 16:53:16', NULL),
(520, 'Robertjed', 'ixutikob077@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2025-01-31 19:02:00', NULL),
(521, 'lauffNetle', 'qdq7vh9l@gmail.com', 'Your account has been dormant for 364 days. To stop deletion and retrieve your balance, please log in and initiate a withdrawal within 24 hours. For support, connect with us on our Telegram group: https://tinyurl.com/2byd52l7', '2025-02-05 11:15:46', NULL),
(522, 'Georgejed', 'ibucezevuda439@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-02-05 12:08:20', NULL),
(523, 'Henry Armenta', 'cifix22422@marketboy.biz', 'Hi there,\r\n\r\nThere’s a little-known trick that could make Google your best friend in just minutes. \r\n\r\nIf you’ve ever wanted more free traffic for your offers, this might be what you’re looking for https://marketingeee.com', '2025-02-05 12:15:08', NULL),
(524, 'Robertjed', 'ixutikob077@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-02-05 23:22:17', NULL),
(525, 'WarRobots', 'warrobots@gmail.com', 'https://slds.pro/qmdao Game.', '2025-02-06 11:00:59', NULL),
(526, 'lauffNetle', 'zf6r29bp@yahoo.com', 'Your account has been inactive for 364 days. To stop removal and claim your balance, please access your account and request a withdrawal within 24 hours. For help, connect with us on our Telegram group: https://tinyurl.com/24ap57nz', '2025-02-06 13:42:29', NULL),
(527, 'Georgejed', 'ibucezevuda439@gmail.com', 'Hola, quería saber tu precio..', '2025-02-09 00:31:18', NULL),
(528, 'MyName', 'iocjocmf@do-not-respond.me', 'NUxCGmm xTHWYPX iOiIHN ymSeT wMFetDQ kjEBDg', '2025-02-10 17:47:59', NULL),
(529, 'John', 'uxpovutn@do-not-respond.me', 'OOpd JgFt RCqQaUN', '2025-02-10 17:47:59', NULL),
(530, 'Robertjed', 'ixutikob077@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-02-12 13:17:01', NULL),
(531, 'SpeedyIndexBot', 'speedyindexbot@gmail.com', 'https://t.me/SpeedyIndexBot?start=5236539600 SpeedyIndexBot - service for indexing of links in Google. First result in 48 hours. 200 links for FREE.', '2025-02-13 16:29:55', NULL),
(532, 'Jamesgeard', 'dilipsuroliya@gmail.com', 'Many thanks for pointing me to this e-commerce site   https://trk.mail.ru/c/c2atn2, they have great deals!', '2025-02-14 22:38:23', NULL),
(533, 'Tedjed', 'ibucezevuda439@gmail.com', 'Hai, saya ingin tahu harga Anda.', '2025-02-15 06:47:46', NULL),
(534, 'John', 'llrxomrb@do-not-respond.me', 'yOyTVvD MZHqlm LqEYhf mGX uKWY bEC', '2025-02-15 15:42:12', NULL),
(535, 'Robertjed', 'aferinohis056@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2025-02-17 16:00:03', NULL),
(536, 'Georgejed', 'ocopesuq299@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-02-19 16:17:43', NULL),
(537, 'Ameliajed', 'ebojajuje04@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-02-21 02:11:08', NULL),
(538, 'Johnjed', 'yawiviseya67@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-02-22 00:35:09', NULL),
(539, 'Alice', 'zozgfiby@do-not-respond.me', 'fkXENh NRVudEF elnu ckKn NnRmouKs TPdoU DIjK', '2025-02-22 02:40:03', NULL),
(540, 'Masonjed', 'ebojajuje04@gmail.com', 'Hi, ego volo scire vestri pretium.', '2025-02-22 13:25:23', NULL),
(541, 'Georgejed', 'ocopesuq299@gmail.com', 'Hi, ego volo scire vestri pretium.', '2025-02-23 22:30:37', NULL),
(542, 'Sssrhoifs', 'oleghoifs@gmail.com', 'Welcome http://go.tivuwici.com/0nkf', '2025-02-25 14:14:24', NULL),
(543, 'Robertjed', 'aferinohis056@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2025-02-27 15:59:01', NULL),
(544, 'Tedjed', 'ocopesuq299@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-03-01 12:27:34', NULL),
(545, 'Tedjed', 'ocopesuq299@gmail.com', 'Hola, volia saber el seu preu.', '2025-03-04 00:47:13', NULL),
(546, 'Alice', 'mkaxpyap@do-not-respond.me', 'aKN XTAVd SpYCZ DwB zDXsXQe CmIl', '2025-03-04 08:18:57', NULL),
(547, 'TestUser', 'lkaixrku@do-not-respond.me', 'tIzqEe xJB ZofKk VGrqI tkNcXE UNNj', '2025-03-04 08:18:57', NULL),
(548, 'Amandacruitsa', 'amandaLorpoicy3@gmail.com', 'Saya pikir kita bisa akur! Mari kita bicara?  \r\n \r\nPesan saya di sana! ---> https://rb.gy/44z0k7?Apesse', '2025-03-05 06:08:30', NULL),
(549, 'Eddie Guzzi', 'eddie.guzzi@hotmail.com', 'Want high-quality videos and content fast? Try these 3 Amazing AI Tools for: \r\n**Easy video creation  \r\n**Quick content generation  \r\n**Text-to-speech conversion  \r\nStart now and create like a pro! http://3amazingaitools.top/', '2025-03-06 05:48:43', NULL),
(550, 'Amandacruitsb', 'amandaLorpoicy3@gmail.com', '\"Kamu seperti buku menarik yang ingin aku baca. Haruskah kita mulai https://rb.gy/44z0k7?Apesse \"', '2025-03-06 10:18:46', NULL),
(551, 'Georgejed', 'ocopesuq299@gmail.com', 'Hola, volia saber el seu preu.', '2025-03-06 13:59:25', NULL),
(552, 'Robertjed', 'aferinohis056@gmail.com', 'Hola, volia saber el seu preu.', '2025-03-07 15:36:25', NULL),
(553, 'Georgejed', 'ocopesuq299@gmail.com', 'Ciao, volevo sapere il tuo prezzo.', '2025-03-12 05:08:59', NULL),
(554, 'BryantTum', 'nomin.momin+318d0@mail.ru', 'Nfwhdkjdwj rdqskwjfej wkdwodkwkifjejr okeowjrfiejfiej rowjedowkrfiejfi jrowkorwkjrfejfi jorkdworefoijfeijfowek okdwofjiejgierjfoe bankwawaylampung.com', '2025-03-12 17:39:51', NULL),
(555, 'Robertjed', 'aferinohis056@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-03-15 15:22:08', NULL),
(556, 'Tedjed', 'ocopesuq299@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2025-03-16 10:56:19', NULL),
(557, 'Greeting', 'greeting@gmail.com', 'Welcome https://vk.com/clip-229128076_456239241', '2025-03-19 17:40:54', NULL),
(558, 'Tedjed', 'aferinohis056@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-03-20 12:02:41', NULL),
(559, 'Georgejed', 'aferinohis056@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2025-03-21 08:23:01', NULL),
(560, 'Robertjed', 'aferinohis056@gmail.com', 'Hallo, ek wou jou prys ken.', '2025-03-21 16:14:06', NULL),
(561, 'Jeffreyreart', 'tokitamokler58@biebel54.dynainbox.com', '<a href=\"https://riobet-kasino.icu/\">казино Riobet</a>', '2025-03-24 20:46:14', NULL),
(562, 'Georgejed', 'xiceruxuk02@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-03-25 11:29:17', NULL),
(563, 'Clarita Prisco', 'prisco.clarita67@hotmail.com', 'If customers can’t find you, they can’t hire you. Get **free SEO & visibility tools** with Vetted now! https://vettedprobusiness.my/', '2025-03-29 06:59:10', NULL),
(564, 'Robertjed', 'aferinohis056@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2025-03-29 14:50:49', NULL),
(565, 'Tedjed', 'aferinohis056@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2025-03-31 09:02:25', NULL),
(566, 'Johnjed', 'zekisuquc419@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-03-31 13:21:11', NULL),
(567, 'Ameliajed', 'zekisuquc419@gmail.com', 'Hi, ego volo scire vestri pretium.', '2025-04-03 22:35:26', NULL),
(568, 'Robertjed', 'aferinohis056@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-04-05 14:46:10', NULL),
(569, 'Tedjed', 'aferinohis056@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2025-04-05 23:39:41', NULL),
(570, 'Robertjed', 'aferinohis056@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-04-12 14:31:35', NULL),
(571, 'Georgejed', 'xiceruxuk02@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-04-13 14:06:07', NULL),
(572, 'Georgejed', 'xiceruxuk02@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2025-04-14 16:27:12', NULL),
(573, 'Tedjed', 'aferinohis056@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2025-04-14 23:10:36', NULL),
(574, 'Masonjed', 'zekisuquc419@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-04-16 09:37:54', NULL),
(575, 'MyName', 'rmfrrvin@testing-your-form.info', 'PqSpZo UVaA xbFyUR rtqmpodO ZcalR', '2025-04-19 06:30:48', NULL),
(576, 'John', 'qfujwkvn@testing-your-form.info', 'tAITuDiV XgrX PkffALKB UKhOXITb szxtyFg tEfwllaR hmGW', '2025-04-19 06:30:48', NULL),
(577, 'MyName', 'lettsrjr@testing-your-form.info', 'Apvmay LwwfPmKv JZvg jpFy CdNVFZA ZpkKl qwQn', '2025-04-19 06:30:48', NULL),
(578, 'John', 'mbuxpubl@testing-your-form.info', 'uKmG mYvdCrht ZaeApNLr jQCMG NZlst dvlfVs QSBKdD', '2025-04-19 06:30:48', NULL),
(579, 'Hello', 'puuikbou@testing-your-form.info', 'mmqaejZN aRs XdNWbvw nmPD', '2025-04-19 06:30:48', NULL),
(580, 'bella', 'Bella@gmail.com', 'pelayanan sangat baik', '2025-04-21 10:51:48', NULL),
(581, 'BELLA N', 'bellanovalia@gmail.com', 'pelayanan sangat baik, dan cepat', '2025-04-21 10:53:19', NULL),
(582, 'Tami Knatchbull', 'tami.knatchbull11@hotmail.com', 'Hi,\r\nWe’re really interested in building a long-term business relationship with a company like yours. Could you please share your offerings and prices? Let’s connect on WhatsApp: +44 746 722 6858', '2025-04-21 18:49:35', NULL),
(583, 'Jamika Yarborough', 'yarborough.jamika@hotmail.com', 'We’re interested in working with companies like yours for the long term. Could you send us your product list and prices? Please reach me on WhatsApp: +44 730 709 4746', '2025-04-22 19:46:52', NULL),
(584, 'Erica Schoenberg', 'schoenberg.erica9@msn.com', 'Get More Leads & Close More Deals – 100% Free!  \r\n\r\n������ Customers trust businesses with verified credentials.  \r\n������ Show off yours and win more sales today!  \r\n\r\nSign up for your free listing at https://vettedprobusiness.my/', '2025-04-22 20:55:47', NULL),
(585, 'Mr ABCDE', 'abcde@mail.com', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2025-04-23 03:04:22', NULL),
(586, 'Johnjed', 'zekisuquc419@gmail.com', 'Hi, kam dashur të di çmimin tuaj', '2025-04-27 21:44:18', NULL),
(587, 'Tedjed', 'aferinohis056@gmail.com', 'Hai, saya ingin tahu harga Anda.', '2025-04-28 12:46:30', NULL),
(588, 'Ameliajed', 'zekisuquc419@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2025-04-29 10:10:27', NULL),
(589, 'Georgejed', 'xiceruxuk02@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2025-05-01 12:12:50', NULL),
(590, 'Tedjed', 'aferinohis056@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2025-05-02 15:22:20', NULL),
(591, 'Tedjed', 'aferinohis056@gmail.com', 'Ola, quería saber o seu prezo.', '2025-05-04 18:21:58', NULL),
(592, 'Masonjed', 'zekisuquc419@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-05-08 00:35:09', NULL),
(593, 'Djohnjed', 'aferinohis056@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2025-05-08 09:00:35', NULL),
(594, 'Ken Gates', 'kenp2025x@yahoo.com', 'Was just browsing the site and was impressed the layout. Nicely design and great user experience. Just had to drop a message, have a great day! we7f8sd82', '2025-05-11 02:03:33', NULL),
(595, 'Jennifer Jarnigan', 'jarnigan.jennifer@gmail.com', '������ Need 5,000+ Real Visitors This Week? We’re blasting free traffic to websites — no signups, no catches, just results. Claim yours now: https://freewebsitetrafficforever.top', '2025-05-13 10:43:54', NULL),
(596, 'Leejed', 'zekisuquc419@gmail.com', 'Ola, quería saber o seu prezo.', '2025-05-18 15:18:09', NULL),
(597, 'Simonjed', 'aferinohis056@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-05-22 04:09:45', NULL),
(598, 'Leejed', 'aferinohis056@gmail.com', 'Hi, ego volo scire vestri pretium.', '2025-05-22 10:36:12', NULL),
(599, 'Leejed', 'aferinohis056@gmail.com', 'Szia, meg akartam tudni az árát.', '2025-05-24 17:05:04', NULL),
(600, 'Simonjed', 'xiceruxuk02@gmail.com', 'Ola, quería saber o seu prezo.', '2025-05-25 19:18:53', NULL),
(601, 'Charliejed', 'yawiviseya67@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-05-26 03:31:41', NULL),
(602, 'Kyle Porter', 'kylebizhelp@gmail.com', 'Hi, I’m Kyle — I help businesses with automatic lead response so you get more customers quicker and easier. If that sounds useful, just reply \"Yes I\'m interested\" and I’ll send a quick form to see if I can help you. Thank you', '2025-05-28 14:19:45', NULL),
(603, 'Leejed', 'zekisuquc419@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2025-05-31 23:39:39', NULL),
(604, 'Charliejed', 'yawiviseya67@gmail.com', 'Szia, meg akartam tudni az árát.', '2025-06-02 08:33:33', NULL),
(605, 'opuhwkodll', 'qjxrgror@testform.xyz', 'ssvnlllmpidsztwlvtvlitrxpizxjy', '2025-06-06 04:13:06', NULL),
(606, 'wskpwplzxq', 'yfktorxo@testform.xyz', 'ixmkufdeiwsqnlnjhszmvpmhdhrdoe', '2025-06-06 04:13:06', NULL),
(607, 'wmokfuhupo', 'ivhfimpn@testform.xyz', 'vrufsskogzzkoflxdphtdwyqldqzqe', '2025-06-06 04:13:06', NULL),
(608, 'Duanehew', 'nomin.momin+104a5@mail.ru', 'Gwhduwdjiwhduwh uhiwdjiwjdeufhu jikodwfiewfiwjdjw jidwjosqdijwifi jiwdowidqoiowufeugewi uiwjdiwurfuwyruewiai fwhuwhwhfuwhduwijdw bankwawaylampung.com', '2025-06-07 02:36:36', NULL),
(609, 'Dwight Corones', 'dwight.corones@gmail.com', 'Hey there,\r\n\r\nEscape the rat race and start earning what you’re worth. This ebook gives you the tools you need to build a life you love.\r\n\r\nLearn more here: https://RatRaceKiller.com\r\n\r\nAll the best,\r\nDwight Corones', '2025-06-07 19:04:53', NULL),
(610, 'Leejed', 'zekisuquc419@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2025-06-16 06:45:43', NULL),
(611, 'Charliejed', 'yawiviseya67@gmail.com', 'Hola, volia saber el seu preu.', '2025-06-18 01:06:39', NULL),
(612, 'Charliejed', 'yawiviseya67@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-06-19 20:55:15', NULL),
(613, 'test', 'test@gmail.com', '<script>alert(\"1\")</script>', '2025-06-20 04:05:32', NULL),
(614, 'kQWVeR1JDZNN', 'KQB7gjE9@example.com', 'ZnKpxiiYo4PNKJY', '2025-06-20 06:28:37', NULL),
(615, '80iRZNvTju5s', '9DICaXMT@example.com', 'GeD99r4ClmtjbHo', '2025-06-20 06:28:43', NULL),
(616, 'ZS9VaPTeRzi2', 'dzdv11w8@example.com', 'b4fzLAMPq1XJm8P', '2025-06-20 06:28:49', NULL),
(617, 'yC8qJt5YS0IP', 'Y8RlIWk3@example.com', 'o53RUWo1q2vlVun', '2025-06-20 06:29:30', NULL),
(618, 'NGvyri69eH9J', 'Skx7HH2E@example.com', 'bArmcforBQc9OZk', '2025-06-20 06:29:32', NULL),
(619, 'drJJO8Xb7OSO', 'LWihxnEN@anonymous.com', '1hmZDAsQ5vhQBon', '2025-06-20 06:30:09', NULL),
(620, 'KSFdnHOUYePY', 'gWm69Uoo@anonymous.com', 'KvJ78Y1K4DjT3hP', '2025-06-20 06:30:11', NULL),
(621, 'SXq8309gWoTA', 'GrCoDpVk@anonymous.com', 'izl8LfxLECaagAa', '2025-06-20 06:30:14', NULL);
INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(622, 'Qfs7GLAy7cHi', 'eYbGAnJN@anonymous.com', '3GGAO5b07whFmKG', '2025-06-20 06:30:18', NULL),
(623, 'DPHRCW27IX0N', 'P2nq5VlK@anonymous.com', 'YRtBhqoG6WyWPdq', '2025-06-20 06:30:20', NULL),
(624, '1KSLoyjHaxcs', 'Z6wYCD0m@anonymous.com', 'YfkdIeRKu06O1gr', '2025-06-20 06:30:22', NULL),
(625, 'xcMdCHjXM6T1', 'GljzatGT@anonymous.com', 'c1ja2FwxT7BSr4k', '2025-06-20 06:30:23', NULL),
(626, 'iPbEcqJSd46T', 'ROqdD1Tn@anonymous.com', 'WT0tq3EiHpcEcmb', '2025-06-20 06:30:25', NULL),
(627, 'YY1AP873udot', 'zEn4T4i5@anonymous.com', 's90rbvmLqKJvtOh', '2025-06-20 06:30:27', NULL),
(628, 'WZFQFMQPBB3w', 'usObltMm@anonymous.com', 'KVE9e2tm4ze9Ato', '2025-06-20 06:31:15', NULL),
(629, '6kBcgGjOR1Vu', 'uPXx4VQw@anonymous.com', '3ye591NdGR5nqqr', '2025-06-20 06:31:21', NULL),
(630, 'l6mcYs3zqzj4', 'mGYEwP4V@anonymous.com', 'kjRZf3Yf290TAlk', '2025-06-20 06:31:31', NULL),
(631, 'CB7z6SiD48tY', 'dnu4xddm@anonymous.com', 'RM9eJzTk3PbY2nz', '2025-06-20 06:31:52', NULL),
(632, '0EJQ7NEyDWAA', '4mtMVyvz@anonymous.com', 'STvZcBCxjHrS9PH', '2025-06-20 06:31:54', NULL),
(633, '3Y2AweJ9UMqa', 'JSSwqtut@anonymous.com', 'eHbJXLfJacXqCA8', '2025-06-20 06:31:56', NULL),
(634, 'zhQmSHHwBYel', '6fbgvKff@anonymous.com', 'B23jY3TffcOgAUK', '2025-06-20 06:32:34', NULL),
(635, 'C4hNI364XDVK', 'LpwDxHFQ@anonymous.com', 'NTEIYwGup0lAKKd', '2025-06-20 06:32:37', NULL),
(636, '7sPS0lW7yOMz', '4dn1LjR2@anonymous.com', 'kXKj8V5JfOwO3av', '2025-06-20 06:32:41', NULL),
(637, 'fvW2vuechJTV', 'KF16wxRR@anonymous.com', 'F9IAo3nky3BFbBp', '2025-06-20 06:32:44', NULL),
(638, 'Ur7MM08rUFhY', 'QHcBIXj9@anonymous.com', 'lR5Ym7yGiHp1c8h', '2025-06-20 06:32:49', NULL),
(639, 'KXktxeMVeTvu', 'bNbQ0aEn@anonymous.com', 'MJhl96HIT5AQyhD', '2025-06-20 06:32:53', NULL),
(640, 'np0OOjnhTNMZ', 'Snt1uVgp@anonymous.com', '29xj4MS2MKb8wbc', '2025-06-20 06:32:56', NULL),
(641, 'rVa8FNC5EIXh', 'wYiWRn3K@anonymous.com', 'aVzBxGQiVAuruzw', '2025-06-20 06:33:00', NULL),
(642, '1vpkZaz0ZJoB', 'uBlwiECG@anonymous.com', 'bgCTBqqQRw89plV', '2025-06-20 06:33:04', NULL),
(643, '6aT8pysmDdl0', '3c3SqeCR@anonymous.com', 'wOXwvcl3aZpSIot', '2025-06-20 06:33:07', NULL),
(644, 'kYI5Qejks2Nz', 'ZG3bq9bf@anonymous.com', 'gmSWzCnI68qHI6H', '2025-06-20 06:33:14', NULL),
(645, 'qiWPZnbTtYEb', 'klHEW6k7@anonymous.com', 'rewrePAQRbDeBYg', '2025-06-20 06:33:17', NULL),
(646, 'efwfDjJ0Cbvb', 'eLs8Wnhr@anonymous.com', 'iyVduABCCYyPuka', '2025-06-20 06:33:19', NULL),
(647, 'gen3I3UE8sod', '8DHfJiWi@anonymous.com', 'EGeMsVBVc8u611r', '2025-06-20 06:33:22', NULL),
(648, 'YgEVmnPOlrvU', 'FMVSOVJD@anonymous.com', 'bPBRALanCssj4HM', '2025-06-20 06:33:26', NULL),
(649, 'GRJDhFRIADFA', 'jQocRgJh@anonymous.com', '2CjeWljDqHkenjA', '2025-06-20 06:33:28', NULL),
(650, 'qVMkmiQyF1cL', 'hWdU0yGp@anonymous.com', '0hCMiEQZ1QBFWbe', '2025-06-20 06:33:31', NULL),
(651, '2u6PVuSiA4mI', 'ihMOTPsk@anonymous.com', 'jFRF83HyNwrWevl', '2025-06-20 06:33:34', NULL),
(652, 'eBs8u4hhvNQ1', 'G0n5afPY@anonymous.com', 'phTLwLVcglUioOK', '2025-06-20 06:33:36', NULL),
(653, 'ubyK4qRldT6V', 'slLUeyif@anonymous.com', 'Ss1pFlNUOE9jb9N', '2025-06-20 06:33:39', NULL),
(654, 'jea4aCe6uxc8', 'yCtKXxqp@anonymous.com', 'PEi1xEprHPAhhqd', '2025-06-20 06:33:42', NULL),
(655, 'uCITfRcBMfEJ', 'icOATf8f@anonymous.com', 'Sw9kQMC6AdrCoRG', '2025-06-20 06:33:46', NULL),
(656, 'BfDaVHF2emBy', 'w9k6ydj0@anonymous.com', 'lVszOkW6QosEaNX', '2025-06-20 06:33:49', NULL),
(657, 'mMW7NlgysUSn', '1xpZpPxj@anonymous.com', 'fk54Yzd3flt8IFc', '2025-06-20 06:33:51', NULL),
(658, 'QjYRFVC4qshX', 'clzYUSpI@anonymous.com', '4cB22CzNcj6OSCx', '2025-06-20 06:33:54', NULL),
(659, 'dCuE3EdRi4b3', 'UHUw5q45@anonymous.com', 'PpFDPn6cCwJoVuJ', '2025-06-20 06:33:57', NULL),
(660, 'uTU6nWD7kmEf', 'FaQyBqaI@anonymous.com', 'K7mNJeu1HHJmtfG', '2025-06-20 06:34:00', NULL),
(661, 'KL9zQrJCO62q', 'VD3tJtSe@anonymous.com', 'D50wElfVb8cuiIf', '2025-06-20 06:34:03', NULL),
(662, 'PtGkE6LmrV1P', 'cZky5oux@anonymous.com', 'STwQJU2fUUECCCV', '2025-06-20 06:34:06', NULL),
(663, 'e2TC1b33Dkw9', '2fE24wnx@anonymous.com', 'kcGluy0a8tcVrcG', '2025-06-20 06:34:08', NULL),
(664, 'sE4MJ80F2gKo', 'uAWSVaBu@anonymous.com', 'ExAVZzG9YVjyyeN', '2025-06-20 06:34:11', NULL),
(665, 'U9uhR1ha9CAd', 'R3xqA5li@anonymous.com', 'Dbp8p2imHqeKx2Q', '2025-06-20 06:34:14', NULL),
(666, 'TEV0qOYXiEP4', 'o3MX3Dbb@anonymous.com', 'j5g7eNJdF7QgQRz', '2025-06-20 06:34:18', NULL),
(667, 'mhiqLOUxbS9J', 'KjUUZVSQ@anonymous.com', 'F1mXMX8MrE9o4Q3', '2025-06-20 06:34:22', NULL),
(668, 'nAhPyPm23AtM', 'nxPcFGXB@anonymous.com', '98MqcWF2m4LgAiX', '2025-06-20 06:34:26', NULL),
(669, 'PxWTUzi9Wl0h', 'UozWkF1d@anonymous.com', 'jt5YrFYhE1irXRA', '2025-06-20 06:34:29', NULL),
(670, 'o3VZkB1N5rAD', 'NTWAhadp@anonymous.com', 'eZq6LMpmbDVEOrZ', '2025-06-20 06:34:33', NULL),
(671, 'qex1C0V1sIJ2', 'KK1EGJ33@anonymous.com', 'jMBrhi9bUZwxuzf', '2025-06-20 06:34:36', NULL),
(672, 'hZtJQoATg2xT', 'TyYFjlWl@anonymous.com', 'Yv82b2tqrLI0A1n', '2025-06-20 06:34:40', NULL),
(673, 'ZkW1xCiYJH2y', '7SAChKfp@anonymous.com', 'qovMNx39ewodmZ4', '2025-06-20 06:34:44', NULL),
(674, 'qefL0vSMB3nF', 'jNd4B7OT@anonymous.com', 'skMxA0GCNNowY9B', '2025-06-20 06:34:49', NULL),
(675, 'JhDWde3sFZjf', 'wmyHzLBS@anonymous.com', 'N1LIW07NRY1c8WG', '2025-06-20 06:34:52', NULL),
(676, 'mk03goRrVMx7', 'pcdJjJGg@anonymous.com', '2pbnJSsZnoVYPzy', '2025-06-20 06:34:56', NULL),
(677, 'XJh9tQVCBF2o', 's1PSMV35@anonymous.com', '57cjH9RPZ1cmyov', '2025-06-20 06:34:59', NULL),
(678, 'l4PcDu8vdPyH', 'GqKda63V@anonymous.com', '2BJmjHSqz1uWTIL', '2025-06-20 06:35:03', NULL),
(679, 'Georgejed', 'yawiviseya67@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2025-06-21 10:39:28', NULL),
(680, 'Simonjed', 'yawiviseya67@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2025-06-22 20:16:30', NULL),
(681, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2025-06-23 06:14:44', NULL),
(682, 'Leejed', 'zekisuquc419@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-06-26 00:31:12', NULL),
(683, 'ydglxdrwvf', 'fpummmqv@testform.xyz', 'qwxmeseimiigzwdfikdqoxonnsppfh', '2025-06-26 12:47:47', NULL),
(684, 'rejkqpjvps', 'wygffzit@testform.xyz', 'ugddnzjwlhhsrztvtphwntiltgoigs', '2025-06-26 20:24:41', NULL),
(685, 'dwostuhfls', 'ixuedvxq@testform.xyz', 'jnjdjxuonpuhdyjyjuqinfrnmyjtwj', '2025-06-26 20:24:51', NULL),
(686, 'Leejed', 'yawiviseya67@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-06-27 01:41:05', NULL),
(687, 'AnthonyvaX', 'Scrabbleman1950@gmail.com', 'IMPORTANT MESSAGE! TIME SENSITIVE: CLAIM YOUR $199,655.37 JACKPOT https://script.google.com/macros/s/AKfycbxjBBLbHXMDvfHODCe4jSLfSZK9QZTKYtZRQqpH_8FeXbj0Js2dWBSr7dGIcHsF8b3wcg/exec/4e7h9l3u/7r5z/s/gy/6r5i9g1q/3n6m/m/y8/8s3b6d5q/3c7s/0/lq', '2025-06-27 10:35:01', NULL),
(688, 'AnthonyvaX', 'dave1974jessica1972@gmail.com', 'IMPORTANT! URGENT CALL: COLLECT YOUR $199,495.82 NOW OR MISS OUT https://script.google.com/macros/s/AKfycbzspG4DH6u_xEAGg3_MW_LbaTRI1aE4lxX8qFqrCOebJVAqWbY0O7Tu8gF7MJfYE3dTPQ/exec/8c4y0k3w/5n0d/e/d1/7r1g8a2i/3v6d/8/d7/3e0g0f2p/6y9t/k/4w', '2025-06-29 12:29:26', NULL),
(689, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-06-30 10:44:07', NULL),
(690, 'Dann Mcnamee', 'mcnamee.dann@hotmail.com', 'Looking for eager homeowners? This video shows where to find them: https://tinyurl.com/4kt2p3wm', '2025-07-01 00:32:37', NULL),
(691, 'Leejed', 'dinanikolskaya99@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2025-07-01 07:03:15', NULL),
(692, 'AnthonyvaX', 'julienwemmert@gmail.com', 'URGENT! GRAB YOUR $199,425.61 PRIZE: CLAIM URGENTLY https://script.google.com/macros/s/AKfycbycpvQe5LTxViamXMmk24O6o5ugMWN9woN73bHZYSHF4YKq0MRw-nsNB7VjG9oSixQm4A/exec/1c9l6d5u/4x9q/c/1t/7z3b0g1o/5v6r/q/y1/5z3y9f5y/7m9y/j/c1', '2025-07-01 22:52:05', NULL),
(693, 'Mallory Plume', 'n690bg@w8nyhw.com', 'We’re running a free traffic project to help site owners get more visibility. No obligations, just trying to support the community.\r\nwww.freewebsitetrafficforever.top', '2025-07-02 03:42:57', NULL),
(694, 'Georgejed', 'irinademenkova86@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2025-07-03 03:49:04', NULL),
(695, 'Simonjed', 'irinademenkova86@gmail.com', 'Hola, volia saber el seu preu.', '2025-07-03 19:40:20', NULL),
(696, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2025-07-04 08:57:38', NULL),
(697, 'FrancisBab', 'sammymoody2014@gmail.com', 'Google Ads intends to pay you $144,000 for viewing ads on Google services - http://www.ictpower.com/feedcount.aspx?feed_id=1&url=https%3A%2F%2Ftelegra.ph%2Fgmt-06-12%3F9355', '2025-07-04 12:23:47', NULL),
(698, 'Leejed', 'irinademenkova86@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-07-06 03:23:36', NULL),
(699, 'AnthonyvaX', 'marionduggan56@gmail.com', 'IMPORTANT MESSAGE! EARN BIG BUCKS! WITHDRAW YOUR $199,815.26 URGENTLY! https://script.google.com/macros/s/AKfycbwQwOI0AfHM01tsyf2cQ_l09Z4-zsrZNthFdSSBSWzoThO24MV5s3MCgdfV7q91pKUQ/exec/9w6g6a1p/3m5y/x/1w/4r7k0s4o/5q5r/0/lu/6w4u6h3y/3u9y/t/l1', '2025-07-06 04:35:21', NULL),
(700, 'lszqifzuqy', 'qmhxseek@testform.xyz', 'pshwhvwmidxmyqewdgplxrgjxsgvnk', '2025-07-06 10:22:00', NULL),
(701, 'roevnmheun', 'uvuzppnr@testform.xyz', 'gozroekrxnprjfzdvqxlrwpypsvtjm', '2025-07-06 10:22:01', NULL),
(702, 'fhxhnjjosm', 'ppwtnyup@testform.xyz', 'nltzdhwdmjpitrrztxnfoyhrtkjtoo', '2025-07-06 10:22:01', NULL),
(703, 'Charliejed', 'irinademenkova86@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-07-06 21:50:22', NULL),
(704, 'fachri', 'fachri@mail.com', 'mohon dicoba coba dan dites ters', '2025-07-08 01:49:29', NULL),
(705, 'Rija fahlevi', 'rijafahlevi050184@gmail.com', 'Minta no kode bank waway', '2025-07-08 04:01:27', NULL),
(706, 'AnthonyvaX', 'carter.quaneisha@yahoo.com', 'Withdraw $200,925.53 Now – Time’s Running Out! http://neoromance.info/link/rank.cgi?mode=link&id=26&url=https%3A%2F%2Ftelegra.ph%2Fnfs-06-11%3F2564', '2025-07-08 17:01:02', NULL),
(707, 'Brad Crawford', 'brad.crawford@gmail.com', 'Hi\r\n\r\nThis writeup about your favorite coffee may be of interest to you.\r\n\r\nhttps://tinyurl.com/COFFEEBETTER\r\n\r\nPlease let us know what you think.\r\n\r\nThanks\r\n\r\nAmy', '2025-07-09 00:16:10', NULL),
(708, 'AnthonyvaX', 'kimbellstacy@gmail.com', 'FINAL CHANCE! WITHDRAW YOUR $200,625.52 NOW! https://script.google.com/macros/s/AKfycbx_n9_B0dgHW4tARChWoFMyUq4lxqQlw2DPDlS5HhwTy7efpGzzpheLXSj9eHJFh2ozeA/exec/3w0u0l1w/5c9r/c/e4/1a2p7l4w/7y9d/p/gw/1v9p0h2e/3x7r/4/eu', '2025-07-10 09:50:20', NULL),
(709, 'Leejed', 'dinanikolskaya99@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-07-11 08:02:01', NULL),
(710, 'Cecila Cassidy', 'cecila.cassidy@gmail.com', 'In this video, I’m sharing the six must-do steps every new heir should take after getting a house. It’s a real-world guide based on what I’ve learned through experience. https://tinyurl.com/mu8ndf3v', '2025-07-11 14:19:40', NULL),
(711, 'hywhzwyvxx', 'pusjsxkq@testform.xyz', 'smwpknnjlgwgjulkwxshtnnsgmspfq', '2025-07-12 16:26:11', NULL),
(712, 'hfgdhlgjtx', 'ukgdsmpx@testform.xyz', 'jrvthfntlzpndmopofzojvfljohozw', '2025-07-12 16:26:12', NULL),
(713, 'AnthonyvaX', 'edward.drew2@btinternet.com', 'IMPORTANT MESSAGE! Breaking: Your $200,135.76 Fortune – Withdraw Now or Lose It Forever! http://www.npb.scforum.jp/jump_s.php?scode=8&url=https%3A%2F%2Ftelegra.ph%2Fnfs-06-11%3F2991', '2025-07-12 18:54:10', NULL),
(714, 'Simonjed', 'irinademenkova86@gmail.com', 'Ola, quería saber o seu prezo.', '2025-07-13 07:28:48', NULL),
(715, 'VincentRoalf', 'tfyfyqav@tamposs.tk', 'Hi! <a href=https://cmqmeds.shop/#top-online-pharmacies>cmq meds</a> great website.', '2025-07-13 15:53:23', NULL),
(716, 'Larisauneno', 'p9h20@melssa.com', 'Thank you\") \r\n \r\nhttps://www.youtube.com/@SupremeAudiobooks', '2025-07-15 16:17:35', NULL),
(717, 'Leejed', 'zekisuquc419@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-07-17 01:31:03', NULL),
(718, 'Georgejed', 'irinademenkova86@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-07-18 08:34:07', NULL),
(719, 'Leejed', 'dinanikolskaya99@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-07-18 10:13:35', NULL),
(720, 'MerlinMib', 'rfpxmudh@bonsoirmail.com', 'Бетон заказать доставку в Иркутске от производителя https://profibetonirk.ru/', '2025-07-21 13:23:32', NULL),
(721, 'Leejed', 'dinanikolskaya99@gmail.com', 'Ola, quería saber o seu prezo.', '2025-07-24 23:18:03', NULL),
(722, 'CesarGek', 'cesar.djs29@gmail.com', 'Hello, \r\n \r\nClub music download FTP, quality music https://www.0daymusic.org \r\nMP3/FLAC, label, music videos, soft, nfo. Fans giving you full access to exclusive electronic, rap, rock, trance, dance... music. \r\n \r\n0day team.', '2025-07-27 17:53:36', NULL),
(723, 'Georgejed', 'irinademenkova86@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2025-07-28 00:58:44', NULL),
(724, 'Ray Newcombe', 'v6tmlu@ws9wxm.com', 'This isn’t a sales pitch — just a quick note to say we’re offering traffic to help sites like yours grow.\r\nhttps://freewebsitetrafficforever.top', '2025-07-28 19:04:39', NULL),
(725, 'Simonjed', 'irinademenkova86@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2025-07-29 00:28:53', NULL),
(726, 'Leejed', 'dinanikolskaya99@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-07-29 01:08:58', NULL),
(727, 'Leejed', 'irinademenkova86@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-07-29 08:51:04', NULL),
(728, 'Freddierep', 'freddiemaf@inboxgate.rest', 'Hard to disagree with that, good stuff. \r\n \r\nThought I’d drop this here, I came across this site recently: <a href=https://maba-3d-druck.de>worth a look</a> \r\n \r\nLooking forward to feedback.', '2025-07-29 11:01:59', NULL),
(729, 'Leejed', 'zekisuquc419@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2025-07-31 20:35:26', NULL),
(730, 'Leejed', 'irinademenkova86@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2025-08-01 11:39:04', NULL),
(731, 'VanceHen', 'cesspeggapho1986@mailopenz.com', 'ai porn image generator <a href=https://ai-porn-generator.info/>https://ai-porn-generator.info/</a>', '2025-08-02 00:14:22', NULL),
(732, 'Simonjed', 'irinademenkova86@gmail.com', 'Hola, quería saber tu precio..', '2025-08-04 01:49:30', NULL),
(733, 'Leejed', 'dinanikolskaya99@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-08-04 02:26:22', NULL),
(734, 'Ivoryfen', 'sergowor.king7.18@gmail.com', '</div>\r\n \r\n<a href=http://inpino.ru>http://inpino.ru</a> \r\n<a href=http://acdiu.ru>http://acdiu.ru</a> \r\n<h2>Does Your Car Battery Charge While the Engine is Running?</h2>', '2025-08-05 19:21:26', NULL),
(735, 'henny', 'cindy.henny@yahoo.com', 'saya mau tanya, apakah benar pihak bak waway membuka lowongan admin wfh di job platform Glints? dan menghubungi contact person atas nama Artathina Lase (087842150408)?\r\nmohon dibantu balasan konfirmasinya, terima kasih', '2025-08-07 05:51:56', NULL),
(736, 'Elaine Kittredge', 'kittredge.elaine@gmail.com', 'Struggling with low website leads for Bankwawaylampung Com? This short video shows how our AI can boost your traffic: https://www.youtube.com/shorts/A8YPkXQq4EY', '2025-08-07 12:20:37', NULL),
(737, 'Leejed', 'zekisuquc419@gmail.com', 'Hallo, ek wou jou prys ken.', '2025-08-07 17:47:18', NULL),
(738, 'Leejed', 'zekisuquc419@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2025-08-09 16:13:32', NULL),
(739, 'Georgejed', 'irinademenkova86@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2025-08-10 06:11:15', NULL),
(740, 'Leejed', 'dinanikolskaya99@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-08-10 19:47:06', NULL),
(741, 'Larisauneno', 'xxeju@melssa.com', 'Thank you\") \r\n \r\nhttps://www.youtube.com/@SupremeAudiobooks', '2025-08-11 03:35:19', NULL),
(742, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hej, jeg ønskede at kende din pris.', '2025-08-12 18:12:08', NULL),
(743, 'Leejed', 'zekisuquc419@gmail.com', 'Xin chào, tôi muốn biết giá của bạn.', '2025-08-14 04:46:05', NULL),
(744, 'Leejed', 'zekisuquc419@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-08-15 10:48:33', NULL),
(745, 'Georgejed', 'irinademenkova86@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', '2025-08-16 01:22:05', NULL),
(746, 'Santiago Wicker', 'santiago.wicker84@msn.com', 'Need more clicks and conversions for Bankwawaylampung Com? Watch this short video about our AI-powered traffic service: https://www.youtube.com/shorts/A8YPkXQq4EY', '2025-08-17 12:15:52', NULL),
(747, 'ekddoejkgn', 'uxsmextf@testform.xyz', 'vpqxjmyjlelklquisfmgldyewusezh', '2025-08-17 14:42:27', NULL),
(748, 'Leejed', 'dinanikolskaya99@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2025-08-18 06:52:09', NULL),
(749, 'AnthonyvaX', 'ilaydagunes375@gmail.com', 'URGENT! IMPORTANT: $213,195.12 AWARD DETAILS https://script.google.com/macros/s/AKfycbyW1_ynOGp02_mXe_SUgSQmv0-LmMLGJFfayrXrafdpqXVk7lGxy9svbpC-C7kEQOHL/exec/5x2u0a4u/6v8r/z/44/8q8t9h2t/5v7z/r/yy/6q6m0g5i/3q9g/w/jp', '2025-08-18 16:21:29', NULL),
(750, 'Simonjed', 'irinademenkova86@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-08-20 18:04:57', NULL),
(751, 'kkrrnnzzsse', 'oyucofigo64@gmail.com', '<a href=https://krkns-darknets.com>Кракен ссылка</a> 2025 доступна для стабильного входа. Рабочее Kraken зеркало позволяет сохранить конфиденциальность и безопасность.', '2025-08-22 06:42:22', NULL),
(752, 'AnthonyvaX', 'bran.silb@icloud.com', 'IMPORTANT MESSAGE! COLLECT YOUR $213,285.72 PRIZE BEFORE IT\'S TOO LATE https://script.google.com/macros/s/AKfycbx-gthtb6hEtN4KlsQGLEwLG0UEyg_ja70zT7QVq29SAVy_WjkJVZKJavcTMc8K6DE4/exec/1q0g7j5p/5t9y/h/e6/1e1n7f2q/3e9g/y/v7/4e5b6l3t/6q6q/k/o0', '2025-08-24 06:12:06', NULL),
(753, 'FrankCloft', 'dansbydruscillaoyu@gmail.com', 'https://ondofoundation.help/  airdrop alive! Staking soon.', '2025-08-25 10:05:29', NULL),
(754, 'Freddierep', 'freddiemaf@inboxgate.rest', 'You’re spot on, this is valuable. \r\n \r\nRan into something similar, I came across a resource recently: <a href=https://maba-3d-druck.de>just sharing</a> \r\n \r\nJust putting it here for others.', '2025-08-26 13:55:24', NULL),
(755, 'Leejed', 'dinanikolskaya99@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2025-08-27 07:21:01', NULL),
(756, 'Leejed', 'zekisuquc419@gmail.com', 'Hola, quería saber tu precio..', '2025-08-27 15:06:47', NULL),
(757, 'Leejed', 'zekisuquc419@gmail.com', 'Γεια σου, ήθελα να μάθω την τιμή σας.', '2025-08-27 15:33:44', NULL),
(758, 'DavidKiz', 'peomafomi1974@mailopenz.com', 'To pick news, prefer reliable publishers, confirm facts, note partiality and find depth. Corroborate with multiple reports, use expert insight, and set feeds for topics you care. Build media literacy https://smasters.com', '2025-08-27 17:02:25', NULL),
(759, 'Georgejed', 'irinademenkova86@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-08-28 07:02:48', NULL),
(760, 'FrankCloft', 'dansbydruscillaoyu@gmail.com', 'https://ondofoundation.help/  airdrop alive! Staking soon.', '2025-08-28 11:10:12', NULL),
(761, 'Byronutife', 'dansbydruscillaoyu@gmail.com', 'https://unisswap.trade/ new site, new connections, new crypto.', '2025-08-28 20:33:17', NULL),
(762, 'Merissa Lind', 'lind.merissa@msn.com', 'Is your Bankwawaylampung Com website missing out on leads? See how our AI can fix that: https://www.youtube.com/shorts/A8YPkXQq4EY', '2025-08-29 10:20:44', NULL),
(763, 'vyqduzujet', 'tqtnqpwt@testform.xyz', 'lqsrveyvswqunryeuoknuimvwsyfuj', '2025-08-29 23:49:35', NULL),
(764, 'lodlpmjpxu', 'nfsgiunq@testform.xyz', 'ogjnjuohkmulyewplvoinpyvjltkxm', '2025-08-29 23:49:35', NULL),
(765, 'zvyttqswnd', 'utuuzfsq@testform.xyz', 'hvklfhzwgdpvrzipdwvmdgxutlfppi', '2025-08-29 23:49:35', NULL),
(766, 'TylerMug', '1dansbydruscillaoyu@gmail.com', 'https://pancakesswap.app/ 0% commission is now live!', '2025-08-30 00:26:58', NULL),
(767, 'Leejed', 'irinademenkova86@gmail.com', 'Ola, quería saber o seu prezo.', '2025-08-31 00:42:21', NULL),
(768, 'Leejed', 'zekisuquc419@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-09-01 03:08:52', NULL),
(769, 'Simonjed', 'irinademenkova86@gmail.com', 'Sveiki, aš norėjau sužinoti jūsų kainą.', '2025-09-01 06:43:38', NULL),
(770, 'Leejed', 'dinanikolskaya99@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', '2025-09-02 00:41:04', NULL),
(771, 'Josephkaf', 'kybutejw@tamposs.tk', 'Hello! <a href=https://valtrexeasy.shop/#>valtrexeasy</a> beneficial web site.', '2025-09-03 06:18:01', NULL),
(772, 'Jenni Blakemore', 'jenni.blakemore@googlemail.com', 'Discover how our AI can skyrocket your Bankwawaylampung Com website leads in this quick video: https://www.youtube.com/shorts/A8YPkXQq4EY', '2025-09-03 08:39:57', NULL),
(773, 'Larisauneno', 'htytn@melssa.com', 'Thank you:) \r\n \r\nhttps://www.youtube.com/@SupremeAudiobooks', '2025-09-03 15:10:00', NULL),
(774, 'Leejed', 'zekisuquc419@gmail.com', 'Hallo, ek wou jou prys ken.', '2025-09-04 08:54:58', NULL),
(775, 'AmeliaBix', 'emmanaite981@gmail.com', 'Hei, saya baru saja menemukan situs Anda... apakah Anda selalu sebagus ini dalam menarik perhatian, atau apakah Anda membuatnya hanya untuk saya? Menulis kepada saya di situs web ini ---  rb.gy/3pma6x?Bix  --- nama pengguna saya sama, saya akan menunggu.', '2025-09-04 20:01:50', NULL),
(776, 'Harlanantem', 'nomin.momin+119d2@mail.ru', 'Mfwdjwdhefiejfh fhiwuewuoioruiwes jkcsjhcksdlalsdjfhgh ejdowkkDIEWHRUEOFIW JIEWFOKDWDJEWIHFIEWFJEWFJIkhfjejfie efjfwjdfe bankwawaylampung.com', '2025-09-05 23:55:10', NULL),
(777, 'DavidKiz', 'peomafomi1974@mailopenz.com', 'To choose headlines, prefer credible publishers, verify facts, note slant and find thoroughness. Crosscheck with multiple reports, use expert insight, and set notifications for topics you care. Build media savvy https://smasters.com', '2025-09-08 18:33:57', NULL),
(778, 'addgsdf', 'budasd12di@gmail.com', 'dasdkujyhgfdscbvcxwdwea', '2025-09-09 07:59:28', NULL),
(779, 'mfjhdjrmwkiogxibuqks', 'xjwkehprnwlawvss@gmail.com', 'aaxclatmrrqljflgcnne', '2025-09-09 08:06:48', NULL),
(780, 'mlxrodowydcsvboikiqn', 'rqkicaogiwogqnyd@gmail.com', 'jnzdmhbhtpcbbxjubkqx', '2025-09-09 08:06:48', NULL),
(781, 'vjibybmtecfvymvjkwdt', 'xfujkylcfquhycjh@gmail.com', 'ebleildxxrvydrvisqoy', '2025-09-09 08:06:48', NULL),
(782, 'kwqtgeiyvwjimpztakjx', 'yjvccyxromprowkm@gmail.com', 'eatscaxymxegbegkahng', '2025-09-09 08:06:48', NULL),
(783, 'tuacufzvdeqywgtwouwq', 'czpsuafpgykyxnri@gmail.com', 'reznpwdyofjlshatvmwa', '2025-09-09 08:06:48', NULL),
(784, 'kdwthmbucnxwiwqtyque', 'sanjwnzjkgidqbmy@gmail.com', 'qrwymwyyjwpmqpwshgvj', '2025-09-09 08:06:48', NULL),
(785, 'eaadxopyrgomkgvtdqaq', 'erbukcjleqlhecge@gmail.com', 'zokyarkrqpcawonvwgoj', '2025-09-09 08:06:48', NULL),
(786, 'tifkviwhhccizokoctse', 'hprtsnlaszwjunic@gmail.com', 'mecgaestktookjtvnuqs', '2025-09-09 08:06:48', NULL),
(787, 'smtlcainzmhshjqfrglf', 'ksiemohjjzbgaoah@gmail.com', 'icdrcfsecvnrgypnpmmw', '2025-09-09 08:06:48', NULL),
(788, 'yjlhejdenvbyoiofabdz', 'ikfyshetnpjtzuho@gmail.com', 'eyslewprphizkrgqzywd', '2025-09-09 08:06:48', NULL),
(789, 'qbumklvgnwviyrfxlnvv', 'rklkfkkqidvegkhl@gmail.com', 'aivghnxprsksdvquumgj', '2025-09-09 08:06:50', NULL),
(790, 'hfzmrswmutkdddecwkub', 'uyocyesxermpawdz@gmail.com', 'jsomnmurpjowygkbdmdx', '2025-09-09 08:06:50', NULL),
(791, 'lvtyhlgbxnrlvgszvlhx', 'ybgsbiijenevueip@gmail.com', 'ltqskziseapvwgeuptrj', '2025-09-09 08:06:50', NULL),
(792, 'ljwluyzjjvhewkgqnfec', 'zimftetpjndloael@gmail.com', 'vvcxduzanhtfrmlejwpz', '2025-09-09 08:06:50', NULL),
(793, 'kmtydtrwaaycaqogciky', 'ajrtourlviojfyei@gmail.com', 'kmukpqyyhmokibyhrhjy', '2025-09-09 08:06:50', NULL),
(794, 'sonslkptyojkaxfftrdm', 'rgkapodsmzfzjqkc@gmail.com', 'orcahosetsefbxxmpiia', '2025-09-09 08:06:50', NULL),
(795, 'hgcxpavywrvgagfaflid', 'shmcsthfbcgcfubm@gmail.com', 'jhirmzufyxsxoqwdgwbj', '2025-09-09 08:06:50', NULL),
(796, 'qsnhqjxeyibsbyptdunn', 'wknxcoxxzstdrdea@gmail.com', 'wobsluflbfczpldvrfzr', '2025-09-09 08:06:50', NULL),
(797, 'fvornjnfkxllphjurzsa', 'prwskshghaukfswa@gmail.com', 'ufnazenvfbdtopbumqjp', '2025-09-09 08:06:50', NULL),
(798, 'rfbmqdhrtqzpykpirsaq', 'isbhtqsiowdwpizu@gmail.com', 'mkjdcuwnntmoueqhbhoe', '2025-09-09 08:06:50', NULL),
(799, 'dxqtybdwxqwqrakedyuy', 'ocmwodvqhhsuwxjy@gmail.com', 'nxxajclaxycapbswcjqb', '2025-09-09 08:06:52', NULL),
(800, 'kdzevxboreakxrtjayfi', 'ihhaypnpakieyhyj@gmail.com', 'avmsfmzyfavcagjhyjdp', '2025-09-09 08:06:52', NULL),
(801, 'mtolkuokifjqsgtzlare', 'ewbenqupeahntdkq@gmail.com', 'fdzvjrwltbsvisrcflos', '2025-09-09 08:06:52', NULL),
(802, 'jenorphviqhhghhimbyg', 'wwousjbmnzfvlwdo@gmail.com', 'tmjdewtomthrcwxkfqvm', '2025-09-09 08:06:52', NULL),
(803, 'bhpowquhzoltfcluccup', 'uyayzfponylwntmo@gmail.com', 'xwmemnooowmvybgaofeh', '2025-09-09 08:06:52', NULL),
(804, 'kqdocibqpnpsqlnlhkqv', 'teedojsepzbuyrbp@gmail.com', 'cqhljizxfcjxvjnamspf', '2025-09-09 08:06:52', NULL),
(805, 'ctqyjbwxpqiupgnacnfu', 'hqnqvmteilfileki@gmail.com', 'sdzumehblopwkqeijeuz', '2025-09-09 08:06:52', NULL),
(806, 'bkwaetydkufmnekqanas', 'bjvhihuvaujpddbe@gmail.com', 'fgmtedubavwymbiynqsg', '2025-09-09 08:06:52', NULL),
(807, 'pxaufrtgagzcfytzxtcf', 'divtwynfrbcnqjhi@gmail.com', 'duygrrfgomkuleyvqvki', '2025-09-09 08:06:52', NULL),
(808, 'pgwyfddaqirqbodqyqvi', 'zbiatooolafbpnxm@gmail.com', 'vilkjiidxdlpjqgdnimd', '2025-09-09 08:06:52', NULL),
(809, 'nyvooabesielgbnimaaj', 'zzqswuzszcpffhbl@gmail.com', 'kjukzgnckspkhjafrghf', '2025-09-09 08:06:54', NULL),
(810, 'pyjucnfdpkyqysmimmsu', 'kidjalalbxnfvzdx@gmail.com', 'rtdrzvnatjbusqfqrxxc', '2025-09-09 08:06:54', NULL),
(811, 'crhxqpwxotogthiqnwbr', 'qdpbsfghwbobbpop@gmail.com', 'lyvoqcpjfkndrweeixwz', '2025-09-09 08:06:54', NULL),
(812, 'jgvnixbhussxutjhwffh', 'rwxduagmabvfxgaf@gmail.com', 'jspscxjjtxjcwjkpuaxc', '2025-09-09 08:06:55', NULL),
(813, 'itwfmzxpcgkntzkjytgv', 'mhniryyrjalkqfjg@gmail.com', 'opntgzxcinnptidpmlux', '2025-09-09 08:06:55', NULL),
(814, 'oakpwzkdmnivhirzdnlz', 'mjcfdhwuidxihnbh@gmail.com', 'pxvmcdfgjtovwbwmowwo', '2025-09-09 08:06:55', NULL),
(815, 'bkgqtcdwvfrcepytcrvk', 'bprsnycjtsrdxgkh@gmail.com', 'yfnppxgfkimyrfnfqcfx', '2025-09-09 08:06:55', NULL),
(816, 'zzltbbwjlriownygkpbf', 'lfnsvqvzkfurqfrn@gmail.com', 'arvsgamooitebuoocolf', '2025-09-09 08:06:55', NULL),
(817, 'adftclnxuxjqirzwqkio', 'eyfqpensdbdkcxzu@gmail.com', 'libooxqdkcjpdfdlmhpe', '2025-09-09 08:06:55', NULL),
(818, 'okefujhqckbhvhuxafqa', 'xxiozwiomozsljgw@gmail.com', 'vgejhfxqhdqyxupkxrvh', '2025-09-09 08:06:55', NULL),
(819, 'usiyhomtpoiaececsejs', 'mkmghnzclitwegpr@gmail.com', 'balpkpeptlhefsbkqpnf', '2025-09-09 08:07:03', NULL),
(820, 'isebqeixxiesjemxjrfe', 'iehfvkkzbhwmvyag@gmail.com', 'mptgbnvapgotzvjucvca', '2025-09-09 08:07:03', NULL),
(821, 'xbsoevugxbwxxotlkomj', 'wylnhbbfuiszrvua@gmail.com', 'deeoxmyzqpwotuwssvpt', '2025-09-09 08:07:04', NULL),
(822, 'tnxlyzjafkzelpappkfy', 'zzpsymfhvdxcghjl@gmail.com', 'uhlxpdxvpblknmsaerap', '2025-09-09 08:07:04', NULL),
(823, 'ljpldhotsbytarspsqfu', 'rzhydkiwslfckruu@gmail.com', 'stqjhtnrcadgvvhuxngx', '2025-09-09 08:07:04', NULL),
(824, 'kenjrdhyerdiadsuackv', 'unylggxpwlkjevpm@gmail.com', 'riwhujtlgfibisuatyys', '2025-09-09 08:07:04', NULL),
(825, 'ufiltrcgnfrairoatjpq', 'xlihpyhnrmjcalip@gmail.com', 'vovbrgdhkuxyazwdpdkt', '2025-09-09 08:07:04', NULL),
(826, 'znycyrngbqqdbvtqmypj', 'aujmomjlpaebuldf@gmail.com', 'sqgqefqtjsvmhbnrcngk', '2025-09-09 08:07:04', NULL),
(827, 'lnotcyaxbbapyedculpi', 'ehemrrhgsfxbdyhw@gmail.com', 'rmjakkfqeeaekcwrhwcm', '2025-09-09 08:07:05', NULL),
(828, 'sqorvpcuduvqkwvlovby', 'skblvkewvxfenlor@gmail.com', 'mihesujbozdkjbhpwnit', '2025-09-09 08:07:05', NULL),
(829, 'pxnduqwusltocyqrfawk', 'fgfgrbgavbzmczhb@gmail.com', 'ercuphlcikendwnmgjol', '2025-09-09 08:07:05', NULL),
(830, 'bjsmfilqkjkyetkzpnyf', 'ogyqrwoyxrpmknlq@gmail.com', 'nvdjghdcfjfzcweolisw', '2025-09-09 08:07:05', NULL),
(831, 'ydcwvdcubrkvrwhdcfkt', 'ltruyhcaazjniynv@gmail.com', 'pezsjekxtmpsgjdysdsj', '2025-09-09 08:07:06', NULL),
(832, 'lonzzfnbphdvtjclsmxd', 'txnztxfgfpcgtayv@gmail.com', 'tyjaxbpktykvkpddnhjn', '2025-09-09 08:07:06', NULL),
(833, 'xdrqaffqhxqmpjulpckz', 'zfkxyojviaxlezxg@gmail.com', 'xtwhqmrkjlgketbugziz', '2025-09-09 08:07:07', NULL),
(834, 'uzphremlxzjyhekqkkts', 'tmkemzwzaipbrfqh@gmail.com', 'jmxdwbnkmwuguvapmbqv', '2025-09-09 08:07:07', NULL),
(835, 'hfuxnnegydjpnqmilqgc', 'dscwmtmcaxkoutqy@gmail.com', 'slhivxmxefxdrnhvmeby', '2025-09-09 08:07:07', NULL),
(836, 'tijqllxufjzwwhiunwzo', 'hajqcnwyltditgge@gmail.com', 'ernpgralehvttdlzypdk', '2025-09-09 08:07:07', NULL),
(837, 'whzeeyfgarwvhnmkjqhi', 'hhexcgkiucqrnhdr@gmail.com', 'nnofzvpamrzvexbdhatn', '2025-09-09 08:07:07', NULL),
(838, 'wfyhbtzrtrnhooenntrm', 'ecuayuxxwnvlbrgo@gmail.com', 'gfniiluelrmmcprobdvi', '2025-09-09 08:07:07', NULL),
(839, 'onprzhwjsvkjkzuejahg', 'cuzjadnnprsalnqn@gmail.com', 'zqidkcdrhthqnkatqlio', '2025-09-09 08:07:07', NULL),
(840, 'tljcgvfnotykjdfnwnln', 'unvnjvaejxyrgqxr@gmail.com', 'vfepqhfcebmglcazgbqt', '2025-09-09 08:07:07', NULL),
(841, 'jpzybfowtwitkmrivtbm', 'ubvubdaconwqeggi@gmail.com', 'epocazhuqiaoncnuqeks', '2025-09-09 08:07:07', NULL),
(842, 'lcsljxxqkxbocwifsuqc', 'qoumuimzvfnzvhjl@gmail.com', 'wnuaomnueajqtoqaqxiz', '2025-09-09 08:07:08', NULL),
(843, 'qciermawlsubbjkigvvq', 'qgtljtjvrhqvdgtp@gmail.com', 'ufdwfvyolectxgcvuxwl', '2025-09-09 08:07:08', NULL),
(844, 'iteabhbjkfhjqtyywmmt', 'wiuhulknvilwkuph@gmail.com', 'bvpgarlfxaqyvztrujvw', '2025-09-09 08:07:09', NULL),
(845, 'fhdsgbibszuicpnhnlzj', 'qotecapysapgdkyq@gmail.com', 'uotxhmtfzfnozsiirgdn', '2025-09-09 08:07:09', NULL),
(846, 'vjlhpxyhajlhwemcyuei', 'savtuhqpymyrjdon@gmail.com', 'ugvpiuyfhlumnhsoypip', '2025-09-09 08:07:09', NULL),
(847, 'vpmwgfonnovoeobcnnry', 'nueseocszfojdpox@gmail.com', 'qwcvyxszrvjmyuxclyhx', '2025-09-09 08:07:09', NULL),
(848, 'hakskrunzqqgkruvvxvc', 'wmibvdkfdvzasyqp@gmail.com', 'zqifqlucjwqwrvbardpv', '2025-09-09 08:07:10', NULL),
(849, 'qknmlwvfrmohevabyigd', 'mjaxtrplpyulqfaz@gmail.com', 'wefsvbvepxttgusqrdwr', '2025-09-09 08:07:10', NULL),
(850, 'bkezjfhdzfnypcjprlwf', 'gatkpgnkmqxhhviq@gmail.com', 'cumkgekulrhkudmgnkhf', '2025-09-09 08:07:10', NULL),
(851, 'qkzelogljtlcwzpfycbi', 'oqrlbjblhllgkrps@gmail.com', 'mssxhlvhbztsfwmfjpds', '2025-09-09 08:07:10', NULL),
(852, 'rlkbxyubzgqztwfwlgaf', 'ammqurfbzmvcsosy@gmail.com', 'rrusmqzqrpupqzepqmqx', '2025-09-09 08:07:10', NULL),
(853, 'cvdmsyvyjzmcrptvrlds', 'bcqbwtvfduqmxyzi@gmail.com', 'zudabhlrgotmwhhiddsf', '2025-09-09 08:07:11', NULL),
(854, 'ntxowuevfrclubqkfoqj', 'nprsejqoylfgoxuv@gmail.com', 'gtqpoakuzpooqcljopmq', '2025-09-09 08:07:11', NULL),
(855, 'cquopyzjlmvlzvvkqpyd', 'adujrflfewarzoid@gmail.com', 'ivfgeazwnpgqruefzxht', '2025-09-09 08:07:11', NULL),
(856, 'vyslnbkzuqymyiaovvff', 'vtcsxcawtjkkjaav@gmail.com', 'cistkaplvfxjbpiaicdl', '2025-09-09 08:07:11', NULL),
(857, 'klyjczgylsbupuytwpet', 'glpkaaaujuqeyxlk@gmail.com', 'nzupcjqwhbzvadpvycno', '2025-09-09 08:07:12', NULL),
(858, 'sfltvgsowtjpeqnmtljf', 'skfqmsdgftjkboqe@gmail.com', 'ogaginplfulpluswyppc', '2025-09-09 08:07:12', NULL),
(859, 'rmuceqsewczdiecalivk', 'pbuftnuwcvignimx@gmail.com', 'otmuiwrjkfzrnqsccgak', '2025-09-09 08:07:12', NULL),
(860, 'yefirlaufnzrdcnwqunt', 'himddlgezgjmgqau@gmail.com', 'snlnnekzhyiuykdpdmxp', '2025-09-09 08:07:12', NULL),
(861, 'yulgorrofbcdlgshijjq', 'iscxuzdngecwtxbw@gmail.com', 'jadxmubprdwdydndpwlp', '2025-09-09 08:07:12', NULL),
(862, 'ulbbpzbzbwjliaglnzzt', 'homlllxgddngfeck@gmail.com', 'kuybqecxohzgnwpukhbz', '2025-09-09 08:07:12', NULL),
(863, 'ozufmllpgrvekjbtyckf', 'jztopydvomcrpjcd@gmail.com', 'imtieyvnzfpcdxlgubok', '2025-09-09 08:07:12', NULL),
(864, 'dzninpwagttdsgsyelpe', 'arhiakgkhrssfcxy@gmail.com', 'xotambozwrudqmomtqmb', '2025-09-09 08:07:13', NULL),
(865, 'glrqwluupnvnzjzcxvkv', 'znsdecwjuzakkzzd@gmail.com', 'lcwxbwuzbqmwxdrfcfcs', '2025-09-09 08:07:13', NULL),
(866, 'xeytdlejpufvfwivvena', 'gavyrwdaqdkfjsqu@gmail.com', 'gleifueqnqsjdwepoops', '2025-09-09 08:07:14', NULL),
(867, 'aqnfowmwwlaincisvluf', 'sxdymadtswtrsrfm@gmail.com', 'egwivceulofnycsgjwqm', '2025-09-09 08:07:14', NULL),
(868, 'fcnjogmwulcdddyhwjbx', 'dqyvktcqwclfbkip@gmail.com', 'lzeplgzkdsnteyjcbxzu', '2025-09-09 08:07:14', NULL),
(869, 'wsacthkwvbdwqfrtoypu', 'hheqsqhligdbnjpf@gmail.com', 'phhfxebhpkwxvtczkwgm', '2025-09-09 08:07:14', NULL),
(870, 'ggkusymgekmzgaqerbjt', 'zfkdzpymxexqwriz@gmail.com', 'yjyjdkzwbltwiptbrviz', '2025-09-09 08:07:15', NULL),
(871, 'jxtoccaejpzcmmqlrftx', 'neulisqsnsmyxogf@gmail.com', 'vtosmjzggbjvfsglcikc', '2025-09-09 08:07:15', NULL),
(872, 'wyzjmxtueuzrljtenfee', 'rkbnxhtidjmkdnet@gmail.com', 'gjcczgeciaxgcyudvfks', '2025-09-09 08:07:15', NULL),
(873, 'zapzrxeagpfktgheunal', 'nkxmdzyiotkoiaxy@gmail.com', 'kdislbsndkfynuieehcy', '2025-09-09 08:07:15', NULL),
(874, 'eixdmvujgsjxzlrkffsz', 'irdrlnjrsrxtxesh@gmail.com', 'hhjuvhfgpkklvwddsjzn', '2025-09-09 08:07:15', NULL),
(875, 'sqjkbhavnfradnwgewrk', 'kclhfclxfjikuavr@gmail.com', 'jipgddnxmrvtbpjetbqi', '2025-09-09 08:07:15', NULL),
(876, 'fcpowaqtzherwwyqucci', 'dbwgmfxvopkabjvq@gmail.com', 'brvrlpxpwzrjpwtedkda', '2025-09-09 08:07:15', NULL),
(877, 'cvhvhuljetfvhjpncbaa', 'nqrfbzhtuvtiwgct@gmail.com', 'iofjfazhoeaqcqvxzewy', '2025-09-09 08:07:15', NULL),
(878, 'efvwhxvmqwxcrpnpnuwd', 'gjaczmnpkmcqodoe@gmail.com', 'nczsndmifrqvxyvyupxb', '2025-09-09 08:07:16', NULL),
(879, 'xfjylehdkxqbjxvdjmod', 'szwsqpdhcjgapmsm@gmail.com', 'kxbginfdtoavnhpjnpap', '2025-09-09 08:07:16', NULL),
(880, 'klapickpgolkedgskbzi', 'sffoojmgfozhffru@gmail.com', 'urclqhrgnzfviapfuniw', '2025-09-09 08:07:16', NULL),
(881, 'zhpzzlrrsijkhnrvjjvd', 'iuymiqymsdjfwmkr@gmail.com', 'eqghnkmeasxdhghsgpwo', '2025-09-09 08:07:16', NULL),
(882, 'atiqotbvdivqhcipnagb', 'lbeinphhkppjxtfe@gmail.com', 'mbbxqfluwsqiiibiboup', '2025-09-09 08:07:16', NULL),
(883, 'ahwpihleunhjtendiwim', 'aitdrgxhrhneeeqw@gmail.com', 'hgosfiqpezygvhdrfbbw', '2025-09-09 08:07:17', NULL),
(884, 'wkiqthjiyoqlqpqujaqf', 'zvuhmxmypmdxgeag@gmail.com', 'redavvjylrtbrzsdioei', '2025-09-09 08:07:17', NULL),
(885, 'solawoxozkgykhccuxid', 'hubecgyniovhvbdj@gmail.com', 'liyxrlsmjkbygwmeeasj', '2025-09-09 08:07:17', NULL),
(886, 'jwdquvajmppfiuvhdagj', 'zckybjmjffgzexjx@gmail.com', 'shongkefxudfjybwuril', '2025-09-09 08:07:17', NULL),
(887, 'weknmqejvweoezjjriam', 'qpojtfhtnpyobwht@gmail.com', 'dksotegiuecmmalrxxxn', '2025-09-09 08:07:18', NULL),
(888, 'pxhhlqzipmlgevbpkknu', 'gtzcywjetxtbiteq@gmail.com', 'ejuvraneictyzrwqchxq', '2025-09-09 08:07:18', NULL),
(889, 'rkcilabzuwbnpdffpcyy', 'nzibphfpgfrasslj@gmail.com', 'xysaubkzeiwqpylblnqr', '2025-09-09 08:07:18', NULL),
(890, 'zvqrgkdvaxwxofnmecgb', 'ttgtcukkuidhykau@gmail.com', 'foscnfdyeuklwqfnueia', '2025-09-09 08:07:18', NULL),
(891, 'zmtfbobigjpbbfyzqxhm', 'aijjnxxgsavhdoxt@gmail.com', 'evtesxkhtmwhsiyiygkw', '2025-09-09 08:07:18', NULL),
(892, 'dzvzjcuuuzrjjyggiotu', 'mehoxpfdqkitqhiu@gmail.com', 'audcnfejtglzfywwwhtc', '2025-09-09 08:07:19', NULL),
(893, 'avvpraqfwqssjaraoqnt', 'rmcflajrvdzvzywu@gmail.com', 'tdtsyprmtgrvlgyphmcg', '2025-09-09 08:07:20', NULL),
(894, 'ftverbvbfrxhpvenspzu', 'nwdqfjcqixlqzatv@gmail.com', 'nkpwsfbqbjkgakrgenih', '2025-09-09 08:07:20', NULL),
(895, 'riwfyfevvqetfghbwrti', 'qotkimwjotxqvsks@gmail.com', 'dstribvlwzyjtwabmhde', '2025-09-09 08:07:20', NULL),
(896, 'jeuwkxzrpfoqtzxweoke', 'nptuaisbljedvlyh@gmail.com', 'knjgrgztsolexjtuemdc', '2025-09-09 08:07:21', NULL),
(897, 'wxhumxnafvsemglolrzq', 'zyflyoojokzbwqpa@gmail.com', 'ijxplsdwpqvabpeqfnil', '2025-09-09 08:07:21', NULL),
(898, 'eugcwplkjvwnnykcyxzn', 'awzyexdtncpebcue@gmail.com', 'zpttwjcqcytmshceznjn', '2025-09-09 08:07:21', NULL),
(899, 'hfqbzhiptedeotluimvv', 'ahynywtgvkystidc@gmail.com', 'edhfdkrejziudeeexwsa', '2025-09-09 08:07:21', NULL),
(900, 'rasshxabdoxwrftscbps', 'rxzzmbdsoyuhujzo@gmail.com', 'dudjfjxcapagrhelimga', '2025-09-09 08:07:21', NULL),
(901, 'sweioocognedshpsiynl', 'fvwpvfnrlbfjgqlf@gmail.com', 'dagsvstpvtpqjkixvxob', '2025-09-09 08:07:21', NULL),
(902, 'qhqbvffneztehetkddqy', 'sjubjiztcmzocmkr@gmail.com', 'bfqvxkkxfkxyhfelbksi', '2025-09-09 08:07:21', NULL),
(903, 'lpjesjfcxohjeeiycqeg', 'gdjdabgipltssdgs@gmail.com', 'hitrcwtwssdplvxpwbft', '2025-09-09 08:07:21', NULL),
(904, 'cjncwrneyicfkpuaypgv', 'cyzxcefbsnbhgawy@gmail.com', 'cjbojhezbgwflctycnmk', '2025-09-09 08:07:22', NULL),
(905, 'tngzyjjuffxsbiqofiyh', 'nuharpbayqxlcsmj@gmail.com', 'kmeywunvohjirlpglgvz', '2025-09-09 08:07:22', NULL),
(906, 'xczstvmlujlozvnzsxtl', 'hecflftgtwbkilpe@gmail.com', 'vybhhflwvxtuljyeimtc', '2025-09-09 08:07:23', NULL),
(907, 'hsbmzrmhspmvocfqkpgk', 'gpmjuiiskwbesrjr@gmail.com', 'olcamvefuyvnpbnnyxvv', '2025-09-09 08:07:23', NULL),
(908, 'yjzzdvitpjcyfoxxlkxf', 'bhplszkasxslzsqr@gmail.com', 'aejkgokmzoayyjyddeoq', '2025-09-09 08:07:24', NULL),
(909, 'mjaivgywvilovixzzqme', 'sbjzefyfoikkimgt@gmail.com', 'ljohfdzvelzemylsiwrn', '2025-09-09 08:07:24', NULL),
(910, 'lmvdkrmwidwcizzxateg', 'vmlwknisvvrmuafo@gmail.com', 'cpqykbhhvtinsmbvqjki', '2025-09-09 08:07:25', NULL),
(911, 'xxojydontfxpryflrhqc', 'ewryeitzquedkmll@gmail.com', 'wcbzaqtnjvzfjmwbbjuu', '2025-09-09 08:07:25', NULL),
(912, 'cyxlcdjafaatcyexbaye', 'qisqposqlnvwlmjw@gmail.com', 'vfiqrnqcmaqsjyemmlwu', '2025-09-09 08:07:25', NULL),
(913, 'rvkavioouousshntwjug', 'mniagjzozcghxzis@gmail.com', 'ckwqxvlqsrjujexgjprn', '2025-09-09 08:07:25', NULL),
(914, 'caafolodbpvbczpluhno', 'wklrtqzbwzwcjdrv@gmail.com', 'pcygrxhpytppiawujpds', '2025-09-09 08:07:26', NULL),
(915, 'fqiuvxllwbxlukwpincf', 'svwxsoccomgbleek@gmail.com', 'qdzagplwhgioymetdezs', '2025-09-09 08:07:26', NULL),
(916, 'usskoxmrcronjypvmteg', 'sriyjsjbavsfvywq@gmail.com', 'nboizvbenpadovfswrgh', '2025-09-09 08:07:27', NULL),
(917, 'pttczzpdysrzzrvjpurh', 'gttjrxjjqyrvlbzd@gmail.com', 'nxoswkdihtvrhcjcwdin', '2025-09-09 08:07:27', NULL),
(918, 'pxykbcevadhhdftakxjm', 'nhpfvxnprnaupmwt@gmail.com', 'jubfytmwpwtahgtksjzd', '2025-09-09 08:07:27', NULL),
(919, 'ueyfcbxoyqydkoxqtqzf', 'vjczjeezcjnmlplj@gmail.com', 'ntqsxamdwdceixtyhgzy', '2025-09-09 08:07:27', NULL),
(920, 'bteeblaoaketmddhglep', 'vfmrhmplnkbptscw@gmail.com', 'tufrxunwphxgzfuwxucs', '2025-09-09 08:07:28', NULL),
(921, 'mophggqldjmuujprjkbc', 'fbmldtwcrnvzvmya@gmail.com', 'hdbrndaquzwpzsprgbes', '2025-09-09 08:07:28', NULL),
(922, 'xkgvbvmqdilzqvgnchby', 'owziwcfpbrdzjclv@gmail.com', 'xxrbmlxfsooztwlmdoxh', '2025-09-09 08:07:28', NULL),
(923, 'dygfvrstmtoqlgscdjld', 'ljlrfskdozptsflq@gmail.com', 'xjqegxtkwlilmotddhdi', '2025-09-09 08:07:29', NULL),
(924, 'ocsovnylaxwdktpgsktu', 'jpufqpbqbivjftoe@gmail.com', 'jscneqruvijjzavtnlxl', '2025-09-09 08:07:29', NULL),
(925, 'ferolgxmljsxampgvclr', 'oecpcefgqezwnbrq@gmail.com', 'qotyyepxhaztldafiztm', '2025-09-09 08:07:29', NULL),
(926, 'jovnawxichjyjdeixjju', 'lagkaxvqlwglfptb@gmail.com', 'jqnegauihhugkmyywilp', '2025-09-09 08:07:30', NULL),
(927, 'xueeqsgbrlwvfeifofqt', 'bnjbbszslrgkeqcv@gmail.com', 'eodmwggaatyuivrpvnkz', '2025-09-09 08:07:30', NULL),
(928, 'aienqovlsjajfttqialg', 'glapablirptfehfi@gmail.com', 'jltmjwqcfpgnbwfyvmgz', '2025-09-09 08:07:30', NULL),
(929, 'adpewercrpcopoxdldem', 'gguomrlxkdscikts@gmail.com', 'ehmzcjqfkqlqapbyewmy', '2025-09-09 08:07:30', NULL),
(930, 'zhwirnfmbuuybktdbaqk', 'fcioarnxlehsoyas@gmail.com', 'aqiduxrtijpsfzynahga', '2025-09-09 08:07:31', NULL),
(931, 'fhdmlfhdtyavrfssficr', 'vsjcuxzshdmnxdpd@gmail.com', 'illnxjvjkxnpowwnjtnn', '2025-09-09 08:07:32', NULL),
(932, 'ejczvcbmscriatwifhhc', 'sesvwjwnyfrmrjgg@gmail.com', 'rensszzjngtobrgwgnvy', '2025-09-09 08:07:32', NULL),
(933, 'pabpunqjknoyrkzrjlxf', 'cdnmiezwmurgxyia@gmail.com', 'cpnwmrdhhjfhjfqdicyt', '2025-09-09 08:07:32', NULL),
(934, 'tbjivwspwmjtabfcvnbi', 'hlxzznzknkrmcgdd@gmail.com', 'dlcxdlosbmqtxfclixxr', '2025-09-09 08:07:32', NULL),
(935, 'lhxcrbyabyyrpflnvymy', 'tbviuumwmjlrizia@gmail.com', 'thevdezmalkelncroqji', '2025-09-09 08:07:32', NULL),
(936, 'bfaskqdqlchtprqokmle', 'dlhjifedagkdipzg@gmail.com', 'itgiuuhreaxvxrlfqdgk', '2025-09-09 08:07:32', NULL),
(937, 'cckgnafzfpgjjwhdidce', 'ennjmtktvpbhxeiq@gmail.com', 'jaxhjuocufmujklkjgpv', '2025-09-09 08:07:32', NULL),
(938, 'vxmupteenddjradqhxqf', 'rqnkushmldrbtruf@gmail.com', 'aneumgwomydnxbkluygz', '2025-09-09 08:07:32', NULL),
(939, 'jwgmpvdznwuwfavttmvh', 'pbwzkzyosfqclwne@gmail.com', 'tnfdvbxgnwoujdatoivd', '2025-09-09 08:09:51', NULL),
(940, 'nbhpizyxmuucooqpluyx', 'dnspxwenwqpftvjw@gmail.com', 'aszzjlfhvqwlqhceiijo', '2025-09-09 08:09:51', NULL),
(941, 'smowtserlopzgpbjxbev', 'spmawyjtndidoeoa@gmail.com', 'uoyaizhuosydmopzsvkm', '2025-09-09 08:09:52', NULL),
(942, 'kkongghqruffctlobdkb', 'umgabcfhamzthegz@gmail.com', 'rpprhjvfeudiztivrhrj', '2025-09-09 08:09:52', NULL),
(943, 'tpgchfuebmpdzzemfwea', 'owtylujklqrkpzwt@gmail.com', 'enefqtjkyjhmenmhsbuw', '2025-09-09 08:09:52', NULL),
(944, 'lnrwovnbuuregxgbcjll', 'lmnyhoqvuoxszezq@gmail.com', 'adsgmjhqjdgicxfcnjyp', '2025-09-09 08:09:52', NULL),
(945, 'hiouujhnmrfyrvdsijqx', 'vykhluoopolylkut@gmail.com', 'xjcylixdevtycyqjvzuq', '2025-09-09 08:09:52', NULL),
(946, 'wlgiuwtacwnafyxuhwdw', 'nszxzdfekekwszxv@gmail.com', 'kuziubxpuixqpuakgnia', '2025-09-09 08:09:53', NULL),
(947, 'vhmborulezwkklpotamc', 'kmtcfyzqvkldcqxb@gmail.com', 'bwiuekoqmscldkqbfgwt', '2025-09-09 08:09:53', NULL),
(948, 'mdlhckpfgapcmifmrbox', 'erswlmtwyfqczyhr@gmail.com', 'qudzadnknyavflvhrvsr', '2025-09-09 08:09:53', NULL),
(949, 'qanyabubybhubtifrxqq', 'dzdsdphovmeyoqvn@gmail.com', 'ipfjnqhxowgkpqutlgvj', '2025-09-09 08:09:53', NULL),
(950, 'qthocuucafohcjsinuxc', 'dmbksbobpcftjisd@gmail.com', 'ksptqraeeelsivxddgxf', '2025-09-09 08:09:53', NULL),
(951, 'lkkgnxlkvmzirzfkxhom', 'octahljysjmoxpju@gmail.com', 'qnydfzufsyavhqdkqzwf', '2025-09-09 08:09:53', NULL),
(952, 'lzpfluhpvpuabojxkexz', 'qlvxnbguuiixmlkc@gmail.com', 'qknptmmiebewgszakgro', '2025-09-09 08:09:53', NULL),
(953, 'cbyanwqnpsnxlmrkduvl', 'irwnboqulvrhbsip@gmail.com', 'zfkvaijoilwaeznwfpny', '2025-09-09 08:09:53', NULL),
(954, 'iolynxppktujsqjbbgcz', 'egcryouvrsqlhmky@gmail.com', 'fjcaazpwshbqsqacyixa', '2025-09-09 08:09:53', NULL),
(955, 'dvlnssrgcrwnydbjjhnu', 'fsbxzuskvmvihojb@gmail.com', 'btbfjfbpvjmddrxslhyl', '2025-09-09 08:09:53', NULL),
(956, 'xpxpzwcgvmnsfavwqvkk', 'dfajcxgpsafcrnkh@gmail.com', 'vhkwuwndscatihqnwsre', '2025-09-09 08:09:55', NULL),
(957, 'fmaujndtbdvyivvzmgrv', 'twmndwljyuygvmka@gmail.com', 'bxebgxcenxjfyuqfcili', '2025-09-09 08:09:55', NULL),
(958, 'sjzrklyfdvuemgsqlfzu', 'muijekcihfrynvxp@gmail.com', 'ikdvpdjmppjcfoniohps', '2025-09-09 08:09:55', NULL),
(959, 'yliaednorcqmpholltds', 'vyucklyrfqtaxqll@gmail.com', 'jjlrybiqwtoyhbasrdwe', '2025-09-09 08:09:55', NULL),
(960, 'dcewgfiikrgachqgdhwf', 'gcxbhjnrndxdkyls@gmail.com', 'zyxvjxwspkkjyuecvqlh', '2025-09-09 08:09:55', NULL),
(961, 'ujnspgfjooknluofeasu', 'jzdlriaacwoczybl@gmail.com', 'mxrxynwoskpfdqskfzah', '2025-09-09 08:09:55', NULL),
(962, 'ydhbislkwmgnhrkgdpji', 'qongvjtsejvmditv@gmail.com', 'wwcylchjmodpyzhzqbqj', '2025-09-09 08:09:56', NULL),
(963, 'fzztmadjvkerqphxrlaq', 'ujhfunbqmghandqe@gmail.com', 'anoeejbplrkiylyhqxiu', '2025-09-09 08:09:56', NULL),
(964, 'sdzfgydnvxgstlrhlrns', 'lkrcehwvnsemfseu@gmail.com', 'zdkgzjzsqqibexmqijhd', '2025-09-09 08:09:56', NULL),
(965, 'whoenlbqdomrdeeqynne', 'xrcjhdbpbeyopxbz@gmail.com', 'nnocscfiltuzzzbgztjs', '2025-09-09 08:09:56', NULL),
(966, 'zjhtdrferazlvlunwfiq', 'opxpdplzvfwwtidw@gmail.com', 'ucngtpdbpbvwrgsjyodm', '2025-09-09 08:09:56', NULL),
(967, 'gfieesxtdnvfhrywxske', 'pizslevrowjlbokv@gmail.com', 'jfhayaxutlxevjxrquwx', '2025-09-09 08:09:56', NULL),
(968, 'mkzdpenbynfeqcbpnuny', 'dalduoksdtqaumyz@gmail.com', 'hgqbhwpdvnasmbeegnlx', '2025-09-09 08:09:56', NULL),
(969, 'qprxysrmdcaegmojainq', 'kmyzoejbllcmtwss@gmail.com', 'bonnxqcwjunqmcxcepep', '2025-09-09 08:09:57', NULL),
(970, 'jazmerzlideykuzbeeye', 'sbwztmwoktpphsgr@gmail.com', 'tqgcvsjytvywwcdmbkzv', '2025-09-09 08:09:57', NULL),
(971, 'zwsydroxklzmhbiusowk', 'njberhqzvsxobqnn@gmail.com', 'uglkpcgacnzekuqrdzrw', '2025-09-09 08:09:57', NULL),
(972, 'ntoaidqmjpwfnylibkzc', 'qbgsjmuohryaabrx@gmail.com', 'iitxdbzftjkvmtkkfuza', '2025-09-09 08:09:57', NULL),
(973, 'nmhioubwobxgwvxhsjry', 'hyjqrqsxydehbspj@gmail.com', 'zejncsehadhimeodhwtu', '2025-09-09 08:09:57', NULL),
(974, 'fkzjlnrktzvsoppupans', 'ffeqdhvermicjfcb@gmail.com', 'jykdxswzmtdmameupyrq', '2025-09-09 08:09:57', NULL),
(975, 'qfwtrniqulqdqtffbigb', 'vyylwtcdqbzddkba@gmail.com', 'ttintbqhlmhydwxslygm', '2025-09-09 08:09:57', NULL),
(976, 'qnfyiymktuxdaljdrfii', 'czffibkpuuzzfuep@gmail.com', 'ipavytqylpmxhtvhjbus', '2025-09-09 08:09:57', NULL),
(977, 'yfedzkwudmjwnoniyggi', 'jcnmgnoohyapbuxu@gmail.com', 'oiokkqylcrolodrpexkh', '2025-09-09 08:09:57', NULL),
(978, 'arbkyagscfycbcszialq', 'rkjwbkjemyfrgadu@gmail.com', 'rfepeuakximhoatlebay', '2025-09-09 08:09:57', NULL),
(979, 'wwtmdkbkiglyobnoprwn', 'thnuvkedhaqvwwkn@gmail.com', 'fymyidoaqfjqjiqkettz', '2025-09-09 08:09:58', NULL),
(980, 'wfnedjckauaevoxmikwt', 'awqkykbxfhvqwohu@gmail.com', 'ghtekhobzclvcimumibr', '2025-09-09 08:09:58', NULL),
(981, 'lcfblzvnmzjlucjxxdrh', 'rqapcqrfyzatyozl@gmail.com', 'zhpnbdkpabygkuhkvmyl', '2025-09-09 08:09:58', NULL),
(982, 'wtpvooesjhpxggnqfjll', 'kociqjmwapttrjtu@gmail.com', 'tkcbjxoohpjhrwzuncmj', '2025-09-09 08:09:58', NULL),
(983, 'hoxqdnaistjybswpfbvq', 'llfwzacmbefooyjr@gmail.com', 'yldtrpswfwdefxnzvnpg', '2025-09-09 08:09:59', NULL),
(984, 'dqwrhzufzrrpgubkcnwr', 'yqwycutepvxfdkth@gmail.com', 'edxncgudgwqjwoiriyru', '2025-09-09 08:09:59', NULL),
(985, 'jbbruqpkklzrbeqfqejp', 'ezqwojxzsrmaoitr@gmail.com', 'pndzhnxwmgpcleccyeku', '2025-09-09 08:09:59', NULL),
(986, 'jiwfmyglyyhlllosfcap', 'xkcjletclcncgtxs@gmail.com', 'psugwqrasgfiigjhhjpn', '2025-09-09 08:10:00', NULL),
(987, 'wlcvnyifbiktdkmcijgt', 'etinhrukwcemelcg@gmail.com', 'yxvtfsljsmllzadpikgm', '2025-09-09 08:10:00', NULL),
(988, 'dgwwzfalyjmkvdsfinzc', 'hxfuwaxkbqdzncxd@gmail.com', 'pauzexdzbxgrgvkifvjq', '2025-09-09 08:10:00', NULL),
(989, 'dfpnazsalwtrxawbsfpy', 'hdnskrfaazakvjxn@gmail.com', 'xmvajrormjogfvhkqwrw', '2025-09-09 08:10:00', NULL),
(990, 'lnmapfmmtivcgveanbui', 'kaovlsnzvvqurged@gmail.com', 'cwtexzmyjqviwlotdfzp', '2025-09-09 08:10:00', NULL),
(991, 'izuwlxvieojwrpxqwvvh', 'ozkjgmsiknmgvzur@gmail.com', 'exkmooypbsfqxfqjkwrd', '2025-09-09 08:10:00', NULL),
(992, 'ohqyrmffsvzseivsiusy', 'ulbsisbzixavmcii@gmail.com', 'fcmbhxziuqrvqidewzqu', '2025-09-09 08:10:00', NULL),
(993, 'bpmopqiexijwvvoqvfzy', 'mqsxfgicaruuenag@gmail.com', 'ntnlbywwkynegwtqffnt', '2025-09-09 08:10:00', NULL),
(994, 'uapeuvrshjankzndgvnj', 'aujzplymwxdkcvto@gmail.com', 'qhxnokvcxevidcryqzzc', '2025-09-09 08:10:01', NULL),
(995, 'bxhmpifvirpsihsmaddv', 'ombxdganoahyfvpz@gmail.com', 'vgchgvaeptnrqwvmbzil', '2025-09-09 08:10:02', NULL),
(996, 'toxwrubegsfaqxvyassu', 'wbvazwwuusobunhw@gmail.com', 'gitxnnjwqgwwfbmtrfgj', '2025-09-09 08:10:02', NULL),
(997, 'yjmjxpegnevpqekmpgas', 'dbvlvptnuxkwcqjy@gmail.com', 'mpewlssrlkzophrorxku', '2025-09-09 08:10:03', NULL),
(998, 'ppeqlwasemivlyodmaky', 'iawkgshqpyyinvns@gmail.com', 'globciacsewspspxrpyu', '2025-09-09 08:10:04', NULL),
(999, 'jkavrmuajvxewjpucfyk', 'ogloixatdpyseckw@gmail.com', 'qifpwnbjesupxluhjpjk', '2025-09-09 08:10:04', NULL),
(1000, 'pmmllvnijirgqakovkuq', 'lbwayrgouwfjoguv@gmail.com', 'uzsnlilzooavfcmdaaqk', '2025-09-09 08:10:04', NULL),
(1001, 'fujnkxjbrijmynufubae', 'epbiyomspdhvgjon@gmail.com', 'hozblmijodhkhqkebojf', '2025-09-09 08:10:04', NULL),
(1002, 'cfmxitinjqaglvtyjwei', 'ctrxypzkptrrbwkz@gmail.com', 'exmnehirkldfarcfcipq', '2025-09-09 08:10:04', NULL),
(1003, 'uteetktvwjoaxuqeixcq', 'xmdeqrqdrdqsezyd@gmail.com', 'kxizxnmfwhwsmcprflpv', '2025-09-09 08:10:04', NULL),
(1004, 'ubelbbkrsomrlhqlwucj', 'xlmsncapaafemdjn@gmail.com', 'kmlsjanjdyyeyjwedkxx', '2025-09-09 08:10:05', NULL),
(1005, 'pfqcqlqsnditnjtytlhj', 'wjmgnwsjimgjjcnp@gmail.com', 'ilrwmojrkxlovolrxpvw', '2025-09-09 08:10:05', NULL),
(1006, 'qshxmgmpiulrgbxtbzjn', 'xbgtzeklikrsdrbb@gmail.com', 'jtmaclbcturtuaixfzyi', '2025-09-09 08:10:05', NULL),
(1007, 'tytsdrjvwputczttnlcf', 'lgzukomschilvmgx@gmail.com', 'bhopiuykqgbncylaujeg', '2025-09-09 08:10:06', NULL),
(1008, 'gyivbgxpjrcokdppeazt', 'gdvldybfyhpuuauk@gmail.com', 'gqakeyyffttzwftsjjzc', '2025-09-09 08:10:06', NULL),
(1009, 'fidwtuujbktklesrhgkh', 'gquiatdsllaecfdz@gmail.com', 'plwiqfppxmzflmyamtxd', '2025-09-09 08:10:06', NULL),
(1010, 'twwjowkrscsbhiequcdo', 'ozidylfcbhikeyzh@gmail.com', 'ltmvgupczmafqnhepnkx', '2025-09-09 08:10:06', NULL),
(1011, 'mquucejftwzfsunjzxvh', 'vlvubihstvikhehm@gmail.com', 'hxcmunnkoxfpgxnjjlkc', '2025-09-09 08:11:04', NULL),
(1012, 'fbowlxsvmeiitthqkqtw', 'iyoxxemrcgkdedui@gmail.com', 'ajmzldntzesxeeosvhud', '2025-09-09 08:11:04', NULL),
(1013, 'punkiixtciawjnimfxef', 'rbdamsyahvbvbuia@gmail.com', 'pnhrpfvsaeolccftbxda', '2025-09-09 08:11:04', NULL),
(1014, 'hwxytvmlmjdmcymvqoej', 'rckjhnnkazdqfivk@gmail.com', 'kskhrlselucgkzhfejqp', '2025-09-09 08:11:04', NULL),
(1015, 'sdggdcnvioyieuanzyrz', 'lozuhbpuhrztrfvs@gmail.com', 'oeeqcydrjfmdlxmalkqa', '2025-09-09 08:11:04', NULL),
(1016, 'bhisblgslogolirlbapv', 'iwxcmepbniskmpad@gmail.com', 'ilrgvorwqhyjynanuaks', '2025-09-09 08:11:04', NULL),
(1017, 'pjxdvuduegvrbxffroam', 'drgwvbxlfugotnul@gmail.com', 'gbyyjfgrxhtbzqjiquej', '2025-09-09 08:11:04', NULL),
(1018, 'lcxhzenhihmtsgcdleva', 'ivrtgfvqyvimypji@gmail.com', 'bveiglsywkrnmmzrxwbf', '2025-09-09 08:11:04', NULL),
(1019, 'ewbghavbpqaqgdokrmep', 'sarqieqwaesyqhrs@gmail.com', 'uoyzquuwcmkynyxwhsfs', '2025-09-09 08:11:04', NULL),
(1020, 'vpitvopuhyzccpjutcau', 'kqfjxelpxshesuiy@gmail.com', 'mqxbzzamdzgioqrhnocd', '2025-09-09 08:11:04', NULL),
(1021, 'fimslopoewxzvcaqdrpb', 'krtqmbqxswdnpssm@gmail.com', 'vrlzxuetdkureqcoimrp', '2025-09-09 08:11:04', NULL),
(1022, 'glcjvrfbpaxftjgcjwik', 'uginhvwypvodxdsm@gmail.com', 'kqnawtesiyvuvbgerosh', '2025-09-09 08:11:05', NULL),
(1023, 'bqlwlrjpxjuosoeiuhql', 'vgamvhpnuajbfzkn@gmail.com', 'lqbjizxdsjytaovvyipw', '2025-09-09 08:11:05', NULL),
(1024, 'ybwodvmjxcmkfhueddff', 'ttqlivzfmcibtzlm@gmail.com', 'pzzptfdakbqykpdssfph', '2025-09-09 08:11:05', NULL),
(1025, 'nvqthxpemqjcnnqaxyqt', 'vuoxybkhepmyctmv@gmail.com', 'ymcmjigztjwiszpvtmne', '2025-09-09 08:11:05', NULL),
(1026, 'vqhbbtrqtubwtagfhwbh', 'jdcjkjlrodkxtlnw@gmail.com', 'nvpemtibvaryhzjuthad', '2025-09-09 08:11:05', NULL),
(1027, 'iedqblranhmiugzyphaz', 'uqeboeoxlafhnbal@gmail.com', 'gjjcgssfiaxxkqjypxmt', '2025-09-09 08:11:05', NULL),
(1028, 'clbuncvefopgfbbonvzb', 'vkjmzbvylecnhaup@gmail.com', 'htyvcskxrckbyqcavaah', '2025-09-09 08:11:05', NULL),
(1029, 'rxfkwjsfvvsvnmkxvrhs', 'jyzxwzeombguloxe@gmail.com', 'lkfcqjlyjyaaffrjyrgq', '2025-09-09 08:11:05', NULL),
(1030, 'zfiqvvfyluroaplzcvvh', 'akpygtuqmrzgfvjn@gmail.com', 'csydkawlejxjjzyzuhyc', '2025-09-09 08:11:05', NULL);
INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1031, 'kzqgrgoiwgvmfgqlvdmw', 'ocvdzeldxrjvhklp@gmail.com', 'iedqpbjggvmxvdphgtjb', '2025-09-09 08:11:05', NULL),
(1032, 'hzzwqplvxcmnralnzjug', 'agiqdxjoqkvbpusi@gmail.com', 'lsqgosgmffefwbkxwqmu', '2025-09-09 08:11:05', NULL),
(1033, 'jrcfkdmkrclgjqjzrihx', 'pwlzrpuxaknwtxsp@gmail.com', 'zcnighwrfiovqacskqlc', '2025-09-09 08:11:06', NULL),
(1034, 'rxuuybpdotgqagqhxsjx', 'oqohrqjrwrajoyqc@gmail.com', 'ahxbomcvrzgqbxonjbbv', '2025-09-09 08:11:06', NULL),
(1035, 'xhzgldwxtqotymdejvag', 'fdqvgssmzkqskqay@gmail.com', 'fzzsxhlgsvgynmvsathg', '2025-09-09 08:11:06', NULL),
(1036, 'qnzasjsaimzepkoreuyo', 'rxmirhxwseupibfd@gmail.com', 'qmcxctdnoepqqbsqwepz', '2025-09-09 08:11:06', NULL),
(1037, 'yelcbexpsnlwwtvfjqvh', 'zxouemtsyqfjhbhs@gmail.com', 'exsuvnzkygmzwmalohpv', '2025-09-09 08:11:06', NULL),
(1038, 'ilqtaxiunvjhqxpxrfgh', 'scczfhkbhdjcklph@gmail.com', 'jcwtibatzaqaoiitrskr', '2025-09-09 08:11:06', NULL),
(1039, 'qyglejxwnixcypjiwkjb', 'erdcyiiofcjsjbpv@gmail.com', 'vojgnnahouqadogcbihr', '2025-09-09 08:11:06', NULL),
(1040, 'ulpjuzedbxecqxlrmckg', 'sfsjqijdortfoizr@gmail.com', 'ekvvyqqckzcomxzvuobp', '2025-09-09 08:11:06', NULL),
(1041, 'qyshuetypsujqgebobvs', 'sqbacnjqamwdnorr@gmail.com', 'xcyfiylbdfiljzwvfufr', '2025-09-09 08:11:07', NULL),
(1042, 'hotoeilebqatseaxfojh', 'tlwcwyuguopvscee@gmail.com', 'mhgfiuwhjldrlqddohzg', '2025-09-09 08:11:07', NULL),
(1043, 'rlyognkasawzegjyoumi', 'lwkolvfqwycckqao@gmail.com', 'ydpgvbsxudhlczynsphu', '2025-09-09 08:11:07', NULL),
(1044, 'ruchdwipoycqsdpegrqu', 'cxllunzomqmerbmt@gmail.com', 'xuzdyxsrvfyvplyecolf', '2025-09-09 08:11:07', NULL),
(1045, 'hyptyidfuouhnorbkiqn', 'oxisnxhnftojpbqh@gmail.com', 'yyrhvzxydvcxrvwabdcj', '2025-09-09 08:11:07', NULL),
(1046, 'uvchphwlcohkywpkruqs', 'iwpjywmrdrhgkuhz@gmail.com', 'clbjkdnbpvperzcnjiwh', '2025-09-09 08:11:07', NULL),
(1047, 'jnlatwunqyooeutcavku', 'thfgkmrwromflxpa@gmail.com', 'nfqdcodugnuhrrfdthwr', '2025-09-09 08:11:07', NULL),
(1048, 'rhwqbjmvvttpyqfhihhc', 'mbrafnkaetrtnsrb@gmail.com', 'kmdsgpzmjrnjekdxynfj', '2025-09-09 08:11:08', NULL),
(1049, 'xfrokkydpgxecgoexddr', 'ewumftbheerdkfrv@gmail.com', 'yjmgeylcprakpulpjwwo', '2025-09-09 08:11:08', NULL),
(1050, 'tufblqaogjaenqkxpeps', 'ooryocljwvuttloc@gmail.com', 'iqqiofuerlijigkhbrmk', '2025-09-09 08:11:08', NULL),
(1051, 'cpvtkaokdbaumytamtps', 'defzuferfeeemxsq@gmail.com', 'qsherjbgiabowqgaxozv', '2025-09-09 08:11:09', NULL),
(1052, 'gmkzdojfedprmdqhveht', 'imxqpgxmnodilnwd@gmail.com', 'hejyfizsvkrugbsoldsr', '2025-09-09 08:11:09', NULL),
(1053, 'kdvbqwspqgcfvrbpjtxw', 'cnsizrpcfyhmrwyi@gmail.com', 'mzaxdjtzppgabtzmngyv', '2025-09-09 08:11:09', NULL),
(1054, 'dyqvjwbrpoydyhtatrsb', 'bkoenmxfjfrpdkvc@gmail.com', 'kewiypywouxiyjbpseio', '2025-09-09 08:11:10', NULL),
(1055, 'xkefsebgfxgxwpqtoswl', 'ffidkbkmnavnfvsd@gmail.com', 'qxlmapyvtunarkcfibhb', '2025-09-09 08:11:10', NULL),
(1056, 'gluvnvwvwxwwjeqcqazi', 'zslkixfaqdhsorua@gmail.com', 'naidmlbbtbazeackuxjl', '2025-09-09 08:11:10', NULL),
(1057, 'qoklcmkfcftigycvuhqn', 'lxfvcaqpeyxeeukj@gmail.com', 'cbokdazbbhlpxaudduqs', '2025-09-09 08:11:10', NULL),
(1058, 'xmwvowrbttgxuxcizqff', 'waiwjmsnpgvbnsvb@gmail.com', 'xppxxuclocngwexzkpci', '2025-09-09 08:11:10', NULL),
(1059, 'lkdlukpwckpyztkgurhk', 'vikoceidlrcfkffi@gmail.com', 'jicejiiutfwemoaugeim', '2025-09-09 08:11:10', NULL),
(1060, 'oqhnwwnlfxuxzmszcoxc', 'brkehwrxielzbado@gmail.com', 'ynirycvykupmexaiulga', '2025-09-09 08:11:10', NULL),
(1061, 'paprjjaoavhprvwtceyc', 'lfvsotetphkpncxf@gmail.com', 'zlptitzvfqabwxautszu', '2025-09-09 08:11:10', NULL),
(1062, 'tgzycitecbejnostzjel', 'wsldwmxotdsqdfnr@gmail.com', 'nrpwuglpyguglevoejxr', '2025-09-09 08:11:11', NULL),
(1063, 'kakyzjydnzxezhwlfvqr', 'yddalkqkujvwzalm@gmail.com', 'vguossuglqlrjygkfwlw', '2025-09-09 08:11:11', NULL),
(1064, 'scexsoliivnstbahlzzm', 'xuckngezgcpgnynr@gmail.com', 'hdmscpntanxwblynpwfs', '2025-09-09 08:11:11', NULL),
(1065, 'smswqlvwozwcilzwvnlm', 'pqwnddgavnoyrlnd@gmail.com', 'cwzwmqfxlilevqeqilid', '2025-09-09 08:11:11', NULL),
(1066, 'ddrdumzqhhuwkayswijj', 'buonerfpukdsbimp@gmail.com', 'cssfqecqglgbdxsodkjy', '2025-09-09 08:11:11', NULL),
(1067, 'rkvmvovcbqxjgwwsvhty', 'iisjdwwopnvtccjh@gmail.com', 'ajpvtxnmghyfuwjpbykz', '2025-09-09 08:11:11', NULL),
(1068, 'ryogyaqbhnndugagpfoq', 'kdovtecwlraldrpn@gmail.com', 'lmmayrvxaweqfxoaibds', '2025-09-09 08:11:12', NULL),
(1069, 'czhnkmejeeeihpqftgiu', 'hhqvkrogpnkcklfb@gmail.com', 'bpeigufbfolklnbfrodo', '2025-09-09 08:11:12', NULL),
(1070, 'ggqhfiimmdqkmighahnn', 'qyodjopfkrjmpiko@gmail.com', 'ognviqyjewkrxgvclxvr', '2025-09-09 08:11:12', NULL),
(1071, 'kvcbwtshwxzswaknregh', 'bquulvykfsjsbgwq@gmail.com', 'zmhcfgezbppkjpfqlogu', '2025-09-09 08:11:12', NULL),
(1072, 'gvntifrjztnhuucqnejb', 'bgdnggnucniteynb@gmail.com', 'vmevwxazpoqsqzxffhyd', '2025-09-09 08:11:12', NULL),
(1073, 'wfqnsbdtwnameyergzda', 'phxfjganazuupohu@gmail.com', 'czlnbocccebofhjveehr', '2025-09-09 08:11:12', NULL),
(1074, 'iuocyacyscqrtrohrqki', 'dsuetyronzinkewr@gmail.com', 'adzysmdzyroppsfggxtg', '2025-09-09 08:11:13', NULL),
(1075, 'nkbwmhmhsnbgmytfhabj', 'krcabifodsxyvzdi@gmail.com', 'rtygdefohlfitagkpopn', '2025-09-09 08:11:13', NULL),
(1076, 'peteriadfdbkaroddmpr', 'dvtpsoexhtlvxfpu@gmail.com', 'wrdbjnbjvnyngxfysnbs', '2025-09-09 08:11:22', NULL),
(1077, 'bwvgpdtmhuzgxcwkgjoz', 'mrgttzdbitmhwplx@gmail.com', 'fmnqpejvhdqygsfwpxaq', '2025-09-09 08:11:22', NULL),
(1078, 'tpnhfjpalsbrrhcturpl', 'fzpczqccvmmwctjp@gmail.com', 'grdowegkknsmfpcdzxoh', '2025-09-09 08:11:22', NULL),
(1079, 'eihexrafatqclbmmnyne', 'epdodftrgpsfdwep@gmail.com', 'cagemyespruhbjuvbajm', '2025-09-09 08:11:22', NULL),
(1080, 'ujgwarnliqgehpwdsojl', 'nenmeogkxyoangnu@gmail.com', 'fgjwneujtrcnlphtmwkt', '2025-09-09 08:11:23', NULL),
(1081, 'utjogjylzdomtgdmenzz', 'ujtvhexgcwncaggu@gmail.com', 'ouiuamjejjffyivggwnc', '2025-09-09 08:11:24', NULL),
(1082, 'gxdguuffvioflfjtbxon', 'nkvuacvftjhzjkfp@gmail.com', 'gyjvkpmulhltkeqqwavn', '2025-09-09 08:11:24', NULL),
(1083, 'oavmvgopkyydtthrhcuv', 'kuthniyrtaqiyjdz@gmail.com', 'zwkfmnkmwoihcqhvbefz', '2025-09-09 08:11:24', NULL),
(1084, 'ywfeygkhsazkwzbxiqnb', 'fazuogxyouaxdgwo@gmail.com', 'ddkuhmsppfmdzfysvpku', '2025-09-09 08:11:24', NULL),
(1085, 'xtmwcwchrpzuvzxkqyos', 'nyxvmkkfxcmdjwan@gmail.com', 'hcuhrwubhwypbbjvlrvx', '2025-09-09 08:11:24', NULL),
(1086, 'tqyzwxsgpovuuhwximdx', 'zkaaugamuydgnhmi@gmail.com', 'skdcjbwlswmptxjnntvm', '2025-09-09 08:11:24', NULL),
(1087, 'urdovjzwjcfygnshveoj', 'vplotksgovejbcef@gmail.com', 'pprlgqgqqyzknsiknjde', '2025-09-09 08:11:24', NULL),
(1088, 'oytcrxrrmwbilqtrvxcj', 'fujrplvzqfsgligs@gmail.com', 'zilinnbmvbgjcpftsipv', '2025-09-09 08:11:24', NULL),
(1089, 'sxfpaaesbfytlriozkjc', 'frgscupomezwicln@gmail.com', 'wkabnncaqiybcexaxpam', '2025-09-09 08:11:24', NULL),
(1090, 'novzlpuemaqxiatzlriv', 'smyoldypxytsqflq@gmail.com', 'yzjqmrstpdxxvbkusgni', '2025-09-09 08:11:24', NULL),
(1091, 'iyanlbsoxvdjtaowdavl', 'ikcmvydmdjxfnhyc@gmail.com', 'wgbrzcffeihnqvsurcrj', '2025-09-09 08:11:24', NULL),
(1092, 'xurvbzaggxuxungyuhby', 'uxcfltyhbbgxofcr@gmail.com', 'pkfmthjjzpsouxwnymxf', '2025-09-09 08:11:24', NULL),
(1093, 'fqpjqdcdjmionazjylre', 'fouqkihpdysbypka@gmail.com', 'bdddeqqhokfwrexoqunu', '2025-09-09 08:11:24', NULL),
(1094, 'ksihzbzgyffdevzselsv', 'fogucvrakcstvbls@gmail.com', 'hdptqrdncdvktqrmlmml', '2025-09-09 08:11:24', NULL),
(1095, 'qcoawzrcasidyqwaykxc', 'relpjkhineavngdi@gmail.com', 'oozwfesygsiqtlfvtlah', '2025-09-09 08:11:24', NULL),
(1096, 'rslimfwwjflgvavxrndn', 'ivwnsejpsbouvkbn@gmail.com', 'xwxjbxmwaembneddpdya', '2025-09-09 08:11:24', NULL),
(1097, 'jdovlmatarlcxntqtfxl', 'yhkjuhihjgowlnfo@gmail.com', 'lkpterxtfolieohdkdtu', '2025-09-09 08:11:24', NULL),
(1098, 'jzbmcciyyusqytqojske', 'sxwxfwodrwfnwlec@gmail.com', 'omgmpwtaynabgndvckhd', '2025-09-09 08:11:25', NULL),
(1099, 'isvjwshuaepdznhejxer', 'wocfidfkdrlspkln@gmail.com', 'tdghwkwyaytucjqpiuqz', '2025-09-09 08:11:25', NULL),
(1100, 'aocgdsitqrmykqytcgyd', 'nebcorxepujspjrg@gmail.com', 'ceeosotfdtpmtaryqtvu', '2025-09-09 08:11:25', NULL),
(1101, 'afgloejuchobnehkqlgu', 'lqcbkpubobjcswrx@gmail.com', 'kfhwhnqhjzopdwmjvwox', '2025-09-09 08:11:26', NULL),
(1102, 'mbffyxqwombsszpuwjym', 'oiqwectpahyviuxe@gmail.com', 'ggzlxjitppzsesenpbic', '2025-09-09 08:11:26', NULL),
(1103, 'cfmamvtecltdqedsnbwm', 'acrcaquqkthtpaum@gmail.com', 'jmxqfzrkbxcbgafthfqw', '2025-09-09 08:11:26', NULL),
(1104, 'cousrtqsjusxzrdfdcag', 'ioerjppkeqqxvmex@gmail.com', 'kfopdanqxeitlpjhskkx', '2025-09-09 08:11:26', NULL),
(1105, 'lgsfqydxsgdoobgkwaws', 'uausarfqpjqppohv@gmail.com', 'ffdstumxlahdelkobfph', '2025-09-09 08:11:26', NULL),
(1106, 'thptkxzqwyrbkolepzxi', 'mqwoketatmctrdzl@gmail.com', 'omqyknkqzdbyxkgaxlbh', '2025-09-09 08:11:26', NULL),
(1107, 'knrhqmbcyyrreavuebfg', 'rujfajlvsqfzuuxg@gmail.com', 'mfuwbbpripruxfrtuopf', '2025-09-09 08:11:26', NULL),
(1108, 'swgkiebsdvbgiznybqsx', 'bxqeypshhakugzeb@gmail.com', 'ueqhtpntaotqkqeiczof', '2025-09-09 08:11:26', NULL),
(1109, 'ttkdsbgpxwdrotjhwpum', 'hjddoxipunewwrcp@gmail.com', 'znrghtwvjtgbdyskhgtk', '2025-09-09 08:11:26', NULL),
(1110, 'xccqsnpzpbrokirdmqaj', 'nrvmqbrrifooyzgb@gmail.com', 'qbdbuwwculepypckkhjd', '2025-09-09 08:11:27', NULL),
(1111, 'wmhlwdmjimdruttheboi', 'nvwsewyywrcrnicl@gmail.com', 'onllgnbteemlsszpjgnn', '2025-09-09 08:11:27', NULL),
(1112, 'osolgiwqnlhseibliowx', 'xryeladzovsziwhc@gmail.com', 'monwqyiiurxhtfukchda', '2025-09-09 08:11:27', NULL),
(1113, 'hsmnurosdjjskqquuect', 'cktxxyluofsxuawu@gmail.com', 'qehasucykosaxezmsgyi', '2025-09-09 08:11:27', NULL),
(1114, 'gmileriencaelmahizip', 'hmsaiwmngsbpyyet@gmail.com', 'bzhomxdilotqxfsplwwc', '2025-09-09 08:11:27', NULL),
(1115, 'gvuprwifhcslpdpwxnxj', 'mtbeivemjxwxiibe@gmail.com', 'hovdprwsclovnhojhxds', '2025-09-09 08:11:27', NULL),
(1116, 'iaiqmqkznneldqjkoxsn', 'ifunrdkotmytgzdz@gmail.com', 'nzaqlbdcyjxupijwdkas', '2025-09-09 08:11:27', NULL),
(1117, 'aadoviubipjahjfdzfze', 'hcekakqbaqplvtsw@gmail.com', 'pbrvkulfxaidmpfirjwn', '2025-09-09 08:11:28', NULL),
(1118, 'ogmmzpesjzdilnxfstfd', 'xlosutkodsnjjfav@gmail.com', 'bjdufqrkyaieuvbkomzg', '2025-09-09 08:11:29', NULL),
(1119, 'qltvhfzrjytdutebspmm', 'ocmlfcjnwiyfsavx@gmail.com', 'yutezdvformdedouylaw', '2025-09-09 08:11:29', NULL),
(1120, 'rjwmxhvobgfexqmhunii', 'qgllwdfnlncxvydq@gmail.com', 'ibjfjccswrjiiemxxqbi', '2025-09-09 08:11:30', NULL),
(1121, 'dmfuxihohyvosipjgdho', 'alezwlvzwxvzyknm@gmail.com', 'kkpbcutzwxwgtbtavkjn', '2025-09-09 08:11:30', NULL),
(1122, 'kfmtimnfgryqddpnupnw', 'lvtrycowmvtwbmnp@gmail.com', 'lssgwzrqnklzcwepitnp', '2025-09-09 08:11:30', NULL),
(1123, 'obhfiiatlnjelrruovfc', 'mnerefrppqvooxwd@gmail.com', 'ryxqfjbrepuykcgtxkxn', '2025-09-09 08:11:30', NULL),
(1124, 'jtgecgrppwiuuecnitee', 'ubngbdbdbmyefjyz@gmail.com', 'otujdfqjfeqpzpwcazpp', '2025-09-09 08:11:31', NULL),
(1125, 'dedpgroohenrxarqtxee', 'uzdgfwwnfdeiqfdc@gmail.com', 'pqzmemddtsatyoirkncn', '2025-09-09 08:11:31', NULL),
(1126, 'nktbitbmetpiksduzime', 'gpnoulgqcowmjfqo@gmail.com', 'hvvhygjgkczlzacqrwau', '2025-09-09 08:11:31', NULL),
(1127, 'jeyhbnaftddaijhijpdk', 'sfszfvvxdemkxlaj@gmail.com', 'mbjimfwlogmjhahkiozu', '2025-09-09 08:11:32', NULL),
(1128, 'hxjhmeggvlwgiewmzinr', 'maexwviwobjfsbrv@gmail.com', 'coombbxajaegtcnibrdt', '2025-09-09 08:11:32', NULL),
(1129, 'ldljtdadzygqcauvcvef', 'hthaptkvaixukeho@gmail.com', 'gzsiihnvjwsfkrqmlfrw', '2025-09-09 08:13:20', NULL),
(1130, 'dmknpvikllkbtnheowef', 'onxvpcqtquvzmuns@gmail.com', 'uhnuqajqgjirpnodtpcm', '2025-09-09 08:13:20', NULL),
(1131, 'xbrfupbowjnfkycaqoul', 'wmzyroxlrntwrlwp@gmail.com', 'dkorwstujmnyvfdoabbb', '2025-09-09 08:13:20', NULL),
(1132, 'jkhnddhrthbjujwwgoxd', 'fqrmrhdlpmmprfib@gmail.com', 'lydyazunfsmnwoyxcgqo', '2025-09-09 08:13:20', NULL),
(1133, 'njmidqbruddpzagmfiex', 'fombyursgtuldyqb@gmail.com', 'yrigttmwqbsaconhxcba', '2025-09-09 08:13:20', NULL),
(1134, 'rxmudwynshivusnqmnbk', 'tmarryvqzalatrfd@gmail.com', 'egthgsybqirouigftgul', '2025-09-09 08:13:20', NULL),
(1135, 'asqkztmphisevohxswwi', 'pxnaylylncuccguk@gmail.com', 'xzaibugisnokqtmxkccx', '2025-09-09 08:13:20', NULL),
(1136, 'uzycurroejpiefjlvxvs', 'dhxbtfczamzjynox@gmail.com', 'cpflnrlwqbjjssgtjqzi', '2025-09-09 08:13:20', NULL),
(1137, 'jhgfncvheckuupdzpzaq', 'sdvwmadjyzppupqk@gmail.com', 'widofpywvyxniwppsidh', '2025-09-09 08:13:20', NULL),
(1138, 'ftrbelowbepezqhkkpwj', 'vflnknulkukpdqjc@gmail.com', 'daaxeqxscafauwmsqcwl', '2025-09-09 08:13:20', NULL),
(1139, 'wgodwgmleupjyaqfvnsj', 'boqiuqekkmwuaboi@gmail.com', 'kwovprylwkfckmdjxhec', '2025-09-09 08:13:20', NULL),
(1140, 'tcilmfdgecohxlmecvnc', 'czzommnmyxjloztz@gmail.com', 'qezwwuiaduvppvmsdjzr', '2025-09-09 08:13:20', NULL),
(1141, 'kyoltzgstvmhfxzuglby', 'cqaezfwykyaaosrq@gmail.com', 'ugkjzqudccdpgalygjio', '2025-09-09 08:13:20', NULL),
(1142, 'drsssijyregqwjbxsgvj', 'ketehmedasrwuniv@gmail.com', 'jqnmwhzeijpfrpetzvmn', '2025-09-09 08:13:20', NULL),
(1143, 'shdgyucjekzyoagoaiud', 'ngmkplgpbzahekho@gmail.com', 'dxckalyehncivejcbqej', '2025-09-09 08:13:20', NULL),
(1144, 'pjblsanctmheomhqiksi', 'bdubguslztgtbfuq@gmail.com', 'oejxsdopgqlstxzovnyi', '2025-09-09 08:13:20', NULL),
(1145, 'cihgskgprgimjcdwbxuz', 'veelxwlhzuzpuqsn@gmail.com', 'tjjhpzvigbnaolobzolr', '2025-09-09 08:13:20', NULL),
(1146, 'znlhjoxdwcyhuqcfblzr', 'rditjxicmwdxvspm@gmail.com', 'qwvfuhfawknnmuduunqk', '2025-09-09 08:13:20', NULL),
(1147, 'oqrigfgpyuawdnbjdwbd', 'vbuztocaxcaqmjck@gmail.com', 'rjgihqfqduvrsxvbxjug', '2025-09-09 08:13:20', NULL),
(1148, 'cmhrqhxljtijjpmotbac', 'jqevqnoskrsubzvh@gmail.com', 'nwvxfjvcetaiafuljrjx', '2025-09-09 08:13:20', NULL),
(1149, 'vvcbvrcufoohssrlsetl', 'svifuxebevmmkadf@gmail.com', 'itjwpapplvegyjgsvzdf', '2025-09-09 08:13:28', NULL),
(1150, 'tzyqbvrzweyyfwkedevv', 'lqcyrhoebzmydujs@gmail.com', 'jisniojdltaetkbavhfz', '2025-09-09 08:13:28', NULL),
(1151, 'guhkdpqmxvfuwsbknhav', 'bgyjpqtuguydbdlw@gmail.com', 'vgzjtgummsifzfttztnj', '2025-09-09 08:13:28', NULL),
(1152, 'fiyemfocaonfoybzkamn', 'vgnubakpjzanezxd@gmail.com', 'bvwqbzqvdazjaqkrxgsa', '2025-09-09 08:13:28', NULL),
(1153, 'ulobauuatuvdrfswwzdt', 'qmmrarbneqqrnzmb@gmail.com', 'yzpihrxaxwnhadfekxrs', '2025-09-09 08:13:28', NULL),
(1154, 'rvhbplhimoibjkmrjqiy', 'hfuddoscczdbtshh@gmail.com', 'djjnnvjmowbneqkmrujp', '2025-09-09 08:13:29', NULL),
(1155, 'fhgxpuebbxcysgwuvxls', 'lalqbacaknqoitqc@gmail.com', 'gyuoixqtkumeslzbcslo', '2025-09-09 08:13:29', NULL),
(1156, 'dkccxmotmgzxslsxbkbg', 'snxpblecblwfxmem@gmail.com', 'ctyiccmtguktsljrtjft', '2025-09-09 08:13:29', NULL),
(1157, 'vngsjscptencatoqxwel', 'woqbjugwkgeagnpn@gmail.com', 'jbwehkcvhinlqxriibav', '2025-09-09 08:13:29', NULL),
(1158, 'skftbycrqntyrdbzdpjv', 'pzmwofipulfkrnxe@gmail.com', 'akjerpqgoyfhzddwexmr', '2025-09-09 08:13:29', NULL),
(1159, 'nylnnurijuufxclrysga', 'swzpaxhhbqaegjue@gmail.com', 'fbsptmqfqoddfpmiemkp', '2025-09-09 08:13:30', NULL),
(1160, 'mwfxstciisebsgugrott', 'eusizbfjypyrdtoe@gmail.com', 'zlpwfhozbkmwwryurwvc', '2025-09-09 08:13:30', NULL),
(1161, 'upsoizefeteejkgydded', 'tiqbndpaqdfgarcf@gmail.com', 'nbfmvtmqhaiusouczeir', '2025-09-09 08:13:30', NULL),
(1162, 'kjexjignkqhkfzimtapk', 'hylkvydkqucwwdru@gmail.com', 'zpvpwwifbsiypxohncwo', '2025-09-09 08:13:30', NULL),
(1163, 'cxxusbthxybvyxgsmwpb', 'rcyycafkaugxzimh@gmail.com', 'pfeduxebobmogffehwkp', '2025-09-09 08:13:30', NULL),
(1164, 'ggwpvalwfibysdycyqsd', 'ztxxcmdsjjdkytrp@gmail.com', 'zwarqwiobtohshfphviv', '2025-09-09 08:13:31', NULL),
(1165, 'iyvbqdzcxnwcgzysbsas', 'amvchqghkiwqnixs@gmail.com', 'mwyrnynjmwwjqmxxzrwr', '2025-09-09 08:13:31', NULL),
(1166, 'nhnrpvstjjkobzwtymup', 'wkxxybvbejabwflz@gmail.com', 'onebpwgkxmrtakvpwnyv', '2025-09-09 08:13:31', NULL),
(1167, 'ywhsjvpihhshqaqsburf', 'qzsbtuzveqpuznhw@gmail.com', 'vwkdyzhpmneobtmkktmw', '2025-09-09 08:13:31', NULL),
(1168, 'xcpulzoueopwlqtmfhwm', 'greqjpmotbofords@gmail.com', 'ekxrjhogiuitlmryafrn', '2025-09-09 08:13:31', NULL),
(1169, 'kshnmriqhmylbgkoioge', 'lnmzhwdqodfaixwk@gmail.com', 'anuzhjejxwpkwcbaduup', '2025-09-09 08:13:32', NULL),
(1170, 'tadjpwrhvcidctbnjwjk', 'ptonvjeicjkjiimm@gmail.com', 'lxtuhxrjjgeylvfccprh', '2025-09-09 08:13:32', NULL),
(1171, 'yfnmkzyfjqeycjksclip', 'bzebkeqhwwydcfqq@gmail.com', 'cgwpwdpmlsgfjcbujkmo', '2025-09-09 08:13:32', NULL),
(1172, 'uogquimzhpdkkydngtrt', 'zpnsefghulzdqzia@gmail.com', 'rvmnxlznubxqwficgwml', '2025-09-09 08:13:32', NULL),
(1173, 'dktaxpcqkdiitbekcjyx', 'mvghodnzbdhawsnj@gmail.com', 'dhfjlmaiyidwsddauqdz', '2025-09-09 08:13:32', NULL),
(1174, 'loykprwobdinedvwnnha', 'jmesoorfssypqhvk@gmail.com', 'xzwzdiklmuvhbociapra', '2025-09-09 08:13:39', NULL),
(1175, 'woazfdaictczfydiftzp', 'nftfqztosjwpmnxt@gmail.com', 'hhmpmmawzmdnsbtdasdt', '2025-09-09 08:13:39', NULL),
(1176, 'ojeumwjkhgahmusescnb', 'otywrwuovjtjbrom@gmail.com', 'vyflxsazhlfidwgcjebi', '2025-09-09 08:13:39', NULL),
(1177, 'knfkzcrqujnykpvguarr', 'doxgmlswyuflujfe@gmail.com', 'mphyqgdhanlkpsraqpmw', '2025-09-09 08:13:39', NULL),
(1178, 'iwakliehadmzbvpajfmq', 'aqttwldtnfptjdct@gmail.com', 'ajdybxdficigxmwmznrz', '2025-09-09 08:13:39', NULL),
(1179, 'bemjhxhkpywgijkordnl', 'tevkwagtdsuhmgmj@gmail.com', 'ovezbtvyhdzpwprbxcxf', '2025-09-09 08:13:40', NULL),
(1180, 'uyuwlbpzetrkmdvfhvvz', 'qtvwwcyekmwgnczp@gmail.com', 'djwlhnbccjaljowfqrug', '2025-09-09 08:13:40', NULL),
(1181, 'lavtvpdrkqsaoyhoxnny', 'ypmpnnrwrlqfpbnu@gmail.com', 'ftfwsampwnjbyrzaokez', '2025-09-09 08:13:40', NULL),
(1182, 'hpnltthdteyztrkroudx', 'wcqlppdsasfllxqw@gmail.com', 'mvwzpdbocmhufnryidtt', '2025-09-09 08:13:40', NULL),
(1183, 'ptohcdruywjzkphlxrxt', 'lhczqhysdkvyxifn@gmail.com', 'amnxuhdlmnoqnvierpvg', '2025-09-09 08:13:40', NULL),
(1184, 'wiqevccxsatnhaprnftd', 'ciburuftgouhvldo@gmail.com', 'qwpkxuezwgtadpldofjj', '2025-09-09 08:13:40', NULL),
(1185, 'ejhejrzpnibjbzcepwvm', 'eaabygieuvarnlvd@gmail.com', 'jaziyapnstaymwzhqvcn', '2025-09-09 08:13:40', NULL),
(1186, 'msuebsvrhqigubabakrw', 'qxzgnnrowjbzmmrl@gmail.com', 'zbccjhhftcdlyejokjyx', '2025-09-09 08:13:40', NULL),
(1187, 'yexjnsbcivxxhuewofbv', 'ppwlzgycmjrermfi@gmail.com', 'uhzukerpxrfyjqufrvsn', '2025-09-09 08:13:41', NULL),
(1188, 'knskoorlhawtiicmfaoc', 'mtmcvrogpapxdleg@gmail.com', 'rordtikpnuacanzqrgep', '2025-09-09 08:13:41', NULL),
(1189, 'fjgxfbfujuxynqjshial', 'dmhkvihhhlkqxdzz@gmail.com', 'dhbacoqtcrtiknofntfw', '2025-09-09 08:13:41', NULL),
(1190, 'twfxvbgjzdfhqskwzusf', 'glcsyqaqqiqovutd@gmail.com', 'zmohqlqjiqyeaujqxtza', '2025-09-09 08:13:41', NULL),
(1191, 'vlkpflrltxvhjsohfvuk', 'njxgizhitlulncap@gmail.com', 'rpoluiqvbnkjtdeuxacs', '2025-09-09 08:13:41', NULL),
(1192, 'eaimzomfiwxoomntyvca', 'tevlzkoyzwygycrh@gmail.com', 'qdofmoylijnzaisjcyru', '2025-09-09 08:13:41', NULL),
(1193, 'ehdbxarlkgshqhkzbweb', 'kunxvfywfwggtlti@gmail.com', 'cawtslhlskurksrktklu', '2025-09-09 08:13:41', NULL),
(1194, 'fwndpjrjdicltdeheydw', 'owxhqubguvcjupaq@gmail.com', 'wgkwsigxvqhlmqcaqhcp', '2025-09-09 08:13:43', NULL),
(1195, 'bxhkffjyyxdtmiugfiwc', 'vqbpsiuinrnjslwx@gmail.com', 'szousauwgtmdksywsqfr', '2025-09-09 08:13:43', NULL),
(1196, 'rpealxocduusynzvqece', 'gnuurqjjvqvzbnkf@gmail.com', 'brxqhymicvrtmplectmd', '2025-09-09 08:13:43', NULL),
(1197, 'wnitruwyslkhcagitabc', 'rdjmcwhemnupqgst@gmail.com', 'xcsydnapuhorvyaqqsor', '2025-09-09 08:13:44', NULL),
(1198, 'bxxcyyvagprdixbhwuyh', 'hfeknlyegyopbjfz@gmail.com', 'udvyvdvvchtrbqtojneh', '2025-09-09 08:13:44', NULL),
(1199, 'xpapjbtnkzouesgkoftt', 'wibuyuwcduuupyue@gmail.com', 'gsucdfixdfaxganzaddh', '2025-09-09 08:13:44', NULL),
(1200, 'wmayzkhkzlykqfhsmwnl', 'zvvawkfdnjztvxvt@gmail.com', 'mhdwvkownocottbfsrvp', '2025-09-09 08:13:44', NULL),
(1201, 'lkxdgvwnahtvasbzbsdz', 'zhowzvslzhlgvaqo@gmail.com', 'lrwxsdcoypwpswtugxbo', '2025-09-09 08:13:44', NULL),
(1202, 'gphxzpwinhlvxlrgfrba', 'wnvjyhitynlfstsi@gmail.com', 'fftcxgzgwyojrxvweaer', '2025-09-09 08:13:44', NULL),
(1203, 'ezljsawulizedraamkcg', 'zskyupsusmydhhbs@gmail.com', 'pyzovnaefmwnjdicuzoy', '2025-09-09 08:13:44', NULL),
(1204, 'lnpahnojufqilgulhfhs', 'nixezixuprkseobt@gmail.com', 'rqqletrsrkdddxkqupkb', '2025-09-09 08:13:44', NULL),
(1205, 'jxsdpuouyqxyofaetyat', 'fjrmisbfqkvqbeeg@gmail.com', 'nnmvsrepvfulitpcrndi', '2025-09-09 08:13:44', NULL),
(1206, 'ahfiidzxpwbfatandrbl', 'agffzuixwknnvssv@gmail.com', 'umfovgluelcwdqhzugva', '2025-09-09 08:13:45', NULL),
(1207, 'jsbrfucrqjyjprrdeikr', 'wzdnlullarsukbor@gmail.com', 'uvvpvdezfbmtgpysfwbs', '2025-09-09 08:13:45', NULL),
(1208, 'uslqtkrljufsdntvrndi', 'llkmyhtypjavybul@gmail.com', 'bdsyxzmtqhtdmgrpdmfy', '2025-09-09 08:13:45', NULL),
(1209, 'oapmlmrbbldshsedpmmv', 'hzrwjyyuxtpxvmhx@gmail.com', 'hknalrxjtfbkwhjlqwio', '2025-09-09 08:13:45', NULL),
(1210, 'frobrozeiecoccxlptzo', 'tgjmiiojnqjfduuo@gmail.com', 'aspuqrdjnkhjuniwymwj', '2025-09-09 08:13:46', NULL),
(1211, 'wvbrpwutahztmfueplqh', 'ekbssyjgzyoagnny@gmail.com', 'zmubfrfsgpdmayqwvhdo', '2025-09-09 08:13:46', NULL),
(1212, 'andjjfokqdeutujabgpt', 'yrcwyedjgchqhgvn@gmail.com', 'zmdpxleeumbvzdmallmk', '2025-09-09 08:13:46', NULL),
(1213, 'xlyjdpmfeasxuvfwevts', 'uqwczruawnxvsdhz@gmail.com', 'ooatimpuianpppytfhxs', '2025-09-09 08:13:46', NULL),
(1214, 'flrilfugarwjsaypxkpd', 'hrntbqaacsevixgu@gmail.com', 'kpvbtdmbrjczhmhsiqjp', '2025-09-09 08:13:48', NULL),
(1215, 'wuqbaxjcqxyuqvhmbwxn', 'skylcsicesirgehh@gmail.com', 'eznuvjnpneareqzetuol', '2025-09-09 08:13:48', NULL),
(1216, 'huvebuzlqtdvunxvnemx', 'inljrcvdcprdionp@gmail.com', 'ulvpuxvfwbaiadnjdlin', '2025-09-09 08:13:48', NULL),
(1217, 'fzqepptnwogaqlbnqlsg', 'jbropufbsofqeahw@gmail.com', 'akrwrwdlbqotxhhgicgd', '2025-09-09 08:13:48', NULL),
(1218, 'uzdnfkpwkfqdyxgzcalq', 'tuiisjmkatoyxidu@gmail.com', 'sqdiyevrzqxdarvbrayq', '2025-09-09 08:13:48', NULL),
(1219, 'fylkrpltsxxqcmfetaou', 'zqtsokjnnldemgxd@gmail.com', 'jevyhugquzzqwqtlfuen', '2025-09-09 08:13:48', NULL),
(1220, 'rqxrgqspmxwhbcujzobl', 'vturwxgjduyfftet@gmail.com', 'ygzpiwxquujwlhcbvaho', '2025-09-09 08:13:48', NULL),
(1221, 'pjmodyjutbhawuahnmuw', 'jtnfkggnqcoaavca@gmail.com', 'oafxtftsrjwhmuvbnyks', '2025-09-09 08:13:48', NULL),
(1222, 'pzssfdqmzbnkljfsgmit', 'kkqvyneuwjkpphsi@gmail.com', 'otjaqpxrrekrpgyuwoac', '2025-09-09 08:13:49', NULL),
(1223, 'gqximvxhopheyyordywy', 'mkfidweenjwnydwb@gmail.com', 'lvcdzwjuebaamudfamza', '2025-09-09 08:13:49', NULL),
(1224, 'pdyxgxrbjzlrbqubopwk', 'htaqmtvreshxznmr@gmail.com', 'fnhxwuzanxipekjilbzs', '2025-09-09 08:13:49', NULL),
(1225, 'ismyrpvnlbbihnvobwsn', 'qfiabkldnpfyvvhm@gmail.com', 'hexmzuhevgvuwgwnzyan', '2025-09-09 08:13:49', NULL),
(1226, 'czcpvwlvwgagsvtzvpnj', 'jcehbdqsuxooohhi@gmail.com', 'qjobqdbtxmzgkvrobnzk', '2025-09-09 08:13:50', NULL),
(1227, 'yecpkmduybcyyxjtcfho', 'hisfkxodlsvjowhr@gmail.com', 'nwvdvhleapfsidookwmb', '2025-09-09 08:13:50', NULL),
(1228, 'qpvubxmlpainpmjiqeul', 'hihzckatllaypviu@gmail.com', 'qkapivjucqfqwkcjedli', '2025-09-09 08:13:50', NULL),
(1229, 'jyxjebabdxrfikurqlvt', 'oeklpgvkcmczdqdb@gmail.com', 'ndipqpwnvkzhtrmhhufr', '2025-09-09 08:13:50', NULL),
(1230, 'nehscrmktobtsxtpugdr', 'zoolulofqbstulbs@gmail.com', 'jvcxuedkixkefchilzob', '2025-09-09 08:13:50', NULL),
(1231, 'yzrsqgwyonrcgkdrjetj', 'bklccljjydfjihtz@gmail.com', 'siywysivnbavuhspvweh', '2025-09-09 08:13:51', NULL),
(1232, 'jhqqdqlklrfhrieyihuu', 'opjeakxbkjhoanyt@gmail.com', 'xqqgblzsfgnzvjynjzqd', '2025-09-09 08:13:51', NULL),
(1233, 'ndhnorjvruipzksfvpzu', 'ohlwzyzccheyhmvz@gmail.com', 'oabkpqtbicfeeyltajut', '2025-09-09 08:13:52', NULL),
(1234, 'yqgmunpofzihgznlxgyl', 'soidolgjodrehnus@gmail.com', 'hjjvouolomvaeihsyygh', '2025-09-09 08:13:53', NULL),
(1235, 'cwbcpobhwojxnbdfuirg', 'mtbwltulfhzlphii@gmail.com', 'vuiwzflyitoueiejlweb', '2025-09-09 08:13:53', NULL),
(1236, 'qgoxwmkkqotgzmzenzaf', 'mylgxoegimxshkgc@gmail.com', 'wgomovbutamphlyqjvpx', '2025-09-09 08:13:53', NULL),
(1237, 'phrymtkubycjkmnebkul', 'egfnozvzjafrewcx@gmail.com', 'vzsrmotekmrkcatfhynp', '2025-09-09 08:13:53', NULL),
(1238, 'hmmbwwatbsiohgyslnji', 'pqxoonmzxkididwg@gmail.com', 'yzcfxaztiinxczeabmtz', '2025-09-09 08:13:54', NULL),
(1239, 'xhhutifjkszzfftlwyzf', 'syillcorhigesejw@gmail.com', 'xgstxuvecpqybelsyyym', '2025-09-09 08:13:54', NULL),
(1240, 'mnajrhkosuptdvdwksvi', 'nfgtqzjzyvmpqgza@gmail.com', 'olgfjpjbnrnzrlozqonp', '2025-09-09 08:13:54', NULL),
(1241, 'ztuxonzanptwkpjuwixa', 'cvlyqpkwnwfocxzp@gmail.com', 'ywtcbqmyhyqfxiebhejb', '2025-09-09 08:13:54', NULL),
(1242, 'dertqjkljzbgpefgbqlg', 'mngfffnpavumjktw@gmail.com', 'tefeesgvawcoctjezoqq', '2025-09-09 08:13:54', NULL),
(1243, 'oconwrmpzyikqkzzsoie', 'qwsrsenwffsajyyy@gmail.com', 'qaoclxscbzsfoeycrsym', '2025-09-09 08:13:54', NULL),
(1244, 'guqbfoavuvlvbojcyuqa', 'ucfkdzxrpogoigko@gmail.com', 'echjkzrohahjbfxvcmnw', '2025-09-09 08:13:54', NULL),
(1245, 'ncmccqcvqllpjrtldfwy', 'qqdrptvrcknwpzpc@gmail.com', 'aaweimootcuipuzdohnz', '2025-09-09 08:13:54', NULL),
(1246, 'cjnyygmtqceyguudulib', 'tfyxoiaxydlhwlpc@gmail.com', 'gpnoxlbhiimmaushfjac', '2025-09-09 08:13:55', NULL),
(1247, 'rjszojbjywsddptbksqu', 'ivneyarieipadlno@gmail.com', 'hprgkieopzpsieumiwhx', '2025-09-09 08:13:55', NULL),
(1248, 'ixofnizbdwcjudlbqwja', 'imjbhnoeekcfmyzy@gmail.com', 'ofywvjhmeapyngjspxia', '2025-09-09 08:13:55', NULL),
(1249, 'pprphmqldngzntiaoqol', 'xjbwprxqehqebcij@gmail.com', 'hsdlsdpgvafcdmkdlclf', '2025-09-09 08:13:55', NULL),
(1250, 'nmoymeehoteoyxpabpup', 'vslchdlmvbzhbouy@gmail.com', 'duyqnijxzgfihtfyuftd', '2025-09-09 08:13:56', NULL),
(1251, 'mgolrtqouwleekcvqben', 'udovlljvttfdmsuv@gmail.com', 'djnnozqswijoctpvzoqy', '2025-09-09 08:13:56', NULL),
(1252, 'ovjjpwqrjwamqnezkwnx', 'ktepapehcbulsphq@gmail.com', 'djhgvnhimgyivmzsujbc', '2025-09-09 08:13:56', NULL),
(1253, 'emburplsjppgsacswgdl', 'fcymhdxhztfnhwkn@gmail.com', 'euxbqfgjmdoipwxotztx', '2025-09-09 08:13:57', NULL),
(1254, 'kcdkyrpwoihspwvvhacd', 'jrjjjsvisbtsfzmf@gmail.com', 'uynsfearjkqcrvsmawrp', '2025-09-09 08:13:57', NULL),
(1255, 'azjgkfgmiyittssewvql', 'endubrwadoiqpvfg@gmail.com', 'zqqnxkvcjckrjymxugwb', '2025-09-09 08:13:58', NULL),
(1256, 'tcnhleshwathmywetlrh', 'fgajjogtqgosodgv@gmail.com', 'eytkkkwznouuwgusjcdy', '2025-09-09 08:13:58', NULL),
(1257, 'vzxtnriifyqbqzrtzott', 'xtfgbdgaunvrlmaq@gmail.com', 'caaydkhchcyvyywdbtvm', '2025-09-09 08:14:00', NULL),
(1258, 'rtxscvivsaeylujpeywy', 'viqbnnlrqnondtqk@gmail.com', 'wcqmmxbjjolugwdruvhc', '2025-09-09 08:14:00', NULL),
(1259, 'irhcxwgpqdyavtmcfxoj', 'ubxobssiyamodjzo@gmail.com', 'jkytqexprwdcvcswiqnx', '2025-09-09 08:14:00', NULL),
(1260, 'tsrbpesqacjydskvvofu', 'krrefvgctyokqxak@gmail.com', 'uibiziqokbyhlybjycnw', '2025-09-09 08:14:01', NULL),
(1261, 'jprysydsupucdvibqzuk', 'myhmijxiralqpoxf@gmail.com', 'hdwgdgiqaklbxzxbnmlq', '2025-09-09 08:14:01', NULL),
(1262, 'bwmjliuynhfbutcvnctl', 'wdharnsqkdvqazgk@gmail.com', 'jaedbuzyylvdwjmjjqew', '2025-09-09 08:14:01', NULL),
(1263, 'izzcerpuekobveqrtdbt', 'juqindwgluqvyuuc@gmail.com', 'hnuyuzvtpmupuotxljlh', '2025-09-09 08:14:01', NULL),
(1264, 'jsfbehmndzisvxzbjezv', 'jmvyarbtbuyaozns@gmail.com', 'dlivboxszxrkwzhsocuf', '2025-09-09 08:14:01', NULL),
(1265, 'gcqzymyhybnhdcbhspyq', 'zvxhgfjyjudiuzkn@gmail.com', 'cgianzyqlormkxkyqqvs', '2025-09-09 08:14:02', NULL),
(1266, 'ihfiuaijwqeltwltaplb', 'haqnzowikhmsxqvv@gmail.com', 'ofwrodegrsynhuralxgs', '2025-09-09 08:14:03', NULL),
(1267, 'kanjdikeukwcruoevwdr', 'xqbgskudvzurxqif@gmail.com', 'pmddoiaaoacwpthcjwgo', '2025-09-09 08:14:03', NULL),
(1268, 'wsakbmkvaerxabtlqtqu', 'akliwcyicawchwhv@gmail.com', 'txxpovwnjunghcnsvxye', '2025-09-09 08:14:03', NULL),
(1269, 'thxrvtdihphetdcrzwic', 'qzbeycqwjappannw@gmail.com', 'ybonvhcizgqjgaaibydx', '2025-09-09 08:14:04', NULL),
(1270, 'flralejepydzbyeuuxhi', 'zeulzknnvtoojhrp@gmail.com', 'ogokthhtrohfiyicgads', '2025-09-09 08:14:04', NULL),
(1271, 'xkwbduwilsxehrlfxbzb', 'ilqdzbjbtaqrgzpd@gmail.com', 'yajkjrtcyorvypxpzdaf', '2025-09-09 08:14:04', NULL),
(1272, 'taexouzxeejydvlsomvu', 'lbwgoxcqorszzxln@gmail.com', 'kxzufwlwakjydoagolzg', '2025-09-09 08:14:04', NULL),
(1273, 'xhjcaffpeudvokffppaa', 'kpeobcetnjwmzkgc@gmail.com', 'jhkldpjzheratkistngb', '2025-09-09 08:14:04', NULL),
(1274, 'obustuuhqimvixqcecmr', 'qppvupdsulrncfte@gmail.com', 'ukeimxlvarevhendoygq', '2025-09-09 08:14:04', NULL),
(1275, 'xwkrtgwjhystfgztgujn', 'jsnfmdyeilgywtid@gmail.com', 'kqefdcpdrmedhoehykhj', '2025-09-09 08:14:04', NULL),
(1276, 'lqhdlalrcgrmhnmuulsx', 'rtqyzabukfqxkxye@gmail.com', 'dapdsiexqjnfzwsvqrlq', '2025-09-09 08:14:04', NULL),
(1277, 'plbqvbffqkhgyhvjpdld', 'syegqfpfmswplhpf@gmail.com', 'xvdwyhpfzwgyokhepqlc', '2025-09-09 08:14:05', NULL),
(1278, 'iyzwzilibuptsjjquwoa', 'lvtyhfkwxssylhyp@gmail.com', 'pitizrxkcqghmvgzwmdm', '2025-09-09 08:14:05', NULL),
(1279, 'szdpobgeeuvrxmuoqnrt', 'rbkieazvvnqritsj@gmail.com', 'pqkwrxpfjqlafagfrcju', '2025-09-09 08:14:05', NULL),
(1280, 'hxwntcfmstyzimwnovjg', 'yomwdbdupfwpuhxq@gmail.com', 'fmcbwsutkmjzhggalqja', '2025-09-09 08:14:05', NULL),
(1281, 'sbnjkohxaaliisepygfv', 'wljcvmlpgbxyyshd@gmail.com', 'pfwklbvygtpjvmqgnyhi', '2025-09-09 08:14:06', NULL),
(1282, 'duzqymstcvwphdnorodo', 'uyznvigqvxxzllac@gmail.com', 'njbmzhwrudgkplpraqtv', '2025-09-09 08:14:06', NULL),
(1283, 'jpjntwkoqjxbnkzzhsdg', 'ukcttgguhicucowh@gmail.com', 'ylxfzadezeoysmjkmbgg', '2025-09-09 08:14:07', NULL),
(1284, 'eszfqveazkdhbqzhadoo', 'qslexxoozjvjpnkh@gmail.com', 'zuasmzdfwbmxnhqrxbgr', '2025-09-09 08:14:07', NULL),
(1285, 'cwqqaeuimkxxmxbqkjii', 'jvpdqaaptaodhkxe@gmail.com', 'lpqyxgluzwlaegicctpv', '2025-09-09 08:14:07', NULL),
(1286, 'zschiwluyrptrnyzqujh', 'ddzbwddjhsmcbkjo@gmail.com', 'rjotojogtaqgnfxzmpcs', '2025-09-09 08:14:08', NULL),
(1287, 'vbablzmcrbyifihznfor', 'qxwuqnytvqyqbkaf@gmail.com', 'efshlkhnyhlrvuofegof', '2025-09-09 08:14:08', NULL),
(1288, 'khobncirjhoqlghwckto', 'jangrpzcevahldlc@gmail.com', 'jzktzodriccxwjhwnhyz', '2025-09-09 08:14:08', NULL),
(1289, 'yyyxyzkgnqufacdgwcjf', 'svjfqpjqomjsuqij@gmail.com', 'ujmtmltgnjegsclcuevk', '2025-09-09 08:14:08', NULL),
(1290, 'ehgnrowhqbdoxkcqhlek', 'msdszbczrsxadwlo@gmail.com', 'yrohvmgmmcpftemgdtqp', '2025-09-09 08:14:09', NULL),
(1291, 'yzmqqmfmidolcopyvngb', 'pfpcqzdfcaxyoqcp@gmail.com', 'ixqkjzyadpvnbivregip', '2025-09-09 08:14:09', NULL),
(1292, 'jmdfkzqzzpvdybwupwaw', 'jygmffvyxyquptlp@gmail.com', 'hmiypwwjvzcgpmdwmyxd', '2025-09-09 08:14:09', NULL),
(1293, 'ajrxcghjikdvhjiwawyj', 'ovpuxynfrsuknyeo@gmail.com', 'geddluyxlxsfvziypkjc', '2025-09-09 08:14:09', NULL),
(1294, 'ysmoniwezgfjkcvdxiry', 'onyztkqccvkfpafq@gmail.com', 'qyilgvwpfwhhfzvnadch', '2025-09-09 08:14:10', NULL),
(1295, 'xwoffuakautawysxzjxb', 'oijpuoupsrzevmsb@gmail.com', 'zmzhdquvurjaviydwwzf', '2025-09-09 08:14:10', NULL),
(1296, 'raqndmbrvyqigvyldjyr', 'xcdmejyobqglwtvr@gmail.com', 'pwmxrvtmrphecaqzncsc', '2025-09-09 08:14:11', NULL),
(1297, 'eljnuczrpixjuvrmjgpv', 'sznrcntndwccetip@gmail.com', 'ysqjtbxezhuyubbrrcua', '2025-09-09 08:14:12', NULL),
(1298, 'yxmleuawhhhpwbcaxsif', 'bndgtgeyifaeacuk@gmail.com', 'kjkoqbpokfrhppzxdsin', '2025-09-09 08:14:13', NULL),
(1299, 'Josepharcig', 'sfsfsfdfsdfsdsfdfdfd@gmail.com', 'In Chelyabinsk, Russia learn how avoid medical and food law. it\'s not vir. \r\n \r\n15 September 2025 Russia open border for Chinese citizen (visa-free). \r\n \r\nWelcome to Chelyabinsk for adult adoption.', '2025-09-10 04:49:57', NULL),
(1300, 'Simonjed', 'irinademenkova86@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2025-09-10 05:08:28', NULL),
(1301, 'Georgejed', 'irinademenkova86@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-09-11 02:49:37', NULL),
(1302, 'Leejed', 'dinanikolskaya99@gmail.com', 'Salam, qiymətinizi bilmək istədim.', '2025-09-12 05:00:51', NULL),
(1303, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hallo, ek wou jou prys ken.', '2025-09-13 09:06:12', NULL),
(1304, 'CraigTHULK', '1dansbydruscillaoyu@gmail.com', 'https://loveshop1300.shop We are back!    ?? ????? ? ????!', '2025-09-14 00:05:37', NULL),
(1305, 'Billyareni', 'dansbydruscillaoyu@gmail.com', 'https://loveshop1300.world new site, new stuff, new life.', '2025-09-14 02:44:44', NULL),
(1306, 'ElijahFoelt', 'xunalajiwo42@gmail.com', 'https://loveshop.world now alive, welcome!', '2025-09-14 05:03:53', NULL),
(1307, 'Leejed', 'dinanikolskaya99@gmail.com', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2025-09-14 08:28:19', NULL),
(1308, 'Leejed', 'zekisuquc419@gmail.com', 'Salut, ech wollt Äre Präis wëssen.', '2025-09-14 15:40:03', NULL),
(1309, 'DavidKiz', 'peomafomi1974@mailopenz.com', 'To decide headlines, prefer credible outlets, confirm facts, note bias and find depth. Corroborate with multiple reports, use expert opinion, and set notifications for topics you monitor. Build media savvy https://smasters.com', '2025-09-15 18:26:23', NULL),
(1310, 'Larryetece', 'n24d0khos@mozmail.com', 'Plunge into the stunning realm of EVE Online. Test your limits today. Trade alongside thousands of players worldwide. <a href=https://www.eveonline.com/signup?invc=46758c20-63e3-4816-aa0e-f91cff26ade4>Start playing for free</a>', '2025-09-15 23:29:40', NULL),
(1311, 'Georgejed', 'irinademenkova86@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-09-16 08:20:14', NULL),
(1312, 'Crystle Cano', 'cano.crystle@hotmail.com', 'Don’t miss out: your ad to 1M sites for just $49 before it’s too late. Message me at contactformmarketing@claim-erc.top', '2025-09-16 09:14:07', NULL),
(1313, 'Leejed', 'zekisuquc419@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-09-16 19:08:43', NULL),
(1314, 'ElijahFoelt', 'xunalajiwo42@gmail.com', 'https://loveshop1300.shop now alive, welcome,loveshop1300 new website!', '2025-09-17 07:05:40', NULL),
(1315, 'yrilkshmdjhanmsn', 'jgkmnfhjs@gmail.com', 'hfkioorlkksnja nfhjkdnns d,mms. onnsjkkkk', '2025-09-19 07:53:13', NULL),
(1316, 'ClaudeSkith', 'renewalprofessionalservices@gmail.com', 'Win an iPhone 16 Pro Max for just the cost of shipping https://telegra.ph/Win-iPhones-Samsung-09-18-3284?3v2p7h3i6q5sz2i', '2025-09-19 13:08:35', NULL),
(1317, 'Thomaswrink', 'xunalajiwo42@gmail.com', 'https://sex-city.porn/  the best porno site ever! NO ADS!', '2025-09-20 15:55:27', NULL),
(1318, 'Leejed', 'zekisuquc419@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-09-21 03:22:56', NULL),
(1319, 'xzxsojpphf', 'zvmwpfdg@testform.xyz', 'ygoqwwmytpewdonihuvdwluuhntkww', '2025-09-21 21:54:03', NULL),
(1320, 'Maxie Higginbotham', 'maxie.higginbotham@gmail.com', 'Here is my site: https://submissiontodirectory.top/', '2025-09-22 04:32:22', NULL),
(1321, 'Graig Teel', 'teel.graig@outlook.com', 'https://www.king-of-sports.co.uk', '2025-09-22 15:52:46', NULL),
(1322, 'CraigTHULK', '1dansbydruscillaoyu@gmail.com', 'https://loveshop1300.shop We are back!    ?? ????? ? ????!', '2025-09-23 21:55:22', NULL),
(1323, 'CharlesDUT', 'rosi-kasi@web.de', 'Auf dieser Seite werden viele Madchen mit ihrem ganzen Sex verwohnt https://www.pennherb.com/go?https://telegra.ph/Online-Dating-f%C3%BCr-Sex-09-23?9057', '2025-09-24 09:46:42', NULL),
(1324, 'Leejed', 'irinademenkova86@gmail.com', 'Zdravo, htio sam znati vašu cijenu.', '2025-09-24 18:17:42', NULL),
(1325, 'Leejed', 'zekisuquc419@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-09-25 15:16:17', NULL),
(1326, 'CharlesDUT', 'diazsharon377@gmail.com', 'Sexy girls are looking for one-time sex only here https://it.visitbenidorm.es/boletines/redir?dir=telegra.ph%2FOnline-dating-for-sex-09-24%3F0931', '2025-09-25 16:13:14', NULL),
(1327, 'BruceSkeva', 'mullyamuhyp1970@mailopenz.com', 'To select reports, prefer reliable providers, confirm facts, note prejudice and find detail. Triangulate with multiple accounts, use expert insight, and set alerts for topics you care. Build media awareness https://smasters.com', '2025-09-25 22:11:10', NULL),
(1328, 'Billyareni', 'dansbydruscillaoyu@gmail.com', 'https://loveshop1300.world new site, new stuff, new life.', '2025-09-26 00:29:30', NULL),
(1329, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hola, quería saber tu precio..', '2025-09-26 04:04:04', NULL),
(1330, 'CharlesDUT', 'vao85@icloud.com', 'VERY DEPRAVED WOMEN WANT SEX ONLY ON THIS SITE https://lantern.co.tz/lang/sw?return=https%3A%2F%2Ftelegra.ph%2FOnline-dating-for-sex-09-24%3F2425', '2025-09-27 03:32:31', NULL),
(1331, 'CharlesDUT', 'jnlporter@comcast.net', 'Beautiful girls want sex with you only on this site https://komyounity.com/goto/https://telegra.ph/Online-dating-for-sex-09-24?0856', '2025-09-28 14:27:35', NULL),
(1332, 'Leejed', 'zekisuquc419@gmail.com', 'Hola, volia saber el seu preu.', '2025-09-29 07:45:49', NULL),
(1333, 'Simonjed', 'dinanikolskaya99@gmail.com', 'Hi, I wanted to know your price.', '2025-09-29 10:11:00', NULL),
(1334, 'Larisauneno', 's4ic4@melssa.com', 'Appreciation you\") \r\n \r\nhttps://hop.cx', '2025-09-29 12:53:20', NULL),
(1335, 'Leejed', 'zekisuquc419@gmail.com', 'Aloha, makemake wau eʻike i kāu kumukūʻai.', '2025-09-30 10:25:55', NULL),
(1336, 'Leejed', 'dinanikolskaya99@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-09-30 14:28:48', NULL),
(1337, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-10-01 00:13:06', NULL),
(1338, 'Georgejed', 'dinanikolskaya99@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-10-02 02:20:14', NULL),
(1339, 'RalphPrire', 'xunalajiwo42@gmail.com', 'https://www.porn-city.com/  the best porno site ever! NO ADS!', '2025-10-03 01:34:08', NULL),
(1340, 'SMPXrcem', 'p.e.r.s.ai.to.v.20@gmail.com:pop.gmail.com', 'Сезонные зимние композиции на хвойной подложке, ветроустойчивые. Сезонные сменные решения, уход, промывка. Фотоотчет после установки на кладбище.   <a href=https://rusrose.ru/>ирисы траурные</a>', '2025-10-04 10:45:31', NULL),
(1341, 'Simonjed', 'dinanikolskaya99@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-10-05 22:20:56', NULL),
(1342, 'BruceSkeva', 'mullyamuhyp1970@mailopenz.com', 'To pick headlines, prefer credible sources, verify facts, note slant and find detail. Crosscheck with multiple accounts, use expert opinion, and set bulletins for topics you care. Build media skill https://smasters.com', '2025-10-06 15:42:09', NULL),
(1343, 'Dawn Black', 'black.dawn@gmail.com', 'Limited-Time Deal: $99 = 2M Direct Contact Form Sends. You’re reading this message—so you already know it works. Reach me at: phil.forms@form-blast-promo.top', '2025-10-07 15:44:10', NULL),
(1344, 'Georgejed', 'dinanikolskaya99@gmail.com', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2025-10-08 01:43:21', NULL),
(1345, 'tzSivMclGXhLBqn', 'anoyavize94@gmail.com', 'kNQNSfWTtaXcHuVR', '2025-10-09 19:24:20', NULL),
(1346, 'Leejed', 'zekisuquc419@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2025-10-09 19:56:31', NULL),
(1347, 'vworqpuzpt', 'kvzwxqnz@testform.xyz', 'mswvwpzulpddtsuvqtwrvsneyemnfq', '2025-10-10 14:28:28', NULL),
(1348, 'vghxedoxyq', 'yojvtdri@testform.xyz', 'zkrwowmnyuigvvserpguzgomdoxzrg', '2025-10-10 14:28:29', NULL),
(1349, 'dndxulropl', 'vprmkdtk@testform.xyz', 'ntrmsqokxlswwozihpgrojmhioeszj', '2025-10-10 14:28:30', NULL),
(1350, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hola, volia saber el seu preu.', '2025-10-11 23:50:56', NULL),
(1351, 'Leejed', 'zekisuquc419@gmail.com', 'Sveiki, es gribēju zināt savu cenu.', '2025-10-12 04:28:11', NULL),
(1352, 'BruceSkeva', 'mullyamuhyp1970@mailopenz.com', 'To pick news, prefer reliable sources, verify facts, note bias and find depth. Crosscheck with multiple accounts, use expert commentary, and set feeds for topics you follow. Build media literacy https://smasters.com', '2025-10-12 20:09:25', NULL),
(1353, 'BwexctwlJDxeUm', 'yakohecarer10@gmail.com', 'eRBKXiZyHWudVbJB', '2025-10-13 01:55:36', NULL),
(1354, 'Chris Earp', 'chris.earp@outlook.com', 'Limited-Time Deal: $99 for 2 Million Website Form Entries. You’re reading this. So will your next 2 million. Get started by emailing me at: phil.strategy@form-blast-promo.top', '2025-10-13 05:46:27', NULL),
(1355, 'Leejed', 'zekisuquc419@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-10-14 06:24:15', NULL),
(1356, 'pgcsvLXroqP', 'qafequlu09@gmail.com', 'yixWcUVMoTRtOWw', '2025-10-14 16:04:50', NULL),
(1357, 'RalphPrire', 'xunalajiwo42@gmail.com', 'https://www.porn-city.com/  the best porno site ever! NO ADS!', '2025-10-14 18:01:07', NULL),
(1358, 'Leejed', 'dinanikolskaya99@gmail.com', 'Dia duit, theastaigh uaim do phraghas a fháil.', '2025-10-15 13:42:02', NULL),
(1359, 'WilliamCob', 'eding3563@gmail.com', 'Need access to DrugHub Market? Follow this onion link to the market directly \r\n \r\n<a href=https://drughub-mirror.net>https://drughub-mirror.net</a> \r\nhttps://drughub-mirror.net', '2025-10-16 16:01:45', NULL),
(1360, 'Anthonylielf', 'maksdaloli@mail.ru', 'Хирургическая стоматология \r\nпародонтология – наука, изучающая заболевания околозубных тканей и болезни слизистой рта https://kornident.ru/polezno-znat/vrem-koronki/', '2025-10-17 07:32:47', NULL),
(1361, 'Leejed', 'dinanikolskaya99@gmail.com', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.', '2025-10-17 15:20:21', NULL),
(1362, 'CraigTHULK', '1dansbydruscillaoyu@gmail.com', 'https://Orb11ta.help We are back! orb11ta is online.', '2025-10-17 16:19:49', NULL),
(1363, 'Leejed', 'dinanikolskaya99@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2025-10-18 13:03:31', NULL),
(1364, 'SMPXrcem', 'pe.r.sa.i.tov.2.0@gmail.com:pop.gmail.com', 'Сезонные зимние букеты на хвойной подложке, устойчивые к ветру. Сменные декоры по сезонам, обслуживание, мойка. Фото-отчёт после монтажа на погосте.   <a href=https://rusrose.ru/>траурные цветы Кропоткин</a>', '2025-10-18 21:19:00', NULL),
(1365, 'WilliamCob', 'eding3563@gmail.com', 'Was anyone interested in visiting DrugHub Market? Access the DrugHub Market by Tor URL. Official website for direct access \r\n \r\n<a href=https://drughub-darkweb.com>https://drughub-darkweb.com</a> \r\nhttps://drughub-darkweb.com', '2025-10-19 20:41:43', NULL),
(1366, 'LisachSex', 'lisachisholm1990@directinboxs.com', 'видео <a href=https://mailsco.online/>mailsco online</a> процесс, обязывающий фокуса на деталях.', '2025-10-19 22:07:56', NULL),
(1367, 'Anthonylielf', 'maksdaloli@mail.ru', 'Коронки стоматологические \r\n\r\nКариес и его осложнения', '2025-10-19 22:13:48', NULL),
(1368, 'Charlespal', 'hpricehm35@gmail.com', 'https://mega-main.shop', '2025-10-20 10:50:40', NULL),
(1369, 'Simonjed', 'dinanikolskaya99@gmail.com', 'Hæ, ég vildi vita verð þitt.', '2025-10-20 12:18:23', NULL),
(1370, 'Georgejed', 'dinanikolskaya99@gmail.com', 'Kaixo, zure prezioa jakin nahi nuen.', '2025-10-21 05:54:04', NULL),
(1371, 'Felisha Spode', 'spode.felisha@googlemail.com', 'Here is my site: https://submissiontodirectory.top/', '2025-10-21 21:08:42', NULL),
(1372, 'Leejed', 'zekisuquc419@gmail.com', 'হাই, আমি আপনার মূল্য জানতে চেয়েছিলাম.', '2025-10-22 10:48:09', NULL),
(1373, 'Leejed', 'dinanikolskaya99@gmail.com', 'Здравейте, исках да знам цената ви.', '2025-10-22 11:08:13', NULL),
(1374, 'Anthonylielf', 'maksdaloli@mail.ru', 'Основная статья: Хирургическая стоматология \r\n\r\n\r\n\r\nЭлементы поражения слизистой оболочки полости рта', '2025-10-22 16:12:17', NULL),
(1375, 'RalphPrire', 'xunalajiwo42@gmail.com', 'https://www.porn-city.com/  the best porno site ever! NO ADS!', '2025-10-22 21:24:03', NULL),
(1376, 'Adrian Moor', 'adrian.moor@gmail.com', 'Final hours: lock in 1M guaranteed sends for $55 before it’s too late. Reach out to me today at outreachwithforms@claim-erc.top', '2025-10-23 00:29:27', NULL),
(1377, 'vlfjtphqgx', 'mmuytjeg@testform.xyz', 'fftxshlykeidjgxgntrysreslzrozu', '2025-10-23 11:59:44', NULL),
(1378, 'qyoqfmypop', 'hyloqlom@testform.xyz', 'iequzhdmjklgiwtsjpjzywypzejojd', '2025-10-23 11:59:44', NULL),
(1379, 'yvyxiyqwmv', 'ogohwjnn@testform.xyz', 'wmtfotyqufykkflposqtjjfgvxlkdz', '2025-10-23 11:59:44', NULL),
(1380, 'DuaneEntig', 'higbiosepo1986@mail.ru', 'Интернет-магазин «Профессиональная косметика» в Москве рад приветствовать всех тех, кто бережно и ответственно подходит к уходу за своей внешностью!', '2025-10-24 01:34:15', NULL),
(1381, 'Leejed', 'zekisuquc419@gmail.com', 'Ndewo, achọrọ m ịmara ọnụahịa gị.', '2025-10-24 09:16:52', NULL),
(1382, 'ZLLUDQCuLYqTPZWak', 'leamvt2004@gmail.com', 'rWPhblbRbOATVKNL', '2025-10-24 14:01:40', NULL),
(1383, 'eyslwhnhhm', 'oqpfjvfn@testform.xyz', 'njikxfghsgxwtdiizovpwgnytffzoo', '2025-10-24 15:48:45', NULL),
(1384, 'klqyjyepvj', 'zogueskx@testform.xyz', 'hojhyoqdxnupqdiytrjjuktfkswewz', '2025-10-24 15:48:45', NULL),
(1385, 'liqjhnxknr', 'rzjgedyr@testform.xyz', 'pgknlysilmfkufewevhlneytsnjjwi', '2025-10-24 15:48:45', NULL),
(1386, 'Simonjed', 'dinanikolskaya99@gmail.com', 'Hi, roeddwn i eisiau gwybod eich pris.', '2025-10-25 05:08:53', NULL),
(1387, 'Leejed', 'dinanikolskaya99@gmail.com', 'Hallo, ek wou jou prys ken.', '2025-10-25 16:30:29', NULL),
(1388, 'RaymondMiz', 'raymondsoisp@inboxgate.rest', 'You’re spot on, helps to hear other opinions. \r\n \r\nIn case anyone’s interested, I found a link recently: <a href=https://maba-3d-druck.de>relevant too</a> \r\n \r\nAnyone else seen it?.', '2025-10-26 01:24:03', NULL),
(1389, 'DuaneEntig', 'higbiosepo1986@mail.ru', 'Expert Professional призван заботиться о вашей красоте!', '2025-10-26 08:24:30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 9),
(1, 'App\\User', 18),
(1, 'App\\User', 19),
(1, 'App\\User', 20),
(1, 'App\\User', 26),
(1, 'App\\User', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@mail.com', '$2y$10$I/pORoWJB8i3jieM/TUW4Ortlni8K1XzUPO8LmhmUX07W4UtiUkmG', '2023-05-15 17:13:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_konsumens`
--

CREATE TABLE `pelayanan_konsumens` (
  `id` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelayanan_konsumens`
--

INSERT INTO `pelayanan_konsumens` (`id`, `judul`, `file`, `created_at`, `updated_at`) VALUES
(1, 'TW III Tahun 2022', 'filePdf/layananKonsumen/tRRDtyAp3UuIf2SBWxZE2rcNwpTFx8URmFYEuOdw.pdf', '2023-05-04 15:54:44', NULL),
(2, 'TW IV Tahun 2022', 'filePdf/layananKonsumen/rdI7rHxdGgH0FPzvjn0ZLwaobxr8bSigIwSf0uJF.pdf', '2023-05-04 15:55:08', NULL),
(5, 'Pub Pengaduan 2023', 'filePdf/layananKonsumen/A7RWOjCQiQNrX6rxmbcev4KVHC0vqCqN3XjO1Cy6.pdf', '2024-04-26 08:13:01', NULL),
(8, 'Pub Pengaduan 2024', 'filePdf/layananKonsumen/AsGeJDaWQmosLNSPEQBVMSh8LPqLDwnIIds5lGqW.pdf', '2025-02-12 08:39:28', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaranrekening`
--

CREATE TABLE `pendaftaranrekening` (
  `id` int(10) UNSIGNED NOT NULL,
  `rekening_yang_dikehendaki` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_alias` varchar(100) DEFAULT NULL,
  `kartu_identitas` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `alamat_identitas` text NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kode_pos_alamat` varchar(255) NOT NULL,
  `kab_kota_alamat` varchar(255) NOT NULL,
  `kab_kota_tmpt_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `nama_gadis_ibu_kandung` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `npwp` bigint(20) UNSIGNED DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat_email` varchar(50) NOT NULL,
  `status_tempat_tinggal` varchar(20) NOT NULL,
  `tujuan_pembuatan_rekening` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `bidang_usaha` varchar(50) DEFAULT NULL,
  `tanggal_pendirian_perusahaan` date DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `nip_gol` varchar(50) DEFAULT NULL,
  `mulai_bekerja` date DEFAULT NULL,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `no_tlpn_kantor` varchar(20) DEFAULT NULL,
  `pendapatan_rata_rata_perbulan` varchar(255) NOT NULL,
  `sumber_pendapatan` varchar(50) NOT NULL,
  `nominal_pendapatan` int(10) UNSIGNED NOT NULL,
  `nama_lengkap_kontak_darurat` varchar(100) NOT NULL,
  `hubungan_dengan_pemohon` varchar(50) NOT NULL,
  `alamat_kontak_darurat` text NOT NULL,
  `no_tlpn_kontak_darurat` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaranrekening`
--

INSERT INTO `pendaftaranrekening` (`id`, `rekening_yang_dikehendaki`, `nama_lengkap`, `nama_alias`, `kartu_identitas`, `no_identitas`, `alamat_identitas`, `kelurahan`, `kecamatan`, `kode_pos_alamat`, `kab_kota_alamat`, `kab_kota_tmpt_lahir`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `status_perkawinan`, `nama_gadis_ibu_kandung`, `agama`, `kewarganegaraan`, `npwp`, `pendidikan_terakhir`, `no_tlpn`, `no_hp`, `alamat_email`, `status_tempat_tinggal`, `tujuan_pembuatan_rekening`, `pekerjaan`, `nama_perusahaan`, `bidang_usaha`, `tanggal_pendirian_perusahaan`, `jabatan`, `nip_gol`, `mulai_bekerja`, `alamat_kantor`, `no_tlpn_kantor`, `pendapatan_rata_rata_perbulan`, `sumber_pendapatan`, `nominal_pendapatan`, `nama_lengkap_kontak_darurat`, `hubungan_dengan_pemohon`, `alamat_kontak_darurat`, `no_tlpn_kontak_darurat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, NULL, 'SITI ROMLAH', 'SITI', 'KTP', '1871106812020001', 'KP. KEPAYANG JL PRUM RAGOM GAWI LK II', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Kota Bandar Lampung', '2002-12-28', 'Kota Bandar Lampung', 'Wanita', 'lajang', 'ASMINAH', 'Islam', 'Indonesia', NULL, 'SMA/SLTA', '089697705403', '089697705403', 'sitiromlahhh629@gmail.com', 'milikSendiri', 'transaksi', 'pelajar', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, '<1juta', 'gaji', 25, 'LISNAWATI', 'keluarga', 'KP. KEPAYANG JL PRUM RAGOM GAWI LK II', '0000', '2023-08-22 04:16:13', NULL, NULL),
(4, NULL, 'Yunita Rima', 'Yuyun', 'KTP', '1871105606700003', 'Perum Ragom gawi 2 Blok F no 1 Rajabasa Pemuka', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Kota Palembang', '1970-06-16', 'Kota Palembang', 'Wanita', 'menikah', 'Siti Aminah', 'Islam', 'Indonesia', 0, 'SMA/SLTA', '0000', '089508214419', 'yunitarima16@gmail.com', 'milikKeluarga', 'transaksi', 'ibuRumahTannga', NULL, NULL, NULL, 'Kader poskeskel', NULL, '2013-06-10', 'Jl.Raden Gunawan 2  GG Melati 5 Rajabasa pemuka.Bandarlampung', '0000000', '<1juta', 'lainnya', 500000, 'Yesi putri Pratama Chandra', 'keluarga', 'Perum Ragom gawi 2 Blok F no 1 RT 005/LK 1', '0895610121871', '2023-08-22 05:32:10', NULL, NULL),
(5, NULL, 'NYAI ANJAR SARI', 'Anjar', 'KTP', '1871104503710001', 'Jln pramuka,kp kepayang no 08 Lk 11(dua romawi)Rt 006 Rw000 kelurahan Rajabasa pemuka ,kecamatan Rajabasa', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Rajabasa,05,03,1971', '1971-03-05', 'Rajabasa,05,03,1971', 'Wanita', 'duda/janda', 'Sarminah', 'Islam', 'Indonesia', NULL, 'SMA/SLTA', '085269609888', '085269609888', 'sarianjar020@gmail.com', 'milikKeluarga', 'transaksi', 'lainnya', NULL, 'Kader posyandu balita', NULL, 'Anggota kader posyandu', NULL, NULL, 'Kepayang', NULL, '<1juta', 'gaji', 500000, 'Qory virgiana devi', 'keluarga', 'Jln pramuka kp kepayang', '0895333088126', '2023-08-22 06:11:17', NULL, NULL),
(6, NULL, 'NYAI ANJAR SARI', 'Anjar', 'KTP', '1871104503710001', 'Jln pramuka,kp kepayang no 08 Lk 11(dua romawi)Rt 006 Rw000 kelurahan Rajabasa pemuka ,kecamatan Rajabasa', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Rajabasa,05,03,1971', '1971-03-05', 'Rajabasa,05,03,1971', 'Wanita', 'duda/janda', 'Sarminah', 'Islam', 'Indonesia', NULL, 'SMA/SLTA', '085269609888', '085269609888', 'sarianjar020@gmail.com', 'milikKeluarga', 'transaksi', 'lainnya', NULL, 'Kader posyandu balita', NULL, 'Anggota kader posyandu', NULL, NULL, 'Kepayang', NULL, '<1juta', 'gaji', 500000, 'Qory virgiana devi', 'keluarga', 'Jln pramuka kp kepayang', '0895333088126', '2023-08-22 06:11:18', NULL, NULL),
(7, NULL, 'jariah', 'awok', 'KTP', '1871104903800005', 'kp kepayang LK II RT 06 kelurahan Rajabasa pemuka kecamatan Rajabasa kota bandar Lampung 35144', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Kota Bandar Lampung', '1980-03-09', 'Kota Bandar Lampung', 'Wanita', 'menikah', 'sarminah', 'Islam', 'Indonesia', NULL, 'Diploma', '081541489360', '081541489360', 'erwin.oktavia10@gmail.com', 'milikSendiri', 'transaksi', 'ibuRumahTannga', NULL, 'posyandu balita kepayang', NULL, 'kader', NULL, '2010-04-19', 'jalan kepayang LK II GG Cendana 2 nomor 9 kelurahan Rajabasa pemuka 35144', NULL, '<1juta', 'gaji', 500000, 'Erwin oktaviaErwin oktaviaErwin oktavia', 'keluarga', 'kp kepayang LK II RT 06 no 9 kelurahan Rajabasa pemuka kecamatan Rajabasa kota bandar Lampung 35144', '081541489360', '2023-08-22 07:58:00', NULL, NULL),
(8, NULL, 'SAENI', 'Eni', 'KTP', '1871105702940001', 'Jl Pramuka kp kepayang no 29 lk II', 'Rajabasa pemuka', 'Rajabasa', '35144', 'Kota bandar lampung', 'Kepayang', '1994-02-17', 'Kepayang', 'Wanita', 'menikah', 'Martijah', 'Islam', 'Indonesia', NULL, 'SMP', '08978207191', '08978207191', 'saenie858@gamil.com', 'milikKeluarga', 'transaksi', 'ibuRumahTannga', NULL, 'Posyandu balita kepayang', NULL, 'Kader', NULL, '2020-02-09', 'Jl kepayang gang Cendana 2 lk II RT 06 no 9', NULL, '<1juta', 'gaji', 500, 'Sista julianti', 'saudara', 'Jl pramuka kp kepayang no 29 lkII', '0895640069668', '2023-08-22 09:43:02', NULL, NULL),
(9, NULL, 'SAENI', 'Eni', 'KTP', '1871105702940001', 'Jl Pramuka kp kepayang no 29 lk II', 'Rajabasa pemuka', 'Rajabasa', '35144', 'Kota bandar lampung', 'Kepayang', '1994-02-17', 'Kepayang', 'Wanita', 'menikah', 'Martijah', 'Islam', 'Indonesia', NULL, 'SMP', '08978207191', '08978207191', 'saenie858@gamil.com', 'milikKeluarga', 'transaksi', 'ibuRumahTannga', NULL, 'Posyandu balita kepayang', NULL, 'Kader', NULL, '2020-02-09', 'Jl kepayang gang Cendana 2 lk II RT 06 no 9', NULL, '<1juta', 'gaji', 500, 'Sista julianti', 'saudara', 'Jl pramuka kp kepayang no 29 lkII', '0895640069668', '2023-08-22 09:44:03', NULL, NULL),
(10, NULL, 'Yesi putri pratama chandra', 'Puput', 'KTP', '1871106305930006', 'PERUM RAGOM GAWI II BLOK F NO. 1 LK I RAJABASA\r\nRT/RW : 025/-', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Pekanbaru', '1993-05-23', 'Pekanbaru', 'Wanita', 'menikah', 'Yunita rima', 'Islam', 'Indonesia', NULL, 'SMA/SLTA', '0895610121871', '0895610121871', 'yesiputri2305@gmail.com', 'sewa/kontrakkan', 'transaksi', 'ibuRumahTannga', NULL, NULL, NULL, 'Kader poslansi', NULL, '2023-01-18', 'Jl kepayang LK II RT 06  gg Cendana 2 no. 09', NULL, '<1juta', 'lainnya', 250000, 'Yunita rima', 'keluarga', 'Perum ragom gawi II blok f no. 1', '089508214419', '2023-08-22 11:49:54', NULL, NULL),
(11, NULL, 'Yesi putri pratama chandra', 'Puput', 'KTP', '1871106305930006', 'PERUM ragom gawi II blok f no. 1 LK I RAJABASA\r\nRT/RW :025/-', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Pekanbaru', '1993-05-23', 'Pekanbaru', 'Wanita', 'menikah', 'Yunita rima', 'Islam', 'Indonesia', NULL, 'SMA/SLTA', '0895610121871', '0895610121871', 'yesiputri2305@gmail.com', 'sewa/kontrakkan', 'transaksi', 'ibuRumahTannga', NULL, 'Kesehatan', NULL, 'Kader', NULL, '2023-01-18', 'Jl kepayang LK II RT 06 gg cendana2 no. 09', NULL, '<1juta', 'lainnya', 250000, 'Yunita rima', 'keluarga', 'Perum ragom gawi II blok f no1', '089508214419', '2023-08-22 11:59:29', NULL, NULL),
(12, NULL, 'Yunita Rima', 'Yuyun', 'KTP', '1871105606700003', 'Perum Ragom gawi 2 Blok F no 1  RT 0025/ LK 1 Kelurahan Rajabasa pemuka  .Rajabasa.Bandarlampung. Lampung', 'Rajabasa Pemuka', 'Rajabasa', '35144', 'Kota Bandar Lampung', 'Kota Palembang', '1970-06-16', 'Kota Palembang', 'Wanita', 'menikah', 'Siti Aminah', 'Islam', 'Indonesia', 0, 'SMA/SLTA', '000000', '089508214419', 'yunitarima16@gmail.com', 'milikKeluarga', 'transaksi', 'ibuRumahTannga', NULL, 'Kesehatan', NULL, 'Kader poskeskel', NULL, '2013-06-10', 'Jl.Raden Gunawan 2  GG Melati  5 no  73 Rajabasa pemuka.Bandarlampung', '000000', '<1juta', 'lainnya', 500000, 'Yesi putri Pratama Chandra', 'keluarga', 'Perum Ragom gawi 2 Blok F no 1 RT 0025/LK 1 Rajabasa Pemuka .  Rajabasa .Bandarlampung.Lampung', '0895610121871', '2023-08-24 05:57:58', NULL, NULL),
(13, NULL, 'Jimmi Afriando Akbar', 'Jimmi', 'KTP', '1871105606700012', 'Jln Imam Bonjol Gg Durian Gedong Air', 'Gedong Air', 'Tanjungkarang Barat (Tanjung Karang Barat)', '35158', 'Kota Bandar Lampung', 'Bandar Lampung', '2000-01-12', 'Bandar Lampung', 'Pria', 'menikah', 'Eny Lestiorini', 'Islam', 'Indonesia', NULL, 'S1', '085156437552', '085156437552', 'jimmiafriandoa@gmail.com', 'milikSendiri', 'simpanan', 'BUMN/BUMD', NULL, NULL, NULL, 'Staff', NULL, '2022-05-12', 'Jln Diponegoro Teluk Betung Utara', '085156437552', '>2-5juta', 'gaji', 5700000, 'Fenny Riannisa', 'keluarga', 'Jln Cokrominoto', '085156437552', '2025-09-09 04:04:31', NULL, NULL),
(14, NULL, 'Ahmad Romlah', 'Ahmad', 'KTP', '1871105606700015', 'Jln Kemiling', 'Kemiling Raya', 'Kemiling', '35158', 'Kota Bandar Lampung', 'Bandar Lampung', '2000-01-12', 'Bandar Lampung', 'Pria', 'menikah', 'Jaelani', 'Islam', 'Indonesia', NULL, 'S1', '08124385441', '08124385441', 'Ahmadsomad@gmail.com', 'milikSendiri', 'simpanan', 'BUMN/BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '>2-5juta', 'gaji', 12000000, 'cina', 'keluarga', 'jln kemiling', '08124385441', '2025-10-21 02:57:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sumatera Selatan (Ibu Kota Palembang)', NULL, NULL),
(2, 'Sumatera Barat (Ibu Kota Padang)', NULL, NULL),
(3, 'Bengkulu (Ibu Kota Bengkulu)', NULL, NULL),
(4, 'Riau (Ibu Kota Pekanbaru)', NULL, NULL),
(5, 'Kepulauan Riau (Ibu Kota Tanjung Pinang)', NULL, NULL),
(6, 'Jambi (Ibu Kota Jambi)', NULL, NULL),
(7, 'Lampung (Ibu Kota Bandar Lampung)', NULL, NULL),
(8, 'Bangka Belitung (Ibu Kota Pangkal Pinang)', NULL, NULL),
(9, 'Kalimantan Barat (Ibu Kota Pontianak)', NULL, NULL),
(10, 'Kalimantan Timur (Ibu Kota Samarinda)', NULL, NULL),
(11, 'Kalimantan Selatan (Ibu Kota Banjarbaru)', NULL, NULL),
(12, 'Kalimantan Tengah (Ibu Kota Palangkaraya)', NULL, NULL),
(13, 'Kalimantan Utara (Ibu Kota Tanjung Selor)', NULL, NULL),
(14, 'Banten (Ibu Kota Serang)', NULL, NULL),
(15, 'DKI Jakarta (Ibu Kota Jakarta)', NULL, NULL),
(16, 'Jawa Barat (Ibu Kota Bandung)', NULL, NULL),
(17, ' Jawa Tengah (Ibu Kota Semarang)', NULL, NULL),
(18, 'Daerah Istimewa Yogyakarta (Ibu Kota Yogyakarta)', NULL, NULL),
(19, 'Jawa Timur (Ibu Kota Surabaya)', NULL, NULL),
(20, 'Bali (Ibu Kota Denpasar)', NULL, NULL),
(21, 'Nusa Tenggara Timur (Ibu Kota Kupang)', NULL, NULL),
(22, 'Nusa Tenggara Barat (Ibu Kota Mataram)', NULL, NULL),
(23, 'Gorontalo (Ibu Kota Gorontalo)', NULL, NULL),
(24, 'Sulawesi Barat (Ibu Kota Mamuju)', NULL, NULL),
(25, 'Sulawesi Tengah (Ibu Kota Palu)', NULL, NULL),
(26, 'Sulawesi Utara (Ibu Kota Manado)', NULL, NULL),
(27, 'Sulawesi Tenggara (Ibu Kota Kendari)', NULL, NULL),
(28, 'Sulawesi Selatan (Ibu Kota Makassar)', NULL, NULL),
(29, 'Maluku Utara (Ibu Kota Sofifi)', NULL, NULL),
(30, 'Maluku (Ibu Kota Ambon)', NULL, NULL),
(31, 'Papua Barat (Ibu Kota Manokwari)', NULL, NULL),
(32, 'Papua (Ibu Kota Jayapura)', NULL, NULL),
(33, 'Papua Tengah (Ibu Kota Nabire)', NULL, NULL),
(34, 'Papua Pegunungan (Ibu Kota Jayawijaya)', NULL, NULL),
(35, 'Papua Selatan (Ibu Kota Merauke)', NULL, NULL),
(36, 'Papua Barat Daya (Ibu Kota Sorong)', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasis`
--

CREATE TABLE `publikasis` (
  `id` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `publikasis`
--

INSERT INTO `publikasis` (`id`, `judul`, `file`, `created_at`, `updated_at`) VALUES
(21, 'Desember 2020', 'filePdf/publikasi/NyIgrPsBtEWdWJNxlpONZEhWbfKCKxZColZyA4M9.pdf', '2025-04-30 08:32:34', NULL),
(23, 'Desember 2021', 'filePdf/publikasi/SVkFPSMsR2xJydxxd9NHHyf43pNledhoBK8Wn3xd.pdf', '2025-04-30 08:33:26', NULL),
(24, 'Desember 2022', 'filePdf/publikasi/wWtACREIJdk8g6FPXMD2gc2C94Lz2AQY5cu6j73f.pdf', '2025-04-30 08:36:41', NULL),
(25, 'Desember 2023', 'filePdf/publikasi/tikJ3Xz9TVXC8A3NykBFTf6YHJwtKyOEdQmYH0JX.pdf', '2025-04-30 08:37:14', NULL),
(26, 'September 2024', 'filePdf/publikasi/mdMeGYEZLnBScPntezCDrfEusclQwjJ0bIg7vzxc.pdf', '2025-04-30 08:37:26', NULL),
(27, 'Desember 2024', 'filePdf/publikasi/dkc2J7Woeq3b4ERAMkU0aepmyk6qviMY3RkThGU2.pdf', '2025-04-30 08:37:45', NULL),
(28, 'Maret 2025', 'filePdf/publikasi/NJylQbZ0Jpyvs8QDq2vJzgNqIgg2FBgKVMRAjfrP.pdf', '2025-04-30 08:38:03', NULL),
(30, 'Juni 2025', 'filePdf/publikasi/12dtVCEnbjsHlaOdiEK5fMD44NWxVmxZfebl1MAL.pdf', '2025-07-14 08:29:57', NULL),
(31, 'September 2025', 'filePdf/publikasi/jbslebPV7FlJUdly4UTCsK9dUaYfWl0YVFTWoS2c.pdf', '2025-10-16 01:31:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-03-29 18:58:24', '2023-03-29 18:58:24'),
(2, 'user', 'web', '2023-03-29 18:58:24', '2023-03-29 18:58:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tata_kelolas`
--

CREATE TABLE `tata_kelolas` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tata_kelolas`
--

INSERT INTO `tata_kelolas` (`id`, `judul`, `file`, `created_at`, `updated_at`) VALUES
(7, 'LAP TRANSPARANSI TAKOL 2022', 'filePdf/tataKelola/SnWKjWLyL7etesOKbj9hMh9RyRhhMYMAgIskYwky.pdf', '2025-04-23 05:13:05', NULL),
(8, 'LAP TRANSPARANSI TAKOL 2023', 'filePdf/tataKelola/BMZ9xHvYo3xjAwtBB1TvYPCjpMcfh48LK03RxTLB.pdf', '2025-04-23 05:13:22', NULL),
(9, 'LAP TRANSPARANSI TAKOL 2024', 'filePdf/tataKelola/9wU1c6vRP5syad92ypeAuWOw2OSlub2BBvgi0PZ3.pdf', '2025-04-23 05:13:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', '0000-00-00 00:00:00', '$2y$10$X8fonA8KCcQsHEjxiQ/rLOJYmfjzr1HbfQ90SY5joEba/2e4AdQmK', 'zOEr8In6DWYJ3xb4mqSwDh3i4etL0F69eRjKqR4tArgmz1y4LgTusbmveVbB', '2023-03-27 18:51:14', '2023-03-27 18:51:14'),
(18, 'admin', 'jimmiafriando@gmail.com', '2023-03-29 01:02:38', '$2y$10$6PDGwQ5ctsq/ZxlcAkgXsuc6zsggtXm9EGtlL4g1ndoSCTPPhCbO6', 'HtT3W6Z3OU24ngtKTvtISY5jVUCtDP5m3IsremOmoNO3AaupMztdh6bWuKUq', '2023-03-29 00:59:53', '2024-03-25 20:18:34'),
(20, 'rachmad', 'rbudianto87@gmail.com', '2023-03-29 19:01:15', '$2y$10$eucuCUNE1cu4Gg7qPMLX1eokM59p2bdeRxiWdSPtKasYSbKqm6n5W', 'guPXJ4QU4an7D8dNejfS5SU7U8ksQq2Mj5ardsmi4vi4pouyHDaPVcs45TjT', '2023-03-29 19:01:15', '2024-01-22 19:02:03'),
(25, 'mozza nih', 'mozza10ribu@gmail.com', '2023-04-28 23:18:01', '$2y$10$GibbKDo.EcOp6SQYUhlbWui4tftyK.ImvA.E/DODlDEy.viBMzQAW', NULL, '2023-04-28 23:17:44', '2023-04-28 23:18:01'),
(26, 'rachmad', 'rachmad.16421044@student.ubl.ac.id', '2023-05-11 22:21:23', '$2y$10$OjUwhTQtbLUxcUpZAuKQe.Vk.PWZN89LgAGs0AxpBZeDNfCSGNW1e', 'nOmJtNx1GbGNUdpLBpxEQo3yJWvCyWNkdrhjTQu11HPEPGxQjOEofXafrWda', '2023-05-11 22:20:14', '2023-05-16 22:40:44'),
(27, 'Dewi', 'dewianggraeni.da63@gmail.com', NULL, '$2y$10$JGWMEdxZKTgLxVhQZEFSheqQz5gUeEaD7.DKC768TA3aAp4a4QDGG', NULL, '2023-05-11 22:23:58', '2023-05-11 22:23:58'),
(28, 'rachmad budianto', 'bankwawayorbit10@gmail.com', NULL, '$2y$10$vwsFPB/6wuy2mZY3lu2iW.JgEBtW7fTfw31AtdDJTlvYdakhzINoy', NULL, '2023-05-11 22:25:07', '2023-05-11 22:25:07'),
(29, 'Juniaji Suko Pracoyo', 'juniajispracoyo@gmail.com', '2023-05-11 23:29:49', '$2y$10$DSbON9vj0WC1KWOVjr7vaObsZCnKfQjaamMVnzEuQ4K.SBKWpbJS.', NULL, '2023-05-11 23:29:25', '2023-05-11 23:29:49'),
(30, 'adminxps', 'budaklzcrew@gmail.com', NULL, '$2y$10$fHQytz0Iw09ofN2NGNbRXuBE1Jo6P0u1wav9mKdVPNzz5YHBd10Yy', NULL, '2024-11-17 22:19:11', '2024-11-17 22:19:11'),
(31, 'adminxp', 'adminxp@gmail.com', NULL, '$2y$10$aIUh2WOoBrbGZNc1pJ9Pe.9kFg0B/U1fQa7bYkCgtaRhe/ZXl0ZLa', NULL, '2025-09-14 21:52:26', '2025-09-14 21:52:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wbs`
--

CREATE TABLE `wbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kriteria` text DEFAULT NULL,
  `nama_pelapor` varchar(255) DEFAULT NULL,
  `jabatan_pelapor` varchar(255) DEFAULT NULL,
  `waktu_kejadian` datetime DEFAULT NULL,
  `kronologi_kejadian` text DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `wbs`
--

INSERT INTO `wbs` (`id`, `ktp`, `no_hp`, `email`, `kriteria`, `nama_pelapor`, `jabatan_pelapor`, `waktu_kejadian`, `kronologi_kejadian`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, 'asxasx', 'asxasx', 'asxasx@sdsd', 'Penipuan, Kecurangan, asxasx', 'asxasx', 'asxasx', '2021-12-12 00:00:00', 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem', 'wbs/files/UieZ7EaG4etLcy5l8Aw9rFzScrcJqpuV8OYG3kxP.jpg', '2025-07-10 07:32:21', '2025-07-10 07:32:21'),
(2, '1871124102840008', '081379293173', 'venthykn@gmail.com', 'Suap/gratifikasi, ', 'Venthy Kartika Nurrahmi', 'Kasubbag kepatuhan', '2025-07-10 00:00:00', 'Uji coba kirim informasi fraud (pengkinian kanal WBS)', 'wbs/files/QypbqOkL847kTaWNzS2iwpTrzXMR9yomeUpayv2N.pdf', '2025-07-11 08:54:38', '2025-07-11 08:54:38'),
(3, '1871124102840008', '081379293173', 'venthykn@gmail.com', 'Kesalahan Operasional, ', 'Venthy Kartika nurrahmi', '-', '2025-07-01 00:00:00', 'Uji coba barcode wbs via hap', 'wbs/files/nKpkVZA0rOaLsfFThdvDPdlVHWzCSAdxI9Z9ChXh.jpg', '2025-07-15 09:53:46', '2025-07-15 09:53:46'),
(4, '1871124102840008', '081379293173', 'venthykn@gmail.com', 'Pelanggaran, ', 'Venthy', 'Kasubbag kepatuhan', '2025-07-15 00:00:00', 'uji coba Kanal WBS via website bank waway', 'wbs/files/t2tnoyQIvBU345npNPN7uQ1oH2BEBgMPNFdEJgQd.pdf', '2025-07-16 01:55:28', '2025-07-16 01:55:28'),
(5, '198901292012101001', '08117389998', 'yudhaprovoke@gmail.com', 'Ingin berkomunikasi dengan manajeman Bank Waway', 'Yudha Pradana', 'Auditor', '2025-10-07 00:00:00', 'Apakah saya bisa berkomunikasi dedngan manajemen Bank Waway?', 'wbs/files/IcLhUHigUYIaoYTH1U1u6cRGcYVxRy0MbytEHo1y.png', '2025-10-07 02:41:03', '2025-10-07 02:41:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buka_deposito`
--
ALTER TABLE `buka_deposito`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `form_kredit`
--
ALTER TABLE `form_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kab_kota`
--
ALTER TABLE `kab_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karirs`
--
ALTER TABLE `karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode_pos`
--
ALTER TABLE `kode_pos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kredit_pegawai`
--
ALTER TABLE `kredit_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelayanan_konsumens`
--
ALTER TABLE `pelayanan_konsumens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaranrekening`
--
ALTER TABLE `pendaftaranrekening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `publikasis`
--
ALTER TABLE `publikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `tata_kelolas`
--
ALTER TABLE `tata_kelolas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wbs`
--
ALTER TABLE `wbs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buka_deposito`
--
ALTER TABLE `buka_deposito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `cover`
--
ALTER TABLE `cover`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `form_kredit`
--
ALTER TABLE `form_kredit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `kab_kota`
--
ALTER TABLE `kab_kota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT untuk tabel `karirs`
--
ALTER TABLE `karirs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `kode_pos`
--
ALTER TABLE `kode_pos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `kredit_pegawai`
--
ALTER TABLE `kredit_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1390;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pelayanan_konsumens`
--
ALTER TABLE `pelayanan_konsumens`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pendaftaranrekening`
--
ALTER TABLE `pendaftaranrekening`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `publikasis`
--
ALTER TABLE `publikasis`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tata_kelolas`
--
ALTER TABLE `tata_kelolas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `wbs`
--
ALTER TABLE `wbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
