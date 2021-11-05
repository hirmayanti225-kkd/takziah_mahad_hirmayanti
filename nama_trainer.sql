-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2021 pada 15.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nama_trainer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_nama`
--

CREATE TABLE `daftar_nama` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_nama`
--

CREATE TABLE `list_nama` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_nama`
--

INSERT INTO `list_nama` (`nim`, `nama`, `jurusan`, `id`) VALUES
('benu', '082339776528', 'kakak', 0),
('hirmayanti', '087866785305', 'pringgabaya', 0),
('sukarno', '081877536007', 'selong', 0),
('suparman', '081980567444', 'rumbuk', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_nama2`
--

CREATE TABLE `list_nama2` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `Ket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_nama2`
--

INSERT INTO `list_nama2` (`id`, `nama`, `nohp`, `tgllahir`, `jurusan`, `Ket`) VALUES
(38, 'bambang', 'jenggik', '2021-10-27', '1 Mobil', ''),
(39, 'bambang wiranto', 'pancor', '2021-10-30', '2 Mobil', ''),
(43, 'hermansyah', 'apitaik', '2021-10-28', '1 mobil', ''),
(50, 'cinta', 'surga', '2021-10-30', '2 mobil', ''),
(53, 'surga', 'surga', '2021-10-22', 'f', ''),
(56, 'cinta', 'cinta', '2021-10-28', '4', ''),
(57, 'l', 'l', '2021-10-29', '8', ''),
(59, 'hir', 'hir', '2021-10-28', '7', ''),
(60, 'n', 'n', '2021-10-06', 'n', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pelanggan`
--

CREATE TABLE `m_pelanggan` (
  `no` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `wa` text DEFAULT NULL,
  `softfile` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `m_pelanggan`
--

INSERT INTO `m_pelanggan` (`no`, `nama`, `alamat`, `email`, `wa`, `softfile`) VALUES
(1, 'Holid mahrul roi', 'Rumah sehat, RT 01', 'roi2673@gmail.com', '6283117965112', 0),
(2, 'Sya\'bandi ruwahillah', 'Jl. Pejanggik', 'bandi21@gmail.com', '6283871204747', 1),
(4, 'Khaeril izzi', 'Pancor bermi', 'izzi09@gmail.com', '6287862656787', 0),
(5, 'Hamdan', 'Pancor sanggeng', 'dan2000@gmail.com', '6281917291970', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stasiun`
--

CREATE TABLE `stasiun` (
  `id` int(11) NOT NULL,
  `nama_stasiun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_dibuat` bigint(20) NOT NULL,
  `jumlah` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama_barang`, `keterangan`, `tanggal_dibuat`, `jumlah`) VALUES
(42, 'amaq manan', 'sekarteja', 1635253264, '2 mobil'),
(43, 'syabandi', 'masbagik', 1635254670, '3 mobil'),
(44, 'ruwahillah', 'benyer', 1635254742, '2 mobil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `pesan` text NOT NULL,
  `is_read` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_notif`
--

INSERT INTO `tbl_notif` (`id`, `judul`, `pesan`, `is_read`) VALUES
(1, 'barang ditambahkan', 'barangh pada Tue, 26-Oct-2021, 06:18.', 1),
(2, 'barang ditambahkan', 'barangsendal pada Tue, 26-Oct-2021, 06:19.', 1),
(3, 'barang ditambahkan', 'barangsepatu pada Tue, 26-Oct-2021, 06:20.', 1),
(4, 'barang dihapus', 'barangsatu pada Tue, 26-Oct-2021, 06:28.', 1),
(5, 'barang dihapus', 'barangsepatu pada Tue, 26-Oct-2021, 07:01.', 1),
(6, 'barang ditambahkan', 'barang susi pada Tue, 26-Oct-2021, 07:06.', 1),
(11, 'barang ditambahkan', 'barang hirmayanti pada Tue, 26-Oct-2021, 09:13.', 1),
(12, 'barang ditambahkan', 'barang hiu pada Tue, 26-Oct-2021, 09:18.', 1),
(13, 'barang ditambahkan', 'barang tayo pada Tue, 26-Oct-2021, 09:19.', 1),
(14, 'barang ditambahkan', 'barang yanti pada Tue, 26-Oct-2021, 09:36.', 1),
(15, 'barang ditambahkan', 'barang SOFI pada Thu, 01-Jan-1970, 01:00.', 1),
(16, 'barang ditambahkan', 'barang inaq pada Thu, 01-Jan-1970, 01:00.', 1),
(17, 'barang ditambahkan', 'barang inaqku pada Thu, 01-Jan-1970, 01:00.', 1),
(18, 'barang ditambahkan', 'barang bandi pada Tue, 26-Oct-2021, 09:57.', 1),
(19, 'barang ditambahkan', 'barang bandet pada Tue, 26-Oct-2021, 10:06.', 1),
(20, 'barang ditambahkan', 'barang h pada Tue, 26-Oct-2021, 10:17.', 1),
(21, 'barang ditambahkan', 'barang h pada Tue, 26-Oct-2021, 10:17.', 1),
(22, 'barang dihapus', 'barangsendal pada Tue, 26-Oct-2021, 10:28.', 1),
(23, 'barang dihapus', 'baranghIRMA pada Tue, 26-Oct-2021, 10:30.', 1),
(24, 'barang ditambahkan', 'barang so pada Tue, 26-Oct-2021, 12:44.', 1),
(25, 'barang ditambahkan', 'barang d pada Tue, 26-Oct-2021, 12:45.', 1),
(26, 'barang ditambahkan', 'barang hir pada Tue, 26-Oct-2021, 12:50.', 1),
(27, 'barang dihapus', 'baranghiu pada Tue, 26-Oct-2021, 13:40.', 1),
(28, 'barang dihapus', 'barangtayo pada Tue, 26-Oct-2021, 13:41.', 1),
(29, 'barang ditambahkan', 'barang so pada Tue, 26-Oct-2021, 14:18.', 1),
(30, 'Data dihapus', 'Dataso dihapus pada Tue, 26-Oct-2021, 14:56.', 1),
(31, 'Data dihapus', 'Datahirmayanti dihapus pada Tue, 26-Oct-2021, 14:56.', 1),
(32, 'Data dihapus', 'Datayanti dihapus pada Tue, 26-Oct-2021, 14:56.', 1),
(33, 'Data dihapus', 'DataSOFI dihapus pada Tue, 26-Oct-2021, 14:56.', 1),
(34, 'Data dihapus', 'Datainaq dihapus pada Tue, 26-Oct-2021, 14:56.', 1),
(35, 'Data dihapus', 'Datainaqku dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(36, 'Data dihapus', 'Databandi dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(37, 'Data dihapus', 'Dataria dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(38, 'Data dihapus', 'Databandet dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(39, 'Data dihapus', 'Datah dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(40, 'Data dihapus', 'Datah dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(41, 'Data dihapus', 'Dataso dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(42, 'Data dihapus', 'Datad dihapus pada Tue, 26-Oct-2021, 14:57.', 1),
(43, 'Data ditambahkan', 'Data amaq manan ditambahkan pada Tue, 26-Oct-2021, 15:01.', 1),
(44, 'Data dihapus', 'Datahir dihapus pada Tue, 26-Oct-2021, 15:01.', 0),
(45, 'Data ditambahkan', 'Data syabandi ditambahkan pada Tue, 26-Oct-2021, 15:24.', 0),
(46, 'Data ditambahkan', 'Data ruwahillah ditambahkan pada Tue, 26-Oct-2021, 15:25.', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` int(11) NOT NULL,
  `kodeTiket` varchar(255) NOT NULL,
  `kodePesawat` varchar(255) NOT NULL,
  `namaPembeli` varchar(255) NOT NULL,
  `tglBerangkat` date NOT NULL,
  `waktuBerangkat` time NOT NULL,
  `harga` int(100) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `jlhMobil` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idTiket` int(11) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `id_active`, `date_created`, `nohp`, `alamat`) VALUES
(6, 'hirmayanti', 'hirmayanti225@gmail.com', 'hir2.jpg', '$2y$10$w6kFKoBs80ljND.4bLb3ZuPn/6Ex2td4zMyqFExxVa2oYYrYsJ9Im', 1, 1, 1632988160, '087866785305', 'pringgabaya'),
(10, 'nunung dea', 'dea@gmail.com', 'Hirma.jpg', '$2y$10$BgMhisG4iARvHCEK5pROn.Hv5/GrSiPPsMFxz46aApYSOk.wWF7KW', 2, 1, 1634440968, '', ''),
(11, 'bambang', 'bambang@gmail.com', 'default.jpg', '$2y$10$MftOe2SrVucqubyMD.3/9OY0PzRTriwOMZkMvS2jlaYRpjq6socR6', 2, 1, 1634681825, '', ''),
(12, 'bandi', 'bandi@gmail.com', 'satu2.jpg', '$2y$10$v/96vtrZilJrWM9JFgXFrOHZ1dmcz2B3TQMyZGbHvOQPlKbkbMOKS', 2, 1, 1634688105, '087866785305', 'masbagik'),
(13, 'herman', 'herman@gmail.com', 'default.jpg', '$2y$10$EssalspkqJxQKP54SPA/g.yof48kteGqLL1Z24mKGcmi3TUyyPNpG', 2, 1, 1634715426, '', ''),
(14, 'askari', 'askari150@yahoo.com', 'default.jpg', '$2y$10$gl5e1UyUXX915Yzz0ENbtev9zAOlDWX3t9AymB6Zb3.gAM1zKfVXe', 2, 1, 1634716074, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(7, 2, 4),
(8, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `id_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `id_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profile', 'user/index', 'fas fa-fw fa-user', 1),
(6, 5, 'Data Kendaraan', 'person', 'fas fa-fw fa-car', 1),
(7, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(8, 3, 'Data Masuk', 'barang/index', 'fas fa-fw fa-folder', 1),
(9, 4, 'Pelayanan', 'barang/tambah', 'fas fa-fw fa-tv', 1),
(10, 5, 'Notification', 'notif/index', 'fas fa-fw fa-bell', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `list_nama`
--
ALTER TABLE `list_nama`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `list_nama2`
--
ALTER TABLE `list_nama2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_pelanggan`
--
ALTER TABLE `m_pelanggan`
  ADD PRIMARY KEY (`no`) USING BTREE;

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `list_nama2`
--
ALTER TABLE `list_nama2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `m_pelanggan`
--
ALTER TABLE `m_pelanggan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stasiun`
--
ALTER TABLE `stasiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `idTiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
