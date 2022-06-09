-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 12:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id` int(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`id`, `judul`, `isi`, `gambar`) VALUES
(21, 'Zenbook 14 UX425', 'Spesifikasi : Sebagai salah satu model tertinggi, ZenBook Duo 14 (UX842) mengusung spesifikasi yang paling mumpuni di antara ketiga laptop anyar Asus. ZenBook Duo 14 memiliki dimensi seluas 32,4 x 22,2 x 1,69 mm dan bobot 1,62 kg. Laptop ini turut hadir dengan layar berukuran 14 inci Full HD (1.920 x 1.080 piksel) dengan tingkat kecerahan mencapai 400 nits dan sudah mengantongi sertifikasi Pantone Validated Display. Seperti lini ZenBook pendahulunya, ZenBook Duo 14 (UX842) turut dilengkapi dengan layar sekunder bernama ScreenPad Plus berukuran 12,65 inci. Hadirnya layar sekunder ini disebut mampu memungkinkan pengguna untuk menampilkan banyak aplikasi secara bersamaan. ZenBook Duo 14 (UX842) dibekali dengan prosesor Intel Core generasi ke-11 yang tersedia dalam dua model, yakni Intel i5-1165G7 dan Intel i7-1135G7 yang memiliki GPU terintegrasi Intel Iris Xe. Ada juga opsi varian dengan discrete graphics Nvidia GeForce MX450. Kapasitas RAM yang terpasang mampu mencapai 16 GB dengan media penyimpanan SSD hingga 1 TB. Sementara, untuk sektor daya ZenBook Duo 14 (UX842) disokong oleh baterai berkapasitas 70 Wh.', 'laptop.png'),
(22, 'Infinix Zero 5G', 'Berikut spesifikasi lengkap Infinix Zero 5G: 1. Layar: IPS LCD 6.78 inci 2. Prosesor: MediaTek MT6877 Dimensity 900 5G (6 nm) 3. RAM: 8 GB 4. Memori internal: 128 GB 5. Kamera belakang: Kamera utama 48 MP, kamera dua 13 MP, kamera 3 2 MP 6. Video: 4K@30fps, 1080p@30/60fps 7. Kamera Depan: 16 MP, (wide), 1/2.76", 1.12µm 8. Sistem operasi: Android 11 Desain antarmuka: XOS 10 9. Kapasitas Baterai: 5000 mAh 10.Chipset: MediaTek MT6877 Dimensity 900 5G (6 nm) 11.Bodi: material depan kaca, frame plastik, dan belakang plastik 12.Resolusi layar: 1080 x 2.460 piksel 13.Berat 199 gram 14.Wi-Fi: 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct, hotspot 15.Jenis baterai: Li-Po 16.Fast charging: mendukung fast charging 33 watt 17.Fitur lain: dukungan SIM ganda, Micro SD, jack audio, radio FM, dan sensor sidik jari Harga: Rp 3.399.000. Artikel ini telah tayang di Katadata.co.id dengan judul "Spesifikasi dan Harga Infinix Zero 5G di Indonesia"', 'infinix_zero_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
