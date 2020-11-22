-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 02:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi_stmik`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `no` int(11) NOT NULL,
  `No_anggota` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Alamat` text,
  `JK` char(1) DEFAULT NULL,
  `TTL` date DEFAULT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `No_telp` bigint(14) DEFAULT NULL,
  `Jurusan` varchar(50) DEFAULT NULL,
  `Password` varchar(8) DEFAULT NULL,
  `foto` varchar(225) NOT NULL,
  `Status` varchar(8) DEFAULT NULL,
  `verifycode` int(11) NOT NULL,
  `activated` set('Y','N') NOT NULL,
  `activation_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no`, `No_anggota`, `Nama`, `Alamat`, `JK`, `TTL`, `tempat_lahir`, `Email`, `No_telp`, `Jurusan`, `Password`, `foto`, `Status`, `verifycode`, `activated`, `activation_code`) VALUES
(1, 2003103, 'Nazar Setiawan', 'Dsn.Rejasari RT02/RW02', 'L', '2001-04-02', 'Banjar', 'rahmanazar696@gmail.com', 6289521048396, 'Rekayasa Perangkat Lunak', '123', 'nazar.jpg', 'User', 0, 'Y', ''),
(2, 2003108, 'Dana Saputra', 'Bandung', 'L', '1998-01-12', 'Tasikmalaya', 'danasaputra200@gmail.com', 6287552334131, 'Multimedia', '123', '', 'Member', 0, 'Y', ''),
(3, 2003110, 'Linda Maryati', 'Cilacap', 'L', '1997-03-20', 'Bekasi', 'linabg123@gmail.com', 6278997490, 'TPHP', '123', '', 'User', 0, 'Y', ''),
(4, 2003111, 'Nurhamid', 'Ciamis', 'L', '1995-05-22', 'Ciamis', 'hamid456@gmail.com', 6289774774, 'Akuntansi', '123', '', 'Member', 0, 'Y', ''),
(5, 2003113, 'Siska nurhasanah', 'Bandung', 'P', '1995-05-08', 'Balikpapan', 'siska99@gmail.com', 62823446839, 'TOSM', '123', '', 'Member', 0, 'Y', ''),
(6, 2003114, 'Misngad NUrhasan', 'Banjar', 'L', '1994-02-16', 'Banjar', 'misngad789@gmail.com', 62877767578, 'TKR', '123', '', 'User', 0, 'Y', ''),
(7, 2003115, 'Putri Lestafauzi', 'Ambon', 'P', '1999-07-16', 'Wanareja', 'putri666@gmail.com', 62836746589, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(8, 2003117, 'Samid Nurhamid', 'Papua', 'L', '1992-04-04', 'Cilacap', 'samid222@gmail.com', 623486954, 'TPHP', '123', '', 'Member', 0, 'Y', ''),
(9, 2003118, 'Bayu sos', 'Jakarta', 'L', '1994-01-02', 'Majenang', 'abgtua123@gmail.com', 62876678890, 'TPHP', '123', '', 'Member', 0, 'Y', ''),
(10, 2003120, 'Samin', 'Papua', 'L', '1999-03-09', 'Ciamis', 'Samin12@gmail.com', 6289768234563, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(11, 2003121, 'Barjo', 'Palangkaraya', 'L', '1995-05-01', 'Palangkaraya', 'Barjo25@gmail.com', 6287896356213, 'RPL', '123', '', 'User', 0, 'Y', ''),
(12, 2003122, 'Neng Asti', 'Bandung', 'P', '1995-02-09', 'Bandung', 'astinn@gmail.com', 6287325637823, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(13, 2003126, 'Eyih Sukayih', 'Jakarta', 'P', '1996-07-22', 'Jakarta', 'Eyey99@gmial.com', 6279876567343, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(14, 2003128, 'Panpan', 'Wonogiri', 'L', '1997-11-09', 'Wonogiri', 'Pan1933@gmail.com', 6287789876786, 'RPL', '123', '', 'User', 0, 'Y', ''),
(15, 2003129, 'Munaroh', 'Gombong', 'P', '1997-06-12', 'Bandar Lampung', 'Munar15@gmail.com', 6289765362765, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(16, 2003131, 'Martin', 'Papua', 'L', '1999-09-09', 'Purwokerto', 'SImar13@gmail.com', 6298765675342, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(17, 2003133, 'Darno', 'Surabaya', 'L', '1996-03-07', 'Surabaya', 'Darno98@gmail.com', 6289786765456, 'TKJ', '123', '', 'User', 0, 'Y', ''),
(18, 2003134, 'Painah', 'Malang', 'P', '1997-08-23', 'Semarang', 'Pain34@gmail.com', 627898876678, 'TKJ', '123', '', 'Member', 0, 'Y', ''),
(19, 2003135, 'Painem', 'Malangbong', 'P', '1993-02-14', 'Balikpapan', 'inem99@gmail.com', 628897786098, 'Multimedia', '123', '', 'User', 0, 'Y', ''),
(20, 2003136, 'Tukijo', 'Nagreg', 'L', '0000-00-00', '', 'Tuki66@gmail.com', 98909987909, 'Multimedia', '123', '', 'Member', 0, 'Y', ''),
(21, 2003137, 'Lani', 'Lamongan', 'P', '0000-00-00', '', 'Laniuy33@gmail.com', 98908987888, 'TKJ', '123', '', 'User', 0, 'Y', ''),
(22, 2003140, 'Narti', 'Majenang', 'P', '0000-00-00', '', 'narnar56@gmail.com', 86345673456, 'Multimedia', '123', '', 'User', 0, 'Y', ''),
(23, 2003141, 'Sarjo', 'Kuningan', 'L', '0000-00-00', '', 'Sarjo1933@gmail.com', 98786654567, 'TKJ', '123', '', 'Member', 0, 'Y', ''),
(24, 2003142, 'Sari Wangi', 'Lampung', 'P', '0000-00-00', '', 'SariSari1@gmail.com', 98897890423, 'Multimedia', '123', '', 'User', 0, 'Y', ''),
(25, 2003144, 'Wati', 'Klaten', 'P', '0000-00-00', '', 'wati987@gmail.com', 98765324541, 'RPL', '123', '', 'User', 0, 'Y', ''),
(26, 2003145, 'Rara', 'Jonggol', 'P', '0000-00-00', '', 'rara19@gmail.com', 987788965634, 'Multimedia', '123', '', 'Member', 0, 'Y', ''),
(27, 2003146, 'rere', 'Jonggol', 'P', '0000-00-00', '', 'rere85@gmail.com', 98567324567, 'Multimedia', '123', '', 'User', 0, 'Y', ''),
(28, 2003147, 'Reza', 'Ciamis', 'P', '0000-00-00', '', 'Rezazzz!@gmail.com', 987892364567, 'RPL', '123', '', 'Member', 0, 'Y', ''),
(29, 2003148, 'Pandu Restu Fauzi', 'Banjar', 'L', '0000-00-00', '', 'Fauzirestupandu19@gmail.com', 62895363896744, 'Rekayasa Perangkat Lunak', '19082001', 'pandu.jpg', 'User', 2191, 'Y', ''),
(30, 2003149, 'Juliani', 'Maluku', 'P', '0000-00-00', '', 'Juli6@gmail.com', 98789678456, 'TKJ', '123', '', 'Member', 0, 'Y', ''),
(31, 2003150, 'Juliana', 'Maluku', 'P', '0000-00-00', '', 'Ana33@gmail.com', 98789678456, 'TKJ', '123', '', 'User', 0, 'Y', ''),
(32, 2003151, 'Andre', 'Solo', 'L', '0000-00-00', '', 'Andre26@gmail,com', 98789673489, 'TKJ', '123', '', 'Member', 0, 'Y', ''),
(33, 2003152, 'Andri', 'Solo', 'P', '0000-00-00', '', 'Andri90@gmail.com', 987893674378, 'Multimedia', '123', '', 'User', 0, 'Y', ''),
(34, 2003153, 'aziz', 'Cikawung', 'L', '0000-00-00', '', 'aziz@gmail.com', 6298990543, 'Teknik Informatika', '12345678', '5abcb583395a1-', 'User', 0, 'Y', ''),
(35, 2003156, 'Agus Kurniadin Khaer', 'Dsn.Sukahurip RT02/RW01', 'L', '2001-08-02', 'Cilacap', 'aguskkhaer@gmail.com', 8999533158, 'Teknik Informatika', 'aza123', '5ac730633b321-agus.jpg', 'User', 7663, 'Y', 'd61478a469c6fa280bb53c72760336fc'),
(38, 2003157, 'Samini', 'Gombong', 'P', '0000-00-00', '', 'samin18@gmail.com', 89768564345, 'Teknik Jaringan', 'samini18', '', 'Member', 0, 'Y', ''),
(39, 2003158, 'Saminul', 'Garut', 'P', '0000-00-00', '', 'Inul28@gmail.com', 89767897567, 'Multimedia', 'inulinul', '', 'Member', 0, 'Y', ''),
(40, 2003159, 'Anjas', 'Tangerang', 'L', '0000-00-00', '', 'Anjas29@gmail.com', 87897654567, 'Multimedia', 'anjas29', '', 'Member', 0, 'Y', ''),
(41, 2003160, 'Slamet', 'Majenang', 'L', '0000-00-00', '', 'Slamet30@gmail.com', 86789654567, 'Teknik Jaringan', 'Slamet30', '', 'Member', 0, 'Y', ''),
(42, 2003161, 'Sandoro', 'Malang', 'L', '0000-00-00', '', 'Sandoro123@gmail.com', 87897878987, 'Multimedia', 'sandoro1', '', 'Member', 0, 'Y', ''),
(43, 2003162, 'Alex Bayem', 'Karawang', 'L', '0000-00-00', '', 'Bayemenak1@gmail.com', 87897456345, 'Teknik Jaringan', 'Bayem280', '', 'Member', 0, 'Y', ''),
(44, 2003163, 'Putri Sinden', 'Yogyakarta', 'P', '0000-00-00', '', 'Putrisinden12@gmail.com', 87897456235, 'Teknik Jaringan', 'sinden12', '', 'Member', 0, 'Y', ''),
(45, 2003164, 'Putra Dewa', 'Surabaya', 'L', '0000-00-00', '', 'Dewa19@gmail.com', 84567423456, 'Multimedia', 'dewa19', '', 'Member', 0, 'Y', ''),
(46, 2003165, 'Purbaling Ling', 'Purbalingga', 'P', '0000-00-00', '', 'Purbalingling15@gmail.com', 81234567890, 'Multimedia', 'eling50', '', 'Member', 0, 'Y', ''),
(48, 4021812, 'Sarah Olivia Santoso', 'Bekasi', 'P', '2018-04-03', 'Bekasi', 'sarahviloid03@gmail.com', 85234787, 'Multimedia', 'asd', 'female.png', 'User', 0, 'N', '5afef2b451d4c79247b9ba271f96e84f'),
(49, 6597782, 'Roarteam', 'Jepang', 'L', '1998-02-28', 'Bandung', 'roar123@gmail.com', 89678567453, 'Multimedia', '12345678', '5ae19035f3786-bertiga.jpg', 'User', 0, 'Y', 'be238cd3fd44616a9e672dca1b0aee76'),
(50, 2175557, 'Teuku Wisnu', 'Tasikmalaya', 'L', '1995-05-02', 'Banjar', 'fizar1987@gmail.com', 89678567453, 'Teknik Informatika', 'qwerty', 'male.png', 'User', 0, 'Y', 'c57bc50cb874c4ebb9f76f1a31c8dee8');

-- --------------------------------------------------------

--
-- Table structure for table `data_simpanan`
--

CREATE TABLE `data_simpanan` (
  `NO` int(11) NOT NULL,
  `No_Simpanan` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Tanggal_Simpanan` date NOT NULL,
  `Besar_Simpanan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_simpanan`
--

INSERT INTO `data_simpanan` (`NO`, `No_Simpanan`, `Nama`, `Tanggal_Simpanan`, `Besar_Simpanan`) VALUES
(1, 100284, 'Ganda Permana', '2010-02-02', 50000),
(3, 103293, 'Ahmad Jaelani', '2010-02-02', 400000),
(4, 333021, 'Agus Kurniadin Khaer', '2010-02-02', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` int(11) NOT NULL,
  `no_user` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `member` varchar(225) DEFAULT NULL,
  `jumlah_pinjaman` bigint(20) DEFAULT NULL,
  `tanggal_pinjaman` datetime DEFAULT NULL,
  `bunga_pertahun` varchar(5) DEFAULT NULL,
  `tenor` varchar(9) DEFAULT NULL,
  `biaya_administrasi` bigint(20) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `no_user`, `user`, `member`, `jumlah_pinjaman`, `tanggal_pinjaman`, `bunga_pertahun`, `tenor`, `biaya_administrasi`, `total`, `keterangan`) VALUES
(17425302, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000, '2018-04-04 15:07:03', '2,5', '6 Bulan', 100000, 150000, 'buat peralatan bengkel'),
(18265248, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000, '2018-04-04 15:07:25', '2,5', '6 Bulan', 100000, 150000, 'buat peralatan bengkel'),
(56241669, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000000, '2018-04-04 15:09:39', '2', '6 Bulan', 10000000, 60000000, 'apa aja'),
(94617289, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000000, '2018-04-04 15:11:06', '2', '6 Bulan', 10000000, 60000000, 'apa aja'),
(49048796, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000000, '2018-04-04 15:11:43', '2', '6 Bulan', 10000000, 60000000, 'apa aja'),
(95441120, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000, '2018-04-04 15:12:54', '2', '6 Bulan', 10000000, 10050000, 'apa aja'),
(18287781, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 50000, '2018-04-04 15:15:38', '2', '6 Bulan', 10000000, 10050000, 'apa aja'),
(62885308, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 1000, '2018-04-05 11:02:21', '2', '12 Bulan', 100000, 101000, ''),
(71349502, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 1000, '2018-04-05 11:04:41', '2', '12 Bulan', 100000, 101000, ''),
(42046678, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 1000, '2018-04-05 11:43:31', '2,5', '6 Bulan', 100000, 101000, ''),
(77006342, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 1000, '2018-04-05 12:17:09', '2,5', '6 Bulan', 100000, 101000, ''),
(16774888, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 1000000000, '2018-04-06 13:33:25', '2,5', '6 Bulan', 20000000, 1020000000, ''),
(25595391, 2003156, 'Agus Kurniadin Khaer', 'Samin', 111111, '2018-04-07 09:40:49', '1,5', '48 Bulan', 2000, 113111, 'zzz'),
(59369457, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', 800000, '2018-04-07 10:58:42', '2', '12 Bulan', 100000, 900000, 'buat belanja'),
(34835154, 2003148, 'Pandu Restu Fauzi', 'Rara', 500000, '2018-04-09 09:45:37', '2,5', '6 Bulan', 100000, 600000, 'cece'),
(43975372, 2003148, 'Pandu Restu Fauzi', 'Rara', 100000, '2018-04-09 09:48:42', '2.3', '48 Bulan', 100000, 200000, 'ccmmocmo'),
(78711036, 2003103, 'Nazar Setiawan', 'Tarmo', 400000, '2018-04-09 09:54:45', '1,5', '12 Bulan', 10000, 410000, 'Modal usaha berdagang'),
(24385825, 2003148, 'Pandu Restu Fauzi', 'Dana Saputra', 150000, '2018-04-11 08:25:52', '2,5', '6 Bulan', 100000, 250000, 'Modal usaha berdagang'),
(31087341, 2175557, 'Teuku Wisnu', 'Dana Saputra', 200000, '2018-05-11 17:58:37', '1,5', '6 Bulan', 100000, 300000, 'Untuk usaha dagang');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `no` int(11) NOT NULL,
  `no_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `member` varchar(100) NOT NULL,
  `saldo` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`no`, `no_user`, `nama_user`, `member`, `saldo`, `tanggal`) VALUES
(1, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', 730000, '2018-04-04 15:02:31'),
(2, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 700000, '2018-04-05 10:33:04'),
(3, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 780000, '2018-04-05 11:23:03'),
(4, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', 779000, '2018-04-05 12:17:09'),
(5, 2003153, 'Agus Kurniadin Khaer', 'Bayu sos', 720000, '2018-04-06 13:43:18'),
(6, 2003156, 'Agus Kurniadin Khaer', 'Samin', 325000, '2018-04-07 09:39:47'),
(7, 2003156, 'Agus Kurniadin Khaer', 'Samin', 213889, '2018-04-07 09:40:49'),
(8, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', 850000, '2018-04-07 10:56:35'),
(9, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', 50000, '2018-04-07 10:58:42'),
(10, 2003148, 'Pandu Restu Fauzi', 'Rara', 350000, '2018-04-09 09:44:23'),
(11, 2003148, 'Pandu Restu Fauzi', 'Rara', 700000, '2018-04-09 09:44:29'),
(12, 2003148, 'Pandu Restu Fauzi', 'Rara', 200000, '2018-04-09 09:45:37'),
(13, 2003148, 'Pandu Restu Fauzi', 'Rara', 100000, '2018-04-09 09:48:42'),
(14, 2003103, 'Nazar Setiawan', 'Tarmo', 450000, '2018-04-09 09:53:37'),
(15, 2003103, 'Nazar Setiawan', 'Tarmo', 50000, '2018-04-09 09:54:45'),
(17, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', 450000, '2018-04-10 12:18:34'),
(18, 2003148, 'Pandu Restu Fauzi', 'Dana Saputra', 250000, '2018-04-11 08:22:44'),
(19, 2003148, 'Pandu Restu Fauzi', 'Dana Saputra', 100000, '2018-04-11 08:25:52'),
(20, 2003148, 'Pandu Restu Fauzi', 'Samin', 8, '2018-04-11 10:50:28'),
(21, 2003156, 'Agus Kurniadin Khaer', 'Andre', 42000, '2018-04-12 14:19:18'),
(22, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', 530000, '2018-04-16 13:35:10'),
(23, 2175557, 'Teuku Wisnu', 'Dana Saputra', 100300000, '2018-05-11 17:56:36'),
(24, 2175557, 'Teuku Wisnu', 'Dana Saputra', 100100000, '2018-05-11 17:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `simpan`
--

CREATE TABLE `simpan` (
  `no_simpan` int(11) NOT NULL,
  `no_user` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `member` varchar(225) DEFAULT NULL,
  `tanggal_simpanan` datetime NOT NULL,
  `simpanan_pokok` bigint(20) DEFAULT NULL,
  `simpanan_wajib` bigint(20) DEFAULT NULL,
  `simpanan_sukarela` bigint(20) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpan`
--

INSERT INTO `simpan` (`no_simpan`, `no_user`, `user`, `member`, `tanggal_simpanan`, `simpanan_pokok`, `simpanan_wajib`, `simpanan_sukarela`, `total`) VALUES
(39239481, 2003153, 'Agus Kurniadin Khaer', 'Putri Lestafauzi', '2018-04-04 15:02:31', 200000, 500000, 30000, 730000),
(17339144, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', '2018-04-05 10:33:04', 400000, 200000, 100000, 700000),
(92065963, 2003153, 'Agus Kurniadin Khaer', 'Dana Saputra', '2018-04-05 11:23:03', 10000, 20000, 50000, 80000),
(32351882, 2003153, 'Agus Kurniadin Khaer', 'Bayu sos', '2018-04-06 13:43:18', 500000, 200000, 20000, 720000),
(75757773, 2003156, 'Agus Kurniadin Khaer', 'Samin', '2018-04-07 09:39:47', 200000, 100000, 25000, 325000),
(38725506, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', '2018-04-07 10:56:35', 200000, 500000, 150000, 850000),
(61921783, 2003148, 'Pandu Restu Fauzi', 'Rara', '2018-04-09 09:44:23', 200000, 100000, 50000, 350000),
(43997639, 2003148, 'Pandu Restu Fauzi', 'Rara', '2018-04-09 09:44:29', 200000, 100000, 50000, 350000),
(80021844, 2003103, 'Nazar Setiawan', 'Tarmo', '2018-04-09 09:53:37', 200000, 100000, 150000, 450000),
(76047731, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', '2018-04-10 12:18:34', 100000, 100000, 200000, 400000),
(94235287, 2003148, 'Pandu Restu Fauzi', 'Dana Saputra', '2018-04-11 08:22:44', 100000, 100000, 50000, 250000),
(88828674, 2003156, 'Agus Kurniadin Khaer', 'Andre', '2018-04-12 14:19:18', 10000, 2000, 30000, 42000),
(16916068, 2003156, 'Agus Kurniadin Khaer', 'Dana Saputra', '2018-04-16 13:35:10', 50000, 20000, 10000, 80000),
(46580022, 2175557, 'Teuku Wisnu', 'Dana Saputra', '2018-05-11 17:56:36', 200000, 100000, 100000000, 100300000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no`,`No_anggota`,`Email`);

--
-- Indexes for table `data_simpanan`
--
ALTER TABLE `data_simpanan`
  ADD PRIMARY KEY (`NO`,`No_Simpanan`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `data_simpanan`
--
ALTER TABLE `data_simpanan`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
