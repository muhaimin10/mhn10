-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2021 pada 04.31
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(8, '124', '124', '124'),
(9, 'putra', 'putra', 'cabang19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `isi`) VALUES
(2, 'putra', 'ardiansaputra1127@gmail.com', 'memudahkan pemakai'),
(3, 'ardian sapy', 'ardiansaputra1127@gamil.com', 'baik'),
(4, 'asdasdasdasdasd', 'sadasdasdasd@asdasdasd.com', ''),
(5, 'axsadasa', 'asas2gdgd@hshs', 'shshs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orangtua`
--

CREATE TABLE `orangtua` (
  `id_orangtua` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orangtua`
--

INSERT INTO `orangtua` (`id_orangtua`, `id_user`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_terakhir_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_terakhir_ibu`, `telp`) VALUES
(11, 12, 'ahmad bakaroni', 'padang', '1965-02-16', 'PETANI', 'S1', 'LINA', 'Prabumulih', '1969-12-29', 'swasta', 'sma', '086754838'),
(12, 13, 'ahmad bakaroni', 'pekanbaru', '1966-12-04', 'guru', 's1', 'nadia', 'palembang', '1969-09-17', 'swasta', 'SMA', '0897654876'),
(13, 14, 'AHMAD ROJALI', 'PRABUMULIH', '1989-07-21', 'SWASTA', 'S1', 'LINDA', 'MAGELANG', '1987-09-21', 'PETANI', 'SMA', '08764532298'),
(14, 15, 'Ahmad gianto', 'Bandung', '1970-12-29', 'SWASTA', 'S2', 'Astuti', 'magelang', '1972-05-16', 'Dokter', 'S1', '089754398909'),
(15, 16, 'Ahmad djoko', 'Surabaya', '1968-12-29', 'SWASTA', 'S2', 'Tuti', 'S1', '1970-08-21', 'Dokter', 'S1', '0872697689');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `akte` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `konfirmasi` varchar(50) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_user`, `nisn`, `nama`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat`, `tgl_daftar`, `foto`, `kk`, `akte`, `ijazah`, `konfirmasi`) VALUES
(11, 16, '021180001', 'Ardian Saputra', 'smp yps prabumulih', 'Pekanbaru', '2007-07-27', 'Laki-Laki', 'Islam', '0812897659', 'JL.M.HUSIN.NO 39', '2021-08-13', 'WhatsApp Image 2021-07-27 at 13.43.34.jpeg', 'Kartu keluarga.jpg', 'Akte.jpg', '-ijazah_smp.jpg', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nisn`, `username`, `password`) VALUES
(16, '021180001', 'Ardian Saputra', 'ArdianSaputra');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id_orangtua`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
