<?php

include_once __DIR__ . '/component/header.php';

use App\Models\Actor;
use App\Models\Movie;
use App\Repository\MovieRepository;
use App\Repository\ActorRepository;
use App\Services\PDOService;



$movieRepository = new MovieRepository();
$actorRepository = new ActorRepository();

$movie = $movieRepository->findById(12);

$actor1 = $actorRepository->findById(1);
$actor2 = $actorRepository->findById(2);

$movie->addActor($actor1);
$movie->addActor($actor2);

dump($movieRepository->addActorMovie($movie));


