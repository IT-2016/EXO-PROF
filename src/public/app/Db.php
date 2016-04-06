<?php


class Db
{
  private $host;
  private $user;
  private $pass;
  private $dbName;
  private $pdo;

  public function __construct(Array $config)
  {
    if (!array_key_exists('host', $config)) {
      throw new Exception('Le tableau config doit contenir un index host');
    }
    if (!array_key_exists('user', $config)) {
      throw new Exception('Le tableau config doit contenir un index user');
    }
    if (!array_key_exists('pass', $config)) {
      throw new Exception('Le tableau config doit contenir un index pass');
    }
    if (!array_key_exists('dbname', $config)) {
      throw new Exception('Le tableau config doit contenir un index dbname');
    }
     $this->host = $config['host'];
     $this->user = $config['user'];
     $this->pass = $config['pass'];
     $this->dbName = $config['dbname'];
  }

  public function connect()
  {
    $dsn = 'mysql:dbname=' . $this->dbName . ';host=' . $this->host;
    try {
      $this->pdo = new PDO($dsn, $this->user, $this->pass);
    } catch(Exception $e) {
      throw new Exception('Echec de la connexion MySQL');
    }
  }

  public function getConnection()
  {
    if (null === $this->pdo) {
      $this->connect();
    }
    return $this->pdo;
  }
}
