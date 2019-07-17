-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2019 at 09:57 AM
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
-- Table structure for table `alur_pendaftaran`
--

CREATE TABLE `alur_pendaftaran` (
  `id_alur_pendaftaran` int(11) NOT NULL,
  `id_jalur_pendaftaran` int(11) NOT NULL,
  `nama_alur_pendaftaran` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_mulai_alur_pendaftaran` date NOT NULL,
  `tgl_selesai_alur_pendaftaran` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alur_pendaftaran`
--

INSERT INTO `alur_pendaftaran` (`id_alur_pendaftaran`, `id_jalur_pendaftaran`, `nama_alur_pendaftaran`, `tgl_mulai_alur_pendaftaran`, `tgl_selesai_alur_pendaftaran`) VALUES
(1, 1, 'Periode Pendaftaran', '2019-07-12', '2019-08-12'),
(2, 1, 'Verifikasi Berkas', '2019-07-20', '2019-08-15'),
(3, 2, 'Periode Pendaftaran', '2019-08-12', '2019-08-20'),
(4, 2, 'Tes Akademik', '2019-08-21', NULL),
(5, 2, 'Tes Psikologi', '2019-08-23', NULL),
(6, 2, 'Tes Kesehatan', '2019-08-25', NULL),
(7, 3, 'Periode Pendaftaran', '2019-08-20', '2019-08-30'),
(8, 3, 'Tes Kesehatan', '2019-08-31', NULL);

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
-- Table structure for table `jalur_jenjang`
--

CREATE TABLE `jalur_jenjang` (
  `id_jalur_jenjang` int(11) NOT NULL,
  `id_jenjang_pendidikan` int(11) NOT NULL,
  `id_jalur_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jalur_jenjang`
--

INSERT INTO `jalur_jenjang` (`id_jalur_jenjang`, `id_jenjang_pendidikan`, `id_jalur_pendaftaran`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 2, 2),
(5, 3, 2),
(6, 4, 2),
(7, 5, 2),
(8, 6, 2),
(9, 5, 3),
(10, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jalur_pendaftaran`
--

CREATE TABLE `jalur_pendaftaran` (
  `id_jalur_pendaftaran` int(11) NOT NULL,
  `nama_jalur_pendaftaran` text COLLATE utf8_unicode_ci NOT NULL,
  `keterangan_jalur_pendaftaran` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `persyaratan_jalur_pendaftaran` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `tambahan_jalur_pendaftaran` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `biaya_pendaftaran_jalur_pendaftaran` int(11) NOT NULL,
  `biaya_pendidikan_jalur_pendaftaran` int(11) NOT NULL,
  `biaya_pembangunan_jalur_pendaftaran` int(11) NOT NULL,
  `status_jalur_pendaftaran` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jalur_pendaftaran`
--

INSERT INTO `jalur_pendaftaran` (`id_jalur_pendaftaran`, `nama_jalur_pendaftaran`, `keterangan_jalur_pendaftaran`, `persyaratan_jalur_pendaftaran`, `tambahan_jalur_pendaftaran`, `biaya_pendaftaran_jalur_pendaftaran`, `biaya_pendidikan_jalur_pendaftaran`, `biaya_pembangunan_jalur_pendaftaran`, `status_jalur_pendaftaran`) VALUES
(1, 'Prestasi', 'Jalur Prestasi merupakan jalur tanpa tes dengan penilian dari rapor pada jenjang pendidikan terakhir sebagai penilaian.', '{\r\n\"syarat\": [\r\n\"Lulusan dua tahun terakhir (2018 - 2019).\",\r\n\"Rapor Semester terakhir dengan nilai rata-rata 75 untuk mata pelajaran Bahasa Indonesia, Bahasa Inggris, Matematika , dan IPA.\",\r\n\"Surat rekomendasi asal sekolah.\",\r\n\"Tidak pernah tinggal kelas pada jenjang pendidikan terakhir. Dibuktikan dengan surat keterangan dari sekolah.\"\r\n]\r\n}', NULL, 100000, 650000, 5600000, 1),
(2, 'Reguler', 'Jalur Reguler merupakan jalur dengan tes untuk menguji calon siswa dalam bidang akademik, psikologi dan kesehatan.', '{ \"syarat\": [\"Lulusan dua tahun terakhir (2018 - 2019)* atau sudah mencukupi umur**.\", \"Rapor Semester terakhir dengan nilai rata-rata 50 untuk mata pelajaran Bahasa Indonesia, Bahasa Inggris, Matematika , dan IPA.*\", \"Surat keterangan lulus sekolah*.\", \"Tidak pernah tinggal kelas pada jenjang pendidikan terakhir. Dibuktikan dengan surat keterangan dari sekolah*.\"] }', '{ \"tambahan\": [\"* Khusus Pendaftar SMP, SMA dan SMK\", \"** Khusus Pendaftar TK dan SD\"] }', 150000, 650000, 5600000, 1),
(3, 'Non-Reguler', 'Jalur Non-Reguler merupakan jalur hanya dengan tes kesehatan.', NULL, NULL, 200000, 650000, 5600000, 1);

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
  `status_pengumuman` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `keterangan_pengumuman`, `file_pengumuman`, `status_pengumuman`) VALUES
(1, 'Beasiswa Ozai di Telkom Schools!', 'Beasiswa penuh Ozai buat kamu yang mendaftar di Telkom Schools.', 'beasiswa-ozai.png', 1),
(2, 'Peresmian gedung serbaguna SMP!', 'Gedung Serbaguna SMP selesai dibangun dan segera diresmikan.', 'peresmian-gedung.png', 1),
(3, 'Pendaftaran SMA telah dibuka!', 'Daftarkan diri anda menjadi bagian dari SMA Telkom angkatan 2019.', 'pendaftaran-SMA.png', 1);

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
-- Table structure for table `petunjuk_pendaftaran`
--

CREATE TABLE `petunjuk_pendaftaran` (
  `id_petunjuk_pendaftaran` int(11) NOT NULL,
  `foto_petunjuk_pendaftaran` text COLLATE utf8_unicode_ci NOT NULL,
  `step_petunjuk_pendaftaran` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `petunjuk_pendaftaran`
--

INSERT INTO `petunjuk_pendaftaran` (`id_petunjuk_pendaftaran`, `foto_petunjuk_pendaftaran`, `step_petunjuk_pendaftaran`) VALUES
(1, 'registration-track.jpeg', '{\r\n\"step\": [\r\n{\r\n\"judul\": \"Buka i-PPDB\",\r\n\"isi\": \"Kunjungi <a class=\'text-danger font-weight-bold text-decoration-none\'>ppdb.telkom.sch.id</a>\"\r\n},\r\n{\r\n\"judul\": \"Pilih Sekolah\",\r\n\"isi\": \"Pilih Sekolah yang akan didaftari.\"\r\n},\r\n{\r\n\"judul\": \"Isi Data Diri\",\r\n\"isi\": \"Pastikan sesuai dengan data pemerintah.\"\r\n},\r\n{\r\n\"judul\": \"Aktivasi Akun\",\r\n\"isi\": \"Beli token pendaftaran yang disediakan.\"\r\n},\r\n{\r\n\"judul\": \"Lengkapi Berkas\",\r\n\"isi\": \"Isi data dan berkas secara lengkap.\"\r\n},\r\n{\r\n\"judul\": \"Ikuti Ujian\",\r\n\"isi\": \"Ikuti tahapan pendaftaran sesuai jalur.\"\r\n},\r\n{\r\n\"judul\": \"Tunggu Pengumuman\",\r\n\"isi\": \"Pantau informasi kelulusan di i-PPDB.\"\r\n},\r\n{\r\n\"judul\": \"Daftar Ulang\",\r\n\"isi\": \"Lunasi seluruh biaya pendidikan.\"\r\n},\r\n{\r\n\"judul\": \"Selamat!\",\r\n\"isi\": \"Anda resmi menjadi peserta didik kami.\"\r\n}\r\n]\r\n}');

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
-- Indexes for table `alur_pendaftaran`
--
ALTER TABLE `alur_pendaftaran`
  ADD PRIMARY KEY (`id_alur_pendaftaran`),
  ADD KEY `id_jalur_pendaftaran` (`id_jalur_pendaftaran`);

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
-- Indexes for table `jalur_jenjang`
--
ALTER TABLE `jalur_jenjang`
  ADD PRIMARY KEY (`id_jalur_jenjang`),
  ADD KEY `id_jalur_pendaftaran` (`id_jalur_pendaftaran`),
  ADD KEY `id_jenjang_pendidikan` (`id_jenjang_pendidikan`);

--
-- Indexes for table `jalur_pendaftaran`
--
ALTER TABLE `jalur_pendaftaran`
  ADD PRIMARY KEY (`id_jalur_pendaftaran`);

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
-- Indexes for table `petunjuk_pendaftaran`
--
ALTER TABLE `petunjuk_pendaftaran`
  ADD PRIMARY KEY (`id_petunjuk_pendaftaran`);

--
-- Indexes for table `yayasan`
--
ALTER TABLE `yayasan`
  ADD PRIMARY KEY (`id_yayasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alur_pendaftaran`
--
ALTER TABLE `alur_pendaftaran`
  MODIFY `id_alur_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `jalur_jenjang`
--
ALTER TABLE `jalur_jenjang`
  MODIFY `id_jalur_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jalur_pendaftaran`
--
ALTER TABLE `jalur_pendaftaran`
  MODIFY `id_jalur_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `petunjuk_pendaftaran`
--
ALTER TABLE `petunjuk_pendaftaran`
  MODIFY `id_petunjuk_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yayasan`
--
ALTER TABLE `yayasan`
  MODIFY `id_yayasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alur_pendaftaran`
--
ALTER TABLE `alur_pendaftaran`
  ADD CONSTRAINT `alur_pendaftaran_ibfk_1` FOREIGN KEY (`id_jalur_pendaftaran`) REFERENCES `jalur_pendaftaran` (`id_jalur_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jalur_jenjang`
--
ALTER TABLE `jalur_jenjang`
  ADD CONSTRAINT `jalur_jenjang_ibfk_1` FOREIGN KEY (`id_jalur_pendaftaran`) REFERENCES `jalur_pendaftaran` (`id_jalur_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jalur_jenjang_ibfk_2` FOREIGN KEY (`id_jenjang_pendidikan`) REFERENCES `jenjang_pendidikan` (`id_jenjang_pendidikan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
