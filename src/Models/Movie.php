<?php

namespace App\Models;


use DateTime;

class Movie
{
  private string $title;
  private DateTime $releaseDate;

  
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

  
}