
/*---------------------------------------------------------------
  SQL DB BACKUP 08.08.2023 11:34 
  HOST: localhost
  DATABASE: ppdb_dapit_1
  TABLES: *
  ---------------------------------------------------------------*/

/*---------------------------------------------------------------
  TABLE: `bayar`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `bayar`;
CREATE TABLE `bayar` (
  `id_bayar` varchar(20) NOT NULL,
  `id_user` int NOT NULL,
  `id_daftar` int NOT NULL,
  `jumlah` int NOT NULL,
  `tgl_bayar` date NOT NULL,
  `keterangan` int DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `verifikasi` int NOT NULL DEFAULT '0',
  `hapus` int DEFAULT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `bayar` VALUES   ('202305250001','0','301','150000','2023-05-25',NULL,'bukti_transaksi/bukti_202305250001.png','0',NULL);

/*---------------------------------------------------------------
  TABLE: `biaya`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `biaya`;
CREATE TABLE `biaya` (
  `id_biaya` varchar(50) NOT NULL,
  `nama_biaya` varchar(200) NOT NULL,
  `jumlah` int NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id_biaya`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `biaya` VALUES   ('PPDB2023','Pendaftaran','150000','1');

/*---------------------------------------------------------------
  TABLE: `daftar`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `daftar`;
CREATE TABLE `daftar` (
  `id_daftar` int NOT NULL AUTO_INCREMENT,
  `no_daftar` varchar(20) DEFAULT NULL,
  `id_siswa` int NOT NULL,
  `jenis` int DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `warga_siswa` varchar(20) DEFAULT NULL,
  `foto` varchar(128) NOT NULL,
  `jenkel` varchar(1) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(128) DEFAULT NULL,
  `npsn_asal` varchar(20) DEFAULT NULL,
  `kelas` varchar(11) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT '',
  `jenjang` varchar(11) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_tinggal` varchar(100) DEFAULT NULL,
  `alamat` text,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `koordinat` varchar(100) DEFAULT NULL,
  `transportasi` varchar(128) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `anak_ke` int DEFAULT NULL,
  `saudara` int DEFAULT NULL,
  `biaya_sekolah` varchar(100) DEFAULT NULL,
  `paud` text,
  `tk` text,
  `hepatitis` varchar(10) DEFAULT NULL,
  `polio` varchar(10) DEFAULT NULL,
  `bcg` varchar(10) DEFAULT NULL,
  `campak` varchar(10) DEFAULT NULL,
  `dpt` varchar(10) DEFAULT NULL,
  `covid` varchar(10) DEFAULT NULL,
  `citacita` text NOT NULL,
  `hobi` text NOT NULL,
  `status_keluarga` varchar(50) DEFAULT NULL,
  `tinggal` varchar(128) DEFAULT NULL,
  `jarak` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(100) DEFAULT NULL,
  `tahun_ayah` date DEFAULT NULL,
  `status_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(100) DEFAULT NULL,
  `tahun_ibu` date DEFAULT NULL,
  `status_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `nik_wali` varchar(16) DEFAULT NULL,
  `nama_wali` varchar(128) DEFAULT NULL,
  `tempat_lahir_wali` varchar(100) DEFAULT NULL,
  `tahun_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(50) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `penghasilan_wali` varchar(50) DEFAULT NULL,
  `no_hp_wali` varchar(16) DEFAULT NULL,
  `no_ijazah` varchar(128) DEFAULT NULL,
  `no_shun` varchar(128) DEFAULT NULL,
  `no_ujian` varchar(128) DEFAULT NULL,
  `no_kip` varchar(30) DEFAULT NULL,
  `kip` varchar(256) DEFAULT NULL,
  `kk` text,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `ijazah` varchar(256) DEFAULT NULL,
  `akta` varchar(256) DEFAULT NULL,
  `file_shun` varchar(256) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `alasan_keluar` varchar(100) DEFAULT NULL,
  `surat_keluar` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `aktif` int DEFAULT '0',
  `status` int DEFAULT '0',
  `sekolah_tujuan` varchar(10) DEFAULT NULL,
  `npsn_sekolah_tujuan` varchar(10) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `konfirmasi` int DEFAULT NULL,
  `bayar` varchar(100) DEFAULT NULL,
  `online` int DEFAULT '0',
  `password` text,
  `bin1` varchar(10) DEFAULT NULL,
  `mat1` varchar(10) DEFAULT NULL,
  `ipa1` varchar(10) DEFAULT NULL,
  `big1` varchar(10) DEFAULT NULL,
  `bin2` varchar(10) DEFAULT NULL,
  `mat2` varchar(10) DEFAULT NULL,
  `ipa2` varchar(10) DEFAULT NULL,
  `big2` varchar(10) DEFAULT NULL,
  `bin3` varchar(10) DEFAULT NULL,
  `mat3` varchar(10) DEFAULT NULL,
  `ipa3` varchar(10) DEFAULT NULL,
  `big3` varchar(10) DEFAULT NULL,
  `bin4` varchar(10) DEFAULT NULL,
  `mat4` varchar(10) DEFAULT NULL,
  `ipa4` varchar(10) DEFAULT NULL,
  `big4` varchar(10) DEFAULT NULL,
  `bin5` varchar(10) DEFAULT NULL,
  `mat5` varchar(10) DEFAULT NULL,
  `ipa5` varchar(10) DEFAULT NULL,
  `big5` varchar(10) DEFAULT NULL,
  `jumlah` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=latin1;
INSERT INTO `daftar` VALUES   ('294','PPDB2021001','0','1','','123456789123456','123456789123456','1234567899','SISWA 1','WNI','assets/upload/foto_siswa/siswa977.jpg','L','WONOGIRI','2021-12-23','MIN 1 WONOGIRI','678945',NULL,'BS',NULL,'Islam','Tinggal dengan Orangtua/Wali','JL TANDON','02','02','GIRIWONO','WONOGIRI','WONOGIRI','JAWA TENGAH','57613','-7.7921380, 110.9078180','Antar Jemput Sekolah','081228603030','PREKETEK@GMAIL.COM','1','1','Orang Tua','Ya','Ya','Ya','Ya','Ya','Ya','Ya','Ya','Dokter','Membaca','','','Kurang dari 5 km','10-19 menit','33112212121212','KATEMIN','WONOGIRI','1988-12-12','Masih Hidup','SMP/Sederajat','Seniman/Pelukis/Artis/Sejenis','3.000.001 - 5.000.000','087838553345','1234567897898787','KATMI','WONOGIRI','1988-12-12','Meninggal Dunia','S3','Politikus','Lebih dari 5.000.000','087838553345','','',NULL,'0000-00-00','','','','',NULL,NULL,NULL,'','assets/upload/kip/kip773.jpg','assets/upload/kk/kk979.jpg','KASNO DIMEJO','assets/upload/ijazah/ijazah31.jpg','assets/upload/akta/akta266.jpg',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,NULL,'2022-01-10','1',NULL,'1','123456','80','80','80','80','80','80','80','80','80','80','80','80','80','80','80','80','80','80','80','80','200');
INSERT INTO `daftar` VALUES ('295','PPDB2021002','0','1',NULL,'','','123','123','','default.png','','123','2021-12-23','','',NULL,'BOARDING SCHOOL',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'123','','0','0','','',NULL,'','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,NULL,NULL,NULL,NULL,'1','123','10','10','10','10','10','10','10','10','10','10','10','10','10','10','10','10','10','10','10','10','');
INSERT INTO `daftar` VALUES ('296','PPDB2021003','0','1',NULL,NULL,NULL,'1234','1234','','default.png',NULL,'1234','2021-12-23','','',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,NULL,NULL,NULL,NULL,'1','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `daftar` VALUES ('299','PPDB2023006','0','1',NULL,NULL,NULL,'222222','TEST NAMA LENGKAP',NULL,'default.png',NULL,'Tempat Lahir','2023-05-07','','',NULL,'BOARDING SCHOOL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'08121235235',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','2',NULL,NULL,NULL,NULL,NULL,NULL,'1','12345',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `daftar` VALUES ('300','PPDB2023007','0','2',NULL,NULL,NULL,'123321','123321',NULL,'default.png',NULL,NULL,NULL,'MTsN 1 WONOGIRI','69977331',NULL,'BOARDING SCHOOL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'-',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,NULL,NULL,NULL,NULL,'1','123321',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `daftar` VALUES ('301','PPDB2023008','0','1',NULL,'','','12345123','TEST NAMA','','assets/upload/foto_siswa/siswa989.png','','Test Tempat Lahir','2023-05-22','','',NULL,'JALUR ZONASI',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'082145552918','','0','0','','',NULL,'','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','assets/upload/kip/kip571.png','assets/upload/kk/kk296.png','','assets/upload/ijazah/ijazah604.png','assets/upload/akta/akta524.png',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,NULL,NULL,'2023-05-25','1',NULL,'1','12345123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*---------------------------------------------------------------
  TABLE: `histori`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `histori`;
CREATE TABLE `histori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_permohonan` varchar(30) NOT NULL,
  `nik` int NOT NULL,
  `status` int NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*---------------------------------------------------------------
  TABLE: `jenis`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id_jenis` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `jenis` VALUES   ('KH','Khusus','1');
INSERT INTO `jenis` VALUES ('PD','Pindahan','1');
INSERT INTO `jenis` VALUES ('SB','Siswa Baru','1');

/*---------------------------------------------------------------
  TABLE: `jenjang`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `jenjang`;
CREATE TABLE `jenjang` (
  `id_jenjang` varchar(5) NOT NULL,
  `nama_jenjang` varchar(50) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `wali` int NOT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*---------------------------------------------------------------
  TABLE: `jurusan`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id_jurusan` varchar(50) NOT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL,
  `kuota` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `jurusan` VALUES   ('JALUR AFIRMASI','JALUR AFIRMASI','15','1');
INSERT INTO `jurusan` VALUES ('JALUR PERPINDAHAN TUGAS ORANGTUA/WALI','JALUR PERPINDAHAN TUGAS ORANGTUA/WALI','5','1');
INSERT INTO `jurusan` VALUES ('JALUR ZONASI','JALUR ZONASI','70','1');

/*---------------------------------------------------------------
  TABLE: `kelas`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `kuota` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `kelas` VALUES   ('10','Kelas X','108','1');
INSERT INTO `kelas` VALUES ('11','Kelas XI','108','1');
INSERT INTO `kelas` VALUES ('12','Kelas XII','108','1');

/*---------------------------------------------------------------
  TABLE: `kontak`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id_kontak` int NOT NULL AUTO_INCREMENT,
  `nama_kontak` varchar(50) DEFAULT NULL,
  `no_kontak` varchar(50) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
INSERT INTO `kontak` VALUES   ('1','CS 1','089999999999','1');
INSERT INTO `kontak` VALUES ('2','CS 2','082222222','1');

/*---------------------------------------------------------------
  TABLE: `pengumuman`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE `pengumuman` (
  `id_pengumuman` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengumuman` text,
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenis` int DEFAULT '0',
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
INSERT INTO `pengumuman` VALUES   ('2','5','Info Aplikasi','<p style=\"color: rgb(108, 117, 125);\"><span style=\"font-weight: bolder;\">Gelombang Pertama</span>&nbsp;Tanggal 1 Desember 2023 Sampai 30 Mei 2023&nbsp;<span style=\"font-weight: bolder;\">Gelombang Kedua&nbsp;</span>Tanggal 1 Juni Sampai Tanggal 30 Juni 2023</p><p style=\"color: rgb(108, 117, 125);\">Note: Pendaftaran Gelombang Pertama Gratis Biaya Pendaftaran dan Biaya Daftar Ulang</p><p style=\"color: rgb(108, 117, 125);\"><br></p>','2023-05-24 05:58:08','1');
INSERT INTO `pengumuman` VALUES ('3','5','Info PPDB Online 2023','<p><b>Gelombang Pertama</b> Tanggal 1 Desember 2023 Sampai 30 Mei 2023 <b>Gelombang Kedua </b>Tanggal 1 Juni Sampai Tanggal 30 Juni 2023</p><p>Note: Pendaftaran Gelombang Pertama Gratis Biaya Pendaftaran dan Biaya Daftar Ulang</p>','2023-05-21 06:30:10','2');

/*---------------------------------------------------------------
  TABLE: `sekolah`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `sekolah`;
CREATE TABLE `sekolah` (
  `npsn` varchar(16) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`npsn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `sekolah` VALUES   ('20402448','SD N KERDONMIRI II','Jl. Karangwetan,Semugih,Rongkop,Gunungkidul','1');
INSERT INTO `sekolah` VALUES ('69977331','SD N KERDONMIRI II','Jl. Karangwetan,Rongkop,Gunungkidul','1');

/*---------------------------------------------------------------
  TABLE: `setting`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id_setting` int NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jenjang` int NOT NULL,
  `nsm` varchar(30) NOT NULL,
  `npsn` varchar(30) DEFAULT NULL,
  `status` text NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `klikchat` text,
  `livechat` text,
  `nolivechat` varchar(50) DEFAULT NULL,
  `infobayar` text,
  `syarat` text,
  `kab` text NOT NULL,
  `kec` text NOT NULL,
  `web` text NOT NULL,
  `kepala` text NOT NULL,
  `nip` text NOT NULL,
  `ppdb` text,
  `kop` varchar(50) NOT NULL,
  `logo_ppdb` varchar(100) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `setting` VALUES   ('1',' SDN KERDONMIRI II RONGKOP','3','-','20402448','Negeri','Karangwetan, Semugih, Rongkop, Kec. Rongkop, Kab.Gunung Kidul, Prov. D.I. Yogyakarta, 55883','Wonogiri','D.I. Yogyakarta','assets/img/logo/logo228.png',NULL,'sdkerdonmiri2@gmail.com','-','Assalamu Alaikum\r\n\r\nMohon informasi PPDB','Assalamu Alaikum\r\n\r\nMohon informasi PPDB','82226246960','<p>Pembayaran Pendaftaran bisa di transfer melalui :<br>BRI - 12353435 - SDN Kerdonmiri</p><p>BCA - 123513 - SDN Kerdonmiri</p>','<p><br></p><ol><li>Surat Keterangan Lulus</li><li>Akta Kelahiran</li><li>Kartu Keluarga</li></ol>',' Kab.Gunung Kidul',' Kec. Rongkop','https://sdkerdonmiri2rongkop.pendidikan.gunungkidulkab.go.id/','Widodo','-','1','assets/img/kop/kop163.png','assets/img/logo/logo_ppdb237.png','2023-05-08','2021-05-20');

/*---------------------------------------------------------------
  TABLE: `siswa`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `no` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nisn` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*---------------------------------------------------------------
  TABLE: `user`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` text NOT NULL,
  `status` int NOT NULL,
  `foto` int NOT NULL,
  `mapel` text NOT NULL,
  `nuptk` text NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmt` year NOT NULL,
  `no_sk` text NOT NULL,
  `jenis` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nik` int NOT NULL,
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
INSERT INTO `user` VALUES   ('5','ADMIN','admin','admin','$2y$10$kqHkA.usgKh4TNcJJH1h..Pvn.puyeNgYZWncJo3pfXm.nlAkiP6C','1','0','','','','','0000-00-00','0000','','','','0');
INSERT INTO `user` VALUES ('64','admin2','admin','admin2','$2y$10$T/MZ7XLIytMie1oHcxZET.1cNa967mS7y/1RrPoriFCqUd8jTkIyO','1','0','','','','','0000-00-00','0000','','','','0');
