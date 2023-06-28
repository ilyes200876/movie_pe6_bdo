<?php

include_once __DIR__ . '/component/header.php';

use App\Models\Actor;
use App\Models\Movie;
use App\Repository\MovieRepository;
use App\Repository\ActorRepository;
use App\Services\PDOService;

// dump(new PDOService());

$pdo = new MovieRepository();
$pdo1 = new ActorRepository();
$pdo2 = new ActorRepository();
$actor = new Actor();
$actor1 = new Actor();
$actor->setFirstName("Emma");
$actor->setLastName("Watson");
$movie = new Movie;
$movie1 = new Movie;

dump($pdo->findAllMovie());
// dump($pdo1->findAllActor());
// dump($pdo1->findOneActor());
// dump($pdo1->findActor());
// dump($pdo1->findById(2));

$movie->addActor($pdo1->findById(1));
$movie->addActor($pdo1->findById(2));

// dump($movie);

$movie->removeActor($pdo1->findById(2));

$movie1->setTitle('American Pie 6');


$movie1->setReleaseDate(new DateTime('2002-02-20'));

// dump($movie);

// dump($pdo->findByTitle('Harry Potter'));
// dump($pdo->findByTitle('trees'));


dump($pdo->addMovie($movie1));

$actor1->setFirstName('Jhonny');
$actor1->setLastName('Depp');

dump($pdo1->addActor($actor1));



