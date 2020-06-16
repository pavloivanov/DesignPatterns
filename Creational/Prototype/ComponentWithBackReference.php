<?php

class ComponentWithBackReference
{
    public Prototype $prototype;

    public function __construct($prototype)
    {
        $this->prototype = $prototype;
    }
}