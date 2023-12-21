-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2023 at 05:35 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u461470083_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `cover_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `id_pengarang`, `id_kategori`, `id_penerbit`, `judul`, `stok`, `cover_buku`) VALUES
(3, 1, 1, 1, 'Edensor', 10, 'buku/1702659524_Edensor_sampul.jpg'),
(12, 6, 2, 5, 'Atomic Habits', 0, 'buku/1702803666_content-6342e1b508a8b54d6a5884a3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_pengembalian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id`, `id_peminjaman`, `id_anggota`, `id_petugas`, `id_buku`, `id_pengembalian`) VALUES
(1, 1, 3, 1, 3, 1),
(3, 3, 3, 2, 3, 2),
(6, 6, 8, 2, 3, 5),
(7, 7, 3, 2, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `warna`) VALUES
(1, 'Novel', '#215acc'),
(2, 'Pendidikan', '#069369'),
(3, 'Koran', '#233333'),
(4, 'Kamus', '#9bc110'),
(5, 'Komik', '#233333');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(5, '2016_06_01_000004_create_oauth_clients_table', 2),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(7, '2023_12_10_061223_add_api_token_to_petugas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('00ab77f15959881f2e82064008868c961788b3ec826dc99053b6b4fc1b8b01085141b42ede5579f1', 2, 5, 'Petugas Token', '[]', 0, '2023-12-21 04:52:13', '2023-12-21 04:52:13', '2024-12-21 04:52:13'),
('16ac2b83b5cde771e872ace21f66240e52fb013622a6c691183e7170ae8981ff011c687b6f66ded5', 1, 3, 'Petugas Token', '[]', 0, '2023-12-11 13:12:35', '2023-12-11 13:12:35', '2024-12-11 20:12:35'),
('177017826f9f6b93104bf5c737287483ca54c64bfda44534684ff5d9643048a7480d61b5c9387dd7', 2, 5, 'Petugas Token', '[]', 0, '2023-12-17 00:47:00', '2023-12-17 00:47:00', '2024-12-17 07:47:00'),
('1d8114d84acff802fc2e21bcdd9880273e9c08cf7e72bea2a6fa1d667d125fe1dc15badb38747322', 2, 3, 'Petugas Token', '[]', 0, '2023-12-17 07:37:16', '2023-12-17 07:37:16', '2024-12-17 14:37:16'),
('24113b79ba45f4a270db0aa6bf927ef5db2157ec708b067d94804422cbf01f15540ef9c580c8c655', 3, 3, 'Authentication Token', '[]', 0, '2023-12-12 15:03:58', '2023-12-12 15:03:58', '2024-12-12 22:03:58'),
('335117a07f381bba96baa6c9bd55bf6be3cd84b30084afdb055ce1e1989f0d4529e38c7cfe117262', 1, 3, 'Authentication Token', '[]', 0, '2023-12-04 21:42:49', '2023-12-04 21:42:49', '2024-12-05 04:42:49'),
('354e091cf6c62ac9ad082041482335636fb824b8f66e121867bc1509913d56969bab04b6bf9d0807', 2, 5, 'Petugas Token', '[]', 0, '2023-12-21 05:24:34', '2023-12-21 05:24:34', '2024-12-21 05:24:34'),
('53a377b89d71cc54b9180fbb3d6fd15a2d43e13040295a91c3fe05cae6261ea3f24b471737129ded', 3, 3, 'Authentication Token', '[]', 0, '2023-12-09 23:30:40', '2023-12-09 23:30:40', '2024-12-10 06:30:40'),
('53dbfb9c64471c7bee33635d07540b662a0c2de62d865dc9832228cb7c05aae2af8142a1e94c0dad', 2, 5, 'Petugas Token', '[]', 0, '2023-12-21 04:57:20', '2023-12-21 04:57:20', '2024-12-21 04:57:20'),
('aa9cb526124205248409a1e5920c68d4ddbaadcffac8699151617b3785d94ba5428d41b9e9a32221', 1, 3, 'Authentication Token', '[]', 0, '2023-12-09 23:13:03', '2023-12-09 23:13:03', '2024-12-10 06:13:03'),
('d99440976d7d48ddf57906f6b7bdccb46d7759cb17a4faf798fea96acc80d1c7f3e95ed13a056405', 1, 3, 'Petugas Token', '[]', 0, '2023-12-09 23:28:30', '2023-12-09 23:28:30', '2024-12-10 06:28:30'),
('db18ea100f72bfb280a5180f2a5214ea3a61d1bb0e33c6f1c9e8965299ce0489fd6895906faf23b7', 1, 3, 'Authentication Token', '[]', 0, '2023-12-09 23:06:40', '2023-12-09 23:06:40', '2024-12-10 06:06:40'),
('de4c3711f982b83f0a06da856b2465e55c1b05e955c3d4cb313ff416ff5cc47ed84487e78f280a31', 3, 3, 'Authentication Token', '[]', 0, '2023-12-09 23:25:16', '2023-12-09 23:25:16', '2024-12-10 06:25:16'),
('e3760563cee454fb8a742cce4f8d27319187a12a75b1c891949d4ea5cd9204a50f508b3415bada11', 3, 3, 'Authentication Token', '[]', 0, '2023-12-06 19:13:26', '2023-12-06 19:13:26', '2024-12-07 02:13:26'),
('e4e32cd273a34e30e3d58b54058b398f0f69616a1893f6f32725ee7405ad089d97d3426f403a4d56', 2, 5, 'Petugas Token', '[]', 0, '2023-12-21 04:49:05', '2023-12-21 04:49:05', '2024-12-21 04:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'hQDAoURb83PGNNfjMCdm85KwekkZDzpxZlDG3xWI', NULL, 'http://localhost', 1, 0, 0, '2023-12-04 06:40:46', '2023-12-04 06:40:46'),
(2, NULL, 'Laravel Password Grant Client', 'ThwDIija2S9E4Y0yjsXZXYSX60gIOmA4qO6APEfc', 'users', 'http://localhost', 0, 1, 0, '2023-12-04 06:40:46', '2023-12-04 06:40:46'),
(3, NULL, 'Laravel Personal Access Client', 'apDsD2qQp7eB9EpIwLzxix2SBREFHnmUI3ZYnCyb', NULL, 'http://localhost', 1, 0, 0, '2023-12-04 21:35:45', '2023-12-04 21:35:45'),
(4, NULL, 'Laravel Password Grant Client', 'NuduKl7oJUM8Drzx5eQrnjw3dIU7Rlm4qia5vIph', 'users', 'http://localhost', 0, 1, 0, '2023-12-04 21:35:45', '2023-12-04 21:35:45'),
(5, NULL, 'Libraria Personal Access Client', 'XMYjNUnzplHEU1Zm4wvTLifrTIJTneOGvV16hWTa', NULL, 'http://localhost', 1, 0, 0, '2023-12-17 00:45:04', '2023-12-17 00:45:04'),
(6, NULL, 'Libraria Password Grant Client', 'B8D6LGz0V6WpALvfmDJNuzVGMGnpSTrdBHzHFgGD', 'users', 'http://localhost', 0, 1, 0, '2023-12-17 00:45:04', '2023-12-17 00:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-04 06:40:46', '2023-12-04 06:40:46'),
(2, 3, '2023-12-04 21:35:45', '2023-12-04 21:35:45'),
(3, 5, '2023-12-17 00:45:04', '2023-12-17 00:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2023-12-14', '2023-12-17'),
(2, '2023-12-16', '2023-12-21'),
(3, '2023-12-16', '2023-12-14'),
(4, '2023-12-16', '2023-12-25'),
(5, '2023-12-16', '2023-12-16'),
(6, '2023-12-16', '2023-12-18'),
(7, '2023-12-14', '2023-12-20'),
(8, '2023-12-21', '2023-12-23'),
(9, '2023-12-21', '2023-12-25'),
(10, '2023-12-21', '2023-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `nama`) VALUES
(1, 'Gramedia'),
(2, 'Erlangga'),
(3, 'Deepublish'),
(4, 'Wiley'),
(5, 'Editura Trei SRL'),
(6, 'Test'),
(7, 'Atma'),
(8, 'AAAA');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id`, `nama`) VALUES
(1, 'Andrea Hirata'),
(2, 'Raditya Dika'),
(3, 'Tere Liye'),
(4, 'J. K. Rowling'),
(5, 'Perry Xiao'),
(6, 'James Clear'),
(7, 'John'),
(8, 'Vemas'),
(9, 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `id_petugas`, `tgl_pengembalian`, `denda`) VALUES
(1, 1, '2023-12-15', 15000),
(2, 2, '2023-12-16', 20000),
(3, 2, '2023-12-16', 50000),
(4, 2, '2023-12-16', 0),
(5, 2, '2023-12-16', 20000),
(6, 2, '2023-12-21', 40000),
(7, 2, '2023-12-21', 10000),
(8, 2, '2023-12-21', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Authentication Token', 'a5e4a0948741cc5082c8f20684f93303ec622050012add20459bd81817d4f3de', '[\"*\"]', NULL, NULL, '2023-12-04 21:31:16', '2023-12-04 21:31:16'),
(2, 'App\\Models\\User', 1, 'Authentication Token', '2bd499668f799cb24b639dbb38a33412c1ed4de5c939ea00a66b4d694bc9661b', '[\"*\"]', NULL, NULL, '2023-12-04 21:33:27', '2023-12-04 21:33:27'),
(3, 'App\\Models\\User', 1, 'Authentication Token', '364450b04f31a733bccf2d9cdb40063005e07157c94b76abc527cb365d509530', '[\"*\"]', NULL, NULL, '2023-12-04 21:35:51', '2023-12-04 21:35:51'),
(4, 'App\\Models\\User', 1, 'Authentication Token', '1f3b089a5d9bd1358115dd97e9187d3b3c12af6ee1113fea7f50b13ba8d1b44c', '[\"*\"]', NULL, NULL, '2023-12-04 21:39:12', '2023-12-04 21:39:12'),
(5, 'App\\Models\\User', 3, 'Authentication Token', '61986433e2731170024e9f27be72eb29d3ad77d86b8bd0ff0eae2c399edae4bb', '[\"*\"]', NULL, NULL, '2023-12-13 09:55:15', '2023-12-13 09:55:15'),
(6, 'App\\Models\\Petugas', 2, 'Petugas Token', 'b18e121465fa462855974be8e09d9e911015b4a840dd1a7941c25bff1322ad57', '[\"*\"]', NULL, NULL, '2023-12-17 00:20:38', '2023-12-17 00:20:38'),
(7, 'App\\Models\\Petugas', 2, 'Petugas Token', 'afea72fb269f026d9631647c1369e9bca0012426111184c97b3b12c39bfcac8f', '[\"*\"]', NULL, NULL, '2023-12-17 00:23:36', '2023-12-17 00:23:36'),
(8, 'App\\Models\\Petugas', 2, 'Petugas Token', '31d64835bef9c1478e0c54a625f328731f472dbb0aafd340442f58858986b522', '[\"*\"]', NULL, NULL, '2023-12-17 00:25:02', '2023-12-17 00:25:02'),
(9, 'App\\Models\\Petugas', 2, 'Petugas Token', '8529c3b67b59f225a53a2127db8f0f4c057c3e3e9709d59ff875b740d091bbcc', '[\"*\"]', NULL, NULL, '2023-12-17 00:25:57', '2023-12-17 00:25:57'),
(10, 'App\\Models\\Petugas', 2, 'Petugas Token', '528257341454900cf26276c00dc3f0f8fc2bffe4c2ff07da1c9dd0e999013785', '[\"*\"]', NULL, NULL, '2023-12-17 00:26:33', '2023-12-17 00:26:33'),
(11, 'App\\Models\\Petugas', 2, 'Petugas Token', '8a9385495099abdcdc481da26f622b61fcd87148ff265aae3c89cbe21da1d0cd', '[\"*\"]', NULL, NULL, '2023-12-17 00:30:50', '2023-12-17 00:30:50'),
(12, 'App\\Models\\Petugas', 2, 'Petugas Token', 'bb04efd26d9321637bee7ebfdff5ada3771b957ca4834c480335220a87663e1b', '[\"*\"]', NULL, NULL, '2023-12-17 00:34:25', '2023-12-17 00:34:25'),
(13, 'App\\Models\\Petugas', 2, 'Petugas Token', '5ff94e52e00ee12a9af4a6c28d9835e18c8300c0c0a34ff10c2ba3435a4588e4', '[\"*\"]', NULL, NULL, '2023-12-17 00:43:15', '2023-12-17 00:43:15'),
(14, 'App\\Models\\Petugas', 2, 'Petugas Token', '6b3a7bb30d0113dabae64f2b8f839d92bf8ce1a229c423d9e3d8fee01a82d183', '[\"*\"]', NULL, NULL, '2023-12-17 00:45:09', '2023-12-17 00:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `alamat`, `no_telp`, `foto`, `email`, `password`) VALUES
(1, 'Vemas', 'Jl. ABC', '08145672223', 'C:\\xampp\\tmp\\phpFF68.tmp', 'vemas@gmail.com', '$2y$12$HVlGQtOsgo4mYSWdSpsEn.DUKUQzKsmeRlR9ld9OU9xyUegvi6cqy'),
(2, 'Admin', 'Jl. ABC', '081354562673', 'profile/9nnOjancBNUOXMBHISuAZG66BjqGG78rrn7DWwrs.png', 'admin@libraria.com', '$2y$10$sqQGnLk1DtWcQpkwdfNiXeveL2Yc1uw3Gjc4BDSsWzWEPCVXRZ8qm'),
(3, 'HHHH', 'aaaaaa', '08122222222', 'profile/E9o71kAM5cQ5a1JKVDJdRW7tSrjN58sfyJxQtVua.jpg', 'adada@gmail.com', '$2y$10$IsPYctd72V5T5xu0FbK6wu//ASdzcmrIqnPbSxrQyAKIyHZCi6GaW'),
(4, 'BBBB', 'aaaaaa', '08122222222', 'profile/9wbyh9CI41J98TPnfuyoaJzInGIUYhrg1NJ7CYCe.jpg', 'adada@gmail.com', '$2y$10$m85VFBQqobswHlJ61PYftuiKDn2xnYh8RYqJGQPihyRHXh9vcpUve'),
(5, 'KKKKK', 'aaaaaa', '08122222222', 'profile/18zlzwgm7rYSPO7EbDSM8Dlfrvfv5xNifYTdnB2R.jpg', 'baaa@gmail.com', '$2y$10$SgkYYLRYJ3f3OOKQ5yqKjOGxEq5tVPT3Zg2XfjL6aFXfgP6s/7enO');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `rating` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `id_buku`, `id_anggota`, `komentar`, `rating`) VALUES
(4, 3, 8, '👍👍👍👍', 'Sangat Baik'),
(7, 3, 3, 'bagus bangett', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `status`, `metode`, `id_anggota`) VALUES
(4, 'Lunas', 'Debit/Credit Card', 3),
(5, 'Lunas', 'QRIS', 3),
(6, 'Lunas', 'Bank Transfer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify_key` varchar(255) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `no_telp`, `foto`, `email`, `password`, `verify_key`, `active`, `denda`) VALUES
(3, 'Vemas', 'Jl. ABC', '081313962003', 'profile/OnyE9xKhzqbr9ZOkM8UZxXGaqMZxmmSQLM3LJUC5.png', 'stefanusvemas@gmail.com', '$2y$10$3MA4xVn2.imo19OGfue7ruNMjOPWbcmq71.YbzB5sm3OxCIgGww9.', 'qqAGgIHXhEameYh9dmqBivsvinWRAbTclxuHxfxjN1ThufS3RGMiLIQ3RiH7nDrdYks6YbqTjfvSExfDNnPMnNuRTOh5VPNMes3E', 1, 10000),
(8, 'Johnnnnn', 'jl. aaaaaaaa', '081313982132', 'profile/OuTS0jOuxXGpPOPrRmxvHPJ6CFT3QCAlaMWGSSFZ.jpg', 'vemasstevanus@gmail.com', '$2y$10$drPIatRo6AuQf0e87q4esO8wELtmW3bKtAp4Uu6hL3fBCIEV6bP1S', 'foEmCpJ5Eb04aNC7KGVaD516Ozc4wqBuD3hsjlBbtuumkDunJqATIQBwkZrFvvjZA60UWATodmAy92FLbddnfuL2WdZaAsRqAjkg', 1, 20000),
(10, 'riel', 'riel', '087736709393', 'profile/OC2p2AnKSy3zWuZf1Gi3IHJ4JDJal1fZ7tXa8W1z.jpg', 'gabrielallbasy@gmail.com', '$2y$10$h7Gc6FpNo.4jnsQVTtvXluT1ITFX8OMDrBIRMikkdMMi3s1a.HTie', 'hxkhCNnq62y8zVeBUWVltfEJs7dQomKTnY9ZGg0K6FZDkffq7fUj2tI8QpGOQ5N5H6vMS9djdDphPpwDtgoVvXszl10n8vbkbCZS', NULL, NULL),
(11, 'William Darmawan', 'Jalan Nangka Utara', '08123456789', 'profile/IOg9tl02JEZOIGeIMKlCGHGD3NqupueE7NcqQqtJ.jpg', 'william.darmaw4n@gmail.com', '$2y$10$Drgr.4Ue5.XvlWp2Ecr4.Omb6P4WWxql9k/YsGb0AgiAmZcZKX5Ba', 'ED1EdMxrhQXAcJjMJ4rpboERlqGFxKPAXmbJXsaIA9tphDulZrx2bHDemvcXGtjK02LOsmHQlOOClRXEj1YN5YCoalmog8gV8brd', 1, NULL),
(12, 'William Darmawan', 'Jalan Nangka Utara', '08123456789', 'profile/IKjdTnjvnoIxewNhCfIClXpBDBzz8BCUholX1tpl.jpg', 'william.darmaw4n@gmail.com', '$2y$10$GRFlE4iO4CboJiSeQ1HmM.9wPDVv.xBH5QVKp2icsmdl15L8RRLLi', 'Kn0rYuKlfdFvJeQK4Y042zZHqNx6dLqRmeST7HWGAwzvHZRPPngWBiXa12Tp5eHJegLFTdmaSTwNj9pY29W0OCCtYGIgh2BuTawI', NULL, NULL),
(15, 'haloooo', 'aaaaa', '081313982132', 'profile/s61WZ89AwKKvWUc2cgwHInaP9f2MSOJZtwsLFI0g.jpg', 'kajil94742@apdiv.com', '$2y$10$rtVj67U//NFi7oo06DXs6eQAwNnT0gN4LZwM5YbyZ9faNEdzwPMNm', '4WdCiRAjeLTx601HiEYaeFS6SgajQkV1JnpCbcxRFgYNwgpYwVC65bx53kYyvYUtf0KLXWWG1mgy9mQ9MGXl54rEVtfqWLhLMl1S', 1, 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengarang-buku` (`id_pengarang`),
  ADD KEY `kategori-buku` (`id_kategori`),
  ADD KEY `penerbit-buku` (`id_penerbit`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman-detail` (`id_peminjaman`),
  ADD KEY `buku-detail` (`id_buku`),
  ADD KEY `pengembalian-detail` (`id_pengembalian`),
  ADD KEY `anggota-detail` (`id_anggota`),
  ADD KEY `petugas-detail` (`id_petugas`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petugas-pengembalian` (`id_petugas`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota-review` (`id_anggota`),
  ADD KEY `buku-review` (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota-transaksi` (`id_anggota`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `kategori-buku` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `penerbit-buku` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengarang-buku` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `anggota-detail` FOREIGN KEY (`id_anggota`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku-detail` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman-detail` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengembalian-detail` FOREIGN KEY (`id_pengembalian`) REFERENCES `pengembalian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `petugas-detail` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `petugas-pengembalian` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `anggota-review` FOREIGN KEY (`id_anggota`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku-review` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `anggota-transaksi` FOREIGN KEY (`id_anggota`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
