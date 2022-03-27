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
  <form action="proses/tambah-reservasi-proses.php" method="POST">
    <label for="id">ID Reservasi</label> <br>
    <input type="text" name="id_reservasi">
    <br><br>
    <label for="nik">NIK</label> <br>
    <input type="text" name="nik" value="<?= $_SESSION['nik'] ?>" readonly>
    <br><br>
    <label for="tgl_reservasi">Tanggal Reservasi</label> <br>
    <input type="date" name="tgl_reservasi">
    <br><br>
    <label for="wkt_reservasi">Waktu Reservasi</label> <br>
    <input type="time" name="wkt_reservasi">
    <br><br>
    <label for="dokter">Nama Dokter</label> <br>
    <input type="text" name="nm_dokter">
    <br><br>
    <label for="id">Keluhan Pasien</label> <br>
    <textarea name="keluhan" cols="21" rows="5"></textarea>
    <br><br>
    <input type="submit" value="Simpan" name="simpan">
  </form>

</body>

</html>