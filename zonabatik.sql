-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2021 pada 18.48
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zonabatik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cirebon`
--

CREATE TABLE `cirebon` (
  `id` int(11) NOT NULL,
  `nama_penjual` varchar(200) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'bagasivankreshna', 'bagasivankreshna', 'bagasivankreshna123', 'admin'),
(2, 'bik', 'bik', '111', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'solo'),
(2, 'cirebon'),
(3, 'pekalongan'),
(4, 'yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekalongan`
--

CREATE TABLE `pekalongan` (
  `id` int(11) NOT NULL,
  `nama_penjual` varchar(200) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `solo`
--

CREATE TABLE `solo` (
  `id` int(11) NOT NULL,
  `nama_penjual` varchar(200) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `solo`
--

INSERT INTO `solo` (`id`, `nama_penjual`, `kontak`, `alamat`) VALUES
(1, 'Batik Danar Hadi', '(0271) 648598', 'Jalan Dr. Rajiman No.164 Solo'),
(2, 'Pusat Grosir Solo (PGS)', '-', 'Jalan Mayor Sunaryo No. 1, Gladag'),
(3, 'Kampung Batik Kauman', '-', 'Kauman, Pasar Kliwon, Surakarta City, Central Java 57122'),
(4, 'Kampung Batik Laweyan', '-', 'Jl. Dr. Rajiman No.521, Laweyan, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57148'),
(5, 'Pasar Klewer', '-', 'Jl. DR. Radjiman, Gajahan, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57155');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yogyakarta`
--

CREATE TABLE `yogyakarta` (
  `id` int(11) NOT NULL,
  `nama_penjual` varchar(200) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cirebon`
--
ALTER TABLE `cirebon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `pekalongan`
--
ALTER TABLE `pekalongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solo`
--
ALTER TABLE `solo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `yogyakarta`
--
ALTER TABLE `yogyakarta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cirebon`
--
ALTER TABLE `cirebon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pekalongan`
--
ALTER TABLE `pekalongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `solo`
--
ALTER TABLE `solo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5545;

--
-- AUTO_INCREMENT untuk tabel `yogyakarta`
--
ALTER TABLE `yogyakarta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
