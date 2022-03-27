<?php
require '../models/Reservasi.php';

$reservasi = new Reservasi();

if (isset($_POST['simpan'])) {
  $reservasi->id_reservasi = $_POST['id_reservasi'];
  $reservasi->nik = $_POST['nik'];
  $reservasi->tgl_reservasi = $_POST['tgl_reservasi'];
  $reservasi->wkt_reservasi = $_POST['wkt_reservasi'];
  $reservasi->nm_dokter = $_POST['nm_dokter'];
  $reservasi->keluhan = $_POST['keluhan'];

  if ($reservasi->tambah_reservasi()) {
    echo "<script>alert('Reservasi berhasil ditambahkan!');window.location='../riwayat-reservasi.php'</script>";
  }
}
