<?php

class Tomato
{
    public const NOTHING = 0;
    public const FLOWER = 1;
    public const CREEN_TOMATO = 2;
    public const RED_TOMATO = 3;

    private int $index;
    private int $state;

    public function __construct(int $index)
    {
        $this->index = $index;
        $this->state = self::NOTHING;
    }
    public function grow(): void
    {
        if ($this->state < self::RED_TOMATO) {
            $this->state++;
        }
    }
    public function isRipe(): bool
    {
        return $this->state === self::RED_TOMATO;
    }
}
