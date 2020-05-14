<?php


class SortingApp
{
    private SortingStrategy $strategy;

    public function __construct(SortingStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function runSort(array $numbers) {
        $this->strategy->sort($numbers);
    }
}