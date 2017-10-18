<?php

require('logger.php');
require_once('credentials.php');

class DbConnect
{
  public $conn;
  public function __construct($admin, $pass)
  {
    try {
      $this->conn = new PDO("mysql:host=127.0.0.1", $admin, $pass);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $this->conn;
    } catch(PDOException $e){
      logger("Connection failed: " . $e->getMessage());
    }
  }
  public function kill(){
    $this->conn = null;
  }
}
//$myconnection = new DbConnect('root', 'password');
