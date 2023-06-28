<?php

namespace App\Repository;

use App\Models\Movie;
use App\Services\PDOService;
use PDO;
// use DateTime;
use App\Models\Actor;

/**
 * Summary of MovieRepository
 */
class MovieRepository
{
  private PDOService $pdoService;
  private string $queryAll = 'SELECT * FROM movie';
  
  public function __construct()
  {
    $this->pdoService = new PDOService();
  }

  /**
   * Summary of findAllMovie
   * @return array
   */
  public function findAllMovie():array
  {
    return $this->pdoService->getPdo()->query($this->queryAll)->fetchAll();
  }

  /**
   * Summary of findOneMovie
   * @return \App\Models\Movie
   */
  public function findOneMovie():Movie
  {
    return $this->pdoService->getPdo()->query($this->queryAll)->fetchObject(movie::class);
  } 

  /**
   * Summary of findMovie
   * @return array
   */
  public function findMovie():array
  {
    return $this->pdoService->getPdo()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, movie::class);
  } 

  /**
  * Summary of findById
  * @param int $id
  * @return \App\Models\Movie|bool
  */
	public function findById(int $id):Movie|bool
  {
    $query = $this->pdoService->getPdo()->prepare('SELECT * FROM movie WHERE id= ?');
    $query->bindValue(1, $id);
    $query->execute();
    return $query->fetchObject(Movie::class);
  }

  /**
   * Summary of findByTitle
   * @param string $title
   * @return array|bool
   */
  public function findByTitle(string $title):array|bool
  {
    $query = $this->pdoService->getPdo()->prepare('SELECT * FROM movie WHERE title LIKE :title');
    $like = '%'. $title. '%';
    $query->bindParam(':title', $like);
    $query->execute();
    return $query->fetchAll($this->pdoService->getPdo()::FETCH_CLASS, Movie::class);
  }
  
  public function addMovie(Movie $movie):Movie
  {
    $query = $this->pdoService->getPdo()->prepare('INSERT INTO movie Value (NULL, :title, :release_date)');
    $title = $movie->getTitle();
    $releaseDate = $movie->getReleaseDate()->format('Y-m-d');
    $query->bindParam(':title', $title);
    $query->bindParam(':release_date', $releaseDate);
    $query->execute();
    return $movie;
  }

  public function addActorMovie(Movie $movie):Movie
  {
    $actors = $movie->getActors();
    foreach ($actors as $actor){

      $query = $this->pdoService->getPdo()->prepare('INSERT INTO movieactor Value (NULL, :id_actor, :id_movie)');
      $idActor = $actor->getId();
      $idMovie = $movie->getId();

      $query->bindParam(':id_actor', $idActor);
      $query->bindParam(':id_movie', $idMovie);
      $query->execute();
    }

    return $movie;
  }
}