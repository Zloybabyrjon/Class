<?php

require_once "ClassTomato.php";
require_once "ClassTomatoBush.php";

class Gardener
{
    public string $name;
    private TomatoBush $plant;

    public function __construct(string $name, TomatoBush $plant)
    {
        $this->name = $name;
        $this->plant = $plant;
    }
    public function work(): void
    {
        $this->plant->growAll();
    }
    public function harvest(): void
    {
        if ($this->plant->allAreRipe()) {
            echo 'Садовник ' . $this->name . ' собирает урожай!' . PHP_EOL;
            $this->plant->giveAwayAll();
        } else {
            echo 'Томаты еще не созрели!' . PHP_EOL;
        }
    }
    public static function KnowledgeBase(): void
    {
        echo "Справка по садоводству: " . PHP_EOL;
    }
}

$plant = new TomatoBush(3);
$gardener = new Gardener("Валера", $plant);

Gardener::KnowledgeBase();

$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
