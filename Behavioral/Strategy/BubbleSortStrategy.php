<?php


class BubbleSortStrategy implements SortingStrategy
{
    public function sort(array $numbers): array
    {
        echo 'BubbleSortStrategy';

        return $numbers;
    }
}