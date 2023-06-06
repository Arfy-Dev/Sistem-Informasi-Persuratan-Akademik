-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2023 pada 05.42
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
  `id_fakultas` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat_fakultas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id_prodi` varchar(3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat_mhs`, `semester`, `id_prodi`, `created_at`, `updated_at`) VALUES
(21312312, 'Ahmad Dhani', 'dads', '2023-06-14', 'asdasd', 4, 'MTK', '2023-06-05 16:42:45', '2023-06-05 16:42:45'),
(12150311729, 'Ahmad Dhani', 'Batam', '2023-06-21', 'Batam', 4, 'TIF', '2023-06-02 03:17:36', '2023-06-02 03:17:36'),
(12350311729, 'Ahmad Dhani', 'Batam', '2023-06-22', 'Batam', 3, 'TEL', '2023-06-02 03:19:56', '2023-06-02 03:19:56');

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
('2f5e84a412', 'asdasd', 'asdasd', 'asdasd', 21312312, '2023-06-05 16:42:45', '2023-06-05 16:42:45');

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
('SKAK199d7f83', '2023-06-02', 12150311729, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-02 03:18:21', '2023-06-02 03:18:21'),
('SKAK20e404ca', '2023-06-02', 12350311729, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-02 03:19:56', '2023-06-02 03:19:56'),
('SKAK2736c4de', '2023-06-05', 21312312, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-05 16:42:45', '2023-06-05 16:42:45'),
('SKAK291ea527', '2023-06-02', 12150311729, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-02 03:22:05', '2023-06-02 03:22:05'),
('SKAK314e16ef', '2023-06-02', 12150311729, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-02 03:24:22', '2023-06-02 03:24:22'),
('SKAK365994ff', '2023-06-02', 12150311729, 'SKAK', NULL, NULL, 'Pengajuan', '2023-06-02 03:25:10', '2023-06-02 03:25:10');

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
  `id_prodi` varchar(3) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat_prodi` varchar(255) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
