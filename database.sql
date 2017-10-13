
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'aji', 'acc440448ad4b7c5c5d315018e18a75f');


CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tabungan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(5) NOT NULL,
  `nominal` varchar(100) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `nisn` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `tabungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;