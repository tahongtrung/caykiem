-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2017 at 05:54 AM
-- Server version: 5.5.44
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckimkute_lmhtvn`
--

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

CREATE TABLE IF NOT EXISTS `baidang` (
  `id` int(255) NOT NULL,
  `loainick` text NOT NULL,
  `taikhoan` text CHARACTER SET utf8 NOT NULL,
  `matkhau` text CHARACTER SET utf32 NOT NULL,
  `champs` text CHARACTER SET utf8,
  `skins` text CHARACTER SET utf8,
  `noidung` text CHARACTER SET utf16 NOT NULL,
  `thongtin` text CHARACTER SET utf8,
  `rank` text,
  `date` text NOT NULL,
  `hinhanh` text CHARACTER SET utf8 NOT NULL,
  `gia` text NOT NULL,
  `giacu` text NOT NULL,
  `promo` text NOT NULL,
  `trangthai` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=336 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lichsumua`
--

CREATE TABLE IF NOT EXISTS `lichsumua` (
  `id` text NOT NULL,
  `uid` int(11) NOT NULL,
  `idacc` text NOT NULL,
  `loainick` text NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `taikhoan` text NOT NULL,
  `matkhau` text NOT NULL,
  `date` text NOT NULL,
  `price` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lichsunap`
--

CREATE TABLE IF NOT EXISTS `lichsunap` (
  `uid` int(11) NOT NULL,
  `id` text NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `loaithe` text NOT NULL,
  `serial` text NOT NULL,
  `mathe` text NOT NULL,
  `menhgia` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `uid` int(255) NOT NULL,
  `id` text NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8,
  `cash` text NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=320 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lichsumua`
--
ALTER TABLE `lichsumua`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `lichsunap`
--
ALTER TABLE `lichsunap`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baidang`
--
ALTER TABLE `baidang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=336;
--
-- AUTO_INCREMENT for table `lichsumua`
--
ALTER TABLE `lichsumua`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `lichsunap`
--
ALTER TABLE `lichsunap`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=320;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
