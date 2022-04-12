<?php

require_once 'vendor/autoload.php';

use Hillel\Food\BeefShawarma;
use Hillel\Food\LambShawarma;
use Hillel\Food\ShawarmaOdesskaya;
use Hillel\Food\ShawarmaCalculator;

$firstOrder = new ShawarmaOdesskaya();
$secondOrder = new BeefShawarma();
$thirdOrder = new LambShawarma();


$basket = new ShawarmaCalculator();
$basket->add($firstOrder);
$basket->add($secondOrder);
$basket->add($thirdOrder);
var_dump($basket->ingredients());
var_dump($basket->getBasket());
var_dump($basket->getPrice());
