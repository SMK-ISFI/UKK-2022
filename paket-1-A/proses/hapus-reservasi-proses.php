<?php
require '../models/Reservasi.php';

$reservasi = new Reservasi();

if ($_GET['proses'] === 'hapus') {
  $reservasi->hapus_reservasi($_GET['id']);
  echo "<script>alert('Catatan Perjalanan berhasil dihapus!');window.location='../riwayat-reservasi.php'</script>";
}
