<?php

include_once __DIR__ . '/component/header.php';

use App\Repository\MovieRepository;
use App\Services\PDOService;

// dump(new PDOService());

$pdo = new MovieRepository();

dump($pdo->findAllMovie());
dump($pdo->findOneMovie());
dump($pdo->findMovie());