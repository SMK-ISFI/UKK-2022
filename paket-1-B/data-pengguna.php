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
  require 'models/Pengguna.php';

  $pengguna = new Pengguna();
  $result = $pengguna->edit_pengguna($_SESSION['nik']);
  $tampil = $result->fetch_object();
  ?>
  <br>
  <form action="proses/ubah-pengguna-proses.php" method="POST">
    <input type="hidden" name="nik-lama" value="<?= $_SESSION['nik'] ?>">
    <label for="nik">NIK</label> <br>
    <input type="text" name="nik" value="<?= $tampil->nik ?>">
    <br><br>
    <label for="password">Password</label> <br>
    <input type="password" name="password" value="<?= $tampil->password ?>">
    <br><br>
    <label for="nama">Nama Lengkap</label> <br>
    <input type="text" name="nama" value="<?= $tampil->nama_pengguna ?>">
    <br><br>
    <label for="alamat">Alamat</label> <br>
    <textarea name="alamat" cols="21" rows="5"><?= $tampil->alamat ?></textarea>
    <br><br>
    <input type="submit" name="ubah" value="Ubah">
  </form>
</body>

</html>