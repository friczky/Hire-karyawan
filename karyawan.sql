-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table karyawan.berkas
CREATE TABLE IF NOT EXISTS `berkas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama_berkas` varchar(100) DEFAULT NULL,
  `berkas` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pengguna` (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.berkas: ~1 rows (approximately)
INSERT IGNORE INTO `berkas` (`id`, `id_pengguna`, `nama_berkas`, `berkas`) VALUES
	(2, 18, '1', '65379057518330046-Fadilah Riczky- UA -MPPL.docx');

-- Dumping structure for table karyawan.email_terkirim
CREATE TABLE IF NOT EXISTS `email_terkirim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subjek` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.email_terkirim: ~3 rows (approximately)
INSERT IGNORE INTO `email_terkirim` (`id`, `nama`, `email`, `subjek`) VALUES
	(3, 'Fadilah Riczky', 'pelamar@gmail.com', 'Pendaftaran Berhasil'),
	(4, 'Fadilah Riczky', 'pelamar@gmail.com', 'Pendaftaran Berhasil'),
	(5, 'Fadilah Riczky', 'pelamar@gmail.com', 'Pendaftaran Belum Diterima !');

-- Dumping structure for table karyawan.kategori_kerjaan
CREATE TABLE IF NOT EXISTS `kategori_kerjaan` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.kategori_kerjaan: ~2 rows (approximately)
INSERT IGNORE INTO `kategori_kerjaan` (`id_kategori`, `kategori`) VALUES
	(2, 'Pertanian'),
	(5, 'Kerja Santay'),
	(7, 'Modal Good Looking');

-- Dumping structure for table karyawan.kerjaan
CREATE TABLE IF NOT EXISTS `kerjaan` (
  `id_kerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_kerjaan` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kerjaan`) USING BTREE,
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.kerjaan: ~1 rows (approximately)
INSERT IGNORE INTO `kerjaan` (`id_kerjaan`, `id_kategori`, `nama_kerjaan`, `deskripsi`, `foto`) VALUES
	(5, 5, 'Lowongan Kerja Jadi Maling', '<p>Ini adalah lowongan kerja idaman untuk semua orang dimana kalian bisa jadi maling secara legal dilindungin negara.<br><br>syarat pendaftaran:</p><p>1. Melampirkan CV</p><p>2. Melampirkan Surat Lamaran Kerja</p><p>3. Minimal S1 Semua Jurusan</p><p>4. Lulusan S3 Di Utamakan</p>', '32699141logo amikom.png'),
	(6, 2, 'Lowongan Kerja Jadi Tukang Cangkul', '<p>Lowongan ini khusus bagi yang sudah expert dalam bidang mencangkul . Yang masih newbie minggir dulu !!</p><p>Syarat :&nbsp;</p><ul><li>Pendidikan : S1 Pertanian</li><li>Lampiran : CV dan Surat Lamaran Kerja</li><li>Diutamakan : S2 Manajemen Pertanian</li></ul>', '1623362806e1.jpg'),
	(7, 7, 'Lowongan Kerja Mencari Cinta Sejati', '<p>Ini adalah loker yang kalian tunggu-tunggu !!</p><p>Loker ini mencari orang terbaik yang masih blm memiliki pasangan hidup , dengan mendaftar disini kami akan mencarikan pasanganan hidup yang sesuai dengan apa yang kamu inginkan berdasarkan Portfolio kamu. Selain dicarikan pasangan kamu juga akan di berikan gaji dan tunjangan selama masih berpasangan dengan calon yang kami pilih.<br><br>Syarat&nbsp; :</p><ul><li>Lampiran : Portfolio dan Surat Lamaran Kerja</li><li>Pendidikan : Minimal S1 Semua Jurusan</li></ul><p>Tunjangan :</p><ul><li>Asuransi Kesehatan</li><li>BPJS</li><li>Tunjangan Transportasi</li><li>Paket Data</li><li>Laptop Spek Dewa</li></ul><p>Gaji :</p><ul><li>Bulan Pertama : 5 Juta</li><li>Bulan Selanjutnya : 5 Juta + 2 Juta Perbulan</li></ul>', '1877533824e3.jpg');

-- Dumping structure for table karyawan.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.kontak: ~0 rows (approximately)
INSERT IGNORE INTO `kontak` (`id`, `email`, `telpon`, `alamat`) VALUES
	(1, 'email@email.com', '089673881528', 'Jl. Damai Sejahtera, Komplek Perumahan Nusa Indah , Jetis , Jogja');

-- Dumping structure for table karyawan.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kerjaan` int(11) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `role` int(10) DEFAULT NULL,
  `status_kerja` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.pengguna: ~3 rows (approximately)
INSERT IGNORE INTO `pengguna` (`id`, `id_kerjaan`, `nama`, `password`, `email`, `telpon`, `foto`, `alamat`, `role`, `status_kerja`) VALUES
	(1, NULL, 'Fadilah Riczky', '21232f297a57a5a743894a0e4a801fc3', 'friczky@gmail.com', NULL, '189522226445.JANBADRA.png', '', 0, NULL),
	(18, 5, 'Fadilah Riczky', 'd106cd9e18dab5c9bce2b1b7c9a17d2b', 'pelamar@gmail.com', '+6289673881528', '768056353Gadjah_Mada_University_Logo.png', 'sasa', 1, 0),
	(19, NULL, 'alfin', '6ff92dee2a93081f0192781f156fa0e9', 'alfin@gmail.com', NULL, NULL, NULL, 1, NULL);

-- Dumping structure for table karyawan.tentang
CREATE TABLE IF NOT EXISTS `tentang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_web` varchar(250) DEFAULT NULL,
  `maps_url` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `foto` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table karyawan.tentang: ~0 rows (approximately)
INSERT IGNORE INTO `tentang` (`id`, `nama_web`, `maps_url`, `logo`, `foto`, `deskripsi`) VALUES
	(1, 'Hire Karyawan', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.05293968153!2d101.37113520024238!3d0.5137908161246251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab80690ee7b1%3A0x94dde92c3823dbe4!2sPekanbaru%2C%20Kota%20Pekanbaru%2C%20Riau!5e0!3m2!1sid!2sid!4v1658285170567!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', '674852765logo amikom.png', '2058334161about-img.jpg', '<p>Perusahaan kami termasuk dalam bidang penyaluran tenaga kerja bagi perusahaan atau lembaga lain yang membutuhkan , dengan adanya sistem seperti ini kami akan menyeleksi dengan tim professional agar dapat memberikan para pekerja yang terbaik sesuai kebutuhan perusahaan ataupun lembaga anda.</p>');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
