<?php
require '../models/Pengguna.php';

$pengguna = new Pengguna();

if (isset($_POST['ubah'])) {
  $pengguna->nik = $_POST['nik'];
  $pengguna->password = $_POST['password'];
  $pengguna->nama_pengguna = $_POST['nama'];
  $pengguna->alamat = $_POST['alamat'];

  if ($pengguna->update_pengguna($_POST['nik-lama'])) {
    echo "<script>alert('Selamat! anda berhasil diubah!');window.location='../data-pengguna.php'</script>";
  }
}
