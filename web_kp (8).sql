-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 02.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cat_kerja`
--

CREATE TABLE `cat_kerja` (
  `id` int(50) NOT NULL,
  `kode_perintah_kerja` varchar(100) NOT NULL,
  `teknisi` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `perbaikan_mesin` varchar(255) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `hasil_kerja` varchar(255) NOT NULL,
  `status_akhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cat_kerja`
--

INSERT INTO `cat_kerja` (`id`, `kode_perintah_kerja`, `teknisi`, `unit`, `lokasi`, `perbaikan_mesin`, `tgl_selesai`, `hasil_kerja`, `status_akhir`) VALUES
(1, ' 0845934295', 'VIOLA', 'PLTU ', 'Indalaya', 'Perbaikan Kondisi Mesin', '2023-07-11', 'Mengecangkan Baut', 'Normal'),
(15, '078345', 'SHERLY', 'PLTGU', 'Indralaya', 'Selenoid tidak bekerja', '2023-06-15', 'Mesin Pembangkit Pompa Bersih', 'Normal'),
(16, '8994574', 'Teresia', 'PLTGU ', 'Palembang', 'Kebocoran pada Pompa', '2023-10-18', 'Normal', 'Normal'),
(18, ' 0845934295', 'BRIAN', 'PLTGU ', 'Palembang', 'Membersihan kotoran daerah selenoid', '2023-10-18', 'Masih dalam tahap pengerjaan', 'Normal'),
(23, ' 0845934295', 'NOVIA', 'PLTGU ', 'Palembang', 'Mengencangkan baut', '2023-10-18', 'Pembersihan dan tahap Pembenaran Mesin', 'Normal'),
(24, ' 0845934295', 'MICHAEL', 'PLTGU ', 'Palembang', 'Membersihkan saluran filter ', '2023-10-11', 'Baik dan Normal', 'Normal'),
(25, ' 0845934295', 'WILSON', 'PLTU', 'Keramasan', 'Kebocoran pada Pompa', '2023-10-18', 'Jamur telah dibersihkan', 'Normal'),
(26, '56u47o', 'Reina', 'PLTGU ', 'Keramasan', 'Selenoid tidak bekerja', '2023-10-18', 'Selesai diperbaiki', 'Normal'),
(28, '5678645476', 'Viona', 'PLTGU ', 'Indralaya', 'Membersihkan saluran filter ', '2023-02-01', 'Seleneoid tidak bekerja dengan normal dan terdapat kebocoran udara', 'Normal'),
(29, ' 0845934295', 'Teresia', 'PLTGU ', 'Palembang', 'Kebocoran pada Pompa', '2023-11-23', 'Setelah dikerjkan Mesin menjadi lebih baik', 'Normal'),
(30, '8994574', 'Rania', 'PLTU', 'Borang', 'Selenoid tidak bekerja', '2023-11-25', 'Mesin sedang Diperbaiki', 'Normal'),
(31, '8994574', 'Teresia', 'PLTGU ', 'Palembang', 'Kebocoran pada Pompa', '2023-12-27', 'Baik dan Normal', 'Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` enum('Admin','Pegawai','Teknisi','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `level`) VALUES
(10, 'teknisi', '89ccfac87d8d06db06bf3211cb2d69ed', 'Rachel', 'Teknisi'),
(14, 'admin', '5ef035d11d74713fcb36f2df26aa7c3d', 'Tiur', 'Admin'),
(16, 'teknisi', '901819e10bd8a85f6d112067f53844c4', 'KARA', 'Teknisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_order`
--

CREATE TABLE `work_order` (
  `id` int(30) NOT NULL,
  `kode_work_order` varchar(255) NOT NULL,
  `teknisi` varchar(255) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `masalah_mesin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `kondisi_mesin_last` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `work_order`
--

INSERT INTO `work_order` (`id`, `kode_work_order`, `teknisi`, `tgl_mulai`, `tgl_selesai`, `masalah_mesin`, `status`, `kondisi_mesin_last`) VALUES
(1, '12404823   ', 'KENZO IRWAN', '2023-10-12', '2023-09-12', 'Pipa Kotor dan Bocor', 'Kuning', 'Masih dalam Perbaikan'),
(4, '8348578', 'Misha', '2023-09-11', '2023-09-27', 'Pompa Pelumas Bocor', 'Kuning', 'Akan Di Perbaiki'),
(5, '234634 ', 'NOVELIA', '2015-01-16', '2023-09-22', 'DINAMO', 'Merah', 'Normal dan Baik'),
(11, '062130701729  ', 'Arabella', '2023-01-16', '2023-04-16', 'Mesin Turun', 'Kuning', 'Masih dalam Perbaikan'),
(18, '1235346', 'Rena', '2023-08-29', '2023-09-28', 'Mesiin Bocor', 'Merah', 'Masih dalam Perbaikan'),
(19, '5657   ', 'Teresia', '2023-10-12', '2023-10-04', 'Mesin Bocor', 'Merah', 'Masih dalam Perbaikan'),
(22, '0849233244 ', 'VANDLESS', '2022-08-18', '2023-10-01', 'Mesin Bocor dan Pompa Bocor', 'Kuning', 'Baik dan Normal'),
(23, '55668768 ', 'Teresia', '2023-10-06', '2023-10-26', 'Turbo Bocor', 'Hijau', 'Akan Di Perbaiki'),
(26, '24958845 ', 'Angelina', '2023-10-17', '2023-10-28', 'Valve Kotor', 'Hijau', 'Telah di Bersihkan '),
(32, '98513497554   ', 'VANDLED', '2023-10-01', '2023-05-31', 'Turbo Bocor', 'Kuning', 'Tahap Perbaikan'),
(33, '35756867', 'Reno', '2023-11-17', '2023-11-22', 'Pipa Kotor dan Bocor', 'Kuning', 'Perlu Perbaikan'),
(34, '5657', 'Teresia', '2023-11-30', '2023-11-29', 'Pipa Kotor dan Bocor', 'Ringan', 'Masih dalam Perbaikan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cat_kerja`
--
ALTER TABLE `cat_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work_order`
--
ALTER TABLE `work_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cat_kerja`
--
ALTER TABLE `cat_kerja`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `work_order`
--
ALTER TABLE `work_order`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
