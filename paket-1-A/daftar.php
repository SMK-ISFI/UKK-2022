<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi Pasien</title>
</head>

<body>
  <div class="container">
    <h1>Daftar Baru Pasien</h1>

    <form action="proses/daftar-proses.php" method="POST">
      <label for="nik">NIK</label> <br>
      <input type="text" name="nik">
      <br><br>
      <label for="password">Password</label> <br>
      <input type="password" name="password">
      <br><br>
      <label for="nama">Nama Lengkap</label> <br>
      <input type="text" name="nama">
      <br><br>
      <input type="submit" name="daftar" value="Daftar">
    </form>
    <small>Kembali ke <a href="index.php">Login</a></small>
  </div>
</body>

</html>