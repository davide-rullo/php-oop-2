<?php

require __DIR__ . '/../Models/product.php';
require __DIR__ . '/../Models/food.php';
require __DIR__ . '/../Models/toy.php';
require __DIR__ . '/../Models/kennel.php';



$toy1 = new Toy('ball', '4 €', "https://picsum.photos/200/300", 'dog', 'small', 'toy');
$toy2 = new Toy('peluche', '8 €', "https://picsum.photos/200/300", 'dog', 'medium', 'toy');

$food1 = new Food('meat', '10 €', "https://picsum.photos/200/300", 'cat', 'wet', 'food');
$food2 = new Food('vegetables', '9 €', "https://picsum.photos/200/300", 'dog', 'dry', 'food');

$kennel1 = new kennel('dog bed', '54.9 €', "https://picsum.photos/200/300", 'dog', 'big', 'kennel');
$kennel2 = new kennel('cat house', '45.9 €', "https://picsum.photos/200/300", 'cat', 'big', 'kennel');


$toys = [$toy1, $toy2];
$food_products = [$food1, $food2];
$kennels = [$kennel1, $kennel2];
