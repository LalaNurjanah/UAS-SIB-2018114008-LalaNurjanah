-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2021 pada 14.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasabsen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(20) NOT NULL,
  `waktu_absen` time NOT NULL,
  `mahasiswa_id` int(20) DEFAULT NULL,
  `matakuliah_id` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `waktu_absen`, `mahasiswa_id`, `matakuliah_id`, `keterangan`, `updated_at`, `created_at`) VALUES
(2018114008, '09:30:49', 2018114008, 'SI054022', 'Hadir', NULL, NULL),
(2018114009, '09:30:00', 2018114009, 'TIX052001', 'Hadir', '2021-02-15 07:48:21.000000', '2021-02-15 07:48:21.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(20) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `matakuliah_id` varchar(20) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `jadwal`, `matakuliah_id`, `updated_at`, `created_at`) VALUES
(2018114008, 'Jumat', 'SI054022', '2021-02-15 18:20:39.000000', '2021-02-15 18:20:39.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak_matakuliah`
--

CREATE TABLE `kontrak_matakuliah` (
  `mahasiswa_id` int(20) NOT NULL,
  `semester_id` int(20) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontrak_matakuliah`
--

INSERT INTO `kontrak_matakuliah` (`mahasiswa_id`, `semester_id`, `updated_at`, `created_at`) VALUES
(2018114008, 2018, '2021-02-15 19:05:53.000000', '2021-02-15 19:05:53.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mahasiswa`, `alamat`, `no_tlp`, `email`, `created_at`, `updated_at`) VALUES
(2018114003, 'Dewi Silvia H', 'cirebon', '08950564080', 'Dewisilvia@gmail.com', '2021-02-15 04:28:06.000000', '2021-02-15 04:28:06.000000'),
(2018114008, 'Lala Nurjanah', 'cirebon', '089124900178', 'lalanurjanah31@gmail.com', '2021-02-13 02:24:45.000000', '2021-02-13 02:24:45.000000'),
(2018114010, 'Selvi Feliyanti', 'cirebon', '087863119003', 'selvif@gmail.com', '2021-02-13 09:28:24.000000', '2021-02-13 09:28:24.000000'),
(2018114031, 'Ruli Herlina', 'cirebon', '089647200551', 'rulih@gmail.com', '2021-02-14 20:35:02.000000', '2021-02-14 20:35:02.000000'),
(2018114032, 'Dinda AF', 'cirebon', '083178006812', 'dindaaf@gmail.com', '2021-02-15 00:23:31.000000', '2021-02-15 00:23:31.000000'),
(2018114033, 'Dita Destriani', 'cirebon', '087725640016', 'ditades@gmail.com', '2021-02-15 00:24:21.000000', '2021-02-15 00:24:21.000000'),
(2018114034, 'Adriel Alfa G', 'cirebon', '085432806350', 'adrielag@gmail.com', '2021-02-15 00:25:06.000000', '2021-02-15 00:25:06.000000'),
(2018114035, 'Leny Nur Oktaviany', 'kuningan', '083165021178', 'lenyno@gmail.com', '2021-02-15 00:26:22.000000', '2021-02-15 00:26:22.000000'),
(2018114036, 'Cindy Sintya', 'cirebon', '082160822670', 'sindys@gmail.com', '2021-02-15 00:27:05.000000', '2021-02-15 00:27:05.000000'),
(2018114037, 'Laras Maudy Yunia', 'cirebon', '082186774422', 'larasmy@gmail.com', '2021-02-15 00:28:00.000000', '2021-02-15 00:28:00.000000'),
(2018114038, 'Dita Angraeni', 'cirebon', '089111166000', 'ditaang@gmail.com', '2021-02-15 00:28:52.000000', '2021-02-15 00:28:52.000000'),
(2018114039, 'Putri Endang Wijaya', 'cirebon', '0882600156', 'putrienwi@gmail.com', '2021-02-15 00:29:48.000000', '2021-02-15 00:29:48.000000'),
(2018114040, 'Diana Kusuma Dewi', 'cirebon', '085553319976', 'dianakd@gmail.com', '2021-02-15 00:30:31.000000', '2021-02-15 00:30:31.000000'),
(2018114041, 'Ashri Azizah Yolandita', 'Indramayu', '089278119006', 'aay12345@gmail.com', '2021-02-15 00:31:38.000000', '2021-02-15 00:31:38.000000'),
(2018114042, 'Fitria', 'cirebon', '087756401922', 'fitria@gmail.com', '2021-02-15 00:32:23.000000', '2021-02-15 00:32:23.000000'),
(2018114043, 'Erika Anjani', 'cirebon', '083333889991', 'erikaanjani@gmail.com', '2021-02-15 00:33:05.000000', '2021-02-15 00:33:05.000000'),
(2018114044, 'Hendra Wijaya', 'cirebon', '089267190712', 'hendrawjya@gmail.com', '2021-02-15 00:33:57.000000', '2021-02-15 00:33:57.000000'),
(2018114045, 'Nabila Narjis', 'cirebon', '087733267901', 'nabilanrs@gmail.com', '2021-02-15 00:34:42.000000', '2021-02-15 00:34:42.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama_matakuliah`, `sks`) VALUES
('DKVX052001', 'Fotografi', 2),
('SI052020', 'RPL', 2),
('SI052021', 'Jaringan Komputer', 3),
('SI054022', 'Pemograman Internet Lanjut', 4),
('SI054024', 'MKSI', 2),
('SIB053005', 'E-Goverment', 3),
('SIB053007', 'Audit SI', 3),
('TIX052001', 'Web Development', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id` int(20) NOT NULL,
  `semester` int(20) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id`, `semester`, `updated_at`, `created_at`) VALUES
(2018, 5, '2021-02-15 19:02:38.000000', '2021-02-15 19:02:38.000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontrak_matakuliah`
--
ALTER TABLE `kontrak_matakuliah`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018114010;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018114046;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
