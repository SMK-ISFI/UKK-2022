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

  <p>Selamat Datang <?= $_SESSION['nama'] ?> di aplikasi <b>Peduli Diri</b></p>
</body>

</html>