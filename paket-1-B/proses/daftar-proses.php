<?php
require '../models/Pengguna.php';

$pengguna = new Pengguna();

if (isset($_POST['daftar'])) {
  $pengguna->nik = $_POST['nik'];
  $pengguna->password = $_POST['password'];
  $pengguna->nama_pengguna = $_POST['nama'];

  if ($pengguna->daftar()) {
    echo "<script>alert('Selamat! anda berhasil melakukan pendaftaran!');window.location='../index.php'</script>";
  }
}
