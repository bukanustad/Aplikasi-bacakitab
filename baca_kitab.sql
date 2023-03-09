-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2023 pada 00.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baca_kitab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ertd`
--

CREATE TABLE `ertd` (
  `id` int(11) NOT NULL,
  `bab` varchar(225) NOT NULL,
  `maqro` varchar(128) NOT NULL,
  `kitab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ertd`
--

INSERT INTO `ertd` (`id`, `bab`, `maqro`, `kitab`) VALUES
(1, 'Hukum Hukum Thaharoh', 'fq1.jpg', 2),
(2, 'Pembagian Air', 'fq2.jpg', 2),
(3, 'Air Mutlak', 'fq3.jpg', 2),
(4, 'Air Mutanajjis', 'fq4.jpg', 2),
(5, 'Perabot Emas dan Perak', 'fq5.jpg', 2),
(6, 'wadah selain emas dan perak', 'fq6.jpg', 2),
(7, 'Siwak', 'fq7.jpg', 2),
(8, 'tempat tempat yang disunnahkan untuk bersiwak', 'fq8.jpg', 2),
(9, 'niat wudhu', 'fq9.jpg', 2),
(10, 'membasuh wajah', 'fq10.jpg', 2),
(11, 'membasuh kedua tangan', 'fq11.jpg', 2),
(12, 'membasuh kedua kaki', 'fq12.jpg', 2),
(13, 'kesunnahan kesunnahan wudhu', 'fq13.jpg', 2),
(14, 'mengusap seluruh kepala', 'fq14.jpg', 2),
(15, 'menyela-nyela jenggot jari kedua tangan dan kaki', 'fq15.jpg', 2),
(16, 'mendahulukan bagian kanan', 'fq16.jpg', 2),
(17, 'perkara perkara yang membatalkan wudhu', 'fq17.jpg', 2),
(18, 'batal sebab tidur', 'fq18.jpg', 2),
(19, 'sebab memegang kemaluan', 'fq19.jpg', 2),
(20, 'macam macam najis', 'fq20.jpg', 2),
(21, 'cara mensucikan najis', 'fq21.jpg', 2),
(22, 'najis mukhafafah', 'fq22.jpg', 2),
(23, 'najis mafu', 'fq23.jpg', 2),
(24, 'najis mughalladah', 'fq24.jpg', 2),
(25, 'najis mutawasithah', 'fq25.jpg', 2),
(26, 'khamer menjadi cuka', 'fq26.jpg', 2),
(27, 'darah haid', 'fq27.jpg', 2),
(28, 'hal-hal yang haram bagi orang yang berhadats kecil', 'fq28.jpg', 2),
(29, 'Hukum Hukum Sholat', 'fq29.jpg', 2),
(30, 'sholat dhuhur', 'fq30.jpg', 2),
(31, 'sholat ashar', 'fq31.jpg', 2),
(32, 'sholat magrib', 'fq32.jpg', 2),
(33, 'sholat isya', 'fq33.jpg', 2),
(34, 'sholat shubuh', 'fq34.jpg', 2),
(35, 'kesunnahan kesunnahan sholat', 'fq35.jpg', 2),
(36, 'kesunnahan setelah masuk sholat', 'fq36.jpg', 2),
(37, 'jumlah rokaat di dalam sholat', 'fq37.jpg', 2),
(38, 'berkumur dan memasukkan air ke hidung', 'fq38.jpg', 2),
(39, 'apa itu islam', 'mf1', 1),
(40, 'Arti Asyhadu An lailaha illa Allahu', 'mf2', 1),
(41, 'maksud Menegakkan sholat', 'mf3', 1),
(42, 'Niat wudhu', 'mf4', 1),
(43, 'wanita yang bukan mahrom', 'mf5', 1),
(44, 'bab aurat', 'mf6', 1),
(45, 'waktu ashar', 'mf7', 1),
(46, 'rukun rukun sholat', 'mf8', 1),
(47, 'Apa yang kamu baca setelah takbirotul ihrom', 'mf9', 1),
(48, 'Apa yang kamu baca setelah doa iftitah', 'mf10', 1),
(49, 'Apa yang kamu baca ketika sujud', 'mf11', 1),
(50, 'Apa yang kamu baca setelah tasyahud akhir', 'mf12', 1),
(51, 'Apa yang kamu baca setelah tasyahud dan sholawat kepada Nabi Muhammad', 'mf13', 1),
(52, 'Kalam', 'kalam.jpg', 3),
(53, 'irob', 'irob.jpg', 3),
(54, 'afal', 'afal.jpg', 3),
(55, 'dzorof zaman dan dzorof makan', 'dorofzaman_makan.jpg', 3),
(56, 'hal', 'hal.jpg', 3),
(57, 'istisnak', 'istisnak.jpg', 3),
(58, 'la', 'la.jpg', 3),
(59, 'maful maah', 'maful_maah.jpg', 3),
(60, 'mahfudzotul asma', 'mahfudotul_a.jpg', 3),
(61, 'masdar', 'masdar.jpg', 3),
(62, 'mubtadak khobar', 'mubtadak.jpg', 3),
(63, 'naat', 'naat.jpg', 3),
(64, 'naibul fail', 'naibul_fail.jpg', 3),
(65, 'tamyiz', 'tamyiz.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mabadi_fiqh`
--

CREATE TABLE `mabadi_fiqh` (
  `id` int(11) NOT NULL,
  `maqro` varchar(225) NOT NULL,
  `dari` int(11) NOT NULL,
  `sampe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mabadi_fiqh`
--

INSERT INTO `mabadi_fiqh` (`id`, `maqro`, `dari`, `sampe`) VALUES
(1, 'mf1', 4, 4),
(2, 'mf2', 4, 5),
(3, 'mf3', 5, 6),
(4, 'mf4', 6, 7),
(5, 'mf5', 7, 8),
(6, 'mf6', 8, 8),
(7, 'mf7', 9, 9),
(8, 'mf8', 10, 11),
(9, 'mf9', 11, 12),
(10, 'mf10', 12, 13),
(11, 'mf11', 13, 14),
(12, 'mf12', 14, 14),
(13, 'mf13', 15, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `maqro_bab` varchar(225) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `maqro_bab`, `kategori`, `kelas`, `m1`, `m2`, `status`) VALUES
(3, 'Diana Faroh', 'mabadi_fiqh', 'anak', 'IC', 5, 6, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ertd`
--
ALTER TABLE `ertd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mabadi_fiqh`
--
ALTER TABLE `mabadi_fiqh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ertd`
--
ALTER TABLE `ertd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `mabadi_fiqh`
--
ALTER TABLE `mabadi_fiqh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
