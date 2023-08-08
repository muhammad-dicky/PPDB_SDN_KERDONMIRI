# PPDB_SDN_KERDONMIRI

![image](https://github.com/muhammad-dicky/PPDB_SDN_KERDONMIRI/assets/58357765/10841cdf-8d9c-4cf0-a6f1-f6d6a6ab349d)
![image](https://github.com/muhammad-dicky/PPDB_SDN_KERDONMIRI/assets/58357765/f0eb40d8-3a93-4a4c-82ed-e9a09fabb7df)
![image](https://github.com/muhammad-dicky/PPDB_SDN_KERDONMIRI/assets/58357765/4c1f992c-b2c1-42cb-bf2c-10eff761b6e0)



# HOW TO USE
1. clone repo ke local environment kalian
2. import database yang ada di folder db
3. konfigurasi pengaturan database di config/database.php
4. doneee


Dokumentasi Web PPDB SD N Kerdonmiri 2
=======================================

Web PPDB SD N Kerdonmiri 2 adalah sebuah aplikasi berbasis web untuk Penerimaan Peserta Didik Baru (PPDB) di SD N Kerdonmiri. Aplikasi ini dibangun menggunakan PHP versi 7.1 atau yang lebih tinggi. Di bawah ini adalah dokumentasi singkat tentang penggunaan aplikasi dan fitur-fitur yang tersedia.

URL Login
---------
URL login admin: http://localhost/ppdb/login/
- Username admin: admin
- Password admin: admin

URL login user (test user):
- Username user: 12345123
- Password user: 12345123

Fitur Aplikasi
--------------
Berikut adalah fitur-fitur yang tersedia dalam aplikasi PPDB SD N Kerdonmiri 2:

1. Landing Page: Halaman utama aplikasi yang menyajikan informasi singkat tentang PPDB SD N Kerdonmiri.

2. Home: Halaman beranda setelah login. Menampilkan informasi penting terkait PPDB dan navigasi menu ke fitur-fitur lainnya.

3. Setting: Halaman pengaturan aplikasi. Digunakan untuk mengkonfigurasi beberapa pengaturan penting, seperti nomor telepon live chat.

4. Logout: Fitur untuk keluar dari sesi login dan kembali ke halaman login.

5. Kelembagaan: Halaman yang menampilkan informasi tentang kelembagaan SD N Kerdonmiri, seperti visi dan misi, sejarah, dan lain-lain.

6. Profil Lembaga: Halaman yang menampilkan profil lengkap SD N Kerdonmiri, termasuk informasi tentang kepala sekolah, guru, dan staf sekolah.

7. Data PPDB: Fitur untuk mengelola data calon peserta didik baru, termasuk pengelolaan data pendaftaran, verifikasi berkas, dan pengumuman hasil seleksi.

8. Semua Data: Halaman yang menampilkan daftar lengkap semua data peserta didik baru yang telah terdaftar.

9. Daftar Berkas: Fitur untuk mengelola berkas pendaftaran peserta didik baru, termasuk upload berkas dan verifikasi berkas oleh admin.

10. Data Diterima: Halaman yang menampilkan daftar peserta didik baru yang telah diterima berdasarkan hasil seleksi.

11. Siswa Datar Ulang: Halaman yang menampilkan daftar siswa yang perlu melakukan pendaftaran ulang atau pengisian ulang data.

12. Ditolak/Cadangkan: Halaman yang menampilkan daftar peserta didik baru yang tidak diterima atau ditempatkan sebagai cadangan.

13. Pembayaran: Fitur untuk mengelola pembayaran pendaftaran peserta didik baru, termasuk melihat status pembayaran dan konfirmasi pembayaran.

14. Data Master: Halaman untuk mengelola data master yang digunakan dalam aplikasi, seperti data sekolah, data kelas, dan lain-lain.

15. Cetak: Fitur untuk mencetak laporan dan dokumen terkait PPDB, seperti kartu peserta, kartu hasil seleksi, dan lain-lain.

16. Akun: Halaman untuk mengelola akun pengguna, termasuk pengubahan password.

Dengan fitur-fitur tersebut, aplikasi PPDB SD N Kerd

onmiri 2 memudahkan proses pendaftaran dan pengelolaan data peserta didik baru secara efisien dan terorganisir.

Catatan: Pastikan memperhatikan keamanan aplikasi dengan menggunakan password yang kuat dan melakukan langkah-langkah keamanan yang diperlukan untuk melindungi data sensitif.


BUG
---------
- ~gambar di hasil print pdf ga tampil (src ga kedetect)~
SOLVE - Gunakan windows.print() saja

- ~library dompdf (untuk download html to pdf) masih error, jika tidak ditemukan jalan keluar maka bikin tombolnya jadi fungsi ctrl+p~
SOLVE - Gunakan PHP 7.1


