-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 07:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir_07`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `harga_barang` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok_barang`, `harga_barang`) VALUES
(1, 'Toppokki', 9984, '10000.00'),
(2, 'baju', 24995, '10000.00'),
(3, 'celana pendek', 24970, '10000.00'),
(4, 'topi', 35000, '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_penjualan`
--

CREATE TABLE `tb_detail_penjualan` (
  `id_detail_penjualan` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username_pengguna` varchar(50) NOT NULL,
  `password_pengguna` varchar(50) NOT NULL,
  `status` enum('Administrator','Petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `nama_pengguna`, `username_pengguna`, `password_pengguna`, `status`) VALUES
(2, 'farhanj', 'admin', '12345', 'Administrator'),
(3, 'SAINUL FATOK', 'petugas', '123456', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `telepon_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `telepon_pelanggan`) VALUES
(23447, 'wahyu ', 'paeng', '8798888');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `tgl_penjualan`, `total`, `id_pelanggan`, `id_login`) VALUES
(4, '2024-02-29', '80000.00', 23447, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  ADD PRIMARY KEY (`id_detail_penjualan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_login` (`id_login`),
  ADD KEY `id_pelanggan` (`id_pelanggan`,`id_login`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  MODIFY `id_detail_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_penjualan`
--
ALTER TABLE `tb_detail_penjualan`
  ADD CONSTRAINT `tb_detail_penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_detail_penjualan_ibfk_2` FOREIGN KEY (`id_penjualan`) REFERENCES `tb_penjualan` (`id_penjualan`);

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `tb_login` (`id_login`),
  ADD CONSTRAINT `tb_penjualan_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
