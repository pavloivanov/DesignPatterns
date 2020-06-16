<?php

 class ConcreteStateA extends State
 {
    public function handle1()
    {
        echo "ConcreteStateA handles request1.\n";
        echo "ConcreteStateA wants to change the state of the context.\n";

        $this->context->changeState(new ConcreteStateB());
    }

    public function handle2()
    {
        echo "ConcreteStateA handles request2.\n";
    }
 }