<?php
$setting = mysqli_fetch_array(mysqli_query($koneksi, "select * from setting where id_setting='1'"));

if (!function_exists('base_url')) {
	function base_url($atRoot = FALSE, $atCore = FALSE, $parse = FALSE)
	{
		if (isset($_SERVER['HTTP_HOST'])) {
			$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
			$hostname = $_SERVER['HTTP_HOST'];
			$dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
			$core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
			$core = $core[0];
			$tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
			$end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
			$base_url = sprintf($tmplt, $http, $hostname, $end);
		} else $base_url = 'http://localhost/';
		if ($parse) {
			$base_url = parse_url($base_url);
			if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
		}
		return $base_url;
	}
}
$base_url = base_url();

function enkripsi($string)
{
	$output = false;

	$encrypt_method = "AES-256-CBC";
	$secret_key = 'abcdefghijklmnopqrstuvwxyzABNCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+|}{:?><';
	$secret_iv = 'abcdefghijklmnopqrstuvwxyzABNCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+|}{:?><';

	// hash
	$key = hash('sha256', $secret_key);

	// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	$iv = substr(hash('sha256', $secret_iv), 0, 16);

	$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	$output = base64_encode($output);

	return $output;
}

function dekripsi($string)
{
	$output = false;

	$encrypt_method = "AES-256-CBC";
	$secret_key = 'abcdefghijklmnopqrstuvwxyzABNCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+|}{:?><';
	$secret_iv = 'abcdefghijklmnopqrstuvwxyzABNCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+|}{:?><';

	// hash
	$key = hash('sha256', $secret_key);

	// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	$iv = substr(hash('sha256', $secret_iv), 0, 16);

	$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);

	return $output;
}
function cek_login_admin()
{

	$level = $_SESSION['level'];
	if ($level != 'admin') {
		echo "<script>document.location='.';</script>";
		die();
	}
}

function cek_session_guru()
{
	$level = $_SESSION['level'];
	if ($level != 'guru' and $level != 'admin') {
		echo "<script>document.location='.';</script>";
	}
}

function jump($page)
{
	echo "<script>location=('$page');</script>";
}
function refresh()
{
	echo "<script>location.reload();</script>";
}
function info($string, $type = null)
{
	if ($type == 'OK') {
		$class = "success";
		$icon = "fa-check";
	} elseif ($type == 'NO') {
		$class = "danger";
		$icon = "fa-warning";
	} else {
		$class = "warning";
		$icon = "fa-info-circle";
	}
	return "<p class='text-$class'><i class='fa $icon'></i> $string</p>";
}
function timeAgo($tanggal)
{
	$ayeuna = date('Y-m-d H:i:s');
	$detik = strtotime($ayeuna) - strtotime($tanggal);
	if ($detik <= 0) {
		return "Baru saja";
	} else {
		if ($detik < 60) {
			return $detik . " detik yang lalu";
		} else {
			$menit = $detik / 60;
			if ($menit < 60) {
				return number_format($menit, 0) . " menit yang lalu";
			} else {
				$jam = $menit / 60;
				if ($jam < 24) {
					return number_format($jam, 0) . " jam yang lalu";
				} else {
					$hari = $jam / 24;
					if ($hari < 2) {
						return "Kemarin";
					} elseif ($hari < 3) {
						return number_format($hari, 0) . " hari yang lalu";
					} else {
						return $tanggal;
					}
				}
			}
		}
	}
}
function size($bytes = 0)
{
	$size = $bytes;
	$b = "B";
	if ($size > 1024) {
		$size = number_format($bytes / 1024, 2, '.', '');
		$b = "KB";
		if ($size > 1024) {
			$size = number_format($bytes / 1024 / 1024, 2, '.', '');
			$b = "MB";
			if ($size > 1024) {
				$size = number_format($bytes / 1024 / 1024 / 1024, 2, '.', '');
				$b = "GB";
				if ($size > 1024) {
					$size = number_format($bytes / 1024 / 1024 / 1024 / 1024, 2, '.', '');
					$b = "TB";
				}
			}
		}
	}
	$size = str_replace('.00', '', $size);
	return $size . ' ' . $b;
}
function buat_tanggal($format, $time = null)
{
	$time = ($time == null) ? time() : strtotime($time);
	$str = date($format, $time);
	for ($t = 1; $t <= 9; $t++) {
		$str = str_replace("0$t ", "$t ", $str);
	}
	$str = str_replace("Jan", "Januari", $str);
	$str = str_replace("Feb", "Februari", $str);
	$str = str_replace("Mar", "Maret", $str);
	$str = str_replace("Apr", "April", $str);
	$str = str_replace("May", "Mei", $str);
	$str = str_replace("Jun", "Juni", $str);
	$str = str_replace("Jul", "Juli", $str);
	$str = str_replace("Aug", "Agustus", $str);
	$str = str_replace("Sep", "September", $str);
	$str = str_replace("Oct", "Oktober", $str);
	$str = str_replace("Nov", "Nopember", $str);
	$str = str_replace("Dec", "Desember", $str);
	$str = str_replace("Mon", "Senin", $str);
	$str = str_replace("Tue", "Selasa", $str);
	$str = str_replace("Wed", "Rabu", $str);
	$str = str_replace("Thu", "Kamis", $str);
	$str = str_replace("Fri", "Jumat", $str);
	$str = str_replace("Sat", "Sabtu", $str);
	$str = str_replace("Sun", "Minggu", $str);
	return $str;
}
function enum($bool)
{
	$bool = ($bool == 1) ? 'Ya' : 'Tidak';
	return $bool;
}
function html2str($str)
{
	$str = str_replace('"', "”", $str);
	$str = str_replace("'", "’", $str);
	$str = str_replace("<", "&lt;", $str);
	$str = str_replace(">", "&gt;", $str);
	return $str;
}

$pendidikan2 = [
	"Tidak/Belum Sekolah",
	"Tidak Tamat SD/Sederajat",
	"Tamat SD/Sederajat",
	"SLTP/Sederajat",
	"SLTA/Sederajat",
	"Diploma III",
	"Diploma V/Strata I",
	"Strata II",
	"Strata III"
];
$agama = [
	"Islam",
	"Kristen",
	"Katholik",
	"Hindu",
	"Budha",
	"Khong Hucu"
];
$cita = [
	"PNS",
	"TNI/Polri",
	"Guru/Dosen",
	"Dokter",
	"Politikus",
	"Wiraswasta",
	"Seniman/Artis",
	"Ilmuwan",
	"Agamawan",
	"Lainnya"
];
$hobi = [
	"OIahraga",
	"Kesenian",
	"Membaca",
	"Menulis",
	"Jalan-jalan",
	"Lainnya"
];
$biaya_sekolah = [
	"Orang Tua",
	"Wali/Orang Tua Asuh",
	"Tanggungan Sendiri",
	"Lainnya"
];
$status_tinggal = [
	"Tinggal dengan Orangtua/Wali",
	"Ikut saudara/kerabat",
	"Asrama Madrasah",
	"Kontrak/kost",
	"Tinggal di Asrama Pesantren",
	"Panti asuhan",
	"Rumah Singgah",
	"Lainnya"
];
$transport = [
	"Sepeda",
	"Sepeda Motor",
	"Mobil Pribadi",
	"Antar Jemput Sekolah",
	"Angkutan Umum",
	"Perahu/Sampan",
	"Lainnya"
];
$jarak = [
	"Kurang dari 5 km",
	"Antara 5-10 km",
	"Antara 11-20 km",
	"Antara 21-30 km",
	"Lebih dari 30 km"
];
$waktu = [
	"1-10 menit",
	"10-19 menit",
	"20-29 menit",
	"30-39 menit",
	"1-2 jam",
	">2 jam"
];
$statuskawin = [
	"Belum Kawin",
	"Kawin",
	"Cerai Hidup",
	"Cerai Mati"

];
$pendidikan = [
	"SD/Sederajat",
	"SMP/Sederajat",
	"SMA/Sederajat",
	"D1",
	"D2",
	"D3",
	"D4/S1",
	"S2",
	"S3",
	"Tidak Bersekolah"
];
$pekerjaan = [
	"Tidak Bekerja",
	"Pensiunan",
	"PNS",
	"TNI/Polisi",
	"Guru/Dosen",
	"Pegawai Swasta",
	"Wiraswasta",
	"Pengacara/Jaksa/Hakim/Notaris",
	"Seniman/Pelukis/Artis/Sejenis",
	"Dokter/Bidan/Perawat",
	"Pilot/Pramugara",
	"Pedagang",
	"Petani/Peternak",
	"Nelayan",
	"Buruh (Tani/Pabrik/Bangunan)",
	"Sopir/Masinis/Kondektur",
	"Politikus",
	"Lainnya"
];
$penghasilan = [
	"Kurang dari 500.000",
	"500.000 - 1.000.000",
	"1.000.001 - 2.000.000",
	"2.000.001 - 3.000.000",
	"3.000.001 - 5.000.000",
	"Lebih dari 5.000.000",
	"Tidak ada"
];

$pekerjaan2 = [
	"Belum/Tidak Bekerja", "Mengurus Rumah Tangga", "Pelajar/Mahasiswa", "Pensiunan", "Pegawai Negeri Sipil", "Tentara Nasional Indonesia", "Kepolisian RI", "Perdagangan", "Petani/Pekebun", "Peternak", "Nelayan/Perikanan", "Industri", "Konstruksi", "Transportasi", "Karyawan Swasta", "Karyawan BUMN", "Karyawan BUMD", "Karyawan Honorer", "Buruh Harian Lepas", "Buruh Tani/Perkebunan", "Buruh Nelayan/Perikanan", "Buruh Peternakan", "Pembantu Rumah Tangga", "Tukang Cukur", "Tukang Listrik", "Tukang Batu", "Tukang Kayu", "Tukang Sol Sepatu", "Tukang Las/Pandai Besi", "Tukang Jahit", "Penata Rambut", "Penata Rias", "Penata Busana", "Mekanik", "Tukang Gigi", "Seniman", "Tabib", "Paraji", "Perancang Busana", "Penterjemah", "Imam Masjid", "Pendeta", "Pastur", "Wartawan", "Ustadz/Mubaligh", "Juru Masak", "Promotor Acara", "Anggota DPR-RI", "Anggota DPD", "Anggota BPK", "Presiden", "Wakil Presiden", "Anggota Mahkamah Konstitusi", "Anggota Kabinet/Kementrian", "Duta Besar", "Gubernur", "Wakil Gubernur", "Bupati", "Wakil Bupati", "Walikota", "Wakil Walikota", "Anggota DPRD Propinsi", "Anggota DPRD Kabupten/Kota", "Dosen", "Guru", "Pilot", "Pengacara", "Notaris", "Arsitek", "Akuntan", "Konsultan", "Dokter", "Bidan", "Perawat", "Apoteker", "Psikiater/Psikolog", "Penyiar Televisi", "Penyiar Radio", "Pelaut", "Peneliti", "Sopir", "Pialang", "Paranormal", "Pedagang", "Perangkat Desa", "Kepala Desa", "Biarawati", "Wiraswasta", "Lainnya"
];
$jenistinggal = array("Bersama Orang Tua", "Bersama Wali", "Kost");
$jenistinggal = array("Bersama Orang Tua", "Bersama Wali", "Kost");
$jeniskelamin = ["L" => "Laki-laki", "P" => "Perempuan"];
$warga_siswa = ["WNI" => "WNI", "WNA" => "WNA"];
$yatidak = ["Ya" => "Ya", "Tidak" => "Tidak"];
function kata($x)
{
	$x = abs($x);
	$angka = array(
		"", "satu", "dua", "tiga", "empat", "lima",
		"enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"
	);
	$temp = "";
	if ($x < 12) {
		$temp = " " . $angka[$x];
	} else if ($x < 20) {
		$temp = kata($x - 10) . " belas";
	} else if ($x < 100) {
		$temp = kata($x / 10) . " puluh" . kata($x % 10);
	} else if ($x < 200) {
		$temp = " seratus" . kata($x - 100);
	} else if ($x < 1000) {
		$temp = kata($x / 100) . " ratus" . kata($x % 100);
	} else if ($x < 2000) {
		$temp = " seribu" . kata($x - 1000);
	} else if ($x < 1000000) {
		$temp = kata($x / 1000) . " ribu" . kata($x % 1000);
	} else if ($x < 1000000000) {
		$temp = kata($x / 1000000) . " juta" . kata($x % 1000000);
	} else if ($x < 1000000000000) {
		$temp = kata($x / 1000000000) . " milyar" . kata(fmod($x, 1000000000));
	} else if ($x < 1000000000000000) {
		$temp = kata($x / 1000000000000) . " trilyun" . kata(fmod($x, 1000000000000));
	}
	return $temp;
}

function terbilang($x, $style = 3)
{
	if ($x < 0) {
		$hasil = "minus " . trim(kata($x));
	} else {
		$hasil = trim(kata($x));
	}
	switch ($style) {
		case 1:
			// mengubah semua karakter menjadi huruf besar
			$hasil = strtoupper($hasil);
			break;
		case 2:
			// mengubah karakter pertama dari setiap kata menjadi huruf besar
			$hasil = ucwords($hasil);
			break;
		case 3:
			// mengubah karakter pertama menjadi huruf besar
			$hasil = ucfirst($hasil);
			break;
	}
	return $hasil;
}
