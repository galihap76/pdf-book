-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 03:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pdf_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdf_book`
--

CREATE TABLE `tb_pdf_book` (
  `id` int(11) NOT NULL,
  `nama_file_pdf` varchar(100) NOT NULL,
  `judul_file_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdf_book`
--

INSERT INTO `tb_pdf_book` (`id`, `nama_file_pdf`, `judul_file_pdf`) VALUES
(28, 'css.pdf', 'Belajar Css Untuk Pemula'),
(29, 'Belajar Javascript .pdf', 'Belajar Javascript '),
(32, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara.pdf', 'Ebook PHP Menyelam dan Menaklukan Samudra PHP Loka Dwiartara'),
(33, 'ebook-codeigniter.pdf', 'Ebook codeigniter'),
(34, 'Website dengan PHP.pdf', 'Website dengan PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
