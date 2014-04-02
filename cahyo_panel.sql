-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2014 at 06:24 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cahyo_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_03_20_082048_create_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `status`, `updated_at`, `created_at`) VALUES
(2, 'Belum Ada Aturan Kampanye di Sosmed, Bawaslu: Tolong Jangan Saling Serang dan Adu Hantam', 'belum-ada-aturan-kampanye-di-sosmed-bawaslu-tolong-jangan-saling-serang-dan-adu-hantam', '<p>Jakarta - Badan Pengawas Pemilu (Bawaslu) menyatakan kampanye di sosial media sangat keras dan tak sedikit yang berisi saling hindar dan saling menyerang. Kampanye di media sosial juga tak terbendung karena belum ada aturan atau regulasi terkait hal ini. "Tidak diatur mengenai itu, karena kalau pun ada aturan kampanye di sosial media, penerapannya sulit," kata Komisioner Bawaslu Nelson Simanjuntak kepada detikcom, Rabu (2/4/2014). Bawaslu hanya bisa berharap kepada para pengguna media sosial seperti Twitter untuk cerdas selektif menanggapi isu-isu seputar pemilu yang berkembang. Namun tak menutup kemungkinan jika salah satu pihak yang merasa dirugikan melapor ke pihak kepolisian menggunakan UU ITE. "Kita patuhlah dan jangan ganggu proses pemilu dengan cara tidak baik. Karena untuk berkampanye di media sosial semua terbuka, kesempatan sama, tinggal siapa yang paling pintar menggunakan itu. Segi akses dan keadilan itu kan tidak ada yang dibatasi. Setiap orang bebas menggunakannya, jadi tinggal bagaimana menggunakannya dengan baik," imbuh Nelson. Nelson menilai pengguna Twitter atau media sosial lainnya adalah orang-orang yang cerdas. Sehingga ia optimis, dampak buruk kampanye di media sosial tak akan terlalu berpengaruh pada kehidupan nyata. "Twitter itu kan tidak semua masyarakat Indonesia menggunakan, paling kelompok-kelompok yang tidak terlalu terpengaruh dengan isu-isu yang berkembang di media sosial. Saya yakin lebih banyak pemilih Indonesia yang rasional menggunakan media sosial," ujar Nelson.</p>', 1, '2014-04-01 21:15:11', '2014-04-01 19:46:46'),
(4, 'Prabowo di Mata Para Guru Besar: Tegas dan Punya Visi Ekonomi Dunia', 'prabowo-di-mata-para-guru-besar-tegas-dan-punya-visi-ekonomi-dunia', '<p>Jakarta - Sejumlah guru besar emeritus/non PNS dan cendekiawan hari ini akan mendeklarasikan dukungan mereka kepada Prabowo Subianto sebagai calon Presiden RI 2014-2019. Dalam pandangan mereka, Prabowo adalah sosok yang tegas serta memiliki program-program ekonomi yang baik. "Saya ini guru besar emeritus di bidang ekonomi, Gerindra juga punya program ekonomi. Saya tertarik dengan gagasannya kemudian beliau juga ada kontak dengan dunia akademis, jadi mengundang juga. Saya jadi penasaran, ada suatu parpol yang mengkontak dunia akademis," kata Prof. Dr. Yuyun Wirasasmita, M.Sc di Kirana Ballroom, Hotel Kartika Chandra, Jl. Gatot Subroto, Jaksel, Rabu (2/4/2014). Yuyun yang merupakan mantan Rektor Universitas Padjajaran ini juga melihat Prabowo sebagai sosok yang tegas. "Satu sifat yang dimiliki Prabowo yaitu ketegasan yang tidak dimiliki yang lain," ujarnya. Yuyun rencananya akan membacakan deklarasi dukungan untuk Prabowo dari guru besar emeritus/non PNS dan cendekiawan di acara yang dimulai pukul 10.00 WIB. Prabowo sendiri direncanakan untuk hadir dan juga memberikan sambutan namun hingga saat ini belum tampak. Salah seorang guru besar lainnya, Prof. Dr. Faisal Santiago kagum pada sosok Prabowo yang fokus pada bidang ekonomi dan pembangunan. Ia juga berharap agar Prabowo dengan latar belakang militernya mampu memimpin negara ini. "Dalam segala hal selalu yang bersangkutan (Prabowo) berbicara mengenai pembangunan ekonomi berbasis kerakyatan, ini modal utama bagi teman2-teman guru besar. Lalu kita lihat kegigihan beliau, mungkin latar belakang militer ingin menjadikan negara ini berjaya seperti masa lalu," ujar Guru Besar Universitas Borobudur ini. Faisal membandingkan dua capres yang saat ini bersaing yaitu Prabowo dan Joko Widodo. Menurutnya, Jokowi belum teruji di tingkat nasional. "Saya melihatnya kalau Pak Jokowi scope-nya baru lokal, belum diuji secara menyeluruh dalam gubernur pun yang bersangkutan baru satu tahunan, harusnya dia selesaikan Jakarta dulu," kata pria yang menekuni ilmu hukum ini. Faisal juga yakin aset-aset negara aman apabila Prabowo menjadi presiden. "Pak Prabowo nasionalismenya luar biasa. Saya yakin dia tidak akan menjual aset, beliau dilahirkan sudah jadi orang kaya," imbuhnya. Faisal pun berharap agar Prabowo meningkatkan indeks SDM guru besar di Indonesia agar bisa menyamai negara-negara ASEAN lainnya.</p>', 1, '2014-04-01 21:14:48', '2014-04-01 20:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username_unique` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(3, 'admin', '$2y$10$mOS4FbjPetm2fn8KCKWOwejsGcHcXsTS3xhz5GOjdglR/GIA2/M2a', 'cahyo.mamen@gmail.com', '2014-03-20 01:46:32', '2014-03-20 01:46:32'),
(4, 'agus', '$2y$10$mTahbyQ6utke.Am/Fxjql.5NzgprM/dSE/IyG6YZNS.vtdy9JFoEa', 'cahyo.mamen@gmail.com', '2014-03-20 01:46:47', '2014-03-20 01:46:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
