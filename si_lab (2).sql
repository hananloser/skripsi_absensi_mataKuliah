-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2019 pada 16.56
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_lab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

CREATE TABLE `asisten` (
  `id_asisten` int(10) NOT NULL,
  `stambuk` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text,
  `foto` text,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:asisten'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`id_asisten`, `stambuk`, `password`, `nama`, `jk`, `hp`, `alamat`, `foto`, `level`) VALUES
(1, '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Ratu', 'P', '086453753', 'dsad ', 'asisten-190726-40dddac876.png', 1),
(2, '12346', '94ae0a96d83a445d72a93417b63ac90d79db5eca', 'Dewi', 'P', '9948593587', 'Makassar ', 'asisten-190801-cb3ce9b069.png', 2),
(4, '123457', '908f704ccaadfd86a74407d234c7bde30f2744fe', 'Aan', 'L', '081111111114', ' Bantaeng', 'asisten-190729-a749e38f55.png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `frekuensi`
--

CREATE TABLE `frekuensi` (
  `id_frekuensi` int(10) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_praktikan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `frekuensi`
--

INSERT INTO `frekuensi` (`id_frekuensi`, `id_jadwal`, `id_praktikan`) VALUES
(1, 4, 5),
(2, 4, 6),
(3, 4, 7),
(4, 4, 8),
(5, 4, 9),
(6, 6, 12),
(7, 6, 15),
(8, 6, 18),
(9, 6, 20),
(10, 5, 20),
(11, 5, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `frek_class`
--

CREATE TABLE `frek_class` (
  `id_frek` int(11) NOT NULL,
  `id_praktikum` int(10) NOT NULL,
  `frek` varchar(20) NOT NULL,
  `id_ruangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `frek_class`
--

INSERT INTO `frek_class` (`id_frek`, `id_praktikum`, `frek`, `id_ruangan`) VALUES
(4, 1, 'SI 2', 2),
(5, 2, 'RPL 1', 3),
(7, 1, 'SI 1', 4),
(8, 2, 'RPL 2', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `mulai` varchar(20) NOT NULL,
  `selesai` varchar(20) NOT NULL,
  `id_frek` int(11) NOT NULL,
  `id_asisten` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `mulai`, `selesai`, `id_frek`, `id_asisten`) VALUES
(4, '2019-07-28', '08:00', '10:00', 7, 1),
(5, '2019-07-28', '10:00', '12:00', 4, 2),
(6, '2019-07-28', '13:00', '14:30', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(10) NOT NULL,
  `id_praktikan` int(10) NOT NULL,
  `id_frekuensi` int(10) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `deskripsi`, `judul`) VALUES
(1, ' Ujian praktikum mata kuliah Sistem Informasi diundur sampai 1 bulan ke depan', 'Penundaan Ujian Praktikum'),
(2, 'Nilai untuk matakuliah Rancangan Perangkat Lunak sudah dapat dilihat di akun masing-masing', 'Nilai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikan`
--

CREATE TABLE `praktikan` (
  `id_praktikan` int(10) NOT NULL,
  `stambuk` varchar(20) NOT NULL,
  `no_card` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text,
  `foto` text,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikan`
--

INSERT INTO `praktikan` (`id_praktikan`, `stambuk`, `no_card`, `nama`, `jk`, `hp`, `alamat`, `foto`, `password`) VALUES
(5, '13020180111', 'A42D9E40', 'A. AFDAL AZHARIi', 'L', '081111111111', ' Jl. Urip Sumoharjo ', 'praktikan-190729-aba0c5e198.png', '7c40cda5ff58410a4604b77d4b979abea1c5cd37'),
(6, '13020180112', 'A42EF980', 'A. AHMAD JAUHARY ZAENAL ', 'L', '081111111112', ' Jl. Pampang', 'praktikan-190729-c3fdcb6bbc.png', '5350fd6d306b1164b247efc2a5aa202ec972e159'),
(7, '13020180042', 'A3BEC070', 'A. MUH SYAFEI EMIL', 'L', '081111111113', ' Jl. Paccerakang', 'praktikan-190729-6c0958d82a.png', '7b8df114d248dc97a33cfcc628e57089c84d7252'),
(8, '13020180050', 'A3CADCA0', 'A. MUHAMMAD FAHRI', 'L', '081111111114', ' Jl. Macini Raya\r\n', 'praktikan-190729-f311ae8c90.png', 'd4439547637606543ea6422cbee633ffa4350e91'),
(9, '13020180168', 'A3C91050', 'ABD. HAFIDZ MULTAZAM', 'L', '081111111115', ' Jl. Abdesir', 'praktikan-190729-f25f9cde8f.png', 'da83d31a0fffbec90881b5bbb78e82ac5863cdc9'),
(10, '13020180014', 'A3C7C1E0', 'NABILATUL RAHMA', 'P', '081111111116', ' Jl. Pampang', 'praktikan-190729-0777acff7c.jpg', 'a8b418ef8396cee5931b54f55051ef8dffac9f12'),
(11, '13020180015', 'A3CB9610', 'NURAFNY MAYANG', 'P', '081111111117', 'Jl. Urip Sumoharjo', 'praktikan-190729-b8306d1178.jpg', 'a36415acc2cef5168e7f761d1e650805f0b1f6bb'),
(12, '13020180016', 'A3C230B0', 'MUHAMMAD ALIF IRSAN', 'P', '081111111117', ' Jl. Panaikang\r\n', 'praktikan-190729-000c076c39.png', '3ea14194e4c1994f7abadec38363deedbb53c011'),
(13, '13020180017', 'A3CCD5B0', 'SYAHRUL', 'L', '081111111118', ' Lorong 501', 'praktikan-190729-b4fd1d2cb0.png', '53eac2cfe7cfa27308e8100b43fc28e1adbcd83e'),
(14, '13020180018', 'A3C88950', 'NUR AULIA PERTIWI', 'P', '081111111119', ' Jl. Macini Raya', 'praktikan-190729-a052f1fccf.jpg', 'ba214b9cefbafdce566ce383e552112a3a89114c'),
(15, '13020180019', 'A3CD7030', 'SYAHRUL BONE', 'P', '081111111110', ' Jl. Racing', 'praktikan-190729-a3f66d3a6a.png', '80de18a677b7f599cb36277cdd87aa62319cd7e3'),
(16, '13020180020', 'A3CCEF8F0', 'ZAMRUD', 'L', '0811 1111 1121', ' Jl. Hertasning', 'praktikan-190729-e464f78f1b.png', '9c293b098c8f6b027d8d2431203c245607e975a6'),
(17, '13020180021', 'A3C2DB40', 'MUHAMMAD SATRIAGUNG  ', 'L', '081111111131', ' Jl. Angkasa', 'praktikan-190729-6481ebf116.png', '0030dc78cdc7bbd604bdf85dacfd36c124fd3396'),
(18, '13020180022', 'A3BF3D90', 'WIDYA WARDANI', 'P', '081111111141', ' Jl. Paccerakang', 'praktikan-190729-4db73860ec.jpg', 'df1cdfc85fdc35979cfccfe4065fc4146cfafd78'),
(19, '13020180023', 'A3BF7530', 'FIRMAN IRIANSYAH PUTRA', 'L', '081111111151', ' Jl. Pajaiang', 'praktikan-190729-c2d890039c.png', '792863126d7dd222c1ed4cd5fbd2993a59cbf100'),
(20, '13020180024', 'A3C35F20', 'AGUNG MAULANA', 'P', '081111111161', ' Jl. Daya', 'praktikan-190729-11b00a895c.png', 'b0b6cb266839a22f642aa9b9d2c765aa7a19782a'),
(22, '13020180028', '73C74CE1', 'FITRIANI HASBULLAH', 'P', '081111111181', ' Jl. Pampang', 'praktikan-190729-5fce283940.jpg', '49c87e3922d3d9dab9e1063003af4f07c081a544');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum`
--

CREATE TABLE `praktikum` (
  `id_praktikum` int(10) NOT NULL,
  `praktikum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikum`
--

INSERT INTO `praktikum` (`id_praktikum`, `praktikum`) VALUES
(1, 'Sistem Informasi Lanjut'),
(2, 'Rancangan Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(10) NOT NULL,
  `id_frekuensi` int(10) NOT NULL,
  `status` enum('hadir','absen') NOT NULL DEFAULT 'absen',
  `tanggal` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruangan` int(10) NOT NULL,
  `ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruangan`, `ruangan`) VALUES
(2, 'Lab 2'),
(3, 'Lab 3'),
(4, 'Lab 1'),
(5, 'lab 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id_asisten`),
  ADD UNIQUE KEY `stambuk` (`stambuk`);

--
-- Indexes for table `frekuensi`
--
ALTER TABLE `frekuensi`
  ADD PRIMARY KEY (`id_frekuensi`),
  ADD KEY `id_praktikum` (`id_jadwal`),
  ADD KEY `id_praktikan` (`id_praktikan`),
  ADD KEY `id_frek` (`id_jadwal`);

--
-- Indexes for table `frek_class`
--
ALTER TABLE `frek_class`
  ADD PRIMARY KEY (`id_frek`),
  ADD KEY `id_praktikum` (`id_praktikum`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_frek` (`id_frek`),
  ADD KEY `id_asisten` (`id_asisten`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_praktikan` (`id_praktikan`),
  ADD KEY `id_frekuensi` (`id_frekuensi`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `praktikan`
--
ALTER TABLE `praktikan`
  ADD PRIMARY KEY (`id_praktikan`),
  ADD UNIQUE KEY `no_card` (`no_card`),
  ADD UNIQUE KEY `stambuk` (`stambuk`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id_praktikum`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_frekuensi` (`id_frekuensi`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id_asisten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `frekuensi`
--
ALTER TABLE `frekuensi`
  MODIFY `id_frekuensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `frek_class`
--
ALTER TABLE `frek_class`
  MODIFY `id_frek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `praktikan`
--
ALTER TABLE `praktikan`
  MODIFY `id_praktikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id_praktikum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `frekuensi`
--
ALTER TABLE `frekuensi`
  ADD CONSTRAINT `frekuensi_ibfk_2` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `frekuensi_ibfk_3` FOREIGN KEY (`id_praktikan`) REFERENCES `praktikan` (`id_praktikan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `frek_class`
--
ALTER TABLE `frek_class`
  ADD CONSTRAINT `frek_class_ibfk_1` FOREIGN KEY (`id_praktikum`) REFERENCES `praktikum` (`id_praktikum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frek_class_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `ruang` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_asisten`) REFERENCES `asisten` (`id_asisten`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_frek`) REFERENCES `frek_class` (`id_frek`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_praktikan`) REFERENCES `praktikan` (`id_praktikan`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_frekuensi`) REFERENCES `frekuensi` (`id_frekuensi`);

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`id_frekuensi`) REFERENCES `frekuensi` (`id_frekuensi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
