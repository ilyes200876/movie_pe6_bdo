<?php

namespace App\Services;

use App\Models\Movie;
use PDO;

class PDOService
{
  private PDO $pdo;

  private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=movies';
  private string $user ='root';
  private string $pwd ='';

  public function __construct()
  {
    $this->pdo = new PDO($this->dsn, $this->user, $this->pwd);
  }

  public function getDsn():string
  {
    return $this->dsn;
  }
  
  public function getUser():string
  {
    return $this->user;
  }

  public function getPwd():string
  {
    return $this->pwd;
  }

  public function findAllMovie():array
  {
    return $this->pdo->query('SELECT * FROM movie')->fetchAll();
  }

  // public function findMovie():Movie
  // {
  //   return $query = $this->pdo->query('SELECT * FROM movie')->fetchObject(movie::class);
  // } 

  public function findMovie()
  {
    return $query = $this->pdo->query('SELECT * FROM movie')->fetchAll(PDO::FETCH_CLASS, movie::class);
  } 
}

