-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2023 at 08:13 AM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u3738558_prspktv`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(110) NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(250) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `kecamatan` varchar(250) NOT NULL,
  `kelurahan` varchar(250) NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `id_unique`, `nama_user`, `username`, `email`, `mobile`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodepos`, `password`, `status`) VALUES
(1, '4521452346245', 'Ahmad Mulyana', 'amul', 'ahmadmulyana0807@gmail.com', '081292332485', 'Jl. Bulak Rantai No. 46 Rt. 009 Rw. 01', 'DKI Jakarta', 'Jakarta Timur', 'Kramat Jati ', 'Tengah', '13540', '7c7ca3adcc27648584387385fef6125b', '0');

-- --------------------------------------------------------

--
-- Table structure for table `db_order`
--

CREATE TABLE `db_order` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `nama_client` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` varchar(250) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_quote`
--

CREATE TABLE `db_quote` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `notelp` varchar(250) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `db_quote`
--

INSERT INTO `db_quote` (`id`, `id_unique`, `nama`, `email`, `notelp`, `pesan`, `status`) VALUES
(1, '28187450532', 'Amul', 'me@ahmadmulyana.my.id', '082122605514', 'test', '1'),
(2, '65192404367', 'Amul', 'ahmadmulyana0807@gmail.com', '082122605514', 'TESTER', '1'),
(3, '56385614273', 'Amul', 'me@ahmadmulyana.my.id', '082122605514', 'test', '1'),
(4, '29507345881', 'Amul', 'me@ahmadmulyana.my.id', '082122605514', 'tester', '1'),
(5, '30627557141', 'Amul', 'me@ahmadmulyana.my.id', '082122605514', 'tester', '1'),
(6, '50829674456', 'amul', 'ahmadmulyana0807@gmail.com', '082122605514', 'tester', '1');

-- --------------------------------------------------------

--
-- Table structure for table `img_news`
--

CREATE TABLE `img_news` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `nama_image` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `img_news`
--

INSERT INTO `img_news` (`id`, `id_unique`, `nama_image`, `slug`, `status`) VALUES
(5, '68246497913', 'detail-1.jpg', 'kemenangan-telak-rimo-juara', '1'),
(6, '71128090463', 'detail-2.jpg', 'kemenangan-telak-rimo-juara-cod-dunia', '1'),
(7, '83221574470', 'detailnews-231-22.jpg', 'hapus-news', '1'),
(8, '43276790328', 'detailnewssd-231-22.jpg', 'kemenangan-telak-rimo-juara-pubg-dunia', '1'),
(9, '23042596631', 'detailnewssdsd-231-22.jpg', 'kemenangan-telak-rimo-juara-cod-dunia-1', '1'),
(10, '63180647750', 'detailnewssdsd-231-22.jpg', 'kemenangan-telak-rimo-juara-3', '1'),
(11, '87579621062', 'detailnewssdsd-231sd-22.jpg', 'kemenangan-telak-rimo-juara-tambah-1', '1'),
(12, '81379514596', 'WhatsApp Image 2021-03-01 at 14.06.49.jpeg', 'peradaban-manusia', '1'),
(13, '70701968518', 'website.jpg', 'jasa-pembuatan-website-jakarta-timur', '1');

-- --------------------------------------------------------

--
-- Table structure for table `img_portfolio`
--

CREATE TABLE `img_portfolio` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `nama_image` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `img_portfolio`
--

INSERT INTO `img_portfolio` (`id`, `id_unique`, `nama_image`, `status`) VALUES
(1, '78461024359', 'ichafandy.png', '1'),
(2, '20990336588', 'ceritaminda.png', '1'),
(3, '91036575082', 'uvclean.png', '1'),
(4, '10285548407', 'rimo.png', '1'),
(5, '38409763576', 'intersport.png', '1'),
(6, '05574909816', 'indieland.png', '1'),
(7, '51600395234', 'fibercreme.png', '1'),
(8, '08947786392', 'communityarea.png', '1'),
(9, '00713992863', 'elevenia.png', '1'),
(10, '73596408173', 'frisianflag.png', '1'),
(11, '15209642833', 'akpol2001.png', '1'),
(12, '26350518874', 'energikvolts.png', '1'),
(13, '44520117633', 'harbarindo.png', '1'),
(14, '75516072448', 'hclinic.png', '1'),
(15, '05054977283', 'sugartech.png', '1'),
(16, '97015389446', 'suryanation.png', '1'),
(17, '80284417975', 'zto.png', '1'),
(18, '99716250884', 'warna.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `judul_news` varchar(250) NOT NULL,
  `kategori_news` varchar(3) NOT NULL,
  `excerpt_news` varchar(100) NOT NULL,
  `content_news` text NOT NULL,
  `author_news` varchar(250) NOT NULL,
  `tanggal_news` date NOT NULL,
  `slug_news` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `id_unique`, `judul_news`, `kategori_news`, `excerpt_news`, `content_news`, `author_news`, `tanggal_news`, `slug_news`, `status`) VALUES
(15, '70701968518', 'Jasa Pembuatan Website Jakarta Timur', '4', 'Jasa Pembuatan Website Jakarta Timur', '<p>Kami menawarkan jasa pembuatan website murah di Jakarta Timur dan sekitarnya. Kepada Anda para UKM di Jakarta Timur yang ingin memiliki website ataupun perusahaan di Jakarta Timur yang ingin membuat profil perusahaan. Toko Online, toko mebel, toko perlengkapan anak, toko aksesoris, toko binatang peliharaan, toko buah, penjualan mobil, website pribadi, penjualan properti, berita online, perjalanan, hotel, restoran, sekolah, sekolah asrama, kampus, lembaga kursus, lembaga pemerintah, rumah sakit, organisasi, yayasan, komunitas , reseller, dll.</p>\r\n\r\n<p>Disamping melayani pembuatan website. Kami juga melayani semua perlengkapan dan kebutuhan akan usaha Anda yaitu Aplikasi Seluler (Mobile Apps), Grafis Desain, Fotografi, Pemasaran Digital (Layanan SEO dan Adwords).</p>', 'Admin', '2022-02-12', 'jasa-pembuatan-website-jakarta-timur', '1');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `kategori_portfolio` varchar(10) NOT NULL,
  `judul_portfolio` varchar(250) NOT NULL,
  `nama_client` varchar(250) NOT NULL,
  `waktu` date NOT NULL,
  `web_client` varchar(250) NOT NULL,
  `deskripsi_portfolio` text NOT NULL,
  `deliverables` text DEFAULT NULL,
  `technology` text DEFAULT NULL,
  `img_portfolio` varchar(250) DEFAULT NULL,
  `slug_portfolio` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `id_unique`, `kategori_portfolio`, `judul_portfolio`, `nama_client`, `waktu`, `web_client`, `deskripsi_portfolio`, `deliverables`, `technology`, `img_portfolio`, `slug_portfolio`, `status`) VALUES
(1, '78461024359', '1', 'The Wedding of Icha & Fandy', 'Fandy Putra Diasya', '2020-02-02', 'https://ichafandysjourney.com/', '<p>Website Invitation untuk pernikahan Icha &amp; Fandy pada Februari 2020. Dilengkapi dengan fitur registrasi dan generate QR Code. Website disertai juga SSL sehingga menbambah sistem security.</p>\n<p>Website Invitation disempurnakan dengan Mobile View sehingga sangat memudahkan tamu undangan untuk bisa daftar menghadiri acara undangan pernikahan tersebut.</p>\n<p>Wedding Invitation ini juga menyuguhkan fitur Say It! yang merupakan ucapan kebahagiaan untuk pasangan pengantin.</p>\n<p>Serta database tamu undangan untuk mengetahui, tamu undangan yang akan hadir</p>', '<ul>\n    <li>UI / UX Design</li>\n    <li>Wedding Invitation Website</li>\n    <li>Invitation Form</li>\n    <li>QR Code Invitation</li>\n    <li>Share Hosting</li>\n    <li>Domain</li>\n    <li>Support and Maintenance</li>\n</ul>', '<ul>\n    <li>Figma</li>\n    <li>HTML 5</li>\n    <li>CSS 3</li>\n    <li>jQuery</li>\n    <li>Codeigniter</li>\n    <li>PHP</li>\n    <li>MySQL</li>\n</ul>', 'ichafandy.png', 'the-wedding-of-icha-fandy', '1'),
(2, '20990336588', '1', 'Ceritaminda.com', 'Ceritaminda', '2021-07-01', 'https://ceritaminda.com/', '<p>Amindana Chinika adalah perempuan kelahiran Jakarta, 17 Juni 2002 yang kini berusia 18 tahun. Sejak kecil Aminda dekat dengan musik dan sempat mempelajari piano, lalu beralih ke gitar yang masih ia tekuni hingga saat ini. Namun ketulusan dalam karakter vokalnya lah yang mempertemukannya dengan Yovie Widianto sampai sang maestro mempercayakannya dengan sebuah lagu berjudul &ldquo;Dua Centang Biru&rdquo;.</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Landing Page</li>\r\n    <li>Dashboard Page</li>\r\n    <li>Galeri Page</li>\r\n    <li>Berita Page</li>\r\n    <li>Domain</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>HTML 5</li>\r\n    <li>CSS 3</li>\r\n    <li>jQuery</li>\r\n    <li>Codeigniter</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'ceritamindacom', '1'),
(3, '91036575082', '1', 'UVClean', 'UVClean', '2019-01-01', 'https://uvclean.co.id/', '<p>Kami Putra Bangsa bekerja keras untuk memungkinkan standar industri baru untuk keselamatan dan meningkatkan kesadaran akan teknologi disinfeksi udara dan permukaan yang baru ini, memberikan solusi yang jauh lebih praktis, aman dan efisien untuk pasar dan aplikasi penting yang besar termasuk: Fasilitas medis dan gigi, ruang isolasi medis, ruang periksa dan ruang operasi dan area umum. Fasilitas pertahanan. Pengiriman dan logistic. Fasilitas perawatan lansia. Pusat penitipan anak. Restoran / Ritel. Fasilitas dan transportasi umum (pesawat terbang, kapal pesiar, kereta api, bus, mobil sewaan). Sekolah. Peralatan atletik. Kantor komersial dan fasilitas industry. Air / HVAC atau pemurnian air. Aplikasi sensitif terhadap air atau bahan kimia. Pembersihan rumah tangga. Persiapan makanan. Memperpanjang umur simpan makanan. Kebersihan tangan &ndash; tanpa air, sabun atau handuk kertas</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Dashboard Page</li>\r\n    <li>Produk Page</li>\r\n    <li>Berita Page</li>\r\n    <li>Contact Page</li>\r\n    <li>Domain</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>Wordpress</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'uvclean', '1'),
(4, '10285548407', '1', 'Rimo Team', 'Rimo Team Esport', '2020-07-01', 'https://rimoteam.com/', '<p>Rimo Team adalah Tim Esport pendatang baru yang berbasis di Jakarta</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Dashboard Page</li>\r\n    <li>Team Page</li>\r\n    <li>Media Page</li>\r\n    <li>About Page</li>\r\n    <li>Store Page</li>\r\n    <li>Domain</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>HTML 5</li>\r\n    <li>CSS 3</li>\r\n    <li>jQuery</li>\r\n    <li>Codeigniter</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'rimo-team', '1'),
(5, '38409763576', '3', 'Booth Intersport', 'Intersport', '2021-11-16', '#', '<p>Pembuatan desain 3D Booth Intersport</p>', '<ul>\r\n<li>Desain 3D</li>\r\n</ul>', '<ul>\r\n<li>Adobe Family</li>\r\n</ul>', NULL, 'booth-intersport', '1'),
(6, '05574909816', '3', 'Panggung Indieland', 'Indieland', '2021-11-16', '#', '<p>Pembuatan desain 3D Booth Indieland</p>', '<ul>\r\n<li>Desain 3D</li>\r\n</ul>', '<ul>\r\n<li>Adobe Family</li>\r\n</ul>', NULL, 'panggung-indieland', '1'),
(7, '51600395234', '3', 'Booth Fiber Creme', 'Fiber Creme', '2021-11-16', '#', '<p>Pembuatan desain 3D Booth Fiber Creme</p>', '<ul>\r\n<li>Desain 3D</li>\r\n</ul>', '<ul>\r\n<li>Adobe Family</li>\r\n</ul>', NULL, 'booth-fiber-creme', '1'),
(8, '08947786392', '3', 'Booth Community Area', 'Community Area', '2021-11-16', '#', '<p>Pembuatan booth community area</p>', '<ul>\r\n<li>Desain 3D</li>\r\n</ul>', '<ul>\r\n<li>Adobe Family</li>\r\n</ul>', NULL, 'booth-community-area', '1'),
(9, '00713992863', '3', 'Booth Elevenia', 'Elevenia', '2021-11-16', '#', '<p>Pembuatan Booth Elevenia</p>', '<ul>\r\n<li>Desain 3D</li>\r\n</ul>', '<ul>\r\n<li>Adobe Family</li>\r\n</ul>', NULL, 'booth-elevenia', '1'),
(10, '73596408173', '3', 'Stiker Mobil Frisian Flag', 'Frisian Flag', '2021-11-16', '#', '<p>Pembuatan Stiker Frisian Flag</p>', '<ul>\r\n<li>Desain 3D</li>\r\n</ul>', '<ul>\r\n<li>Adobe Family</li>\r\n</ul>', NULL, 'stiker-mobil-frisian-flag', '1'),
(11, '15209642833', '1', 'Website Portal Video', 'AKPOL 2001 SARJA ARYA RACANA', '2021-12-28', 'http://akpol2001.com/', '<p>Sebuah website yang menyajikan informasi berupa video dan berita AKPOL 2001 Sarja Arya Racana</p>', '<ul>\r\n<li>UI / UX Design</li>\r\n<li>Landing Page</li>\r\n<li>Dashboard Page</li>\r\n<li>Galeri Page</li>\r\n<li>Berita Page</li>\r\n<li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n<li>HTML 5</li>\r\n<li>CSS 3</li>\r\n<li>jQuery</li>\r\n<li>Codeigniter</li>\r\n<li>PHP</li>\r\n<li>MySQL</li>\r\n</ul>', NULL, 'website-portal-video', '1'),
(12, '26350518874', '1', 'Energik Volts Motor Listrik', 'Energik Volts', '2021-12-24', 'https://energikvolts.com/', '<p>Website Company Profile Perusahaan motor listrik Energik Volts</p>', '<ul>\r\n<li>UI / UX Design</li>\r\n<li>Landing Page</li>\r\n<li>Dashboard Page</li>\r\n<li>Tentang Energik Volts Page</li>\r\n<li>Detail Produk Page</li>\r\n<li>Artikel Page</li>\r\n<li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n<li>HTML 5</li>\r\n<li>CSS 3</li>\r\n<li>jQuery</li>\r\n<li>Codeigniter</li>\r\n<li>PHP</li>\r\n<li>MySQL</li>\r\n</ul>', NULL, 'energik-volts-motor-listrik', '1'),
(14, '44520117633', '1', 'Harbarindo', 'Harbarindo', '2022-01-05', 'https://harbarindo.co.id/', '<p>Harbarindo is to focus on what the clients want and be committed to do our best for their satisfaction. It is our privilege to say thank you to the clients that have enabled PT. Harbarindo Baharitama to grow to its current form. We realize that our journey has just begun and we are aware that the journey has a long way to go with many future challenges to face. We are supported by reputable partners and dedicated employee and guided by clear vision. Together we are very confident in future growth based on our commitment to prioritize client satisfaction.</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Dashboard Page</li>\r\n    <li>About Page</li>\r\n    <li>Agencies Page</li>\r\n    <li>Experience Page</li>\r\n    <li>Contact Page</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>Wordpress</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'harbarindo', '1'),
(15, '75516072448', '1', 'Hclinic', 'Hclinic', '2021-06-16', 'https://hclinic.id/', '<p><strong>Hclinic&nbsp;</strong>Berasal dari kata Honest, Humble, dan Harmony ini ingin memberikan pelayanan kesehatan dan kecantikan dengan mengedepankan kejujuran, kedekatan dan hubungan yang baik antara dokter, pasien serta seluruh karyawan nya, sehingga tercipta keharmonisan dari hasil kerja tim dokter</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Dashboard Page</li>\r\n    <li>About Page</li>\r\n    <li>Service Page</li>\r\n    <li>Gallery Page</li>\r\n    <li>Blog Page</li>\r\n    <li>Contact Page</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>Wordpress</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'hclinic', '1'),
(16, '05054977283', '1', 'Sugar Technology', 'Sugar Technology', '2020-06-18', 'https://sugar.technology/', '<p>Sugar Technology adalah perusahaan produk IoT dan Gaya Hidup yang bertujuan untuk menyederhanakan hidup Anda melalui penggunaan teknologi</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Dashboard Page</li>\r\n    <li>About Page</li>\r\n    <li>Product Page</li>\r\n    <li>Shop Page</li>\r\n    <li>Support Page</li>\r\n    <li>Contact Page</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>Wordpress</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'sugar-technology', '1'),
(17, '97015389446', '2', 'Suryanation Motorland Battle', 'Suryanation', '2018-08-01', '#', '<p>Produk ini adalah sebuah aplikasi untuk membantu jalan nya acara Suryanation Motorland dari sisi Games. Terdapat beberapa jenis games dari acara road show di 5 kota besar Indonesia yaitu di mulai dari Medan, Palembang, Makassar, Bali dan terakhir Surabaya. Final di adakan di Kawasan Senayan Jakarta.<br /><br />Aplikasi ini terintegrasi penuh sehingga menciptakan sebuah Fitur baru dari acara Event besar Suryanation Motorland yang dengan luar biasa dan ditampilkan di layar besar Main Stage untuk Real Time nya serta memfasilitasi pengunjung yang ingin menikmati games di acara Event Suryanation Motorland. Di dalam nya juga di sediakan fitur untuk redeem voucher dari poin yang telah di mainkan pengunjung. Sehingga pengunjung dapat menukarkan poin nya tersebut dengan merchandise yang telah disediakan panitia Event.</p>\r\n<p><a href=\"https://perspektiv.id/portfolio\">#suryanation</a> <a href=\"https://perspektiv.id/portfolio\">#suryanationmotorland</a></p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Apps Mobile</li>\r\n    <li>Register Page</li>\r\n    <li>Games Page</li>\r\n    <li>Redeem Page</li>\r\n    <li>CMS</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>HTML 5</li>\r\n    <li>CSS 3</li>\r\n    <li>jQuery</li>\r\n    <li>Ionic</li>\r\n    <li>Codeigniter</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'suryanation-motorland-battle', '1'),
(18, '80284417975', '2', 'ZTO Towing', 'ZTO Towing', '2022-02-01', 'https://play.google.com/store/apps/details?id=com.zto.towing', '<p>ZTO Towing adalah sebuah aplikasi layanan Transportasi Towing untuk mengantar kendara Lintas Provinsi dan dalam Kota</p>', '<ul>\r\n    <li>UI / UX Design</li>\r\n    <li>Apps Mobile for Customer</li>\r\n    <li>Apps Mobile for Driver</li>\r\n    <li>Register Page</li>\r\n    <li>Dashboard Page</li>\r\n    <li>Order Page</li>\r\n    <li>Checksheet Page</li>\r\n    <li>CMS</li>\r\n    <li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>HTML 5</li>\r\n    <li>CSS 3</li>\r\n    <li>jQuery</li>\r\n    <li>Ionic</li>\r\n    <li>Codeigniter</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'zto-towing', '1'),
(19, '99716250884', '6', 'Salad Buah Warna 12,5', 'Salad Buah Warna 12,5', '2022-03-01', 'https://warna12koma5.com/', '<p>Salad Buah Warna 12,5 adalah salah satu Produk unggulan dari Warna, yang telah tersebar cabang ke beberapa daerah besar di Indonesia khususnya Jakarta, Bandung dan Yogyakarta. Kelezatan dipadukan dengan kesehatan membuat salad buah warna 12,5 sangat digemari bagi yang sedang&nbsp;menjalani program diet, cocok untuk anda pecinta buah, asupan ringan namun kaya akan vitamin, cocok untuk di konsumsi kalangan anak-anak, muda, dewasa dan orang tua.</p>\r\n<p>Selain Website Company Profile, kami juga melakukan pekerjaan di aplikasi inventory dan kasir di Salad Buah Warna 12,5 ini, yang akan segera di expansikan ke berbagai platform dan teknologi yang terbaru.</p>', '<ul>\r\n<li>UI / UX Design</li>\r\n<li>Website Compro</li>\r\n<li>Aplikasi Inventory dan Kasir</li>\r\n<li>Hosting</li>\r\n<li>Domain</li>\r\n<li>Support and Maintenance</li>\r\n</ul>', '<ul>\r\n    <li>Figma</li>\r\n    <li>HTML 5</li>\r\n    <li>CSS 3</li>\r\n    <li>jQuery</li>\r\n    <li>Codeigniter</li>\r\n    <li>PHP</li>\r\n    <li>MySQL</li>\r\n</ul>', NULL, 'salad-buah-warna-125', '1');

-- --------------------------------------------------------

--
-- Table structure for table `request_order`
--

CREATE TABLE `request_order` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `service` varchar(250) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_order`
--

INSERT INTO `request_order` (`id`, `id_unique`, `nama`, `email`, `mobile`, `service`, `pesan`, `status`) VALUES
(1, '77193924186', 'Amul', 'ahmadmulyana0807@gmail.com', '082122605514', 'website', 'tester', '1'),
(2, '70635016812', 'Amul', 'me@ahmadmulyana.my.id', '082122605514', 'website', 'tester', '1'),
(3, '16790502971', 'Amul', 'ahmadmulyana0807@gmail.com', '082122605514', 'website', 'Test', '1'),
(4, '43161578960', 'Amul', 'ahmadmulyana0807@gmail.com', '082122605514', 'mobile', 'Test', '1'),
(5, '08301483952', 'amul', 'me@ahmadmulyana.my.id', '082122605514', 'mobile', 'Testerrr', '1'),
(6, '88164732945', 'Amul', 'ahmadmulyana0807@gmail.com', '082122605514', 'website', 'Ok', '1'),
(7, '44571876082', 'els', 'elsys.codingcollective@gmail.com', '081249814100', 'website', '', '1'),
(8, '74613781524', 'els', 'elsys.codingcollective@gmail.com', '081249814100', 'consultant', 'knkn', '1'),
(9, '22363550194', 'Soila Layton', 'makemybusinessgreatagain@gmail.com', '0430-3616177', 'photo', 'It is with sad regret we are shutting down.\r\n\r\nWe have made all our leads available for a one time fee on DataList2023.com\r\n\r\nRegards,\r\nSoila', '1');

-- --------------------------------------------------------

--
-- Table structure for table `servicesp`
--

CREATE TABLE `servicesp` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `judul_service` varchar(250) NOT NULL,
  `konten_service` text NOT NULL,
  `proses` text DEFAULT NULL,
  `technology` text DEFAULT NULL,
  `img_service` varchar(250) DEFAULT NULL,
  `slug_service` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `servicesp`
--

INSERT INTO `servicesp` (`id`, `id_unique`, `judul_service`, `konten_service`, `proses`, `technology`, `img_service`, `slug_service`, `status`) VALUES
(2, '28076439731', 'website', '<div id=\"lipsum\">\r\n<p>Web developer menjadi salah satu karir yang paling diminati dan dicari banyak perusahaan saat ini. Pasalnya, untuk membuat sebuah web tentu saja dibutuhkan seorang developer yang memahami bahasa pemrograman untuk menerjemahkannya dan melakukan maintenance pada sebuah web tersebut. Sebenarnya bukan hanya itu saja perannya, web developer dituntut untuk bisa membuat situs web yang canggih dan menarik secara visual. Artinya, harus memiliki pemahaman yang kuat mengenai HTML, CSS, PHP, JavaScript,MySQL, hingga Wordpress.</p>\r\n<p>Tak heran jika web developer biasanya memiliki waktu kerja yang terbilang fleksibel. Sebab, pekerjaan mereka seperti tidak ada habisnya. Oleh karena itulah perusahaan memberikan waktu fleksibel bagi para web developer untuk menyelesaikan project atau deadlinenya.</p>\r\n</div>', '<p>Fase perencanaan adalah proses mendasar untuk memahami mengapa situs web harus dibangun. Selama fase analisis, kami berusaha untuk menentukan seperti apa tampilan situs web dan informasi apa yang akan disajikan. Selama fase desain prototipe, Perspektiv akan membuat template desain untuk ditinjau. Setelah desain situs web disetujui oleh klien Perspektiv dapat memulai pengembangan situs web.\r\nPengembangan situs web telah selesai dan sekarang saatnya untuk pengujian. Pengujian telah selesai dan website siap dirilis ke dunia. Kami akan menerapkan kata kunci dan tag judul yang sesuai untuk setiap halaman untuk memastikan peringkat halaman setinggi mungkin.\r\nSeiring berjalannya waktu, seringkali ada informasi dan/atau bagian dalam situs web yang memerlukan pembaruan. Mungkin juga ada halaman web baru atau informasi baru yang perlu ditambahkan ke situs web.\r\nFase perencanaan adalah proses mendasar untuk memahami mengapa situs web harus dibangun. Selama fase analisis, kami berusaha untuk menentukan seperti apa tampilan situs web dan informasi apa yang akan disajikan. Selama fase desain prototipe, Perspektiv akan membuat template desain untuk ditinjau. Setelah desain situs web disetujui oleh klien Perspektiv dapat memulai pengembangan situs web.</p>\r\n<p>Pengembangan situs web telah selesai dan sekarang saatnya untuk pengujian. Pengujian telah selesai dan website siap dirilis ke dunia. Kami akan menerapkan kata kunci dan tag judul yang sesuai untuk setiap halaman untuk memastikan peringkat halaman setinggi mungkin.</p>\r\n<p>Seiring berjalannya waktu, seringkali ada informasi dan/atau bagian dalam situs web yang memerlukan pembaruan. Mungkin juga ada halaman web baru atau informasi baru yang perlu ditambahkan ke situs web.</p>', '<p>Kami menggunakan berbagai teknologi dan platform untuk mengembangkan situs web dan eCommerce, dibuat oleh tim pengembang kami, memastikan pekerjaan kami mewakili merek Anda dan selaras dengan audiens target Anda</p>\r\n<strong>Engine</strong>\r\n<ul>\r\n<li>HTML</li>\r\n<li>CSS</li>\r\n<li>Javascript</li>\r\n<li>JQuery</li>\r\n<li>PHP</li>\r\n<li>Bootstrap</li>\r\n<li>Codeigniter</li>\r\n<li>Laravel</li>\r\n<li>Java</li>\r\n</ul>', 'web-image-dev.png', 'website', '1'),
(3, '89246372825', 'mobile', '<div id=\"lipsum\">\r\n<p>Menjadi seorang developer pada dasarnya harus kreatif menciptakan sesuatu, termasuk berbasis mobile yang harus disesuaikan dengan sistem operasi pada gadget saat ini. Selain kreativitas, dibutuhkan sebuah pemahaman algoritma yang baik. Sebab jika tidak, aplikasi sudah bisa dipastikan tidak akan berjalan dengan lancar dan terlalu banyak kesalahan.</p>\r\n<p>Pekerjaan mobile developer seperti ini banyak dibutuhkan dan diincar banyak perusahaan. Sebab, saat ini sebuah perusahaan pasti memiliki aplikasi yang dapat diakses pada gawai atau smartphone untuk memudahkan penggunanya.</p>\r\n</div>', '<p>Fase perencanaan adalah proses mendasar untuk memahami mengapa aplikasi seluler harus dibangun. Selama fase analisis, kami berusaha untuk menentukan seperti apa tampilan aplikasi seluler dan informasi apa yang akan disajikan. Selama fase desain prototipe, Perspektiv akan membuat desain UI / UX untuk ditinjau. Setelah desain UI / UX disetujui oleh klien, Perspektiv dapat memulai pengembangan aplikasi seluler.</p>\r\n<p>Pengembangan aplikasi seluler telah selesai dan sekarang saatnya untuk pengujian. Pengujian dilakukan untuk memastikan aplikasi seluler berfungsi penuh di semua perangkat target dan tidak ada bug. Pengujian telah selesai dan aplikasi seluler siap dirilis ke toko aplikasi.</p>\r\n<p>Dalam fase Pemeliharaan, Perspektiv akan membantu Anda memastikan bahwa aplikasi seluler Anda berfungsi dengan baik, serta menghilangkan kerentanan dan mengurangi risiko keamanan.</p>', '<p>Tim kami menggunakan teknologi terkini di iOS dan Android untuk mengembangkan aplikasi native dan lintas platform</p>\r\n<strong>Native</strong>\r\n<ul>\r\n<li>Android SDK (Java or Kotlin)</li>\r\n<li>iOS SDK (Objective-C or Swift)</li>\r\n</ul>\r\n<strong>Cross Platform</strong>\r\n<ul>\r\n<li>React Native</li>\r\n<li>Flutter</li>\r\n<li>Ionic</li>\r\n</ul>', 'mobile-image-dev.png', 'mobile', '1'),
(4, '66891803874', 'design', '<div id=\"lipsum\">\r\n\r\n<p>Graphic designer (desainer grafis) merupakan sebuah pekerjaan menciptakan ilustrasi, tipografi, fotografi, atau grafis motion baik untuk penerbit maupun media cetak dan elektronik. Seorang graphic designer bertanggung jawab atas tampilan pada media promosi suatu produk. Tugasnya menyampaikan informasi mengenai suatu produk secara menarik dengan mengakomodasi keinginan klien.</p>\r\n<p>Graphic designer tidak hanya bisa berkarier di media, tapi bisa juga di berbagai industri terutama industri jasa (telekomunikasi, periklanan, fotografi, pendidikan, konstruksi, teknologi informasi) maupun industri manufaktur (tekstil, garmen, mode, otomotif, elektronik).</p>\r\n<p>Graphic designer juga berperan dalam memecahkan masalah yang timbul di lingkup tertentu lewat iklan layanan masyarakat. Menjadi seorang graphic designer tidak harus jago menggambar, tapi sebaiknya memiliki kemampuan dasar menggambar supaya mudah dalam menuangkan ide-ide kreatif ke dalam bentuk visual. Selain itu, kemampuan menggunakan graphic software juga diperlukan untuk menunjang pembuatan ilustrasi.</p>\r\n</div>', NULL, NULL, 'photo-image-dev.png', 'design', '1'),
(5, '71734270478', 'photo', '<div id=\"lipsum\">\r\n\r\n<p>Fotografi adalah hobi bagi banyak orang. Namun apakah mereka sudah memahami pengertian fotografi? Belum tentu!</p>\r\n<p>Untuk mengabadikan momen tertentu, kita pasti sudah tidak asing lagi dengan kegiatan berfoto ria.</p>\r\n<p>Sudah menjadi hal yang wajib rasanya untuk mengambil gambar pada tiap momen yang kita punya untuk kemudian memamerkannya lewat akun-akun media sosial kita.</p>\r\n</div>', '<p>The planning phase is the fundamental process of understanding why the website should be built. During the analysis phase we strive to determine what the website will look like and what information will be presented. During the prototype design phase, Vodjo will create a design template for review. Once a website design has been approved by the client Vodjo can begin the website development.</p>\r\n<p>The website development has completed and it is time for testing. Testing has completed and the website is ready to be released to the world. We will apply the appropriate keywords and title tags to each page to ensure as high a page rank as possible.</p>\r\n<p>As time rolls on there is often information and/or section within the website that require updating. There may also be new web pages or new information that needs to be added to the website.</p>', '<p>We use a range of technologies and platforms to develop website and eCommerce, crafted by our team of developers, ensuring our work represents your brand and aligns with your target audience.</p>', 'photo-image-dev.png', 'photo', '1'),
(6, '05603718419', 'seo', '<p>Menjadi yang pertama dihalaman google adalah impian bagi setiap website bisnis. Dengan team yang berpengalaman webiste anda siap kami optimasi dengan strategi rahasia SEO kami.</p>\r\n\r\n<p>Kami selalu mengutamakan kualitas konten dan relevansi agar memudahkan proses optimasi di website klien hingga mendapatkan rank teratas di halaman google.</p>', '<p>The planning phase is the fundamental process of understanding why the website should be built. During the analysis phase we strive to determine what the website will look like and what information will be presented. During the prototype design phase, Vodjo will create a design template for review. Once a website design has been approved by the client Vodjo can begin the website development.</p>\r\n<p>The website development has completed and it is time for testing. Testing has completed and the website is ready to be released to the world. We will apply the appropriate keywords and title tags to each page to ensure as high a page rank as possible.</p>\r\n<p>As time rolls on there is often information and/or section within the website that require updating. There may also be new web pages or new information that needs to be added to the website.</p>', '<p>We use a range of technologies and platforms to develop website and eCommerce, crafted by our team of developers, ensuring our work represents your brand and aligns with your target audience.</p>', 'post-image-1586615344155.jpg', 'seo', '1'),
(7, '79255824669', 'consultant', '<p>Teknologi informasi sekarang ini sudah nggak bisa dilepaskan dari kehidupan manusia modern. Nggak hanya terkait dengan bidang teknologi aja, tetapi secara khusus teknologi informasi sudah ikut mempengaruhi bidang lainnya dan bahkan ikut mempengaruhi kebijakan dan strategi dunia usaha. Nah dengan semakin kuatnya pengaruh teknologi informasi maka diperlukan orang-orang yang nggak hanya mengerti teknis tetapi juga konsep dan penggunaan teknologi informasi pada bidang lainnya. Biasanya pekerjaan ini dilakukan oleh seorang konsultan IT.</p>\r\n<p>Konsultan IT biasanya bekerja sebagai jembatan antara tim teknis dan anggota staf untuk mengetahui kebutuhan model dan strategi bisnis klien. Keberadaan seorang konsultan IT di Indonesia tidak terlihat sebagai suatu profesi yang asing, bahkan banyak perusahaan yang menyediakan jasa konsultan dalam bidang teknologi informasi dan menawarkan gaji yang tinggi.</p>\r\n<p>Untuk menjadi seorang konsultan IT, kamu harus mempunyai kemampuan tersendiri di bidang teknologi informasi. Kamu juga harus memahami kepribadian serta harapan seorang klien dan menerjemahkannya dalam bentuk teknologi informasi.</p>', NULL, NULL, 'consultant-image-dev.png', 'consultant', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `notelp` varchar(250) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `notelp`, `pesan`) VALUES
(1, 'amul', 'me@ahmadmulyana.my.id', '082122605514', 'yr'),
(2, 'amul', 'me@ahmadmulyana.my.id', '082122605514', NULL),
(3, 'amul', 'me@ahmadmulyana.my.id', '082122605514', 'tester'),
(4, 'amul', 'me@ahmadmulyana.my.id', '082122605514', 'tester'),
(5, 'amul baru', 'me@ahmadmulyana.my.id', '082122605514', 'tester '),
(6, 'amul', 'me@ahmadmulyana.my.id', '082122605514', 'Via mobile'),
(7, 'Ss', 'support@energikvolts.com', '082122605514', 'Tedr'),
(8, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hi, my name is Eric and I_m betting you_d like your website perspektiv.id to generate more leads.\r\n\r\nHere_s how:\r\nTalk With Web Visitor is a software widget that_s works on your site, ready to capture any visitor_s Name, Email address and Phone Number.  It signals you as soon as they say they_re interested _ so that you can talk to that lead while they_re still there at perspektiv.id.\r\n\r\nTalk With Web Visitor _ CLICK HERE https://jumboleadmagnet.com for a live demo now.\r\n\r\nAnd now that you_ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation _ answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don_t take you up on your offer then, just follow up with text messages for new offers, content links, even just _how you doing?_ notes to build a relationship.\r\n\r\nCLICK HERE https://jumboleadmagnet.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry Talk With Web Visitor and get more leads now.\r\n\r\nEric\r\nPS: The studies show 7 out of 10 visitors don_t hang around _ you can_t afford to lose them!\r\nTalk With Web Visitor offers a FREE 14 days trial _ and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now_ don_t keep them waiting. \r\nCLICK HERE https://jumboleadmagnet.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=perspektiv.id\r\n'),
(9, 'MariaCaby', 'mariaCaby@mail.com', '+380 2640070805', '??ll? ?ll, guy?! ? kn?w, my me?s?g? may be t?o ?p??if??,\r\nBut m? ???ter f?und nice man here and they marr??d, ?? how about me?? :)\r\nI ?m 26 year? old, ??ri?, fr?m Ukr??ne, ? kn?w Engl?sh ?nd G?rm?n l?ngu?g?? ?lso\r\n?nd... ? h?v? ??e?ific disea?e, named nymph?man?a. Wh? know wh?t is thi?, ??n und?rst?nd m? (bett?r to ??? ?t imm?diately)\r\n?h yes, I ???k v?r? t??ty! ?nd I love not ?nl? ??ok ;))\r\n?m real girl, n?t pr??titute, ?nd lo?king f?r ?erious and h?t r?l?ti?n?h??...\r\n?n?w?y, ??u can f?nd m? profile here: http://renliphi.tk/user/84048/ \r\n'),
(10, 'Agencia Subido', 'laura@agenciasubido.com', '655390359', '¡Hola! Me llamo Laura y estoy encantada de saludarte.\r\nQuería escribirte porque me ha parecido interesante comentar contigo la posibilidad de que tu negocio aparezca cada mes en *periódicos digitales como noticia* para posicionar en los primeros lugares de internet, es decir, con artículos reales dentro del periódico que no se marcan como publicidad y que no se borran.\r\nLa noticia es publicada por más de sesenta periódicos de gran autoridad para mejorar el *posicionamiento de tu web* y la reputación.\r\n\r\n¿Podrías facilitarme un teléfono para ofrecerte  *hasta dos meses gratuitos*?\r\nGracias'),
(11, 'Agencia Subido', 'laura.u@agenciasubido.com', '655390359', '¡Hola! Me llamo Laura y estoy encantada de saludarte.\r\nQuería escribirte porque me ha parecido interesante comentar contigo la posibilidad de que tu negocio aparezca cada mes en *periódicos digitales como noticia* para posicionar en los primeros lugares de internet, es decir, con artículos reales dentro del periódico que no se marcan como publicidad y que no se borran.\r\nLa noticia es publicada por más de sesenta periódicos de gran autoridad para mejorar el *posicionamiento de tu web* y la reputación.\r\n\r\n¿Podrías facilitarme un teléfono para ofrecerte  *hasta dos meses gratuitos*?\r\nGracias'),
(12, 'Agencia Subido', 'laura.o@agenciasubido.com', '655390359', '¡Hola! Me llamo Laura y estoy encantada de saludarte.\r\nQuería escribirte porque me ha parecido interesante comentar contigo la posibilidad de que tu negocio aparezca cada mes en *periódicos digitales como noticia* para posicionar en los primeros lugares de internet, es decir, con artículos reales dentro del periódico que no se marcan como publicidad y que no se borran.\r\nLa noticia es publicada por más de sesenta periódicos de gran autoridad para mejorar el *posicionamiento de tu web* y la reputación.\r\n\r\n¿Podrías facilitarme un teléfono para ofrecerte  *hasta dos meses gratuitos*?\r\nGracias');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `judul_job` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `isi_job` text NOT NULL,
  `job_slug` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `id_unique`, `judul_job`, `lokasi`, `isi_job`, `job_slug`, `status`) VALUES
(2, '01352035781', 'Videographer', 'Jakarta', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum justo at ex fringilla, porta vulputate neque dapibus. Mauris a aliquet lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas at suscipit justo. Sed vulputate nunc sed libero posuere dictum. Donec quis nisl vitae metus pharetra commodo quis condimentum lectus. Duis eu metus nisi. Nulla pretium tortor egestas neque interdum, quis ullamcorper lectus accumsan. Cras velit sapien, pellentesque et dui vitae, ultricies sollicitudin felis. Praesent ullamcorper, ligula condimentum facilisis sagittis, ante mauris bibendum dolor, eget molestie nisl turpis ut justo.</p>\r\n<p>Nullam sit amet molestie dui. Integer lacinia tortor justo, at egestas leo dignissim convallis. Mauris rutrum metus et posuere lacinia. Ut ac sagittis libero, accumsan convallis eros. Fusce non nibh gravida, porttitor mauris vel, accumsan lorem. Etiam ut quam nunc. Proin in ipsum tempor, accumsan neque sit amet, egestas turpis. Pellentesque nulla eros, volutpat porta diam hendrerit, tempor laoreet nisi. Sed auctor, diam ac pharetra ultrices, erat nisi auctor sem, vitae luctus elit dolor quis neque. Aliquam imperdiet pulvinar leo, elementum convallis tortor interdum nec.</p>\r\n<p>Etiam velit lacus, dignissim et urna at, vestibulum porttitor libero. Nam bibendum neque et elementum volutpat. Nullam laoreet arcu vel lectus venenatis, sit amet interdum sapien bibendum. Fusce et sem ac libero sagittis iaculis. Duis pellentesque lacus ut sapien interdum viverra. Duis eu sem accumsan, pharetra justo eu, auctor dui. Donec in molestie velit. Proin maximus, justo ac aliquet faucibus, ante ipsum tempus nisl, non vulputate mi ante ut magna. Pellentesque sit amet turpis mauris. Fusce facilisis dignissim venenatis. Quisque viverra, risus a laoreet euismod, nisl mauris egestas libero, ac rutrum elit nisi sed quam.</p>', 'videographer', '1'),
(3, '57294591307', 'Freelance Design Graphic', 'Jakarta', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum justo at ex fringilla, porta vulputate neque dapibus. Mauris a aliquet lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas at suscipit justo. Sed vulputate nunc sed libero posuere dictum. Donec quis nisl vitae metus pharetra commodo quis condimentum lectus. Duis eu metus nisi. Nulla pretium tortor egestas neque interdum, quis ullamcorper lectus accumsan. Cras velit sapien, pellentesque et dui vitae, ultricies sollicitudin felis. Praesent ullamcorper, ligula condimentum facilisis sagittis, ante mauris bibendum dolor, eget molestie nisl turpis ut justo.</p>\r\n<p>Nullam sit amet molestie dui. Integer lacinia tortor justo, at egestas leo dignissim convallis. Mauris rutrum metus et posuere lacinia. Ut ac sagittis libero, accumsan convallis eros. Fusce non nibh gravida, porttitor mauris vel, accumsan lorem. Etiam ut quam nunc. Proin in ipsum tempor, accumsan neque sit amet, egestas turpis. Pellentesque nulla eros, volutpat porta diam hendrerit, tempor laoreet nisi. Sed auctor, diam ac pharetra ultrices, erat nisi auctor sem, vitae luctus elit dolor quis neque. Aliquam imperdiet pulvinar leo, elementum convallis tortor interdum nec.</p>\r\n<p>Etiam velit lacus, dignissim et urna at, vestibulum porttitor libero. Nam bibendum neque et elementum volutpat. Nullam laoreet arcu vel lectus venenatis, sit amet interdum sapien bibendum. Fusce et sem ac libero sagittis iaculis. Duis pellentesque lacus ut sapien interdum viverra. Duis eu sem accumsan, pharetra justo eu, auctor dui. Donec in molestie velit. Proin maximus, justo ac aliquet faucibus, ante ipsum tempus nisl, non vulputate mi ante ut magna. Pellentesque sit amet turpis mauris. Fusce facilisis dignissim venenatis. Quisque viverra, risus a laoreet euismod, nisl mauris egestas libero, ac rutrum elit nisi sed quam.</p>', 'video-editor', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_order`
--
ALTER TABLE `db_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_quote`
--
ALTER TABLE `db_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_news`
--
ALTER TABLE `img_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_portfolio`
--
ALTER TABLE `img_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_order`
--
ALTER TABLE `request_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesp`
--
ALTER TABLE `servicesp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_order`
--
ALTER TABLE `db_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_quote`
--
ALTER TABLE `db_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `img_news`
--
ALTER TABLE `img_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `img_portfolio`
--
ALTER TABLE `img_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `request_order`
--
ALTER TABLE `request_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `servicesp`
--
ALTER TABLE `servicesp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
