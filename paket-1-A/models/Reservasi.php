<?php
require 'Connection.php';

class Reservasi extends Connection
{
  public $id_reservasi;
  public $nik;
  public $tgl_reservasi;
  public $wkt_reservasi;
  public $nm_dokter;
  public $keluhan;

  public function __construct()
  {
    $this->con = $this->connect();
  }

  public function tambah_reservasi()
  {
    $query = "INSERT INTO reservasi(id_reservasi, nik, tgl_reservasi, wkt_reservasi, nm_dokter, keluhan) VALUES('$this->id_reservasi', '$this->nik', '$this->tgl_reservasi', '$this->wkt_reservasi', '$this->nm_dokter', '$this->keluhan')";
    return $this->con->query($query);
  }

  public function tampil_reservasi($nik, $urut = 'DESC')
  {
    $query = "SELECT * FROM reservasi WHERE nik = '$nik' ORDER BY tgl_reservasi $urut";
    return $this->con->query($query);
  }

  public function hapus_reservasi($id)
  {
    $query = "DELETE FROM reservasi WHERE id_reservasi = '$id'";
    return $this->con->query($query);
  }
}
