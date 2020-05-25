<?php


class ConcreteObserverB implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "ConcreteObserverB: Reacted to the event.\n";
    }
}