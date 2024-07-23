-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 08:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmuseum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_author`) VALUES
(12, 'Water Boom', '2017-01-24 01:31:42', 'da0c149469b927641742b551e6e41a32.JPG', 'Administrator'),
(13, 'Persahabatan', '2017-01-24 01:31:55', 'df2c6f58f21c2668e33eb14884616793.JPG', 'Administrator'),
(14, 'The Outbond', '2017-01-24 01:32:24', 'f99736cd00bfb1d1d4b0ca72f569525a.JPG', 'Administrator'),
(15, 'Aman untuk anak', '2017-01-24 01:32:34', 'af321de26e056e0e80228207c981c5c4.JPG', 'Administrator'),
(16, 'The bulding', '2017-01-24 01:32:44', '82fdb5889ecf7cdb22ec904bea24ae9d.JPG', 'Administrator'),
(17, 'Sehat dengan Aerobic', '2017-01-24 01:33:08', '6b066eafcad4e571d132bb671a66db87.JPG', 'Administrator'),
(18, 'Kebersamaan', '2017-01-24 01:33:24', '5b2e97cff6527e4be5b5a48140ab6db7.JPG', 'Administrator'),
(19, 'View ', '2017-08-08 00:54:58', 'ab772779795e1682907bce42b1aadea9.JPG', 'Administrator'),
(20, 'Beranda Museum Adityawarman', '2020-04-05 13:54:17', 'ae4550988a0801ca5363a1a34d2fb99c.JPG', 'Administrator'),
(21, 'gfgf', '2020-07-16 13:09:23', 'cd81d0c0079c4f6799f030e9566d778b.png', 'Administrator'),
(22, 'gfgf', '2020-07-16 13:09:47', 'b9ede4b9be585b8e7788fcdecd5afd2c.png', 'Administrator'),
(25, 'lllll', '2024-07-06 19:08:16', '782a69bca28c8ac5fb7a5b60da943c6f.png', 'Administrator'),
(26, 'llllldbdfg', '2024-07-06 19:10:00', '87dcef2b291fcf8569fe5773b0065354.png', 'reno'),
(27, 'makan nih', '2024-07-06 19:35:47', '188be5a881867e7ec1b74c098d5344ce.png', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(11) NOT NULL,
  `id_tiket` varchar(15) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `nama_rek` varchar(100) NOT NULL,
  `tgl_tf` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id`, `id_tiket`, `no_rek`, `nama_rek`, `tgl_tf`, `foto`, `status`) VALUES
(7, '1597853217', '444', 'Lodang Sutikno', '2020-09-27', 'card1.png', 3),
(8, '1597852917', '123', 'rully ramadhan', '2020-08-21', 'bt.jpg', 0),
(9, '1598358148', '321', 'rani', '2020-09-04', 'bt1.jpg', 2),
(10, '1598358192', '45453', 'basamalah', '2020-08-28', 'bt2.jpg', 2),
(11, '1598358286', '45353', 'rati', '2020-08-29', 'bt3.jpg', 2),
(12, '1598358532', '346353', 'nining', '2020-08-29', 'bt4.jpg', 2),
(13, '1598358580', '345353', 'andri', '2020-08-27', 'bt5.jpg', 3),
(14, '1598358633', '123131', 'dwi martini', '2020-08-21', 'bt6.jpg', 3),
(15, '1598358673', '12112', 'lastri', '2020-08-19', 'bt7.jpg', 3),
(16, '283163861', '646465', 'darjatun', '2020-08-27', 'bt8.jpg', 3),
(17, '1598358837', '3453453', 'ratri', '2020-08-10', 'bt9.jpg', 1),
(18, '1598358873', '47645764', 'sartono', '2020-08-13', 'bt10.jpg', 1),
(19, '1598358911', '456456464', 'darmanto', '2020-08-27', 'bt11.jpg', 1),
(20, '1598358936', '53453543', ' ninfi', '2020-08-19', 'bt12.jpg', 1),
(21, '1598358969', '32424324', 'bram', '2020-08-19', 'bt13.jpg', 1),
(22, '1598359043', '54564353', 'resta', '2020-08-28', 'bt14.jpg', 2),
(23, '1598359081', '345353543', 'didi', '2020-08-25', 'bt15.jpg', 0),
(24, '1598359118', '5345353', 'rudi', '2020-08-11', 'bt16.jpg', 0),
(25, '1598359277', '2342453245432', 'dani', '2020-08-28', 'bt17.jpg', 0),
(26, '1598359320', '34534643', 'deri', '2020-08-28', 'bt18.jpg', 2),
(27, '1695262323', '1234512345', 'HAFA TARMIZI', '2023-09-21', 'images.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Administrator', '', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', '-', 'admin@admin.com', '+62 817-9851-011', '', '', '', '', 1, '1', '2016-09-03 06:07:55', 'fa66c32cacd27947b750878ce9a8eb70.jpg'),
(5, 'reno', NULL, 'L', 'reno', '41ae5118f87c9f621ef5d66c698e0a94', NULL, 'reno@reno.com', '023842842', NULL, NULL, NULL, NULL, 1, '1', '2024-07-06 19:09:26', 'b59876d277c4fb7187def9e648294b54.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `tanggal_kunjungan` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `tanggal_kunjungan`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(1, '2024-07-06 18:00:20', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `port_id` int(11) NOT NULL,
  `port_judul` varchar(200) DEFAULT NULL,
  `port_deskripsi` text DEFAULT NULL,
  `port_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `port_author` varchar(40) DEFAULT NULL,
  `port_image` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`port_id`, `port_judul`, `port_deskripsi`, `port_tanggal`, `port_author`, `port_image`) VALUES
(1, 'Kolam Ikan', NULL, '2017-07-20 03:53:59', 'Administrator', '7dfe34f9d4894f0f2e621647e2e9c29c.JPG'),
(3, 'Guwa Wisata', NULL, '2017-07-20 07:23:14', 'Administrator', '234719d2abbae42e83b333d9dd2a2731.JPG'),
(4, 'Restaurant', NULL, '2017-07-20 07:25:06', 'Administrator', '7d134d63a2c679d52d185bdb9fbfd6c0.JPG'),
(5, 'Outbond Arena', NULL, '2017-08-29 13:29:02', 'Administrator', '6a2e1a4216295e37dbdcd73b0b2a8a88.JPG'),
(6, 'Aerobic Arena', NULL, '2017-08-29 13:31:55', 'Administrator', '46c5158608bc5531f195cde8461c7dc9.JPG'),
(7, 'Water Boom', NULL, '2017-08-29 13:33:57', 'Administrator', '23fc6c5e6ea16b5995ab6b4684d1ef43.JPG'),
(8, 'Kolam Renang Anak', NULL, '2020-04-05 13:21:58', 'Administrator', '730f89863a60c419bf228aebe570cd21.JPG'),
(9, 'Kolam Renang Utama', NULL, '2020-04-05 13:55:24', 'Administrator', 'c332ee189dd2ec61528e4d8db067b6f4.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `id` int(11) NOT NULL,
  `id_tiket` varchar(50) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `jumlah` int(9) NOT NULL,
  `tottal` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pembayaran`
-- (See below for the actual view)
--
CREATE TABLE `v_pembayaran` (
`id` int(11)
,`id_tiket` varchar(50)
,`no_ktp` varchar(30)
,`nama` varchar(100)
,`jenis_kelamin` varchar(20)
,`email` varchar(100)
,`alamat` varchar(300)
,`no_telpon` varchar(15)
,`tgl` date
,`jam` time
,`jumlah` int(9)
,`tottal` bigint(12)
,`no_rek` varchar(20)
,`nama_rek` varchar(100)
,`tgl_tf` date
,`foto` varchar(100)
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `v_pembayaran`
--
DROP TABLE IF EXISTS `v_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pembayaran`  AS SELECT `a`.`id` AS `id`, `a`.`id_tiket` AS `id_tiket`, `a`.`no_ktp` AS `no_ktp`, `a`.`nama` AS `nama`, `a`.`jenis_kelamin` AS `jenis_kelamin`, `a`.`email` AS `email`, `a`.`alamat` AS `alamat`, `a`.`no_telpon` AS `no_telpon`, `a`.`tgl` AS `tgl`, `a`.`jam` AS `jam`, `a`.`jumlah` AS `jumlah`, `a`.`tottal` AS `tottal`, `b`.`no_rek` AS `no_rek`, `b`.`nama_rek` AS `nama_rek`, `b`.`tgl_tf` AS `tgl_tf`, `b`.`foto` AS `foto`, `b`.`status` AS `status` FROM (`tbl_tiket` `a` left join `tbl_pembayaran` `b` on(`a`.`id_tiket` = `b`.`id_tiket`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
