<?php
require 'Connection.php';

class Pasien extends Connection
{
  public $nik;
  public $password;
  public $nama_pasien;
  public $alamat;

  public function __construct()
  {
    $this->con = $this->connect();
  }

  public function daftar()
  {
    $query = "INSERT INTO pasien(nik, password, nama_pasien) VALUES('$this->nik', '$this->password', '$this->nama_pasien')";
    return $this->con->query($query);
  }

  public function login()
  {
    $query = "SELECT * FROM pasien WHERE nik = '$this->nik' AND password = '$this->password'";
    return $this->con->query($query);
  }

  public function log($waktu)
  {
    $query = "INSERT INTO log(wkt_login) VALUES('$waktu')";
    return $this->con->query($query);
  }

  public function edit_pasien($nik)
  {
    $query = "SELECT * FROM pasien WHERE nik = '$nik'";
    return $this->con->query($query);
  }

  public function update_pasien($nik)
  {
    $query = "UPDATE pasien SET nik = '$this->nik', password = '$this->password', nama_pasien = '$this->nama_pasien', alamat = '$this->alamat' WHERE nik = '$nik'";
    return $this->con->query($query);
  }
}
