<?php
require '../models/Catatan.php';

$catatan = new Catatan();

if (isset($_POST['simpan'])) {
  $catatan->id_catatan = $_POST['id_catatan'];
  $catatan->nik = $_POST['nik'];
  $catatan->tgl_catatan = $_POST['tgl_catatan'];
  $catatan->wkt_catatan = $_POST['wkt_catatan'];
  $catatan->lokasi_catatan = $_POST['lokasi_catatan'];
  $catatan->suhu_tubuh = $_POST['suhu_tubuh'];

  if ($catatan->tambah_catatan()) {
    echo "<script>alert('Catatan Perjalanan berhasil ditambahkan!');window.location='../catatan.php'</script>";
  }
}
