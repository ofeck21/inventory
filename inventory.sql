-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2018 pada 03.55
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `merk_model` varchar(150) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `tahun_buat` year(4) NOT NULL,
  `kondisi` int(11) NOT NULL,
  `kode_barang` varchar(35) NOT NULL,
  `barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `jenis`, `nama_barang`, `merk_model`, `satuan`, `jumlah`, `harga`, `tanggal_beli`, `tahun_buat`, `kondisi`, `kode_barang`, `barang`) VALUES
(1, 2, 'Mobil', 'Avanza (Veloz)', 'Unit', 2, '120.000.000', '2018-05-01', 2009, 1, 'UIM-001', 'UIM-001_cfm.jpg'),
(9, 2, 'Sepeda Motor', 'Yamaha (Vixion)', 'Unit', 10, '25.0000.0000', '2018-05-22', 2018, 1, 'UIM-009', 'UIM-009_Universitas_Islam_madura.png'),
(10, 3, 'Kursi', 'Kayu', 'Unit', 10, '100.000', '2018-05-23', 2018, 1, 'UIM-0010', ''),
(11, 1, 'Apa Ya', 'Evi (Cellot)', 'Gram', 100, '10.0000.000', '2018-05-28', 2018, 1, 'UIM-0011', ''),
(12, 1, 'Evi', 'Evi (Cellot)', 'Unit', 10, '10.0000.000', '2018-05-28', 2018, 1, 'UIM-0012', ''),
(14, 1, 'Apa Ya', 'Evi (Cellot)', 'Unit', 10, '10.0000.000', '2018-05-08', 2018, 2, 'UIM-0013', ''),
(15, 2, 'Ding Ding Ding', 'Evi (Cellot)', 'a', 10, '10.0000.000', '2018-05-21', 2018, 1, 'UIM-0015', 'UIM-0015_library.png'),
(16, 1, 'aaaa', 'merk', 'a', 12323, '10.0000.000', '2018-05-28', 2018, 1, 'UIM-0016', 'UIM-0016_logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(35) NOT NULL,
  `kode_jenis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`) VALUES
(1, 'Aset', 'AST'),
(2, 'Transportasi', 'TRP'),
(3, 'Alat Kantor', 'ALK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nama_kondisi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama_kondisi`) VALUES
(1, 'Baik'),
(2, 'Kurang Baik'),
(3, 'Rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jendre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `jendre`) VALUES
(1, 'Siti Nur Aivi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `jenis` (`jenis`),
  ADD KEY `kondisi` (`kondisi`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`kondisi`) REFERENCES `kondisi` (`id_kondisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
