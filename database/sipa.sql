-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 17.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(15) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat_fakultas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama`, `alamat_fakultas`) VALUES
('FASTE', 'SADASD', 'ASD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `kode_surat` int(11) NOT NULL,
  `jenis_surat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat_mhs` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `id_prodi` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat_mhs`, `semester`, `id_prodi`, `created_at`, `updated_at`) VALUES
(100200, 'Alika', 'Pekan', '2023-06-12', 'Pekan', 4, 'MTK', '2023-06-08 07:47:25', '2023-06-08 07:47:25'),
(121121, 'Alika', 'Pekanbaruu', '2023-06-21', 'Pekan', 2, '', '2023-06-08 02:54:15', '2023-06-08 08:58:25'),
(121345, 'Ardian', 'assdas', '2023-06-15', 'asdas', 4, 'SIF', '2023-06-07 20:20:34', '2023-06-07 20:20:34'),
(200300, 'ARDIAN', 'AFADF', '2023-06-14', 'ASD', 2, 'MTK', '2023-06-08 07:51:05', '2023-06-08 07:51:05'),
(12150311729, 'Ahmad', 'Batam', '2023-06-20', 'Askep', 3, 'TIN', '2023-06-08 02:47:29', '2023-06-08 02:55:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orangtua`
--

CREATE TABLE `orangtua` (
  `id_orangtua` varchar(25) NOT NULL,
  `nama_orangtua` varchar(255) DEFAULT NULL,
  `pekerjaan_orangtua` varchar(255) DEFAULT NULL,
  `alamat_orangtua` varchar(255) DEFAULT NULL,
  `nim` bigint(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orangtua`
--

INSERT INTO `orangtua` (`id_orangtua`, `nama_orangtua`, `pekerjaan_orangtua`, `alamat_orangtua`, `nim`, `created_at`, `updated_at`) VALUES
('3569df2711729', 'Hermanto', 'Ayah', 'Batam', 12150311729, '2023-06-02 03:24:22', '2023-06-02 03:24:22'),
('2f5e84a412', 'asdasd', 'asdasd', 'asdasd', 21312312, '2023-06-05 16:42:45', '2023-06-05 16:42:45'),
('90299edf', 'sdasd', 'asdasd', 'asdasd', 121345, '2023-06-07 20:20:34', '2023-06-07 20:20:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_pengajuan` varchar(25) NOT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `nim` bigint(11) DEFAULT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `tanggal_ttd` date DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id_pengajuan`, `tanggal_pengajuan`, `nim`, `kode_surat`, `tanggal_ttd`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
('SKAK199d7f83', '2023-06-02', 12150311729, 'SKAK', '2023-06-08', NULL, 'Ditandatangani', '2023-06-02 03:18:21', '2023-06-08 14:56:15'),
('SKAK20e404ca', '2023-06-02', 12350311729, 'SKAK', '0000-00-00', NULL, 'Pengajuan', '2023-06-02 03:19:56', '2023-06-08 07:48:16'),
('SKAK2736c4de', '2023-06-05', 21312312, 'SKAK', '0000-00-00', NULL, 'Pengajuan', '2023-06-05 16:42:45', '2023-06-08 08:08:00'),
('SKAK291ea527', '2023-06-02', 12150311729, 'SKAK', '2023-06-08', NULL, 'Pengajuan', '2023-06-02 03:22:05', '2023-06-08 08:15:44'),
('SKAK314e16ef', '2023-06-02', 12150311729, 'SKAK', '0000-00-00', NULL, 'Pengajuan', '2023-06-02 03:24:22', '2023-06-08 08:13:28'),
('SKAK365994ff', '2023-06-02', 12150311729, 'SKAK', '0000-00-00', NULL, 'Pengajuan', '2023-06-02 03:25:10', '2023-06-08 08:13:43'),
('SKAK54614b32', '2023-06-07', 232, 'SKAK', '2023-06-08', NULL, 'Pengajuan', '2023-06-06 23:36:30', '2023-06-08 08:16:03'),
('SKAK593755bc', '2023-06-07', 3423, 'SKAK', '2023-06-08', NULL, 'Ditandatangani', '2023-06-06 23:37:23', '2023-06-08 08:17:31'),
('SKAK7170a5ad', '2023-06-07', 3432, 'SKAK', '2023-06-08', NULL, 'Ditandatangani', '2023-06-07 06:33:28', '2023-06-08 08:22:56'),
('SKAK8e4923ed', '2023-06-08', 121345, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-07 20:20:34', '2023-06-07 20:20:34'),
('SKAK9163c288', '2023-06-07', 23, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-07 03:17:20', '2023-06-07 03:17:20'),
('SKAK92e64cd5', '2023-06-07', 2314, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-07 07:50:35', '2023-06-07 07:50:35'),
('SKAK9a82a34d', '2023-06-07', 324, 'SKAK', '0000-00-00', NULL, 'Pengajuan', '2023-06-07 06:44:24', '2023-06-08 07:52:49'),
('SKAK9d962c15', '2023-06-08', 100200, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-08 07:47:25', '2023-06-08 07:47:25'),
('SKTBac439c60', '2023-06-08', 200300, 'SKTB', '2023-06-08', NULL, 'Ditandatangani', '2023-06-08 07:51:05', '2023-06-08 14:56:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_pimpinan` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `golongan_ruang` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` varchar(15) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat_prodi` varchar(255) DEFAULT NULL,
  `id_fakultas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama`, `alamat_prodi`, `id_fakultas`) VALUES
('3da', 'asd', 'asd', '0'),
('', '', '', '0'),
('asd', 'asdda', 'oke', '0'),
('asddf', 'asdf', 'dffd', ' FASTE'),
('MTK', 'Matematika', 'asd', '22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `nomor_surat` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `id_pengajuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`kode_surat`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id_pengajuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
