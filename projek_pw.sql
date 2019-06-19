-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 03:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category_desc` varchar(400) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `category_desc`, `img`) VALUES
('C001', 'Vinyl', 'Lapangan futsal vinyl ini biasa disebut dengan rubber karena bahan dasarnya menyerupai karet yang permukaanya lembut.  Jenis lapangan futsal yang satu ini merupakan yang paling banyak disukai oleh penggemar olahraga futsal. Hal tersebut dikarenakan bahannya yang empuk sehingga membuat kita lebih mudah dalam melakukan aksi-aksi penyelamatan terlebih bagi mereka yang suka diving.', 'vinyl.jpg'),
('C002', 'Sintetis', 'Rumput sintetis paling banyak digunakan oleh mereka yang berbisnis futsal karena dengan adanya rumput sintetis, mengurangi kecelakaaan yang diakibatkan terjatuh, dan juga lebih mudah perawatannya dan peminat yang bermain di lapangan rumput cukup banyak karena hampir menyerupai lapangan yang besar yang menggunakan rumput asli.', 'sintetis.jpg'),
('C003', 'Parquette', 'Jenis Lapangan futsal ini lebih populer di daerah Eropa, Amerika Latin dan kurang begitu populer di Indonesia. Lapangan jenis ini sebenarnya sudah cukup lama digunakan dan biasanya dipakai di GOR (Gelanggang Olahraga). Beberapa lapangan basket juga banyak yang memakai bahan ini karena material lapangan ini sendiri terbuat dari kayu yang mampu memantulkan bola dengan baik. ', 'parquette.jpg'),
('C004', 'Interlock', 'Lantai Interlocking/polypropylene juga bisa digunakan untuk lapangan futsal, tipe ini bisa dipindahkan dengan mudah, dan terkenal memiliki ketahanan yang sangat lama dan kuat karena terbuat dari plastic PP. Bentuk dari interlocking/polypropylene seperti keramik, 25 x 25 cm, dengan ketebalan 1.25 cm dan tersedia dalam beberapa warna.', 'interlock.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `event_desc` varchar(1500) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `img` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `price`, `event_desc`, `contact`, `img`, `status`) VALUES
('E001', 'BUMI SILIWANGI CHAMPIONSHIP 2016', '2016-12-21', 650000, 'Kategori: SMA/SMK/Sederajat (Putera)<br>\r\nSistem: Setengah Kompetisi (Grup)<br>\r\nLokasi: Lapangan Futsal Batununggal Bandung<br>\r\nTanggal pertandingan: 21-23 Desember 2016<br><br>\r\n\r\nPendaftaran dapat dilakukan di Jalan Pasir Salam Selatan I no 16 A<br>\r\nJuara 1   Trophy+Sertifikat+Uang Tunai 4.500.000<br>\r\nJuara 2  Trophy+Sertifikat+Uang Tunai 3.000.000<br>\r\nJuara 2  Trophy+Sertifikat+Uang Tunai 1.000.000<br><br>\r\n\r\nBiaya pendaftaran senilai Rp. 500.000, bisa tunai atau transfer ke rekening<br><br>\r\n\r\nBCA: 156-150-931-5 an. Yosef Sukianto<br>\r\nMandiri: 130-001-106-672-0 an. Yosef Sukianto<br>\r\nBNI: 2280619887 an. Chandra Sutikno Oemarjadi<br><br>\r\n\r\nContact Person:<br>\r\nAndre<br>\r\n081910088345<br>\r\nPin D1336A3F<br>', '081910088345', 'Event_171205_0006.jpg', 1),
('E002', 'UNITED WAY SOCCER TOURNAMENT', '2017-09-09', 350000, 'Kategori: SMA se Bandung Raya<br>\r\nSistem : Gugur<br>\r\nLokasi : Lap Progresif Futsal (Jl Soekarno Hatta no 785 A )<br>\r\nTanggal pertandingan : 09-10 September 2017<br>\r\nJumlah peserta : 16 Tim (12 Orang/Tim)<br><br>\r\n\r\nPendaftaran dapat dilakukan di Jalan Pasirsalam Selatan I no 16a<br><br>\r\n\r\nBiaya pendaftaran senilai Rp. 350.000,- bisa tunai atau transfer ke rekening<br><br>\r\n\r\nBCA: 156-150-931-5 an. Yosef Sukianto<br>\r\nMandiri: 130-001-106-672-0 an. Yosef Sukianto<br>\r\nBNI: 2280619887 an. Chandra Sutikno Oemarjadi<br><br>\r\n\r\nContact Person:<br>\r\nAndre<br>\r\n081910088345<br>\r\nPin D1336A3F<br>', '081910088345', 'Event_171205_0007.jpg', 0),
('E003', 'ADMINISTRATION FUTSAL LEAGUE II 2016', '2016-12-17', 350000, 'Kategori: Umum (U 23)<br>\r\nSistem: Gugur<br>\r\nLokasi: Lapangan Futsal “THE CLOVER SPORTS CLUB” (Jl. Sharon Boulevard Timur, Kompleks Grand Sharon Residence, Masuk dari samping RS. Al-Islam Bandung Jl. Soekarno Hatta)<br>\r\nTanggal Pertandingan: 17-18 Desember 2016<br>\r\nJumlah Peserta: 36 Tim (10 orang per tim + 1 Official)<br><br>\r\n\r\nHadiah :<br>\r\nJuara 1: Uang Tunai 3.000.000<br>\r\nJuara 2: Uang Tunai 2.000.000<br>\r\nJuara 3: Uang Tunai 1.000.000<br>\r\nBest Player: 250Ribu<br>\r\nTop Score: 250Ribu<br><br>\r\n\r\nBiaya Pendaftaran senilai Rp. 350.000, bisa tunai atau transfer ke rekening:<br><br>\r\n\r\nBCA: 156-150-931-5 an. Yosef Sukianto<br>\r\nMandiri: 130-001-106-672-0 an. Yosef Sukianto<br>\r\nBNI: 2280619887 an. Chandra Sutikno Oemarjadi<br><br>\r\n\r\nContact Person:<br>\r\nShelfi : 0898342949<br>\r\nshelfiraw (LINE)<br><br>\r\n\r\nNeng Nadia : 08972241768<br>\r\nLnadian23 (LINE)', '0898342949', 'Event_171205_0005.jpg', 0),
('E004', 'FUTSAL CHAMPIONS OF ENGINEERING', '2016-05-05', 400000, 'Kategori:  Mahasiswa Teknik se-Bandung Raya<br>\r\nSistem : Gugur<br>\r\nLokasi : Lap Progresif Futsal (Jl Soekarno Hatta no 785 A)<br>\r\nTanggal pertandingan : 5-7 Mei 2016<br>\r\nJumlah peserta : 24 Tim (10 Orang Dan 2 Official)<br><br>\r\n\r\nPendaftaran dapat dilakukan di Sawah Kurung III no 9 Daerah Pungkur atau di Sekertariat BEM FT UNISBA di Jalan Tamansari No 1 Bandung<br><br>\r\n\r\nTanggal Pendaftaran : 4 – 28 April 2016 | 10.00-15.00 |<br>\r\nTechnical Meeting : 30 April 2016 | 09.30 – Selesai | @Student Center UNISBA |<br>\r\nBiaya pendaftaran senilai Rp. 400.000<br><br>\r\n\r\nContact Person:<br>\r\n#Selna<br>\r\n081220582060<br>\r\nID Line : Selna_triwidarto<br><br>\r\n\r\n#Sarah<br>\r\n08997976257<br>\r\nID Line: uchi_koalala<br><br>\r\n\r\n#Derry<br>\r\n08985206546<br>\r\nID Line: derrymf<br>', '081220582060', 'Event_171205_0003.jpg', 0),
('E005', 'ANGKASA BISA ANGKASA JUARA', '2017-03-01', 200000, 'Kategori: SMP atau MTs se Bandung Raya<br>\r\nSistem : Gugur<br>\r\nLokasi : Lap Futsal SMK ANGKASA Lanud Husein Bandung (Jl. Lettu Subagio no 22 Bandung)<br>\r\nTanggal pertandingan : 01–05 Maret 2016<br>\r\nJumlah peserta : 32 Tim (10 Orang/Tim)<br><br>\r\n\r\nPendaftaran dapat dilakukan di Sawah Kurung III no 9 Daerah Pungkur atau di SMK Angkasa<br><br>\r\n\r\nBiaya pendaftaran senilai Rp. 200.000,- bisa tunai atau transfer ke rekening<br><br>\r\n\r\nBCA: 156-150-931-5 an. Yosef Sukianto<br>\r\nMandiri: 130-001-106-672-0 an. Yosef Sukianto<br>\r\nBNI: 2280619887 an. Chandra Sutikno Oemarjadi<br><br>\r\n\r\nContact Person:<br>\r\nAndre<br>\r\n08562255245<br>\r\nPin 51348294<br><br>\r\n\r\nRizal Pratama<br>\r\n081322773089', '08562255245', 'Event_171205_0002.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Eko Fajar Putra', 'ekofajarp27@gmail.com', 'Test 1', 'This is my first attempt of mailing to BFA admin'),
(2, 'Eko Fajar Putra', 'ekofajarp27@gmail.com', 'Test 1', 'This is my first attempt of mailing to BFA admin'),
(3, 'Eko Fajar Putra', 'ekofajarp27@gmail.com', 'lol', '				wwkkwkw\r\nbabi\r\nanjing \r\nitu\r\nharam');

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `id` varchar(10) NOT NULL,
  `category_id` varchar(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `open_hour` varchar(4) NOT NULL,
  `close_hour` varchar(4) NOT NULL,
  `price_min` int(11) NOT NULL,
  `price_max` int(11) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `img` varchar(50) NOT NULL,
  `img_1` varchar(50) NOT NULL,
  `img_2` varchar(50) NOT NULL,
  `img_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `category_id`, `name`, `address`, `lat`, `lng`, `open_hour`, `close_hour`, `price_min`, `price_max`, `contact`, `img`, `img_1`, `img_2`, `img_3`) VALUES
('F001', 'C001', 'Anta Futsal', 'Jl. Ters. Jkt No.1, Babakan Surabaya, Kiaracondong', -6.913192, 107.644331, '7', '24', 85000, 85000, '0227206340', 'anta.jpg', 'anta1.png', 'anta2.png', 'anta3.png'),
('F002', 'C004', 'OBC Futsal', 'Jl. Rancabentang I No.3A, Ciumbuleuit, Cidadap', -6.874859, 107.607538, '7', '24', 85000, 15000, '0222030915', 'obc.jpg', 'obc1.jpg', 'obc2.jpg', 'obc3.jpg'),
('F003', 'C002', 'Maleo Futsal', 'Jl. Dangdeur Indah 2 No. 15', -6.883296, 107.583188, '7', '24', 75000, 135000, '0222008517', 'maleo.jpg', 'maleo1.jpg', 'maleo2.jpg', 'maleo3.jpg'),
('F004', 'C003', 'Queen Futsal', 'Jl.Brigjen Katamso No.66, Cicadas, Cibeunying Kidul', -6.902958, 107.633529, '7', '24', 130000, 200000, '085100492116', 'queen.jpg', 'queen1.jpg', 'queen2.jpg', 'default.png'),
('F005', 'C002', 'Shakti Taridi Futsal', 'Jl. Parakan Saat No. 9 RT 2/11 Arcamanik', -6.93104, 107.66914, '8', '24', 100000, 150000, '087722663306', 'shaktitaridi.jpg', 'shaktitaridi1.jpg', 'shaktitaridi2.png', 'default.png'),
('F006', 'C003', 'YPKP Futsal', 'Jl. Penghulu H. Hasan Mustopa No.70, Neglasari', -6.899541, 107.639956, '1', '24', 80000, 100000, '081321869910', 'ypkp.jpg', 'ypkp1.jpg', 'ypkp2.jpg', 'ypkp3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
