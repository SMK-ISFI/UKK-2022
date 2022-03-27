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
        <th>ID Catatan</th>
        <th>Tanggal Catatan</th>
        <th>Waktu</th>
        <th>Lokasi</th>
        <th>Suhu Tubuh</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require 'models/Catatan.php';
      $catatan = new Catatan();

      if (isset($_POST['urut'])) {
        $results = $catatan->tampil_catatan($_SESSION['nik'], $_POST['urutan']);
      } else {
        $results = $catatan->tampil_catatan($_SESSION['nik']);
      }

      while ($tampil = $results->fetch_object()) {
        echo "
          <tr>
            <td>$tampil->id_catatan</td>
            <td>$tampil->tgl_catatan</td>
            <td>$tampil->wkt_catatan</td>
            <td>$tampil->lokasi_catatan</td>
            <td>$tampil->suhu_tubuh</td>
            <td>
              <a href='proses/hapus-catatan-proses.php?id=$tampil->id_catatan&proses=hapus'>Hapus</a>
            </td>
          </tr>
        ";
      }
      ?>
    </tbody>
  </table>

</body>

</html>