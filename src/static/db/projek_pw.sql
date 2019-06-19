-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 03:06 PM
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
  `field_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `event_desc` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `category_id`, `name`, `address`, `lat`, `lng`, `open_hour`, `close_hour`, `price_min`, `price_max`, `contact`, `img`) VALUES
('F001', 'C001', 'Anta Futsal', 'Jl. Ters. Jkt No.1, Babakan Surabaya, Kiaracondong', -6.913192, 107.644331, '7', '24', 85000, 85000, '0227206340', 'anta.jpg'),
('F002', 'C004', 'OBC Futsal', 'Jl. Rancabentang I No.3A, Ciumbuleuit, Cidadap', -6.874859, 107.607538, '7', '24', 85000, 15000, '0222030915', 'obc.jpg'),
('F003', 'C002', 'Maleo Futsal', 'Jl. Dangdeur Indah 2 No. 15', -6.883296, 107.583188, '7', '24', 75000, 135000, '0222008517', 'maleo.jpg'),
('F004', 'C003', 'Queen Futsal', 'Jl.Brigjen Katamso No.66, Cicadas, Cibeunying Kidul', -6.902958, 107.633529, '7', '24', 130000, 200000, '085100492116', 'queen.jpg'),
('F005', 'C002', 'Shakti Taridi Futsal', 'Jl. Parakan Saat No. 9 RT 2/11 Arcamanik', -6.93104, 107.66914, '8', '24', 100000, 150000, '087722663306', 'shaktitaridi.jpg'),
('F006', 'C003', 'YPKP Futsal', 'Jl. Penghulu H. Hasan Mustopa No.70, Neglasari', -6.899541, 107.639956, '1', '24', 80000, 100000, '081321869910', 'ypkp.jpg'),
('F007', 'C004', 'Ballroom Futsal', 'Malabar, Lengkong', -6.920346, 107.621778, '6', '24', 70000, 110000, '081910088345', 'ballroom.jpg');

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
