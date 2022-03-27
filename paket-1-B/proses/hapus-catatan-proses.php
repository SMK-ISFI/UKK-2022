<?php
require '../models/Catatan.php';

$catatan = new Catatan();

if ($_GET['proses'] === 'hapus') {
  $catatan->hapus_catatan($_GET['id']);
  echo "<script>alert('Catatan Perjalanan berhasil dihapus!');window.location='../catatan.php'</script>";
}
