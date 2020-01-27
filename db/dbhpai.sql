-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2020 pada 11.17
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhpai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembeli`
--

CREATE TABLE IF NOT EXISTS `tbl_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tgl_pembelian` date DEFAULT NULL,
  `total_belanja` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id_pembeli`, `nama`, `no_hp`, `alamat`, `tgl_pembelian`, `total_belanja`, `status`) VALUES
(1, 'Nurainun', '081361613118', 'Jln. Abadi', '2020-01-23', '800.000', 'Anggota HPAI'),
(2, 'Muhammad Razak', '081361613118', 'Jln. Abadi', '2020-01-24', '1.000.000', 'Anggota HPAI'),
(3, 'Sri Wulan', '081361613118', 'Jln. Sudirman', '2020-01-24', '500.000', 'Anggota HPAI'),
(5, 'Ary Fazry', '081362623228', 'Jln. Anwar Idris', '2020-01-25', '450.000', 'Tidak Anggota'),
(6, 'Mugi Kasih Lestari', '081362624554', 'Jln. Jendral Sudirman', '2020-01-24', '200.000', 'Tidak Anggota'),
(7, 'Ary Fazry', '081362623228', 'Jln. Anwar Idris', '2019-12-01', '1.000.000', 'Tidak Anggota'),
(8, 'Ary Fazry', '081362623228', 'Jln. Anwar Idris', '2019-12-17', '1.000.000', 'Tidak Anggota'),
(9, 'Mugi Kasih Lestari', '081362624554', 'Jln. Jendral Sudirman', '2019-12-04', '800.000', 'Tidak Anggota'),
(10, 'Nur ainun', '081361613118', 'Jln. Abadi', '2019-12-23', '1.000.000', 'Anggota HPAI'),
(11, 'Mugi Kasih Lestari', '081361613118', 'Jln. Jendral Sudirman', '2019-12-19', '1.000.000', 'Tidak Anggota'),
(12, 'Nur ainun', '081361613118', 'Jln. Abadi', '2019-12-28', '1.000.000', 'Anggota HPAI'),
(13, 'Muhammad Razak', '081361613118', 'Jln. Abadi', '2019-12-28', '1.000.000', 'Anggota HPAI'),
(14, 'Muhammad Razak', '081361613118', 'Jln. Abadi', '2019-12-07', '1.000.000', 'Anggota HPAI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `kode` varchar(3) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `harga` varchar(12) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `kode`, `nama`, `jenis`, `harga`, `keterangan`) VALUES
(1, '001', 'Kopi 7 Elemen', 'Minuman', '90.000', 'Kopi herbal banyak manfaatnya'),
(2, '002', 'Kopi HPAI', 'Minuman', '105.000', 'Kopi herbal banyak manfaatnya'),
(3, '003', 'Extra Food', 'Sirup', '60.000', 'Sirup menambah nafsu makan anak'),
(4, '004', 'Sari Kurma', 'Sirup', '35.000', 'Kurma yg sudah di ubah menjadi sirup, menjaga daya tahan tubuh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(50) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('Admin', 'ba09f18fb9e722648c1d334940b5cc66', 'bchpai.tanjungbalai@gmail.com', 'Muhammad Razak', 1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
