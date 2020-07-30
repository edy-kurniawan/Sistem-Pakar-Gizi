-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar_gizi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailkonsul`
--

CREATE TABLE `detailkonsul` (
  `idkonsul` varchar(10) NOT NULL,
  `idgejala` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailkonsul`
--

INSERT INTO `detailkonsul` (`idkonsul`, `idgejala`) VALUES
('1', 'G01'),
('1', 'G02'),
('2', 'G08'),
('2', 'G10'),
('3', 'G01'),
('3', 'G03'),
('3', 'G06'),
('3', 'G07'),
('3', 'G08'),
('3', 'G09'),
('nana', 'G002'),
('nana', 'G001'),
('Marinem', 'G001'),
('Marinem', 'G002');

-- --------------------------------------------------------

--
-- Table structure for table `tblgejala`
--

CREATE TABLE `tblgejala` (
  `idgejala` varchar(5) NOT NULL,
  `namagejala` varchar(150) NOT NULL,
  `tingkatgizi` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgejala`
--

INSERT INTO `tblgejala` (`idgejala`, `namagejala`, `tingkatgizi`) VALUES
('G001', 'Mengalami Penurunan Berat Badan (BB) ', 10),
('G002', 'Menurunnya Napsu Makan', 15),
('G003', 'Kesulitan Mengunyah', 20),
('G004', 'Badan Terlihat Kurus', 25),
('G005', 'Bertambahnya Napsu Makan', 30),
('G006', 'Penambahan Berat Badan', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tblgejala_gizi`
--

CREATE TABLE `tblgejala_gizi` (
  `id` int(3) NOT NULL,
  `idgejala` varchar(5) NOT NULL,
  `id_tingkatgizi` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgejala_gizi`
--

INSERT INTO `tblgejala_gizi` (`id`, `idgejala`, `id_tingkatgizi`) VALUES
(1, 'G001', 'T001'),
(2, 'G002', 'T001'),
(3, 'G003', 'T001'),
(4, 'G004', 'T001'),
(9, 'G006', 'T003'),
(5, 'G003', 'T002'),
(6, 'G005', 'T002'),
(7, 'G003', 'T003'),
(8, 'G005', 'T003');

-- --------------------------------------------------------

--
-- Table structure for table `tblkonsultasi`
--

CREATE TABLE `tblkonsultasi` (
  `id` int(5) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `id_pasien` varchar(9) NOT NULL,
  `idtingkatgizi` varchar(11) NOT NULL,
  `persen` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblkonsultasi`
--

INSERT INTO `tblkonsultasi` (`id`, `tgl`, `id_pasien`, `idtingkatgizi`, `persen`) VALUES
(1, '16/06/2016', 'kiki', 'P01', 40),
(3, '09/03/2017', 'dodi', 'P01', 43),
(4, '29/07/2020', 'nana', 'Kekurangan', 25),
(5, '30/07/2020', 'Marinem', 'Kekurangan', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tblsolusi`
--

CREATE TABLE `tblsolusi` (
  `idsolusi` varchar(5) NOT NULL,
  `keterangansolusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblsolusi`
--

INSERT INTO `tblsolusi` (`idsolusi`, `keterangansolusi`) VALUES
('S001', 'Solusi Kekurangan\r\nSolusi Yang Di anjurkan :\r\n1. Energi tinggi, yaitu 40-45% Kkal-kg BB.\r\n2. Protein tinggi, yaitu 2,0-2,5g/kg BB.\r\n3. Lemak cukup, yaitu 10-25% dari kebutuhan energi total.\r\n4. Karbohidrat cukup, yaitu sisa dari kebutuhan energi total.\r\n5. Vitamin dan mineral cukup, sesuai kebutuhan normal.\r\n6.  Makanan diberikan dalam bentuk mudah cerna.\r\nMakan Yang Di Anjurkan :\r\n1. Nasi, roti, mie, macaroni, dan hasil olah tepung-tepungan lain, seperti cake, tarcis, pudding, pastry, dodol, dan ubi.\r\n2. Daging sapi, ayam, iksn, telur, susu, dan hasil olah seperti keju, es cream dan yogurt.\r\n3. Semua jenis kacang-kacangan dan hasil olahnya, seperti tempe, tahu.\r\n4. Semua jenis sayuran, terutama jenis B, seperti Bayam, Buncis, Daun singkong, Kacang pajang, Labu siam, dan wortel direbus, di kukus, dan ditumis.\r\n5. Semua jenis buah segar.\r\nMakanan Yang Tidak Dianjurkan :\r\n1. Makanan terlalu banyak minyak atau kelapa/santan kental.\r\n2. Dimasak dengan banyak minyak atau kelapa/santan kental.\r\n3. Minuman rendah energi.\r\n4.  Bumbu yang tajam, sepeti cabai dan merica.\r\n'),
('S002', 'Solusi Cukup\r\nSolusi Yang Di anjurkan :\r\n1. Energi sesuai kebutuhan normal lansia, sehat dalam keadaan istirahat.\r\n2. Protein 10-15% dari kebutuhan energi total.\r\n3. Lemak 10-25% dari kebutuhan energi total.\r\n4. Karbohidrat 60-75% dari kebutuhan energi total.\r\n5. Cukup mineral, vitamin, dan kaya serat.\r\n6. Makanan tidak merangsang saluran cerna.\r\n7. Makanan sehari-hari beraneka ragam dan bervariasi.\r\nMakan Yang Di Anjurkan :\r\n1. Semua jenis sayuran terdiri dari campuran sayuran kacang-kacangan, sayuran daun hijau atau sayuran warna kuning, dan sayuran lain.\r\n2. Semua jenis buah-buahan yang segar.\r\n3. Hindari yang berbau santan kental, dan makanan yang berminyak.\r\nMakanan Yang Tidak Dianjurkan :\r\nMakanan yang tidak dianjurkan untuk lansia. Makanan biasa adalah makanan yang merangsang, seperti makanan yang berlemak tinggi, terlalu manis, terlalu berbumbu, dan minuman yang mengandung alkohol.\r\n'),
('S003', 'Solusi Kelebihan\r\nSolusi Yang Di anjurkan :\r\n1.	Energi rendah, ditujukan untuk menurunkan berat badan. Pengurangan dilakukan secara bertahap dengan mempertimbangkan kebiasaan makan dari segi kualitas maupun kuantitas. Untuk menurunkan berat badan sebanyak 1/2-1kg/minggu, asupan energi dikurangi sebanyak 500-1000 kkal/hari dari kebutuhan normal. Perhitungan kebutuhan energi normal dilakukan berdasarkan berat badan ideal.\r\n2.	Protein sedikit lebih tinggi, yaitu 1-1,5 g/kg/BB/hari atau 15 -20% dari kebutuhan energi total.\r\n3.	Lemak sedang yaitu 20-25% dari kebutuhan energi total. Usahakan sumber lemak berasal dari makanan yang mengandung lemak tidak jenuh ganda yang kadarnya tinggi.\r\n4.	Karbohidrat sedikit lebih rendah, yaitu 55-65% dari kebutuhan energi total. Gunakan lebih banyak sumber karbohidrat kompleks untuk memberikan rasa kenyang dan mencegah konstipasi. Sebagai alternatif, bisa digunakan gula buatan sebagai pengganti gula sederhana.\r\n5.	Vitamin dan mineral cukup sesuai dengan kebutuhan.\r\n6.	Dianjurkan untuk 3 kali makan utama dan 2-3 kali makan selingan.\r\n7.	Cairan cukup, yaitu 8-10 gelas/hari.\r\nMakan Yang Di Anjurkan :\r\n1. Nasi, jagung, ubi, singkong, talas, kentang, dan sereal.\r\n2. Daging tidak berlemak, ayam tanpa kulit, ikan, telur, daging asap, susu dan keju rendah lemak.\r\n3. Tempe, tahu, susu kedelai, kacang-kacangan yang diolah tanpa digoreng atau dengan santan kental.\r\n4. Sayuran yang mengandung banyak serat dan diolah tanpa santan kental berupa sayuran rebus, tumis, dengan santan encer atau lalapan.\r\n5. Semua buah-buahan terutama yang banyak mengandung serat.\r\nMakan Yang Tidak Di Anjurkan :\r\n1. Mengurangi gula pasir, gula merah, sirup, kue yang manis, dan gurih.\r\n2. Daging yang berlemak, daging kambing, daging yang diolah dengan santan kental, di goring, jeroan, susu full cream, susu kental manis.\r\n3. Kacang-kacangan yang diolah dengan cara menggoreng atau dengan santan kental.\r\n4. Sayuran yang sedikit mengandung serat dan yang dimasak dengan santan kental.\r\n5. Hindari buah durian, alvokad, manisan buah-buahan, buah yang diolah dengan gula dan susu full cream atau susu kental manis.\r\n6. Hindari minyak kelapa, kelapa, dan santan. \r\n'),
('S005', 'Mumet Om');

-- --------------------------------------------------------

--
-- Table structure for table `tbltingkatgizi_solusi`
--

CREATE TABLE `tbltingkatgizi_solusi` (
  `id` int(3) NOT NULL,
  `idtingkatgizi` varchar(5) NOT NULL,
  `idsolusi` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltingkatgizi_solusi`
--

INSERT INTO `tbltingkatgizi_solusi` (`id`, `idtingkatgizi`, `idsolusi`) VALUES
(1, 'T001', 'S001'),
(2, 'T002', 'S002'),
(3, 'T003', 'S003');

-- --------------------------------------------------------

--
-- Table structure for table `tbltingkat_gizi`
--

CREATE TABLE `tbltingkat_gizi` (
  `id_tingkatgizi` varchar(5) NOT NULL,
  `nama_tingkatgizi` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltingkat_gizi`
--

INSERT INTO `tbltingkat_gizi` (`id_tingkatgizi`, `nama_tingkatgizi`) VALUES
('T001', 'Kekurangan'),
('T002', 'Cukup'),
('T003', 'Kelebihan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `umur` varchar(4) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `tinggi_badan` varchar(4) NOT NULL,
  `berat_badan` varchar(4) NOT NULL,
  `jenis_kondisi` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama_lengkap`, `umur`, `jk`, `level`, `tinggi_badan`, `berat_badan`, `jenis_kondisi`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '25', '', 'admin', '0', '0', ''),
('widya', '202cb962ac59075b964b07152d234b70', 'Widya', '22', 'Perempuan', 'user', '0', '0', ''),
('cici', '702e4946e6db9b7a74b921fe85e83f32', 'cici', '23', 'Perempuan', 'user', '0', '0', ''),
('kiki', '0d61130a6dd5eea85c2c5facfe1c15a7', 'kiki', '35', 'Laki-laki', 'user', '0', '0', ''),
('dodi', 'dc82a0e0107a31ba5d137a47ab09a26b', 'dodi', '35', 'Laki-laki', 'user', '0', '0', ''),
('Marinem', '8ca8706c8effd3ca6ddb41f8a47ee19c', 'Marinem', '83', 'Perempuan', 'user', '39', '149', 'Sehat'),
('nana', '827ccb0eea8a706c4c34a16891f84e7b', 'nana', '87', 'Perempuan', 'user', '156', '56', 'Sehat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgejala`
--
ALTER TABLE `tblgejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `tblgejala_gizi`
--
ALTER TABLE `tblgejala_gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblkonsultasi`
--
ALTER TABLE `tblkonsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsolusi`
--
ALTER TABLE `tblsolusi`
  ADD PRIMARY KEY (`idsolusi`);

--
-- Indexes for table `tbltingkatgizi_solusi`
--
ALTER TABLE `tbltingkatgizi_solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltingkat_gizi`
--
ALTER TABLE `tbltingkat_gizi`
  ADD PRIMARY KEY (`id_tingkatgizi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgejala_gizi`
--
ALTER TABLE `tblgejala_gizi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblkonsultasi`
--
ALTER TABLE `tblkonsultasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbltingkatgizi_solusi`
--
ALTER TABLE `tbltingkatgizi_solusi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
