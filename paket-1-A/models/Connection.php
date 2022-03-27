<?php

class Connection
{
  public function connect()
  {
    return new mysqli("localhost", "root", "", "db_reservasi_6371041809910003");
  }
}
