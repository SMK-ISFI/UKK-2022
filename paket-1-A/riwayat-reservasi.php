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
  <form action="" method="POST">
    <select name="urutan">
      <option value="">Tanggal</option>
      <option value="DESC">Terbaru</option>
      <option value="ASC">Terlama</option>
    </select>
    <input type="submit" name="urut" value="Urut">
  </form>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>ID Reservasi</th>
        <th>Tanggal Resevasi</th>
        <th>Waktu</th>
        <th>Nama Dokter</th>
        <th>Keluhan Pasien</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require 'models/Reservasi.php';
      $reservasi = new Reservasi();

      if (isset($_POST['urut'])) {
        $results = $reservasi->tampil_reservasi($_SESSION['nik'], $_POST['urutan']);
      } else {
        $results = $reservasi->tampil_reservasi($_SESSION['nik']);
      }

      while ($tampil = $results->fetch_object()) {
        echo "
          <tr>
            <td>$tampil->id_reservasi</td>
            <td>$tampil->tgl_reservasi</td>
            <td>$tampil->wkt_reservasi</td>
            <td>$tampil->nm_dokter</td>
            <td>$tampil->keluhan</td>
            <td>
              <a href='proses/hapus-reservasi-proses.php?id=$tampil->id_reservasi&proses=hapus'>Hapus</a>
            </td>
          </tr>
        ";
      }
      ?>
    </tbody>
  </table>

</body>

</html>