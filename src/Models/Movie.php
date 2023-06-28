<?php

namespace App\Models;

use App\Models\Actor;
use DateTime;

class Movie
{
  private int $id;
  private string $title;
  private DateTime $releaseDate;
  private array $actors = [];
  
  /**
   * @return int
   */
  public function getId():int 
  {
    return $this->id;
  }
  
  public function getTitle():string
  {
    return $this->title;
  }
  
  public function setTitle(string $title):void
  {
    $this->title = $title;
  }
  
  public function getReleaseDate():DateTime
  {
    return $this->releaseDate;
  }
  
  public function setReleaseDate(DateTime $releaseDate):void
  {
    $this->releaseDate = $releaseDate;
  }

  public function addActor(Actor $actor): void
    {
        $this->actors[] = $actor;
    }

    
    
    /**
     * @return array
     */
	public function getActors():array 
  {
		return $this->actors;
	}
	
	/**
	 * @param array $actors 
	 * @return self
	 */
  public function setActors(array $actors):void
  {
    $this->actors = $actors;
	}

  public function removeActor(Actor $actor): void
  {
      if(array_search($actor, $this->actors) !== true){
          unset ($this->actors, $actor);
      }
  }

}