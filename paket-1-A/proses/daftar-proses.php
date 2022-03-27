<?php
require '../models/Pasien.php';

$pasien = new Pasien();

if (isset($_POST['daftar'])) {
  $pasien->nik = $_POST['nik'];
  $pasien->password = $_POST['password'];
  $pasien->nama_pasien = $_POST['nama'];

  if ($pasien->daftar()) {
    echo "<script>alert('Selamat! anda berhasil melakukan pendaftaran!');window.location='../index.php'</script>";
  }
}
