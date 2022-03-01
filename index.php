<?php

require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/User.php";

$item1 = new Toy("palla", 9.90, "plastica gommosa" );
$item2 = new Food("crocchette", 10.90, "2022-10-30");

$user1 = new User("Pippo", true);

$user1->addToCart($item1);
$user1->addToCart($item2);





?>