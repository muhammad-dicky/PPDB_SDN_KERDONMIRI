<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'ubah') {
    $status = (isset($_POST['status'])) ? 1 : 0;
    if ($_POST['password'] <> "") {
        $data = [
            'username'     => $_POST['username'],
            'nama_user'   => $_POST['nama'],
            'level'         => $_POST['level'],
            'password'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'status'         => 1
        ];
    } else {
        $data = [
            'username'     => $_POST['username'],
            'nama_user'   => $_POST['nama'],
            'level'         => $_POST['level'],
            'status'         => 1
        ];
    }
    $id_user = $_POST['id_user'];
    $exec = update($koneksi, 'user', $data, ['id_user' => $id_user]);
    echo $exec;
}
if ($pg == 'ubahsiswa') {
   
    if ($_POST['password'] <> "") {
        $data = [
            'no_siswa'     => $_POST['no_siswa'],
            'nama'   => $_POST['nama'],
            'password'      => $_POST['password'],
            'status'         => 1
        ];
    } else {
        $data = [
            'no_siswa'     => $_POST['no_siswa'],
            'nama'   => $_POST['nama'],
            
            'status'         => 1
        ];
    }
    $id_siswa = $_POST['id_siswa'];
    $exec = update($koneksi, 'siswa', $data, ['id_siswa' => $id_siswa]);
    echo $exec;
}
if ($pg == 'tambah') {
    $data = [
        'username'     => $_POST['username'],
        'nama_user'   => $_POST['nama'],
        'level'         => $_POST['level'],
        'password'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'status'         => 1
    ];
    $exec = insert($koneksi, 'user', $data);
    echo $exec;
}
if ($pg == 'hapus') {
    $id_user = $_POST['id_user'];
    delete($koneksi, 'user', ['id_user' => $id_user]);
}
