<?php

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();

$context->changeState(new ConcreteStateB());