<?php

namespace App\Repository;

use App\Models\Actor;
use App\Services\PDOService;
use PDO;

/**
 * Summary of MovieRepository
 */
class ActorRepository
{
  private PDOService $pdoService;
  private string $queryAll = 'SELECT * FROM actor';
  
  public function __construct()
  {
    $this->pdoService = new PDOService();
  }

  /**
   * Summary of findAllMovie
   * @return array
   */
  public function findAllActor():array
  {
    return $this->pdoService->getPdo()->query($this->queryAll)->fetchAll();
  }

  /**
   * Summary of findOneMovie
   * @return \App\Models\Movie
   */
  public function findOneActor():Actor
  {
    return $this->pdoService->getPdo()->query($this->queryAll)->fetchObject(Actor::class);
  } 

  /**
   * Summary of findMovie
   * @return array
   */
  public function findActor():array
  {
    return $this->pdoService->getPdo()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Actor::class);
  } 

  /**
  * Summary of findById
  * @param int $id
  * @return \App\Models\Actor|bool
  */
	public function findById(int $id):Actor|bool
  {
    $query = $this->pdoService->getPdo()->prepare('SELECT * FROM actor WHERE id= ?');
    $query->bindValue(1, $id);
    $query->execute();
    return $query->fetchObject(Actor::class);
  }

  public function addActor(Actor $actor):Actor
  {
    $query = $this->pdoService->getPdo()->prepare('INSERT INTO actor Value (NULL, :first_name, :last_name)');
    $firstName = $actor->getFirstName();
    $lastName = $actor->getLastName();
    $query->bindParam(':first_name', $firstName);
    $query->bindParam(':last_name', $lastName);
    $query->execute();
    return $actor;
  }


}