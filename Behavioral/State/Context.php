<?php

class Context
{
    private State $state;

    public function __construct(State $state) {
        $this->changeState($state);
    }

    public function changeState(State $state)
    {
        echo "Context: Change state to " . get_class($state) . ".\n";

        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1()
    {
        $this->state->handle1();
    }

    public function request2()
    {
        $this->state->handle2();
    }
}