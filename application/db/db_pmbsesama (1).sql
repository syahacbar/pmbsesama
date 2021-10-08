-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2021 pada 03.49
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmbsesama`
--

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
-- Struktur dari tabel `t_agenda`
--

CREATE TABLE `t_agenda` (
  `idt_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(45) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `isi_agenda` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_akun`
--

CREATE TABLE `t_akun` (
  `idt_akun` int(11) NOT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `nohp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `t_kelompokujian_id` int(11) NOT NULL,
  `t_jalurmasuk_id` int(11) NOT NULL,
  `t_gelombang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_akun`
--

INSERT INTO `t_akun` (`idt_akun`, `namalengkap`, `nohp`, `email`, `t_kelompokujian_id`, `t_jalurmasuk_id`, `t_gelombang_id`) VALUES
(1, 'sipri', '0987773737', 'sipri@gmail.com', 2, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_biodata`
--

CREATE TABLE `t_biodata` (
  `idt_biodata` int(11) NOT NULL,
  `nik` varchar(45) DEFAULT NULL,
  `jeniskelamin` varchar(45) DEFAULT NULL,
  `suku` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `statusmenikah` varchar(45) DEFAULT NULL,
  `prodipilihan1` varchar(100) DEFAULT NULL,
  `prodipilihan2` varchar(100) DEFAULT NULL,
  `prodipilihan3` varchar(100) DEFAULT NULL,
  `prov_tempatlahir` varchar(45) DEFAULT NULL,
  `kab_tempatlahir` varchar(45) DEFAULT NULL,
  `lokasi_tempatlahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `negara_tempattinggal` varchar(45) DEFAULT NULL,
  `prov_tempattinggal` varchar(45) DEFAULT NULL,
  `kab_tempattinggal` varchar(45) DEFAULT NULL,
  `kec_tempattinggal` varchar(45) DEFAULT NULL,
  `des_tempattinggal` varchar(45) DEFAULT NULL,
  `kodepos_tempattinggal` varchar(45) DEFAULT NULL,
  `alamat_tempattinggal` varchar(45) DEFAULT NULL,
  `alamatlain_tempattinggal` varchar(45) DEFAULT NULL,
  `tinggibadan` decimal(10,0) DEFAULT NULL,
  `beratbadan` decimal(10,0) DEFAULT NULL,
  `tahunlulus_smta` year(4) DEFAULT NULL,
  `jurusan_smta` varchar(45) DEFAULT NULL,
  `jenis_smta` varchar(45) DEFAULT NULL,
  `nama_smta` varchar(45) DEFAULT NULL,
  `prov_smta` varchar(45) DEFAULT NULL,
  `alamat_smta` varchar(45) DEFAULT NULL,
  `lulus_smta` varchar(45) DEFAULT NULL,
  `nik_ayah` varchar(45) DEFAULT NULL,
  `nama_ayah` varchar(45) DEFAULT NULL,
  `pendidikan_ayah` varchar(45) DEFAULT NULL,
  `pekerjaan_ayah` varchar(45) DEFAULT NULL,
  `nik_ibu` varchar(45) DEFAULT NULL,
  `nama_ibu` varchar(45) DEFAULT NULL,
  `pendidikan_ibu` varchar(45) DEFAULT NULL,
  `pekerjaan_ibu` varchar(45) DEFAULT NULL,
  `penghasilan_ortu` varchar(45) DEFAULT NULL,
  `alamat_ortu` varchar(45) DEFAULT NULL,
  `alamatkantor_ayah` varchar(45) DEFAULT NULL,
  `provinsi_tempattinggalortu` varchar(45) DEFAULT NULL,
  `kab_tempattinggalortu` varchar(45) DEFAULT NULL,
  `kec_tempattinggalortu` varchar(45) DEFAULT NULL,
  `kodepost_tempattinggalortu` varchar(45) DEFAULT NULL,
  `nohp_ortu` varchar(45) DEFAULT NULL,
  `nama_wali` varchar(45) DEFAULT NULL,
  `pekerjaan_wali` varchar(45) DEFAULT NULL,
  `penghasilan_wali` varchar(45) DEFAULT NULL,
  `alamat_wali` varchar(45) DEFAULT NULL,
  `t_akun_idt_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_gelombang`
--

CREATE TABLE `t_gelombang` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_gelombang`
--

INSERT INTO `t_gelombang` (`id`, `gelombang`) VALUES
(1, 'Gelombang 1'),
(2, 'Gelombang 2'),
(3, 'Gelombang 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_informasi`
--

CREATE TABLE `t_informasi` (
  `idt_informasi` int(11) NOT NULL,
  `judulinformasi` varchar(45) DEFAULT NULL,
  `file` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jalurmasuk`
--

CREATE TABLE `t_jalurmasuk` (
  `id` int(11) NOT NULL,
  `jalurmasuk` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jalurmasuk`
--

INSERT INTO `t_jalurmasuk` (`id`, `jalurmasuk`) VALUES
(1, 'SNMPTN'),
(2, 'SBMPTN'),
(3, 'SESAMA'),
(4, 'LOKAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelompokujian`
--

CREATE TABLE `t_kelompokujian` (
  `id` int(11) NOT NULL,
  `kelompokujian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kelompokujian`
--

INSERT INTO `t_kelompokujian` (`id`, `kelompokujian`) VALUES
(1, 'Kelompok 1'),
(2, 'Kelompok 2'),
(3, 'Kelompok 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
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
(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0');

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
(2, 1, 2);

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `t_agenda`
--
ALTER TABLE `t_agenda`
  ADD PRIMARY KEY (`idt_agenda`);

--
-- Indeks untuk tabel `t_akun`
--
ALTER TABLE `t_akun`
  ADD PRIMARY KEY (`idt_akun`),
  ADD KEY `fk_t_akun_t_kelompokujian1_idx` (`t_kelompokujian_id`),
  ADD KEY `fk_t_akun_t_jalurmasuk1_idx` (`t_jalurmasuk_id`),
  ADD KEY `fk_t_akun_t_gelombang1_idx` (`t_gelombang_id`);

--
-- Indeks untuk tabel `t_biodata`
--
ALTER TABLE `t_biodata`
  ADD PRIMARY KEY (`idt_biodata`),
  ADD KEY `fk_t_biodata_t_akun_idx` (`t_akun_idt_akun`);

--
-- Indeks untuk tabel `t_gelombang`
--
ALTER TABLE `t_gelombang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_informasi`
--
ALTER TABLE `t_informasi`
  ADD PRIMARY KEY (`idt_informasi`);

--
-- Indeks untuk tabel `t_jalurmasuk`
--
ALTER TABLE `t_jalurmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_kelompokujian`
--
ALTER TABLE `t_kelompokujian`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `t_akun`
--
ALTER TABLE `t_akun`
  MODIFY `idt_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_biodata`
--
ALTER TABLE `t_biodata`
  MODIFY `idt_biodata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_gelombang`
--
ALTER TABLE `t_gelombang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_jalurmasuk`
--
ALTER TABLE `t_jalurmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_kelompokujian`
--
ALTER TABLE `t_kelompokujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_akun`
--
ALTER TABLE `t_akun`
  ADD CONSTRAINT `fk_t_akun_t_gelombang1` FOREIGN KEY (`t_gelombang_id`) REFERENCES `t_gelombang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t_akun_t_jalurmasuk1` FOREIGN KEY (`t_jalurmasuk_id`) REFERENCES `t_jalurmasuk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t_akun_t_kelompokujian1` FOREIGN KEY (`t_kelompokujian_id`) REFERENCES `t_kelompokujian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `t_biodata`
--
ALTER TABLE `t_biodata`
  ADD CONSTRAINT `fk_t_biodata_t_akun` FOREIGN KEY (`t_akun_idt_akun`) REFERENCES `t_akun` (`idt_akun`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
