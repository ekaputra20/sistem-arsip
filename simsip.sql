-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 03:28 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
  `id_arsip` int(10) NOT NULL AUTO_INCREMENT,
  `tgl_kegiatan` date NOT NULL,
  `subjek` varchar(128) NOT NULL,
  `tempat` text NOT NULL,
  `tgl_kelola` datetime NOT NULL,
  `arsip_show` int(1) NOT NULL DEFAULT '1' COMMENT '1= show, 0 hide',
  `userId` int(11) NOT NULL,
  `evaluasi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_arsip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5493 ;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `tgl_kegiatan`, `subjek`, `tempat`, `tgl_kelola`, `arsip_show`, `userId`, `evaluasi`, `id_kategori`) VALUES
(5449, '2015-05-22', 'jjjjjjjjjj', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5450, '2015-05-25', 'senin', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5451, '2015-05-25', 'teh kotak', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5452, '2015-05-25', 'rar', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5453, '2015-05-25', 'pdf', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5455, '2015-05-25', 'er', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5457, '2015-05-25', 'www', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5459, '2015-05-25', 'rrrrrrrrr', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5461, '2015-05-25', 'adsf', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5462, '2015-05-25', 'adsf', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5464, '2015-05-26', 'word', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5465, '2015-05-27', 'bola', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5466, '2015-05-27', 'halo bola', '', '0000-00-00 00:00:00', 1, 0, '', 0),
(5467, '2015-05-29', 'hai', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5468, '2015-05-29', 'hotspot', '', '0000-00-00 00:00:00', 0, 0, '', 0),
(5469, '2015-05-29', 'ters', '', '2015-05-29 14:34:38', 0, 6, '', 0),
(5470, '2015-05-29', 'kkkk', '', '2015-05-29 14:37:43', 1, 6, '', 0),
(5471, '2015-05-29', 'banyak', '', '2015-05-29 15:16:19', 1, 6, '', 0),
(5472, '2015-05-29', 'banyak', '', '2015-05-29 15:18:41', 1, 6, '', 0),
(5473, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:19:49', 1, 6, '', 0),
(5474, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:23:33', 1, 6, '', 0),
(5475, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:24:42', 1, 6, '', 0),
(5476, '2015-05-29', 'ewwwwwwwwwrtf', '', '2015-05-29 15:25:16', 1, 6, '', 0),
(5477, '2015-05-29', 'mmmmm', '', '2015-05-29 15:26:14', 1, 6, '', 0),
(5478, '2015-05-29', 'mmmmm', '', '2015-05-29 15:26:37', 1, 6, '', 0),
(5479, '2015-05-29', 'mmmm', '', '2015-05-29 15:26:49', 1, 6, '', 0),
(5480, '2015-05-29', 'mmmm', '', '2015-05-29 15:27:16', 1, 6, '', 0),
(5481, '2015-05-29', 'mmmmmn', '', '2015-05-29 15:27:43', 1, 6, '', 0),
(5482, '2015-05-29', 'aaaaasdpf', '', '2015-05-29 15:29:32', 1, 6, '', 0),
(5483, '2015-05-29', 'aaaaasdpf', '', '2015-05-29 15:29:57', 1, 6, '', 0),
(5484, '2015-05-29', 'yat', '', '2015-05-29 15:30:31', 1, 6, '', 0),
(5485, '2015-05-29', 'yat', '', '2015-05-29 15:33:06', 1, 6, '', 0),
(5486, '2015-05-29', 'yat', '', '2015-05-29 15:52:01', 1, 6, '', 0),
(5487, '0000-00-00', '0', '', '2015-05-29 15:52:31', 1, 6, '', 0),
(5488, '2015-05-29', 'yat', '', '2015-05-29 15:52:45', 1, 6, '', 0),
(5489, '2015-05-29', 'mad', '', '2015-05-29 15:57:16', 1, 6, '', 0),
(5490, '2015-05-29', 'mad', '', '2015-05-29 16:03:51', 1, 6, '', 0),
(5491, '0000-00-00', '0', '', '2015-05-29 16:04:15', 1, 6, '', 0),
(5492, '0000-00-00', '', '', '2015-05-29 16:04:38', 1, 6, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iuser`
--

CREATE TABLE IF NOT EXISTS `iuser` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(20) NOT NULL,
  `userNamaLengkap` varchar(30) NOT NULL,
  `userPass` text NOT NULL,
  `userAktif` tinyint(1) NOT NULL,
  `userLevel` enum('administrator','pengelola') NOT NULL,
  `userNIP` int(20) DEFAULT NULL,
  `userLastLogin` date NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userNama` (`userNama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `iuser`
--

INSERT INTO `iuser` (`userId`, `userNama`, `userNamaLengkap`, `userPass`, `userAktif`, `userLevel`, `userNIP`, `userLastLogin`) VALUES
(6, 'vuji', 'vujiii', '697fc71e04dc841f0499244cb58c35d2', 1, 'administrator', 342343242, '2015-05-31'),
(21, 'perpus', 'perpus', '23bfcee1c3023b2677bc60509a17c778', 1, 'pengelola', 34857297, '2015-05-31'),
(22, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'administrator', 2147483647, '2016-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kagori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE IF NOT EXISTS `lampiran` (
  `id_lampiran` int(11) NOT NULL AUTO_INCREMENT,
  `id_arsip` int(10) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  PRIMARY KEY (`id_lampiran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `id_arsip`, `nama_file`) VALUES
(1, 0, '4-Graf-BeberapaGrafKhusus2.pdf'),
(2, 0, '6-MasalahLintasanTerpendek.pdf'),
(3, 0, '10-MenulisDasarTeori.pdf'),
(4, 0, 'multiple_file_upload.rar'),
(5, 0, 'multiple_file_upload.zip'),
(6, 0, 'multiple_file_upload.rar'),
(7, 0, '6-MasalahLintasanTerpendek.pdf'),
(8, 0, ''),
(9, 0, 'laporankegiatan.pdf'),
(10, 0, 'doc16-html-id (1).zip'),
(11, 0, 'multiple_file_upload.rar'),
(12, 0, 'dompdf-master.zip'),
(13, 0, 'multiple_file_upload.rar'),
(14, 0, ''),
(15, 0, 'multiple_file_upload.zip'),
(16, 0, 'multiple_file_upload.zip'),
(17, 0, 'APPLICATION FORM - BD SCHOLARSHIP 2014-2015 (1).doc'),
(18, 0, 'LOGIKA_MATEMATIKA_BAGIAN_I.docx'),
(19, 5466, '[Form]_ASEAN-Korea_Youth_Square.xlsx'),
(20, 5467, 'Sudut_Bagian_I_(N)_01052015.docx'),
(21, 5468, 'Lingkaran3.docx.docx'),
(22, 5469, 'bBe_ntuk_Pangkat,_Akar_dan_Logaritma_(1).docx'),
(23, 5470, 'S2-2014-286718-chapter5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,
  `id_arsip` int(10) NOT NULL,
  `userId` int(11) NOT NULL,
  `tgl_edit` date NOT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
