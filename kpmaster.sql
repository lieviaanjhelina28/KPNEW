-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 06:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_dosen`
--

CREATE TABLE `form_dosen` (
  `id_dosen` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `NIK` varchar(9) NOT NULL,
  `kebutuhan` text NOT NULL,
  `keperluan` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `file_admin` varchar(50) NOT NULL,
  `petugas` varchar(30) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_dosen`
--

INSERT INTO `form_dosen` (`id_dosen`, `user_id`, `nama_dosen`, `NIK`, `kebutuhan`, `keperluan`, `file`, `file_admin`, `petugas`, `status`, `created_at`, `updated_at`) VALUES
(1, 66, 'lala', '410100566', 'Surat Tugas', 'Tugas Negara', '24-124-3-PB.pdf', '13298-37227-1-PB.pdf', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 66, 'lala', '410100566', 'Surat Tugas', 'iiiii', '5404-16505-1-PB.pdf', '', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form_mahasiswa`
--

CREATE TABLE `form_mahasiswa` (
  `id_mhs` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `NPM` varchar(12) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `kebutuhan` text NOT NULL,
  `keperluan` text NOT NULL,
  `tgl_input` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` int(1) NOT NULL,
  `file` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_mahasiswa`
--

INSERT INTO `form_mahasiswa` (`id_mhs`, `user_id`, `nama_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `NPM`, `semester`, `kebutuhan`, `keperluan`, `tgl_input`, `tgl_selesai`, `status`, `file`, `created_at`, `updated_at`) VALUES
(1, 69, 'Lievia Anjhelina Maharani', 'Bogor', '1998-08-28', '161105150552', '8', 'Transkrip Nilai atau FHS Semester', 'Sidang Skripsi', '2020-08-03', '2020-08-05', 1, '13298-37227-1-PB.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 69, 'Lievia Anjhelina Maharani', 'Bogor', '1998-08-28', '161105150552', '8', 'Dokumen Sidang Skripsi', 'SKRIPSI', '2020-08-03', '2020-08-05', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `id_memo` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id_memo`, `user_id`, `nama`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(28, 68, 'oliv', '<p>hhhh</p>', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id_notif` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `mhs_id` int(1) DEFAULT NULL,
  `dosen_id` int(1) DEFAULT NULL,
  `pesan` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id_notif`, `user_id`, `nama`, `mhs_id`, `dosen_id`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(216, 66, 'lala', NULL, 1, 'Surat Tugas', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 69, 'Lievia Anjhelina Maharani', 1, NULL, 'Transkrip Nilai atau FHS Semester', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 69, 'Lievia Anjhelina Maharani', 2, NULL, 'Dokumen Sidang Skripsi', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 66, 'lala', NULL, 2, 'Surat Tugas', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nama_surat`, `role_id`, `created_at`, `updated_at`) VALUES
(6, 'Nota Dinas', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Surat Tugas', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Permintaan Berkas', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat2`
--

CREATE TABLE `surat2` (
  `id_suratmhs` int(11) NOT NULL,
  `surat_mhs` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat2`
--

INSERT INTO `surat2` (`id_suratmhs`, `surat_mhs`, `created_at`, `updated_at`) VALUES
(1, 'Transkrip Nilai atau FHS Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Surat Keterangan Aktif', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Surat Penelitian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Dokumen Kerja Praktik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Dokumen Kolokium', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Dokumen Sidang Skripsi', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `NPM` varchar(12) DEFAULT NULL,
  `NIK` varchar(9) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `aktif` int(1) NOT NULL,
  `dibuat` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `NPM`, `NIK`, `password`, `role_id`, `aktif`, `dibuat`, `created_at`, `updated_at`) VALUES
(66, 'lala', 'lala28nana@gmail.com', '', '410100566', '$2y$10$VIA0pS2hZMST4r1.uL32duFfkh/jRu0VRAtTcTpgF83mUuKYk.cP.', 3, 1, 1596118255, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'anjhel', 'lieviaaaaaanm@gmail.com', '', '', '$2y$10$AECZ3MX/g.fr3ruSXlqTY.xoKtUV6XmR7lCgUWeY6nQwlwkUNuF/q', 1, 1, 1596118471, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'oliv', 'oolive697@gmail.com', '', '', '$2y$10$ho2cqZoxhKl3x6XpZc5wHuCTqrc20a0F1HnRgEUu7Qw5T6Ucx/6VO', 1, 1, 1596118654, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Lievia Anjhelina Maharani', 'lieviaanjhelinam28@gmail.com', '161105150552', '', '$2y$10$CllvmnM.pKidFSDy6mPKkuzmENJzH1UrJLnfnDwEhfQKNPhkg08MK', 2, 1, 1596119045, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Shavia Huriah Arumdapta', 'shaviahuriyaharumdapta@gmail.com', '201105150556', '', '$2y$10$i4HXvQ/FxOSRXQXjSerYZOM/BwZXfF73GiHf8ugIb7xTnMwv4CU0e', 2, 1, 1596386180, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id_access` int(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id_access`, `role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id_menu` int(1) NOT NULL,
  `menu` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id_menu`, `menu`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Dosen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Data Selesai', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(1) NOT NULL,
  `role` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Dosen', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id_sub` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `title` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `aktif` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id_sub`, `menu_id`, `title`, `url`, `icon`, `aktif`, `created_at`, `updated_at`) VALUES
(2, 1, 'Form Mahasiswa', 'admin/form_mahasiswa', 'fas fa-fw fa-folder ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Form Dosen', 'admin/form_dosen', 'fas fa-fw fa-folder ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'Halaman Awal', 'user/h_mhs', 'fas fa-fw fa-user', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 'Input Form', 'user/mahasiswa', 'fas fa-fw fa-user ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'Halaman Awal', 'User/h_dosen', 'fas fa-fw fa-user', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 'Input Form', 'user/dosen', 'fas fa-fw fa-user', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 'Mahasiswa', 'admin/selesaimhs', 'fas fa-fw fa-folder-open', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 'Dosen', 'admin/selesaidosen', 'fas fa-fw fa-folder-open', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(128) NOT NULL,
  `dibuat` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_dosen`
--
ALTER TABLE `form_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `form_mahasiswa`
--
ALTER TABLE `form_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id_memo`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `mhs_id` (`mhs_id`) USING BTREE;

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surat2`
--
ALTER TABLE `surat2`
  ADD PRIMARY KEY (`id_suratmhs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id_access`),
  ADD KEY `role_id` (`role_id`,`menu_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_dosen`
--
ALTER TABLE `form_dosen`
  MODIFY `id_dosen` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `form_mahasiswa`
--
ALTER TABLE `form_mahasiswa`
  MODIFY `id_mhs` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id_memo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id_notif` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `surat2`
--
ALTER TABLE `surat2`
  MODIFY `id_suratmhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id_access` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id_menu` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id_sub` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_dosen`
--
ALTER TABLE `form_dosen`
  ADD CONSTRAINT `form_dosen_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `form_mahasiswa`
--
ALTER TABLE `form_mahasiswa`
  ADD CONSTRAINT `form_mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `memo`
--
ALTER TABLE `memo`
  ADD CONSTRAINT `memo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `notif_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id_menu`);

--
-- Constraints for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
