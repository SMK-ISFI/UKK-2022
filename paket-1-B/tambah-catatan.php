<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi Pasien</title>
</head>

<body>
  <?php
  session_start();
  include 'header.php';
  ?>
  <br>
  <form action="proses/tambah-catatan-proses.php" method="POST">
    <label for="id">ID Catatan</label> <br>
    <input type="text" name="id_catatan">
    <br><br>
    <label for="nik">NIK</label> <br>
    <input type="text" name="nik" value="<?= $_SESSION['nik'] ?>" readonly>
    <br><br>
    <label for="tgl_reservasi">Tanggal Catatan</label> <br>
    <input type="date" name="tgl_catatan">
    <br><br>
    <label for="wkt_reservasi">Waktu Catatan</label> <br>
    <input type="time" name="wkt_catatan">
    <br><br>
    <label for="dokter">Lokasi Di Kunjungi</label> <br>
    <input type="text" name="lokasi_catatan">
    <br><br>
    <label for="id">Suhu Tubuh</label> <br>
    <input type="text" name="suhu_tubuh">
    <br><br>
    <input type="submit" value="Simpan" name="simpan">
  </form>

</body>

</html>