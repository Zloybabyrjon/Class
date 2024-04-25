<?php

require "Tomato.php";

class TomatoBush
{
    public array $tomatoes = [];

    public function __construct(int $numTomatoes)
    {
        for ($i = 1; $i <= $numTomatoes; $i++) {
            $this->tomatoes[] = new Tomato($i);
        }
    }

    public function growAll(): void
    {
        foreach ($this->tomatoes as $tomato) {
            $tomato->grow();
        }
    }

    public function allAreRipe(): bool
    {
        foreach ($this->tomatoes as $tomato) {
            if (!$tomato->isRipe()) {
                return false;
            }
            return true;
        }
    }
    public function giveAwayAll(): array
    {
        return $this->tomatoes = [];
    }
}
