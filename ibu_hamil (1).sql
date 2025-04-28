-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 09:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibu_hamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_blog` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `gambar`, `nama_blog`, `tanggal`, `isi`) VALUES
(1, NULL, 'Panduan Pola Makan Sehat Untuk Ibu Hamil Dengan Anemia\n', '2025-03-19 12:39:14', 'Pola makan mencerminkan jenis dan jumlah makanan yang dikonsumsi seseorang setiap hari. Pola makan yang tidak seimbang dapat menjadi salah satu penyebab terjadinya anemia pada ibu hamil, terutama akibat kurangnya asupan makanan yang mengandung zat besi (Yazah et al., 2023). Anemia pada ibu hamil dapat berdampak serius terhadap kesehatan ibu dan perkembangan janin, karena tubuh memerlukan lebih banyak zat besi untuk mendukung peningkatan volume darah dan pertumbuhan janin.\n\n	Oleh karena itu, menerapkan pola makan sehat dan seimbang sangat penting dalam mencegah dan mengatasi anemia selama kehamilan.\n\nPenelitian yang dilakukan oleh Liana et al. (2023) mengidentifikasi bahwa pola makan yang tidak sehat berperan terhadap tingginya kejadian anemia pada ibu hamil. Studi ini menemukan bahwa ibu hamil dengan pola makan kurang baik lebih beresiko mengalami anemia dibandingkan dengan mereka yang mengomsumsi makanan bergizi seimbang. Oleh karena itu, di anjurkan untuk mengkonsumsi makanan yang kaya zat besi, seperti daging merah, hati, sayuran hijau, dan kacang-kacangan guna mencegah anemia (Andini et al., 2021). Selain itu vitamin C dari buah-buahan seperti jeruk dapat membantu meningkatkan penyerapan zat besi dalam tubuh (Alfiah et al., 2024). Suplementasi zat besi juga direkomendasikan sebagai salah satu dari intervensi gizi untuk mencegah dan mengatasi anemia selama kehamilan. Menurut World Health Organization (2016) menyarankan mengomsumsi suplemen zat besi harian dengan dosis 30-60 mg zat besi untuk mencegah anemia akibat defisiensi besi serta mengurangi resiko komplikasi selama kehamilan.\nMenurut penelitian (Sari & Tahun, 2023) ibu hamil yang mengkonsumsi makanan kaya zat besi secara rutin memiliki resiko lebih rendah mengalami anemia dibandingkan dengan mereka yang tidak memperhatikan pola makan. Selain zat besi, asupan asam folat dan vitamin B12 yang diperoleh dari telur, produksi susu, serta makanan fortifikasi juga berperan penting dalam pembentukan sel darah merah. Secara keseluruhan, pola makan sehat yang mencakup sumber zat besi, asam folat, dan vitamin B12 sangat diperlukan dalam mencegah anemia pada ibu hamil. Dengan menerapkan pola makan seimbang dan menghindari makanan dan minuman yang menghambat penyerapan zat besi, seperti teh dan kopi, ibu hamil dapat menjaga kesehatannya sekaligus mendukung pertumbuhan janin yang optimal. Oleh karena itu, upaya edukasi dan pemdampingan dari tenaga kesehatan sangat diperlukan agar ibu hamil dapat memahami pentingnya nutrisi dalam mencegah anemia selama kehamilan.\n');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'mamat', 'mamat@gmail.com', '123'),
(4, 'fahrul', 'fahrul@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `komentar` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
