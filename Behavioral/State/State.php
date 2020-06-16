<?php

abstract class State
{
    protected Context $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }
    abstract public function handle1();
    abstract public function handle2();

}