<?php

class StdoutLogger implements LoggerInterface
{
    public function log(string $message): void {
        echo 'Log message to StdoutLogger:' . $message;
    }
}