<?php

require_once 'ConcreteComponent.php';
require_once 'ConcreteDecoratorA.php';
require_once 'ConcreteDecoratorB.php';

$concreteComponent = new ConcreteComponent();
echo $concreteComponent->operation() . "\n";

$concreteDecoratorA = new ConcreteDecoratorA($concreteComponent);
echo $concreteDecoratorA->operation() . "\n";

$concreteDecoratorB = new ConcreteDecoratorB($concreteDecoratorA);
echo $concreteDecoratorB->operation() . "\n";