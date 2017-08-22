-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 04:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toeman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`, `no_hp`, `level`, `gambar`) VALUES
(006, 'admin', 'admin', 'Ardhian Yuliandra Hanum', 'ardhian.hanum@gmail.com', '08123456790', 'Admin', 'IMG-20161113-WA0012.jpg'),
(007, 'ndnfsm', 'ndnfsm', 'Nadia Nafisa Maharani', 'nadia@nafisa.com', '08123456790', 'Admin', 'IMG_20170627_1936081.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nik` int(8) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `nama`, `alamat`, `no_hp`, `email`, `status`) VALUES
(001, 112233, 'Ardhian Yuliandra Hanum', 'Pondok Wonolelo, Widodomartani, Ngemplak, Sleman', '085725802623', 'ardhian.hanum@gmail.com', 'Tetap'),
(002, 223344, 'Nadia Nafisa Maharani', 'Perum Pertamina, Purwomartani, Kalasan, Sleman', '085123456789', 'nadianfm@gmail.com', 'Tetap'),
(003, 334455, '3', '3', '085725802623', '3@3.com', 'Kontrak'),
(004, 445566, '4', '4', '4', '4@4.com', 'Kontrak'),
(006, 555555, '5', '5', '085725802623', '5@5.com', 'Kontrak'),
(007, 666666, '6', '6', '085725802623', '6@6.com', 'Kontrak'),
(008, 777777, '7', '7', '085725802623', '7@7.com', 'Kontrak'),
(009, 8, '8', '8', '8', '8@8.com', 'Kontrak'),
(010, 999999, '9', '9', '9', '9@9.com', 'Kontrak'),
(011, 101010, '10', '10', '10', '10@10.com', 'Training'),
(013, 111111, '11', '11', '11', '11@11.com', 'Magang/PKL'),
(014, 121212, '12', '12', '12', '12@12.com', 'Outsourceing'),
(015, 121212, '12', '12', '12', '12@12.com', 'Outsourceing');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(9) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(001, 'Toeman Nugget Coklat', 'Makanan Murah halal dan tentunya Enak, tekstur nugget yang chrunch dengan balutan coklat yang bikin kalian ketagihan!', 15000, 'coklat.png'),
(002, 'Toeman Nugget Green Tea', 'Makanan Murah halal dan tentunya Enak, tekstur nugget yang chrunch dengan balutan coklat yang bikin kalian ketagihan!', 15000, 'green-tea.png'),
(003, 'Toeman Nugget Coklat Keju', 'Makanan Murah halal dan tentunya Enak, tekstur nugget yang chrunch dengan balutan coklat yang bikin kalian ketagihan!', 17000, 'coklat-keju.png'),
(004, 'Toeman Nugget Vanilla', 'Makanan Murah halal dan tentunya Enak, tekstur nugget yang chrunch dengan balutan coklat yang bikin kalian ketagihan!', 15000, 'vanilla.png'),
(005, 'Toeman Nugget Vanilla Keju', 'Makanan Murah halal dan tentunya Enak, tekstur nugget yang chrunch dengan balutan coklat yang bikin kalian ketagihan!', 17000, 'vanilla-keju.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
