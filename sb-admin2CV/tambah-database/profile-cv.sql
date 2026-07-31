-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2026 pada 04.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile-cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `tahun_belajar` varchar(40) NOT NULL,
  `tempat_belajar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id_education`, `nama_jurusan`, `tahun_belajar`, `tempat_belajar`, `deskripsi`) VALUES
(6, 'Pengembangan Perangkat Lunak and Gim', '2024', 'SMKN 3 banjar', 'belajar laravel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nama`, `icon`) VALUES
(2, 'laravel', 'devicon-laravel-plain'),
(3, 'JavaScript', 'devicon-javascript-plain'),
(4, 'HTML', 'devicon-html5-plain'),
(5, 'CSS', 'devicon-css3-plain'),
(6, 'Boostrap', 'devicon-bootstrap-plain'),
(8, 'php', 'devicon-php-plain'),
(9, 'php', 'devicon-php-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `nama_pekerjaan` varchar(200) NOT NULL,
  `tahun_bekerja` varchar(250) NOT NULL,
  `tempat_bekerja` varchar(100) NOT NULL,
  `deskripsi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id_job`, `nama_pekerjaan`, `tahun_bekerja`, `tempat_bekerja`, `deskripsi`) VALUES
(3, 'Guru', '2025', 'sekolah', 0x666f746f),
(4, 'Guru', '2025', 'sekolah', 0x666f746f6f6f);

-- --------------------------------------------------------

--
-- Struktur dari tabel `language`
--

CREATE TABLE `language` (
  `id_language` int(11) NOT NULL,
  `bahasa` varchar(250) NOT NULL,
  `flag` varchar(250) NOT NULL,
  `level` enum('Pemula','Menengah','Mahir','Sangat Lancar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `language`
--

INSERT INTO `language` (`id_language`, `bahasa`, `flag`, `level`) VALUES
(9, 'Jepang', '1785208968.jpg', 'Pemula'),
(11, 'Indonesia', '1785401666.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'indra07012000@gmail.com', 'Password');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobile`
--

CREATE TABLE `mobile` (
  `id_mobile` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobile`
--

INSERT INTO `mobile` (`id_mobile`, `nama`, `icon`) VALUES
(1, 'android', 'devicon-android-plain'),
(2, 'Kotlin', 'devicon-kotlin-plain'),
(3, 'Java', 'devicon-java-plain'),
(4, 'Android', 'devicon-android-plain'),
(5, 'Kotlin', 'devicon-kotlin-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `judul_portfolio` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul_portfolio`, `img`, `link`, `deskripsi`, `jenis`) VALUES
(4, 'Ada deh', '1785377561.jpg', 'https://www.instagram.com/indraaja_?igsh=MWRzdmp4cXFrcXZvOA==', 'adalah', 'Rorr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `nama`, `about`, `website`, `phone`, `email`, `address`, `linkedin`, `nationality`) VALUES
(3, 'Indra Hermawan', 'Saya Menyukai Coding', 'Belum Ada', '082240212641', 'indra07012000@gmail.com', 'Jl. Sidoarum Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'http://www.indrahermawan.com', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reference`
--

CREATE TABLE `reference` (
  `id_reference` int(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `perusahaan` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reference`
--

INSERT INTO `reference` (`id_reference`, `nama`, `jabatan`, `perusahaan`, `phone`, `email`) VALUES
(1, 'Frenkyline', 'Manajer', 'PT Rolexs', '082240212641', 'indra07012000@gmail.com'),
(2, 'Indra Hermawan', 'Belum Ada', 'Belum Ada', '082240212641', 'indra07012000@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebar_photo`
--

CREATE TABLE `sidebar_photo` (
  `id_sidebar_photo` int(11) NOT NULL,
  `sidebar_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sidebar_photo`
--

INSERT INTO `sidebar_photo` (`id_sidebar_photo`, `sidebar_photo`) VALUES
(2, '1785381792.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nama_skill` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`) VALUES
(2, 'Potong Template');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tools`
--

CREATE TABLE `tools` (
  `id_tools` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tools`
--

INSERT INTO `tools` (`id_tools`, `nama`, `icon`) VALUES
(1, 'VSCode', 'devicon-vscode-plain'),
(2, 'MySQL', 'devicon-mysql-plain'),
(3, 'Firebase', 'devicon-firebase-plain'),
(4, 'Canva', 'devicon-canva-plain'),
(5, 'Composer', 'devicon-composer-plain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `training`
--

CREATE TABLE `training` (
  `id_training` int(11) NOT NULL,
  `nama_training` varchar(250) NOT NULL,
  `tahun_training` varchar(250) NOT NULL,
  `tempat_training` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `tahun_training`, `tempat_training`, `deskripsi`) VALUES
(2, 'Film', '2925-2026', 'SMKN 3 Banjar', 'Ingin Lebih jago lagi ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indeks untuk tabel `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indeks untuk tabel `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_mobile`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`);

--
-- Indeks untuk tabel `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  ADD PRIMARY KEY (`id_sidebar_photo`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indeks untuk tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indeks untuk tabel `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_mobile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  MODIFY `id_sidebar_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
