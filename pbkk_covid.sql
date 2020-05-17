-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 12:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbkk_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `last_login`) VALUES
('admin', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', '2020-05-17 10:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `rs_rujukan`
--

CREATE TABLE `rs_rujukan` (
  `nomor` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `alamat_rs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs_rujukan`
--

INSERT INTO `rs_rujukan` (`nomor`, `provinsi`, `nama_rs`, `alamat_rs`) VALUES
(1, 'Aceh', 'RSU Dr. Zainoel Abidin Banda Aceh', 'Jl. Tgk. Daud Beureueh No.108 banda Aceh Telp: 0651 - 22077, 28148\r\n'),
(2, 'Aceh', 'RSU Cut Meutia Lhokseumawe ', 'Jl. Banda Aceh-Medan Km.6 Buket Rata Lhokseumawe Telp: 0645-43012'),
(3, 'Sumatera Utara', 'RSU H. Adam Malik Medan', 'Jl. Bunga lau No.17 Telp: 061 - 8360381 ; Fax: 061 - 8360255'),
(4, 'Sumatera Utara\r\n', 'RSU Kabanjahe', 'Jl. KS Ketaren 8 Kabanjahe Telp: 20550'),
(5, 'Sumatera Utara', 'RSU Pematang Siantar', 'Jl. Sutomo No.230 P. Siantar Telp: 0634-21780'),
(6, 'Sumatera Utara', 'RSU Tarutung', 'Jl. Bin Harun Said Tarutung Telp: 0633-21303'),
(7, 'Sumatera Utara', 'RSU Padang Sidempuan', 'Jl. Dr FL Tobing Pd Sidempuan Telp: 21780'),
(8, 'Sumatera Barat', 'RSU Dr. M. Jamil Padang', 'Jl. Perintis Kemerdekaan, Padang. Telp. 0751 - 32372'),
(9, 'Sumatera Barat', 'RSUD Dr. Achmad Mochtar ', 'Jl. Dr A Rivai Bukittinggi Telp: 0752-21720'),
(10, 'Riau', 'RSU Arifin Ahmad Pekan Baru', 'Jl. Diponegoro No.2, Pekan Baru'),
(11, 'Riau', 'RSU Kab. Karimun ', 'Jl. Poros No. 1 Tg.Balai Karimun Fax : 29611'),
(12, 'Riau', 'RSU Tanjung Pinang', 'Jl. Sudirman No. 795, Tanjung Pinang Telp. 0771 -21163'),
(13, 'Riau', 'RSU Puri Husada', 'JI. Veteran No. 52, Hilir Tembilahan'),
(14, 'Riau', 'RSU Dumai', 'Jl. Tanjung Jati No. 4 Dumai Telp. 0762-38368 '),
(15, 'Kepulauan Riau', 'RS Otorita Batam', 'Jl. Dr. Ciptomangunkusumo, Sekupang Batam'),
(16, 'Jambi', 'Jl. Dr. Ciptomangunkusumo, Sekupang Batam', 'Jl. Letjend. Soeprapto No.31 Telanaipura Jambi Telp. 0741 -61692'),
(17, 'Sumatera Selatan', 'RSU Dr. M. Hoesin Palembang', 'Jl. Jendral Sudirman Palembang 30126'),
(18, 'Sumatera Selatan', 'RSU Lubuk Linggau ', 'Jl. Yos Sudarso Lubuk Linggau Telp. 0733 - 321013'),
(19, 'Sumatera Selatan', 'RSU Kayu Agung', 'Jl. Raya Lintas Timur Kec. Kota Kayuagung Telp. 0712 -323889'),
(20, 'Sumatera Selatan', 'RSD Kab. Lahat', 'Jl. Mayor Ruslan I No. 28, Lahat. Telp. (0731) 321785'),
(21, 'Kep. Bangka Belitung', 'RSU Tanjung Pandan', 'Jl. Melati Tanjung Pandan. Telp. (0719) 21071, Fax: (0719) 22190'),
(22, 'Kep. Bangka Belitung', 'RSU Pangkal Pinang', 'Jl. M. Syafrie Rachman I. Telp. (0717) 421324'),
(23, 'Bengkulu', 'RSU Dr. M. Yunus Bengkulu', 'Jl. Bhayangkara Sidomulyo Bengkulu. Telp. (0736) 52004/52008'),
(24, 'Bengkulu', 'RSU Arga Makmur', 'Jl. Siti Khadijah Arga Makmur, Bengkulu Utara. Telp. (0737) 521118'),
(25, 'Bengkulu', 'RSU Manna', 'Jl. Fatmawati Soekarno 31, Manna. Telp (0739) 21118'),
(26, 'LAMPUNG', 'RSU Abdul Moeloek', 'Jl. Dr. Rivai No. 6, Tanjung Karang Lampung, 35112'),
(27, 'LAMPUNG', 'RSU Kalianda', 'Jl. L ettu Rohani No. 14B, Kalianda. Telp. (0727) 322160'),
(28, 'LAMPUNG', 'RSU Mayjend HM Ryacudu', 'Jl. Jend Sudirman No. 2, Kotabumi. Telp. 22095'),
(29, 'LAMPUNG', 'RSU Ahmad Yani', 'Jl. Jend A Yani Metro Telp. 0725 - 41820'),
(30, 'DKI JAKARTA', 'RSPl Dr. Sulianti Saroso ', 'Jl. Baru Sunter Permai Raya, Jakarta 14340. Telp. 021-6506559 Fax 021-6401411'),
(31, 'DKI JAKARTA', 'RSU Persahabatan ', 'Jl. Persahabatan Raya'),
(32, 'DKI JAKARTA', 'RSPAD Gatot Soebroto ', 'Jl. Dr A Rahman Saleh No 24 Jakarta Pusat Telp. 021 - 371008'),
(33, 'JAWA BARAT', 'RSU Dr. Hasan Sadikin Bandung', 'Jl. Pasteur No.38 Bandung'),
(34, 'JAWA BARAT', 'RSU Dr. Slamet Garut', 'Jl. Rumah Sakit No. 10 Garut Telp. 0262 - 232720'),
(35, 'JAWA BARAT', 'RSU Gunung Jati Cirebon', 'Jl. Kesambi No 56 Cirebon Telp. 0231 - 20633'),
(36, 'JAWA BARAT', 'RSTP Dr. H.A. Rotinsulu Bandung', 'Jl. Bukit Jarian No 40 .Bandung Telp. 022 - 231427'),
(37, 'JAWA BARAT', 'RSU R. Syamsudin, SH Sukabumi', 'Jl. Rumah Sakit No.1 Kota Sukabumi Telp. 0266 - 225180'),
(38, 'JAWA BARAT', 'RSU Indramayu', 'Jl. Rumah Sakit No. 1 Indramayu Telp. 272655'),
(39, 'JAWA BARAT', 'RSU Subang', 'Jl. Brigjen Katamso No. 37 Subang Telp. 0260-411421'),
(40, 'Banten', 'RSU Serang', 'Jl. Rumah Sakit No. 1, Serang'),
(41, 'Banten', 'RSU Tangerang', 'Jl. Ahmad Yani No. 9 Tangerang. Telp. 021-5523507, Fax. 5527104'),
(42, 'Jawa Tengah', 'RSU Dr. Kariadi Semarang ', 'Jl. Dr. Sutomo No.16, Semarang 50231. Telp. 024-8413993, 8413476'),
(43, 'Jawa Tengah', 'RSU Dr. H. Soewondo', 'Jl. Laut 21, Kendal'),
(44, 'Jawa Tengah', 'RSU Dr. Moewardi', 'Jl. Kol Sutarto 132, Surakarta'),
(45, 'Jawa Tengah', 'RSU Banyumas', 'Jl. Rumah Sakit No.1, Banyumas'),
(46, 'Jawa Tengah', 'RSU Kudus', 'Jl. Dr. Lukmonohadi No. 19 Kudus. Telp. 0291-431831'),
(47, 'Jawa Tengah', 'RSU Dr. H RM Soeselo W', 'Jl. Dr. Sutomo No 63 Slawi. Telp. 0283 - 491016'),
(48, 'Jawa Tengah', 'RSU Pekalongan', 'Jl. Veteran 31 Pekalongan Telp.0285 - 421621'),
(49, 'Jawa Tengah', 'RSU Tidar', 'Jl. Tidar No 30 A Magelang 0293-36226'),
(50, 'Jawa Tengah', 'RSU Prof. Dr. Margono Soekarjo', 'Jl. Dr Gumbreg No 1 Purwokerto. Telp. 0281-632708'),
(51, 'Jawa Tengah', 'RSU Dr Suraji Tirtonegoro', 'Jl. Dr Soeradji T No.1 Klalen 0272-321041'),
(52, 'DI Yogyakarta', 'RSU Dr. Sardjito ', 'Jl. Kesehatan 1 Sekip, Jogjakarta'),
(53, 'DI Yogyakarta', 'RSU Panembahan Senopati Bantul', 'Jl. Dr Wahidin S H Bantul 0274-367381\r\n'),
(54, 'Jawa Timur', 'RSU Dr. Soetomo', 'Jl. Prof Dr. Moestopo No. 6 - 8 Surabaya'),
(55, 'Jawa Timur', 'RSU Dr. Saiful Anwar', 'JI. Jaksa Agung Suprapto No. 2 Malang'),
(56, 'Jawa Timur', 'RSU Dr. Soebandi', 'Jl. Dr. Soebandi No. 1 Jember 68111'),
(57, 'Jawa Timur', 'RS Dr R Koesma Tuban', 'Jl. Dr. W S Husodo Tuban 0356-321010'),
(58, 'Jawa Timur', 'RS Dr S Djatikoesoemo', 'Jl. Dr Wahidin 36 Bojonegoro 0353-881193'),
(59, 'Jawa Timur', 'RS Pare', 'Jl. Pahlawan Kusuma B I Pare 0354-391718'),
(60, 'Jawa Timur', 'RS Blambangan', 'Jl. Istiqlah No 49 Banyuwangi 0333-421118'),
(61, 'Jawa Timur', 'RS Dr Soedono', 'Jl. Sumbawa No 6, Madiun'),
(62, 'Bali', 'RSU Sanglah', 'Jl. Diponegoro Denpasar, Bali'),
(63, 'Bali', 'RSU Tabanan ', 'Jl Pahlawan No 14 Tabanan 0361-811027'),
(64, 'Bali', 'RSU Sanjiwani Gianyar', 'Jl Ciung Wenara No 2 Gianyar 0361-943020'),
(65, 'NTB', 'RSU Mataram', 'JL. Pejanggik 6 Mataram 83121'),
(66, 'NTB', 'RSU Raba', 'JL.Langsat No. 1 Raba Kab. Bima. Telp. 0374-43142'),
(67, 'NTB', 'RSU Dr. R Sudjono', 'JL. Prof. M. Yamin SH No.55 Selong 0376-21118'),
(68, 'NTB', 'RSU Praya', 'JL. Basuki Rahmat No. 11 Praya 0370-654007'),
(69, 'NTT', 'RSU Prof. Dr. WZ Johanes', 'JL. DR. Moch.Hatta No.19 Kupang Telp 0380-832892'),
(70, 'NTT', 'RSU Dr.TC Hillers', 'JL. Kesehatan Maumere 0382-21617'),
(71, 'Kalimantan Barat', 'RSU Dr. Sudarso', 'JL. Adi Sucipto Pontianak Telp. 0561-7320, Fax : 732077'),
(72, 'Kalimantan Barat', 'RSU Dr. Abdul Aziz', 'JL. Dr.Soetomo No.28 Singkawang 0562-631748'),
(73, 'Kalimantan Barat', 'RSU Sintang ', 'JL.Pattimura Sintang'),
(74, 'Kalimantan Tengah', 'RSU Dr. Doris Sylvanus', 'Jl. Tmbun Bunga No.4 Palangkaraya Telp.0536-21717; Fax 29194'),
(75, 'Kalimantan Tengah', 'RSU Dr. Murjani Sampit', 'Jl. H M Arsyad No 65 Sampit. Telp. 0512-21010'),
(76, 'Kalimantan Selatan', 'RSU Ulin', 'Jl. Jend. A.Yani 79 Banjarmasin Telp.0511-2180; Fax.252229'),
(77, 'Kalimantan Selatan', 'RSU H Boejasin Pelaihari', 'Jl. A. Syahrani Pelaihari. Telp. 0512-21082'),
(78, 'Kalimantan Utara', 'RSU Tarakan', 'Jl. Merapi I Tarakan Telp. 0551-21720; Fax.21116'),
(79, 'Kalimantan Utara', 'RSU Tanjung Selor', 'Jl. Cendrawasih Tanjung Selor'),
(80, 'Kalimantan Timur', 'RSU Dr. Kanujoso Djatiwibowo', 'Jl. MT Haryono Ring Road Balikpapan'),
(81, 'Kalimantan Timur', 'RSU H A Wahab Sjahranie', 'Jl. Dr.Soetomo Samarinda. Telp. 0541-738118'),
(82, 'Kalimantan Timur', 'RSU Kota Bontang', 'Jl. A Yani Rt 11 Bontang. Telp. 0548-21256'),
(83, 'Kalimantan Timur', 'RSU Panglima Sebaya', 'Jl. Ciptomangunkusumo No.2 Grogot- 21118'),
(84, 'Sulawesi Utara', 'RSU Prof. Dr. RD Kandou', 'Jl. Raya Tanawangko Telp.(0431)853191-853193'),
(85, 'Sulawesi Utara', 'RSU Dr. Sam Ratulangi', 'Luaan Tondano, Minahasa'),
(86, 'Gorontalo', 'RSU Prof.Dr.H.Aloei Saboe', 'Jl. S Batutihe No.7 Gorontalo alo Telp. 0435-821019 ; Fax. 821019'),
(87, 'Sulawesi Tengah', 'RSU Undata', 'Jl.Dr. Suharso 14 Palu 94111'),
(88, 'Sulawesi Tengah', 'RSU Luwuk', 'Jl. lmam Bonjol No 14 Luwuk 0461-21820'),
(89, 'Sulawesi Tengah', 'RS Mokopido Toli Toli ', 'Jl. Lanoni Toli-Toli 0453-21300'),
(90, 'Sulawesi Tengah', 'RSU Kolonedale', 'JI. W. Monginsidi 2 Kolonedale 0465-21010'),
(91, 'Sulawesi Selatan', 'RSU Dr. Wahidin Sudirohusodo', 'Jl. Perintis Kemerdekaan Km. 11, Makassar 90245 Telp. 0411-510675: Fax . 510676'),
(92, 'Sulawesi Selatan', 'Andi Makkasau', 'Jl. Nurussamawati 3 Pare-pare'),
(93, 'Sulawesi Selatan', 'RSU Lakipadad Tana Toraja', 'Jl. Pongtiku Mandetek Tn Toraja. Telp. 0423-22264'),
(94, 'Sulawesi Selatan', 'RS lslam Faisal', 'Jl. AP Pettarani Makassar 0411-871942'),
(95, 'Sulawesi Selatan', 'RS Akademis Jaury', 'Jl. Bulusaraung No 57 Makassar 0411-317343'),
(96, 'Sulawesi Selatan', 'RSU Sinjai', 'Jl. Jend Sudirman No 47 Sinjai 0482-21132'),
(97, 'Sulawesi Tenggara', 'RSU Kendari', 'Jl. Dr. Sam Ratulangi No. 151 Kendari'),
(98, 'Maluku', 'RSU Dr. M Haulussy Ambon ', 'Jl. Dr. Kayadoe Ambon 97116'),
(99, 'Maluku Utara', 'RSU Chasan Basoeri Ternate', 'Jl. Tanah Tinggi Ternate telp. 0921-21281 , Fax : 217777'),
(100, 'Papua', 'RSU Jayapura', 'Jl. Kesehatan I Dok ll Jayapura 99112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `rs_rujukan`
--
ALTER TABLE `rs_rujukan`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rs_rujukan`
--
ALTER TABLE `rs_rujukan`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
