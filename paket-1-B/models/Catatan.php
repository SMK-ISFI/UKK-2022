<?php
require 'Connection.php';

class Catatan extends Connection
{
  public $id_catatan;
  public $nik;
  public $tgl_catatan;
  public $wkt_rcatatan;
  public $lokasi_catatan;
  public $suhu_tubuh;

  public function __construct()
  {
    $this->con = $this->connect();
  }

  public function tambah_catatan()
  {
    $query = "INSERT INTO catatan(id_catatan, nik, tgl_catatan, wkt_catatan, lokasi_catatan, suhu_tubuh) VALUES('$this->id_catatan', '$this->nik', '$this->tgl_catatan', '$this->wkt_catatan', '$this->lokasi_catatan', '$this->suhu_tubuh')";
    return $this->con->query($query);
  }

  public function tampil_catatan($nik, $urut = 'DESC')
  {
    $query = "SELECT * FROM catatan WHERE nik = '$nik' ORDER BY tgl_catatan $urut";
    return $this->con->query($query);
  }

  public function hapus_catatan($id)
  {
    $query = "DELETE FROM catatan WHERE id_catatan = '$id'";
    return $this->con->query($query);
  }
}
