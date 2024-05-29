-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 12.32
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kartu_pasien`
--

CREATE TABLE `tbl_kartu_pasien` (
  `nomor` int(11) NOT NULL,
  `no_kartu` int(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `umur` int(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kartu_pasien`
--

INSERT INTO `tbl_kartu_pasien` (`nomor`, `no_kartu`, `tanggal`, `nama`, `jenis_kelamin`, `umur`, `alamat`, `no_hp`, `status`) VALUES
(28, 111, '2019-03-08 09:30:03', 'Irwansyah', 'Laki-laki', 12, 'Walenrang Timur', '2147483647', 'Nonaktif'),
(29, 122, '2019-04-20 09:44:57', 'Opi Ramuso', 'Laki-laki', 37, 'Wotu', '2147483647', 'Nonaktif'),
(35, 134, '2019-07-06 10:06:23', 'Muhlisa', 'Perempuan', 28, 'Padang Sappa', '2147483647', 'Nonaktif'),
(36, 146, '2019-08-01 09:16:55', 'Arisar Sayang', 'Perempuan', 37, 'Belopa', '2147483647', 'Nonaktif'),
(37, 221, '2022-01-27 10:00:04', 'Ernawati', 'Perempuan', 36, 'Pajalesang', '2147483647', 'Aktif'),
(38, 222, '2022-02-01 11:38:47', 'Pinerong', 'Laki-laki', 60, 'Ahmad Razak', '2147483647', 'Aktif'),
(39, 2401, '2024-01-02 10:42:22', 'Ismail Harun', 'Laki-laki', 14, 'Lamasi', '2147483647', 'Aktif'),
(40, 2402, '2024-01-02 11:44:32', 'Rusmiati', 'Perempuan', 67, 'Buntu Awo', '2147483647', 'Aktif'),
(41, 2403, '2024-01-03 12:46:23', 'Siska', 'Perempuan', 37, 'Sabbang', '2147483647', 'Aktif'),
(42, 2404, '2024-01-03 12:59:15', 'Nursia', 'Perempuan', 53, 'Bone-Bone', '2147483647', 'Aktif'),
(43, 2405, '2024-01-03 13:30:10', 'Heriyanto', 'Laki-laki', 29, 'veteran', '2147483647', 'Aktif'),
(44, 2406, '2024-01-12 09:56:09', 'Syamsidar', 'Perempuan', 49, 'Sabulino', '2147483647', 'Aktif'),
(45, 2407, '2024-01-12 10:57:36', 'Maryam', 'Perempuan', 62, 'Bogar', '2147483647', 'Aktif'),
(46, 2407, '2024-01-15 12:00:05', 'Husnia Amsik', 'Perempuan', 70, 'Nyiur', '2147483647', 'Aktif'),
(47, 2408, '2024-01-23 10:02:05', 'Jumiani', 'Perempuan', 40, 'Pongsimpin', '2147483647', 'Aktif'),
(48, 2409, '2024-01-30 11:03:06', 'Sukari Wahid', 'Perempuan', 50, 'Batusitanduk', '2147483647', 'Aktif'),
(49, 2410, '2024-02-03 11:14:29', 'Bunga', 'Perempuan', 46, 'Cakalang', '2147483647', 'Aktif'),
(50, 2411, '2024-02-12 09:16:50', 'Hj.St.Asiah', 'Perempuan', 76, 'Opu Tosappaile', '2147483647', 'Aktif'),
(51, 2412, '2024-02-19 09:17:47', 'Marna', 'Perempuan', 50, 'Noling', '2147483647', 'Aktif'),
(52, 2413, '2024-02-19 10:18:51', 'Hadiati', 'Perempuan', 58, 'Salulino', '2147483647', 'Aktif'),
(53, 2414, '2024-02-19 13:19:39', 'Hj. Sumiati', 'Perempuan', 77, 'Lampuara', '2147483647', 'Aktif'),
(54, 2415, '2024-02-22 11:20:42', 'Tiara', 'Perempuan', 70, 'Batara', '2147483647', 'Aktif'),
(55, 2416, '2024-02-26 12:21:34', 'Baoriani', 'Perempuan', 73, 'Sabbang', '2147483647', 'Aktif'),
(56, 2417, '2024-03-01 09:34:32', 'Hasma', 'Perempuan', 40, 'Bogar', '2147483647', 'Aktif'),
(57, 2418, '2024-03-04 10:35:44', 'Rengki', 'Laki-laki', 28, 'Seriti', '2147483647', 'Aktif'),
(58, 2419, '2024-03-04 11:36:26', 'Risma', 'Perempuan', 40, 'Wotu', '2147483647', 'Aktif'),
(59, 2420, '2024-03-05 12:37:06', 'Rerre', 'Perempuan', 67, 'Walenrang', '2147483647', 'Aktif'),
(60, 2421, '2024-03-13 10:38:07', 'Nurhaeni', 'Perempuan', 58, 'A.Tendriajeng', '2147483647', 'Aktif'),
(61, 2422, '2024-04-17 11:50:13', 'Masita', 'Perempuan', 55, 'Mario', '2147483647', 'Aktif'),
(62, 2423, '2024-04-18 10:51:47', 'Wayan Suharianti', 'Perempuan', 36, 'Malili', '2147483647', 'Aktif'),
(63, 2424, '2024-04-22 12:53:29', 'Hj.St.Unar', 'Perempuan', 73, 'Penggoli', '2147483647', 'Aktif'),
(64, 2425, '2024-04-22 13:55:43', 'Banda Abbas', 'Laki-laki', 71, 'Kalotok', '2147483647', 'Aktif'),
(65, 2426, '2024-04-23 09:56:49', 'Hj. Subaedah Fateha', 'Perempuan', 77, 'Kelapa', '2147483647', 'Aktif'),
(66, 2426, '2024-04-24 10:57:37', 'Yuliati', 'Perempuan', 41, 'Bajo', '2147483647', 'Aktif'),
(67, 2419, '2024-05-02 10:38:56', 'Hamria', 'Perempuan', 63, 'Baebunta Selatan', '2147483647', 'Aktif'),
(68, 2420, '2024-05-29 05:49:07', 'Andi Akram', 'Laki-laki', 24, 'Jl. Sungai Rongkong', '2147483647', 'Aktif'),
(69, 2421, '2024-05-29 05:55:08', 'Agustinus', 'Laki-laki', 58, 'Balandai', '081246554768', 'Aktif'),
(70, 2422, '2024-05-29 05:53:54', 'Amran', 'Laki-laki', 50, 'Jl. Diponegoro', '081246554768', 'Aktif'),
(71, 2423, '2024-05-29 05:54:42', 'Attas', 'Laki-laki', 74, 'Jl. Mungkasa', '085674328987', 'Aktif'),
(72, 2424, '2024-05-29 05:48:20', 'Andi Maryam', 'Perempuan', 45, 'Jl.Veteran', '2147483647', 'Aktif'),
(73, 2425, '2024-05-29 05:53:20', 'Risna Jayanti', 'Perempuan', 30, 'Jl. Anggrek', '2147483647', 'Aktif'),
(74, 2426, '2024-05-29 05:52:52', 'Sabariyah', 'Perempuan', 60, 'Jl. Batara', '2147483647', 'Aktif'),
(75, 2427, '2024-05-29 05:54:11', 'Hj.Jumrah', 'Perempuan', 68, 'Jl.Salak', '082188999333', 'Aktif'),
(76, 2428, '2024-05-29 05:50:32', 'Sukardi', 'Laki-laki', 55, 'Jl. Merpati', '084567654329', 'Aktif'),
(77, 2429, '2024-05-29 05:46:55', 'Nahar', 'Laki-laki', 40, 'Jl. Tandipau Bua', '082145667643', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekam_medis`
--

CREATE TABLE `tbl_rekam_medis` (
  `id_rm` int(11) NOT NULL,
  `no_rm` varchar(5) NOT NULL,
  `nomor` int(11) NOT NULL,
  `tgl_periksa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `anamnesa` varchar(255) NOT NULL,
  `td` varchar(6) NOT NULL,
  `suhu` varchar(3) NOT NULL,
  `diagnosa` text NOT NULL,
  `terapi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rekam_medis`
--

INSERT INTO `tbl_rekam_medis` (`id_rm`, `no_rm`, `nomor`, `tgl_periksa`, `anamnesa`, `td`, `suhu`, `diagnosa`, `terapi`) VALUES
(1, '11', 0, '2024-05-22 15:02:17', 'tessssss', 'tes', '', 'tes', 'tes'),
(2, '123', 13, '2024-05-25 08:48:55', 'muda tapi jompo', 'baik-b', '', 'anak muda jompo hhh', 'olahraga'),
(11, '123', 11, '2024-05-25 10:12:14', 'ertyuio', '120/90', '36', 'rtyuiop[', 'cvbnm'),
(12, '1', 39, '2024-05-26 04:17:34', 'Sakit Kepala', '130/90', '36', 'Osteomielitis', 'Minum Obat'),
(13, '2', 40, '2024-05-26 04:23:03', 'Sakit Kepala', '160/90', '37', 'Hipertensi', 'Minum Obat'),
(14, '3', 48, '2024-05-26 04:32:03', 'Sakit Kepala', '170/11', '37', 'Banyak Penyakit', 'Minum Obat'),
(15, '4', 48, '2024-05-26 04:32:44', 'Sakit Jiwa', '130/80', '36', 'Mulaimi Sehat', 'Minum Obat'),
(16, '11', 77, '2024-05-26 12:48:09', 'Pusing dan Nyeri ulu hati', '130/80', '37', 'Hipertensi', 'Minum Obat '),
(17, '112', 76, '2024-05-26 12:55:42', 'Kelelahan,Sakit kepala,Sesak Napas', '150/90', '37', 'Anemia Defisiensi', 'Minum Obat'),
(18, '113', 76, '2024-05-26 13:01:19', 'Alergi,Demam,Pusing', '130/80', '39', 'Lepra', 'Minum Obat'),
(19, '114', 75, '2024-05-26 13:18:14', 'Penurunan memori, kelelahan', '140/90', '37', 'Alzheimer', 'Minum Obat\r\n'),
(20, '115', 71, '2024-05-26 13:35:43', 'Nyeri ulu hati,Mual,Kelelahan', '180/11', '37', 'Gastroparesis', 'Minum obat'),
(21, '116', 70, '2024-05-26 13:44:24', 'Infeksi saluran kemih,Nyeri Neuroptik', '130/90', '37', 'Epilepsi', 'Minum obat'),
(22, '117', 70, '2024-05-26 13:50:05', 'Infeksi saluran kemih,Nyeri neuropatik', '120/90', '36', 'Epilepsi', 'Minum obat'),
(23, '118', 67, '2024-05-26 14:08:02', 'Nyeri saraf,Kelelahan, Nyeri neuropatik,Nyeri ulu hati', '150/90', '36', 'fibromyalgia', 'Minum obat'),
(24, '119', 67, '2024-05-26 14:14:59', 'Nyeri saraf,nyeri neuropatik,mual,kembung', '150/90', '37', 'fibromyalgia', 'Minum obat'),
(25, '120', 66, '2024-05-22 11:54:32', 'Pusing,Mual', '130/10', '37', 'Vertigo', 'Minum Obat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_resep_obat`
--

CREATE TABLE `tbl_resep_obat` (
  `id_resep` int(10) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `aturan` varchar(250) NOT NULL,
  `nomor` int(11) NOT NULL,
  `tgl_periksa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_resep_obat`
--

INSERT INTO `tbl_resep_obat` (`id_resep`, `nama_obat`, `jumlah`, `aturan`, `nomor`, `tgl_periksa`) VALUES
(38, '<ol><li>paracetamol</li><li>inza</li><li>inzana</li><li>paramex</li><li>antalgin</li></ol>', '<p>5</p>', '<p>1x3 per hari</p>', 11, '2024-05-25 04:59:09'),
(42, '<ol><li>tes</li><li>tes</li><li>tes</li></ol>', '<p>3</p>', '<p>tes</p>', 13, '2024-05-25 05:35:42'),
(43, '<p>K.Sefolgia</p>', '<p>xx</p>', '<p>2x1 siang dan malam</p>', 39, '2024-05-26 04:18:39'),
(44, '<ol><li>Versilon</li><li>K.Sefolgia</li><li>Zevask</li><li>Lansoprazole</li></ol>', '<ul><li>xx</li><li>xx</li><li>x</li><li>x</li></ul>', '<ul><li>2x1 pagi dan malam</li><li>2x1 siang dan malam</li><li>1x1 siang</li><li>1x1 siang</li></ul>', 40, '2024-05-26 04:27:37'),
(45, '<ol><li>Protektive</li><li>Zevask</li><li>Provital</li><li>Aspilets</li></ol>', '<ul><li>xxx</li><li>xv</li><li>xv</li><li>xv</li></ul>', '<ul><li>2x1 sesudah makan</li><li>1x1 sebelum makan</li><li>1x1 sebelum makan</li><li>1x1 sebelum makan</li></ul>', 48, '2024-05-26 04:34:38'),
(46, '<ol><li>Protecline 500</li><li>Zevask</li><li>Neunaed</li></ol>', '<ul><li>xxx</li><li>xxx</li><li>xxx</li></ul>', '<ul><li>1x1</li><li>1x1</li><li>1x1</li></ul>', 48, '2024-05-26 04:37:44'),
(47, '<ol><li>K.Sefolgia</li><li>Zevask</li><li>Lansoprazole</li></ol>', '<ul><li>x</li><li>x</li><li>v</li></ul>', '<ul><li>1 x 1</li><li>1 x 1</li><li>1 x 1</li></ul>', 77, '2024-05-26 12:39:56'),
(48, '<ol><li>Chepomed</li><li>Bamgefol</li></ol>', '<ul><li>xxx</li><li>ix</li></ul>', '<ul><li>1 x 1</li><li>2 x 1</li></ul>', 76, '2024-05-26 12:57:24'),
(49, '<ol><li>Bamgetol</li><li>Divalporex</li><li>Clofazimine</li><li>Cetirizine</li></ol>', '<ul><li>xi</li><li>ix</li><li>xxx</li><li>xx</li></ul>', '<ul><li>2 x 1</li><li>2 x 1</li><li>1 x 1</li><li>1 x 1</li></ul>', 76, '2024-05-26 13:03:59'),
(50, '<ol><li>Donepezil</li><li>Mycophenolate</li><li>Cefixime</li></ol>', '<ul><li>x</li><li>xx</li><li>x</li></ul>', '<ul><li>1 x 1</li><li>2 x 1</li><li>1 x 1</li></ul>', 75, '2024-05-26 13:15:37'),
(51, '<ol><li>Protekline</li><li>Gravask</li><li>Ethigobal</li><li>Progalin</li></ol>', '<ul><li>xxx</li><li>xxx</li><li>xxx</li><li>xxx</li></ul>', '<ul><li>1 x 1</li><li>1 x 1</li><li>1 x 1</li><li>1 x 1</li></ul>', 71, '2024-05-26 13:30:01'),
(52, '<ol><li>Chepamed</li><li>Neuromed</li></ol>', '<ul><li>xxx</li><li>xv</li></ul>', '<ul><li>2 x 1</li><li>1 x 1</li></ul>', 70, '2024-05-26 13:39:07'),
(53, '<ol><li>Chepamed</li><li>Neuromed</li><li>Gravast</li></ol>', '<ul><li>xxx</li><li>xxx</li><li>xxx</li></ul>', '<ul><li>1 x 1</li><li>1 x 1</li><li>1 x 1</li></ul>', 70, '2024-05-26 13:47:42'),
(54, '<ol><li>Progalin 75</li><li>Koditic</li><li>Omz</li><li>Ethiglobal</li><li>Amitryptilline</li></ol>', '<ul><li>xx</li><li>xx</li><li>xx</li><li>xv</li><li>xv</li></ul>', '<ul><li>2 x 1</li><li>2 x 1</li><li>2 x 1</li><li>1 x 1</li><li>0-0-1</li></ul>', 67, '2024-05-26 13:54:42'),
(55, '<ol><li>Progalin 75</li><li>Koditic</li><li>Omz</li><li>Amitryptilline</li><li>Grovask</li></ol>', '<ul><li>xx</li><li>xx</li><li>xx</li><li>x</li><li>x</li></ul>', '<ul><li>2 x 1</li><li>2 x 1</li><li>2 x 1</li><li>0-0-1</li><li>1 x 1</li></ul>', 67, '2024-05-26 13:56:59'),
(56, '<ol><li>Bisoprolol 5mg</li><li>Silum</li><li>vergo</li><li>Dimenhidrinate</li></ol>', '<ul><li>x</li><li>xx</li><li>x</li><li>xx</li></ul>', '<ul><li>1 x 1&nbsp;</li><li>2 x 1</li><li>1 x 1&nbsp;</li><li>2 x 1&nbsp;</li></ul>', 66, '2024-05-22 11:54:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ttd`
--

CREATE TABLE `tbl_ttd` (
  `id_ttd` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ttd`
--

INSERT INTO `tbl_ttd` (`id_ttd`, `nama`, `ttd`) VALUES
(1, 'dr.Suyuti Arifin, Sp.S.', '1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `status_akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `status_akses`) VALUES
(6, 'Ewit Pratiwi', 'ewit1', '123', 'Petugas Klinik'),
(7, 'Suyuti Arifin', 'Suyuti1', '123', 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kartu_pasien`
--
ALTER TABLE `tbl_kartu_pasien`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `tbl_rekam_medis`
--
ALTER TABLE `tbl_rekam_medis`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indeks untuk tabel `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indeks untuk tabel `tbl_ttd`
--
ALTER TABLE `tbl_ttd`
  ADD PRIMARY KEY (`id_ttd`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kartu_pasien`
--
ALTER TABLE `tbl_kartu_pasien`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekam_medis`
--
ALTER TABLE `tbl_rekam_medis`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  MODIFY `id_resep` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tbl_ttd`
--
ALTER TABLE `tbl_ttd`
  MODIFY `id_ttd` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
