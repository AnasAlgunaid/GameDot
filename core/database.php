<?php

class Database
{
  private $host = 'localhost';
  private $db_name = 'gamedot';
  private $port = '3308';
  private $username = 'root';
  private $password = '';
  private $connection;
  private $statement;

  public function __construct()
  {
    $this->connection = null;

    try {

      $this->connection = new PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db_name . ';user=' . $this->username);

      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

      echo 'Connection Error: ' . $e->getMessage();
    }
  }

  // Query function
  public function query($query, $params = [])
  {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }

  // Fetch all function
  public function qAll()
  {
    return $this->statement->fetchAll();
  }

  // Fetch single function
  public function q()
  {
    return $this->statement->fetch();
  }

  // Get or abort function
  public function qOrAbort()
  {
    $result = $this->statement->fetch();
    if (!$result) {
      abort('Data not found');
    }
    return $result;
  }

  // Get All or abort function
  public function qAllOrAbort()
  {
    $result = $this->statement->fetchAll();
    if (!$result) {
      abort('Data not found');
    }
    return $result;
  }

  // Get the number of rows
  public function rowCount()
  {
    return $this->statement->rowCount();
  }

  // Get the last inserted ID
  public function getLastInsertId()
  {
    return $this->connection->lastInsertId();
  }

  // Begin transaction
  public function beginTransaction()
  {
    return $this->connection->beginTransaction();
  }

  // Commit transaction
  public function commit()
  {
    return $this->connection->commit();
  }

  // Rollback transaction
  public function rollBack()
  {
    return $this->connection->rollBack();
  }
}
