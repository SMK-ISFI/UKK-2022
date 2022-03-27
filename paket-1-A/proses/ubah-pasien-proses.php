<?php
require '../models/Pasien.php';

$pasien = new Pasien();

if (isset($_POST['ubah'])) {
  $pasien->nik = $_POST['nik'];
  $pasien->password = $_POST['password'];
  $pasien->nama_pasien = $_POST['nama'];
  $pasien->alamat = $_POST['alamat'];

  if ($pasien->update_pasien($_POST['nik-lama'])) {
    echo "<script>alert('Selamat! anda berhasil diubah!');window.location='../data-pasien.php'</script>";
  }
}
