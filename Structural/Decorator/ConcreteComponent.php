<?php
require_once 'Component.php';

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return 'ConcreteComponent';
    }
}