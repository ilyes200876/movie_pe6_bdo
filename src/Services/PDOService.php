<?php

namespace App\Service;

use PDO;

class PDOService
{
  protected PDO $pdo;

  private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=movies';
  private string $user ='root';
  private string $pwd ='';
}

