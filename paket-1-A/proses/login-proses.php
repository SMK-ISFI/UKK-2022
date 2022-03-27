<?php
require '../models/Pasien.php';

$pasien = new Pasien();

if (isset($_POST['login'])) {
  $pasien->nik = $_POST['nik'];
  $pasien->password = $_POST['password'];

  $result = $pasien->login();
  if ($result->num_rows > 0) {
    session_start();
    $data = $result->fetch_object();
    $_SESSION['nik'] = $data->nik;
    $_SESSION['nama'] = $data->nama_pasien;

    $pasien->log(date('d-m-y h:i:s'));
    echo "<meta http-equiv='refresh' content='1;url=../home.php'>";
  }
}
