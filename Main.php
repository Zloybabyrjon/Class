<?php

require_once 'Gardener.php';
require_once 'TomatoBush.php';


$plant = new TomatoBush(3);
$gardener = new Gardener("Валера", $plant);

Gardener::knowledgeBase();

$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
