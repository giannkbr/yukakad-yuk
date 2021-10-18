-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 06.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yukakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_demo`
--

CREATE TABLE `cms_demo` (
  `id_demo` int(11) NOT NULL,
  `heading1` text DEFAULT NULL,
  `subheading1` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cms_demo`
--

INSERT INTO `cms_demo` (`id_demo`, `heading1`, `subheading1`) VALUES
(1, 'Template Undangan nih', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat totam hic molestiae neque labore quisquam unde fuga odio, laboriosam dolorem necessitatibus molestias inventore recusandae velit tenetur dolores, maiores deserunt magni! Dolore fugit eligendi consectetur, cupiditate magni repellendus, nam eveniet ex magnam dolorum mollitia quos quaerat fugiat, ullam expedita voluptatem molestiae!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_fitur`
--

CREATE TABLE `cms_fitur` (
  `id_fitur` int(11) NOT NULL,
  `heading1` text NOT NULL,
  `subheading1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cms_fitur`
--

INSERT INTO `cms_fitur` (`id_fitur`, `heading1`, `subheading1`) VALUES
(1, 'Fitur apa saja yang didapat?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat totam hic molestiae neque labore quisquam unde fuga odio, laboriosam dolorem necessitatibus molestias inventore recusandae velit tenetur dolores, maiores deserunt magni! Dolore fugit eligendi consectetur, cupiditate magni repellendus, nam eveniet ex magnam dolorum mollitia quos quaerat fugiat, ullam expedita voluptatem molestiae!\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_footer`
--

CREATE TABLE `cms_footer` (
  `id_footer` int(11) NOT NULL,
  `heading1` text NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cms_footer`
--

INSERT INTO `cms_footer` (`id_footer`, `heading1`, `copyright`, `instagram`) VALUES
(1, 'Tetap terhubung', 'Copyright 2021 - Yukakad.com', 'instagram.com/normanardiann');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_hero`
--

CREATE TABLE `cms_hero` (
  `id_hero` int(11) NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cms_hero`
--

INSERT INTO `cms_hero` (`id_hero`, `heading`, `subheading`) VALUES
(1, 'Platform Undangan pernikahan onlinee', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque architecto sint, expedita, qui aperiam officia consequuntur nobis sapiente, numquam a error optio accusamus eaque laudantium iure iusto dignissimos possimus quis.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_kontak`
--

CREATE TABLE `cms_kontak` (
  `id_kontak` int(11) NOT NULL,
  `heading1` text NOT NULL,
  `subheading1` text NOT NULL,
  `whatsapp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cms_kontak`
--

INSERT INTO `cms_kontak` (`id_kontak`, `heading1`, `subheading1`, `whatsapp`) VALUES
(1, 'Hubungi kami', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat totam hic molestiae neque labore quisquam unde fuga odio, laboriosam dolorem necessitatibus molestias inventore recusandae velit tenetur dolores, maiores deserunt magni! Dolore fugit eligendi consectetur.', '08123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facebook_users`
--

CREATE TABLE `facebook_users` (
  `id` bigint(20) NOT NULL,
  `oauth_provider` varchar(64) NOT NULL,
  `oauth_uid` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur_undangan`
--

CREATE TABLE `fitur_undangan` (
  `id_fiturundangan` int(11) NOT NULL,
  `slug_undangan` varchar(50) NOT NULL,
  `buku_tamu` varchar(20) DEFAULT NULL,
  `subdomain` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fitur_undangan`
--

INSERT INTO `fitur_undangan` (`id_fiturundangan`, `slug_undangan`, `buku_tamu`, `subdomain`) VALUES
(1, 'bunga-bunga', 'Tersedia', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_reguler`
--

CREATE TABLE `form_reguler` (
  `id_formreguler` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mempelai_pria` varchar(50) NOT NULL,
  `mempelai_wanita` varchar(50) NOT NULL,
  `bapak_mempelaipria` varchar(50) NOT NULL,
  `ibu_mempelaipria` varchar(50) NOT NULL,
  `bapak_mempelaiwanita` varchar(50) NOT NULL,
  `ibu_mempelaiwanita` varchar(50) NOT NULL,
  `tanggal_akad` datetime NOT NULL,
  `tanggal_resepsi` datetime NOT NULL,
  `lokasi_acara` varchar(50) NOT NULL,
  `link_acara` varchar(50) NOT NULL,
  `lokasi_rumah` varchar(50) NOT NULL,
  `link_rumah` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `slug_undangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_reguler`
--

INSERT INTO `form_reguler` (`id_formreguler`, `email`, `mempelai_pria`, `mempelai_wanita`, `bapak_mempelaipria`, `ibu_mempelaipria`, `bapak_mempelaiwanita`, `ibu_mempelaiwanita`, `tanggal_akad`, `tanggal_resepsi`, `lokasi_acara`, `link_acara`, `lokasi_rumah`, `link_rumah`, `slug`, `slug_undangan`) VALUES
(1, 'normanardian24@gmail.com', 'wildan', 'wildaniyah', 'santoso', 'markonah', 'sentosa', 'markinah', '2021-10-11 16:57:47', '2021-10-11 16:57:56', 'jalan anuu', 'https://goo.gl/maps/DgcDHNXVqxm8Bowp6', 'jalan rumah', 'https://goo.gl/maps/DgcDHNXVqxm8Bowp6', 'wildanLOVEwildaniyah', 'bunga-bunga'),
(2, 'normanardian24@gmail.com', 'Norman', 'Fariyanti', 'Budi', 'Indah', 'Dimas', 'Ira', '2021-10-30 13:40:00', '2021-10-31 13:40:00', 'greenwich park,cluster luxmore ga2 no.3', 'https://goo.gl/maps/xdGRD4XhbkrweDfc7', 'greenwich park,cluster luxmore ga2 no.3', 'https://goo.gl/maps/xdGRD4XhbkrweDfc7', 'normanLOVEfariyanti', 'bunga-bunga'),
(3, 'normanardian24@gmail.com', 'Gian', 'Akbar', 'Budi', 'Indah', 'Dimas', 'Ira', '2021-10-30 13:40:00', '2021-10-31 13:40:00', 'greenwich park,cluster luxmore ga2 no.3', 'https://goo.gl/maps/xdGRD4XhbkrweDfc7', 'greenwich park,cluster luxmore ga2 no.3', 'https://goo.gl/maps/xdGRD4XhbkrweDfc7', 'gianLOVEakbar', 'bunga-bunga'),
(23, 'gigamegabyteindo@gmail.com', 'gunawan', 'gian', 'jarwo', 'suminah', 'budi', 'ira', '2021-10-21 16:17:00', '2021-10-30 16:17:00', 'jalan anu', 'https://goo.gl/maps/xdGRD4XhbkrweDfc7', 'jalan anu', 'https://goo.gl/maps/xdGRD4XhbkrweDfc7', 'gianLOVEgunawan', 'bunga-bunga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_formundangan`
--

CREATE TABLE `foto_formundangan` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug_form` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto_formundangan`
--

INSERT INTO `foto_formundangan` (`id_foto`, `foto`, `slug_form`) VALUES
(5, 'Screenshot_(1)_-_Copy71.png', 'gianLOVEgunawan'),
(6, 'Screenshot_(1)_-_Copy72.png', 'gianLOVEgunawan'),
(7, 'Screenshot_(1)_-_Copy73.png', 'gianLOVEgunawan'),
(8, 'Screenshot_(1)_-_Copy74.png', 'gianLOVEgunawan'),
(9, 'Screenshot_(1)_-_Copy75.png', 'gianLOVEgunawan'),
(10, 'Screenshot_(1)_-_Copy76.png', 'gianLOVEgunawan'),
(11, 'Screenshot_(1)_-_Copy77.png', 'gianLOVEgunawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangan`
--

CREATE TABLE `undangan` (
  `id_undangan` int(11) NOT NULL,
  `nama_undangan` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `undangan`
--

INSERT INTO `undangan` (`id_undangan`, `nama_undangan`, `image`, `paket`, `harga`, `slug`) VALUES
(1, 'bunga bunga', 'bunga.png', 'reguler', '20000', 'bunga-bunga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$WN/f7sj76CwH8dTofy0owesuQ9Z7973AXlg5eoE9Pb5QqCwI/XBMu', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1631090521, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', NULL, '$2y$10$vem1FFTQwlYx0Tfxcmwdk.DkaHrBKdsNwcQ/TfhY1bVQ3Bog/wqNe', 'norman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1630915233, 1634437109, 1, 'norman', 'ardian', '', '0856-9778-0467'),
(4, '::1', NULL, '$2y$10$Q9FdsPNjTUPPH/K388cG7elgMu4ogYdRW4bIi.llKpjJDstEn1.5.', 'gianakbar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1630917221, 1630917235, 1, 'gian', 'akbar', '', '0987654345678'),
(13, '::1', NULL, NULL, 'normanardian24@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1631267969, NULL, 1, 'Norman', 'Ardian', NULL, NULL),
(14, '::1', NULL, NULL, 'gigamegabyteindo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1633472017, NULL, 1, 'Giga Mega', 'Byteindo', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(5, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cms_demo`
--
ALTER TABLE `cms_demo`
  ADD PRIMARY KEY (`id_demo`);

--
-- Indeks untuk tabel `cms_fitur`
--
ALTER TABLE `cms_fitur`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indeks untuk tabel `cms_footer`
--
ALTER TABLE `cms_footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indeks untuk tabel `cms_hero`
--
ALTER TABLE `cms_hero`
  ADD PRIMARY KEY (`id_hero`);

--
-- Indeks untuk tabel `cms_kontak`
--
ALTER TABLE `cms_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `facebook_users`
--
ALTER TABLE `facebook_users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `fitur_undangan`
--
ALTER TABLE `fitur_undangan`
  ADD PRIMARY KEY (`id_fiturundangan`);

--
-- Indeks untuk tabel `form_reguler`
--
ALTER TABLE `form_reguler`
  ADD PRIMARY KEY (`id_formreguler`);

--
-- Indeks untuk tabel `foto_formundangan`
--
ALTER TABLE `foto_formundangan`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cms_demo`
--
ALTER TABLE `cms_demo`
  MODIFY `id_demo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cms_fitur`
--
ALTER TABLE `cms_fitur`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cms_footer`
--
ALTER TABLE `cms_footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cms_hero`
--
ALTER TABLE `cms_hero`
  MODIFY `id_hero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cms_kontak`
--
ALTER TABLE `cms_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `facebook_users`
--
ALTER TABLE `facebook_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fitur_undangan`
--
ALTER TABLE `fitur_undangan`
  MODIFY `id_fiturundangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `form_reguler`
--
ALTER TABLE `form_reguler`
  MODIFY `id_formreguler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `foto_formundangan`
--
ALTER TABLE `foto_formundangan`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
