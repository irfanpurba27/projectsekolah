-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 04.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktas`
--

CREATE TABLE `aktas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aktas`
--

INSERT INTO `aktas` (`id`, `file`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'IMG_1033.JPG', '3', '2022-05-22 19:43:40', '2022-05-22 19:43:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ayahs`
--

CREATE TABLE `ayahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ayahs`
--

INSERT INTO `ayahs` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `nik`, `pendidikan`, `no_telepon`, `agama`, `penghasilan`, `pekerjaan`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'Jhons', 'asd', '3242-04-23', '123', 'SD', '1', 'Islam', 'Tidak berpenghasilan', 'PNS', '4', '2022-05-19 07:02:47', '2022-05-19 07:02:47'),
(3, 'ayah', 'lahir', '1211-03-12', '2343', 'SMA', '131231', 'Kristen', 'Lebih dari Rp3.000.000,00', 'Supir', '3', '2022-05-23 20:05:48', '2022-05-23 20:05:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatans`
--

CREATE TABLE `catatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatansekolahs`
--

CREATE TABLE `catatansekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catatansekolahs`
--

INSERT INTO `catatansekolahs` (`id`, `catatan`, `id_user`, `created_at`, `updated_at`) VALUES
(3, 'Berprestasi', '4', '2022-05-18 19:02:51', '2022-05-18 19:02:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibus`
--

CREATE TABLE `ibus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ibus`
--

INSERT INTO `ibus` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `nik`, `pendidikan`, `no_telepon`, `agama`, `penghasilan`, `pekerjaan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Ibu', 'asd', '0023-04-23', '1231', 'SMP', '134534', 'Kristen', 'Lebih dari Rp3.000.000,00', 'Supir', '3', '2022-05-18 21:22:21', '2022-05-18 21:22:21'),
(2, 'Nurmin', 'qsad', '1212-03-12', '1', 'SMP', '1', 'Kristen', 'Tidak berpenghasilan', 'Petani', '4', '2022-05-19 07:03:37', '2022-05-19 07:03:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kks`
--

CREATE TABLE `kks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kks`
--

INSERT INTO `kks` (`id`, `file`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'bn.png', '3', '2022-05-22 19:46:43', '2022-05-22 19:46:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_19_065851_create_permission_tables', 1),
(6, '2022_04_20_125811_create_siswas_table', 1),
(7, '2022_04_22_025606_create_ayahs_table', 1),
(8, '2022_04_25_012528_create_ibus_table', 1),
(9, '2022_04_26_132958_create_fotos_table', 1),
(10, '2022_04_27_010804_create_aktas_table', 1),
(11, '2022_04_27_011429_create_kks_table', 1),
(12, '2022_05_11_134630_create_permasalahans_table', 1),
(13, '2022_05_16_141120_create_catatans_table', 1),
(14, '2022_05_17_013057_create_pembinaans_table', 1),
(15, '2022_05_18_054513_create_permasalahan_sekolahs_table', 1),
(16, '2022_05_18_060839_create_pembinaansekolahs_table', 1),
(17, '2022_05_19_011555_create_catatansekolahs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembinaans`
--

CREATE TABLE `pembinaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembinaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_permasalahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembinaansekolahs`
--

CREATE TABLE `pembinaansekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembinaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_permasalahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembinaansekolahs`
--

INSERT INTO `pembinaansekolahs` (`id`, `pembinaan`, `id_user`, `id_permasalahan`, `created_at`, `updated_at`) VALUES
(1, 'jangan mecuri lagi yah', '4', '1', '2022-05-17 23:33:56', '2022-05-17 23:33:56'),
(2, 'berupa bimbingan dan teguran', '4', '1', '2022-05-22 20:27:47', '2022-05-22 20:27:47'),
(3, 'Bimbingan dan teguran', '4', '2', '2022-05-23 19:51:15', '2022-05-23 19:51:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permasalahans`
--

CREATE TABLE `permasalahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permasalahans`
--

INSERT INTO `permasalahans` (`id`, `nama_anak`, `masalah`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'gabriel', 'terlalu pintar', '9', '2022-05-24 05:11:28', '2022-05-24 05:12:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permasalahansekolahs`
--

CREATE TABLE `permasalahansekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masalah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permasalahansekolahs`
--

INSERT INTO `permasalahansekolahs` (`id`, `nama_anak`, `masalah`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'irfan', 'mencuri', '4', '2022-05-17 23:33:29', '2022-05-17 23:33:29'),
(2, 'irfan', 'merokok', '4', '2022-05-22 20:27:07', '2022-05-22 20:27:07'),
(3, 'Asep', 'berantam', '6', '2022-05-22 20:41:53', '2022-05-22 20:41:53'),
(4, 'Paijo', 'Lompat pager', '8', '2022-05-22 20:44:49', '2022-05-22 20:44:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-05-17 23:24:37', '2022-05-17 23:24:37'),
(2, 'user', 'web', '2022-05-17 23:24:37', '2022-05-17 23:24:37'),
(3, 'admin2', 'web', '2022-05-17 23:24:37', '2022-05-17 23:24:37');

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
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_badan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_saudara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_skhun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `email`, `kompetensi`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `no_telepon`, `agama`, `suku`, `anak_ke`, `jumlah_saudara`, `no_kps`, `asal_sekolah`, `no_telepon_sekolah`, `kota_sekolah`, `tahun_lulus`, `no_ijazah`, `no_skhun`, `nisn`, `no_kis`, `file`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'irfan', 'irfan@gmail.com', 'XII-RPL', '1', 'Medan', '0003-02-23', 'Laki-laki', '3', '2', 'adfcx', 'Asda', 'asd', 'Sumatera Utara', '1', '2324', 'Kristen', 'bstsk', '23', '23', '234', 'sgfd', '2432', 'asd', 'sd', '1', '1', '1', '1', 'IMG_1016.JPG', '4', '2022-05-17 23:27:07', '2022-05-17 23:27:07'),
(5, 'Paijo', 'paijo@gmail.com', 'XII-RPL', '1', 'asdasd', '0012-03-12', 'Perempuan', '1', '1', 'asda', 'asd', 'sadasd', 'Nanggroe Aceh Darussalam', '23', '1', 'Islam', 'asd', '1', '1', '1', 'asd', '1', 'asd', '0004-03-23', '1', '1', '1', '1', 'IMG_1027.JPG', '8', '2022-05-19 06:13:42', '2022-05-19 06:13:42'),
(6, 'Natalia', 'natalia@gmail.com', 'X-MM', '123243', 'semarang', '1221-03-12', 'Perempuan', '3', '3', 'sadasd', 'singkil', 'semarang', 'Sumatera Utara', '2', '2234', 'Kristen', 'jawa', '3', '2', '3', 'BN', '2243', 'semarng', '3123-12-13', '5', '4', '4', '4', 'IMG_1030.JPG', '5', '2022-05-22 20:26:30', '2022-05-22 20:26:30'),
(7, 'Tejo', 'tejo@gmail.com', 'X-MM', '24234', 'semarang', '4232-02-23', 'Perempuan', '2', '4', 'air genting', 'ngaliyan', 'semarang', 'Kepulauan Riau', '3', '4', 'Kristen', 'bajacin', '4', '3', '3', 'BN', '3', 'semarang', '2332-04-23', '2', '2', '3', '3', 'IMG_1030.JPG', '7', '2022-05-22 21:03:51', '2022-05-22 21:03:51'),
(8, 'Asep', 'asep@gmail.com', 'X-BKP', '1231', 'medan', '2342-04-23', 'Laki-laki', '2', '2', 'tanjung pinang', 'apes', 'tanjung balai', 'Lampung', '51', '123123', 'Katholik', 'blasteran', '5', '2', '2', 'BN', '52', 'semarang', '0012-03-12', '2', '3', '3', '3', 'IMG_1021.JPG', '6', '2022-05-22 21:06:24', '2022-05-22 21:06:24'),
(9, 'User Role', 'user@role.com', 'XII-MM', '23423', 'medan', '42423-03-22', 'Laki-laki', '521', '22', 'Air genting', 'Air batu', 'ASahan', 'Sumatera Utara', '2', '2234', 'Kristen', 'batak', '32', '2', '132', 'SMP', '23342', 'Asaha', '23422-04-23', '323', '2131', '2131', '234', 'IMG_1031.JPG', '3', '2022-05-23 05:38:14', '2022-05-23 05:38:14'),
(10, 'gabriel', 'gabriel@gmail.com', 'XII-RPL', '9392392', 'di amazon', '2022-05-01', 'Laki-laki', '200', '100', 'desa durian runtuh', 'kalimantan', 'jakarta', 'Daerah Istimewa Yogyakarta', '2932', '81787878', 'Konghucu', 'nias', '100', '100', '2929392', 'smp jadul', '00000000000000', 'papua', '2022-06-11', '989283', '2392832', '29329', '9348', 'udin.jpg', '9', '2022-05-24 05:10:17', '2022-05-24 05:10:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Role', 'admin@role.com', NULL, '$2y$10$KM7ioVYRJZn7HUgMrdqQ0eOy8pQnEpXUkxDlA.Iwn3M79DyLAqbOS', NULL, '2022-05-17 23:24:38', '2022-05-17 23:24:38'),
(2, 'Sekolah', 'sekolah@role.com', NULL, '$2y$10$FQiJCSBnpaCDYO8lX2YgrOH9lC5HrtQMLjrMkw9S.a2AZZt8XKSPS', 'jstPv1NkGpSrlLZPrlfdHUrtpwSFCSzYDM0Y51enbHdaj1Fs1hSk3QqUq3Ev', '2022-05-17 23:24:38', '2022-05-17 23:24:38'),
(3, 'User Role', 'user@role.com', NULL, '$2y$10$wZfqDv.4r0zUKcFUCtU39eWsv2O.CA1CL.pFrp2SDstIpmtpug6QG', NULL, '2022-05-17 23:24:38', '2022-05-17 23:24:38'),
(4, 'irfan', 'irfan@gmail.com', NULL, '$2y$10$exZh2dTMwpNAHABYUY5mRuJ7au6JhSFjtH1/p/bjkBbSEwexcZ4bS', NULL, '2022-05-17 23:25:59', '2022-05-17 23:25:59'),
(5, 'Natalia', 'natalia@gmail.com', NULL, '$2y$10$BsiTiBuHs6Y2TFgVpNciye3W5p0ZCd/YzWbVTWwY5HzaoRchosLM6', NULL, '2022-05-18 23:35:55', '2022-05-18 23:35:55'),
(6, 'Asep', 'asep@gmail.com', NULL, '$2y$10$uvWiBGKlat/mT9hN5xj7fOR1l18mMUmrrtVYr88hHEUdTWDlVdAB2', NULL, '2022-05-19 05:57:01', '2022-05-19 05:57:01'),
(7, 'Tejo', 'tejo@gmail.com', NULL, '$2y$10$rDugGrKxF6ESgdzu22yFLOtv78TJXRvM4OXDZ8.wopQIBiyEEu6zO', NULL, '2022-05-19 06:05:39', '2022-05-19 06:05:39'),
(8, 'Paijo', 'paijo@gmail.com', NULL, '$2y$10$KGN9ywgNHbiqkGuUb1zAXOsvwc55j.tRoRE9bii.Aps8URZ6cGLYu', NULL, '2022-05-19 06:08:32', '2022-05-19 06:08:32'),
(9, 'gabriel', 'gabriel@gmail.com', NULL, '$2y$10$4MXnEgdQAJ9vQqSZbmQjduG6WDRtMKVpAJ0cKEV6MVzKHwKrdWFty', NULL, '2022-05-24 05:04:58', '2022-05-24 05:04:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktas`
--
ALTER TABLE `aktas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ayahs`
--
ALTER TABLE `ayahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatans`
--
ALTER TABLE `catatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catatansekolahs`
--
ALTER TABLE `catatansekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ibus`
--
ALTER TABLE `ibus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kks`
--
ALTER TABLE `kks`
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
-- Indeks untuk tabel `pembinaans`
--
ALTER TABLE `pembinaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembinaansekolahs`
--
ALTER TABLE `pembinaansekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permasalahans`
--
ALTER TABLE `permasalahans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permasalahansekolahs`
--
ALTER TABLE `permasalahansekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktas`
--
ALTER TABLE `aktas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ayahs`
--
ALTER TABLE `ayahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `catatans`
--
ALTER TABLE `catatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `catatansekolahs`
--
ALTER TABLE `catatansekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ibus`
--
ALTER TABLE `ibus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kks`
--
ALTER TABLE `kks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pembinaans`
--
ALTER TABLE `pembinaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembinaansekolahs`
--
ALTER TABLE `pembinaansekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permasalahans`
--
ALTER TABLE `permasalahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permasalahansekolahs`
--
ALTER TABLE `permasalahansekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
