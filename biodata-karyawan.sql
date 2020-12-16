-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 03.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata-karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(100) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Kong Hu Chu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id_employe` bigint(100) UNSIGNED NOT NULL,
  `npk` bigint(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tgl_masuk` text NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` text NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `gol_darah` varchar(100) NOT NULL,
  `tinggi_badan` varchar(100) NOT NULL,
  `berat_badan` varchar(100) NOT NULL,
  `ukuran_kemeja` varchar(100) NOT NULL,
  `ukuran_celana` varchar(100) NOT NULL,
  `ukuran_sepatu` varchar(100) NOT NULL,
  `alamat_asal` text NOT NULL,
  `domisili` text DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sosmed` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id_employe`, `npk`, `nama_lengkap`, `nama_panggilan`, `departemen`, `bagian`, `jabatan`, `tgl_masuk`, `agama`, `kewarganegaraan`, `jenis_kelamin`, `tmp_lahir`, `tgl_lahir`, `status_kawin`, `hobi`, `gol_darah`, `tinggi_badan`, `berat_badan`, `ukuran_kemeja`, `ukuran_celana`, `ukuran_sepatu`, `alamat_asal`, `domisili`, `no_hp`, `email`, `sosmed`) VALUES
(6, 8989898, 'okokok', 'okokok', 'okoko', 'kokok', '', '275760-09-08', '', 'WNI', 'L', 'okokok', '0898-09-08', '', 'okokko', 'A', '89', '89', 'M', '', '', 'okokok', 'okokok', 'okokko', 'okoko', 'FB: okokok, IG: okokok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_diri`
--

CREATE TABLE `identitas_diri` (
  `id_employe` bigint(100) UNSIGNED DEFAULT NULL,
  `jenis_identitas` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `masa_berlaku_identitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `identitas_diri`
--

INSERT INTO `identitas_diri` (`id_employe`, `jenis_identitas`, `no_identitas`, `masa_berlaku_identitas`) VALUES
(6, 'ijij || ijni || nuh', 'ijiji || inini || ubb', '275760-08-09 || 0089-09-08 || 0089-09-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Manager'),
(2, 'Anggota'),
(3, 'Section Head'),
(4, 'Supervisor'),
(5, 'Kepala Regu'),
(6, 'Kepala Shift'),
(7, 'Administrasi'),
(8, 'Trainer'),
(9, 'Merchandiser'),
(10, 'Follow Up'),
(11, 'Driver'),
(12, 'Mekanik'),
(13, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemampuan_bahasa`
--

CREATE TABLE `kemampuan_bahasa` (
  `id_employe` bigint(100) UNSIGNED DEFAULT NULL,
  `bahasa` varchar(100) NOT NULL,
  `pendengaran` varchar(100) NOT NULL,
  `membaca` varchar(100) NOT NULL,
  `lisan` varchar(100) NOT NULL,
  `tulisan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kemampuan_bahasa`
--

INSERT INTO `kemampuan_bahasa` (`id_employe`, `bahasa`, `pendengaran`, `membaca`, `lisan`, `tulisan`) VALUES
(6, ' ||  || ', 'kmmkm || kmkm || ugy', 'kmkm || kmmk || hbbh', 'kmkm || kmkm || uhuh', 'kmkm || kmk || iugi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-11-18-023603', 'App\\Database\\Migrations\\Employees', 'default', 'App', 1605671586, 1),
(2, '2020-11-18-030853', 'App\\Database\\Migrations\\Education', 'default', 'App', 1605671587, 1),
(3, '2020-11-18-031947', 'App\\Database\\Migrations\\WorkExperience', 'default', 'App', 1605671636, 2),
(4, '2020-11-18-032614', 'App\\Database\\Migrations\\Training', 'default', 'App', 1605671636, 2),
(5, '2020-11-18-033217', 'App\\Database\\Migrations\\LanguageSkill', 'default', 'App', 1605671719, 3),
(6, '2020-11-18-033818', 'App\\Database\\Migrations\\Families', 'default', 'App', 1605671719, 3),
(7, '2020-11-18-034756', 'App\\Database\\Migrations\\Identities', 'default', 'App', 1605671763, 4),
(8, '2020-11-18-040308', 'App\\Database\\Migrations\\Users', 'default', 'App', 1605672499, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_employe` bigint(100) UNSIGNED DEFAULT NULL,
  `nama_pelatihan` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `no_sertifikat` varchar(100) NOT NULL,
  `masa_berlaku_sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_employe`, `nama_pelatihan`, `penyelenggara`, `no_sertifikat`, `masa_berlaku_sertifikat`) VALUES
(6, 'knknk || kmkmk || kmkm', 'mkkmmk || mkmk || kmkm', 'mkmkm || mkmk || mkm', '8989-09-08 || 275760-08-09 || 0878-07-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_employe` bigint(100) UNSIGNED DEFAULT NULL,
  `jenjang` varchar(100) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `instansi` varchar(100) NOT NULL,
  `tahun_pendidikan` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_employe`, `jenjang`, `jurusan`, `instansi`, `tahun_pendidikan`, `nilai`) VALUES
(6, 'SD(Sederajat) || SMP(Sederajat) || SMA(Sederajat)', 'okoko || okkok || okok', 'okok || okoko || okok', 'okok-okok || okok-kokok || okokok-okok', 'okok || okok || ookoko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id_employe` bigint(100) UNSIGNED DEFAULT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `tahun_pengalaman` varchar(100) NOT NULL,
  `jabatan_pengalaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id_employe`, `nama_perusahaan`, `tahun_pengalaman`, `jabatan_pengalaman`) VALUES
(6, 'jnjnj || jnjn || jnjn', 'jnjnjn-jnjnj || jnjn-jnjn || jnjnj-jnjnj', 'jnjnj || jnjnj || jnjn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_perkawinan`
--

CREATE TABLE `status_perkawinan` (
  `id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_perkawinan`
--

INSERT INTO `status_perkawinan` (`id`, `status`) VALUES
(1, 'Kawin'),
(2, 'Belum Kawin'),
(4, 'Janda'),
(5, 'Duda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `susunan_keluarga`
--

CREATE TABLE `susunan_keluarga` (
  `id_employe` bigint(100) UNSIGNED DEFAULT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_keluarga` varchar(100) NOT NULL,
  `jk_keluarga` varchar(100) NOT NULL,
  `tmp_lahir_keluarga` varchar(100) NOT NULL,
  `tgl_lahir_keluarga` text NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `no_hp_keluarga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `susunan_keluarga`
--

INSERT INTO `susunan_keluarga` (`id_employe`, `hubungan`, `nama_keluarga`, `jk_keluarga`, `tmp_lahir_keluarga`, `tgl_lahir_keluarga`, `pendidikan_terakhir`, `pekerjaan`, `alamat_keluarga`, `no_hp_keluarga`) VALUES
(6, ' ||  || ', ' ||  || ', ' ||  || ', ' ||  || ', ' ||  || ', ' ||  || ', ' ||  || ', ' ||  || ', ' ||  || ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', '$2y$10$5ZTQs4eFKf.4ariOHJ5NKOqgb.8VlZSljSG2R8x/dDu7xKXvts.B6', 1),
(2, 'User', '$2y$10$5ZTQs4eFKf.4ariOHJ5NKOqgb.8VlZSljSG2R8x/dDu7xKXvts.B6', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` bigint(100) NOT NULL,
  `role_id` bigint(100) NOT NULL,
  `menu_id` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 5),
(4, 2, 2),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `menu_id` bigint(100) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`menu_id`, `title`, `url`, `icon`) VALUES
(1, 'Daxhboard', 'admin', 'nav-icon fas fa-th'),
(2, 'Dashboard', 'user', 'nav-icon fas fa-th'),
(3, 'Data Karyawan', 'admin/dataKaryawan', 'nav-icon fas fa-users'),
(4, 'Tambah Data', 'user/createBiodata', 'nav-icon fas fa-user-plus'),
(5, 'Report', 'admin/report', 'nav-icon fas fa-print');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_employe`);

--
-- Indeks untuk tabel `identitas_diri`
--
ALTER TABLE `identitas_diri`
  ADD KEY `identitas_diri_id_employe_foreign` (`id_employe`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kemampuan_bahasa`
--
ALTER TABLE `kemampuan_bahasa`
  ADD KEY `kemampuan_bahasa_id_employe_foreign` (`id_employe`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD KEY `pelatihan_id_employe_foreign` (`id_employe`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD KEY `pendidikan_id_employe_foreign` (`id_employe`);

--
-- Indeks untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD KEY `pengalaman_kerja_id_employe_foreign` (`id_employe`);

--
-- Indeks untuk tabel `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `susunan_keluarga`
--
ALTER TABLE `susunan_keluarga`
  ADD KEY `susunan_keluarga_id_employe_foreign` (`id_employe`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user1` (`role_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role_id`),
  ADD KEY `menu` (`menu_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_employe` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `status_perkawinan`
--
ALTER TABLE `status_perkawinan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `menu_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `identitas_diri`
--
ALTER TABLE `identitas_diri`
  ADD CONSTRAINT `identitas_diri_id_employe_foreign` FOREIGN KEY (`id_employe`) REFERENCES `biodata` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kemampuan_bahasa`
--
ALTER TABLE `kemampuan_bahasa`
  ADD CONSTRAINT `kemampuan_bahasa_id_employe_foreign` FOREIGN KEY (`id_employe`) REFERENCES `biodata` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD CONSTRAINT `pelatihan_id_employe_foreign` FOREIGN KEY (`id_employe`) REFERENCES `biodata` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_id_employe_foreign` FOREIGN KEY (`id_employe`) REFERENCES `biodata` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD CONSTRAINT `pengalaman_kerja_id_employe_foreign` FOREIGN KEY (`id_employe`) REFERENCES `biodata` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `susunan_keluarga`
--
ALTER TABLE `susunan_keluarga`
  ADD CONSTRAINT `susunan_keluarga_id_employe_foreign` FOREIGN KEY (`id_employe`) REFERENCES `biodata` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `menu` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
