<?php

$bubbleSortStrategy = new BubbleSortStrategy();

$sortingApp = new SortingApp($bubbleSortStrategy);

$sortingApp->runSort([5, 2, 3, 4, 1]);