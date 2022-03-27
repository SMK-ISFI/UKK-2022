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

  <h2>Selamat Datang <?= $_SESSION['nama'] ?></h2>
  <p>Selamat datang di aplikasi reservasi berobat sederhana milik kami. Silahkan perbarui data anda pada <b>Data Pasien</b> atau lakukan <b>Reservasi</b> dengan menekan tombol reservasi di bawah ini.</p>
  <a href="reservasi.php">Reservasi</a>
</body>

</html>