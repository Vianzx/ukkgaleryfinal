-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2024 pada 07.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galery-foto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_buat` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id`, `nama_album`, `deskripsi`, `tanggal_buat`, `user_id`) VALUES
(1, 'Album Pribadi', 'foto-foto sunset', '2024-02-19', 1),
(3, 'try', 'apaiya', '2024-02-24', 1),
(4, 'selfi2', 'selfi2', '2024-02-29', 1),
(5, 'yii', 'higiip', '2455-02-12', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `judul_foto` varchar(255) NOT NULL,
  `deskripsi_foto` text NOT NULL,
  `tanggal_unggah` date NOT NULL,
  `lokasi_file` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `judul_foto`, `deskripsi_foto`, `tanggal_unggah`, `lokasi_file`, `album_id`, `user_id`) VALUES
(20, 'fpejd', '222', '2024-02-29', './assets/img/photos/2024-02-29-08-30-10.jpg', 3, 1),
(21, 'ur79r', 'utuf', '2024-02-29', './assets/img/photos/2024-02-29-08-31-27.png', 3, 1),
(23, 'hug', 'kpib', '2024-03-01', './assets/img/photos/2024-03-01-08-20-45.png', 3, 3),
(24, 'vhkv', 'ugufog', '2024-03-01', './assets/img/photos/2024-03-01-08-21-06.png', 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `id` int(11) NOT NULL,
  `foto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentarfoto`
--

INSERT INTO `komentarfoto` (`id`, `foto_id`, `user_id`, `isi_komentar`, `tanggal_komentar`) VALUES
(1, 9, 1, 'Btw Udah keluar kah Animenya?', '2024-02-26'),
(18, 18, 1, 'test', '2024-02-29'),
(19, 23, 3, 'http://localhost/galeri-foto/user/tambahLike/23', '2024-03-01'),
(20, 23, 3, 'fyff', '2024-03-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likefoto`
--

CREATE TABLE `likefoto` (
  `id` int(11) NOT NULL,
  `foto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_like` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `likefoto`
--

INSERT INTO `likefoto` (`id`, `foto_id`, `user_id`, `tanggal_like`) VALUES
(23, 23, 3, '2024-03-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`) VALUES
(1, 'fattah', '$2y$10$iV4RFYgzSncSgiAH/VPkSO9F8U2C..Lnfpy.ljTutvpQUJAlJ1WL.', 'fattah979@gmail.com', 'Abdullah Fattah', 'Kecapi Kota Cirebon'),
(2, 'dika', '$2y$10$nLDPAGiYm.TVVsbqKUJ7munRl8cU2SyDhSg1L1PcOTE8o2FfpCtRK', 'nurana979@gmail.com', 'Andhika Pratama', 'Jagasatru Kota Cirebon'),
(3, 'vian', '$2y$10$SvYB57XqtPBckYKuo4mw1eUDkEVBxtJIg4x20Az0g0MciJBr8uEIK', 'vian11@gmail.com', 'alvian Azzahra', 'Gunung Jati');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
