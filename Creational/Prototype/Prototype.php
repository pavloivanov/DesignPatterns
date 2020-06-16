<?php

class Prototype
{
    public int $primitive;

    public \DateTime $component;

    public ComponentWithBackReference $circularReference;

    public function __clone()
    {
        $this->component = clone $this->component;
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}