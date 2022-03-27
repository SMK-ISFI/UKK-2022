<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catatan Perjalanan</title>
</head>

<body>
  <div class="container">

    <form action="proses/login-proses.php" method="POST">
      <label for="nik">NIK</label> <br>
      <input type="text" name="nik">
      <br><br>
      <label for="password">Password</label> <br>
      <input type="password" name="password">
      <br><br>
      <input type="submit" name="login" value="Login">
    </form>
    <small>Belum punya akun? Daftar baru <a href="daftar.php">Disini</a></small>
  </div>
</body>

</html>