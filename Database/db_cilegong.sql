-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 08:17 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cilegong`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akta_kelahiran`
--

CREATE TABLE IF NOT EXISTS `tbl_akta_kelahiran` (
  `username` text NOT NULL,
  `no_hp` text NOT NULL,
  `tanggal_pengajuan` text NOT NULL,
  `no_kk` text NOT NULL,
  `nama_kepala_keluarga` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `nama_bayi` text NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_dilahirkan` text NOT NULL,
  `tempat_kelahiran` text NOT NULL,
  `hari` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pukul` time NOT NULL,
  `jenis_kelahiran` text NOT NULL,
  `penolong_kelahiran` text NOT NULL,
  `berat_bayi` text NOT NULL,
  `panjang_bayi` text NOT NULL,
  `nik_ibu` text NOT NULL,
  `nik_ayah` text NOT NULL,
  `upload_ktp` text NOT NULL,
  `upload_kk` text NOT NULL,
  `upload_buku_nikah` text NOT NULL,
  `upload_surat_pengantar` text NOT NULL,
  `status` text NOT NULL,
  `catat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akta_kelahiran`
--

INSERT INTO `tbl_akta_kelahiran` (`username`, `no_hp`, `tanggal_pengajuan`, `no_kk`, `nama_kepala_keluarga`, `nama_ibu`, `nama_bayi`, `jenis_kelamin`, `tempat_dilahirkan`, `tempat_kelahiran`, `hari`, `tanggal_lahir`, `pukul`, `jenis_kelahiran`, `penolong_kelahiran`, `berat_bayi`, `panjang_bayi`, `nik_ibu`, `nik_ayah`, `upload_ktp`, `upload_kk`, `upload_buku_nikah`, `upload_surat_pengantar`, `status`, `catat`) VALUES
('Wiwin Wijanah', '087779863281', '2021-09-01', '3214033005079241', 'Eman Suherman', 'Enur', 'Mahreen Shafana Almahyra', 'Perempuan', 'RS/RB', 'Purwakarta', 'Rabu', '2020-06-24', '00:15:00', 'Tunggal', 'Bidan/Perawat', '2600 gram', '49 cm', '3214034105000002', '3214034105000001', 'KTP Ibu.jpg', 'Kartu Keluarga.jpg', 'Buku Nikah.jpg', 'SK Kelahiran1.jpg', 'Selesai', ''),
('Yanti', '085721471163', '2021-09-29', '3214033005071234', 'Dudus', 'Yanti', 'Gina Ulya', 'Perempuan', 'RS/RB', 'Purwakarta', 'Senin', '2020-12-28', '20:53:00', 'Tunggal', 'Bidan/Perawat', '3100 gram', '50 cm', '3214055508870004', '3214055508870003', 'KTP Yanti.jpg', 'Kartu Keluarga.jpg', 'Buku Nikah.jpg', 'SK Kelahiran2.jpg', 'Diproses', ''),
('M. Sobirin', '081911971890', '2021-10-10', '3214030000000123', 'Muhammad Sobirin', 'Fitri', 'Muhammad Ayubi', 'Laki-Laki', 'RS/RB', 'Purwakarta', 'Rabu', '2021-09-01', '21:38:00', 'Tunggal', 'Bidan/Perawat', '3100 gram', '50 cm', '3214050808890004', '3214050808890003', 'KTP Sobirin.jpg', 'Kartu Keluarga.jpg', 'Buku Nikah.jpg', 'SK Kelahiran1.jpg', 'Selesai', 'Surat pengantar Anda bisa di ambil'),
('Suherman', '081909437603', '2021-10-13', '3214010506070809', 'Suherman', 'Fatimah', 'Siti Rokoyah', 'Perempuan', 'RS/RB', 'Purwakarta', 'Jumat', '2021-09-10', '20:43:00', 'Tunggal', 'Dokter', '2900 gram', '53 cm', '3214034105000002', '3214034105000001', 'KTP Herman.jpg', 'Kartu Keluarga.jpg', 'Buku Nikah.jpg', 'SK Kelahiran1.jpg', 'Diterima', ''),
('Yanti', '081911971890', '2021-10-13', '3214030000000123', 'Eman Suherman', 'Enur', 'Nala', 'Perempuan', 'RS/RB', 'Purwakarta', 'Jumat', '2021-10-15', '04:24:00', 'Tunggal', 'Dokter', '3100 gram', '50 cm', '3214055508870004', '3214050808890003', 'KTP Bapak.jpg', 'Kartu Keluarga.jpg', 'Buku Nikah.jpg', 'SK Kelahiran2.jpg', 'Ditolak', 'Tidak melengkapi persyaratan'),
('Enur', '081911971890', '2021-10-30', '3214030000000123', 'Ahmad', 'Enur', 'Nala', 'Perempuan', 'RS/RB', 'Purwakarta', 'sabtu', '2021-10-28', '10:59:00', 'Tunggal', 'Dokter', '3100 gram', '50 cm', '3214050808890004', '3214050808890003', 'KTP Ibu.jpg', 'Kartu Keluarga.jpg', 'Buku Nikah.jpg', 'SK Kelahiran1.jpg', 'Ditolak', 'Tidak melengkapi persyaratan'),
('Wiwin Wijanah', '087779863281', '0000-00-00', '3214030303000212', 'Pulan', 'Hindun', 'Hasan Basri', 'Laki-Laki', 'RS/RB', 'Purwakarta', 'Senin', '2021-11-01', '18:05:00', 'Tunggal', 'Dokter', '3100 gram', '50 cm', '12345', '12356', '', '', '', '', '', ''),
('Wiwin Wijanah', '0888888888', '', '3214030000000123', 'Devano', 'Naura', 'Alvin', 'Laki-Laki', 'RS/RB', 'Purwakarta', 'Selasa', '2021-11-02', '06:08:00', 'Tunggal', 'Bidan/Perawat', '3100 gram', '60 cm', '3214034105000005', '3214034105000004', '', '', '', '', '', ''),
('Wiwin Wijanah', '081911971890', '', '3214033005074421', 'Amar', 'Irish', 'Air', 'Laki-Laki', 'RS/RB', 'Purwakarta', 'Senin', '2021-11-01', '06:13:00', 'Tunggal', 'Dokter', '2600 gram', '49 cm', '3214034105000009', '3214034105000005', '', '', '', '', '', ''),
('Yanti', '081911971890', '01 Nov 2021', '3214030000000123', 'Asep', 'Elah', 'Rosyid', 'Laki-Laki', 'Puskesmas', 'Purwakarta', 'Senin', '2021-11-01', '17:11:00', 'Tunggal', 'Dokter', '3200 gram', '50 cm', '3214050808890004', '3214034105000004', '', '', '', '', 'Ditolak', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kk`
--

CREATE TABLE IF NOT EXISTS `tbl_kk` (
  `username` text NOT NULL,
  `no_hp` text NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `nik` text NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `status_pernikahan` text NOT NULL,
  `status_keluarga` text NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `gol_darah` text NOT NULL,
  `ayah` text NOT NULL,
  `ibu` text NOT NULL,
  `upload_kk` text NOT NULL,
  `upload_ktp` text NOT NULL,
  `upload_buku_nikah` text NOT NULL,
  `upload_keterangan_pindah` text NOT NULL,
  `status` text NOT NULL,
  `catat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kk`
--

INSERT INTO `tbl_kk` (`username`, `no_hp`, `tanggal_pengajuan`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_pernikahan`, `status_keluarga`, `kewarganegaraan`, `gol_darah`, `ayah`, `ibu`, `upload_kk`, `upload_ktp`, `upload_buku_nikah`, `upload_keterangan_pindah`, `status`, `catat`) VALUES
('M. Sobirin', '081911971890', '2021-09-15', '3214030106640001', 'Mayudi', 'Laki-Laki', 'Purwakarta', '1964-06-01', 'Islam', 'Tamat SD/Sederajat', 'Buruh Harian Lepas', 'Kawin', 'Kepala Keluarga', 'WNI', 'A', 'Husan', 'Tasih', 'KK Mayudi.jpg', 'KTP.jpg', 'Buku Nikah.jpg', '', 'Selesai', ''),
('Yanti', '085721471163', '2021-09-01', '3214035009810004', 'Yanti', 'Perempuan', 'Purwakarta', '1987-08-15', 'Islam', 'Tamat SD/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'WNI', 'AB', 'Muhdi', 'Saodah', 'Kartu Keluarga.jpg', 'KTP Yanti.jpg', 'Buku Nikah.jpg', '', 'Diproses', 'Surat pengantar lagi dalam pengerjaan'),
('Yanti', '085721471163', '2021-09-16', '3214035009810004', 'Yanti', 'Perempuan', 'Purwakarta', '1987-08-15', 'Islam', 'SLTA/Sederajat', 'Ibu Rumah Tangga', 'Kawin', 'Istri', 'WNI', 'AB', 'Muhdi', 'Saodah', 'Kartu Keluarga.jpg', 'KTP Yanti.jpg', 'Buku Nikah.jpg', '', 'Diproses', 'Surat pengantar lagi dalam pengerjaan'),
('Wiwin Wijanah', '085793710423', '2021-09-01', '3214034105000003', 'Wiwin Wijanah', 'Perempuan', 'Purwakarta', '2000-05-01', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', 'O', 'Eman Suherman', 'Enur', 'Kartu Keluarga.jpg', 'KTP.jpg', '', '', 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE IF NOT EXISTS `tbl_penduduk` (
  `NIK` text NOT NULL,
  `No_KK` text NOT NULL,
  `Nama` text NOT NULL,
  `Tempat_Lahir` text NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `RT` text NOT NULL,
  `RW` text NOT NULL,
  `Kelurahan` text NOT NULL,
  `Kecamatan` text NOT NULL,
  `Kabupaten` text NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Agama` text NOT NULL,
  `status_kawin` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`NIK`, `No_KK`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `RT`, `RW`, `Kelurahan`, `Kecamatan`, `Kabupaten`, `Jenis_Kelamin`, `Agama`, `status_kawin`, `pekerjaan`, `kewarganegaraan`) VALUES
('3214032303810002', '3214033005074224', 'Guruh Susandi', 'Purwakarta', '1987-03-23', 'Kp. Cipeuteuy 010/002', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Laki-Laki', 'Islam', 'Kawin', 'Karyawan Swasta', 'WNI'),
('3214036712850001', '3214033005074224', 'Nining', 'Purwakarta', '1985-07-27', 'Kp. Cipeuteuy 010/002', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Perempuan', 'Islam', 'Kawin', 'Ibu Rumah Tangga', 'WNI'),
('3214034807040001', '3214033005074224', 'Fadillah Nazma Aulya', 'Purwakarta', '2004-07-05', 'Kp. Cipeuteuy 010/002', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Perempuan', 'Islam', 'Belum Kawin', 'Ibu Rumah Tangga', 'WNI'),
('3214034312080001', '3214033005074224', 'Saskia Azzahra', 'Purwakarta', '2004-07-08', 'Kp. Cipeuteuy 010/002', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Perempuan', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI'),
('3214034811110002', '3214033005074224', 'Jesika Nurul Ghina', 'Purwakarta', '2011-11-06', 'Kp. Cipeuteuy 010/002', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Perempuan', 'Islam', 'Belum Kawin', 'Tidak/Belum Bekerja', 'WNI'),
('3214030106640001', '3214033005074420', 'Mayudi', 'Purwakarta', '1964-06-01', 'Kp. Cipeuteuy 012/003', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Laki-Laki', 'Islam', 'Kawin', 'Buruh Harian Lepas', 'WNI'),
('3214032203950002', '3214033005074420', 'Dede Maulana', 'Purwakarta', '1995-03-22', 'Kp. Cipeuteuy 012/003', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Laki-Laki', 'Islam', 'Belum Kawin', 'Karyawan Swasta', 'WNI'),
('3214031212490004', '3214031711090098', 'Sarman', 'Purwakarta', '1948-12-12', 'Kp. Cilegong', '', '', 'Cilegong', 'Jatiluhur', 'Purwakarta', 'Laki-Laki', 'Islam', 'Kawin', 'Buruh Harian Lepas', 'WNI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pindah`
--

CREATE TABLE IF NOT EXISTS `tbl_pindah` (
  `username` text NOT NULL,
  `no_hp` text NOT NULL,
  `tanggal_pengajuan` text NOT NULL,
  `no_kk` text NOT NULL,
  `nama_kepala_keluarga` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  `nik_pemohon` text NOT NULL,
  `nama_lengkap` text NOT NULL,
  `status_no_kk` text NOT NULL,
  `no_kk_tujuan` text NOT NULL,
  `nik_kepala_keluarga` text NOT NULL,
  `nama_kepala_keluarga_tujuan` text NOT NULL,
  `tanggal_kedatangan` date NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `upload_ktp` text NOT NULL,
  `upload_kk` text NOT NULL,
  `status` text NOT NULL,
  `catat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pindah`
--

INSERT INTO `tbl_pindah` (`username`, `no_hp`, `tanggal_pengajuan`, `no_kk`, `nama_kepala_keluarga`, `alamat`, `telepon`, `nik_pemohon`, `nama_lengkap`, `status_no_kk`, `no_kk_tujuan`, `nik_kepala_keluarga`, `nama_kepala_keluarga_tujuan`, `tanggal_kedatangan`, `alamat_tujuan`, `upload_ktp`, `upload_kk`, `status`, `catat`) VALUES
('Ahmad', '081283389847', '2021-09-29', '3214033005079241', 'Eman Suherman', 'Kp. Cibinong 012/003 Ds. Cilegong Jatiluhur', '087779940959', '3214032903790002', 'Eman Suherman', 'Nomor KK Tetap', '3214033005079241', '3214032903790002', 'Eman Suherman', '2021-09-30', 'Kp. Sampih 010/002 Ds. Cibinong Jatiluhur', 'KTP Bapak.jpg', 'Kartu Keluarga.jpg', 'Diterima', ''),
('Wiwin Wijanah', '+628156435873', '', '3214030000000123', 'Mayudi', 'Kp. Cipeuteuy 012/003 Ds. Cilegong Kec. Jatiluhur', '+628156435873', '+628156435873', 'wiwin wijanah', 'Nomor KK Tetap', '3214033005079241', '3214034105000001', 'Tarsih', '2021-11-03', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi`
--

CREATE TABLE IF NOT EXISTS `tbl_registrasi` (
  `nik` text NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `no_hp` text NOT NULL,
  `password` text NOT NULL,
  `kpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi`
--

INSERT INTO `tbl_registrasi` (`nik`, `nama`, `username`, `no_hp`, `password`, `kpassword`) VALUES
('3214034105000003', 'Wiwin Wijanah', 'wiwin', '085793710423', '4f7470a1f6b277d133ae174329745716', ''),
('321403460392001', 'Ahmad', 'ahmad', '088290424108', 'c4ca4238a0b923820dcc509a6f75849b', ''),
('3214050808890003', 'M. Sobirin', 'sobir', '081911971890', 'c4ca4238a0b923820dcc509a6f75849b', ''),
('3214055508870004', 'Yanti', 'yanti', '085721471163', 'c4ca4238a0b923820dcc509a6f75849b', ''),
('3214050604750002', 'Suherman', 'herman', '087719307203', 'c4ca4238a0b923820dcc509a6f75849b', ''),
('3214034105000003', 'Enur', 'wiwin', '081911971890', 'c4ca4238a0b923820dcc509a6f75849b', ''),
('', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_kematian`
--

CREATE TABLE IF NOT EXISTS `tbl_surat_kematian` (
  `username` text NOT NULL,
  `no_hp` text NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `nik` text NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` text NOT NULL,
  `alamat` text NOT NULL,
  `hari` text NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `tempat_kematian` text NOT NULL,
  `sebab_kematian` text NOT NULL,
  `upload_surat_pengantar` text NOT NULL,
  `upload_kk` text NOT NULL,
  `upload_ktp` text NOT NULL,
  `status` text NOT NULL,
  `catat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat_kematian`
--

INSERT INTO `tbl_surat_kematian` (`username`, `no_hp`, `tanggal_pengajuan`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `alamat`, `hari`, `tanggal_kematian`, `tempat_kematian`, `sebab_kematian`, `upload_surat_pengantar`, `upload_kk`, `upload_ktp`, `status`, `catat`) VALUES
('Wiwin Wijanah', '081909437603', '2021-09-01', '3214034112480003', 'Entin', 'Perempuan', 'Purwakarta', '1948-12-12', 'Ibu Rumah Tangga', 'Kp. Cilegong 011/002 Ds. Cilegong Jatiluhur', 'Minggu', '2021-08-15', 'Rumah', 'Sakit', 'SK Kematian.jpg', 'KK Nenek.jpg', 'KTP Nenek.jpg', 'Diterima', ''),
('Yanti', '085721471163', '2021-10-28', '3214030106640002', 'Inoh', 'Perempuan', 'Purwakarta', '1925-01-01', 'Ibu Rumah Tangga', 'Kp. Cilegong RT. 013 RW. 004 Ds. Cilegong Jatiluhur Purwakarta', 'Kamis', '2021-06-24', 'Rumah', 'Sakit', 'SK Kematian.jpg', '', '', 'Ditolak', 'Tidak melengkapi persyaratan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `kpassword` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `kpassword`, `status`) VALUES
('wiwin', '010520', '', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
