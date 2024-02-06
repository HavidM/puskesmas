-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 02:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `ID` int(11) NOT NULL,
  `JUDUL` varchar(100) NOT NULL,
  `ISI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`ID`, `JUDUL`, `ISI`) VALUES
(1, '', '<h1><b><u>Profil</u></b></h1> Puskesmas Cirimekar terletak di Jl. Kayu Manis Rt. 05 Rw. 04 Kelurahan Cirimekar Kecamatan Cibinong Kabupaten Bogor. Kecamatan Cibinong merupakan pusat ibu kota Kabupaten Bogor.  Kondisi geografis wilayah kerja Puskesmas Cirimekar sebagian besar terdiri dari dataran rendah dengan luas wilayah 10,15 Km2 yang terbagi menjadi 3 Kelurahan, 34 Rw dan 180 RT dimana karakteristik penduduknya memiliki tingkat mobilisasi yang tinggi. <br><br> Secara geografis Puskesmas Cirimekar berada pada ketinggian 120 - 140 MDPL dengan curah hujan rata-rata 2.150-2.650 mm dan suhu udara berkisar antara 22,14o Celcius sampai dengan 31,1o Celcius. Disebelah utara berbatasan dengan Kecamatan Sukmajaya Depok, sebelah timur berbatasan dengan Kecamatan Citeureup, sebelah selatan berbatasan dengan Kelurahan Nanggewer Mekar sedangkan disebelah barat berbatasan dengan Kelurahan Pabuaran Mekar, Pabuaran dan Pakansari Kecamatan Cibinong. <br><br> Oleh karena letaknya yang berada di ibu kota kabupaten maka hal ini melahirkan karakteristik dan permasalahan tersendiri baik dalam aspek ekonomi, sosial budaya, politik, kemasyarakatan, kondisi fisik dan wilayah serta pemerintahan dan pembangunan dibanding dengan kecamatan lainnya.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `POLI` varchar(50) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `NO_ANTRIAN` int(11) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `CATDOK` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`ID`, `NAMA`, `POLI`, `STATUS`, `NO_ANTRIAN`, `TANGGAL`, `CATDOK`) VALUES
(1, 'AUL', 'UMUM', 'Sudah', 1, '2023-07-08', 'Istirahat'),
(2, 'rio', 'UMUM', 'Sudah', 2, '2023-07-08', 'Radang'),
(3, 'Havid', 'Mata', 'Sudah', 1, '2023-07-08', 'Perlu istirahat selama 2 minggu'),
(4, 'Havid', 'Mata', 'Sudah', 1, '2023-07-11', '-'),
(5, 'Havid', 'Mata', 'Sudah', 1, '2023-10-09', ''),
(6, 'AUL', 'UMUM', 'Sudah', 1, '2023-11-24', ''),
(7, 'rio', 'UMUM', 'Sudah', 2, '2023-11-24', ''),
(8, 'Feri', 'UMUM', 'Belum', 1, '2023-11-28', ''),
(9, 'Feri', 'UMUM', 'Sudah', 1, '2023-12-10', ''),
(10, 'rio', 'Anak', 'Belum', 1, '2023-12-11', ''),
(11, 'Havid', 'Anak', 'Sudah', 2, '2023-12-11', ''),
(12, 'AUL', 'Mata', 'Sudah', 1, '2023-12-12', ''),
(13, 'Armuh', 'PARU', 'Sudah', 1, '2023-12-14', ''),
(14, 'AUL', 'UMUM', 'Belum', 1, '2023-12-15', ''),
(15, 'Havid', 'LABORATORIUM', 'Belum', 1, '2023-12-17', ''),
(16, 'AUL', 'UMUM', 'Sudah', 1, '2023-12-17', ''),
(17, 'Havid', 'UMUM', 'Belum', 1, '2023-12-25', ''),
(18, 'Raffi', 'LABORATORIUM', 'Belum', 1, '2024-01-04', '');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `ID` int(11) NOT NULL,
  `NIK` varchar(35) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `PASSWORD` varchar(35) NOT NULL,
  `JENIS_KELAMIN` enum('L','P') NOT NULL,
  `ALAMAT` varchar(350) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`ID`, `NIK`, `NAMA`, `PASSWORD`, `JENIS_KELAMIN`, `ALAMAT`, `TANGGAL_LAHIR`) VALUES
(8, '123456789', 'AUL', '123456', 'P', 'jalan jalan ke pasar baru', '2023-06-07'),
(11, '99999', 'Havid', '12345', 'L', 'Bandung', '2000-02-10'),
(13, '55555', 'rio', '55555', 'L', 'jakarta', '2023-07-12'),
(15, '123456', 'Feri', '12345', 'L', 'Cibinong', '2018-03-15'),
(18, '66666', 'Raffi', '12345', 'L', 'Cibinong', '2014-04-20'),
(20, '696969', 'Arif', '12345', 'L', 'Cibinong', '2010-10-10'),
(21, '88888', 'Armuh', '12345', 'L', 'Jakarta', '2011-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `username`, `password`) VALUES
(1, 'dokter', 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `ID` int(11) NOT NULL,
  `JUDUL` varchar(100) NOT NULL,
  `ISI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`ID`, `JUDUL`, `ISI`) VALUES
(1, '', 'Gratis Imunisasi');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `KODE` varchar(1) NOT NULL,
  `KETERANGAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`KODE`, `KETERANGAN`) VALUES
('L', 'Laki-laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`ID`, `NAMA`) VALUES
(3, 'UMUM'),
(9, 'LABORATORIUM'),
(10, 'LANSIA'),
(11, 'UGD'),
(12, 'GIGI'),
(13, 'IMUNISASI'),
(14, 'PARU'),
(15, 'HATI'),
(16, 'KONSULTASI'),
(17, 'PERSALINAN'),
(18, 'KIA-KB'),
(19, 'ANAK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
