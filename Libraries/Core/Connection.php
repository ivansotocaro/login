<?php

class Connection{
  private $server;
  private $user;
  private $pass;
  private $db;
  private $pdo;

  function __construct()
  {
    $this->server = SERVER;
    $this->user = USER;
    $this->pass = PASS;
    $this->db = DB;
    $this->configConnect();
  }

  private function configConnect()
  {
      $dns = "mysql:host=".$this->server.";dbname=".$this->db;
      try {
          $this->pdo = new PDO($dns, $this->user, $this->pass);
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "<script>alert('Conectado')</script>";
      } catch (PDOException $e) {
      // echo "<script>alert('Error al conectarse a la db')</script>";
          echo 'Error al conectarse a la db ' .$e->getMessage();
      }
  }

  function connect(): PDO
  {
    return $this->pdo;
  }


}
