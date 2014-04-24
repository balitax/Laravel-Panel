-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2014 at 10:22 AM
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
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `img_header` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `img_header`, `content`, `updated_at`, `created_at`) VALUES
(7, 'Bobol PANDI, Hacker Kembar Asal Ponorogo Disidang 123', 'bobol-pandi-hacker-kembar-asal-ponorogo-disidang-123', 'hacksgetty460.jpg', '<p><strong style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Jakarta</strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;- Pengelola Nama Domain Internet Indonesia (PANDI) ternyata pernah dibobol oleh hacker kembar asal Ponorogo, Jawa Timur. Pelaku yang masih remaja ini pun sekarang tengah menghadapi tuntutan di meja hijau.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Ketua PANDI Bidang Sosialisasi dan Komunikasi, Sigit Widodo menjelaskan, kasus pembobolan ini sebenarnya terjadi beberapa tahun lalu, tepatnya di tahun 2010.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">"Jadi saat itu, mereka (hacker kembar berinisial DBR dan ABR tersebut-red.) membobol server PANDI," kata Sigit kepada&nbsp;</span><strong style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">detikINET</strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">, Rabu (23/4/2014).</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Lantaran saat itu PANDI berstatus sebagai penyedia infrastruktur internet maka kejadian pembobolan tersebut dilaporkan kepada Direktorat Keamanan Informasi Kementerian Kominfo.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">"Sampai akhirnya PPNS (Penyidik Pegawai Negeri Sipil) dan kepolisian menindaklanjuti dan melakukan penyelidikan. Karena prosesnya yang lama baru sekarang-sekarang kasus ini disidangkan lagi," jelas Sigit.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Hakim di pengadilan Ponorogo mendakwa dua tersangka dengan pasal 48 (1) jo pasal 32 (1) UU no.11/2008 tentang Informasi dan Transaksi Elektronik jo pasal 55 (1) KUHP, Subsidair 46(1) jo pasal 30(1) uu 11/2008 jo pasal 55 KUHP.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Sigit melanjutkan, PANDI sebenarnya berharap kasus ini segera selesai dan tersangka cukup mendapatkan hukuman yang seringan-ringannya.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">"Karena mereka masih muda, jadi mungkin lebih ke hukuman yang sifatnya mendidik. Selain itu kasihan juga kasus ini digantung, sampai 4 tahun," pungkasnya.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><strong style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">(ash/tyo)</strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">sumber : detikcom</span></strong></p>', '2014-04-23 00:10:44', '2014-04-22 23:44:12'),
(8, 'TV Terkena Virus? Mungkin Saja! Hati hati', 'tv-terkena-virus-mungkin-saja-hati-hati', '143658_lginnofest2014asia_he_1.jpg', '<p><strong style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">akarta</strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;- Ponsel dan komputer memang masih menjadi target utama serangan virus. Namun jangan salah, TV yang sudah mulai bisa terhubung ke internet juga bisa menjadi korban program jahat itu.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">"Ancaman akan bergeser dari perangkat bergerak ke perangkat rumah, seperti televisi," prediksi Eugene Kaspersky, pencetus antivirus Kaspersky.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">"Kami sudah punya antivirus untuk mobile, dan kini kami juga sudah memiliki produk purwarupa untuk TV," lanjut pria 48 tahun itu, seperti dikutip&nbsp;</span><strong style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">detikINET&nbsp;</strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">dari&nbsp;</span><em style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Digital Trends</em><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">, Senin (21/4/2014).</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">TV yang bisa terhubung ke internet, atau akrab disebut smart TV, memang mulai banyak digunakan. Tak terkecuali di Indonesia. Data GFK untuk akhir 2013 lalu menyebutkan, smart TV memiliki pangsa pasar sekitar 15% dan terus meningkat.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Namun bukan cuma TV yang akan menjadi incaran para penjahat cyber. Alat-alat seperti set-top box yang kini sudah memiliki sistem operasi juga berpotensi menjadi korban program jahat.</span><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><br style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;" /><strong style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">(eno/ash)</strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="font-size: 13px; font-family: Arial, Helvetica, sans-serif;">sumber:detikcom</span></strong></p>', '2014-04-23 00:11:07', '2014-04-22 23:44:58');

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
(2, 'Belum Ada Aturan Kampanye di Sosmed, Bawaslu: Tolong Jangan Saling Serang dan Adu Hantam', 'belum-ada-aturan-kampanye-di-sosmed-bawaslu-tolong-jangan-saling-serang-dan-adu-hantam', '<p style="text-align: justify;">Jakarta - Badan Pengawas Pemilu (Bawaslu) menyatakan kampanye di sosial media sangat keras dan tak sedikit yang berisi saling hindar dan saling menyerang. Kampanye di media sosial juga tak terbendung karena belum ada aturan atau regulasi terkait hal ini.</p>\r\n<p style="text-align: justify;">"Tidak diatur mengenai itu, karena kalau pun ada aturan kampanye di sosial media, penerapannya sulit," kata Komisioner Bawaslu Nelson Simanjuntak kepada detikcom, Rabu (2/4/2014). Bawaslu hanya bisa berharap kepada para pengguna media sosial seperti Twitter untuk cerdas selektif menanggapi isu-isu seputar pemilu yang berkembang. Namun tak menutup kemungkinan jika salah satu pihak yang merasa dirugikan melapor ke pihak kepolisian menggunakan UU ITE. "Kita patuhlah dan jangan ganggu proses pemilu dengan cara tidak baik.</p>\r\n<p style="text-align: justify;">Karena untuk berkampanye di media sosial semua terbuka, kesempatan sama, tinggal siapa yang paling pintar menggunakan itu. Segi akses dan keadilan itu kan tidak ada yang dibatasi. Setiap orang bebas menggunakannya, jadi tinggal bagaimana menggunakannya dengan baik," imbuh Nelson. Nelson menilai pengguna Twitter atau media sosial lainnya adalah orang-orang yang cerdas. Sehingga ia optimis, dampak buruk kampanye di media sosial tak akan terlalu berpengaruh pada kehidupan nyata.</p>\r\n<p style="text-align: justify;">"Twitter itu kan tidak semua masyarakat Indonesia menggunakan, paling kelompok-kelompok yang tidak terlalu terpengaruh dengan isu-isu yang berkembang di media sosial. Saya yakin lebih banyak pemilih Indonesia yang rasional menggunakan media sosial," ujar Nelson.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>(Agus)</strong></p>', 1, '2014-04-22 23:23:42', '2014-04-01 19:46:46'),
(4, 'Prabowo di Mata Para Guru Besar: Tegas dan Punya Visi Ekonomi Dunia', 'prabowo-di-mata-para-guru-besar-tegas-dan-punya-visi-ekonomi-dunia', '<p>Jakarta - Sejumlah guru besar emeritus/non PNS dan cendekiawan hari ini akan mendeklarasikan dukungan mereka kepada Prabowo Subianto sebagai calon Presiden RI 2014-2019. Dalam pandangan mereka, Prabowo adalah sosok yang tegas serta memiliki program-program ekonomi yang baik. "Saya ini guru besar emeritus di bidang ekonomi, Gerindra juga punya program ekonomi. Saya tertarik dengan gagasannya kemudian beliau juga ada kontak dengan dunia akademis, jadi mengundang juga. Saya jadi penasaran, ada suatu parpol yang mengkontak dunia akademis," kata Prof. Dr. Yuyun Wirasasmita, M.Sc di Kirana Ballroom, Hotel Kartika Chandra, Jl. Gatot Subroto, Jaksel, Rabu (2/4/2014). Yuyun yang merupakan mantan Rektor Universitas Padjajaran ini juga melihat Prabowo sebagai sosok yang tegas. "Satu sifat yang dimiliki Prabowo yaitu ketegasan yang tidak dimiliki yang lain," ujarnya. Yuyun rencananya akan membacakan deklarasi dukungan untuk Prabowo dari guru besar emeritus/non PNS dan cendekiawan di acara yang dimulai pukul 10.00 WIB. Prabowo sendiri direncanakan untuk hadir dan juga memberikan sambutan namun hingga saat ini belum tampak. Salah seorang guru besar lainnya, Prof. Dr. Faisal Santiago kagum pada sosok Prabowo yang fokus pada bidang ekonomi dan pembangunan. Ia juga berharap agar Prabowo dengan latar belakang militernya mampu memimpin negara ini. "Dalam segala hal selalu yang bersangkutan (Prabowo) berbicara mengenai pembangunan ekonomi berbasis kerakyatan, ini modal utama bagi teman2-teman guru besar. Lalu kita lihat kegigihan beliau, mungkin latar belakang militer ingin menjadikan negara ini berjaya seperti masa lalu," ujar Guru Besar Universitas Borobudur ini. Faisal membandingkan dua capres yang saat ini bersaing yaitu Prabowo dan Joko Widodo. Menurutnya, Jokowi belum teruji di tingkat nasional. "Saya melihatnya kalau Pak Jokowi scope-nya baru lokal, belum diuji secara menyeluruh dalam gubernur pun yang bersangkutan baru satu tahunan, harusnya dia selesaikan Jakarta dulu," kata pria yang menekuni ilmu hukum ini. Faisal juga yakin aset-aset negara aman apabila Prabowo menjadi presiden. "Pak Prabowo nasionalismenya luar biasa. Saya yakin dia tidak akan menjual aset, beliau dilahirkan sudah jadi orang kaya," imbuhnya. Faisal pun berharap agar Prabowo meningkatkan indeks SDM guru besar di Indonesia agar bisa menyamai negara-negara ASEAN lainnya.</p>', 1, '2014-04-01 21:14:48', '2014-04-01 20:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `images` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `title`, `images`, `slug`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Portal Kalimantan', 'media1.jpg', 'portal-kalimantan', '<p>Content Portofolio Here</p>', '2014-04-23 02:03:47', '2014-04-23 02:03:47'),
(2, 'Marrakech Gajah Duduk', 'dd.jpg', 'marrakech-gajah-duduk', '<p>Content Portofolio Here</p>', '2014-04-23 02:04:31', '2014-04-23 02:04:31'),
(3, 'PT Cipta Aneka Solusi', 'bg.jpg', 'pt-cipta-aneka-solusi', '<p>Content Portofolio Here</p>', '2014-04-23 02:05:23', '2014-04-23 02:05:23'),
(4, 'DPP Tapin Kalsel', 'AWSubs.jpg', 'dpp-tapin-kalsel', '<p>Content Portofolio Here</p>', '2014-04-23 02:06:31', '2014-04-23 02:06:31');

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
(4, 'agus', '$2y$10$fWSPJQU4C3rU8LGk92UdeemUW5Jo8tLvY.xA/L8V4eoKUAYfU7fU6', 'cahyo.mamen@gmail.com', '2014-03-20 01:46:47', '2014-04-23 00:38:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
