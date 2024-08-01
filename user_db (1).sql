-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2024 pada 09.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_form`
--

CREATE TABLE `produk_form` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `game` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_form`
--

INSERT INTO `produk_form` (`id`, `name`, `price`, `game`) VALUES
(1, 'Paket Summon Harian', 'Rp. 14500,-', 'blackclover'),
(2, '40 Premium Black Crystal + 3 Black Crystal', 'Rp. 15000,-', 'blackclover'),
(3, '210 Premium Black Crystal + 15 Black Crystal', 'Rp. 70000,-', 'blackclover'),
(4, '425 Premium Black Crystal + 45 Black Crystal', 'Rp. 138000,-', 'blackclover'),
(5, '860 Premium Black Crystal + 120 Black Crystal', 'Rp. 275000,-', 'blackclover'),
(6, '1300 Premium Black Crystal + 260 Black Crystal', 'Rp. 418000,-', 'blackclover'),
(7, '2180 Premium Black Crystal + 450 Black Crystal', 'Rp. 690000,-', 'blackclover'),
(8, 'Gold Pass', 'Rp. 90000', 'ClashOfClans'),
(9, '80 Gems + 8 Bonus', 'Rp. 14000,-', 'ClashOfClans'),
(10, '500 Gems + 50 Bonus', 'Rp. 65000,-', 'ClashOfClans'),
(12, '1200 Gems + 120 Bonus', 'Rp. 130000,-', 'ClashOfClans'),
(13, '2500 Gems + 250 Bonus', 'Rp. 260000,-', 'ClashOfClans'),
(14, '6500 Gems + 650 Bonus', 'Rp. 640000,-', 'ClashOfClans'),
(15, '14000 Gems + 1400 Bonus', 'Rp. 1280000,-', 'ClashOfClans'),
(16, 'Gold Pass', 'Rp. 80000,-', 'ClashRoyale'),
(17, 'Diamond Pass', 'Rp. 160000,-', 'ClashRoyale'),
(18, '80 Gems + 8 Bonus', 'Rp. 14000,-', 'ClashRoyale'),
(19, '500 Gems + 50 Bonus', 'Rp. 65000,-', 'ClashRoyale'),
(20, '1200 Gems + 120 Bonus', 'Rp. 130000,-', 'ClashRoyale'),
(21, '2500 Gems + 250 Bonus', 'Rp. 260000,-', 'ClashRoyale'),
(22, '6500 Gems + 650 Bonus', 'Rp. 642000,-', 'ClashRoyale'),
(23, '14000 Gems + 1400 Bonus', 'Rp. 1280000,-', 'ClashRoyale'),
(24, '40 FC POINTS', 'Rp. 7000,-', 'EAFCMobile'),
(25, '100 FC POINTS', 'Rp. 17000,-', 'EAFCMobile'),
(26, '520 FC POINTS', 'Rp. 77500,-', 'EAFCMobile'),
(27, '1070 FC POINTS', 'Rp. 160000,-', 'EAFCMobile'),
(28, '2200 FC POINTS', 'Rp. 320000,-', 'EAFCMobile'),
(29, '5750 FC POINTS', 'Rp. 782000,-', 'EAFCMobile'),
(30, '12000 FC POINTS', 'Rp. 1560000,-', 'EAFCMobile'),
(58, 'Membership Mingguan', 'Rp. 28000,-', 'FreeFire'),
(59, 'Membership Bulanan', 'Rp. 85000,-', 'FreeFire'),
(60, 'BP Card', 'Rp. 42000,-', 'FreeFire'),
(61, '5 Diamonds', 'Rp. 1000,-', 'FreeFire'),
(62, '80 Diamonds', 'Rp. 12000,-', 'FreeFire'),
(63, '140 Diamonds', 'Rp. 19000,-', 'FreeFire'),
(64, '210 Diamonds', 'Rp. 28000,-', 'FreeFire'),
(65, '355 Diamonds', 'Rp. 46000,-', 'FreeFire'),
(66, '860 Diamonds', 'Rp. 110000,-', 'FreeFire'),
(67, '1440 Diamonds', 'Rp. 185000,-', 'FreeFire'),
(68, 'Blessing of the Welkin Moon', 'Rp. 60000,-', 'GenshinImpact'),
(69, 'Blessing of the Welkin Moon (x2)', 'Rp. 120000,-', 'GenshinImpact'),
(70, 'Blessing of the Welkin Moon (x3)', 'Rp. 180000,-', 'GenshinImpact'),
(71, 'Blessing of the Welkin Moon (x4)', 'Rp. 240000,-', 'GenshinImpact'),
(72, '60 Genesis Crytals', 'Rp. 13000,-', 'GenshinImpact'),
(73, '300 + 30 Genesis Crytals', 'Rp. 60000,-', 'GenshinImpact'),
(74, '980 + 110 Genesis Crytals', 'Rp. 180000,-', 'GenshinImpact'),
(75, '1980 + 260 Genesis Crytals', 'Rp. 380000,-', 'GenshinImpact'),
(76, '3280 + 600 Genesis Crytals', 'Rp. 590000,-', 'GenshinImpact'),
(77, '6480 + 1600 Genesis Crytals', 'Rp. 1170000,-', 'GenshinImpact'),
(78, 'Express Supply Pass', 'Rp. 60000,-', 'Honkai:StarRail'),
(79, '60 Oneiric Shard', 'Rp. 16000,-', 'Honkai:StarRail'),
(80, '300 + 30 Oneiric Shard', 'Rp. 60000,-', 'Honkai:StarRail'),
(81, '980 + 110 Oneiric Shard', 'Rp. 180000,-', 'Honkai:StarRail'),
(82, '1980 + 260 Oneiric Shard', 'Rp. 385000,-', 'Honkai:StarRail'),
(83, '3280 + 600 Oneiric Shard', 'Rp. 590000,-', 'Honkai:StarRail'),
(84, '6480 + 1600 Oneiric Shard', 'Rp. 1180000,-', 'Honkai:StarRail'),
(85, 'Monthly Card', 'Rp. 76000,-', 'Honkai:Impact'),
(86, '65 Crystal', 'Rp. 16000,-', 'Honkai:Impact'),
(87, '330 Crystal', 'Rp. 76000,-', 'Honkai:Impact'),
(88, '710 Crystal', 'Rp. 155000,-', 'Honkai:Impact'),
(89, '1430 Crytals', 'Rp. 300000,-', 'Honkai:Impact'),
(90, '3860 Crytals', 'Rp. 750000,-', 'Honkai:Impact'),
(91, 'Wekkly Diamond Pass', 'Rp. 30000,-', 'MobileLegend'),
(92, '85 Diamond (77 + 8 Bonus)', 'Rp. 24000,-', 'MobileLegend'),
(93, '110 Diamond (100 + 10 Bonus)', 'Rp. 32000,-', 'MobileLegend'),
(94, '184 Diamond (167 + 17 Bonus)', 'Rp. 52000,-', 'MobileLegend'),
(95, '240 Diamond (217 + 23 Bonus)', 'Rp. 64000,-', 'MobileLegend'),
(96, '370 Diamond (333 + 37 Bonus)', 'Rp. 99000,-', 'MobileLegend'),
(97, '408 Diamond (367 + 41 Bonus)', 'Rp. 108000,-', 'MobileLegend'),
(98, '568 Diamond (503 + 65 Bonus)', 'Rp. 148000,-', 'MobileLegend'),
(99, '790 Diamond (703 + 96 Bonus)', 'Rp. 210000,-', 'MobileLegend'),
(100, '938 Diamond (836 + 102 Bonus)', 'Rp. 245000,-', 'MobileLegend'),
(101, 'Upgrade Royale Pass', 'Rp. 150000,-', 'pubg'),
(102, 'Upgrade Elite Royale Pass', 'Rp. 388000,-', 'pubg'),
(103, '30 UC', 'Rp. 8000,-', 'pubg'),
(104, '60 UC', 'Rp. 15000,-', 'pubg'),
(105, '300 + 25 UC', 'Rp. 65000,-', 'pubg'),
(106, '600 + 60 UC', 'Rp. 126000,-', 'pubg'),
(107, '1500 + 300 UC', 'Rp. 312000,-', 'pubg'),
(108, '1800 + 325 UC', 'Rp. 375000,-', 'pubg'),
(109, '3000 + 850 UC', 'Rp. 630000,-', 'pubg'),
(110, '6000 + 2100 UC', 'Rp. 1250000,-', 'pubg'),
(111, 'Fortnite 2800 V-Bucks', 'Rp. 395000,-', 'fornite'),
(112, 'Fortnite 5000 V-Bucks', 'Rp. 540000,-', 'fornite'),
(113, 'Fortnite 13500 V-Bucks', 'Rp. 1275000,-', 'fornite'),
(114, '105 Wild Core', 'Rp. 16000,-', 'LOL:WildRift'),
(115, '350 Wild Core', 'Rp. 51000,-', 'LOL:WildRift'),
(116, '535 Wild Core', 'Rp. 69000,-', 'LOL:WildRift'),
(117, '585 Wild Core', 'Rp. 80000,-', 'LOL:WildRift'),
(118, '1100 Wild Core', 'Rp. 136000,-', 'LOL:WildRift'),
(119, '1135 Wild Core', 'Rp. 150000,-', 'LOL:WildRift'),
(120, '1660 Wild Core', 'Rp. 208000,-', 'LOL:WildRift'),
(121, '1725 Wild Core', 'Rp. 205000,-', 'LOL:WildRift'),
(122, '3000 Wild Core', 'Rp. 338000,-', 'LOL:WildRift'),
(123, '125 Points', 'Rp. 15000,-', 'Valorant'),
(124, '420 Points', 'Rp. 49000,-', 'Valorant'),
(125, '700 Points', 'Rp. 78000,-', 'Valorant'),
(126, '1375 Points', 'Rp. 147000,-', 'Valorant'),
(127, '2400 Points', 'Rp. 242000,-', 'Valorant'),
(128, '4000 Points', 'Rp. 388000,-', 'Valorant'),
(129, '8150 Points', 'Rp. 770000,-', 'Valorant'),
(203, 'czxczx', 'zxczxc', 'fornite');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi_form`
--

CREATE TABLE `testi_form` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'vaerastore', 'vaera@gmail.com', '24c8feaeccf291bd1f510c5230a67079', 'admin'),
(2, 'Raymehakke', 'rayme@gmail.com', '24c8feaeccf291bd1f510c5230a67079', 'user'),
(3, 'habibgt96', 'habib@gmail.com', '24c8feaeccf291bd1f510c5230a67079', 'admin'),
(4, 'Gojou Satoru', 'gojo@gmail.com', 'a8dc8ca948197714af2d39d024a442ed', 'user'),
(7, 'K423', 'batogor@gmail.com', '35d8d19d93abb16315e03f5fc8c5de46', 'user'),
(8, 'jinwoo', 'jinwo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(9, 'asdasd', 'asdsa@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(11, 'habibgt96', 'habibgt96@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(12, 'deku', 'deku@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(13, 'user2', 'user2@gmail.com', '24c8feaeccf291bd1f510c5230a67079', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk_form`
--
ALTER TABLE `produk_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testi_form`
--
ALTER TABLE `testi_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk_form`
--
ALTER TABLE `produk_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT untuk tabel `testi_form`
--
ALTER TABLE `testi_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
