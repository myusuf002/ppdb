-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2019 at 04:10 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SI2nmLzIv6`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int(11) NOT NULL,
  `nama_beasiswa` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_deadline_beasiswa` date NOT NULL,
  `deskripsi_beasiswa` text COLLATE utf8_unicode_ci NOT NULL,
  `foto_beasiswa` text COLLATE utf8_unicode_ci NOT NULL,
  `persyaratan_beasiswa` json NOT NULL,
  `pengurangan_biaya_pendidikan_beasiswa` int(11) NOT NULL,
  `pengurangan_pembangunan_pendidikan_beasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `tgl_deadline_beasiswa`, `deskripsi_beasiswa`, `foto_beasiswa`, `persyaratan_beasiswa`, `pengurangan_biaya_pendidikan_beasiswa`, `pengurangan_pembangunan_pendidikan_beasiswa`) VALUES
(1, 'Beasiswa Tahfidz', '2019-07-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.', 'tahfidz.jpeg', '0', 0, 0),
(2, 'Beasiswa Siswa Berprestasi', '2019-07-15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.', 'prestasi.jpeg', '0', 0, 0),
(3, 'Beasiswa Inovasi', '2019-08-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.', 'inovasi.jpeg', '0', 0, 0),
(4, 'Beasiswa Youthmanual', '2019-07-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat.', 'tahfidz.jpeg', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan_faq` text COLLATE utf8_unicode_ci NOT NULL,
  `jawaban_faq` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan_faq`, `jawaban_faq`) VALUES
(1, 'Apakah ada jalur pendaftaran mandiri?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. '),
(2, 'Dimana pengumuman kelulusan dilihat?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. '),
(3, 'Bagaimana cara mendaftar beasiswa?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. '),
(4, 'Berapa kuota pendaftar yang diterima?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. '),
(5, 'Bagaimana cara pembayaran biaya pendaftaran?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. '),
(6, 'Kapan pendaftaran sekolah Dibuka?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` text COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi_fasilitas` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto_fasilitas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi_fasilitas`, `foto_fasilitas`) VALUES
(1, 'Aula', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ', 'aula.jpg'),
(2, 'Masjid', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ', 'masjid.jpg'),
(4, 'Lapangan Serba Guna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ', 'lapangan.jpg'),
(5, 'Gedung Olahraga Indoor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ', 'gor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pendidikan`
--

CREATE TABLE `jenjang_pendidikan` (
  `id_jenjang_pendidikan` int(11) NOT NULL,
  `nama_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `kode_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `akreditasi_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `persyaratan_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `kelengkapan_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `foto_jenjang_pendidikan` text COLLATE utf8_unicode_ci NOT NULL,
  `status_jenjang_pendidikan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`id_jenjang_pendidikan`, `nama_jenjang_pendidikan`, `kode_jenjang_pendidikan`, `akreditasi_jenjang_pendidikan`, `deskripsi_jenjang_pendidikan`, `persyaratan_jenjang_pendidikan`, `kelengkapan_jenjang_pendidikan`, `foto_jenjang_pendidikan`, `status_jenjang_pendidikan`) VALUES
(2, 'Sekolah Menengah Kejuruan', 'SMK', 'A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis. ', '{\"persyaratan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', '{\"kelengkapan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', 'smk.jpg', 1),
(3, 'Sekolah Menengah Atas', 'SMA', 'A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis. ', '{\"persyaratan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', '{\"kelengkapan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', 'sma.jpg', 1),
(4, 'Sekolah Menengah Pertama', 'SMP', 'B', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis. ', '{\"persyaratan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', '{\"kelengkapan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', 'smp.png', 1),
(5, 'Sekolah Dasar', 'SD', 'A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis. ', '{\"persyaratan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', '{\"kelengkapan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', 'sd.jpg', 1),
(6, 'Taman Kanak-Kanak', 'TK', 'A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis. ', '{\"persyaratan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', '{\"kelengkapan\": [\"Lorem ipsum dolor sit amet\", \"Consectetur adipiscing elit.\", \"Sed do eiusmod tempor incididunt ut labore.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', 'tk.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id_penghargaan` int(11) NOT NULL,
  `nama_penghargaan` text COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi_penghargaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto_penghargaan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id_penghargaan`, `nama_penghargaan`, `deskripsi_penghargaan`, `foto_penghargaan`) VALUES
(1, 'School of Excellence Award', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. ', 'public-charter.jpg'),
(2, 'Japan Standarization Schools', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. ', 'best-japan.jpg'),
(3, 'The Best School Awards', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. ', 'best-school.png'),
(4, 'School of Technology', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. ', 'computing.jpg'),
(5, 'Most Tolerance Schools 2019', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. ', 'black-male.jpg'),
(6, 'Best Public-Charter School 2019', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. ', 'public-charter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` text COLLATE utf8_unicode_ci NOT NULL,
  `keterangan_pengumuman` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_pengumuman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_pengumuman` text COLLATE utf8_unicode_ci NOT NULL,
  `status_pengumuman` enum('active','passive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `keterangan_pengumuman`, `file_pengumuman`, `status_pengumuman`) VALUES
(1, 'Beasiswa Ozai di Telkom Schools!', 'Beasiswa penuh Ozai buat kamu yang mendaftar di Telkom Schools.', 'beasiswa-ozai.png', 'active'),
(2, 'Peresmian gedung serbaguna SMP!', 'Gedung Serbaguna SMP selesai dibangun dan segera diresmikan.', 'peresmian-gedung.png', 'active'),
(3, 'Pendaftaran SMA telah dibuka!', 'Daftarkan diri anda menjadi bagian dari SMA Telkom angkatan 2019.', 'pendaftaran-SMA.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yayasan`
--

CREATE TABLE `yayasan` (
  `id_yayasan` int(11) NOT NULL,
  `nama_yayasan` text COLLATE utf8_unicode_ci,
  `logo_yayasan` text COLLATE utf8_unicode_ci,
  `sampul_yayasan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `profil_yayasan` text COLLATE utf8_unicode_ci,
  `visi_yayasan` text COLLATE utf8_unicode_ci,
  `misi_yayasan` text COLLATE utf8_unicode_ci,
  `nama_ketua_yayasan` text COLLATE utf8_unicode_ci,
  `profil_ketua_yayasan` text COLLATE utf8_unicode_ci,
  `foto_ketua_yayasan` text COLLATE utf8_unicode_ci,
  `alamat_yayasan` text COLLATE utf8_unicode_ci,
  `kontak_yayasan` text COLLATE utf8_unicode_ci,
  `media_sosial_yayasan` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yayasan`
--

INSERT INTO `yayasan` (`id_yayasan`, `nama_yayasan`, `logo_yayasan`, `sampul_yayasan`, `profil_yayasan`, `visi_yayasan`, `misi_yayasan`, `nama_ketua_yayasan`, `profil_ketua_yayasan`, `foto_ketua_yayasan`, `alamat_yayasan`, `kontak_yayasan`, `media_sosial_yayasan`) VALUES
(6, 'Telkom Schools', 'logo-foundation.png', 'logo-name-foundation.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Diam ut venenatis tellus in metus vulputate. Congue nisi vitae suscipit tellus mauris a diam. Pulvinar elementum integer enim neque volutpat ac. Duis convallis convallis tellus id interdum velit laoreet. Integer enim neque volutpat ac tincidunt vitae semper. Volutpat est velit egestas dui. Auctor elit sed vulputate mi sit amet mauris commodo quis. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ', '{\"misi\": [\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\", \"Elementum curabitur vitae nunc sed, Risus sed vulputate odio ut.\", \"Maecenas volutpat blandit aliquam etiam erat velit scelerisque.\"]}', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum curabitur vitae nunc sed. Risus sed vulputate odio ut. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. ', 'head-foundation.jpg', 'Jl. A.P. Pettarani No. 4 Kompleks Pendidikan Telkom, Makassar, Sulawesi Selatan, Indonesia', '{\"hp\": {\"data\": \"0822 9011 9212\", \"icon\": \"fas fa-phone fa-flip-horizontal\"}, \"email\": {\"data\": \"info@telkom.sch.id\", \"icon\": \"fas fa-envelope\"}}', '{\"twitter\": {\"icon\": \"fab fa-twitter\", \"link\": \"https://twitter.com/\", \"name\": \"@telkomschools\"}, \"youtube\": {\"icon\": \"fab fa-youtube\", \"link\": \"https://www.youtube.com/\", \"name\": \"Telkom Schools\"}, \"facebook\": {\"icon\": \"fab fa-facebook-square\", \"link\": \"https://www.facebook.com/\", \"name\": \"Telkom Schools\"}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  ADD PRIMARY KEY (`id_jenjang_pendidikan`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `yayasan`
--
ALTER TABLE `yayasan`
  ADD PRIMARY KEY (`id_yayasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  MODIFY `id_jenjang_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id_penghargaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yayasan`
--
ALTER TABLE `yayasan`
  MODIFY `id_yayasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
