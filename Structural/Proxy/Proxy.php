<?php

class Proxy implements Subject
{
    public Subject $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }
    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->subject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        echo "Proxy: Checking access prior to firing a real request.\n";

        return true;
    }

    private function logAccess()
    {
        echo "Proxy: Logging the time of request.\n";
    }
}