<?php
include_once('connection_variable.php');
class PdoConnect
{
  private $host = host;
  private $user = user;
  private $pass = pass;
  private $dbname = dbname;
  public $dbc;
  public $error;
  private $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  private $dsn;
  public function __construct()
  {
    $this->dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
    try {
      $this->dbc = new PDO($this->dsn, $this->user, $this->pass, $this->option);
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
}
