-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2023 at 05:44 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_dinas_pertanian`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibit`
--

CREATE TABLE `bibit` (
  `id` int(11) NOT NULL,
  `produsen` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `waktu_semai` date NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bibit`
--

INSERT INTO `bibit` (`id`, `produsen`, `gambar`, `deskripsi`, `jumlah`, `satuan`, `waktu_semai`, `harga`, `created_at`, `update_at`) VALUES
(1, 'PT. BUKIT HARAPAN SEJAHETRA', 'bibit-1683413044.png', '<p>KONDISI SUDAH BERKECAMBAH<br>SIAP TANAM DI POLIBAG<br>BIBIT KUALITAS UNGGUL<br><br>untuk menjaga kecambah agar tetap aman, sebelum dikirim kami periksa untuk menjaga kepuasan pembeli dan kami tambah packing pengaman.<br><br>bibit original ppks mempunyai cap pada kulit (batok) kelapa berukuran besar dan besar janjangan buahnya.<br>pohon pendek, sehingga lebih mudah untuk panen.<br>ingat jangan tergiur dengan barang murah, barang kami kirim adalah benih unggul dan original.<br><br>---------------------------------------------<br><br>PUSAT PENELITIAN KELAPA SAWIT UNGGUL PENGIRIMAN KECAMBAH DxP PPKS MEDAN<br><br>ISI 250 Butir ( 1 kotak )<br><br>Bibit Sawit DxP PPKS High CPO<br>Kualitas Persilangan Dura dan Psifera<br><br>- DxP PPKS High CPO and PKO<br><br>(New Variates )<br><br>* Hasil seleksi siklus kedua program RRS ( Recipcoal Recurrent Selection) yang dimulai tahun 1986.<br>* Memiliki keunggulan dalam persentase daging buah ( mesokarp) yang sangat tinggi hingga 89%.<br>* Tingkat rendemen minyak laboratorium mencapai 32,3%<br>* Tingkat produksi CPO 8,1Ton/Ha/Tahun.<br><br>DESKRIPSI DXP PPKS High CPO<br>* Asal : Dura x pisifera<br>* Pertumbuhan : 50 - 55 cm/thn<br>* Lingkar Batang : 4 - 5 meter<br>* Panjang pelepah : 6.36 meter<br>* Produksi pelepah : 12-16 pelepah/thn<br>* Usia mulai berbuah : 22 bulan<br>* Usia mulai panen : 30 bulan<br>* Jumlah tandan : 10 - 18 tandan/thn<br>* Berat tandan : 18 - 25 kg/tandan<br>* Panen TBS : 38 - 48 Ton/ha/thn<br>* Presentasi Buah/tandan: 90%<br>* Presentasi inti/Tandan: 4 - 6%</p>', 35352, 'Batang', '2023-05-02', 205000, '2023-05-06 07:38:38', '2023-05-06 22:44:04'),
(2, 'DXP PPKS', 'bibit-1683412869.png', '<p>KONDISI SUDAH BERKECAMBAH<br>SIAP TANAM DI POLIBAG<br>BIBIT KUALITAS UNGGUL<br><br>untuk menjaga kecambah agar tetap aman, sebelum dikirim kami periksa untuk menjaga kepuasan pembeli dan kami tambah packing pengaman.<br><br>bibit original ppks mempunyai cap pada kulit (batok) kelapa berukuran besar dan besar janjangan buahnya.<br>pohon pendek, sehingga lebih mudah untuk panen.<br>ingat jangan tergiur dengan barang murah, barang kami kirim adalah benih unggul dan original.<br><br>---------------------------------------------<br><br>PUSAT PENELITIAN KELAPA SAWIT UNGGUL PENGIRIMAN KECAMBAH DxP PPKS MEDAN<br><br>ISI 250 Butir ( 1 kotak )<br><br>Bibit Sawit DxP PPKS High CPO<br>Kualitas Persilangan Dura dan Psifera<br><br>- DxP PPKS High CPO and PKO<br><br>(New Variates )<br><br>* Hasil seleksi siklus kedua program RRS ( Recipcoal Recurrent Selection) yang dimulai tahun 1986.<br>* Memiliki keunggulan dalam persentase daging buah ( mesokarp) yang sangat tinggi hingga 89%.<br>* Tingkat rendemen minyak laboratorium mencapai 32,3%<br>* Tingkat produksi CPO 8,1Ton/Ha/Tahun.<br><br>DESKRIPSI DXP PPKS High CPO<br>* Asal : Dura x pisifera<br>* Pertumbuhan : 50 - 55 cm/thn<br>* Lingkar Batang : 4 - 5 meter<br>* Panjang pelepah : 6.36 meter<br>* Produksi pelepah : 12-16 pelepah/thn<br>* Usia mulai berbuah : 22 bulan<br>* Usia mulai panen : 30 bulan<br>* Jumlah tandan : 10 - 18 tandan/thn<br>* Berat tandan : 18 - 25 kg/tandan<br>* Panen TBS : 38 - 48 Ton/ha/thn<br>* Presentasi Buah/tandan: 90%<br>* Presentasi inti/Tandan: 4 - 6%</p>', 454, 'Batang', '2023-04-12', 250000, '2023-05-06 22:41:09', '2023-05-06 22:41:09'),
(3, 'Marehat Unggul', 'bibit-1683412974.png', '<p>READY STOK MARIHAT VARIETAS DUMPY<br><br>untuk menjaga kecambah agar tetap aman, sebelum dikirim kami periksa untuk menjaga kepuasan pembeli dan kami tambah packing pengaman.<br><br>stok tersedia bukan barang abal-abal / replika. 100% polong benih sawit MAREHAT medan original. untuk menjamin keaslian benih bibit tersebut. jangan tanya stok, barang selalu kami upgrade<br><br>1 kotak isi 250 biji<br>setiap benih ada cap nya dan siap tanam<br>kondisi sudah berkecambah<br>siap tanam<br>benih berkualitas unggul</p>', 966, 'Batang', '2023-03-10', 185000, '2023-05-06 22:42:54', '2023-05-06 22:42:54'),
(4, 'DXP Sriwijaya unggul CAP SJ5', 'bibit-1683413180.png', '<p>cara tanam<br>Siapkan substrat bisa pasir malang, soil ultimate, atau pasir silika dgn ketebalan/ tinggi 1-3cm, taburkan pupuk dasar dengan merata. Tutup kembali dengan pasir malang. Atur desain (hardscape) yg anda sukai. Semprot substrat dengan air yang dicampur pupuk cair (aqua segar). Asal substrat basah aja, gak perlu sampai menggenang. Jika dirasa desain sudah mantab, taburkan benih karpet seed merata pada bagian yg di inginkan. Bisa variasi sesuai ukuran seed. Mini dwarf atau hairgrass. Setelah penaburan benih dirasa cukup, semprot sekali lagi, pakai semprotan yg paling lembut untuk membasahi benih. Jangan lupa berdoa karena yg bisa menumbuhkan adalah yg punya kehidupan. Pasangkan plastik penutup aquarium yg transparan ya! -jangan yang hitam atau putih bekas bungkus belanjaan mart- pastikan RAPAT kalo perlu dikasih lakban keliling. Siapkan lampu dan pasang diatas penutup nyalakan minimal 8 jam. Biarkan proses berjalan. Kalau sudah 2 hari pasir terlihat masih basah dan kaca masih berembun penutup ga perlu dibuka. Kalo pasir kelihatan kering buka penutup plastik lalu semprot dengan semprotan lembut dan lakukan dengan penuh kasih sayang kemudian tutup kembali. Tiap 2 hari cek ya! Sekitar 3 minggu akar biasanya sudah berkembang cukup panjang. Siap di isi air..<br><br>Tanaman untuk belajar AquascapE yang mudah hidup<br>- Jenis tanaman grass yang tidak memerlukan co2 dan cahaya yang tinggi<br>- Tingkat keberhasilan yang sangat tinggi dalam pertumbuhan benih<br>- Baik untuk pengenalan aquascape bagi para pemula<br>- tanaman dapat tumbuh 1-3 minggu<br><br>bibit ajaib bagi mereka para pemula maupun profesional yang ingin membuat sebuah miniatur taman dalam air atau aquascape tanpa harus menunggu waktu lama berbulan bulan untuk menunggu tanamannya merata atau rimbun, dengan bibit ini hanya butuh waktu 2 minggu untuk melihat aquarium anda tampak indah</p>', 90, 'Batang', '2023-04-01', 240000, '2023-05-06 22:46:20', '2023-05-06 22:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `type` enum('bibit','pupuk') NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `type` enum('bibit','pupuk') NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_transaksi`, `id_produk`, `type`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(7, 7, 1, 'bibit', 1, 205000, '2023-05-09 16:11:43', '2023-05-09 16:11:43'),
(8, 7, 1, 'pupuk', 20, 15000, '2023-05-09 16:11:43', '2023-05-09 16:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `pupuk`
--

CREATE TABLE `pupuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pupuk`
--

INSERT INTO `pupuk` (`id`, `nama`, `gambar`, `jumlah`, `satuan`, `harga`, `deskripsi`, `created_at`, `update_at`) VALUES
(1, 'Pupuk Organik Booster Sawit Pelebat Buah Super', 'pupuk-1683413277.png', 250, 'Pack', 15000, '<p>Pupuk Organik Booster Sawit Pemicu Buah Serbuk Terbaik Ampuh Agar Cepat Berbuah Lebat adalah Booster sawit, Pemicu sawit, Boster sawit, pupuk sawit Pupuk multi mikroba yang mengandung nutrisi hara mikro, makro, dan senyawa organik untuk kesuburan tanaman sehingga akan meningkatkan kuantitas dan kualita hasil penen<br><br>Kandungan :<br>- Kalsium<br>- Kalium<br>- Pospat<br>- Nutrisi Buah Sawit<br><br>Manfaat :<br>- Memperkuat buah pada tangkai agar tidak mudah rontok<br>- Memperbaiki, merangsang dan mempercepat pertumbuhan akar, daun, tunas dan anakan<br>- Mempercepat pembungaan dan pengisian daging / bulir buah<br>- Menambah daya tahan tanaman terhadap hama, penyakit, dan pengaruh buruk lingkungan<br>- Meningkatkan kuantitas dan kwalitas hasil panen<br>- Memperbaiki kerusakan tanah akibat penggunaan pupuk kimia<br><br>Cara Pemakaian:<br>Aplikasikan 1 sachet pupuk kemasan 250 gram dilarutkan dengan air 5 liter, siramkan larutan pupuk<br>di area perakaran. Pemupukan dilakukan 25 hari sekali. Larutan pupuk bisa juga di digunakan untuk<br>penyemprotan batang dan daun sebagai nutrisi dan pencegahan penyakit. Ampasnya berfungsi untuk<br>penyuburan dan mempeperbaiki tanah. -<br><br>Kandungan Unsur :<br>Calsium : 1.3452%, Kalium : 0.9098%, Pospat : 0.2903 %, Nitrogen : 0.2622 %, PH : 7.35, Lotusbaktilus,<br>Multi mikroba aktif</p>', '2023-05-06 22:01:15', '2023-05-06 22:47:57'),
(3, 'Pupuk Booster Sawit Cepat Berbuah Lebat Pupuk Pele', 'pupuk-1683413336.jpg', 255, 'Pack', 21000, '<p>Pupuk Organik Booster Sawit Pemacu Buah Serbuk Terbaik Ampuh Agar Cepat Berbuah Lebat<br><br>Merupakan Pupuk multi mikroba yang mengandung nutrisi hara mikro, makro, dan senyawa organik untuk kesuburan tanaman sehingga akan meningkatkan kuantitas dan kualita hasil penen. Manfaat yang di dapat jika memakai pupuk ini adalah<br><br><br>Manfaat :<br>- Memperkuat bunga pada tangkai sehingga tidak mudah rontok<br>- Memperbaiki, Menstimulasi, dan mempercepat pertumbuhan akar,<br>daun, tunas, dan calon buah<br>- Mempercepat pembungaan dan pengisian buah<br>- Menambah daya tahan tanaman terhadap hama, penyakit, dan<br>pengaruh buruk lingkungan.<br>- Meningkatkan kuantitas dan kualitas hasil panen<br>- Memperbaiki kesuburan tanah akibat penggunaan pupuk kimia<br><br>Cara pemakaian :<br>- Per 500 gram / 2 sachet kemasan pupuk serbuk ditaburkan pada pangkal batang area akar<br>tanaman. Dilakukan selama 3 bulan sekali. Atau jika hanya 1 sachet kemasan pupuk, maka<br>cukup ditaburkan 40 hari sekali. (Rekomendasi 500 gram selai tabur)<br><br>- Atau per 500 gram pupuk serbuk, dilarutkan dengan air 5 liter, Kemudian<br>siramkan cairan larutan pupuk pada pangkal batang area akar. Ulangi setiap bulan sekali<br><br><br>Kandungan Unsur :<br>Nitrogen (N) 0,040%, Fosfor (P 205)0,07%, Kalsium (k20) 0,13%,<br>Seng (Zn) 5,18 ppm, Tembaga (Cu) 0,23 ppm, Mangan (MN) 8,52 ppm,<br>Kobal (Co0) - 0,005 ppm, Besi (Fe) 0,0027%, C-Organik 10, 57%<br>Mikroba Patogen (E, Coli, Salmonela) 3,60 Cell/ml, ph 3,59<br><br>Kandungan Lain :<br>Kalsium, Kalium, Posfat, Nitrogen<br><br>Berat Isi Perkemasan 250 gram</p>', '2023-05-06 22:48:56', '2023-05-06 22:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode_pesanan` bigint(25) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1 - menunggu pengambilan, 2 success, 3 gagal',
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_pesanan`, `id_user`, `tgl_pengambilan`, `status`, `total`, `created_at`, `updated_at`) VALUES
(7, 1683648703, 3, '2023-05-16', '2', 505000, '2023-05-09 16:11:43', '2023-05-09 17:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('a','u') NOT NULL COMMENT 'a-admin, u-user',
  `jenis_kelamin` enum('l','p') DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'a', NULL, NULL, NULL, '2023-05-05 15:18:09', '2023-05-09 12:15:44'),
(3, 'Supri', 'supri', 'd79444495ba8886c397b418227564d3f', 'u', 'l', '087721191226', 'Jl Ahmad Yani 2022 111', '2023-05-05 17:37:01', '2023-05-09 17:43:53'),
(4, 'Adi', 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'u', 'l', '087721191226', 'asdaf asda', '2023-05-09 17:43:12', '2023-05-09 17:43:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pupuk`
--
ALTER TABLE `pupuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibit`
--
ALTER TABLE `bibit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pupuk`
--
ALTER TABLE `pupuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
