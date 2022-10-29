-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 03:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nama_pasien` varchar(50) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `foto_pasien` varchar(255) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_medis`
--

CREATE TABLE `tenaga_medis` (
  `id_tmedis` int(11) NOT NULL,
  `nama_tmedis` varchar(25) NOT NULL,
  `nomor_str` int(11) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `role` varchar(11) NOT NULL,
  `foto_perawat` varchar(255) NOT NULL,
  `alamat_perawat` varchar(255) NOT NULL,
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `level`) VALUES
(1, 'indrapras2002@gmail.com', 'indra12', 1),
(2, 'mgoodbourn1@unc.edu', 'kUpBxfk', 2),
(3, 'kbillows2@imdb.com', 'IgPnA2fl0c', 3),
(4, 'dtallyn3@list-manage.com', 'zLliiyh1', 4),
(5, 'lruperti4@redcross.org', 'OmLbhk5qECI', 5),
(6, 'ostronack5@apple.com', 'PwiFHnxKYf', 6),
(7, 'epimley6@tmall.com', 'uQxFBkenHraV', 7),
(8, 'fstreeton7@washingtonpost.com', 'm3KCScy4GN', 8),
(9, 'cmaven8@1688.com', 'W6mpcd55Pq', 9),
(10, 'ntwinbrow9@google.co.uk', 'Vg1w1DPuFQT', 10),
(11, 'tmiliera@plala.or.jp', 'ptK7BuPtS', 11),
(12, 'aquinbyb@vinaora.com', 'jC81fc6A', 12),
(13, 'bpawseyc@scientificamerican.com', 'Zz0c4QR', 13),
(14, 'hdanielkiewiczd@google.es', 'w3LdjSXvV', 14),
(15, 'mskeetee@columbia.edu', 'kulEQU0e', 15),
(16, 'ptrowellf@163.com', 'AFKQlh', 16),
(17, 'dgageng@live.com', 'pg57LcqEL1', 17),
(18, 'rledekkerh@ocn.ne.jp', '66EWmAyP', 18),
(19, 'sstivensi@newsvine.com', 'ItIdmw', 19),
(20, 'hrogisterj@theguardian.com', '8EOYIR3f7UzA', 20),
(21, 'cmcgeeverk@wufoo.com', 'UHohIIBv', 21),
(22, 'rlowryl@topsy.com', 'LemU3b', 22),
(23, 'jokillm@bandcamp.com', 'B9oQofMnd', 23),
(24, 'lgritskovn@si.edu', 'v2FvkfWY', 24),
(25, 'jomulleno@1und1.de', 'KE6r3gC', 25),
(26, 'avoffp@opera.com', '6JktXOcmr', 26),
(27, 'blarmorq@yolasite.com', 'bwkrufYC', 27),
(28, 'phaker@thetimes.co.uk', 'Iim5zJSkLdG', 28),
(29, 'acarolans@census.gov', 'PMhfbh', 29),
(30, 'sleopoldt@artisteer.com', '3SFkjstNq3', 30),
(31, 'ekaminskiu@scribd.com', 'ZLyZmE5gDat', 31),
(32, 'hmepstedv@nbcnews.com', 'tPLV2af', 32),
(33, 'lfilsonw@jiathis.com', 'aVxxxkqVS3p0', 33),
(34, 'gfaggex@exblog.jp', '3kJ6NdZ', 34),
(35, 'fwhittucky@shareasale.com', 'XCV5cpP5op', 35),
(36, 'dkleinhausenz@creativecommons.org', 'o6ADcsvRSYb', 36),
(37, 'aboldison10@biblegateway.com', 'itbtzU', 37),
(38, 'ksenner11@opera.com', 'gzcYexC', 38),
(39, 'vpozzi12@mlb.com', 'ewvaMY3', 39),
(40, 'ageldeard13@auda.org.au', 'uySZcXD', 40),
(41, 'dslevin14@who.int', 'QbVbeKOkNI', 41),
(42, 'gscorthorne15@rediff.com', '0kGuEa', 42),
(43, 'jdulake16@angelfire.com', '33owKzkGsr', 43),
(44, 'cmichell17@eventbrite.com', '5Gj1RcGfT', 44),
(45, 'pgiovanetti18@google.fr', 'dOlUkWH2rk9', 45),
(46, 'eleggott19@g.co', 'NXlkhfa', 46),
(47, 'dbonhome1a@cnet.com', 'PL40T0Agug', 47),
(48, 'eweiss1b@discuz.net', 'giWIBwd', 48),
(49, 'fmceachern1c@fotki.com', 'oJtleEigNo', 49),
(50, 'phedman1d@google.es', 'KerH8PMKC8', 50),
(51, 'tratray1e@shop-pro.jp', 'bBuzVPHj9i', 51),
(52, 'indra@gmail.com', 'pass12', 2),
(53, 'udinganteng@gmail.com', 'udinkuys12', 1),
(54, 'jamalganteng@gmail.com', 'jamalkuys12', 1),
(55, 'jamalganteng@gmail.com', 'jamalkuys12', 1),
(56, 'jamalganteng@gmail.com', 'jamalkuys12', 1),
(58, 'krisboy@gmail.com', 'krisna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `id_pasien` int(11) NOT NULL,
  `id_detail_users` int(11) NOT NULL,
  `id_tmedis` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  ADD PRIMARY KEY (`id_tmedis`),
  ADD KEY `tenaga_medis_ibfk_1` (`id_pasien`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id_detail_users`),
  ADD KEY `users_detail_ibfk_1` (`id_pasien`),
  ADD KEY `fk_id_tmedis` (`id_tmedis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tenaga_medis`
--
ALTER TABLE `tenaga_medis`
  ADD CONSTRAINT `tenaga_medis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD CONSTRAINT `fk_id_tmedis` FOREIGN KEY (`id_tmedis`) REFERENCES `tenaga_medis` (`id_tmedis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_detail_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
