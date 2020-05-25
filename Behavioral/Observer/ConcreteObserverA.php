<?php


class ConcreteObserverA implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "ConcreteObserverA: Reacted to the event.\n";
    }
}