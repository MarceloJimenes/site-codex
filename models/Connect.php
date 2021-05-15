<?php

class Connect {

  public $conn;
  private $username = 'root';
  private $password = '';

  public function connect () {

    try {
      $this -> conn = new PDO('mysql:host=localhost;dbname=codex', $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }

}