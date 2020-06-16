<?php

$p1 = new Prototype();
$p1->primitive = 245;
$p1->component = new \DateTime;
$p1->circularReference = new ComponentWithBackReference($p1);

$p2 = clone $p1;