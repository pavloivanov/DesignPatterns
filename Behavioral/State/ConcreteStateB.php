<?php

 class ConcreteStateB extends State
 {
    public function handle1()
    {
        echo "ConcreteStateB handles request1.\n";
    }

    public function handle2()
    {
        echo "ConcreteStateB handles request2.\n";
        echo "ConcreteStateB wants to change the state of the context.\n";

        $this->context->changeState(new ConcreteStateA);
    }
 }