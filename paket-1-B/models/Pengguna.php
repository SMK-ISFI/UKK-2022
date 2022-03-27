<?php
require 'Connection.php';

class Pengguna extends Connection
{
  public $nik;
  public $password;
  public $nama_pengguna;
  public $alamat;

  public function __construct()
  {
    $this->con = $this->connect();
  }

  public function daftar()
  {
    $query = "INSERT INTO pengguna(nik, password, nama_pengguna) VALUES('$this->nik', '$this->password', '$this->nama_pengguna')";
    return $this->con->query($query);
  }

  public function login()
  {
    $query = "SELECT * FROM pengguna WHERE nik = '$this->nik' AND password = '$this->password'";
    return $this->con->query($query);
  }

  public function log($waktu)
  {
    $query = "INSERT INTO log(wkt_login) VALUES('$waktu')";
    return $this->con->query($query);
  }

  public function edit_pengguna($nik)
  {
    $query = "SELECT * FROM pengguna WHERE nik = '$nik'";
    return $this->con->query($query);
  }

  public function update_pengguna($nik)
  {
    $query = "UPDATE pengguna SET nik = '$this->nik', password = '$this->password', nama_pengguna = '$this->nama_pengguna', alamat = '$this->alamat' WHERE nik = '$nik'";
    return $this->con->query($query);
  }
}
