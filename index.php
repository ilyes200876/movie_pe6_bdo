<?php

include_once __DIR__ . '/component/header.php';

use App\Services\PDOService;

// dump(new PDOService());

$pdo = new PDOService();

// dump($pdo->findAllMovie());
dump($pdo->findMovie());