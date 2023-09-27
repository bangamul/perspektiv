-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 07:12 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perspektivdb`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `isi` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(11, '87579621062', 'detailnewssdsd-231sd-22.jpg', 'kemenangan-telak-rimo-juara-tambah-1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `img_portfolio`
--

CREATE TABLE `img_portfolio` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `nama_image` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_portfolio`
--

INSERT INTO `img_portfolio` (`id`, `id_unique`, `nama_image`, `status`) VALUES
(1, '78461024359', 'Icha_Fandy_Wedding-home.png', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `id_unique`, `judul_news`, `kategori_news`, `excerpt_news`, `content_news`, `author_news`, `tanggal_news`, `slug_news`, `status`) VALUES
(7, '68246497913', 'Kemenangan Telak Rimo Juara', '1', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non consequat dui, a tempor massa. Maecenas et posuere tortor. Praesent id euismod neque, sed tempor magna. Nullam non nunc commodo, rutrum neque quis, malesuada purus. Nam eget semper neque, eu mattis erat. Suspendisse sed semper lectus, at semper ligula. Integer commodo, diam ac bibendum tincidunt, nulla metus gravida lacus, vitae dictum orci augue porta sapien. Sed dictum urna quis urna blandit ornare. Quisque ornare varius nulla, eu placerat risus laoreet sit amet.</p>\r\n<p>Sed condimentum nunc sit amet hendrerit commodo. Phasellus tellus ante, fermentum ut leo nec, placerat consequat lorem. Maecenas ut pulvinar ligula. Sed ultrices, diam euismod tristique malesuada, ipsum quam suscipit ipsum, sed malesuada nisi nibh sed ligula. Proin convallis ultrices tempor. Aliquam erat volutpat. Mauris eget cursus lectus, ac consequat ex. Cras lobortis nibh non lacus fringilla, non malesuada magna pellentesque. Phasellus sit amet mi sed erat malesuada lacinia non a lorem. Phasellus dictum non nisi nec tempor. Nam convallis eget sem vitae consequat. Etiam elementum massa commodo sapien tristique, ac semper justo vehicula. Duis enim eros, dapibus at lacus ut, blandit mattis nunc. Pellentesque risus mi, pulvinar et odio id, laoreet cursus dui. Suspendisse tellus dui, tincidunt ac ultricies vel, suscipit vel tortor. Curabitur pretium at odio sit amet rutrum.</p>\r\n<p>Quisque a nunc sit amet arcu venenatis aliquam. Quisque orci purus, placerat ut nunc id, pulvinar gravida turpis. Morbi id sem ante. Integer eleifend rhoncus lobortis. Aenean vel convallis libero, vitae tincidunt massa. Nullam fringilla tincidunt urna, nec sodales est sagittis in. Ut in cursus augue, in egestas velit. Ut bibendum velit facilisis porttitor gravida.</p>\r\n<p><img src=\"http://localhost/rimo/assets/images/news/post-image-1584264523569.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Vivamus at ultrices justo. Nam iaculis ante odio, consequat ullamcorper nunc pellentesque quis. Integer magna diam, blandit in porta mollis, bibendum id purus. Etiam eget nisi ut velit sodales consequat. Pellentesque eget sapien vitae metus cursus tempor id id ex. Donec ornare lobortis justo non tincidunt. Nam consectetur velit sed dui rutrum, ut mattis quam euismod. Morbi volutpat sed ante id bibendum. Suspendisse iaculis urna at euismod porta. Suspendisse nisi massa, sodales eu neque vitae, fermentum pulvinar risus.</p>', 'Genta Prana', '2020-03-15', 'kemenangan-telak-rimo-juara', '1'),
(8, '71128090463', 'Kemenangan Telak Rimo Juara COD Dunia', '3', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non consequat dui, a tempor massa. Maecenas et posuere tortor. Praesent id euismod neque, sed tempor magna. Nullam non nunc commodo, rutrum neque quis, malesuada purus. Nam eget semper neque, eu mattis erat. Suspendisse sed semper lectus, at semper ligula. Integer commodo, diam ac bibendum tincidunt, nulla metus gravida lacus, vitae dictum orci augue porta sapien. Sed dictum urna quis urna blandit ornare. Quisque ornare varius nulla, eu placerat risus laoreet sit amet.</p>\r\n<p><img src=\"http://localhost/rimo/assets/images/news/post-image-1584266400898.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Sed condimentum nunc sit amet hendrerit commodo. Phasellus tellus ante, fermentum ut leo nec, placerat consequat lorem. Maecenas ut pulvinar ligula. Sed ultrices, diam euismod tristique malesuada, ipsum quam suscipit ipsum, sed malesuada nisi nibh sed ligula. Proin convallis ultrices tempor. Aliquam erat volutpat. Mauris eget cursus lectus, ac consequat ex. Cras lobortis nibh non lacus fringilla, non malesuada magna pellentesque. Phasellus sit amet mi sed erat malesuada lacinia non a lorem. Phasellus dictum non nisi nec tempor. Nam convallis eget sem vitae consequat. Etiam elementum massa commodo sapien tristique, ac semper justo vehicula. Duis enim eros, dapibus at lacus ut, blandit mattis nunc. Pellentesque risus mi, pulvinar et odio id, laoreet cursus dui. Suspendisse tellus dui, tincidunt ac ultricies vel, suscipit vel tortor. Curabitur pretium at odio sit amet rutrum.</p>', 'Genta Prana', '2020-03-15', 'kemenangan-telak-rimo-juara-cod-dunia', '1'),
(10, '43276790328', 'Kemenangan Telak Rimo Juara PUBG Dunia', '2', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non consequat dui, a tempor massa. Maecenas et posuere tortor. Praesent id euismod neque, sed tempor magna. Nullam non nunc commodo, rutrum neque quis, malesuada purus. Nam eget semper neque, eu mattis erat. Suspendisse sed semper lectus, at semper ligula. Integer commodo, diam ac bibendum tincidunt, nulla metus gravida lacus, vitae dictum orci augue porta sapien. Sed dictum urna quis urna blandit ornare. Quisque ornare varius nulla, eu placerat risus laoreet sit amet.</p>\r\n<p>Sed condimentum nunc sit amet hendrerit commodo. Phasellus tellus ante, fermentum ut leo nec, placerat consequat lorem. Maecenas ut pulvinar ligula. Sed ultrices, diam euismod tristique malesuada, ipsum quam suscipit ipsum, sed malesuada nisi nibh sed ligula. Proin convallis ultrices tempor. Aliquam erat volutpat. Mauris eget cursus lectus, ac consequat ex. Cras lobortis nibh non lacus fringilla, non malesuada magna pellentesque. Phasellus sit amet mi sed erat malesuada lacinia non a lorem. Phasellus dictum non nisi nec tempor. Nam convallis eget sem vitae consequat. Etiam elementum massa commodo sapien tristique, ac semper justo vehicula. Duis enim eros, dapibus at lacus ut, blandit mattis nunc. Pellentesque risus mi, pulvinar et odio id, laoreet cursus dui. Suspendisse tellus dui, tincidunt ac ultricies vel, suscipit vel tortor. Curabitur pretium at odio sit amet rutrum.</p>', 'Genta Prana', '2020-03-18', 'kemenangan-telak-rimo-juara-pubg-dunia', '1'),
(11, '23042596631', 'Kemenangan Telak Rimo Juara COD Dunia 1', '3', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non consequat dui, a tempor massa. Maecenas et posuere tortor. Praesent id euismod neque, sed tempor magna. Nullam non nunc commodo, rutrum neque quis, malesuada purus. Nam eget semper neque, eu mattis erat. Suspendisse sed semper lectus, at semper ligula. Integer commodo, diam ac bibendum tincidunt, nulla metus gravida lacus, vitae dictum orci augue porta sapien. Sed dictum urna quis urna blandit ornare. Quisque ornare varius nulla, eu placerat risus laoreet sit amet.</p>\r\n<p><img src=\"http://localhost/rimo/assets/images/news/post-image-1584535085241.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Sed condimentum nunc sit amet hendrerit commodo. Phasellus tellus ante, fermentum ut leo nec, placerat consequat lorem. Maecenas ut pulvinar ligula. Sed ultrices, diam euismod tristique malesuada, ipsum quam suscipit ipsum, sed malesuada nisi nibh sed ligula. Proin convallis ultrices tempor. Aliquam erat volutpat. Mauris eget cursus lectus, ac consequat ex. Cras lobortis nibh non lacus fringilla, non malesuada magna pellentesque. Phasellus sit amet mi sed erat malesuada lacinia non a lorem. Phasellus dictum non nisi nec tempor. Nam convallis eget sem vitae consequat. Etiam elementum massa commodo sapien tristique, ac semper justo vehicula. Duis enim eros, dapibus at lacus ut, blandit mattis nunc. Pellentesque risus mi, pulvinar et odio id, laoreet cursus dui. Suspendisse tellus dui, tincidunt ac ultricies vel, suscipit vel tortor. Curabitur pretium at odio sit amet rutrum.</p>', 'Genta Prana', '2020-03-18', 'kemenangan-telak-rimo-juara-cod-dunia-1', '1'),
(12, '63180647750', 'Kemenangan Telak Rimo Juara 3', '1', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non consequat dui, a tempor massa. Maecenas et posuere tortor. Praesent id euismod neque, sed tempor magna. Nullam non nunc commodo, rutrum neque quis, malesuada purus. Nam eget semper neque, eu mattis erat. Suspendisse sed semper lectus, at semper ligula. Integer commodo, diam ac bibendum tincidunt, nulla metus gravida lacus, vitae dictum orci augue porta sapien. Sed dictum urna quis urna blandit ornare. Quisque ornare varius nulla, eu placerat risus laoreet sit amet.</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"http://localhost/rimo/assets/images/news/post-image-1584535153273.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Sed condimentum nunc sit amet hendrerit commodo. Phasellus tellus ante, fermentum ut leo nec, placerat consequat lorem. Maecenas ut pulvinar ligula. Sed ultrices, diam euismod tristique malesuada, ipsum quam suscipit ipsum, sed malesuada nisi nibh sed ligula. Proin convallis ultrices tempor. Aliquam erat volutpat. Mauris eget cursus lectus, ac consequat ex. Cras lobortis nibh non lacus fringilla, non malesuada magna pellentesque. Phasellus sit amet mi sed erat malesuada lacinia non a lorem. Phasellus dictum non nisi nec tempor. Nam convallis eget sem vitae consequat. Etiam elementum massa commodo sapien tristique, ac semper justo vehicula. Duis enim eros, dapibus at lacus ut, blandit mattis nunc. Pellentesque risus mi, pulvinar et odio id, laoreet cursus dui. Suspendisse tellus dui, tincidunt ac ultricies vel, suscipit vel tortor. Curabitur pretium at odio sit amet rutrum.</p>', 'Genta Prana', '2020-03-18', 'kemenangan-telak-rimo-juara-3', '1'),
(13, '87579621062', 'Kemenangan Telak Rimo Juara tambah 1', '1', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '<p>tester 1234</p>', 'Genta Prana', '2020-03-18', 'kemenangan-telak-rimo-juara-tambah-1', '1');

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
  `slug_portfolio` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `id_unique`, `kategori_portfolio`, `judul_portfolio`, `nama_client`, `waktu`, `web_client`, `deskripsi_portfolio`, `slug_portfolio`, `status`) VALUES
(1, '78461024359', '1', 'The Wedding of Icha & Fandy', 'Fandy Putra Diasya', '2020-02-02', 'https://ichafandysjourney.com/', '<p>Website Invitation untuk pernikahan Icha &amp; Fandy pada Februari 2020. Dilengkapi dengan fitur registrasi dan generate QR Code. Website disertai juga SSL sehingga menbambah sistem security.</p>\r\n<p>Website Invitation disempurnakan dengan Mobile View sehingga sangat memudahkan tamu undangan untuk bisa daftar menghadiri acara undangan pernikahan tersebut.</p>\r\n<p><img src=\"http://localhost/perspektiv/assets/images/portfolio/post-image-1586607450456.png\" alt=\"\" width=\"100%\" /></p>\r\n<p>Wedding Invitation ini juga menyuguhkan fitur Say It! yang merupakan ucapan kebahagiaan untuk pasangan pengantin.</p>\r\n<p>Serta database tamu undangan untuk mengetahui, tamu undangan yang akan hadir</p>', 'the-wedding-of-icha-fandy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `servicesp`
--

CREATE TABLE `servicesp` (
  `id` int(11) NOT NULL,
  `id_unique` varchar(11) NOT NULL,
  `judul_service` varchar(250) NOT NULL,
  `konten_service` text NOT NULL,
  `slug_service` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicesp`
--

INSERT INTO `servicesp` (`id`, `id_unique`, `judul_service`, `konten_service`, `slug_service`, `status`) VALUES
(2, '28076439731', 'website', '<div id=\"lipsum\">\r\n<p><img src=\"http://localhost/perspektiv/assets/images/service/post-image-1586615344155.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue eleifend purus quis tempus. Pellentesque suscipit ligula arcu, a volutpat nisl eleifend id. Nam tempor convallis eros, et lobortis felis maximus eget. Nulla dignissim laoreet massa, ac commodo dui pharetra eu. Duis a lorem pellentesque, pulvinar metus sit amet, vestibulum quam. Duis eu mauris sit amet velit tempor vestibulum cursus eu nunc. Ut ac sodales lacus. Sed malesuada neque id dapibus blandit. Praesent leo mauris, vestibulum convallis libero sed, luctus maximus dui. Nam ornare sit amet lectus eu fringilla. Aliquam varius accumsan ipsum ut sodales. Curabitur fringilla, quam vitae dignissim suscipit, mauris sapien pellentesque nisi, ac commodo nisi arcu id sem.</p>\r\n<p>Nam lobortis elit elit, ut dignissim lacus pulvinar in. Quisque condimentum neque orci, eu sagittis orci consectetur at. Phasellus tincidunt lorem a neque tincidunt, egestas aliquet nulla congue. Donec aliquet risus egestas, aliquet velit in, aliquam massa. Donec pharetra sollicitudin eleifend. Sed commodo nisi volutpat nunc aliquam scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a eros tellus. Vivamus at leo a velit eleifend aliquet. Donec fringilla maximus nibh, vitae fermentum ex semper non.</p>\r\n<p>Maecenas posuere tincidunt elementum. Donec gravida mi ligula, ut fermentum dolor sollicitudin non. Ut vulputate dictum placerat. Praesent eleifend fringilla posuere. Nunc scelerisque sollicitudin nibh ut tincidunt. Nulla pharetra cursus tortor. Mauris dignissim facilisis dapibus. Praesent et ipsum eget nunc aliquam imperdiet vitae vel libero. In at turpis euismod, pretium urna quis, posuere diam. Suspendisse consequat ligula quis dolor fermentum, a dictum ex pretium.</p>\r\n<p>Vestibulum quis elementum est. Vivamus justo sem, imperdiet et pharetra id, sollicitudin a libero. Phasellus dictum commodo odio sed iaculis. Praesent arcu nibh, vestibulum hendrerit massa a, viverra ultricies felis. Ut placerat, ligula eu sollicitudin mollis, felis justo pellentesque nibh, eu egestas velit mauris sed nisl. Nam egestas metus lorem. Quisque maximus augue velit, sed venenatis metus volutpat quis. Duis augue dolor, pulvinar ac mauris sed, cursus molestie orci. Cras quis ex convallis, iaculis metus vel, tincidunt turpis. Aliquam est libero, ornare finibus efficitur eu, commodo nec ante. Sed gravida, elit ut feugiat posuere, lacus nunc malesuada arcu, nec rutrum neque mauris nec tellus. Aliquam vulputate faucibus ex, non vestibulum metus. Fusce in ex sed sem laoreet vulputate eu eu mi. Aenean nulla nisi, dignissim vel gravida a, fringilla et ipsum.</p>\r\n<p>Nulla non tempor sem. Suspendisse molestie nec dolor sit amet tincidunt. Proin sed nibh non nisl pretium elementum id eu est. Quisque suscipit finibus dapibus. Proin hendrerit sollicitudin tortor, egestas posuere mauris molestie non. Praesent aliquam iaculis cursus. Duis mollis efficitur vestibulum. Maecenas tempor semper lectus, sit amet lacinia eros elementum eget. Fusce sit amet dignissim arcu, non sagittis odio. Vivamus facilisis placerat est, ut vulputate lectus viverra porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus urna dolor, sagittis ut convallis ut, sagittis tristique nibh. Vivamus ultrices eget eros et iaculis. Phasellus sit amet dignissim sem, nec euismod libero.</p>\r\n</div>', 'website', '1'),
(3, '89246372825', 'mobile', '<div id=\"lipsum\">\r\n<p><img src=\"http://localhost/perspektiv/assets/images/service/post-image-1586615344155.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue eleifend purus quis tempus. Pellentesque suscipit ligula arcu, a volutpat nisl eleifend id. Nam tempor convallis eros, et lobortis felis maximus eget. Nulla dignissim laoreet massa, ac commodo dui pharetra eu. Duis a lorem pellentesque, pulvinar metus sit amet, vestibulum quam. Duis eu mauris sit amet velit tempor vestibulum cursus eu nunc. Ut ac sodales lacus. Sed malesuada neque id dapibus blandit. Praesent leo mauris, vestibulum convallis libero sed, luctus maximus dui. Nam ornare sit amet lectus eu fringilla. Aliquam varius accumsan ipsum ut sodales. Curabitur fringilla, quam vitae dignissim suscipit, mauris sapien pellentesque nisi, ac commodo nisi arcu id sem.</p>\r\n<p>Nam lobortis elit elit, ut dignissim lacus pulvinar in. Quisque condimentum neque orci, eu sagittis orci consectetur at. Phasellus tincidunt lorem a neque tincidunt, egestas aliquet nulla congue. Donec aliquet risus egestas, aliquet velit in, aliquam massa. Donec pharetra sollicitudin eleifend. Sed commodo nisi volutpat nunc aliquam scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a eros tellus. Vivamus at leo a velit eleifend aliquet. Donec fringilla maximus nibh, vitae fermentum ex semper non.</p>\r\n<p>Maecenas posuere tincidunt elementum. Donec gravida mi ligula, ut fermentum dolor sollicitudin non. Ut vulputate dictum placerat. Praesent eleifend fringilla posuere. Nunc scelerisque sollicitudin nibh ut tincidunt. Nulla pharetra cursus tortor. Mauris dignissim facilisis dapibus. Praesent et ipsum eget nunc aliquam imperdiet vitae vel libero. In at turpis euismod, pretium urna quis, posuere diam. Suspendisse consequat ligula quis dolor fermentum, a dictum ex pretium.</p>\r\n<p>Vestibulum quis elementum est. Vivamus justo sem, imperdiet et pharetra id, sollicitudin a libero. Phasellus dictum commodo odio sed iaculis. Praesent arcu nibh, vestibulum hendrerit massa a, viverra ultricies felis. Ut placerat, ligula eu sollicitudin mollis, felis justo pellentesque nibh, eu egestas velit mauris sed nisl. Nam egestas metus lorem. Quisque maximus augue velit, sed venenatis metus volutpat quis. Duis augue dolor, pulvinar ac mauris sed, cursus molestie orci. Cras quis ex convallis, iaculis metus vel, tincidunt turpis. Aliquam est libero, ornare finibus efficitur eu, commodo nec ante. Sed gravida, elit ut feugiat posuere, lacus nunc malesuada arcu, nec rutrum neque mauris nec tellus. Aliquam vulputate faucibus ex, non vestibulum metus. Fusce in ex sed sem laoreet vulputate eu eu mi. Aenean nulla nisi, dignissim vel gravida a, fringilla et ipsum.</p>\r\n<p>Nulla non tempor sem. Suspendisse molestie nec dolor sit amet tincidunt. Proin sed nibh non nisl pretium elementum id eu est. Quisque suscipit finibus dapibus. Proin hendrerit sollicitudin tortor, egestas posuere mauris molestie non. Praesent aliquam iaculis cursus. Duis mollis efficitur vestibulum. Maecenas tempor semper lectus, sit amet lacinia eros elementum eget. Fusce sit amet dignissim arcu, non sagittis odio. Vivamus facilisis placerat est, ut vulputate lectus viverra porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus urna dolor, sagittis ut convallis ut, sagittis tristique nibh. Vivamus ultrices eget eros et iaculis. Phasellus sit amet dignissim sem, nec euismod libero.</p>\r\n</div>', 'mobile', '1'),
(4, '66891803874', 'design', '<div id=\"lipsum\">\r\n<p><img src=\"http://localhost/perspektiv/assets/images/service/post-image-1586615344155.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue eleifend purus quis tempus. Pellentesque suscipit ligula arcu, a volutpat nisl eleifend id. Nam tempor convallis eros, et lobortis felis maximus eget. Nulla dignissim laoreet massa, ac commodo dui pharetra eu. Duis a lorem pellentesque, pulvinar metus sit amet, vestibulum quam. Duis eu mauris sit amet velit tempor vestibulum cursus eu nunc. Ut ac sodales lacus. Sed malesuada neque id dapibus blandit. Praesent leo mauris, vestibulum convallis libero sed, luctus maximus dui. Nam ornare sit amet lectus eu fringilla. Aliquam varius accumsan ipsum ut sodales. Curabitur fringilla, quam vitae dignissim suscipit, mauris sapien pellentesque nisi, ac commodo nisi arcu id sem.</p>\r\n<p>Nam lobortis elit elit, ut dignissim lacus pulvinar in. Quisque condimentum neque orci, eu sagittis orci consectetur at. Phasellus tincidunt lorem a neque tincidunt, egestas aliquet nulla congue. Donec aliquet risus egestas, aliquet velit in, aliquam massa. Donec pharetra sollicitudin eleifend. Sed commodo nisi volutpat nunc aliquam scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a eros tellus. Vivamus at leo a velit eleifend aliquet. Donec fringilla maximus nibh, vitae fermentum ex semper non.</p>\r\n<p>Maecenas posuere tincidunt elementum. Donec gravida mi ligula, ut fermentum dolor sollicitudin non. Ut vulputate dictum placerat. Praesent eleifend fringilla posuere. Nunc scelerisque sollicitudin nibh ut tincidunt. Nulla pharetra cursus tortor. Mauris dignissim facilisis dapibus. Praesent et ipsum eget nunc aliquam imperdiet vitae vel libero. In at turpis euismod, pretium urna quis, posuere diam. Suspendisse consequat ligula quis dolor fermentum, a dictum ex pretium.</p>\r\n<p>Vestibulum quis elementum est. Vivamus justo sem, imperdiet et pharetra id, sollicitudin a libero. Phasellus dictum commodo odio sed iaculis. Praesent arcu nibh, vestibulum hendrerit massa a, viverra ultricies felis. Ut placerat, ligula eu sollicitudin mollis, felis justo pellentesque nibh, eu egestas velit mauris sed nisl. Nam egestas metus lorem. Quisque maximus augue velit, sed venenatis metus volutpat quis. Duis augue dolor, pulvinar ac mauris sed, cursus molestie orci. Cras quis ex convallis, iaculis metus vel, tincidunt turpis. Aliquam est libero, ornare finibus efficitur eu, commodo nec ante. Sed gravida, elit ut feugiat posuere, lacus nunc malesuada arcu, nec rutrum neque mauris nec tellus. Aliquam vulputate faucibus ex, non vestibulum metus. Fusce in ex sed sem laoreet vulputate eu eu mi. Aenean nulla nisi, dignissim vel gravida a, fringilla et ipsum.</p>\r\n<p>Nulla non tempor sem. Suspendisse molestie nec dolor sit amet tincidunt. Proin sed nibh non nisl pretium elementum id eu est. Quisque suscipit finibus dapibus. Proin hendrerit sollicitudin tortor, egestas posuere mauris molestie non. Praesent aliquam iaculis cursus. Duis mollis efficitur vestibulum. Maecenas tempor semper lectus, sit amet lacinia eros elementum eget. Fusce sit amet dignissim arcu, non sagittis odio. Vivamus facilisis placerat est, ut vulputate lectus viverra porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus urna dolor, sagittis ut convallis ut, sagittis tristique nibh. Vivamus ultrices eget eros et iaculis. Phasellus sit amet dignissim sem, nec euismod libero.</p>\r\n</div>', 'design', '1'),
(5, '71734270478', 'photo', '<div id=\"lipsum\">\r\n<p><img src=\"http://localhost/perspektiv/assets/images/service/post-image-1586615344155.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue eleifend purus quis tempus. Pellentesque suscipit ligula arcu, a volutpat nisl eleifend id. Nam tempor convallis eros, et lobortis felis maximus eget. Nulla dignissim laoreet massa, ac commodo dui pharetra eu. Duis a lorem pellentesque, pulvinar metus sit amet, vestibulum quam. Duis eu mauris sit amet velit tempor vestibulum cursus eu nunc. Ut ac sodales lacus. Sed malesuada neque id dapibus blandit. Praesent leo mauris, vestibulum convallis libero sed, luctus maximus dui. Nam ornare sit amet lectus eu fringilla. Aliquam varius accumsan ipsum ut sodales. Curabitur fringilla, quam vitae dignissim suscipit, mauris sapien pellentesque nisi, ac commodo nisi arcu id sem.</p>\r\n<p>Nam lobortis elit elit, ut dignissim lacus pulvinar in. Quisque condimentum neque orci, eu sagittis orci consectetur at. Phasellus tincidunt lorem a neque tincidunt, egestas aliquet nulla congue. Donec aliquet risus egestas, aliquet velit in, aliquam massa. Donec pharetra sollicitudin eleifend. Sed commodo nisi volutpat nunc aliquam scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a eros tellus. Vivamus at leo a velit eleifend aliquet. Donec fringilla maximus nibh, vitae fermentum ex semper non.</p>\r\n<p>Maecenas posuere tincidunt elementum. Donec gravida mi ligula, ut fermentum dolor sollicitudin non. Ut vulputate dictum placerat. Praesent eleifend fringilla posuere. Nunc scelerisque sollicitudin nibh ut tincidunt. Nulla pharetra cursus tortor. Mauris dignissim facilisis dapibus. Praesent et ipsum eget nunc aliquam imperdiet vitae vel libero. In at turpis euismod, pretium urna quis, posuere diam. Suspendisse consequat ligula quis dolor fermentum, a dictum ex pretium.</p>\r\n<p>Vestibulum quis elementum est. Vivamus justo sem, imperdiet et pharetra id, sollicitudin a libero. Phasellus dictum commodo odio sed iaculis. Praesent arcu nibh, vestibulum hendrerit massa a, viverra ultricies felis. Ut placerat, ligula eu sollicitudin mollis, felis justo pellentesque nibh, eu egestas velit mauris sed nisl. Nam egestas metus lorem. Quisque maximus augue velit, sed venenatis metus volutpat quis. Duis augue dolor, pulvinar ac mauris sed, cursus molestie orci. Cras quis ex convallis, iaculis metus vel, tincidunt turpis. Aliquam est libero, ornare finibus efficitur eu, commodo nec ante. Sed gravida, elit ut feugiat posuere, lacus nunc malesuada arcu, nec rutrum neque mauris nec tellus. Aliquam vulputate faucibus ex, non vestibulum metus. Fusce in ex sed sem laoreet vulputate eu eu mi. Aenean nulla nisi, dignissim vel gravida a, fringilla et ipsum.</p>\r\n<p>Nulla non tempor sem. Suspendisse molestie nec dolor sit amet tincidunt. Proin sed nibh non nisl pretium elementum id eu est. Quisque suscipit finibus dapibus. Proin hendrerit sollicitudin tortor, egestas posuere mauris molestie non. Praesent aliquam iaculis cursus. Duis mollis efficitur vestibulum. Maecenas tempor semper lectus, sit amet lacinia eros elementum eget. Fusce sit amet dignissim arcu, non sagittis odio. Vivamus facilisis placerat est, ut vulputate lectus viverra porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus urna dolor, sagittis ut convallis ut, sagittis tristique nibh. Vivamus ultrices eget eros et iaculis. Phasellus sit amet dignissim sem, nec euismod libero.</p>\r\n</div>', 'photo', '1'),
(6, '05603718419', 'seo', '<div id=\"lipsum\">\r\n<p><img src=\"http://localhost/perspektiv/assets/images/service/post-image-1586615344155.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue eleifend purus quis tempus. Pellentesque suscipit ligula arcu, a volutpat nisl eleifend id. Nam tempor convallis eros, et lobortis felis maximus eget. Nulla dignissim laoreet massa, ac commodo dui pharetra eu. Duis a lorem pellentesque, pulvinar metus sit amet, vestibulum quam. Duis eu mauris sit amet velit tempor vestibulum cursus eu nunc. Ut ac sodales lacus. Sed malesuada neque id dapibus blandit. Praesent leo mauris, vestibulum convallis libero sed, luctus maximus dui. Nam ornare sit amet lectus eu fringilla. Aliquam varius accumsan ipsum ut sodales. Curabitur fringilla, quam vitae dignissim suscipit, mauris sapien pellentesque nisi, ac commodo nisi arcu id sem.</p>\r\n<p>Nam lobortis elit elit, ut dignissim lacus pulvinar in. Quisque condimentum neque orci, eu sagittis orci consectetur at. Phasellus tincidunt lorem a neque tincidunt, egestas aliquet nulla congue. Donec aliquet risus egestas, aliquet velit in, aliquam massa. Donec pharetra sollicitudin eleifend. Sed commodo nisi volutpat nunc aliquam scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a eros tellus. Vivamus at leo a velit eleifend aliquet. Donec fringilla maximus nibh, vitae fermentum ex semper non.</p>\r\n<p>Maecenas posuere tincidunt elementum. Donec gravida mi ligula, ut fermentum dolor sollicitudin non. Ut vulputate dictum placerat. Praesent eleifend fringilla posuere. Nunc scelerisque sollicitudin nibh ut tincidunt. Nulla pharetra cursus tortor. Mauris dignissim facilisis dapibus. Praesent et ipsum eget nunc aliquam imperdiet vitae vel libero. In at turpis euismod, pretium urna quis, posuere diam. Suspendisse consequat ligula quis dolor fermentum, a dictum ex pretium.</p>\r\n<p>Vestibulum quis elementum est. Vivamus justo sem, imperdiet et pharetra id, sollicitudin a libero. Phasellus dictum commodo odio sed iaculis. Praesent arcu nibh, vestibulum hendrerit massa a, viverra ultricies felis. Ut placerat, ligula eu sollicitudin mollis, felis justo pellentesque nibh, eu egestas velit mauris sed nisl. Nam egestas metus lorem. Quisque maximus augue velit, sed venenatis metus volutpat quis. Duis augue dolor, pulvinar ac mauris sed, cursus molestie orci. Cras quis ex convallis, iaculis metus vel, tincidunt turpis. Aliquam est libero, ornare finibus efficitur eu, commodo nec ante. Sed gravida, elit ut feugiat posuere, lacus nunc malesuada arcu, nec rutrum neque mauris nec tellus. Aliquam vulputate faucibus ex, non vestibulum metus. Fusce in ex sed sem laoreet vulputate eu eu mi. Aenean nulla nisi, dignissim vel gravida a, fringilla et ipsum.</p>\r\n<p>Nulla non tempor sem. Suspendisse molestie nec dolor sit amet tincidunt. Proin sed nibh non nisl pretium elementum id eu est. Quisque suscipit finibus dapibus. Proin hendrerit sollicitudin tortor, egestas posuere mauris molestie non. Praesent aliquam iaculis cursus. Duis mollis efficitur vestibulum. Maecenas tempor semper lectus, sit amet lacinia eros elementum eget. Fusce sit amet dignissim arcu, non sagittis odio. Vivamus facilisis placerat est, ut vulputate lectus viverra porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus urna dolor, sagittis ut convallis ut, sagittis tristique nibh. Vivamus ultrices eget eros et iaculis. Phasellus sit amet dignissim sem, nec euismod libero.</p>\r\n</div>', 'seo', '1'),
(7, '79255824669', 'consultant', '<div id=\"lipsum\">\r\n<p><img src=\"http://localhost/perspektiv/assets/images/service/post-image-1586615344155.jpg\" alt=\"\" width=\"100%\" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin congue eleifend purus quis tempus. Pellentesque suscipit ligula arcu, a volutpat nisl eleifend id. Nam tempor convallis eros, et lobortis felis maximus eget. Nulla dignissim laoreet massa, ac commodo dui pharetra eu. Duis a lorem pellentesque, pulvinar metus sit amet, vestibulum quam. Duis eu mauris sit amet velit tempor vestibulum cursus eu nunc. Ut ac sodales lacus. Sed malesuada neque id dapibus blandit. Praesent leo mauris, vestibulum convallis libero sed, luctus maximus dui. Nam ornare sit amet lectus eu fringilla. Aliquam varius accumsan ipsum ut sodales. Curabitur fringilla, quam vitae dignissim suscipit, mauris sapien pellentesque nisi, ac commodo nisi arcu id sem.</p>\r\n<p>Nam lobortis elit elit, ut dignissim lacus pulvinar in. Quisque condimentum neque orci, eu sagittis orci consectetur at. Phasellus tincidunt lorem a neque tincidunt, egestas aliquet nulla congue. Donec aliquet risus egestas, aliquet velit in, aliquam massa. Donec pharetra sollicitudin eleifend. Sed commodo nisi volutpat nunc aliquam scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a eros tellus. Vivamus at leo a velit eleifend aliquet. Donec fringilla maximus nibh, vitae fermentum ex semper non.</p>\r\n<p>Maecenas posuere tincidunt elementum. Donec gravida mi ligula, ut fermentum dolor sollicitudin non. Ut vulputate dictum placerat. Praesent eleifend fringilla posuere. Nunc scelerisque sollicitudin nibh ut tincidunt. Nulla pharetra cursus tortor. Mauris dignissim facilisis dapibus. Praesent et ipsum eget nunc aliquam imperdiet vitae vel libero. In at turpis euismod, pretium urna quis, posuere diam. Suspendisse consequat ligula quis dolor fermentum, a dictum ex pretium.</p>\r\n<p>Vestibulum quis elementum est. Vivamus justo sem, imperdiet et pharetra id, sollicitudin a libero. Phasellus dictum commodo odio sed iaculis. Praesent arcu nibh, vestibulum hendrerit massa a, viverra ultricies felis. Ut placerat, ligula eu sollicitudin mollis, felis justo pellentesque nibh, eu egestas velit mauris sed nisl. Nam egestas metus lorem. Quisque maximus augue velit, sed venenatis metus volutpat quis. Duis augue dolor, pulvinar ac mauris sed, cursus molestie orci. Cras quis ex convallis, iaculis metus vel, tincidunt turpis. Aliquam est libero, ornare finibus efficitur eu, commodo nec ante. Sed gravida, elit ut feugiat posuere, lacus nunc malesuada arcu, nec rutrum neque mauris nec tellus. Aliquam vulputate faucibus ex, non vestibulum metus. Fusce in ex sed sem laoreet vulputate eu eu mi. Aenean nulla nisi, dignissim vel gravida a, fringilla et ipsum.</p>\r\n<p>Nulla non tempor sem. Suspendisse molestie nec dolor sit amet tincidunt. Proin sed nibh non nisl pretium elementum id eu est. Quisque suscipit finibus dapibus. Proin hendrerit sollicitudin tortor, egestas posuere mauris molestie non. Praesent aliquam iaculis cursus. Duis mollis efficitur vestibulum. Maecenas tempor semper lectus, sit amet lacinia eros elementum eget. Fusce sit amet dignissim arcu, non sagittis odio. Vivamus facilisis placerat est, ut vulputate lectus viverra porta. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus urna dolor, sagittis ut convallis ut, sagittis tristique nibh. Vivamus ultrices eget eros et iaculis. Phasellus sit amet dignissim sem, nec euismod libero.</p>\r\n</div>', 'consultant', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `servicesp`
--
ALTER TABLE `servicesp`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_news`
--
ALTER TABLE `img_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `img_portfolio`
--
ALTER TABLE `img_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicesp`
--
ALTER TABLE `servicesp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
