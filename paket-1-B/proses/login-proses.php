<?php
require '../models/Pengguna.php';

$pengguna = new Pengguna();

if (isset($_POST['login'])) {
  $pengguna->nik = $_POST['nik'];
  $pengguna->password = $_POST['password'];

  $result = $pengguna->login();
  if ($result->num_rows > 0) {
    session_start();
    $data = $result->fetch_object();
    $_SESSION['nik'] = $data->nik;
    $_SESSION['nama'] = $data->nama_pengguna;

    $pengguna->log(date('d-m-y h:i:s'));
    echo "<meta http-equiv='refresh' content='1;url=../home.php'>";
  }
}
