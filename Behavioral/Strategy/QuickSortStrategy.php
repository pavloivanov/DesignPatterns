<?php


class QuickSortStrategy implements SortingStrategy
{
    public function sort(array $numbers): array
    {
        echo 'QuickSortStrategy';

        return $numbers;
    }
}