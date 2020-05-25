<?php

$loginManager = new LoginManager();

$observerA = new ConcreteObserverA();
$loginManager->attach($observerA);

$observerB = new ConcreteObserverB();
$loginManager->attach($observerB);

$loginManager->authenticateUser();
